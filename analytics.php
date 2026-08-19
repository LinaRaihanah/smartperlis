<?php

include("config.php");


// =====================================================
// SMART PERLIS TOURISM PORTAL
// ANALYTICS DASHBOARD
// PHP + MYSQL + CHART.JS
// NO POWER BI
// =====================================================



// =====================================================
// KPI 1
// TOTAL DESTINATIONS
// =====================================================

$query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destinations"
);

$row = mysqli_fetch_assoc($query);

$totalDestination = $row['total'];



// =====================================================
// KPI 2
// TOTAL EVENTS
// =====================================================

$query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM events"
);

$row = mysqli_fetch_assoc($query);

$totalEvent = $row['total'];



// =====================================================
// KPI 3
// TOTAL TOURISM VISITORS
// =====================================================

$query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM visitors"
);

$row = mysqli_fetch_assoc($query);

$totalVisitor = $row['total'];



// =====================================================
// KPI 4
// TOTAL WEBSITE VISITS
// =====================================================

$query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM visitor_logs"
);

$row = mysqli_fetch_assoc($query);

$totalWebsiteVisit = $row['total'];



// =====================================================
// KPI 5
// TOTAL REVIEWS
// =====================================================

$query = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM destination_ratings"
);

$row = mysqli_fetch_assoc($query);

$totalReviews = $row['total'];



// =====================================================
// KPI 6
// AVERAGE RATING
// =====================================================

$query = mysqli_query(
    $conn,
    "SELECT AVG(rating) AS average_rating
     FROM destination_ratings"
);

$row = mysqli_fetch_assoc($query);

$averageRating = $row['average_rating'];

if ($averageRating == null) {

    $averageRating = 0;

}



// =====================================================
// POPULAR DESTINATION
// Based on total visitors
// =====================================================

$query = mysqli_query(
    $conn,

    "SELECT
        d.destination_name,
        COUNT(v.visitor_id) AS total_visitors

     FROM destinations d

     LEFT JOIN visitors v
     ON d.destination_id = v.destination_id

     GROUP BY
        d.destination_id,
        d.destination_name

     ORDER BY total_visitors DESC

     LIMIT 1"
);


$popularDestination = mysqli_fetch_assoc($query);


if ($popularDestination) {

    $popularDestinationName =
        $popularDestination['destination_name'];

    $popularDestinationVisitors =
        $popularDestination['total_visitors'];

} else {

    $popularDestinationName = "No Data";

    $popularDestinationVisitors = 0;

}



// =====================================================
// CHART 1
// VISITORS BY COUNTRY
// =====================================================

$countryLabels = [];

$countryValues = [];


$query = mysqli_query(
    $conn,

    "SELECT
        country,
        COUNT(visitor_id) AS total_visitors

     FROM visitors

     WHERE country IS NOT NULL
     AND country != ''

     GROUP BY country

     ORDER BY total_visitors DESC"
);


while ($row = mysqli_fetch_assoc($query)) {

    $countryLabels[] = $row['country'];

    $countryValues[] =
        (int)$row['total_visitors'];

}



// =====================================================
// CHART 2
// VISITOR PERCENTAGE BY COUNTRY
// =====================================================

$percentageLabels = [];

$percentageValues = [];


$query = mysqli_query(
    $conn,

    "SELECT
        country,

        ROUND(
            COUNT(visitor_id) * 100.0 /
            NULLIF(
                (SELECT COUNT(*) FROM visitors),
                0
            ),
            2
        ) AS percentage

     FROM visitors

     WHERE country IS NOT NULL
     AND country != ''

     GROUP BY country

     ORDER BY percentage DESC"
);


while ($row = mysqli_fetch_assoc($query)) {

    $percentageLabels[] = $row['country'];

    $percentageValues[] =
        (float)$row['percentage'];

}



// =====================================================
// CHART 3
// MONTHLY VISITOR TREND
// =====================================================

$monthLabels = [];

$monthValues = [];


$query = mysqli_query(
    $conn,

    "SELECT
        MONTH(visit_date) AS month_number,
        MONTHNAME(visit_date) AS month_name,
        COUNT(visitor_id) AS total_visitors

     FROM visitors

     WHERE visit_date IS NOT NULL

     GROUP BY
        MONTH(visit_date),
        MONTHNAME(visit_date)

     ORDER BY month_number"
);


while ($row = mysqli_fetch_assoc($query)) {

    $monthLabels[] =
        $row['month_name'];

    $monthValues[] =
        (int)$row['total_visitors'];

}



// =====================================================
// CHART 4
// VISITORS BY DESTINATION
// =====================================================

$destinationLabels = [];

$destinationValues = [];


$query = mysqli_query(
    $conn,

    "SELECT
        d.destination_name,
        COUNT(v.visitor_id) AS total_visitors

     FROM destinations d

     LEFT JOIN visitors v
     ON d.destination_id = v.destination_id

     GROUP BY
        d.destination_id,
        d.destination_name

     ORDER BY total_visitors DESC"
);


while ($row = mysqli_fetch_assoc($query)) {

    $destinationLabels[] =
        $row['destination_name'];

    $destinationValues[] =
        (int)$row['total_visitors'];

}



// =====================================================
// CHART 5
// AVERAGE RATING BY DESTINATION
// =====================================================

$ratingLabels = [];

$ratingValues = [];


$query = mysqli_query(
    $conn,

    "SELECT
        d.destination_name,

        ROUND(
            AVG(dr.rating),
            2
        ) AS average_rating

     FROM destinations d

     LEFT JOIN destination_ratings dr
     ON d.destination_id = dr.destination_id

     GROUP BY
        d.destination_id,
        d.destination_name

     ORDER BY average_rating DESC"
);


while ($row = mysqli_fetch_assoc($query)) {

    $ratingLabels[] =
        $row['destination_name'];


    if ($row['average_rating'] == null) {

        $ratingValues[] = 0;

    } else {

        $ratingValues[] =
            (float)$row['average_rating'];

    }

}



// =====================================================
// CHART 6
// DESTINATIONS BY CATEGORY
// =====================================================

$categoryLabels = [];

$categoryValues = [];


$query = mysqli_query(
    $conn,

    "SELECT
        category,
        COUNT(destination_id) AS total

     FROM destinations

     WHERE category IS NOT NULL
     AND category != ''

     GROUP BY category

     ORDER BY total DESC"
);


while ($row = mysqli_fetch_assoc($query)) {

    $categoryLabels[] =
        $row['category'];

    $categoryValues[] =
        (int)$row['total'];

}



// =====================================================
// CHART 7
// WEBSITE VISITS BY PAGE
// =====================================================

$pageLabels = [];

$pageValues = [];


$query = mysqli_query(
    $conn,

    "SELECT
        page,
        COUNT(log_id) AS total_visits

     FROM visitor_logs

     GROUP BY page

     ORDER BY total_visits DESC"
);


while ($row = mysqli_fetch_assoc($query)) {

    $pageLabels[] =
        $row['page'];

    $pageValues[] =
        (int)$row['total_visits'];

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

Tourism Analytics Dashboard -
Smart Perlis Tourism Portal

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



<!-- Chart.js -->

<script
src="https://cdn.jsdelivr.net/npm/chart.js">
</script>



<!-- Website CSS -->

<link
rel="stylesheet"
href="assets/css/style.css"
>



<style>


/* =====================================================
   BODY
   ===================================================== */

body {

    background: #fefbea;

}



/* =====================================================
   NAVBAR
   ===================================================== */

.navbar {

    background:

        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}



/* =====================================================
   HEADER
   ORIGINAL HEADER
   NO DARK OVERLAY
   ===================================================== */

.analytics-header {

    background-image: url('assets/images/header.jpg');

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    min-height: 400px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: center;

    color: white;

    padding: 50px;

}



.analytics-header h1 {

    font-size: 3.5rem;

    font-weight: 700;

    margin-bottom: 10px;

}



.analytics-header p {

    margin: 0;

    font-size: 18px;

}



/* =====================================================
   KPI CARD
   ===================================================== */

.kpi-card {

    background: white;

    border: none;

    border-radius: 18px;

    padding: 25px;

    height: 100%;

    box-shadow:

        0 5px 15px
        rgba(0,0,0,0.08);

    transition: 0.3s;

}



.kpi-card:hover {

    transform: translateY(-5px);

    box-shadow:

        0 10px 20px
        rgba(0,0,0,0.12);

}



.kpi-icon {

    font-size: 42px;

    margin-bottom: 10px;

}



.kpi-number {

    font-size: 32px;

    font-weight: 700;

    margin: 0;

}



.kpi-title {

    color: #666;

    margin-top: 5px;

    margin-bottom: 0;

}



/* =====================================================
   POPULAR DESTINATION
   ===================================================== */

.popular-card {

    background:

        linear-gradient(
            135deg,
            #FFD700,
            #0057B8
        );

    color: white;

    border-radius: 20px;

    padding: 35px;

    box-shadow:

        0 5px 15px
        rgba(0,0,0,0.15);

}



.popular-card h2 {

    font-size: 32px;

    font-weight: 700;

}



/* =====================================================
   ANALYTICS CARD
   ===================================================== */

.analytics-card {

    background: white;

    border: none;

    border-radius: 18px;

    padding: 25px;

    box-shadow:

        0 5px 15px
        rgba(0,0,0,0.08);

    height: 100%;

}



.analytics-card h4 {

    font-weight: 700;

    margin-bottom: 20px;

}



/* =====================================================
   CHART
   ===================================================== */

.chart-container {

    position: relative;

    height: 320px;

}



/* =====================================================
   SECTION TITLE
   ===================================================== */

.section-title {

    font-weight: 700;

    margin-bottom: 25px;

}



/* =====================================================
   INSIGHT CARD
   ===================================================== */

.insight-card {

    background: white;

    border-radius: 18px;

    padding: 25px;

    box-shadow:

        0 5px 15px
        rgba(0,0,0,0.08);

    height: 100%;

}



.insight-card i {

    font-size: 30px;

}



</style>


</head>



<body>



<!-- =====================================================
     NAVBAR
     ===================================================== -->

<?php include("navbar.php"); ?>



<!-- =====================================================
     HEADER
     ===================================================== -->

<section
class="analytics-header"
>


<h1>

Tourism Analytics Dashboard

</h1>


<p>

Data-driven insights for Smart Perlis Tourism Portal

</p>


</section>



<!-- =====================================================
     KPI CARDS
     ===================================================== -->

<div class="container mt-5">


<div class="row g-4">



<!-- TOTAL DESTINATIONS -->

<div class="col-lg-3 col-md-6">


<div
class="kpi-card text-center"
>


<i
class="bi bi-map kpi-icon text-success">
</i>


<h2 class="kpi-number">

<?php

echo $totalDestination;

?>

</h2>


<p class="kpi-title">

Total Destinations

</p>


</div>


</div>



<!-- TOTAL EVENTS -->

<div class="col-lg-3 col-md-6">


<div
class="kpi-card text-center"
>


<i
class="bi bi-calendar-event kpi-icon text-primary">
</i>


<h2 class="kpi-number">

<?php

echo $totalEvent;

?>

</h2>


<p class="kpi-title">

Total Events

</p>


</div>


</div>



<!-- TOTAL VISITORS -->

<div class="col-lg-3 col-md-6">


<div
class="kpi-card text-center"
>


<i
class="bi bi-people kpi-icon text-warning">
</i>


<h2 class="kpi-number">

<?php

echo $totalVisitor;

?>

</h2>


<p class="kpi-title">

Tourism Visitors

</p>


</div>


</div>



<!-- WEBSITE VISITS -->

<div class="col-lg-3 col-md-6">


<div
class="kpi-card text-center"
>


<i
class="bi bi-bar-chart-line kpi-icon text-danger">
</i>


<h2 class="kpi-number">

<?php

echo $totalWebsiteVisit;

?>

</h2>


<p class="kpi-title">

Website Visits

</p>


</div>


</div>


</div>


</div>



<!-- =====================================================
     SECOND KPI ROW
     ===================================================== -->

<div class="container mt-4">


<div class="row g-4">



<!-- AVERAGE RATING -->

<div class="col-md-6">


<div
class="kpi-card text-center"
>


<i
class="bi bi-star-fill kpi-icon text-warning">
</i>


<h2 class="kpi-number">


<?php

echo number_format(
    $averageRating,
    2
);

?>

/ 5


</h2>


<p class="kpi-title">

Average Destination Rating

</p>


</div>


</div>



<!-- TOTAL REVIEWS -->

<div class="col-md-6">


<div
class="kpi-card text-center"
>


<i
class="bi bi-chat-square-text kpi-icon text-info">
</i>


<h2 class="kpi-number">


<?php

echo $totalReviews;

?>


</h2>


<p class="kpi-title">

Total Destination Reviews

</p>


</div>


</div>


</div>


</div>



<!-- =====================================================
     POPULAR DESTINATION
     ===================================================== -->

<div class="container mt-5">


<div
class="popular-card text-center"
>


<i
class="bi bi-trophy-fill"
style="font-size:45px;">
</i>


<h5 class="mt-3">

Most Popular Destination

</h5>


<h2>

<?php

echo htmlspecialchars(
    $popularDestinationName
);

?>

</h2>


<p>

<?php

echo $popularDestinationVisitors;

?>

visitor(s) recorded

</p>


</div>


</div>



<!-- =====================================================
     VISITOR ANALYTICS
     ===================================================== -->

<div class="container mt-5">


<h2
class="text-center section-title">

Visitor Analytics

</h2>



<div class="row g-4">



<!-- VISITORS BY COUNTRY -->

<div class="col-md-6">


<div
class="analytics-card"
>


<h4>

<i class="bi bi-globe2"></i>

Visitors by Country

</h4>


<div class="chart-container">


<canvas
id="countryChart">
</canvas>


</div>


</div>


</div>



<!-- VISITOR PERCENTAGE -->

<div class="col-md-6">


<div
class="analytics-card"
>


<h4>

<i class="bi bi-pie-chart-fill"></i>

Visitor Percentage

</h4>


<div class="chart-container">


<canvas
id="percentageChart">
</canvas>


</div>


</div>


</div>


</div>



<!-- MONTHLY + DESTINATION -->

<div class="row g-4 mt-1">



<!-- MONTHLY TREND -->

<div class="col-md-6">


<div
class="analytics-card"
>


<h4>

<i class="bi bi-graph-up"></i>

Monthly Visitor Trend

</h4>


<div class="chart-container">


<canvas
id="monthChart">
</canvas>


</div>


</div>


</div>



<!-- DESTINATION VISITORS -->

<div class="col-md-6">


<div
class="analytics-card"
>


<h4>

<i class="bi bi-geo-alt-fill"></i>

Visitors by Destination

</h4>


<div class="chart-container">


<canvas
id="destinationChart">
</canvas>


</div>


</div>


</div>


</div>


</div>



<!-- =====================================================
     DESTINATION ANALYTICS
     ===================================================== -->

<div class="container mt-5">


<h2
class="text-center section-title">

Destination Analytics

</h2>



<div class="row g-4">



<!-- AVERAGE RATING -->

<div class="col-md-6">


<div
class="analytics-card"
>


<h4>

<i class="bi bi-star-fill"></i>

Average Rating by Destination

</h4>


<div class="chart-container">


<canvas
id="ratingChart">
</canvas>


</div>


</div>


</div>



<!-- CATEGORY -->

<div class="col-md-6">


<div
class="analytics-card"
>


<h4>

<i class="bi bi-tags-fill"></i>

Destinations by Category

</h4>


<div class="chart-container">


<canvas
id="categoryChart">
</canvas>


</div>


</div>


</div>


</div>


</div>



<!-- =====================================================
     WEBSITE ANALYTICS
     ===================================================== -->

<div class="container mt-5 mb-5">


<h2
class="text-center section-title">

Website Analytics

</h2>



<div class="row g-4">


<div class="col-md-12">


<div
class="analytics-card"
>


<h4>

<i class="bi bi-window"></i>

Website Visits by Page

</h4>


<div class="chart-container">


<canvas
id="pageChart">
</canvas>


</div>


</div>


</div>


</div>


</div>



<!-- =====================================================
     TOURISM INSIGHTS
     ===================================================== -->

<div class="container mb-5">


<h2
class="text-center section-title">

Tourism Insights

</h2>



<div class="row g-4">



<!-- INSIGHT 1 -->

<div class="col-md-4">


<div
class="insight-card text-center"
>


<i
class="bi bi-trophy-fill text-warning">
</i>


<h5 class="mt-3">

Popular Destination

</h5>


<p>

<strong>

<?php

echo htmlspecialchars(
    $popularDestinationName
);

?>

</strong>

currently has the highest
number of recorded visitors.

</p>


</div>


</div>



<!-- INSIGHT 2 -->

<div class="col-md-4">


<div
class="insight-card text-center"
>


<i
class="bi bi-star-fill text-warning">
</i>


<h5 class="mt-3">

Visitor Satisfaction

</h5>


<p>

The overall destination
rating is

<strong>

<?php

echo number_format(
    $averageRating,
    2
);

?>

/ 5

</strong>

</p>


</div>


</div>



<!-- INSIGHT 3 -->

<div class="col-md-4">


<div
class="insight-card text-center"
>


<i
class="bi bi-people-fill text-primary">
</i>


<h5 class="mt-3">

Tourism Visitors

</h5>


<p>

The system has recorded

<strong>

<?php

echo $totalVisitor;

?>

</strong>

tourism visitor records.

</p>


</div>


</div>


</div>


</div>



<!-- =====================================================
     CHART.JS
     ===================================================== -->

<script>


// =====================================================
// VISITORS BY COUNTRY
// =====================================================

new Chart(

document.getElementById(
    "countryChart"
),

{

type: "bar",

data: {

labels:

<?php

echo json_encode(
    $countryLabels
);

?>,

datasets: [

{

label: "Visitors",

data:

<?php

echo json_encode(
    $countryValues
);

?>

}

]

},

options: {

responsive: true,

maintainAspectRatio: false,

scales: {

y: {

beginAtZero: true,

ticks: {

precision: 0

}

}

}

}

}

);



// =====================================================
// VISITOR PERCENTAGE
// =====================================================

new Chart(

document.getElementById(
    "percentageChart"
),

{

type: "doughnut",

data: {

labels:

<?php

echo json_encode(
    $percentageLabels
);

?>,

datasets: [

{

label: "Percentage",

data:

<?php

echo json_encode(
    $percentageValues
);

?>

}

]

},

options: {

responsive: true,

maintainAspectRatio: false

}

}

);



// =====================================================
// MONTHLY VISITOR TREND
// =====================================================

new Chart(

document.getElementById(
    "monthChart"
),

{

type: "line",

data: {

labels:

<?php

echo json_encode(
    $monthLabels
);

?>,

datasets: [

{

label: "Visitors",

data:

<?php

echo json_encode(
    $monthValues
);

?>,

tension: 0.3,

fill: false

}

]

},

options: {

responsive: true,

maintainAspectRatio: false,

scales: {

y: {

beginAtZero: true,

ticks: {

precision: 0

}

}

}

}

}

);



// =====================================================
// VISITORS BY DESTINATION
// =====================================================

new Chart(

document.getElementById(
    "destinationChart"
),

{

type: "bar",

data: {

labels:

<?php

echo json_encode(
    $destinationLabels
);

?>,

datasets: [

{

label: "Visitors",

data:

<?php

echo json_encode(
    $destinationValues
);

?>

}

]

},

options: {

indexAxis: "y",

responsive: true,

maintainAspectRatio: false,

scales: {

x: {

beginAtZero: true,

ticks: {

precision: 0

}

}

}

}

}

);



// =====================================================
// AVERAGE RATING
// =====================================================

new Chart(

document.getElementById(
    "ratingChart"
),

{

type: "bar",

data: {

labels:

<?php

echo json_encode(
    $ratingLabels
);

?>,

datasets: [

{

label: "Average Rating",

data:

<?php

echo json_encode(
    $ratingValues
);

?>

}

]

},

options: {

responsive: true,

maintainAspectRatio: false,

scales: {

y: {

beginAtZero: true,

max: 5

}

}

}

}

);



// =====================================================
// DESTINATION CATEGORY
// =====================================================

new Chart(

document.getElementById(
    "categoryChart"
),

{

type: "doughnut",

data: {

labels:

<?php

echo json_encode(
    $categoryLabels
);

?>,

datasets: [

{

label: "Destinations",

data:

<?php

echo json_encode(
    $categoryValues
);

?>

}

]

},

options: {

responsive: true,

maintainAspectRatio: false

}

}

);



// =====================================================
// WEBSITE VISITS BY PAGE
// =====================================================

new Chart(

document.getElementById(
    "pageChart"
),

{

type: "bar",

data: {

labels:

<?php

echo json_encode(
    $pageLabels
);

?>,

datasets: [

{

label: "Website Visits",

data:

<?php

echo json_encode(
    $pageValues
);

?>

}

]

},

options: {

responsive: true,

maintainAspectRatio: false,

scales: {

y: {

beginAtZero: true,

ticks: {

precision: 0

}

}

}

}

}

);


</script>



<!-- FOOTER -->

<?php include("footer.php"); ?>


</body>

</html>