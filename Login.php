<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/main.css"> <!-- Link to external CSS file -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Login</title>
</head>
<body>
<form method="POST" action="Login.php" class="login">
    <label for="username">Username:</label>
    <input type="text" name="username" autocomplete="off"><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <a class="JxN" href="#"> Forgot password?</a>
    <button type="submit">Login</button>
</form>
</body>
<?php
session_start();

require "conn.php";

//
//if ($conn) {
//    die("Connection failed: " . $conn);
//}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
    $sql = $conn->prepare("SELECT * FROM user_info WHERE Username = :Username");
    $sql->bindParam(':Username', $username);
    $sql->execute();
    $result = $sql->fetch();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {

            $_SESSION['username'] = $username;
            header("Location: function.php");
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";

}
?>
</html>







