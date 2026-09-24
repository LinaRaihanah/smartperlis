<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK - HUBUNGI KAMI
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

    <title>Hubungi Kami | Perlis Geopark</title>


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

            margin-bottom: 18px;

        }


        .intro-card h2 i {

            color: #198754;

        }


        .intro-card p {

            color: #555;

            line-height: 1.9;

            text-align: justify;

            margin: 0;

        }


        /* =====================================================
           CONTACT CARDS
        ===================================================== */

        .contact-card {

            background: white;

            border-radius: 20px;

            padding: 30px 25px;

            height: 100%;

            box-shadow:
                0 8px 28px rgba(0,0,0,.07);

            transition: .3s;

            text-align: center;

            border-top: 5px solid #198754;

        }


        .contact-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 16px 38px rgba(0,0,0,.13);

        }


        .contact-icon {

            width: 70px;

            height: 70px;

            border-radius: 50%;

            background: #e8f5e9;

            color: #198754;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 20px;

            font-size: 30px;

        }


        .contact-card h4 {

            color: #14532d;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .contact-card p {

            color: #666;

            font-size: .92rem;

            line-height: 1.7;

            margin: 0;

        }


        .contact-card a {

            color: #198754;

            text-decoration: none;

            font-weight: 600;

        }


        .contact-card a:hover {

            color: #14532d;

            text-decoration: underline;

        }


        /* =====================================================
           CONTACT AREA
        ===================================================== */

        .contact-area {

            margin-top: 50px;

        }


        .contact-info {

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754,
                    #0f766e
                );

            color: white;

            border-radius: 22px;

            padding: 40px;

            height: 100%;

            box-shadow:
                0 12px 35px rgba(20,83,45,.20);

        }


        .contact-info h2 {

            font-weight: 800;

            margin-bottom: 15px;

        }


        .contact-info > p {

            line-height: 1.8;

            opacity: .95;

            margin-bottom: 30px;

        }


        .contact-detail {

            display: flex;

            gap: 15px;

            margin-bottom: 23px;

            align-items: flex-start;

        }


        .contact-detail-icon {

            width: 45px;

            height: 45px;

            min-width: 45px;

            border-radius: 12px;

            background: rgba(255,255,255,.13);

            display: flex;

            align-items: center;

            justify-content: center;

            color: #FFD700;

            font-size: 20px;

        }


        .contact-detail strong {

            display: block;

            margin-bottom: 4px;

        }


        .contact-detail span {

            line-height: 1.6;

            opacity: .92;

            font-size: .9rem;

        }


        .contact-detail a {

            color: white;

            text-decoration: none;

        }


        .contact-detail a:hover {

            color: #FFD700;

        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-card {

            background: white;

            border-radius: 22px;

            padding: 40px;

            box-shadow:
                0 10px 35px rgba(0,0,0,.08);

        }


        .form-card h2 {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 8px;

        }


        .form-card > p {

            color: #777;

            margin-bottom: 28px;

        }


        .form-label {

            color: #14532d;

            font-weight: 600;

            font-size: .9rem;

            margin-bottom: 8px;

        }


        .form-control {

            border: 1px solid #dce8df;

            border-radius: 12px;

            padding: 12px 15px;

        }


        .form-control:focus {

            border-color: #198754;

            box-shadow:
                0 0 0 3px rgba(25,135,84,.12);

        }


        textarea.form-control {

            min-height: 145px;

            resize: vertical;

        }


        .submit-button {

            width: 100%;

            border: none;

            background:
                linear-gradient(
                    135deg,
                    #14532d,
                    #198754
                );

            color: white;

            padding: 13px 20px;

            border-radius: 30px;

            font-weight: 700;

            transition: .3s;

        }


        .submit-button:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(25,135,84,.22);

        }


        /* =====================================================
           MAP / LOCATION BOX
        ===================================================== */

        .location-box {

            margin-top: 50px;

            background: white;

            border-radius: 22px;

            padding: 35px;

            box-shadow:
                0 10px 35px rgba(0,0,0,.08);

        }


        .location-box h2 {

            color: #14532d;

            font-weight: 800;

            margin-bottom: 10px;

        }


        .location-box > p {

            color: #666;

            line-height: 1.8;

            margin-bottom: 25px;

        }


        .map-placeholder {

            min-height: 250px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #e8f5e9,
                    #d9f0eb
                );

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            padding: 30px;

            color: #14532d;

        }


        .map-placeholder i {

            font-size: 45px;

            color: #198754;

            margin-bottom: 12px;

        }


        .map-placeholder h4 {

            font-weight: 700;

            margin-bottom: 8px;

        }


        .map-placeholder p {

            margin: 0;

            color: #52705d;

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


            .contact-info {

                padding: 30px 22px;

            }


            .form-card {

                padding: 30px 22px;

            }


            .location-box {

                padding: 28px 20px;

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

            <i class="bi bi-envelope-heart-fill"></i>

        </div>


        <h1>
            Hubungi Kami
        </h1>


        <p>

            Sebarang pertanyaan, cadangan atau maklum balas
            berkaitan Perlis Geopark boleh disalurkan kepada kami.

        </p>

    </div>

</section>



<!-- =========================================================
     CONTENT
========================================================= -->

<section class="content-section">

    <div class="content-container">


        <!-- =================================================
             INTRO
        ================================================== -->

        <div class="intro-card">

            <h2>

                <i class="bi bi-chat-dots-fill me-2"></i>

                Kami Sedia Membantu

            </h2>


            <p>

                Sekiranya anda mempunyai pertanyaan berkaitan
                Perlis Geopark, warisan geologi, biologi, budaya,
                aktiviti atau maklumat lain, sila hubungi pihak
                yang berkaitan melalui maklumat di bawah.

            </p>

        </div>



        <!-- =================================================
             QUICK CONTACT
        ================================================== -->

        <div class="row g-4">


            <!-- EMAIL -->

            <div class="col-md-4">

                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="bi bi-envelope-fill"></i>

                    </div>


                    <h4>
                        Emel
                    </h4>


                    <p>

                        <a href="mailto:bpen.psukps@perlis.gov.my">

                            bpen.psukps@perlis.gov.my

                        </a>

                    </p>

                </div>

            </div>



            <!-- TELEPHONE -->

            <div class="col-md-4">

                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="bi bi-telephone-fill"></i>

                    </div>


                    <h4>
                        Telefon
                    </h4>


                    <p>

                        <a href="tel:049731859">

                            04-973 1859

                        </a>

                    </p>

                </div>

            </div>



            <!-- OFFICE -->

            <div class="col-md-4">

                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="bi bi-building-fill"></i>

                    </div>


                    <h4>
                        Bahagian
                    </h4>


                    <p>

                        Bahagian Perancang Ekonomi Negeri

                    </p>

                </div>

            </div>


        </div>



        <!-- =================================================
             CONTACT AREA
        ================================================== -->

        <div class="contact-area">

            <div class="row g-4">


                <!-- CONTACT INFORMATION -->

                <div class="col-lg-5">

                    <div class="contact-info">


                        <h2>
                            Maklumat Hubungan
                        </h2>


                        <p>

                            Hubungi pihak berkaitan untuk mendapatkan
                            maklumat lanjut mengenai Perlis Geopark
                            dan aktiviti yang berkaitan.

                        </p>



                        <!-- ADDRESS -->

                        <div class="contact-detail">

                            <div class="contact-detail-icon">

                                <i class="bi bi-geo-alt-fill"></i>

                            </div>


                            <div>

                                <strong>
                                    Organisasi
                                </strong>


                                <span>

                                    Bahagian Perancang Ekonomi Negeri

                                </span>

                            </div>

                        </div>



                        <!-- EMAIL -->

                        <div class="contact-detail">

                            <div class="contact-detail-icon">

                                <i class="bi bi-envelope-fill"></i>

                            </div>


                            <div>

                                <strong>
                                    Emel
                                </strong>


                                <span>

                                    <a
                                        href="mailto:bpen.psukps@perlis.gov.my"
                                    >

                                        bpen.psukps@perlis.gov.my

                                    </a>

                                </span>

                            </div>

                        </div>



                        <!-- PHONE -->

                        <div class="contact-detail">

                            <div class="contact-detail-icon">

                                <i class="bi bi-telephone-fill"></i>

                            </div>


                            <div>

                                <strong>
                                    Telefon
                                </strong>


                                <span>

                                    <a href="tel:049731859">

                                        04-973 1859

                                    </a>

                                </span>

                            </div>

                        </div>



                        <!-- WEBSITE -->

                        <div class="contact-detail">

                            <div class="contact-detail-icon">

                                <i class="bi bi-globe2"></i>

                            </div>


                            <div>

                                <strong>
                                    Perlis Geopark
                                </strong>


                                <span>

                                    Portal maklumat Perlis Geopark

                                </span>

                            </div>

                        </div>


                    </div>

                </div>



                <!-- CONTACT FORM -->

                <div class="col-lg-7">

                    <div class="form-card">


                        <h2>
                            Hantar Pertanyaan
                        </h2>


                        <p>

                            Isi borang di bawah untuk menghantar
                            pertanyaan atau maklum balas.

                        </p>


                        <form
                            action="#"
                            method="post"
                        >


                            <!-- NAME -->

                            <div class="mb-3">

                                <label
                                    class="form-label"
                                    for="name"
                                >
                                    Nama
                                </label>


                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Masukkan nama anda"
                                    required
                                >

                            </div>



                            <!-- EMAIL -->

                            <div class="mb-3">

                                <label
                                    class="form-label"
                                    for="email"
                                >
                                    Emel
                                </label>


                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Masukkan alamat emel"
                                    required
                                >

                            </div>



                            <!-- SUBJECT -->

                            <div class="mb-3">

                                <label
                                    class="form-label"
                                    for="subject"
                                >
                                    Subjek
                                </label>


                                <input
                                    type="text"
                                    class="form-control"
                                    id="subject"
                                    name="subject"
                                    placeholder="Subjek pertanyaan"
                                    required
                                >

                            </div>



                            <!-- MESSAGE -->

                            <div class="mb-4">

                                <label
                                    class="form-label"
                                    for="message"
                                >
                                    Mesej
                                </label>


                                <textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    placeholder="Tulis pertanyaan atau maklum balas anda..."
                                    required
                                ></textarea>

                            </div>



                            <!-- BUTTON -->

                            <button
                                type="submit"
                                class="submit-button"
                            >

                                <i class="bi bi-send-fill me-2"></i>

                                Hantar Pertanyaan

                            </button>


                        </form>

                    </div>

                </div>


            </div>

        </div>



        <!-- =================================================
             LOCATION
        ================================================== -->

        <div class="location-box">


            <h2>

                <i class="bi bi-geo-alt-fill me-2"></i>

                Lokasi

            </h2>


            <p>

                Perlis Geopark merupakan sebahagian daripada
                warisan semula jadi dan budaya negeri Perlis.
                Maklumat lokasi khusus boleh dirujuk melalui
                pihak pengurusan dan agensi berkaitan.

            </p>


            <div class="map-placeholder">


                <div>

                    <i class="bi bi-map-fill"></i>


                    <h4>
                        Perlis Geopark
                    </h4>


                    <p>

                        Negeri Perlis, Malaysia

                    </p>

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