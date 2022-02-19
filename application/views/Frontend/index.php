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
    <link rel="stylesheet" href="<?php echo base_url ("assets/frontend/style.css")?>" />
    <title>Deteksi Dini Penyimpangan Perkembangan pada Anak</title>
    <style>
    .banner {
        height: 80vh;
        background: url("<?php echo base_url() ?>assets/frontend/gambar/banner.png");
        background-size: cover;
        background-position: center;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand text-primary" href=" #">Sistem Pakar KPSP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page"
                            href=<?php echo base_url("Frontend/index") ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href=<?php echo base_url("Frontend/infoperkembangan") ?>>Perkembangan
                            Anak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href=<?php echo base_url("Frontend/konsultasi1") ?>>Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("Frontend/Login")?>">
                            <button type="button" class="btn rounded btn-sm btn-primary">Login</button> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Banner -->

    <div class="container-fluid banner">
        <div class="box">
            <div class=" container banner-content">
                <div class="text-center">
                    <h5>Deteksi Dini Penyimpangan</h5>
                    <h5>Perkembangan Anak</h5>
                    <h6 style=" color: #3c73a8;">Usia 0 - 24 Bulan</h6>
                </div>
            </div>
        </div>
    </div>
    < <!-- Akhir Banner -->

        <!-- Fitur -->
        <section id=" fitur">
            <div class="container fitur">
                <div class="row justify-content-center fs-6">
                    <div class="col">
                        <h4>Konsultasi</h4>
                        <p>Periksa perkembangan anak secara berkala pada setiap
                            kesempatan agar dapat mendeteksi secara dini jika anak mengalami penyimpangan
                            perkembangan serta dapat segera diobati</p>
                        <a href="<?php echo base_url("Frontend/konsultasi1")?>"><button type="button"
                                class="btn btn-outline-primary">Baca Selengkapnya</button></a>
                    </div>

                    <div class="col">
                        <h4>Perkembangan Anak</h4>
                        <p>Perkembangan adalah penambahan struktur dan fungsi tubuh yang lebih
                            kompleks. misalnya perkembangan kemampuan
                            bicara, emosional dan sosial </p>
                        <a href="<?php echo base_url("Frontend/infoperkembangan")?>"><button type="button"
                                class="btn btn-outline-primary">Baca Selengkapnya</button></a>
                    </div>
                    <div class="col">
                        <h4>Tips</h4>
                        <p>Tips agar anak tidak mengalami penyimpangan pada perkembangannya</p>
                        <a href="<?php echo base_url("Frontend/tips")?>"><button type="button"
                                class="btn btn-outline-primary">Baca Selengkapnya</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Fitur -->

        <!-- Konsultasi Sekarang -->
        <div class="container">
            <div class="row konsultasi text-center">
                <div class="col-6">
                    <img src="<?php echo base_url() ?>assets/frontend/gambar/konsultasi.png" alt="Konsultasi"
                        class="img-fluid" />
                </div>
                <div class="col-6">
                    <h4>Penyimpangan Perkembangan pada Anak</h4>
                    <p>
                        Gangguan perkembangan anak ialah keadaan dimana proses perkembangan
                        anak yang tidak wajar atau terganggu/terlambat, biasa terjadi pada tahap pasca lahir
                        sejak umur 0-6 tahun
                    </p>
                    <a href="<?php echo base_url("Frontend/konsultasi1")?>"><button type="button"
                            class="btn btn-primary">Konsultasi Sekarang</button></a>
                </div>
            </div>
        </div>

        <!-- Akhir Konsultasi Sekarang -->

        <!-- Kata-kata -->
        <div class="container">
            <div class="row justify-content-center quote">
                <div class="col-8">
                    <h5>“In the garden of humanity every baby is a fresh new flower.” — Debasish Mridha
                    </h5>

                </div>
            </div>
        </div>

        <!-- Akhir Kata-kata -->

        <!-- footer -->
        <footer class="bg-primary text-white text-center footer">
            <p>Created With Love By <a href="https://www.instagram.com/indahqurrothul__/"
                    class="text-white fw-bold">IndahQurrothul</a></p>
        </footer>
        <!-- Akhir Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>