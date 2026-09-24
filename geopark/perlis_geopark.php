<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK HOMEPAGE
|--------------------------------------------------------------------------
| File location:
| geopark/perlis_geopark.php
|--------------------------------------------------------------------------
*/

include("../config.php");


/*
|--------------------------------------------------------------------------
| HERO SLIDES
|--------------------------------------------------------------------------
*/

$heroSlides = [

    [
        "image" => "https://www.kosmo.com.my/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-09-at-19.40.55_44878786.jpg",
        "title" => "PERLIS GEOPARK",
        "subtitle" => "Explore the Geological, Biological and Cultural Heritage of Perlis"
    ],

    [
        "image" => "https://storage.googleapis.com/origin-awsassets.nst.com.my/images/articles/1570fa2ea_1710574465.jpg",
        "title" => "TASIK TIMAH TASOH",
        "subtitle" => "Discover the beautiful landscape and natural heritage of Perlis"
    ],

    [
        "image" => "https://www.maisinggah.com/wp-content/uploads/2022/03/Bukit-Chabang-Perlis-Gambar-Tapak-Perkemahan.jpg.webp",
        "title" => "BUKIT CHABANG",
        "subtitle" => "A remarkable geological landscape in Perlis"
    ],

    [
        "image" => "https://fiksyenshasha.com/wp-content/uploads/2017/05/13_l.jpg",
        "title" => "BUKIT AYER",
        "subtitle" => "Experience the natural beauty of Perlis Geopark"
    ]

];


/*
|--------------------------------------------------------------------------
| FEATURED HERITAGE
|--------------------------------------------------------------------------
*/

$heritage = [

    [
        "image" => "../assets/images/bukit-ayer.jpg",
        "title" => "Kolam Travertin Bukit Ayer",
        "category" => "GEOLOGI",
        "description" => "Keindahan landskap semula jadi yang menjadi sebahagian daripada warisan geologi Perlis."
    ],

    [
        "image" => "../assets/images/timah-tasoh.jpg",
        "title" => "Pemandangan Indah Landskap Tasik Timah Tasoh",
        "category" => "LANDSKAP",
        "description" => "Nikmati panorama Tasik Timah Tasoh dan kawasan sekitarnya yang menarik."
    ],

    [
        "image" => "../assets/images/kuala-perlis.jpg",
        "title" => "Perkampungan Warisan Nelayan Kuala Perlis",
        "category" => "BUDAYA",
        "description" => "Kawasan warisan yang memperlihatkan kehidupan dan budaya masyarakat nelayan Perlis."
    ],

    [
        "image" => "../assets/images/bukit-jernih.jpg",
        "title" => "Saliran Kars Bukit Jernih",
        "category" => "GEOLOGI",
        "description" => "Salah satu bentuk muka bumi karst yang menarik dalam kawasan Perlis Geopark."
    ],

    [
        "image" => "../assets/images/bukit-chabang.jpg",
        "title" => "Sesar Bukit Chabang",
        "category" => "GEOLOGI",
        "description" => "Tapak warisan geologi yang memperlihatkan ciri struktur batuan di Perlis."
    ],

    [
        "image" => "../assets/images/gua-kelam.jpg",
        "title" => "Gua Kelam",
        "category" => "GEOLOGI",
        "description" => "Kawasan gua dan landskap batu kapur yang menjadi antara tarikan semula jadi Perlis."
    ]

];


/*
|--------------------------------------------------------------------------
| MONTHS
|--------------------------------------------------------------------------
*/

$months = [
    "Januari",
    "Februari",
    "Mac",
    "April",
    "Mei",
    "Jun",
    "Julai",
    "Ogos",
    "September",
    "Oktober",
    "November",
    "Disember"
];

$currentMonth = date("n");
$currentYear = date("Y");

?>

<!DOCTYPE html>

<html lang="ms">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Perlis Geopark | Smart Perlis Tourism Portal
    </title>


    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- BOOTSTRAP ICONS -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >


    <!-- GOOGLE FONT -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


<style>

/* =========================================================
   GLOBAL
========================================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: "Inter", sans-serif;
    background: #ffffff;
    color: #333;
}


/* =========================================================
   TOP BAR
========================================================= */

.top-bar {
    background: #003B7A;
    color: white;
    font-size: 13px;
    padding: 8px 0;
}

.top-bar-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.top-bar-right {
    display: flex;
    align-items: center;
    gap: 15px;
    justify-content: flex-end;
}

.top-bar i {
    color: #FFD700;
}


/* =========================================================
   NAVBAR
========================================================= */

.main-navbar {
    background: white;
    border-bottom: 1px solid #e6e6e6;
    padding: 0;
    position: sticky;
    top: 0;
    z-index: 9999;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
}

.navbar-brand {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px 0;
}

.brand-logo {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #0057B8;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFD700;
    font-size: 25px;
}

.brand-text {
    line-height: 1.1;
}

.brand-text strong {
    display: block;
    color: #0057B8;
    font-size: 18px;
    font-weight: 800;
    letter-spacing: 1px;
}

.brand-text span {
    display: block;
    color: #777;
    font-size: 10px;
    letter-spacing: 1.5px;
    margin-top: 4px;
}

.navbar-nav {
    gap: 4px;
}

.navbar-nav .nav-link {
    color: #333 !important;
    font-size: 13px;
    font-weight: 600;
    padding: 30px 13px !important;
    transition: 0.3s;
    position: relative;
}

.navbar-nav .nav-link:hover {
    color: #0057B8 !important;
}

.navbar-nav .nav-link::after {
    content: "";
    position: absolute;
    left: 13px;
    right: 13px;
    bottom: 18px;
    height: 2px;
    background: #FFD700;
    transform: scaleX(0);
    transition: 0.3s;
}

.navbar-nav .nav-link:hover::after {
    transform: scaleX(1);
}

.dropdown-menu {
    border: none;
    border-radius: 0;
    padding: 10px 0;
    min-width: 220px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.dropdown-item {
    font-size: 13px;
    padding: 10px 18px;
    color: #444;
}

.dropdown-item:hover {
    background: #EAF3FF;
    color: #0057B8;
}


/* =========================================================
   SMART PERLIS BUTTON
========================================================= */

.smart-perlis-btn {
    background: #0057B8;
    color: white !important;
    border: none;
    padding: 10px 17px !important;
    border-radius: 4px;
    font-size: 12px !important;
    font-weight: 700 !important;
    white-space: nowrap;
    transition: 0.3s;
}

.smart-perlis-btn:hover {
    background: #FFD700;
    color: #003B7A !important;
}

.smart-perlis-btn::after {
    display: none !important;
}


/* =========================================================
   HERO
========================================================= */

.hero-section {
    position: relative;
}

.hero-carousel,
.hero-carousel .carousel-item {
    height: 600px;
}

.hero-carousel .carousel-item {
    position: relative;
    background-position: center;
    background-size: cover;
}

.hero-carousel .carousel-item::before {
    content: "";
    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            90deg,
            rgba(0,59,122,0.78),
            rgba(0,87,184,0.35),
            rgba(0,0,0,0.10)
        );
}

.hero-content {
    position: absolute;
    top: 50%;
    left: 8%;
    transform: translateY(-50%);
    color: white;
    max-width: 650px;
    z-index: 5;
}

.hero-small {
    display: inline-block;
    background: #FFD700;
    color: #003B7A;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    padding: 9px 18px;
    margin-bottom: 20px;
}

.hero-content h1 {
    font-size: 64px;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 18px;
    text-transform: uppercase;
}

.hero-content p {
    font-size: 18px;
    line-height: 1.7;
    max-width: 600px;
    margin-bottom: 30px;
}

.hero-buttons {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.hero-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: #0057B8;
    color: white;
    text-decoration: none;
    padding: 14px 25px;
    font-size: 13px;
    font-weight: 700;
    transition: 0.3s;
}

.hero-btn:hover {
    background: #FFD700;
    color: #003B7A;
}

.hero-btn.gold-btn {
    background: #FFD700;
    color: #003B7A;
}

.hero-btn.gold-btn:hover {
    background: #0057B8;
    color: white;
}

.carousel-control-prev,
.carousel-control-next {
    width: 7%;
}


/* =========================================================
   INTRO
========================================================= */

.intro-section {
    padding: 90px 0;
    background:
        linear-gradient(
            135deg,
            #ffffff 0%,
            #F5F8FC 55%,
            #EAF3FF 100%
        );
}

.section-label {
    color: #0057B8;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 12px;
    text-transform: uppercase;
}

.section-title {
    color: #0057B8;
    font-size: 38px;
    font-weight: 800;
    margin-bottom: 20px;
}

.section-description {
    color: #666;
    line-height: 1.8;
    font-size: 15px;
    max-width: 850px;
}

.intro-box {
    background:
        linear-gradient(
            135deg,
            #EAF3FF,
            #F5F9FF,
            #FFF9D6
        );

    border-left: 5px solid #FFD700;
    padding: 28px;
    margin-top: 35px;
}

.intro-box p {
    margin: 0;
    color: #555;
    line-height: 1.8;
    font-size: 14px;
}


/* =========================================================
   HERITAGE
========================================================= */

.heritage-section {
    background:
        linear-gradient(
            135deg,
            #F5F8FC,
            #EAF3FF
        );

    padding: 90px 0;
}

.heritage-card {
    background:
        linear-gradient(
            145deg,
            #ffffff,
            #F7FAFF
        );

    border: none;
    height: 100%;
    overflow: hidden;

    box-shadow:
        0 5px 20px rgba(0,0,0,0.06);

    transition: 0.35s;
}

.heritage-card:hover {
    transform: translateY(-8px);

    box-shadow:
        0 15px 35px rgba(0,87,184,0.16);
}

.heritage-image {
    height: 240px;
    width: 100%;
    object-fit: cover;
    transition: 0.5s;
}

.heritage-card:hover .heritage-image {
    transform: scale(1.04);
}

.heritage-image-wrapper {
    overflow: hidden;
    position: relative;
}

.heritage-category {
    position: absolute;
    bottom: 15px;
    left: 15px;

    background:
        linear-gradient(
            135deg,
            #0057B8,
            #0072CE
        );

    color: white;
    padding: 7px 12px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
}

.heritage-body {
    padding: 25px;
}

.heritage-body h5 {
    color: #0057B8;
    font-size: 17px;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 12px;
}

.heritage-body p {
    color: #777;
    font-size: 13px;
    line-height: 1.7;
    margin-bottom: 20px;
}

.read-more {
    color: #0057B8;
    text-decoration: none;
    font-size: 12px;
    font-weight: 700;
}

.read-more:hover {
    color: #D4A900;
}


/* =========================================================
   CATEGORIES
========================================================= */

.category-section {
    padding: 90px 0;
    background:
        linear-gradient(
            135deg,
            #ffffff,
            #F5F8FC
        );
}

.category-box {
    text-align: center;
    padding: 40px 25px;

    border: 1px solid #dce8f7;

    background:
        linear-gradient(
            145deg,
            #ffffff,
            #F5F9FF
        );

    height: 100%;
    transition: 0.3s;
}

.category-box:hover {
    border-color: #0057B8;
    transform: translateY(-5px);

    box-shadow:
        0 10px 25px rgba(0,87,184,0.12);
}

.category-icon {
    width: 75px;
    height: 75px;

    background:
        linear-gradient(
            135deg,
            #EAF3FF,
            #FFF5B8
        );

    color: #0057B8;

    display: flex;
    align-items: center;
    justify-content: center;

    margin: 0 auto 22px;

    font-size: 30px;
    border-radius: 50%;
}

.category-box h4 {
    color: #0057B8;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 12px;
}

.category-box p {
    color: #777;
    font-size: 13px;
    line-height: 1.7;
    margin: 0;
}


/* =========================================================
   CALENDAR
========================================================= */

.calendar-section {
    background:
        linear-gradient(
            135deg,
            #003B7A 0%,
            #0057B8 55%,
            #0072CE 100%
        );

    padding: 90px 0;
    color: white;
}

.calendar-section .section-label {
    color: #FFD700;
}

.calendar-section .section-title {
    color: white;
}

.calendar-section .section-description {
    color: rgba(255,255,255,0.75);
}

.month-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
    margin-top: 40px;
}

.month-box {
    border: 1px solid rgba(255,255,255,0.30);

    padding: 20px;

    text-align: center;

    color: white;
    text-decoration: none;

    transition: 0.3s;

    background: rgba(255,255,255,0.06);
}

.month-box:hover,
.month-box.active {
    background: #FFD700;
    border-color: #FFD700;
    color: #003B7A;
}

.month-box i {
    display: block;
    font-size: 23px;
    margin-bottom: 8px;
}

.month-box span {
    font-size: 13px;
    font-weight: 600;
}


/* =========================================================
   MEDIA
========================================================= */

.media-section {
    padding: 90px 0;

    background:
        linear-gradient(
            135deg,
            #ffffff,
            #F5F8FC
        );
}

.media-card {
    position: relative;
    overflow: hidden;
    height: 330px;
}

.media-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s;
}

.media-card:hover img {
    transform: scale(1.07);
}

.media-overlay {
    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            transparent 35%,
            rgba(0,59,122,0.82)
        );

    display: flex;
    flex-direction: column;
    justify-content: flex-end;

    padding: 25px;

    color: white;
}

.media-overlay h5 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 5px;
}

.media-overlay p {
    font-size: 12px;
    margin: 0;
    opacity: 0.85;
}


/* =========================================================
   CONTACT
========================================================= */

.contact-section {
    background:
        linear-gradient(
            135deg,
            #EAF3FF,
            #F5F8FC
        );

    padding: 90px 0;
}

.contact-card {
    background:
        linear-gradient(
            145deg,
            #ffffff,
            #F5F9FF
        );

    padding: 35px;
    height: 100%;

    box-shadow:
        0 5px 20px rgba(0,0,0,0.05);
}

.contact-item {
    display: flex;
    gap: 18px;
    margin-bottom: 25px;
}

.contact-icon {
    width: 45px;
    height: 45px;
    min-width: 45px;

    background:
        linear-gradient(
            135deg,
            #EAF3FF,
            #FFF5B8
        );

    color: #0057B8;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 19px;
}

.contact-item h6 {
    margin: 0 0 5px;
    color: #0057B8;
    font-weight: 700;
}

.contact-item p {
    margin: 0;
    color: #777;
    font-size: 13px;
    line-height: 1.6;
}


/* =========================================================
   FOOTER
========================================================= */

.footer {
    background:
        linear-gradient(
            135deg,
            #003B7A,
            #0057B8
        );

    color: white;
    padding: 60px 0 0;
}

.footer-brand {
    font-size: 22px;
    font-weight: 800;
    margin-bottom: 15px;
}

.footer p {
    color: rgba(255,255,255,0.7);
    font-size: 13px;
    line-height: 1.8;
}

.footer h6 {
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #FFD700;
    margin-bottom: 20px;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: rgba(255,255,255,0.7);
    text-decoration: none;
    font-size: 13px;
    transition: 0.3s;
}

.footer-links a:hover {
    color: #FFD700;
    padding-left: 5px;
}

.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.12);
    margin-top: 50px;
    padding: 20px 0;
    text-align: center;
    color: rgba(255,255,255,0.6);
    font-size: 12px;
}


/* =========================================================
   BACK TO TOP
========================================================= */

.back-top {
    position: fixed;
    right: 25px;
    bottom: 25px;

    width: 45px;
    height: 45px;

    background: #FFD700;
    color: #003B7A;

    display: flex;
    align-items: center;
    justify-content: center;

    text-decoration: none;

    z-index: 999;

    opacity: 0;
    visibility: hidden;

    transition: 0.3s;
}

.back-top.show {
    opacity: 1;
    visibility: visible;
}

.back-top:hover {
    background: #0057B8;
    color: white;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .navbar-nav .nav-link {
        padding: 12px 10px !important;
    }

    .navbar-nav .nav-link::after {
        display: none;
    }

    .smart-perlis-btn {
        display: inline-block;
        margin: 10px 0 15px;
    }

    .hero-carousel,
    .hero-carousel .carousel-item {
        height: 500px;
    }

    .hero-content h1 {
        font-size: 45px;
    }

    .month-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}


@media (max-width: 767px) {

    .top-bar-left,
    .top-bar-right {
        justify-content: center;
    }

    .top-bar-right {
        display: none;
    }

    .hero-carousel,
    .hero-carousel .carousel-item {
        height: 480px;
    }

    .hero-content {
        left: 7%;
        right: 7%;
    }

    .hero-content h1 {
        font-size: 38px;
    }

    .hero-content p {
        font-size: 15px;
    }

    .section-title {
        font-size: 30px;
    }

    .month-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}


@media (max-width: 450px) {

    .hero-content h1 {
        font-size: 32px;
    }

    .month-grid {
        grid-template-columns: 1fr 1fr;
    }
}

</style>

</head>


<body id="top">


<!-- =========================================================
     TOP BAR
========================================================= -->

<div class="top-bar">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <div class="top-bar-left">

                    <span>
                        <i class="bi bi-geo-alt-fill"></i>
                        Perlis, Malaysia
                    </span>

                    <span>
                        <i class="bi bi-globe2"></i>
                        Perlis Geopark
                    </span>

                </div>

            </div>


            <div class="col-md-6">

                <div class="top-bar-right">

                    <span>
                        <i class="bi bi-envelope"></i>
                        Smart Perlis Tourism
                    </span>

                    <span>
                        <i class="bi bi-facebook"></i>
                    </span>

                    <span>
                        <i class="bi bi-instagram"></i>
                    </span>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     NAVBAR
========================================================= -->

<nav class="navbar navbar-expand-lg main-navbar">

    <div class="container">


        <!-- LOGO -->

        <a
            class="navbar-brand"
            href="perlis_geopark.php"
        >

            <div class="brand-logo">

                <i class="bi bi-globe-asia-australia"></i>

            </div>


            <div class="brand-text">

                <strong>
                    PERLIS GEOPARK
                </strong>

                <span>
                    SMART PERLIS TOURISM PORTAL
                </span>

            </div>

        </a>


        <!-- MOBILE BUTTON -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#geoparkNavbar"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="geoparkNavbar"
        >

            <ul class="navbar-nav ms-auto">


                <!-- UTAMA -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="perlis_geopark.php"
                    >
                        Utama
                    </a>

                </li>


                <!-- INFO UMUM -->

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                    >
                        Info Umum
                    </a>

                    <ul class="dropdown-menu">

                        <li>

                            <a
                                class="dropdown-item"
                                href="info_umum/pengenalan.php"
                            >
                                Pengenalan
                            </a>

                        </li>

                        <li>

                            <a
                                class="dropdown-item"
                                href="info_umum/tadbir_urus.php"
                            >
                                Tadbir Urus
                            </a>

                        </li>

                        <li>

                            <a
                                class="dropdown-item"
                                href="info_umum/logo.php"
                            >
                                Logo Perlis Geopark
                            </a>

                        </li>

                        <li>

                            <a
                                class="dropdown-item"
                                href="info_umum/rakan_strategik.php"
                            >
                                Rakan Strategik
                            </a>

                        </li>

                    </ul>

                </li>


                <!-- TAPAK WARISAN -->

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                    >
                        Tapak Warisan
                    </a>

                    <ul class="dropdown-menu">

                        <li>

                            <a
                                class="dropdown-item"
                                href="tapak_warisan/geologi.php"
                            >
                                Geologi
                            </a>

                        </li>

                        <li>

                            <a
                                class="dropdown-item"
                                href="tapak_warisan/biologi.php"
                            >
                                Biologi
                            </a>

                        </li>

                        <li>

                            <a
                                class="dropdown-item"
                                href="tapak_warisan/budaya/ketara.php"
                            >
                                Budaya - Ketara
                            </a>

                        </li>

                        <li>

                            <a
                                class="dropdown-item"
                                href="tapak_warisan/budaya/tidak_ketara.php"
                            >
                                Budaya - Tidak Ketara
                            </a>

                        </li>

                    </ul>

                </li>


                <!-- KALENDAR -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="kalendar/kalendar.php"
                    >
                        Kalendar
                    </a>

                </li>


                <!-- MEDIA -->

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                    >
                        Media
                    </a>

                    <ul class="dropdown-menu">

                        <li>

                            <a
                                class="dropdown-item"
                                href="media/penerbitan.php"
                            >
                                Penerbitan
                            </a>

                        </li>

                    </ul>

                </li>


                <!-- HUBUNGI KAMI -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="hubungi/hubungi_geopark.php"
                    >
                        Hubungi Kami
                    </a>

                </li>


                <!-- BACK TO SMART PERLIS -->

                <li class="nav-item d-flex align-items-center">

                    <a
                        href="../index.php"
                        class="nav-link smart-perlis-btn"
                    >

                        <i class="bi bi-house-fill"></i>
                        Smart Perlis

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- =========================================================
     HERO
========================================================= -->

<section class="hero-section">

    <div
        id="geoparkCarousel"
        class="carousel slide hero-carousel"
        data-bs-ride="carousel"
    >


        <!-- INDICATORS -->

        <div class="carousel-indicators">

            <?php foreach ($heroSlides as $index => $slide): ?>

                <button
                    type="button"
                    data-bs-target="#geoparkCarousel"
                    data-bs-slide-to="<?= $index ?>"
                    class="<?= $index === 0 ? 'active' : '' ?>"
                ></button>

            <?php endforeach; ?>

        </div>


        <!-- SLIDES -->

        <div class="carousel-inner">

            <?php foreach ($heroSlides as $index => $slide): ?>

                <div
                    class="carousel-item <?= $index === 0 ? 'active' : '' ?>"
                    style="background-image:url('<?= htmlspecialchars($slide["image"]) ?>');"
                >

                    <div class="hero-content">

                        <span class="hero-small">
                            PERLIS GEOPARK
                        </span>

                        <h1>
                            <?= htmlspecialchars($slide["title"]) ?>
                        </h1>

                        <p>
                            <?= htmlspecialchars($slide["subtitle"]) ?>
                        </p>


                        <div class="hero-buttons">

                            <a
                                href="../index.php"
                                class="hero-btn"
                            >

                                <i class="bi bi-house-fill"></i>
                                Smart Perlis Tourism Portal

                            </a>


                            <a
                                href="#heritage"
                                class="hero-btn gold-btn"
                            >

                                Explore Heritage

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>


        <!-- PREVIOUS -->

        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#geoparkCarousel"
            data-bs-slide="prev"
        >

            <span class="carousel-control-prev-icon"></span>

        </button>


        <!-- NEXT -->

        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#geoparkCarousel"
            data-bs-slide="next"
        >

            <span class="carousel-control-next-icon"></span>

        </button>

    </div>

</section>


<!-- =========================================================
     INTRODUCTION
========================================================= -->

<section
    class="intro-section"
    id="pengenalan"
>

    <div class="container">

        <div class="row">

            <div class="col-lg-9">

                <div class="section-label">
                    Mengenai Perlis Geopark
                </div>

                <h2 class="section-title">
                    Discover the Heritage of Perlis
                </h2>

                <p class="section-description">

                    Perlis Geopark mengetengahkan kepelbagaian warisan
                    geologi, biologi dan budaya yang terdapat di negeri
                    Perlis. Portal ini menjadi ruang untuk pengunjung
                    mengenali lokasi-lokasi warisan serta landskap unik
                    yang terdapat di seluruh negeri.

                </p>


                <div class="intro-box">

                    <p>

                        Terokai kawasan batu kapur, gua, landskap karst,
                        tasik, kawasan semula jadi serta warisan budaya
                        masyarakat Perlis melalui pengalaman pelancongan
                        yang lebih informatif dan interaktif.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     HERITAGE
========================================================= -->

<section
    class="heritage-section"
    id="heritage"
>

    <div class="container">

        <div class="text-center mb-5">

            <div class="section-label">
                Tapak Warisan
            </div>

            <h2 class="section-title">
                Featured Heritage Sites
            </h2>

            <p class="section-description mx-auto">

                Explore selected geological, biological, landscape and
                cultural heritage attractions around Perlis.

            </p>

        </div>


        <div class="row g-4">

            <?php foreach ($heritage as $site): ?>

                <div class="col-lg-4 col-md-6">

                    <div class="heritage-card">

                        <div class="heritage-image-wrapper">

                            <img
                                src="<?= htmlspecialchars($site["image"]) ?>"
                                alt="<?= htmlspecialchars($site["title"]) ?>"
                                class="heritage-image"
                                onerror="this.src='https://placehold.co/800x500?text=Perlis+Geopark';"
                            >

                            <span class="heritage-category">

                                <?= htmlspecialchars($site["category"]) ?>

                            </span>

                        </div>


                        <div class="heritage-body">

                            <h5>

                                <?= htmlspecialchars($site["title"]) ?>

                            </h5>

                            <p>

                                <?= htmlspecialchars($site["description"]) ?>

                            </p>

                            <a
                                href="tapak_warisan/geologi.php"
                                class="read-more"
                            >

                                LEARN MORE

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     CATEGORIES
========================================================= -->

<section class="category-section">

    <div class="container">

        <div class="text-center mb-5">

            <div class="section-label">
                Explore
            </div>

            <h2 class="section-title">
                Heritage Categories
            </h2>

        </div>


        <div class="row g-4">


            <!-- GEOLOGY -->

            <div class="col-lg-4 col-md-6">

                <a
                    href="tapak_warisan/geologi.php"
                    style="text-decoration:none;"
                >

                    <div class="category-box">

                        <div class="category-icon">

                            <i class="bi bi-mountains"></i>

                        </div>

                        <h4>
                            Geologi
                        </h4>

                        <p>

                            Discover unique rock formations, limestone
                            landscapes, caves, karst features and geological
                            heritage sites in Perlis.

                        </p>

                    </div>

                </a>

            </div>


            <!-- BIOLOGY -->

            <div class="col-lg-4 col-md-6">

                <a
                    href="tapak_warisan/biologi.php"
                    style="text-decoration:none;"
                >

                    <div class="category-box">

                        <div class="category-icon">

                            <i class="bi bi-flower1"></i>

                        </div>

                        <h4>
                            Biologi
                        </h4>

                        <p>

                            Explore the natural environment, plants,
                            wildlife and biodiversity associated with
                            Perlis' natural landscapes.

                        </p>

                    </div>

                </a>

            </div>


            <!-- CULTURE -->

            <div class="col-lg-4 col-md-6">

                <a
                    href="tapak_warisan/budaya/ketara.php"
                    style="text-decoration:none;"
                >

                    <div class="category-box">

                        <div class="category-icon">

                            <i class="bi bi-building"></i>

                        </div>

                        <h4>
                            Budaya
                        </h4>

                        <p>

                            Experience the tangible and intangible cultural
                            heritage, traditions and communities of Perlis.

                        </p>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CALENDAR PREVIEW
========================================================= -->

<section
    class="calendar-section"
    id="calendar"
>

    <div class="container">

        <div class="text-center">

            <div class="section-label">
                Kalendar
            </div>

            <h2 class="section-title">
                Perlis Geopark Calendar
            </h2>

            <p class="section-description mx-auto">

                Semak aktiviti dan acara yang berkaitan dengan
                Perlis Geopark mengikut bulan.

            </p>

            <div class="mt-4">

                <a
                    href="kalendar/kalendar.php"
                    class="hero-btn gold-btn"
                >

                    <i class="bi bi-calendar-event"></i>
                    View Full Calendar

                </a>

            </div>

        </div>


        <div class="month-grid">

            <?php foreach ($months as $index => $month): ?>

                <a
                    href="kalendar/kalendar.php?month=<?= urlencode($month) ?>"
                    class="month-box <?= ($index + 1) == $currentMonth ? 'active' : '' ?>"
                >

                    <i class="bi bi-calendar-event"></i>

                    <span>
                        <?= $month ?>
                    </span>

                </a>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     MEDIA
========================================================= -->

<section
    class="media-section"
    id="media"
>

    <div class="container">

        <div class="text-center mb-5">

            <div class="section-label">
                Media
            </div>

            <h2 class="section-title">
                Explore Perlis Geopark
            </h2>

            <p class="section-description mx-auto">

                Visualise the natural landscapes and heritage
                attractions of Perlis.

            </p>

        </div>


        <div
            class="row g-4"
            id="gallery"
        >


            <!-- BUKIT CHABANG -->

            <div class="col-lg-4 col-md-6">

                <div class="media-card">

                    <img
                        src="../assets/images/bukit-chabang.jpg"
                        alt="Bukit Chabang"
                        onerror="this.src='https://placehold.co/800x600?text=Bukit+Chabang';"
                    >

                    <div class="media-overlay">

                        <h5>
                            Bukit Chabang
                        </h5>

                        <p>
                            Geological Heritage
                        </p>

                    </div>

                </div>

            </div>


            <!-- TIMAH TASOH -->

            <div class="col-lg-4 col-md-6">

                <div class="media-card">

                    <img
                        src="../assets/images/timah-tasoh.jpg"
                        alt="Tasik Timah Tasoh"
                        onerror="this.src='https://placehold.co/800x600?text=Timah+Tasoh';"
                    >

                    <div class="media-overlay">

                        <h5>
                            Tasik Timah Tasoh
                        </h5>

                        <p>
                            Landscape Heritage
                        </p>

                    </div>

                </div>

            </div>


            <!-- BUKIT AYER -->

            <div class="col-lg-4 col-md-6">

                <div class="media-card">

                    <img
                        src="../assets/images/bukit-ayer.jpg"
                        alt="Bukit Ayer"
                        onerror="this.src='https://placehold.co/800x600?text=Bukit+Ayer';"
                    >

                    <div class="media-overlay">

                        <h5>
                            Bukit Ayer
                        </h5>

                        <p>
                            Natural Heritage
                        </p>

                    </div>

                </div>

            </div>


        </div>


        <div class="text-center mt-5">

            <a
                href="media/penerbitan.php"
                class="hero-btn"
            >

                View Media & Publications

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT PREVIEW
========================================================= -->

<section
    class="contact-section"
    id="contact"
>

    <div class="container">

        <div class="row g-4">


            <div class="col-lg-5">

                <div class="section-label">
                    Hubungi Kami
                </div>

                <h2 class="section-title">
                    Get In Touch
                </h2>

                <p class="section-description">

                    Untuk maklumat lanjut berkaitan Perlis Geopark,
                    anda boleh menghubungi pihak yang berkaitan.

                </p>


                <a
                    href="hubungi/hubungi_geopark.php"
                    class="hero-btn mt-3"
                >

                    Contact Us

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>


            <div class="col-lg-7">

                <div class="contact-card">


                    <div class="contact-item">

                        <div class="contact-icon">

                            <i class="bi bi-building"></i>

                        </div>

                        <div>

                            <h6>
                                Bahagian Perancang Ekonomi Negeri
                            </h6>

                            <p>
                                Pejabat Setiausaha Kerajaan Negeri Perlis
                            </p>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">

                            <i class="bi bi-telephone"></i>

                        </div>

                        <div>

                            <h6>
                                Telefon
                            </h6>

                            <p>
                                04-973 1859
                            </p>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">

                            <i class="bi bi-envelope"></i>

                        </div>

                        <div>

                            <h6>
                                Email
                            </h6>

                            <p>
                                bpen.psukps@perlis.gov.my
                            </p>

                        </div>

                    </div>


                    <div class="contact-item mb-0">

                        <div class="contact-icon">

                            <i class="bi bi-geo-alt"></i>

                        </div>

                        <div>

                            <h6>
                                Negeri Perlis
                            </h6>

                            <p>
                                Perlis, Malaysia
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="footer">

    <div class="container">

        <div class="row g-5">


            <div class="col-lg-5">

                <div class="footer-brand">
                    PERLIS GEOPARK
                </div>

                <p>

                    Smart Perlis Tourism Portal menyediakan maklumat
                    berkaitan destinasi, warisan, acara dan pengalaman
                    pelancongan di negeri Perlis.

                </p>

            </div>


            <div class="col-lg-3">

                <h6>
                    Quick Links
                </h6>

                <ul class="footer-links">

                    <li>
                        <a href="perlis_geopark.php">
                            Utama
                        </a>
                    </li>

                    <li>
                        <a href="info_umum/pengenalan.php">
                            Pengenalan
                        </a>
                    </li>

                    <li>
                        <a href="tapak_warisan/geologi.php">
                            Tapak Warisan
                        </a>
                    </li>

                    <li>
                        <a href="kalendar/kalendar.php">
                            Kalendar
                        </a>
                    </li>

                    <li>
                        <a href="media/penerbitan.php">
                            Media
                        </a>
                    </li>

                    <li>
                        <a href="hubungi/hubungi_geopark.php">
                            Hubungi Kami
                        </a>
                    </li>

                </ul>

            </div>


            <div class="col-lg-4">

                <h6>
                    Smart Perlis
                </h6>

                <ul class="footer-links">

                    <li>

                        <a href="../index.php">

                            <i class="bi bi-house"></i>
                            Smart Perlis Tourism Portal

                        </a>

                    </li>


                    <li>

                        <a href="../destinations.php">

                            <i class="bi bi-geo-alt"></i>
                            Destinations

                        </a>

                    </li>


                    <li>

                        <a href="../events.php">

                            <i class="bi bi-calendar-event"></i>
                            Events

                        </a>

                    </li>


                    <li>

                        <a href="../gallery.php">

                            <i class="bi bi-images"></i>
                            Gallery

                        </a>

                    </li>

                </ul>

            </div>

        </div>


        <div class="footer-bottom">

            © <?= date("Y") ?>

            Smart Perlis Tourism Portal.

            All Rights Reserved.

        </div>

    </div>

</footer>


<!-- =========================================================
     BACK TO TOP
========================================================= -->

<a
    href="#top"
    class="back-top"
    id="backTop"
>

    <i class="bi bi-chevron-up"></i>

</a>


<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


<script>

/* =========================================================
   BACK TO TOP
========================================================= */

const backTop =
    document.getElementById("backTop");

window.addEventListener("scroll", function() {

    if (window.scrollY > 400) {

        backTop.classList.add("show");

    } else {

        backTop.classList.remove("show");

    }

});


/* =========================================================
   MOBILE NAVBAR
========================================================= */

document
    .querySelectorAll(".navbar-nav .nav-link")
    .forEach(function(link) {

        link.addEventListener("click", function() {

            const navbar =
                document.getElementById("geoparkNavbar");

            if (navbar.classList.contains("show")) {

                new bootstrap.Collapse(navbar).hide();

            }

        });

    });

</script>


</body>

</html>