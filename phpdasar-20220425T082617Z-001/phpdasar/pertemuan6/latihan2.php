<?php 

$mahasiswa = [

	[
		"nama" => "timothy brian",
		"nrp" => "12345",
		"email" =>"andrieswilar@",
		"jurusan" => "teknik informatika",
		"gambar" => "fotofb2.jpg"
	],

	[
		"nama" => "timothy brian",
		"nrp" => "12345",
		"email" =>"andrieswilar@",
		"jurusan" => "teknik informatika",
		"tugas" => [10,80,90]
	]

];

 ?>





 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 	
 		<h1>daftar mahasiswa</h1>

 		<?php  foreach ($mahasiswa as $mhs)	:?>

 <ul>
 	<li>
 		<img src="fotofb2.jpg">
 	</li>
	<li>nama : <?php echo $mhs ["nama"] ?></li>
 	<li>NRP: <?php echo $mhs ["nrp"] ?></li>
 	<li>email : <?php echo $mhs ["email"] ?></li>
 	<li>jurusan : <?php echo $mhs ["jurusan"] ?></li>
</ul>

<?php endforeach; ?>

 </body>
 </html>