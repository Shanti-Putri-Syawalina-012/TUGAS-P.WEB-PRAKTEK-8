<?php 
session_start();
//cek apakah session terdaftar
session_unset();
session_destroy();
//variabel session salah, kembalikan ke login
header("Location: index.php");
?>