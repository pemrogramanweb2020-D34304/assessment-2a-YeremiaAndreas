<?php 
include 'koneksi.php';
$no_meja = $_GET['no_meja'];
mysqli_query($koneksi,"SELECT pemesan.*,makanan * FROM pemesan, makanan where no_meja='$no_meja'");
header("location:forminput1.php");
?>