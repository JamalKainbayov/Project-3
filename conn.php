<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "login_page"; 

    try {
    
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $existingUser = $conn->query("SELECT * FROM user_info WHERE username = '$username'")->fetch();

        if ($existingUser) {
            echo "Username already exists. Please choose a different username.";
        } else {

            $sql = "INSERT INTO user_info (username, password) VALUES ('$username', '$password')";
            $conn->exec($sql);

        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();

    $conn = null; 
    }
}
?>