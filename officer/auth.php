<?php

session_start();

include("../config.php");


// Check login
if (!isset($_SESSION['admin']) && !isset($_SESSION['user_id'])) {

    header("Location: ../login.php");
    exit();

}


// Check officer role
if (
    !isset($_SESSION['role']) ||
    $_SESSION['role'] !== 'officer'
) {

    echo "<script>
            alert('Access denied. Officer only.');
            window.location.href='../login.php';
          </script>";

    exit();

}

?>