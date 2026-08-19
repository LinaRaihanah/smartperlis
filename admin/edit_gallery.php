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
// GET GALLERY ID
// ========================================

if(!isset($_GET['id'])){

    header("Location: manage_gallery.php");

    exit();

}


$id = (int) $_GET['id'];


// ========================================
// GET GALLERY DATA
// ========================================

$result = mysqli_query(
    $conn,

    "SELECT *
     FROM gallery
     WHERE gallery_id='$id'"
);


if(mysqli_num_rows($result) == 0){

    header("Location: manage_gallery.php");

    exit();

}


$gallery = mysqli_fetch_assoc($result);


// ========================================
// UPDATE GALLERY
// ========================================

if(isset($_POST['update'])){


    $destination = (int) $_POST['destination'];

    $caption = mysqli_real_escape_string(
        $conn,
        $_POST['caption']
    );


    // ====================================
    // CHECK IF NEW IMAGE WAS UPLOADED
    // ====================================

    if(!empty($_FILES['image']['name'])){


        $newImage = $_FILES['image']['name'];

        $temp = $_FILES['image']['tmp_name'];


        // Delete old image

        $oldImagePath =
            "../assets/images/".$gallery['image'];


        if(
            !empty($gallery['image']) &&
            file_exists($oldImagePath)
        ){

            unlink($oldImagePath);

        }


        // Upload new image

        move_uploaded_file(
            $temp,
            "../assets/images/".$newImage
        );


        // Update with new image

        mysqli_query(
            $conn,

            "UPDATE gallery

             SET
                destination_id='$destination',
                image='$newImage',
                caption='$caption'

             WHERE gallery_id='$id'"
        );

    }

    else {


        // Update without changing image

        mysqli_query(
            $conn,

            "UPDATE gallery

             SET
                destination_id='$destination',
                caption='$caption'

             WHERE gallery_id='$id'"
        );

    }


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
Edit Gallery Image
</title>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<style>

.navbar-blue {
    background-color: #0057B8;
}

.logo-icon {
    color: #FFD700;
    font-size: 28px;
}

.btn-blue {
    background-color: #0057B8;
    color: white;
    border: none;
}

.btn-blue:hover {
    background-color: #003F88;
    color: white;
}

.btn-yellow {
    background-color: #FFD700;
    color: #000;
    border: none;
}

.btn-yellow:hover {
    background-color: #E6C200;
    color: #000;
}

.edit-card {
    border: none;
    border-top: 5px solid #FFD700;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.10);
}

.current-image {
    width: 100%;
    max-width: 400px;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    border: 4px solid #E6F0FF;
}

</style>

</head>


<body class="bg-light">


<!-- Navbar -->

<nav class="navbar navbar-dark navbar-blue">

<div class="container">

<a class="navbar-brand d-flex align-items-center gap-2">

<i class="bi bi-geo-alt-fill logo-icon"></i>

<span>

Smart Perlis Tourism Portal

</span>

</a>


<a
    href="manage_gallery.php"
    class="btn btn-light"
>

<i class="bi bi-arrow-left"></i>

Back to Gallery

</a>

</div>

</nav>



<!-- Main -->

<div class="container mt-5">


<div class="card edit-card p-4">


<h3 class="mb-4">

<i class="bi bi-pencil-square text-primary"></i>

Edit Gallery Image

</h3>


<form
    method="POST"
    enctype="multipart/form-data"
>


<!-- Current Image -->

<div class="mb-4">

<label class="form-label fw-bold">

Current Image

</label>

<br>

<img
    src="../assets/images/<?php
        echo htmlspecialchars($gallery['image']);
    ?>"
    class="current-image"
    alt="Current Gallery Image"
>

</div>



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

    <?php

    if(
        $row['destination_id']
        ==
        $gallery['destination_id']
    ){

        echo "selected";

    }

    ?>
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
    value="<?php
        echo htmlspecialchars(
            $gallery['caption']
        );
    ?>"
>

</div>



<!-- New Image -->

<div class="mb-4">

<label class="form-label">

Replace Image

</label>


<input
    type="file"
    name="image"
    class="form-control"
    accept="image/*"
>


<small class="text-muted">

Leave this empty if you do not want to change the image.

</small>

</div>



<!-- Buttons -->

<button
    type="submit"
    name="update"
    class="btn btn-blue"
>

<i class="bi bi-check-circle"></i>

Save Changes

</button>


<a
    href="manage_gallery.php"
    class="btn btn-secondary"
>

Cancel

</a>


</form>

</div>

</div>


</body>

</html>