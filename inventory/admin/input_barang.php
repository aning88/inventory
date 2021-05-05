<?php 
// koneksi database
include '../config.php';
$kode_barang=$_POST['kode_barang'];
$jenis_barang=$_POST['jenis_barang'];
$nama_barang=$_POST['nama_barang'];
$spesifikasi_barang=$_POST['spesifikasi_barang'];
$tahun_masuk=$_POST['tahun_masuk'];
$kondisi_barang=$_POST['kondisi_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$tempat_barang=$_POST['tempat_barang'];




?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA BARANG</title>
</head>
<body background="bubbles.jpg">
	<fieldset>
	<legend>INPUT DATA BARANG</legend>
	<form method="post" action="eksekusi.php">
		<table border="0">
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="kode_barang"></td>
			</tr>
			<tr>
				<td>Jenis Barang</td>
				<td><input type="text" name="jenis_barang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>Spesifikasi Barang</td>
				<td><input type="text" name="spesifikasi_barang"></td>
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td><input type="text" name="tahun_masuk"></td>
			</tr>
			<tr>
				<td>Kondisi Barang</td>
				<td><input type="text" name="kondisi_barang"></td>
			</tr>
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jumlah_barang"></td>
			</tr>
			<tr>
				<td>Tempat Barang</td>
				<td><input type="text" name="tempat_barang"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="simpan" value="simpan"></td>
			</tr>
			
		</table>
	</form>
	</fieldset>
</body>
</html>

