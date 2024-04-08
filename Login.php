
<?php
require "conn.php";
session_start();
// echo $_POST["password"];

$search_user = $conn->prepare("SELECT * FROM user_info WHERE Username = :gebruikersnaam");
$search_user->bindParam(":gebruikersnaam", $_POST["username"]);
$search_user->execute();
$user = $search_user->fetch(PDO::FETCH_ASSOC);
var_dump($user);

if ($user) {
    if (password_verify($_POST["password"], $user["Password"])) {
        echo $user['Id'];
        $_SESSION['Username'] = $user['Username'];
        $_SESSION['Id'] = $user['Id'];
        echo "<script>window.open('function.php', '_self')</script>";
    } else {
        echo "<script>alert('Your Username or Password is incorrect')</script>";
    }
} else {
    echo "<script>alert('User not found')</script>";
}
?>
</html>







