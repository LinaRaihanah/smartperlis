<?php

session_start();

include("config.php");


// =====================================
// ERROR
// =====================================

$error = "";


// =====================================
// CHECK PENDING LOGIN
// =====================================

if (
    !isset($_SESSION['pending_user_id']) ||
    !isset($_SESSION['pending_role'])
) {

    header("Location: login.php");
    exit();

}


$user_id =
    (int) $_SESSION['pending_user_id'];

$pending_role =
    $_SESSION['pending_role'];


// =====================================
// ONLY ADMIN / OFFICER
// =====================================

if (
    $pending_role !== 'admin' &&
    $pending_role !== 'officer'
) {

    unset(
        $_SESSION['pending_user_id'],
        $_SESSION['pending_username'],
        $_SESSION['pending_email'],
        $_SESSION['pending_role']
    );

    header("Location: login.php");
    exit();

}


// =====================================
// VERIFY OTP
// =====================================

if (isset($_POST['verify'])) {

    $otp =
        trim($_POST['otp'] ?? "");


    // =====================================
    // VALIDATE OTP FORMAT
    // =====================================

    if (
        !preg_match(
            '/^[0-9]{6}$/',
            $otp
        )
    ) {

        $error =
            "Please enter a valid 6-digit verification code.";

    } else {


        // =====================================
        // GET USER
        // =====================================

        $stmt =
            mysqli_prepare(
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


        if (!$stmt) {

            $error =
                "Database error.";

        } else {


            mysqli_stmt_bind_param(
                $stmt,
                "i",
                $user_id
            );


            mysqli_stmt_execute($stmt);


            $result =
                mysqli_stmt_get_result($stmt);


            // =====================================
            // USER NOT FOUND
            // =====================================

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
                // MAKE SURE ROLE MATCHES
                // =====================================

                if (
                    $user['role'] !== $pending_role
                ) {

                    $error =
                        "Account verification failed.";

                }


                // =====================================
                // CHECK OTP EXISTS
                // =====================================

                elseif (
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
                    strtotime(
                        $user['otp_expiry']
                    ) === false ||
                    strtotime(
                        $user['otp_expiry']
                    ) < time()
                ) {

                    $error =
                        "Verification code has expired. Please login again.";

                }


                // =====================================
                // VERIFY HASH
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


                    // =================================
                    // CLEAR OTP
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


                    if (!$clear) {

                        $error =
                            "Unable to complete verification.";

                    } else {


                        mysqli_stmt_bind_param(
                            $clear,
                            "i",
                            $user_id
                        );


                        if (
                            !mysqli_stmt_execute(
                                $clear
                            )
                        ) {

                            $error =
                                "Unable to complete verification.";

                        } else {


                            // =================================
                            // REGENERATE SESSION ID
                            // =================================

                            session_regenerate_id(true);


                            // =================================
                            // CREATE FINAL LOGIN SESSION
                            // =================================

                            $_SESSION['user_id'] =
                                (int) $user['user_id'];

                            $_SESSION['username'] =
                                $user['username'];

                            $_SESSION['email'] =
                                $user['email'];

                            $_SESSION['role'] =
                                $user['role'];

                            $_SESSION['verified'] =
                                true;


                            // =================================
                            // OPTIONAL ROLE SESSION
                            // =================================

                            if (
                                $user['role'] === 'admin'
                            ) {

                                $_SESSION['admin'] =
                                    $user['username'];

                            }

                            elseif (
                                $user['role'] === 'officer'
                            ) {

                                $_SESSION['officer'] =
                                    $user['username'];

                            }


                            // =================================
                            // REMOVE PENDING LOGIN
                            // =================================

                            unset(
                                $_SESSION['pending_user_id'],
                                $_SESSION['pending_username'],
                                $_SESSION['pending_email'],
                                $_SESSION['pending_role']
                            );


                            // =================================
                            // ADMIN
                            // =================================

                            if (
                                $user['role'] === 'admin'
                            ) {

                                header(
                                    "Location: admin/dashboard.php"
                                );

                                exit();

                            }


                            // =================================
                            // OFFICER
                            // =================================

                            elseif (
                                $user['role'] === 'officer'
                            ) {

                                header(
                                    "Location: officer/dashboard.php"
                                );

                                exit();

                            }


                            // =================================
                            // SAFETY FALLBACK
                            // =================================

                            else {

                                session_unset();
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
            #003B73,
            #0056A6,
            #F4C300
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

    background:#003B73;

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


.otp-input:focus {

    border-color:#0056A6;

    box-shadow:
        0 0 0 0.2rem
        rgba(0,86,166,0.15);

}


.verify-btn {

    height:52px;

    border:none;

    border-radius:10px;

    font-weight:bold;

    background:#003B73;

}


.verify-btn:hover {

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


</style>

</head>


<body>


<div class="container">

<div class="row justify-content-center">

<div class="col-12 col-md-6 col-lg-5">


<div class="card verify-card shadow-lg">


<!-- =====================================
     ICON
===================================== -->

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


<!-- =====================================
     ERROR
===================================== -->

<?php if ($error !== "") { ?>

<div class="alert alert-danger text-center">

<i class="bi bi-exclamation-circle me-1"></i>

<?php echo $error; ?>

</div>

<?php } ?>


<!-- =====================================
     EMAIL
===================================== -->

<div class="text-center mb-4">

<small class="text-muted">

<i class="bi bi-envelope me-1"></i>

OTP sent to

</small>

<br>


<strong>

<?php

echo htmlspecialchars(
    $_SESSION['pending_email'] ?? '',
    ENT_QUOTES,
    'UTF-8'
);

?>

</strong>

</div>


<!-- =====================================
     FORM
===================================== -->

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
    id="otp"
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


<!-- =====================================
     BACK
===================================== -->

<div class="text-center mt-4">

<a
    href="login.php"
    class="back-link"
>

<i class="bi bi-arrow-left me-1"></i>

Back to Login

</a>

</div>


</div>

</div>

</div>

</div>


<script>

document
.getElementById("otp")
.addEventListener(
    "input",
    function() {

        this.value =
            this.value
            .replace(/\D/g, "")
            .slice(0, 6);

    }
);

</script>


</body>

</html>