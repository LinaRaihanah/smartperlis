<?php

session_start();

include("../config.php");


// =====================================
// PHPMailer
// =====================================

require_once("../PHPMailer/src/Exception.php");
require_once("../PHPMailer/src/PHPMailer.php");
require_once("../PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// =====================================
// CHECK ADMIN LOGIN
// =====================================

if (!isset($_SESSION['admin'])) {

    header("Location: ../login.php");

    exit();

}


// =====================================
// SEND REPLY
// =====================================

$replyMessage = "";
$replyError = "";


if (isset($_POST['send_reply'])) {

    $messageId = intval($_POST['message_id']);

    $recipientEmail = trim($_POST['recipient_email']);

    $recipientName = trim($_POST['recipient_name']);

    $replySubject = trim($_POST['reply_subject']);

    $replyText = trim($_POST['reply_message']);


    // =====================================
    // VALIDATE EMAIL
    // =====================================

    if (!filter_var($recipientEmail, FILTER_VALIDATE_EMAIL)) {

        $replyError = "Invalid email address.";

    }


    // =====================================
    // VALIDATE MESSAGE
    // =====================================

    elseif (empty($replyText)) {

        $replyError = "Please enter your reply.";

    }


    // =====================================
    // VALIDATE MESSAGE ID
    // =====================================

    elseif ($messageId <= 0) {

        $replyError = "Invalid message ID.";

    }


    else {

        $mail = new PHPMailer(true);


        try {

            // =====================================
            // SMTP SETTINGS
            // =====================================

            $mail->isSMTP();

            $mail->Host = MAIL_HOST;

            $mail->SMTPAuth = true;

            $mail->Username = MAIL_USERNAME;

            $mail->Password = MAIL_PASSWORD;

            $mail->SMTPSecure =
                PHPMailer::ENCRYPTION_STARTTLS;

            $mail->Port = MAIL_PORT;


            // =====================================
            // FROM
            // =====================================

            $mail->setFrom(
                MAIL_USERNAME,
                MAIL_FROM_NAME
            );


            // =====================================
            // TO
            // =====================================

            $mail->addAddress(
                $recipientEmail,
                $recipientName
            );


            // =====================================
            // EMAIL
            // =====================================

            $mail->isHTML(true);

            $mail->Subject = $replySubject;


            // Safe name

            $safeName = htmlspecialchars(
                $recipientName,
                ENT_QUOTES,
                'UTF-8'
            );


            // Safe message

            $safeMessage = nl2br(
                htmlspecialchars(
                    $replyText,
                    ENT_QUOTES,
                    'UTF-8'
                )
            );


            // =====================================
            // HTML EMAIL BODY
            // =====================================

            $mail->Body = "

                <div
                    style='
                        font-family: Arial, sans-serif;
                        line-height: 1.6;
                    '
                >

                    <p>
                        Dear {$safeName},
                    </p>

                    <p>
                        {$safeMessage}
                    </p>

                    <br>

                    <p>

                        Best regards,<br>

                        <strong>
                            " .
                            htmlspecialchars(
                                MAIL_FROM_NAME,
                                ENT_QUOTES,
                                'UTF-8'
                            ) .
                        "
                        </strong>

                    </p>

                </div>

            ";


            // =====================================
            // PLAIN TEXT VERSION
            // =====================================

            $mail->AltBody =
                "Dear " .
                $recipientName .
                ",\n\n" .
                $replyText .
                "\n\n" .
                "Best regards,\n" .
                MAIL_FROM_NAME;


            // =====================================
            // SEND EMAIL
            // =====================================

            $mail->send();


            // =====================================
            // UPDATE REPLY STATUS
            // =====================================

            $stmt = mysqli_prepare(
                $conn,
                "UPDATE contact_messages
                 SET reply_status = 'Replied'
                 WHERE message_id = ?"
            );


            if ($stmt) {

                mysqli_stmt_bind_param(
                    $stmt,
                    "i",
                    $messageId
                );


                if (mysqli_stmt_execute($stmt)) {

                    $replyMessage =
                        "Reply sent successfully to " .
                        $recipientEmail;

                }

                else {

                    $replyError =
                        "Reply was sent, but the message status could not be updated.";

                }


                mysqli_stmt_close($stmt);

            }

            else {

                $replyError =
                    "Reply was sent, but the status update could not be prepared.";

            }

        }

        catch (Exception $e) {

            $replyError =
                "Email could not be sent. " .
                $mail->ErrorInfo;

        }

    }

}


// =====================================
// MESSAGE TYPE FILTER
// =====================================

$filterType = "";


if (isset($_GET['message_type'])) {

    $filterType = mysqli_real_escape_string(
        $conn,
        $_GET['message_type']
    );

}


// =====================================
// GET MESSAGES
// =====================================

if ($filterType != "") {

    $sql = "

        SELECT *

        FROM contact_messages

        WHERE message_type = '$filterType'

        ORDER BY created_at DESC

    ";

}

else {

    $sql = "

        SELECT *

        FROM contact_messages

        ORDER BY created_at DESC

    ";

}


$result = mysqli_query($conn, $sql);

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
User Messages
</title>


<!-- =====================================
     BOOTSTRAP
===================================== -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<!-- =====================================
     BOOTSTRAP ICONS
===================================== -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<style>

/* =====================================
   BODY
===================================== */

body {

    background-color: #f5f8fc;

}


/* =====================================
   BLUE + YELLOW THEME
===================================== */

.navbar-blue {

    background-color: #0057B8;

}


.btn-blue {

    background-color: #0057B8;

    color: white;

    border: none;

}


.btn-blue:hover {

    background-color: #003F88;

    color: white;

}


.btn-yellow {

    background-color: #FFD700;

    color: #000;

    border: none;

}


.btn-yellow:hover {

    background-color: #E6C200;

    color: #000;

}


/* =====================================
   DASHBOARD BUTTON
===================================== */

.dashboard-btn {

    color: #0057B8;

    font-weight: 600;

    border: none;

}


.dashboard-btn:hover {

    background-color: #FFD700;

    color: #000;

}


/* =====================================
   FILTER CARD
===================================== */

.filter-card {

    background-color: white;

    border-radius: 12px;

    padding: 20px;

    box-shadow:
        0 4px 12px rgba(0,0,0,0.08);

    border-top: 4px solid #FFD700;

}


/* =====================================
   TABLE CONTAINER
===================================== */

.table-container {

    background-color: white;

    border-radius: 12px;

    padding: 15px;

    box-shadow:
        0 4px 12px rgba(0,0,0,0.08);

    overflow: hidden;

}


/* =====================================
   TABLE
===================================== */

.message-table {

    margin-bottom: 0;

}


/* =====================================
   TABLE HEADER
===================================== */

.message-table thead {

    background-color: #0057B8;

    color: white;

}


.message-table thead th {

    padding: 14px;

    border: none;

    font-weight: 600;

}


/* Yellow line */

.message-table thead tr {

    border-bottom: 4px solid #FFD700;

}


/* =====================================
   TABLE BODY
===================================== */

.message-table tbody td {

    padding: 14px;

    vertical-align: middle;

}


/* Alternating rows */

.message-table tbody tr:nth-child(even) {

    background-color: #F0F6FF;

}


/* Hover */

.message-table tbody tr:hover {

    background-color: #FFF8D6;

    transition: 0.2s;

}


/* =====================================
   MESSAGE TYPE BADGE
===================================== */

.type-badge {

    background-color: #FFD700;

    color: #000;

    padding: 7px 10px;

    border-radius: 20px;

    font-size: 13px;

    font-weight: 600;

    display: inline-block;

}


/* =====================================
   MODAL
===================================== */

.modal-header-blue {

    background-color: #0057B8;

    color: white;

}


/* =====================================
   EMAIL LINK
===================================== */

.message-table a {

    color: #0057B8;

    text-decoration: none;

}


.message-table a:hover {

    text-decoration: underline;

}

</style>

</head>


<body>


<!-- =====================================
     NAVBAR
===================================== -->

<nav class="navbar navbar-dark navbar-blue">

    <div class="container">


        <!-- PAGE TITLE -->

        <span class="navbar-brand">

            <i class="bi bi-envelope-fill"></i>

            User Messages

        </span>


        <!-- DASHBOARD -->

        <a
            href="dashboard.php"
            class="btn btn-light dashboard-btn"
        >

            <i class="bi bi-speedometer2"></i>

            Dashboard

        </a>


    </div>

</nav>



<!-- =====================================
     CONTENT
===================================== -->

<div class="container mt-5">


    <!-- PAGE TITLE -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>

            <i class="bi bi-chat-left-text"></i>

            Contact Messages

        </h2>

    </div>



    <!-- =====================================
         SUCCESS MESSAGE
    ===================================== -->

    <?php if ($replyMessage != "") { ?>

        <div class="alert alert-success">

            <i class="bi bi-check-circle-fill"></i>

            <?php

            echo htmlspecialchars(
                $replyMessage
            );

            ?>

        </div>

    <?php } ?>



    <!-- =====================================
         ERROR MESSAGE
    ===================================== -->

    <?php if ($replyError != "") { ?>

        <div class="alert alert-danger">

            <i class="bi bi-exclamation-triangle-fill"></i>

            <?php

            echo htmlspecialchars(
                $replyError
            );

            ?>

        </div>

    <?php } ?>



    <!-- =====================================
         FILTER
    ===================================== -->

    <div class="filter-card mb-4">


        <form method="GET">


            <div class="row align-items-end">


                <!-- MESSAGE TYPE -->

                <div class="col-md-5">

                    <label
                        class="form-label fw-bold"
                    >

                        <i class="bi bi-funnel-fill"></i>

                        Filter by Message Type

                    </label>


                    <select
                        name="message_type"
                        class="form-select"
                    >


                        <option value="">

                            All Message Types

                        </option>


                        <option
                            value="Destination Enquiry"

                            <?php

                            if (
                                $filterType ==
                                "Destination Enquiry"
                            ) {

                                echo "selected";

                            }

                            ?>
                        >

                            Destination Enquiry

                        </option>


                        <option
                            value="Event Enquiry"

                            <?php

                            if (
                                $filterType ==
                                "Event Enquiry"
                            ) {

                                echo "selected";

                            }

                            ?>
                        >

                            Event Enquiry

                        </option>


                        <option
                            value="Gallery Enquiry"

                            <?php

                            if (
                                $filterType ==
                                "Gallery Enquiry"
                            ) {

                                echo "selected";

                            }

                            ?>
                        >

                            Gallery Enquiry

                        </option>


                        <option
                            value="Rating / Feedback"

                            <?php

                            if (
                                $filterType ==
                                "Rating / Feedback"
                            ) {

                                echo "selected";

                            }

                            ?>
                        >

                            Rating / Feedback

                        </option>


                        <option
                            value="General Enquiry"

                            <?php

                            if (
                                $filterType ==
                                "General Enquiry"
                            ) {

                                echo "selected";

                            }

                            ?>
                        >

                            General Enquiry

                        </option>


                        <option
                            value="Other"

                            <?php

                            if (
                                $filterType ==
                                "Other"
                            ) {

                                echo "selected";

                            }

                            ?>
                        >

                            Other

                        </option>


                    </select>

                </div>



                <!-- BUTTONS -->

                <div class="col-md-4 mt-3 mt-md-0">


                    <button
                        type="submit"
                        class="btn btn-blue"
                    >

                        <i class="bi bi-filter"></i>

                        Apply Filter

                    </button>


                    <a
                        href="messages.php"
                        class="btn btn-yellow"
                    >

                        <i class="bi bi-arrow-clockwise"></i>

                        Reset

                    </a>


                </div>


            </div>


        </form>


    </div>



    <!-- =====================================
         MESSAGE TABLE
    ===================================== -->

    <div class="table-container">


        <div class="table-responsive">


            <table class="table message-table">


                <thead>

                    <tr>

                        <th>ID</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Message Type</th>

                        <th>Subject</th>

                        <th>Message</th>

                        <th>Date</th>

                        <th>Status</th>

                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>


<?php

if (
    $result &&
    mysqli_num_rows($result) > 0
) {


    while (
        $row =
        mysqli_fetch_assoc($result)
    ) {

?>


                    <tr>


                        <!-- ID -->

                        <td>

                            <strong>

                                <?php

                                echo htmlspecialchars(
                                    $row['message_id']
                                );

                                ?>

                            </strong>

                        </td>



                        <!-- NAME -->

                        <td>

                            <strong>

                                <?php

                                echo htmlspecialchars(
                                    $row['name']
                                );

                                ?>

                            </strong>

                        </td>



                        <!-- EMAIL -->

                        <td>

                            <a
                                href="mailto:<?php
                                    echo htmlspecialchars(
                                        $row['email']
                                    );
                                ?>"
                            >

                                <?php

                                echo htmlspecialchars(
                                    $row['email']
                                );

                                ?>

                            </a>

                        </td>



                        <!-- MESSAGE TYPE -->

                        <td>

                            <span class="type-badge">

                                <?php

                                echo htmlspecialchars(
                                    $row['message_type']
                                );

                                ?>

                            </span>

                        </td>



                        <!-- SUBJECT -->

                        <td>

                            <?php

                            echo htmlspecialchars(
                                $row['subject']
                            );

                            ?>

                        </td>



                        <!-- MESSAGE -->

                        <td>

                            <?php

                            echo nl2br(
                                htmlspecialchars(
                                    $row['message']
                                )
                            );

                            ?>

                        </td>



                        <!-- DATE -->

                        <td>

                            <?php

                            echo htmlspecialchars(
                                $row['created_at']
                            );

                            ?>

                        </td>



                        <!-- STATUS -->

                        <td>


                            <?php

                            if (
                                $row['reply_status']
                                === 'Replied'
                            ) {

                            ?>

                                <span
                                    class="badge bg-success"
                                >

                                    <i
                                        class="bi bi-check-circle"
                                    ></i>

                                    Replied

                                </span>

                            <?php

                            }

                            else {

                            ?>

                                <span
                                    class="badge bg-warning text-dark"
                                >

                                    <i
                                        class="bi bi-clock"
                                    ></i>

                                    Not Replied

                                </span>

                            <?php

                            }

                            ?>

                        </td>



                        <!-- ACTION -->

                        <td>


                            <button
                                type="button"

                                class="btn btn-blue btn-sm"

                                data-bs-toggle="modal"

                                data-bs-target="#replyModal"

                                data-id="<?php

                                echo htmlspecialchars(
                                    $row['message_id'],
                                    ENT_QUOTES
                                );

                                ?>"

                                data-email="<?php

                                echo htmlspecialchars(
                                    $row['email'],
                                    ENT_QUOTES
                                );

                                ?>"

                                data-name="<?php

                                echo htmlspecialchars(
                                    $row['name'],
                                    ENT_QUOTES
                                );

                                ?>"

                                data-subject="<?php

                                echo htmlspecialchars(
                                    $row['subject'],
                                    ENT_QUOTES
                                );

                                ?>"
                            >

                                <i
                                    class="bi bi-reply-fill"
                                ></i>

                                Respond

                            </button>


                        </td>


                    </tr>


<?php

    }

}

else {

?>


                    <tr>

                        <td
                            colspan="9"
                            class="text-center py-5"
                        >

                            <i
                                class="bi bi-inbox fs-1 text-primary"
                            ></i>

                            <br>

                            <br>

                            <strong>

                                No messages found.

                            </strong>

                            <br>

                            Try selecting a different
                            message type.

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



<!-- =====================================
     REPLY MODAL
===================================== -->

<div
    class="modal fade"
    id="replyModal"
    tabindex="-1"
    aria-hidden="true"
>


    <div class="modal-dialog modal-lg">


        <div class="modal-content">


            <!-- MODAL HEADER -->

            <div
                class="modal-header modal-header-blue"
            >

                <h5 class="modal-title">

                    <i
                        class="bi bi-reply-fill"
                    ></i>

                    Respond to User

                </h5>


                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                >
                </button>

            </div>



            <!-- FORM -->

            <form method="POST">


                <!-- MESSAGE ID -->

                <input
                    type="hidden"
                    name="message_id"
                    id="messageId"
                >


                <div class="modal-body">


                    <!-- EMAIL -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-bold"
                        >

                            To

                        </label>


                        <input
                            type="email"
                            name="recipient_email"
                            id="recipientEmail"
                            class="form-control"
                            readonly
                            required
                        >

                    </div>



                    <!-- NAME -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-bold"
                        >

                            Name

                        </label>


                        <input
                            type="text"
                            name="recipient_name"
                            id="recipientName"
                            class="form-control"
                            readonly
                        >

                    </div>



                    <!-- SUBJECT -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-bold"
                        >

                            Subject

                        </label>


                        <input
                            type="text"
                            name="reply_subject"
                            id="replySubject"
                            class="form-control"
                            required
                        >

                    </div>



                    <!-- REPLY -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-bold"
                        >

                            Your Reply

                        </label>


                        <textarea
                            name="reply_message"
                            class="form-control"
                            rows="7"
                            placeholder="Type your reply here..."
                            required
                        ></textarea>

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
                        name="send_reply"
                        class="btn btn-blue"
                    >

                        <i
                            class="bi bi-send-fill"
                        ></i>

                        Send Reply

                    </button>


                </div>


            </form>


        </div>

    </div>

</div>



<!-- =====================================
     BOOTSTRAP JAVASCRIPT
===================================== -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



<!-- =====================================
     REPLY JAVASCRIPT
===================================== -->

<script>

const replyModal =
document.getElementById("replyModal");


replyModal.addEventListener(
    "show.bs.modal",
    function(event) {


        const button =
            event.relatedTarget;


        // Message ID

        const id =
            button.getAttribute(
                "data-id"
            );


        // Email

        const email =
            button.getAttribute(
                "data-email"
            );


        // Name

        const name =
            button.getAttribute(
                "data-name"
            );


        // Subject

        const subject =
            button.getAttribute(
                "data-subject"
            );


        // Fill form

        document.getElementById(
            "messageId"
        ).value = id;


        document.getElementById(
            "recipientEmail"
        ).value = email;


        document.getElementById(
            "recipientName"
        ).value = name;


        document.getElementById(
            "replySubject"
        ).value = "Re: " + subject;


    }
);

</script>


</body>

</html>