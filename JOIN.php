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
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword'])) {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];

    // Check if username or email already exist
    $checkQuery = "SELECT * FROM `newaccount` WHERE `username` = '$username' OR `email` = '$email'";
    $result = $db->query($checkQuery);

    if ($result->num_rows > 0) {
        // Username or email already exists
        echo "<script>alert('Username or email already exists. Please choose a different username or email.');</script>";
    } else {
        // Check if passwords match
        if ($password != $confirmPassword) {
            echo "<script>alert('Passwords do not match');</script>";
        } else {
            // Insert new record into the first table with hashed password
            $hashedPassword = sha1($password);
            $insertCredentialQuery = "INSERT INTO `newaccount` (`username`, `password`, `email`) VALUES ('$username', '$hashedPassword', '$email')";
            $db->query($insertCredentialQuery);

            // Get the user ID of the newly inserted record
            $userID = $db->insert_id;

            // Insert data into the second table using the obtained user ID
            $insertDetailsQuery = "INSERT INTO `newaccount2` (`username1`,`phone`, `age`, `height`, `weight`, `gender`) VALUES ('$username', '$phone', '$age', '$height', '$weight', '$gender')";
            $db->query($insertDetailsQuery);

            echo "<script>alert('Account created successfully.');</script>";
//            if ($db->query($insertCredentialQuery)) {
//
            $to = $email;
//Email subject
            $subject = "Welcome to FlexForma";
//Read the content of the file
            $filename = 'cbum.png';
            $content = file_get_contents($filename);
            $content = chunk_split(base64_encode($content));
//Generate random hash number
            $separator = md5(microtime(true));

//Message configuration
            $message = "--" . $separator . "\r\n";
            $message .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . "\r\n";
            $message .= "Content-Transfer-Encoding: 16bit" . "\r\n";
            $message .= "Thank you for choosing FlexForma, You're ready to start your journey" . "\r\n";
            $message .= "--" . $separator . "\r\n";
            $message .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . "\r\n";
            $message .= "Content-Transfer-Encoding: base64" . "\r\n";
            $message .= "Content-Disposition: attachment" . "\r\n";
            $message .= $content . "\r\n";
            $message .= "--" . $separator . "--";

//Header information
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= "From: Admin <admin@fahmidasclassroom.com>" . "\r\n";
            $headers .= "Reply-To: Admin <admin@fahmidasclassroom.com>" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . "\r\n";

//Send email

            if (mail($to, $subject, $message, $headers))
                echo "Email sent successfully.";
            else
                echo "Unable to send the email.";


            echo "<script>alert('Registration successful!');</script>";
            header("Location: Login.php");


            $db->close();

        }
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
    <link rel="stylesheet" href="JOINCSS.css" />
</head>
<style>
    body{
        font-family: 'fantasy','Copperplate','sans-serif';
    }
</style>
<body>
<header>
    <div class="flex-container">
        <img alt="image" src="img/ff.png" onclick="window.location.href='home.php'" class="home-image2" id="waleed"/>
        <a   class="JOINNOW" href="#" onclick="window.location.href='Login.php'">SIGN IN</a>
    </div>
</header>
    <div class="container">
        <div class="column image-column">
            <img src="img/cbum.png" class="home-image" id="waleed"/>
        </div>
        <div class="column create-account-column">
            <form action="JOIN.php" method="post">
                <div class="login-label">Create Account</div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required autocomplete="off">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required autocomplete="off">

                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required autocomplete="off">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required autocomplete="off">

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required autocomplete="off">

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required autocomplete="off">

                <label for="height">Height:</label>
                <input type="number" id="height" name="height" required autocomplete="off">

                <label for="weight">Weight:</label>
                <input type="number" id="weight" name="weight" required autocomplete="off">

                <label for="gender">Gender:</label>
                <div class="custom-select" style="width:200px;">
                    <select  name="gender">
                        <option value="0">Male</option>
                        <option value="1">Female</option>

                    </select>
                </div>

                <div class="logbut">
                    <button  style="border-radius: inherit" type="submit">CREATE NEW ACCOUNT</button>
                </div>


            </form>
        </div>


    </div>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const emailInput = document.getElementById('email');
        const form = document.querySelector('form');

        form.addEventListener('submit', function (event) {
            // Prevent the form from submitting
            event.preventDefault();

            // Get the email value
            const emailValue = emailInput.value;

            // Store the email in local storage
            localStorage.setItem('userEmail', emailValue);

            // Submit the form
            form.submit();
        });
    });
</script>
