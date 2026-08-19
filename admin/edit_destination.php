<?php

session_start();

include("../config.php");


// Check admin login

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}


// Get destination ID

if(isset($_GET['id'])){

    $id = $_GET['id'];

}
else{

    header("Location: manage_destination.php");

    exit();

}


// Get existing data

$result = mysqli_query($conn,

"SELECT * FROM destinations 
WHERE destination_id='$id'"

);


$data = mysqli_fetch_assoc($result);




// Update data

if(isset($_POST['update'])){


    $name = mysqli_real_escape_string($conn,$_POST['name']);

    $category = mysqli_real_escape_string($conn,$_POST['category']);

    $location = mysqli_real_escape_string($conn,$_POST['location']);

    $description = mysqli_real_escape_string($conn,$_POST['description']);



    // Check image

    if($_FILES['image']['name'] != ""){


        $image = $_FILES['image']['name'];

        $temp = $_FILES['image']['tmp_name'];


        move_uploaded_file(

            $temp,

            "../assets/images/".$image

        );


        $sql = "UPDATE destinations SET

        destination_name='$name',

        category='$category',

        location='$location',

        description='$description',

        image='$image'

        WHERE destination_id='$id'";



    }

    else{


        $sql = "UPDATE destinations SET

        destination_name='$name',

        category='$category',

        location='$location',

        description='$description'

        WHERE destination_id='$id'";


    }




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


<title>Edit Destination</title>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>



<body class="bg-light">





<nav class="navbar navbar-dark bg-success">


<div class="container">


<span class="navbar-brand">

Edit Destination

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

Update Destination

</h2>




<form method="POST"
enctype="multipart/form-data">





<div class="mb-3">


<label>

Destination Name

</label>


<input type="text"
name="name"
class="form-control"
value="<?php echo $data['destination_name']; ?>"
required>


</div>







<div class="mb-3">


<label>

Category

</label>


<select name="category"
class="form-control">


<option
<?php if($data['category']=="Nature") echo "selected"; ?>>

Nature

</option>


<option
<?php if($data['category']=="Culture") echo "selected"; ?>>

Culture

</option>


<option
<?php if($data['category']=="Food") echo "selected"; ?>>

Food

</option>


<option
<?php if($data['category']=="Adventure") echo "selected"; ?>>

Adventure

</option>


</select>


</div>







<div class="mb-3">


<label>

Location

</label>


<input type="text"
name="location"
class="form-control"
value="<?php echo $data['location']; ?>"
required>


</div>







<div class="mb-3">


<label>

Description

</label>


<textarea name="description"
class="form-control"
rows="5"
required><?php echo $data['description']; ?></textarea>


</div>







<div class="mb-3">


<label>

Current Image

</label>


<br>


<img src="../assets/images/<?php echo $data['image']; ?>"
width="200">


</div>







<div class="mb-3">


<label>

Change Image (Optional)

</label>


<input type="file"
name="image"
class="form-control">


</div>







<button type="submit"
name="update"
class="btn btn-success">


Update Destination


</button>




</form>


</div>


</div>





</body>

</html>