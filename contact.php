<?php

include("config.php");

$message = "";


// =====================================
// CONTACT FORM
// =====================================

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string(
        $conn,
        $_POST['name']
    );

    $email = mysqli_real_escape_string(
        $conn,
        $_POST['email']
    );

    $message_type = mysqli_real_escape_string(
        $conn,
        $_POST['message_type']
    );

    $subject = mysqli_real_escape_string(
        $conn,
        $_POST['subject']
    );

    $feedback = mysqli_real_escape_string(
        $conn,
        $_POST['feedback']
    );


    $sql = "INSERT INTO contact_messages
            (name, email, message_type, subject, message)
            VALUES
            ('$name', '$email', '$message_type', '$subject', '$feedback')";


    if(mysqli_query($conn, $sql)){

        $message = "Message sent successfully!";

    }

}


// =====================================
// RATING FORM
// =====================================

if(isset($_POST['rate'])){

    $name = mysqli_real_escape_string(
        $conn,
        $_POST['rname']
    );

    $email = mysqli_real_escape_string(
        $conn,
        $_POST['remail']
    );

    $rating = $_POST['rating'];

    $comment = mysqli_real_escape_string(
        $conn,
        $_POST['comment']
    );


    mysqli_query(
        $conn,
        "INSERT INTO ratings
        (name, email, rating, comment)
        VALUES
        ('$name', '$email', '$rating', '$comment')"
    );


    $message = "Thank you for your rating!";

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
Contact - Smart Perlis Tourism Portal
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


<!-- Custom CSS -->

<link
rel="stylesheet"
href="assets/css/style.css"
>


<style>

/* =====================================
   BODY
===================================== */

body {

    background: #fefbea;

}


/* =====================================
   NAVBAR
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
   CONTACT HEADER
===================================== */

.contact-header h1 {

    font-size: 3.5rem;

    font-weight: 700;

    margin-bottom: 10px;

}


.contact-header p {

    margin: 0;

    font-size: 18px;

}


/* =====================================
   TOURISM INFORMATION ICON
===================================== */

.info-icon {

    color: #0057B8;

    margin-right: 5px;

}


/* =====================================
   BLUE BUTTON
===================================== */

.blue-btn {

    background-color: #0057B8;

    border-color: #0057B8;

    color: white;

    font-weight: 500;

}


.blue-btn:hover {

    background-color: #003F88;

    border-color: #003F88;

    color: white;

}


/* =====================================
   MESSAGE TYPE
===================================== */

.message-type {

    border-left: 4px solid #FFD700;

}


/* =====================================
   FAQ
===================================== */

.faq-item {

    border: 1px solid #ddd;

    border-radius: 8px;

    margin-bottom: 10px;

    overflow: hidden;

}


.faq-question {

    width: 100%;

    border: none;

    background: white;

    padding: 18px;

    display: flex;

    justify-content: space-between;

    align-items: center;

    text-align: left;

    font-size: 16px;

    font-weight: 600;

    cursor: pointer;

}


.faq-question:hover {

    background: #fffbea;

}


.faq-arrow {

    font-size: 14px;

    transition: 0.3s;

}


.faq-answer {

    display: none;

    padding: 18px;

    background: #f8f9fa;

    border-top: 1px solid #ddd;

    line-height: 1.6;

}


.faq-item.active .faq-answer {

    display: block;

}


.faq-item.active .faq-arrow {

    transform: rotate(180deg);

}

</style>

</head>


<body>


<!-- NAVBAR -->

<?php include("navbar.php"); ?>


<!-- HEADER -->

<section
class="text-white text-center p-5 contact-header"
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
        Contact Us
    </h1>


    <p>
        Get in touch with Smart Perlis Tourism Portal
    </p>

</section>



<!-- CONTACT INFORMATION + CONTACT FORM -->

<div class="container mt-5">

    <div class="row">


        <!-- CONTACT INFORMATION -->

        <div class="col-md-5">

            <div class="card shadow p-4">

                <h3>
                    Tourism Information
                </h3>

                <hr>


                <p>

                    <i class="bi bi-geo-alt-fill info-icon"></i>

                    Perlis, Malaysia

                </p>


                <p>

                    <i class="bi bi-envelope-fill info-icon"></i>

                    info@smartperlis.com

                </p>


                <p>

                    <i class="bi bi-telephone-fill info-icon"></i>

                    +604-0000000

                </p>


                <p>

                    <i class="bi bi-clock-fill info-icon"></i>

                    Monday - Friday (8.00 AM - 5.00 PM)

                </p>

            </div>

        </div>



        <!-- CONTACT FORM -->

        <div class="col-md-7">

            <div class="card shadow p-4">

                <h3>
                    Send Message
                </h3>


                <!-- SUCCESS MESSAGE -->

                <?php

                if($message != ""){

                ?>

                    <div class="alert alert-success">

                        <?php echo $message; ?>

                    </div>

                <?php

                }

                ?>


                <form method="POST">


                    <!-- NAME -->

                    <div class="mb-3">

                        <label class="form-label">
                            Name
                        </label>


                        <input
                        type="text"
                        name="name"
                        class="form-control"
                        required
                        >

                    </div>



                    <!-- EMAIL -->

                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>


                        <input
                        type="email"
                        name="email"
                        class="form-control"
                        required
                        >

                    </div>



                    <!-- MESSAGE TYPE -->

                    <div class="mb-3">

                        <label class="form-label">
                            Message Type
                        </label>


                        <select
                        name="message_type"
                        class="form-select message-type"
                        required
                        >

                            <option value="">
                                -- Select Message Type --
                            </option>

                            <option value="Destination Enquiry">
                                Destination Enquiry
                            </option>

                            <option value="Event Enquiry">
                                Event Enquiry
                            </option>

                            <option value="Gallery Enquiry">
                                Gallery Enquiry
                            </option>

                            <option value="Rating / Feedback">
                                Rating / Feedback
                            </option>

                            <option value="General Enquiry">
                                General Enquiry
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>



                    <!-- SUBJECT -->

                    <div class="mb-3">

                        <label class="form-label">
                            Subject
                        </label>


                        <input
                        type="text"
                        name="subject"
                        class="form-control"
                        placeholder="Enter your subject"
                        required
                        >

                    </div>



                    <!-- MESSAGE -->

                    <div class="mb-3">

                        <label class="form-label">
                            Message
                        </label>


                        <textarea
                        name="feedback"
                        class="form-control"
                        rows="5"
                        placeholder="Enter your message"
                        required
                        ></textarea>

                    </div>



                    <!-- SEND BUTTON -->

                    <button
                    type="submit"
                    name="submit"
                    class="btn blue-btn"
                    >

                        <i class="bi bi-send"></i>

                        Send Message

                    </button>


                </form>

            </div>

        </div>

    </div>

</div>



<!-- =====================================
     FAQ SECTION
===================================== -->

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="text-center mb-4">
            Frequently Asked Questions
        </h2>


        <div class="faq-container">


            <div class="faq-item">

                <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
                >

                    <span>
                        What is Smart Perlis Tourism Portal?
                    </span>

                    <span class="faq-arrow">
                        ▼
                    </span>

                </button>


                <div class="faq-answer">

                    Smart Perlis Tourism Portal is a tourism website
                    that provides information about tourist attractions,
                    events and tourism activities in Perlis.

                </div>

            </div>



            <div class="faq-item">

                <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
                >

                    <span>
                        What can I find on this website?
                    </span>

                    <span class="faq-arrow">
                        ▼
                    </span>

                </button>


                <div class="faq-answer">

                    You can find information about tourist attractions,
                    tourism events, activities and other tourism
                    information available in Perlis.

                </div>

            </div>



            <div class="faq-item">

                <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
                >

                    <span>
                        Do I need an account to use the portal?
                    </span>

                    <span class="faq-arrow">
                        ▼
                    </span>

                </button>


                <div class="faq-answer">

                    No. You can browse tourism information and explore
                    attractions without an account. An account may be
                    required for certain features.

                </div>

            </div>



            <div class="faq-item">

                <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
                >

                    <span>
                        How can I give feedback about the portal?
                    </span>

                    <span class="faq-arrow">
                        ▼
                    </span>

                </button>


                <div class="faq-answer">

                    You can send your feedback through the Contact Us
                    form or submit a rating and comment in the rating
                    section below.

                </div>

            </div>



            <div class="faq-item">

                <button
                type="button"
                class="faq-question"
                onclick="toggleFAQ(this)"
                >

                    <span>
                        How can I contact Smart Perlis Tourism Portal?
                    </span>

                    <span class="faq-arrow">
                        ▼
                    </span>

                </button>


                <div class="faq-answer">

                    You can contact us by using the contact information
                    provided on this page or by sending a message through
                    the Contact Us form.

                </div>

            </div>


        </div>

    </div>

</div>



<!-- =====================================
     RATING SECTION
===================================== -->

<div class="container mt-5 mb-5">

    <div class="card shadow p-4">

        <h2 class="text-center">
            Rate Our Smart Tourism Portal ⭐
        </h2>


        <form method="POST">


            <div class="mb-3">

                <label>
                    Name
                </label>

                <input
                type="text"
                name="rname"
                class="form-control"
                required
                >

            </div>



            <div class="mb-3">

                <label>
                    Email
                </label>

                <input
                type="email"
                name="remail"
                class="form-control"
                required
                >

            </div>



            <div class="mb-3">

                <label>
                    Rating
                </label>


                <select
                name="rating"
                class="form-control"
                >

                    <option value="5">
                        ⭐⭐⭐⭐⭐ Excellent
                    </option>

                    <option value="4">
                        ⭐⭐⭐⭐ Good
                    </option>

                    <option value="3">
                        ⭐⭐⭐ Average
                    </option>

                    <option value="2">
                        ⭐⭐ Poor
                    </option>

                    <option value="1">
                        ⭐ Bad
                    </option>

                </select>

            </div>



            <div class="mb-3">

                <label>
                    Comment
                </label>


                <textarea
                name="comment"
                class="form-control"
                rows="4"
                ></textarea>

            </div>



            <button
            type="submit"
            name="rate"
            class="btn blue-btn"
            >

                Submit

            </button>


        </form>

    </div>

</div>



<!-- FOOTER -->

<?php include("footer.php"); ?>


<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<script>

function toggleFAQ(button) {

    var faqItem = button.parentElement;

    faqItem.classList.toggle("active");

}

</script>


</body>

</html>