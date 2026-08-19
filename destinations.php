<?php

include("config.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Destinations - Smart Perlis Tourism Portal
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

        /* BODY PAGE */

        body {

            background: #fefbea;

        }


        /* Navbar gradient kuning dan biru */
        .navbar {

            background:
                linear-gradient(
                    90deg,
                    #FFD700 0%,
                    #F5C400 40%,
                    #0057B8 100%
                ) !important;

        }


        .destination-card .card {

            transition: 0.3s;

            border: none;

            overflow: hidden;

        }


        .destination-card .card:hover {

            transform: translateY(-8px);

            box-shadow:
                0 15px 30px rgba(0,0,0,0.15) !important;

        }


        .destination-card img {

            object-fit: cover;

            transition: 0.3s;

        }


        .destination-card .card:hover img {

            transform: scale(1.05);

        }


        .hero-destination {

            background-image:
                url('assets/images/header.jpg');

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            color: white;

            min-height: 400px;

            padding: 80px 20px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: center;

        }

    </style>

</head>


<body>


<?php include("navbar.php"); ?>


<!-- HERO -->

<section class="hero-destination text-center">

    <div class="container">

        <h1 class="display-4 fw-bold">

            Explore Perlis Destinations

        </h1>


        <p class="lead">

            Discover beautiful places, food and culture of Perlis

        </p>

    </div>

</section>


<!-- SEARCH -->

<div class="container mt-5">

    <div class="card shadow-sm p-4">

        <div class="row g-3">


            <div class="col-md-7">

                <label class="form-label fw-bold">

                    Search Destination

                </label>

                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-search"></i>

                    </span>


                    <input
                        type="text"
                        id="keyword"
                        class="form-control"
                        placeholder="Search destination, location..."
                    >

                </div>

            </div>


            <div class="col-md-5">

                <label class="form-label fw-bold">

                    Category

                </label>


                <select
                    id="category"
                    class="form-select">

                    <option value="All">

                        All Categories

                    </option>


                    <option value="Nature">

                        Nature

                    </option>


                    <option value="Culture">

                        Culture

                    </option>


                    <option value="Food">

                        Food

                    </option>


                    <option value="Adventure">

                        Adventure

                    </option>


                    <option value="Lake">

                        Lake

                    </option>

                </select>

            </div>

        </div>

    </div>

</div>


<!-- DESTINATION -->

<div class="container mt-5 mb-5">

    <div
        class="row"
        id="destinationList">


<?php

$sql = "
    SELECT *
    FROM destinations
    ORDER BY destination_name ASC
";


$result = mysqli_query($conn, $sql);


if (!$result) {

    echo '

    <div class="col-12">

        <div class="alert alert-danger">

            Database Error:

            ' . htmlspecialchars(mysqli_error($conn)) . '

        </div>

    </div>

    ';

}


elseif (mysqli_num_rows($result) == 0) {

    echo '

    <div class="col-12 text-center">

        <div class="alert alert-warning">

            No destinations available.

        </div>

    </div>

    ';

}


else {


    while ($row = mysqli_fetch_assoc($result)) {

?>


        <div class="col-md-4 mb-4 destination-card">

            <div class="card shadow h-100">


                <img
                    src="assets/images/<?php
                    echo htmlspecialchars($row['image']);
                    ?>"
                    class="card-img-top"
                    height="230"
                    alt="<?php
                    echo htmlspecialchars(
                        $row['destination_name']
                    );
                    ?>"
                >


                <div class="card-body d-flex flex-column">


                    <h4 class="fw-bold">

                        <?php
                        echo htmlspecialchars(
                            $row['destination_name']
                        );
                        ?>

                    </h4>


                    <p class="text-muted">

                        <i
                            class="bi bi-geo-alt-fill text-success">
                        </i>

                        <?php
                        echo htmlspecialchars(
                            $row['location']
                        );
                        ?>

                    </p>


                    <p>

                        <?php
                        echo htmlspecialchars(
                            $row['description']
                        );
                        ?>

                    </p>


                    <div>

                        <span class="badge bg-success">

                            <?php
                            echo htmlspecialchars(
                                $row['category']
                            );
                            ?>

                        </span>

                    </div>


                    <div class="mt-auto pt-3">


                        <a
                            href="destination-details.php?id=<?php
                            echo (int)$row['destination_id'];
                            ?>"
                            class="btn btn-success w-100">

                            <i class="bi bi-eye"></i>

                            View Details

                        </a>


                    </div>


                </div>

            </div>

        </div>


<?php

    }

}

?>


    </div>

</div>


<?php include("footer.php"); ?>


<script>

function loadDestination() {

    let keyword =
        document.getElementById("keyword").value;

    let category =
        document.getElementById("category").value;


    let xhr =
        new XMLHttpRequest();


    xhr.open(
        "POST",
        "search_destination.php",
        true
    );


    xhr.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );


    xhr.onload = function() {

        if (xhr.status === 200) {

            document.getElementById(
                "destinationList"
            ).innerHTML = xhr.responseText;

        }

    };


    xhr.send(
        "keyword="
        + encodeURIComponent(keyword)
        + "&category="
        + encodeURIComponent(category)
    );

}


document
    .getElementById("keyword")
    .addEventListener(
        "keyup",
        loadDestination
    );


document
    .getElementById("category")
    .addEventListener(
        "change",
        loadDestination
    );

</script>


</body>

</html>