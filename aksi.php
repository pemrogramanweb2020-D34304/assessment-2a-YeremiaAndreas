<?php 
include 'koneksi.php';
$no_meja = $_POST['no_meja'];
$nama_pemesan = $_POST['nama_pemesan'];
$jenis_makanan = $_POST['jenis_makanan'];
$harga = $_POST['harga'];
 
mysqli_query($koneksi,"insert into pemesan values('','$no_meja','$nama_pemesan','$jenis_makanan','$harga')");
 
header("location:tampil.php");
?>