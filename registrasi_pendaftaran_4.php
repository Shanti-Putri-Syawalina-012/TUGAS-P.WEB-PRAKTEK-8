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
	$sql = "SELECT * FROM tbl_data_ibu";
	$data = mysqli_query($conn, $sql);
	$d = mysqli_fetch_array($data);
	?>	

	<div class="container" style="background-color: white; width: 800px; min-height: 400px; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); padding: 50px 10px;">
		<form method="post" action="proses_kependaftaranakhir.php">
			<table cellspacing="4" style="margin-top: 20px;">
				<tr>
					<h2 style="font-size: 20px; font-weight: 800; text-align: center;">FORMULIR PESERTA DIDIK</h2>
					<br>
					<h3 style="font-size: 20px; font-weight: 400; text-align: center;">DATA IBU KANDUNG</h3>
				</tr>
			<tr>
				<td>Nama Ibu Kandung</td>
				<td>
					<input type="text" name="nama" required="" value="<?php echo $d['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Tahun Lahir</td>
				<td>
					<input type="date" name="tahun_lahir" required="" value="<?php echo $d['tahun_lahir']; ?>">
				</td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>
    				<select name="pendidikan" required="">
        					<option value="Tidak sekolah" selected>Tidak sekolah</option>
        					<option value="Putus SD" selected>Putus SD</option>
        					<option value="SD sederajat" selected>SD Sederajat</option>
        					<option value="SMP Sederajat" selected>SMP Sederajat</option>
        					<option value="SMA sederajat" selected>SMA Sederajat</option>
        					<option value="D1" selected>D1</option>
        					<option value="D2" selected>D2</option>
        					<option value="D3" selected>D3</option>
        					<option value="D4/S1" selected>D4/S1</option>
        					<option value="S2" selected>S2</option>
        					<option value="S3" selected>S3</option>
    				</select>
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>
					<select name="pekerjaan" required="">
        					<option value="Tidak Bekerja" selected>Tidak Bekerja</option>
        					<option value="Nelayan" selected>Nelayan</option>
        					<option value="Petani" selected>Petani</option>
        					<option value="Peternak" selected>Peternak</option>
        					<option value="PNS/TNI/POLRI" selected>PNS/TNI/POLRI</option>
        					<option value="Karyawan Swasta" selected>Karyawan Swasta</option>
        					<option value="Pedagang Kecil" selected>Pedagang Kecil</option>
        					<option value="Pedagang Besar" selected>Pedagang Besar</option>
        					<option value="Wiraswasta" selected>Wiraswasta</option>
        					<option value="Wirausaha" selected>Wirausaha</option>
        					<option value="Buruh" selected>Buruh</option>
        					<option value="Pensiun" selected>Pensiun</option>
        					<option value="Lain-lain" selected>Lain-lain</option>
    				</select>
				</td>
			</tr>
			<tr>
				<td>Penghasilan Bulanan</td>
				<td>
					<select name="penghasilan_bulanan" required="">
        					<option value="Kurang dari 500.000" selected>Kurang dari 500,000</option>
        					<option value="500.000 - 999.9999" selected>500,000 - 999.9999</option>
        					<option value="1 jt - 1.999.999" selected>1 jt - 1.999.999</option>
        					<option value="2 jt - 4.999.999" selected>2 jt - 4.999.999</option>
        					<option value="5 jt - 20 jt" selected>5 jt - 20 jt</option>
        					<option value="lebih dari 20 juta" selected>lebih dari 20 juta</option>
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
				<td style="font-size: 12px">Cek data dengan benar!<br>Jika sudah benar,<br>klik Next untuk lanjut ke<br> halaman berikutnya</td>
				<td>
					<a href="tampilan.php"></a>
					<input type="submit" value="Next" class="btn btn-primary" name="Next">
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>