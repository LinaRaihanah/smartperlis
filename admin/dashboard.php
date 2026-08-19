<?php

session_start();

// Check admin login
if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
Admin Dashboard
</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

/* ===============================
   BLUE + YELLOW THEME
================================ */

.navbar-blue {
    background-color: #0057B8;
}

.btn-blue {
    background-color: #0057B8;
    color: white;
    border: none;
}

.btn-blue:hover {
    background-color: #003F88;
    color: white;
}

.text-blue {
    color: #0057B8;
}

.card {
    border-top: 4px solid #FFD700;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.btn-yellow {
    background-color: #FFD700;
    color: #000;
    border: none;
}

.btn-yellow:hover {
    background-color: #E6C200;
    color: #000;
}

</style>

</head>

<body class="bg-light">


<!-- Navbar -->

<nav class="navbar navbar-dark navbar-blue">

<div class="container">

<span class="navbar-brand">

Smart Perlis Tourism Portal - Admin

</span>

<a href="../logout.php"

class="btn btn-light">

Logout

</a>

</div>

</nav>


<div class="container mt-5">

<h2 class="mb-4 text-center">

Dashboard

</h2>


<div class="row g-4">


<!-- Destination -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<i class="bi bi-geo-alt-fill fs-1 text-blue"></i>

<h4>

Manage Destination

</h4>

<a href="manage_destination.php" 
class="btn btn-blue">

Manage

</a>

</div>

</div>


<!-- Event -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<i class="bi bi-calendar-event fs-1 text-blue"></i>

<h4>

Manage Event

</h4>

<a href="manage_event.php"
class="btn btn-blue">

Manage

</a>

</div>

</div>


<!-- Gallery -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<i class="bi bi-images fs-1 text-blue"></i>

<h4>

Gallery 

</h4>

<a href="manage_gallery.php"
class="btn btn-blue">

Manage

</a>

</div>

</div>


<!-- Visitor Rating -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<i class="bi bi-star-fill fs-1 text-blue"></i>

<h4>

Visitor Rating

</h4>

<a href="manage_rating.php"
class="btn btn-blue">

View

</a>

</div>

</div>


<!-- Messages -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<i class="bi bi-envelope-fill fs-1 text-blue"></i>

<h4>

Messages

</h4>

<a href="messages.php"
class="btn btn-blue">

Respond

</a>

</div>

</div>


<!-- Visitor Analytics -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">

<i class="bi bi-bar-chart-fill fs-1 text-blue"></i>

<h4>

Visitor Analytics

</h4>

<a href="visitor_report.php"
class="btn btn-blue">

View

</a>

</div>

</div>


</div>

</div>


</body>

</html>