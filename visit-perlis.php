<?php
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Logo Visit Perlis 2024 - 2026</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
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

        .visit-page {
            width: 100%;
            padding: 8px 30px 25px;
        }

        .page-title {
            text-align: center;
            margin: 0 0 10px;
            font-family: 'Comic Sans MS', 'Trebuchet MS', cursive;
            font-size: 36px;
            font-weight: 700;
            color: #8d3b92;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.15);
        }

        .main-content {
            max-width: 1150px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 48% 52%;
            align-items: center;
        }

        .logo-column {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 55px;
        }

        .visit-logo {
            width: 500px;
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        .info-column {
            padding-left: 25px;
        }

        .info-item {
            margin-bottom: 34px;
        }

        .info-item h2 {
            margin: 0 0 7px;
            font-size: 22px;
            font-style: italic;
            font-weight: 700;
            color: #555;
        }

        .info-item p {
            margin: 0;
            font-size: 21px;
            line-height: 1.5;
            text-align: justify;
            color: #555;
        }

        .share-section {
            display: flex;
            align-items: center;
            gap: 13px;
            margin-top: -3px;
        }

        .share-button {
            border: 0;
            background: transparent;
            color: #2478e5;
            font-size: 31px;
            padding: 0;
            cursor: pointer;
        }

        .facebook-button {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2478e5;
            color: white;
            text-decoration: none;
            font-size: 21px;
        }

        .facebook-button:hover {
            background: #145db8;
            color: white;
        }

        @media (max-width: 900px) {

            .main-content {
                grid-template-columns: 1fr;
            }

            .logo-column {
                padding-top: 15px;
                margin-bottom: 25px;
            }

            .info-column {
                padding-left: 0;
            }

            .visit-logo {
                width: 480px;
            }

            .page-title {
                font-size: 30px;
            }

            .info-item p {
                font-size: 19px;
            }
        }

        @media (max-width: 600px) {

            .visit-page {
                padding: 10px 18px 25px;
            }

            .page-title {
                font-size: 25px;
            }

            .visit-logo {
                width: 100%;
            }

            .info-item h2 {
                font-size: 19px;
            }

            .info-item p {
                font-size: 17px;
            }
        }

    </style>
</head>

<body>

<div class="visit-page">

    <h1 class="page-title">
        LOGO VISIT PERLIS 2024 - 2026
    </h1>

    <div class="main-content">

        <!-- LOGO VISIT PERLIS -->
        <div class="logo-column">
            <img
                src="visit-perlis-logo.png"
                alt="Logo Visit Perlis 2024 - 2026"
                class="visit-logo"
            >
        </div>

        <!-- PENERANGAN LOGO -->
        <div class="info-column">

            <div class="info-item">
                <h2>BUKIT CHABANG</h2>
                <p>
                    Antara ikon geografi utama bagi negeri Perlis.
                </p>
            </div>

            <div class="info-item">
                <h2>IKAN DAN BUAH HARUMANIS</h2>
                <p>
                    Menggambarkan dua jenis makanan yang popular bagi Negeri
                    Perlis iaitu Ikan Bakar Kuala Perlis dan buah Harumanis.
                    Ikon ikan ini turut menggambarkan aktiviti perikanan yang
                    merupakan antara sumber agro utama Perlis.
                </p>
            </div>

            <div class="info-item">
                <h2>BUNGA PADI</h2>
                <p>
                    Penanaman padi merupakan antara aktiviti pertanian utama
                    bagi negeri Perlis.
                </p>
            </div>

            <div class="info-item">
                <h2>KEPELBAGAIAN WARNA</h2>
                <p>
                    Pelbagai warna digunakan dalam reka bentuk logo ini bagi
                    menggambarkan kepelbagaian serta keunikan produk-produk
                    pelancongan negeri Perlis.
                </p>
            </div>

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

</div>

<script>

function sharePage() {

    if (navigator.share) {

        navigator.share({
            title: 'Logo Visit Perlis 2024 - 2026',
            text: 'Logo Visit Perlis 2024 - 2026',
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
