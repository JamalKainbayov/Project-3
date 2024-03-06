<?php
require "conn.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="Login.php" class=>
        <label for="username">Username:</label>
        <input type="text" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <a class=JxN href="#"> Forgot password?<a>
        <input type="submit" value="Log in">
    </form>
</body>
<?php 
 $existingUser = $conn->query("SELECT * FROM user_info WHERE username = '$username'")->fetch();

        if ($existingUser) {
            echo "Username already exists. Please choose a different username.";
        } else {

            $sql = "INSERT INTO user_info (username, password) VALUES ('$username', '$password')";
            $conn->exec($sql);

        }
    $conn = null; 
        
?>
</html>
