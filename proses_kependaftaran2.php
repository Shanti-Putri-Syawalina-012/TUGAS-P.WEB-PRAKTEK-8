<?php
include 'koneksi.php';
	if (isset($_POST['Next'])) {
		$jenis_pendaftaran = $_POST['jenis_pendaftaran'];
		$tanggal_masuk_sekolah = $_POST['tanggal_masuk_sekolah'];
		$nis = $_POST['nis'];
		$no_peserta_ujian = $_POST['no_peserta_ujian'];
		$paud = $_POST['paud'];
		$tk = $_POST['tk'];
		$no_skhun = $_POST['no_skhun'];
		$no_ijazah = $_POST['no_ijazah'];
		$hobi = $_POST['hobi'];
		$cita_cita = $_POST['cita_cita'];

		$sql = mysqli_query($conn,"INSERT INTO tbl_regis (jenis_pendaftaran, tanggal_masuk_sekolah, nis, no_peserta_ujian, paud, tk, no_skhun, no_ijazah, hobi, cita_cita) VALUES ('$jenis_pendaftaran', '$tanggal_masuk_sekolah', '$nis', '$no_peserta_ujian', '$paud', '$tk', '$no_skhun', '$no_ijazah', '$hobi', '$cita_cita')");
		if ($sql) {
			echo "<script>alert('Isi Data Berhasil. Selanjutnya Mengisi Form Data Diri!'); window.location.href='registrasi_pendaftaran_2.php'</script>";
		} else {
			echo "<script>alert('Data Registrasi Gagal Ditambahkan!!'). ;</script>". mysqli_error($conn);
    	}
    }
?>