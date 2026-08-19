<?php

session_start();

include("../config.php");


// ===============================
// CHECK ADMIN LOGIN
// ===============================

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");

    exit();

}


// ===============================
// GET EVENT ID
// ===============================

if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn, $_GET['id']);

}
else{

    header("Location: manage_event.php");

    exit();

}


// ===============================
// GET EVENT DATA
// ===============================

$result = mysqli_query(
    $conn,
    "SELECT * FROM events WHERE event_id='$id'"
);

$data = mysqli_fetch_assoc($result);


// Check if event exists

if(!$data){

    echo "Event not found.";

    exit();

}


// ===============================
// UPDATE EVENT
// ===============================

if(isset($_POST['update'])){

    $event_name = mysqli_real_escape_string(
        $conn,
        $_POST['event_name']
    );

    $event_date = mysqli_real_escape_string(
        $conn,
        $_POST['event_date']
    );

    $event_end_date = mysqli_real_escape_string(
        $conn,
        $_POST['event_end_date']
    );

    $location = mysqli_real_escape_string(
        $conn,
        $_POST['location']
    );

    $description = mysqli_real_escape_string(
        $conn,
        $_POST['description']
    );


    // ===============================
    // CHECK DATE
    // ===============================

    if($event_end_date < $event_date){

        echo "<script>

        alert('End Date cannot be before Start Date.');

        window.history.back();

        </script>";

        exit();

    }


    // ===============================
    // CHECK NEW IMAGE
    // ===============================

    if(
        isset($_FILES['image']) &&
        $_FILES['image']['name'] != ""
    ){

        $image = $_FILES['image']['name'];

        $temp = $_FILES['image']['tmp_name'];


        move_uploaded_file(
            $temp,
            "../assets/images/".$image
        );


        // UPDATE WITH NEW IMAGE

        $sql = "UPDATE events SET

        event_name='$event_name',

        event_date='$event_date',

        event_end_date='$event_end_date',

        location='$location',

        description='$description',

        image='$image'

        WHERE event_id='$id'";


    }

    else{

        // UPDATE WITHOUT CHANGING IMAGE

        $sql = "UPDATE events SET

        event_name='$event_name',

        event_date='$event_date',

        event_end_date='$event_end_date',

        location='$location',

        description='$description'

        WHERE event_id='$id'";

    }


    // ===============================
    // EXECUTE UPDATE
    // ===============================

    if(mysqli_query($conn, $sql)){

        // Go back to admin event list

        header("Location: manage_event.php");

        exit();

    }
    else{

        echo "Error updating event: " . mysqli_error($conn);

    }

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">


<title>
Edit Event - Smart Perlis Tourism Portal
</title>


<!-- BOOTSTRAP -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">


<style>

body{

    background-color: #f5f5f5;

}

.card{

    border: none;

}

.current-image{

    max-width: 250px;

    border-radius: 8px;

}

</style>

</head>


<body>


<!-- ===============================
     NAVBAR
================================ -->

<nav class="navbar navbar-dark bg-success">

<div class="container">

<span class="navbar-brand">

Smart Perlis Tourism Portal

</span>


<a
href="manage_event.php"
class="btn btn-light">

Back

</a>

</div>

</nav>



<!-- ===============================
     MAIN CONTENT
================================ -->

<div class="container mt-5 mb-5">


<div class="card shadow p-4">


<h2 class="mb-4">

Edit Event

</h2>


<form
method="POST"
enctype="multipart/form-data">


<!-- ===============================
     EVENT NAME
================================ -->

<div class="mb-3">

<label class="form-label">

<strong>Event Name</strong>

</label>


<input
type="text"
name="event_name"
class="form-control"
value="<?php echo htmlspecialchars($data['event_name']); ?>"
required>

</div>



<!-- ===============================
     START DATE
================================ -->

<div class="mb-3">

<label class="form-label">

<strong>Start Date</strong>

</label>


<input
type="date"
name="event_date"
id="event_date"
class="form-control"
value="<?php echo $data['event_date']; ?>"
required>

</div>



<!-- ===============================
     END DATE
================================ -->

<div class="mb-3">

<label class="form-label">

<strong>End Date</strong>

</label>


<input
type="date"
name="event_end_date"
id="event_end_date"
class="form-control"
value="<?php echo $data['event_end_date']; ?>"
required>

</div>



<!-- ===============================
     DURATION
================================ -->

<div class="mb-3">

<label class="form-label">

<strong>Duration</strong>

</label>


<input
type="text"
id="duration"
class="form-control"
readonly
placeholder="Duration will be calculated automatically">


<div class="form-text">

Duration is automatically calculated from the Start Date and End Date.

</div>

</div>



<!-- ===============================
     LOCATION
================================ -->

<div class="mb-3">

<label class="form-label">

<strong>Location</strong>

</label>


<input
type="text"
name="location"
class="form-control"
value="<?php echo htmlspecialchars($data['location']); ?>"
required>

</div>



<!-- ===============================
     DESCRIPTION
================================ -->

<div class="mb-3">

<label class="form-label">

<strong>Description</strong>

</label>


<textarea
name="description"
class="form-control"
rows="5"
required><?php echo htmlspecialchars($data['description']); ?></textarea>

</div>



<!-- ===============================
     CURRENT POSTER
================================ -->

<div class="mb-3">

<label class="form-label">

<strong>Current Poster</strong>

</label>


<br><br>


<?php

if(!empty($data['image'])){

?>

<img
src="../assets/images/<?php echo htmlspecialchars($data['image']); ?>"
class="current-image img-thumbnail">

<?php

}
else{

?>

<p class="text-muted">

No poster uploaded.

</p>

<?php

}

?>

</div>



<!-- ===============================
     CHANGE POSTER
================================ -->

<div class="mb-4">

<label class="form-label">

<strong>Change Poster (Optional)</strong>

</label>


<input
type="file"
name="image"
class="form-control"
accept="image/*">


</div>



<!-- ===============================
     UPDATE BUTTON
================================ -->

<button
type="submit"
name="update"
class="btn btn-success">

Update Event

</button>


<a
href="manage_event.php"
class="btn btn-secondary">

Cancel

</a>


</form>


</div>


</div>



<!-- ===============================
     JAVASCRIPT
================================ -->

<script>

function calculateDuration(){

    let startDate =
        document.getElementById("event_date").value;

    let endDate =
        document.getElementById("event_end_date").value;


    if(startDate && endDate){

        let start =
            new Date(startDate);

        let end =
            new Date(endDate);


        let difference =
            Math.floor(
                (end - start) /
                (1000 * 60 * 60 * 24)
            ) + 1;


        if(difference > 0){

            document.getElementById("duration").value =
                difference +
                " day" +
                (difference > 1 ? "s" : "");

        }
        else{

            document.getElementById("duration").value =
                "Invalid date range";

        }

    }
    else{

        document.getElementById("duration").value = "";

    }

}


// Calculate duration when page loads

calculateDuration();


// Calculate when Start Date changes

document
.getElementById("event_date")
.addEventListener(
    "change",
    calculateDuration
);


// Calculate when End Date changes

document
.getElementById("event_end_date")
.addEventListener(
    "change",
    calculateDuration
);

</script>


</body>

</html>