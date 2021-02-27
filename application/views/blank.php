<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!--Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Font Awesome -->
    <link rel="stylesheet" href=<?= base_url() . "asset/adminlte/plugins/fontawesome-free/css/all.min.css" ?>>
    <link rel="stylesheet" href="<?= base_url() ?>asset/adminlte/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini">
    <!--Site wrapper -->
    <div class="wrapper">
        <!--Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!--Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
        <!--/.navbar -->
        <!--Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!--Brand Logo --><a href="../../index3.html" class="brand-link"><img src="asset/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"><span class="brand-text font-weight-light">AdminLTE 3</span></a>
            <!--Sidebar -->
            <div class="sidebar">
                <!--Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image"><img src="asset/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></div>
                    <div class="info"><a href="#" class="d-block">Alexander Pierce</a></div>
                </div>
                <!--Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!--Add icons to thelinks using the .nav-icon classwith font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Menu 1<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="../../index.html" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                        <p>Sub Menu 1</p>
                                    </a></li>
                                <li class="nav-item"><a href="../../index2.html" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                        <p>Sub Menu 2</p>
                                    </a></li>
                                <li class="nav-item"><a href="../../index3.html" class="nav-link"><i class="far fa-circle nav-icon"></i>
                                        <p>Sub Menu 3</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="../gallery.html" class="nav-link"><i class="nav-icon far fa-image"></i>
                                <p>Menu 2</p>
                            </a></li>
                    </ul>
                </nav>
                <!--/.sidebar-menu -->
            </div>
            <!--/.sidebar -->
        </aside>
        <!--Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!--Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!--/.container-fluid -->
            </section>
            <!--Main content -->
            <section class="content">
                <!--TAMPILKAN DATA DISINI-->
                <!--Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>
                        <div class="card-tools"><button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button><button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"><i class="fas fa-times"></i></button></div>
                    </div>
                    <div class="card-body">Start creating your amazing application!</div>
                    <!--/.card-body -->
                    <div class="card-footer">Footer</div>
                    <!--/.card-footer-->
                </div>
                <!--/.card -->
                <!--END OF TAMPILKAN DATA DISINI-->
            </section>
            <!--/.content -->
        </div>
        <!--/.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.0.2</div><strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rightsreserved.
        </footer>
        <!--Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!--Control sidebar content goes here -->
        </aside>
        <!--/.control-sidebar -->
    </div>
    <!--./wrapper -->
    <!--jQuery -->
    <script src="<?php echo base_url() ?>asset/adminlte/plugins/jquery/jquery.min.js"></script>
    <!--Bootstrap 4 -->
    <script src=<?php echo base_url() . "asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js" ?>></script>
    <!--AdminLTE App -->
    <script src=<?php echo base_url() . "asset/adminlte/js/adminlte.js" ?>></script>
    <!--AdminLTE for demo purposes -->
    <script src=<?php echo base_url() . "asset/adminlte/js/demo.js" ?>></script>
</body>

</html>