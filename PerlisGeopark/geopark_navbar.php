<?php

/*
|--------------------------------------------------------------------------
| PERLIS GEOPARK NAVBAR
|--------------------------------------------------------------------------
|
| $geoparkBase tells the navbar where the geopark folder is located
| relative to the CURRENT PAGE.
|
| Examples:
|
| geopark/perlis_geopark.php
|       $geoparkBase = "";
|
| geopark/info_umum/pengenalan.php
|       $geoparkBase = "../";
|
| geopark/tapak_warisan/geologi.php
|       $geoparkBase = "../";
|
| geopark/tapak_warisan/budaya/ketara.php
|       $geoparkBase = "../../";
|
|--------------------------------------------------------------------------
*/

$geoparkBase = $geoparkBase ?? "";

?>


<!-- =========================================================
     GOOGLE FONT
========================================================= -->

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
             MOBILE BUTTON
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
             MENU
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


                        <!-- PENGENALAN -->

                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>info_umum/pengenalan.php"
                            >

                                <i class="bi bi-book me-2"></i>

                                Pengenalan

                            </a>

                        </li>


                        <!-- TADBIR URUS -->

                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>info_umum/tadbir_urus.php"
                            >

                                <i class="bi bi-diagram-3-fill me-2"></i>

                                Tadbir Urus

                            </a>

                        </li>


                        <!-- LOGO -->

                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>info_umum/logo.php"
                            >

                                <i class="bi bi-image-fill me-2"></i>

                                Logo Perlis Geopark

                            </a>

                        </li>


                        <!-- RAKAN STRATEGIK -->

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


                        <!-- =================================================
                             GEOLOGI
                        ================================================== -->

                        <li>

                            <a
                                class="dropdown-item"
                                href="<?php echo $geoparkBase; ?>tapak_warisan/geologi.php"
                            >

                                <i class="bi bi-mountains me-2"></i>

                                Geologi

                            </a>

                        </li>


                        <!-- =================================================
                             BIOLOGI
                        ================================================== -->

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
                             BUDAYA
                        ================================================== -->

                        <li class="dropdown-submenu">

                            <a
                                class="dropdown-item dropdown-toggle"
                                href="#"
                                role="button"
                            >

                                <i class="bi bi-bank2 me-2"></i>

                                Budaya

                            </a>


                            <ul class="dropdown-menu">


                                <!-- BUDAYA KETARA -->

                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="<?php echo $geoparkBase; ?>tapak_warisan/budaya/ketara.php"
                                    >

                                        <i class="bi bi-building me-2"></i>

                                        Budaya Ketara

                                    </a>

                                </li>


                                <!-- BUDAYA TIDAK KETARA -->

                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="<?php echo $geoparkBase; ?>tapak_warisan/budaya/tidak_ketara.php"
                                    >

                                        <i class="bi bi-music-note-beamed me-2"></i>

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


                        <!-- PENERBITAN -->

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
     NAVBAR CSS
========================================================= -->

<style>


/* =========================================================
   GEOPARK NAVBAR
========================================================= */

.geopark-navbar {

    background:
        linear-gradient(
            90deg,
            #14532d 0%,
            #198754 50%,
            #0f766e 100%
        ) !important;

    position: relative;

    z-index: 9999;

}


/* =========================================================
   LOGO
========================================================= */

.geopark-navbar .navbar-brand {

    font-family: 'Inter', sans-serif;

    color: white;

    font-size: 1.25rem;

    font-weight: 700;

    letter-spacing: .5px;

    white-space: nowrap;

}


.geopark-navbar .navbar-brand i {

    color: #FFD700;

    margin-right: 5px;

}


/* =========================================================
   NAVBAR LINKS
========================================================= */

.geopark-navbar .nav-link {

    color: white !important;

    font-weight: 500;

    transition: .3s;

    padding: 12px 10px;

}


.geopark-navbar .nav-link:hover {

    color: #FFD700 !important;

}


.geopark-navbar .nav-link i {

    margin-right: 4px;

}


/* =========================================================
   DROPDOWN MENU
========================================================= */

.geopark-navbar .dropdown-menu {

    border: none;

    border-radius: 10px;

    padding: 8px 0;

    box-shadow:
        0 8px 25px rgba(0,0,0,.15);

    z-index: 10000;

}


.geopark-navbar .dropdown-item {

    padding: 10px 18px;

    font-size: 14px;

    color: #333;

    transition: .2s;

}


.geopark-navbar .dropdown-item:hover {

    background: #e8f5e9;

    color: #198754;

}


/* =========================================================
   BUDAYA SUBMENU
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
   MOBILE NAVBAR
========================================================= */

.geopark-navbar .navbar-toggler {

    border: 1px solid rgba(255,255,255,.5);

}


.geopark-navbar .navbar-toggler:focus {

    box-shadow: none;

}


.geopark-navbar .navbar-toggler-icon {

    filter: brightness(0) invert(1);

}


/* =========================================================
   MOBILE DROPDOWN
========================================================= */

@media (max-width: 991px) {


    .geopark-navbar .navbar-collapse {

        padding: 15px 0;

    }


    .geopark-navbar .nav-link {

        padding: 10px 5px;

    }


    .geopark-navbar .dropdown-menu {

        position: static !important;

        margin-left: 10px;

        width: calc(100% - 20px);

        box-shadow: none;

        border-radius: 6px;

    }


    .dropdown-submenu > .dropdown-menu {

        position: static !important;

        display: block;

        margin-left: 15px;

        width: calc(100% - 15px);

        box-shadow: none;

        border-left: 3px solid #198754;

        border-radius: 0;

    }


    .dropdown-submenu > .dropdown-toggle {

        color: #333 !important;

    }


}


/* =========================================================
   SMALL SCREEN
========================================================= */

@media (max-width: 575px) {


    .geopark-navbar .navbar-brand {

        font-size: 1rem;

    }


    .geopark-navbar .navbar-brand i {

        font-size: 18px;

    }


}

</style>