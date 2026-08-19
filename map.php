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
Interactive Map - Smart Perlis Tourism Portal
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


<!-- Leaflet CSS -->

<link
rel="stylesheet"
href="https://unpkg.com/leaflet/dist/leaflet.css"
>


<style>

/* ==========================================
   BODY
========================================== */

body {

    background: #fefbea;

}


/* ==========================================
   NAVBAR
========================================== */

.navbar {

    background:
        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}


/* ==========================================
   HEADER
========================================== */

.map-header {

    background-image:
        url('assets/images/header.jpg');

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    color: white;

    text-align: center;

    min-height: 400px;

    padding: 60px 20px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: center;

}


.map-header h1 {

    font-size: 3.5rem;

    font-weight: 700;

    margin-bottom: 10px;

}


.map-header p {

    margin: 0;

    font-size: 1.25rem;

}


/* ==========================================
   MAP WRAPPER
========================================== */

.map-wrapper {

    position: relative;

    background:
        linear-gradient(
            135deg,
            #fffdf5 0%,
            #fefbea 50%,
            #f8f1dc 100%
        );

    border-radius: 20px;

    padding: 30px;

    box-shadow:
        0 10px 35px rgba(0,0,0,0.12);

}


/* ==========================================
   MAP TITLE
========================================== */

.map-title {

    text-align: center;

    margin-bottom: 20px;

}


.map-title h3 {

    font-weight: 700;

    color: #0057B8;

}


.map-title p {

    color: #777;

    margin-bottom: 0;

}


/* ==========================================
   REAL MAP
========================================== */

#map {

    height: 650px;

    width: 100%;

    position: relative;

    border-radius: 15px;

    overflow: hidden;

    border: 3px solid #0057B8;

}


/* ==========================================
   LEAFLET MAP
========================================== */

.leaflet-container {

    background: #e8e8e8;

    font-family: Arial, sans-serif;

}


/* ==========================================
   AREA STYLE
========================================== */

.area-normal {

    fill: #0057B8;

    fill-opacity: 0.12;

    stroke: #0057B8;

    stroke-width: 3;

    transition: 0.2s;

}


.area-hover {

    fill: #0057B8;

    fill-opacity: 0.35;

    stroke: #003f88;

    stroke-width: 5;

}


/* ==========================================
   AREA LABEL
========================================== */

.area-label {

    background: white;

    border: 2px solid #0057B8;

    border-radius: 8px;

    padding: 5px 10px;

    font-weight: bold;

    color: #0057B8;

    box-shadow:
        0 3px 10px rgba(0,0,0,0.15);

}


/* ==========================================
   INFO PANEL
========================================== */

.info-panel {

    display: none;

    position: absolute;

    right: 45px;

    top: 120px;

    width: 320px;

    max-height: 480px;

    overflow-y: auto;

    background: white;

    border-radius: 15px;

    padding: 25px;

    box-shadow:
        0 10px 30px rgba(0,0,0,0.25);

    z-index: 1000;

}


.info-panel h3 {

    color: #0057B8;

    font-weight: bold;

}


/* ==========================================
   CLOSE BUTTON
========================================== */

.close-btn {

    position: absolute;

    right: 15px;

    top: 10px;

    border: none;

    background: none;

    font-size: 28px;

    color: #777;

    cursor: pointer;

}


.close-btn:hover {

    color: #0057B8;

}


/* ==========================================
   DESTINATION CARD
========================================== */

.destination-card {

    border: 1px solid #ddd;

    border-left: 4px solid #0057B8;

    border-radius: 10px;

    padding: 12px;

    margin-top: 12px;

}


.destination-card h5 {

    margin-bottom: 5px;

    color: #0057B8;

    font-weight: bold;

}


.destination-card p {

    font-size: 14px;

    margin-bottom: 10px;

}


/* ==========================================
   GOOGLE MAP BUTTON
========================================== */

.google-btn {

    display: inline-block;

    background: #0057B8;

    color: white;

    text-decoration: none;

    padding: 7px 12px;

    border-radius: 7px;

    font-size: 14px;

}


.google-btn:hover {

    background: #003f88;

    color: white;

}


/* ==========================================
   MAP ATTRIBUTION
========================================== */

.leaflet-control-attribution {

    font-size: 10px;

}


/* ==========================================
   MOBILE
========================================== */

@media (max-width: 768px) {

    #map {

        height: 500px;

    }


    .map-wrapper {

        padding: 15px;

    }


    .info-panel {

        position: absolute;

        left: 20px;

        right: 20px;

        top: 100px;

        width: auto;

    }


    .map-header h1 {

        font-size: 2.5rem;

    }

}

</style>

</head>


<body>


<!-- ==========================================
     NAVBAR
========================================== -->

<?php include("navbar.php"); ?>



<!-- ==========================================
     HEADER
========================================== -->

<section class="map-header">

    <div class="container">

        <h1>

            Interactive Tourism Map

        </h1>


        <p>

            Explore interesting destinations around Perlis

        </p>

    </div>

</section>



<!-- ==========================================
     MAP SECTION
========================================== -->

<div class="container mt-5 mb-5">

    <div class="map-wrapper">


        <!-- MAP TITLE -->

        <div class="map-title">

            <h3>

                <i class="bi bi-map"></i>

                Explore Perlis

            </h3>


            <p>

                Click on an area to explore tourist attractions

            </p>

        </div>



        <!-- ==================================
             MAP
        ================================== -->

        <div id="map"></div>



        <!-- ==================================
             INFO PANEL
        ================================== -->

        <div
            id="infoPanel"
            class="info-panel"
        >


            <button
                type="button"
                class="close-btn"
                onclick="closePanel()"
            >

                ×

            </button>


            <h3 id="areaName">

                Select an area

            </h3>


            <p id="areaDescription">

                Click Padang Besar, Kangar or Arau
                on the map.

            </p>


            <div id="destinationList"></div>


        </div>


    </div>

</div>



<!-- ==========================================
     LEAFLET JS
========================================== -->

<script
src="https://unpkg.com/leaflet/dist/leaflet.js">
</script>



<script>

/* ==========================================
   CREATE MAP
========================================== */

var map = L.map(
    'map',
    {

        /*
        |--------------------------------------------------------------------------
        | DISABLE USER MOVEMENT
        |--------------------------------------------------------------------------
        */

        dragging: false,

        scrollWheelZoom: false,

        doubleClickZoom: false,

        boxZoom: false,

        keyboard: false,

        touchZoom: false,

        zoomControl: false,

        attributionControl: true

    }
);



/* ==========================================
   REAL MAP BACKGROUND
========================================== */

L.tileLayer(

    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',

    {

        maxZoom: 19,

        attribution:
            '&copy; OpenStreetMap contributors'

    }

).addTo(map);



/* ==========================================
   DESTINATION DATA FROM DATABASE
========================================== */

var destinations = [

<?php

$sql = "

    SELECT *

    FROM destinations

";


$result = mysqli_query(
    $conn,
    $sql
);


if ($result) {

    while (
        $row =
        mysqli_fetch_assoc($result)
    ) {

?>

{

    name:

    <?php

    echo json_encode(
        $row['destination_name']
    );

    ?>,


    location:

    <?php

    echo json_encode(
        $row['location']
    );

    ?>,


    latitude:

    <?php

    echo isset($row['latitude'])
        ? $row['latitude']
        : 6.4449;

    ?>,


    longitude:

    <?php

    echo isset($row['longitude'])
        ? $row['longitude']
        : 100.1986;

    ?>,


    id:

    <?php

    echo $row['destination_id'];

    ?>

},

<?php

    }

}

?>

];



/* ==========================================
   PERLIS AREA VARIABLE
========================================== */

var perlisAreas;



/* ==========================================
   LOAD PERLIS SHAPE
========================================== */

fetch(

    'https://mygos.mygeoportal.gov.my/gisserver/rest/services/Hosted/Lampu_Isyarat_Perlis/FeatureServer/3/query?where=1%3D1&outFields=*&returnGeometry=true&f=geojson'

)


.then(
    response =>
        response.json()
)


.then(
    data => {


        /* ==================================
           CREATE PERLIS AREAS
        ================================== */

        perlisAreas =
            L.geoJSON(

                data,

                {

                    style:
                    function(feature) {

                        return {

                            className:
                                'area-normal',

                            fillColor:
                                '#0057B8',

                            fillOpacity:
                                0.12,

                            color:
                                '#0057B8',

                            weight:
                                3

                        };

                    },


                    /* ==========================
                       AREA EVENTS
                    ========================== */

                    onEachFeature:
                    function(
                        feature,
                        layer
                    ) {


                        /* GET AREA NAME */

                        var fullName =
                            feature.properties.name
                            || "Perlis Area";


                        var areaName =
                            fullName

                            .replace(
                                "P.001 ",
                                ""
                            )

                            .replace(
                                "P.002 ",
                                ""
                            )

                            .replace(
                                "P.003 ",
                                ""
                            );



                        /* ==========================
                           AREA LABEL
                        ========================== */

                        layer.bindTooltip(

                            areaName,

                            {

                                permanent:
                                    true,

                                direction:
                                    'center',

                                className:
                                    'area-label'

                            }

                        );



                        /* ==========================
                           AREA EVENTS
                        ========================== */

                        layer.on({

                            mouseover:
                            function(e) {

                                e.target.setStyle({

                                    fillOpacity:
                                        0.35,

                                    weight:
                                        5

                                });

                            },


                            mouseout:
                            function(e) {

                                e.target.setStyle({

                                    fillOpacity:
                                        0.12,

                                    weight:
                                        3

                                });

                            },


                            click:
                            function(e) {

                                showArea(

                                    areaName,

                                    e.target

                                );

                            }

                        });

                    }

                }

            ).addTo(map);



        /* ==================================
           FIT MAP TO PERLIS
        ================================== */

        map.fitBounds(

            perlisAreas.getBounds(),

            {

                padding:
                    [40, 40]

            }

        );


    }

);



/* ==========================================
   SHOW AREA
========================================== */

function showArea(

    areaName,
    layer

) {


    /* SHOW PANEL */

    document.getElementById(
        "infoPanel"
    ).style.display = "block";



    /* AREA NAME */

    document.getElementById(
        "areaName"
    ).innerHTML = areaName;



    /* DESCRIPTION */

    document.getElementById(
        "areaDescription"
    ).innerHTML =

        "Interesting destinations in "

        + areaName

        + ", Perlis.";



    /* DESTINATION LIST */

    var list =

        document.getElementById(
            "destinationList"
        );


    list.innerHTML = "";



    /* ==================================
       FIND DESTINATIONS
    ================================== */

    var found = false;


    destinations.forEach(

        function(destination) {


            var destinationLocation =

                destination.location
                .toLowerCase();


            var selectedArea =

                areaName.toLowerCase();



            if (

                destinationLocation.includes(
                    selectedArea
                )

            ) {


                found = true;



                /* GOOGLE MAP URL */

                var googleURL =

                    "https://www.google.com/maps/search/?api=1&query="

                    +

                    encodeURIComponent(

                        destination.name

                        + ", "

                        + destination.location

                        + ", Perlis"

                    );



                /* DESTINATION CARD */

                list.innerHTML += `

                    <div class="destination-card">

                        <h5>

                            <i class="bi bi-geo-alt-fill"></i>

                            ${destination.name}

                        </h5>


                        <p>

                            ${destination.location}

                        </p>


                        <a

                            href="${googleURL}"

                            target="_blank"

                            class="google-btn"

                        >

                            <i class="bi bi-map"></i>

                            View on Google Maps

                        </a>

                    </div>

                `;

            }

        }

    );



    /* ==================================
       NO DESTINATION
    ================================== */

    if (!found) {


        var googleAreaURL =

            "https://www.google.com/maps/search/?api=1&query="

            +

            encodeURIComponent(

                "tourist attractions "

                + areaName

                + ", Perlis"

            );



        list.innerHTML = `

            <div class="destination-card">

                <h5>

                    <i class="bi bi-map"></i>

                    Tourist Attractions

                </h5>


                <p>

                    Explore interesting places
                    around ${areaName}, Perlis.

                </p>


                <a

                    href="${googleAreaURL}"

                    target="_blank"

                    class="google-btn"

                >

                    <i class="bi bi-map"></i>

                    Explore on Google Maps

                </a>

            </div>

        `;

    }

}



/* ==========================================
   CLOSE INFO PANEL
========================================== */

function closePanel() {

    document.getElementById(
        "infoPanel"
    ).style.display = "none";

}

</script>



<!-- ==========================================
     FOOTER
========================================== -->

<?php include("footer.php"); ?>


</body>

</html>