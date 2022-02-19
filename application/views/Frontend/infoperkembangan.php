<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>Deteksi Dini Penyimpangan Perkembangan pada Anak</title>
    <style>
    .konsultasi {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .konsultasi h4 {
        margin-top: 200px;
    }
    </style>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container"><a class="navbar-brand text-primary" href="#">Sistem Pakar KPSP</a><button
                class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="<?php echo base_url("Frontend/index") ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link active text-primary"
                            href=<?php echo base_url("Frontend/infoperkembangan") ?>>Perkembangan Anak</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo base_url("Frontend/konsultasi1") ?>">Konsultasi</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("Frontend/Login")?>">
                            <button type="button" class="btn rounded btn-sm btn-primary">Login</button> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Panel -->
    <div class="container-fluid">
        <div class="row" style="background-color: #E2F1FF;">
            <div class="container">

                <h5 class="mx-5" style="padding:60px; margin-top:-150px;">Home</h5>
                <br>
                <br>
                <br>
                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- Akhir Panel -->

    <!-- Konsultasi Sekarang -->
    <div class=" container">
        <div class="row konsultasi text-center">
            <div class="col-6"><img src="<?php echo base_url() ?>assets/frontend/gambar/anak.png" alt="Konsultasi"
                    class="img-fluid" /></div>
            <div class="col-6">
                <h4>Perkembangan Anak</h4>
                <p>Perkembangan adalah penambahan struktur dan fungsi tubuh yang lebih
                    kompleks. Perkembangan ialah hasil interaksi antara pematangan susunan saraf
                    pusat dan organ-organ yang dipengaruhinya, misalnya perkembangan kemampuan
                    bicara, emosional dan sosial. Semua fungsi tersebut memainkan peran penting
                    dalam kehidupan manusia. </p>
            </div>
        </div>
    </div>
    <!-- Akhir Konsultasi Sekarang < !-- footer -->
    <footer class="bg-primary text-white text-center footer">
        <p>Created With Love By <a href="https://www.instagram.com/indahqurrothul__/"
                class="text-white fw-bold">IndahQurrothul</a></p>
    </footer>
    <!-- Akhir Footer -->
</body>

</html>