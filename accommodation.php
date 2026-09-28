<?php

include("config.php");


/* =========================================================
   SELECTED AREA
========================================================= */

$selectedArea = $_GET['area'] ?? 'All';


/* =========================================================
   ACCOMMODATION DATA
========================================================= */

$accommodations = [

    /* =========================
       KANGAR
    ========================= */

    [
        "name" => "Hotels in Kangar",
        "area" => "Kangar",
        "type" => "Hotel",
        "emoji" => "🏨",
        "description" =>
            "Discover comfortable hotels located around Kangar, the capital city of Perlis.",
        "search" =>
            "Hotels in Kangar, Perlis"
    ],

    [
        "name" => "Homestays in Kangar",
        "area" => "Kangar",
        "type" => "Homestay",
        "emoji" => "🏡",
        "description" =>
            "Find homestays and guesthouses for a comfortable local stay around Kangar.",
        "search" =>
            "Homestays in Kangar, Perlis"
    ],

    [
        "name" => "Resorts in Kangar",
        "area" => "Kangar",
        "type" => "Resort",
        "emoji" => "🌴",
        "description" =>
            "Explore relaxing resort accommodation options around Kangar and nearby areas.",
        "search" =>
            "Resorts near Kangar, Perlis"
    ],


    /* =========================
       ARAU
    ========================= */

    [
        "name" => "Hotels in Arau",
        "area" => "Arau",
        "type" => "Hotel",
        "emoji" => "🏨",
        "description" =>
            "Find convenient hotel accommodation around the royal town of Arau.",
        "search" =>
            "Hotels in Arau, Perlis"
    ],

    [
        "name" => "Homestays in Arau",
        "area" => "Arau",
        "type" => "Homestay",
        "emoji" => "🏡",
        "description" =>
            "Experience a comfortable local stay at homestays and guesthouses around Arau.",
        "search" =>
            "Homestays in Arau, Perlis"
    ],

    [
        "name" => "Resorts near Arau",
        "area" => "Arau",
        "type" => "Resort",
        "emoji" => "🌴",
        "description" =>
            "Discover peaceful resort accommodation around Arau and its surrounding areas.",
        "search" =>
            "Resorts near Arau, Perlis"
    ],


    /* =========================
       PADANG BESAR
    ========================= */

    [
        "name" => "Hotels in Padang Besar",
        "area" => "Padang Besar",
        "type" => "Hotel",
        "emoji" => "🏨",
        "description" =>
            "Find convenient hotels near Padang Besar for travellers visiting the northern gateway of Perlis.",
        "search" =>
            "Hotels in Padang Besar, Perlis"
    ],

    [
        "name" => "Homestays in Padang Besar",
        "area" => "Padang Besar",
        "type" => "Homestay",
        "emoji" => "🏡",
        "description" =>
            "Discover homestays and guesthouses around Padang Besar for a relaxing local stay.",
        "search" =>
            "Homestays in Padang Besar, Perlis"
    ],

    [
        "name" => "Resorts near Padang Besar",
        "area" => "Padang Besar",
        "type" => "Resort",
        "emoji" => "🌴",
        "description" =>
            "Explore resort accommodation around Padang Besar and nearby natural attractions.",
        "search" =>
            "Resorts near Padang Besar, Perlis"
    ],


    /* =========================
       KUALA PERLIS
    ========================= */

    [
        "name" => "Hotels in Kuala Perlis",
        "area" => "Kuala Perlis",
        "type" => "Hotel",
        "emoji" => "🏨",
        "description" =>
            "Discover convenient hotels around Kuala Perlis and the coastal waterfront area.",
        "search" =>
            "Hotels in Kuala Perlis, Perlis"
    ],

    [
        "name" => "Homestays in Kuala Perlis",
        "area" => "Kuala Perlis",
        "type" => "Homestay",
        "emoji" => "🏡",
        "description" =>
            "Find welcoming homestays and guesthouses around the coastal town of Kuala Perlis.",
        "search" =>
            "Homestays in Kuala Perlis, Perlis"
    ],

    [
        "name" => "Resorts in Kuala Perlis",
        "area" => "Kuala Perlis",
        "type" => "Resort",
        "emoji" => "🌴",
        "description" =>
            "Explore relaxing accommodation options around Kuala Perlis and nearby coastal areas.",
        "search" =>
            "Resorts in Kuala Perlis, Perlis"
    ]

];


/* =========================================================
   FILTER ACCOMMODATION BY AREA
========================================================= */

$filteredAccommodations = [];


foreach ($accommodations as $accommodation) {

    if (
        $selectedArea == "All" ||
        $accommodation["area"] == $selectedArea
    ) {

        $filteredAccommodations[] = $accommodation;

    }

}


/* =========================================================
   AREA INFORMATION
========================================================= */

$areas = [

    "Kuala Perlis" => [

        "icon" => "bi-water",

        "subtitle" => "Coastal Stay",

        "description" =>
            "Discover accommodation around Kuala Perlis, ideal for visitors exploring the waterfront and nearby attractions."

    ],

    "Padang Besar" => [

        "icon" => "bi-signpost-split-fill",

        "subtitle" => "Northern Stay",

        "description" =>
            "Find convenient accommodation around Padang Besar for your visit to the northern gateway of Perlis."

    ],

    "Kangar" => [

        "icon" => "bi-building",

        "subtitle" => "City Stay",

        "description" =>
            "Stay close to the heart of Perlis with hotels, homestays and accommodation options around Kangar."

    ],

    "Arau" => [

        "icon" => "bi-house-heart-fill",

        "subtitle" => "Royal Town Stay",

        "description" =>
            "Discover comfortable accommodation around Arau and enjoy convenient access to the royal town and surrounding areas."

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
Accommodation | Perlis Tourism
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

.accommodation-header {

    position: relative;

    background-image:

        linear-gradient(
            90deg,
            rgba(255,255,255,0.98) 0%,
            rgba(255,255,255,0.88) 45%,
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


.accommodation-header-content {

    max-width: 650px;

    margin-left: 5%;

    position: relative;

    z-index: 2;

}


/* =========================================================
   HEADER BADGE
========================================================= */

.stay-badge {

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


/* =========================================================
   HEADER TITLE
========================================================= */

.accommodation-header h1 {

    font-size: 3.2rem;

    font-weight: 800;

    color: #0057B8;

    margin-bottom: 15px;

}


.accommodation-header h1 span {

    color: #E0A800;

}


/* =========================================================
   HEADER DESCRIPTION
========================================================= */

.accommodation-header p {

    font-size: 1.1rem;

    line-height: 1.7;

    color: #444;

    max-width: 560px;

}


/* =========================================================
   ACCOMMODATION SECTION
========================================================= */

.accommodation-section {

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
   ACCOMMODATION CARD
========================================================= */

.stay-card {

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


.stay-card:hover {

    transform: translateY(-8px);

    box-shadow:
        0 16px 35px rgba(0,0,0,0.15);

}


/* =========================================================
   CARD TOP
========================================================= */

.stay-card-top {

    min-height: 180px;

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


.stay-card-top::before {

    content: "";

    position: absolute;

    width: 190px;

    height: 190px;

    border-radius: 50%;

    background:
        rgba(255,255,255,0.10);

    top: -75px;

    right: -55px;

}


.stay-card-top::after {

    content: "";

    position: absolute;

    width: 120px;

    height: 120px;

    border-radius: 50%;

    background:
        rgba(255,215,0,0.25);

    bottom: -50px;

    left: -30px;

}


/* =========================================================
   ACCOMMODATION EMOJI
========================================================= */

.stay-emoji {

    width: 110px;

    height: 110px;

    border-radius: 50%;

    background:
        rgba(255,255,255,0.96);

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 4.5rem;

    line-height: 1;

    position: relative;

    z-index: 2;

    box-shadow:
        0 9px 22px rgba(0,0,0,0.20);

    transition:
        all 0.3s ease;

}


.stay-card:hover .stay-emoji {

    transform:
        translateY(-4px)
        scale(1.08);

}


/* =========================================================
   CARD CONTENT
========================================================= */

.stay-content {

    padding: 25px;

    display: flex;

    flex-direction: column;

    height:
        calc(100% - 180px);

}


.stay-type {

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


.stay-content h4 {

    color: #0057B8;

    font-weight: 800;

    margin-bottom: 10px;

}


.stay-location {

    color: #666;

    font-size: 14px;

    margin-bottom: 12px;

}


.stay-location i {

    color: #E0A800;

}


.stay-description {

    color: #777;

    line-height: 1.6;

    margin-bottom: 22px;

}


/* =========================================================
   MAP BUTTON
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

    background: #FFD700;

    transform: translateY(-2px);

    box-shadow:
        0 8px 18px rgba(0,87,184,0.20);

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 768px) {

    .accommodation-header {

        min-height: 380px;

        padding:
            50px 20px;

        align-items: center;

        background-position: center;

    }


    .accommodation-header-content {

        margin-left: 0;

        max-width: 100%;

    }


    .accommodation-header h1 {

        font-size: 2.3rem;

    }


    .accommodation-header p {

        font-size: 1rem;

    }


    .accommodation-section {

        padding:
            50px 0 40px;

    }


    .area-filter {

        gap: 9px;

        margin-bottom: 35px;

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


    .area-info-icon {

        width: 55px;

        height: 55px;

        min-width: 55px;

        font-size: 1.4rem;

    }


    .stay-emoji {

        width: 95px;

        height: 95px;

        font-size: 3.8rem;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 576px) {

    .accommodation-header {

        min-height: 350px;

        padding:
            40px 18px;

    }


    .stay-badge {

        font-size: 14px;

        padding:
            8px 14px;

    }


    .accommodation-header h1 {

        font-size: 2rem;

    }


    .accommodation-header p {

        font-size: 0.95rem;

    }


    .section-title h2 {

        font-size: 1.8rem;

    }


    .section-title p {

        padding:
            0 10px;

    }


    .area-btn {

        padding:
            9px 13px;

        font-size: 13px;

    }


    .stay-card-top {

        min-height: 160px;

    }


    .stay-content {

        height:
            calc(100% - 160px);

        padding: 22px;

    }


    .stay-emoji {

        width: 82px;

        height: 82px;

        font-size: 3.3rem;

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

<section class="accommodation-header">


    <div class="accommodation-header-content">


        <div class="stay-badge">

            <i class="bi bi-house-heart-fill me-2"></i>

            Stay in Perlis

        </div>


        <h1>

            Find Your

            <span>
                Perfect Stay
            </span>

            in Perlis

        </h1>


        <p>

            Discover comfortable places to stay while
            exploring Perlis, from convenient hotels
            to welcoming homestays and relaxing resorts.

        </p>


    </div>


</section>



<!-- =========================================================
     ACCOMMODATION SECTION
========================================================= -->

<section class="accommodation-section">


<div class="container">


    <!-- =====================================================
         TITLE
    ====================================================== -->

    <div class="section-title">


        <h2>

            <i class="bi bi-house-door-fill me-2"></i>

            Where to Stay

        </h2>


        <p>

            Choose an area to discover accommodation
            options for your stay in Perlis.

        </p>


        <div class="title-line"></div>


    </div>



    <!-- =====================================================
         AREA FILTER
    ====================================================== -->

    <div class="area-filter">


        <!-- ALL AREAS -->

        <a
            href="accommodation.php"
            class="area-btn <?= ($selectedArea == 'All') ? 'active' : '' ?>"
        >

            <i class="bi bi-grid-fill me-1"></i>

            All Areas

        </a>



        <!-- KUALA PERLIS -->

        <a
            href="accommodation.php?area=Kuala%20Perlis"
            class="area-btn <?= ($selectedArea == 'Kuala Perlis') ? 'active' : '' ?>"
        >

            <i class="bi bi-water me-1"></i>

            Kuala Perlis

        </a>



        <!-- PADANG BESAR -->

        <a
            href="accommodation.php?area=Padang%20Besar"
            class="area-btn <?= ($selectedArea == 'Padang Besar') ? 'active' : '' ?>"
        >

            <i class="bi bi-signpost-split-fill me-1"></i>

            Padang Besar

        </a>



        <!-- KANGAR -->

        <a
            href="accommodation.php?area=Kangar"
            class="area-btn <?= ($selectedArea == 'Kangar') ? 'active' : '' ?>"
        >

            <i class="bi bi-building me-1"></i>

            Kangar

        </a>



        <!-- ARAU -->

        <a
            href="accommodation.php?area=Arau"
            class="area-btn <?= ($selectedArea == 'Arau') ? 'active' : '' ?>"
        >

            <i class="bi bi-house-heart-fill me-1"></i>

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

                        Accommodation in

                        <?= htmlspecialchars(
                            $selectedArea
                        ) ?>

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
         ACCOMMODATION CARDS
    ====================================================== -->

    <div class="row g-4">


        <?php if (count($filteredAccommodations) > 0): ?>


            <?php foreach (
                $filteredAccommodations
                as $accommodation
            ): ?>


                <?php


                /* ============================================
                   GOOGLE MAPS URL
                ============================================ */

                $mapUrl =

                    "https://www.google.com/maps/search/?api=1&query="

                    .

                    urlencode(
                        $accommodation["search"]
                    );


                ?>


                <div class="col-lg-4 col-md-6">


                    <div class="stay-card">


                        <!-- ==================================
                             CARD TOP
                        =================================== -->

                        <div class="stay-card-top">


                            <div class="stay-emoji">

                                <?= $accommodation["emoji"] ?>

                            </div>


                        </div>



                        <!-- ==================================
                             CARD CONTENT
                        =================================== -->

                        <div class="stay-content">


                            <!-- TYPE -->

                            <span class="stay-type">

                                <?= $accommodation["emoji"] ?>

                                <?= htmlspecialchars(
                                    $accommodation["type"]
                                ) ?>

                            </span>



                            <!-- NAME -->

                            <h4>

                                <?= htmlspecialchars(
                                    $accommodation["name"]
                                ) ?>

                            </h4>



                            <!-- LOCATION -->

                            <div class="stay-location">


                                <i class="bi bi-geo-alt-fill me-1"></i>


                                <?= htmlspecialchars(
                                    $accommodation["area"]
                                ) ?>, Perlis


                            </div>



                            <!-- DESCRIPTION -->

                            <p class="stay-description">


                                <?= htmlspecialchars(
                                    $accommodation["description"]
                                ) ?>


                            </p>



                            <!-- GOOGLE MAP BUTTON -->

                            <a
                                href="<?= htmlspecialchars(
                                    $mapUrl
                                ) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="map-btn"
                            >

                                <i class="bi bi-geo-alt-fill"></i>

                                View
                                <?= htmlspecialchars(
                                    $accommodation["type"]
                                ) ?>
                                on Map

                            </a>


                        </div>


                    </div>


                </div>


            <?php endforeach; ?>


        <?php else: ?>


            <!-- =============================================
                 NO RESULT
            ============================================== -->

            <div class="col-12">


                <div
                    class="text-center bg-white p-5 rounded-4 shadow-sm"
                >


                    <div
                        style="
                            font-size: 4rem;
                            margin-bottom: 15px;
                        "
                    >

                        🏨

                    </div>


                    <h3
                        style="
                            color: #0057B8;
                            font-weight: 800;
                        "
                    >

                        No Accommodation Found

                    </h3>


                    <p class="text-muted">

                        Sorry, there are currently no
                        accommodation options available
                        for this area.

                    </p>


                    <a
                        href="accommodation.php"
                        class="btn btn-primary mt-2"
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



<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>