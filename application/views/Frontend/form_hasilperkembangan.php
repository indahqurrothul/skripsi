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
        margin-top: 50px;
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
       <hr style="width: 17%; margin-left: 105px;">       
       <h6 style="margin-top: -10px; margin-left: 105px; color:steelblue;">Home/Konsultasi/Hasil Perkembangan</h6>
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
                        Perkembangan Anak Sesuai Dengan Tahap Perkembangannya 
                    </div> 
                <?php
                } elseif ($hasil_persentase >= 21 and $hasil_persentase <= 60 ) { ?>
                    <div class="alert alert-warning mt-5 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Perkembangan Anak Meragukan Dengan Tahap Perkembangannya 
                    </div> 
                    <?php
                    
                } elseif ($hasil_persentase >= 61 ) { ?>
                    <div class="alert alert-danger mt-5 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Perkembangan Anak Menyimpang Dengan Tahap Perkembangannya 
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
    <?php 
                if ($hasil_persentase <= 20  ) { ?>
                    <div class="row justify-content-center">
                        <div class="alert alert-success mt-2 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Intervensi Dini
                        </div>
                    </div> 
                <?php
                } elseif ($hasil_persentase >= 21 and $hasil_persentase <= 60 ) { ?>
                    <div class="row justify-content-center">
                        <div class="alert alert-warning mt-2 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Intervensi Dini
                        </div>
                    </div>
                    <?php                    
                } elseif ($hasil_persentase >= 61 ) { ?>
                    <div class="row justify-content-center">
                        <div class="alert alert-danger mt-2 col-lg-10 text-center mt-3 fw-bold" role="alert">
                        Intervensi Dini
                        </div>
                    </div>
                    <?php                    
                }
                
            ?>
    
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h5>
                <?php 
                              
                if ($CFaspek_gerakkasar > 0) {
                    foreach ($stimulasi_gerakkasar as $data_stimulasi_gerakkasar) {
                        ?>
                        <p align="justify"><?php echo $data_stimulasi_gerakkasar->stimulasi; ?></p>
                        <?php                    
                    }
                }
                ?>                
                <?php

                if ($CFaspek_gerakhalus > 0) {
                    foreach ($stimulasi_gerakhalus as $data_stimulasi_gerakhalus) {
                        ?>
                        <p align="justify"><?php echo $data_stimulasi_gerakhalus->stimulasi; ?></p>
                        <?php
                    }
                }
                ?>               
                <?php

                if ($CFaspek_bicara_bahasa > 0) {
                    foreach ($stimulasi_bicara_bahasa as $data_stimulasi_bicara_bahasa) {
                        ?>
                        <p align="justify"><?php echo $data_stimulasi_bicara_bahasa->stimulasi; ?></p>
                        <?php
                        
                    }
                }
                ?>               
                <?php

                if ($CFaspek_sosialisasi_kemandirian > 0) {
                    foreach ($stimulasi_sosialisasi_kemandirian as $data_stimulasi_sosialisasi_kemandirian) {
                        ?>
                        <p align="justify"><?php echo $data_stimulasi_sosialisasi_kemandirian->stimulasi; ?></p>
                        <?php
                        
                    }
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