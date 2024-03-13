<?php
require "conn.php";
if ( !isset($_POST['username'], $_POST['password']) ) {
    exit('Please fill both the username and password fields!');
}

$read_password = $conn->prepare("SELECT Password FROM user_info WHERE Username = :gebruikersnaam");


