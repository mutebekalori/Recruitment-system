<?php
session_start();

// Unseting  all session variables
$_SESSION = array();

// Destroying the session
session_destroy();

// Redirecting  to the login page
header("Location: login.php");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 100px;
        }

        .logout-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .message {
            margin-top: 20px;
            color: #555;
        }

        .login-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>Logout Successful</h2>
        <p class="message">You have been successfully logged out.</p>
        <a href="login.php" class="login-link">Login Again</a>
    </div>
</body>
</html>
