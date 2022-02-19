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
    .form-bayi {
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .footer {
        margin-top: 80px;
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
    <!-- form data bayi -->
    <form method="post" action="<?php echo base_url('Frontend/simpan_datauser') ?>">
        <input type="text" name="id_user" value="<?php echo $autocode_user ?>">

        <div class="container">
            <div class="row form-bayi">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Bayi</label>
                        <input type="text" name="nama_bayi" class=" form-control" id=""
                            placeholder="Masukkan Nama Bayi" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" id="" placeholder="Masukkan Nama Ibu" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" class="form-control" id=""
                            placeholder="Masukkan Tanggal Lahir" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" id=""
                            placeholder="Masukkan Nama Ayah" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput5" class="form-label">Pilih Usia Bayi</label>
                        <select name="Usia" id="Usia" class="form-control">
                            <?php foreach ($data_usia as $data){
                            ?>
                            <option value="<?php echo $data->id_usia ?>"> <?php echo $data->usia ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea6" class="form-label">No Telpon</label>
                        <input type="text" name="no_telp" class="form-control" id="" placeholder="Masukkan No Telpon" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea7" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" id="" rows="3"></textarea>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Mulai
                Konsultasi</button>
        </div>
    </form>
    <!-- Akhir form data bayi -->

    <!-- footer -->
    <footer class="bg-primary text-white text-center footer">
        <p>Created With Love By <a href="https://www.instagram.com/indahqurrothul__/"
                class="text-white fw-bold">IndahQurrothul</a></p>
    </footer>
    <!-- Akhir Footer -->
    <?php $this->load->view('template/js'); ?>
    <script>
    $('#package').on('change', function() {
        // ambil data dari elemen option yang dipilih
        const price = $('#package option:selected').data('price');
        const discount = $('#package option:selected').data('discount');

        // kalkulasi total harga
        const totalDiscount = (price * discount / 100)
        const total = price - totalDiscount;

        // tampilkan data ke element
        $('[name=price]').val(price);
        $('[name=discount]').val(totalDiscount);

        $('#total').text(`Rp ${total}`);
    });
    </script>
</body>

</html>