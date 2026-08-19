<?php

include("header.php");


// ======================================
// DELETE EVENT
// ======================================

if (isset($_GET['delete'])) {

    $id = (int)$_GET['delete'];

    mysqli_query(
        $conn,
        "DELETE FROM events
         WHERE event_id=$id"
    );

    header("Location: events.php");

    exit();
}


// ======================================
// ADD EVENT
// ======================================

if (isset($_POST['add_event'])) {

    $name =
        mysqli_real_escape_string(
            $conn,
            $_POST['event_name']
        );

    // START DATE
    $date =
        $_POST['event_date'];

    // END DATE
    $end_date =
        $_POST['event_end_date'];

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


    // ======================================
    // INSERT EVENT
    // ======================================

    mysqli_query(
        $conn,
        "INSERT INTO events
        (
            event_name,
            event_date,
            event_end_date,
            location,
            description,
            image
        )

        VALUES

        (
            '$name',
            '$date',
            '$end_date',
            '$location',
            '$description',
            '$image'
        )"
    );


    header("Location: events.php");

    exit();

}

?>


<style>

/* ======================================
   COLOUR THEME
====================================== */

:root {

    --navy: #0B2D5C;

    --blue: #1565C0;

    --yellow: #FFC107;

    --background: #F4F7FB;

}


/* ======================================
   PAGE BACKGROUND
====================================== */

body {

    background-color: var(--background);

}


/* ======================================
   PAGE TITLE
====================================== */

.page-title {

    color: var(--navy);

    font-weight: 700;

}


/* ======================================
   EVENT CARD
====================================== */

.event-card {

    border: none;

    border-radius: 15px;

    overflow: hidden;

}


/* ======================================
   TABLE HEADER
====================================== */

.event-table thead th {

    background-color: var(--navy);

    color: white;

    border: none;

    padding: 14px;

    white-space: nowrap;

}


/* ======================================
   TABLE BODY
====================================== */

.event-table tbody td {

    vertical-align: middle;

    padding: 14px;

}


.event-table tbody tr:hover {

    background-color: #EEF4FB;

}


/* ======================================
   EVENT NAME
====================================== */

.event-name {

    color: var(--navy);

    font-weight: 600;

}


/* ======================================
   DATE BADGE
====================================== */

.date-badge {

    display: inline-block;

    background-color: #FFF3CD;

    color: var(--navy);

    padding: 6px 10px;

    border-radius: 8px;

    font-weight: 600;

    white-space: nowrap;

}


/* ======================================
   DURATION BADGE
====================================== */

.duration-badge {

    display: inline-block;

    background-color: #E3F2FD;

    color: var(--blue);

    padding: 6px 10px;

    border-radius: 8px;

    font-weight: 600;

    white-space: nowrap;

}


/* ======================================
   IMAGE
====================================== */

.event-image {

    width: 80px;

    height: 55px;

    object-fit: cover;

    border-radius: 8px;

}


/* ======================================
   ADD EVENT BUTTON
====================================== */

.btn-add-event {

    background: linear-gradient(
        135deg,
        var(--blue),
        var(--yellow)
    );

    border: none;

    color: white;

    font-weight: 600;

    padding: 10px 18px;

    border-radius: 8px;

    transition: 0.3s;

}


.btn-add-event:hover {

    transform: translateY(-2px);

    color: white;

    box-shadow:
        0 5px 15px
        rgba(21, 101, 192, 0.25);

}


/* ======================================
   MODAL HEADER
====================================== */

.modal-header {

    background-color: var(--navy);

    color: white;

}


.modal-header .btn-close {

    filter: brightness(0) invert(1);

}


/* ======================================
   FORM LABEL
====================================== */

.form-label {

    color: var(--navy);

    font-weight: 600;

}


/* ======================================
   FORM INPUT
====================================== */

.form-control:focus {

    border-color: var(--blue);

    box-shadow:
        0 0 0 0.2rem
        rgba(21, 101, 192, 0.15);

}


/* ======================================
   SAVE BUTTON
====================================== */

.btn-save-event {

    background: linear-gradient(
        135deg,
        var(--blue),
        var(--yellow)
    );

    border: none;

    color: white;

    font-weight: 600;

    padding: 10px 20px;

    border-radius: 8px;

}


.btn-save-event:hover {

    color: white;

    opacity: 0.9;

}


/* ======================================
   DELETE BUTTON
====================================== */

.btn-delete {

    border: none;

}


/* ======================================
   EMPTY END DATE
====================================== */

.no-date {

    color: #888;

    font-size: 14px;

}

</style>


<!-- ======================================
     PAGE HEADER
====================================== -->

<div
    class="d-flex justify-content-between align-items-center mb-4"
>


    <h2 class="page-title mb-0">

        Events

    </h2>


    <button
        class="btn btn-add-event"
        data-bs-toggle="modal"
        data-bs-target="#eventModal"
    >

        <i class="bi bi-plus-lg"></i>

        Add Event

    </button>


</div>



<!-- ======================================
     EVENT TABLE
====================================== -->

<div class="card shadow-sm event-card">


    <div class="card-body">


        <div class="table-responsive">


            <table class="table table-hover event-table">


                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Event</th>

                        <th>Start Date</th>

                        <th>End Date</th>

                        <th>Duration</th>

                        <th>Location</th>

                        <th>Image</th>

                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>


                <?php

                // ======================================
                // GET EVENTS
                // ======================================

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


                    // ======================================
                    // CALCULATE DURATION
                    // ======================================

                    $duration = null;


                    if (
                        !empty(
                            $row['event_end_date']
                        )
                    ) {

                        $start =
                            new DateTime(
                                $row['event_date']
                            );

                        $end =
                            new DateTime(
                                $row['event_end_date']
                            );


                        $duration =
                            $start
                            ->diff($end)
                            ->days + 1;

                    }

                ?>


                <tr>


                    <!-- ID -->

                    <td>

                        <?php

                        echo $row['event_id'];

                        ?>

                    </td>


                    <!-- EVENT NAME -->

                    <td>

                        <strong class="event-name">

                            <?php

                            echo htmlspecialchars(
                                $row['event_name']
                            );

                            ?>

                        </strong>

                    </td>


                    <!-- START DATE -->

                    <td>

                        <span class="date-badge">

                            <?php

                            echo date(
                                'd M Y',
                                strtotime(
                                    $row['event_date']
                                )
                            );

                            ?>

                        </span>

                    </td>


                    <!-- END DATE -->

                    <td>

                        <?php

                        if (
                            !empty(
                                $row['event_end_date']
                            )
                        ) {

                        ?>

                            <span class="date-badge">

                                <?php

                                echo date(
                                    'd M Y',
                                    strtotime(
                                        $row['event_end_date']
                                    )
                                );

                                ?>

                            </span>

                        <?php

                        }
                        else {

                        ?>

                            <span class="no-date">

                                Not specified

                            </span>

                        <?php

                        }

                        ?>

                    </td>


                    <!-- DURATION -->

                    <td>

                        <?php

                        if ($duration !== null) {

                        ?>

                            <span class="duration-badge">

                                <?php

                                echo $duration;

                                ?>

                                <?php

                                echo
                                    ($duration == 1)
                                    ? ' Day'
                                    : ' Days';

                                ?>

                            </span>

                        <?php

                        }
                        else {

                        ?>

                            <span class="no-date">

                                Not specified

                            </span>

                        <?php

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


                    <!-- ACTION -->

                    <td>

                        <a
                            href="events.php?delete=<?php
                                echo $row['event_id'];
                            ?>"
                            class="btn btn-sm btn-danger btn-delete"
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



<!-- ======================================
     ADD EVENT MODAL
====================================== -->

<div
    class="modal fade"
    id="eventModal"
    tabindex="-1"
>


    <div class="modal-dialog modal-lg">


        <div class="modal-content">


            <!-- MODAL HEADER -->

            <div class="modal-header">


                <h5 class="modal-title">

                    <i class="bi bi-calendar-event"></i>

                    Add New Event

                </h5>


                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                >
                </button>


            </div>



            <!-- FORM -->

            <form method="POST">


                <div class="modal-body">


                    <!-- EVENT NAME -->

                    <div class="mb-3">


                        <label class="form-label">

                            Event Name

                        </label>


                        <input
                            type="text"
                            name="event_name"
                            class="form-control"
                            placeholder="Enter event name"
                            required
                        >


                    </div>



                    <!-- START DATE + END DATE -->

                    <div class="row">


                        <!-- START DATE -->

                        <div class="col-md-6 mb-3">


                            <label class="form-label">

                                Start Date

                            </label>


                            <input
                                type="date"
                                name="event_date"
                                id="event_date"
                                class="form-control"
                                required
                            >


                        </div>



                        <!-- END DATE -->

                        <div class="col-md-6 mb-3">


                            <label class="form-label">

                                End Date

                            </label>


                            <input
                                type="date"
                                name="event_end_date"
                                id="event_end_date"
                                class="form-control"
                            >


                        </div>


                    </div>



                    <!-- LOCATION -->

                    <div class="mb-3">


                        <label class="form-label">

                            Location

                        </label>


                        <input
                            type="text"
                            name="location"
                            class="form-control"
                            placeholder="Enter event location"
                            required
                        >


                    </div>



                    <!-- DESCRIPTION -->

                    <div class="mb-3">


                        <label class="form-label">

                            Description

                        </label>


                        <textarea
                            name="description"
                            class="form-control"
                            rows="4"
                            placeholder="Enter event description"
                            required
                        ></textarea>


                    </div>



                    <!-- IMAGE -->

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


                        <small class="text-muted">

                            Example: event.jpg

                        </small>


                    </div>


                </div>



                <!-- MODAL FOOTER -->

                <div class="modal-footer">


                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >

                        Cancel

                    </button>


                    <button
                        type="submit"
                        name="add_event"
                        class="btn btn-save-event"
                    >

                        <i class="bi bi-plus-lg"></i>

                        Add Event

                    </button>


                </div>


            </form>


        </div>


    </div>


</div>



<!-- ======================================
     DATE VALIDATION
====================================== -->

<script>


const startDate =
    document.getElementById("event_date");


const endDate =
    document.getElementById("event_end_date");



/*
    Prevent end date from being
    earlier than start date
*/

startDate.addEventListener(
    "change",
    function() {

        endDate.min = this.value;

    }
);



endDate.addEventListener(
    "change",
    function() {

        if (
            startDate.value &&
            endDate.value &&
            endDate.value < startDate.value
        ) {

            alert(
                "End date cannot be earlier than start date."
            );

            endDate.value = "";

        }

    }
);


</script>



<?php

include("footer.php");

?>
```
