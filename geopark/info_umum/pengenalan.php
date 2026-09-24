<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - PENGENALAN
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

    <title>Pengenalan | Perlis Geopark</title>

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

        /* -------------------------------------------------------
           HERO
        ------------------------------------------------------- */

        .page-hero {

            min-height: 360px;

            background:
                linear-gradient(
                    rgba(20, 83, 45, .78),
                    rgba(15, 118, 110, .78)
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

            font-size: 36px;

            color: #FFD700;

        }

        .page-hero h1 {

            font-size: clamp(2rem, 5vw, 3.5rem);

            font-weight: 800;

            margin-bottom: 15px;

            letter-spacing: .5px;

        }

        .page-hero p {

            font-size: 1.05rem;

            line-height: 1.8;

            margin: 0;

            opacity: .95;

        }

        /* -------------------------------------------------------
           MAIN CONTENT
        ------------------------------------------------------- */

        .content-section {

            padding: 70px 20px;

        }

        .content-container {

            max-width: 1100px;

            margin: auto;

        }

        /* -------------------------------------------------------
           INTRO CARD
        ------------------------------------------------------- */

        .intro-card {

            background: white;

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 10px 35px rgba(0,0,0,.08);

            margin-bottom: 35px;

        }

        .section-title {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 20px;

        }

        .section-title i {

            color: #198754;

            margin-right: 8px;

        }

        .intro-card p {

            color: #555;

            line-height: 1.9;

            margin-bottom: 15px;

            text-align: justify;

        }

        /* -------------------------------------------------------
           HIGHLIGHT BOX
        ------------------------------------------------------- */

        .highlight-box {

            background:
                linear-gradient(
                    135deg,
                    #e8f5e9,
                    #effaf7
                );

            border-left: 5px solid #198754;

            border-radius: 14px;

            padding: 25px 28px;

            margin-top: 25px;

        }

        .highlight-box h5 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 10px;

        }

        .highlight-box p {

            margin: 0;

            color: #455a64;

            line-height: 1.8;

        }

        /* -------------------------------------------------------
           THREE ELEMENTS
        ------------------------------------------------------- */

        .element-card {

            height: 100%;

            background: white;

            border-radius: 18px;

            padding: 30px 25px;

            text-align: center;

            box-shadow:
                0 8px 25px rgba(0,0,0,.07);

            transition: .3s;

        }

        .element-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.12);

        }

        .element-icon {

            width: 70px;

            height: 70px;

            margin: 0 auto 20px;

            border-radius: 50%;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;

        }

        .element-card h5 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .element-card p {

            color: #666;

            font-size: .94rem;

            line-height: 1.7;

            margin: 0;

        }

        /* -------------------------------------------------------
           IMPORTANCE SECTION
        ------------------------------------------------------- */

        .importance-card {

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754,
                    #0f766e
                );

            color: white;

            border-radius: 22px;

            padding: 45px;

            margin-top: 35px;

            box-shadow:
                0 12px 35px rgba(20,83,45,.20);

        }

        .importance-card h2 {

            font-weight: 800;

            margin-bottom: 20px;

        }

        .importance-card p {

            line-height: 1.9;

            opacity: .95;

        }

        .importance-list {

            margin-top: 25px;

        }

        .importance-item {

            display: flex;

            gap: 15px;

            margin-bottom: 18px;

            align-items: flex-start;

        }

        .importance-item i {

            color: #FFD700;

            font-size: 20px;

            margin-top: 3px;

        }

        .importance-item span {

            line-height: 1.7;

        }

        /* -------------------------------------------------------
           BOTTOM BUTTON
        ------------------------------------------------------- */

        .back-button {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            background: #198754;

            color: white;

            padding: 12px 22px;

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

        .button-wrapper {

            text-align: center;

            margin-top: 45px;

        }

        /* -------------------------------------------------------
           RESPONSIVE
        ------------------------------------------------------- */

        @media (max-width: 768px) {

            .page-hero {

                min-height: 300px;

                padding: 55px 20px;

            }

            .intro-card {

                padding: 28px 22px;

            }

            .importance-card {

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

            <i class="bi bi-globe-asia-australia-fill"></i>

        </div>

        <h1>Pengenalan Perlis Geopark</h1>

        <p>
            Mengenali keunikan warisan geologi, biologi dan budaya
            yang terdapat di Negeri Perlis.
        </p>

    </div>

</section>


<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<section class="content-section">

    <div class="content-container">


        <!-- INTRODUCTION -->

        <div class="intro-card">

            <h2 class="section-title">

                <i class="bi bi-book-fill"></i>

                Mengenai Perlis Geopark

            </h2>

            <p>

                Perlis Geopark merupakan sebuah kawasan yang mempunyai
                kepelbagaian warisan semula jadi dan budaya yang unik.
                Kawasan ini memperlihatkan kekayaan warisan geologi,
                kepelbagaian biologi serta nilai budaya yang menjadi
                sebahagian daripada identiti Negeri Perlis.

            </p>

            <p>

                Keunikan landskap Perlis dapat dilihat melalui
                pembentukan batu kapur, bukit-bukit batuan, gua,
                tasik, kawasan hutan serta pelbagai bentuk muka bumi
                yang mempunyai nilai geologi dan pendidikan.

            </p>

            <p>

                Pada masa yang sama, kawasan Perlis turut mempunyai
                kepelbagaian flora dan fauna serta warisan budaya
                masyarakat tempatan yang telah berkembang dari
                generasi ke generasi.

            </p>


            <div class="highlight-box">

                <h5>

                    <i class="bi bi-stars me-2"></i>

                    Keunikan Perlis Geopark

                </h5>

                <p>

                    Perlis Geopark menggabungkan elemen geologi,
                    biologi dan budaya dalam satu kawasan warisan
                    yang mempunyai nilai pendidikan, pemuliharaan,
                    penyelidikan dan pelancongan.

                </p>

            </div>

        </div>


        <!-- THREE ELEMENTS -->

        <div class="row g-4">


            <!-- GEOLOGI -->

            <div class="col-md-4">

                <div class="element-card">

                    <div class="element-icon">

                        <i class="bi bi-mountains"></i>

                    </div>

                    <h5>Geologi</h5>

                    <p>

                        Mempunyai pelbagai formasi batuan,
                        landskap batu kapur, gua dan ciri-ciri
                        geologi yang menarik.

                    </p>

                </div>

            </div>


            <!-- BIOLOGI -->

            <div class="col-md-4">

                <div class="element-card">

                    <div class="element-icon">

                        <i class="bi bi-flower1"></i>

                    </div>

                    <h5>Biologi</h5>

                    <p>

                        Kepelbagaian flora dan fauna serta
                        ekosistem semula jadi yang menyumbang
                        kepada kekayaan biodiversiti Perlis.

                    </p>

                </div>

            </div>


            <!-- BUDAYA -->

            <div class="col-md-4">

                <div class="element-card">

                    <div class="element-icon">

                        <i class="bi bi-bank2"></i>

                    </div>

                    <h5>Budaya</h5>

                    <p>

                        Warisan ketara dan tidak ketara yang
                        menggambarkan sejarah, tradisi dan
                        kehidupan masyarakat tempatan.

                    </p>

                </div>

            </div>


        </div>


        <!-- IMPORTANCE -->

        <div class="importance-card">

            <h2>

                <i class="bi bi-shield-check me-2"></i>

                Kepentingan Perlis Geopark

            </h2>

            <p>

                Perlis Geopark bukan sahaja menjadi kawasan
                pemuliharaan warisan, malah mempunyai peranan
                dalam pendidikan, penyelidikan dan pembangunan
                pelancongan yang berasaskan warisan.

            </p>


            <div class="importance-list">


                <div class="importance-item">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Meningkatkan kesedaran masyarakat terhadap
                        kepentingan pemuliharaan warisan semula jadi
                        dan budaya.

                    </span>

                </div>


                <div class="importance-item">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Menjadi sumber pendidikan dan penyelidikan
                        berkaitan geologi, biodiversiti dan budaya.

                    </span>

                </div>


                <div class="importance-item">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Menggalakkan aktiviti pelancongan yang
                        menghargai dan memelihara warisan tempatan.

                    </span>

                </div>


                <div class="importance-item">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Membantu mempromosikan keunikan Negeri
                        Perlis kepada pelawat dari dalam dan luar negara.

                    </span>

                </div>


            </div>

        </div>


        <!-- BACK BUTTON -->

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
