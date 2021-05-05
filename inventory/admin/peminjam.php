<?php 
// koneksi database
include '../config.php';
$id_peminjam=$_POST['id_peminjam'];
$nama_peminjam=$_POST['nama_peminjam'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jen_kel=$_POST['jen_kel'];
$status=$_POST['status'];
$kelas=$_POST['kelas'];

// menginput data ke database
mysqli_query($koneksi,"insert into peminjam values('$id_peminjam','$nama_peminjam','$no_hp','$alamat','$jen_kel','$status','$kelas')");


?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA PEMINJAM</title>
</head>
<body background="bubbles.jpg">
	<fieldset>
	<legend>INPUT DATA PEMINJAM</legend>
	<form method="post">
		<table border="0">
			<tr>
				<td>NIS/Kode Mapel</td>
				<td><input type="text" name="id_peminjam"></td>
			</tr>
			<tr>
				<td>Nama Peminjam</td>
				<td><input type="text" name="nama_peminjam"></td>
			</tr>
			<tr>
				<td>No. Handphone</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jen_kel" value="Laki-Laki">Laki-Laki</td>
				<td><input type="radio" name="jen_kel" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="radio" name="status" value="Guru">Guru</td>
				<td><input type="radio" name="status" value="Siswa">Siswa</td>
			</tr>
			<tr>
				<td>Kelas/Mapel Guru</td>
				<td>
					<select name="kelas">
						<option>Pilih Kelas/Mapel Guru</option>
						<option value="X TKJ 1">X TKJ 1</option>
						<option value="X TKJ 2">X TKJ 2</option>
						<option value="X TKJ 3">X TKJ 3</option>
						<option value="XI TKJ 1">XI TKJ 1</option>
						<option value="XI TKJ 2">XI TKJ 2</option>
						<option value="XI TKJ 3">XI TKJ 3</option>
						<option value="XII TKJ 1">XII TKJ 1</option>
						<option value="XII TKJ 2">XII TKJ 2</option>
						<option value="XII TKJ 3">XII TKJ 3</option>
						<option value="GURU TKJ">GURU TKJ</option>
						<option value="GURU NON TKJ">GURU NON TKJ</option>
						<option value="KITS">ANGGOTA KITS</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="simpan" value="simpan"></td>
			</tr>
			
		</table>
	</form>
	</fieldset>
</body>
</html>

