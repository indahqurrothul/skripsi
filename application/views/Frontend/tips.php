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
    .footer {
        margin-top: 300px;
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
                    <li class="nav-item"><a class="nav-link"
                            href=<?php echo base_url("Frontend/infoperkembangan") ?>>Perkembangan Anak</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo base_url("Frontend/konsultasi1") ?>">Konsultasi</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("Login")?>">
                            <button type="button" class="btn rounded btn-sm btn-primary">Login</button> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Panel -->
    <div class="container-fluid" style=" margin-top:80px;">
        <div class="row" style="background-color: #E2F1FF; height:90px;">
        <div class="container">
        <h5 style="margin-bottom: -10px; margin-left: 105px; margin-top: 15px;">Konsultasi</h5>
        <hr style="width: 18%; margin-left: 105px;">       
        <h6 style="margin-top: -10px; margin-left: 105px; color:steelblue;">Home/Tips Perkembangan Anak</h6>
        </div>
        </div>
    </div>
    <!-- Akhir Panel -->
    <!-- Panel -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 info-panel">
                <div class="row text-center mt-3 text-white fw-bold">
                    <div class="col-lg">
                        <p>TIPS TUMBUH KEMBANG ANAK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Akhir Panel -->

    <!-- Teks -->
    <div class="container">
        <div class="row justify-content-center info-teks">
            <div class="col-lg-10">
                <h6>
                1. Lingkungan Memengaruhi Tumbuh Kembang Anak, Lingkungan anak memengaruhi tumbuh dan kembang anak. Lingkungan yang baik tentu membuat anak memiliki hubungan yang positif dengan orang-orang di sekitarnya. Namun, hubungan yang positif dengan orangtua dan keluarga menjadi hal utama yang perlu dilakukan untuk membantu pertumbuhan dan perkembangan anak berjalan baik.
                </h6>
                <p></p>
                <h6>
                2. Lakukan Permainan yang Menyenangkan,  Hal-hal yang menyenangkan lebih mudah diterima oleh anak sehingga berikan anak permainan yang menyenangkan yang membuat ia berkesempatan untuk bereksplorasi, memecahkan masalah, dan belajar dari kondisi yang dihadapi. Ketika anak mengalami kesulitan, jangan ragu untuk membantu dan mendukung anak. Namun, jangan lupa untuk tetap biarkan anak menemukan cara sendiri untuk mengatasi masalahnya. 
                </h6>
                <p></p>
                <h6>
                3. Luangkan Waktu Bersama Anak, Orangtua sebaiknya luangkan waktu untuk berinteraksi dengan anak. Interaksi yang baik membantu anak meningkatkan kemampuan bersosialisasi, berkomunikasi, memecahkan masalah. Dengan meluangkan waktu bersama anak, orangtua juga lebih menjadi dekat dengan anak. Dengan begitu, orangtua mudah menemukan perubahan atau adanya gejala dari gangguan kesehatan pada anak.
                </h6>
                <p></p>
                <h6>
                4. Penuhi Kebutuhan Gizi, Pemenuhan kebutuhan gizi pada anak memengaruhi tumbuh kembang anak. Tidak ada salahnya untuk memenuhi kebutuhan gizi dan nutrisi sejak anak mulai mengonsumsi makanan pendamping ASI. Tiap anak mulai diberikan MPASI sejak menginjak usia 6 bulan dengan tekstur makanan yang lembut. Sebaiknya jangan lupa berikan makanan yang menunjang kebutuhan vitamin serta nutrisi yang dibutuhkan oleh anak pada masa tumbuh kembang. 
                </h6>
            </div>
        </div>
    </div>

    <!-- Akhir Teks -->

    <!-- footer -->
    <footer class="bg-primary text-white text-center footer">
        <p>Created With Love By <a href="https://www.instagram.com/indahqurrothul__/"
                class="text-white fw-bold">IndahQurrothul</a></p>
    </footer>
    <!-- Akhir Footer -->
</body>

</html>