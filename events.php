<?php

include("config.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Events - PERLIS TOURISM SMART PORTAL
    </title>


    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- Bootstrap Icons -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">


    <!-- Your CSS -->

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >


    <!-- FullCalendar -->

    <link
        href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css"
        rel="stylesheet"
    >


    <style>

        /* =====================================
           NAVBAR - PERLIS THEME
        ===================================== */

        .navbar {

            background:
                linear-gradient(
                    90deg,
                    #FFD700 0%,
                    #F5C400 40%,
                    #0057B8 100%
                ) !important;

        }


        /* =====================================
           BODY
        ===================================== */

        body {

            background: #fefbea;

        }


        /* =====================================
           HEADER
        ===================================== */

        section h1 {

            font-size: 3.5rem;

            font-weight: 700;

            margin-bottom: 10px;

        }


        section p {

            font-size: 18px;

            margin: 0;

        }


        /* =====================================
           CALENDAR ICON
        ===================================== */

        .calendar-icon {

            color: #0057B8;

        }


        /* =====================================
           EVENT ICONS
        ===================================== */

        .event-icon {

            color: #0057B8;

        }


        /* =====================================
           JOIN EVENT BUTTON
        ===================================== */

        .join-btn {

            background-color: #0057B8;

            border-color: #0057B8;

            color: white;

        }


        .join-btn:hover {

            background-color: #004494;

            border-color: #004494;

            color: white;

        }

    </style>

</head>


<body>


<!-- ========================================
     NAVBAR
======================================== -->

<?php include("navbar.php"); ?>



<!-- ========================================
     PAGE HEADER
======================================== -->

<section
    class="text-white text-center p-5"
    style="
        background-image: url('assets/images/header.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    "
>

    <h1>

        Perlis Events & Festivals

    </h1>


    <p>

        Experience exciting events throughout Perlis

    </p>

</section>



<!-- ========================================
     EVENT CALENDAR
======================================== -->

<div class="container mt-5">

    <h2 class="text-center mb-4">

        <i class="bi bi-calendar3 calendar-icon"></i>

        Upcoming Events

    </h2>


    <div class="card shadow p-4">

        <div id="eventCalendar"></div>

    </div>

</div>



<!-- ========================================
     UPCOMING EVENT LIST
======================================== -->

<div class="container mt-5 mb-5">

    <h2 class="text-center mb-4">

        Upcoming Events

    </h2>


    <div class="row">


<?php

/*
|--------------------------------------------------------------------------
| GET EVENTS
|--------------------------------------------------------------------------
|
| Only show events that:
|
| 1. Are still ongoing
| OR
| 2. Will happen in the future
| OR
| 3. Have NULL/open-ended dates from placeholder database entries
|
| event_end_date >= today's date
|
*/

$sql = "

    SELECT
        event_id,
        event_name,
        event_date,
        event_end_date,
        location,
        description,
        image

    FROM events

    WHERE event_end_date >= CURDATE()
       OR event_end_date IS NULL
       OR event_end_date = '0000-00-00'

    ORDER BY event_date ASC

";


$result = mysqli_query($conn, $sql);


if (!$result) {

?>

        <div class="col-12">

            <div class="alert alert-danger text-center">

                <strong>
                    Database Error:
                </strong>

                <?php

                echo htmlspecialchars(
                    mysqli_error($conn)
                );

                ?>

            </div>

        </div>

<?php

}

elseif (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {


        /*
        |--------------------------------------------------------------------------
        | START DATE (SAFELY PARSED)
        |--------------------------------------------------------------------------
        */

        try {
            $startDate = new DateTime(
                $row['event_date']
            );
        } catch (Exception $e) {
            $startDate = new DateTime();
        }


        /*
        |--------------------------------------------------------------------------
        | END DATE (SAFELY PARSED)
        |--------------------------------------------------------------------------
        */

        $hasValidEndDate = !empty($row['event_end_date']) && $row['event_end_date'] !== '0000-00-00';

        if ($hasValidEndDate) {
            try {
                $endDate = new DateTime(
                    $row['event_end_date']
                );
            } catch (Exception $e) {
                $endDate = clone $startDate;
                $hasValidEndDate = false;
            }
        } else {
            $endDate = clone $startDate;
        }


        /*
        |--------------------------------------------------------------------------
        | DURATION
        |--------------------------------------------------------------------------
        */

        if ($hasValidEndDate) {
            $duration =
                $startDate->diff($endDate)->days + 1;
        } else {
            $duration = 1;
        }


        /*
        |--------------------------------------------------------------------------
        | DAY
        |--------------------------------------------------------------------------
        */

        $day = $startDate->format('l');

?>



        <!-- EVENT CARD -->

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">


                <!-- EVENT IMAGE -->

                <img
                    src="assets/images/<?php

                        echo htmlspecialchars(
                            !empty($row['image']) ? $row['image'] : 'default.jpg'
                        );

                    ?>"
                    class="card-img-top"
                    style="height: 220px; object-fit: cover;"
                    alt="<?php

                        echo htmlspecialchars(
                            $row['event_name']
                        );

                    ?>"
                >


                <div class="card-body d-flex flex-column">


                    <!-- EVENT NAME -->

                    <h4 class="fw-bold">

                        <?php

                        echo htmlspecialchars(
                            $row['event_name']
                        );

                        ?>

                    </h4>



                    <!-- START DATE -->

                    <p>

                        <i
                            class="bi bi-calendar-event event-icon"
                        ></i>

                        <strong>
                            Start Date:
                        </strong>

                        <?php

                        echo $startDate->format(
                            "d M Y"
                        );

                        ?>

                    </p>



                    <!-- END DATE -->

                    <p>

                        <i
                            class="bi bi-calendar-check event-icon"
                        ></i>

                        <strong>
                            End Date:
                        </strong>

                        <?php

                        echo $hasValidEndDate 
                            ? $endDate->format("d M Y") 
                            : "TBA";

                        ?>

                    </p>



                    <!-- DAY -->

                    <p>

                        <i
                            class="bi bi-calendar-day event-icon"
                        ></i>

                        <strong>
                            Start Day:
                        </strong>

                        <?php

                        echo $day;

                        ?>

                    </p>



                    <!-- DURATION -->

                    <p>

                        <i
                            class="bi bi-clock event-icon"
                        ></i>

                        <strong>
                            Duration:
                        </strong>

                        <?php

                        echo $duration;

                        ?>

                        <?php

                        echo (
                            $duration == 1
                        )
                            ? " day"
                            : " days";

                        ?>

                    </p>



                    <!-- LOCATION -->

                    <p>

                        <i
                            class="bi bi-geo-alt event-icon"
                        ></i>

                        <strong>
                            Location:
                        </strong>

                        <?php

                        echo htmlspecialchars(
                            $row['location']
                        );

                        ?>

                    </p>



                    <!-- DESCRIPTION -->

                    <p>

                        <?php

                        echo htmlspecialchars(
                            $row['description']
                        );

                        ?>

                    </p>



                    <!-- BUTTON -->

                    <div class="mt-auto">

                        <a
                            href="contact.php"
                            class="btn join-btn"
                        >

                            Join Event

                        </a>

                    </div>


                </div>

            </div>

        </div>


<?php

    }

}

else {

?>

        <div class="col-12">

            <div class="alert alert-info text-center">

                No upcoming events available at the moment.

            </div>

        </div>

<?php

}

?>


    </div>

</div>



<!-- ========================================
     FULLCALENDAR JAVASCRIPT
======================================== -->

<script
src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js">
</script>


<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {


        /* CALENDAR ELEMENT */

        const calendarElement =
            document.getElementById(
                'eventCalendar'
            );


        /* CREATE CALENDAR */

        const calendar =
            new FullCalendar.Calendar(
                calendarElement,
                {


                    /* DEFAULT VIEW */

                    initialView:
                        'dayGridMonth',


                    /* CALENDAR HEIGHT */

                    height: 'auto',


                    /* HEADER */

                    headerToolbar: {

                        left:
                            'prev,next today',

                        center:
                            'title',

                        right:
                            'dayGridMonth,listMonth'

                    },


                    /* EVENTS FROM DATABASE */

                    events: [

<?php

$calendarSQL = "

    SELECT
        event_id,
        event_name,
        event_date,
        event_end_date

    FROM events

    WHERE event_end_date >= CURDATE()
       OR event_end_date IS NULL
       OR event_end_date = '0000-00-00'

    ORDER BY event_date ASC

";


$calendarResult =
    mysqli_query(
        $conn,
        $calendarSQL
    );


if ($calendarResult) {


    while (
        $event =
        mysqli_fetch_assoc(
            $calendarResult
        )
    ) {


        /* START DATE */

        try {
            $start =
                new DateTime(
                    $event['event_date']
                );
            $startFormatted = $start->format('Y-m-d');
        } catch (Exception $e) {
            continue;
        }


        /* END DATE */

        $hasEnd = !empty($event['event_end_date']) && $event['event_end_date'] !== '0000-00-00';

        if ($hasEnd) {
            try {
                $end =
                    new DateTime(
                        $event['event_end_date']
                    );
                $end->modify('+1 day');
                $endFormatted = $end->format('Y-m-d');
            } catch (Exception $e) {
                $endFormatted = $startFormatted;
            }
        } else {
            $endFormatted = $startFormatted;
        }

?>

                        {

                            id:
                                <?php

                                echo json_encode(
                                    $event['event_id']
                                );

                                ?>,

                            title:
                                <?php

                                echo json_encode(
                                    $event['event_name']
                                );

                                ?>,

                            start:
                                <?php

                                echo json_encode(
                                    $startFormatted
                                );

                                ?>,

                            end:
                                <?php

                                echo json_encode(
                                    $endFormatted
                                );

                                ?>,

                            allDay: true

                        },

<?php

    }

}

?>

                    ],



                    /* EVENT CLICK */

                    eventClick:
                        function(info) {


                            const start =
                                info.event.start;


                            let end = null;


                            if (info.event.end) {

                                end =
                                    new Date(
                                        info.event.end
                                    );

                                end.setDate(
                                    end.getDate() - 1
                                );

                            }


                            /* FORMAT DATES */

                            const startText =
                                start
                                    ? start.toLocaleDateString(
                                        'en-GB',
                                        {
                                            day: '2-digit',
                                            month: 'short',
                                            year: 'numeric'
                                        }
                                    )
                                    : '-';


                            const endText =
                                end
                                    ? end.toLocaleDateString(
                                        'en-GB',
                                        {
                                            day: '2-digit',
                                            month: 'short',
                                            year: 'numeric'
                                        }
                                    )
                                    : '-';


                            /* SHOW INFORMATION */

                            alert(

                                info.event.title +

                                "\n\nStart Date: " +
                                startText +

                                "\nEnd Date: " +
                                endText

                            );

                        }

                }
            );


        /* DISPLAY CALENDAR */

        calendar.render();

    }

);

</script>



<!-- ========================================
     FOOTER
======================================== -->

<?php include("footer.php"); ?>


</body>

</html>