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
        <div class="container">
            <a class="navbar-brand text-primary" href="#">Sistem Pakar KPSP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href=<?php echo base_url("Frontend/index") ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo base_url("Frontend/infoperkembangan") ?>>Perkembangan
                            Anak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary"
                            href=<?php echo base_url("Frontend/konsultasi1") ?>>Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Panel -->

    <div class="container-fluid">
        <div class="row" style="background-color: #E2F1FF; padding :25px">
            <!-- <div class="alert" style="padding :50px" role=" alert">
                A simple info alert—check it out!
            </div> -->
            <div class="col-lg-12">
                <h1>  </h1>
            </div>

        </div>
    </div>
    <!-- Akhir Panel -->

    <!-- Panel -->
    <div class=" container">
        
                    <?php 
                    $CFaspek_gerakkasar = $data_gerakkasar[0]->Nilai_gerakkasar * 0.2;
                    $CFaspek_gerakhalus = $data_gerakhalus[0]->Nilai_gerakhalus * 0.2;
                    $CFaspek_bicara_bahasa = $data_bicara_bahasa[0]->Nilai_bicara_bahasa * 0.2;
                    $CFaspek_sosialisasi_kemandirian = $data_sosialisasi_kemandirian[0]->Nilai_sosialisasi_kemandirian * 0.2;


                    //langkah ketiga
                    $combine_pertama = $CFaspek_gerakkasar + $CFaspek_gerakhalus * (1 - $CFaspek_gerakkasar);
                    $combine_kedua = $combine_pertama + $CFaspek_bicara_bahasa * (1 - $combine_pertama);
                    $combine_ketiga = $combine_kedua + $CFaspek_sosialisasi_kemandirian * (1 - $combine_kedua);


                    //Langkah keempat
                    $hasil_persentase = $combine_ketiga * 100;


                    

                    ?>

        <div class="row justify-content-center">


            <?php 
                if ($hasil_persentase <= 20  ) { ?>
                    <div class="alert alert-success mt-5 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Perkembangan anak sesuai dengan tahap perkembangannya 
                    </div> 
                <?php
                } elseif ($hasil_persentase >= 21 and $hasil_persentase <= 60 ) { ?>
                    <div class="alert alert-warning mt-5 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Perkembangan anak meragukan dengan tahap perkembangannya 
                    </div> 
                    <?php
                    
                } elseif ($hasil_persentase >= 61 ) { ?>
                    <div class="alert alert-danger mt-5 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Perkembangan anak menyimpang dengan tahap perkembangannya 
                    </div> 
                    <?php                    
                }
                
            ?>

            
        </div>
        <div class="row justify-content-center mt-1">
            <div class="col-lg-10">
                <h5>
                     Hasil Penyimpangan Perkembangan :  <?php echo $hasil_persentase; ?> %
                   
                </h5>
            </div>
        </div>
    </div>

    <!-- Akhir Panel -->

    <!-- Panel -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="alert alert-success mt-2 col-lg-10 text-center mt-3 fw-bold" role="alert">
                Intervensi Dini
            </div>
        </div>
        <div class="row justify-content-center mt-1">
            <div class="col-lg-10">
                <h5>
                <?php 
                
                $CFaspek_gerakkasar;
                $CFaspek_gerakhalus;
                $CFaspek_bicara_bahasa;
                $CFaspek_sosialisasi_kemandirian;

                if ($CFaspek_gerakkasar > 0 and $CFaspek_gerakhalus = 0 and $CFaspek_bicara_bahasa = 0 and $CFaspek_sosialisasi_kemandirian = 0 ) {
                    $id_stimulasi = "";
    
                } elseif ($CFaspek_gerakkasar = 0 and $CFaspek_gerakhalus > 0 and $CFaspek_bicara_bahasa = 0 and $CFaspek_sosialisasi_kemandirian = 0 ) {
                    
                } elseif ($CFaspek_gerakkasar = 0 and $CFaspek_gerakhalus = 0 and $CFaspek_bicara_bahasa > 0 and $CFaspek_sosialisasi_kemandirian = 0 ) {
                   
                } elseif ($CFaspek_gerakkasar = 0 and $CFaspek_gerakhalus = 0 and $CFaspek_bicara_bahasa = 0 and $CFaspek_sosialisasi_kemandirian > 0) {
                    
                } elseif ($CFaspek_gerakkasar > 0 and $CFaspek_gerakhalus > 0 and $CFaspek_bicara_bahasa = 0 and $CFaspek_sosialisasi_kemandirian = 0) {
                    # code...
                } elseif ($CFaspek_gerakkasar > 0 and $CFaspek_gerakhalus = 0 and $CFaspek_bicara_bahasa > 0 and $CFaspek_sosialisasi_kemandirian = 0) {
                    # code...
                } elseif ($CFaspek_gerakkasar > 0 and $CFaspek_gerakhalus = 0 and $CFaspek_bicara_bahasa = 0 and $CFaspek_sosialisasi_kemandirian > 0) {
                    # code...
                } elseif ($CFaspek_gerakkasar = 0 and $CFaspek_gerakhalus > 0 and $CFaspek_bicara_bahasa > 0 and $CFaspek_sosialisasi_kemandirian = 0) {
                    # code...
                } elseif ($CFaspek_gerakkasar = 0 and $CFaspek_gerakhalus > 0 and $CFaspek_bicara_bahasa = 0 and $CFaspek_sosialisasi_kemandirian > 0) {
                    # code...
                }

                $stimulasi = $this->db->get_where('tbl_data_stimulasi', ['id_stimulasi' => $id_stimulasi])->result_array(); 
                
                foreach ($stimulasi as $data_stimulasi) {
                    echo $data_stimulasi['stimulasi'];
                }







                ?>
                </h5>
            </div>
        </div>

    </div>

    <!-- Akhir Panel -->


    <!-- footer -->
    <footer class="bg-primary text-white text-center footer">
        <p>Created With Love By <a href="https://www.instagram.com/indahqurrothul__/"
                class="text-white fw-bold">IndahQurrothul</a></p>
    </footer>
    <!-- Akhir Footer -->
</body>

</html>