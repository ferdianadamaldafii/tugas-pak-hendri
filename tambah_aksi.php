<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$satuanbarang = $_POST['satuanbarang'];
$stokbarang = $_POST['stokbarang'];
$hargabarang = $_POST['hargabarang'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_tokosparepart values('','$kodebarang','$namabarang','$satuanbarang','$stokbarang','$hargabarang')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>

