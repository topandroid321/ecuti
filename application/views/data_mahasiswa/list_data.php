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
                        <h3 class="card-title">List Data Mahasiswa</h3>
                        <div class="card-tools"><a href="<?php echo base_url() ?>data_mahasiswa/tambah" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus">
                                </i> Tambah data</a>
                        </div>
                    </div>
                    <!--/.card-header -->
                    <div class="card-body">
                        <form action="<?php echo base_url() . 'data_mahasiswa'; ?>" method="GET">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <?php $val_filter = $this->input->get('f_jeniskelamin'); ?>
                                        <select class="form-control" name="f_jeniskelamin">
                                            <option value="">---Filter Jenis Kelamin ---</option>
                                            <option value="L" <?php if ($val_filter == 'L') {
                                                                    echo 'selected';
                                                                } ?>>Laki-laki</option>
                                            <option value="P" <?php if ($val_filter == 'P') {
                                                                    echo 'selected';
                                                                } ?>>Perempuan
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12"><button type="submit" class="btn btn-default">
                                        <iclass="fas fa-filter"></i> Filter</a></div>
                            </div>
                        </form>
                        <hr>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NPM </th>
                                    <th>Nama </th>
                                    <th>Jenis Kelamin </th>
                                    <th>Alamat </th>
                                    <th>Telepon </th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($daftar_mahasiswa as $mahasiswa) { ?>
                                    <tr>
                                        <td> <?php echo $mahasiswa->npm; ?> </td>
                                        <td> <?php echo $mahasiswa->nama; ?></td>
                                        <td> <?php echo $mahasiswa->jenis_kelamin; ?></td>
                                        <td> <?php echo $mahasiswa->alamat; ?></td>
                                        <td> <?php echo $mahasiswa->telepon; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'data_mahasiswa/edit/' . $mahasiswa->id; ?>" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="<?php echo base_url() . 'data_mahasiswa/delete/' . $mahasiswa->id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah data ini akan di hapus ?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
        </div>
        <!--/.row -->
    </div>
    <!--/.container-fluid -->
</div>
<!--/.content -->
<script>
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
</script>