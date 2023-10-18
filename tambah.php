<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di Toko Sparepart Adam</title>
</head>
<body>
 
	<h2>Selamat Datang di Toko Sparepart Adam</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Tambahkan Data Barang</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>kodebarang</td>
				<td><input type="text" name="kodebarang"></td>
			</tr>
			<tr>
				<td>namabarang</td>
				<td><input type="text" name="namabarang"></td>
			</tr>
			<tr>
				<td>satuanbarang</td>
				<td><input type="text" name="satuanbarang"></td>
			</tr>
			<tr>
                <td>stokbarang</td>
				<td><input type="text" name="stokbarang"></td>
			</tr>
			<tr>
                <td>hargabarang</td>
				<td><input type="text" name="hargabarang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>

