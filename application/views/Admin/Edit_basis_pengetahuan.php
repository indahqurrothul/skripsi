<?php

if (!$this->session->userdata('nama')) {
    redirect(base_url("Login"));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Pakar | Edit Basis Pengetahuan</title>
    <?php
$this->load->view('template/head'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
    </div>

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
                        <h1 class="m-0">Basis Pengetahuan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Basis Pengetahuan</li>
                            <li class="breadcrumb-item active">Edit Basis Pengetahuan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="aspek_perkembangan">Aspek Perkembangan</label>
                                        <input type="hidden" value="<?= $basis_pengetahuan['0']->id_pengetahuan ?>"
                                            class="form-control" id="id_pengetahuan" name="id_pengetahuan">
                                        <input type="text" value="<?= $basis_pengetahuan['0']->aspek_perkembangan ?>"
                                            class="form-control" id="aspek_perkembangan" name="aspek_perkembangan"
                                            placeholder="Masukkan Aspek Perkembangan" required
                                            oninvalid="this.setCustomValidity('Aspek Perkembangan Tidak Boleh Kosong!')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                    <div class="form-group">
                                        <label for="MB">MB</label>
                                        <input type="text" value="<?= $basis_pengetahuan['0']->MB ?>"
                                            class="form-control" id="MB" name="MB"
                                            placeholder="Masukkan Nilai MB (Measure of Belief)" required
                                            oninvalid="this.setCustomValidity('Nilai MB Tidak Boleh Kosong!')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                    <div class="form-group">
                                        <label for="MD">MD</label>
                                        <input type="text" value="<?= $basis_pengetahuan['0']->MD ?>"
                                            class="form-control" id="MD" name="MD"
                                            placeholder="Masukkan Nilai MD (Measure of Disbelief)" required
                                            oninvalid="this.setCustomValidity('Nilai MD Tidak Boleh Kosong!')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </form>
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