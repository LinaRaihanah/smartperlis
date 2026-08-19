<?php

session_start();

include("../config.php");

// PHPMailer
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

    // Get message ID
    $messageId = intval($_POST['message_id']);

    $recipientEmail = trim($_POST['recipient_email']);
    $recipientName = trim($_POST['recipient_name']);
    $replySubject = trim($_POST['reply_subject']);
    $replyText = trim($_POST['reply_message']);


    // =====================================
    // CHECK EMAIL
    // =====================================

    if (!filter_var($recipientEmail, FILTER_VALIDATE_EMAIL)) {

        $replyError = "Invalid email address.";

    }


    // =====================================
    // CHECK MESSAGE
    // =====================================

    elseif (empty($replyText)) {

        $replyError = "Please enter your reply.";

    }


    // =====================================
    // CHECK MESSAGE ID
    // =====================================

    elseif ($messageId <= 0) {

        $replyError = "Invalid message ID.";

    }


    else {

        $mail = new PHPMailer(true);

        try {

            // =====================================
            // SMTP
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
                <div style='font-family: Arial, sans-serif;'>
                    
                    <p>Dear {$safeName},</p>

                    <p>{$safeMessage}</p>

                    <br>

                    <p>
                        Best regards,<br>
                        <strong>" .
                        htmlspecialchars(
                            MAIL_FROM_NAME,
                            ENT_QUOTES,
                            'UTF-8'
                        ) .
                        "</strong>
                    </p>

                </div>
            ";


            // =====================================
            // PLAIN TEXT VERSION
            // =====================================

            $mail->AltBody =
                "Dear " . $recipientName . ",\n\n" .
                $replyText . "\n\n" .
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

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>User Messages</title>


<!-- BOOTSTRAP -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>


<body class="bg-light">


<!-- =====================================
     NAVBAR
===================================== -->

<nav class="navbar navbar-dark bg-success">

<div class="container">

<span class="navbar-brand">

User Messages

</span>


<a href="dashboard.php"
   class="btn btn-light">

Dashboard

</a>

</div>

</nav>



<!-- =====================================
     CONTENT
===================================== -->

<div class="container mt-5">


<h2 class="mb-4">

Contact Messages

</h2>



<!-- SUCCESS MESSAGE -->

<?php if ($replyMessage != "") { ?>

<div class="alert alert-success">

<?php
echo htmlspecialchars($replyMessage);
?>

</div>

<?php } ?>



<!-- ERROR MESSAGE -->

<?php if ($replyError != "") { ?>

<div class="alert alert-danger">

<?php
echo htmlspecialchars($replyError);
?>

</div>

<?php } ?>



<!-- =====================================
     MESSAGES TABLE
===================================== -->

<div class="table-responsive">


<table class="table table-bordered table-striped bg-white">


<thead class="table-success">

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Subject</th>

<th>Message</th>

<th>Date</th>

<th>Status</th>

<th>Action</th>

</tr>

</thead>



<tbody>


<?php

$result = mysqli_query(
    $conn,
    "SELECT *
     FROM contact_messages
     ORDER BY created_at DESC"
);


if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {

?>


<tr>


<!-- ID -->

<td>

<?php

echo htmlspecialchars(
    $row['message_id']
);

?>

</td>



<!-- NAME -->

<td>

<?php

echo htmlspecialchars(
    $row['name']
);

?>

</td>



<!-- EMAIL -->

<td>

<a href="mailto:<?php

echo htmlspecialchars(
    $row['email']
);

?>">

<?php

echo htmlspecialchars(
    $row['email']
);

?>

</a>

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

if ($row['reply_status'] === 'Replied') {

?>

<span class="badge bg-success">

Replied

</span>

<?php

}
else {

?>

<span class="badge bg-warning text-dark">

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
    class="btn btn-success btn-sm reply-btn"

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

Reply

</button>

</td>


</tr>


<?php

    }

}
else {

?>

<tr>

<td colspan="8"
    class="text-center text-danger">

Unable to load messages.

</td>

</tr>

<?php

}

?>


</tbody>

</table>

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

<div class="modal-header bg-success text-white">


<h5 class="modal-title">

Reply to User

</h5>


<button
type="button"
class="btn-close btn-close-white"
data-bs-dismiss="modal">
</button>


</div>



<!-- FORM -->

<form method="POST">


<!-- Hidden Message ID -->

<input
    type="hidden"
    name="message_id"
    id="messageId"
>


<div class="modal-body">


<!-- =====================================
     EMAIL
===================================== -->

<div class="mb-3">

<label class="form-label">

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



<!-- =====================================
     NAME
===================================== -->

<div class="mb-3">

<label class="form-label">

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



<!-- =====================================
     SUBJECT
===================================== -->

<div class="mb-3">

<label class="form-label">

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



<!-- =====================================
     MESSAGE
===================================== -->

<div class="mb-3">

<label class="form-label">

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



<!-- =====================================
     MODAL FOOTER
===================================== -->

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
class="btn btn-success"
>

Send Reply

</button>


</div>


</form>


</div>

</div>

</div>



<!-- =====================================
     BOOTSTRAP JS
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
    function (event) {

        const button =
            event.relatedTarget;


        // Get message ID

        const id =
            button.getAttribute(
                "data-id"
            );


        // Get email

        const email =
            button.getAttribute(
                "data-email"
            );


        // Get name

        const name =
            button.getAttribute(
                "data-name"
            );


        // Get subject

        const subject =
            button.getAttribute(
                "data-subject"
            );


        // Put values into form

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