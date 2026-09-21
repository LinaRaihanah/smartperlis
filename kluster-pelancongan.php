<?php

include("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kluster Jejak Pelancongan</title>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>

<style>

:root {
    --perlis-blue: #0057A8;
    --perlis-dark-blue: #003F7D;
    --perlis-yellow: #FFD700;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    color: #444;
    background: #fff;
}


/* ==============================
   SAME NAVBAR STYLE
============================== */

.navbar {
    background: rgba(0, 63, 125, 0.80) !important;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.40);
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

.navbar-nav .nav-link i {
    display: block;
    margin-bottom: 3px;
}


/* PROFILE HOVER */

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


/* ==============================
   CONTENT
============================== */

.page-content {
    padding-top: 125px;
    padding-bottom: 70px;
    min-height: 100vh;
}

.page-title {
    text-align: center;
    margin-bottom: 45px;
    color: #8d3b92;
    font-family: 'Comic Sans MS', 'Trebuchet MS', cursive;
    font-size: 42px;
    font-weight: 700;
    text-shadow: 2px 2px 3px rgba(0,0,0,.15);
}

.cluster-container {
    max-width: 1150px;
    margin: auto;
}


/* ==============================
   CLUSTER SECTION
============================== */

.cluster-container {
    max-width: 1018px;
    margin: auto;
}

.cluster-item {
    margin: 0;
    padding: 0;
}

.cluster-box {
    display: flex;
    align-items: stretch;
    width: 100%;
    min-height: 270px;
    padding: 18px;
}

.cluster-item:nth-of-type(odd) .cluster-box {
    background: #aebbc6;
}

.cluster-item:nth-of-type(even) .cluster-box {
    background: #84c9f1;
}

.cluster-content {
    flex: 1;
    padding: 0 22px 0 35px;
}

.cluster-title {
    color: #505050;
    font-size: 1.28rem;
    font-style: italic;
    font-weight: 700;
    margin: 0 0 12px;
}

.cluster-text {
    color: #4f5961;
    font-size: 1rem;
    line-height: 1.85;
    text-align: justify;
    margin: 0;
}

.cluster-image-wrapper {
    flex: 0 0 36%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 0;
}

.cluster-image {
    width: 100%;
    max-width: 350px;
    height: 195px;
    object-fit: cover;
    display: block;
    border-radius: 0;
    box-shadow: none;
}

.cluster-image-grid {
    flex: 0 0 36%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    padding: 0;
    align-content: center;
}

.cluster-image-grid img {
    width: 100%;
    height: 130px;
    object-fit: cover;
    border: 3px solid rgba(255,255,255,.55);
}

.image-credit {
    display: none;
}

.cluster-divider {
    display: none;
}

.cluster-item:nth-of-type(even) .cluster-box {
    flex-direction: row-reverse;
}

.cluster-item:nth-of-type(even) .cluster-content {
    padding-left: 22px;
    padding-right: 35px;
}

/* ==============================
   SHARE
============================== */

.share-section {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 20px;
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


/* ==============================
   FOOTER
============================== */

footer {
    background: var(--perlis-dark-blue);
    color: white;
    border-top: 4px solid var(--perlis-yellow);
}

footer a {
    color: rgba(255,255,255,.7);
    text-decoration: none;
}

footer a:hover {
    color: var(--perlis-yellow);
}


/* ==============================
   MOBILE
============================== */

@media(max-width: 768px) {

    .page-content {
        padding-top: 115px;
    }

    .page-title {
        font-size: 30px;
        margin-bottom: 20px;
    }

    .cluster-box,
    .cluster-item:nth-of-type(even) .cluster-box {
        flex-direction: column;
        padding: 18px;
    }

    .cluster-content,
    .cluster-item:nth-of-type(even) .cluster-content {
        padding: 0;
    }

    .cluster-title {
        font-size: 1.1rem;
    }

    .cluster-text {
        font-size: .93rem;
        line-height: 1.7;
    }

    .cluster-image-wrapper,
    .cluster-image-grid {
        flex-basis: auto;
        width: 100%;
        margin-top: 15px;
    }

    .cluster-image {
        max-width: 100%;
        height: 180px;
    }

    .cluster-image-grid img {
        height: 105px;
    }
}

</style>

</head>

<body>


<!-- ==============================
     NAVBAR
============================== -->

<nav class="navbar navbar-expand-lg navbar-dark">

<div class="container">

<a
    href="index.php"
    class="navbar-brand fw-bold"
>
    <i class="bi bi-geo-alt-fill"></i>
    Smart Perlis Tourism Portal
</a>


<button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#mainMenu"
>
    <span class="navbar-toggler-icon"></span>
</button>


<div
    class="collapse navbar-collapse"
    id="mainMenu"
>

<ul class="navbar-nav ms-auto">


<li class="nav-item">

<a
    class="nav-link"
    href="index.php"
>
    <i class="bi bi-house-fill"></i>
    Home
</a>

</li>


<li class="nav-item dropdown profile-dropdown">

<a
    class="nav-link active"
    href="#"
>
    <i class="bi bi-person-fill"></i>
    Profile
</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item" href="negeri-perlis.php">
    Negeri Perlis
</a>
</li>

<li>
<a class="dropdown-item" href="visit-perlis.php">
    Logo Visit Perlis
</a>
</li>

<li>
<a class="dropdown-item" href="kluster-pelancongan.php">
    Kluster Pelancongan
</a>
</li>

</ul>

</li>


<li class="nav-item">
<a class="nav-link" href="destinations.php">
    <i class="bi bi-geo-alt-fill"></i>
    Destinations
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="events.php">
    <i class="bi bi-calendar-event-fill"></i>
    Events
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="analytics.php">
    <i class="bi bi-bar-chart-fill"></i>
    Analytics
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="map.php">
    <i class="bi bi-map-fill"></i>
    Map
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="contact.php">
    <i class="bi bi-envelope-fill"></i>
    Contact
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="gallery.php">
    <i class="bi bi-images"></i>
    Gallery
</a>
</li>


</ul>

</div>

</div>

</nav>


<!-- ==============================
     KLUSTER CONTENT
============================== -->

<main class="page-content">

<div class="container cluster-container">

<h1 class="page-title">KLUSTER JEJAK PELANCONGAN</h1>

<!-- 1 -->
<section class="cluster-item">
<div class="cluster-box">
    <div class="cluster-content">
        <h2 class="cluster-title">1. Jejak Pelancongan Eko</h2>
        <p class="cluster-text">
            Cadangan pembangunan pelancongan eko memfokuskan pembangunan produk-produk ekologi yang berasaskan sumberjaya semulajadi. Pembangunan akan menekankan kepentingan mewujudkan pembangunan produk-produk pelancongan eko yang lestari dan memberi impak yang rendah kepada alam semulajadi dengan menerapkan usaha-usaha pemuliharaan dan pemeliharaan yang mampan.
        </p>
    </div>
    <div class="cluster-image-wrapper">
        <img src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Gua_Kelam_-_Perlis%2C_Malaysia.jpg" alt="Jejak Pelancongan Eko" class="cluster-image" loading="lazy">
    </div>
</div>
</section>

<!-- 2 -->
<section class="cluster-item">
<div class="cluster-box">
    <div class="cluster-content">
        <h2 class="cluster-title">2. Jejak Pelancongan Membeli Belah dan Makanan</h2>
        <p class="cluster-text">
            Membeli-belah mendorong perjalanan melancong. Ia merupakan sumber lanskap ekonomi negara kerana industri - belan mempercepatkan pembangunan dan merealisasikan aspirasi negara. Konsep pembangunan membeli-belah harus menjurus kepada konsep ‘perniagaan sempadan’ yang merangkumi kawasan Padang Besar selaras dengan cadangan yang digariskan di dalam Draf Rancangan Tempatan Majlis Perbandaran Kangar Perlis 2035 (Penggantian) untuk Padang Besar sebagai ‘Bandar Sempadan’. Cadangan untuk mengetengahkan produk pelancongan berasaskan makanan (gastronomic tourism) juga sangat penting bagi menarik pelancong yang mementingkan keunikan makanan negara yang dilawati. Pelancongan makanan adalah penerokaan makanan sebagai tujuan pelancongan.
        </p>
    </div>
    <div class="cluster-image-grid">
        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?auto=format&fit=crop&w=500&q=80" alt="Makanan Perlis" loading="lazy">
        <img src="https://images.unsplash.com/photo-1553279768-865429fa0078?auto=format&fit=crop&w=500&q=80" alt="Buah-buahan" loading="lazy">
        <img src="https://images.unsplash.com/photo-1562565652-a0d8f0c59eb4?auto=format&fit=crop&w=500&q=80" alt="Makanan" loading="lazy">
        <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?auto=format&fit=crop&w=500&q=80" alt="Hidangan makanan" loading="lazy">
    </div>
</div>
</section>

<!-- 3 -->
<section class="cluster-item">
<div class="cluster-box">
    <div class="cluster-content">
        <h2 class="cluster-title">3. Jejak Pelancongan Agro</h2>
        <p class="cluster-text">
            Pelancongan agro adalah konsep pelancongan yang semakin popular di Malaysia yang menawarkan pelbagai jenis aktiviti berkait rapat dengan sektor pertanian. Cadangan pembangunan pelancongan agro menekankan aspek pembangunan produk-produk agro di Negeri Perlis yang kaya dengan pelbagai aktiviti-aktiviti pertanian seperti penanaman, penternakan, perikanan dan industri asas tani. Selain itu, guna tanah pertanian merupakan guna tanah terbesar di Negeri Perlis membuktikan bahawa pembangunan pelancongan agro sememangnya sesuai dan berpotensi untuk dibangunkan di negeri ini.
        </p>
    </div>
    <div class="cluster-image-wrapper">
        <img src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Padi_Field_in_Kangar%2C_Perlis_%285834859142%29.jpg" alt="Jejak Pelancongan Agro" class="cluster-image" loading="lazy">
    </div>
</div>
</section>

<!-- 4 -->
<section class="cluster-item">
<div class="cluster-box">
    <div class="cluster-content">
        <h2 class="cluster-title">4. Jejak Pelancongan Sejarah, Warisan, Seni dan Budaya</h2>
        <p class="cluster-text">
            Pelancongan warisan merupakan satu bentuk pelancongan untuk melihat segala khazanah warisan yang diwarisi daripada generasi terdahulu seperti sejarah, kebudayaan, kesenian, alam semulajadi, artifak dan lain lain. Swarbrooke (1994) mendefinisikan pelancongan warisan sebagai pelancongan berasaskan warisan, di mana warisan itu sendiri adalah tunjang utama bagi produk yang ditawarkan, dan warisan adalah faktor motivasi (penggalak) utama kepada pelawat atau pelancong.
        </p>
    </div>
    <div class="cluster-image-wrapper">
        <img src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Perlis_State_Mosque.jpg" alt="Sejarah Warisan Seni dan Budaya Perlis" class="cluster-image" loading="lazy">
    </div>
</div>
</section>

<!-- 5 -->
<section class="cluster-item">
<div class="cluster-box">
    <div class="cluster-content">
        <h2 class="cluster-title">5. Jejak Pelancongan Sukan dan Rekreasi</h2>
        <p class="cluster-text">
            Pelancongan sukan dan rekreasi merupakan salah satu cabang di dalam industri pelancongan di sesuatu kawasan dan ianya merujuk kepada individu yang melancong ke sesuatu destinasi bertujuan untuk menyertai ataupun menghayati pelbagai acara sukan. Pembangunan pelancongan sukan dan rekreasi perlu menekankan aspek pembangunan produk-produk pelancongan sukan dan rekreasi dari segi kemudahan-kemudahan asas dan kemudahan sokongan di dalam menarik pelancong untuk melancong ke Negeri Perlis.
        </p>
    </div>
    <div class="cluster-image-wrapper">
        <img src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Taman_rekreasi_Bukit_Ayer_Perlis.jpg" alt="Jejak Pelancongan Sukan dan Rekreasi" class="cluster-image" loading="lazy">
    </div>
</div>

<div class="share-section">
    <button type="button" class="share-button" onclick="sharePage()" title="Kongsi">
        <i class="bi bi-share-fill"></i>
    </button>
    <a class="facebook-button" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-facebook"></i>
    </a>
</div>
</section>

</div>
</main>


<!-- ==============================
     FOOTER
============================== -->

<footer class="pt-5 pb-4">

<div class="container">

<div class="row g-4">


<div class="col-md-6">

<h5 class="fw-bold">

<i
    class="bi bi-geo-alt-fill"
    style="color:#FFD700;"
></i>

Smart Perlis Tourism Portal

</h5>

<p class="text-white-50">
    Smart Perlis Tourism Portal is an interactive platform
    to explore destinations, events and tourism information
    in Perlis.
</p>

</div>


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


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


<script>

function sharePage() {

    if (navigator.share) {

        navigator.share({
            title: 'Kluster Jejak Pelancongan',
            text: 'Kluster Jejak Pelancongan Perlis',
            url: window.location.href
        });

    } else {

        navigator.clipboard.writeText(
            window.location.href
        );

        alert('Link halaman telah disalin.');

    }

}

</script>

</body>
</html>
