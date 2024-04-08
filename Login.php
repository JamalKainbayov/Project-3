
<?php
session_start();

require "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$sql = $conn->prepare("SELECT * FROM user_info WHERE Username = :Username");
$sql->bindParam(':Username', $username);
$sql->execute();
$result = $sql->fetch();

if ($result) {
    if (password_verify($password, $result['Password'])) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['Id'] = $result['Id'];
        header("Location: function.php");
        exit();
    } else {
        echo "Invalid username or password.";
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
            <button type="submit">Login</button>
</form>
</body>
</html>







