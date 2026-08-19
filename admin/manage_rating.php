<?php

session_start();

include("../config.php");


// Check admin login

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}




// Calculate average rating

$avgQuery = mysqli_query($conn,

"SELECT AVG(rating) AS average

FROM destination_ratings"

);


$avgData = mysqli_fetch_assoc($avgQuery);


?>



<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Manage Rating
</title>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


</head>



<body class="bg-light">





<nav class="navbar navbar-dark bg-success">


<div class="container">


<span class="navbar-brand">

Visitor Rating Management

</span>




<a href="dashboard.php"

class="btn btn-light">


Dashboard


</a>


</div>


</nav>







<div class="container mt-5">



<!-- Average Rating -->


<div class="card shadow p-4 mb-4 text-center">


<h3>

Average Visitor Satisfaction ⭐

</h3>



<h1 class="text-success">


<?php


if($avgData['average']){

echo number_format($avgData['average'],1);

}

else{

echo "0";

}


?> / 5


</h1>


</div>








<!-- Rating Table -->


<div class="card shadow p-4">


<h3>

All Visitor Reviews

</h3>



<br>



<table class="table table-bordered table-striped">


<thead class="table-success">


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


ON destination_ratings.destination_id = destinations.destination_id


ORDER BY created_at DESC

";



$result=mysqli_query($conn,$sql);



while($row=mysqli_fetch_assoc($result)){



?>



<tr>


<td>

<?php echo $row['rating_id']; ?>

</td>





<td>

<?php echo $row['destination_name']; ?>

</td>





<td>

<?php echo $row['name']; ?>

</td>





<td>


<?php


for($i=0;$i<$row['rating'];$i++){

echo "⭐";

}


?>


</td>





<td>

<?php echo $row['comment']; ?>

</td>





<td>

<?php echo $row['created_at']; ?>

</td>



</tr>



<?php

}

?>



</tbody>


</table>


</div>



</div>






</body>

</html>