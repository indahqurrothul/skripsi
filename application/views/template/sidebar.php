<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SISTEM PAKAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <?php $foto_admin = $this->session->userdata('foto_admin') ?>
            <div class="image">
                <img src="<?php echo base_url() ?>assets/Gambar/foto_profil/<?php echo $foto_admin ?>"
                    class="img-circle elevation-2" alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block"><?php echo $this->session->userdata('nama') ?></a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('Dashboard')?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Data_usia')?>" class="nav-link">
                        <i class="nav-icon fas fa-child"></i>
                        <p>
                            Data Usia
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Data_kuesioner')?>" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Kuesioner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Data_stimulasi')?>" class="nav-link">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Stimulasi
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Diagnosa                
              </p>
            </a>          
          </li> -->
                <li class="nav-item">
                    <a href="<?php echo base_url('Basis_pengetahuan')?>" class="nav-link">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>
                            Basis Pengetahuan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>