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


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<style>

/* ===============================
   BLUE + GREEN THEME
================================ */


/* =================================
   BODY
================================= */

body {

    background-color: #f5f8fc;

}



/* =================================
   NAVBAR
================================= */

.navbar-blue {

    background:
        linear-gradient(
            90deg,
            #0057B8,
            #008f5a
        );

}



/* =================================
   DASHBOARD TITLE
================================= */

.dashboard-title {

    font-size: 3rem;

    font-weight: 700;

    color: #0057B8;

    margin-bottom: 35px;

}



/* =================================
   BLUE TEXT
================================= */

.text-blue {

    color: #0057B8;

}



/* =================================
   CARDS
================================= */

.card {

    border: none;

    border-top: 4px solid #FFD700;

    border-radius: 12px;

    transition:
        transform 0.3s,
        box-shadow 0.3s;

}


.card:hover {

    transform: translateY(-6px);

    box-shadow:
        0 10px 25px rgba(0,0,0,0.12) !important;

}



/* =================================
   CARD TITLE
================================= */

.card h4 {

    font-size: 1.35rem;

    font-weight: 600;

    margin-top: 10px;

    margin-bottom: 18px;

}



/* =================================
   ICON
================================= */

.card i {

    transition: 0.3s;

}


.card:hover i {

    transform: scale(1.1);

}



/* =================================
   BLUE + GREEN GRADIENT BUTTON
================================= */

.btn-blue {

    background:
        linear-gradient(
            90deg,
            #0057B8,
            #008f5a
        );

    color: white;

    border: none;

    font-weight: 600;

    padding: 10px 25px;

    border-radius: 8px;

    transition:
        transform 0.2s,
        box-shadow 0.2s,
        background 0.3s;

}



/* =================================
   BUTTON HOVER
================================= */

.btn-blue:hover {

    background:
        linear-gradient(
            90deg,
            #003f88,
            #006f46
        );

    color: white;

    transform: translateY(-2px);

    box-shadow:
        0 5px 12px rgba(0,0,0,0.2);

}



/* =================================
   LOGOUT BUTTON
================================= */

.logout-btn {

    font-weight: 600;

    border-radius: 8px;

    padding: 8px 18px;

}



/* =================================
   NAVBAR TITLE
================================= */

.navbar-brand {

    font-size: 1.25rem;

    font-weight: 600;

}



/* =================================
   CARD BUTTON WIDTH
================================= */

.card .btn-blue {

    min-width: 120px;

}



/* =================================
   RESPONSIVE DASHBOARD TITLE
================================= */

@media (max-width: 768px) {

    .dashboard-title {

        font-size: 2.3rem;

    }

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


<i class="bi bi-geo-alt-fill fs-1 text-blue"></i>


<h4>

Destination

</h4>


<a
    href="manage_destination.php"
    class="btn btn-blue"
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


<i class="bi bi-calendar-event fs-1 text-blue"></i>


<h4>

Event

</h4>


<a
    href="manage_event.php"
    class="btn btn-blue"
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


<i class="bi bi-images fs-1 text-blue"></i>


<h4>

Gallery

</h4>


<a
    href="manage_gallery.php"
    class="btn btn-blue"
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


<i class="bi bi-star-fill fs-1 text-blue"></i>


<h4>

Visitor Rating

</h4>


<a
    href="manage_rating.php"
    class="btn btn-blue"
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


<i class="bi bi-envelope-fill fs-1 text-blue"></i>


<h4>

Messages

</h4>


<a
    href="messages.php"
    class="btn btn-blue"
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


<i class="bi bi-bar-chart-fill fs-1 text-blue"></i>


<h4>

Visitor Analytics

</h4>


<a
    href="visitor_report.php"
    class="btn btn-blue"
>

View

</a>


</div>

</div>



</div>

</div>


</body>

</html>