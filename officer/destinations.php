<?php

include("header.php");


// DELETE

if (
    isset($_GET['delete'])
) {

    $id =
        (int)$_GET['delete'];


    mysqli_query(
        $conn,
        "DELETE FROM destinations
         WHERE destination_id=$id"
    );


    header("Location: destinations.php");

    exit();

}


// ADD

if (
    isset($_POST['add_destination'])
) {

    $name =
        mysqli_real_escape_string(
            $conn,
            $_POST['destination_name']
        );

    $category =
        mysqli_real_escape_string(
            $conn,
            $_POST['category']
        );

    $location =
        mysqli_real_escape_string(
            $conn,
            $_POST['location']
        );

    $description =
        mysqli_real_escape_string(
            $conn,
            $_POST['description']
        );

    $image =
        mysqli_real_escape_string(
            $conn,
            $_POST['image']
        );

    $latitude =
        mysqli_real_escape_string(
            $conn,
            $_POST['latitude']
        );

    $longitude =
        mysqli_real_escape_string(
            $conn,
            $_POST['longitude']
        );


    mysqli_query(
        $conn,
        "INSERT INTO destinations
        (
            destination_name,
            category,
            location,
            description,
            image,
            latitude,
            longitude
        )

        VALUES

        (
            '$name',
            '$category',
            '$location',
            '$description',
            '$image',
            '$latitude',
            '$longitude'
        )"
    );


    header("Location: destinations.php");

    exit();

}


// UPDATE

if (
    isset($_POST['update_destination'])
) {

    $id =
        (int)$_POST['destination_id'];

    $name =
        mysqli_real_escape_string(
            $conn,
            $_POST['destination_name']
        );

    $category =
        mysqli_real_escape_string(
            $conn,
            $_POST['category']
        );

    $location =
        mysqli_real_escape_string(
            $conn,
            $_POST['location']
        );

    $description =
        mysqli_real_escape_string(
            $conn,
            $_POST['description']
        );

    $image =
        mysqli_real_escape_string(
            $conn,
            $_POST['image']
        );

    $latitude =
        mysqli_real_escape_string(
            $conn,
            $_POST['latitude']
        );

    $longitude =
        mysqli_real_escape_string(
            $conn,
            $_POST['longitude']
        );


    mysqli_query(
        $conn,
        "UPDATE destinations SET

        destination_name='$name',

        category='$category',

        location='$location',

        description='$description',

        image='$image',

        latitude='$latitude',

        longitude='$longitude'

        WHERE destination_id=$id"
    );


    header("Location: destinations.php");

    exit();

}


// EDIT DATA

$editData = null;


if (
    isset($_GET['edit'])
) {

    $id =
        (int)$_GET['edit'];


    $result =
        mysqli_query(
            $conn,
            "SELECT *
             FROM destinations
             WHERE destination_id=$id"
        );


    $editData =
        mysqli_fetch_assoc($result);

}

?>


<div class="d-flex justify-content-between mb-4">

<h2 class="fw-bold">

Destinations

</h2>


<button
class="btn btn-success"
data-bs-toggle="modal"
data-bs-target="#destinationModal"
>

<i class="bi bi-plus-lg"></i>

Add Destination

</button>

</div>



<!-- TABLE -->

<div class="card shadow-sm">

<div class="card-body">

<div class="table-responsive">


<table class="table table-hover align-middle">


<thead class="table-success">

<tr>

<th>ID</th>

<th>Image</th>

<th>Destination</th>

<th>Category</th>

<th>Location</th>

<th>Action</th>

</tr>

</thead>


<tbody>


<?php

$result =
mysqli_query(
    $conn,
    "SELECT *
     FROM destinations
     ORDER BY destination_id DESC"
);


while (
    $row =
    mysqli_fetch_assoc($result)
) {

?>


<tr>

<td>

<?php
echo $row['destination_id'];
?>

</td>


<td>

<img
src="../assets/images/<?php
echo htmlspecialchars(
$row['image']
);
?>"
width="80"
height="55"
style="object-fit:cover;border-radius:8px;"
>

</td>


<td>

<strong>

<?php
echo htmlspecialchars(
$row['destination_name']
);
?>

</strong>

</td>


<td>

<span class="badge bg-success">

<?php
echo htmlspecialchars(
$row['category']
);
?>

</span>

</td>


<td>

<?php
echo htmlspecialchars(
$row['location']
);
?>

</td>


<td>


<a
href="destinations.php?edit=<?php
echo $row['destination_id'];
?>"
class="btn btn-sm btn-primary"
>

<i class="bi bi-pencil"></i>

</a>


<a
href="destinations.php?delete=<?php
echo $row['destination_id'];
?>"
class="btn btn-sm btn-danger"
onclick="return confirm('Delete this destination?')"
>

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

</div>

</div>



<!-- MODAL -->

<div
class="modal fade"
id="destinationModal"
tabindex="-1"
>

<div class="modal-dialog modal-lg">

<div class="modal-content">


<div class="modal-header">

<h5 class="modal-title">

<?php

echo $editData
    ? "Edit Destination"
    : "Add Destination";

?>

</h5>


<button
type="button"
class="btn-close"
data-bs-dismiss="modal"
></button>

</div>


<form method="POST">


<div class="modal-body">


<?php

if ($editData) {

?>

<input
type="hidden"
name="destination_id"
value="<?php
echo $editData['destination_id'];
?>"
>

<?php

}

?>


<div class="row g-3">


<div class="col-md-6">

<label class="form-label">

Destination Name

</label>

<input
type="text"
name="destination_name"
class="form-control"
required
value="<?php
echo $editData
? htmlspecialchars(
$editData['destination_name']
)
: '';
?>"
>

</div>


<div class="col-md-6">

<label class="form-label">

Category

</label>

<select
name="category"
class="form-select"
required
>

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


<div class="col-md-6">

<label class="form-label">

Location

</label>

<input
type="text"
name="location"
class="form-control"
required
value="<?php
echo $editData
? htmlspecialchars(
$editData['location']
)
: '';
?>"
>

</div>


<div class="col-md-6">

<label class="form-label">

Image Filename

</label>

<input
type="text"
name="image"
class="form-control"
placeholder="gua_kelam.jpg"
value="<?php
echo $editData
? htmlspecialchars(
$editData['image']
)
: '';
?>"
>

</div>


<div class="col-12">

<label class="form-label">

Description

</label>

<textarea
name="description"
class="form-control"
rows="4"
required
><?php

echo $editData
? htmlspecialchars(
$editData['description']
)
: '';

?></textarea>

</div>


<div class="col-md-6">

<label class="form-label">

Latitude

</label>

<input
type="text"
name="latitude"
class="form-control"
value="<?php
echo $editData
? htmlspecialchars(
$editData['latitude']
)
: '';
?>"
>

</div>


<div class="col-md-6">

<label class="form-label">

Longitude

</label>

<input
type="text"
name="longitude"
class="form-control"
value="<?php
echo $editData
? htmlspecialchars(
$editData['longitude']
)
: '';
?>"
>

</div>


</div>


</div>


<div class="modal-footer">

<?php

if ($editData) {

?>

<button
type="submit"
name="update_destination"
class="btn btn-primary"
>

Update Destination

</button>

<?php

} else {

?>

<button
type="submit"
name="add_destination"
class="btn btn-success"
>

Add Destination

</button>

<?php

}

?>

</div>


</form>


</div>

</div>

</div>


<?php

if ($editData) {

?>

<script>

document.addEventListener(
    "DOMContentLoaded",
    function(){

        new bootstrap.Modal(
            document.getElementById(
                "destinationModal"
            )
        ).show();

    }
);

</script>

<?php

}

include("footer.php");

?>