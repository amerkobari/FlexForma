<?php

session_start();
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
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get login data
    $login_username = $_POST['username'];
    $login_password = $_POST['password'];

    // Check if username and password match in the database
    $checkLoginQuery = "SELECT * FROM `newaccount` WHERE `username` = '$login_username' AND `password` = SHA1('$login_password')";
    $loginResult = $db->query($checkLoginQuery);

    if ($loginResult->num_rows > 0) {
        // Login successful
        echo "<script>alert('Login successful!'); window.location.href = 'home.php';</script>";
        $_SESSION['username'] = $login_username;
        exit; // Stop the script after redirecting
    } else {
        // Login failed
        echo "<script>alert('Invalid username or password');</script>";
    }

    // Close the database connection
    $db->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css.css" />
    <link rel="stylesheet" href="signin.css" />
</head>
<style>

    body {
        background-image: url("img/loginwallapper.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        font-family: 'fantasy','Copperplate','sans-serif';
    }
</style>
<body>
<header>
    <div class="flex-container">
        <img alt="image" src="img/ff.png" onclick="window.location.href='home.php'" class="home-image2" id="waleed"/>
        <a   class="JOINNOW" href="#" onclick="window.location.href='JOIN.php'">JOIN NOW</a>
</div>
</header>

<div class="LOGINFORM">
    <form action="Login.php"  method="post">
        <div class="login-label">LOGIN</div>
        <label style="font-size: 20px;" for="username">Username:</label>
        <input type="text" id="username" name="username" required autocomplete="off">

        <label style="font-size: 20px;" for="password">Password:</label>
        <input  type="password" id="password" name="password" required autocomplete="off">
       <div class="logbut"> <button type="submit">Login</button>
       </div>

        <div class="forgot-password">
            <a href="EmailSender.php">Forgot your password?</a>
        </div>
    </form>
</div>
</body>
