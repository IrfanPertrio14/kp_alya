<?php 

$host = "localhost";
$user = "root";
$pass = "1234";
$db = "dbpemesanan"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

	if (!$koneksi) {
		die("Koneksi Gagal:".mysqli_connect_error());
	}
 ?>