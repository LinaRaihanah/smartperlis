<?php

include("config.php");

header("Content-Type: text/html; charset=UTF-8");

$sql = "
SELECT
    vl.log_id,
    vl.destination_id,

    COALESCE(
        d.destination_name,
        'Home'
    ) AS destination,

    COALESCE(
        d.category,
        'General'
    ) AS category,

    vl.page,
    vl.visit_date

FROM visitor_logs vl

LEFT JOIN destinations d
    ON vl.destination_id = d.destination_id

ORDER BY vl.visit_date ASC
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
Smart Perlis Visitor Data
</title>

</head>

<body>

<h2>
Smart Perlis Visitor Data
</h2>

<table border="1"
       cellpadding="8"
       cellspacing="0">

<thead>

<tr>

<th>Log ID</th>

<th>Destination ID</th>

<th>Destination</th>

<th>Category</th>

<th>Page</th>

<th>Visit Date</th>

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
    $row['log_id']
);
?>
</td>

<td>
<?php
echo htmlspecialchars(
    $row['destination_id'] ?? ''
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
    $row['page']
);
?>
</td>

<td>
<?php
echo htmlspecialchars(
    $row['visit_date']
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