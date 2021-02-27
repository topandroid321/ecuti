<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<a href="<?php echo base_url().'mahasiswa/tambah'; ?>">Tambah Mahasiswa</a>
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NPM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
		<?php foreach ($daftar_mahasiswa as $mahasiswa) {?>
		<tr>
			<td><?php echo $mahasiswa->npm; ?></td>
			<td><?php echo $mahasiswa->nama; ?></td>
			<td><?php echo $mahasiswa->alamat; ?></td>
			<td><?php echo $mahasiswa->telepon; ?></td>
			<td>
				<a href="<?php echo base_url().'mahasiswa/edit/'.$mahasiswa->id; ?>">Edit</a> |
				<a href="<?php echo base_url().'mahasiswa/delete/'.$mahasiswa->id; ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>