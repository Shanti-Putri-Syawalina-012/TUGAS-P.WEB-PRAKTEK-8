<?php
include 'koneksi.php';
	if (isset($_POST['Next'])) {
		$nama = $_POST['nama'];
		$tahun_lahir = $_POST['tahun_lahir'];
		$pendidikan = $_POST['pendidikan'];
		$pekerjaan = $_POST['pekerjaan'];
		$penghasilan_bulanan = $_POST['penghasilan_bulanan'];
		$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];

		$sql= mysqli_query($conn,"INSERT INTO tbl_data_ibu (nama, tahun_lahir, pendidikan, pekerjaan, penghasilan_bulanan, berkebutuhan_khusus)VALUES ('$nama', '$tahun_lahir', '$pendidikan', '$pekerjaan', 'penghasilan_bulanan', 'berkebutuhan_khusus')");
		if ($sql) {
			echo "<script>alert('Isi Data Berhasil. Selanjutnya Ke Halaman Tampilan!'); window.location.href='tampilan.php'</script>";
		} else {
			echo "<script>alert('Data Ayah Gagal Ditambahkan!!'). ;</script>". mysqli_error($conn);
		}
	}
?>