<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Login</title>
</head>
<style>
    <?php include "Css/main.css"?>
</style>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="Login.php" method="post">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <a href="Login.php">Already have an account? Click here to log in!</a>
        <input type="submit" value="Login">
    </form>

</div>
</body>
<?php
require "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $encrypt_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $insert_user = $conn->prepare("INSERT INTO user_info (Username, Password) VALUES (:gebruikersnaam, :wachtwoord)");
    $insert_user->bindParam(":gebruikersnaam", $_POST['username']);
    $insert_user->bindParam(":wachtwoord", $encrypt_password);

    if ($insert_user->execute()) {
        header("Location: Login.php");
        exit;
    }
}
?>
</html>
