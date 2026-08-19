<?php

include("config.php");


$keyword = isset($_POST['keyword'])
    ? trim($_POST['keyword'])
    : '';


$category = isset($_POST['category'])
    ? trim($_POST['category'])
    : 'All';


$sql = "
    SELECT *
    FROM destinations
    WHERE 1=1
";


if ($keyword !== '') {

    $keyword = mysqli_real_escape_string(
        $conn,
        $keyword
    );


    $sql .= "
        AND (
            destination_name LIKE '%$keyword%'
            OR location LIKE '%$keyword%'
            OR description LIKE '%$keyword%'
        )
    ";

}


if (
    $category !== ''
    &&
    $category !== 'All'
) {

    $category = mysqli_real_escape_string(
        $conn,
        $category
    );


    $sql .= "
        AND category='$category'
    ";

}


$sql .= "
    ORDER BY destination_name ASC
";


$result = mysqli_query($conn, $sql);


if (!$result) {

    echo '

    <div class="col-12">

        <div class="alert alert-danger">

            Database Error:
            ' .
            htmlspecialchars(
                mysqli_error($conn)
            )
            . '

        </div>

    </div>

    ';

    exit();

}


if (mysqli_num_rows($result) === 0) {

    echo '

    <div class="col-12 text-center">

        <div class="alert alert-warning">

            <i class="bi bi-search"></i>

            No destination found.

        </div>

    </div>

    ';

    exit();

}


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
            style="object-fit:cover;"
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

?>