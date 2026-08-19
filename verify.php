<?php

session_start();

include("config.php");

$error = "";


// =====================================
// CHECK PENDING LOGIN
// =====================================

if (!isset($_SESSION['pending_user_id'])) {

    header("Location: login.php");
    exit();

}


$user_id = $_SESSION['pending_user_id'];


// =====================================
// VERIFY OTP
// =====================================

if (isset($_POST['verify'])) {

    $otp = trim($_POST['otp'] ?? "");


    // =====================================
    // VALIDATE OTP FORMAT
    // =====================================

    if (!preg_match('/^[0-9]{6}$/', $otp)) {

        $error =
            "Please enter a valid 6-digit verification code.";

    } else {


        // =====================================
        // GET USER
        // =====================================

        $stmt = mysqli_prepare(
            $conn,
            "
            SELECT
                user_id,
                username,
                email,
                role,
                otp,
                otp_expiry
            FROM users
            WHERE user_id = ?
            AND role IN ('admin', 'officer')
            LIMIT 1
            "
        );


        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $user_id
        );

        mysqli_stmt_execute($stmt);

        $result =
            mysqli_stmt_get_result($stmt);


        if (
            !$result ||
            mysqli_num_rows($result) !== 1
        ) {

            $error =
                "Admin or officer account not found.";

        } else {

            $user =
                mysqli_fetch_assoc($result);


            // =====================================
            // CHECK OTP EXISTS
            // =====================================

            if (
                empty($user['otp']) ||
                empty($user['otp_expiry'])
            ) {

                $error =
                    "Verification code is not available. Please login again.";

            }


            // =====================================
            // CHECK EXPIRY
            // =====================================

            elseif (
                strtotime($user['otp_expiry']) < time()
            ) {

                $error =
                    "Verification code has expired. Please login again.";

            }


            // =====================================
            // VERIFY OTP
            // =====================================

            elseif (
                !password_verify(
                    $otp,
                    $user['otp']
                )
            ) {

                $error =
                    "Invalid verification code.";

            }


            // =====================================
            // OTP CORRECT
            // =====================================

            else {


                // =====================================
                // CLEAR OTP
                // =====================================

                $clear = mysqli_prepare(
                    $conn,
                    "
                    UPDATE users
                    SET
                        otp = NULL,
                        otp_expiry = NULL
                    WHERE user_id = ?
                    "
                );


                mysqli_stmt_bind_param(
                    $clear,
                    "i",
                    $user_id
                );

                mysqli_stmt_execute($clear);


                // =====================================
                // CREATE SESSION
                // =====================================

                $_SESSION['user_id'] =
                    $user['user_id'];

                $_SESSION['username'] =
                    $user['username'];

                $_SESSION['email'] =
                    $user['email'];

                $_SESSION['role'] =
                    $user['role'];

                $_SESSION['verified'] =
                    true;


                // =====================================
                // REMOVE PENDING LOGIN
                // =====================================

                unset($_SESSION['pending_user_id']);
                unset($_SESSION['pending_username']);
                unset($_SESSION['pending_email']);
                unset($_SESSION['pending_role']);


                // =====================================
                // ADMIN
                // =====================================

                if ($user['role'] === 'admin') {

                    $_SESSION['admin'] =
                        $user['username'];

                    header(
                        "Location: admin/dashboard.php"
                    );

                    exit();

                }


                // =====================================
                // OFFICER
                // =====================================

                elseif ($user['role'] === 'officer') {

                    $_SESSION['officer'] =
                        $user['username'];

                    header(
                        "Location: officer/dashboard.php"
                    );

                    exit();

                }


                // Safety fallback
                else {

                    session_destroy();

                    header(
                        "Location: login.php"
                    );

                    exit();

                }

            }

        }

    }

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
Verify Login - Smart Perlis Tourism Portal
</title>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet"
>


<style>

body {

    min-height:100vh;

    margin:0;

    display:flex;

    align-items:center;

    justify-content:center;

    background:
        linear-gradient(
            135deg,
            #0b3d2e,
            #146b4a,
            #d4af37
        );

    font-family:Arial,sans-serif;

}


.verify-card {

    width:100%;

    max-width:450px;

    border:none;

    border-radius:22px;

    padding:35px;

}


.verify-icon {

    width:80px;

    height:80px;

    margin:auto;

    border-radius:50%;

    background:#0b3d2e;

    color:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:38px;

}


.otp-input {

    height:65px;

    text-align:center;

    font-size:28px;

    font-weight:bold;

    letter-spacing:8px;

    border-radius:10px;

}


.verify-btn {

    height:52px;

    border:none;

    border-radius:10px;

    font-weight:bold;

    background:#0b3d2e;

}


.verify-btn:hover {

    background:#146b4a;

}


</style>

</head>


<body>


<div class="container">

<div class="row justify-content-center">

<div class="col-12 col-md-6 col-lg-5">


<div class="card verify-card shadow-lg">


<!-- ICON -->

<div class="text-center">

<div class="verify-icon">

<i class="bi bi-shield-check"></i>

</div>


<h3 class="fw-bold mt-3">

Security Verification

</h3>


<p class="text-muted">

Enter the 6-digit OTP sent to your
registered email address.

</p>

</div>


<!-- ERROR -->

<?php if ($error !== "") { ?>

<div class="alert alert-danger text-center">

<i class="bi bi-exclamation-circle me-1"></i>

<?php echo $error; ?>

</div>

<?php } ?>


<!-- EMAIL -->

<div class="text-center mb-4">

<small class="text-muted">

<i class="bi bi-envelope me-1"></i>

OTP sent to

</small>

<br>

<strong>

<?php

echo htmlspecialchars(
    $_SESSION['pending_email']
);

?>

</strong>

</div>


<!-- FORM -->

<form
    method="POST"
    autocomplete="off"
>


<label class="form-label fw-semibold">

Verification Code

</label>


<input
    type="text"
    name="otp"
    class="form-control otp-input mb-4"
    maxlength="6"
    inputmode="numeric"
    pattern="[0-9]{6}"
    placeholder="000000"
    autocomplete="one-time-code"
    required
>


<button
    type="submit"
    name="verify"
    class="btn verify-btn text-white w-100"
>

<i class="bi bi-check-circle me-1"></i>

Verify & Login

</button>


</form>


<!-- BACK -->

<div class="text-center mt-4">

<a
    href="login.php"
    class="text-decoration-none"
    style="color:#0b3d2e;"
>

<i class="bi bi-arrow-left me-1"></i>

Back to Login

</a>

</div>


</div>

</div>

</div>

</div>


</body>

</html>