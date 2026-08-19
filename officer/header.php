<?php

// =====================================
// OFFICER AUTHENTICATION
// =====================================

include("auth.php");


// =====================================
// DATABASE CONNECTION
// =====================================

require_once("../config.php");

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


<!-- =====================================
     BOOTSTRAP
===================================== -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<!-- =====================================
     BOOTSTRAP ICONS
===================================== -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<style>

/* =====================================
   GENERAL
===================================== */

body {

    background: #FFFDF5;

    font-family: Arial, sans-serif;

    color: #1f2937;

}


/* =====================================
   SIDEBAR
===================================== */

.sidebar {

    min-height: 100vh;

    background: linear-gradient(
        180deg,
        #0B2D5C,
        #1565C0
    );

    border-right: 4px solid #FFC107;

}


/* =====================================
   SIDEBAR BRAND
===================================== */

.sidebar-brand {

    padding: 25px 20px;

    color: #ffffff;

    border-bottom: 1px solid
        rgba(255,255,255,0.15);

}


.sidebar-brand h4 {

    font-size: 1.4rem;

    font-weight: 800;

    margin-bottom: 5px;

}


.sidebar-brand h4 i {

    color: #FFC107;

}


.sidebar-brand small {

    color: #FFF3CD;

}


/* =====================================
   SIDEBAR LINKS
===================================== */

.sidebar a {

    color: #ffffff;

    text-decoration: none;

    display: block;

    padding: 13px 20px;

    margin: 4px 10px;

    border-radius: 9px;

    transition: all 0.25s ease;

    font-size: 0.95rem;

}


/* =====================================
   SIDEBAR HOVER
===================================== */

.sidebar a:hover {

    background: rgba(255,255,255,0.15);

    color: #FFC107;

    transform: translateX(3px);

}


/* =====================================
   ACTIVE SIDEBAR
===================================== */

.sidebar .active {

    background: #FFC107;

    color: #0B2D5C;

    font-weight: 700;

}


/* =====================================
   ACTIVE ICON
===================================== */

.sidebar .active i {

    color: #0B2D5C;

}


/* =====================================
   SIDEBAR ICONS
===================================== */

.sidebar a i {

    font-size: 1rem;

}


/* =====================================
   SIDEBAR DIVIDER
===================================== */

.sidebar hr {

    margin: 18px 15px;

    opacity: 0.25;

}


/* =====================================
   MAIN CONTENT
===================================== */

.main-content {

    background: #FFFDF5;

    min-height: 100vh;

}


/* =====================================
   CARDS
===================================== */

.card {

    border: none;

    border-radius: 16px;

}


/* =====================================
   STAT CARDS
===================================== */

.stat-card {

    transition: all 0.3s ease;

}


.stat-card:hover {

    transform: translateY(-4px);

}


/* =====================================
   SCROLLBAR
===================================== */

::-webkit-scrollbar {

    width: 8px;

}


::-webkit-scrollbar-track {

    background: #FFFDF5;

}


::-webkit-scrollbar-thumb {

    background: #1565C0;

    border-radius: 10px;

}


::-webkit-scrollbar-thumb:hover {

    background: #0B2D5C;

}


/* =====================================
   RESPONSIVE
===================================== */

@media (max-width: 768px) {

    .sidebar {

        min-height: auto;

    }


    .sidebar-brand {

        text-align: center;

    }

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


<!-- =====================================
     SIDEBAR BRAND
===================================== -->

<div class="sidebar-brand">

<h4>

<i class="bi bi-person-badge-fill me-2"></i>

Officer

</h4>


<small>

Smart Perlis Tourism Portal

</small>

</div>


<!-- =====================================
     DASHBOARD
===================================== -->

<a href="dashboard.php">

<i class="bi bi-speedometer2 me-2"></i>

Dashboard

</a>


<!-- =====================================
     DESTINATIONS
===================================== -->

<a href="destinations.php">

<i class="bi bi-geo-alt-fill me-2"></i>

Destinations

</a>


<!-- =====================================
     EVENTS
===================================== -->

<a href="events.php">

<i class="bi bi-calendar-event-fill me-2"></i>

Events

</a>


<!-- =====================================
     GALLERY
===================================== -->

<a href="gallery.php">

<i class="bi bi-images me-2"></i>

Gallery

</a>


<!-- =====================================
     RATINGS
===================================== -->

<a href="ratings.php">

<i class="bi bi-star-fill me-2"></i>

Ratings

</a>


<!-- =====================================
     VISITOR REPORT
===================================== -->

<a href="visitor_report.php">

<i class="bi bi-bar-chart-fill me-2"></i>

Visitor Report

</a>


<hr class="text-white">


<!-- =====================================
     LOGOUT
===================================== -->

<a href="../logout.php">

<i class="bi bi-box-arrow-right me-2"></i>

Logout

</a>


</div>


<!-- =====================================
     MAIN CONTENT
===================================== -->

<div class="col-md-9 col-lg-10 main-content">

<div class="p-4">
```
