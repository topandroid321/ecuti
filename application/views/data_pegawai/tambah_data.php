<!--Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Pegawai</h1>
            </div>
            <!--/.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Dashoard</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
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
                        <h3 class="card-title">Form Tambah Data Pegawai</h3>
                        <div class="card-tools">
                            <a href="<?php echo base_url() ?>data_mahasiswa" class="btn btn-tool"><i class="fas fa-times"></i></a></div>
                    </div>
                    <form class="form-horiontal" action="<?php echo base_url() ?>C_pegawai/proses_simpan" method="POST">
                        <!--/.card-header -->
                        <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                        <form>
                                        <!-- FORM TAMBAH DATA PEGAWAI -->
                                            <div class="form-group">
                                                <label for="nip">NIP</label>
                                                <input type="text" class="form-control" id="nip" placeholder="Masukan NIP">

                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama Lengkap">

                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir">

                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir">

                                                <label for="jenis_pegawai">Jenis Pegawai</label>
                                                <input type="text" class="form-control" id="jenis_pegawai" placeholder="Masukan Jenis Pegawai">

                                                <label for="agama_id">Agama</label>
                                                <input type="text" class="form-control" id="agama_id" placeholder="Masukan Agama">

                                                <div class="form-group">
                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <div class="form-check"><input class="form-check-input" type="radio" name="jenis_kelamin" value="L" required><label class="form-check-label">Laki -laki</label></div>
                                                    <div class="form-check"><input class="form-check-input" type="radio" name="jenis_kelamin" value="P" required><label class="form-check-label">Perempuan</label></div>
                                                </div>
                                                <label for="nip">Jenis Pegawai</label>
                                                <input type="text" class="form-control" id="nip" placeholder="Masukan Jenis Pegawai">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <label for="gol_ruang_id">Golongan</label>
                                                <input type="text" class="form-control" id="gol_ruang_id" placeholder="Masukan Golongan">

                                                <label for="no_telp">No Telp</label>
                                                <input type="text" class="form-control" id="no_telp" placeholder="Masukan No Telp">

                                                <label for="unit_kerja_id">Unit Kerja</label>
                                                <input type="text" class="form-control" id="unit_kerja_id" placeholder="Masukan Unit Kerja">

                                                <label for="jabatan_id">Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan_id" placeholder="Masukan Jabatan">

                                                <label for="photo">Foto</label>
                                                <input type="File" class="form-control" id="photo" placeholder="">

                                                <label for="emai">Email</label>
                                                <input type="email" class="form-control" id="emai" placeholder="Masukan Email">

                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" placeholder="Masukan Email">

                                                <label for="role_id">Role User</label>
                                                <input type="text" class="form-control" id="role_id" placeholder="Masukan Email">

                                                <div class="form-group">
                                                    <label for="status">Status User</label>
                                                    <div class="form-check"><input class="form-check-input" type="radio" name="status" value="Y" required><label class="form-check-label">AKTIF</label></div>
                                                    <div class="form-check"><input class="form-check-input" type="radio" name="status" value="N" required><label class="form-check-label">TIDAK AKTIF</label></div>
                                                </div>

                                                <input class="btn btn-primary" type="submit" name="kirim" value="Tambah Data">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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