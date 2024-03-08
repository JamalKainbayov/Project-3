<?php
require "conn.php"
?>
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
   
<form method="POST" action="Login.php" class= "login">
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

$existingUser = $conn->query("SELECT * FROM user_info WHERE username = '$username'")->fetch();

        if ($existingUser) {
            echo "Username already exists. Please choose a different username.";
        } else {

            $sql = "INSERT INTO user_info (username, password) VALUES ('$username', '$password')";
            $conn->exec($sql);

        }
    $conn = null; 
    }       
?>
</html>
