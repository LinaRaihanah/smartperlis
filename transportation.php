<?php
include("config.php");

$selectedArea = $_GET['area'] ?? 'All';

/* =========================================================
   TRANSPORT OPTIONS
   ========================================================= */

$transportOptions = [

    /* =========================
       KANGAR
       ========================= */

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Kangar",
        "type" => "Land Transport",
        "icon" => "bi-taxi-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Taxi.jpeg",
        "description" => "Convenient taxi and e-hailing services for travelling around Kangar and nearby areas.",
        "search" => "Kangar, Perlis, Malaysia"
    ],

    [
        "name" => "Bus Services",
        "area" => "Kangar",
        "type" => "Public Transport",
        "icon" => "bi-bus-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Trip%20bus.jpg",
        "description" => "Bus services connecting Kangar with other towns and destinations in Perlis.",
        "search" => "Kangar Bus Station, Perlis, Malaysia"
    ],

    [
        "name" => "Car Rental",
        "area" => "Kangar",
        "type" => "Private Transport",
        "icon" => "bi-car-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Buick%20Car.jpg",
        "description" => "Flexible transport option for visitors who want to explore Perlis by car.",
        "search" => "Kangar, Perlis, Malaysia"
    ],


    /* =========================
       ARAU
       ========================= */

    [
        "name" => "Rail Transport",
        "area" => "Arau",
        "type" => "Rail Transport",
        "icon" => "bi-train-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Train%20.jpg",
        "description" => "Arau Railway Station provides KTM services connecting Perlis with other destinations.",
        "search" => "Arau Railway Station, Perlis, Malaysia"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Arau",
        "type" => "Land Transport",
        "icon" => "bi-taxi-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Taxi.jpeg",
        "description" => "Taxi and e-hailing services are available for travelling around Arau and nearby destinations.",
        "search" => "Arau, Perlis, Malaysia"
    ],

    [
        "name" => "Car Rental",
        "area" => "Arau",
        "type" => "Private Transport",
        "icon" => "bi-car-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Buick%20Car.jpg",
        "description" => "A convenient option for tourists who want to explore Arau and other parts of Perlis.",
        "search" => "Arau, Perlis, Malaysia"
    ],


    /* =========================
       PADANG BESAR
       ========================= */

    [
        "name" => "Rail Transport",
        "area" => "Padang Besar",
        "type" => "Rail Transport",
        "icon" => "bi-train-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Train%20.jpg",
        "description" => "Padang Besar Railway Station connects Perlis with Malaysia and Thailand through the northern railway network.",
        "search" => "Padang Besar Railway Station, Perlis, Malaysia"
    ],

    [
        "name" => "Bus Services",
        "area" => "Padang Besar",
        "type" => "Public Transport",
        "icon" => "bi-bus-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Trip%20bus.jpg",
        "description" => "Bus services provide access between Padang Besar and other areas in Perlis.",
        "search" => "Padang Besar Bus Station, Perlis, Malaysia"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Padang Besar",
        "type" => "Land Transport",
        "icon" => "bi-taxi-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Taxi.jpeg",
        "description" => "Taxi and e-hailing services provide convenient travel around Padang Besar.",
        "search" => "Padang Besar, Perlis, Malaysia"
    ],


    /* =========================
       KUALA PERLIS
       ========================= */

    [
        "name" => "Ferry Services",
        "area" => "Kuala Perlis",
        "type" => "Sea Transport",
        "icon" => "bi-water",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Kuala%20Perlis%20Ferry%20Terminal.jpg",
        "description" => "Kuala Perlis is an important ferry gateway connecting Perlis with Langkawi.",
        "search" => "Kuala Perlis Ferry Terminal, Perlis, Malaysia"
    ],

    [
        "name" => "Bus Services",
        "area" => "Kuala Perlis",
        "type" => "Public Transport",
        "icon" => "bi-bus-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Trip%20bus.jpg",
        "description" => "Bus services connect Kuala Perlis with Kangar and other nearby destinations.",
        "search" => "Kuala Perlis Bus Station, Perlis, Malaysia"
    ],

    [
        "name" => "Taxi & E-Hailing",
        "area" => "Kuala Perlis",
        "type" => "Land Transport",
        "icon" => "bi-taxi-front-fill",
        "image" => "https://commons.wikimedia.org/wiki/Special:FilePath/Taxi.jpeg",
        "description" => "Taxi and e-hailing services are useful for travelling between Kuala Perlis, Kangar and nearby attractions.",
        "search" => "Kuala Perlis, Perlis, Malaysia"
    ]

];


/* =========================================================
   FILTER TRANSPORT
   ========================================================= */

$filteredTransport = [];

foreach ($transportOptions as $transport) {

    if ($selectedArea === "All" || $transport["area"] === $selectedArea) {
        $filteredTransport[] = $transport;
    }

}


/* =========================================================
   AREAS
   ========================================================= */

$areas = [

    [
        "name" => "Kangar",
        "icon" => "bi-buildings-fill",
        "description" => "The capital city of Perlis with various transportation options."
    ],

    [
        "name" => "Arau",
        "icon" => "bi-train-front-fill",
        "description" => "Royal town of Perlis and an important railway stop."
    ],

    [
        "name" => "Padang Besar",
        "icon" => "bi-signpost-split-fill",
        "description" => "Northern border town with railway and bus connections."
    ],

    [
        "name" => "Kuala Perlis",
        "icon" => "bi-water",
        "description" => "Coastal town and major ferry gateway to Langkawi."
    ]

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transportation | PERLIS TOURISM SMART PORTAL</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Main CSS -->
    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

    <style>

        body {
            background: #fefbea;
        }


        /* =====================================================
           HERO
           ===================================================== */

        .transport-hero {

            position: relative;

            min-height: 450px;

            background-image:
                linear-gradient(
                    rgba(0, 48, 135, 0.45),
                    rgba(0, 87, 184, 0.45)
                ),
                url("assets/images/header.jpg");

            background-size: cover;

            background-position: center;

            display: flex;

            align-items: center;

            overflow: hidden;

        }


        .hero-content {

            position: relative;

            z-index: 2;

            color: white;

        }


        .hero-content h1 {

            font-size: 3.2rem;

            font-weight: 800;

            text-shadow: 2px 3px 5px rgba(0,0,0,0.35);

        }


        .hero-content p {

            font-size: 1.1rem;

            max-width: 650px;

        }


        .hero-car {

            position: absolute;

            right: 3%;

            bottom: 0;

            width: 480px;

            z-index: 1;

        }


        /* =====================================================
           AREA SECTION
           ===================================================== */

        .area-section {

            padding: 50px 0 30px;

        }


        .section-title {

            font-weight: 800;

            color: #0057B8;

        }


        .area-card {

            background: white;

            border-radius: 18px;

            padding: 20px;

            text-align: center;

            height: 100%;

            border: 2px solid transparent;

            box-shadow: 0 5px 18px rgba(0,0,0,0.08);

            transition: 0.3s;

        }


        .area-card:hover {

            transform: translateY(-6px);

            border-color: #FFD700;

            box-shadow: 0 10px 25px rgba(0,0,0,0.12);

        }


        .area-icon {

            width: 65px;

            height: 65px;

            margin: auto;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #FFD700,
                #0057B8
            );

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 28px;

        }


        .area-card h5 {

            margin-top: 15px;

            font-weight: 700;

            color: #0057B8;

        }


        .area-card p {

            color: #666;

            font-size: 14px;

            min-height: 45px;

        }


        /* =====================================================
           AREA BUTTONS
           ===================================================== */

        .area-buttons {

            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 10px;

            margin-top: 25px;

        }


        .area-btn {

            border: none;

            padding: 10px 22px;

            border-radius: 30px;

            background: white;

            color: #0057B8;

            font-weight: 600;

            box-shadow: 0 3px 10px rgba(0,0,0,0.08);

            text-decoration: none;

            transition: 0.3s;

        }


        .area-btn:hover {

            background: #FFD700;

            color: #003b80;

        }


        .area-btn.active {

            background: #0057B8;

            color: white;

        }


        /* =====================================================
           TRANSPORT CARDS
           ===================================================== */

        .transport-section {

            padding: 25px 0 60px;

        }


        .transport-card {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            height: 100%;

            border: none;

            box-shadow: 0 6px 20px rgba(0,0,0,0.09);

            transition: 0.3s;

        }


        .transport-card:hover {

            transform: translateY(-8px);

            box-shadow: 0 14px 30px rgba(0,0,0,0.14);

        }


        /* =====================================================
           TRANSPORT IMAGE
           ===================================================== */

        .transport-card-image {

            position: relative;

            height: 210px;

            overflow: hidden;

            background: #0057B8;

        }


        .transport-card-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

            transition: transform 0.5s ease;

        }


        .transport-card:hover
        .transport-card-image img {

            transform: scale(1.08);

        }


        .transport-card-image::after {

            content: "";

            position: absolute;

            inset: 0;

            background: linear-gradient(
                to top,
                rgba(0, 45, 100, 0.65),
                rgba(0, 0, 0, 0.05)
            );

        }


        /* =====================================================
           TRANSPORT ICON
           ===================================================== */

        .transport-icon {

            position: absolute;

            z-index: 2;

            left: 50%;

            top: 50%;

            transform: translate(-50%, -50%);

            width: 70px;

            height: 70px;

            border-radius: 50%;

            background: rgba(255,255,255,0.95);

            color: #0057B8;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 32px;

            box-shadow: 0 5px 15px rgba(0,0,0,0.2);

        }


        .transport-card-body {

            padding: 24px;

        }


        .transport-card-body h4 {

            color: #0057B8;

            font-weight: 800;

            margin-bottom: 8px;

        }


        .transport-type {

            display: inline-block;

            background: #fff3b0;

            color: #735b00;

            padding: 5px 12px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .transport-description {

            color: #666;

            line-height: 1.6;

            min-height: 75px;

        }


        .map-btn {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            width: 100%;

            justify-content: center;

            background: #0057B8;

            color: white;

            border-radius: 10px;

            padding: 11px;

            text-decoration: none;

            font-weight: 600;

            transition: 0.3s;

        }


        .map-btn:hover {

            background: #003f86;

            color: white;

        }


        /* =====================================================
           PLAN JOURNEY
           ===================================================== */

        .journey-strip {

            background:
                linear-gradient(
                    135deg,
                    #FFD700,
                    #0057B8
                );

            border-radius: 22px;

            padding: 35px;

            color: white;

            margin-bottom: 60px;

            box-shadow: 0 8px 25px rgba(0,0,0,0.12);

        }


        .journey-strip h3 {

            font-weight: 800;

        }


        .journey-btn {

            background: white;

            color: #0057B8;

            padding: 12px 25px;

            border-radius: 30px;

            font-weight: 700;

            text-decoration: none;

            display: inline-block;

            margin-top: 10px;

        }


        .journey-btn:hover {

            background: #f5f5f5;

            color: #003f86;

        }


        /* =====================================================
           MOBILE
           ===================================================== */

        @media (max-width: 991px) {

            .hero-car {

                opacity: 0.35;

                width: 400px;

            }

            .hero-content h1 {

                font-size: 2.5rem;

            }

        }


        @media (max-width: 576px) {

            .transport-hero {

                min-height: 400px;

            }

            .hero-content h1 {

                font-size: 2rem;

            }

            .hero-car {

                width: 300px;

            }

        }

    </style>

</head>


<body>


<?php include("navbar.php"); ?>


<!-- =========================================================
     HERO
     ========================================================= -->

<section class="transport-hero">

    <div class="container">

        <div class="hero-content">

            <span class="badge bg-warning text-dark mb-3 px-3 py-2">
                <i class="bi bi-signpost-2-fill me-2"></i>
                EXPLORE PERLIS
            </span>

            <h1>
                Transportation
                <br>
                Around Perlis
            </h1>

            <p>
                Discover convenient transportation options
                available across Kangar, Arau, Padang Besar
                and Kuala Perlis.
            </p>

        </div>

    </div>


    <img
        src="assets/images/car.png"
        alt="Perlis Transportation"
        class="hero-car"
    >

</section>


<!-- =========================================================
     AREA SECTION
     ========================================================= -->

<section class="area-section">

    <div class="container">

        <div class="text-center mb-4">

            <h2 class="section-title">
                Explore Transportation by Area
            </h2>

            <p class="text-muted">
                Choose an area to discover available transportation options.
            </p>

        </div>


        <!-- AREA FILTER -->

        <div class="area-buttons">

            <a
                href="transport.php"
                class="area-btn <?= $selectedArea === 'All' ? 'active' : '' ?>"
            >
                <i class="bi bi-grid-fill me-2"></i>
                All Areas
            </a>


            <?php foreach ($areas as $area): ?>

                <a
                    href="transport.php?area=<?= urlencode($area["name"]) ?>"
                    class="area-btn <?= $selectedArea === $area["name"] ? 'active' : '' ?>"
                >

                    <i class="bi <?= $area["icon"] ?> me-2"></i>

                    <?= htmlspecialchars($area["name"]) ?>

                </a>

            <?php endforeach; ?>

        </div>


        <!-- AREA INFORMATION -->

        <?php if ($selectedArea !== "All"): ?>

            <?php foreach ($areas as $area): ?>

                <?php if ($area["name"] === $selectedArea): ?>

                    <div class="row justify-content-center mt-4">

                        <div class="col-lg-8">

                            <div class="area-card">

                                <div class="area-icon">

                                    <i class="bi <?= $area["icon"] ?>"></i>

                                </div>

                                <h5>
                                    <?= htmlspecialchars($area["name"]) ?>
                                </h5>

                                <p>
                                    <?= htmlspecialchars($area["description"]) ?>
                                </p>

                            </div>

                        </div>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>

</section>


<!-- =========================================================
     TRANSPORT SECTION
     ========================================================= -->

<section class="transport-section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                <?php if ($selectedArea === "All"): ?>

                    Transportation Options

                <?php else: ?>

                    Transportation in
                    <?= htmlspecialchars($selectedArea) ?>

                <?php endif; ?>

            </h2>

            <p class="text-muted">

                Find the right transportation for your journey around Perlis.

            </p>

        </div>


        <div class="row g-4">


            <?php if (count($filteredTransport) > 0): ?>


                <?php foreach ($filteredTransport as $transport): ?>

                    <div class="col-lg-4 col-md-6">

                        <div class="transport-card">


                            <!-- IMAGE -->

                            <div class="transport-card-image">

                                <img
                                    src="<?= htmlspecialchars($transport["image"]) ?>"
                                    alt="<?= htmlspecialchars($transport["name"]) ?>"
                                    loading="lazy"
                                >

                                <div class="transport-icon">

                                    <i
                                        class="bi <?= htmlspecialchars($transport["icon"]) ?>"
                                    ></i>

                                </div>

                            </div>


                            <!-- CARD CONTENT -->

                            <div class="transport-card-body">

                                <span class="transport-type">

                                    <?= htmlspecialchars($transport["type"]) ?>

                                </span>


                                <h4>

                                    <?= htmlspecialchars($transport["name"]) ?>

                                </h4>


                                <p class="transport-description">

                                    <?= htmlspecialchars($transport["description"]) ?>

                                </p>


                                <?php

                                $mapUrl =
                                    "https://www.google.com/maps/search/?api=1&query="
                                    . urlencode($transport["search"]);

                                ?>


                                <a
                                    href="<?= htmlspecialchars($mapUrl) ?>"
                                    target="_blank"
                                    class="map-btn"
                                >

                                    <i class="bi bi-geo-alt-fill"></i>

                                    View on Google Maps

                                </a>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>


            <?php else: ?>


                <!-- NO RESULTS -->

                <div class="col-12">

                    <div class="text-center py-5">

                        <i
                            class="bi bi-exclamation-circle"
                            style="font-size: 60px; color: #0057B8;"
                        ></i>

                        <h3 class="mt-3">
                            No transportation found
                        </h3>

                        <p class="text-muted">
                            Please select another area.
                        </p>


                        <a
                            href="transport.php"
                            class="btn btn-primary rounded-pill px-4"
                        >

                            <i class="bi bi-arrow-left me-2"></i>

                            View All Transportation

                        </a>

                    </div>

                </div>


            <?php endif; ?>


        </div>

    </div>

</section>


<!-- =========================================================
     PLAN YOUR JOURNEY
     ========================================================= -->

<section class="container">

    <div class="journey-strip text-center">

        <h3>
            <i class="bi bi-map-fill me-2"></i>
            Plan Your Journey Around Perlis
        </h3>

        <p class="mb-2">

            Discover destinations and plan your route
            around the beautiful state of Perlis.

        </p>


        <a
            href="map.php"
            class="journey-btn"
        >

            <i class="bi bi-map me-2"></i>

            Explore Perlis Map

        </a>

    </div>

</section>


<?php include("footer.php"); ?>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>