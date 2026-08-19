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

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
    Dashboard
</title>


<!-- Bootstrap -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
>


<!-- Bootstrap Icons -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
rel="stylesheet"
>


<style>

/* ===============================
   GENERAL
================================ */

body {

    background-color: #f5f8fc;

}


/* ===============================
   NAVBAR
================================ */

.navbar-blue {

    background-color: #0057B8;

}


.navbar-brand {

    font-size: 1.2rem;

    font-weight: 600;

}


/* ===============================
   DASHBOARD TITLE
================================ */

.dashboard-title {

    font-size: 3rem;

    font-weight: 700;

    color: #0057B8;

    margin-bottom: 40px;

}


.dashboard-title i {

    font-size: 2.8rem;

}


/* ===============================
   CARDS
================================ */

.card {

    border: none;

    border-top: 5px solid #FFD700;

    border-radius: 12px;

    background-color: white;

    transition: 0.3s;

}


.card:hover {

    transform: translateY(-7px);

    box-shadow:
        0 8px 20px rgba(0,0,0,0.15) !important;

}


/* ===============================
   CARD ICON
================================ */

.card-icon {

    font-size: 3rem;

    color: #0057B8;

    margin-bottom: 10px;

}


/* ===============================
   CARD TITLE
================================ */

.card h4 {

    font-size: 1.4rem;

    font-weight: 600;

    color: #333;

    margin-bottom: 18px;

}


/* ===============================
   PASTEL YELLOW BUTTON
================================ */

.btn-pastel {

    background-color: #FFF3B0;

    color: #0057B8;

    border: 2px solid #FFE680;

    font-weight: 600;

    padding: 10px 28px;

    border-radius: 8px;

    transition: 0.3s;

}


/* ===============================
   BUTTON HOVER
================================ */

.btn-pastel:hover {

    background-color: #FFE680;

    color: #003F88;

    border-color: #FFD966;

    transform: scale(1.05);

    box-shadow:
        0 4px 10px rgba(0,0,0,0.12);

}


/* ===============================
   LOGOUT
================================ */

.logout-btn {

    font-weight: 600;

    border-radius: 7px;

}


</style>

</head>


<body>


<!-- =================================
     NAVBAR
================================= -->

<nav class="navbar navbar-dark navbar-blue">

<div class="container">


<span class="navbar-brand">

<i class="bi bi-geo-alt-fill"></i>

Smart Perlis Tourism Portal - Admin

</span>


<a
href="../logout.php"
class="btn btn-light logout-btn"
>

<i class="bi bi-box-arrow-right"></i>

Logout

</a>


</div>

</nav>



<!-- =================================
     DASHBOARD
================================= -->

<div class="container mt-5">


<h2 class="dashboard-title text-center">

<i class="bi bi-speedometer2"></i>

Dashboard

</h2>



<div class="row g-4">



<!-- =================================
     DESTINATION
================================= -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">


<i class="bi bi-geo-alt-fill card-icon"></i>


<h4>

Destination

</h4>


<a
href="manage_destination.php"
class="btn btn-pastel"
>

Manage

</a>


</div>

</div>



<!-- =================================
     EVENT
================================= -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">


<i class="bi bi-calendar-event card-icon"></i>


<h4>

Event

</h4>


<a
href="manage_event.php"
class="btn btn-pastel"
>

Manage

</a>


</div>

</div>



<!-- =================================
     GALLERY
================================= -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">


<i class="bi bi-images card-icon"></i>


<h4>

Gallery

</h4>


<a
href="manage_gallery.php"
class="btn btn-pastel"
>

Manage

</a>


</div>

</div>



<!-- =================================
     VISITOR RATING
================================= -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">


<i class="bi bi-star-fill card-icon"></i>


<h4>

Visitor Rating

</h4>


<a
href="manage_rating.php"
class="btn btn-pastel"
>

View

</a>


</div>

</div>



<!-- =================================
     MESSAGES
================================= -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">


<i class="bi bi-envelope-fill card-icon"></i>


<h4>

Messages

</h4>


<a
href="messages.php"
class="btn btn-pastel"
>

Respond

</a>


</div>

</div>



<!-- =================================
     VISITOR ANALYTICS
================================= -->

<div class="col-md-4">

<div class="card shadow p-4 text-center">


<i class="bi bi-bar-chart-fill card-icon"></i>


<h4>

Visitor Analytics

</h4>


<a
href="visitor_report.php"
class="btn btn-pastel"
>

View

</a>


</div>

</div>



</div>

</div>


</body>

</html>