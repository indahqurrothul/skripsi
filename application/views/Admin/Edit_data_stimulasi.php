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
                        <h1 class="m-0">Data Stimulasi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Stimulasi</li>
                            <li class="breadcrumb-item active">Edit Data Stimulasi</li>
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
                                        <input type="hidden" value="<?= $usia['0']->id_stimulasi ?>"
                                            class="form-control" id="id_stimulasi" name="id_stimulasi" placeholder="">
                                        <select name="usia" id="" class="form-control">
                                            <option selected value="<?= $usia['0']->id_usia ?>">
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
                                        <label for="aspek_perkembangan">Aspek Perkembangan</label>
                                        <select name="aspek_perkembangan" id="" class="form-control">
                                            <option value="<?php echo $aspek_perkembangan['0']->id_pengetahuan ?>">
                                                <?php echo $aspek_perkembangan['0']->aspek_perkembangan ?></option>
                                            <?php 
                                        foreach ($aspek_perkembangan as $aspek) {  ?>
                                            <?php echo "<option value=".$aspek->id_pengetahuan.">".$aspek->aspek_perkembangan."</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="col-md-12">
                                            <?php echo form_error('usia', '<span class="text-danger")>', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Stimulasi</label>
                                        <textarea class="form-control" required
                                            oninvalid="this.setCustomValidity('Stimulasi Tidak Boleh Kosong!')"
                                            oninput="setCustomValidity('')"
                                            name="stimulasi"><?php echo $usia['0']->stimulasi ?> </textarea>
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