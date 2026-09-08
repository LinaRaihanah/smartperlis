<?php

include("header.php");


// ==========================================
// DELETE
// ==========================================

if (isset($_GET['delete'])) {

    $id = (int)$_GET['delete'];

    mysqli_query(
        $conn,
        "DELETE FROM gallery
         WHERE gallery_id=$id"
    );

    header("Location: gallery.php");

    exit();
}


// ==========================================
// ADD
// ==========================================

if (isset($_POST['add_gallery'])) {

    $destination_id =
        (int)$_POST['destination_id'];

    $image =
        mysqli_real_escape_string(
            $conn,
            $_POST['image']
        );

    $caption =
        mysqli_real_escape_string(
            $conn,
            $_POST['caption']
        );


    mysqli_query(
        $conn,
        "INSERT INTO gallery
        (
            destination_id,
            image,
            caption
        )

        VALUES

        (
            $destination_id,
            '$image',
            '$caption'
        )"
    );


    header("Location: gallery.php");

    exit();
}


// ==========================================
// EDIT
// ==========================================

if (isset($_POST['edit_gallery'])) {

    $gallery_id =
        (int)$_POST['gallery_id'];

    $destination_id =
        (int)$_POST['destination_id'];

    $image =
        mysqli_real_escape_string(
            $conn,
            $_POST['image']
        );

    $caption =
        mysqli_real_escape_string(
            $conn,
            $_POST['caption']
        );


    mysqli_query(
        $conn,
        "UPDATE gallery

         SET
            destination_id = $destination_id,
            image = '$image',
            caption = '$caption'

         WHERE gallery_id = $gallery_id"
    );


    header("Location: gallery.php");

    exit();
}

?>



<!-- ==========================================
     CREAM PAGE BACKGROUND
========================================== -->

<div
    style="
        background:#FFFDF5;
        min-height:100vh;
        margin:-24px;
        padding:24px;
    "
>


<!-- ==========================================
     PAGE HEADER
========================================== -->

<div
    class="d-flex justify-content-between
           align-items-center mb-4"
>

    <div>

        <h2
            class="fw-bold mb-1"
            style="color:#0B2D5C;"
        >

            Gallery

        </h2>

        <p
            class="mb-0"
            style="color:#6c757d;"
        >

            Manage tourism gallery images

        </p>

    </div>


    <button
        class="btn text-white fw-semibold px-4"
        data-bs-toggle="modal"
        data-bs-target="#galleryModal"
        style="
            background:#1565C0;
            border:none;
            border-radius:8px;
            box-shadow:0 3px 8px rgba(21,101,192,0.20);
        "
    >

        <i class="bi bi-plus-lg"></i>

        Add Image

    </button>

</div>



<!-- ==========================================
     GALLERY CARDS
========================================== -->

<div class="row g-4">


<?php

$sql = "

SELECT

    gallery.*,

    destinations.destination_name

FROM gallery

JOIN destinations

ON gallery.destination_id =
   destinations.destination_id

ORDER BY gallery.gallery_id DESC

";


$result =
    mysqli_query(
        $conn,
        $sql
    );


while (
    $row =
    mysqli_fetch_assoc($result)
) {

?>


<div class="col-md-4">


    <div
        class="card h-100 border-0"
        style="
            border-radius:14px;
            overflow:hidden;
            background:white;
            box-shadow:
                0 4px 15px
                rgba(11,45,92,0.08);
            transition:all 0.25s ease;
        "

        onmouseover="
            this.style.transform='translateY(-4px)';
            this.style.boxShadow='0 8px 22px rgba(11,45,92,0.14)';
        "

        onmouseout="
            this.style.transform='translateY(0)';
            this.style.boxShadow='0 4px 15px rgba(11,45,92,0.08)';
        "
    >


        <!-- IMAGE -->

        <div
            style="
                position:relative;
                overflow:hidden;
            "
        >

            <img
                src="../assets/images/<?php
                    echo htmlspecialchars(
                        $row['image']
                    );
                ?>"
                alt="<?php
                    echo htmlspecialchars(
                        $row['caption']
                    );
                ?>"
                style="
                    height:220px;
                    width:100%;
                    object-fit:cover;
                    display:block;
                "
            >

            <!-- IMAGE LABEL -->

            <div
                style="
                    position:absolute;
                    bottom:12px;
                    left:12px;
                    background:rgba(11,45,92,0.90);
                    color:white;
                    padding:6px 11px;
                    border-radius:6px;
                    font-size:12px;
                    font-weight:600;
                "
            >

                <i class="bi bi-geo-alt-fill"></i>

                <?php

                echo htmlspecialchars(
                    $row['destination_name']
                );

                ?>

            </div>

        </div>



        <div class="card-body p-4">


            <!-- DESTINATION -->

            <h5
                class="fw-bold mb-2"
                style="color:#0B2D5C;"
            >

                <?php

                echo htmlspecialchars(
                    $row['destination_name']
                );

                ?>

            </h5>


            <!-- CAPTION -->

            <p
                class="mb-4"
                style="
                    color:#6c757d;
                    font-size:14px;
                    line-height:1.6;
                "
            >

                <?php

                echo htmlspecialchars(
                    $row['caption']
                );

                ?>

            </p>



            <!-- BUTTONS -->

            <div
                class="d-flex gap-2"
            >


                <!-- EDIT -->

                <button
                    type="button"
                    class="btn btn-sm fw-semibold px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#editModal<?php
                        echo $row['gallery_id'];
                    ?>"
                    style="
                        background:#FFC107;
                        color:#0B2D5C;
                        border:none;
                        border-radius:7px;
                    "
                >

                    <i class="bi bi-pencil-square"></i>

                    Edit

                </button>



                <!-- DELETE -->

                <a
                    href="gallery.php?delete=<?php
                        echo $row['gallery_id'];
                    ?>"
                    class="btn btn-danger btn-sm fw-semibold px-3"
                    onclick="
                        return confirm(
                            'Delete this image?'
                        )
                    "
                    style="
                        border-radius:7px;
                    "
                >

                    <i class="bi bi-trash"></i>

                    Delete

                </a>


            </div>


        </div>

    </div>


</div>



<!-- ==========================================
     EDIT MODAL
========================================== -->

<div
    class="modal fade"
    id="editModal<?php
        echo $row['gallery_id'];
    ?>"
    tabindex="-1"
>

    <div class="modal-dialog">

        <div
            class="modal-content"
            style="
                border-radius:14px;
                border:none;
                overflow:hidden;
            "
        >


            <!-- MODAL HEADER -->

            <div
                class="modal-header"
                style="
                    background:#0B2D5C;
                    color:white;
                "
            >

                <h5 class="modal-title">

                    <i class="bi bi-pencil-square"></i>

                    Edit Gallery Image

                </h5>


                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                ></button>

            </div>



            <!-- FORM -->

            <form method="POST">


                <div class="modal-body">


                    <!-- HIDDEN ID -->

                    <input
                        type="hidden"
                        name="gallery_id"
                        value="<?php
                            echo $row['gallery_id'];
                        ?>"
                    >



                    <!-- DESTINATION -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-semibold"
                            style="color:#0B2D5C;"
                        >

                            Destination

                        </label>


                        <select
                            name="destination_id"
                            class="form-select"
                            required
                        >


                        <?php

                        $destination_result =
                            mysqli_query(
                                $conn,
                                "SELECT *
                                 FROM destinations
                                 ORDER BY destination_name"
                            );


                        while (
                            $destination =
                            mysqli_fetch_assoc(
                                $destination_result
                            )
                        ) {

                        ?>

                            <option
                                value="<?php
                                    echo $destination[
                                        'destination_id'
                                    ];
                                ?>"
                                <?php

                                if (
                                    $destination[
                                        'destination_id'
                                    ]
                                    ==
                                    $row[
                                        'destination_id'
                                    ]
                                ) {

                                    echo "selected";

                                }

                                ?>
                            >

                                <?php

                                echo htmlspecialchars(
                                    $destination[
                                        'destination_name'
                                    ]
                                );

                                ?>

                            </option>


                        <?php

                        }

                        ?>


                        </select>

                    </div>



                    <!-- IMAGE FILENAME -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-semibold"
                            style="color:#0B2D5C;"
                        >

                            Image Filename

                        </label>


                        <input
                            type="text"
                            name="image"
                            class="form-control"
                            value="<?php
                                echo htmlspecialchars(
                                    $row['image']
                                );
                            ?>"
                            required
                        >

                    </div>



                    <!-- CAPTION -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-semibold"
                            style="color:#0B2D5C;"
                        >

                            Caption

                        </label>


                        <input
                            type="text"
                            name="caption"
                            class="form-control"
                            value="<?php
                                echo htmlspecialchars(
                                    $row['caption']
                                );
                            ?>"
                            required
                        >

                    </div>


                </div>



                <!-- FOOTER -->

                <div
                    class="modal-footer"
                >

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >

                        Cancel

                    </button>


                    <button
                        type="submit"
                        name="edit_gallery"
                        class="btn fw-semibold"
                        style="
                            background:#FFC107;
                            color:#0B2D5C;
                            border:none;
                        "
                    >

                        <i class="bi bi-check-lg"></i>

                        Save Changes

                    </button>

                </div>


            </form>


        </div>

    </div>

</div>


<?php

}

?>

</div>



<!-- ==========================================
     ADD GALLERY MODAL
========================================== -->

<div
    class="modal fade"
    id="galleryModal"
    tabindex="-1"
>

    <div class="modal-dialog">

        <div
            class="modal-content"
            style="
                border-radius:14px;
                border:none;
                overflow:hidden;
            "
        >


            <!-- HEADER -->

            <div
                class="modal-header"
                style="
                    background:#0B2D5C;
                    color:white;
                "
            >

                <h5 class="modal-title">

                    <i class="bi bi-images"></i>

                    Add Gallery Image

                </h5>


                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                ></button>

            </div>



            <!-- FORM -->

            <form method="POST">


                <div class="modal-body">


                    <!-- DESTINATION -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-semibold"
                            style="color:#0B2D5C;"
                        >

                            Destination

                        </label>


                        <select
                            name="destination_id"
                            class="form-select"
                            required
                        >


                        <?php

                        $result =
                            mysqli_query(
                                $conn,
                                "SELECT *
                                 FROM destinations
                                 ORDER BY destination_name"
                            );


                        while (
                            $destination =
                            mysqli_fetch_assoc(
                                $result
                            )
                        ) {

                        ?>

                            <option
                                value="<?php
                                    echo $destination[
                                        'destination_id'
                                    ];
                                ?>"
                            >

                                <?php

                                echo htmlspecialchars(
                                    $destination[
                                        'destination_name'
                                    ]
                                );

                                ?>

                            </option>


                        <?php

                        }

                        ?>


                        </select>

                    </div>



                    <!-- IMAGE -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-semibold"
                            style="color:#0B2D5C;"
                        >

                            Image Filename

                        </label>


                        <input
                            type="text"
                            name="image"
                            class="form-control"
                            placeholder="gua1.jpg"
                            required
                        >

                    </div>



                    <!-- CAPTION -->

                    <div class="mb-3">

                        <label
                            class="form-label fw-semibold"
                            style="color:#0B2D5C;"
                        >

                            Caption

                        </label>


                        <input
                            type="text"
                            name="caption"
                            class="form-control"
                            placeholder="Beautiful view of Perlis"
                            required
                        >

                    </div>


                </div>



                <!-- FOOTER -->

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
                        name="add_gallery"
                        class="btn text-white fw-semibold"
                        style="
                            background:#1565C0;
                            border:none;
                        "
                    >

                        <i class="bi bi-plus-lg"></i>

                        Add Image

                    </button>


                </div>


            </form>


        </div>

    </div>

</div>


</div>
<!-- END CREAM PAGE BACKGROUND -->



<?php

include("footer.php");

?>