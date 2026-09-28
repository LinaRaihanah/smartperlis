<?php

include("config.php");


/* =========================================================
   ENTRANCE / FEE INFORMATION

   IMPORTANT:
   Nama destination mesti sama dengan nama dalam database.
========================================================= */

$destinationFees = [

    "Gua Kelam" =>
        "Malaysian: Adult RM2, Child RM1. Non-Malaysian: Adult RM5, Child RM3. Children under 6 and OKU: Free. Additional activities may have separate charges.",

    "Wang Kelian Viewpoint" =>
        "Malaysian: Adult RM2, Child RM1. Non-Malaysian: Adult RM5, Child RM2. Malaysian children under 6: Free.",

    "Tasik Timah Tasoh" =>
        "Free public access. Charges may apply for certain activities or services.",

    "Padang Besar (Arked Niaga)" =>
        "Free public access. Shopping purchases are separate.",

    "Kuala Perlis Seafood & Jetty" =>
        "Free public access. Food, ferry and other services have separate charges.",

    "Masjid Al-Hussain (Floating Mosque)" =>
        "Free admission.",

    "Muzium Kota Kayang" =>
        "Free admission.",

    "Taman Ular dan Reptilia" =>
        "Paid admission. Current ticket price not specified.",

    "Rimba Herba Perlis" =>
        "Malaysian: Adult RM2, Child RM1, OKU Free. Non-Malaysian: Adult RM5, Child RM3. Optional activities may have separate charges.",

    "Taman Eko Rimba Bukit Ayer" =>
        "Malaysian: Adult RM2, Child RM1, OKU Free. Non-Malaysian: Adult RM5, Child RM2. Swimming pool and camping have separate charges.",

    "Arau Royal Town & Galeri DiRaja" =>
        "Fee not specified. Access to some areas may require prior permission.",

    "Kangar Art Street & City Center" =>
        "Free public access.",

    "Ladang Nipah Kipli" =>
        "Fee not specified.",

    "Delapan Tumpat Sungai Berembang" =>
        "Fee not specified.",

    "Taman Anggur Perlis" =>
        "Fee not specified.",

    "Pusat Kecemerlangan Pengeluaran Harumanis" =>
        "Fee not specified.",

    "Taman Agrovet" =>
        "Fee not specified.",

    "Santuari Ikan Air Tawar" =>
        "Fee not specified.",

    "Ladang Buah Tin" =>
        "Fee not specified.",

    "Taman Negara Perlis" =>
        "Malaysian: Adult RM2, Child RM1. Non-Malaysian: Adult RM5, Child RM3. Children under 6 and OKU: Free.",

    "Bukit Chabang" =>
        "Fee not specified.",

    "Hutan Rekreasi Bukit Jernih" =>
        "Fee not specified.",

    "Bukit Keteri" =>
        "Fee not specified.",

    "Bukit Tok Dun" =>
        "Fee not specified.",

    "Trail Litar Wang Gunung" =>
        "Fee not specified.",

    "Pasar Neko / Kompleks LKM" =>
        "Free public access. Purchases are separate.",

    "Jambatan Tuanku Syed Putra" =>
        "Free public access.",

    "Laman Seni Negeri Perlis" =>
        "Free public access.",

    "Kompleks Jabatan Kebudayaan & Kesenian" =>
        "Fee not specified.",

    "Homestay FELDA Mata Ayer" =>
        "Accommodation and activity charges vary. Fee not fixed.",

    "Nat Pokok Sena" =>
        "Free public access. Purchases are separate.",

    "Pasar Terapung JPS" =>
        "Free public access. Food and purchases are separate.",

    "Trik Kurong Tegar" =>
        "Fee not specified.",

    "Kelab Golf Putra" =>
        "Charges vary depending on golf facilities and services. Fee not fixed.",

    "Denai Larian Pengkalan Asam" =>
        "Free public access.",

    "Taman Awam Bukit Lagi" =>
        "Free public access.",

    "Dataran Dato' Sheikh Ahmad" =>
        "Free public access.",

    "Litar Go-Kart UniMAP" =>
        "Activity charges may apply. Fee not specified."

];


/* =========================================================
   GET ALL 38 DESTINATIONS FROM DATABASE
========================================================= */

$destinations = [];


$sql = "
    SELECT
        destination_id,
        destination_name,
        category,
        location,
        description,
        image
    FROM destinations
    ORDER BY destination_id ASC
";


$result = mysqli_query($conn, $sql);


if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {

        $destinationName =
            $row["destination_name"];


        $destinations[] = [

            "id" =>
                $row["destination_id"],

            "name" =>
                $destinationName,

            "location" =>
                $row["location"],

            "category" =>
                $row["category"],

            "image" =>
                "assets/images/" . $row["image"],

            "description" =>
                $row["description"],

            "fee" =>
                $destinationFees[$destinationName]
                ?? "Fee not specified."

        ];

    }

}


/* =========================================================
   CATEGORY LIST
========================================================= */

$categories = [];


foreach ($destinations as $destination) {

    if (
        !in_array(
            $destination["category"],
            $categories,
            true
        )
    ) {

        $categories[] =
            $destination["category"];

    }

}


sort($categories);

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
    Destination - PERLIS TOURISM SMART PORTAL
</title>


<!-- BOOTSTRAP -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<!-- BOOTSTRAP ICONS -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<!-- YOUR CSS -->

<link
    rel="stylesheet"
    href="assets/css/style.css"
>


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
   IMAGE PLACEHOLDER
========================================================= */

.image-placeholder {

    width: 100%;

    height: 100%;

    display: none;

    align-items: center;

    justify-content: center;

    flex-direction: column;

    background:
        linear-gradient(
            135deg,
            #eaf3fb,
            #fff8cc
        );

    color: #0057B8;

    text-align: center;

}


.image-placeholder i {

    font-size: 45px;

    margin-bottom: 8px;

}


.image-placeholder span {

    font-size: 13px;

    font-weight: 700;

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

    line-height: 1.6;

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
    placeholder="Search destination or location..."
>


</div>


</div>


<!-- CATEGORY -->

<div class="col-md-5">


<label class="form-label fw-bold">

    Category

</label>


<select
    id="category"
    class="form-select"
>


<option value="All">

    All Categories

</option>


<?php foreach ($categories as $category): ?>


<option
    value="<?= htmlspecialchars($category) ?>"
>

    <?= htmlspecialchars($category) ?>

</option>


<?php endforeach; ?>


</select>


</div>


</div>


</div>


</div>


<!-- =========================================================
     DESTINATION SECTION
========================================================= -->

<div class="container mt-5 mb-5">


<div
    class="d-flex justify-content-between align-items-center mb-4"
>


<h2
    class="fw-bold mb-0"
    style="color:#0057B8;"
>

    Places to Explore

</h2>


<span
    id="resultCount"
    class="result-count"
>

</span>


</div>


<div
    class="row g-4"
    id="destinationList"
>


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

    onerror="
        this.style.display='none';
        this.nextElementSibling.style.display='flex';
    "
>


<!-- IMAGE PLACEHOLDER -->

<div class="image-placeholder">

    <i class="bi bi-image"></i>

    <span>
        Image Coming Soon
    </span>

</div>


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


<!-- =========================================================
     ENTRANCE INFORMATION
========================================================= -->

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
    style="display:none;"
>


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


<!-- =========================================================
     SEARCH + FILTER
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