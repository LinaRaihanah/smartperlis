<?php

// =====================================
// SMART PERLIS
// ADMIN AUTHENTICATION
// =====================================

session_start();


// =====================================
// CHECK LOGIN
// =====================================

if (!isset($_SESSION['user_id'])) {

    header("Location: ../login.php");

    exit();

}


// =====================================
// CHECK ROLE
// =====================================

if (
    !isset($_SESSION['role']) ||
    $_SESSION['role'] !== 'admin'
) {

    echo "
    <!DOCTYPE html>

    <html lang='en'>

    <head>

        <meta charset='UTF-8'>

        <meta
            name='viewport'
            content='width=device-width, initial-scale=1.0'
        >

        <title>Access Denied</title>

        <link
            href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
            rel='stylesheet'
        >

    </head>

    <body class='bg-light'>

        <div class='container'>

            <div
                class='row justify-content-center align-items-center'
                style='min-height:100vh;'
            >

                <div class='col-md-6'>

                    <div class='card shadow border-0'>

                        <div class='card-body text-center p-5'>

                            <div class='mb-3'>

                                <i
                                    class='bi bi-shield-x text-danger'
                                    style='font-size:60px;'
                                ></i>

                            </div>

                            <h3 class='fw-bold'>
                                Access Denied
                            </h3>

                            <p class='text-muted'>
                                This page is available for administrators only.
                            </p>

                            <a
                                href='../index.php'
                                class='btn btn-primary'
                            >
                                Back to Website
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

    </html>
    ";

    exit();

}


// =====================================
// ADMIN VERIFIED
// =====================================

if (
    !isset($_SESSION['verified']) ||
    $_SESSION['verified'] !== true
) {

    header("Location: ../login.php");

    exit();

}

?>