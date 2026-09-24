<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - GEOLOGI
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

    <title>Geologi | Perlis Geopark</title>

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
                    rgba(15, 118, 110, .82)
                ),
                url("../assets/images/bukit-chabang.jpg")
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
           INTRO CARD
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
           GEOLOGY STATS
        ===================================================== */

        .stat-card {

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754
                );

            color: white;

            border-radius: 18px;

            padding: 28px 20px;

            height: 100%;

            text-align: center;

            box-shadow:
                0 8px 25px rgba(20,83,45,.15);

        }

        .stat-icon {

            font-size: 32px;

            color: #FFD700;

            margin-bottom: 10px;

        }

        .stat-card h3 {

            font-size: 1.15rem;

            font-weight: 700;

            margin-bottom: 8px;

        }

        .stat-card p {

            font-size: .9rem;

            line-height: 1.6;

            opacity: .9;

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
           GEOLOGY TYPES
        ===================================================== */

        .geology-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            border-left: 5px solid #198754;

        }

        .geology-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.12);

        }

        .geology-icon {

            width: 65px;

            height: 65px;

            border-radius: 16px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 29px;

            margin-bottom: 20px;

        }

        .geology-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .geology-card p {

            color: #666;

            line-height: 1.75;

            font-size: .93rem;

            margin: 0;

        }

        /* =====================================================
           SITE CARDS
        ===================================================== */

        .site-card {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.08);

            transition: .3s;

        }

        .site-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.14);

        }

        .site-image {

            height: 230px;

            overflow: hidden;

            position: relative;

        }

        .site-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: .5s;

        }

        .site-card:hover .site-image img {

            transform: scale(1.06);

        }

        .site-badge {

            position: absolute;

            top: 15px;

            left: 15px;

            background: #198754;

            color: white;

            padding: 7px 13px;

            border-radius: 20px;

            font-size: .75rem;

            font-weight: 700;

            letter-spacing: .4px;

        }

        .site-content {

            padding: 25px;

        }

        .site-content h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .site-content p {

            color: #666;

            line-height: 1.7;

            font-size: .92rem;

            margin-bottom: 15px;

        }

        .site-location {

            color: #198754;

            font-size: .85rem;

            font-weight: 600;

        }

        /* =====================================================
           IMPORTANCE BOX
        ===================================================== */

        .importance-box {

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

        .importance-box h2 {

            font-weight: 800;

            margin-bottom: 18px;

        }

        .importance-box > p {

            line-height: 1.9;

            opacity: .95;

            margin-bottom: 25px;

        }

        .importance-item {

            display: flex;

            gap: 14px;

            margin-bottom: 17px;

        }

        .importance-item i {

            color: #FFD700;

            font-size: 20px;

            flex-shrink: 0;

        }

        .importance-item span {

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

            .importance-box {

                padding: 30px 22px;

            }

            .content-section {

                padding: 50px 15px;

            }

            .site-image {

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

            <i class="bi bi-mountains"></i>

        </div>

        <h1>Warisan Geologi</h1>

        <p>

            Meneroka formasi batuan, landskap karst, gua dan
            keunikan geologi yang membentuk landskap Perlis.

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

                <i class="bi bi-globe2 me-2"></i>

                Geologi Perlis Geopark

            </h2>

            <p>

                Perlis mempunyai landskap geologi yang unik hasil
                daripada proses semula jadi yang berlaku dalam
                tempoh geologi yang panjang. Formasi batuan,
                bukit batu kapur, gua dan bentuk muka bumi yang
                terdapat di negeri ini menjadi sebahagian daripada
                warisan geologi yang mempunyai nilai tersendiri.

            </p>

            <p>

                Keadaan geologi Perlis turut mempengaruhi bentuk
                landskap, sistem saliran, ekosistem dan kehidupan
                masyarakat di kawasan sekitarnya.

            </p>

            <p>

                Tapak-tapak geologi ini boleh menjadi sumber
                pendidikan, penyelidikan dan pelancongan berasaskan
                alam semula jadi apabila diurus secara lestari.

            </p>

        </div>


        <!-- =================================================
             STAT CARDS
        ================================================== -->

        <div class="row g-4">


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-layers-fill"></i>

                    </div>

                    <h3>
                        Formasi Batuan
                    </h3>

                    <p>

                        Kepelbagaian batuan menjadi asas
                        kepada pembentukan landskap Perlis.

                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-boxes"></i>

                    </div>

                    <h3>
                        Landskap Karst
                    </h3>

                    <p>

                        Bentuk muka bumi batu kapur
                        menghasilkan pelbagai ciri karst.

                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-search"></i>

                    </div>

                    <h3>
                        Nilai Penyelidikan
                    </h3>

                    <p>

                        Tapak geologi menyediakan peluang
                        untuk pembelajaran dan penyelidikan.

                    </p>

                </div>

            </div>


        </div>


        <!-- =================================================
             GEOLOGY FEATURES
        ================================================== -->

        <div class="section-heading">

            <h2>
                Ciri-ciri Warisan Geologi
            </h2>

            <p>
                Antara elemen geologi yang menjadikan Perlis
                mempunyai landskap yang unik
            </p>

        </div>


        <div class="row g-4">


            <!-- BATU KAPUR -->

            <div class="col-md-6 col-lg-3">

                <div class="geology-card">

                    <div class="geology-icon">

                        <i class="bi bi-gem"></i>

                    </div>

                    <h4>
                        Batu Kapur
                    </h4>

                    <p>

                        Formasi batu kapur merupakan antara
                        ciri penting yang membentuk landskap
                        geologi Perlis.

                    </p>

                </div>

            </div>


            <!-- GUA -->

            <div class="col-md-6 col-lg-3">

                <div class="geology-card">

                    <div class="geology-icon">

                        <i class="bi bi-circle-square"></i>

                    </div>

                    <h4>
                        Gua
                    </h4>

                    <p>

                        Proses pelarutan batu kapur menghasilkan
                        sistem gua dan ruang bawah tanah yang
                        mempunyai nilai semula jadi.

                    </p>

                </div>

            </div>


            <!-- BUKIT -->

            <div class="col-md-6 col-lg-3">

                <div class="geology-card">

                    <div class="geology-icon">

                        <i class="bi bi-mountains"></i>

                    </div>

                    <h4>
                        Bukit & Tebing
                    </h4>

                    <p>

                        Bentuk muka bumi seperti bukit dan
                        tebing memperlihatkan sejarah perubahan
                        landskap geologi.

                    </p>

                </div>

            </div>


            <!-- KARS -->

            <div class="col-md-6 col-lg-3">

                <div class="geology-card">

                    <div class="geology-icon">

                        <i class="bi bi-droplet-half"></i>

                    </div>

                    <h4>
                        Sistem Karst
                    </h4>

                    <p>

                        Proses air terhadap batuan karbonat
                        membentuk pelbagai ciri landskap karst.

                    </p>

                </div>

            </div>


        </div>


        <!-- =================================================
             FEATURED SITES
        ================================================== -->

        <div class="section-heading">

            <h2>
                Tapak Geologi Menarik
            </h2>

            <p>
                Antara lokasi warisan geologi yang boleh diterokai
                di Perlis
            </p>

        </div>


        <div class="row g-4">


            <!-- BUKIT AYER -->

            <div class="col-md-6 col-lg-4">

                <div class="site-card">

                    <div class="site-image">

                        <img
                            src="../assets/images/bukit-ayer.jpg"
                            alt="Bukit Ayer"
                        >

                        <span class="site-badge">
                            GEOLOGI
                        </span>

                    </div>

                    <div class="site-content">

                        <h4>
                            Kolam Travertin Bukit Ayer
                        </h4>

                        <p>

                            Kawasan yang memperlihatkan ciri
                            pembentukan travertin dan landskap
                            semula jadi yang menarik.

                        </p>

                        <div class="site-location">

                            <i class="bi bi-geo-alt-fill me-1"></i>

                            Bukit Ayer, Perlis

                        </div>

                    </div>

                </div>

            </div>


            <!-- BUKIT CHABANG -->

            <div class="col-md-6 col-lg-4">

                <div class="site-card">

                    <div class="site-image">

                        <img
                            src="../assets/images/bukit-chabang.jpg"
                            alt="Bukit Chabang"
                        >

                        <span class="site-badge">
                            GEOLOGI
                        </span>

                    </div>

                    <div class="site-content">

                        <h4>
                            Sesar Bukit Chabang
                        </h4>

                        <p>

                            Kawasan yang memperlihatkan ciri
                            struktur batuan dan bentuk muka bumi
                            yang menarik.

                        </p>

                        <div class="site-location">

                            <i class="bi bi-geo-alt-fill me-1"></i>

                            Bukit Chabang, Perlis

                        </div>

                    </div>

                </div>

            </div>


            <!-- GUA KELAM -->

            <div class="col-md-6 col-lg-4">

                <div class="site-card">

                    <div class="site-image">

                        <img
                            src="../assets/images/gua-kelam.jpg"
                            alt="Gua Kelam"
                        >

                        <span class="site-badge">
                            GEOLOGI
                        </span>

                    </div>

                    <div class="site-content">

                        <h4>
                            Gua Kelam
                        </h4>

                        <p>

                            Kawasan gua batu kapur yang
                            memperlihatkan keunikan landskap
                            karst di Perlis.

                        </p>

                        <div class="site-location">

                            <i class="bi bi-geo-alt-fill me-1"></i>

                            Kaki Bukit, Perlis

                        </div>

                    </div>

                </div>

            </div>


        </div>


        <!-- =================================================
             IMPORTANCE
        ================================================== -->

        <div class="importance-box">

            <h2>

                <i class="bi bi-shield-check me-2"></i>

                Mengapa Warisan Geologi Perlu Dipelihara?

            </h2>

            <p>

                Warisan geologi merupakan rekod semula jadi yang
                membantu kita memahami sejarah pembentukan bumi.
                Pemeliharaan tapak-tapak ini penting supaya nilai
                pendidikan, penyelidikan dan warisan dapat dinikmati
                untuk jangka masa panjang.

            </p>


            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Memelihara ciri-ciri geologi yang mempunyai
                    nilai saintifik dan pendidikan.

                </span>

            </div>


            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Meningkatkan kesedaran masyarakat terhadap
                    kepentingan warisan semula jadi.

                </span>

            </div>


            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Menyokong aktiviti pelancongan berasaskan
                    alam dan warisan secara bertanggungjawab.

                </span>

            </div>


            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Menyediakan peluang untuk kajian dan
                    pembelajaran berkaitan sejarah bumi.

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