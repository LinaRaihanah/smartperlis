<?php

session_start();

include("../config.php");


// Check admin login

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}



// Delete image

if(isset($_GET['delete'])){


    $id=$_GET['delete'];



    $getImage=mysqli_query($conn,

    "SELECT image FROM gallery

    WHERE gallery_id='$id'"

    );


    $image=mysqli_fetch_assoc($getImage);



    unlink("../assets/images/".$image['image']);



    mysqli_query($conn,

    "DELETE FROM gallery

    WHERE gallery_id='$id'"

    );



    header("Location: manage_gallery.php");

    exit();


}






// Add gallery image

if(isset($_POST['add'])){


    $destination=$_POST['destination'];


    $caption=mysqli_real_escape_string(

    $conn,

    $_POST['caption']

    );



    $image=$_FILES['image']['name'];


    $temp=$_FILES['image']['tmp_name'];



    move_uploaded_file(

        $temp,

        "../assets/images/".$image

    );




    mysqli_query($conn,


    "INSERT INTO gallery

    (destination_id,image,caption)

    VALUES

    ('$destination','$image','$caption')"


    );



}



?>




<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>

Gallery

</title>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



</head>



<body class="bg-light">






<nav class="navbar navbar-dark bg-success">


<div class="container">


<span class="navbar-brand">

Gallery

</span>



<a href="dashboard.php"

class="btn btn-light">

Dashboard

</a>


</div>


</nav>






<div class="container mt-5">






<!-- Upload Form -->


<div class="card shadow p-4 mb-5">


<h3>

Add Gallery Image

</h3>



<form method="POST"

enctype="multipart/form-data">






<div class="mb-3">


<label>

Select Destination

</label>



<select name="destination"

class="form-control">


<?php



$destination=mysqli_query($conn,

"SELECT * FROM destinations"

);



while($row=mysqli_fetch_assoc($destination)){



?>


<option value="<?php echo $row['destination_id']; ?>">


<?php echo $row['destination_name']; ?>


</option>



<?php

}

?>


</select>


</div>







<div class="mb-3">


<label>

Caption

</label>



<input type="text"

name="caption"

class="form-control">


</div>







<div class="mb-3">


<label>

Image

</label>



<input type="file"

name="image"

class="form-control"

required>


</div>






<button name="add"

class="btn btn-success">


Upload


</button>




</form>


</div>








<!-- Gallery List -->


<div class="card shadow p-4">


<h3>

Gallery Images

</h3>



<div class="row">





<?php



$result=mysqli_query($conn,


"SELECT gallery.*,

destinations.destination_name


FROM gallery


JOIN destinations


ON gallery.destination_id=

destinations.destination_id"


);



while($row=mysqli_fetch_assoc($result)){



?>



<div class="col-md-4 mb-4">


<div class="card">


<img src="../assets/images/<?php echo $row['image']; ?>"

class="card-img-top"

height="220">





<div class="card-body">


<h5>

<?php echo $row['destination_name']; ?>

</h5>



<p>

<?php echo $row['caption']; ?>

</p>





<a href="manage_gallery.php?delete=<?php echo $row['gallery_id']; ?>"

class="btn btn-danger"

onclick="return confirm('Delete image?')">


Delete


</a>


</div>


</div>


</div>




<?php

}

?>



</div>


</div>





</div>






</body>

</html>