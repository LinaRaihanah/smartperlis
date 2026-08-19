<?php

include("auth.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>
    Dashboard - Smart Perlis Tourism Portal
</title>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>

<style>

body {

    background:#f5f7f6;

}

.sidebar {

    min-height:100vh;

    background:#146c43;

}

.sidebar a {

    color:white;

    text-decoration:none;

    display:block;

    padding:12px 20px;

    transition:.2s;

}

.sidebar a:hover {

    background:#198754;

}

.sidebar .active {

    background:#198754;

}

.card {

    border:none;

    border-radius:15px;

}

.stat-card {

    transition:.3s;

}

.stat-card:hover {

    transform:translateY(-4px);

}

</style>

</head>

<body>


<div class="container-fluid">

<div class="row">


<!-- =====================================
     SIDEBAR
===================================== -->

<div class="col-md-3 col-lg-2 sidebar p-0">


<div class="p-4 text-white">

<h4>

<i class="bi bi-person-badge"></i>

Officer

</h4>

<small>

Smart Perlis Tourism Portal

</small>

</div>


<a href="dashboard.php">

<i class="bi bi-speedometer2 me-2"></i>

Dashboard

</a>


<a href="destinations.php">

<i class="bi bi-geo-alt me-2"></i>

Destinations

</a>


<a href="events.php">

<i class="bi bi-calendar-event me-2"></i>

Events

</a>


<a href="gallery.php">

<i class="bi bi-images me-2"></i>

Gallery

</a>


<a href="ratings.php">

<i class="bi bi-star me-2"></i>

Ratings

</a>


<a href="visitor_report.php">

<i class="bi bi-bar-chart me-2"></i>

Visitor Report

</a>


<hr class="text-white">


<a href="../logout.php">

<i class="bi bi-box-arrow-right me-2"></i>

Logout

</a>


</div>


<!-- =====================================
     MAIN
===================================== -->

<div class="col-md-9 col-lg-10">

<div class="p-4">