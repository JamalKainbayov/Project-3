<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style2.css">
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
    <div class="menu">
        <img src="images/xxx.jpeg" alt="porofile">
        <Ul> 
            <li class="active"> <div class="img-box"> <img src="xxx.jpeg" alt="porofile">
    </div>
    </li>
    <li>
        <a href="home.php">
        <i class="fas fa-home"></i> 
        <p>Home</p> </a></li>
        <li> <a href="#"> <i class="fas fa-search"></i>
        <p>Explore</p> </a> </li> 
        <li><a href="#"> <i class="fa-regular fa-bell"></i>
        <p>Notififcations</p> </a> </li> 
        <li><a href="#"> <i class="fa-regular fa-message"></i>
        <p>Masseges</p> </a> </li>
        <li><a href="#"> <i class="fa-solid fa-list"></i>
        <p>Lists</p> </a> </li>
        <li> <a href="#"> <i class="fa-solid fa-group-arrows-rotate"></i>
        <p>Communities</p> </a> </li>
        <li> <a href="#"> <i class="fa-solid fa-xmark"></i>
        <p>Premium</p> </a> </li>
        <li> <a href="#"> <i class="fa-light fa-user"></i>
        <p>Profile</p> </a> </li>
        <li class="log-out"> <a href="index.html">
        <p>Post</p> </a> </li>
        <li class="log-out">
            <a href="logout.php" class="btn btn-warning">Logout</a>
        <i class="fas fa-sign-out"></i> </a> </li> </Ul> </div>
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