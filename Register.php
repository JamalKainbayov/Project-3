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
<form method="POST" action="Register.php" class= "login">
    <label for="username">Username:</label>
    <input type="text" name="username" autocomplete="off"><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <a class=JxN href="#"> Forgot password?<a>
            <input type="submit" value="Log in">
            <button type="submit">Register</button>
</form>
</body>
<?php
include "conn.php";

$encrypt_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$insert_user = $conn->prepare("INSERT INTO user_info (Username, Password) VALUES (:gebruikersnaam, :wachtwoord)");
$insert_user->bindParam(":gebruikersnaam", $_POST["username"]);
$insert_user->bindParam(":wachtwoord", $encrypt_password);
$insert_user->execute();


?>
</html>