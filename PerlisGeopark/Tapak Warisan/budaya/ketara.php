<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - BUDAYA KETARA
|--------------------------------------------------------------------------
*/

$geoparkBase = "../../";

include("../../geopark_navbar.php");

?>

<!DOCTYPE html>
<html lang="ms">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Budaya Ketara | Perlis Geopark</title>


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
                url("../../assets/images/kuala-perlis.jpg")
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
           HERITAGE CARDS
        ===================================================== */

        .heritage-card {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.08);

            transition: .3s;

        }


        .heritage-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.14);

        }


        .heritage-image {

            height: 235px;

            overflow: hidden;

            position: relative;

        }


        .heritage-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: .5s;

        }


        .heritage-card:hover .heritage-image img {

            transform: scale(1.06);

        }


        .heritage-badge {

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


        .heritage-content {

            padding: 25px;

        }


        .heritage-content h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .heritage-content p {

            color: #666;

            font-size: .92rem;

            line-height: 1.75;

            margin-bottom: 15px;

        }


        .heritage-location {

            color: #198754;

            font-size: .85rem;

            font-weight: 600;

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
           CATEGORY CARDS
        ===================================================== */

        .category-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            border-left: 5px solid #198754;

            transition: .3s;

        }


        .category-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.12);

        }


        .category-icon {

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


        .category-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .category-card p {

            color: #666;

            font-size: .93rem;

            line-height: 1.75;

            margin: 0;

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

            margin-bottom: 28px;

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

            flex-shrink: 0;

        }


        .importance-item span {

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


            .intro-card {

                padding: 28px 22px;

            }


            .importance-box {

                padding: 30px 22px;

            }


            .content-section {

                padding: 50px 15px;

            }


            .heritage-image {

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

            <i class="bi bi-bank2"></i>

        </div>


        <h1>
            Budaya Ketara
        </h1>


        <p>

            Mengenali warisan fizikal dan peninggalan sejarah
            yang mencerminkan identiti serta kehidupan masyarakat
            Perlis.

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

                <i class="bi bi-building-fill me-2"></i>

                Warisan Budaya Ketara Perlis

            </h2>


            <p>

                Budaya ketara merujuk kepada warisan berbentuk
                fizikal yang boleh dilihat, digunakan dan
                diwarisi oleh masyarakat. Ia termasuk bangunan
                bersejarah, struktur tradisional, artifak,
                kawasan penempatan dan pelbagai peninggalan
                yang mempunyai nilai sejarah.

            </p>


            <p>

                Di Perlis, warisan budaya ketara berkait rapat
                dengan sejarah negeri, kehidupan masyarakat,
                kegiatan perdagangan, pertanian, perikanan serta
                perkembangan komuniti setempat.

            </p>


            <p>

                Pemeliharaan warisan fizikal ini membantu
                memastikan generasi akan datang dapat mengenali
                sejarah dan identiti budaya Perlis.

            </p>

        </div>



        <!-- =================================================
             FEATURED HERITAGE
        ================================================== -->

        <div class="section-heading">

            <h2>
                Warisan Budaya yang Menarik
            </h2>


            <p>

                Antara contoh warisan fizikal yang mempunyai
                kaitan dengan sejarah dan identiti Perlis

            </p>

        </div>



        <div class="row g-4">


            <!-- KUALA PERLIS -->

            <div class="col-md-6 col-lg-4">

                <div class="heritage-card">

                    <div class="heritage-image">

                        <img
                            src="../../assets/images/kuala-perlis.jpg"
                            alt="Kuala Perlis"
                        >


                        <span class="heritage-badge">
                            BUDAYA KETARA
                        </span>

                    </div>


                    <div class="heritage-content">

                        <h4>
                            Perkampungan Warisan Kuala Perlis
                        </h4>


                        <p>

                            Kawasan penempatan yang mempunyai
                            hubungan rapat dengan kehidupan
                            masyarakat nelayan serta aktiviti
                            tradisional di pesisir pantai.

                        </p>


                        <div class="heritage-location">

                            <i class="bi bi-geo-alt-fill me-1"></i>

                            Kuala Perlis

                        </div>

                    </div>

                </div>

            </div>



            <!-- KOTA KAYANG -->

            <div class="col-md-6 col-lg-4">

                <div class="heritage-card">

                    <div class="heritage-image">

                        <img
                            src="../../assets/images/bukit-chabang.jpg"
                            alt="Kota Kayang"
                        >


                        <span class="heritage-badge">
                            SEJARAH
                        </span>

                    </div>


                    <div class="heritage-content">

                        <h4>
                            Tapak dan Tinggalan Sejarah
                        </h4>


                        <p>

                            Tinggalan sejarah menjadi sumber
                            penting dalam memahami perkembangan
                            pemerintahan dan kehidupan masyarakat
                            Perlis pada masa lalu.

                        </p>


                        <div class="heritage-location">

                            <i class="bi bi-geo-alt-fill me-1"></i>

                            Perlis

                        </div>

                    </div>

                </div>

            </div>



            <!-- WARISAN BANGUNAN -->

            <div class="col-md-6 col-lg-4">

                <div class="heritage-card">

                    <div class="heritage-image">

                        <img
                            src="../../assets/images/perlis-geopark.jpg"
                            alt="Warisan Perlis"
                        >


                        <span class="heritage-badge">
                            WARISAN
                        </span>

                    </div>


                    <div class="heritage-content">

                        <h4>
                            Bangunan dan Struktur Tradisional
                        </h4>


                        <p>

                            Bangunan dan struktur lama
                            memperlihatkan seni bina, penggunaan
                            bahan serta cara hidup masyarakat
                            pada suatu ketika dahulu.

                        </p>


                        <div class="heritage-location">

                            <i class="bi bi-geo-alt-fill me-1"></i>

                            Negeri Perlis

                        </div>

                    </div>

                </div>

            </div>


        </div>



        <!-- =================================================
             TYPES
        ================================================== -->

        <div class="section-heading">

            <h2>
                Jenis Warisan Budaya Ketara
            </h2>


            <p>

                Pelbagai bentuk warisan fizikal yang boleh
                dikaitkan dengan sejarah dan kehidupan masyarakat

            </p>

        </div>



        <div class="row g-4">


            <!-- BANGUNAN -->

            <div class="col-md-6 col-lg-3">

                <div class="category-card">

                    <div class="category-icon">

                        <i class="bi bi-building"></i>

                    </div>


                    <h4>
                        Bangunan Bersejarah
                    </h4>


                    <p>

                        Bangunan lama dan struktur bersejarah
                        yang mempunyai nilai seni bina serta
                        sejarah.

                    </p>

                </div>

            </div>



            <!-- PENEMPATAN -->

            <div class="col-md-6 col-lg-3">

                <div class="category-card">

                    <div class="category-icon">

                        <i class="bi bi-houses-fill"></i>

                    </div>


                    <h4>
                        Penempatan Tradisional
                    </h4>


                    <p>

                        Kawasan penempatan yang memperlihatkan
                        corak kehidupan dan susunan komuniti
                        pada masa lalu.

                    </p>

                </div>

            </div>



            <!-- ARTIFAK -->

            <div class="col-md-6 col-lg-3">

                <div class="category-card">

                    <div class="category-icon">

                        <i class="bi bi-box-seam-fill"></i>

                    </div>


                    <h4>
                        Artifak
                    </h4>


                    <p>

                        Objek dan barangan lama yang mempunyai
                        nilai sejarah, budaya atau pendidikan.

                    </p>

                </div>

            </div>



            <!-- STRUKTUR -->

            <div class="col-md-6 col-lg-3">

                <div class="category-card">

                    <div class="category-icon">

                        <i class="bi bi-signpost-2-fill"></i>

                    </div>


                    <h4>
                        Struktur Warisan
                    </h4>


                    <p>

                        Struktur fizikal tertentu yang
                        berkaitan dengan sejarah, kegiatan
                        masyarakat dan perkembangan negeri.

                    </p>

                </div>

            </div>


        </div>



        <!-- =================================================
             IMPORTANCE
        ================================================== -->

        <div class="importance-box">

            <h2>

                <i class="bi bi-shield-check me-2"></i>

                Kepentingan Memelihara Budaya Ketara

            </h2>


            <p>

                Warisan budaya ketara merupakan bukti fizikal
                yang membantu masyarakat memahami sejarah,
                identiti dan perkembangan sesebuah tempat.
                Pemeliharaannya perlu dilakukan secara
                berterusan supaya warisan tersebut tidak hilang.

            </p>



            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Mengekalkan identiti dan sejarah masyarakat
                    Perlis untuk generasi akan datang.

                </span>

            </div>



            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Memelihara bangunan, struktur dan objek
                    yang mempunyai nilai warisan.

                </span>

            </div>



            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Menyokong aktiviti pendidikan dan
                    penyelidikan berkaitan sejarah tempatan.

                </span>

            </div>



            <div class="importance-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Menjadikan warisan budaya sebagai sebahagian
                    daripada pengalaman pelancongan yang
                    bertanggungjawab.

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