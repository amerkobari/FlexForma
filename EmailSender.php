<?php

// Database connection details
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'amer';
$db_port = 3306;

// Create a new mysqli connection
$db = @new mysqli($servername, $username, $password, $dbname, $db_port);

// Check the connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Check if form is submitted
if (isset($_POST['email'])) {
    // Get login data
    $myemail = $_POST['email'];

    // Generate a random password
    $randomPassword = generateRandomPassword();

    // Encrypt the random password using SHA1
    $encryptedPassword = sha1($randomPassword);

    // Update the password in the database
    $updatePasswordQuery = "UPDATE `newaccount` SET `password` = '$encryptedPassword' WHERE `email` = '$myemail'";
    $db->query($updatePasswordQuery);

    // Now, send the unencrypted random password via email
    $to = $myemail;
    $subject = "Your New Password";
    $message = "Your new password is: " . $randomPassword;
    $headers = "From: Admin <admin@fahmidasclassroom.com>\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
        header("Location: Login.php");
    } else {
        echo "Unable to send the email.";
    }
}

// Function to generate a random password
function generateRandomPassword($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

$db->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restore Password</title>
    <link rel="stylesheet" href="css.css" />
    <link rel="stylesheet" href="signin.css" />
</head>
<body>
<style>
    body {
        background-image: url("img/restorewallpaper.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        font-family: 'fantasy','Copperplate','sans-serif';
    }
</style>
<header>
    <div class="flex-container">
        <img alt="image" src="img/ff.png" onclick="window.location.href='home.php'" class="home-image2" id="waleed"/>
        <a class="glow"  onclick="window.location.href='Login.php'">BACK</a>
    </div>
    <div class="LOGINFORM">
        <form action="EmailSender.php"  method="post" style="width: 700px; height: 200px; background-color: #070f29;">
            <div class="login-label">Restore your password</div>
            <label for="email">Enter your email:</label>
            <input type="text" id="email" name="email" required autocomplete="off">
            <div class="logbut"> <button type="submit" onclick="window.location.href='Login.php'">Send via email</button>
            </div>
        </form>
    </div>
</header>
