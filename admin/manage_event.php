<?php

session_start();

include("../config.php");


// ========================================
// CHECK ADMIN LOGIN
// ========================================

if (!isset($_SESSION['admin'])) {

    header("Location: ../login.php");

    exit();

}


// ========================================
// DELETE EVENT
// ========================================

if (isset($_GET['delete'])) {

    $id = (int) $_GET['delete'];

    mysqli_query(
        $conn,
        "DELETE FROM events WHERE event_id='$id'"
    );

    header("Location: manage_event.php");

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
        Event
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
   TABLE CONTAINER
================================ */

.table-container {
    background-color: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    overflow: hidden;
}


/* ===============================
   EVENT TABLE
================================ */

.event-table {
    margin-bottom: 0;
}


/* Table Header */

.event-table thead {
    background-color: #0057B8;
    color: white;
}

.event-table thead th {
    padding: 15px;
    border: none;
    font-weight: 600;
}


/* Yellow line */

.event-table thead tr {
    border-bottom: 4px solid #FFD700;
}


/* ===============================
   TABLE BODY
================================ */

.event-table tbody td {
    padding: 14px;
    vertical-align: middle;
}


/* Alternating rows */

.event-table tbody tr:nth-child(even) {
    background-color: #F0F6FF;
}

.event-table tbody tr:nth-child(odd) {
    background-color: #FFFFFF;
}


/* Hover effect */

.event-table tbody tr:hover {
    background-color: #FFF8D6;
    transition: 0.2s;
}


/* ===============================
   ID BADGE
================================ */

.id-badge {
    background-color: #FFD700;
    color: #000;
    padding: 6px 10px;
    border-radius: 20px;
    font-weight: bold;
}


/* ===============================
   EVENT IMAGE
================================ */

.event-image {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
    border: 3px solid #E6F0FF;
}


/* ===============================
   ACTION BUTTONS
================================ */

.action-btn {
    border-radius: 6px;
    margin-right: 4px;
}


/* ===============================
   LOCATION ICON
================================ */

.location-icon {
    color: #0057B8;
}

</style>

</head>


<body class="bg-light">


<!-- ========================================
     NAVBAR
======================================== -->

<nav class="navbar navbar-dark navbar-blue">

    <div class="container">


        <!-- Logo + Portal Name -->

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


    <!-- HEADER -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>

            Event List

        </h2>


        <a
            href="add_event.php"
            class="btn btn-blue"
        >

            <i class="bi bi-plus-circle"></i>

            Add Event

        </a>

    </div>



    <!-- ========================================
         EVENT TABLE
    ======================================== -->

    <div class="table-container">

        <div class="table-responsive">

            <table class="table event-table">


                <thead>

                    <tr>

                        <th>
                            ID
                        </th>


                        <th>
                            Image
                        </th>


                        <th>
                            Event Name
                        </th>


                        <th>
                            Start Date
                        </th>


                        <th>
                            End Date
                        </th>


                        <th>
                            Location
                        </th>


                        <th>
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody>


<?php

$result = mysqli_query(
    $conn,
    "SELECT *
     FROM events
     ORDER BY event_date ASC"
);


if (!$result) {

?>

                    <tr>

                        <td
                            colspan="7"
                            class="text-center text-danger"
                        >

                            Database Error:

                            <?php

                            echo htmlspecialchars(
                                mysqli_error($conn)
                            );

                            ?>

                        </td>

                    </tr>

<?php

}
elseif (mysqli_num_rows($result) == 0) {

?>

                    <tr>

                        <td
                            colspan="7"
                            class="text-center"
                        >

                            No events available.

                        </td>

                    </tr>

<?php

}
else {


    while ($row = mysqli_fetch_assoc($result)) {

?>


                    <tr>


                        <!-- ID -->

                        <td>

                            <span class="id-badge">

                                <?php

                                echo (int)
                                    $row['event_id'];

                                ?>

                            </span>

                        </td>



                        <!-- IMAGE -->

                        <td>

                            <img
                                src="../assets/images/<?php
                                    echo htmlspecialchars(
                                        $row['image']
                                    );
                                ?>"
                                class="event-image"
                                alt="Event Image"
                            >

                        </td>



                        <!-- EVENT NAME -->

                        <td>

                            <strong>

                                <?php

                                echo htmlspecialchars(
                                    $row['event_name']
                                );

                                ?>

                            </strong>

                        </td>



                        <!-- START DATE -->

                        <td>

                            <i class="bi bi-calendar-event location-icon"></i>

                            <?php

                            if (!empty($row['event_date'])) {

                                echo date(
                                    "d M Y",
                                    strtotime(
                                        $row['event_date']
                                    )
                                );

                            }
                            else {

                                echo "-";

                            }

                            ?>

                        </td>



                        <!-- END DATE -->

                        <td>

                            <i class="bi bi-calendar-check location-icon"></i>

                            <?php

                            if (
                                !empty(
                                    $row['event_end_date']
                                )
                            ) {

                                echo date(
                                    "d M Y",
                                    strtotime(
                                        $row['event_end_date']
                                    )
                                );

                            }
                            else {

                                echo "-";

                            }

                            ?>

                        </td>



                        <!-- LOCATION -->

                        <td>

                            <i class="bi bi-geo-alt-fill location-icon"></i>

                            <?php

                            echo htmlspecialchars(
                                $row['location']
                            );

                            ?>

                        </td>



                        <!-- ACTION -->

                        <td>


                            <!-- EDIT -->

                            <a
                                href="edit_event.php?id=<?php
                                    echo (int)
                                        $row['event_id'];
                                ?>"
                                class="btn btn-yellow btn-sm action-btn"
                                title="Edit Event"
                            >

                                <i class="bi bi-pencil"></i>

                            </a>



                            <!-- DELETE -->

                            <a
                                href="manage_event.php?delete=<?php
                                    echo (int)
                                        $row['event_id'];
                                ?>"
                                class="btn btn-danger btn-sm action-btn"
                                title="Delete Event"
                                onclick="
                                    return confirm(
                                        'Delete this event?'
                                    );
                                "
                            >

                                <i class="bi bi-trash"></i>

                            </a>


                        </td>


                    </tr>


<?php

    }

}

?>


                </tbody>

            </table>

        </div>

    </div>


</div>


</body>

</html>