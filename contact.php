<?php

include("config.php");


$message = "";


// Contact form

if(isset($_POST['submit'])){


    $name = mysqli_real_escape_string($conn,$_POST['name']);

    $email = mysqli_real_escape_string($conn,$_POST['email']);

    $subject = mysqli_real_escape_string($conn,$_POST['subject']);

    $feedback = mysqli_real_escape_string($conn,$_POST['feedback']);



    $sql = "INSERT INTO contact_messages

    (name,email,subject,message)

    VALUES

    ('$name','$email','$subject','$feedback')";



    if(mysqli_query($conn,$sql)){

        $message = "Message sent successfully!";

    }

}



// Rating form

if(isset($_POST['rate'])){


    $name = mysqli_real_escape_string($conn,$_POST['rname']);

    $email = mysqli_real_escape_string($conn,$_POST['remail']);

    $rating = $_POST['rating'];

    $comment = mysqli_real_escape_string($conn,$_POST['comment']);



    mysqli_query($conn,

    "INSERT INTO ratings

    (name,email,rating,comment)

    VALUES

    ('$name','$email','$rating','$comment')"

    );



    $message = "Thank you for your rating!";

}


?>



<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Contact - Smart Perlis Tourism Portal
</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="assets/css/style.css">


<style>

/* BODY PAGE */

body {

    background: #fefbea;

}


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


/* HEADER FONT */

.contact-header h1 {

    font-size: 3.5rem;

    font-weight: 700;

    margin-bottom: 10px;

}


.contact-header p {

    margin: 0;

    font-size: 18px;

}

</style>


</head>


<body>


<?php include("navbar.php"); ?>





<!-- HEADER -->


<section class="text-white text-center p-5 contact-header"
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
">


<h1>

Contact Us

</h1>


<p>

Get in touch with Smart Perlis Tourism Portal

</p>


</section>







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

<i class="bi bi-geo-alt-fill text-success"></i>

Perlis, Malaysia

</p>



<p>

<i class="bi bi-envelope-fill text-success"></i>

info@smartperlis.com

</p>



<p>

<i class="bi bi-telephone-fill text-success"></i>

+604-0000000

</p>



<p>

<i class="bi bi-clock-fill text-success"></i>

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



<?php

if($message!=""){

?>

<div class="alert alert-success">

<?php echo $message; ?>

</div>


<?php

}

?>





<form method="POST">



<div class="mb-3">


<label>

Name

</label>


<input type="text"
name="name"
class="form-control"
required>


</div>





<div class="mb-3">


<label>

Email

</label>


<input type="email"
name="email"
class="form-control"
required>


</div>






<div class="mb-3">


<label>

Subject

</label>


<input type="text"
name="subject"
class="form-control"
required>


</div>






<div class="mb-3">


<label>

Message

</label>


<textarea
name="feedback"
class="form-control"
rows="5"
required></textarea>


</div>





<button type="submit"
name="submit"
class="btn btn-success">


Send


</button>




</form>



</div>


</div>




</div>


</div>






<div class="container mt-5 mb-5">


<div class="card shadow p-4">


<h2 class="text-center">

Rate Our Smart Tourism Portal ⭐

</h2>



<form method="POST">



<div class="mb-3">

<label>Name</label>

<input type="text"
name="rname"
class="form-control"
required>

</div>




<div class="mb-3">

<label>Email</label>

<input type="email"
name="remail"
class="form-control"
required>

</div>




<div class="mb-3">

<label>Rating</label>


<select name="rating"
class="form-control">


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

<label>Comment</label>


<textarea name="comment"
class="form-control"
rows="4"></textarea>


</div>




<button type="submit"
name="rate"
class="btn btn-success">


Submit


</button>



</form>



</div>


</div>


<?php include("footer.php"); ?>



</body>

</html>