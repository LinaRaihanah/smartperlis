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
Negeri Perlis | Smart Perlis Tourism Portal
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
/* PROFILE HOVER DROPDOWN */
.profile-dropdown {
    position: relative;
}

.profile-dropdown .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    margin-top: 0;
}

.profile-dropdown:hover .dropdown-menu {
    display: block;
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

<!-- PROFILE -->
<li class="nav-item dropdown profile-dropdown">

<a
    class="nav-link"
    href="#"
    id="profileDropdown"
>

<i class="bi bi-person-fill"></i>
Profile

</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item" href="negeri-perlis.php">
Negeri Perlis
</a>
</li>

<li>
<a class="dropdown-item" href="visit-perlis.php">
Logo Visit Perlis
</a>
</li>

<li>
<a class="dropdown-item" href="kluster-pelancongan.php">
Kluster Pelancongan
</a>
</li>

</ul>

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


<!-- ANALYTICS -->

<li class="nav-item">

<a
    class="nav-link"
    href="analytics.php"
>

<i class="bi bi-bar-chart-fill"></i>

Analytics

</a>

</li>


<!-- MAP -->

<li class="nav-item">

<a
    class="nav-link"
    href="map.php"
>

<i class="bi bi-map-fill"></i>

Map

</a>

</li>


<!-- CONTACT -->

<li class="nav-item">

<a
    class="nav-link"
    href="contact.php"
>

<i class="bi bi-envelope-fill"></i>

Contact

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


<!-- =========================================
     NEGERI PERLIS CONTENT
========================================= -->

<section class="section" style="padding-top: 125px; padding-bottom: 80px;">

<div class="container">

    <div class="text-center mb-5">

        <div class="perlis-yellow-text fw-bold">
            PROFILE
        </div>

        <h1 class="section-title">
            Negeri Perlis
        </h1>

        <p class="section-subtitle">
            Kenali negeri Perlis, negeri yang indah di utara Semenanjung Malaysia.
        </p>

    </div>


    <!-- BENDERA DAN LAMBANG -->

    <div class="row align-items-center justify-content-center g-5 mb-5">

        <div class="col-lg-5 text-center">

            <img
                src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Flag_of_Perlis.svg"
                alt="Bendera Perlis"
                style="
                    width:100%;
                    max-width:430px;
                    height:auto;
                "
            >

        </div>


        <div class="col-lg-4 text-center">

            <img
                src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Coat_of_arms_of_Perlis.svg"
                alt="Lambang Negeri Perlis"
                style="
                    width:100%;
                    max-width:300px;
                    height:260px;
                    object-fit:contain;
                "
            >

        </div>

    </div>


    <!-- PENERANGAN -->

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div
                class="bg-white p-4 p-md-5"
                style="
                    border-radius:18px;
                    box-shadow:0 8px 25px rgba(0,0,0,.07);
                    border-top:4px solid var(--perlis-yellow);
                "
            >

                <p style="
                    font-size:17px;
                    line-height:1.9;
                    color:#6b7280;
                    margin-bottom:22px;
                ">
                    Perlis (Jawi: ڨرليس, Bahasa Thai: ปะลิส Pālit, ปะลิส Palit
                    atau เปอร์ลิส Perlis) merupakan sebuah negeri yang terletak
                    di utara Semenanjung Malaysia dan bersempadan dengan
                    Wilayah Satun dan Songkhla, Thailand di sebelah utara,
                    dan Kedah di sebelah selatan. Perlis menjadi sebuah negeri
                    yang berdaulat setelah kerajaan Siam melantik Raja Syed
                    Hussain Jamalullail sebagai Raja Perlis.
                </p>

                <p style="
                    font-size:17px;
                    line-height:1.9;
                    color:#6b7280;
                    margin-bottom:0;
                ">
                    Perlis mempunyai keluasan sebanyak 821 kilometer persegi
                    menjadikannya sebagai negeri terkecil di Malaysia. Pada
                    tahun 2020, jumlah penduduknya dianggarkan seramai
                    284,885 orang dengan majoritinya merupakan bumiputera
                    iaitu 88.8 peratus dari jumlah penduduk.
                </p>

            </div>

        </div>

    </div>


    <!-- SHARE -->

    <div class="text-center mt-4">

        <button
            type="button"
            onclick="sharePage()"
            style="
                border:0;
                background:transparent;
                color:#2478e5;
                font-size:30px;
                margin-right:12px;
                cursor:pointer;
            "
            title="Kongsi"
        >
            <i class="bi bi-share-fill"></i>
        </button>

        <a
            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
            target="_blank"
            rel="noopener noreferrer"
            style="
                display:inline-flex;
                width:38px;
                height:38px;
                align-items:center;
                justify-content:center;
                border-radius:50%;
                background:#2478e5;
                color:white;
                text-decoration:none;
                font-size:21px;
            "
            title="Kongsi ke Facebook"
        >
            <i class="bi bi-facebook"></i>
        </a>

    </div>

</div>

</section>


<script>

function sharePage() {

    if (navigator.share) {

        navigator.share({
            title: 'Negeri Perlis',
            text: 'Kenali Negeri Perlis',
            url: window.location.href
        });

    } else if (navigator.clipboard) {

        navigator.clipboard.writeText(window.location.href);

        alert('Link halaman telah disalin.');

    } else {

        alert('Link halaman: ' + window.location.href);

    }

}

</script>

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





</body>

</html>