<html>
<body>
 
	<h2>CRUD DATA MAKANAN</h2>
	<br/>
	<a href="tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>DATA</h3>
	<form method="post" action="aksi.php">
		<table>
			<tr>			
				<td>Nomor Meja</td>
				<td><input type="number" name="no_meja"></td>
			</tr>
			<tr>
				<td>Nama Pemesan</td>
				<td><input type="text" name="nama_pemesan"></td>
			</tr>
			<tr>
				<td>Jenis Makanan</td>
				<td><input type="text" name="jenis_makanan"></td>
			</tr>
            <td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>