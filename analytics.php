
<?php
// =====================================================
// PERLIS TOURISM SMART PORTAL
// TOURISM ANALYTICS DASHBOARD
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

<!-- BOOTSTRAP -->
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

<!-- BOOTSTRAP ICONS -->
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>

<!-- GOOGLE FONT -->
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>

<!-- WEBSITE CSS -->
<link
    rel="stylesheet"
    href="assets/css/style.css"
>

<style>

/* =========================================
   GENERAL
========================================= */

body {
    margin: 0;
    padding: 0;
    background: #f5f8fc;
    font-family: 'Inter', sans-serif;
    color: #1f2937;
}

/* =========================================
   ADMIN NAVBAR
========================================= */

.analytics-navbar {
    background: #0057B8 !important;
    padding: 15px 0;
    position: relative;
    width: 100%;
    min-height: 70px;
    box-shadow: none;
    border: none;
}

.analytics-navbar .navbar-brand {
    color: white !important;
    font-size: 19px;
    font-weight: 600;
    text-decoration: none;
}

.analytics-navbar .navbar-brand i {
    color: #FFD700;
    font-size: 24px;
    margin-right: 8px;
}

/* =========================================
   DASHBOARD BUTTON
========================================= */

.dashboard-btn {
    background: white;
    color: #111827;
    border: 1px solid #e5e7eb;
    border-radius: 7px;
    padding: 9px 16px;
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;
    transition: 0.3s;
}

.dashboard-btn:hover {
    background: #FFF3B0;
    color: #0057B8;
    border-color: #FFD700;
}

.dashboard-btn i {
    margin-right: 5px;
}

/* =========================================
   ANALYTICS MAIN SECTION
========================================= */

.analytics-section {
    padding: 55px 0 70px;
}

/* =========================================
   ANALYTICS HEADER CARD
========================================= */

.analytics-header-card {
    background: white;
    border-top: 5px solid #FFD700;
    border-radius: 14px;
    padding: 35px 25px;
    text-align: center;
    box-shadow: 0 5px 18px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}

.analytics-header-card h1 {
    font-size: 2.5rem;
    font-weight: 800;
    color: #0057B8;
    margin-bottom: 12px;
}

.analytics-header-card h1 i {
    color: #FFD700;
    margin-right: 8px;
}

.analytics-header-card p {
    color: #6b7280;
    font-size: 15px;
    margin-bottom: 0;
}

/* =========================================
   ANALYTICS INFORMATION CARDS
========================================= */

.analytics-info-card {
    background: white;
    border-radius: 14px;
    padding: 28px 20px;
    text-align: center;
    height: 100%;
    box-shadow: 0 5px 18px rgba(0,0,0,0.07);
    transition: 0.3s;
    border-bottom: 4px solid #FFD700;
}

.analytics-info-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.analytics-icon {
    width: 65px;
    height: 65px;
    background: #fff8cc;
    color: #0057B8;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 18px;
    font-size: 30px;
}

.analytics-info-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #003F7D;
    margin-bottom: 10px;
}

.analytics-info-card p {
    font-size: 14px;
    color: #6b7280;
    line-height: 1.7;
    margin-bottom: 0;
}

/* =========================================
   POWER BI SECTION
========================================= */

.powerbi-section {
    margin-top: 35px;
}

/* =========================================
   POWER BI CARD
========================================= */

.powerbi-card {
    background: white;
    border-radius: 16px;
    padding: 25px;
    border-top: 5px solid #FFD700;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

/* =========================================
   POWER BI HEADING
========================================= */

.powerbi-heading {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 10px;
}

.powerbi-heading i {
    font-size: 28px;
    color: #0057B8;
}

.powerbi-heading h2 {
    font-size: 1.7rem;
    font-weight: 700;
    color: #003F7D;
    margin: 0;
}

.powerbi-description {
    font-size: 14px;
    color: #6b7280;
    margin-bottom: 25px;
}

/* =========================================
   POWER BI CONTAINER
========================================= */

.powerbi-container {
    position: relative;
    width: 100%;
    height: 78vh;
    min-height: 650px;
    overflow: hidden;
    border-radius: 12px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
}

/* =========================================
   POWER BI IFRAME
========================================= */

.powerbi-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
}

/* =========================================
   DASHBOARD FOOTER TEXT
========================================= */

.analytics-note {
    margin-top: 18px;
    font-size: 13px;
    color: #6b7280;
    text-align: center;
}

.analytics-note i {
    color: #0057B8;
}

/* =========================================
   MOBILE RESPONSIVE
========================================= */

@media (max-width: 768px) {

    .analytics-navbar {
        padding: 12px 0;
    }

    .analytics-navbar .navbar-brand {
        font-size: 13px;
        max-width: 65%;
        white-space: normal;
    }

    .analytics-navbar .navbar-brand i {
        font-size: 17px;
    }

    .dashboard-btn {
        font-size: 12px;
        padding: 8px 10px;
    }

    .analytics-section {
        padding: 30px 0 45px;
    }

    .analytics-header-card {
        padding: 28px 15px;
    }

    .analytics-header-card h1 {
        font-size: 1.8rem;
    }

    .analytics-info-card {
        padding: 22px 15px;
    }

    .powerbi-card {
        padding: 15px;
    }

    .powerbi-heading h2 {
        font-size: 1.3rem;
    }

    .powerbi-container {
        height: 650px;
        min-height: 650px;
    }

}

</style>

</head>

<body>

<!-- =========================================
     ADMIN DASHBOARD NAVBAR
========================================= -->

<nav class="navbar navbar-dark analytics-navbar">

    <div class="container-fluid px-3 px-lg-5">

        <!-- WEBSITE NAME -->
        <a
            href="index.php"
            class="navbar-brand"
        >

            <i class="bi bi-geo-alt-fill"></i>

            PERLIS TOURISM SMART PORTAL

        </a>

        <!-- DASHBOARD BUTTON -->
        <a
            href="admin/dashboard.php"
            class="btn dashboard-btn"
        >

            <i class="bi bi-speedometer2"></i>

            Dashboard

        </a>

    </div>

</nav>


<!-- =========================================
     ANALYTICS MAIN SECTION
========================================= -->

<section class="analytics-section">

<div class="container-fluid px-3 px-lg-5">

<!-- =========================================
     ANALYTICS HEADER
========================================= -->

<div class="analytics-header-card">

    <h1>

        <i class="bi bi-bar-chart-line-fill"></i>

        Tourism Analytics Dashboard

    </h1>

    <p>

        Explore tourism trends, visitor patterns and
        data-driven insights for Perlis Tourism.

    </p>

</div>


<!-- =========================================
     ANALYTICS INFORMATION CARDS
========================================= -->

<div class="row g-4">

<!-- VISITOR PATTERNS -->
<div class="col-lg-4 col-md-6">

    <div class="analytics-info-card">

        <div class="analytics-icon">

            <i class="bi bi-people-fill"></i>

        </div>

        <h4>
            Visitor Patterns
        </h4>

        <p>

            Explore visitor trends and patterns
            to better understand tourism activity
            in Perlis.

        </p>

    </div>

</div>


<!-- DESTINATION INSIGHTS -->
<div class="col-lg-4 col-md-6">

    <div class="analytics-info-card">

        <div class="analytics-icon">

            <i class="bi bi-geo-alt-fill"></i>

        </div>

        <h4>
            Destination Insights
        </h4>

        <p>

            Analyse tourism destinations
            and discover insights into
            popular attractions in Perlis.

        </p>

    </div>

</div>


<!-- TOURISM TRENDS -->
<div class="col-lg-4 col-md-12">

    <div class="analytics-info-card">

        <div class="analytics-icon">

            <i class="bi bi-graph-up-arrow"></i>

        </div>

        <h4>
            Tourism Trends
        </h4>

        <p>

            Understand tourism trends
            and explore insights that support
            tourism planning and development.

        </p>

    </div>

</div>

</div>


<!-- =========================================
     POWER BI DASHBOARD
========================================= -->

<section class="powerbi-section">

<div class="powerbi-card">

    <!-- POWER BI TITLE -->
    <div class="powerbi-heading">

        <i class="bi bi-bar-chart-fill"></i>

        <h2>
            Interactive Power BI Dashboard
        </h2>

    </div>

    <p class="powerbi-description">

        Explore interactive tourism visualisations,
        visitor patterns, destination insights and
        tourism trends using Microsoft Power BI.

    </p>


    <!-- POWER BI EMBED -->
    <div class="powerbi-container">

        <iframe
            title="PERLIS TOURISM SMART PORTAL WITH INTERACTIVE ANALYTICS DASHBOARD"
            src="https://app.powerbi.com/reportEmbed?reportId=2694ffe5-063c-4998-9adb-57f516af8449&autoAuth=true&ctid=221e8880-f1b1-41cd-8221-56d4277e4ffc"
            frameborder="0"
            allowfullscreen="true">
        </iframe>

    </div>


    <!-- NOTE -->
    <p class="analytics-note">

        <i class="bi bi-info-circle-fill"></i>

        Tourism data is visualised through
        the integrated Microsoft Power BI dashboard.

    </p>

</div>

</section>

</div>

</section>


<!-- =========================================
     FOOTER
========================================= -->

<?php include("footer.php"); ?>


<!-- =========================================
     BOOTSTRAP JAVASCRIPT
========================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>
