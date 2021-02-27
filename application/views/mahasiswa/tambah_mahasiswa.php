<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Form Tambah Mahasiswa</h2>
	<fieldset>
		<form action="<?php echo base_url().'mahasiswa/proses_simpan'; ?>" method="POST">
		NPM : <input name="npm" cols="50" type="text">
		<br/>
		Nama : <input name="nama" cols="50" type="text">
		<br/>
		Alamat : <input name="alamat" cols="50" type="text">
		<br/>
		Telepon : <input name="telepon" cols="50" type="text">
		<br/>
		<br/>
		<br/>
		<input type="submit" value="Tambah"/>
		</form>
	</fieldset>
</body>
</html>