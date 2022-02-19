<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/head'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
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
                        <h1 class="m-0">Data Kuesioner</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Kuesioner</li>
                            <li class="breadcrumb-item active">Edit Data Kuesioner</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
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
                                        <input type="hidden" value="<?= $usia['0']->id_kuesioner ?>"
                                            class="form-control" id="id_kuesioner" name="id_kuesioner" placeholder="">
                                        <select name="usia" id="" class="form-control">
                                            <option selected value="<?php echo $usia['0']->id_usia ?>">
                                                <?= $usia['0']->usia ?>
                                            </option>
                                            <?php 
                                        foreach ($usia_saja as $usia2) {  ?>
                                            <?php echo "<option value=".$usia2->id_usia.">".$usia2->usia."</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="col-md-12">
                                            <?php echo form_error('usia', '<span class="text-danger")>', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        <textarea class="form-control" required
                                            oninvalid="this.setCustomValidity('Pertanyaan Tidak Boleh Kosong!')"
                                            oninput="setCustomValidity('')"
                                            name="pertanyaan"><?php echo $usia['0']->pertanyaan ?> </textarea>
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