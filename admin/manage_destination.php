<?php

session_start();

include("../config.php");


// Check admin login

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}


// Delete destination

if(isset($_GET['delete'])){

    $id = $_GET['delete'];

    mysqli_query($conn,

    "DELETE FROM destinations
    WHERE destination_id='$id'");

    header("Location: manage_destination.php");

    exit();

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
Destination
</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<style>

/* ===============================
   BLUE + YELLOW THEME
================================ */

.navbar-blue {
    background-color: #0057B8;
}


/* Main Blue Button */

.btn-blue {
    background-color: #0057B8;
    color: white;
    border: none;
}

.btn-blue:hover {
    background-color: #003F88;
    color: white;
}


/* Yellow Button */

.btn-yellow {
    background-color: #FFD700;
    color: #000;
    border: none;
}

.btn-yellow:hover {
    background-color: #E6C200;
    color: #000;
}


/* ===============================
   TABLE DESIGN
================================ */

.table-container {
    background-color: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}


/* Table Header */

.destination-table thead {
    background-color: #0057B8;
    color: white;
}

.destination-table thead th {
    padding: 15px;
    border: none;
    font-weight: 600;
}


/* Yellow line under header */

.destination-table thead tr {
    border-bottom: 4px solid #FFD700;
}


/* Table Body */

.destination-table tbody td {
    padding: 14px;
    vertical-align: middle;
}


/* Alternating rows */

.destination-table tbody tr:nth-child(even) {
    background-color: #F0F6FF;
}

.destination-table tbody tr:nth-child(odd) {
    background-color: #FFFFFF;
}


/* Hover effect */

.destination-table tbody tr:hover {
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


/* Image */

.destination-image {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
    border: 3px solid #E6F0FF;
}


/* Action buttons */

.action-btn {
    border-radius: 6px;
    margin-right: 4px;
}

</style>

</head>


<body class="bg-light">


<!-- Navbar -->

<nav class="navbar navbar-dark navbar-blue">

<div class="container">

<a class="navbar-brand">

Destination

</a>


<a href="dashboard.php"
class="btn btn-light">

Dashboard

</a>

</div>

</nav>


<div class="container mt-5">


<div class="d-flex justify-content-between mb-4">


<h2>

Destination List

</h2>


<a href="add_destination.php"
class="btn btn-blue">

<i class="bi bi-plus-circle"></i>

Add Destination

</a>


</div>


<table class="table table-bordered table-striped bg-white">


<thead class="table-blue">

<tr>

<th>
ID
</th>

<th>
Image
</th>

<th>
Name
</th>

<th>
Category
</th>

<th>
Location
</th>

<th>
Action
</th>

</tr>

</thead>


<tbody>


<?php

$result = mysqli_query($conn,

"SELECT * FROM destinations"

);


while($row=mysqli_fetch_assoc($result)){

?>


<tr>


<td>

<?php echo $row['destination_id']; ?>

</td>


<td>

<img src="../assets/images/<?php echo $row['image']; ?>"
width="80"
height="60">

</td>


<td>

<?php echo $row['destination_name']; ?>

</td>


<td>

<?php echo $row['category']; ?>

</td>


<td>

<?php echo $row['location']; ?>

</td>


<td>


<!-- Edit -->

<a href="edit_destination.php?id=<?php echo $row['destination_id']; ?>"
class="btn btn-yellow btn-sm">

<i class="bi bi-pencil"></i>

</a>


<!-- Delete -->

<a href="manage_destination.php?delete=<?php echo $row['destination_id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this destination?')">

<i class="bi bi-trash"></i>

</a>


</td>


</tr>


<?php

}

?>


</tbody>


</table>


</div>


</body>

</html>