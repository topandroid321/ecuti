<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Form Hapus Mahasiswa</h2>
	<fieldset>
		<form action="<?php echo base_url().'mahasiswa/proses_hapus'; ?>" method="POST">
		<input name="id" type="hidden" value="<?php echo $mahasiswa->id ?>">
		NPM : <?php echo $mahasiswa->npm ?>
		<br/>
		Nama : <?php echo $mahasiswa->nama ?>
		<br/>
		Alamat : <?php echo $mahasiswa->alamat ?>
		<br/>
		Telepon : <?php echo $mahasiswa->telepon ?>
		<br/>
		<br/>
		<br/>
		<input type="submit" value="Hapus"/>
		</form>
	</fieldset>
</body>
</html>