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
        Events - Smart Perlis Tourism Portal
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

        /* Navbar gradient warna Perlis */
        .navbar {

            background:
                linear-gradient(
                    90deg,
                    #FFD700 0%,
                    #F5C400 40%,
                    #0057B8 100%
                ) !important;

        }


        /* BODY COLOR */

        body {

            background: #fefbea;

        }


        /* HEADER FONT */

        section h1 {

            font-size: 3.5rem;

            font-weight: 700;

            margin-bottom: 10px;

        }


        section p {

            font-size: 18px;

            margin: 0;

        }


    </style>

</head>


<body>


<!-- NAVBAR -->

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

        <i class="bi bi-calendar3 text-success"></i>

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
        | START DATE
        |--------------------------------------------------------------------------
        */

        $startDate = new DateTime(
            $row['event_date']
        );


        /*
        |--------------------------------------------------------------------------
        | END DATE
        |--------------------------------------------------------------------------
        */

        $endDate = new DateTime(
            $row['event_end_date']
        );


        /*
        |--------------------------------------------------------------------------
        | DURATION
        |--------------------------------------------------------------------------
        |
        | Example:
        |
        | 01 Jun → 03 Jun
        |
        | = 3 days
        |
        */

        $duration =
            $startDate->diff($endDate)->days + 1;


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
                            $row['image']
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
                            class="bi bi-calendar-event text-success"
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
                            class="bi bi-calendar-check text-success"
                        ></i>

                        <strong>
                            End Date:
                        </strong>

                        <?php

                        echo $endDate->format(
                            "d M Y"
                        );

                        ?>

                    </p>



                    <!-- DAY -->

                    <p>

                        <i
                            class="bi bi-calendar-day text-success"
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
                            class="bi bi-clock text-success"
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
                            class="bi bi-geo-alt text-success"
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
                            class="btn btn-success"
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

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>


<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {


        /*
        |--------------------------------------------------------------------------
        | CALENDAR ELEMENT
        |--------------------------------------------------------------------------
        */

        const calendarElement =
            document.getElementById(
                'eventCalendar'
            );


        /*
        |--------------------------------------------------------------------------
        | CREATE CALENDAR
        |--------------------------------------------------------------------------
        */

        const calendar =
            new FullCalendar.Calendar(
                calendarElement,
                {


                    /*
                    |--------------------------------------------------------------------------
                    | DEFAULT VIEW
                    |--------------------------------------------------------------------------
                    */

                    initialView:
                        'dayGridMonth',


                    /*
                    |--------------------------------------------------------------------------
                    | CALENDAR HEIGHT
                    |--------------------------------------------------------------------------
                    */

                    height: 'auto',


                    /*
                    |--------------------------------------------------------------------------
                    | HEADER
                    |--------------------------------------------------------------------------
                    */

                    headerToolbar: {

                        left:
                            'prev,next today',

                        center:
                            'title',

                        right:
                            'dayGridMonth,listMonth'

                    },


                    /*
                    |--------------------------------------------------------------------------
                    | EVENTS FROM DATABASE
                    |--------------------------------------------------------------------------
                    */

                    events: [

<?php

/*
|--------------------------------------------------------------------------
| GET EVENTS FOR CALENDAR
|--------------------------------------------------------------------------
*/

$calendarSQL = "

    SELECT
        event_id,
        event_name,
        event_date,
        event_end_date

    FROM events

    WHERE event_end_date >= CURDATE()

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


        /*
        |--------------------------------------------------------------------------
        | START DATE
        |--------------------------------------------------------------------------
        */

        $start =
            new DateTime(
                $event['event_date']
            );


        /*
        |--------------------------------------------------------------------------
        | END DATE
        |--------------------------------------------------------------------------
        */

        $end =
            new DateTime(
                $event['event_end_date']
            );


        /*
        |--------------------------------------------------------------------------
        | FULLCALENDAR END DATE
        |--------------------------------------------------------------------------
        |
        | FullCalendar uses an EXCLUSIVE end date.
        |
        | Example:
        |
        | Database:
        |
        | Start = 01 Jun
        | End   = 03 Jun
        |
        | We send:
        |
        | Start = 01 Jun
        | End   = 04 Jun
        |
        | So FullCalendar displays:
        |
        | 01 Jun
        | 02 Jun
        | 03 Jun
        |
        */

        $end->modify(
            '+1 day'
        );

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
                                    $start->format(
                                        'Y-m-d'
                                    )
                                );
                                ?>,

                            end:
                                <?php
                                echo json_encode(
                                    $end->format(
                                        'Y-m-d'
                                    )
                                );
                                ?>,

                            allDay: true

                        },

<?php

    }

}

?>

                    ],


                    /*
                    |--------------------------------------------------------------------------
                    | WHEN USER CLICKS EVENT
                    |--------------------------------------------------------------------------
                    */

                    eventClick:
                        function(info) {


                            /*
                            | Get event start
                            */

                            const start =
                                info.event.start;


                            /*
                            | Get event end
                            |
                            | FullCalendar's end is
                            | exclusive, so subtract
                            | one day to show the
                            | actual database end date.
                            */

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


                            /*
                            | Format dates
                            */

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


                            /*
                            | Show information
                            */

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


        /*
        |--------------------------------------------------------------------------
        | DISPLAY CALENDAR
        |--------------------------------------------------------------------------
        */

        calendar.render();

    }

);

</script>



<!-- FOOTER -->

<?php include("footer.php"); ?>


</body>

</html>