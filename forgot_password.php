<?php
include "conn.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $newPassword = $_POST["password"];


    $stmt = $conn->prepare("SELECT * FROM user_info WHERE Username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {

        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE user_info SET Password = :password WHERE Username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        header("Location: login.php");
        exit;
    } else {
        $message= "Invalid username or password.";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Password_update</title>
</head>
<style>
  <?php  include "Css/form.css"; ?>
</style>
<body>

<form method="POST" action="forgot_password.php" class= "gtr">
    <h1 class="welkom">Reset password</h1>
    <div class="form-css">
        <label for="username">Username:</label>
        <input type="text" name="username" autocomplete="off">
    </div>
    <div class="form-css">
        <label for="password">New password:</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit" class="btn">Apply</button>
    <div id="message">
        <?php echo $message; ?>
    </div>
</form>
</body>
</html>

