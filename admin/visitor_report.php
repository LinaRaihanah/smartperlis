<?php

session_start();

include("../config.php");


// ================================
// CHECK ADMIN LOGIN
// ================================

if (!isset($_SESSION['admin'])) {

    header("Location: ../login.php");

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
        Visitor Report - Smart Perlis Tourism Portal
    </title>


    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>


<body class="bg-light">


<!-- ================================
     NAVBAR
================================ -->

<nav class="navbar navbar-dark bg-success shadow">

    <div class="container">

        <span class="navbar-brand fw-bold">

            <i class="bi bi-bar-chart-fill"></i>

            Visitor Analytics

        </span>


        <a
            href="dashboard.php"
            class="btn btn-light">

            Dashboard

        </a>

    </div>

</nav>


<!-- ================================
     CONTENT
================================ -->

<div class="container mt-5 mb-5">


    <!-- MOST VIEWED -->

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h4 class="mb-0">

                Most Viewed Destination

            </h4>

        </div>


        <div class="card-body">


            <div class="table-responsive">


                <table
                    class="table table-bordered table-hover align-middle"
                >

                    <thead class="table-success">

                        <tr>

                            <th width="10%">
                                No.
                            </th>

                            <th>
                                Destination
                            </th>

                            <th width="25%">
                                Total View
                            </th>

                        </tr>

                    </thead>


                    <tbody>


<?php


// ================================
// VISITOR REPORT QUERY
// ================================

$sql = "

SELECT

    destinations.destination_id,

    destinations.destination_name,

    COUNT(visitor_logs.log_id) AS total_view

FROM visitor_logs

INNER JOIN destinations

    ON visitor_logs.destination_id =
       destinations.destination_id

GROUP BY

    visitor_logs.destination_id,

    destinations.destination_id,

    destinations.destination_name

ORDER BY

    total_view DESC

";


$result = mysqli_query($conn, $sql);


if (!$result) {

    echo '

        <tr>

            <td
                colspan="3"
                class="text-center text-danger">

                Database Error:

                ' .

                htmlspecialchars(
                    mysqli_error($conn)
                )

                . '

            </td>

        </tr>

    ';

}


elseif (mysqli_num_rows($result) == 0) {

    echo '

        <tr>

            <td
                colspan="3"
                class="text-center">

                No visitor data available.

            </td>

        </tr>

    ';

}


else {


    $no = 1;


    while (
        $row = mysqli_fetch_assoc($result)
    ) {

?>


                        <tr>

                            <td>

                                <?php
                                echo $no;
                                ?>

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

                                <span
                                    class="badge bg-success fs-6"
                                >

                                    <?php

                                    echo $row['total_view'];

                                    ?>

                                    views

                                </span>

                            </td>

                        </tr>


<?php

        $no++;

    }

}

?>


                    </tbody>

                </table>


            </div>


        </div>

    </div>


</div>


</body>

</html>