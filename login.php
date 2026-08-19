<?php

session_start();

include("config.php");

// =====================================
// PHPMailer
// =====================================

require_once __DIR__ . "/PHPMailer/src/Exception.php";
require_once __DIR__ . "/PHPMailer/src/PHPMailer.php";
require_once __DIR__ . "/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// =====================================
// ERROR
// =====================================

$error = "";


// =====================================
// IF ALREADY LOGGED IN
// =====================================

if (
    isset($_SESSION['user_id']) &&
    isset($_SESSION['role'])
) {

    if ($_SESSION['role'] === 'admin') {

        header("Location: admin/dashboard.php");
        exit();

    }

    if ($_SESSION['role'] === 'officer') {

        header("Location: officer/dashboard.php");
        exit();

    }

}


// =====================================
// LOGIN PROCESS
// =====================================

if (isset($_POST['login'])) {

    $username = trim($_POST['username'] ?? "");
    $password = $_POST['password'] ?? "";


    // =====================================
    // VALIDATE INPUT
    // =====================================

    if ($username === "" || $password === "") {

        $error = "Please enter username and password.";

    } else {


        // =====================================
        // GET ADMIN / OFFICER
        // =====================================

        $stmt = mysqli_prepare(
            $conn,
            "
            SELECT
                user_id,
                username,
                email,
                password,
                role
            FROM users
            WHERE username = ?
            AND role IN ('admin', 'officer')
            LIMIT 1
            "
        );


        if (!$stmt) {

            $error = "Database error.";

        } else {


            mysqli_stmt_bind_param(
                $stmt,
                "s",
                $username
            );


            mysqli_stmt_execute($stmt);


            $result =
                mysqli_stmt_get_result($stmt);


            // =====================================
            // USER FOUND
            // =====================================

            if (
                $result &&
                mysqli_num_rows($result) === 1
            ) {

                $user =
                    mysqli_fetch_assoc($result);


                // =====================================
                // CHECK PASSWORD
                // =====================================

                $password_correct = false;


                // -------------------------------------
                // PASSWORD HASH
                // -------------------------------------

                if (
                    !empty($user['password']) &&
                    password_verify(
                        $password,
                        $user['password']
                    )
                ) {

                    $password_correct = true;

                }


                // -------------------------------------
                // SUPPORT OLD PLAIN TEXT PASSWORD
                // -------------------------------------
                // This is kept only so existing accounts
                // can still login.
                //
                // After successful login, you should
                // eventually convert old passwords to
                // password_hash().
                // -------------------------------------

                elseif (
                    $password === $user['password']
                ) {

                    $password_correct = true;

                }


                // =====================================
                // PASSWORD CORRECT
                // =====================================

                if ($password_correct) {


                    // =================================
                    // CHECK EMAIL
                    // =================================

                    if (
                        empty($user['email'])
                    ) {

                        $error =
                            "No registered email address is available for this account.";

                    } else {


                        // =================================
                        // GENERATE NEW OTP
                        // =================================

                        try {

                            $otp =
                                str_pad(
                                    (string) random_int(
                                        0,
                                        999999
                                    ),
                                    6,
                                    "0",
                                    STR_PAD_LEFT
                                );

                        } catch (Exception $e) {

                            $error =
                                "Unable to generate verification code.";

                            $otp = null;

                        }


                        if ($otp !== null) {


                            // =================================
                            // HASH OTP
                            // =================================

                            $otp_hash =
                                password_hash(
                                    $otp,
                                    PASSWORD_DEFAULT
                                );


                            if ($otp_hash === false) {

                                $error =
                                    "Unable to secure verification code.";

                            } else {


                                // =================================
                                // OTP EXPIRY
                                // =================================

                                $otp_expiry =
                                    date(
                                        "Y-m-d H:i:s",
                                        time() + 600
                                    );


                                // =================================
                                // SAVE OTP
                                // =================================

                                $update =
                                    mysqli_prepare(
                                        $conn,
                                        "
                                        UPDATE users
                                        SET
                                            otp = ?,
                                            otp_expiry = ?
                                        WHERE user_id = ?
                                        AND role IN ('admin', 'officer')
                                        "
                                    );


                                if (!$update) {

                                    $error =
                                        "Unable to prepare verification code.";

                                } else {


                                    mysqli_stmt_bind_param(
                                        $update,
                                        "ssi",
                                        $otp_hash,
                                        $otp_expiry,
                                        $user['user_id']
                                    );


                                    if (
                                        mysqli_stmt_execute(
                                            $update
                                        )
                                    ) {


                                        // =================================
                                        // SEND EMAIL
                                        // =================================

                                        $mail =
                                            new PHPMailer(true);


                                        try {


                                            // =================================
                                            // SMTP
                                            // =================================

                                            $mail->isSMTP();

                                            $mail->Host =
                                                MAIL_HOST;

                                            $mail->SMTPAuth =
                                                true;

                                            $mail->Username =
                                                MAIL_USERNAME;

                                            $mail->Password =
                                                MAIL_PASSWORD;

                                            $mail->SMTPSecure =
                                                PHPMailer::ENCRYPTION_STARTTLS;

                                            $mail->Port =
                                                MAIL_PORT;

                                            $mail->CharSet =
                                                "UTF-8";


                                            // =================================
                                            // SENDER
                                            // =================================

                                            $mail->setFrom(
                                                MAIL_USERNAME,
                                                MAIL_FROM_NAME
                                            );


                                            // =================================
                                            // RECEIVER
                                            // =================================

                                            $mail->addAddress(
                                                $user['email'],
                                                $user['username']
                                            );


                                            // =================================
                                            // EMAIL FORMAT
                                            // =================================

                                            $mail->isHTML(true);


                                            $mail->Subject =
                                                "Smart Perlis Tourism Portal - Login Verification Code";


                                            // =================================
                                            // SAFE USERNAME
                                            // =================================

                                            $safe_username =
                                                htmlspecialchars(
                                                    $user['username'],
                                                    ENT_QUOTES,
                                                    "UTF-8"
                                                );


                                            // =================================
                                            // ROLE
                                            // =================================

                                            $safe_role =
                                                htmlspecialchars(
                                                    ucfirst(
                                                        $user['role']
                                                    ),
                                                    ENT_QUOTES,
                                                    "UTF-8"
                                                );


                                            // =================================
                                            // EMAIL BODY
                                            // =================================

                                            $mail->Body = "

                                            <!DOCTYPE html>

                                            <html>

                                            <body style='
                                                margin:0;
                                                padding:0;
                                                background:#f4f7fb;
                                                font-family:Arial,sans-serif;
                                            '>

                                            <div style='
                                                max-width:600px;
                                                margin:30px auto;
                                                background:white;
                                                border-radius:18px;
                                                padding:35px;
                                                box-shadow:0 5px 20px rgba(0,0,0,0.08);
                                            '>

                                                <div style='
                                                    text-align:center;
                                                '>

                                                    <div style='
                                                        font-size:45px;
                                                        color:#F4C300;
                                                        margin-bottom:10px;
                                                    '>
                                                        ★
                                                    </div>

                                                    <h2 style='
                                                        color:#003B73;
                                                        margin-bottom:5px;
                                                    '>
                                                        Smart Perlis Tourism Portal
                                                    </h2>

                                                    <p style='
                                                        color:#777;
                                                        margin-top:0;
                                                    '>
                                                        Secure Login Verification
                                                    </p>

                                                </div>


                                                <hr style='
                                                    border:none;
                                                    border-top:1px solid #eeeeee;
                                                '>


                                                <p>

                                                    Hello
                                                    <strong>
                                                        {$safe_username}
                                                    </strong>,

                                                </p>


                                                <p>

                                                    A login attempt was made
                                                    to your
                                                    <strong>
                                                        {$safe_role}
                                                    </strong>
                                                    account.

                                                </p>


                                                <p>

                                                    Your 6-digit verification
                                                    code is:

                                                </p>


                                                <div style='
                                                    text-align:center;
                                                    margin:30px 0;
                                                '>

                                                    <span style='
                                                        display:inline-block;
                                                        background:#003B73;
                                                        color:white;
                                                        font-size:32px;
                                                        font-weight:bold;
                                                        letter-spacing:8px;
                                                        padding:18px 28px;
                                                        border-radius:12px;
                                                    '>
                                                        {$otp}
                                                    </span>

                                                </div>


                                                <p>

                                                    This verification code will
                                                    expire in
                                                    <strong>
                                                        10 minutes
                                                    </strong>.

                                                </p>


                                                <p style='
                                                    color:#777;
                                                '>

                                                    If you did not attempt
                                                    to login, please ignore
                                                    this email.

                                                </p>


                                                <hr style='
                                                    border:none;
                                                    border-top:1px solid #eeeeee;
                                                '>


                                                <p style='
                                                    color:#999;
                                                    font-size:13px;
                                                    text-align:center;
                                                '>

                                                    Smart Perlis Tourism Portal

                                                </p>


                                            </div>

                                            </body>

                                            </html>

                                            ";


                                            // =================================
                                            // PLAIN TEXT EMAIL
                                            // =================================

                                            $mail->AltBody =
                                                "Smart Perlis Tourism Portal\n\n" .
                                                "Your login verification code is: " .
                                                $otp .
                                                "\n\n" .
                                                "This code expires in 10 minutes.";


                                            // =================================
                                            // SEND EMAIL
                                            // =================================

                                            $mail->send();


                                            // =================================
                                            // CLEAR OLD PENDING SESSION
                                            // =================================

                                            unset(
                                                $_SESSION['pending_user_id'],
                                                $_SESSION['pending_username'],
                                                $_SESSION['pending_email'],
                                                $_SESSION['pending_role']
                                            );


                                            // =================================
                                            // CREATE PENDING SESSION
                                            // =================================

                                            $_SESSION['pending_user_id'] =
                                                (int) $user['user_id'];

                                            $_SESSION['pending_username'] =
                                                $user['username'];

                                            $_SESSION['pending_email'] =
                                                $user['email'];

                                            $_SESSION['pending_role'] =
                                                $user['role'];


                                            // =================================
                                            // REDIRECT VERIFY
                                            // =================================

                                            header(
                                                "Location: verify.php"
                                            );

                                            exit();


                                        } catch (Exception $e) {


                                            // =================================
                                            // CLEAR OTP IF EMAIL FAILED
                                            // =================================

                                            $clear =
                                                mysqli_prepare(
                                                    $conn,
                                                    "
                                                    UPDATE users
                                                    SET
                                                        otp = NULL,
                                                        otp_expiry = NULL
                                                    WHERE user_id = ?
                                                    "
                                                );


                                            if ($clear) {

                                                mysqli_stmt_bind_param(
                                                    $clear,
                                                    "i",
                                                    $user['user_id']
                                                );

                                                mysqli_stmt_execute(
                                                    $clear
                                                );

                                            }


                                            $error =
                                                "Unable to send verification email.";

                                        }

                                    } else {

                                        $error =
                                            "Unable to save verification code.";

                                    }

                                }

                            }

                        }

                    }

                } else {

                    $error =
                        "Invalid username or password.";

                }

            } else {

                $error =
                    "Invalid admin/officer username or password.";

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
Login - Smart Perlis Tourism Portal
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
            #003B73,
            #0056A6,
            #F4C300
        );

    font-family:Arial,sans-serif;

}


.login-card {

    width:100%;

    max-width:450px;

    border:none;

    border-radius:22px;

    overflow:hidden;

}


.login-header {

    background:#003B73;

    color:white;

    text-align:center;

    padding:35px 25px;

}


.login-icon {

    font-size:60px;

    color:#F4C300;

}


.login-header h2 {

    color:white;

}


.login-header p {

    color:#f1f1f1;

}


.login-body {

    padding:35px;

    background:white;

}


.form-label {

    color:#003B73;

}


.form-control {

    height:50px;

    border-radius:10px;

}


.form-control:focus {

    border-color:#0056A6;

    box-shadow:
        0 0 0 0.2rem
        rgba(0,86,166,0.15);

}


.input-group-text {

    background:#f1f5f9;

    color:#003B73;

}


.input-group .btn-outline-secondary {

    border-color:#ced4da;

    color:#003B73;

}


.input-group .btn-outline-secondary:hover {

    background:#003B73;

    color:white;

}


.login-btn {

    height:52px;

    border:none;

    border-radius:10px;

    font-weight:bold;

    background:#003B73;

}


.login-btn:hover {

    background:#0056A6;

}


.back-link {

    color:#003B73;

    text-decoration:none;

    font-weight:600;

}


.back-link:hover {

    color:#F4C300;

    text-decoration:underline;

}


.alert-danger {

    border-radius:10px;

}


@media (max-width:576px) {

    .login-body {

        padding:25px;

    }

    .login-header {

        padding:30px 20px;

    }

    .login-icon {

        font-size:50px;

    }

}

</style>

</head>


<body>


<div class="container">

<div class="row justify-content-center">

<div class="col-12 col-md-6 col-lg-5">


<div class="card login-card shadow-lg">


<div class="login-header">

<i class="bi bi-shield-lock-fill login-icon"></i>

<h2 class="fw-bold mt-2">

Smart Perlis Tourism Portal

</h2>

<p class="mb-0">

Admin & Officer Login

</p>

</div>


<div class="login-body">


<h4 class="text-center fw-bold mb-4">

Secure Login

</h4>


<p class="text-center text-muted mb-4">

Login requires a verification code
sent to your registered email.

</p>


<?php if ($error !== "") { ?>

<div class="alert alert-danger text-center">

<i class="bi bi-exclamation-circle me-1"></i>

<?php echo $error; ?>

</div>

<?php } ?>


<form
    method="POST"
    autocomplete="off"
>


<div class="mb-3">

<label class="form-label fw-semibold">

Username

</label>


<div class="input-group">

<span class="input-group-text">

<i class="bi bi-person"></i>

</span>


<input
    type="text"
    name="username"
    class="form-control"
    placeholder="Enter username"
    value="<?php echo htmlspecialchars($username ?? '', ENT_QUOTES, 'UTF-8'); ?>"
    required
>

</div>

</div>


<div class="mb-4">

<label class="form-label fw-semibold">

Password

</label>


<div class="input-group">

<span class="input-group-text">

<i class="bi bi-lock"></i>

</span>


<input
    type="password"
    name="password"
    id="password"
    class="form-control"
    placeholder="Enter password"
    required
>


<button
    type="button"
    class="btn btn-outline-secondary"
    onclick="togglePassword()"
>

<i
    class="bi bi-eye"
    id="eyeIcon"
></i>

</button>

</div>

</div>


<button
    type="submit"
    name="login"
    class="btn login-btn text-white w-100"
>

<i class="bi bi-box-arrow-in-right me-1"></i>

Login

</button>


</form>


<div class="text-center mt-4">

<small class="text-muted">

<i class="bi bi-envelope me-1"></i>

A 6-digit OTP will be sent to your
registered email.

</small>

</div>


<div class="text-center mt-4">

<a
    href="index.php"
    class="back-link"
>

<i class="bi bi-arrow-left me-1"></i>

Back to Website

</a>

</div>


</div>

</div>

</div>

</div>

</div>


<script>

function togglePassword() {

    const password =
        document.getElementById("password");

    const icon =
        document.getElementById("eyeIcon");


    if (password.type === "password") {

        password.type = "text";

        icon.classList.remove("bi-eye");

        icon.classList.add("bi-eye-slash");

    }

    else {

        password.type = "password";

        icon.classList.remove("bi-eye-slash");

        icon.classList.add("bi-eye");

    }

}

</script>


</body>

</html>