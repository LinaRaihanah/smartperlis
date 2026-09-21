<?php
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Negeri Perlis</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #ffffff;
            color: #555;
            font-family: Arial, Helvetica, sans-serif;
        }

        .perlis-page {
            width: 100%;
            padding: 18px 30px 30px;
        }

        .page-title {
            text-align: center;
            margin: 0 0 15px;
            font-family: 'Merienda', 'Comic Sans MS', cursive;
            font-size: 50px;
            font-weight: 700;
            color: #913c94;
            text-shadow: 2px 3px 4px rgba(0, 0, 0, 0.18);
        }

        .symbols {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 55px;
            margin-bottom: 45px;
        }

        .flag-perlis {
            width: 345px;
            height: 208px;
            object-fit: fill;
        }

        .logo-perlis {
            width: 245px;
            height: 220px;
            object-fit: contain;
        }

        .content {
            max-width: 1420px;
            margin: 0 auto;
        }

        .content p {
            font-size: 30px;
            line-height: 1.55;
            margin: 0 0 18px;
            text-align: left;
            color: #555;
        }

        .share-section {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 10px;
            padding-left: 4px;
        }

        .share-button,
        .facebook-button {
            border: 0;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .share-button {
            background: transparent;
            color: #2478e5;
            font-size: 35px;
            cursor: pointer;
            padding: 0;
        }

        .facebook-button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #2478e5;
            color: white;
            font-size: 28px;
        }

        .facebook-button:hover {
            background: #145db8;
            color: white;
        }

        @media (max-width: 900px) {

            .page-title {
                font-size: 38px;
            }

            .symbols {
                gap: 25px;
            }

            .flag-perlis {
                width: 280px;
                height: 168px;
            }

            .logo-perlis {
                width: 190px;
                height: 180px;
            }

            .content p {
                font-size: 22px;
            }
        }

        @media (max-width: 600px) {

            .perlis-page {
                padding: 15px 18px 25px;
            }

            .page-title {
                font-size: 30px;
            }

            .symbols {
                flex-direction: column;
                gap: 15px;
                margin-bottom: 30px;
            }

            .flag-perlis {
                width: 260px;
                height: auto;
            }

            .logo-perlis {
                width: 190px;
                height: auto;
            }

            .content p {
                font-size: 18px;
                line-height: 1.6;
            }
        }

    </style>
</head>

<body>

<div class="perlis-page">

    <!-- TAJUK -->
    <h1 class="page-title">
        NEGERI PERLIS
    </h1>

    <!-- BENDERA + LAMBANG PERLIS -->
    <div class="symbols">

        <img
            src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Flag_of_Perlis.svg"
            alt="Bendera Perlis"
            class="flag-perlis"
        >

        <img
            src="https://commons.wikimedia.org/wiki/Special:Redirect/file/Coat_of_arms_of_Perlis.svg"
            alt="Lambang Perlis"
            class="logo-perlis"
        >

    </div>

    <!-- PENERANGAN -->
    <div class="content">

        <p>
            Perlis (Jawi: ڨرليس, Bahasa Thai: ปะลิส Pālit, ปะลิส Palit atau
            เปอร์ลิส Perlis) merupakan sebuah negeri yang terletak di utara
            Semenanjung Malaysia dan bersempadan dengan Wilayah Satun dan
            Songkhla, Thailand di sebelah utara, dan Kedah di sebelah selatan.
            Perlis menjadi sebuah negeri yang berdaulat setelah kerajaan Siam
            melantik Raja Syed Hussain Jamalullail sebagai Raja Perlis.
        </p>

        <p>
            Perlis mempunyai keluasan sebanyak 821 kilometer persegi
            menjadikannya sebagai negeri terkecil di Malaysia. Pada tahun 2020,
            jumlah penduduknya dianggarkan seramai 284,885 orang dengan
            majoritinya merupakan bumiputera iaitu 88.8 peratus dari jumlah
            penduduk.
        </p>

        <!-- SHARE -->
        <div class="share-section">

            <button
                type="button"
                class="share-button"
                onclick="sharePage()"
                title="Kongsi"
            >
                <i class="bi bi-share-fill"></i>
            </button>

            <a
                class="facebook-button"
                href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                target="_blank"
                rel="noopener noreferrer"
                title="Kongsi ke Facebook"
            >
                <i class="bi bi-facebook"></i>
            </a>

        </div>

    </div>

</div>

<script>

function sharePage() {

    if (navigator.share) {

        navigator.share({
            title: 'Negeri Perlis',
            text: 'Kenali Negeri Perlis',
            url: window.location.href
        });

    } else {

        navigator.clipboard.writeText(window.location.href);

        alert('Link halaman telah disalin.');

    }

}

</script>

</body>
</html>
