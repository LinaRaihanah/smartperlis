<?php

include("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Contact Us - Perlis Geopark</title>

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

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            background: #ffffff;
            color: #333;
        }


        /* =====================================================
           TOP BAR
        ===================================================== */

        .top-bar {
            background: #f5f5f5;
            border-bottom: 1px solid #e5e5e5;
            min-height: 38px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0 6%;
            font-size: 13px;
            color: #666;
        }

        .top-bar a {
            color: #666;
            text-decoration: none;
            margin-left: 20px;
        }

        .top-bar a:hover {
            color: #0066a1;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .main-navbar {
            background: #ffffff;
            border-bottom: 1px solid #e6e6e6;
            min-height: 82px;
            padding: 0 5%;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            color: #006b4f !important;
            font-size: 21px;
            letter-spacing: .2px;
        }

        .brand-logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            background: #f1f1f1;
        }

        .brand-text {
            line-height: 1.1;
        }

        .brand-text small {
            display: block;
            font-size: 10px;
            font-weight: 500;
            color: #777;
            margin-top: 4px;
            letter-spacing: .7px;
        }

        .navbar-nav {
            align-items: center;
            gap: 4px;
        }

        .nav-link {
            color: #333 !important;
            font-size: 14px;
            font-weight: 500;
            padding: 11px 14px !important;
            border-radius: 5px;
            transition: .25s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #ffffff !important;
            background: #006b4f;
        }

        .dropdown-menu {
            border: none;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,.12);
            padding: 8px;
        }

        .dropdown-item {
            font-size: 14px;
            padding: 10px 14px;
            border-radius: 5px;
        }

        .dropdown-item:hover {
            background: #eef7f3;
            color: #006b4f;
        }

        .smart-btn {
            background: #006b4f !important;
            color: #ffffff !important;
            padding: 10px 17px !important;
            border-radius: 6px !important;
            margin-left: 8px;
        }

        .smart-btn:hover {
            background: #004f3b !important;
        }


        /* =====================================================
           PAGE HERO
        ===================================================== */

        .page-hero {
            min-height: 320px;
            background:
                linear-gradient(
                    rgba(0, 55, 45, .70),
                    rgba(0, 55, 45, .70)
                ),
                url("assets/images/perlis-geopark.jpg")
                center center / cover no-repeat;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ffffff;
            position: relative;
        }

        .page-hero-content {
            padding: 70px 20px;
        }

        .page-hero h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: .5px;
        }

        .page-hero p {
            font-size: 16px;
            margin: 0;
            opacity: .95;
        }


        /* =====================================================
           BREADCRUMB
        ===================================================== */

        .breadcrumb-section {
            background: #f7f7f7;
            border-bottom: 1px solid #e8e8e8;
            padding: 14px 7%;
        }

        .breadcrumb {
            margin: 0;
            font-size: 13px;
        }

        .breadcrumb a {
            color: #006b4f;
            text-decoration: none;
        }


        /* =====================================================
           CONTACT SECTION
        ===================================================== */

        .contact-section {
            padding: 80px 7%;
            background: #ffffff;
        }

        .contact-container {
            max-width: 1150px;
            margin: auto;
        }

        .section-small-title {
            color: #777;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .contact-title {
            color: #006b4f;
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 35px;
        }

        .contact-info {
            padding-right: 45px;
        }

        .contact-info h3 {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-info p {
            color: #666;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 25px;
        }


        /* =====================================================
           CONTACT DETAILS
        ===================================================== */

        .contact-detail {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 22px;
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
            background: #eaf5f1;
            color: #006b4f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .contact-detail h6 {
            margin: 0 0 5px;
            font-size: 14px;
            font-weight: 700;
            color: #333;
        }

        .contact-detail a {
            color: #555;
            text-decoration: none;
            font-size: 14px;
        }

        .contact-detail a:hover {
            color: #006b4f;
        }


        /* =====================================================
           CONTACT FORM
        ===================================================== */

        .contact-form-box {
            background: #fafafa;
            border: 1px solid #e8e8e8;
            padding: 35px;
            border-radius: 5px;
        }

        .contact-form-box h3 {
            font-size: 21px;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 7px;
        }

        .form-control {
            border: 1px solid #dcdcdc;
            border-radius: 3px;
            min-height: 46px;
            font-size: 14px;
            padding: 10px 13px;
        }

        .form-control:focus {
            border-color: #006b4f;
            box-shadow: 0 0 0 3px rgba(0,107,79,.08);
        }

        textarea.form-control {
            min-height: 140px;
            resize: vertical;
        }

        .submit-btn {
            background: #006b4f;
            color: #ffffff;
            border: none;
            padding: 12px 28px;
            border-radius: 3px;
            font-size: 14px;
            font-weight: 600;
            transition: .25s ease;
        }

        .submit-btn:hover {
            background: #004f3b;
        }


        /* =====================================================
           MAP
        ===================================================== */

        .map-section {
            background: #f7f7f7;
            padding: 70px 7%;
        }

        .map-container {
            max-width: 1150px;
            margin: auto;
        }

        .map-title {
            font-size: 28px;
            font-weight: 800;
            color: #006b4f;
            margin-bottom: 25px;
        }

        .map-box {
            width: 100%;
            height: 350px;
            border-radius: 5px;
            overflow: hidden;
            border: 1px solid #ddd;
            background: #e9e9e9;
        }

        .map-box iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            background: #174c3b;
            color: #ffffff;
            padding: 45px 7% 20px;
        }

        .footer-container {
            max-width: 1150px;
            margin: auto;
        }

        .footer-title {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .footer-text {
            color: rgba(255,255,255,.75);
            font-size: 13px;
            line-height: 1.8;
            max-width: 500px;
        }

        .footer-links {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            color: rgba(255,255,255,.75);
            text-decoration: none;
            font-size: 13px;
        }

        .footer-links a:hover {
            color: #ffffff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.15);
            margin-top: 35px;
            padding-top: 18px;
            text-align: center;
            color: rgba(255,255,255,.65);
            font-size: 12px;
        }


        /* =====================================================
           BACK TO TOP
        ===================================================== */

        .back-top {
            position: fixed;
            right: 25px;
            bottom: 25px;
            width: 43px;
            height: 43px;
            border-radius: 50%;
            background: #006b4f;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,.2);
            z-index: 999;
        }

        .back-top:hover {
            background: #004f3b;
            color: #ffffff;
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 991px) {

            .main-navbar {
                padding: 10px 4%;
            }

            .navbar-nav {
                align-items: flex-start;
                margin-top: 15px;
            }

            .smart-btn {
                margin-left: 0;
                margin-top: 5px;
            }

            .page-hero h1 {
                font-size: 38px;
            }

            .contact-info {
                padding-right: 0;
                margin-bottom: 40px;
            }

        }

        @media (max-width: 576px) {

            .top-bar {
                display: none;
            }

            .page-hero {
                min-height: 260px;
            }

            .page-hero h1 {
                font-size: 31px;
            }

            .contact-section {
                padding: 55px 5%;
            }

            .contact-form-box {
                padding: 25px 20px;
            }

            .contact-title {
                font-size: 28px;
            }

            .map-section {
                padding: 50px 5%;
            }

        }

    </style>

</head>


<body id="top">


<!-- =========================================================
     TOP BAR
========================================================= -->

<div class="top-bar">

    <span>
        Perlis Geopark
    </span>

    <a href="mailto:bpen.psukps@perlis.gov.my">
        <i class="bi bi-envelope"></i>
        Email
    </a>

    <a href="tel:049731859">
        <i class="bi bi-telephone"></i>
        04-9731859
    </a>

</div>


<!-- =========================================================
     NAVBAR
========================================================= -->

<nav class="navbar navbar-expand-lg main-navbar">

    <div class="container-fluid">

        <a
            class="navbar-brand"
            href="perlis_geopark.php"
        >

            <img
                src="assets/images/perlis-geopark-logo.png"
                alt="Perlis Geopark"
                class="brand-logo"
                onerror="this.style.display='none';"
            >

            <div class="brand-text">

                PERLIS GEOPARK

                <small>
                    GEOLOGICAL • BIOLOGICAL • CULTURAL HERITAGE
                </small>

            </div>

        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="mainNavbar"
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
                                href="perlis_geopark.php#introduction"
                            >
                                Pengenalan
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="perlis_geopark.php#governance"
                            >
                                Tadbir Urus
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="perlis_geopark.php"
                            >
                                Logo Perlis Geopark
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="perlis_geopark.php"
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
                                href="perlis_geopark.php#heritage"
                            >
                                Geologi
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="perlis_geopark.php#heritage"
                            >
                                Biologi
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="perlis_geopark.php#heritage"
                            >
                                Budaya
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- KALENDAR -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="perlis_geopark.php#calendar"
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
                                href="perlis_geopark.php#media"
                            >
                                Penerbitan
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- HUBUNGI KAMI -->

                <li class="nav-item">

                    <a
                        class="nav-link active"
                        href="hubungi_geopark.php"
                    >

                        Hubungi Kami

                    </a>

                </li>


                <!-- SMART PERLIS -->

                <li class="nav-item">

                    <a
                        class="nav-link smart-btn"
                        href="index.php"
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
     PAGE HERO
========================================================= -->

<section class="page-hero">

    <div class="page-hero-content">

        <h1>
            Contact Us
        </h1>

        <p>
            Perlis Geopark
        </p>

    </div>

</section>



<!-- =========================================================
     BREADCRUMB
========================================================= -->

<section class="breadcrumb-section">

    <div class="container-fluid">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item">

                    <a href="perlis_geopark.php">
                        Utama
                    </a>

                </li>

                <li class="breadcrumb-item active">

                    Contact Us

                </li>

            </ol>

        </nav>

    </div>

</section>



<!-- =========================================================
     CONTACT
========================================================= -->

<section class="contact-section">

    <div class="contact-container">

        <div class="row g-5">


            <!-- =================================================
                 LEFT SIDE
            ================================================== -->

            <div class="col-lg-5">

                <div class="contact-info">

                    <div class="section-small-title">

                        Perlis Geopark

                    </div>


                    <h2 class="contact-title">

                        Hubungi Kami

                    </h2>


                    <h3>

                        Bahagian Perancang Ekonomi Negeri

                    </h3>


                    <p>

                        Sekiranya anda mempunyai sebarang pertanyaan,
                        cadangan atau ingin mendapatkan maklumat lanjut
                        berkaitan Perlis Geopark, sila hubungi pihak kami
                        melalui maklumat yang disediakan.

                    </p>


                    <!-- EMAIL -->

                    <div class="contact-detail">

                        <div class="contact-icon">

                            <i class="bi bi-envelope-fill"></i>

                        </div>

                        <div>

                            <h6>
                                Email
                            </h6>

                            <a href="mailto:bpen.psukps@perlis.gov.my">

                                bpen.psukps@perlis.gov.my

                            </a>

                        </div>

                    </div>


                    <!-- PHONE -->

                    <div class="contact-detail">

                        <div class="contact-icon">

                            <i class="bi bi-telephone-fill"></i>

                        </div>

                        <div>

                            <h6>
                                Telefon
                            </h6>

                            <a href="tel:049731859">

                                04-9731859

                            </a>

                        </div>

                    </div>


                    <!-- LOCATION -->

                    <div class="contact-detail">

                        <div class="contact-icon">

                            <i class="bi bi-geo-alt-fill"></i>

                        </div>

                        <div>

                            <h6>
                                Lokasi
                            </h6>

                            <span style="font-size:14px;color:#555;line-height:1.6;">

                                Pejabat Setiausaha Kerajaan Negeri Perlis

                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 RIGHT SIDE - FORM
            ================================================== -->

            <div class="col-lg-7">

                <div class="contact-form-box">

                    <h3>

                        Hantar Mesej

                    </h3>


                    <form
                        action=""
                        method="POST"
                    >


                        <!-- NAMA -->

                        <div class="mb-3">

                            <label
                                class="form-label"
                                for="nama"
                            >

                                Nama

                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                placeholder="Nama anda"
                                required
                            >

                        </div>


                        <!-- EMAIL -->

                        <div class="mb-3">

                            <label
                                class="form-label"
                                for="email"
                            >

                                Emel *

                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Alamat emel anda"
                                required
                            >

                        </div>


                        <!-- TAJUK -->

                        <div class="mb-3">

                            <label
                                class="form-label"
                                for="tajuk"
                            >

                                Tajuk

                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="tajuk"
                                name="tajuk"
                                placeholder="Tajuk mesej"
                            >

                        </div>


                        <!-- MESSAGE -->

                        <div class="mb-4">

                            <label
                                class="form-label"
                                for="mesej"
                            >

                                Mesej

                            </label>

                            <textarea
                                class="form-control"
                                id="mesej"
                                name="mesej"
                                placeholder="Tulis mesej anda di sini..."
                                required
                            ></textarea>

                        </div>


                        <!-- BUTTON -->

                        <button
                            type="submit"
                            class="submit-btn"
                        >

                            <i class="bi bi-send-fill"></i>

                            Hantar Mesej

                        </button>


                    </form>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     MAP
========================================================= -->

<section class="map-section">

    <div class="map-container">

        <h2 class="map-title">

            Lokasi

        </h2>


        <div class="map-box">

            <iframe
                src="https://www.google.com/maps?q=Pejabat+Setiausaha+Kerajaan+Negeri+Perlis&output=embed"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>

        </div>

    </div>

</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <div class="footer-container">

        <div class="row">


            <div class="col-lg-7 mb-4">

                <div class="footer-title">

                    Perlis Geopark

                </div>

                <div class="footer-text">

                    Discover the geological, biological and cultural
                    heritage of Perlis through Perlis Geopark.

                </div>

            </div>


            <div class="col-lg-5">

                <div class="footer-title">

                    Hubungi Kami

                </div>

                <ul class="footer-links">

                    <li>

                        <a href="mailto:bpen.psukps@perlis.gov.my">

                            <i class="bi bi-envelope"></i>

                            bpen.psukps@perlis.gov.my

                        </a>

                    </li>

                    <li>

                        <a href="tel:049731859">

                            <i class="bi bi-telephone"></i>

                            04-9731859

                        </a>

                    </li>

                </ul>

            </div>


        </div>


        <div class="footer-bottom">

            Hakcipta Terpelihara ©
            <?= date("Y") ?>,
            Smart Perlis Tourism Portal.

        </div>

    </div>

</footer>



<!-- =========================================================
     BACK TO TOP
========================================================= -->

<a
    href="#top"
    class="back-top"
    title="Back to Top"
>

    <i class="bi bi-arrow-up"></i>

</a>



<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>