<!--Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!--Brand Logo -->
    <a href="<?php echo base_url() ?>dashboard" class=" brand-link">
        <img src="<?php echo base_url() ?>asset/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">APLIKASIKU</span>
    </a>
    <!--Sidebar -->
    <div class="sidebar">
        <!--Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image"><img src="<?php echo base_url() ?>asset/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></div>
            <div class="info"><a href="#" class="d-block">Nama Sendiri</a></div>
        </div>
        <!--Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php $sesi = $this->session->userdata('hak_akses'); ?>
                <?php if ($sesi == "Administrator") { ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($sesi == "Operator") { ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('data_mahasiswa') ?>" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>Data Mahasiswa</p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!--/.sidebar-menu -->
    </div>
    <!--/.sidebar -->
</aside>