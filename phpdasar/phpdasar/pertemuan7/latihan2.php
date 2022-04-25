<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
	!isset($_GET["nrp"]) || 
	!isset($_GET["email"]) || 
	!isset($_GET["jurusan"]) || 
	!isset($_GET["gambar"]) || 
)

{


// redirect

	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>detail mahasiswa</title>
</head>
<body>

<ul>
<li><img src=fotofb2.jpg></li>
<li><?= $_GET["nama"]; ?></li>
<li><?= $_GET["nrp"]; ?></li>
<li><?= $_GET["email"]; ?></li>
<li><?= $_GET["jurusan"]; ?></li>
</ul>

<br>
<a href="latihan1.php">kembali ke daftar mahasiswa</a>

</body>
</html>