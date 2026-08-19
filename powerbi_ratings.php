<?php

include("config.php");

header("Content-Type: text/html; charset=UTF-8");

$sql = "
SELECT
    d.destination_id,
    d.destination_name AS destination,
    d.category,

    COUNT(dr.rating_id) AS total_ratings,

    ROUND(
        AVG(dr.rating),
        2
    ) AS average_rating

FROM destinations d

LEFT JOIN destination_ratings dr
    ON d.destination_id =
       dr.destination_id

GROUP BY
    d.destination_id,
    d.destination_name,
    d.category

ORDER BY
    d.destination_name ASC
";

$result = mysqli_query($conn, $sql);

if (!$result) {

    die(
        "Database error: " .
        mysqli_error($conn)
    );

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>
Smart Perlis Rating Data
</title>

</head>

<body>

<h2>
Smart Perlis Rating Data
</h2>

<table border="1"
       cellpadding="8"
       cellspacing="0">

<thead>

<tr>

<th>Destination ID</th>

<th>Destination</th>

<th>Category</th>

<th>Total Ratings</th>

<th>Average Rating</th>

</tr>

</thead>

<tbody>

<?php

while ($row = mysqli_fetch_assoc($result)) {

?>

<tr>

<td>

<?php

echo htmlspecialchars(
    $row['destination_id']
);

?>

</td>

<td>

<?php

echo htmlspecialchars(
    $row['destination']
);

?>

</td>

<td>

<?php

echo htmlspecialchars(
    $row['category']
);

?>

</td>

<td>

<?php

echo htmlspecialchars(
    $row['total_ratings']
);

?>

</td>

<td>

<?php

echo htmlspecialchars(
    $row['average_rating'] ?? '0'
);

?>

</td>

</tr>

<?php

}

?>

</tbody>

</table>

</body>

</html>