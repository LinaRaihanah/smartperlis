<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - LOGO
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

    <title>Logo Perlis Geopark | Perlis Geopark</title>

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

            min-height: 350px;

            background:
                linear-gradient(
                    rgba(20, 83, 45, .82),
                    rgba(15, 118, 110, .82)
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

            max-width: 850px;

        }

        .page-hero-icon {

            width: 80px;

            height: 80px;

            border-radius: 50%;

            background: rgba(255,255,255,.15);

            border: 2px solid rgba(255,255,255,.6);

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 25px;

            font-size: 35px;

            color: #FFD700;

        }

        .page-hero h1 {

            font-size: clamp(2rem, 5vw, 3.4rem);

            font-weight: 800;

            margin-bottom: 15px;

        }

        .page-hero p {

            font-size: 1.05rem;

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

            max-width: 1100px;

            margin: auto;

        }

        /* =====================================================
           LOGO SHOWCASE
        ===================================================== */

        .logo-showcase {

            background: white;

            border-radius: 25px;

            padding: 50px;

            box-shadow:
                0 12px 35px rgba(0,0,0,.08);

            margin-bottom: 45px;

        }

        .logo-display {

            min-height: 420px;

            background:
                linear-gradient(
                    135deg,
                    #f7fff8,
                    #eef9f3
                );

            border-radius: 20px;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px;

            position: relative;

            overflow: hidden;

        }

        .logo-display::before {

            content: "";

            position: absolute;

            width: 250px;

            height: 250px;

            border-radius: 50%;

            border: 35px solid rgba(25,135,84,.06);

            top: -80px;

            right: -70px;

        }

        .logo-display::after {

            content: "";

            position: absolute;

            width: 180px;

            height: 180px;

            border-radius: 50%;

            border: 25px solid rgba(15,118,110,.06);

            bottom: -70px;

            left: -50px;

        }

        .logo-placeholder {

            position: relative;

            z-index: 2;

            text-align: center;

        }

        .logo-placeholder-icon {

            width: 190px;

            height: 190px;

            border-radius: 50%;

            margin: auto;

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754,
                    #0f766e
                );

            display: flex;

            align-items: center;

            justify-content: center;

            box-shadow:
                0 15px 35px rgba(20,83,45,.25);

            border: 8px solid white;

        }

        .logo-placeholder-icon i {

            font-size: 90px;

            color: #FFD700;

        }

        .logo-placeholder h2 {

            margin-top: 25px;

            color: #14532d;

            font-weight: 800;

            letter-spacing: 1px;

        }

        .logo-placeholder p {

            color: #6c757d;

            margin: 5px 0 0;

        }

        /* =====================================================
           DESCRIPTION
        ===================================================== */

        .logo-description {

            padding-top: 20px;

        }

        .logo-description h2 {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 20px;

        }

        .logo-description h2 i {

            color: #198754;

        }

        .logo-description p {

            color: #555;

            line-height: 1.9;

            text-align: justify;

        }

        /* =====================================================
           ELEMENT CARDS
        ===================================================== */

        .section-heading {

            text-align: center;

            margin-bottom: 35px;

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

        .element-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            border-top: 4px solid #198754;

        }

        .element-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.12);

        }

        .element-icon {

            width: 65px;

            height: 65px;

            border-radius: 16px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 28px;

            margin-bottom: 20px;

        }

        .element-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .element-card p {

            color: #666;

            line-height: 1.75;

            margin: 0;

            font-size: .94rem;

        }

        /* =====================================================
           COLOUR SECTION
        ===================================================== */

        .colour-section {

            margin-top: 45px;

            background: white;

            border-radius: 22px;

            padding: 40px;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

        }

        .colour-section h2 {

            color: #14532d;

            font-weight: 800;

            text-align: center;

            margin-bottom: 30px;

        }

        .colour-card {

            border-radius: 16px;

            overflow: hidden;

            background: #f8f9fa;

            height: 100%;

        }

        .colour-preview {

            height: 90px;

        }

        .green-preview {

            background: #198754;

        }

        .dark-green-preview {

            background: #14532d;

        }

        .teal-preview {

            background: #0f766e;

        }

        .gold-preview {

            background: #FFD700;

        }

        .colour-info {

            padding: 18px;

        }

        .colour-info h5 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 5px;

        }

        .colour-info p {

            margin: 0;

            color: #6c757d;

            font-size: .9rem;

        }

        /* =====================================================
           MESSAGE
        ===================================================== */

        .message-box {

            margin-top: 45px;

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

            text-align: center;

            box-shadow:
                0 12px 35px rgba(20,83,45,.20);

        }

        .message-box i {

            font-size: 40px;

            color: #FFD700;

            margin-bottom: 15px;

        }

        .message-box h2 {

            font-weight: 800;

            margin-bottom: 15px;

        }

        .message-box p {

            max-width: 800px;

            margin: auto;

            line-height: 1.9;

            opacity: .95;

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

                min-height: 300px;

                padding: 55px 20px;

            }

            .logo-showcase {

                padding: 25px;

            }

            .logo-display {

                min-height: 350px;

                padding: 25px;

            }

            .logo-placeholder-icon {

                width: 150px;

                height: 150px;

            }

            .logo-placeholder-icon i {

                font-size: 70px;

            }

            .colour-section {

                padding: 28px 20px;

            }

            .message-box {

                padding: 30px 22px;

            }

            .content-section {

                padding: 50px 15px;

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

            <i class="bi bi-image-fill"></i>

        </div>

        <h1>Logo Perlis Geopark</h1>

        <p>

            Simbol identiti dan representasi warisan
            geologi, biologi serta budaya Perlis.

        </p>

    </div>

</section>


<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<section class="content-section">

    <div class="content-container">


        <!-- =================================================
             LOGO SHOWCASE
        ================================================== -->

        <div class="logo-showcase">

            <div class="row align-items-center g-5">


                <!-- LOGO -->

                <div class="col-lg-6">

                    <div class="logo-display">

                        <div class="logo-placeholder">

                            <div class="logo-placeholder-icon">

                                <i class="bi bi-globe-asia-australia-fill"></i>

                            </div>

                            <h2>
                                PERLIS GEOPARK
                            </h2>

                            <p>
                                GEOLOGI • BIOLOGI • BUDAYA
                            </p>

                        </div>

                    </div>

                </div>


                <!-- DESCRIPTION -->

                <div class="col-lg-6">

                    <div class="logo-description">

                        <h2>

                            <i class="bi bi-stars me-2"></i>

                            Identiti Perlis Geopark

                        </h2>

                        <p>

                            Logo Perlis Geopark menjadi salah satu
                            elemen visual yang mewakili identiti
                            kawasan geopark serta kekayaan warisan
                            yang terdapat di Negeri Perlis.

                        </p>

                        <p>

                            Identiti visual ini menggambarkan hubungan
                            antara alam semula jadi, warisan geologi,
                            biodiversiti dan budaya masyarakat tempatan.

                        </p>

                        <p>

                            Penggunaan elemen alam dan warna semula jadi
                            memberikan gambaran tentang kepentingan
                            pemuliharaan dan kelestarian warisan
                            Perlis Geopark.

                        </p>

                    </div>

                </div>


            </div>

        </div>


        <!-- =================================================
             ELEMENTS
        ================================================== -->

        <div class="section-heading">

            <h2>
                Elemen Utama
            </h2>

            <p>
                Tiga komponen utama yang menjadi asas Perlis Geopark
            </p>

        </div>


        <div class="row g-4">


            <!-- GEOLOGI -->

            <div class="col-md-4">

                <div class="element-card">

                    <div class="element-icon">

                        <i class="bi bi-mountains"></i>

                    </div>

                    <h4>
                        Geologi
                    </h4>

                    <p>

                        Mewakili kekayaan formasi batuan,
                        landskap karst, gua dan pelbagai
                        ciri geologi yang terdapat di Perlis.

                    </p>

                </div>

            </div>


            <!-- BIOLOGI -->

            <div class="col-md-4">

                <div class="element-card">

                    <div class="element-icon">

                        <i class="bi bi-flower1"></i>

                    </div>

                    <h4>
                        Biologi
                    </h4>

                    <p>

                        Menggambarkan kepelbagaian flora,
                        fauna dan ekosistem semula jadi
                        yang terdapat di kawasan geopark.

                    </p>

                </div>

            </div>


            <!-- BUDAYA -->

            <div class="col-md-4">

                <div class="element-card">

                    <div class="element-icon">

                        <i class="bi bi-bank2"></i>

                    </div>

                    <h4>
                        Budaya
                    </h4>

                    <p>

                        Mewakili warisan budaya, sejarah,
                        tradisi dan kehidupan masyarakat
                        tempatan yang diwarisi dari generasi
                        ke generasi.

                    </p>

                </div>

            </div>


        </div>


        <!-- =================================================
             COLOURS
        ================================================== -->

        <div class="colour-section">

            <h2>

                Warna Identiti

            </h2>


            <div class="row g-4">


                <!-- GREEN -->

                <div class="col-6 col-lg-3">

                    <div class="colour-card">

                        <div class="colour-preview green-preview"></div>

                        <div class="colour-info">

                            <h5>
                                Hijau
                            </h5>

                            <p>
                                Alam dan kelestarian
                            </p>

                        </div>

                    </div>

                </div>


                <!-- DARK GREEN -->

                <div class="col-6 col-lg-3">

                    <div class="colour-card">

                        <div class="colour-preview dark-green-preview"></div>

                        <div class="colour-info">

                            <h5>
                                Hijau Gelap
                            </h5>

                            <p>
                                Alam dan pemuliharaan
                            </p>

                        </div>

                    </div>

                </div>


                <!-- TEAL -->

                <div class="col-6 col-lg-3">

                    <div class="colour-card">

                        <div class="colour-preview teal-preview"></div>

                        <div class="colour-info">

                            <h5>
                                Teal
                            </h5>

                            <p>
                                Air dan kehidupan
                            </p>

                        </div>

                    </div>

                </div>


                <!-- GOLD -->

                <div class="col-6 col-lg-3">

                    <div class="colour-card">

                        <div class="colour-preview gold-preview"></div>

                        <div class="colour-info">

                            <h5>
                                Emas
                            </h5>

                            <p>
                                Nilai dan keistimewaan
                            </p>

                        </div>

                    </div>

                </div>


            </div>

        </div>


        <!-- =================================================
             MESSAGE
        ================================================== -->

        <div class="message-box">

            <i class="bi bi-globe2"></i>

            <h2>
                Identiti Warisan Perlis
            </h2>

            <p>

                Perlis Geopark mencerminkan hubungan erat antara
                manusia dan alam. Setiap elemen warisan yang terdapat
                di dalamnya mempunyai nilai tersendiri yang perlu
                dihargai, dipelihara dan diwariskan kepada generasi
                akan datang.

            </p>

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