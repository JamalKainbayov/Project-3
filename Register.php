<?php
include "conn.php";
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $check_username_query = $conn->prepare("SELECT COUNT(*) FROM user_info WHERE Username = :username");
        $check_username_query->bindParam(':username', $username);
        $check_username_query->execute();
        $count = $check_username_query->fetchColumn();

        if ($count > 0) {
            $message = "Username already exists. Please choose a different username.";
        } else {
            $encrypt_password = password_hash($password, PASSWORD_DEFAULT);

            $insert_user = $conn->prepare("INSERT INTO user_info (Username, Password) VALUES (:username, :password)");
            $insert_user->bindParam(":username", $username);
            $insert_user->bindParam(":password", $encrypt_password);

            if ($insert_user->execute()) {
                header("Location: Login.php");
                exit;
            } else {
                $message = "Error: Something went wrong. Please try again later.";
            }
        }
    } else {
        $message = "Username and password cannot be empty.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Register</title>
    <style>
        <?php include "Css/form.css" ?>
    </style>
</head>

<body>
    <h1 class="welkom">Welcome to Chirpify</h1>
    <form method="POST" action="Register.php" class="gtr">
        <div class="form-css">
            <i class="fas fa-user"></i> <label for="username">Username:</label>
            <input type="text" name="username" autocomplete="off" required>
        </div>
        <div class="form-css">
            <i class="fas fa-lock"></i> <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <a href="Login.php"> Already have an account?</a>
        <div id="message">
            <?php echo $message; ?>
        </div>
        <button type="submit" class="btn">Register</button>

        <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright: -->
            <a class="text-body" href="team.php">About us</a>
        </div>
    </form>

</body>

</html>