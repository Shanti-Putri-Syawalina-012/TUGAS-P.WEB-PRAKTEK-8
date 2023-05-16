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
	$sql = "SELECT * FROM tbl_data_pribadi";
	$data = mysqli_query($conn, $sql);
	$d = mysqli_fetch_array($data);
	?>	

	<div class="container" style="background-color: white; width: 800px; min-height: 400px; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); padding: 50px 10px;">
		<form method="post" action="proses_kependaftaran3.php">
			<table cellspacing="4" style="margin-top: 20px;">
				<tr>
					<h2 style="font-size: 20px; font-weight: 800; text-align: center;">FORMULIR PESERTA DIDIK</h2>
					<br>
					<h3 style="font-size: 20px; font-weight: 400; text-align: center;">DATA PRIBADI</h3>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>
						<input type="text" name="nama_lengkap" required="" value="<?php echo $d['nama_lengkap'];?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" name="jenis_kelamin" value="Laki-laki" required="">Laki-laki
	            		<input type="radio" name="jenis_kelamin" value="Perempuan" required="">Perempuan
					</td>
				</tr>
				<tr>
					<td>NISN</td>
					<td>
						<input type="number" name="nisn" required="" value="<?php echo $d['nisn']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIK</td>
					<td>
						<input type="number" name="nik" required="" value="<?php echo $d['nik']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>
						<input type="text" name="tempat_lahir" required="" value="<?php echo $d['tempat_lahir']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>
						<input type="date" name="tanggal_lahir" required="" value="<?php echo $d['tanggal_lahir']; ?>">
					</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>
						<select name="agama" required="">
        					<option value="Islam" selected>Islam</option>
        					<option value="Kristen/Protestan" selected>Kristen/Protestan</option>
        					<option value="Katholik" selected>Katholik</option>
        					<option value="Hindu" selected>Hindu</option>
        					<option value="Budha" selected>Budha</option>
        					<option value="Khong Hu Chu" selected>Khong Hu Chu</option>
        					<option value="Lainnya" selected>Lainnya</option>
    					</select>
					</td>
				</tr>
				<tr>
					<td>Berkebutuhkan Khusus</td>
					<td>
						<select name="berkebutuhan_khusus" required="">
        					<option value="Tidak" selected>Tidak</option>
        					<option value="Netra(A)" selected>Netra(A)</option>
        					<option value="Rungu(B)" selected>Rungu(B)</option>
        					<option value="Grahita ringan (C)" selected>Grahita ringan (C)</option>
        					<option value="Grahita sedang (C1)" selected>Grahita sedang (C1)</option>
        					<option value="Deksa ringan (D1)" selected>Daksa ringan (D)</option>
        					<option value="Daksa sedang (D1)" selected>Daksa sedang (D1)</option>
        					<option value="Laras (E)" selected>Laras (E)</option>
        					<option value="Netra(A)" selected>Netra(A)</option>
        					<option value="Wicara (F)" selected>Wicara (F)</option>
        					<option value="Tuna ganda (G)" selected>Tuna ganda (G)</option>
        					<option value="Hiper aktif (H)" selected>Hiper aktif (H)</option>
        					<option value="Cerdas Istimewa (I)" selected>Cerdas Istimewa (I)</option>
        					<option value="Bakat Istimewa (J)" selected>Bakat Istimewa (J)</option>
        					<option value="Kesulitan Belajar (K)" selected>Kesulitan Belajar (K)</option>
        					<option value="Narkoba (N)" selected>Narkoba (N)</option>
        					<option value="Indigo (O)" selected>Indigo (O)</option>
        					<option value="Down Sindrome (P)" selected>Sindrome (P)</option>
        					<option value="Autis (Q)" selected>Autis (Q)</option>
    					</select>
					</td>
				</tr>
				<tr>
					<td>Alamat Jalan</td>
					<td>
						<textarea cols="20" rows="5" name="alamat" required="" value="<?php echo $d['alamat']; ?>"></textarea>
					</td>
				</tr>
				<tr>
					<td>RT</td>
					<td>
						<input type="number" name="rt" required="" value="<?php echo $d['rt']; ?>">
			
					</td>
				</tr>
				<tr>
					<td>RW</td>
					<td>
						<input type="number" name="rw" required="" value="<?php echo $d['rw']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Dusun</td>
					<td>
						<input type="text" name="dusun" required="" value="<?php echo $d['dusun']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Kelurahan/Desa</td>
					<td>
						<input type="text" name="kelurahan" required="" value="<?php echo $d['kelurahan']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td>
						<input type="text" name="kecamatan" required="" value="<?php echo $d['kecamatan']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kode Pos</td>
					<td>
						<input type="number" name="kode_pos" required="" value="<?php echo $d['kode_pos']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat Tinggal</td>
					<td>
						<select name="tempat_tinggal" required="">
        					<option value="Bersama orang tua" selected>Bersama orang tua</option>
        					<option value="Wali" selected>Wali</option>
        					<option value="Kos" selected>Kos</option>
        					<option value="Asrama" selected>Asrama</option>
        					<option value="Panti Asuhan" selected>Panti Asuhan</option>
        					<option value="Lainnya" selected>Lainnya</option>
    					</select>
					</td>
				</tr>
				<tr>
					<td>Moda Transportasi</td>
					<td>
						<select name="tranportasi" required="">
        					<option value="Jalan kali" selected>Jalan kaki</option>
        					<option value="Kendaraan pribadi" selected>Kendaraan pribadi</option>
        					<option value="Kendaraan umum/angkot/pete-pete" selected>Kos</option>
        					<option value="Asrama" selected>Kendaraan umum/angkot/pete-pete</option>
        					<option value="Jemputan sekolah" selected>Jemputan sekolah</option>
        					<option value="Kereta api" selected>Kereta api</option>
        					<option value="Ojek" selected>Ojek</option>
        					<option value="Andong/Bendi/Sado/Dokar/Delman/Becak" selected>Andong/Bendi/Sado/Dokar/Delman/Becak</option>
        					<option value="Perahu penyebrangan/Rakit/Getek" selected>Perahu penyebrangan/Rakit/Getek</option>
        					<option value="Lainnya" selected>Lainnya</option>
    					</select>
					</td>
				</tr>
				<tr>
					<td>Nomor Hp</td>
					<td>
						<input type="number" name="no_hp" required="" value="<?php echo $d['no_hp']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nomor Telepon</td>
					<td>
						<input type="number" name="no_tlp" required="" value="<?php echo $d['no_tlp']; ?>">
					</td>
				</tr>
				<tr>
					<td>E-mail Pribadi</td>
					<td>
						<input type="text" name="email" required="" value="<?php echo $d['email']; ?>">
					</td>
				</tr>
				<tr>
					<td>Penerima KPS/PHK/KIP</td>
					<td>
						<input type="radio" name="penerima_kps" value="Ya" required="">Ya
	            		<input type="radio" name="penerima_kps" value="Tidak" required="">Tidak
					</td>
				</tr>
				<tr>
					<td>No. KPS/PHK/KIP</td>
					<td>
						<input type="number" name="no_kps" required="" value="<?php echo $d['no_kps/php/kip']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td>
						<input type="radio" name="kewarganegaraan" value="Indonesia" required="">Indonesia(WNI)
	            		<input type="radio" name="kewarganegaraan" value="Asing" required="">Asing(WNA)
					</td>
					<td>Nama Negara</td>
					<td>
						<input type="text" name="negara" required="" value="<?php echo $d['no_kps/php/kip']; ?>">
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px">Cek data dengan benar!<br>Jika sudah benar,<br>klik Next untuk lanjut ke<br> halaman berikutnya</td>
					<td>
						<a href="registrasi_pendaftaran_3.php"></a>
						<input type="submit" value="Next" class="btn btn-primary" name="Next">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>