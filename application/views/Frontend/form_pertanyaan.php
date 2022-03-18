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
       <h6 style="margin-top: -10px; margin-left: 105px; color:steelblue;">Home/Konsultasi/Data Pertanyaan</h6>
        </div>
        </div>
    </div>
    <!-- Akhir Panel -->
    <!-- form Pertanyaan -->
    <div class="container">
        <form method="post" action="<?php echo base_url('Frontend/simpan_datapertanyaan') ?>">
            <div class="row form-pertanyaan">
                <div class="card-body">
                    <table class="table table-hover table-striped table bordered">
                        <thead>
                            <th class="text-left" style="width: 20px">No</th>
                            <th class="text-left" style="width: 670px">Pertanyaan</th>
                            <th class="text-left" style="width: 40px">Ya</th>
                            <th class="text-left" style="width: 50px">Tidak</th>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $no2 = 0;
                            $jawab = 1;
                            foreach ($data_kuesioner as $data) : ?>
                            <tr>
                                <td class="text-left"><?php echo $no++ ?></td>
                                <?php $no2++ ?>
                                <td class><?php echo $data->pertanyaan ?></td>
                                <?php
                                $inputjawab = $no2 - 1;
                                ?>
                                <td class><input type="radio" name="Tidak[<?php echo $inputjawab?>]" value="0" required>
                                    Ya</label></td>
                                <td class><input type="radio" name="Tidak[<?php echo $inputjawab?>]" value="1">
                                    Tidak <?php echo $inputjawab?></label></td>
                                <td class><input type="hidden" name="CFpakar[]" value="<?php echo $data->CFpakar ?>">
                                    </label></td>
                                <td class><input type="hidden" name="id_kuesioner[]" value="<?php echo $data->id_kuesioner ?>">
                                    </label></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <button type="submit" class="btn btn-primary">Hasil Konsultasi</button>
        </form>
    </div> 
       
    </div>
    <!-- Akhir form Pertanyaam -->

    <!-- footer -->
    <footer class="bg-primary text-white text-center footer">
        <p>Created With Love By <a href="https://www.instagram.com/indahqurrothul__/"
                class="text-white fw-bold">IndahQurrothul</a></p>
    </footer>
    <!-- Akhir Footer -->
</body>

</html>