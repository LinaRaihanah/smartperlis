<?php

include("config.php");


/* =========================================================
   SELECTED AREA
========================================================= */

$selectedArea = $_GET['area'] ?? 'All';


/* =========================================================
   TRANSPORTATION DATA
========================================================= */

$transportOptions = [

    /* =========================
       KANGAR
    ========================= */

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Kangar",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "emoji" => "🚕",
        "description" =>
            "Find convenient taxi and e-hailing services for travelling around Kangar.",
        "search" =>
            "Taxi and e-hailing in Kangar, Perlis"
    ],

    [
        "name" => "Bus Services",
        "area" => "Kangar",
        "type" => "Bus",
        "icon" => "bi-bus-front-fill",
        "emoji" => "🚌",
        "description" =>
            "Explore bus transportation options available around Kangar and nearby areas.",
        "search" =>
            "Bus transportation in Kangar, Perlis"
    ],

    [
        "name" => "Car Rental",
        "area" => "Kangar",
        "type" => "Car Rental",
        "icon" => "bi-car-front-fill",
        "emoji" => "🚗",
        "description" =>
            "Find car rental services for a flexible journey around Kangar and Perlis.",
        "search" =>
            "Car rental in Kangar, Perlis"
    ],


    /* =========================
       ARAU
    ========================= */

    [
        "name" => "Rail Transport",
        "area" => "Arau",
        "type" => "Rail",
        "icon" => "bi-train-front-fill",
        "emoji" => "🚆",
        "description" =>
            "Explore railway transportation options around Arau for convenient travel.",
        "search" =>
            "Railway station and train transportation in Arau, Perlis"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Arau",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "emoji" => "🚕",
        "description" =>
            "Find taxi and e-hailing transportation services available around Arau.",
        "search" =>
            "Taxi and e-hailing in Arau, Perlis"
    ],

    [
        "name" => "Car Rental",
        "area" => "Arau",
        "type" => "Car Rental",
        "icon" => "bi-car-front-fill",
        "emoji" => "🚗",
        "description" =>
            "Discover car rental options for exploring Arau and surrounding attractions.",
        "search" =>
            "Car rental in Arau, Perlis"
    ],


    /* =========================
       PADANG BESAR
    ========================= */

    [
        "name" => "Rail Transport",
        "area" => "Padang Besar",
        "type" => "Rail",
        "icon" => "bi-train-front-fill",
        "emoji" => "🚆",
        "description" =>
            "Explore railway transportation for travelling to and around Padang Besar.",
        "search" =>
            "Railway station and train transportation in Padang Besar, Perlis"
    ],

    [
        "name" => "Bus Services",
        "area" => "Padang Besar",
        "type" => "Bus",
        "icon" => "bi-bus-front-fill",
        "emoji" => "🚌",
        "description" =>
            "Find bus transportation options around Padang Besar and nearby locations.",
        "search" =>
            "Bus transportation in Padang Besar, Perlis"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Padang Besar",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "emoji" => "🚕",
        "description" =>
            "Find taxi and e-hailing services for convenient travel around Padang Besar.",
        "search" =>
            "Taxi and e-hailing in Padang Besar, Perlis"
    ],


    /* =========================
       KUALA PERLIS
    ========================= */

    [
        "name" => "Ferry Services",
        "area" => "Kuala Perlis",
        "type" => "Ferry",
        "icon" => "bi-water",
        "emoji" => "⛴️",
        "description" =>
            "Explore ferry transportation services around the Kuala Perlis waterfront.",
        "search" =>
            "Ferry terminal and ferry transportation in Kuala Perlis, Perlis"
    ],

    [
        "name" => "Bus Services",
        "area" => "Kuala Perlis",
        "type" => "Bus",
        "icon" => "bi-bus-front-fill",
        "emoji" => "🚌",
        "description" =>
            "Find bus transportation options for travelling around Kuala Perlis.",
        "search" =>
            "Bus transportation in Kuala Perlis, Perlis"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Kuala Perlis",
        "type" => "Taxi / E-Hailing",
        "icon" => "bi-taxi-front-fill",
        "emoji" => "🚕",
        "description" =>
            "Find taxi and e-hailing services around Kuala Perlis for an easier journey.",
        "search" =>
            "Taxi and e-hailing in Kuala Perlis, Perlis"
    ]

];


/* =========================================================
   FILTER BY AREA
========================================================= */

$filteredTransport = [];

foreach ($transportOptions as $transport) {

    if (
        $selectedArea == "All" ||
        $transport["area"] == $selectedArea
    ) {

        $filteredTransport[] = $transport;

    }

}


/* =========================================================
   AREA INFORMATION
========================================================= */

$areas = [

    "Kuala Perlis" => [
        "icon" => "bi-water",
        "subtitle" => "Coastal Connections",
        "description" =>
            "Explore ferry, bus, taxi and local transportation options around the coastal gateway of Kuala Perlis."
    ],

    "Padang Besar" => [
        "icon" => "bi-signpost-split-fill",
        "subtitle" => "Northern Gateway",
        "description" =>
            "Discover rail, bus and local transportation options for travelling around Padang Besar."
    ],

    "Kangar" => [
        "icon" => "bi-building",
        "subtitle" => "City Connections",
        "description" =>
            "Find convenient transportation options for exploring Kangar and nearby attractions."
    ],

    "Arau" => [
        "icon" => "bi-train-front-fill",
        "subtitle" => "Royal Town Journey",
        "description" =>
            "Discover rail, taxi and car rental options for travelling around Arau and surrounding areas."
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
    Transportation | Perlis Tourism
</title>


<!-- BOOTSTRAP -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<!-- BOOTSTRAP ICONS -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    rel="stylesheet"
>


<!-- MAIN CSS -->

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
   HEADER
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

    min-height: 450px;

    padding: 60px 20px;

    display: flex;

    align-items: center;

    overflow: hidden;

}


.transport-header-content {

    max-width: 650px;

    margin-left: 5%;

    position: relative;

    z-index: 2;

}


/* BADGE */

.travel-badge {

    display: inline-block;

    background: linear-gradient(
        135deg,
        #FFD700,
        #ffb300
    );

    color: #333;

    font-weight: 700;

    padding: 9px 18px;

    border-radius: 30px;

    margin-bottom: 18px;

    box-shadow:
        0 5px 15px rgba(0,0,0,0.12);

}


/* HEADER TITLE */

.transport-header h1 {

    font-size: 3.2rem;

    font-weight: 800;

    color: #0057B8;

    margin-bottom: 15px;

}


.transport-header h1 span {

    color: #E0A800;

}


/* HEADER DESCRIPTION */

.transport-header p {

    font-size: 1.1rem;

    line-height: 1.7;

    color: #444;

    max-width: 550px;

}


/* =========================================================
   CAR IMAGE
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

    font-weight: 800;

    color: #0057B8;

    font-size: 2.2rem;

}


.section-title p {

    color: #777;

    max-width: 650px;

    margin: auto;

    line-height: 1.7;

}


.title-line {

    width: 70px;

    height: 5px;

    background: #FFD700;

    border-radius: 20px;

    margin: 15px auto 0;

}


/* =========================================================
   AREA FILTER
========================================================= */

.area-filter {

    display: flex;

    flex-wrap: wrap;

    justify-content: center;

    gap: 12px;

    margin-bottom: 45px;

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

    background: linear-gradient(
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

    position: relative;

    overflow: hidden;

    background: linear-gradient(
        135deg,
        #fff9d9,
        #ffffff,
        #eef6ff
    );

    border-radius: 25px;

    padding: 30px;

    margin-bottom: 45px;

    box-shadow:
        0 8px 25px rgba(0,0,0,0.08);

    border-left:
        7px solid #FFD700;

}


.area-info::after {

    content: "";

    position: absolute;

    width: 140px;

    height: 140px;

    border-radius: 50%;

    background:
        rgba(0,87,184,0.06);

    right: -40px;

    top: -50px;

}


.area-info-icon {

    width: 65px;

    height: 65px;

    min-width: 65px;

    border-radius: 18px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #0057B8;

    color: white;

    font-size: 1.7rem;

    box-shadow:
        0 7px 18px rgba(0,87,184,0.22);

}


.area-small-title {

    color: #E0A800;

    font-size: 0.85rem;

    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: 1px;

    margin-bottom: 3px;

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

    overflow: hidden;

    height: 100%;

    box-shadow:
        0 8px 25px rgba(0,0,0,0.08);

    transition:
        all 0.3s ease;

    border: none;

    position: relative;

}


.transport-card:hover {

    transform:
        translateY(-8px);

    box-shadow:
        0 16px 35px rgba(0,0,0,0.15);

}


/* =========================================================
   CARD TOP
========================================================= */

.transport-card-top {

    min-height: 170px;

    background: linear-gradient(
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

    background:
        rgba(255,255,255,0.10);

    top: -70px;

    right: -50px;

}


.transport-card-top::after {

    content: "";

    position: absolute;

    width: 110px;

    height: 110px;

    border-radius: 50%;

    background:
        rgba(255,215,0,0.25);

    bottom: -45px;

    left: -25px;

}


/* =========================================================
   NEW TRANSPORT EMOJI
========================================================= */

.transport-emoji {

    width: 105px;

    height: 105px;

    border-radius: 50%;

    background: rgba(255,255,255,0.96);

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 4.3rem;

    line-height: 1;

    position: relative;

    z-index: 2;

    box-shadow:
        0 9px 22px rgba(0,0,0,0.20);

    transition: all 0.3s ease;

}


.transport-card:hover .transport-emoji {

    transform:
        translateY(-4px)
        scale(1.08);

}


/* =========================================================
   CARD CONTENT
========================================================= */

.transport-content {

    padding: 25px;

    display: flex;

    flex-direction: column;

    height: calc(100% - 170px);

}


.transport-badge {

    display: inline-block;

    width: fit-content;

    background: #fff3cd;

    color: #9a6b00;

    padding: 7px 13px;

    border-radius: 20px;

    font-size: 0.78rem;

    font-weight: 700;

    margin-bottom: 12px;

}


.transport-content h4 {

    color: #0057B8;

    font-weight: 800;

    margin-bottom: 10px;

}


.transport-location {

    color: #666;

    font-size: 14px;

    margin-bottom: 12px;

}


.transport-location i {

    color: #E0A800;

}


.transport-description {

    color: #777;

    line-height: 1.6;

    margin-bottom: 22px;

}


/* =========================================================
   GOOGLE MAP BUTTON
========================================================= */

.map-btn {

    width: 100%;

    border: none;

    border-radius: 12px;

    padding: 12px 18px;

    background: linear-gradient(
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

    margin-top: auto;

}


.map-btn:hover {

    color: #0057B8;

    transform:
        translateY(-2px);

    background: #FFD700;

    box-shadow:
        0 8px 18px rgba(0,87,184,0.20);

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
   RESPONSIVE
========================================================= */

@media (max-width: 992px) {

    .header-car {

        width: 400px;

        opacity: 0.85;

    }

}


@media (max-width: 768px) {

    .transport-header {

        min-height: 600px;

        padding:
            45px 20px 300px;

        align-items:
            flex-start;

    }


    .transport-header-content {

        margin-left: 0;

    }


    .transport-header h1 {

        font-size: 2.3rem;

    }


    .transport-header p {

        font-size: 1rem;

    }


    .header-car {

        right: 50%;

        transform:
            translateX(50%);

        bottom: 20px;

        width: 330px;

        opacity: 1;

    }


    .transport-section {

        padding:
            50px 0 40px;

    }


    .area-btn {

        padding:
            10px 16px;

        font-size: 14px;

    }


    .area-info {

        padding: 22px;

    }


    .area-info .d-flex {

        align-items:
            flex-start !important;

    }


    .transport-emoji {

        width: 95px;

        height: 95px;

        font-size: 3.8rem;

    }

}


@media (max-width: 576px) {

    .transport-header h1 {

        font-size: 2rem;

    }


    .section-title h2 {

        font-size: 1.8rem;

    }


    .header-car {

        width: 300px;

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
========================================================= -->

<section class="transport-header">


    <div class="transport-header-content">


        <div class="travel-badge">

            <i class="bi bi-car-front-fill me-2"></i>

            Travel Perlis

        </div>


        <h1>

            Explore

            <span>
                Transportation
            </span>

            in Perlis

        </h1>


        <p>

            Find convenient ways to travel across Perlis,
            from local buses and taxis to rail, ferry
            and car rental services.

        </p>


    </div>


    <!-- CAR IMAGE -->

    <img
        src="assets/images/car.png"
        alt="Car"
        class="header-car"
    >


</section>



<!-- =========================================================
     TRANSPORT SECTION
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

            Choose an area to discover convenient
            transportation options for your journey
            around Perlis.

        </p>


        <div class="title-line"></div>


    </div>



    <!-- =====================================================
         AREA FILTER
    ====================================================== -->

    <div class="area-filter">


        <!-- ALL -->

        <a
            href="transportation.php"
            class="area-btn <?= ($selectedArea == 'All') ? 'active' : '' ?>"
        >

            <i class="bi bi-grid-fill me-1"></i>

            All Areas

        </a>


        <!-- KUALA PERLIS -->

        <a
            href="transportation.php?area=Kuala%20Perlis"
            class="area-btn <?= ($selectedArea == 'Kuala Perlis') ? 'active' : '' ?>"
        >

            <i class="bi bi-water me-1"></i>

            Kuala Perlis

        </a>


        <!-- PADANG BESAR -->

        <a
            href="transportation.php?area=Padang%20Besar"
            class="area-btn <?= ($selectedArea == 'Padang Besar') ? 'active' : '' ?>"
        >

            <i class="bi bi-signpost-split-fill me-1"></i>

            Padang Besar

        </a>


        <!-- KANGAR -->

        <a
            href="transportation.php?area=Kangar"
            class="area-btn <?= ($selectedArea == 'Kangar') ? 'active' : '' ?>"
        >

            <i class="bi bi-building me-1"></i>

            Kangar

        </a>


        <!-- ARAU -->

        <a
            href="transportation.php?area=Arau"
            class="area-btn <?= ($selectedArea == 'Arau') ? 'active' : '' ?>"
        >

            <i class="bi bi-train-front-fill me-1"></i>

            Arau

        </a>


    </div>



    <!-- =====================================================
         SELECTED AREA INFORMATION
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
                        class="bi <?= htmlspecialchars(
                            $areas[$selectedArea]['icon']
                        ) ?>"
                    ></i>

                </div>


                <div>


                    <div class="area-small-title">

                        <?= htmlspecialchars(
                            $areas[$selectedArea]['subtitle']
                        ) ?>

                    </div>


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
         TRANSPORT CARDS
    ====================================================== -->

    <div class="row g-4">


        <?php if (count($filteredTransport) > 0): ?>


            <?php foreach ($filteredTransport as $transport): ?>


                <?php

                /* ============================================
                   GOOGLE MAPS SEARCH
                ============================================ */

                $mapUrl =
                    "https://www.google.com/maps/search/?api=1&query="
                    .
                    urlencode(
                        $transport["search"]
                    );

                ?>


                <div class="col-lg-4 col-md-6">


                    <div class="transport-card">


                        <!-- ==================================
                             EMOJI TOP
                        =================================== -->

                        <div class="transport-card-top">


                            <div class="transport-emoji">

                                <?= $transport["emoji"] ?>

                            </div>


                        </div>



                        <!-- ==================================
                             CONTENT
                        =================================== -->

                        <div class="transport-content">


                            <!-- TYPE -->

                            <span class="transport-badge">

                                <?= $transport["emoji"] ?>

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

                                <i class="bi bi-geo-alt-fill me-1"></i>

                                <?= htmlspecialchars(
                                    $transport["area"]
                                ) ?>, Perlis

                            </div>



                            <!-- DESCRIPTION -->

                            <p class="transport-description">

                                <?= htmlspecialchars(
                                    $transport["description"]
                                ) ?>

                            </p>



                            <!-- GOOGLE MAP BUTTON -->

                            <a
                                href="<?= htmlspecialchars($mapUrl) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="map-btn"
                            >

                                <i class="bi bi-geo-alt-fill"></i>

                                Find on Google Maps

                            </a>


                        </div>


                    </div>


                </div>


            <?php endforeach; ?>


        <?php else: ?>


            <div class="col-12">


                <div class="empty-box">


                    <i class="bi bi-car-front-fill"></i>


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

                        <i class="bi bi-arrow-left me-1"></i>

                        View All Areas

                    </a>


                </div>


            </div>


        <?php endif; ?>


    </div>


</div>


</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<?php include("footer.php"); ?>



<!-- BOOTSTRAP JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>