 <?php
	require 'functions.php';
	// cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {


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
	}
	?>

 <!DOCTYPE html>
 <html>

 <head>
 	<title>tambah data mahasiswa</title>

 	<title>Bootstrap Example</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 </head>

 <body>
 	<h1>tambah data mahasiswa</h1>

 	<form action="" method="post">
 		<ul>
 			<li>
 				<label for="nrp">NRP : </label>
 				<input type="text" name="nrp" id="nrp">
 			</li>
 			<li>
 				<label for="nama">nama : </label>
 				<input type="text" name="nama" id="nama">
 			</li>
 			<li>
 				<label for="email">email : </label>
 				<input type="text" name="email" id="email">
 			</li>
 			<li>
 				<label for="jurusan">jurusan : </label>
 				<input type="text" name="jurusan" id="jurusan">
 			</li>
 			<li>
 				<label for="gambar">gambar : </label>
 				<input type="file" name="gambar" id="gambar">
 			</li>
 			<li>
 				<button type="submit" name="submit">tambah data!</button>
 			</li>



 		</ul>





 	</form>
 </body>

 </html>