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
                <i class="fa-solid fa-arrow-left"></i>
                    <h3>Username</h3> 
                </div> 
                <div class="grijs"> 
                    <img src="profiel.png" alt="profile"> 
                </div> 
                <a href="update.profiel.php" target="_blank"><button class="edit-profile-btn">Edit Profile</button></a>  
                <div class="profile7"> <h3>Username</h3> <h5>E-mail</h5> <h7>Joined January 2019</h7> 
                <div class="button-container"> 
                    <button class="button">Following: 23</button> <button class="button">Followers: 1</button> 
                </div> 
            </div>
            <?php
            require_once 'index.php';?>
    </body>
</html>
