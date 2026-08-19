<?php

// =====================================
// SMART PERLIS
// OFFICER DASHBOARD
// =====================================

require_once "auth.php";

include("../config.php");


// =====================================
// COUNT DESTINATIONS
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destinations"
);

$destinations = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $destinations = $row['total'] ?? 0;

}


// =====================================
// COUNT EVENTS
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM events"
);

$events = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $events = $row['total'] ?? 0;

}


// =====================================
// COUNT GALLERY
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM gallery"
);

$gallery = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $gallery = $row['total'] ?? 0;

}


// =====================================
// COUNT RATINGS
// =====================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destination_ratings"
);

$ratings = 0;

if ($result) {

    $row = mysqli_fetch_assoc($result);

    $ratings = $row['total'] ?? 0;

}

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
Officer Dashboard - Smart Perlis
</title>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<style>

body {

    background:#f5f7f6;

}


.navbar {

    background:#146c43 !important;

    border-bottom:4px solid #FFD700;

}


.stat-card {

    border:none;

    border-radius:16px;

    transition:.25s;

}


.stat-card:hover {

    transform:translateY(-4px);

}


.quick-card {

    border:none;

    border-radius:16px;

}


</style>

</head>


<body>


<!-- NAVBAR -->

<nav class="navbar navbar-dark">

<div class="container">

<span class="navbar-brand fw-bold">

<i class="bi bi-person-badge-fill"></i>

Smart Perlis - Officer

</span>


<div class="d-flex align-items-center gap-3">

<span class="text-white">

<i class="bi bi-person-circle"></i>

<?php

echo htmlspecialchars($_SESSION['username']);

?>

</span>


<a
    href="../logout.php"
    class="btn btn-light btn-sm"
>

<i class="bi bi-box-arrow-right"></i>

Logout

</a>

</div>

</div>

</nav>


<!-- CONTENT -->

<div class="container py-5">


<div class="mb-4">

<h2 class="fw-bold">

Officer Dashboard

</h2>

<p class="text-muted">

Welcome to Smart Perlis Tourism Portal Management

</p>

</div>


<!-- STATISTICS -->

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

<i class="bi bi-geo-alt-fill fs-1 text-success"></i>

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

<i class="bi bi-calendar-event-fill fs-1 text-primary"></i>

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

<i class="bi bi-star-fill fs-1 text-danger"></i>

</div>

</div>

</div>


</div>


<!-- QUICK ACTIONS -->

<div class="card quick-card shadow-sm mt-5 p-4">

<h4 class="fw-bold">

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


<!-- BACK -->

<div class="text-center mt-4">

<a
    href="../index.php"
    class="text-decoration-none"
>

<i class="bi bi-arrow-left"></i>

Back to Website

</a>

</div>


</div>


</body>

</html>