<?php

include("header.php");


// DELETE

if (isset($_GET['delete'])) {

    $id =
        (int)$_GET['delete'];

    mysqli_query(
        $conn,
        "DELETE FROM gallery
         WHERE gallery_id=$id"
    );

    header("Location: gallery.php");

    exit();

}


// ADD

if (isset($_POST['add_gallery'])) {

    $destination_id =
        (int)$_POST['destination_id'];

    $image =
        mysqli_real_escape_string(
            $conn,
            $_POST['image']
        );

    $caption =
        mysqli_real_escape_string(
            $conn,
            $_POST['caption']
        );


    mysqli_query(
        $conn,
        "INSERT INTO gallery
        (
            destination_id,
            image,
            caption
        )

        VALUES

        (
            $destination_id,
            '$image',
            '$caption'
        )"
    );


    header("Location: gallery.php");

    exit();

}

?>


<div class="d-flex justify-content-between mb-4">

<h2 class="fw-bold">

Gallery

</h2>


<button
class="btn btn-success"
data-bs-toggle="modal"
data-bs-target="#galleryModal"
>

<i class="bi bi-plus-lg"></i>

Add Image

</button>

</div>



<div class="row g-4">


<?php

$sql = "

SELECT

gallery.*,

destinations.destination_name

FROM gallery

JOIN destinations

ON gallery.destination_id =
destinations.destination_id

ORDER BY gallery.gallery_id DESC

";


$result =
mysqli_query(
    $conn,
    $sql
);


while (
    $row =
    mysqli_fetch_assoc($result)
) {

?>


<div class="col-md-4">


<div class="card shadow-sm h-100">


<img
src="../assets/images/<?php
echo htmlspecialchars(
$row['image']
);
?>"
style="
height:220px;
object-fit:cover;
"
>


<div class="card-body">


<h5>

<?php
echo htmlspecialchars(
$row['destination_name']
);
?>

</h5>


<p class="text-muted">

<?php
echo htmlspecialchars(
$row['caption']
);
?>

</p>


<a
href="gallery.php?delete=<?php
echo $row['gallery_id'];
?>"
class="btn btn-danger btn-sm"
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



<!-- MODAL -->

<div
class="modal fade"
id="galleryModal"
>

<div class="modal-dialog">

<div class="modal-content">


<div class="modal-header">

<h5>

Add Gallery Image

</h5>

<button
class="btn-close"
data-bs-dismiss="modal"
></button>

</div>


<form method="POST">


<div class="modal-body">


<div class="mb-3">

<label>

Destination

</label>


<select
name="destination_id"
class="form-select"
required
>


<?php

$result =
mysqli_query(
    $conn,
    "SELECT *
     FROM destinations
     ORDER BY destination_name"
);


while (
    $destination =
    mysqli_fetch_assoc($result)
) {

?>


<option
value="<?php
echo $destination[
'destination_id'
];
?>"
>

<?php
echo htmlspecialchars(
$destination[
'destination_name'
]
);
?>

</option>


<?php

}

?>


</select>

</div>


<div class="mb-3">

<label>

Image Filename

</label>

<input
type="text"
name="image"
class="form-control"
placeholder="gua1.jpg"
required
>

</div>


<div class="mb-3">

<label>

Caption

</label>

<input
type="text"
name="caption"
class="form-control"
required
>

</div>


</div>


<div class="modal-footer">

<button
type="submit"
name="add_gallery"
class="btn btn-success"
>

Add Image

</button>

</div>


</form>


</div>

</div>

</div>


<?php

include("footer.php");

?>