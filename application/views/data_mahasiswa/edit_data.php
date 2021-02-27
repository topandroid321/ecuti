<!--Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Mahasiswa</h1>
            </div>
            <!--/.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashoard</a></li>
                    <li class="breadcrumb-item active">Data Mahasiswa</li>
                </ol>
            </div>
            <!--/.col -->
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</div>
<!--/.content-header -->
<!--Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Mahasiswa</h3>
                        <div class="card-tools"><a href="<?php echo base_url() ?>data_mahasiswa" class="btn btn-tool"><i class="fas fa-times"></i></a></div>
                    </div>
                    <form class="form-horiontal" action="<?php echo base_url() ?>data_mahasiswa/proses_update" method="POST"><input type="hidden" name="id" value="<?php echo $mahasiswa->id ?>"><input type="hidden" name="npm_asal" value="<?php echo $mahasiswa->npm ?>">
                        <!--/.card-header -->
                        <divclass="card-body">
                            <div class="form-group row"><label class="col-sm-2 col-form-label">NPM</label>
                                <div class="col-sm-4"><input type="text" class="form-control" name="npm" placeholder="NPM" value="<?php echo $mahasiswa->npm ?>" required></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-4"><input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $mahasiswa->nama ?>" required></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-check"><input class="form-check-input" type="radio" name="jenis_kelamin" value="L" <?php if ($mahasiswa->jenis_kelamin == 'L') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> required><label class="form-check-label">Laki -laki</label></div>
                                        <div class="form-check"><input class="form-check-input" type="radio" name="jenis_kelamin" value="P" <?php if ($mahasiswa->jenis_kelamin == 'P') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> required><label class="form-check-label">Perempuan</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-4"><textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"><?php echo $mahasiswa->alamat ?></textarea></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Telepon</label>
                                <div class="col-sm-4"><input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $mahasiswa->telepon ?>"></div>
                            </div>
                </div>
                <!--/.card-body -->
                <div class="card-footer"><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button></div>
                </form>
            </div>
            <!--/.card -->
        </div>
    </div>
    <!--/.row -->
</div>
<!--/.container-fluid -->
</div>
<!--/.content -->