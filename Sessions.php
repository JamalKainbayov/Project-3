<?php
session_start();
$_SESSION['studentennummer'];
$_SESSION['studentennummer'] = "9023725";


echo $_SESSION['studentennummer'];
?>
<br>
<a href="Sessions2.php">Sessions2</a>