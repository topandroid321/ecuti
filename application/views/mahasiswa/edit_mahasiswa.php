<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Form Edit Mahasiswa</h2>
	<fieldset>
		<form action="<?php echo base_url().'mahasiswa/proses_update'; ?>" method="POST">
		NPM : <input name="npm" cols="50" type="text" value="<?php echo $mahasiswa->npm ?>">
		<br/>
		Nama : <input name="nama" cols="50" type="text" value="<?php echo $mahasiswa->nama ?>">
		<br/>
		Alamat : <input name="alamat" cols="50" type="text" value="<?php echo $mahasiswa->alamat ?>">
		<br/>
		Telepon : <input name="telepon" cols="50" type="text" value="<?php echo $mahasiswa->telepon ?>">
		<br/>

		<br/>
		<br/>
		<input type="submit" value="Simpan"/>
		</form>
	</fieldset>
</body>
</html>