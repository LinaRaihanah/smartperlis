<?php

session_start();

include("../config.php");


// ========================================
// CHECK ADMIN LOGIN
// ========================================

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}


// ========================================
// DELETE IMAGE
// ========================================

if(isset($_GET['delete'])){

    $id = (int) $_GET['delete'];


    // Get image filename

    $getImage = mysqli_query(
        $conn,
        "SELECT image FROM gallery
         WHERE gallery_id='$id'"
    );


    if($getImage && mysqli_num_rows($getImage) > 0){

        $image = mysqli_fetch_assoc($getImage);


        // Delete image file

        if(!empty($image['image'])){

            $imagePath = "../assets/images/".$image['image'];

            if(file_exists($imagePath)){

                unlink($imagePath);

            }

        }


        // Delete database record

        mysqli_query(
            $conn,
            "DELETE FROM gallery
             WHERE gallery_id='$id'"
        );

    }


    header("Location: manage_gallery.php");

    exit();

}


// ========================================
// ADD GALLERY IMAGE
// ========================================

if(isset($_POST['add'])){

    $destination = (int) $_POST['destination'];

    $caption = mysqli_real_escape_string(
        $conn,
        $_POST['caption']
    );


    // Image

    $image = $_FILES['image']['name'];

    $temp = $_FILES['image']['tmp_name'];


    move_uploaded_file(
        $temp,
        "../assets/images/".$image
    );


    // Insert into database

    mysqli_query(
        $conn,

        "INSERT INTO gallery
        (destination_id, image, caption)

        VALUES

        ('$destination', '$image', '$caption')"
    );


    header("Location: manage_gallery.php");

    exit();

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>
Gallery
</title>


<!-- Bootstrap -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<!-- Bootstrap Icons -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<style>

/* ===============================
   BLUE + YELLOW THEME
================================ */

.navbar-blue {
    background-color: #0057B8;
}


/* Logo Icon */

.logo-icon {
    color: #FFD700;
    font-size: 28px;
}


/* ===============================
   BLUE BUTTON
================================ */

.btn-blue {
    background-color: #0057B8;
    color: white;
    border: none;
}

.btn-blue:hover {
    background-color: #003F88;
    color: white;
}


/* ===============================
   YELLOW BUTTON
================================ */

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
   UPLOAD CARD
================================ */

.upload-card {
    border: none;
    border-radius: 12px;
    border-top: 5px solid #FFD700;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}


/* ===============================
   GALLERY CONTAINER
================================ */

.gallery-container {
    background-color: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}


/* ===============================
   GALLERY CARD
================================ */

.gallery-card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.10);
    transition: 0.3s;
    height: 100%;
}

.gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.15);
}


/* Gallery Image */

.gallery-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
}


/* Card Body */

.gallery-card .card-body {
    padding: 18px;
    border-top: 4px solid #FFD700;
}


/* Destination Name */

.destination-name {
    color: #0057B8;
    font-weight: bold;
}


/* Caption */

.gallery-caption {
    color: #555;
    min-height: 45px;
}


/* Buttons */

.gallery-btn {
    border-radius: 6px;
    margin-right: 5px;
}


/* Empty Gallery */

.empty-gallery {
    padding: 40px;
    text-align: center;
    color: #777;
}

</style>

</head>


<body class="bg-light">


<!-- ========================================
     NAVBAR
======================================== -->

<nav class="navbar navbar-dark navbar-blue">

<div class="container">


<!-- Logo -->

<a class="navbar-brand d-flex align-items-center gap-2">

<i class="bi bi-geo-alt-fill logo-icon"></i>

<span>

Smart Perlis Tourism Portal

</span>

</a>


<!-- Dashboard -->

<a
    href="dashboard.php"
    class="btn btn-light"
>

<i class="bi bi-speedometer2"></i>

Dashboard

</a>

</div>

</nav>



<!-- ========================================
     MAIN CONTENT
======================================== -->

<div class="container mt-5">


<!-- ========================================
     UPLOAD FORM
======================================== -->

<div class="card upload-card p-4 mb-5">


<h3 class="mb-4">

<i class="bi bi-cloud-arrow-up-fill text-primary"></i>

Add Gallery Image

</h3>


<form
    method="POST"
    enctype="multipart/form-data"
>


<!-- Destination -->

<div class="mb-3">

<label class="form-label">

Select Destination

</label>


<select
    name="destination"
    class="form-select"
    required
>


<?php

$destination = mysqli_query(
    $conn,
    "SELECT * FROM destinations
     ORDER BY destination_name ASC"
);


while($row = mysqli_fetch_assoc($destination)){

?>

<option
    value="<?php echo $row['destination_id']; ?>"
>

<?php

echo htmlspecialchars(
    $row['destination_name']
);

?>

</option>

<?php

}

?>

</select>

</div>



<!-- Caption -->

<div class="mb-3">

<label class="form-label">

Caption

</label>


<input
    type="text"
    name="caption"
    class="form-control"
    placeholder="Enter image caption"
>

</div>



<!-- Image -->

<div class="mb-3">

<label class="form-label">

Image

</label>


<input
    type="file"
    name="image"
    class="form-control"
    accept="image/*"
    required
>

</div>



<!-- Upload -->

<button
    name="add"
    class="btn btn-blue"
>

<i class="bi bi-upload"></i>

Upload Image

</button>


</form>

</div>



<!-- ========================================
     GALLERY LIST
======================================== -->

<div class="gallery-container">


<div class="d-flex justify-content-between align-items-center mb-4">


<h3 class="mb-0">

<i class="bi bi-images text-primary"></i>

Gallery Images

</h3>


</div>



<div class="row">


<?php

$result = mysqli_query(
    $conn,

    "SELECT gallery.*,
            destinations.destination_name

     FROM gallery

     JOIN destinations

     ON gallery.destination_id =
        destinations.destination_id

     ORDER BY gallery.gallery_id DESC"
);


if(mysqli_num_rows($result) == 0){

?>

<div class="col-12">

<div class="empty-gallery">

<i class="bi bi-images fs-1"></i>

<h5 class="mt-3">

No gallery images available.

</h5>

<p>

Upload an image to get started.

</p>

</div>

</div>

<?php

}


while($row = mysqli_fetch_assoc($result)){

?>


<!-- Gallery Card -->

<div class="col-md-4 mb-4">


<div class="gallery-card">


<!-- Image -->

<img
    src="../assets/images/<?php
        echo htmlspecialchars($row['image']);
    ?>"
    class="gallery-image"
    alt="Gallery Image"
>


<div class="card-body">


<!-- Destination -->

<h5 class="destination-name">

<i class="bi bi-geo-alt-fill"></i>

<?php

echo htmlspecialchars(
    $row['destination_name']
);

?>

</h5>



<!-- Caption -->

<p class="gallery-caption">

<?php

echo !empty($row['caption'])
    ? htmlspecialchars($row['caption'])
    : "No caption";

?>

</p>



<!-- Edit -->

<a
    href="edit_gallery.php?id=<?php
        echo (int)$row['gallery_id'];
    ?>"
    class="btn btn-yellow btn-sm gallery-btn"
>

<i class="bi bi-pencil"></i>

Edit Image

</a>



<!-- Delete -->

<a
    href="manage_gallery.php?delete=<?php
        echo (int)$row['gallery_id'];
    ?>"
    class="btn btn-danger btn-sm gallery-btn"
    onclick="return confirm('Delete this image?')"
>

<i class="bi bi-trash"></i>

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