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
                            <h1 class="m-0">Data Stimulasi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Stimulasi</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?php
                    // Cek apakah terdapat session nama message
                    if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Tambahkan</h5>
                    </div>
                    <?php }
                    ?>
                    <?php
                    // Cek apakah terdapat session nama message
                    if ($this->session->flashdata('edit')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Ubah</h5>
                    </div>
                    <?php }
                    ?>
                    <?php
                    // Cek apakah terdapat session nama message
                    if ($this->session->flashdata('hapus')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Hapus</h5>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Data Stimulasi</h3>
                                </div>
                                <div class="mx-3 mt-3 ">
                                    <!-- mengarahkan ke methodyang ada di controller -->
                                    <a class="btn btn-primary btn-xs center-block"
                                        href="<?php echo base_url('Data_stimulasi/tambah_data')?>"><i
                                            class="fa fa-plus ">
                                            Tambah Data</i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Usia</th>
                                            <th class="text-center">Aspek Perkembangan</th>
                                            <th class="text-center">Stimulasi</th>
                                            <th class="text-center">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            foreach ($data_stimulasi as $data) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++?></td>
                                                <td class="text-center"><?php echo $data->usia ?></td>
                                                <td class="text-center"><?php echo $data->aspek_perkembangan ?></td>
                                                <td class><?php echo $data->stimulasi ?></td>
                                                <td class="text-center">
                                                    <a
                                                        href="<?= base_url('Data_stimulasi/tampil_edit_data/' . $data->id_stimulasi) ?>"><button
                                                            class="btn btn-info btn-xs" type="button"><i
                                                                class="far fa-edit"> Edit</i></button></a>
                                                    <a
                                                        href="<?= base_url('Data_stimulasi/hapus_data/' . $data->id_stimulasi) ?>"><button
                                                            class="btn btn-danger btn-xs" type="button"><i
                                                                class="far fa-trash-alt"> Hapus</i></button></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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