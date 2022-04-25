<?php 
$mahasiswa = [
	["timothy brian", "12345", "teknik informatika", "andrieswilar@gmail.com"],
	["timothy brian", "12345", "teknik informatika", "andrieswilar@gmail.com"],
	["timothy brian", "12345", "teknik informatika", "andrieswilar@gmail.com"]

];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>data mahasiswa</title>
 </head>		
 <body>
 	<h1>data mahasiswa</h1>




<!--  	<ul>
	 		
	 	<?php foreach ($mahasiswa as $mhs):?>
	 		<li><?= $mhs; ?></li>

		<?php endforeach; ?>

 	</ul>


 -->


<?php foreach ($mahasiswa as $mhs) : ?>


<ul>
	 <li>nama	: <?=$mhs [0]; ?></li>		
	 <li>jurusan: <?=$mhs [1]; ?></li>		
  	 <li>nrp 	: <?=$mhs [2]; ?></li>		
 	 <li>email 	: <?=$mhs [3]; ?></li>		

 	</ul>

<?php endforeach; ?>



 </body>
 </html>
