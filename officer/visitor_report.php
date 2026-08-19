<?php

include("header.php");


// ==========================================
// TOTAL VISITS
// ==========================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total
     FROM visitor_logs"
);

$totalVisits = mysqli_fetch_assoc($result)['total'];


// ==========================================
// DESTINATION VIEWS
// ==========================================

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total
     FROM visitor_logs
     WHERE destination_id IS NOT NULL"
);

$destinationViews = mysqli_fetch_assoc($result)['total'];

?>



<!-- ==========================================
     PAGE TITLE
========================================== -->

<h2
    class="fw-bold mb-4"
    style="
        color:#0B2D5C;
        letter-spacing:0.3px;
    "
>
    Visitor Report
</h2>



<!-- ==========================================
     ANALYTICS CARDS
========================================== -->

<div class="row g-4 mb-5">


    <!-- ======================================
         TOTAL VISITS
    ======================================= -->

    <div class="col-md-6">

        <div
            class="card shadow-sm border-0 p-4 h-100"
            style="
                border-radius:14px;
                background:white;
                border-left:5px solid #1565C0 !important;
                transition:all 0.2s ease;
            "
        >

            <div
                class="d-flex
                       justify-content-between
                       align-items-center"
            >

                <div>

                    <small
                        class="fw-semibold"
                        style="
                            color:#6c757d;
                            font-size:13px;
                        "
                    >
                        Total Visits
                    </small>


                    <h2
                        class="fw-bold mb-0 mt-1"
                        style="
                            color:#0B2D5C;
                            font-size:30px;
                        "
                    >
                        <?php echo $totalVisits; ?>
                    </h2>

                </div>


                <!-- ICON -->

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



    <!-- ======================================
         DESTINATION VIEWS
    ======================================= -->

    <div class="col-md-6">

        <div
            class="card shadow-sm border-0 p-4 h-100"
            style="
                border-radius:14px;
                background:white;
                border-left:5px solid #FFC107 !important;
                transition:all 0.2s ease;
            "
        >

            <div
                class="d-flex
                       justify-content-between
                       align-items-center"
            >

                <div>

                    <small
                        class="fw-semibold"
                        style="
                            color:#6c757d;
                            font-size:13px;
                        "
                    >
                        Destination Views
                    </small>


                    <h2
                        class="fw-bold mb-0 mt-1"
                        style="
                            color:#0B2D5C;
                            font-size:30px;
                        "
                    >
                        <?php echo $destinationViews; ?>
                    </h2>

                </div>


                <!-- ICON -->

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
        border-radius:16px;
        background:white;
        overflow:hidden;
    "
>

    <div class="card-body p-4">


        <!-- ==================================
             SECTION TITLE
        =================================== -->

        <div
            class="d-flex
                   justify-content-between
                   align-items-center
                   mb-4"
        >

            <div>

                <h4
                    class="fw-bold mb-1"
                    style="color:#0B2D5C;"
                >
                    Most Viewed Destinations
                </h4>

                <small
                    style="
                        color:#8A96A3;
                        font-size:13px;
                    "
                >
                    Popular destinations based on visitor activity
                </small>

            </div>


            <!-- SMALL ICON -->

            <div
                class="d-flex
                       align-items-center
                       justify-content-center"
                style="
                    width:45px;
                    height:45px;
                    border-radius:12px;
                    background:#FFF8E1;
                    color:#FFC107;
                "
            >

                <i
                    class="bi bi-bar-chart-fill"
                    style="font-size:20px;"
                ></i>

            </div>

        </div>



        <!-- ==================================
             TABLE
        =================================== -->

        <div class="table-responsive">

            <table
                class="table align-middle mb-0"
                style="
                    border-collapse:separate;
                    border-spacing:0 8px;
                "
            >


                <!-- ==================================
                     TABLE HEADER
                =================================== -->

                <thead>

                    <tr>

                        <th
                            style="
                                background:linear-gradient(
                                    135deg,
                                    #0B2D5C,
                                    #1565C0
                                );
                                color:white;
                                padding:15px 20px;
                                border:none;
                                font-size:14px;
                                font-weight:600;
                                border-radius:10px 0 0 10px;
                            "
                        >
                            Rank
                        </th>


                        <th
                            style="
                                background:linear-gradient(
                                    135deg,
                                    #0B2D5C,
                                    #1565C0
                                );
                                color:white;
                                padding:15px 20px;
                                border:none;
                                font-size:14px;
                                font-weight:600;
                                border-radius:0 10px 10px 0;
                            "
                        >
                            Destination
                        </th>

                    </tr>

                </thead>



                <!-- ==================================
                     TABLE BODY
                =================================== -->

                <tbody>


                <?php


                // ==================================
                // GET MOST VIEWED DESTINATIONS
                // ==================================

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

                    WHERE
                        visitor_logs.destination_id IS NOT NULL

                    GROUP BY

                        destinations.destination_id,

                        destinations.destination_name

                    ORDER BY
                        total_view DESC

                ";


                $result = mysqli_query(
                    $conn,
                    $sql
                );


                $rank = 1;


                // ==================================
                // DISPLAY DESTINATIONS
                // ==================================

                while (
                    $row =
                    mysqli_fetch_assoc($result)
                ) {

                ?>


                    <tr
                        style="
                            background:#F8FAFD;
                            transition:
                                all 0.2s ease;
                        "

                        onmouseover="
                            this.style.background='#EAF3FF';
                            this.style.transform='scale(1.005)';
                            this.style.boxShadow='0 3px 10px rgba(21,101,192,0.08)';
                        "

                        onmouseout="
                            this.style.background='#F8FAFD';
                            this.style.transform='scale(1)';
                            this.style.boxShadow='none';
                        "
                    >


                        <!-- ==========================
                             RANK
                        =========================== -->

                        <td
                            style="
                                padding:16px 20px;
                                border:none;
                                border-radius:10px 0 0 10px;
                            "
                        >

                            <?php

                            if ($rank == 1) {

                                ?>

                                <!-- FIRST PLACE -->

                                <span
                                    class="d-inline-flex
                                           align-items-center
                                           justify-content-center
                                           fw-bold"
                                    style="
                                        width:40px;
                                        height:40px;
                                        border-radius:50%;
                                        background:#FFF3CD;
                                        color:#D99A00;
                                        font-size:16px;
                                        box-shadow:
                                            0 3px 8px
                                            rgba(
                                                255,
                                                193,
                                                7,
                                                0.25
                                            );
                                    "
                                >

                                    <i
                                        class="bi bi-trophy-fill"
                                        style="
                                            font-size:18px;
                                        "
                                    ></i>

                                </span>

                                <?php

                            }

                            else {

                                ?>

                                <!-- OTHER RANKS -->

                                <span
                                    class="d-inline-flex
                                           align-items-center
                                           justify-content-center
                                           fw-bold"
                                    style="
                                        width:40px;
                                        height:40px;
                                        border-radius:50%;
                                        background:#E8F1FB;
                                        color:#1565C0;
                                        font-size:14px;
                                    "
                                >

                                    <?php echo $rank; ?>

                                </span>

                                <?php

                            }


                            $rank++;

                            ?>

                        </td>



                        <!-- ==========================
                             DESTINATION
                        =========================== -->

                        <td
                            style="
                                padding:16px 20px;
                                border:none;
                                border-radius:0 10px 10px 0;
                            "
                        >

                            <div
                                class="d-flex
                                       align-items-center"
                                style="gap:14px;"
                            >


                                <!-- LOCATION ICON -->

                                <div
                                    class="d-flex
                                           align-items-center
                                           justify-content-center"
                                    style="
                                        width:44px;
                                        height:44px;
                                        min-width:44px;
                                        border-radius:11px;
                                        background:#E3F2FD;
                                        color:#1565C0;
                                    "
                                >

                                    <i
                                        class="bi bi-geo-alt-fill"
                                        style="
                                            font-size:19px;
                                        "
                                    ></i>

                                </div>



                                <!-- DESTINATION NAME -->

                                <div>

                                    <div
                                        class="fw-bold"
                                        style="
                                            color:#0B2D5C;
                                            font-size:15px;
                                        "
                                    >

                                        <?php

                                        echo htmlspecialchars(
                                            $row[
                                                'destination_name'
                                            ]
                                        );

                                        ?>

                                    </div>


                                    <small
                                        style="
                                            color:#8A96A3;
                                            font-size:12px;
                                        "
                                    >

                                        Popular destination

                                    </small>

                                </div>


                            </div>

                        </td>


                    </tr>


                <?php

                }


                // ==================================
                // IF NO DESTINATIONS
                // ==================================

                if ($rank == 1) {

                ?>

                    <tr>

                        <td
                            colspan="2"
                            class="text-center py-5"
                            style="
                                color:#8A96A3;
                                border:none;
                            "
                        >

                            <i
                                class="bi bi-geo-alt"
                                style="
                                    font-size:30px;
                                    color:#CBD5E1;
                                "
                            ></i>

                            <div
                                class="mt-2"
                                style="
                                    font-size:14px;
                                "
                            >
                                No destination views yet.
                            </div>

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
