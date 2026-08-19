<?php

// =====================================
// SMART PERLIS
// ADMIN DASHBOARD
// =====================================

require_once "auth.php";

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
Admin Dashboard - Smart Perlis
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

    background:#003F7D !important;

    border-bottom:4px solid #FFD700;

}


.admin-card {

    border:none;

    border-radius:18px;

    transition:.25s;

}


.admin-card:hover {

    transform:translateY(-5px);

}


.card-icon {

    font-size:45px;

    color:#0057A8;

}


.btn-perlis {

    background:#0057A8;

    color:white;

    border:none;

}


.btn-perlis:hover {

    background:#003F7D;

    color:white;

}

</style>

</head>


<body>


<!-- NAVBAR -->

<nav class="navbar navbar-dark">

<div class="container">

<span class="navbar-brand fw-bold">

<i class="bi bi-shield-lock-fill"></i>

Smart Perlis - Admin

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


<div class="mb-5">

<h2 class="fw-bold">

Admin Dashboard

</h2>

<p class="text-muted">

Manage Smart Perlis Tourism Portal

</p>

</div>


<div class="row g-4">


<!-- DESTINATION -->

<div class="col-md-6 col-lg-4">

<div class="card admin-card shadow-sm p-4 text-center h-100">

<i class="bi bi-geo-alt-fill card-icon"></i>

<h4 class="mt-3">

Manage Destinations

</h4>

<p class="text-muted">

Add, edit and remove tourism destinations.

</p>

<a
    href="manage_destination.php"
    class="btn btn-perlis"
>

Open

</a>

</div>

</div>


<!-- EVENTS -->

<div class="col-md-6 col-lg-4">

<div class="card admin-card shadow-sm p-4 text-center h-100">

<i class="bi bi-calendar-event-fill card-icon"></i>

<h4 class="mt-3">

Manage Events

</h4>

<p class="text-muted">

Manage tourism events and activities.

</p>

<a
    href="manage_event.php"
    class="btn btn-perlis"
>

Open

</a>

</div>

</div>


<!-- GALLERY -->

<div class="col-md-6 col-lg-4">

<div class="card admin-card shadow-sm p-4 text-center h-100">

<i class="bi bi-images card-icon"></i>

<h4 class="mt-3">

Gallery Management

</h4>

<p class="text-muted">

Manage tourism gallery images.

</p>

<a
    href="manage_gallery.php"
    class="btn btn-perlis"
>

Open

</a>

</div>

</div>


<!-- RATINGS -->

<div class="col-md-6 col-lg-4">

<div class="card admin-card shadow-sm p-4 text-center h-100">

<i class="bi bi-star-fill card-icon"></i>

<h4 class="mt-3">

Visitor Ratings

</h4>

<p class="text-muted">

View and manage visitor ratings.

</p>

<a
    href="manage_rating.php"
    class="btn btn-perlis"
>

Open

</a>

</div>

</div>


<!-- MESSAGES -->

<div class="col-md-6 col-lg-4">

<div class="card admin-card shadow-sm p-4 text-center h-100">

<i class="bi bi-envelope-fill card-icon"></i>

<h4 class="mt-3">

Messages

</h4>

<p class="text-muted">

View messages submitted by visitors.

</p>

<a
    href="messages.php"
    class="btn btn-perlis"
>

Open

</a>

</div>

</div>


<!-- ANALYTICS -->

<div class="col-md-6 col-lg-4">

<div class="card admin-card shadow-sm p-4 text-center h-100">

<i class="bi bi-bar-chart-fill card-icon"></i>

<h4 class="mt-3">

Visitor Analytics

</h4>

<p class="text-muted">

View visitor statistics and reports.

</p>

<a
    href="visitor_report.php"
    class="btn btn-perlis"
>

Open

</a>

</div>

</div>


</div>


<!-- BACK TO WEBSITE -->

<div class="text-center mt-5">

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