<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di Toko Sparepart Adam</title>
</head>
<body>
 
	<h2>Selamat Datang di Toko Sparepart Adam</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data BarangS</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_tokosparepart where idbarang='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="idbarang" value="<?php echo $d['idbarang']; ?>">
						<input type="text" name="kodebarang" value="<?php echo $d['kodebarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>namabarang</td>
					<td><input type="text" name="namabarang" value="<?php echo $d['namabarang']; ?>"></td>
				</tr>
				<tr>
					<td>satuanbarang</td>
					<td><input type="text" name="satuanbarang" value="<?php echo $d['satuanbarang']; ?>"></td>
				</tr>
				<tr>
                <td>stokbarang</td>
					<td><input type="text" name="stokbarang" value="<?php echo $d['stokbarang']; ?>"></td>
				</tr>
				<tr>
                <td>hargabarang</td>
					<td><input type="text" name="hargabarang" value="<?php echo $d['hargabarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>

