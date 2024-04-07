<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profiel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
<script> 
function changeButtonText() 
{ var fileInput = document.getElementById("imageInput"); 
    var submitButton = document.getElementById("submitButton");
        if (fileInput.files.length > 0) { submitButton.value = "Verander je foto"; }
            else { submitButton.value = "Upload Image"; } }
</script>
</head>
<body>
    <div class="content">
    <div class="center">
        <a href="#"> <i class="fa-solid fa-arrow-left"></i></a>
        <h3>Koko Tengaa Po</h3> </div> <div class="grijs">
            <img src="images/mounty.jpg" alt="porofile"> </div>
            <button class="edit-profile-btn">Edit Profile</button>
        <div class="profile7"> <h3>Koko Tengaa Po</h3> <h5>marjer@gmail.com</h5> <h7>Joined January 2019</h7>
        <div class="button-container"> <button class="button">Following: 23</button>
        <button class="button">Followers: 1</button> </div> </div>
        <div class="nap"> <img src="images/testen.png" alt="porofile"> </div>
    </body>
</html>