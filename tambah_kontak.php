<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
</head>
<body>
	
	<form method="post" action="keep.php">
		<table>
			<tr>
				<td>ID</td>
				<td>
					<input type="text" name="id">
				</td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td>
					<input type="text" name="email">
				</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>
					<textarea cols="20" rows="5" name="alamat"></textarea>
				</td>
			</tr>
			<tr>
				<td>PESAN</td>
				<td>
					<textarea cols="20" rows="5" name="pesan"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
			</tr>
		</table>
	</form>
</body>
</html>