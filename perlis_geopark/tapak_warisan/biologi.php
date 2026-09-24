<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - BIOLOGI
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

    <title>Biologi | Perlis Geopark</title>

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
                    rgba(20, 83, 45, .76),
                    rgba(15, 118, 110, .82)
                ),
                url("../assets/images/bukit-ayer.jpg")
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
           CONTENT
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

            padding: 45px;

            box-shadow:
                0 10px 35px rgba(0,0,0,.08);

            margin-bottom: 50px;

        }

        .intro-card h2 {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 20px;

        }

        .intro-card h2 i {

            color: #198754;

        }

        .intro-card p {

            color: #555;

            line-height: 1.9;

            text-align: justify;

            margin-bottom: 15px;

        }

        /* =====================================================
           BIODIVERSITY STATS
        ===================================================== */

        .stat-card {

            background: white;

            border-radius: 20px;

            padding: 30px 22px;

            height: 100%;

            text-align: center;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            border-bottom: 5px solid #198754;

            transition: .3s;

        }

        .stat-card:hover {

            transform: translateY(-5px);

        }

        .stat-icon {

            width: 70px;

            height: 70px;

            border-radius: 50%;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 18px;

            font-size: 31px;

        }

        .stat-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 10px;

        }

        .stat-card p {

            color: #666;

            font-size: .9rem;

            line-height: 1.7;

            margin: 0;

        }

        /* =====================================================
           SECTION HEADING
        ===================================================== */

        .section-heading {

            text-align: center;

            margin: 55px 0 35px;

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
           BIOLOGICAL ELEMENTS
        ===================================================== */

        .bio-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            position: relative;

            overflow: hidden;

        }

        .bio-card::before {

            content: "";

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 5px;

            background:
                linear-gradient(
                    90deg,
                    #14532d,
                    #198754,
                    #0f766e
                );

        }

        .bio-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.12);

        }

        .bio-icon {

            width: 65px;

            height: 65px;

            border-radius: 16px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;

            margin-bottom: 20px;

        }

        .bio-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .bio-card p {

            color: #666;

            font-size: .93rem;

            line-height: 1.75;

            margin: 0;

        }

        /* =====================================================
           HABITAT SECTION
        ===================================================== */

        .habitat-card {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.08);

            transition: .3s;

        }

        .habitat-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.13);

        }

        .habitat-image {

            height: 230px;

            overflow: hidden;

        }

        .habitat-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: .5s;

        }

        .habitat-card:hover .habitat-image img {

            transform: scale(1.06);

        }

        .habitat-content {

            padding: 25px;

        }

        .habitat-content h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .habitat-content p {

            color: #666;

            line-height: 1.7;

            font-size: .92rem;

            margin-bottom: 15px;

        }

        .habitat-tag {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            background: #e8f5e9;

            color: #198754;

            padding: 7px 12px;

            border-radius: 20px;

            font-size: .8rem;

            font-weight: 600;

        }

        /* =====================================================
           CONSERVATION BOX
        ===================================================== */

        .conservation-box {

            margin-top: 55px;

            padding: 45px;

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

        .conservation-box h2 {

            font-weight: 800;

            margin-bottom: 18px;

        }

        .conservation-box > p {

            line-height: 1.9;

            opacity: .95;

            margin-bottom: 28px;

        }

        .conservation-item {

            display: flex;

            gap: 15px;

            margin-bottom: 18px;

            align-items: flex-start;

        }

        .conservation-item i {

            color: #FFD700;

            font-size: 20px;

            flex-shrink: 0;

        }

        .conservation-item span {

            line-height: 1.7;

        }

        /* =====================================================
           BUTTON
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

        @media (max-width: 768px) {

            .page-hero {

                min-height: 310px;

                padding: 55px 20px;

            }

            .intro-card {

                padding: 28px 22px;

            }

            .conservation-box {

                padding: 30px 22px;

            }

            .content-section {

                padding: 50px 15px;

            }

            .habitat-image {

                height: 210px;

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

            <i class="bi bi-flower1"></i>

        </div>

        <h1>Warisan Biologi</h1>

        <p>

            Mengenali kepelbagaian flora, fauna dan ekosistem
            semula jadi yang terdapat di Perlis Geopark.

        </p>

    </div>

</section>


<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<section class="content-section">

    <div class="content-container">


        <!-- =================================================
             INTRO
        ================================================== -->

        <div class="intro-card">

            <h2>

                <i class="bi bi-tree-fill me-2"></i>

                Biodiversiti Perlis Geopark

            </h2>

            <p>

                Selain mempunyai warisan geologi yang unik,
                Perlis turut mempunyai kepelbagaian biologi
                yang berkait rapat dengan keadaan bentuk muka
                bumi, hutan, kawasan batu kapur, sungai dan
                ekosistem semula jadi.

            </p>

            <p>

                Kepelbagaian habitat menyediakan ruang kepada
                pelbagai jenis tumbuhan dan haiwan untuk hidup
                serta membentuk ekosistem yang saling berkaitan.

            </p>

            <p>

                Pemeliharaan biodiversiti merupakan salah satu
                aspek penting dalam memastikan keseimbangan
                alam sekitar dan kelestarian kawasan Perlis
                Geopark.

            </p>

        </div>


        <!-- =================================================
             STATS
        ================================================== -->

        <div class="row g-4">


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-tree"></i>

                    </div>

                    <h4>
                        Flora
                    </h4>

                    <p>

                        Kepelbagaian tumbuhan yang hidup
                        dalam pelbagai habitat semula jadi.

                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-bug"></i>

                    </div>

                    <h4>
                        Fauna
                    </h4>

                    <p>

                        Pelbagai hidupan liar yang bergantung
                        kepada ekosistem dan habitat tempatan.

                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-water"></i>

                    </div>

                    <h4>
                        Ekosistem
                    </h4>

                    <p>

                        Hubungan antara organisma dengan
                        persekitaran semula jadi di sekitarnya.

                    </p>

                </div>

            </div>


        </div>


        <!-- =================================================
             BIOLOGICAL ELEMENTS
        ================================================== -->

        <div class="section-heading">

            <h2>
                Komponen Warisan Biologi
            </h2>

            <p>
                Elemen semula jadi yang menyumbang kepada
                kepelbagaian biodiversiti Perlis
            </p>

        </div>


        <div class="row g-4">


            <!-- FLORA -->

            <div class="col-md-6 col-lg-3">

                <div class="bio-card">

                    <div class="bio-icon">

                        <i class="bi bi-flower2"></i>

                    </div>

                    <h4>
                        Tumbuhan
                    </h4>

                    <p>

                        Pelbagai spesies tumbuhan yang tumbuh
                        di kawasan hutan, bukit, kawasan batu
                        kapur dan persekitaran lain.

                    </p>

                </div>

            </div>


            <!-- FAUNA -->

            <div class="col-md-6 col-lg-3">

                <div class="bio-card">

                    <div class="bio-icon">

                        <i class="bi bi-bird"></i>

                    </div>

                    <h4>
                        Hidupan Liar
                    </h4>

                    <p>

                        Kehadiran pelbagai haiwan dan hidupan
                        liar yang menjadikan kawasan semula
                        jadi sebagai habitat.

                    </p>

                </div>

            </div>


            <!-- SERANGGA -->

            <div class="col-md-6 col-lg-3">

                <div class="bio-card">

                    <div class="bio-icon">

                        <i class="bi bi-bug-fill"></i>

                    </div>

                    <h4>
                        Serangga
                    </h4>

                    <p>

                        Serangga memainkan peranan penting
                        dalam rantaian makanan dan proses
                        ekologi semula jadi.

                    </p>

                </div>

            </div>


            <!-- EKOSISTEM -->

            <div class="col-md-6 col-lg-3">

                <div class="bio-card">

                    <div class="bio-icon">

                        <i class="bi bi-diagram-3-fill"></i>

                    </div>

                    <h4>
                        Ekosistem
                    </h4>

                    <p>

                        Interaksi antara tumbuhan, haiwan,
                        mikroorganisma dan faktor persekitaran.

                    </p>

                </div>

            </div>


        </div>


        <!-- =================================================
             HABITATS
        ================================================== -->

        <div class="section-heading">

            <h2>
                Habitat Semula Jadi
            </h2>

            <p>
                Pelbagai persekitaran yang menyokong kehidupan
                biodiversiti di Perlis
            </p>

        </div>


        <div class="row g-4">


            <!-- BUKIT AYER -->

            <div class="col-md-6 col-lg-4">

                <div class="habitat-card">

                    <div class="habitat-image">

                        <img
                            src="../assets/images/bukit-ayer.jpg"
                            alt="Bukit Ayer"
                        >

                    </div>

                    <div class="habitat-content">

                        <h4>
                            Kawasan Hutan dan Bukit
                        </h4>

                        <p>

                            Kawasan hutan dan bukit menyediakan
                            habitat kepada pelbagai jenis flora
                            dan fauna.

                        </p>

                        <span class="habitat-tag">

                            <i class="bi bi-tree-fill"></i>

                            Hutan

                        </span>

                    </div>

                </div>

            </div>


            <!-- TIMAH TASOH -->

            <div class="col-md-6 col-lg-4">

                <div class="habitat-card">

                    <div class="habitat-image">

                        <img
                            src="../assets/images/timah-tasoh.jpg"
                            alt="Tasik Timah Tasoh"
                        >

                    </div>

                    <div class="habitat-content">

                        <h4>
                            Ekosistem Tasik
                        </h4>

                        <p>

                            Kawasan tasik dan persekitarannya
                            menyokong pelbagai hidupan air
                            serta kehidupan yang berkaitan.

                        </p>

                        <span class="habitat-tag">

                            <i class="bi bi-water"></i>

                            Air Tawar

                        </span>

                    </div>

                </div>

            </div>


            <!-- BUKIT CHABANG -->

            <div class="col-md-6 col-lg-4">

                <div class="habitat-card">

                    <div class="habitat-image">

                        <img
                            src="../assets/images/bukit-chabang.jpg"
                            alt="Bukit Chabang"
                        >

                    </div>

                    <div class="habitat-content">

                        <h4>
                            Kawasan Batu Kapur
                        </h4>

                        <p>

                            Kawasan batu kapur mempunyai keadaan
                            persekitaran yang menyokong organisma
                            tertentu dan ekosistem tersendiri.

                        </p>

                        <span class="habitat-tag">

                            <i class="bi bi-mountains"></i>

                            Batu Kapur

                        </span>

                    </div>

                </div>

            </div>


        </div>


        <!-- =================================================
             CONSERVATION
        ================================================== -->

        <div class="conservation-box">

            <h2>

                <i class="bi bi-shield-check me-2"></i>

                Pemuliharaan Biodiversiti

            </h2>

            <p>

                Biodiversiti merupakan sebahagian daripada
                kekayaan semula jadi Perlis. Pemeliharaan habitat
                dan ekosistem membantu memastikan keseimbangan
                alam sekitar dapat dikekalkan.

            </p>


            <div class="conservation-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Melindungi habitat semula jadi daripada
                    kemerosotan dan gangguan yang tidak terkawal.

                </span>

            </div>


            <div class="conservation-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Meningkatkan kesedaran masyarakat tentang
                    kepentingan biodiversiti.

                </span>

            </div>


            <div class="conservation-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Menggalakkan aktiviti pendidikan dan
                    penyelidikan berkaitan alam sekitar.

                </span>

            </div>


            <div class="conservation-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Menyokong pembangunan pelancongan berasaskan
                    alam secara bertanggungjawab.

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