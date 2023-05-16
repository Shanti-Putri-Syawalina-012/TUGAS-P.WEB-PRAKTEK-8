<?php 
session_start();
session_unset();
session_destroy();
header("Location: registrasi_pendaftaran.php");
?>