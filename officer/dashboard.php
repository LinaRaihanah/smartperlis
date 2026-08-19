```php
<?php

// =====================================
// SMART PERLIS
// OFFICER DASHBOARD
// =====================================

require_once "auth.php";

include("../config.php");


// =====================================
// COUNT DESTINATIONS
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destinations"
);

$destinations = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $destinations = $row['total'] ?? 0;

}


// =====================================
// COUNT EVENTS
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM events"
);

$events = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $events = $row['total'] ?? 0;

}


// =====================================
// COUNT GALLERY
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM gallery"
);

$gallery = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $gallery = $row['total'] ?? 0;

}


// =====================================
// COUNT RATINGS
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destination_ratings"
);

$ratings = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $ratings = $row['total'] ?? 0;

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
Officer Dashboard - Smart Perlis
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
   NAVBAR
===================================== */

.navbar {

    background: linear-gradient(
        135deg,
        #0B2D5C,
        #1565C0
    ) !important;

    border-bottom: 5px solid #FFC107;

    padding: 16px 0;

}


/* =====================================
   NAVBAR BRAND
===================================== */

.navbar-brand {

    font-size: 1.35rem;

    letter-spacing: 0.3px;

}


.navbar-brand i {

    color: #FFC107;

}


/* =====================================
   USER
===================================== */

.navbar .text-white {

    font-size: 0.95rem;

}


/* =====================================
   LOGOUT BUTTON
===================================== */

.logout-btn {

    background: #FFC107;

    color: #0B2D5C;

    border: none;

    font-weight: 700;

    border-radius: 8px;

    padding: 8px 16px;

    transition: 0.25s;

}


.logout-btn:hover {

    background: #FFD54F;

    color: #0B2D5C;

    transform: translateY(-2px);

}


/* =====================================
   DASHBOARD HEADER
===================================== */

.dashboard-title {

    color: #0B2D5C;

    font-size: 2.3rem;

    font-weight: 800;

    margin-bottom: 8px;

}


.dashboard-subtitle {

    font-size: 1.05rem;

    color: #6b7280;

}


/* =====================================
   STAT CARDS
===================================== */

.stat-card {

    border: none;

    border-radius: 18px;

    background: #FFF9E8;

    transition: all 0.25s ease;

    overflow: hidden;

    position: relative;

}


/* TOP GRADIENT LINE */

.stat-card::before {

    content: "";

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    height: 5px;

    background: linear-gradient(
        90deg,
        #1565C0,
        #FFC107
    );

}


/* HOVER */

.stat-card:hover {

    transform: translateY(-6px);

    box-shadow:
        0 12px 30px
        rgba(11, 45, 92, 0.15) !important;

}


/* =====================================
   STAT NUMBER
===================================== */

.stat-number {

    color: #0B2D5C;

    font-size: 2rem;

}


/* =====================================
   STAT LABEL
===================================== */

.stat-label {

    font-size: 0.9rem;

    font-weight: 600;

    color: #6b7280;

}


/* =====================================
   STAT ICON
===================================== */

.stat-icon {

    width: 58px;

    height: 58px;

    border-radius: 14px;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 1.7rem;

}


/* =====================================
   DESTINATION ICON
===================================== */

.destination-icon {

    background: #E3F2FD;

    color: #1565C0;

}


/* =====================================
   EVENT ICON
===================================== */

.event-icon {

    background: #FFF8E1;

    color: #F9A825;

}


/* =====================================
   GALLERY ICON
===================================== */

.gallery-icon {

    background: #E8EAF6;

    color: #3949AB;

}


/* =====================================
   RATING ICON
===================================== */

.rating-icon {

    background: #FFF3E0;

    color: #EF6C00;

}


/* =====================================
   QUICK ACTION CARD
===================================== */

.quick-card {

    border: none;

    border-radius: 18px;

    background: #FFF9E8;

}


/* =====================================
   QUICK ACTION TITLE
===================================== */

.quick-title {

    color: #0B2D5C;

    font-weight: 800;

}


/* =====================================
   QUICK ACTION BUTTONS
===================================== */

.action-btn {

    border: none;

    border-radius: 12px;

    padding: 15px;

    font-weight: 700;

    font-size: 0.95rem;

    color: white;

    background: linear-gradient(
        135deg,
        #1565C0,
        #FFC107
    );

    transition: all 0.25s ease;

    box-shadow:
        0 5px 12px
        rgba(21, 101, 192, 0.2);

}


/* BUTTON HOVER */

.action-btn:hover {

    color: #ffffff;

    transform: translateY(-3px);

    box-shadow:
        0 9px 20px
        rgba(21, 101, 192, 0.3);

}


/* BUTTON ICON */

.action-btn i {

    margin-right: 7px;

    font-size: 1.1rem;

}


/* =====================================
   BACK TO WEBSITE
===================================== */

.back-link {

    color: #1565C0;

    font-weight: 600;

    transition: 0.2s;

}


.back-link:hover {

    color: #0B2D5C;

}


/* =====================================
   RESPONSIVE
===================================== */

@media (max-width: 768px) {

    .dashboard-title {

        font-size: 1.8rem;

    }


    .dashboard-subtitle {

        font-size: 0.95rem;

    }


    .navbar-brand {

        font-size: 1.05rem;

    }


    .navbar .d-flex {

        gap: 8px !important;

    }

}

</style>

</head>


<body>


<!-- =====================================
     NAVBAR
===================================== -->

<nav class="navbar navbar-dark">

<div class="container">


    <!-- BRAND -->

    <span class="navbar-brand fw-bold">

        <i class="bi bi-geo-alt-fill me-2"></i>

        Smart Perlis Tourism Portal - Officer

    </span>


    <!-- USER + LOGOUT -->

    <div class="d-flex align-items-center gap-3">


        <span class="text-white">

            <i class="bi bi-person-circle me-1"></i>

            <?php

            echo htmlspecialchars($_SESSION['username']);

            ?>

        </span>


        <a
            href="../logout.php"
            class="btn logout-btn btn-sm"
        >

            <i class="bi bi-box-arrow-right me-1"></i>

            Logout

        </a>


    </div>


</div>

</nav>


<!-- =====================================
     MAIN CONTENT
===================================== -->

<div class="container py-5">


    <!-- =================================
         DASHBOARD HEADER
    ================================= -->

    <div class="text-center mb-5">


        <h2 class="dashboard-title">

            Officer Dashboard

        </h2>


        <p class="dashboard-subtitle">

            Welcome to Smart Perlis Tourism Portal Management

        </p>


    </div>


    <!-- =================================
         STATISTICS
    ================================= -->

    <div class="row g-4">


        <!-- =============================
             DESTINATIONS
        ============================== -->

        <div class="col-md-6 col-xl-3">

            <div class="card stat-card shadow-sm p-4">

                <div class="d-flex justify-content-between align-items-center">


                    <div>

                        <div class="stat-label">

                            Destinations

                        </div>


                        <h2 class="stat-number fw-bold mb-0">

                            <?php echo $destinations; ?>

                        </h2>

                    </div>


                    <div class="stat-icon destination-icon">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>


                </div>

            </div>

        </div>


        <!-- =============================
             EVENTS
        ============================== -->

        <div class="col-md-6 col-xl-3">

            <div class="card stat-card shadow-sm p-4">

                <div class="d-flex justify-content-between align-items-center">


                    <div>

                        <div class="stat-label">

                            Events

                        </div>


                        <h2 class="stat-number fw-bold mb-0">

                            <?php echo $events; ?>

                        </h2>

                    </div>


                    <div class="stat-icon event-icon">

                        <i class="bi bi-calendar-event-fill"></i>

                    </div>


                </div>

            </div>

        </div>


        <!-- =============================
             GALLERY
        ============================== -->

        <div class="col-md-6 col-xl-3">

            <div class="card stat-card shadow-sm p-4">

                <div class="d-flex justify-content-between align-items-center">


                    <div>

                        <div class="stat-label">

                            Gallery

                        </div>


                        <h2 class="stat-number fw-bold mb-0">

                            <?php echo $gallery; ?>

                        </h2>

                    </div>


                    <div class="stat-icon gallery-icon">

                        <i class="bi bi-images"></i>

                    </div>


                </div>

            </div>

        </div>


        <!-- =============================
             RATINGS
        ============================== -->

        <div class="col-md-6 col-xl-3">

            <div class="card stat-card shadow-sm p-4">

                <div class="d-flex justify-content-between align-items-center">


                    <div>

                        <div class="stat-label">

                            Ratings

                        </div>


                        <h2 class="stat-number fw-bold mb-0">

                            <?php echo $ratings; ?>

                        </h2>

                    </div>


                    <div class="stat-icon rating-icon">

                        <i class="bi bi-star-fill"></i>

                    </div>


                </div>

            </div>

        </div>


    </div>


    <!-- =================================
         QUICK ACTIONS
    ================================= -->

    <div class="card quick-card shadow-sm mt-5 p-4">


        <h4 class="quick-title mb-1">

            <i class="bi bi-lightning-charge-fill me-2"></i>

            Quick Actions

        </h4>


        <p class="text-muted mb-0">

            Manage your Smart Perlis tourism content

        </p>


        <div class="row g-3 mt-2">


            <!-- =========================
                 MANAGE DESTINATIONS
            ========================== -->

            <div class="col-md-4">

                <a
                    href="destinations.php"
                    class="btn action-btn w-100"
                >

                    <i class="bi bi-geo-alt-fill"></i>

                    Manage Destinations

                </a>

            </div>


            <!-- =========================
                 MANAGE EVENTS
            ========================== -->

            <div class="col-md-4">

                <a
                    href="events.php"
                    class="btn action-btn w-100"
                >

                    <i class="bi bi-calendar-event-fill"></i>

                    Manage Events

                </a>

            </div>


            <!-- =========================
                 MANAGE GALLERY
            ========================== -->

            <div class="col-md-4">

                <a
                    href="gallery.php"
                    class="btn action-btn w-100"
                >

                    <i class="bi bi-images"></i>

                    Manage Gallery

                </a>

            </div>


        </div>

    </div>


    <!-- =================================
         BACK TO WEBSITE
    ================================= -->

    <div class="text-center mt-4">

        <a
            href="../index.php"
            class="text-decoration-none back-link"
        >

            <i class="bi bi-arrow-left me-1"></i>

            Back to Website

        </a>

    </div>


</div>


</body>

</html>
```
