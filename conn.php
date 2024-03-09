<?php

    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "login_page"; 

    
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>