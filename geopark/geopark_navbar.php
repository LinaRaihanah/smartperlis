<?php

$geoparkBase = $geoparkBase ?? "";

?>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>


<!-- =========================================================
     PERLIS GEOPARK NAVBAR
========================================================= -->

<nav class="navbar navbar-expand-lg geopark-navbar shadow">

    <div class="container">


        <!-- =================================================
             LOGO
        ================================================== -->

        <a
            class="navbar-brand fw-bold"
            href="<?php echo $geoparkBase; ?>perlis_geopark.php"
        >

            <i class="bi bi-globe-asia-australia-fill"></i>

            PERLIS GEOPARK

        </a>



        <!-- =================================================
             MOBILE TOGGLE
        ================================================== -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#geoparkNavbar"
            aria-controls="geoparkNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <span class="navbar-toggler-icon"></span>

        </button>



        <!-- =================================================
             NAVIGATION
        ================================================== -->

        <div
            class="collapse navbar-collapse"
            id="geoparkNavbar"
        >

            <ul class="navbar-nav ms-auto">


                <!-- =================================================
                     UTAMA
                ================================================== -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="<?php echo $geoparkBase; ?>perlis_geopark.php"
                    >

                        <i class="bi bi-house-fill"></i>

                        Utama

                    </a>

                </li>



                <!-- =================================================
                     INFO UMUM
                ================================================== -->

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >

                        <i class="bi bi-info-circle-fill"></i>

                        Info Umum

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>info_umum/pengenalan.php"
                            >

                                <i class="bi bi-book me-2"></i>

                                Pengenalan

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>info_umum/tadbir_urus.php"
                            >

                                <i class="bi bi-diagram-3-fill me-2"></i>

                                Tadbir Urus

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>info_umum/logo.php"
                            >

                                <i class="bi bi-image-fill me-2"></i>

                                Logo Perlis Geopark

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>info_umum/rakan_strategik.php"
                            >

                                <i class="bi bi-people-fill me-2"></i>

                                Rakan Strategik

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     TAPAK WARISAN
                ================================================== -->

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >

                        <i class="bi bi-tree-fill"></i>

                        Tapak Warisan

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>tapak_warisan/geologi.php"
                            >

                                <i class="bi bi-mountains me-2"></i>

                                Geologi

                            </a>

                        </li>


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>tapak_warisan/biologi.php"
                            >

                                <i class="bi bi-flower1 me-2"></i>

                                Biologi

                            </a>

                        </li>


                        <!-- =================================================
                             BUDAYA SUBMENU
                        ================================================== -->

                        <li class="dropdown-submenu">

                            <a
                                class="dropdown-item dropdown-toggle"
                                href="#"
                            >

                                <i class="bi bi-bank2 me-2"></i>

                                Budaya

                            </a>


                            <ul class="dropdown-menu">


                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="<?php echo $geoparkBase; ?>tapak_warisan/budaya/ketara.php"
                                    >

                                        Budaya Ketara

                                    </a>

                                </li>


                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="<?php echo $geoparkBase; ?>tapak_warisan/budaya/tidak_ketara.php"
                                    >

                                        Budaya Tidak Ketara

                                    </a>

                                </li>


                            </ul>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     KALENDAR
                ================================================== -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="<?php echo $geoparkBase; ?>kalendar/kalendar.php"
                    >

                        <i class="bi bi-calendar-event-fill"></i>

                        Kalendar

                    </a>

                </li>



                <!-- =================================================
                     MEDIA
                ================================================== -->

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >

                        <i class="bi bi-camera-fill"></i>

                        Media

                    </a>


                    <ul class="dropdown-menu">


                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>media/penerbitan.php"
                            >

                                <i class="bi bi-file-earmark-text-fill me-2"></i>

                                Penerbitan

                            </a>

                        </li>


                    </ul>

                </li>



                <!-- =================================================
                     HUBUNGI KAMI
                ================================================== -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="<?php echo $geoparkBase; ?>hubungi/hubungi_geopark.php"
                    >

                        <i class="bi bi-envelope-fill"></i>

                        Hubungi Kami

                    </a>

                </li>


            </ul>

        </div>

    </div>

</nav>



<!-- =========================================================
     PERLIS BLUE + YELLOW THEME
========================================================= -->

<style>


/* =========================================================
   MAIN NAVBAR
========================================================= */

.geopark-navbar {

    background:
        linear-gradient(
            90deg,
            #003B73 0%,
            #0057B8 55%,
            #0066CC 100%
        ) !important;

    position: relative;

    z-index: 9999;

}



/* =========================================================
   BRAND
========================================================= */

.geopark-navbar .navbar-brand {

    font-family: 'Inter', sans-serif;

    color: #FFFFFF;

    font-size: 1.25rem;

    font-weight: 800;

    letter-spacing: .5px;

    transition: .3s;

}


.geopark-navbar .navbar-brand i {

    color: #FFD700;

    margin-right: 5px;

}


.geopark-navbar .navbar-brand:hover {

    color: #FFD700;

}



/* =========================================================
   NAVIGATION LINKS
========================================================= */

.geopark-navbar .nav-link {

    color: #FFFFFF !important;

    font-weight: 600;

    padding-left: 12px !important;

    padding-right: 12px !important;

    transition: .3s;

}


.geopark-navbar .nav-link i {

    color: #FFD700;

    margin-right: 3px;

}


.geopark-navbar .nav-link:hover {

    color: #FFD700 !important;

}



/* =========================================================
   DROPDOWN
========================================================= */

.geopark-navbar .dropdown-menu {

    border: none;

    border-radius: 12px;

    padding: 8px 0;

    background: #FFFFFF;

    box-shadow:
        0 10px 30px rgba(0,0,0,.15);

    z-index: 10000;

}


.geopark-navbar .dropdown-item {

    padding: 10px 18px;

    font-size: 14px;

    font-weight: 500;

    color: #003B73;

    transition: .25s;

}


.geopark-navbar .dropdown-item i {

    color: #0057B8;

}


.geopark-navbar .dropdown-item:hover {

    background: #FFF8CC;

    color: #0057B8;

}



/* =========================================================
   SUBMENU
========================================================= */

.dropdown-submenu {

    position: relative;

}


.dropdown-submenu > .dropdown-menu {

    top: 0;

    left: 100%;

    margin-left: .1rem;

    display: none;

}


.dropdown-submenu:hover > .dropdown-menu {

    display: block;

}



/* =========================================================
   MOBILE TOGGLE
========================================================= */

.geopark-navbar .navbar-toggler {

    border: 1px solid rgba(255,255,255,.6);

}


.geopark-navbar .navbar-toggler:focus {

    box-shadow:
        0 0 0 3px rgba(255,215,0,.25);

}


.geopark-navbar .navbar-toggler-icon {

    filter: brightness(0) invert(1);

}



/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 991px) {

    .dropdown-submenu > .dropdown-menu {

        position: static;

        margin-left: 15px;

        box-shadow: none;

        border-left: 3px solid #FFD700;

    }

}

</style>