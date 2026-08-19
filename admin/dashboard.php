<?php

session_start();

include("../config.php");


// ========================================
// CHECK ADMIN LOGIN
// ========================================

if (!isset($_SESSION['admin'])) {

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
Admin Dashboard - Smart Perlis Tourism Portal
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

/* ========================================
   BLUE + YELLOW THEME
======================================== */

body {

    background-color: #f5f8fc;

}


/* ========================================
   NAVBAR
======================================== */

.navbar-blue {

    background-color: #0057B8;

}


/* ========================================
   DASHBOARD TITLE
======================================== */

.dashboard-title {

    color: #0057B8;

    font-weight: 700;

}


/* ========================================
   DASHBOARD CARDS
======================================== */

.dashboard-card {

    background-color: white;

    border-radius: 12px;

    padding: 25px;

    text-align: center;

    box-shadow:
        0 4px 12px rgba(0,0,0,0.08);

    transition: 0.2s;

    height: 100%;

    border-top: 4px solid #FFD700;

}


.dashboard-card:hover {

    transform: translateY(-5px);

    box-shadow:
        0 7px 18px rgba(0,0,0,0.12);

}


/* ========================================
   ICON
======================================== */

.dashboard-icon {

    font-size: 45px;

    color: #0057B8;

    margin-bottom: 15px;

}


/* ========================================
   CARD TITLE
======================================== */

.dashboard-card h5 {

    font-weight: 600;

    margin-bottom: 10px;

}


/* ========================================
   CARD TEXT
======================================== */

.dashboard-card p {

    color: #666;

    min-height: 45px;

}


/* ========================================
   BLUE BUTTON
======================================== */

.btn-blue {

    background-color: #0057B8;

    color: white;

    border: none;

}


.btn-blue:hover {

    background-color: #003F88;

    color: white;

}


/* ========================================
   YELLOW BUTTON
======================================== */

.btn-yellow {

    background-color: #FFD700;

    color: #000;

    border: none;

}


.btn-yellow:hover {

    background-color: #E6C200;

    color: #000;

}


/* ========================================
   WELCOME CARD
======================================== */

.welcome-card {

    background-color: white;

    border-radius: 12px;

    padding: 25px;

    box-shadow:
        0 4px 12px rgba(0,0,0,0.08);

    border-left: 5px solid #0057B8;

}

</style>

</head>


<body>


<!-- ========================================
     NAVBAR
======================================== -->

<nav class="navbar navbar-dark navbar-blue">

    <div class="container">


        <!-- LOGO / BRAND -->

        <span class="navbar-brand fw-bold">

            <i class="bi bi-geo-alt-fill"></i>

            Smart Perlis Tourism Portal

        </span>


        <!-- LOGOUT -->

        <a
            href="../logout.php"
            class="btn btn-yellow"
        >

            <i class="bi bi-box-arrow-right"></i>

            Logout

        </a>


    </div>

</nav>



<!-- ========================================
     MAIN CONTENT
======================================== -->

<div class="container mt-5 mb-5">


    <!-- ====================================
         WELCOME
    ==================================== -->

    <div class="welcome-card mb-5">

        <h2 class="dashboard-title">

            <i class="bi bi-speedometer2"></i>

            Admin Dashboard

        </h2>


        <p class="mb-0">

            Welcome to the Smart Perlis Tourism Portal
            Administration Panel.

        </p>

    </div>



    <!-- ====================================
         MANAGEMENT MODULES
    ==================================== -->

    <div class="row g-4">


        <!-- DESTINATION -->

        <div class="col-md-4">

            <div class="dashboard-card">


                <i class="bi bi-geo-alt-fill dashboard-icon"></i>


                <h5>

                    Destination Management

                </h5>


                <p>

                    Add, edit and manage tourism
                    destinations in Perlis.

                </p>


                <a
                    href="manage_destination.php"
                    class="btn btn-blue"
                >

                    <i class="bi bi-arrow-right-circle"></i>

                    Manage Destination

                </a>


            </div>

        </div>



        <!-- EVENTS -->

        <div class="col-md-4">

            <div class="dashboard-card">


                <i class="bi bi-calendar-event-fill dashboard-icon"></i>


                <h5>

                    Event Management

                </h5>


                <p>

                    Manage tourism events,
                    dates and locations.

                </p>


                <a
                    href="manage_event.php"
                    class="btn btn-blue"
                >

                    <i class="bi bi-arrow-right-circle"></i>

                    Manage Events

                </a>


            </div>

        </div>



        <!-- GALLERY -->

        <div class="col-md-4">

            <div class="dashboard-card">


                <i class="bi bi-images dashboard-icon"></i>


                <h5>

                    Gallery Management

                </h5>


                <p>

                    Upload and manage tourism
                    gallery images.

                </p>


                <a
                    href="manage_gallery.php"
                    class="btn btn-blue"
                >

                    <i class="bi bi-arrow-right-circle"></i>

                    Manage Gallery

                </a>


            </div>

        </div>



        <!-- MESSAGES -->

        <div class="col-md-4">

            <div class="dashboard-card">


                <i class="bi bi-envelope-fill dashboard-icon"></i>


                <h5>

                    User Messages

                </h5>


                <p>

                    View visitor messages and
                    reply to enquiries.

                </p>


                <a
                    href="messages.php"
                    class="btn btn-blue"
                >

                    <i class="bi bi-arrow-right-circle"></i>

                    View Messages

                </a>


            </div>

        </div>



        <!-- RATINGS -->

        <div class="col-md-4">

            <div class="dashboard-card">


                <i class="bi bi-star-fill dashboard-icon"></i>


                <h5>

                    Visitor Ratings

                </h5>


                <p>

                    View visitor ratings,
                    comments and satisfaction.

                </p>


                <a
                    href="rating.php"
                    class="btn btn-blue"
                >

                    <i class="bi bi-arrow-right-circle"></i>

                    View Ratings

                </a>


            </div>

        </div>



        <!-- VISITOR ANALYTICS -->

        <div class="col-md-4">

            <div class="dashboard-card">


                <i class="bi bi-bar-chart-fill dashboard-icon"></i>


                <h5>

                    Visitor Analytics

                </h5>


                <p>

                    View visitor statistics
                    and destination popularity.

                </p>


                <a
                    href="visitor_report.php"
                    class="btn btn-blue"
                >

                    <i class="bi bi-arrow-right-circle"></i>

                    View Analytics

                </a>


            </div>

        </div>


    </div>


</div>


<!-- ========================================
     BOOTSTRAP JS
======================================== -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>