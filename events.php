<?php

include("config.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Events - PERLIS TOURISM SMART PORTAL
    </title>


    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap Icons -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Main CSS -->

    <link rel="stylesheet" href="assets/css/style.css">


    <!-- FullCalendar -->

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js">
    </script>


    <style>
        /* =====================================
           PAGE
        ===================================== */

        body {
            background: #f5f7fa;
        }


        /* =====================================
           EVENT HERO
        ===================================== */

        .event-hero {

            min-height: 380px;

            background:
                linear-gradient(rgba(0, 74, 153, 0.55),
                    rgba(0, 87, 184, 0.45)),
                url('assets/images/header.jpg');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            color: white;

        }


        .event-hero-content {

            max-width: 750px;

            padding: 35px;

        }


        .event-hero h1 {

            font-size: 3.2rem;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .event-hero p {

            font-size: 18px;

            margin: 0;

        }


        .event-hero-badge {

            display: inline-block;

            background: #FFD700;

            color: #004A99;

            padding: 8px 18px;

            border-radius: 30px;

            font-weight: 700;

            font-size: 14px;

            margin-bottom: 18px;

        }


        /* =====================================
           SECTION TITLE
        ===================================== */

        .section-title {

            color: #004A99;

            font-weight: 700;

        }


        .section-subtitle {

            color: #6c757d;

        }


        .calendar-icon {

            color: #0057B8;

        }


        /* =====================================
           CALENDAR
        ===================================== */

        .calendar-wrapper {

            background: white;

            border-radius: 20px;

            padding: 30px;

            box-shadow:
                0 10px 35px rgba(0, 0, 0, 0.08);

            border-top: 5px solid #FFD700;

        }


        /* =====================================
           FULLCALENDAR THEME
        ===================================== */

        .fc .fc-toolbar-title {

            color: #004A99;

            font-weight: 700;

        }


        .fc .fc-button-primary {

            background: #0057B8 !important;

            border-color: #0057B8 !important;

        }


        .fc .fc-button-primary:hover {

            background: #004A99 !important;

            border-color: #004A99 !important;

        }


        .fc .fc-button-active {

            background: #FFD700 !important;

            border-color: #FFD700 !important;

            color: #004A99 !important;

        }


        .fc .fc-col-header-cell {

            background: #0057B8;

        }


        .fc .fc-col-header-cell-cushion {

            color: white;

            text-decoration: none;

            padding: 10px 5px;

        }


        .fc .fc-daygrid-day-number {

            color: #333;

            text-decoration: none;

            font-weight: 600;

        }


        /* TODAY */

        .fc .fc-day-today {

            background: #FFF8D6 !important;

        }


        /* EVENTS INSIDE CALENDAR */

        .fc-event {

            background: #FFD700 !important;

            border: none !important;

            color: #004A99 !important;

            border-radius: 6px !important;

            padding: 3px 5px;

            font-weight: 600;

            cursor: pointer;

        }


        .fc-event:hover {

            background: #F5C400 !important;

        }


        /* =====================================
           EVENT CARDS
        ===================================== */

        .event-card {

            border: none;

            border-radius: 18px;

            overflow: hidden;

            transition: 0.3s;

            background: white;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.08);

        }


        .event-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.15);

        }


        /* IMAGE */

        .event-image-wrapper {

            position: relative;

        }


        .event-image {

            width: 100%;

            height: 230px;

            object-fit: cover;

        }


        /* =====================================
           DATE BADGE
        ===================================== */

        .event-date-badge {

            position: absolute;

            top: 15px;

            left: 15px;

            width: 65px;

            background: #FFD700;

            color: #004A99;

            text-align: center;

            padding: 8px 5px;

            border-radius: 12px;

            box-shadow:
                0 5px 15px rgba(0, 0, 0, 0.20);

        }


        .event-date-badge .day {

            display: block;

            font-size: 24px;

            font-weight: 800;

            line-height: 1;

        }


        .event-date-badge .month {

            display: block;

            font-size: 12px;

            font-weight: 700;

            margin-top: 4px;

        }


        /* =====================================
           EVENT INFORMATION
        ===================================== */

        .event-card .card-title {

            color: #004A99;

        }


        .event-icon {

            color: #0057B8;

        }


        .event-description {

            color: #666;

        }


        /* =====================================
           JOIN BUTTON
        ===================================== */

        .join-btn {

            background: #0057B8;

            border: none;

            color: white;

            border-radius: 30px;

            padding: 10px 22px;

            transition: 0.3s;

        }


        .join-btn:hover {

            background: #FFD700;

            color: #004A99;

            transform: translateY(-2px);

        }


        /* =====================================
           MODAL
        ===================================== */

        .event-modal-header {

            background:
                linear-gradient(135deg,
                    #FFD700,
                    #F5C400,
                    #0057B8);

            color: white;

        }


        .event-modal-icon {

            color: #0057B8;

        }


        /* =====================================
           MOBILE
        ===================================== */

        @media (max-width: 768px) {

            .event-hero {

                min-height: 280px;

            }


            .event-hero-content {

                padding: 25px 15px;

            }


            .event-hero h1 {

                font-size: 2rem;

            }


            .event-hero p {

                font-size: 15px;

            }


            .calendar-wrapper {

                padding: 15px;

                border-radius: 15px;

            }


            .fc .fc-toolbar {

                flex-direction: column;

                gap: 10px;

            }


            .fc .fc-toolbar-title {

                font-size: 1.25rem;

            }


            .fc-event {

                font-size: 10px;

            }


            .event-image {

                height: 200px;

            }

        }
    </style>

</head>


<body>


    <!-- ========================================
     NAVBAR
======================================== -->

    <?php include("navbar.php"); ?>



    <!-- ========================================
     EVENT HERO
======================================== -->

    <section class="event-hero">

        <div class="event-hero-content">

            <span class="event-hero-badge">

                <i class="bi bi-calendar-event me-1"></i>

                What's Happening

            </span>


            <h1>

                Perlis Events & Festivals

            </h1>


            <p>

                Discover cultural celebrations, festivals
                and exciting experiences happening throughout Perlis.

            </p>

        </div>

    </section>



    <!-- ========================================
     INTERACTIVE CALENDAR
======================================== -->

    <div class="container mt-5">

        <div class="text-center mb-4">

            <h2 class="section-title">

                <i class="bi bi-calendar3 calendar-icon me-2">
                </i>

                Event Calendar

            </h2>


            <p class="section-subtitle">

                Select an event on the calendar
                to view its details.

            </p>

        </div>


        <div class="calendar-wrapper">

            <div id="eventCalendar"></div>

        </div>

    </div>



    <!-- ========================================
     UPCOMING EVENTS
======================================== -->

    <div class="container mt-5 mb-5">

        <div class="text-center mb-4">

            <h2 class="section-title">

                Upcoming Events

            </h2>


            <p class="section-subtitle">

                Don't miss these upcoming experiences in Perlis.

            </p>

        </div>


        <div class="row">


            <?php

            /* ========================================
               GET UPCOMING EVENTS
            ======================================== */

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


            $result = mysqli_query(
                $conn,
                $sql
            );


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

            } elseif (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_assoc($result)) {


                    /* ========================================
                       START DATE
                    ======================================== */

                    try {

                        $startDate =
                            new DateTime(
                                $row['event_date']
                            );

                    } catch (Exception $e) {

                        $startDate =
                            new DateTime();

                    }


                    /* ========================================
                       END DATE
                    ======================================== */

                    $hasValidEndDate =
                        !empty($row['event_end_date'])
                        &&
                        $row['event_end_date'] !== '0000-00-00';


                    if ($hasValidEndDate) {

                        try {

                            $endDate =
                                new DateTime(
                                    $row['event_end_date']
                                );

                        } catch (Exception $e) {

                            $endDate =
                                clone $startDate;

                            $hasValidEndDate =
                                false;

                        }

                    } else {

                        $endDate =
                            clone $startDate;

                    }


                    /* ========================================
                       DURATION
                    ======================================== */

                    if ($hasValidEndDate) {

                        $duration =
                            $startDate
                                ->diff($endDate)
                                ->days + 1;

                    } else {

                        $duration = 1;

                    }


                    /* DAY */

                    $day =
                        $startDate->format('l');

                    ?>


                    <!-- ========================================
             EVENT CARD
        ======================================== -->

                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="card event-card h-100">


                            <!-- IMAGE -->

                            <div class="event-image-wrapper">

                                <img src="assets/images/<?php

                                echo htmlspecialchars(

                                    !empty($row['image'])
                                    ? $row['image']
                                    : 'default.jpg'

                                );

                                ?>" class="event-image" alt="<?php

                                echo htmlspecialchars(
                                    $row['event_name']
                                );

                                ?>">


                                <!-- DATE BADGE -->

                                <div class="event-date-badge">

                                    <span class="day">

                                        <?php

                                        echo $startDate->format(
                                            'd'
                                        );

                                        ?>

                                    </span>


                                    <span class="month">

                                        <?php

                                        echo strtoupper(
                                            $startDate->format(
                                                'M'
                                            )
                                        );

                                        ?>

                                    </span>

                                </div>

                            </div>



                            <!-- EVENT INFORMATION -->

                            <div class="card-body d-flex flex-column">


                                <h4 class="card-title fw-bold">

                                    <?php

                                    echo htmlspecialchars(
                                        $row['event_name']
                                    );

                                    ?>

                                </h4>



                                <!-- START DATE -->

                                <p>

                                    <i class="bi bi-calendar-event event-icon me-1">
                                    </i>

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

                                    <i class="bi bi-calendar-check event-icon me-1">
                                    </i>

                                    <strong>
                                        End Date:
                                    </strong>

                                    <?php

                                    echo $hasValidEndDate
                                        ? $endDate->format("d M Y")
                                        : "TBA";

                                    ?>

                                </p>



                                <!-- START DAY -->

                                <p>

                                    <i class="bi bi-calendar-day event-icon me-1">
                                    </i>

                                    <strong>
                                        Start Day:
                                    </strong>

                                    <?php

                                    echo $day;

                                    ?>

                                </p>



                                <!-- DURATION -->

                                <p>

                                    <i class="bi bi-clock event-icon me-1">
                                    </i>

                                    <strong>
                                        Duration:
                                    </strong>

                                    <?php

                                    echo $duration;

                                    echo
                                        ($duration == 1)
                                        ? " day"
                                        : " days";

                                    ?>

                                </p>



                                <!-- LOCATION -->

                                <p>

                                    <i class="bi bi-geo-alt event-icon me-1">
                                    </i>

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

                                <p class="event-description">

                                    <?php

                                    echo htmlspecialchars(
                                        $row['description']
                                    );

                                    ?>

                                </p>



                                <!-- BUTTON -->

                                <div class="mt-auto">

                                    <a href="contact.php" class="btn join-btn">

                                        <i class="bi bi-calendar-check me-1"></i>

                                        Join Event

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>


                    <?php

                }

            } else {

                ?>

                <div class="col-12">

                    <div class="alert alert-info text-center">

                        <i class="bi bi-calendar-x me-1"></i>

                        No upcoming events available at the moment.

                    </div>

                </div>

                <?php

            }

            ?>


        </div>

    </div>



    <!-- ========================================
     EVENT DETAILS MODAL
======================================== -->

    <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content border-0 shadow">

                <div class="modal-header event-modal-header">

                    <h5 class="modal-title fw-bold" id="eventModalTitle">

                        Event Details

                    </h5>


                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>

                </div>


                <div class="modal-body p-4">


                    <p>

                        <i class="bi bi-calendar-event event-modal-icon me-2">
                        </i>

                        <strong>
                            Start Date:
                        </strong>

                        <span id="modalStartDate"></span>

                    </p>


                    <p class="mb-0">

                        <i class="bi bi-calendar-check event-modal-icon me-2">
                        </i>

                        <strong>
                            End Date:
                        </strong>

                        <span id="modalEndDate"></span>

                    </p>

                </div>

            </div>

        </div>

    </div>



    <!-- ========================================
     BOOTSTRAP JAVASCRIPT
======================================== -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>



    <!-- ========================================
     FULLCALENDAR JAVASCRIPT
======================================== -->

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

                            height:
                                'auto',


                            /* HEADER */

                            headerToolbar: {

                                left:
                                    'prev,next today',

                                center:
                                    'title',

                                right:
                                    'dayGridMonth,listMonth'

                            },


                            /* MOBILE FRIENDLY */

                            windowResize:
                                function () {

                                    if (
                                        window.innerWidth < 768
                                    ) {

                                        calendar.setOption(
                                            'headerToolbar',
                                            {
                                                left:
                                                    'prev,next',

                                                center:
                                                    'title',

                                                right:
                                                    'today'
                                            }
                                        );

                                    }

                                    else {

                                        calendar.setOption(
                                            'headerToolbar',
                                            {
                                                left:
                                                    'prev,next today',

                                                center:
                                                    'title',

                                                right:
                                                    'dayGridMonth,listMonth'
                                            }
                                        );

                                    }

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

                                            $startFormatted =
                                                $start->format(
                                                    'Y-m-d'
                                                );

                                        } catch (Exception $e) {

                                            continue;

                                        }


                                        /* END DATE */

                                        $hasEnd =
                                            !empty(
                                            $event['event_end_date']
                                        )
                                            &&
                                            $event['event_end_date']
                                            !== '0000-00-00';


                                        if ($hasEnd) {

                                            try {

                                                $end =
                                                    new DateTime(
                                                        $event['event_end_date']
                                                    );


                                                /*
                                                FullCalendar uses an exclusive
                                                end date.

                                                Therefore we add one day so
                                                the final event date is also
                                                highlighted.
                                                */

                                                $end->modify(
                                                    '+1 day'
                                                );


                                                $endFormatted =
                                                    $end->format(
                                                        'Y-m-d'
                                                    );

                                            } catch (Exception $e) {

                                                $endFormatted =
                                                    $startFormatted;

                                            }

                                        } else {

                                            $endFormatted =
                                                $startFormatted;

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

                                            allDay:
                                                true

                                        },

                                        <?php

                                    }

                                }

                                ?>

                            ],


                            /* =====================================
                               EVENT CLICK
                            ===================================== */

                            eventClick:
                                function (info) {


                                    const start =
                                        info.event.start;


                                    let end =
                                        null;


                                    if (info.event.end) {

                                        end =
                                            new Date(
                                                info.event.end
                                            );


                                        /*
                                        FullCalendar's end date
                                        is exclusive.
                                        */

                                        end.setDate(
                                            end.getDate() - 1
                                        );

                                    }


                                    /* FORMAT START DATE */

                                    const startText =
                                        start

                                            ? start.toLocaleDateString(
                                                'en-GB',
                                                {
                                                    day:
                                                        '2-digit',

                                                    month:
                                                        'short',

                                                    year:
                                                        'numeric'
                                                }
                                            )

                                            : '-';


                                    /* FORMAT END DATE */

                                    const endText =
                                        end

                                            ? end.toLocaleDateString(
                                                'en-GB',
                                                {
                                                    day:
                                                        '2-digit',

                                                    month:
                                                        'short',

                                                    year:
                                                        'numeric'
                                                }
                                            )

                                            : 'TBA';


                                    /* ADD DATA TO MODAL */

                                    document.getElementById(
                                        'eventModalTitle'
                                    ).textContent =
                                        info.event.title;


                                    document.getElementById(
                                        'modalStartDate'
                                    ).textContent =
                                        startText;


                                    document.getElementById(
                                        'modalEndDate'
                                    ).textContent =
                                        endText;


                                    /* OPEN MODAL */

                                    const eventModal =
                                        new bootstrap.Modal(
                                            document.getElementById(
                                                'eventModal'
                                            )
                                        );


                                    eventModal.show();

                                }

                        }

                    );


                /* =====================================
                   MOBILE TOOLBAR ON FIRST LOAD
                ===================================== */

                if (
                    window.innerWidth < 768
                ) {

                    calendar.setOption(
                        'headerToolbar',
                        {
                            left:
                                'prev,next',

                            center:
                                'title',

                            right:
                                'today'
                        }
                    );

                }


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