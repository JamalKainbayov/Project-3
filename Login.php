<?php
session_start();
require "conn.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $conn->prepare("SELECT * FROM user_info WHERE Username = :Username");
    $sql->bindParam(':Username', $username);
    $sql->execute();
    $result = $sql->fetch();

    if ($result) {
        if (password_verify($password, $result['Password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['Id'] = $result['Id'];
            header("Location: function.php");
            exit();
        } else {
            $message = "Invalid username or password.";
        }
    } else {
        $message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Login</title>
    <style>
        <?php include "Css/form.css"?>
    </style>
</head>
<body>

<form method="POST" action="Login.php" class="gtr">
    <h1 class="welkom">Login</h1>
    <div class="form-css">
        <i class="fas fa-user"></i>    <label for="username">Username:</label>
        <input type="text" name="username" autocomplete="off">
    </div>
    <div class="form-css">
        <i class="fas fa-user"></i>    <label for="password">Password:</label>
        <input type="password" name="password" required>
    </div>
    <a href="forgot_password.php"> Forgot password?</a>
    <a class="register-link" href="register.php">Register here!</a>
    <div id="message">
        <?php echo $message; ?>
    </div>
    <button type="submit" class="btn">Log in</button>
</form>
</body>
</html>






