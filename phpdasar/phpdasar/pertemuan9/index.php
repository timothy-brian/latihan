<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>

<h1>Daftar mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">



	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>email</th>
		<th>Jurusan</th>
	</tr>	
	
	<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $row) : ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">ubah</a> |
			<a href="">hapus</a>
		</td>
		<td><img src="fotofb2.jpg" width="50"></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["Jurusan"]; ?></td>
	</tr>

	<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>