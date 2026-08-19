<?php

include("config.php");

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
Transport - Smart Perlis Tourism Portal
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


<!-- Your CSS -->

<link
    rel="stylesheet"
    href="assets/css/style.css"
>


<style>

/* ================================= */
/* BODY */
/* ================================= */

body {

    background: #fefbea;

}


/* ================================= */
/* NAVBAR */
/* ================================= */

.navbar {

    background:
        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}


/* ================================= */
/* HEADER */
/* ================================= */

.transport-header {

    position: relative;

    background-image:
        linear-gradient(
            90deg,
            rgba(255,255,255,0.98) 0%,
            rgba(255,255,255,0.92) 40%,
            rgba(255,255,255,0.25) 100%
        ),
        url('assets/images/header.jpg');

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    min-height: 450px;

    padding: 60px 20px;

    display: flex;

    align-items: center;

    overflow: hidden;

}


/* ================================= */
/* HEADER CONTAINER */
/* ================================= */

.transport-header .container {

    position: relative;

    z-index: 2;

}


/* ================================= */
/* SMALL TITLE */
/* ================================= */

.transport-header .small-title {

    color: #f5b400;

    font-size: 16px;

    font-weight: 700;

    margin-bottom: 12px;

}


/* ================================= */
/* HEADER TITLE */
/* ================================= */

.transport-header h1 {

    color: #10233f;

    font-size: 3.5rem;

    font-weight: 800;

    line-height: 1.1;

    margin-bottom: 18px;

    text-align: left;

}


/* ================================= */
/* HEADER DESCRIPTION */
/* ================================= */

.transport-header p {

    color: #536174;

    font-size: 1.15rem;

    max-width: 520px;

    margin: 0;

    text-align: left;

}


/* ================================= */
/* CAR IMAGE */
/* ================================= */

.header-car {

    position: absolute;

    right: 4%;

    bottom: 15px;

    width: 480px;

    height: auto;

    object-fit: contain;

    z-index: 1;

    pointer-events: none;

}


/* ================================= */
/* AREA SECTION */
/* ================================= */

.area-section {

    padding: 70px 0 70px;

}


/* ================================= */
/* AREA SECTION TITLE */
/* ================================= */

.area-section-title {

    text-align: center;

    margin-bottom: 40px;

}


/* ================================= */
/* AREA TITLE */
/* ================================= */

.area-section-title h2 {

    color: #163b2a;

    font-weight: 800;

    font-size: 2.2rem;

    margin-bottom: 10px;

}


/* ================================= */
/* AREA DESCRIPTION */
/* ================================= */

.area-section-title p {

    color: #777;

    margin: 0;

}


/* ================================= */
/* AREA CARD */
/* ================================= */

.area-card {

    border: none;

    background: white;

    border-radius: 20px;

    padding: 30px 20px;

    height: 100%;

    text-align: center;

    box-shadow:
        0 8px 25px rgba(0,0,0,0.08);

    cursor: pointer;

    transition: all 0.3s ease;

    position: relative;

    overflow: visible;

}


/* ================================= */
/* TOP LINE */
/* ================================= */

.area-card::before {

    content: "";

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    height: 5px;

    background:
        linear-gradient(
            90deg,
            #FFD700,
            #F5C400,
            #0057B8
        );

}


/* ================================= */
/* CARD HOVER */
/* ================================= */

.area-card:hover {

    transform: translateY(-10px);

    box-shadow:
        0 18px 40px rgba(0,0,0,0.15);

}


/* ================================= */
/* AREA ICON */
/* ================================= */

.area-icon {

    width: 75px;

    height: 75px;

    margin: 0 auto 20px;

    border-radius: 20px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #e8f5ee;

    color: #198754;

    font-size: 34px;

    transition: 0.3s;

}


/* ================================= */
/* ICON HOVER */
/* ================================= */

.area-card:hover .area-icon {

    background: #198754;

    color: white;

    transform: scale(1.08);

}


/* ================================= */
/* AREA NAME */
/* ================================= */

.area-card h4 {

    font-weight: 700;

    color: #163b2a;

    margin-bottom: 8px;

}


/* ================================= */
/* AREA DESCRIPTION */
/* ================================= */

.area-card p {

    color: #777;

    font-size: 14px;

    margin-bottom: 20px;

}


/* ================================= */
/* EXPLORE BUTTON */
/* ================================= */

.area-select-btn {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 9px 18px;

    border-radius: 50px;

    background: #e8f5ee;

    color: #198754;

    font-size: 14px;

    font-weight: 600;

    text-decoration: none;

    transition: 0.3s;

    border: none;

    cursor: pointer;

}


/* ================================= */
/* BUTTON HOVER */
/* ================================= */

.area-card:hover .area-select-btn {

    background: #198754;

    color: white;

}


/* ================================= */
/* DROPDOWN */
/* ================================= */

.dropdown-container {

    position: relative;

    display: inline-block;

    z-index: 100;

}


.custom-dropdown {

    display: none;

    position: absolute;

    top: 50px;

    left: 50%;

    transform: translateX(-50%);

    min-width: 210px;

    background: white;

    border-radius: 12px;

    padding: 8px 0;

    box-shadow:
        0 10px 30px rgba(0,0,0,0.18);

    z-index: 9999;

}


.custom-dropdown.show {

    display: block;

}


.custom-dropdown a {

    display: block;

    padding: 12px 18px;

    color: #333;

    text-decoration: none;

    font-size: 14px;

    text-align: left;

}


.custom-dropdown a:hover {

    background: #e8f5ee;

    color: #198754;

}


/* ================================= */
/* MOBILE */
/* ================================= */

@media(max-width:768px) {

    .transport-header {

        min-height: 600px;

        padding: 50px 20px;

        align-items: flex-start;

    }


    .transport-header h1 {

        font-size: 2.5rem;

    }


    .transport-header p {

        font-size: 1rem;

    }


    .header-car {

        right: 50%;

        transform: translateX(50%);

        bottom: 20px;

        width: 330px;

    }


    .area-section {

        padding: 50px 0 40px;

    }

}

</style>

</head>


<body>


<?php include("navbar.php"); ?>


<!-- ================================= -->
<!-- HEADER -->
<!-- ================================= -->

<section class="transport-header">

    <div class="container">

        <div class="small-title">

            ✦ Easy Travel, Better Journey

        </div>


        <h1>

            Explore<br>

            Transport in Perlis

        </h1>


        <p>

            Find buses, trains, taxis and ferry services around Perlis

        </p>

    </div>


    <img
        src="assets/images/car.png"
        alt="Car"
        class="header-car"
    >

</section>



<!-- ================================= -->
<!-- AREA SELECTION -->
<!-- ================================= -->

<section class="area-section">

    <div class="container">


        <div class="area-section-title">

            <h2>

                Choose Your Area

            </h2>


            <p>

                Select an area to explore transportation services in Perlis.

            </p>

        </div>



        <div class="row g-4">



            <!-- KANGAR -->

            <div class="col-lg-3 col-md-6">

                <div
                    class="area-card"
                    onclick="openGoogleMaps('Kangar')"
                >

                    <div class="area-icon">

                        <i class="bi bi-building-fill"></i>

                    </div>


                    <h4>

                        Kangar

                    </h4>


                    <p>

                        Main city transport hub in Perlis

                    </p>


                    <div class="dropdown-container">

                        <button
                            class="area-select-btn"
                            type="button"
                            onclick="toggleDropdown(event, 'kangarDropdown')"
                        >

                            Explore

                            <i class="bi bi-chevron-down"></i>

                        </button>


                        <div
                            class="custom-dropdown"
                            id="kangarDropdown"
                        >

                            <a
                                href="#"
                                onclick="openTransportationMap(event, 'Kangar')"
                            >

                                <i class="bi bi-bus-front me-2"></i>

                                Transportation

                            </a>


                            <a
                                href="#"
                                onclick="openAccommodationMap(event, 'Kangar')"
                            >

                                <i class="bi bi-building me-2"></i>

                                Accommodation

                            </a>

                        </div>

                    </div>

                </div>

            </div>



            <!-- ARAU -->

            <div class="col-lg-3 col-md-6">

                <div
                    class="area-card"
                    onclick="openGoogleMaps('Arau')"
                >

                    <div class="area-icon">

                        <i class="bi bi-train-front-fill"></i>

                    </div>


                    <h4>

                        Arau

                    </h4>


                    <p>

                        Railway and local transport services

                    </p>


                    <div class="dropdown-container">

                        <button
                            class="area-select-btn"
                            type="button"
                            onclick="toggleDropdown(event, 'arauDropdown')"
                        >

                            Explore

                            <i class="bi bi-chevron-down"></i>

                        </button>


                        <div
                            class="custom-dropdown"
                            id="arauDropdown"
                        >

                            <a
                                href="#"
                                onclick="openTransportationMap(event, 'Arau')"
                            >

                                <i class="bi bi-bus-front me-2"></i>

                                Transportation

                            </a>


                            <a
                                href="#"
                                onclick="openAccommodationMap(event, 'Arau')"
                            >

                                <i class="bi bi-building me-2"></i>

                                Accommodation

                            </a>

                        </div>

                    </div>

                </div>

            </div>



            <!-- PADANG BESAR -->

            <div class="col-lg-3 col-md-6">

                <div
                    class="area-card"
                    onclick="openGoogleMaps('Padang Besar')"
                >

                    <div class="area-icon">

                        <i class="bi bi-bus-front-fill"></i>

                    </div>


                    <h4>

                        Padang Besar

                    </h4>


                    <p>

                        Railway, bus and border transport

                    </p>


                    <div class="dropdown-container">

                        <button
                            class="area-select-btn"
                            type="button"
                            onclick="toggleDropdown(event, 'padangBesarDropdown')"
                        >

                            Explore

                            <i class="bi bi-chevron-down"></i>

                        </button>


                        <div
                            class="custom-dropdown"
                            id="padangBesarDropdown"
                        >

                            <a
                                href="#"
                                onclick="openTransportationMap(event, 'Padang Besar')"
                            >

                                <i class="bi bi-bus-front me-2"></i>

                                Transportation

                            </a>


                            <a
                                href="#"
                                onclick="openAccommodationMap(event, 'Padang Besar')"
                            >

                                <i class="bi bi-building me-2"></i>

                                Accommodation

                            </a>

                        </div>

                    </div>

                </div>

            </div>



            <!-- KUALA PERLIS -->

            <div class="col-lg-3 col-md-6">

                <div
                    class="area-card"
                    onclick="openGoogleMaps('Kuala Perlis')"
                >

                    <div class="area-icon">

                        <i class="bi bi-water"></i>

                    </div>


                    <h4>

                        Kuala Perlis

                    </h4>


                    <p>

                        Ferry, bus and local transport services

                    </p>


                    <div class="dropdown-container">

                        <button
                            class="area-select-btn"
                            type="button"
                            onclick="toggleDropdown(event, 'kualaPerlisDropdown')"
                        >

                            Explore

                            <i class="bi bi-chevron-down"></i>

                        </button>


                        <div
                            class="custom-dropdown"
                            id="kualaPerlisDropdown"
                        >

                            <a
                                href="#"
                                onclick="openTransportationMap(event, 'Kuala Perlis')"
                            >

                                <i class="bi bi-bus-front me-2"></i>

                                Transportation

                            </a>


                            <a
                                href="#"
                                onclick="openAccommodationMap(event, 'Kuala Perlis')"
                            >

                                <i class="bi bi-building me-2"></i>

                                Accommodation

                            </a>

                        </div>

                    </div>

                </div>

            </div>


        </div>


    </div>

</section>



<!-- ================================= -->
<!-- JAVASCRIPT -->
<!-- ================================= -->

<script>


function openGoogleMaps(area) {

    var googleURL =

        "https://www.google.com/maps/search/?api=1&query="

        +

        encodeURIComponent(

            area + ", Perlis"

        );


    window.open(

        googleURL,

        "_blank"

    );

}



function toggleDropdown(

    event,

    dropdownId

) {

    event.stopPropagation();


    var dropdown =

        document.getElementById(

            dropdownId

        );


    dropdown.classList.toggle(

        "show"

    );

}



document.addEventListener(

    "click",

    function() {

        var dropdowns =

            document.querySelectorAll(

                ".custom-dropdown"

            );


        dropdowns.forEach(

            function(dropdown) {

                dropdown.classList.remove(

                    "show"

                );

            }

        );

    }

);



/* ================================= */
/* TRANSPORTATION */
/* ================================= */

function openTransportationMap(

    event,

    area

) {

    event.preventDefault();

    event.stopPropagation();


    var googleURL =

        "https://www.google.com/maps/search/?api=1&query="

        +

        encodeURIComponent(

            "transportation in "

            +

            area

            +

            ", Perlis"

        );


    window.location.href = googleURL;

}



/* ================================= */
/* ACCOMMODATION */
/* ================================= */

function openAccommodationMap(

    event,

    area

) {

    event.preventDefault();

    event.stopPropagation();


    var googleURL =

        "https://www.google.com/maps/search/?api=1&query="

        +

        encodeURIComponent(

            "accommodation in "

            +

            area

            +

            ", Perlis"

        );


    window.location.href = googleURL;

}


</script>



<?php include("footer.php"); ?>


</body>

</html>