<?php

session_start();
$_SESSION['studentennummer'];
$_SESSION['studentennummer'] = "9023725";

echo $_SESSION['studentennummer'];

?>
<br>
<a href="Sessions.php">Sessions</a>
