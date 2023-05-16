<?php
//konfigurasi database
$host 	  = "localhost";
$user 	  = "root";
$password = "";
$database = "db_users";
//perintah php untuk akses ke database
$conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if (mysqli_connect_error()) {
	echo "Failed to connect to MySQL: ". mysqli_connect_error();
		exit();
	}
?>