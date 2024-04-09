<?php

include("conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="update.profiel.css">
</head>
<body>
    <div class="update-profile-container">
        <form class="update-profile-form" action="update_profile.php" method="post">
            <h2>Update Profile</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea id="bio" name="bio" placeholder="Enter your bio"></textarea>
            </div>
            <div class="buttons">
                <button type="submit">Update</button>
                <a href="upload.profiel.php" class="button">Upload Profile Picture</a>
            </div>
        </form>
    </div>
</body>
</html>