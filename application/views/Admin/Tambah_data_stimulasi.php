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
                            <li class="breadcrumb-item active">Tambah Data Stimulasi</li>
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
                                <h3 class="card-title">Tambah Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="<?php echo base_url('Data_stimulasi/simpan_data') ?>">
                                <input type="hidden" name="id_stimulasi" value="<?php echo $autocode_stimulasi ?>">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="usia">Usia</label>
                                        <select name="usia" id="" class="form-control">
                                            <option>-- Pilih Usia --</option>
                                            <?php 
                                        foreach ($usia as $usia) {  ?>
                                            <?php echo "<option value=".$usia->id_usia.">".$usia->usia."</option>";
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
                                            <option>-- Pilih Aspek Perkembangan --</option>
                                            <?php 
                                        foreach ($aspek_perkembangan as $aspek) {  ?>
                                            <?php echo "<option value=".$aspek->id_pengetahuan.">".$aspek->aspek_perkembangan."</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="col-md-12">
                                            <?php echo form_error('aspek_perkembangan', '<span class="text-danger")>', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stimulasi">Stimulasi</label>
                                        <textarea class="form-control" rows="4" id="stimulasi" name="stimulasi"
                                            placeholder="Masukkan Stimulasi" required
                                            oninvalid="this.setCustomValidity('Stimulasi Tidak Boleh Kosong!')"
                                            oninput="setCustomValidity('')"></textarea>
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