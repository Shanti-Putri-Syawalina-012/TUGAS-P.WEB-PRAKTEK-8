<!DOCTYPE html>
<html>
<head>
	<title>Formulir Peserta Didik</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php
	include 'koneksi.php';
	$sql = "SELECT * FROM tbl_regis";
	$data = mysqli_query($conn, $sql);
	$d = mysqli_fetch_array($data);
	?>	

	<div class="container" style="background-color: white; width: 800px; min-height: 400px; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); padding: 50px 10px;">
		<form method="post" action="proses_kependaftaran2.php">
			<table cellspacing="4" style="margin-top: 20px;">
				<tr>
					<h2 style="font-size: 20px; font-weight: 800; text-align: center;">FORMULIR PESERTA DIDIK</h2>
					<label for="tanggal">Tanggal:</label>
					<p>
						<input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly><br>
					</p>
					<h3 style="font-size: 20px; font-weight: 400; text-align: center;">REGISTRASI PESERTA DIDIK</h3>
				</tr>
				<tr>
					<td>Jenis Pendaftaran</td>
					<td>
						<input type="number" name="jenis_pendaftaran" required="" value="<?php echo $d['jenis_pendaftaran'];?>">
					</td>
				</tr>
				<tr>
					<td>Tanggal Masuk Sekolah</td>
					<td>
						<input type="date" name="tanggal_masuk_sekolah" required="" value="<?php echo $d['tanggal_masuk_sekolah']; required?>" >
					</td>
				</tr>
				<tr>
					<td>NIS</td>
					<td>
						<input type="number" name="nis" required=""value="<?php echo $d['nis']; required?> ">
					</td>
				</tr>
				<tr>
					<td>Nomor Peserta Ujian</td>
					<td>
						<input type="number" name="no_peserta_ujian" required="" value="<?php echo $d['no_peserta_ujian']; required?>">
					</td>
				</tr>
				<tr>
					<td>Apakah Pernah PAUD</td>
					<td>
						<input type="radio" name="paud" value="Ya" required="">Ya
		            	<input type="radio" name="paud" value="Tidak" required="">Tidak
					</td>
				</tr>
				<tr>
					<td>Apakah Pernah TK</td>
					<td>
						<input type="radio" name="tk" value="Ya" required="">Ya
		            	<input type="radio" name="tk" value="Tidak" required="">Tidak
					</td>
				</tr>
				<tr>
					<td>No. Seri SKHUN Sebelumnya</td>
					<td>
						<input type="number" name="no_skhun" value="<?php echo $d['no_skhun']; required?>">
					</td>
				</tr>
				<tr>
					<td>No. Seri Ijazah Sebelumnya</td>
					<td>
						<input type="number" name="no_ijazah" value="<?php echo $d['no_ijazah']; required ?>">
					</td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>
						<select name="hobi" required="">
        					<option value="Olahraga" selected>Olahraga</option>
        					<option value="Kesenian" selected>Kesenian</option>
        					<option value="Membaca" selected>Membaca</option>
        					<option value="Menulis" selected>Menulis</option>
        					<option value="Traveling" selected>Traveling</option>
        					<option value="Lainnya" selected>Lainnya</option>
    					</select>
					</td>
				</tr>
				<tr>
					<td>Cita-Cita</td>
					<td>
    					<select name="cita_cita">
        					<option value="PNS" selected>PNS</option>
        					<option value="TNI/POLRI" selected>TNI/POLRI</option>
        					<option value="Guru/Dosen" selected>Guru/Dosen</option>
        					<option value="Dokter" selected>Dokter</option>
        					<option value="Politikus" selected>Politikus</option>
        					<option value="Wiraswasta" selected>Wiraswasta</option>
        					<option value="Seni/Lukis/Artis/Sejenis" selected>Seni/Lukis/Artis/Sejenis</option>
        					<option value="Lainnya" selected>Lainnya</option>
    					</select>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px">Cek data dengan benar!<br>Jika sudah benar,<br>klik Next untuk lanjut ke<br> halaman berikutnya</td>
					<td>
						<a href="registrasi_pendaftaran_2.php"></a>
						<input type="submit" value="Next" class="btn btn-primary" name="Next">
					</td>
				</tr>
			</table>
		</form>
	</div>	
</body>
</html>