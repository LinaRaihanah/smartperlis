<?php

include("header.php");


// Count destinations

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destinations"
);

$destinations =
mysqli_fetch_assoc($result)['total'];


// Count events

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM events"
);

$events =
mysqli_fetch_assoc($result)['total'];


// Count gallery

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM gallery"
);

$gallery =
mysqli_fetch_assoc($result)['total'];


// Count ratings

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destination_ratings"
);

$ratings =
mysqli_fetch_assoc($result)['total'];

?>

<div class="d-flex justify-content-between align-items-center mb-4">

<div>

<h2 class="fw-bold">

Officer Dashboard

</h2>

<p class="text-muted">

Welcome to Smart Perlis Tourism Portal Management

</p>

</div>

</div>


<div class="row g-4">


<!-- DESTINATIONS -->

<div class="col-md-6 col-xl-3">

<div class="card stat-card shadow-sm p-4">

<div class="d-flex justify-content-between">

<div>

<small class="text-muted">

Destinations

</small>

<h2 class="fw-bold">

<?php echo $destinations; ?>

</h2>

</div>

<i class="bi bi-geo-alt fs-1 text-success"></i>

</div>

</div>

</div>


<!-- EVENTS -->

<div class="col-md-6 col-xl-3">

<div class="card stat-card shadow-sm p-4">

<div class="d-flex justify-content-between">

<div>

<small class="text-muted">

Events

</small>

<h2 class="fw-bold">

<?php echo $events; ?>

</h2>

</div>

<i class="bi bi-calendar-event fs-1 text-primary"></i>

</div>

</div>

</div>


<!-- GALLERY -->

<div class="col-md-6 col-xl-3">

<div class="card stat-card shadow-sm p-4">

<div class="d-flex justify-content-between">

<div>

<small class="text-muted">

Gallery

</small>

<h2 class="fw-bold">

<?php echo $gallery; ?>

</h2>

</div>

<i class="bi bi-images fs-1 text-warning"></i>

</div>

</div>

</div>


<!-- RATINGS -->

<div class="col-md-6 col-xl-3">

<div class="card stat-card shadow-sm p-4">

<div class="d-flex justify-content-between">

<div>

<small class="text-muted">

Ratings

</small>

<h2 class="fw-bold">

<?php echo $ratings; ?>

</h2>

</div>

<i class="bi bi-star fs-1 text-danger"></i>

</div>

</div>

</div>


</div>


<div class="card shadow-sm mt-5 p-4">

<h4>

Quick Actions

</h4>


<div class="row g-3 mt-2">


<div class="col-md-4">

<a
href="destinations.php"
class="btn btn-success w-100 p-3"
>

<i class="bi bi-geo-alt"></i>

Manage Destinations

</a>

</div>


<div class="col-md-4">

<a
href="events.php"
class="btn btn-primary w-100 p-3"
>

<i class="bi bi-calendar-event"></i>

Manage Events

</a>

</div>


<div class="col-md-4">

<a
href="gallery.php"
class="btn btn-warning w-100 p-3"
>

<i class="bi bi-images"></i>

Manage Gallery

</a>

</div>


</div>

</div>


<?php

include("footer.php");

?>