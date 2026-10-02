<?php
// =====================================================
// PERLIS TOURISM SMART PORTAL
// ANALYTICS DASHBOARD
// POWER BI INTEGRATION
// =====================================================
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Tourism Analytics Dashboard - PERLIS TOURISM SMART PORTAL
    </title>


    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >


    <!-- =====================================================
         GOOGLE FONT
    ====================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- =====================================================
         WEBSITE CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >


    <style>

        /* =====================================================
           BODY
        ====================================================== */

        body {
            margin: 0;
            padding: 0;
            background: #fefbea;
            font-family: 'Inter', sans-serif;
        }


        /* =====================================================
           NAVBAR
        ====================================================== */

        .navbar {
            background:
                linear-gradient(
                    90deg,
                    #FFD700 0%,
                    #F5C400 40%,
                    #0057B8 100%
                ) !important;
        }


        /* =====================================================
           ANALYTICS HEADER
        ====================================================== */

        .analytics-header {

            background-image:
                url('assets/images/header.jpg');

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            min-height: 400px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: center;

            text-align: center;

            color: white;

            padding: 50px 20px;
        }


        .analytics-header h1 {

            font-size: 3.5rem;

            font-weight: 700;

            margin-bottom: 10px;

            text-shadow:
                0 2px 5px
                rgba(0, 0, 0, 0.35);
        }


        .analytics-header p {

            margin: 0;

            font-size: 18px;

            text-shadow:
                0 2px 5px
                rgba(0, 0, 0, 0.35);
        }


        /* =====================================================
           POWER BI SECTION
        ====================================================== */

        .powerbi-section {

            padding-top: 50px;

            padding-bottom: 60px;
        }


        .section-title {

            font-weight: 700;

            color: #003F7D;

            margin-bottom: 10px;
        }


        .section-description {

            color: #666;

            margin-bottom: 30px;
        }


        /* =====================================================
           POWER BI CARD
        ====================================================== */

        .powerbi-card {

            background: white;

            border-radius: 18px;

            padding: 20px;

            box-shadow:
                0 5px 20px
                rgba(0, 0, 0, 0.10);

            overflow: hidden;
        }


        /* =====================================================
           POWER BI CONTAINER
        ====================================================== */

        .powerbi-container {

            position: relative;

            width: 100%;

            height: 75vh;

            min-height: 650px;

            overflow: hidden;

            border-radius: 12px;

            background: #ffffff;
        }


        /* =====================================================
           POWER BI IFRAME
        ====================================================== */

        .powerbi-container iframe {

            width: 100%;

            height: 100%;

            border: none;

            display: block;
        }


        /* =====================================================
           MOBILE RESPONSIVE
        ====================================================== */

        @media (max-width: 768px) {

            .analytics-header {

                min-height: 300px;

                padding: 30px 15px;
            }


            .analytics-header h1 {

                font-size: 2.2rem;
            }


            .analytics-header p {

                font-size: 15px;
            }


            .powerbi-section {

                padding-top: 30px;

                padding-bottom: 40px;
            }


            .powerbi-card {

                padding: 10px;

                border-radius: 12px;
            }


            .powerbi-container {

                height: 650px;

                min-height: 650px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
====================================================== -->

<?php include("navbar.php"); ?>



<!-- =====================================================
     ANALYTICS HEADER
====================================================== -->

<section class="analytics-header">

    <h1>
        <i class="bi bi-bar-chart-line-fill"></i>
        Tourism Analytics Dashboard
    </h1>

    <p>
        Data-driven insights for PERLIS TOURISM SMART PORTAL
    </p>

</section>



<!-- =====================================================
     POWER BI ANALYTICS
====================================================== -->

<section class="powerbi-section">

    <div class="container-fluid px-lg-5">

        <!-- SECTION TITLE -->

        <div class="text-center">

            <h2 class="section-title">
                Interactive Tourism Analytics
            </h2>

            <p class="section-description">
                Explore tourism data and insights through our
                interactive Power BI dashboard.
            </p>

        </div>


        <!-- POWER BI CARD -->

        <div class="powerbi-card">

            <div class="powerbi-container">

                <iframe
                    title="PERLIS TOURISM SMART PORTAL WITH INTERACTIVE ANALYTICS DASHBOARD"
                    src="https://app.powerbi.com/reportEmbed?reportId=2694ffe5-063c-4998-9adb-57f516af8449&autoAuth=true&ctid=221e8880-f1b1-41cd-8221-56d4277e4ffc"
                    frameborder="0"
                    allowfullscreen="true">
                </iframe>


            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER
====================================================== -->

<?php include("footer.php"); ?>



<!-- =====================================================
     BOOTSTRAP JAVASCRIPT
====================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>