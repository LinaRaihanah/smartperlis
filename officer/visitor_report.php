<?php

include("header.php");


// TOTAL VISITS

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total
     FROM visitor_logs"
);

$totalVisits =
mysqli_fetch_assoc($result)['total'];


// DESTINATION VIEWS

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total
     FROM visitor_logs
     WHERE destination_id IS NOT NULL"
);

$destinationViews =
mysqli_fetch_assoc($result)['total'];

?>

<h2 class="fw-bold mb-4">

Visitor Analytics

</h2>



<div class="row g-4 mb-5">


<div class="col-md-6">


<div class="card shadow-sm p-4">


<div class="d-flex justify-content-between">


<div>

<small class="text-muted">

Total Visits

</small>

<h2>

<?php
echo $totalVisits;
?>

</h2>

</div>


<i class="bi bi-people fs-1 text-success"></i>


</div>

</div>

</div>



<div class="col-md-6">


<div class="card shadow-sm p-4">


<div class="d-flex justify-content-between">


<div>

<small class="text-muted">

Destination Views

</small>

<h2>

<?php
echo $destinationViews;
?>

</h2>

</div>


<i class="bi bi-eye fs-1 text-primary"></i>


</div>

</div>

</div>


</div>



<!-- MOST VIEWED -->

<div class="card shadow-sm">

<div class="card-body">


<h4 class="mb-4">

Most Viewed Destinations

</h4>


<div class="table-responsive">


<table class="table table-bordered">


<thead class="table-success">

<tr>

<th>

Rank

</th>

<th>

Destination

</th>

<th>

Total Views

</th>

</tr>

</thead>


<tbody>


<?php

$sql = "

SELECT

destinations.destination_id,

destinations.destination_name,

COUNT(
    visitor_logs.destination_id
) AS total_view

FROM visitor_logs

INNER JOIN destinations

ON visitor_logs.destination_id =
destinations.destination_id

WHERE visitor_logs.destination_id IS NOT NULL

GROUP BY

destinations.destination_id,

destinations.destination_name

ORDER BY total_view DESC

";


$result =
mysqli_query(
    $conn,
    $sql
);


$rank = 1;


while (
    $row =
    mysqli_fetch_assoc($result)
) {

?>


<tr>

<td>

<?php
echo $rank++;
?>

</td>


<td>

<?php
echo htmlspecialchars(
$row['destination_name']
);
?>

</td>


<td>

<span class="badge bg-success">

<?php
echo $row['total_view'];
?>

views

</span>

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



<?php

include("footer.php");

?>