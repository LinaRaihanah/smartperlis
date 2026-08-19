<?php

include("header.php");


// ==========================================
// TOTAL VISITS
// ==========================================

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total
     FROM visitor_logs"
);

$totalVisits =
mysqli_fetch_assoc($result)['total'];


// ==========================================
// DESTINATION VIEWS
// ==========================================

$result =
mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total
     FROM visitor_logs
     WHERE destination_id IS NOT NULL"
);

$destinationViews =
mysqli_fetch_assoc($result)['total'];

?>



<!-- ==========================================
     PAGE TITLE
========================================== -->

<h2
    class="fw-bold mb-4"
    style="color:#0B2D5C;"
>

    Visitor Analytics

</h2>



<!-- ==========================================
     ANALYTICS CARDS
========================================== -->

<div class="row g-4 mb-5">


    <!-- TOTAL VISITS -->

    <div class="col-md-6">

        <div
            class="card shadow-sm border-0 p-4 h-100"
            style="
                border-radius:12px;
                background:white;
                border-left:5px solid #1565C0 !important;
            "
        >

            <div
                class="d-flex justify-content-between
                       align-items-center"
            >


                <div>

                    <small
                        class="fw-semibold"
                        style="color:#6c757d;"
                    >

                        Total Visits

                    </small>


                    <h2
                        class="fw-bold mb-0 mt-1"
                        style="color:#0B2D5C;"
                    >

                        <?php

                        echo $totalVisits;

                        ?>

                    </h2>

                </div>


                <div
                    class="rounded-circle d-flex
                           align-items-center
                           justify-content-center"
                    style="
                        width:60px;
                        height:60px;
                        background:#E3F2FD;
                    "
                >

                    <i
                        class="bi bi-people fs-2"
                        style="color:#1565C0;"
                    ></i>

                </div>


            </div>

        </div>

    </div>



    <!-- DESTINATION VIEWS -->

    <div class="col-md-6">

        <div
            class="card shadow-sm border-0 p-4 h-100"
            style="
                border-radius:12px;
                background:white;
                border-left:5px solid #FFC107 !important;
            "
        >

            <div
                class="d-flex justify-content-between
                       align-items-center"
            >


                <div>

                    <small
                        class="fw-semibold"
                        style="color:#6c757d;"
                    >

                        Destination Views

                    </small>


                    <h2
                        class="fw-bold mb-0 mt-1"
                        style="color:#0B2D5C;"
                    >

                        <?php

                        echo $destinationViews;

                        ?>

                    </h2>

                </div>


                <div
                    class="rounded-circle d-flex
                           align-items-center
                           justify-content-center"
                    style="
                        width:60px;
                        height:60px;
                        background:#FFF8E1;
                    "
                >

                    <i
                        class="bi bi-eye fs-2"
                        style="color:#FFC107;"
                    ></i>

                </div>


            </div>

        </div>

    </div>


</div>



<!-- ==========================================
     MOST VIEWED DESTINATIONS
========================================== -->

<div
    class="card shadow-sm border-0"
    style="
        border-radius:12px;
        background:white;
    "
>

    <div class="card-body p-4">


        <h4
            class="fw-bold mb-4"
            style="color:#0B2D5C;"
        >

            Most Viewed Destinations

        </h4>



        <div class="table-responsive">


            <table
                class="table table-hover align-middle"
            >


                <!-- TABLE HEADER -->

                <thead
                    style="
                        background:#0B2D5C;
                        color:white;
                    "
                >

                    <tr>

                        <th class="py-3">
                            Rank
                        </th>

                        <th class="py-3">
                            Destination
                        </th>

                        <th class="py-3">
                            Total Views
                        </th>

                    </tr>

                </thead>



                <!-- TABLE BODY -->

                <tbody>


                <?php

                $sql = "

                SELECT

                    destinations.destination_id,

                    destinations.destination_name,

                    COUNT(
                        visitor_logs.destination_id
                    ) AS total_view

                FROM visitor_logs

                INNER JOIN destinations

                ON visitor_logs.destination_id =
                   destinations.destination_id

                WHERE visitor_logs.destination_id IS NOT NULL

                GROUP BY

                    destinations.destination_id,

                    destinations.destination_name

                ORDER BY total_view DESC

                ";


                $result =
                    mysqli_query(
                        $conn,
                        $sql
                    );


                $rank = 1;


                while (
                    $row =
                    mysqli_fetch_assoc($result)
                ) {

                ?>


                    <tr>


                        <!-- RANK -->

                        <td>

                            <?php

                            if ($rank == 1) {

                                echo
                                '<span
                                    class="fw-bold"
                                    style="color:#FFC107;"
                                >
                                    <i class="bi bi-trophy-fill"></i>
                                    1
                                </span>';

                            }
                            else {

                                echo $rank;

                            }

                            $rank++;

                            ?>

                        </td>



                        <!-- DESTINATION -->

                        <td>

                            <strong
                                style="color:#1565C0;"
                            >

                                <?php

                                echo htmlspecialchars(
                                    $row['destination_name']
                                );

                                ?>

                            </strong>

                        </td>



                        <!-- TOTAL VIEWS -->

                        <td>

                            <span
                                class="badge fw-semibold"
                                style="
                                    background:#1565C0;
                                    color:white;
                                    padding:8px 12px;
                                    border-radius:6px;
                                "
                            >

                                <?php

                                echo $row['total_view'];

                                ?>

                                views

                            </span>

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



<?php

include("footer.php");

?>