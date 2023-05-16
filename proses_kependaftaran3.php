<?php
include 'koneksi.php';
	if (isset($_POST['Next'])) {
		$nama_lengkap = $_POST['nama_lengkap'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$nisn = $_POST['nisn'];
		$nik = $_POST['nik'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$agama = $_POST['agama'];
		$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
		$alamat = $_POST['alamat'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$dusun = $_POST['dusun'];
		$kelurahan = $_POST['kelurahan'];
		$kecamatan = $_POST['kecamatan'];
		$kode_pos = $_POST['kode_pos'];
		$tempat_tinggal = $_POST['tempat_tinggal'];
		$transportasi = $_POST['transportasi'];
		$no_hp = $_POST['no_hp'];
		$no_tlp = $_POST['no_tlp'];
		$email = $_POST['email'];
		$penerima_kps = $_POST['penerima_kps'];
		$no_kps = $_POST['no_kps'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$negara = $_POST['negara'];

		$sql= mysqli_query($conn,"INSERT INTO tbl_data_pribadi ( nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat, rt, rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, no_hp, no_tlp, email, penerima_kps, no_kps, kewarganegaraan, negara) VALUES ('$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', 'tempat_lahir', 'tanggal_lahir', 'agama', 'berkebutuhan_khusus', 'alamat', 'rt', 'rw', 'dusun', 'kelurahan', 'kecamatan', 'kode_pos', 'tempat_tinggal', 'transportasi', 'no_hp', 'no_tlp', 'email', 'penerima_kps', 'no_kps', 'kewarganegaraan', 'negara')");
		if ($sql) {
			echo "<script>alert('Isi Data Berhasil. Selanjutnya Mengisi Form Data Ayah Kandung!'); window.location.href='registrasi_pendaftaran_3.php'</script>";
		} else {
			echo "<script>alert('Data Registrasi Gagal Ditambahkan!!'). ;</script>". mysqli_error($conn);
		}
	}
?>