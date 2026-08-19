<?php

include("config.php");
include("visitor_tracking.php");

trackVisitor(
    $conn,
    null,
    "Home"
);

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>
Smart Perlis Tourism Portal
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


<!-- Google Font -->

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>


<style>

/* =========================================
   PERLIS COLOUR
========================================= */

:root {

    --perlis-blue: #0057A8;

    --perlis-dark-blue: #003F7D;

    --perlis-yellow: #FFD700;

    --perlis-light-yellow: #FFF8CC;

    --light-bg: #f7faf8;

}


/* =========================================
   GLOBAL
========================================= */

* {

    box-sizing: border-box;

}


body {

    font-family: 'Inter', sans-serif;

    background: var(--light-bg);

    color: #1f2937;

}


/* =========================================
   NAVBAR
========================================= */

.navbar {

    background: rgba(0, 63, 125, 0.80) !important;

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    z-index: 1000;

    box-shadow:
        0 8px 30px rgba(0, 0, 0, 0.40);

    backdrop-filter: blur(8px);

    min-height: 85px;

    border-bottom: 3px solid var(--perlis-yellow);

}


.navbar-brand {

    font-size: 1.25rem;

    letter-spacing: .5px;

}


.navbar-brand i {

    color: var(--perlis-yellow);

}


.navbar-nav .nav-link {

    color: rgba(255,255,255,.90);

    font-weight: 500;

    padding: 10px 16px !important;

    transition: .25s;

    text-align: center;

}


.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {

    color: var(--perlis-yellow);

}


/* ICON ATAS TEXT */

.navbar-nav .nav-link i {

    display: block;

    margin-bottom: 3px;

}


/* =========================================
   HERO
========================================= */

.hero {

    position: relative;

    height: 620px;

    overflow: hidden;

}


.hero img {

    width: 100%;

    height: 620px;

    object-fit: cover;

}


.hero::after {

    content: "";

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(0,0,0,.65),
            rgba(0,0,0,.20),
            rgba(0,0,0,.15)
        );

}


.hero-content {

    position: absolute;

    z-index: 3;

    top: 50%;

    left: 8%;

    transform: translateY(-50%);

    color: white;

    max-width: 650px;

}


.hero-content .small-title {

    text-transform: uppercase;

    letter-spacing: 3px;

    font-size: 14px;

    font-weight: 700;

    margin-bottom: 15px;

    color: var(--perlis-yellow);

}


.hero-content h1 {

    font-size: clamp(2.5rem, 6vw, 5rem);

    font-weight: 800;

    line-height: 1.05;

    margin-bottom: 20px;

}


.hero-content p {

    font-size: 1.15rem;

    line-height: 1.7;

    color: rgba(255,255,255,.9);

}


/* =========================================
   HERO BUTTON
========================================= */

.hero-btn {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 13px 24px;

    background: var(--perlis-yellow);

    color: var(--perlis-dark-blue);

    text-decoration: none;

    border-radius: 50px;

    font-weight: 700;

    transition: .3s;

    box-shadow:
        0 5px 15px rgba(0,0,0,.20);

}


.hero-btn:hover {

    background: var(--perlis-blue);

    color: white;

    transform: translateY(-2px);

}


/* =========================================
   SEARCH BOX
========================================= */

.search-wrapper {

    position: relative;

    z-index: 10;

    margin-top: -45px;

}


.search-card {

    background: white;

    border-radius: 18px;

    padding: 22px;

    box-shadow:
        0 15px 40px rgba(0,0,0,.12);

    border-top: 4px solid var(--perlis-yellow);

}


.search-input {

    border: 1px solid #e5e7eb;

    border-radius: 12px;

    height: 58px;

    padding-left: 48px;

    font-size: 16px;

}


.search-input:focus {

    border-color: var(--perlis-blue);

    box-shadow:
        0 0 0 3px rgba(0,87,168,.12);

}


.search-icon {

    position: absolute;

    left: 18px;

    top: 50%;

    transform: translateY(-50%);

    color: var(--perlis-blue);

    z-index: 5;

}


.search-btn {

    height: 58px;

    border-radius: 12px;

    padding: 0 25px;

    font-weight: 600;

}


/* =========================================
   PERLIS BUTTON
========================================= */

.perlis-btn {

    background: var(--perlis-blue);

    border: 2px solid var(--perlis-blue);

    color: white;

    font-weight: 700;

    transition: .3s;

}


.perlis-btn:hover {

    background: var(--perlis-yellow);

    border-color: var(--perlis-yellow);

    color: var(--perlis-dark-blue);

}


/* =========================================
   SECTION
========================================= */

.section {

    padding: 90px 0;

}


.section-title {

    font-size: 2.2rem;

    font-weight: 800;

    color: var(--perlis-dark-blue);

}


.section-subtitle {

    color: #6b7280;

    max-width: 600px;

    margin: 10px auto 0;

}


.perlis-yellow-text {

    color: var(--perlis-blue);

}


/* =========================================
   DESTINATION CARD
========================================= */

.destination-card {

    border: none;

    border-radius: 18px;

    overflow: hidden;

    background: white;

    box-shadow:
        0 8px 25px rgba(0,0,0,.07);

    transition: .3s;

    height: 100%;

}


.destination-card:hover {

    transform: translateY(-8px);

    box-shadow:
        0 18px 40px rgba(0,0,0,.13);

}


.destination-img-wrapper {

    position: relative;

    height: 245px;

    overflow: hidden;

}


.destination-img {

    width: 100%;

    height: 100%;

    object-fit: cover;

    transition: .5s;

}


.destination-card:hover .destination-img {

    transform: scale(1.07);

}


.destination-category {

    position: absolute;

    top: 15px;

    left: 15px;

    background: var(--perlis-yellow);

    color: var(--perlis-dark-blue);

    padding: 6px 12px;

    border-radius: 50px;

    font-size: 12px;

    font-weight: 700;

}


.destination-body {

    padding: 22px;

}


.destination-title {

    font-size: 1.3rem;

    font-weight: 700;

    margin-bottom: 8px;

}


.destination-location {

    color: var(--perlis-blue);

    font-size: 14px;

    margin-bottom: 12px;

}


.destination-location i {

    color: var(--perlis-yellow);

}


.destination-description {

    color: #6b7280;

    font-size: 14px;

    line-height: 1.7;

}


.details-btn {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: var(--perlis-blue);

    text-decoration: none;

    font-weight: 700;

    font-size: 14px;

    transition: .25s;

}


.details-btn:hover {

    color: var(--perlis-dark-blue);

}


/* =========================================
   NO RESULT
========================================= */

#noResult {

    display: none;

}


.no-result-box {

    background: white;

    border-radius: 18px;

    padding: 50px 20px;

    text-align: center;

    box-shadow:
        0 8px 25px rgba(0,0,0,.06);

    border-top: 4px solid var(--perlis-yellow);

}


/* =========================================
   FEATURES
========================================= */

.feature-box {

    background: white;

    padding: 35px 25px;

    border-radius: 18px;

    height: 100%;

    text-align: center;

    box-shadow:
        0 8px 25px rgba(0,0,0,.06);

    transition: .3s;

}


.feature-box:hover {

    transform: translateY(-5px);

}


.feature-icon {

    width: 65px;

    height: 65px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin: auto auto 18px;

    border-radius: 16px;

    background: var(--perlis-light-yellow);

    color: var(--perlis-blue);

    font-size: 28px;

}


.feature-box h5 {

    font-weight: 700;

}


.feature-box p {

    color: #6b7280;

    font-size: 14px;

}


/* =========================================
   CTA
========================================= */

.cta {

    background:
        linear-gradient(
            135deg,
            var(--perlis-dark-blue),
            var(--perlis-blue)
        );

    border-radius: 25px;

    padding: 65px 30px;

    color: white;

    border-bottom: 5px solid var(--perlis-yellow);

}


.cta h2 {

    font-weight: 800;

    font-size: 2.2rem;

}


.cta p {

    color: rgba(255,255,255,.85);

}


/* =========================================
   FOOTER
========================================= */

footer {

    background: var(--perlis-dark-blue);

    color: white;

    border-top: 4px solid var(--perlis-yellow);

}


footer a {

    color: rgba(255,255,255,.7);

    text-decoration: none;

    transition: .25s;

}


footer a:hover {

    color: var(--perlis-yellow);

}


/* =========================================
   MOBILE
========================================= */

@media(max-width:768px) {

    .hero,
    .hero img {

        height: 500px;

    }


    .hero-content {

        left: 6%;

        right: 6%;

    }


    .hero-content h1 {

        font-size: 2.8rem;

    }


    .section {

        padding: 60px 0;

    }

}

</style>

</head>


<body>


<!-- =========================================
     PUBLIC NAVBAR
========================================= -->

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">

<div class="container">


<!-- LOGO -->

<a
    href="index.php"
    class="navbar-brand fw-bold"
>

<i class="bi bi-geo-alt-fill"></i>

Smart Perlis Tourism Portal

</a>


<!-- MOBILE BUTTON -->

<button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#mainMenu"
    aria-controls="mainMenu"
    aria-expanded="false"
    aria-label="Toggle navigation"
>

<span class="navbar-toggler-icon"></span>

</button>


<!-- PUBLIC MENU -->

<div
    class="collapse navbar-collapse"
    id="mainMenu"
>

<ul class="navbar-nav ms-auto">


<!-- HOME -->

<li class="nav-item">

<a
    class="nav-link active"
    href="index.php"
>

<i class="bi bi-house-fill"></i>

Home

</a>

</li>


<!-- DESTINATIONS -->

<li class="nav-item">

<a
    class="nav-link"
    href="destinations.php"
>

<i class="bi bi-geo-alt-fill"></i>

Destinations

</a>

</li>


<!-- EVENTS -->

<li class="nav-item">

<a
    class="nav-link"
    href="events.php"
>

<i class="bi bi-calendar-event-fill"></i>

Events

</a>

</li>


<!-- GALLERY -->

<li class="nav-item">

<a
    class="nav-link"
    href="gallery.php"
>

<i class="bi bi-images"></i>

Gallery

</a>

</li>


</ul>

</div>

</div>

</nav>


<!-- =========================================
     HERO
========================================= -->

<section class="hero">


<div
    id="heroSlider"
    class="carousel slide h-100"
    data-bs-ride="carousel"
>


<div class="carousel-inner h-100">


<!-- SLIDE 1 -->

<div class="carousel-item active h-100">

<img
    src="assets/images/perlis1.jpg"
    alt="Beautiful Perlis"
>

</div>


<!-- SLIDE 2 -->

<div class="carousel-item h-100">

<img
    src="assets/images/perlis2.jpg"
    alt="Perlis Tourism"
>

</div>


<!-- SLIDE 3 -->

<div class="carousel-item h-100">

<img
    src="assets/images/perlis3.jpg"
    alt="Perlis Attraction"
>

</div>


</div>

</div>


<!-- HERO CONTENT -->

<div class="hero-content">


<div class="small-title">

PERLIS TOURISM

</div>


<h1>

Discover the Hidden Gem of Perlis

</h1>


<p>

Explore breathtaking nature, unique culture,
local food and unforgettable destinations
across Perlis.

</p>


<a
    href="destinations.php"
    class="hero-btn"
>

Explore Destinations

<i class="bi bi-arrow-right"></i>

</a>


</div>

</section>


<!-- =========================================
     SEARCH
========================================= -->

<section class="container search-wrapper">


<div class="search-card">


<div class="row g-3 align-items-center">


<!-- SEARCH INPUT -->

<div class="col-lg-9">


<div class="position-relative">


<i class="bi bi-search search-icon"></i>


<input
    type="text"
    id="search"
    class="form-control search-input"
    placeholder="Search destinations..."
>

</div>

</div>


<!-- SEARCH BUTTON -->

<div class="col-lg-3">


<button
    type="button"
    id="searchBtn"
    class="btn perlis-btn search-btn w-100"
>

<i class="bi bi-search"></i>

Search

</button>


</div>


</div>

</div>

</section>


<!-- =========================================
     DESTINATIONS
========================================= -->

<section class="section">


<div class="container">


<!-- SECTION TITLE -->

<div class="text-center mb-5">


<div class="perlis-yellow-text fw-bold">

EXPLORE PERLIS

</div>


<h2 class="section-title">

Popular Destinations

</h2>


<p class="section-subtitle">

Discover the most beautiful places,
attractions and hidden gems in Perlis.

</p>


</div>


<!-- DESTINATION LIST -->

<div
    class="row g-4"
    id="destinationList"
>


<?php

$sql = "
    SELECT *
    FROM destinations
    ORDER BY destination_id ASC
";

$result = mysqli_query($conn, $sql);


if (
    $result &&
    mysqli_num_rows($result) > 0
) {


    while (
        $row = mysqli_fetch_assoc($result)
    ) {


?>


<!-- DESTINATION CARD -->

<div
    class="col-lg-4 col-md-6 destination-card-wrapper"
>


<div
    class="destination-card"
    data-name="<?php
        echo htmlspecialchars(
            $row['destination_name']
        );
    ?>"
>


<!-- IMAGE -->

<div class="destination-img-wrapper">


<img
    src="assets/images/<?php
        echo htmlspecialchars(
            $row['image']
        );
    ?>"
    class="destination-img"
    alt="<?php
        echo htmlspecialchars(
            $row['destination_name']
        );
    ?>"
>


<!-- CATEGORY -->

<span class="destination-category">

<?php

echo htmlspecialchars(
    $row['category']
);

?>

</span>


</div>


<!-- BODY -->

<div class="destination-body">


<!-- NAME -->

<h3 class="destination-title">

<?php

echo htmlspecialchars(
    $row['destination_name']
);

?>

</h3>


<!-- LOCATION -->

<div class="destination-location">


<i class="bi bi-geo-alt-fill"></i>


<?php

echo htmlspecialchars(
    $row['location']
);

?>


</div>


<!-- DESCRIPTION -->

<p class="destination-description">


<?php


$description =
    $row['description'];


if (
    strlen($description) > 110
) {

    $description =
        substr(
            $description,
            0,
            110
        ) . "...";

}


echo htmlspecialchars(
    $description
);


?>


</p>


<!-- DETAILS -->

<a
    href="destination-details.php?id=<?php
        echo (int)
            $row['destination_id'];
    ?>"
    class="details-btn"
>

View Details

<i class="bi bi-arrow-right"></i>

</a>


</div>

</div>

</div>


<?php

    }

}

else {

?>


<!-- NO DESTINATIONS -->

<div class="col-12">


<div class="alert alert-warning text-center">

No destinations available.

</div>


</div>


<?php

}

?>


<!-- =========================================
     NO SEARCH RESULT
========================================= -->

<div
    id="noResult"
    class="col-12"
>


<div class="no-result-box">


<i
    class="bi bi-search"
    style="
        font-size:40px;
        color:#0057A8;
    "
></i>


<h4 class="mt-3">

Destination Not Found

</h4>


<p class="text-muted">

Try searching for another destination.

</p>


<button
    id="resetSearch"
    class="btn perlis-btn"
>

Reset Search

</button>


</div>

</div>


</div>

</div>

</section>


<!-- =========================================
     FOOTER
========================================= -->

<footer class="pt-5 pb-4">


<div class="container">


<div class="row g-4">


<!-- ABOUT -->

<div class="col-md-6">


<h5 class="fw-bold">


<i
    class="bi bi-geo-alt-fill"
    style="color:#FFD700;"
></i>


Smart Perlis Tourism Portal


</h5>


<p class="text-white-50">

Smart Perlis Tourism Portal is an
interactive platform to explore
destinations, events and tourism
information in Perlis.

</p>


</div>


<!-- QUICK LINKS -->

<div class="col-md-3">


<h6 class="fw-bold">

Quick Links

</h6>


<p>

<a href="destinations.php">

Destinations

</a>

</p>


<p>

<a href="events.php">

Events

</a>

</p>


<p>

<a href="gallery.php">

Gallery

</a>

</p>


</div>


<!-- INFORMATION -->

<div class="col-md-3">


<h6 class="fw-bold">

Information

</h6>


<p>

<a href="contact.php">

Contact Us

</a>

</p>


</div>


</div>


<hr class="border-secondary">


<div class="text-center text-white-50">

© 2026 Smart Perlis Tourism Portal

</div>


</div>

</footer>


<!-- =========================================
     BOOTSTRAP JS
========================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


<!-- =========================================
     SEARCH JAVASCRIPT
========================================= -->

<script>

function performSearch() {


    let searchInput =
        document.getElementById("search");


    let keyword =
        searchInput.value
        .toLowerCase()
        .trim();


    let cards =
        document.querySelectorAll(
            ".destination-card-wrapper"
        );


    let found = 0;


    cards.forEach(
        function(wrapper) {


            let card =
                wrapper.querySelector(
                    ".destination-card"
                );


            if (!card) {

                return;

            }


            let name =
                card.getAttribute(
                    "data-name"
                );


            if (!name) {

                return;

            }


            name =
                name.toLowerCase();


            if (
                keyword === "" ||
                name.includes(keyword)
            ) {


                wrapper.style.display =
                    "";


                found++;


            }

            else {


                wrapper.style.display =
                    "none";


            }

        }
    );


    let noResult =
        document.getElementById(
            "noResult"
        );


    if (found === 0) {


        noResult.style.display =
            "block";


    }

    else {


        noResult.style.display =
            "none";


    }

}


/* =========================================
   SEARCH BUTTON
========================================= */

document
    .getElementById("searchBtn")
    .addEventListener(
        "click",
        performSearch
    );


/* =========================================
   ENTER KEY
========================================= */

document
    .getElementById("search")
    .addEventListener(
        "keypress",
        function(event) {


            if (
                event.key === "Enter"
            ) {


                event.preventDefault();


                performSearch();


            }

        }
    );


/* =========================================
   RESET SEARCH
========================================= */

document
    .getElementById("resetSearch")
    .addEventListener(
        "click",
        function() {


            document
                .getElementById("search")
                .value = "";


            performSearch();


        }
    );

</script>


</body>

</html>