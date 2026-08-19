<?php

include("header.php");

?>


<h2 class="fw-bold mb-4">

Destination Ratings

</h2>


<div class="card shadow-sm">

<div class="card-body">


<div class="table-responsive">


<table class="table table-hover align-middle">


<thead class="table-success">

<tr>

<th>#</th>

<th>Name</th>

<th>Destination</th>

<th>Rating</th>

<th>Comment</th>

<th>Date</th>

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

ORDER BY
destination_ratings.created_at DESC

";


$result =
mysqli_query(
    $conn,
    $sql
);


$count = 1;


while (
    $row =
    mysqli_fetch_assoc($result)
) {

?>


<tr>

<td>

<?php
echo $count++;
?>

</td>


<td>

<?php
echo htmlspecialchars(
$row['name']
);
?>

</td>


<td>

<strong>

<?php
echo htmlspecialchars(
$row['destination_name']
);
?>

</strong>

</td>


<td>


<?php

for (
    $i = 1;
    $i <= 5;
    $i++
) {

    if (
        $i <= $row['rating']
    ) {

        echo
        '<i class="bi bi-star-fill text-warning"></i>';

    }

}

?>


</td>


<td>

<?php
echo htmlspecialchars(
$row['comment']
);
?>

</td>


<td>

<?php
echo date(
    'd M Y',
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


<?php

include("footer.php");

?>