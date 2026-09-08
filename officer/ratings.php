<?php

include("header.php");

?>


<!-- ==========================================
     PAGE TITLE
========================================== -->

<h2
    class="fw-bold mb-4"
    style="color:#0B2D5C;"
>

    Ratings

</h2>



<!-- ==========================================
     RATINGS CARD
========================================== -->

<div
    class="card shadow-sm border-0"
    style="
        border-radius:12px;
        background:white;
    "
>

    <div class="card-body p-4">


        <div class="table-responsive">


            <table
                class="table table-hover align-middle mb-0"
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
                            #
                        </th>

                        <th class="py-3">
                            Name
                        </th>

                        <th class="py-3">
                            Destination
                        </th>

                        <th class="py-3">
                            Rating
                        </th>

                        <th class="py-3">
                            Comment
                        </th>

                        <th class="py-3">
                            Date
                        </th>

                    </tr>

                </thead>



                <!-- TABLE BODY -->

                <tbody>


                <?php

                $sql = "

                SELECT

                    destination_ratings.*,

                    destinations.destination_name

                FROM destination_ratings

                JOIN destinations

                ON destination_ratings.destination_id =
                   destinations.destination_id

                ORDER BY
                    destination_ratings.created_at DESC

                ";


                $result =
                    mysqli_query(
                        $conn,
                        $sql
                    );


                $count = 1;


                while (
                    $row =
                    mysqli_fetch_assoc($result)
                ) {

                ?>


                    <tr>


                        <!-- NUMBER -->

                        <td>

                            <?php

                            echo $count++;

                            ?>

                        </td>



                        <!-- NAME -->

                        <td>

                            <strong
                                style="color:#0B2D5C;"
                            >

                                <?php

                                echo htmlspecialchars(
                                    $row['name']
                                );

                                ?>

                            </strong>

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



                        <!-- RATING -->

                        <td>

                        <?php

                        for (
                            $i = 1;
                            $i <= 5;
                            $i++
                        ) {

                            if (
                                $i <= $row['rating']
                            ) {

                                echo
                                '<i
                                    class="bi bi-star-fill"
                                    style="color:#FFC107;"
                                ></i>';

                            }
                            else {

                                echo
                                '<i
                                    class="bi bi-star"
                                    style="color:#FFC107;"
                                ></i>';

                            }

                        }

                        ?>

                        </td>



                        <!-- COMMENT -->

                        <td>

                            <span
                                class="text-muted"
                            >

                                <?php

                                echo htmlspecialchars(
                                    $row['comment']
                                );

                                ?>

                            </span>

                        </td>



                        <!-- DATE -->

                        <td>

                            <?php

                            echo date(
                                'd M Y',
                                strtotime(
                                    $row['created_at']
                                )
                            );

                            ?>

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