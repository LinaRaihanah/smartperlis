<?php 
// ================================ 
// PERLIS TOURISM SMART PORTAL
// navbar.php 
// ================================ 
?> 


<!-- GOOGLE FONT - SAME AS INDEX.PHP -->

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
>


<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow"> 
 
    <div class="container"> 
 
 
        <!-- LOGO --> 
 
        <a 
            class="navbar-brand fw-bold" 
            href="index.php"> 
 
            <i class="bi bi-geo-alt-fill"></i> 
 
            PERLIS TOURISM SMART PORTAL
 
        </a> 
 
 
        <!-- MOBILE BUTTON --> 
 
        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarMenu" 
            aria-controls="navbarMenu" 
            aria-expanded="false" 
            aria-label="Toggle navigation"> 
 
            <span class="navbar-toggler-icon"></span> 
 
        </button> 
 
 
        <!-- MENU --> 
 
        <div 
            class="collapse navbar-collapse" 
            id="navbarMenu"> 
 
 
            <ul class="navbar-nav ms-auto"> 
 
 
                <!-- HOME --> 
 
                <li class="nav-item"> 
 
                    <a 
                        class="nav-link" 
                        href="index.php"> 
 
                        <i class="bi bi-house-fill"></i> 
 
                        Home 
 
                    </a> 
 
                </li> 
 
 
                <!-- DESTINATIONS --> 
 
                <li class="nav-item destination-dropdown"> 
 
                    <a 
                        class="nav-link destination-button" 
                        href="destinations.php"> 
 
                        <i class="bi bi-geo-alt-fill"></i> 
 
                        Destinations 
 
                    </a>


                    <!-- DESTINATION DROPDOWN -->

                    <div class="destination-menu">

                        <a href="destinations.php">

                            Destinations

                        </a>


                        <a href="transport.php">

                            Transportation & Accommodation

                        </a>

                    </div>
 
                </li> 
 
 
                <!-- EVENTS --> 
 
                <li class="nav-item"> 
 
                    <a 
                        class="nav-link" 
                        href="events.php"> 
 
                        <i class="bi bi-calendar-event-fill"></i> 
 
                        Events 
 
                    </a> 
 
                </li> 
 
 
                <!-- ANALYTICS --> 
 
                <li class="nav-item"> 
 
                    <a 
                        class="nav-link" 
                        href="analytics.php"> 
 
                        <i class="bi bi-bar-chart-fill"></i> 
 
                        Analytics 
 
                    </a> 
 
                </li> 
 
 
                <!-- MAP --> 
 
                <li class="nav-item"> 
 
                    <a 
                        class="nav-link" 
                        href="map.php"> 
 
                        <i class="bi bi-map-fill"></i> 
 
                        Map 
 
                    </a> 
 
                </li> 
 
 
                <!-- CONTACT --> 
 
                <li class="nav-item"> 
 
                    <a 
                        class="nav-link" 
                        href="contact.php"> 
 
                        <i class="bi bi-envelope-fill"></i> 
 
                        Contact 
 
                    </a> 
 
                </li> 
 
 
                <!-- GALLERY --> 
 
                <li class="nav-item"> 
 
                    <a 
                        class="nav-link" 
                        href="gallery.php"> 
 
                        <i class="bi bi-images"></i> 
 
                        Gallery 
 
                    </a> 
 
                </li> 
 
 
            </ul> 
 
        </div> 
 
    </div> 
 
</nav> 


<style> 


/* ================================= */ 
/* NAVBAR LOGO */
/* SAME STYLE AS INDEX.PHP */
/* ================================= */ 

.navbar-brand {

    font-family: 'Inter', sans-serif;

    font-size: 1.25rem;

    font-weight: 700;

    letter-spacing: .5px;

}


/* ================================= */
/* LOGO LOCATION ICON */
/* ================================= */

.navbar-brand i {

    color: #0057A8;

    font-size: 1rem;

}


/* ================================= */ 
/* DESTINATION DROPDOWN */ 
/* ================================= */ 
 
.destination-dropdown { 
 
    position: relative; 
 
} 
 
 
/* ================================= */ 
/* DROPDOWN MENU */ 
/* ================================= */ 
 
.destination-menu { 
 
    display: none; 
 
    position: absolute; 
 
    top: 100%; 
 
    left: 0; 
 
    min-width: 230px; 
 
    background: #FEFBEA; 
 
    border-radius: 8px; 
 
    box-shadow: 
        0 8px 20px rgba(0,0,0,0.15); 
 
    z-index: 9999; 
 
    padding: 5px 0; 
 
} 
 
 
/* ================================= */ 
/* SHOW DROPDOWN WHEN HOVER */ 
/* ================================= */ 
 
.destination-dropdown:hover .destination-menu { 
 
    display: block; 
 
} 
 
 
/* ================================= */ 
/* DROPDOWN LINK */ 
/* ================================= */ 
 
.destination-menu a { 
 
    display: block; 
 
    padding: 10px 15px; 
 
    color: #333; 
 
    text-decoration: none; 
 
    font-size: 14px; 
 
} 
 
 
/* ================================= */ 
/* DROPDOWN HOVER */ 
/* ================================= */ 
 
.destination-menu a:hover { 
 
    background: #e7ba75; 
 
    color: #198754; 
 
} 
 
 
/* ================================= */ 
/* MOBILE */ 
/* ================================= */ 
 
@media (max-width: 991px) { 
 
    .destination-menu { 
 
        position: static; 
 
        box-shadow: none; 
 
        border-radius: 0; 
 
        background: transparent; 
 
        padding-left: 15px; 
 
    } 
 
 
    .destination-dropdown:hover .destination-menu { 
 
        display: block; 
 
    } 
 
 
    .destination-menu a { 
 
        color: #ffff; 
 
        padding: 8px 10px; 
 
    } 
 
 
    .destination-menu a:hover { 
 
        background: rgba(255,255,255,0.15); 
 
        color: white; 
 
    } 
 
} 
 
</style>