<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - RAKAN STRATEGIK
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

    <title>Rakan Strategik | Perlis Geopark</title>

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

        .intro-highlight {

            margin-top: 25px;

            padding: 20px 25px;

            border-left: 5px solid #198754;

            background: #e8f5e9;

            border-radius: 12px;

            color: #455a64;

            line-height: 1.8;

        }

        /* =====================================================
           SECTION HEADING
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

        /* =====================================================
           PARTNER CARDS
        ===================================================== */

        .partner-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            text-align: center;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            position: relative;

            overflow: hidden;

        }

        .partner-card::before {

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

        .partner-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.12);

        }

        .partner-icon {

            width: 80px;

            height: 80px;

            margin: 10px auto 22px;

            border-radius: 20px;

            background:
                linear-gradient(
                    135deg,
                    #e8f5e9,
                    #e0f2f1
                );

            display: flex;

            align-items: center;

            justify-content: center;

            color: #198754;

            font-size: 34px;

        }

        .partner-card h4 {

            color: #14532d;

            font-size: 1.08rem;

            font-weight: 700;

            line-height: 1.45;

            margin-bottom: 12px;

        }

        .partner-card p {

            color: #666;

            font-size: .92rem;

            line-height: 1.7;

            margin: 0;

        }

        /* =====================================================
           PARTNERSHIP SECTION
        ===================================================== */

        .partnership-box {

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

            text-align: center;

            box-shadow:
                0 12px 35px rgba(20,83,45,.20);

        }

        .partnership-box i {

            font-size: 42px;

            color: #FFD700;

            margin-bottom: 15px;

        }

        .partnership-box h2 {

            font-weight: 800;

            margin-bottom: 15px;

        }

        .partnership-box p {

            max-width: 800px;

            margin: auto;

            line-height: 1.9;

            opacity: .95;

        }

        /* =====================================================
           BENEFIT CARDS
        ===================================================== */

        .benefit-section {

            margin-top: 55px;

        }

        .benefit-card {

            background: white;

            border-radius: 18px;

            padding: 28px 24px;

            height: 100%;

            box-shadow:
                0 8px 25px rgba(0,0,0,.06);

        }

        .benefit-icon {

            width: 55px;

            height: 55px;

            border-radius: 14px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 24px;

            margin-bottom: 18px;

        }

        .benefit-card h5 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 10px;

        }

        .benefit-card p {

            color: #666;

            font-size: .92rem;

            line-height: 1.7;

            margin: 0;

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

            .intro-card {

                padding: 28px 22px;

            }

            .partnership-box {

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

            <i class="bi bi-people-fill"></i>

        </div>

        <h1>Rakan Strategik</h1>

        <p>

            Kerjasama dan jaringan strategik dalam memelihara,
            mempromosikan serta membangunkan Perlis Geopark.

        </p>

    </div>

</section>


<!-- =========================================================
     MAIN CONTENT
========================================================= -->

<section class="content-section">

    <div class="content-container">


        <!-- =================================================
             INTRODUCTION
        ================================================== -->

        <div class="intro-card">

            <h2>

                <i class="bi bi-handshake-fill me-2"></i>

                Kerjasama Strategik

            </h2>

            <p>

                Perlis Geopark memerlukan penglibatan dan kerjasama
                pelbagai pihak bagi memastikan warisan geologi,
                biologi dan budaya dapat dipelihara serta dimanfaatkan
                secara berterusan.

            </p>

            <p>

                Kerjasama strategik melibatkan agensi kerajaan,
                pihak berkuasa tempatan, institusi pendidikan,
                komuniti, badan penyelidikan dan pihak industri
                yang mempunyai kepentingan terhadap pembangunan
                geopark.

            </p>

            <div class="intro-highlight">

                <strong>

                    <i class="bi bi-info-circle-fill me-2"></i>

                    Kerjasama bersepadu

                </strong>

                <br>

                Pendekatan secara bersama dapat membantu
                menggabungkan kepakaran, sumber dan pengalaman
                pelbagai pihak untuk menyokong kelestarian
                Perlis Geopark.

            </div>

        </div>


        <!-- =================================================
             PARTNERS
        ================================================== -->

        <div class="section-heading">

            <h2>
                Jaringan Rakan Strategik
            </h2>

            <p>
                Antara pihak yang boleh menyumbang kepada
                pembangunan dan kelestarian Perlis Geopark
            </p>

        </div>


        <div class="row g-4">


            <!-- KERAJAAN NEGERI -->

            <div class="col-md-6 col-lg-4">

                <div class="partner-card">

                    <div class="partner-icon">

                        <i class="bi bi-bank"></i>

                    </div>

                    <h4>
                        Kerajaan Negeri Perlis
                    </h4>

                    <p>

                        Menyokong perancangan, dasar dan
                        pembangunan berkaitan Perlis Geopark
                        di peringkat negeri.

                    </p>

                </div>

            </div>


            <!-- AGENSI KERAJAAN -->

            <div class="col-md-6 col-lg-4">

                <div class="partner-card">

                    <div class="partner-icon">

                        <i class="bi bi-buildings"></i>

                    </div>

                    <h4>
                        Agensi Kerajaan Berkaitan
                    </h4>

                    <p>

                        Memberikan sokongan dalam bidang
                        pemuliharaan, pelancongan, alam sekitar
                        dan pembangunan.

                    </p>

                </div>

            </div>


            <!-- PBT -->

            <div class="col-md-6 col-lg-4">

                <div class="partner-card">

                    <div class="partner-icon">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                    <h4>
                        Pihak Berkuasa Tempatan
                    </h4>

                    <p>

                        Menyokong pengurusan kawasan dan
                        pembangunan kemudahan untuk komuniti
                        serta pelawat.

                    </p>

                </div>

            </div>


            <!-- INSTITUSI PENDIDIKAN -->

            <div class="col-md-6 col-lg-4">

                <div class="partner-card">

                    <div class="partner-icon">

                        <i class="bi bi-mortarboard-fill"></i>

                    </div>

                    <h4>
                        Institusi Pendidikan
                    </h4>

                    <p>

                        Menyumbang kepada pendidikan,
                        penyelidikan, dokumentasi dan
                        pembangunan ilmu berkaitan geopark.

                    </p>

                </div>

            </div>


            <!-- KOMUNITI -->

            <div class="col-md-6 col-lg-4">

                <div class="partner-card">

                    <div class="partner-icon">

                        <i class="bi bi-people-fill"></i>

                    </div>

                    <h4>
                        Komuniti Setempat
                    </h4>

                    <p>

                        Memainkan peranan dalam pemeliharaan
                        warisan, aktiviti tempatan dan
                        pengalaman pelancongan.

                    </p>

                </div>

            </div>


            <!-- INDUSTRI PELANCONGAN -->

            <div class="col-md-6 col-lg-4">

                <div class="partner-card">

                    <div class="partner-icon">

                        <i class="bi bi-signpost-2-fill"></i>

                    </div>

                    <h4>
                        Industri Pelancongan
                    </h4>

                    <p>

                        Membantu mempromosikan produk dan
                        pengalaman pelancongan berasaskan
                        warisan Perlis Geopark.

                    </p>

                </div>

            </div>


        </div>


        <!-- =================================================
             PARTNERSHIP
        ================================================== -->

        <div class="partnership-box">

            <i class="bi bi-globe2"></i>

            <h2>
                Bersama Memelihara Warisan
            </h2>

            <p>

                Perlis Geopark menjadi ruang kerjasama antara
                pelbagai pihak dalam usaha melindungi warisan,
                meningkatkan pengetahuan masyarakat dan
                mewujudkan pengalaman pelancongan yang
                bertanggungjawab.

            </p>

        </div>


        <!-- =================================================
             BENEFITS
        ================================================== -->

        <div class="benefit-section">

            <div class="section-heading">

                <h2>
                    Fokus Kerjasama
                </h2>

                <p>
                    Bidang utama yang boleh diperkukuhkan melalui
                    jaringan strategik
                </p>

            </div>


            <div class="row g-4">


                <!-- PEMULIHARAAN -->

                <div class="col-md-6 col-lg-3">

                    <div class="benefit-card">

                        <div class="benefit-icon">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <h5>
                            Pemuliharaan
                        </h5>

                        <p>

                            Melindungi dan memelihara
                            warisan geologi, biologi
                            serta budaya.

                        </p>

                    </div>

                </div>


                <!-- PENDIDIKAN -->

                <div class="col-md-6 col-lg-3">

                    <div class="benefit-card">

                        <div class="benefit-icon">

                            <i class="bi bi-book-half"></i>

                        </div>

                        <h5>
                            Pendidikan
                        </h5>

                        <p>

                            Meningkatkan pengetahuan
                            dan kesedaran berkaitan
                            warisan geopark.

                        </p>

                    </div>

                </div>


                <!-- PELANCONGAN -->

                <div class="col-md-6 col-lg-3">

                    <div class="benefit-card">

                        <div class="benefit-icon">

                            <i class="bi bi-camera-fill"></i>

                        </div>

                        <h5>
                            Pelancongan
                        </h5>

                        <p>

                            Menggalakkan pengalaman
                            pelancongan yang menghargai
                            warisan tempatan.

                        </p>

                    </div>

                </div>


                <!-- KOMUNITI -->

                <div class="col-md-6 col-lg-3">

                    <div class="benefit-card">

                        <div class="benefit-icon">

                            <i class="bi bi-person-hearts"></i>

                        </div>

                        <h5>
                            Komuniti
                        </h5>

                        <p>

                            Menggalakkan penglibatan
                            komuniti dalam pembangunan
                            geopark.

                        </p>

                    </div>

                </div>


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