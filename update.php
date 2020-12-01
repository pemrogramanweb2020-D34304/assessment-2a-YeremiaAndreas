<html>
<body>
 
	<h2>CRUD</h2>
	<br/>
	<a href="tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>UPDATE</h3>
 
	<?php
	include 'koneksi.php';
	$no_meja = $_GET['no_meja'];
    $data = mysqli_query($koneksi,"SELECT pemesan.*,makanan * FROM pemesan, makanan WHERE pemesan.no_meja=makanan.no_meja");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>No meja</td>
					<td>
						<input type="hidden" name="no_meja" value="<?php echo $d['no_meja']; ?>">
						<input type="number" name="no_meja" value="<?php echo $d['no_meja']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama pemesan</td>
					<td><input type="text" name="nama_pemesan" value="<?php echo $d['nama_pemesan']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Makanan</td>
					<td><input type="text" name="jenis_makanan" value="<?php echo $d['jenis_makanan']; ?>"></td>
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