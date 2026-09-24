<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - PENERBITAN
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

    <title>Penerbitan | Perlis Geopark</title>


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
           PUBLICATION CARDS
        ===================================================== */

        .publication-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            border-top: 5px solid #198754;

            display: flex;

            flex-direction: column;

        }


        .publication-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.13);

        }


        .publication-icon {

            width: 70px;

            height: 70px;

            border-radius: 18px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 31px;

            margin-bottom: 20px;

        }


        .publication-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .publication-card p {

            color: #666;

            font-size: .92rem;

            line-height: 1.75;

            margin-bottom: 20px;

            flex-grow: 1;

        }


        .publication-type {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            background: #e8f5e9;

            color: #198754;

            padding: 7px 13px;

            border-radius: 20px;

            font-size: .76rem;

            font-weight: 700;

            width: fit-content;

            margin-bottom: 18px;

        }


        .view-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            background: #198754;

            color: white;

            padding: 10px 18px;

            border-radius: 25px;

            text-decoration: none;

            font-size: .85rem;

            font-weight: 600;

            transition: .3s;

        }


        .view-button:hover {

            background: #14532d;

            color: white;

            transform: translateY(-2px);

        }


        /* =====================================================
           RESOURCE BOX
        ===================================================== */

        .resource-box {

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


        .resource-box h2 {

            font-weight: 800;

            margin-bottom: 18px;

        }


        .resource-box > p {

            line-height: 1.9;

            opacity: .95;

            margin-bottom: 28px;

        }


        .resource-item {

            display: flex;

            gap: 15px;

            margin-bottom: 18px;

            align-items: flex-start;

        }


        .resource-item i {

            color: #FFD700;

            font-size: 20px;

            flex-shrink: 0;

        }


        .resource-item span {

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

        @media (max-width: 768px) {

            .page-hero {

                min-height: 310px;

                padding: 55px 20px;

            }


            .content-section {

                padding: 50px 15px;

            }


            .intro-card {

                padding: 28px 22px;

            }


            .resource-box {

                padding: 30px 22px;

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

            <i class="bi bi-file-earmark-text-fill"></i>

        </div>


        <h1>
            Penerbitan
        </h1>


        <p>

            Koleksi bahan penerbitan dan sumber maklumat
            berkaitan Perlis Geopark.

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

                <i class="bi bi-journal-richtext me-2"></i>

                Bahan Penerbitan Perlis Geopark

            </h2>


            <p>

                Bahagian penerbitan menyediakan bahan rujukan
                berkaitan warisan geologi, biologi dan budaya
                Perlis Geopark. Bahan-bahan ini boleh digunakan
                untuk tujuan pendidikan, penyelidikan dan
                pengenalan kepada masyarakat serta pelawat.

            </p>


            <p>

                Penerbitan juga membantu mendokumentasikan
                maklumat berkaitan warisan dan meningkatkan
                kesedaran terhadap kepentingan pemeliharaan
                kawasan geopark.

            </p>

        </div>



        <!-- =================================================
             PUBLICATIONS
        ================================================== -->

        <div class="section-heading">

            <h2>
                Koleksi Penerbitan
            </h2>


            <p>

                Antara bahan rujukan yang berkaitan dengan
                Perlis Geopark

            </p>

        </div>



        <div class="row g-4">


            <!-- PUBLICATION 1 -->

            <div class="col-md-6 col-lg-4">

                <div class="publication-card">


                    <div class="publication-icon">

                        <i class="bi bi-book-fill"></i>

                    </div>


                    <span class="publication-type">

                        <i class="bi bi-book"></i>

                        BUKU

                    </span>


                    <h4>
                        Pengenalan Perlis Geopark
                    </h4>


                    <p>

                        Bahan pengenalan mengenai konsep geopark,
                        warisan geologi, biologi dan budaya yang
                        terdapat di Perlis.

                    </p>


                    <a
                        href="#"
                        class="view-button"
                    >

                        <i class="bi bi-eye-fill"></i>

                        Lihat Penerbitan

                    </a>

                </div>

            </div>



            <!-- PUBLICATION 2 -->

            <div class="col-md-6 col-lg-4">

                <div class="publication-card">


                    <div class="publication-icon">

                        <i class="bi bi-map-fill"></i>

                    </div>


                    <span class="publication-type">

                        <i class="bi bi-map"></i>

                        PETA

                    </span>


                    <h4>
                        Peta Warisan Perlis
                    </h4>


                    <p>

                        Bahan rujukan visual yang membantu
                        mengenali lokasi tapak warisan dan
                        kawasan penting dalam Perlis Geopark.

                    </p>


                    <a
                        href="#"
                        class="view-button"
                    >

                        <i class="bi bi-eye-fill"></i>

                        Lihat Penerbitan

                    </a>

                </div>

            </div>



            <!-- PUBLICATION 3 -->

            <div class="col-md-6 col-lg-4">

                <div class="publication-card">


                    <div class="publication-icon">

                        <i class="bi bi-file-earmark-pdf-fill"></i>

                    </div>


                    <span class="publication-type">

                        <i class="bi bi-file-earmark-pdf"></i>

                        PDF

                    </span>


                    <h4>
                        Panduan Pelawat
                    </h4>


                    <p>

                        Panduan ringkas untuk membantu pelawat
                        memahami tarikan, warisan dan pengalaman
                        yang terdapat di kawasan Perlis Geopark.

                    </p>


                    <a
                        href="#"
                        class="view-button"
                    >

                        <i class="bi bi-eye-fill"></i>

                        Lihat Penerbitan

                    </a>

                </div>

            </div>



            <!-- PUBLICATION 4 -->

            <div class="col-md-6 col-lg-4">

                <div class="publication-card">


                    <div class="publication-icon">

                        <i class="bi bi-journal-text"></i>

                    </div>


                    <span class="publication-type">

                        <i class="bi bi-file-text"></i>

                        ARTIKEL

                    </span>


                    <h4>
                        Warisan Geologi
                    </h4>


                    <p>

                        Maklumat berkaitan formasi batuan,
                        landskap karst dan ciri-ciri geologi
                        yang terdapat di Perlis.

                    </p>


                    <a
                        href="#"
                        class="view-button"
                    >

                        <i class="bi bi-eye-fill"></i>

                        Lihat Penerbitan

                    </a>

                </div>

            </div>



            <!-- PUBLICATION 5 -->

            <div class="col-md-6 col-lg-4">

                <div class="publication-card">


                    <div class="publication-icon">

                        <i class="bi bi-flower1"></i>

                    </div>


                    <span class="publication-type">

                        <i class="bi bi-tree-fill"></i>

                        BIODIVERSITI

                    </span>


                    <h4>
                        Warisan Biologi
                    </h4>


                    <p>

                        Bahan berkaitan flora, fauna, habitat
                        dan biodiversiti yang menjadi sebahagian
                        daripada warisan semula jadi Perlis.

                    </p>


                    <a
                        href="#"
                        class="view-button"
                    >

                        <i class="bi bi-eye-fill"></i>

                        Lihat Penerbitan

                    </a>

                </div>

            </div>



            <!-- PUBLICATION 6 -->

            <div class="col-md-6 col-lg-4">

                <div class="publication-card">


                    <div class="publication-icon">

                        <i class="bi bi-bank2"></i>

                    </div>


                    <span class="publication-type">

                        <i class="bi bi-people-fill"></i>

                        BUDAYA

                    </span>


                    <h4>
                        Warisan Budaya
                    </h4>


                    <p>

                        Bahan rujukan berkaitan budaya ketara,
                        budaya tidak ketara dan kehidupan
                        masyarakat tempatan.

                    </p>


                    <a
                        href="#"
                        class="view-button"
                    >

                        <i class="bi bi-eye-fill"></i>

                        Lihat Penerbitan

                    </a>

                </div>

            </div>


        </div>



        <!-- =================================================
             RESOURCE BOX
        ================================================== -->

        <div class="resource-box">


            <h2>

                <i class="bi bi-info-circle-fill me-2"></i>

                Kepentingan Penerbitan

            </h2>


            <p>

                Bahan penerbitan merupakan salah satu medium
                penting untuk menyampaikan maklumat berkaitan
                Perlis Geopark kepada masyarakat, pelajar,
                penyelidik dan pelawat.

            </p>


            <div class="resource-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Menyediakan sumber rujukan berkaitan
                    warisan Perlis.

                </span>

            </div>


            <div class="resource-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Membantu meningkatkan pengetahuan dan
                    kesedaran masyarakat.

                </span>

            </div>


            <div class="resource-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Menyokong aktiviti pendidikan dan
                    penyelidikan.

                </span>

            </div>


            <div class="resource-item">

                <i class="bi bi-check-circle-fill"></i>

                <span>

                    Mendokumentasikan maklumat warisan untuk
                    rujukan generasi akan datang.

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