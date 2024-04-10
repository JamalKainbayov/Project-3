<?php
include "index.php";
include "conn.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Password_update</title>
</head>

<body>
<form method="POST" action="Login.php" class= "login">
    <label for="username">Username:</label>
    <input type="text" name="username" autocomplete="off"><br>
    <label for="password">New password:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Apply</button>
</form>
</body>
</html>

