<?php
$koneksi = mysqli_connect("localhost","root","","ass2");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>