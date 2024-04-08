
<?php require "Index.php" ?>
<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profiel.css">

</head>
<body>
    <div class="content">
    <div class="center">
        <a href="#"> <i class="fa-solid fa-arrow-left"></i></a>
        <h3>Username</h3> </div> <div class="grijs">
            <img src="profiel.png" alt="profiel foto"> </div>
            <a href="update.profie.php"> <button class="edit-profile-btn">Edit Profile</button></a>
        <div class="profile7"> <h3>Username</h3> <h5>E-mail</h5> <h7>Joined January 2019</h7>
        <div class="button-container"> <button class="button">Following: 69</button>
        <button class="button">Followers: 4</button> </div>
<script> 
function changeButtonText() 
{ var fileInput = document.getElementById("imageInput"); 
    var submitButton = document.getElementById("submitButton");
        if (fileInput.files.length > 0) { submitButton.value = "Verander je foto"; }
            else { submitButton.value = "Upload Image"; } }
</script>
</body>
</html>