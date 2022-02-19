<!DOCTYPE html>
<html lang="en">

<head>
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
                        <h1 class="m-0">Data Usia</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Usia</li>
                            <li class="breadcrumb-item active">Edit Data Usia</li>
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
                                        <label for="usia">Usia</label>
                                        <input type="hidden" value="<?= $usia['0']->id_usia ?>" class="form-control"
                                            id="id_usia" name="id_usia" placeholder="">
                                        <input type="text" value="<?= $usia['0']->usia ?>" class="form-control"
                                            id="usia" name="usia" placeholder="Masukkan Usia Anak (Contoh : 0 - 3)"
                                            required oninvalid="this.setCustomValidity('Usia Tidak Boleh Kosong!')"
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