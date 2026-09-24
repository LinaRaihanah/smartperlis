<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - TADBIR URUS
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

    <title>Tadbir Urus | Perlis Geopark</title>

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

            background:
                linear-gradient(
                    135deg,
                    #f5f8fc,
                    #eef5ff
                );

            color: #263238;

        }

        /* =====================================================
           HERO
        ===================================================== */

        .page-hero {

            min-height: 350px;

            background:
                linear-gradient(
                    135deg,
                    rgba(0,59,122,.94),
                    rgba(0,87,184,.86),
                    rgba(0,114,206,.78)
                ),
                url("../assets/images/perlis-geopark.jpg")
                center/cover no-repeat;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            color: white;

            padding: 70px 20px;

            position: relative;

            overflow: hidden;

        }

        .page-hero::before {

            content: "";

            position: absolute;

            width: 350px;

            height: 350px;

            border-radius: 50%;

            background: rgba(255,215,0,.12);

            top: -180px;

            right: -80px;

        }

        .page-hero::after {

            content: "";

            position: absolute;

            width: 280px;

            height: 280px;

            border-radius: 50%;

            background: rgba(255,255,255,.08);

            bottom: -150px;

            left: -70px;

        }

        .page-hero-content {

            max-width: 850px;

            position: relative;

            z-index: 2;

        }

        .page-hero-icon {

            width: 80px;

            height: 80px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,215,0,.30),
                    rgba(255,255,255,.15)
                );

            border: 2px solid rgba(255,255,255,.7);

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 25px;

            font-size: 35px;

            color: #FFD700;

            box-shadow:
                0 8px 25px rgba(0,0,0,.20);

        }

        .page-hero h1 {

            font-size: clamp(2rem, 5vw, 3.4rem);

            font-weight: 800;

            margin-bottom: 15px;

            text-shadow:
                0 4px 15px rgba(0,0,0,.20);

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
           INTRO CARD
        ===================================================== */

        .intro-card {

            background:
                linear-gradient(
                    145deg,
                    #ffffff,
                    #f8fbff
                );

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 10px 35px rgba(0,59,122,.08);

            margin-bottom: 40px;

            border: 1px solid rgba(0,87,184,.08);

        }

        .section-title {

            color: #0057B8;

            font-weight: 800;

            margin-bottom: 20px;

        }

        .section-title i {

            color: #0057B8;

            margin-right: 8px;

        }

        .intro-card p {

            color: #555;

            line-height: 1.9;

            text-align: justify;

            margin-bottom: 15px;

        }

        /* =====================================================
           GOVERNANCE FLOW
        ===================================================== */

        .governance-title {

            text-align: center;

            color: #0057B8;

            font-weight: 800;

            margin-bottom: 35px;

        }

        .governance-title span {

            display: block;

            color: #6c757d;

            font-size: .95rem;

            font-weight: 400;

            margin-top: 8px;

        }

        .governance-flow {

            position: relative;

        }

        .governance-card {

            position: relative;

            background:
                linear-gradient(
                    145deg,
                    #ffffff,
                    #f7fbff
                );

            border-radius: 18px;

            padding: 30px 25px;

            height: 100%;

            text-align: center;

            box-shadow:
                0 8px 28px rgba(0,59,122,.07);

            transition: .3s;

            border-top: 5px solid #0057B8;

            border-left: 1px solid rgba(0,87,184,.06);

            border-right: 1px solid rgba(0,87,184,.06);

            border-bottom: 1px solid rgba(0,87,184,.06);

            overflow: hidden;

        }

        .governance-card::before {

            content: "";

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 4px;

            background:
                linear-gradient(
                    90deg,
                    #0057B8,
                    #0072CE,
                    #FFD700
                );

        }

        .governance-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0,87,184,.15);

        }

        .governance-icon {

            width: 70px;

            height: 70px;

            border-radius: 50%;

            margin: 0 auto 20px;

            background:
                linear-gradient(
                    135deg,
                    #EAF3FF,
                    #D9EBFF
                );

            color: #0057B8;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;

            box-shadow:
                0 5px 15px rgba(0,87,184,.08);

        }

        .governance-card h4 {

            color: #0057B8;

            font-size: 1.1rem;

            font-weight: 700;

            margin-bottom: 12px;

        }

        .governance-card p {

            color: #666;

            font-size: .92rem;

            line-height: 1.7;

            margin: 0;

        }

        /* =====================================================
           CENTRAL ROLE
        ===================================================== */

        .main-governance {

            background:
                linear-gradient(
                    135deg,
                    #003B7A 0%,
                    #0057B8 50%,
                    #0072CE 100%
                );

            color: white;

            border-radius: 20px;

            padding: 40px;

            margin: 45px 0;

            text-align: center;

            box-shadow:
                0 15px 40px rgba(0,59,122,.22);

            position: relative;

            overflow: hidden;

        }

        .main-governance::after {

            content: "";

            position: absolute;

            width: 280px;

            height: 280px;

            border-radius: 50%;

            background: rgba(255,215,0,.10);

            right: -100px;

            top: -100px;

        }

        .main-governance-icon {

            width: 80px;

            height: 80px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,215,0,.30),
                    rgba(255,255,255,.12)
                );

            border: 1px solid rgba(255,255,255,.25);

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 20px;

            font-size: 34px;

            color: #FFD700;

            position: relative;

            z-index: 2;

        }

        .main-governance h2 {

            font-weight: 800;

            margin-bottom: 15px;

            position: relative;

            z-index: 2;

        }

        .main-governance p {

            max-width: 800px;

            margin: auto;

            line-height: 1.9;

            opacity: .95;

            position: relative;

            z-index: 2;

        }

        /* =====================================================
           RESPONSIBILITIES
        ===================================================== */

        .responsibility-section {

            background:
                linear-gradient(
                    145deg,
                    #ffffff,
                    #f8fbff
                );

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 10px 30px rgba(0,59,122,.07);

            border: 1px solid rgba(0,87,184,.08);

        }

        .responsibility-section h2 {

            color: #0057B8;

            font-weight: 800;

            margin-bottom: 30px;

        }

        .responsibility-item {

            display: flex;

            gap: 18px;

            padding: 18px 0;

            border-bottom: 1px solid #e1eaf4;

        }

        .responsibility-item:last-child {

            border-bottom: none;

        }

        .responsibility-icon {

            flex-shrink: 0;

            width: 45px;

            height: 45px;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #EAF3FF,
                    #D9EBFF
                );

            color: #0057B8;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            box-shadow:
                0 4px 12px rgba(0,87,184,.08);

        }

        .responsibility-item h5 {

            color: #0057B8;

            font-weight: 700;

            margin-bottom: 6px;

        }

        .responsibility-item p {

            margin: 0;

            color: #666;

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

            background:
                linear-gradient(
                    135deg,
                    #0057B8,
                    #0072CE
                );

            color: white;

            padding: 12px 24px;

            border-radius: 30px;

            text-decoration: none;

            font-weight: 600;

            transition: .3s;

            box-shadow:
                0 6px 18px rgba(0,87,184,.18);

        }

        .back-button:hover {

            background:
                linear-gradient(
                    135deg,
                    #FFD700,
                    #FFC107
                );

            color: #003B7A;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(255,193,7,.25);

        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 768px) {

            .page-hero {

                min-height: 300px;

                padding: 55px 20px;

            }

            .intro-card,
            .responsibility-section {

                padding: 28px 22px;

            }

            .main-governance {

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

            <i class="bi bi-diagram-3-fill"></i>

        </div>

        <h1>Tadbir Urus</h1>

        <p>

            Struktur pengurusan dan kerjasama dalam memastikan
            kelestarian Perlis Geopark.

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

                <i class="bi bi-building-fill"></i>

                Tadbir Urus Perlis Geopark

            </h2>

            <p>

                Tadbir urus Perlis Geopark melibatkan kerjasama
                antara pelbagai pihak berkepentingan bagi memastikan
                pengurusan, pemuliharaan dan pembangunan kawasan
                geopark dapat dilaksanakan secara terancang.

            </p>

            <p>

                Kerjasama antara agensi kerajaan negeri dan
                persekutuan, pihak berkuasa tempatan, institusi
                pendidikan, komuniti setempat serta pihak berkaitan
                amat penting dalam menjaga nilai warisan geologi,
                biologi dan budaya yang terdapat di Perlis.

            </p>

            <p>

                Pendekatan tadbir urus yang baik membantu memastikan
                aktiviti pemuliharaan, pendidikan, penyelidikan dan
                pelancongan dapat dilaksanakan secara seimbang.

            </p>

        </div>


        <!-- MAIN GOVERNANCE -->

        <div class="main-governance">

            <div class="main-governance-icon">

                <i class="bi bi-diagram-3"></i>

            </div>

            <h2>Kerjasama Pelbagai Pihak</h2>

            <p>

                Pengurusan Perlis Geopark memerlukan penglibatan
                pelbagai pihak untuk melindungi warisan, menyokong
                pembangunan komuniti dan meningkatkan kesedaran
                terhadap kepentingan geopark.

            </p>

        </div>


        <!-- GOVERNANCE STRUCTURE -->

        <h2 class="governance-title">

            Komponen Tadbir Urus

            <span>
                Pihak-pihak yang menyumbang kepada pengurusan
                dan pembangunan Perlis Geopark
            </span>

        </h2>


        <div class="row g-4 governance-flow">


            <!-- KERAJAAN NEGERI -->

            <div class="col-md-6 col-lg-3">

                <div class="governance-card">

                    <div class="governance-icon">

                        <i class="bi bi-bank"></i>

                    </div>

                    <h4>
                        Kerajaan Negeri
                    </h4>

                    <p>

                        Menyokong dasar, perancangan dan
                        pengurusan pembangunan Perlis Geopark
                        di peringkat negeri.

                    </p>

                </div>

            </div>


            <!-- AGENSI -->

            <div class="col-md-6 col-lg-3">

                <div class="governance-card">

                    <div class="governance-icon">

                        <i class="bi bi-buildings"></i>

                    </div>

                    <h4>
                        Agensi Berkaitan
                    </h4>

                    <p>

                        Membantu dalam aspek pemuliharaan,
                        pelancongan, alam sekitar, pendidikan
                        dan pembangunan.

                    </p>

                </div>

            </div>


            <!-- PBT -->

            <div class="col-md-6 col-lg-3">

                <div class="governance-card">

                    <div class="governance-icon">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                    <h4>
                        Pihak Berkuasa Tempatan
                    </h4>

                    <p>

                        Menyokong pengurusan kawasan serta
                        pembangunan yang berkaitan dengan
                        komuniti dan pelawat.

                    </p>

                </div>

            </div>


            <!-- KOMUNITI -->

            <div class="col-md-6 col-lg-3">

                <div class="governance-card">

                    <div class="governance-icon">

                        <i class="bi bi-people-fill"></i>

                    </div>

                    <h4>
                        Komuniti Setempat
                    </h4>

                    <p>

                        Menjadi sebahagian daripada usaha
                        pemeliharaan warisan dan pembangunan
                        aktiviti geopark.

                    </p>

                </div>

            </div>


        </div>


        <!-- RESPONSIBILITIES -->

        <div class="responsibility-section mt-5">

            <h2>

                <i class="bi bi-check2-square me-2"></i>

                Fokus Tadbir Urus

            </h2>


            <!-- ITEM 1 -->

            <div class="responsibility-item">

                <div class="responsibility-icon">

                    <i class="bi bi-shield-check"></i>

                </div>

                <div>

                    <h5>
                        Pemuliharaan Warisan
                    </h5>

                    <p>

                        Memastikan tapak warisan geologi,
                        biologi dan budaya dipelihara untuk
                        generasi akan datang.

                    </p>

                </div>

            </div>


            <!-- ITEM 2 -->

            <div class="responsibility-item">

                <div class="responsibility-icon">

                    <i class="bi bi-mortarboard-fill"></i>

                </div>

                <div>

                    <h5>
                        Pendidikan dan Penyelidikan
                    </h5>

                    <p>

                        Menggalakkan aktiviti pendidikan,
                        perkongsian ilmu dan penyelidikan
                        berkaitan warisan geopark.

                    </p>

                </div>

            </div>


            <!-- ITEM 3 -->

            <div class="responsibility-item">

                <div class="responsibility-icon">

                    <i class="bi bi-tree-fill"></i>

                </div>

                <div>

                    <h5>
                        Kelestarian Alam Sekitar
                    </h5>

                    <p>

                        Menggalakkan pengurusan sumber semula jadi
                        secara bertanggungjawab dan berterusan.

                    </p>

                </div>

            </div>


            <!-- ITEM 4 -->

            <div class="responsibility-item">

                <div class="responsibility-icon">

                    <i class="bi bi-signpost-split-fill"></i>

                </div>

                <div>

                    <h5>
                        Pelancongan Lestari
                    </h5>

                    <p>

                        Menyokong pembangunan pelancongan yang
                        menghargai warisan dan memberi manfaat
                        kepada komuniti setempat.

                    </p>

                </div>

            </div>


            <!-- ITEM 5 -->

            <div class="responsibility-item">

                <div class="responsibility-icon">

                    <i class="bi bi-handshake-fill"></i>

                </div>

                <div>

                    <h5>
                        Kerjasama Strategik
                    </h5>

                    <p>

                        Menggalakkan kerjasama antara kerajaan,
                        agensi, institusi pendidikan, komuniti
                        dan pihak berkepentingan.

                    </p>

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