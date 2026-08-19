<?php

include("config.php");


if (!isset($_GET['id'])) {

    header(
        "Location: /smartperlis/destinations.php"
    );

    exit();

}


$id = filter_input(
    INPUT_GET,
    'id',
    FILTER_VALIDATE_INT
);


if (!$id) {

    header(
        "Location: /smartperlis/destinations.php"
    );

    exit();

}


$stmt = mysqli_prepare(
    $conn,
    "SELECT * FROM destinations
     WHERE destination_id = ?"
);


mysqli_stmt_bind_param(
    $stmt,
    "i",
    $id
);


mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);


$destination =
    mysqli_fetch_assoc($result);


if (!$destination) {

    header(
        "Location: /smartperlis/destinations.php"
    );

    exit();

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>

        <?php
        echo htmlspecialchars(
            $destination['destination_name']
        );
        ?>

        - Smart Perlis Tourism Portal

    </title>


    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">


    <link
        rel="stylesheet"
        href="assets/css/style.css">


    <style>

        .detail-image {

            width: 100%;

            height: 450px;

            object-fit: cover;

            border-radius: 15px;

        }


        .info-card {

            border: none;

            border-radius: 15px;

        }


        .map-container iframe {

            width: 100%;

            height: 450px;

            border: 0;

            border-radius: 15px;

        }

    </style>

</head>


<body>


<?php include("navbar.php"); ?>


<!-- HEADER -->

<section class="bg-success text-white text-center py-5">

    <div class="container">

        <h1 class="fw-bold">

            <?php
            echo htmlspecialchars(
                $destination['destination_name']
            );
            ?>

        </h1>


        <p class="mb-0">

            Discover the beauty of Perlis

        </p>

    </div>

</section>


<!-- DETAILS -->

<div class="container mt-5">


    <div class="row g-5">


        <!-- IMAGE -->

        <div class="col-lg-6">

            <img
                src="assets/images/<?php
                echo htmlspecialchars(
                    $destination['image']
                );
                ?>"
                class="detail-image shadow"
                alt="<?php
                echo htmlspecialchars(
                    $destination['destination_name']
                );
                ?>"
            >

        </div>


        <!-- INFORMATION -->

        <div class="col-lg-6">

            <div class="card info-card shadow p-4 h-100">


                <h2 class="fw-bold">

                    <?php
                    echo htmlspecialchars(
                        $destination['destination_name']
                    );
                    ?>

                </h2>


                <hr>


                <p>

                    <i
                        class="bi bi-geo-alt-fill text-success">
                    </i>

                    <strong>Location:</strong>

                    <?php
                    echo htmlspecialchars(
                        $destination['location']
                    );
                    ?>

                </p>


                <p>

                    <i
                        class="bi bi-tag-fill text-success">
                    </i>

                    <strong>Category:</strong>

                    <span class="badge bg-success">

                        <?php
                        echo htmlspecialchars(
                            $destination['category']
                        );
                        ?>

                    </span>

                </p>


                <h5 class="mt-4">

                    About This Destination

                </h5>


                <p class="text-muted">

                    <?php
                    echo nl2br(
                        htmlspecialchars(
                            $destination['description']
                        )
                    );
                    ?>

                </p>


                <div class="mt-auto">


                    <a
                        href="destinations.php"
                        class="btn btn-secondary">

                        <i
                            class="bi bi-arrow-left">
                        </i>

                        Back to Destinations

                    </a>


                    <a
                        href="#map"
                        class="btn btn-success">

                        <i
                            class="bi bi-map">
                        </i>

                        View Map

                    </a>


                </div>

            </div>

        </div>

    </div>


</div>


<!-- MAP -->

<div
    class="container mt-5 mb-5"
    id="map">

    <h2 class="text-center mb-4">

        Location

    </h2>


    <div class="map-container shadow">

        <iframe
            src="https://www.google.com/maps?q=<?php
            echo urlencode(
                $destination['location']
                . ', Perlis, Malaysia'
            );
            ?>&output=embed"
            allowfullscreen>
        </iframe>

    </div>

</div>


<?php include("footer.php"); ?>


</body>

</html>