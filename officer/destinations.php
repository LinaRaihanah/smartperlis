<?php

include("header.php");


// =====================================
// DELETE
// =====================================

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


// =====================================
// ADD
// =====================================

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


// =====================================
// UPDATE
// =====================================

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


// =====================================
// EDIT DATA
// =====================================

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


<!-- =====================================
     PAGE STYLE
===================================== -->

<style>

/* =====================================
   GENERAL PAGE
===================================== */

body {

    background: #FFFDF5;

}


/* =====================================
   PAGE TITLE
===================================== */

.page-title {

    color: #0B2D5C;

    font-size: 2rem;

    font-weight: 800;

}


/* =====================================
   ADD DESTINATION BUTTON
===================================== */

.add-btn {

    border: none;

    border-radius: 10px;

    padding: 10px 18px;

    font-weight: 700;

    color: #ffffff;

    background: linear-gradient(
        135deg,
        #1565C0,
        #FFC107
    );

    transition: all 0.25s ease;

    box-shadow:
        0 5px 12px
        rgba(21, 101, 192, 0.2);

}


.add-btn:hover {

    color: #ffffff;

    transform: translateY(-2px);

    box-shadow:
        0 8px 18px
        rgba(21, 101, 192, 0.3);

}


/* =====================================
   TABLE CARD
===================================== */

.destination-card {

    border: none;

    border-radius: 18px;

    background: #FFF9E8;

    overflow: hidden;

}


/* =====================================
   TABLE
===================================== */

.destination-table {

    margin-bottom: 0;

}


/* =====================================
   TABLE HEADER
===================================== */

.destination-table thead {

    background: #0B2D5C;

}


.destination-table thead th {

    background: #0B2D5C;

    color: #ffffff;

    font-weight: 700;

    border: none;

    padding: 14px;

}


/* =====================================
   TABLE BODY
===================================== */

.destination-table tbody td {

    background: #FFF9E8;

    padding: 14px;

    border-color: #F1E7C8;

}


/* =====================================
   TABLE HOVER
===================================== */

.destination-table tbody tr:hover td {

    background: #FFF3CD;

}


/* =====================================
   DESTINATION IMAGE
===================================== */

.destination-image {

    width: 80px;

    height: 55px;

    object-fit: cover;

    border-radius: 10px;

    border: 2px solid #F1E7C8;

}


/* =====================================
   CATEGORY BADGE
===================================== */

.category-badge {

    background: #FFC107;

    color: #0B2D5C;

    font-weight: 700;

    padding: 7px 11px;

    border-radius: 20px;

}


/* =====================================
   EDIT BUTTON
===================================== */

.edit-btn {

    background: #1565C0;

    border: none;

    color: #ffffff;

    border-radius: 7px;

}


.edit-btn:hover {

    background: #0B2D5C;

    color: #ffffff;

}


/* =====================================
   DELETE BUTTON
===================================== */

.delete-btn {

    background: #DC3545;

    border: none;

    color: #ffffff;

    border-radius: 7px;

}


.delete-btn:hover {

    background: #B02A37;

    color: #ffffff;

}


/* =====================================
   MODAL
===================================== */

.modal-content {

    background: #FFF9E8;

    border: none;

    border-radius: 18px;

    overflow: hidden;

}


/* =====================================
   MODAL HEADER
===================================== */

.modal-header {

    background: linear-gradient(
        135deg,
        #0B2D5C,
        #1565C0
    );

    color: #ffffff;

    border-bottom: 4px solid #FFC107;

    padding: 18px 22px;

}


.modal-title {

    font-weight: 700;

}


/* =====================================
   FORM LABEL
===================================== */

.form-label {

    color: #0B2D5C;

    font-weight: 700;

}


/* =====================================
   FORM INPUTS
===================================== */

.form-control,
.form-select {

    background: #FFFDF5;

    border: 1px solid #D8D0B8;

    border-radius: 9px;

    padding: 10px 12px;

}


.form-control:focus,
.form-select:focus {

    background: #ffffff;

    border-color: #1565C0;

    box-shadow:
        0 0 0 0.2rem
        rgba(21, 101, 192, 0.15);

}


/* =====================================
   MODAL FOOTER
===================================== */

.modal-footer {

    background: #FFF3CD;

    border-top: 1px solid #F1E7C8;

}


/* =====================================
   UPDATE BUTTON
===================================== */

.update-btn {

    background: #1565C0;

    border: none;

    color: #ffffff;

    border-radius: 9px;

    padding: 10px 20px;

    font-weight: 700;

}


.update-btn:hover {

    background: #0B2D5C;

    color: #ffffff;

}


/* =====================================
   ADD MODAL BUTTON
===================================== */

.modal-add-btn {

    background: linear-gradient(
        135deg,
        #1565C0,
        #FFC107
    );

    border: none;

    color: #ffffff;

    border-radius: 9px;

    padding: 10px 20px;

    font-weight: 700;

}


.modal-add-btn:hover {

    color: #ffffff;

    transform: translateY(-1px);

}


/* =====================================
   RESPONSIVE
===================================== */

@media (max-width: 768px) {

    .page-title {

        font-size: 1.7rem;

    }

}

</style>


<!-- =====================================
     PAGE HEADER
===================================== -->

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="page-title mb-0">

        <i class="bi bi-geo-alt-fill me-2"></i>

        Destinations

    </h2>


    <button
        class="btn add-btn"
        data-bs-toggle="modal"
        data-bs-target="#destinationModal"
    >

        <i class="bi bi-plus-lg me-1"></i>

        Add Destination

    </button>

</div>


<!-- =====================================
     DESTINATION TABLE
===================================== -->

<div class="card destination-card shadow-sm">

<div class="card-body p-0">

<div class="table-responsive">


<table class="table destination-table table-hover align-middle">


<thead>

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

<strong>

<?php
echo $row['destination_id'];
?>

</strong>

</td>


<td>

<img
    src="../assets/images/<?php
    echo htmlspecialchars(
        $row['image']
    );
    ?>"
    class="destination-image"
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

<span class="badge category-badge">

<?php
echo htmlspecialchars(
    $row['category']
);
?>

</span>

</td>


<td>

<i class="bi bi-geo-alt me-1 text-primary"></i>

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
    class="btn btn-sm edit-btn me-1"
    title="Edit"
>

    <i class="bi bi-pencil"></i>

</a>


<a
    href="destinations.php?delete=<?php
    echo $row['destination_id'];
    ?>"
    class="btn btn-sm delete-btn"
    title="Delete"
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


<!-- =====================================
     ADD / EDIT MODAL
===================================== -->

<div
    class="modal fade"
    id="destinationModal"
    tabindex="-1"
>

<div class="modal-dialog modal-lg">

<div class="modal-content">


<!-- MODAL HEADER -->

<div class="modal-header">

<h5 class="modal-title">

<i class="bi bi-geo-alt-fill me-2"></i>

<?php

echo $editData
    ? "Edit Destination"
    : "Add Destination";

?>

</h5>


<button
    type="button"
    class="btn-close btn-close-white"
    data-bs-dismiss="modal"
></button>

</div>


<form method="POST">


<div class="modal-body p-4">


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


<!-- DESTINATION NAME -->

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


<!-- CATEGORY -->

<div class="col-md-6">

<label class="form-label">

Category

</label>

<select
    name="category"
    class="form-select"
    required
>

<option
    value="Nature"
    <?php
    if (
        $editData &&
        $editData['category'] == 'Nature'
    ) echo 'selected';
    ?>
>

Nature

</option>

<option
    value="Culture"
    <?php
    if (
        $editData &&
        $editData['category'] == 'Culture'
    ) echo 'selected';
    ?>
>

Culture

</option>

<option
    value="Food"
    <?php
    if (
        $editData &&
        $editData['category'] == 'Food'
    ) echo 'selected';
    ?>
>

Food

</option>

<option
    value="Adventure"
    <?php
    if (
        $editData &&
        $editData['category'] == 'Adventure'
    ) echo 'selected';
    ?>
>

Adventure

</option>

</select>

</div>


<!-- LOCATION -->

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


<!-- IMAGE -->

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


<!-- DESCRIPTION -->

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


<!-- LATITUDE -->

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


<!-- LONGITUDE -->

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


<!-- MODAL FOOTER -->

<div class="modal-footer">


<?php

if ($editData) {

?>

<button
    type="submit"
    name="update_destination"
    class="btn update-btn"
>

<i class="bi bi-check-lg me-1"></i>

Update Destination

</button>

<?php

} else {

?>

<button
    type="submit"
    name="add_destination"
    class="btn modal-add-btn"
>

<i class="bi bi-plus-lg me-1"></i>

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

// =====================================
// AUTO OPEN EDIT MODAL
// =====================================

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

