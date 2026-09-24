<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - BUDAYA TIDAK KETARA
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

    <title>Budaya Tidak Ketara | Perlis Geopark</title>


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
           CULTURAL CARDS
        ===================================================== */

        .culture-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            border-top: 5px solid #198754;

            position: relative;

        }


        .culture-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.12);

        }


        .culture-icon {

            width: 68px;

            height: 68px;

            border-radius: 18px;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;

            margin-bottom: 20px;

        }


        .culture-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .culture-card p {

            color: #666;

            font-size: .93rem;

            line-height: 1.75;

            margin: 0;

        }


        /* =====================================================
           FEATURE CARDS
        ===================================================== */

        .feature-card {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.08);

            transition: .3s;

        }


        .feature-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.14);

        }


        .feature-image {

            height: 220px;

            overflow: hidden;

        }


        .feature-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: .5s;

        }


        .feature-card:hover .feature-image img {

            transform: scale(1.06);

        }


        .feature-content {

            padding: 25px;

        }


        .feature-content h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .feature-content p {

            color: #666;

            font-size: .92rem;

            line-height: 1.75;

            margin-bottom: 15px;

        }


        .culture-tag {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            background: #e8f5e9;

            color: #198754;

            padding: 7px 13px;

            border-radius: 20px;

            font-size: .78rem;

            font-weight: 700;

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
           TRADITION BOX
        ===================================================== */

        .tradition-box {

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


        .tradition-box h2 {

            font-weight: 800;

            margin-bottom: 18px;

        }


        .tradition-box > p {

            line-height: 1.9;

            opacity: .95;

            margin-bottom: 28px;

        }


        .tradition-item {

            display: flex;

            gap: 15px;

            margin-bottom: 18px;

            align-items: flex-start;

        }


        .tradition-item i {

            color: #FFD700;

            font-size: 20px;

            flex-shrink: 0;

        }


        .tradition-item span {

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


            .tradition-box {

                padding: 30px 22px;

            }


            .content-section {

                padding: 50px 15px;

            }


            .feature-image {

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

            <i class="bi bi-music-note-beamed"></i>

        </div>


        <h1>
            Budaya Tidak Ketara
        </h1>


        <p>

            Mengenali adat, tradisi, makanan, seni persembahan
            dan pengetahuan masyarakat yang diwarisi dari
            generasi ke generasi.

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

                <i class="bi bi-people-fill me-2"></i>

                Warisan Budaya Tidak Ketara

            </h2>


            <p>

                Budaya tidak ketara merangkumi pengetahuan,
                kemahiran, amalan, adat, tradisi dan ekspresi
                budaya yang diwarisi serta diamalkan oleh
                masyarakat.

            </p>


            <p>

                Warisan seperti ini tidak semestinya mempunyai
                bentuk fizikal, tetapi menjadi sebahagian
                daripada identiti dan kehidupan seharian
                masyarakat Perlis.

            </p>


            <p>

                Kepelbagaian masyarakat dan sejarah Perlis
                menjadikan negeri ini mempunyai pelbagai
                bentuk amalan budaya yang menarik untuk
                dipelajari dan dipelihara.

            </p>

        </div>



        <!-- =================================================
             CULTURAL COMPONENTS
        ================================================== -->

        <div class="section-heading">

            <h2>
                Komponen Budaya Tidak Ketara
            </h2>


            <p>

                Antara bentuk warisan budaya yang diwarisi
                dan diamalkan oleh masyarakat

            </p>

        </div>



        <div class="row g-4">


            <!-- ADAT -->

            <div class="col-md-6 col-lg-3">

                <div class="culture-card">

                    <div class="culture-icon">

                        <i class="bi bi-people-fill"></i>

                    </div>


                    <h4>
                        Adat & Tradisi
                    </h4>


                    <p>

                        Adat resam dan tradisi masyarakat yang
                        diwarisi serta diamalkan dalam kehidupan
                        komuniti.

                    </p>

                </div>

            </div>



            <!-- MAKANAN -->

            <div class="col-md-6 col-lg-3">

                <div class="culture-card">

                    <div class="culture-icon">

                        <i class="bi bi-egg-fried"></i>

                    </div>


                    <h4>
                        Makanan Tradisional
                    </h4>


                    <p>

                        Resipi, teknik penyediaan dan makanan
                        tradisional yang menjadi sebahagian
                        daripada identiti masyarakat.

                    </p>

                </div>

            </div>



            <!-- PERSEMBAHAN -->

            <div class="col-md-6 col-lg-3">

                <div class="culture-card">

                    <div class="culture-icon">

                        <i class="bi bi-music-note-list"></i>

                    </div>


                    <h4>
                        Seni Persembahan
                    </h4>


                    <p>

                        Muzik, nyanyian, tarian dan bentuk
                        persembahan tradisional yang diwarisi
                        antara generasi.

                    </p>

                </div>

            </div>



            <!-- PENGETAHUAN -->

            <div class="col-md-6 col-lg-3">

                <div class="culture-card">

                    <div class="culture-icon">

                        <i class="bi bi-lightbulb-fill"></i>

                    </div>


                    <h4>
                        Pengetahuan Tradisional
                    </h4>


                    <p>

                        Pengetahuan dan kemahiran tempatan yang
                        berkaitan dengan alam, kehidupan dan
                        aktiviti masyarakat.

                    </p>

                </div>

            </div>


        </div>



        <!-- =================================================
             EXAMPLES
        ================================================== -->

        <div class="section-heading">

            <h2>
                Contoh Warisan Budaya
            </h2>


            <p>

                Warisan yang mencerminkan cara hidup dan identiti
                masyarakat Perlis

            </p>

        </div>



        <div class="row g-4">


            <!-- MAKANAN -->

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-image">

                        <img
                            src="../../assets/images/kuala-perlis.jpg"
                            alt="Makanan dan kehidupan masyarakat Perlis"
                        >

                    </div>


                    <div class="feature-content">

                        <h4>
                            Makanan Tradisional
                        </h4>


                        <p>

                            Makanan tradisional mencerminkan
                            penggunaan bahan tempatan serta
                            pengetahuan penyediaan makanan yang
                            diwarisi dalam keluarga dan komuniti.

                        </p>


                        <span class="culture-tag">

                            <i class="bi bi-egg-fried"></i>

                            Gastronomi

                        </span>

                    </div>

                </div>

            </div>



            <!-- ADAT -->

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-image">

                        <img
                            src="../../assets/images/perlis-geopark.jpg"
                            alt="Tradisi masyarakat Perlis"
                        >

                    </div>


                    <div class="feature-content">

                        <h4>
                            Adat dan Amalan Masyarakat
                        </h4>


                        <p>

                            Amalan komuniti dan adat resam
                            menjadi sebahagian daripada identiti
                            serta hubungan sosial masyarakat.

                        </p>


                        <span class="culture-tag">

                            <i class="bi bi-people-fill"></i>

                            Tradisi

                        </span>

                    </div>

                </div>

            </div>



            <!-- SENI -->

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <div class="feature-image">

                        <img
                            src="../../assets/images/bukit-ayer.jpg"
                            alt="Seni dan budaya Perlis"
                        >

                    </div>


                    <div class="feature-content">

                        <h4>
                            Seni dan Persembahan
                        </h4>


                        <p>

                            Seni persembahan, muzik dan ekspresi
                            budaya menjadi medium untuk meneruskan
                            cerita serta identiti masyarakat.

                        </p>


                        <span class="culture-tag">

                            <i class="bi bi-music-note-beamed"></i>

                            Seni Budaya

                        </span>

                    </div>

                </div>

            </div>


        </div>



        <!-- =================================================
             PRESERVATION
        ================================================== -->

        <div class="tradition-box">

            <h2>

                <i class="bi bi-heart-fill me-2"></i>

                Memelihara Warisan Tidak Ketara

            </h2>


            <p>

                Warisan tidak ketara hanya dapat terus hidup
                apabila pengetahuan dan amalan tersebut terus
                dipelajari, diamalkan dan dikongsi oleh
                generasi baharu.

            </p>



            <div class="tradition-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Menggalakkan generasi muda mempelajari
                    adat dan tradisi masyarakat.

                </span>

            </div>



            <div class="tradition-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Mendokumentasikan pengetahuan dan amalan
                    budaya supaya tidak hilang.

                </span>

            </div>



            <div class="tradition-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Menyokong penglibatan komuniti tempatan
                    dalam pemeliharaan warisan.

                </span>

            </div>



            <div class="tradition-item">

                <i class="bi bi-check-circle-fill"></i>


                <span>

                    Memperkenalkan budaya tempatan kepada
                    pelawat melalui pengalaman yang
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