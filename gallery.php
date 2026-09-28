<?php

include("config.php");

?>


<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Gallery - PERLIS TOURISM SMART PORTAL
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


<!-- MAIN CSS -->

<link
    rel="stylesheet"
    href="assets/css/style.css"
>


<style>


/* =========================================
   BODY PAGE
========================================= */

body {

    background: #fefbea;

}


/* =========================================
   NAVBAR GRADIENT WARNA PERLIS
========================================= */

.navbar {

    background:
        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}


/* =========================================
   VIDEO SECTION
========================================= */

.video-section-title {

    color: #0057B8;

    font-weight: 700;

}


.video-card {

    border: none;

    border-radius: 15px;

    overflow: hidden;

    transition: 0.3s;

    background: white;

}


.video-card:hover {

    transform: translateY(-5px);

}


.video-wrapper {

    width: 100%;

    background: #000;

}


.video-wrapper video {

    width: 100%;

    height: 230px;

    object-fit: cover;

    display: block;

}


.video-card .card-title {

    color: #0057B8;

    font-weight: 700;

}


</style>


</head>



<body>


<!-- =========================================
     NAVBAR
========================================= -->

<?php include("navbar.php"); ?>





<!-- =========================================
     GALLERY HERO
========================================= -->

<section
    class="text-white text-center p-5"
    style="
        background-image: url('assets/images/header.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 400px;
        padding: 80px 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    "
>


<h1
    style="
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    "
>

PERLIS TOURISM SMART PORTAL Gallery

</h1>


<p
    style="
        margin: 0;
        font-size: 1.25rem;
    "
>

Explore beautiful moments around Perlis

</p>


</section>





<!-- =========================================
     IMAGE GALLERY
========================================= -->

<div class="container mt-5 mb-5">


<div class="row">


<?php


$sql = "

SELECT gallery.*, destinations.destination_name

FROM gallery

JOIN destinations

ON gallery.destination_id = destinations.destination_id

";


$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {


?>


<div class="col-md-4 mb-4">


<div class="card shadow">


<img
    src="assets/images/<?php echo $row['image']; ?>"
    class="card-img-top"
    height="250"
    style="object-fit: cover;"
    alt="<?php echo htmlspecialchars($row['destination_name']); ?>"
>


<div class="card-body">


<h5>

<?php echo $row['destination_name']; ?>

</h5>


<p>

<?php echo $row['caption']; ?>

</p>


</div>


</div>


</div>


<?php

}

?>


</div>


</div>





<!-- =========================================
     PERLIS TOURISM VIDEOS
========================================= -->

<section class="container mt-5 mb-5">


<!-- VIDEO SECTION TITLE -->

<div class="text-center mb-4">


<h2 class="video-section-title">

<i class="bi bi-play-circle-fill me-2"></i>

Perlis Tourism Videos

</h2>


<p class="text-muted">

Discover the beauty, culture and attractions of Perlis through videos.

</p>


</div>



<!-- VIDEO ROW -->

<div class="row justify-content-center">





<!-- =========================================
     VIDEO 1 - MAKAN
========================================= -->

<div class="col-lg-4 col-md-6 mb-4">


<div class="card shadow h-100 video-card">


<div class="video-wrapper">


<video
    controls
    preload="metadata"
>

    <source
        src="assets/images/makan.mp4"
        type="video/mp4"
    >

    Your browser does not support HTML video.

</video>


</div>



<div class="card-body">


<h5 class="card-title">

Makan

</h5>


<p class="text-muted mb-0">

Discover food and local flavours in Perlis.

</p>


</div>


</div>


</div>





<!-- =========================================
     VIDEO 2 - GAPURA
========================================= -->

<div class="col-lg-4 col-md-6 mb-4">


<div class="card shadow h-100 video-card">


<div class="video-wrapper">


<video
    controls
    preload="metadata"
>

    <source
        src="assets/images/Gapura.mp4"
        type="video/mp4"
    >

    Your browser does not support HTML video.

</video>


</div>



<div class="card-body">


<h5 class="card-title">

Gapura

</h5>


<p class="text-muted mb-0">

Explore attractions and beautiful locations around Perlis.

</p>


</div>


</div>


</div>





<!-- =========================================
     VIDEO 3 - PIECE
========================================= -->

<div class="col-lg-4 col-md-6 mb-4">


<div class="card shadow h-100 video-card">


<div class="video-wrapper">


<video
    controls
    preload="metadata"
>

    <source
        src="assets/images/piece.mp4"
        type="video/mp4"
    >

    Your browser does not support HTML video.

</video>


</div>



<div class="card-body">


<h5 class="card-title">

Piece

</h5>


<p class="text-muted mb-0">

Experience the beauty and atmosphere of Perlis.

</p>


</div>


</div>


</div>



</div>


</section>





<!-- =========================================
     FOOTER
========================================= -->

<?php include("footer.php"); ?>



<!-- BOOTSTRAP JAVASCRIPT -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>