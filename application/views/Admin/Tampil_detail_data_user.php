<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/head'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('template/navbar'); ?>
        <!-- /.navbar -->

        <!-- ini sidebar -->
        <?php $this->load->view('template/sidebar'); ?>

        <!-- Ini content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Detail Data User</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- Main content -->
            <section class="content">

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

                <div class="container">
                    <div class="row">
                        <?php 
                        if ($hasil_persentase <= 20  ) { ?>
                            <div class="alert alert-success col-lg-12 text-center mt-3 fw-bold" role="alert">
                                Perkembangan Anak Sesuai Dengan Tahap Perkembangannya 
                            </div> 
                            <?php
                        } elseif ($hasil_persentase >= 21 and $hasil_persentase <= 60 ) { ?>
                            <div class="alert alert-warning  col-lg-12 text-center mt-3 fw-bold" role="alert">
                                Perkembangan Anak Meragukan Dengan Tahap Perkembangannya 
                            </div> 
                            <?php

                        } elseif ($hasil_persentase >= 61 ) { ?>
                            <div class="alert alert-danger col-lg-12 text-center mt-3 fw-bold" role="alert">
                                Perkembangan Anak Menyimpang Dengan Tahap Perkembangannya 
                            </div> 
                            <?php                    
                        }

                        ?>

                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <p>Hasil Penyimpangan Perkembangan :</p>
                                    <h1 class="text-title text-center">
                                        <?php echo $hasil_persentase; ?> %
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Pencegahan / Pengombatan yang Harus Dilakukan :</b></h5>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <?php $this->load->view('template/footer'); ?>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('template/js'); ?>
</body>

</html>