<?php
include("conn.php");
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Update profile function
function updateProfile($conn, $email, $username, $password, $bio) {
    $emailSql = "UPDATE email SET email=:email WHERE id=1";
    $usernameSql = "UPDATE username SET username=:username WHERE id=1";
    $passwordSql = "UPDATE password SET password=:password WHERE id=1";
    $bioSql = "UPDATE bio SET bio=:bio WHERE id=1";
    
    $stmtEmail = $conn->prepare($emailSql);
    $stmtEmail->bindParam(':email', $email);
    $stmtEmail->execute();

    $stmtUsername = $conn->prepare($usernameSql);
    $stmtUsername->bindParam(':username', $username);
    $stmtUsername->execute();

    $stmtPassword = $conn->prepare($passwordSql);
    $stmtPassword->bindParam(':password', $password);
    $stmtPassword->execute();

    $stmtBio = $conn->prepare($bioSql);
    $stmtBio->bindParam(':bio', $bio);
    $stmtBio->execute();

    return true;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];

    // Call updateProfile function
    try {
        updateProfile($conn, $email, $username, $password, $bio);
        echo "Profile updated successfully.";
    } catch(PDOException $e) {
        echo "Error updating profile: " . $e->getMessage();
    }
}
?>