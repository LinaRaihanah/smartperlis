<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - KALENDAR
|--------------------------------------------------------------------------
*/

$geoparkBase = "../";

include("../geopark_navbar.php");

?>

<!DOCTYPE html>
<html lang="ms">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Kalendar | Perlis Geopark</title>


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

        * {
            box-sizing: border-box;
        }


        body {

            margin: 0;

            font-family: 'Inter', sans-serif;

            background: #f4f8f4;

            color: #263238;

        }


        /* =====================================================
           HERO
        ===================================================== */

        .page-hero {

            min-height: 390px;

            background:
                linear-gradient(
                    rgba(20, 83, 45, .78),
                    rgba(15, 118, 110, .84)
                ),
                url("../assets/images/perlis-geopark.jpg")
                center/cover no-repeat;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            color: white;

            padding: 70px 20px;

        }


        .page-hero-content {

            max-width: 900px;

        }


        .page-hero-icon {

            width: 85px;

            height: 85px;

            border-radius: 50%;

            background: rgba(255,255,255,.15);

            border: 2px solid rgba(255,255,255,.6);

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 25px;

            font-size: 38px;

            color: #FFD700;

        }


        .page-hero h1 {

            font-size: clamp(2.2rem, 5vw, 3.7rem);

            font-weight: 800;

            margin-bottom: 15px;

        }


        .page-hero p {

            font-size: 1.08rem;

            line-height: 1.8;

            margin: 0;

            opacity: .95;

        }


        /* =====================================================
           MAIN CONTENT
        ===================================================== */

        .content-section {

            padding: 70px 20px;

        }


        .content-container {

            max-width: 1150px;

            margin: auto;

        }


        /* =====================================================
           INTRO
        ===================================================== */

        .intro-card {

            background: white;

            border-radius: 22px;

            padding: 40px;

            box-shadow:
                0 10px 35px rgba(0,0,0,.08);

            margin-bottom: 50px;

        }


        .intro-card h2 {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 15px;

        }


        .intro-card h2 i {

            color: #198754;

        }


        .intro-card p {

            color: #666;

            line-height: 1.9;

            margin: 0;

        }


        /* =====================================================
           CALENDAR HEADER
        ===================================================== */

        .calendar-wrapper {

            background: white;

            border-radius: 22px;

            padding: 35px;

            box-shadow:
                0 10px 35px rgba(0,0,0,.08);

        }


        .calendar-top {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            margin-bottom: 30px;

        }


        .calendar-title h2 {

            color: #14532d;

            font-weight: 800;

            margin: 0;

        }


        .calendar-title p {

            color: #6c757d;

            margin: 5px 0 0;

        }


        .year-badge {

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754
                );

            color: white;

            padding: 10px 18px;

            border-radius: 30px;

            font-weight: 700;

        }


        /* =====================================================
           MONTHS
        ===================================================== */

        .month-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 15px;

        }


        .month-card {

            background: #f8fbf8;

            border: 1px solid #e0ebe2;

            border-radius: 16px;

            padding: 20px;

            text-align: center;

            transition: .3s;

            cursor: pointer;

        }


        .month-card:hover {

            transform: translateY(-5px);

            border-color: #198754;

            box-shadow:
                0 8px 20px rgba(25,135,84,.12);

        }


        .month-icon {

            width: 50px;

            height: 50px;

            border-radius: 50%;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 12px;

            font-size: 21px;

        }


        .month-card h5 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 5px;

        }


        .month-card span {

            font-size: .78rem;

            color: #777;

        }


        /* =====================================================
           SECTION HEADING
        ===================================================== */

        .section-heading {

            text-align: center;

            margin: 60px 0 35px;

        }


        .section-heading h2 {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 10px;

        }


        .section-heading p {

            color: #6c757d;

            margin: 0;

        }


        /* =====================================================
           EVENT CARDS
        ===================================================== */

        .event-card {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.08);

            transition: .3s;

            border-top: 5px solid #198754;

        }


        .event-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.14);

        }


        .event-date {

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754
                );

            color: white;

            padding: 22px;

            display: flex;

            align-items: center;

            gap: 18px;

        }


        .event-day {

            font-size: 2rem;

            font-weight: 800;

            line-height: 1;

        }


        .event-month {

            font-size: .85rem;

            font-weight: 600;

            opacity: .9;

            text-transform: uppercase;

        }


        .event-content {

            padding: 25px;

        }


        .event-content h4 {

            color: #14532d;

            font-size: 1.1rem;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .event-content p {

            color: #666;

            font-size: .9rem;

            line-height: 1.7;

            margin-bottom: 15px;

        }


        .event-location {

            display: flex;

            align-items: center;

            gap: 7px;

            color: #198754;

            font-size: .85rem;

            font-weight: 600;

        }


        .event-tag {

            display: inline-block;

            margin-top: 15px;

            padding: 6px 12px;

            background: #e8f5e9;

            color: #198754;

            border-radius: 20px;

            font-size: .75rem;

            font-weight: 700;

        }


        /* =====================================================
           INFO BOX
        ===================================================== */

        .info-box {

            margin-top: 55px;

            padding: 40px;

            border-radius: 22px;

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754,
                    #0f766e
                );

            color: white;

            box-shadow:
                0 12px 35px rgba(20,83,45,.20);

        }


        .info-box h2 {

            font-weight: 800;

            margin-bottom: 15px;

        }


        .info-box p {

            line-height: 1.9;

            opacity: .95;

            margin-bottom: 25px;

        }


        .info-item {

            display: flex;

            gap: 13px;

            margin-bottom: 15px;

        }


        .info-item i {

            color: #FFD700;

            font-size: 19px;

            flex-shrink: 0;

        }


        .info-item span {

            line-height: 1.7;

        }


        /* =====================================================
           BACK BUTTON
        ===================================================== */

        .button-wrapper {

            text-align: center;

            margin-top: 45px;

        }


        .back-button {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            background: #198754;

            color: white;

            padding: 12px 24px;

            border-radius: 30px;

            text-decoration: none;

            font-weight: 600;

            transition: .3s;

        }


        .back-button:hover {

            background: #14532d;

            color: white;

            transform: translateY(-2px);

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 992px) {

            .month-grid {

                grid-template-columns:
                    repeat(3, 1fr);

            }

        }


        @media (max-width: 768px) {

            .page-hero {

                min-height: 310px;

                padding: 55px 20px;

            }


            .content-section {

                padding: 50px 15px;

            }


            .calendar-wrapper {

                padding: 25px 18px;

            }


            .calendar-top {

                flex-direction: column;

                align-items: flex-start;

            }


            .month-grid {

                grid-template-columns:
                    repeat(2, 1fr);

            }


            .intro-card {

                padding: 28px 22px;

            }


            .info-box {

                padding: 30px 22px;

            }

        }


        @media (max-width: 450px) {

            .month-grid {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     HERO
========================================================= -->

<section class="page-hero">

    <div class="page-hero-content">


        <div class="page-hero-icon">

            <i class="bi bi-calendar-event-fill"></i>

        </div>


        <h1>
            Kalendar Perlis Geopark
        </h1>


        <p>

            Ketahui program, aktiviti dan acara berkaitan
            warisan, alam sekitar serta komuniti Perlis Geopark.

        </p>

    </div>

</section>



<!-- =========================================================
     CONTENT
========================================================= -->

<section class="content-section">

    <div class="content-container">


        <!-- =================================================
             INTRO
        ================================================== -->

        <div class="intro-card">

            <h2>

                <i class="bi bi-calendar3 me-2"></i>

                Kalendar Aktiviti

            </h2>


            <p>

                Kalendar ini memaparkan aktiviti dan program
                yang berkaitan dengan Perlis Geopark termasuk
                program pendidikan, pemuliharaan alam sekitar,
                aktiviti komuniti serta acara pelancongan
                berasaskan warisan.

            </p>

        </div>



        <!-- =================================================
             CALENDAR
        ================================================== -->

        <div class="calendar-wrapper">


            <div class="calendar-top">


                <div class="calendar-title">

                    <h2>
                        Pilih Bulan
                    </h2>

                    <p>
                        Terokai aktiviti mengikut bulan
                    </p>

                </div>


                <div class="year-badge">

                    <i class="bi bi-calendar2-check me-2"></i>

                    <?php echo date("Y"); ?>

                </div>


            </div>



            <div class="month-grid">


                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Januari
                    </h5>

                    <span>
                        Bulan 01
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Februari
                    </h5>

                    <span>
                        Bulan 02
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Mac
                    </h5>

                    <span>
                        Bulan 03
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        April
                    </h5>

                    <span>
                        Bulan 04
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Mei
                    </h5>

                    <span>
                        Bulan 05
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Jun
                    </h5>

                    <span>
                        Bulan 06
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Julai
                    </h5>

                    <span>
                        Bulan 07
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Ogos
                    </h5>

                    <span>
                        Bulan 08
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        September
                    </h5>

                    <span>
                        Bulan 09
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Oktober
                    </h5>

                    <span>
                        Bulan 10
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        November
                    </h5>

                    <span>
                        Bulan 11
                    </span>

                </div>



                <div class="month-card">

                    <div class="month-icon">

                        <i class="bi bi-calendar"></i>

                    </div>

                    <h5>
                        Disember
                    </h5>

                    <span>
                        Bulan 12
                    </span>

                </div>


            </div>

        </div>



        <!-- =================================================
             UPCOMING EVENTS
        ================================================== -->

        <div class="section-heading">

            <h2>
                Aktiviti Akan Datang
            </h2>


            <p>

                Contoh aktiviti berkaitan Perlis Geopark

            </p>

        </div>



        <div class="row g-4">


            <!-- EVENT 1 -->

            <div class="col-md-6 col-lg-4">

                <div class="event-card">


                    <div class="event-date">

                        <div class="event-day">
                            01
                        </div>


                        <div>

                            <div class="event-month">
                                Januari
                            </div>

                            <div>
                                Program Geopark
                            </div>

                        </div>

                    </div>


                    <div class="event-content">

                        <h4>
                            Hari Kesedaran Geopark
                        </h4>


                        <p>

                            Program kesedaran mengenai kepentingan
                            warisan geologi, biologi dan budaya
                            Perlis.

                        </p>


                        <div class="event-location">

                            <i class="bi bi-geo-alt-fill"></i>

                            Perlis Geopark

                        </div>


                        <span class="event-tag">

                            PENDIDIKAN

                        </span>

                    </div>

                </div>

            </div>



            <!-- EVENT 2 -->

            <div class="col-md-6 col-lg-4">

                <div class="event-card">


                    <div class="event-date">

                        <div class="event-day">
                            15
                        </div>


                        <div>

                            <div class="event-month">
                                Februari
                            </div>

                            <div>
                                Aktiviti Alam
                            </div>

                        </div>

                    </div>


                    <div class="event-content">

                        <h4>
                            Eksplorasi Warisan Alam
                        </h4>


                        <p>

                            Aktiviti penerokaan dan pembelajaran
                            berkaitan biodiversiti serta
                            landskap semula jadi.

                        </p>


                        <div class="event-location">

                            <i class="bi bi-geo-alt-fill"></i>

                            Kawasan Geopark

                        </div>


                        <span class="event-tag">

                            ALAM SEKITAR

                        </span>

                    </div>

                </div>

            </div>



            <!-- EVENT 3 -->

            <div class="col-md-6 col-lg-4">

                <div class="event-card">


                    <div class="event-date">

                        <div class="event-day">
                            20
                        </div>


                        <div>

                            <div class="event-month">
                                Mac
                            </div>

                            <div>
                                Program Komuniti
                            </div>

                        </div>

                    </div>


                    <div class="event-content">

                        <h4>
                            Hari Warisan Komuniti
                        </h4>


                        <p>

                            Aktiviti yang mengetengahkan budaya,
                            tradisi dan penglibatan komuniti
                            tempatan.

                        </p>


                        <div class="event-location">

                            <i class="bi bi-geo-alt-fill"></i>

                            Komuniti Tempatan

                        </div>


                        <span class="event-tag">

                            BUDAYA

                        </span>

                    </div>

                </div>

            </div>


        </div>



        <!-- =================================================
             INFORMATION BOX
        ================================================== -->

        <div class="info-box">


            <h2>

                <i class="bi bi-info-circle-fill me-2"></i>

                Sertai Aktiviti Perlis Geopark

            </h2>


            <p>

                Aktiviti berkaitan geopark dapat memberi peluang
                kepada masyarakat dan pelawat untuk mengenali
                warisan semula jadi dan budaya Perlis dengan
                lebih dekat.

            </p>


            <div class="info-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Pelajari sejarah dan warisan geologi Perlis.

                </span>

            </div>


            <div class="info-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Kenali biodiversiti dan ekosistem semula jadi.

                </span>

            </div>


            <div class="info-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Kenali budaya dan komuniti tempatan.

                </span>

            </div>


            <div class="info-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Sokong usaha pemeliharaan warisan Perlis.

                </span>

            </div>


        </div>



        <!-- =================================================
             BACK BUTTON
        ================================================== -->

        <div class="button-wrapper">

            <a
                href="<?php echo $geoparkBase; ?>perlis_geopark.php"
                class="back-button"
            >

                <i class="bi bi-arrow-left"></i>

                Kembali ke Perlis Geopark

            </a>

        </div>


    </div>

</section>



<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>