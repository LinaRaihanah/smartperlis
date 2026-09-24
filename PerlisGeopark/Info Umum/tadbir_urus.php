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
           INTRO CARD
        ===================================================== */

        .intro-card {

            background: white;

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 10px 35px rgba(0,0,0,.08);

            margin-bottom: 40px;

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

            text-align: justify;

            margin-bottom: 15px;

        }

        /* =====================================================
           GOVERNANCE FLOW
        ===================================================== */

        .governance-title {

            text-align: center;

            color: #14532d;

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

            background: white;

            border-radius: 18px;

            padding: 30px 25px;

            height: 100%;

            text-align: center;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            border-top: 5px solid #198754;

        }

        .governance-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.12);

        }

        .governance-icon {

            width: 70px;

            height: 70px;

            border-radius: 50%;

            margin: 0 auto 20px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;

        }

        .governance-card h4 {

            color: #14532d;

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
                    #14532d,
                    #198754
                );

            color: white;

            border-radius: 20px;

            padding: 40px;

            margin: 45px 0;

            text-align: center;

            box-shadow:
                0 12px 35px rgba(20,83,45,.18);

        }

        .main-governance-icon {

            width: 80px;

            height: 80px;

            border-radius: 50%;

            background: rgba(255,255,255,.15);

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 20px;

            font-size: 34px;

            color: #FFD700;

        }

        .main-governance h2 {

            font-weight: 800;

            margin-bottom: 15px;

        }

        .main-governance p {

            max-width: 800px;

            margin: auto;

            line-height: 1.9;

            opacity: .95;

        }

        /* =====================================================
           RESPONSIBILITIES
        ===================================================== */

        .responsibility-section {

            background: white;

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 10px 30px rgba(0,0,0,.07);

        }

        .responsibility-section h2 {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 30px;

        }

        .responsibility-item {

            display: flex;

            gap: 18px;

            padding: 18px 0;

            border-bottom: 1px solid #e9ecef;

        }

        .responsibility-item:last-child {

            border-bottom: none;

        }

        .responsibility-icon {

            flex-shrink: 0;

            width: 45px;

            height: 45px;

            border-radius: 12px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

        }

        .responsibility-item h5 {

            color: #14532d;

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