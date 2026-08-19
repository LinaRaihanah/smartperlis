<?php

include("config.php");

header("Content-Type: text/html; charset=UTF-8");


// =====================================================
// SMART PERLIS - POWER BI DATA
// =====================================================

// Get visitor data
$sql = "
    SELECT
        visitor_logs.log_id,
        visitor_logs.destination_id,
        COALESCE(destinations.destination_name, 'Home') AS destination_name,
        COALESCE(destinations.category, 'General') AS category,
        visitor_logs.page,
        visitor_logs.visit_date
    FROM visitor_logs

    LEFT JOIN destinations
        ON visitor_logs.destination_id =
           destinations.destination_id

    ORDER BY visitor_logs.visit_date ASC
";

$result = mysqli_query($conn, $sql);


// =====================================================
// ERROR CHECK
// =====================================================

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

<title>Smart Perlis Power BI Data</title>

</head>

<body>

<h2>Smart Perlis Visitor Data</h2>

<table border="1" cellpadding="8" cellspacing="0">

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
echo htmlspecialchars($row['log_id']);
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
    $row['destination_name']
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