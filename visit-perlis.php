<?php

include("config.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>
Logo Visit Perlis 2024 - 2026
</title>


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

/* =========================================
   PERLIS COLOUR
========================================= */

:root {

    --perlis-blue: #0057A8;

    --perlis-dark-blue: #003F7D;

    --perlis-yellow: #FFD700;

    --perlis-light-yellow: #FFF8CC;

    --light-bg: #f7faf8;

}


/* =========================================
   GLOBAL
========================================= */

* {

    box-sizing: border-box;

}


body {

    font-family: 'Inter', sans-serif;

    background: var(--light-bg);

    color: #1f2937;

}


/* =========================================
   NAVBAR
========================================= */

.navbar {

    background: rgba(0, 63, 125, 0.80) !important;

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    z-index: 1000;

    box-shadow:
        0 8px 30px rgba(0, 0, 0, 0.40);

    backdrop-filter: blur(8px);

    min-height: 85px;

    border-bottom: 3px solid var(--perlis-yellow);

}


.navbar-brand {

    font-size: 1.25rem;

    letter-spacing: .5px;

}


.navbar-brand i {

    color: var(--perlis-yellow);

}


.navbar-nav .nav-link {

    color: rgba(255,255,255,.90);

    font-weight: 500;

    padding: 10px 16px !important;

    transition: .25s;

    text-align: center;

}


.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {

    color: var(--perlis-yellow);

}


/* ICON ATAS TEXT */

.navbar-nav .nav-link i {

    display: block;

    margin-bottom: 3px;

}


/* PROFILE HOVER DROPDOWN */

.profile-dropdown {

    position: relative;

}


.profile-dropdown .dropdown-menu {

    display: none;

    position: absolute;

    top: 100%;

    left: 0;

    margin-top: 0;

}


.profile-dropdown:hover .dropdown-menu {

    display: block;

}


/* =========================================
   PAGE CONTENT
========================================= */

.page-content {

    min-height: 100vh;

    padding-top: 125px;

    padding-bottom: 80px;

}


.visit-container {

    max-width: 1200px;

    margin: auto;

}


.page-title {

    text-align: center;

    color: #8d3b92;

    font-family: 'Comic Sans MS', 'Trebuchet MS', cursive;

    font-size: 42px;

    font-weight: 700;

    margin-bottom: 45px;

    text-shadow:
        2px 2px 3px rgba(0,0,0,.15);

}


.visit-content {

    background: white;

    border-radius: 20px;

    padding: 50px;

    box-shadow:
        0 8px 25px rgba(0,0,0,.08);

    border-top: 4px solid var(--perlis-yellow);

}


.logo-area {

    display: flex;

    justify-content: center;

    align-items: center;

    height: 100%;

}


.visit-logo {

    width: 100%;

    max-width: 500px;

    height: auto;

}


.info-item {

    margin-bottom: 30px;

}


.info-item h3 {

    font-size: 1.15rem;

    font-weight: 800;

    font-style: italic;

    color: #4b5563;

    margin-bottom: 8px;

}


.info-item p {

    color: #4b5563;

    font-size: 1rem;

    line-height: 1.8;

    margin-bottom: 0;

    text-align: justify;

}


.share-section {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-top: 10px;

}


.share-button {

    border: none;

    background: transparent;

    color: #2478e5;

    font-size: 30px;

    padding: 0;

    cursor: pointer;

}


.facebook-button {

    width: 38px;

    height: 38px;

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #2478e5;

    color: white;

    text-decoration: none;

    font-size: 22px;

}


.facebook-button:hover {

    background: #145db8;

    color: white;

}


/* =========================================
   FOOTER
========================================= */

footer {

    background: var(--perlis-dark-blue);

    color: white;

    border-top: 4px solid var(--perlis-yellow);

}


footer a {

    color: rgba(255,255,255,.7);

    text-decoration: none;

    transition: .25s;

}


footer a:hover {

    color: var(--perlis-yellow);

}


/* =========================================
   MOBILE
========================================= */

@media(max-width:768px) {

    .page-content {

        padding-top: 115px;

    }


    .page-title {

        font-size: 30px;

    }


    .visit-content {

        padding: 25px;

    }


    .logo-area {

        margin-bottom: 30px;

    }

}

</style>

</head>


<body>


<!-- =========================================
     PUBLIC NAVBAR
========================================= -->

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">

<div class="container">


<!-- LOGO -->

<a
    href="index.php"
    class="navbar-brand fw-bold"
>

<i class="bi bi-geo-alt-fill"></i>

Smart Perlis Tourism Portal

</a>


<!-- MOBILE BUTTON -->

<button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#mainMenu"
    aria-controls="mainMenu"
    aria-expanded="false"
    aria-label="Toggle navigation"
>

<span class="navbar-toggler-icon"></span>

</button>


<!-- PUBLIC MENU -->

<div
    class="collapse navbar-collapse"
    id="mainMenu"
>

<ul class="navbar-nav ms-auto">


<!-- HOME -->

<li class="nav-item">

<a
    class="nav-link"
    href="index.php"
>

<i class="bi bi-house-fill"></i>

Home

</a>

</li>


<!-- PROFILE -->

<li class="nav-item dropdown profile-dropdown">

<a
    class="nav-link active"
    href="#"
    id="profileDropdown"
>

<i class="bi bi-person-fill"></i>

Profile

</a>


<ul class="dropdown-menu">

<li>

<a
    class="dropdown-item"
    href="negeri-perlis.php"
>

Negeri Perlis

</a>

</li>


<li>

<a
    class="dropdown-item"
    href="visit-perlis.php"
>

Logo Visit Perlis

</a>

</li>


<li>

<a
    class="dropdown-item"
    href="kluster-pelancongan.php"
>

Kluster Pelancongan

</a>

</li>

</ul>

</li>


<!-- DESTINATIONS -->

<li class="nav-item">

<a
    class="nav-link"
    href="destinations.php"
>

<i class="bi bi-geo-alt-fill"></i>

Destinations

</a>

</li>


<!-- EVENTS -->

<li class="nav-item">

<a
    class="nav-link"
    href="events.php"
>

<i class="bi bi-calendar-event-fill"></i>

Events

</a>

</li>


<!-- ANALYTICS -->

<li class="nav-item">

<a
    class="nav-link"
    href="analytics.php"
>

<i class="bi bi-bar-chart-fill"></i>

Analytics

</a>

</li>


<!-- MAP -->

<li class="nav-item">

<a
    class="nav-link"
    href="map.php"
>

<i class="bi bi-map-fill"></i>

Map

</a>

</li>


<!-- CONTACT -->

<li class="nav-item">

<a
    class="nav-link"
    href="contact.php"
>

<i class="bi bi-envelope-fill"></i>

Contact

</a>

</li>


<!-- GALLERY -->

<li class="nav-item">

<a
    class="nav-link"
    href="gallery.php"
>

<i class="bi bi-images"></i>

Gallery

</a>

</li>


</ul>

</div>


</div>

</nav>


<!-- =========================================
     VISIT PERLIS CONTENT
========================================= -->

<main class="page-content">

<div class="container visit-container">


<h1 class="page-title">

LOGO VISIT PERLIS 2024 - 2026

</h1>


<div class="visit-content">

<div class="row g-5 align-items-center">


<!-- LOGO -->

<div class="col-lg-5">

<div class="logo-area">

<img
    src="assets/images/visit-perlis-logo.png"
    alt="Logo Visit Perlis 2024 - 2026"
    class="visit-logo"
>

</div>

</div>


<!-- INFORMATION -->

<div class="col-lg-7">


<div class="info-item">

<h3>
BUKIT CHABANG
</h3>

<p>
Antara ikon geografi utama bagi negeri Perlis.
</p>

</div>


<div class="info-item">

<h3>
IKAN DAN BUAH HARUMANIS
</h3>

<p>
Menggambarkan dua jenis makanan yang popular bagi Negeri Perlis iaitu
Ikan Bakar Kuala Perlis dan buah Harumanis. Ikon ikan ini turut
menggambarkan aktiviti perikanan yang merupakan antara sumber agro utama
Perlis.
</p>

</div>


<div class="info-item">

<h3>
BUNGA PADI
</h3>

<p>
Penanaman padi merupakan antara aktiviti pertanian utama bagi negeri
Perlis.
</p>

</div>


<div class="info-item">

<h3>
KEPELBAGAIAN WARNA
</h3>

<p>
Pelbagai warna digunakan dalam reka bentuk logo ini bagi menggambarkan
kepelbagaian serta keunikan produk-produk pelancongan negeri Perlis.
</p>

</div>


<!-- SHARE -->

<div class="share-section">

<button
    type="button"
    class="share-button"
    onclick="sharePage()"
    title="Kongsi"
>

<i class="bi bi-share-fill"></i>

</button>


<a
    class="facebook-button"
    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
    target="_blank"
    rel="noopener noreferrer"
    title="Kongsi ke Facebook"
>

<i class="bi bi-facebook"></i>

</a>

</div>


</div>

</div>

</div>

</div>

</main>


<!-- =========================================
     FOOTER
========================================= -->

<footer class="pt-5 pb-4">


<div class="container">


<div class="row g-4">


<!-- ABOUT -->

<div class="col-md-6">


<h5 class="fw-bold">


<i
    class="bi bi-geo-alt-fill"
    style="color:#FFD700;"
></i>


Smart Perlis Tourism Portal


</h5>


<p class="text-white-50">

Smart Perlis Tourism Portal is an
interactive platform to explore
destinations, events and tourism
information in Perlis.

</p>


</div>


<!-- QUICK LINKS -->

<div class="col-md-3">


<h6 class="fw-bold">

Quick Links

</h6>


<p>

<a href="destinations.php">

Destinations

</a>

</p>


<p>

<a href="events.php">

Events

</a>

</p>


<p>

<a href="gallery.php">

Gallery

</a>

</p>


</div>


<!-- INFORMATION -->

<div class="col-md-3">


<h6 class="fw-bold">

Information

</h6>


<p>

<a href="contact.php">

Contact Us

</a>

</p>


</div>


</div>


<hr class="border-secondary">


<div class="text-center text-white-50">

© 2026 Smart Perlis Tourism Portal

</div>


</div>

</footer>


<!-- =========================================
     BOOTSTRAP JS
========================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


<script>

function sharePage() {

    if (navigator.share) {

        navigator.share({

            title: 'Logo Visit Perlis 2024 - 2026',

            text: 'Logo Visit Perlis 2024 - 2026',

            url: window.location.href

        });

    }

    else {

        navigator.clipboard.writeText(
            window.location.href
        );

        alert(
            'Link halaman telah disalin.'
        );

    }

}

</script>


</body>

</html>
