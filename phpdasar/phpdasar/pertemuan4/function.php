<?php 
function salam($waktu = "datang", $nama = "admin") {
	return "selamat $waktu, $nama!";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan function</title>
 </head>
 <body>
 	<H1><?=salam("pagi", "timothy"); ?> </H1>
 </body>
 </html>