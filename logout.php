<?php

session_start();


// Destroy admin session

session_destroy();


// Redirect to login

header("Location: login.php");

exit();

?>