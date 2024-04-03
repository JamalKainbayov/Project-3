<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Register</title>
</head>
<style>
    <?php include "Css/main.css"?>
</style>
<body>
<form method="POST" action="Register.php" class= "register">
    <label for="username">Username:</label>
    <input type="text" name="username" autocomplete="off" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>
</body>
<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];


        $check_username_query = $conn->prepare("SELECT COUNT(*) FROM user_info WHERE Username = :username");
        $check_username_query->bindParam(':username', $username);
        $check_username_query->execute();
        $count = $check_username_query->fetchColumn();

        if ($count > 0) {
            echo "Username already exists. Please choose a different username.";
        } else {
            $encrypt_password = password_hash($password, PASSWORD_DEFAULT);

            $insert_user = $conn->prepare("INSERT INTO user_info (Username, Password) VALUES (:gebruikersnaam, :wachtwoord)");
            $insert_user->bindParam(":gebruikersnaam", $username);
            $insert_user->bindParam(":wachtwoord", $encrypt_password);

            if ($insert_user->execute()) {
                header("Location: Login.php");
                exit;
            } else {
                echo "Error occurred while registering.";
            }
        }
    } else {
        echo "Username or password cannot be empty.";
    }
}
?>
</html>