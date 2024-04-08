<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


function uploadProfilePicture($conn, $username, $profilePicture) {
    $uploadSql = "UPDATE users SET profile_picture=:profile_picture WHERE username=:username";

    $stmt = $conn->prepare($uploadSql);
    $stmt->bindParam(':profile_picture', $profilePicture);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    return true;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $username = $_POST['username'];
    $file = $_FILES['file'];

    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) { 
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);

                
                try {
                    uploadProfilePicture($conn, $username, $fileDestination);
                    echo "Profile picture uploaded successfully.";
                } catch(PDOException $e) {
                    echo "Error uploading profile picture: " . $e->getMessage();
                }
            } else {
                echo "File is too large.";
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file type.";
    }
}
?>