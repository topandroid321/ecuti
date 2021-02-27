<!--Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <!--/.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashoard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <!--/.col -->
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</div>
<!--/.content-header -->
<section class="content">
    <div class="container-fluid">
        <!--Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-4">
                <!--small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo isset($total_data) ? ($total_data) : '0'; ?></h3>
                        <p>Total Data</p>
                    </div>
                    <div class="icon"><i class="fas fa-users"></i></div>
                </div>
            </div>
            <!--./col -->
            <div class="col-lg-4 col-4">
                <!--small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo isset($total_laki) ? ($total_laki) : '0'; ?></h3>
                        <p>Total Laki-laki</p>
                    </div>
                    <div class="icon"><i class="fas fa-male"></i></div>
                </div>
            </div>
            <!--./col -->
            <div class="col-lg-4 col-4">
                <!--small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo isset($total_perempuan) ? ($total_perempuan) : '0'; ?></h3>
                        <p>Total Perempuan</p>
                    </div>
                    <div class="icon"><i class="fas fa-female"></i></div>
                </div>
            </div>
            <!--./col -->
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</section>