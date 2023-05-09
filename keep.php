<?php
include 'conn.php';
//menyimpan data kedalam variable
$id		= $_POST['id'];
$nama	= $_POST['nama'];
$email	= $_POST['email'];
$alamat	= $_POST['alamat'];
$kota	= $_POST['kota'];
$pesan	= $_POST['pesan'];

// query SQL untuk insert data
$query = "INSERT INTO kontak SET id='$id', nama='$nama', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($conn, $query);
// mengalihkan ke halaman tampilkontak.php
header("location:tampilkontak.php");
?>