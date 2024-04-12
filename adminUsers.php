<?php
include "conn.php";
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    // Redirect the user to another page or display an error message
    header("Location: unauthorized.php");
    exit(); // Ensure script stops executing after redirection
}

// Check if form is submitted
if(isset($_POST['delete_user'])) {
    // Get the user ID to delete
    $user_id = $_POST['delete_user'];
    // Prepare a delete statement
    $stmt = $conn->prepare("DELETE FROM user_info WHERE id = ?");
    // Execute the delete statement
    $stmt->execute([$user_id]);
    // Redirect to the same page after deletion
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Fetch users from the database with username, password, and email
$stmt = $conn->query("SELECT id, username, password FROM user_info");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Css/main.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/tweet_box.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script defer src="navscript.js"></script>
</head>
<body>
    <?php require "adminNav.php" ?>
    <header class="adminContent">
        <h1>Users</h1>
        <form method="post">
            <table class= "adminUsers">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th class="thDelete">Delete</th>
                </tr>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['password'] ?></td>
                        <td class ="delButton1">
                            <button type="submit" class="deleteButton" name="delete_user" value="<?= $user['id'] ?>">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </form>
    </header>
</body>
</html>
