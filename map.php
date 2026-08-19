<?php

include("config.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
Interactive Map - Smart Perlis Tourism Portal
</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- BOOTSTRAP ICONS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="assets/css/style.css">


<!-- Leaflet CSS -->

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">


</head>


<body>


<?php include("navbar.php"); ?>


<!-- HEADER -->

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



<!-- MAP -->

<div class="container mt-5 mb-5">

    <div class="map-wrapper">


        <div class="map-title">

            <h3>
                Explore Perlis
            </h3>

            <p>
                Click on an area to explore tourist attractions
            </p>

        </div>



        <!-- MAP -->

        <div id="map">


            <!-- ============================== -->
            <!-- MAP CONTROL BUTTONS -->
            <!-- ============================== -->

            <div class="map-controls">


                <!-- UP -->

                <button
                    onclick="moveMap('up')"
                    title="Move Up"
                >

                    ▲

                </button>



                <!-- LEFT -->

                <button
                    onclick="moveMap('left')"
                    title="Move Left"
                >

                    ◀

                </button>



                <!-- RESET -->

                <button
                    onclick="resetMap()"
                    title="Reset Map"
                >

                    ●

                </button>



                <!-- RIGHT -->

                <button
                    onclick="moveMap('right')"
                    title="Move Right"
                >

                    ▶

                </button>



                <!-- DOWN -->

                <button
                    onclick="moveMap('down')"
                    title="Move Down"
                >

                    ▼

                </button>



                <!-- ZOOM BUTTONS -->

                <div class="zoom-buttons">


                    <button
                        onclick="zoomMap('in')"
                        title="Zoom In"
                    >

                        +

                    </button>


                    <button
                        onclick="zoomMap('out')"
                        title="Zoom Out"
                    >

                        −

                    </button>


                </div>


            </div>


        </div>



        <!-- ============================== -->
        <!-- INFO PANEL -->
        <!-- ============================== -->

        <div
            id="infoPanel"
            class="info-panel"
        >


            <button
                class="close-btn"
                onclick="closePanel()"
            >

                ×

            </button>



            <h3 id="areaName">

                Select an area

            </h3>



            <p id="areaDescription">

                Click Padang Besar, Kangar or Arau on the map.

            </p>



            <div id="destinationList">

            </div>


        </div>


    </div>

</div>




<style>


/* ================================= */
/* BODY PAGE */
/* ================================= */

body {

    background: #fefbea;

}


/* Navbar gradient warna Perlis */

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



/* ================================= */
/* MAP CONTAINER */
/* ================================= */

.map-wrapper {

    position: relative;

    background: linear-gradient(
        135deg,
        #fffdf5 0%,
        #fefbea 50%,
        #f8f1dc 100%;)

    border-radius: 20px;

    padding: 30px;

    box-shadow:
        0 10px 35px rgba(0,0,0,0.12);

}



/* ================================= */
/* MAP TITLE */
/* ================================= */

.map-title {

    text-align: center;

    margin-bottom: 10px;

}


.map-title h3 {

    font-weight: 700;

    color: #198754;

}


.map-title p {

    color: #777;

}



/* ================================= */
/* MAP */
/* ================================= */

#map {

    height: 650px;

    width: 100%;

    background: white;

    position: relative;

    border-radius: 15px;

}


/* Buang background map tile */

.leaflet-container {

    background: white;

}



/* ================================= */
/* MAP CONTROL */
/* ================================= */

.map-controls {

    position: absolute;

    left: 25px;

    bottom: 25px;

    z-index: 1000;

    display: grid;

    grid-template-columns: 45px 45px 45px;

    grid-template-rows: 45px 45px 45px;

    gap: 5px;

}



/* Semua button */

.map-controls button {

    width: 45px;

    height: 45px;

    border: none;

    border-radius: 10px;

    background: white;

    color: #198754;

    font-size: 18px;

    font-weight: bold;

    box-shadow:
        0 4px 12px rgba(0,0,0,0.20);

    cursor: pointer;

    transition: 0.2s;

}


/* Hover */

.map-controls button:hover {

    background: #198754;

    color: white;

    transform: scale(1.05);

}



/* ================================= */
/* ARROW POSITION */
/* ================================= */


/* UP */

.map-controls > button:nth-child(1) {

    grid-column: 2;

    grid-row: 1;

}


/* LEFT */

.map-controls > button:nth-child(2) {

    grid-column: 1;

    grid-row: 2;

}


/* RESET */

.map-controls > button:nth-child(3) {

    grid-column: 2;

    grid-row: 2;

}


/* RIGHT */

.map-controls > button:nth-child(4) {

    grid-column: 3;

    grid-row: 2;

}


/* DOWN */

.map-controls > button:nth-child(5) {

    grid-column: 2;

    grid-row: 3;

}



/* ================================= */
/* ZOOM BUTTONS */
/* ================================= */

.zoom-buttons {

    position: absolute;

    left: 150px;

    top: 0;

    display: flex;

    flex-direction: column;

    gap: 5px;

}


.zoom-buttons button {

    width: 45px;

    height: 45px;

    font-size: 25px;

}



/* ================================= */
/* PERLIS AREA */
/* ================================= */

.area-normal {

    fill: #198754;

    fill-opacity: 0.18;

    stroke: #198754;

    stroke-width: 3;

    transition: all 0.2s;

}


.area-hover {

    fill: #198754;

    fill-opacity: 0.45;

    stroke: #0f5132;

    stroke-width: 5;

}



/* ================================= */
/* LABEL */
/* ================================= */

.area-label {

    background: white;

    border: none;

    border-radius: 8px;

    padding: 5px 10px;

    font-weight: bold;

    color: #198754;

    box-shadow:
        0 3px 10px rgba(0,0,0,0.15);

}



/* ================================= */
/* INFO PANEL */
/* ================================= */

.info-panel {

    display: none;

    position: absolute;

    right: 30px;

    top: 100px;

    width: 320px;

    max-height: 480px;

    overflow-y: auto;

    background: white;

    border-radius: 15px;

    padding: 25px;

    box-shadow:
        0 10px 30px rgba(0,0,0,0.2);

    z-index: 1000;

}


.info-panel h3 {

    color: #198754;

    font-weight: bold;

}



/* ================================= */
/* CLOSE BUTTON */
/* ================================= */

.close-btn {

    position: absolute;

    right: 15px;

    top: 10px;

    border: none;

    background: none;

    font-size: 28px;

    color: #777;

}



/* ================================= */
/* DESTINATION CARD */
/* ================================= */

.destination-card {

    border: 1px solid #ddd;

    border-radius: 10px;

    padding: 12px;

    margin-top: 12px;

}


.destination-card h5 {

    margin-bottom: 5px;

    color: #198754;

}


.destination-card p {

    font-size: 14px;

    margin-bottom: 10px;

}



/* ================================= */
/* GOOGLE MAP BUTTON */
/* ================================= */

.google-btn {

    display: inline-block;

    background: #198754;

    color: white;

    text-decoration: none;

    padding: 7px 12px;

    border-radius: 7px;

    font-size: 14px;

}


.google-btn:hover {

    background: #146c43;

    color: white;

}


</style>




<!-- LEAFLET JS -->

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>



<script>


// ==========================================
// CREATE MAP
// ==========================================

var map = L.map('map', {

    zoomControl: false,

    attributionControl: false

});



// ==========================================
// VARIABLE UNTUK PERLIS MAP
// ==========================================

var perlisAreas;



// ==========================================
// DESTINATION DATA FROM DATABASE
// ==========================================

var destinations = [

<?php

$sql = "SELECT * FROM destinations";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

?>

{

    name:

    <?php echo json_encode(
        $row['destination_name']
    ); ?>,


    location:

    <?php echo json_encode(
        $row['location']
    ); ?>,


    latitude:

    <?php echo $row['latitude'] ?? 6.4449; ?>,


    longitude:

    <?php echo $row['longitude'] ?? 100.1986; ?>,


    id:

    <?php echo $row['destination_id']; ?>

},

<?php

}

?>

];



// ==========================================
// LOAD PERLIS SHAPE
// ==========================================

fetch(

    'https://mygos.mygeoportal.gov.my/gisserver/rest/services/Hosted/Lampu_Isyarat_Perlis/FeatureServer/3/query?where=1%3D1&outFields=*&returnGeometry=true&f=geojson'

)


.then(response => response.json())


.then(data => {


    // ======================================
    // CREATE PERLIS AREAS
    // ======================================

    perlisAreas = L.geoJSON(

        data,

        {


            style: function(feature) {

                return {

                    className: 'area-normal',

                    fillColor: '#198754',

                    fillOpacity: 0.18,

                    color: '#198754',

                    weight: 3

                };

            },


            onEachFeature: function(
                feature,
                layer
            ) {


                // ==========================
                // GET AREA NAME
                // ==========================

                var fullName =
                    feature.properties.name;


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



                // ==========================
                // AREA LABEL
                // ==========================

                layer.bindTooltip(

                    areaName,

                    {

                        permanent: true,

                        direction: 'center',

                        className: 'area-label'

                    }

                );



                // ==========================
                // HOVER
                // ==========================

                layer.on({

                    mouseover:
                    function(e) {

                        e.target.setStyle({

                            fillOpacity: 0.45,

                            weight: 5

                        });

                    },


                    mouseout:
                    function(e) {

                        e.target.setStyle({

                            fillOpacity: 0.18,

                            weight: 3

                        });

                    },


                    // ======================
                    // CLICK
                    // ======================

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



    // ======================================
    // FIT MAP TO PERLIS
    // ======================================

    map.fitBounds(

        perlisAreas.getBounds(),

        {

            padding: [30, 30]

        }

    );


});



// ==========================================
// SHOW AREA
// ==========================================

function showArea(

    areaName,
    layer

) {


    // Show panel

    document.getElementById(
        "infoPanel"
    ).style.display = "block";



    // Area name

    document.getElementById(
        "areaName"
    ).innerHTML = areaName;



    // Description

    document.getElementById(
        "areaDescription"
    ).innerHTML =

        "Interesting destinations in "

        + areaName

        + ", Perlis.";



    // Destination container

    var list =

        document.getElementById(
            "destinationList"
        );


    list.innerHTML = "";



    // ======================================
    // FIND DESTINATIONS
    // ======================================

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



                // ==========================
                // GOOGLE MAP URL
                // ==========================

                var googleURL =

                    "https://www.google.com/maps/search/?api=1&query="

                    +

                    encodeURIComponent(

                        destination.name

                        + ", "

                        + destination.location

                        + ", Perlis"

                    );



                // ==========================
                // DESTINATION CARD
                // ==========================

                list.innerHTML += `

                    <div class="destination-card">


                        <h5>

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

                            View on Google Maps

                        </a>


                    </div>

                `;

            }

        }

    );



    // ======================================
    // IF NO DESTINATION FOUND
    // ======================================

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

                    Explore on Google Maps

                </a>


            </div>

        `;

    }

}



// ==========================================
// CLOSE INFO PANEL
// ==========================================

function closePanel() {

    document.getElementById(
        "infoPanel"
    ).style.display = "none";

}



// ==========================================
// MOVE MAP
// ==========================================

function moveMap(direction) {


    var distance = 150;



    // MOVE UP

    if (
        direction === 'up'
    ) {

        map.panBy(
            [0, -distance]
        );

    }



    // MOVE DOWN

    if (
        direction === 'down'
    ) {

        map.panBy(
            [0, distance]
        );

    }



    // MOVE LEFT

    if (
        direction === 'left'
    ) {

        map.panBy(
            [-distance, 0]
        );

    }



    // MOVE RIGHT

    if (
        direction === 'right'
    ) {

        map.panBy(
            [distance, 0]
        );

    }

}



// ==========================================
// ZOOM MAP
// ==========================================

function zoomMap(type) {


    // ZOOM IN

    if (
        type === 'in'
    ) {

        map.zoomIn();

    }



    // ZOOM OUT

    if (
        type === 'out'
    ) {

        map.zoomOut();

    }

}



// ==========================================
// RESET MAP
// ==========================================

function resetMap() {


    if (perlisAreas) {


        map.fitBounds(

            perlisAreas.getBounds(),

            {

                padding: [30, 30]

            }

        );

    }

}


</script>



<?php include("footer.php"); ?>


</body>

</html>