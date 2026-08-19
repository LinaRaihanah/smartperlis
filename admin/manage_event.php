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
        Manage Event
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

</head>


<body class="bg-light">


<!-- ========================================
     NAVBAR
======================================== -->

<nav class="navbar navbar-dark bg-success">

    <div class="container">

        <span class="navbar-brand">

            Manage Event

        </span>


        <a
            href="dashboard.php"
            class="btn btn-light"
        >

            Dashboard

        </a>

    </div>

</nav>



<!-- ========================================
     MAIN CONTENT
======================================== -->

<div class="container mt-5">


    <!-- HEADER -->

    <div class="d-flex justify-content-between mb-4">

        <h2>

            Event List

        </h2>


        <a
            href="add_event.php"
            class="btn btn-success"
        >

            <i class="bi bi-plus-circle"></i>

            Add Event

        </a>

    </div>



    <!-- ========================================
         EVENT TABLE
    ======================================== -->

    <div class="table-responsive">

        <table
            class="table table-bordered table-striped bg-white"
        >

            <thead class="table-success">

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

                        <?php
                        echo (int) $row['event_id'];
                        ?>

                    </td>



                    <!-- IMAGE -->

                    <td>

                        <img
                            src="../assets/images/<?php
                                echo htmlspecialchars(
                                    $row['image']
                                );
                            ?>"
                            width="80"
                            height="60"
                            style="object-fit: cover;"
                            alt="Event Image"
                        >

                    </td>



                    <!-- EVENT NAME -->

                    <td>

                        <?php
                        echo htmlspecialchars(
                            $row['event_name']
                        );
                        ?>

                    </td>



                    <!-- START DATE -->

                    <td>

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
                            class="btn btn-warning btn-sm"
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
                            class="btn btn-danger btn-sm"
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


</body>

</html>