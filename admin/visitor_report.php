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

        /* ================================
           BLUE + YELLOW THEME
        ================================= */

        body {

            background-color: #f5f8fc;

        }


        /* ================================
           NAVBAR
        ================================= */

        .navbar-blue {

            background-color: #0057B8;

        }


        /* ================================
           MAIN CARD
        ================================= */

        .report-card {

            background-color: white;

            border-radius: 12px;

            overflow: hidden;

            box-shadow:
                0 4px 12px rgba(0,0,0,0.08);

        }


        /* ================================
           CARD HEADER
        ================================= */

        .report-header {

            background-color: #0057B8;

            color: white;

            padding: 18px 20px;

            border-bottom: 4px solid #FFD700;

        }


        .report-header h4 {

            margin: 0;

            font-weight: 600;

        }


        /* ================================
           TABLE
        ================================= */

        .visitor-table {

            margin-bottom: 0;

        }


        .visitor-table thead {

            background-color: #0057B8;

            color: white;

        }


        .visitor-table thead th {

            padding: 14px;

            border: none;

            font-weight: 600;

        }


        /* Yellow line */

        .visitor-table thead tr {

            border-bottom: 4px solid #FFD700;

        }


        /* Table body */

        .visitor-table tbody td {

            padding: 14px;

            vertical-align: middle;

        }


        /* Alternating rows */

        .visitor-table tbody tr:nth-child(even) {

            background-color: #F0F6FF;

        }


        .visitor-table tbody tr:nth-child(odd) {

            background-color: #FFFFFF;

        }


        /* Hover */

        .visitor-table tbody tr:hover {

            background-color: #FFF8D6;

            transition: 0.2s;

        }


        /* ================================
           VIEW COUNT
        ================================= */

        .view-badge {

            background-color: #FFD700;

            color: #000;

            padding: 7px 12px;

            border-radius: 20px;

            font-weight: 600;

        }


        /* ================================
           NUMBER BADGE
        ================================= */

        .number-badge {

            background-color: #0057B8;

            color: white;

            padding: 6px 10px;

            border-radius: 20px;

            font-weight: bold;

        }

    </style>

</head>


<body>


<!-- ================================
     NAVBAR
================================ -->

<nav class="navbar navbar-dark navbar-blue">

    <div class="container">


        <span class="navbar-brand fw-bold">

            <i class="bi bi-bar-chart-fill"></i>

            Visitor Report

        </span>


        <a
            href="dashboard.php"
            class="btn btn-light"
        >

            <i class="bi bi-speedometer2"></i>

            Dashboard

        </a>


    </div>

</nav>



<!-- ================================
     CONTENT
================================ -->

<div class="container mt-5 mb-5">


    <!-- MOST VIEWED -->

    <div class="report-card">


        <!-- CARD HEADER -->

        <div class="report-header">

            <h4>

                <i class="bi bi-eye-fill"></i>

                Most Viewed Destination

            </h4>

        </div>



        <!-- CARD BODY -->

        <div class="p-3">


            <div class="table-responsive">


                <table
                    class="table visitor-table"
                >


                    <thead>

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

?>


                        <tr>

                            <td
                                colspan="3"
                                class="text-center text-danger py-4"
                            >

                                <i class="bi bi-exclamation-triangle-fill"></i>

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
                                colspan="3"
                                class="text-center py-4"
                            >

                                <i class="bi bi-bar-chart"></i>

                                No visitor data available.

                            </td>

                        </tr>


<?php

}


else {


    $no = 1;


    while (
        $row = mysqli_fetch_assoc($result)
    ) {

?>


                        <tr>


                            <!-- NUMBER -->

                            <td>

                                <span class="number-badge">

                                    <?php

                                    echo $no;

                                    ?>

                                </span>

                            </td>



                            <!-- DESTINATION -->

                            <td>

                                <strong>

                                    <?php

                                    echo htmlspecialchars(
                                        $row['destination_name']
                                    );

                                    ?>

                                </strong>

                            </td>



                            <!-- TOTAL VIEW -->

                            <td>

                                <span class="view-badge">

                                    <i class="bi bi-eye-fill"></i>

                                    <?php

                                    echo $row['total_view'];

                                    ?>

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