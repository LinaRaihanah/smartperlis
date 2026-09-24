<?php

include("config.php");


/*
|--------------------------------------------------------------------------
| SELECTED AREA
|--------------------------------------------------------------------------
*/

$selectedArea = $_GET['area'] ?? 'All';



/*
|--------------------------------------------------------------------------
| TRANSPORTATION DATA
|--------------------------------------------------------------------------
|
| These are transport categories/types for each area.
|
*/

$transportOptions = [

    // =========================================================
    // KANGAR
    // =========================================================

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Kangar",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "description" => "Find taxi and e-hailing transportation options around Kangar.",
        "search" => "Taxi and e-hailing in Kangar, Perlis"
    ],

    [
        "name" => "Bus Services",
        "area" => "Kangar",
        "type" => "Bus",
        "icon" => "bi-bus-front-fill",
        "description" => "Explore bus transportation options available around Kangar.",
        "search" => "Bus transportation in Kangar, Perlis"
    ],

    [
        "name" => "Car Rental",
        "area" => "Kangar",
        "type" => "Car Rental",
        "icon" => "bi-car-front-fill",
        "description" => "Find car rental services for travelling around Perlis.",
        "search" => "Car rental in Kangar, Perlis"
    ],



    // =========================================================
    // ARAU
    // =========================================================

    [
        "name" => "Rail Transport",
        "area" => "Arau",
        "type" => "Rail",
        "icon" => "bi-train-front-fill",
        "description" => "Explore railway transportation options around Arau.",
        "search" => "Railway station and train transportation in Arau, Perlis"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Arau",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "description" => "Find taxi and e-hailing transportation options around Arau.",
        "search" => "Taxi and e-hailing in Arau, Perlis"
    ],

    [
        "name" => "Car Rental",
        "area" => "Arau",
        "type" => "Car Rental",
        "icon" => "bi-car-front-fill",
        "description" => "Discover car rental options for exploring Arau and nearby areas.",
        "search" => "Car rental in Arau, Perlis"
    ],



    // =========================================================
    // PADANG BESAR
    // =========================================================

    [
        "name" => "Rail Transport",
        "area" => "Padang Besar",
        "type" => "Rail",
        "icon" => "bi-train-front-fill",
        "description" => "Explore railway transportation around Padang Besar.",
        "search" => "Railway station and train transportation in Padang Besar, Perlis"
    ],

    [
        "name" => "Bus Services",
        "area" => "Padang Besar",
        "type" => "Bus",
        "icon" => "bi-bus-front-fill",
        "description" => "Find bus transportation options around Padang Besar.",
        "search" => "Bus transportation in Padang Besar, Perlis"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Padang Besar",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "description" => "Find taxi and e-hailing transportation options around Padang Besar.",
        "search" => "Taxi and e-hailing in Padang Besar, Perlis"
    ],



    // =========================================================
    // KUALA PERLIS
    // =========================================================

    [
        "name" => "Ferry Services",
        "area" => "Kuala Perlis",
        "type" => "Ferry",
        "icon" => "bi-water",
        "description" => "Explore ferry transportation around the Kuala Perlis waterfront.",
        "search" => "Ferry terminal and ferry transportation in Kuala Perlis, Perlis"
    ],

    [
        "name" => "Bus Services",
        "area" => "Kuala Perlis",
        "type" => "Bus",
        "icon" => "bi-bus-front-fill",
        "description" => "Find bus transportation options around Kuala Perlis.",
        "search" => "Bus transportation in Kuala Perlis, Perlis"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Kuala Perlis",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "description" => "Find taxi and e-hailing transportation options around Kuala Perlis.",
        "search" => "Taxi and e-hailing in Kuala Perlis, Perlis"
    ]

];



/*
|--------------------------------------------------------------------------
| FILTER TRANSPORTATION BY AREA
|--------------------------------------------------------------------------
*/

$filteredTransport = [];

foreach ($transportOptions as $transport) {

    if (
        $selectedArea == "All" ||
        $transport["area"] == $selectedArea
    ) {

        $filteredTransport[] = $transport;

    }

}



/*
|--------------------------------------------------------------------------
| AREA INFORMATION
|--------------------------------------------------------------------------
*/

$areas = [

    "Kangar" => [
        "icon" => "bi-building",
        "description" => "Explore different ways to move around Kangar and nearby attractions."
    ],

    "Arau" => [
        "icon" => "bi-train-front",
        "description" => "Discover transportation options around Arau and its surrounding areas."
    ],

    "Padang Besar" => [
        "icon" => "bi-shop",
        "description" => "Find transportation options around the northern area of Perlis."
    ],

    "Kuala Perlis" => [
        "icon" => "bi-water",
        "description" => "Explore transport options around the coastal area of Kuala Perlis."
    ]

];

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
Transportation | PERLIS TOURISM SMART PORTAL
</title>



<!-- =========================================================
     BOOTSTRAP
========================================================= -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>



<!-- =========================================================
     BOOTSTRAP ICONS
========================================================= -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>



<!-- =========================================================
     EXISTING CSS
========================================================= -->

<link
    rel="stylesheet"
    href="assets/css/style.css"
>



<style>


/* =========================================================
   GENERAL
========================================================= */

body {

    background: #fefbea;

    color: #333;

    font-family: Arial, sans-serif;

}



/* =========================================================
   NAVBAR
========================================================= */

.navbar {

    background:

        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}



/* =========================================================
   HEADER
   KEEPING YOUR ORIGINAL HEADER DESIGN
========================================================= */

.transport-header {

    position: relative;

    background-image:

        linear-gradient(
            90deg,
            rgba(255,255,255,0.98) 0%,
            rgba(255,255,255,0.92) 40%,
            rgba(255,255,255,0.25) 100%
        ),

        url('assets/images/header.jpg');

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    min-height: 450px;

    padding: 60px 20px;

    display: flex;

    align-items: center;

    overflow: hidden;

}



/* =========================================================
   HEADER CONTAINER
========================================================= */

.transport-header .container {

    position: relative;

    z-index: 2;

}



/* =========================================================
   SMALL TITLE
========================================================= */

.transport-header .small-title {

    color: #f5b400;

    font-size: 16px;

    font-weight: 700;

    margin-bottom: 12px;

}



/* =========================================================
   HEADER TITLE
========================================================= */

.transport-header h1 {

    color: #10233f;

    font-size: 3.5rem;

    font-weight: 800;

    line-height: 1.1;

    margin-bottom: 18px;

    text-align: left;

}



/* =========================================================
   HEADER DESCRIPTION
========================================================= */

.transport-header p {

    color: #536174;

    font-size: 1.15rem;

    max-width: 520px;

    margin: 0;

    text-align: left;

}



/* =========================================================
   CAR IMAGE
   KEEP THIS
========================================================= */

.header-car {

    position: absolute;

    right: 4%;

    bottom: 15px;

    width: 480px;

    height: auto;

    object-fit: contain;

    z-index: 1;

    pointer-events: none;

}



/* =========================================================
   MAIN SECTION
========================================================= */

.transport-section {

    padding: 70px 0 80px;

}



/* =========================================================
   SECTION TITLE
========================================================= */

.section-title {

    text-align: center;

    margin-bottom: 35px;

}



.section-title h2 {

    color: #0057B8;

    font-weight: 800;

    font-size: 2.2rem;

    margin-bottom: 10px;

}



.section-title p {

    color: #777;

    max-width: 650px;

    margin: auto;

}



/* =========================================================
   AREA FILTER
========================================================= */

.area-filter {

    display: flex;

    flex-wrap: wrap;

    justify-content: center;

    gap: 12px;

    margin-bottom: 40px;

}



.area-btn {

    text-decoration: none;

    padding: 12px 22px;

    border-radius: 30px;

    background: white;

    color: #0057B8;

    font-weight: 700;

    border: 2px solid #0057B8;

    transition: 0.3s;

    box-shadow:
        0 5px 15px rgba(0,0,0,0.06);

}



.area-btn:hover {

    background: #0057B8;

    color: white;

    transform: translateY(-3px);

}



.area-btn.active {

    background:

        linear-gradient(
            135deg,
            #FFD700,
            #0057B8
        );

    color: white;

    border-color: transparent;

}



/* =========================================================
   AREA INFORMATION
========================================================= */

.area-info {

    background:

        linear-gradient(
            135deg,
            #eef6ff,
            #ffffff
        );

    border-radius: 25px;

    padding: 28px;

    margin-bottom: 45px;

    box-shadow:
        0 8px 25px rgba(0,0,0,0.08);

    border-left: 7px solid #0057B8;

}



.area-info-icon {

    width: 60px;

    height: 60px;

    min-width: 60px;

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #0057B8;

    color: white;

    font-size: 1.5rem;

}



.area-info h3 {

    color: #0057B8;

    font-weight: 800;

    margin-bottom: 5px;

}



.area-info p {

    margin: 0;

    color: #666;

}



/* =========================================================
   TRANSPORT CARD
========================================================= */

.transport-card {

    background: white;

    border-radius: 22px;

    padding: 0;

    height: 100%;

    overflow: hidden;

    box-shadow:
        0 8px 25px rgba(0,0,0,0.08);

    transition: all 0.3s ease;

    border: none;

    position: relative;

}



.transport-card:hover {

    transform: translateY(-8px);

    box-shadow:
        0 16px 35px rgba(0,0,0,0.15);

}



/* =========================================================
   CARD TOP
========================================================= */

.transport-card-top {

    min-height: 170px;

    background:

        linear-gradient(
            135deg,
            #0057B8,
            #1687dc
        );

    display: flex;

    align-items: center;

    justify-content: center;

    position: relative;

    overflow: hidden;

}



.transport-card-top::before {

    content: "";

    position: absolute;

    width: 180px;

    height: 180px;

    border-radius: 50%;

    background: rgba(255,255,255,0.10);

    top: -70px;

    right: -50px;

}



.transport-card-top::after {

    content: "";

    position: absolute;

    width: 100px;

    height: 100px;

    border-radius: 50%;

    background: rgba(255,215,0,0.18);

    bottom: -45px;

    left: -25px;

}



/* =========================================================
   TRANSPORT ICON
========================================================= */

.transport-icon {

    width: 85px;

    height: 85px;

    border-radius: 25px;

    background: rgba(255,255,255,0.95);

    color: #0057B8;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 40px;

    position: relative;

    z-index: 2;

    box-shadow:
        0 8px 20px rgba(0,0,0,0.15);

}



/* =========================================================
   CARD CONTENT
========================================================= */

.transport-content {

    padding: 25px;

}



/* =========================================================
   TYPE BADGE
========================================================= */

.transport-badge {

    display: inline-block;

    background: #fff3cd;

    color: #9a6b00;

    padding: 7px 13px;

    border-radius: 20px;

    font-size: 0.78rem;

    font-weight: 700;

    margin-bottom: 12px;

}



/* =========================================================
   CARD TITLE
========================================================= */

.transport-content h4 {

    color: #0057B8;

    font-weight: 800;

    margin-bottom: 10px;

}



/* =========================================================
   AREA
========================================================= */

.transport-location {

    color: #666;

    font-size: 14px;

    margin-bottom: 12px;

}



/* =========================================================
   DESCRIPTION
========================================================= */

.transport-content p {

    color: #777;

    line-height: 1.6;

    min-height: 75px;

}



/* =========================================================
   MAP BUTTON
========================================================= */

.map-btn {

    width: 100%;

    border: none;

    border-radius: 12px;

    padding: 12px 18px;

    background:

        linear-gradient(
            135deg,
            #0057B8,
            #007bff
        );

    color: white;

    font-weight: 700;

    text-decoration: none;

    display: inline-flex;

    justify-content: center;

    align-items: center;

    gap: 8px;

    transition: 0.3s;

}



.map-btn:hover {

    color: white;

    transform: translateY(-2px);

    background:

        linear-gradient(
            135deg,
            #003f88,
            #0057B8
        );

    box-shadow:
        0 8px 18px rgba(0,87,184,0.25);

}



/* =========================================================
   QUICK AREA STRIP
========================================================= */

.travel-strip {

    margin-top: 55px;

    background:

        linear-gradient(
            135deg,
            #10233f,
            #0057B8
        );

    border-radius: 25px;

    padding: 30px;

    color: white;

}



.travel-strip h3 {

    font-weight: 800;

    margin-bottom: 8px;

}



.travel-strip p {

    margin: 0;

    color: rgba(255,255,255,0.8);

}



/* =========================================================
   EMPTY RESULT
========================================================= */

.empty-box {

    text-align: center;

    padding: 70px 20px;

    background: white;

    border-radius: 25px;

    box-shadow:
        0 8px 25px rgba(0,0,0,0.08);

}



.empty-box i {

    font-size: 4rem;

    color: #FFD700;

    margin-bottom: 20px;

}



.empty-box h3 {

    color: #0057B8;

    font-weight: 800;

}



/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 768px) {


    .transport-header {

        min-height: 600px;

        padding: 50px 20px;

        align-items: flex-start;

    }



    .transport-header h1 {

        font-size: 2.5rem;

    }



    .transport-header p {

        font-size: 1rem;

    }



    .header-car {

        right: 50%;

        transform: translateX(50%);

        bottom: 20px;

        width: 330px;

    }



    .transport-section {

        padding: 50px 0 40px;

    }



    .area-btn {

        padding: 10px 16px;

        font-size: 14px;

    }

}

</style>


</head>



<body>



<!-- =========================================================
     NAVBAR
========================================================= -->

<?php include("navbar.php"); ?>



<!-- =========================================================
     HEADER
     SAME HEADER + CAR
========================================================= -->

<section class="transport-header">


    <div class="container">


        <div class="small-title">

            ✦ Easy Travel, Better Journey

        </div>



        <h1>

            Explore<br>

            Transportation<br>

            in Perlis

        </h1>



        <p>

            Discover different ways to travel around
            Perlis and find transportation options
            that suit your journey.

        </p>


    </div>



    <!-- =====================================================
         CAR IMAGE
    ====================================================== -->

    <img
        src="assets/images/car.png"
        alt="Car"
        class="header-car"
    >


</section>



<!-- =========================================================
     MAIN TRANSPORT SECTION
========================================================= -->

<section class="transport-section">


<div class="container">



    <!-- =====================================================
         TITLE
    ====================================================== -->

    <div class="section-title">


        <h2>

            <i class="bi bi-signpost-split-fill me-2"></i>

            Getting Around Perlis

        </h2>


        <p>

            Choose an area to discover transportation
            options available around Perlis.

        </p>


    </div>



    <!-- =====================================================
         AREA FILTER
    ====================================================== -->

    <div class="area-filter">


        <!-- ALL -->

        <a
            href="transportation.php"
            class="area-btn
            <?= ($selectedArea == 'All') ? 'active' : '' ?>"
        >

            <i class="bi bi-grid-fill me-1"></i>

            All Areas

        </a>



        <!-- AREAS -->

        <?php foreach ($areas as $areaName => $areaData): ?>


            <a
                href="transportation.php?area=<?= urlencode($areaName) ?>"
                class="area-btn
                <?= ($selectedArea == $areaName) ? 'active' : '' ?>"
            >

                <i
                    class="bi <?= $areaData['icon'] ?> me-1"
                ></i>

                <?= htmlspecialchars($areaName) ?>

            </a>


        <?php endforeach; ?>


    </div>



    <!-- =====================================================
         AREA INFORMATION
    ====================================================== -->

    <?php if (
        $selectedArea != "All"
        &&
        isset($areas[$selectedArea])
    ): ?>


        <div class="area-info">


            <div class="d-flex align-items-center gap-3">


                <div class="area-info-icon">

                    <i
                        class="bi <?= $areas[$selectedArea]['icon'] ?>"
                    ></i>

                </div>



                <div>


                    <h3>

                        Transportation in
                        <?= htmlspecialchars($selectedArea) ?>

                    </h3>


                    <p>

                        <?= htmlspecialchars(
                            $areas[$selectedArea]['description']
                        ) ?>

                    </p>


                </div>


            </div>


        </div>


    <?php endif; ?>



    <!-- =====================================================
         TRANSPORTATION CARDS
    ====================================================== -->

    <div class="row g-4">


        <?php if (count($filteredTransport) > 0): ?>


            <?php foreach ($filteredTransport as $transport): ?>


                <?php


                /*
                |--------------------------------------------------------------------------
                | GOOGLE MAPS URL
                |--------------------------------------------------------------------------
                */

                $mapUrl =

                    "https://www.google.com/maps/search/?api=1&query="

                    .

                    urlencode(
                        $transport["search"]
                    );


                ?>


                <!-- =================================================
                     TRANSPORT CARD
                ================================================== -->

                <div class="col-lg-4 col-md-6">


                    <div class="transport-card">


                        <!-- =========================================
                             ICON AREA
                        ========================================== -->

                        <div class="transport-card-top">


                            <div class="transport-icon">


                                <i
                                    class="bi
                                    <?= htmlspecialchars(
                                        $transport["icon"]
                                    ) ?>"
                                ></i>


                            </div>


                        </div>



                        <!-- =========================================
                             CONTENT
                        ========================================== -->

                        <div class="transport-content">


                            <!-- TYPE -->

                            <span class="transport-badge">


                                <?php if (
                                    $transport["type"]
                                    == "Rail"
                                ): ?>


                                    <i
                                        class="bi
                                        bi-train-front-fill
                                        me-1"
                                    ></i>


                                <?php elseif (
                                    $transport["type"]
                                    == "Bus"
                                ): ?>


                                    <i
                                        class="bi
                                        bi-bus-front-fill
                                        me-1"
                                    ></i>


                                <?php elseif (
                                    $transport["type"]
                                    == "Ferry"
                                ): ?>


                                    <i
                                        class="bi
                                        bi-water
                                        me-1"
                                    ></i>


                                <?php elseif (
                                    $transport["type"]
                                    == "Car Rental"
                                ): ?>


                                    <i
                                        class="bi
                                        bi-car-front-fill
                                        me-1"
                                    ></i>


                                <?php else: ?>


                                    <i
                                        class="bi
                                        bi-taxi-front-fill
                                        me-1"
                                    ></i>


                                <?php endif; ?>


                                <?= htmlspecialchars(
                                    $transport["type"]
                                ) ?>


                            </span>



                            <!-- NAME -->

                            <h4>

                                <?= htmlspecialchars(
                                    $transport["name"]
                                ) ?>

                            </h4>



                            <!-- LOCATION -->

                            <div class="transport-location">


                                <i
                                    class="bi
                                    bi-geo-alt-fill
                                    me-1"
                                ></i>


                                <?= htmlspecialchars(
                                    $transport["area"]
                                ) ?>, Perlis


                            </div>



                            <!-- DESCRIPTION -->

                            <p>

                                <?= htmlspecialchars(
                                    $transport["description"]
                                ) ?>

                            </p>



                            <!-- MAP BUTTON -->

                            <a
                                href="<?= htmlspecialchars(
                                    $mapUrl
                                ) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="map-btn"
                            >


                                <i
                                    class="bi
                                    bi-geo-alt-fill"
                                ></i>


                                Find on Google Maps


                            </a>


                        </div>


                    </div>


                </div>


            <?php endforeach; ?>


        <?php else: ?>


            <!-- =================================================
                 EMPTY RESULT
            ================================================== -->

            <div class="col-12">


                <div class="empty-box">


                    <i
                        class="bi
                        bi-signpost-split-fill"
                    ></i>


                    <h3>

                        No transportation found

                    </h3>


                    <p class="text-muted">

                        Sorry, there are currently no
                        transportation options available
                        for this area.

                    </p>


                    <a
                        href="transportation.php"
                        class="btn btn-primary mt-3"
                    >

                        <i
                            class="bi
                            bi-arrow-left me-1"
                        ></i>

                        View All Areas

                    </a>


                </div>


            </div>


        <?php endif; ?>


    </div>



    <!-- =====================================================
         BOTTOM TRAVEL STRIP
    ====================================================== -->

    <div class="travel-strip">


        <div class="row align-items-center">


            <div class="col-md-8">


                <h3>

                    <i
                        class="bi
                        bi-map-fill me-2"
                    ></i>

                    Plan Your Journey

                </h3>


                <p>

                    Select an area above and explore
                    transportation locations directly
                    through Google Maps.

                </p>


            </div>


            <div class="col-md-4 text-md-end mt-3 mt-md-0">


                <a
                    href="map.php"
                    class="btn btn-light rounded-pill px-4 fw-bold"
                >

                    <i
                        class="bi
                        bi-map me-1"
                    ></i>

                    Explore Map

                </a>


            </div>


        </div>


    </div>



</div>


</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<?php include("footer.php"); ?>



<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



</body>

</html>