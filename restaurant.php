<?php
include("config.php");

$selectedArea = $_GET['area'] ?? 'All';


/*
|--------------------------------------------------------------------------
| RESTAURANT DATA
|--------------------------------------------------------------------------
*/

$restaurants = [

    // =========================
    // KANGAR
    // =========================

    [
        "name" => "Kangar Seafood Corner",
        "area" => "Kangar",
        "category" => "Seafood",
        "description" => "Enjoy a variety of fresh seafood dishes around Kangar.",
        "image" => "assets/images/restaurant/kangar1.jpg"
    ],

    [
        "name" => "Kangar Local Food",
        "area" => "Kangar",
        "category" => "Local Food",
        "description" => "Taste delicious local Malaysian food in Kangar.",
        "image" => "assets/images/restaurant/kangar2.jpg"
    ],

    [
        "name" => "Kangar Cafe & Dessert",
        "area" => "Kangar",
        "category" => "Cafe",
        "description" => "Relax and enjoy drinks, desserts and cafe-style food.",
        "image" => "assets/images/restaurant/kangar3.jpg"
    ],


    // =========================
    // ARAU
    // =========================

    [
        "name" => "Arau Seafood House",
        "area" => "Arau",
        "category" => "Seafood",
        "description" => "A seafood dining option around the Arau area.",
        "image" => "assets/images/restaurant/arau1.jpg"
    ],

    [
        "name" => "Arau Local Kitchen",
        "area" => "Arau",
        "category" => "Local Food",
        "description" => "Discover Malaysian local dishes around Arau.",
        "image" => "assets/images/restaurant/arau2.jpg"
    ],

    [
        "name" => "Arau Cafe",
        "area" => "Arau",
        "category" => "Cafe",
        "description" => "A cosy cafe experience for visitors around Arau.",
        "image" => "assets/images/restaurant/arau3.jpg"
    ],


    // =========================
    // PADANG BESAR
    // =========================

    [
        "name" => "Padang Besar Seafood Corner",
        "area" => "Padang Besar",
        "category" => "Seafood",
        "description" => "Explore seafood dining options around Padang Besar.",
        "image" => "assets/images/restaurant/padangbesar1.jpg"
    ],

    [
        "name" => "Padang Besar Local Kitchen",
        "area" => "Padang Besar",
        "category" => "Local Food",
        "description" => "Enjoy local Malaysian flavours around Padang Besar.",
        "image" => "assets/images/restaurant/padangbesar2.jpg"
    ],

    [
        "name" => "Padang Besar Cafe",
        "area" => "Padang Besar",
        "category" => "Cafe",
        "description" => "Relax with drinks and light meals at cafes around Padang Besar.",
        "image" => "assets/images/restaurant/padangbesar3.jpg"
    ],


    // =========================
    // KUALA PERLIS
    // =========================

    [
        "name" => "Kuala Perlis Seafood",
        "area" => "Kuala Perlis",
        "category" => "Seafood",
        "description" => "Enjoy seafood dishes near the famous Kuala Perlis area.",
        "image" => "assets/images/restaurant/kualaperlis1.jpg"
    ],

    [
        "name" => "Kuala Perlis Local Kitchen",
        "area" => "Kuala Perlis",
        "category" => "Local Food",
        "description" => "Try local Malaysian food around Kuala Perlis.",
        "image" => "assets/images/restaurant/kualaperlis2.jpg"
    ],

    [
        "name" => "Kuala Perlis Cafe",
        "area" => "Kuala Perlis",
        "category" => "Cafe",
        "description" => "Enjoy coffee, desserts and relaxing cafe food around Kuala Perlis.",
        "image" => "assets/images/restaurant/kualaperlis3.jpg"
    ]

];


/*
|--------------------------------------------------------------------------
| FILTER RESTAURANTS BY AREA
|--------------------------------------------------------------------------
*/

$filteredRestaurants = [];

foreach ($restaurants as $restaurant) {

    if (
        $selectedArea == "All" ||
        $restaurant["area"] == $selectedArea
    ) {
        $filteredRestaurants[] = $restaurant;
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
        "description" => "Discover local food, seafood and cafes around Kangar."
    ],

    "Arau" => [
        "icon" => "bi-bank",
        "description" => "Explore food and cafe choices around the royal town of Arau."
    ],

    "Padang Besar" => [
        "icon" => "bi-shop",
        "description" => "Explore local flavours and dining spots around Padang Besar."
    ],

    "Kuala Perlis" => [
        "icon" => "bi-water",
        "description" => "Enjoy seafood, local food and cafes near Kuala Perlis."
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurants | Perlis Tourism</title>

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

    <!-- Existing CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


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
           HERO HEADER
        ========================================================= */

        .restaurant-header {

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


        .restaurant-header-content {

            max-width: 650px;

            margin-left: 5%;

            position: relative;

            z-index: 2;
        }


        .restaurant-header h1 {

            font-size: 3.2rem;

            font-weight: 800;

            color: #0057B8;

            margin-bottom: 15px;
        }


        .restaurant-header h1 span {

            color: #E0A800;
        }


        .restaurant-header p {

            font-size: 1.1rem;

            line-height: 1.7;

            color: #444;

            max-width: 600px;
        }


        .food-badge {

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

            box-shadow: 0 5px 15px rgba(0,0,0,0.12);
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

            box-shadow: 0 5px 15px rgba(0,0,0,0.06);
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
           AREA INFORMATION BOX
        ========================================================= */

        .area-info {

            background: linear-gradient(
                135deg,
                #fff8c7,
                #ffffff
            );

            border-radius: 25px;

            padding: 28px;

            margin-bottom: 45px;

            box-shadow: 0 8px 25px rgba(0,0,0,0.08);

            border-left: 7px solid #FFD700;
        }


        .area-info-icon {

            width: 60px;

            height: 60px;

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
           RESTAURANT CARD
        ========================================================= */

        .restaurant-card {

            background: white;

            border-radius: 22px;

            overflow: hidden;

            height: 100%;

            box-shadow: 0 8px 25px rgba(0,0,0,0.08);

            transition: all 0.3s ease;

            border: none;
        }


        .restaurant-card:hover {

            transform: translateY(-8px);

            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }


        .restaurant-image {

            width: 100%;

            height: 230px;

            object-fit: cover;
        }


        .restaurant-image-placeholder {

            height: 230px;

            background: linear-gradient(
                135deg,
                #FFD700,
                #0057B8
            );

            display: flex;

            align-items: center;

            justify-content: center;

            color: white;

            font-size: 4rem;
        }


        .restaurant-content {

            padding: 25px;
        }


        .category-badge {

            display: inline-block;

            background: #fff3cd;

            color: #9a6b00;

            padding: 7px 13px;

            border-radius: 20px;

            font-size: 0.8rem;

            font-weight: 700;

            margin-bottom: 12px;
        }


        .restaurant-content h4 {

            color: #0057B8;

            font-weight: 800;

            margin-bottom: 10px;
        }


        .restaurant-content p {

            color: #777;

            line-height: 1.6;

            min-height: 75px;
        }


        /* =========================================================
           LOCATION BUTTON
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
        }


        .map-btn:hover {

            color: white;

            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #003f88,
                #0057B8
            );

            box-shadow: 0 8px 18px rgba(0,87,184,0.25);
        }


        /* =========================================================
           EMPTY RESULT
        ========================================================= */

        .empty-box {

            text-align: center;

            padding: 70px 20px;

            background: white;

            border-radius: 25px;

            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
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

            .restaurant-header {

                min-height: 400px;

                padding: 40px 20px;
            }


            .restaurant-header-content {

                margin-left: 0;
            }


            .restaurant-header h1 {

                font-size: 2.3rem;
            }


            .restaurant-header p {

                font-size: 1rem;
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
     HERO
========================================================= -->

<section class="restaurant-header">

    <div class="restaurant-header-content">

        <div class="food-badge">

            <i class="bi bi-cup-hot-fill me-2"></i>

            Taste Perlis

        </div>


        <h1>

            Discover

            <span>Local Flavours</span>

        </h1>


        <p>

            Explore restaurants, seafood spots, local food
            and cosy cafes across the beautiful districts of Perlis.

        </p>

    </div>

</section>



<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<div class="container py-5">


    <div class="section-title">

        <h2>

            <i class="bi bi-shop me-2"></i>

            Restaurants in Perlis

        </h2>

        <p>

            Choose an area to discover food and dining
            experiences around Perlis.

        </p>

    </div>



    <!-- =====================================================
         AREA FILTER
    ====================================================== -->

    <div class="area-filter">

        <a
            href="restaurant.php"
            class="area-btn <?= ($selectedArea == 'All') ? 'active' : '' ?>"
        >

            <i class="bi bi-grid-fill me-1"></i>

            All Areas

        </a>


        <?php foreach ($areas as $areaName => $areaData): ?>

            <a
                href="restaurant.php?area=<?= urlencode($areaName) ?>"
                class="area-btn <?= ($selectedArea == $areaName) ? 'active' : '' ?>"
            >

                <i class="bi <?= $areaData['icon'] ?> me-1"></i>

                <?= htmlspecialchars($areaName) ?>

            </a>

        <?php endforeach; ?>

    </div>



    <!-- =====================================================
         AREA INFORMATION
    ====================================================== -->

    <?php if ($selectedArea != "All" && isset($areas[$selectedArea])): ?>

        <div class="area-info">

            <div class="d-flex align-items-center gap-3">

                <div class="area-info-icon">

                    <i class="bi <?= $areas[$selectedArea]['icon'] ?>"></i>

                </div>


                <div>

                    <h3>

                        Dining in <?= htmlspecialchars($selectedArea) ?>

                    </h3>

                    <p>

                        <?= htmlspecialchars($areas[$selectedArea]['description']) ?>

                    </p>

                </div>

            </div>

        </div>

    <?php endif; ?>



    <!-- =====================================================
         RESTAURANT CARDS
    ====================================================== -->

    <div class="row g-4">


        <?php if (count($filteredRestaurants) > 0): ?>


            <?php foreach ($filteredRestaurants as $restaurant): ?>


                <?php

                /*
                |--------------------------------------------------------------------------
                | MAP SEARCH
                |--------------------------------------------------------------------------
                | CATEGORY + AREA
                |--------------------------------------------------------------------------
                */

                $category = $restaurant["category"];

                $area = $restaurant["area"];


                if ($category == "Seafood") {

                    $mapSearch =
                        "Seafood restaurants in "
                        . $area
                        . ", Perlis";

                } elseif ($category == "Cafe") {

                    $mapSearch =
                        "Cafes in "
                        . $area
                        . ", Perlis";

                } elseif ($category == "Local Food") {

                    $mapSearch =
                        "Local food restaurants in "
                        . $area
                        . ", Perlis";

                } else {

                    $mapSearch =
                        $category
                        . " restaurants in "
                        . $area
                        . ", Perlis";
                }


                /*
                |--------------------------------------------------------------------------
                | GOOGLE MAPS URL
                |--------------------------------------------------------------------------
                */

                $mapUrl =
                    "https://www.google.com/maps/search/?api=1&query="
                    . urlencode($mapSearch);


                $imageExists = file_exists($restaurant["image"]);

                ?>


                <!-- =================================================
                     CARD
                ================================================== -->

                <div class="col-lg-4 col-md-6">

                    <div class="restaurant-card">


                        <!-- IMAGE -->

                        <?php if ($imageExists): ?>

                            <img
                                src="<?= htmlspecialchars($restaurant["image"]) ?>"
                                alt="<?= htmlspecialchars($restaurant["name"]) ?>"
                                class="restaurant-image"
                            >

                        <?php else: ?>

                            <div class="restaurant-image-placeholder">

                                <i class="bi bi-cup-hot-fill"></i>

                            </div>

                        <?php endif; ?>


                        <!-- CONTENT -->

                        <div class="restaurant-content">


                            <!-- CATEGORY -->

                            <span class="category-badge">

                                <?php if ($category == "Seafood"): ?>

                                    <i class="bi bi-egg-fried me-1"></i>

                                <?php elseif ($category == "Cafe"): ?>

                                    <i class="bi bi-cup-hot-fill me-1"></i>

                                <?php else: ?>

                                    <i class="bi bi-shop me-1"></i>

                                <?php endif; ?>


                                <?= htmlspecialchars($category) ?>

                            </span>



                            <!-- RESTAURANT NAME -->

                            <h4>

                                <?= htmlspecialchars($restaurant["name"]) ?>

                            </h4>



                            <!-- AREA -->

                            <div class="mb-2 text-muted">

                                <i class="bi bi-geo-alt-fill me-1"></i>

                                <?= htmlspecialchars($area) ?>, Perlis

                            </div>



                            <!-- DESCRIPTION -->

                            <p>

                                <?= htmlspecialchars($restaurant["description"]) ?>

                            </p>



                            <!-- MAP BUTTON -->

                            <a
                                href="<?= htmlspecialchars($mapUrl) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="map-btn"
                            >

                                <i class="bi bi-geo-alt-fill"></i>

                                View <?= htmlspecialchars($category) ?> on Map

                            </a>


                        </div>


                    </div>

                </div>


            <?php endforeach; ?>


        <?php else: ?>


            <div class="col-12">

                <div class="empty-box">

                    <i class="bi bi-emoji-frown"></i>

                    <h3>

                        No restaurants found

                    </h3>

                    <p class="text-muted">

                        Sorry, there are currently no restaurants
                        available for this area.

                    </p>


                    <a
                        href="restaurant.php"
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



<!-- =========================================================
     FOOTER
========================================================= -->

<?php include("footer.php"); ?>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>