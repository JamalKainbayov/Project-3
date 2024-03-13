<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
</head>
<style>
    <?php include "Css/main.css"?>
</style>
<body>
   
<form method="POST" action="Register.php" class= "login">
    <label for="username">Username:</label>
    <label>
        <input type="text" name="username" autocomplete="off">
    </label><br>
    <label for="password">Password:</label>
    <label>
        <input type="password" name="password" required>
    </label><br>
        <a class=JxN href="#"> Forgot password?<a>
        <input type="submit" value="Log in">
        <button type="submit">Register</button>

</form>  
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
