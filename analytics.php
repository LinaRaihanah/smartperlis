<?php

include("config.php");


// Jumlah destinasi

$totalDestination = mysqli_fetch_assoc(

mysqli_query($conn,

"SELECT COUNT(*) AS total FROM destinations"

)

)['total'];




// Jumlah event

$totalEvent = mysqli_fetch_assoc(

mysqli_query($conn,

"SELECT COUNT(*) AS total FROM events"

)

)['total'];




// Jumlah pelawat

$totalVisitor = mysqli_fetch_assoc(

mysqli_query($conn,

"SELECT COUNT(*) AS total FROM visitors"

)

)['total'];

?>



<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Analytics Dashboard - Smart Perlis Tourism Portal
</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="assets/css/style.css">


<style>

/* BODY PAGE */

body {

    background: #fefbea;

}


/* Gradient warna Perlis untuk navbar */

.navbar {

    background:
        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}


/* HEADER FONT */

.analytics-header h1 {

     font-size: 3.5rem;

    font-weight: 700;

    margin-bottom: 10px;

}


.analytics-header p {

    margin: 0;

    font-size: 18px;

}

</style>


</head>


<body>



<?php include("navbar.php"); ?>





<!-- HEADER -->


<section
style="
background-image: url('assets/images/header.jpg');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
min-height: 400px;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
"
class="text-white text-center p-5 analytics-header"
>


<h1>

Tourism Analytics Dashboard

</h1>


<p>

Data-driven decision making for Smart Perlis Tourism Portal

</p>


</section>






<!-- STATISTICS -->


<div class="container mt-5">


<div class="row text-center">





<div class="col-md-4">


<div class="card shadow p-4">


<i class="bi bi-map fs-1 text-success"></i>


<h2>

<?php echo $totalDestination; ?>

</h2>


<p>

Total Destinations

</p>


</div>


</div>






<div class="col-md-4">


<div class="card shadow p-4">


<i class="bi bi-calendar-event fs-1 text-success"></i>


<h2>

<?php echo $totalEvent; ?>

</h2>


<p>

Total Events

</p>


</div>


</div>






<div class="col-md-4">


<div class="card shadow p-4">


<i class="bi bi-people fs-1 text-success"></i>


<h2>

<?php echo $totalVisitor; ?>

</h2>


<p>

Total Visitors

</p>


</div>


</div>



</div>


</div>







<!-- POWER BI DASHBOARD -->


<div class="container mt-5 mb-5">


<h2 class="text-center mb-4">

Interactive Power BI Dashboard

</h2>



<div class="ratio ratio-16x9 shadow">



<iframe

src="PASTE_YOUR_POWER_BI_EMBED_LINK_HERE"

frameborder="0"

allowFullScreen="true">

</iframe>



</div>


</div>







<!-- DATA INSIGHT -->


<div class="container mb-5">


<div class="row">



<div class="col-md-6">


<div class="card shadow p-4">


<h4>

Tourism Insights

</h4>


<ul>


<li>
Identify popular destinations
</li>


<li>
Analyze visitor trends
</li>


<li>
Support tourism planning decisions
</li>


<li>
Improve marketing strategies
</li>


</ul>


</div>


</div>





<div class="col-md-6">


<div class="card shadow p-4">


<h4>

Dashboard Features

</h4>


<ul>


<li>
Visitor statistics
</li>


<li>
Destination performance
</li>


<li>
Event analysis
</li>


<li>
Interactive filtering
</li>


</ul>


</div>


</div>



</div>

</div>






<?php include("footer.php"); ?>



</body>

</html>