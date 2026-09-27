<?php

include("config.php");


/* =========================================================
   PERLIS DESTINATIONS
   Source: Tourism Perlis
========================================================= */

$destinations = [

    [
        "name" => "Arked Niaga Padang Besar",
        "location" => "Padang Besar, Perlis",
        "category" => "Shopping",
        "image" => "assets/images/destinations/arked-niaga-padang-besar.jpg",
        "description" =>
            "A popular shopping destination near the Malaysia-Thailand border offering food, clothing, accessories and household products.",
        "fee" => ""
    ],

    [
        "name" => "Bukit Tok Dun",
        "location" => "Felda Laka Selatan, Perlis",
        "category" => "Adventure",
        "image" => "assets/images/destinations/bukit-tok-dun.jpg",
        "description" =>
            "A 325-metre hill near the Perlis-Kedah border, popular for hiking, sunrise views and its beautiful sea of clouds.",
        "fee" => ""
    ],

    [
        "name" => "Galeri 3D Gua Kelam",
        "location" => "Kaki Bukit, Perlis",
        "category" => "Culture",
        "image" => "assets/images/destinations/galeri-3d-gua-kelam.jpg",
        "description" =>
            "An interactive cave gallery combining 3D graphics, natural sounds, specimens, artefacts, cave replicas and tourism information.",
        "fee" => ""
    ],

    [
        "name" => "Kampung Wai",
        "location" => "Kuala Perlis, Perlis",
        "category" => "Nature",
        "image" => "assets/images/destinations/kampung-wai.jpg",
        "description" =>
            "A scenic eco-tourism destination featuring a canal surrounded by ancient limestone hills, paddy fields and beautiful natural scenery.",
        "fee" => ""
    ],

    [
        "name" => "Kampung Warisan Tradisi Nelayan",
        "location" => "Seberang Ramai, Kuala Perlis",
        "category" => "Culture",
        "image" => "assets/images/destinations/kampung-warisan-nelayan.jpg",
        "description" =>
            "A traditional fishing village transformed into a colourful tourism attraction while preserving the identity of the local fishing community.",
        "fee" => ""
    ],

    [
        "name" => "Kangar Street Art",
        "location" => "Kangar, Perlis",
        "category" => "Art",
        "image" => "assets/images/destinations/kangar-street-art.jpg",
        "description" =>
            "Colourful murals in central Kangar showcasing local attractions, culture, history and the unique identity of Perlis.",
        "fee" => ""
    ],

    [
        "name" => "Muzium Kota Kayang",
        "location" => "Kuala Perlis, Perlis",
        "category" => "History",
        "image" => "assets/images/destinations/muzium-kota-kayang.jpg",
        "description" =>
            "A museum preserving and displaying the historical heritage of Perlis with galleries covering history, archaeology, weapons, culture and royal heritage.",
        "fee" => ""
    ],

    [
        "name" => "Superfruits Valley",
        "location" => "Perlis",
        "category" => "Agrotourism",
        "image" => "assets/images/destinations/superfruits-valley.jpg",
        "description" =>
            "A large agricultural attraction growing superfruits including figs, gac fruit, citrus fruits, passion fruit and other crops.",
        "fee" => ""
    ],

    [
        "name" => "Taman Eko-Rimba Bukit Ayer",
        "location" => "Sungai Batu Pahat, Perlis",
        "category" => "Nature",
        "image" => "assets/images/destinations/bukit-ayer.jpg",
        "description" =>
            "A family eco-tourism destination surrounded by forest, streams and recreational facilities approximately 12 kilometres from Kangar.",
        "fee" => "Entrance fee applies"
    ],

    [
        "name" => "Taman Eksotik Buah-Buahan (Taman Anggur)",
        "location" => "Sungai Batu Pahat, Perlis",
        "category" => "Agrotourism",
        "image" => "assets/images/destinations/taman-eksotik-buah.jpg",
        "description" =>
            "An agricultural tourism attraction at Sungai Batu Pahat featuring exotic fruit cultivation and the agricultural landscape of Perlis.",
        "fee" => ""
    ],

    [
        "name" => "Tasik Melati",
        "location" => "Kangar, Perlis",
        "category" => "Lake",
        "image" => "assets/images/destinations/tasik-melati.jpg",
        "description" =>
            "A peaceful shallow lake featuring more than 150 small sandbar islands and walkways that allow visitors to enjoy the surrounding scenery.",
        "fee" => ""
    ],

    [
        "name" => "Tasik Timah Tasoh",
        "location" => "Beseri, Perlis",
        "category" => "Lake",
        "image" => "assets/images/destinations/tasik-timah-tasoh.jpg",
        "description" =>
            "A scenic lake surrounded by countryside and fruit orchards, popular for photography, relaxation and freshwater fishing.",
        "fee" => ""
    ],

    [
        "name" => "Wang Kelian View Point",
        "location" => "Wang Kelian, Perlis",
        "category" => "Nature",
        "image" => "assets/images/destinations/wang-kelian-view-point.jpg",
        "description" =>
            "A popular viewpoint approximately 304 metres above sea level along the route towards the Malaysia-Thailand border.",
        "fee" => ""
    ]

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0">

<title>
    Destination - PERLIS TOURISM SMART PORTAL
</title>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet">


<link
    rel="stylesheet"
    href="assets/css/style.css">


<style>

/* =========================================================
   BODY
========================================================= */

body {

    background: #fefbea;

}


/* =========================================================
   NAVBAR
========================================================= */

.navbar {

    background:
        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}


/* =========================================================
   HERO
========================================================= */

.hero-destination {

    background-image:
        url('assets/images/header.jpg');

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    min-height: 400px;

    padding: 80px 20px;

    display: flex;

    justify-content: center;

    align-items: center;

    color: white;

}


.hero-destination h1,
.hero-destination p {

    text-shadow:
        0 3px 10px rgba(0,0,0,0.65);

}


/* =========================================================
   SEARCH
========================================================= */

.search-card {

    border: none;

    border-radius: 20px;

}


.search-card .input-group-text {

    background: #FFD700;

    color: #0057B8;

    border-color: #FFD700;

}


.search-card .form-control,
.search-card .form-select {

    min-height: 48px;

}


/* =========================================================
   DESTINATION CARD
========================================================= */

.destination-card .card {

    border: none;

    border-radius: 20px;

    overflow: hidden;

    background: white;

    transition: 0.3s;

}


.destination-card .card:hover {

    transform: translateY(-8px);

    box-shadow:
        0 15px 30px rgba(0,0,0,0.15) !important;

}


/* =========================================================
   IMAGE
========================================================= */

.image-wrapper {

    position: relative;

    width: 100%;

    height: 240px;

    overflow: hidden;

    background: #e9ecef;

}


.destination-image {

    width: 100%;

    height: 100%;

    object-fit: cover;

    transition: 0.4s;

}


.destination-card:hover .destination-image {

    transform: scale(1.05);

}


/* =========================================================
   CATEGORY
========================================================= */

.category-badge {

    position: absolute;

    top: 15px;

    left: 15px;

    z-index: 5;

    padding: 7px 14px;

    border-radius: 30px;

    background: #FFD700;

    color: #0057B8;

    font-size: 13px;

    font-weight: 800;

    box-shadow:
        0 4px 12px rgba(0,0,0,0.20);

}


/* =========================================================
   CARD BODY
========================================================= */

.destination-card .card-body {

    padding: 24px;

}


.destination-card h4 {

    color: #0057B8;

    font-weight: 800;

}


.destination-location {

    color: #666;

    margin-top: 10px;

}


.destination-location i {

    color: #E0A800;

}


.destination-description {

    color: #666;

    line-height: 1.7;

    margin-top: 10px;

}


/* =========================================================
   FEE
========================================================= */

.fee-box {

    background:
        linear-gradient(
            135deg,
            #fff4b8,
            #fffdf0
        );

    border-left:
        5px solid #FFD700;

    border-radius: 12px;

    padding: 13px 15px;

    margin-top: 15px;

}


.fee-title {

    color: #0057B8;

    font-size: 13px;

    font-weight: 800;

    text-transform: uppercase;

}


.fee-price {

    margin-top: 4px;

    color: #333;

    font-weight: 700;

}


/* =========================================================
   MAP BUTTON
========================================================= */

.destination-btn {

    display: flex;

    justify-content: center;

    align-items: center;

    gap: 8px;

    width: 100%;

    padding: 12px 20px;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            #0057B8,
            #0d7ff2
        );

    color: white;

    text-decoration: none;

    font-weight: 700;

    transition: 0.3s;

}


.destination-btn:hover {

    background: #FFD700;

    color: #0057B8;

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:768px) {

    .hero-destination {

        min-height: 320px;

        padding: 55px 20px;

    }


    .hero-destination h1 {

        font-size: 2.2rem;

    }


    .image-wrapper {

        height: 220px;

    }

}


@media(max-width:576px) {

    .hero-destination {

        min-height: 280px;

        padding: 45px 18px;

    }


    .hero-destination h1 {

        font-size: 1.9rem;

    }


    .destination-card .card-body {

        padding: 20px;

    }


    .image-wrapper {

        height: 210px;

    }

}

</style>

</head>


<body>


<?php include("navbar.php"); ?>



<!-- =========================================================
     HERO
========================================================= -->

<section class="hero-destination text-center">

<div class="container">

    <h1 class="display-4 fw-bold">

        Explore Perlis Destinations

    </h1>


    <p class="lead mb-0">

        Discover nature, culture,
        heritage and beautiful places across Perlis

    </p>

</div>

</section>



<!-- =========================================================
     SEARCH
========================================================= -->

<div class="container mt-5">

<div class="card shadow-sm p-4 search-card">

<div class="row g-3">


<div class="col-md-7">

    <label class="form-label fw-bold">

        Search Destination

    </label>


    <div class="input-group">

        <span class="input-group-text">

            <i class="bi bi-search"></i>

        </span>


        <input
            type="text"
            id="keyword"
            class="form-control"
            placeholder="Search destination, location...">

    </div>

</div>



<div class="col-md-5">

    <label class="form-label fw-bold">

        Category

    </label>


    <select
        id="category"
        class="form-select">

        <option value="All">
            All Categories
        </option>

        <option value="Nature">
            Nature
        </option>

        <option value="Adventure">
            Adventure
        </option>

        <option value="Lake">
            Lake
        </option>

        <option value="Culture">
            Culture
        </option>

        <option value="Art">
            Art
        </option>

        <option value="History">
            History
        </option>

        <option value="Shopping">
            Shopping
        </option>

        <option value="Agrotourism">
            Agrotourism
        </option>

    </select>

</div>


</div>

</div>

</div>



<!-- =========================================================
     DESTINATIONS
========================================================= -->

<div class="container mt-5 mb-5">

<div
    class="row g-4"
    id="destinationList">


<?php

foreach (
    $destinations
    as $destination
) {


    $mapUrl =

        "https://www.google.com/maps/search/?api=1&query="

        .

        urlencode(

            $destination["name"]

            . ", "

            . $destination["location"]

        );

?>


<div
    class="col-lg-4 col-md-6 destination-card"

    data-name="<?=
        htmlspecialchars(
            strtolower(
                $destination["name"]
            )
        )
    ?>"

    data-location="<?=
        htmlspecialchars(
            strtolower(
                $destination["location"]
            )
        )
    ?>"

    data-category="<?=
        htmlspecialchars(
            $destination["category"]
        )
    ?>"
>


<div class="card shadow-sm h-100">


<!-- =====================================================
     DESTINATION IMAGE
===================================================== -->

<div class="image-wrapper">


    <img
        src="<?=
            htmlspecialchars(
                $destination["image"]
            )
        ?>"

        class="destination-image"

        alt="<?=
            htmlspecialchars(
                $destination["name"]
            )
        ?>"
    >


    <span class="category-badge">

        <?=
            htmlspecialchars(
                $destination["category"]
            )
        ?>

    </span>


</div>



<!-- =====================================================
     CONTENT
===================================================== -->

<div class="card-body d-flex flex-column">


<h4>

    <?=
        htmlspecialchars(
            $destination["name"]
        )
    ?>

</h4>



<div class="destination-location">

    <i class="bi bi-geo-alt-fill me-1"></i>

    <?=
        htmlspecialchars(
            $destination["location"]
        )
    ?>

</div>



<p class="destination-description">

    <?=
        htmlspecialchars(
            $destination["description"]
        )
    ?>

</p>



<!-- =====================================================
     ENTRANCE FEE
===================================================== -->

<?php

if (
    !empty(
        $destination["fee"]
    )
):

?>


<div class="fee-box">


<div class="fee-title">

    <i class="bi bi-ticket-perforated-fill me-1"></i>

    Entrance Fee

</div>


<div class="fee-price">

    <?=
        htmlspecialchars(
            $destination["fee"]
        )
    ?>

</div>


</div>


<?php endif; ?>



<!-- =====================================================
     GOOGLE MAP
===================================================== -->

<div class="mt-auto pt-4">


<a
    href="<?=
        htmlspecialchars(
            $mapUrl
        )
    ?>"

    class="destination-btn"
>


<i class="bi bi-geo-alt-fill"></i>

View Destination on Map


</a>


</div>


</div>


</div>


</div>


<?php

}

?>



<!-- =========================================================
     NO RESULT
========================================================= -->

<div
    id="noResult"
    class="col-12 text-center py-5"
    style="display:none;"
>


<i
    class="bi bi-search"
    style="
        font-size:3rem;
        color:#FFD700;
    ">
</i>


<h4
    class="fw-bold mt-3"
    style="color:#0057B8;"
>

    No Destination Found

</h4>


<p class="text-muted">

    Try another destination,
    location or category.

</p>


</div>


</div>

</div>



<?php include("footer.php"); ?>



<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



<!-- =========================================================
     SEARCH FILTER
========================================================= -->

<script>


const keywordInput =
    document.getElementById(
        "keyword"
    );


const categorySelect =
    document.getElementById(
        "category"
    );


const destinationCards =
    document.querySelectorAll(
        ".destination-card"
    );


const noResult =
    document.getElementById(
        "noResult"
    );



function filterDestinations() {


    const keyword =

        keywordInput
        .value
        .toLowerCase()
        .trim();


    const selectedCategory =

        categorySelect.value;


    let visible = 0;



    destinationCards.forEach(

        function(card) {


            const name =
                card.dataset.name;


            const location =
                card.dataset.location;


            const category =
                card.dataset.category;



            const matchesKeyword =

                name.includes(keyword)

                ||

                location.includes(keyword);



            const matchesCategory =

                selectedCategory === "All"

                ||

                category === selectedCategory;



            if (
                matchesKeyword
                &&
                matchesCategory
            ) {


                card.style.display = "";

                visible++;


            }

            else {


                card.style.display = "none";


            }


        }

    );



    if (
        visible === 0
    ) {

        noResult.style.display =
            "block";

    }

    else {

        noResult.style.display =
            "none";

    }


}



keywordInput.addEventListener(

    "input",

    filterDestinations

);



categorySelect.addEventListener(

    "change",

    filterDestinations

);


</script>


</body>

</html>