 <?php

	// koneksi ke DMBS
	// $conn = mysqli_connect("localhost", "root", "", "phpdasar");


	require 'functions.php';
	// cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {

		// ambil data dari tiap elemen dalam form
		$nrp = $_POST["nrp"];
		$nama = $_POST["nama"];
		$email = $_POST["email"];
		$jurusan = $_POST["jurusan"];
		$gambar = $_POST["gambar"];

		// cek apakah data berhasil di tambahkan atau tidak
		if (tambah($_POST) > 0) {
			echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
		} else {
			echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
		}

		// query insert data
		$query = "INSERT INTO mahasiswa
				VALUES
				('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')

			";
		mysqli_query($conn, $query);
	}
	?>

 <!DOCTYPE html>
 <html>

 <head>
 	<title>tambah data mahasiswa</title>
 </head>

 <body>
 	<h1>tambah data mahasiswa</h1>

 	<form action="" method="post">
 		<ul>
 			<li>
 				<label for="nrp">NRP : </label>
 				<input type="text" name="nrp" id="nrp" required>
 			</li>
 			<li>
 				<label for="nama">nama : </label>
 				<input type="text" name="nama" id="nama" required>
 			</li>
 			<li>
 				<label for="email">email : </label>
 				<input type="text" name="email" id="email" required>
 			</li>
 			<li>
 				<label for="jurusan">jurusan : </label>
 				<input type="text" name="jurusan" id="jurusan" required>
 			</li>
 			<li>
 				<label for="gambar">gambar : </label>
 				<input type="text" name="gambar" id="gambar" required>
 			</li>
 			<li>
 				<button type="submit" name="submit">tambah data!</button>
 			</li>

 		</ul>





 	</form>
 </body>

 </html>