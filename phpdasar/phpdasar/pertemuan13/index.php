<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size=40px autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
		<button type="submit" class="btn btn-primary" name="cari">Cari!</button>

	</form>
	<br>
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
					<button type="button" class="btn btn-light"><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a></button>|
					<button type="button" class="btn btn-light"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a></button>|
				</td>
				<td><img src="fotofb2.jpg" width="50"></td>
				<td><?= $row["nrp"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["jurusan"]; ?></td>
			</tr>

			<?php $i++; ?>
		<?php endforeach; ?>

	</table>

</body>

</html>