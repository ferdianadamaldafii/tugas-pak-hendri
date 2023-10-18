<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$satuanbarang = $_POST['satuanbarang'];
$stokbarang = $_POST['stokbarang'];
$hargabarang = $_POST['hargabarang'];
 
// update data ke database
mysqli_query($koneksi,"update tb_tokosparepart set kodebarang='$kodebarang', namabarang='$namabarang', satuanbarang='$satuanbarang', stokbarang='$stokbarang' where $hargabarang=$hargabarang'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 