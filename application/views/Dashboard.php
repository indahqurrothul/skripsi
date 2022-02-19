<!DOCTYPE html>
<html lang="en">

<head>
    <?php
$this->load->view('template/head'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php 
 $this->load->view('template/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php 
 $this->load->view('template/sidebar'); ?>
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= $user ?></h3>

                                    <p>Data User</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-user"></i>
                                </div>
                                <a href="#" class="small-box-footer">Baca Selengkapnya <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $usia ?></h3>

                                    <p>Data Usia</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-child"></i>
                                </div>
                                <a href="<?php echo base_url('Data_usia')?>" class="small-box-footer">Baca Selengkapnya
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $kuesioner ?></h3>

                                    <p>Data Kuesioner</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-clipboard-list"></i>
                                </div>
                                <a href="<?php echo base_url('Data_kuesioner')?>" class="small-box-footer">Baca
                                    Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $basis_pengetahuan ?></h3>

                                    <p>Basis Pengetahuan</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-notes-medical"></i>
                                </div>
                                <a href="<?php echo base_url('Basis_pengetahuan')?>" class="small-box-footer">Baca
                                    Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- TABLE: DATA USER -->

                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="card-title">DATA USER</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body  bg-light ">
                                    <table id="example1"
                                        class="table table-bordered table-striped bg-light text-center">

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Bayi</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Usia</th>
                                                <th>Nama Ibu</th>
                                                <th>Nama Ayah</th>
                                                <th>No Telp</th>
                                                <th>ALamat</th>
                                                <!-- <th>Jenis</th> -->
                                                <!-- <th></th>
                                                <th>Stok Tersedia</th> -->
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php


                                            $no = 1;
                                            foreach ($tabel as $d) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>

                                                <!-- <td>
                                                    <p><?php echo $d->id_user; ?></p>

                                                </td> -->

                                                <td>
                                                    <p><?php echo $d->nama_bayi; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->tanggal_lahir; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->usia; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_ibu; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $d->nama_ayah; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $d->no_telp; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $d->alamat; ?> </p>
                                                </td>

                                                <td>

                                                    <a href="<?php //echo base_url('data_produk/edit/' . $d->id_produk) ?>"
                                                        class="btn btn-info btn-sm active" role="button"
                                                        aria-pressed="true">Detail</a>
                                                </td>


                                            </tr>
                                            <?php } ?>
                                        </tbody>


                                    </table>

                                </div>
                            </div>

                            <!-- TABLE: STOK PRODUk -->
                        </div>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
    </div> -->

    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php 
 $this->load->view('template/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <?php
$this->load->view('template/js'); 
?>

</body>

</html>