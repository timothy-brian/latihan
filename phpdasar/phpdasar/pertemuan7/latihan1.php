<?php 
// variable scope / lingkup variable
// merupakan array associative

// $_GET

// $_GET["nama"] = "timothy brian";
// $_GET["nrp"] = "123123";
// var_dump($_GET);


$mahasiswa = [

	[
		"nama" => "timothy brian",
		"nrp" => "12345",
		"email" =>"andrieswilar@",
		"jurusan" => "teknik informatika",
		"gambar" => "fotofb2.jpg"
	],

	[
		"nama" => "brian timothy",
		"nrp" => "567890",
		"email" =>"wilarandries@",
		"jurusan" => "teknik informatika",
		"gambar" => "fotofb2.jpg"
	]

];


?>

<!DOCTYPE html>
<html>
<head>
	<title>get</title>
</head>
<body>

	<h1>daftar mahasiswa</h1>

	<ul>
<?php foreach ($mahasiswa as $mhs) : ?>

	
	<li>
	<a href="latihan2.php?nama=<?= $mhs ["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>

	</li>



	

<?php endforeach; ?>
	</ul>



</body>
</html>


