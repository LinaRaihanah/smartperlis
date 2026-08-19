<?php

session_start();

include("../config.php");


// ========================================
// CHECK ADMIN LOGIN
// ========================================

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}


// ========================================
// CALCULATE AVERAGE RATING
// ========================================

$avgQuery = mysqli_query(
    $conn,

    "SELECT AVG(rating) AS average
     FROM destination_ratings"
);

$avgData = mysqli_fetch_assoc($avgQuery);


// Convert average from /5 to /10

if($avgData['average']){

    $averageRating = $avgData['average'] * 2;

}
else{

    $averageRating = 0;

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
Visitor Rating
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


<style>

/* ===============================
   BLUE + YELLOW THEME
================================ */

.navbar-blue {
    background-color: #0057B8;
}


/* Logo Icon */

.logo-icon {
    color: #FFD700;
    font-size: 28px;
}


/* ===============================
   RATING SUMMARY
================================ */

.rating-card {
    background-color: white;
    border: none;
    border-top: 5px solid #FFD700;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}


/* Average Rating */

.average-rating {
    color: #0057B8;
    font-size: 48px;
    font-weight: bold;
}


/* Stars */

.rating-stars {
    color: #FFD700;
    font-size: 28px;
}


/* ===============================
   REVIEW CONTAINER
================================ */

.review-container {
    background-color: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}


/* ===============================
   TABLE
================================ */

.rating-table {
    margin-bottom: 0;
}


/* Table Header */

.rating-table thead {
    background-color: #0057B8;
    color: white;
}

.rating-table thead th {
    padding: 15px;
    border: none;
    font-weight: 600;
}


/* Yellow line */

.rating-table thead tr {
    border-bottom: 4px solid #FFD700;
}


/* Table Body */

.rating-table tbody td {
    padding: 14px;
    vertical-align: middle;
}


/* Alternating rows */

.rating-table tbody tr:nth-child(even) {
    background-color: #F0F6FF;
}

.rating-table tbody tr:nth-child(odd) {
    background-color: #FFFFFF;
}


/* Hover */

.rating-table tbody tr:hover {
    background-color: #FFF8D6;
    transition: 0.2s;
}


/* ID Badge */

.id-badge {
    background-color: #FFD700;
    color: #000;
    padding: 6px 10px;
    border-radius: 20px;
    font-weight: bold;
}


/* Rating */

.rating-value {
    color: #0057B8;
    font-weight: bold;
}

.rating-stars-small {
    color: #FFD700;
}


/* Location Icon */

.location-icon {
    color: #0057B8;
}

</style>

</head>


<body class="bg-light">


<!-- ========================================
     NAVBAR
======================================== -->

<nav class="navbar navbar-dark navbar-blue">

<div class="container">


<!-- Logo -->

<a class="navbar-brand d-flex align-items-center gap-2">

<i class="bi bi-geo-alt-fill logo-icon"></i>

<span>

Smart Perlis Tourism Portal

</span>

</a>


<!-- Dashboard -->

<a
    href="dashboard.php"
    class="btn btn-light"
>

<i class="bi bi-speedometer2"></i>

Dashboard

</a>

</div>

</nav>



<!-- ========================================
     MAIN CONTENT
======================================== -->

<div class="container mt-5">


<!-- ========================================
     AVERAGE RATING
======================================== -->

<div class="card rating-card p-4 mb-4 text-center">


<h3>

<i class="bi bi-star-fill rating-stars"></i>

Average Visitor Satisfaction

</h3>


<div class="average-rating">

<?php

echo number_format(
    $averageRating,
    1
);

?>

<span style="font-size: 25px;">

/ 10

</span>

</div>


<div class="rating-stars">

<?php

$fullStars = round($averageRating / 2);

for($i = 0; $i < $fullStars; $i++){

    echo "⭐";

}

?>

</div>


<p class="text-muted mb-0">

Based on visitor ratings

</p>


</div>



<!-- ========================================
     RATING TABLE
======================================== -->

<div class="review-container">


<h3 class="mb-4">

<i class="bi bi-chat-square-text-fill text-primary"></i>

All Visitor Reviews

</h3>


<div class="table-responsive">


<table class="table rating-table">


<thead>

<tr>

<th>
ID
</th>

<th>
Destination
</th>

<th>
Name
</th>

<th>
Rating
</th>

<th>
Comment
</th>

<th>
Date
</th>

</tr>

</thead>


<tbody>


<?php


$sql = "

SELECT

destination_ratings.*,

destinations.destination_name

FROM destination_ratings

JOIN destinations

ON destination_ratings.destination_id =
destinations.destination_id

ORDER BY created_at DESC

";


$result = mysqli_query(
    $conn,
    $sql
);


if(mysqli_num_rows($result) == 0){

?>


<tr>

<td
    colspan="6"
    class="text-center text-muted"
>

No visitor reviews available.

</td>

</tr>


<?php

}


while($row = mysqli_fetch_assoc($result)){

?>


<tr>


<!-- ID -->

<td>

<span class="id-badge">

<?php

echo (int)$row['rating_id'];

?>

</span>

</td>



<!-- Destination -->

<td>

<i class="bi bi-geo-alt-fill location-icon"></i>

<?php

echo htmlspecialchars(
    $row['destination_name']
);

?>

</td>



<!-- Name -->

<td>

<strong>

<?php

echo htmlspecialchars(
    $row['name']
);

?>

</strong>

</td>



<!-- Rating -->

<td>

<?php

// Convert rating from /5 to /10

$rating10 = $row['rating'] * 2;


// Display stars

for(
    $i = 0;
    $i < $row['rating'];
    $i++
){

    echo "<span class='rating-stars-small'>⭐</span>";

}

?>


<br>


<span class="rating-value">

<?php

echo $rating10;

?> / 10

</span>

</td>



<!-- Comment -->

<td>

<?php

echo !empty($row['comment'])
    ? htmlspecialchars($row['comment'])
    : "-";

?>

</td>



<!-- Date -->

<td>

<i class="bi bi-calendar-event location-icon"></i>

<?php

echo date(
    "d M Y",
    strtotime(
        $row['created_at']
    )
);

?>

</td>


</tr>


<?php

}

?>


</tbody>

</table>

</div>


</div>


</div>


</body>

</html>