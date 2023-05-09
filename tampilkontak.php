<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>TAMPILAN KONTAK</h2>
	<a href="tambah_kontak.php">TAMBAH DATA KONTAK</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>ALAMAT</th>
			<th>KOTA</th>
			<th>PESAN</th>
		</tr>
		<?php
		include 'conn.php';
		$kontak = mysqli_query($conn, "SELECT * FROM kontak");
		foreach ($kontak as $row) {
			echo 
			"<tr>
			<td>".$row['id']."<?td>
			<td>".$row['nama']."</td>
			<td>".$row['email']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['kota']."<?td>
			<td>".$row['pesan']."</td>
			</tr>";
		}
		?>
	</table>
</body>
</html>