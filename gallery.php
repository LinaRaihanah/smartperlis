<?php

include("config.php");

?>


<!DOCTYPE html>

<html lang="en">

<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Gallery - Smart Perlis Tourism Portal
</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="assets/css/style.css">


<style>

/* BODY PAGE */

body {

    background: #fefbea;

}


/* Navbar gradient warna Perlis */

.navbar {

    background:
        linear-gradient(
            90deg,
            #FFD700 0%,
            #F5C400 40%,
            #0057B8 100%
        ) !important;

}

</style>


</head>



<body>


<?php include("navbar.php"); ?>





<section
    class="text-white text-center p-5"
    style="
        background-image: url('assets/images/header.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 400px;
        padding: 80px 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    "
>


<h1
    style="
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    "
>

Smart Perlis Tourism PortalGallery

</h1>


<p
    style="
        margin: 0;
        font-size: 1.25rem;
    "
>

Explore beautiful moments around Perlis

</p>


</section>







<div class="container mt-5 mb-5">


<div class="row">



<?php



$sql = "

SELECT gallery.*, destinations.destination_name

FROM gallery

JOIN destinations

ON gallery.destination_id = destinations.destination_id

";



$result=mysqli_query($conn,$sql);




while($row=mysqli_fetch_assoc($result)){



?>



<div class="col-md-4 mb-4">



<div class="card shadow">



<img src="assets/images/<?php echo $row['image']; ?>"

class="card-img-top"

height="250">





<div class="card-body">


<h5>

<?php echo $row['destination_name']; ?>

</h5>


<p>

<?php echo $row['caption']; ?>

</p>


</div>


</div>



</div>



<?php

}

?>



</div>


</div>







<?php include("footer.php"); ?>



</body>

</html>