<?php

include("config.php");


/* =========================================================
   PERLIS DESTINATION DATA
========================================================= */

$destinations = [

    [
        "name" => "Arked Niaga Padang Besar",
        "location" => "Padang Besar, Perlis",
        "category" => "Shopping",

        "image" =>
        "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Arked_Niaga_Padang_Besar%2C_Padang_Besar_20231224_111439.jpg/1280px-Arked_Niaga_Padang_Besar%2C_Padang_Besar_20231224_111439.jpg",

        "description" =>
        "A popular shopping destination located near the Malaysia-Thailand border. Visitors can shop for food, clothing, accessories, household products and various imported goods.",

        "fee" => ""
    ],


    [
        "name" => "Bukit Tok Dun",
        "location" => "Felda Laka Selatan, Perlis",
        "category" => "Adventure",

        "image" =>
        "https://1.bp.blogspot.com/-2J4Cqsu62_Q/W0RxuwiByRI/AAAAAAAAPhM/0yNAGzJouC4LsXOpJ9OVCuAB5wn6HW2HACKgBGAs/s1600/IMG_20180707_072647.jpg",

        "description" =>
        "A 325-metre hill located near the Perlis-Kedah border. It is popular among hikers for sunrise views, beautiful scenery and the famous sea of clouds.",

        "fee" => ""
    ],


    [
        "name" => "Galeri 3D Gua Kelam",
        "location" => "Kaki Bukit, Perlis",
        "category" => "Culture",

        "image" =>
        "https://www.malaysia.travel/mt-flmngr/files/Gua-Kelam-Recreational-Park/gua-kelam-2.jpg",

        "description" =>
        "An interactive gallery that presents the experience of exploring a cave through 3D graphics, natural sounds, specimens, artefacts, cave replicas and tourism information.",

        "fee" => ""
    ],


    [
        "name" => "Kampung Wai",
        "location" => "Kuala Perlis, Perlis",
        "category" => "Nature",

        "image" =>
        "https://www.sinarharian.com.my/uploads/images/2025/06/03/3151424.webp",

        "description" =>
        "A scenic eco-tourism attraction featuring a canal surrounded by ancient limestone hills. Visitors can enjoy kayaking while experiencing the beautiful natural environment.",

        "fee" => ""
    ],


    [
        "name" => "Kampung Warisan Tradisi Nelayan",
        "location" => "Seberang Ramai, Kuala Perlis",
        "category" => "Culture",

        "image" =>
        "https://myhalalxplorer.com/wp-content/uploads/2024/10/image-423-1024x485.png",

        "description" =>
        "A traditional fishing village transformed into a colourful tourism attraction while preserving the lifestyle and identity of the local fishing community.",

        "fee" => ""
    ],


    [
        "name" => "Kangar Street Art",
        "location" => "Kangar, Perlis",
        "category" => "Art",

        "image" =>
        "https://images.unsplash.com/photo-1549490349-8643362247b5?auto=format&fit=crop&w=1200&q=80",

        "description" =>
        "Colourful murals located around the centre of Kangar. The artwork highlights local attractions, culture and the unique identity of Perlis.",

        "fee" => ""
    ],


    [
        "name" => "Muzium Kota Kayang",
        "location" => "Kuala Perlis, Perlis",
        "category" => "History",

        "image" =>
        "https://assets.nst.com.my/images/articles/museum.JPG_1511421289.jpg",

        "description" =>
        "A museum dedicated to preserving and displaying the historical heritage of Perlis including archaeology, culture, traditional weapons and royal history.",

        "fee" => "Free admission"
    ],


    [
        "name" => "Superfruits Valley",
        "location" => "Chuping, Perlis",
        "category" => "Agrotourism",

        "image" =>
        "https://images.unsplash.com/photo-1471193945509-9ad0617afabf?auto=format&fit=crop&w=1200&q=80",

        "description" =>
        "An agricultural tourism attraction featuring various superfruits and crops including figs, gac fruit, citrus fruits and passion fruit.",

        "fee" => ""
    ],


    [
        "name" => "Taman Eko-Rimba Bukit Ayer",
        "location" => "Sungai Batu Pahat, Perlis",
        "category" => "Nature",

        "image" =>
        "https://cdn.libur.com.my/2024/01/Eqslq3DVEAMY3Cq.jpg",

        "description" =>
        "A popular family eco-tourism destination surrounded by natural forest, streams and recreational facilities. Visitors can enjoy picnics, nature and outdoor activities.",

        "fee" => "Entrance fee applies"
    ],


    [
        "name" => "Taman Eksotik Buah-Buahan (Taman Anggur)",
        "location" => "Sungai Batu Pahat, Perlis",
        "category" => "Agrotourism",

        "image" =>
        "https://images.unsplash.com/photo-1537640538966-79f369143f8f?auto=format&fit=crop&w=1200&q=80",

        "description" =>
        "An agricultural tourism attraction in Sungai Batu Pahat featuring exotic fruits and the agricultural landscape of Perlis.",

        "fee" => ""
    ],


    [
        "name" => "Tasik Melati",
        "location" => "Kangar, Perlis",
        "category" => "Lake",

        "image" =>
        "https://static.travelated.com/storage/articles-images/134/13401417/39420931144.jpg?format=webp&mode=crop&scale=down&w=1200",

        "description" =>
        "A peaceful shallow lake featuring more than 150 small sandbar islands. Walkways across the lake allow visitors to enjoy the scenery and relax.",

        "fee" => ""
    ],


    [
        "name" => "Tasik Timah Tasoh",
        "location" => "Beseri, Perlis",
        "category" => "Lake",

        "image" =>
        "https://www.malaysia.travel/mt-flmngr/files/Timah%20Tasoh/timah-tasoh-4.jpg",

        "description" =>
        "A scenic lake surrounded by beautiful countryside and fruit orchards. It is popular for photography, relaxation and freshwater fishing.",

        "fee" => ""
    ],


    [
        "name" => "Wang Kelian View Point",
        "location" => "Wang Kelian, Perlis",
        "category" => "Nature",

        "image" =>
        "https://cdn.libur.com.my/2024/01/392805141_6798195176882441_4710368985839737367_n.jpg",

        "description" =>
        "A popular viewpoint located approximately 304 metres above sea level along the route towards the Malaysia-Thailand border.",

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


<!-- BOOTSTRAP -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">


<!-- BOOTSTRAP ICONS -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet">


<!-- YOUR CSS -->

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
        linear-gradient(
            rgba(0, 40, 90, 0.35),
            rgba(0, 40, 90, 0.35)
        ),
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


.hero-destination h1 {

    font-weight: 800;

    text-shadow:
        0 3px 12px rgba(0,0,0,0.60);

}


.hero-destination p {

    text-shadow:
        0 2px 8px rgba(0,0,0,0.60);

}


/* =========================================================
   SEARCH BOX
========================================================= */

.search-card {

    border: none;

    border-radius: 20px;

    background: white;

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
        0 15px 35px rgba(0,0,0,0.16) !important;

}


/* =========================================================
   IMAGE
========================================================= */

.destination-image-wrapper {

    width: 100%;

    height: 240px;

    position: relative;

    overflow: hidden;

    background: #eee;

}


.destination-image {

    width: 100%;

    height: 100%;

    object-fit: cover;

    transition: 0.4s;

}


.destination-card .card:hover
.destination-image {

    transform: scale(1.06);

}


/* =========================================================
   CATEGORY BADGE
========================================================= */

.category-badge {

    position: absolute;

    top: 15px;

    left: 15px;

    z-index: 2;

    background: #FFD700;

    color: #004b9b;

    padding: 7px 15px;

    border-radius: 30px;

    font-size: 13px;

    font-weight: 800;

    box-shadow:
        0 4px 12px rgba(0,0,0,0.18);

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

    margin-bottom: 12px;

}


.destination-location {

    color: #666;

    font-size: 15px;

    margin-bottom: 13px;

}


.destination-location i {

    color: #E0A800;

}


.destination-description {

    color: #666;

    line-height: 1.7;

}


/* =========================================================
   ENTRANCE FEE
========================================================= */

.fee-box {

    background:
        linear-gradient(
            135deg,
            #fff4b8,
            #fffdf1
        );

    border-left:
        5px solid #FFD700;

    border-radius: 12px;

    padding: 13px 15px;

    margin-top: 12px;

}


.fee-title {

    color: #0057B8;

    font-size: 13px;

    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: 0.4px;

}


.fee-price {

    color: #333;

    font-weight: 700;

    margin-top: 4px;

}


/* =========================================================
   MAP BUTTON
========================================================= */

.map-button {

    width: 100%;

    display: flex;

    justify-content: center;

    align-items: center;

    gap: 8px;

    padding: 12px 18px;

    border-radius: 12px;

    border: none;

    background:
        linear-gradient(
            135deg,
            #0057B8,
            #087cf0
        );

    color: white;

    text-decoration: none;

    font-weight: 700;

    transition: 0.3s;

}


.map-button:hover {

    background: #FFD700;

    color: #0057B8;

    transform: translateY(-2px);

}


/* =========================================================
   RESULT COUNT
========================================================= */

.result-count {

    color: #666;

    font-size: 14px;

}


/* =========================================================
   NO RESULT
========================================================= */

.no-result {

    text-align: center;

    padding: 60px 20px;

}


.no-result i {

    font-size: 50px;

    color: #FFD700;

}


.no-result h4 {

    color: #0057B8;

    margin-top: 15px;

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:992px) {

    .hero-destination {

        min-height: 350px;

    }

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


    .hero-destination p {

        font-size: 1rem;

    }


    .destination-image-wrapper {

        height: 220px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

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


    .destination-image-wrapper {

        height: 210px;

    }


    .search-card {

        padding: 20px !important;

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

    Discover beautiful places, nature,
    culture and heritage across Perlis

</p>


</div>

</section>



<!-- =========================================================
     SEARCH
========================================================= -->

<div class="container mt-5">


<div class="card shadow-sm p-4 search-card">


<div class="row g-3">


<!-- SEARCH -->

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
    placeholder="Search destination or location...">


</div>


</div>



<!-- CATEGORY -->

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
     DESTINATION SECTION
========================================================= -->

<div class="container mt-5 mb-5">


<div class="d-flex justify-content-between align-items-center mb-4">


<h2
    class="fw-bold mb-0"
    style="color:#0057B8;">

    Places to Explore

</h2>


<span
    id="resultCount"
    class="result-count">

</span>


</div>



<div
    class="row g-4"
    id="destinationList">


<?php


foreach (
    $destinations
    as $destination
) {


    $mapURL =

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


<!-- IMAGE -->

<div class="destination-image-wrapper">


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



<!-- CARD CONTENT -->

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



<!-- ENTRANCE FEE -->

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


Entrance Information


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



<!-- MAP BUTTON -->

<div class="mt-auto pt-4">


<a
    href="<?=
        htmlspecialchars(
            $mapURL
        )
    ?>"

    target="_blank"

    rel="noopener noreferrer"

    class="map-button"
>


<i class="bi bi-map-fill"></i>


View on Google Maps


</a>


</div>


</div>


</div>


</div>


<?php


}


?>



<!-- NO RESULT -->

<div
    id="noResult"
    class="col-12 no-result"
    style="display:none;">


<i class="bi bi-search"></i>


<h4 class="fw-bold">

    No Destination Found

</h4>


<p class="text-muted">

    Try another destination,
    location or category.

</p>


</div>


</div>


</div>



<!-- FOOTER -->

<?php include("footer.php"); ?>



<!-- BOOTSTRAP JS -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



<!-- SEARCH + FILTER -->

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


const resultCount =

    document.getElementById(
        "resultCount"
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


    resultCount.textContent =

        visible

        +

        (
            visible === 1

            ? " destination"

            : " destinations"
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


filterDestinations();


</script>


</body>

</html>