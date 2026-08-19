<?php

session_start();

include("../config.php");


// Check admin login

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}



if(isset($_POST['add'])){


    $name = mysqli_real_escape_string($conn,$_POST['name']);

    $category = mysqli_real_escape_string($conn,$_POST['category']);

    $location = mysqli_real_escape_string($conn,$_POST['location']);

    $description = mysqli_real_escape_string($conn,$_POST['description']);



    // Upload image

    $image = $_FILES['image']['name'];

    $temp = $_FILES['image']['tmp_name'];



    $folder = "../assets/images/".$image;



    move_uploaded_file($temp,$folder);




    $sql = "INSERT INTO destinations

    (destination_name,category,location,description,image)

    VALUES

    ('$name','$category','$location','$description','$image')";




    if(mysqli_query($conn,$sql)){


        header("Location: manage_destination.php");

        exit();


    }


}



?>



<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Add Destination
</title>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>



<body class="bg-light">





<nav class="navbar navbar-dark bg-success">


<div class="container">


<span class="navbar-brand">

Add New Destination

</span>



<a href="manage_destination.php"
class="btn btn-light">

Back

</a>


</div>


</nav>







<div class="container mt-5">



<div class="card shadow p-4">



<h2 class="mb-4">

Add Destination

</h2>




<form method="POST"
enctype="multipart/form-data">





<div class="mb-3">


<label class="form-label">

Destination Name

</label>


<input type="text"
name="name"
class="form-control"
required>


</div>







<div class="mb-3">


<label class="form-label">

Category

</label>


<select name="category"
class="form-control"
required>


<option value="Nature">

Nature

</option>


<option value="Culture">

Culture

</option>


<option value="Food">

Food

</option>


<option value="Adventure">

Adventure

</option>


</select>


</div>







<div class="mb-3">


<label class="form-label">

Location

</label>


<input type="text"
name="location"
class="form-control"
required>


</div>







<div class="mb-3">


<label class="form-label">

Description

</label>


<textarea name="description"
class="form-control"
rows="5"
required></textarea>


</div>







<div class="mb-3">


<label class="form-label">

Destination Image

</label>


<input type="file"
name="image"
class="form-control"
required>


</div>







<button type="submit"
name="add"
class="btn btn-success">


<i class="bi bi-save"></i>

Save Destination


</button>





</form>




</div>


</div>





</body>

</html>