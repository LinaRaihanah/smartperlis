<?php

include("header.php");


// DELETE

if (isset($_GET['delete'])) {

    $id =
        (int)$_GET['delete'];

    mysqli_query(
        $conn,
        "DELETE FROM events
         WHERE event_id=$id"
    );

    header("Location: events.php");

    exit();

}


// ADD

if (isset($_POST['add_event'])) {

    $name =
        mysqli_real_escape_string(
            $conn,
            $_POST['event_name']
        );

    $date =
        $_POST['event_date'];

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


    mysqli_query(
        $conn,
        "INSERT INTO events
        (
            event_name,
            event_date,
            location,
            description,
            image
        )

        VALUES

        (
            '$name',
            '$date',
            '$location',
            '$description',
            '$image'
        )"
    );


    header("Location: events.php");

    exit();

}

?>


<div class="d-flex justify-content-between mb-4">

<h2 class="fw-bold">

Events

</h2>


<button
class="btn btn-success"
data-bs-toggle="modal"
data-bs-target="#eventModal"
>

<i class="bi bi-plus-lg"></i>

Add Event

</button>

</div>



<div class="card shadow-sm">

<div class="card-body">


<div class="table-responsive">


<table class="table table-hover">


<thead class="table-success">

<tr>

<th>ID</th>

<th>Event</th>

<th>Date</th>

<th>Location</th>

<th>Image</th>

<th>Action</th>

</tr>

</thead>


<tbody>


<?php

$result =
mysqli_query(
    $conn,
    "SELECT *
     FROM events
     ORDER BY event_date DESC"
);


while (
    $row =
    mysqli_fetch_assoc($result)
) {

?>


<tr>

<td>

<?php
echo $row['event_id'];
?>

</td>


<td>

<strong>

<?php
echo htmlspecialchars(
$row['event_name']
);
?>

</strong>

</td>


<td>

<?php
echo date(
    'd M Y',
    strtotime(
        $row['event_date']
    )
);
?>

</td>


<td>

<?php
echo htmlspecialchars(
$row['location']
);
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

<a
href="events.php?delete=<?php
echo $row['event_id'];
?>"
class="btn btn-sm btn-danger"
onclick="return confirm('Delete this event?')"
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
id="eventModal"
>

<div class="modal-dialog modal-lg">

<div class="modal-content">


<div class="modal-header">

<h5>

Add Event

</h5>

<button
class="btn-close"
data-bs-dismiss="modal"
></button>

</div>


<form method="POST">


<div class="modal-body">


<div class="mb-3">

<label class="form-label">

Event Name

</label>

<input
type="text"
name="event_name"
class="form-control"
required
>

</div>


<div class="row">


<div class="col-md-6">

<label class="form-label">

Event Date

</label>

<input
type="date"
name="event_date"
class="form-control"
required
>

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
>

</div>

</div>


<div class="mb-3 mt-3">

<label class="form-label">

Description

</label>

<textarea
name="description"
class="form-control"
rows="4"
required
></textarea>

</div>


<div class="mb-3">

<label class="form-label">

Image Filename

</label>

<input
type="text"
name="image"
class="form-control"
placeholder="event.jpg"
>

</div>


</div>


<div class="modal-footer">

<button
type="submit"
name="add_event"
class="btn btn-success"
>

Add Event

</button>

</div>


</form>


</div>

</div>

</div>


<?php

include("footer.php");

?>