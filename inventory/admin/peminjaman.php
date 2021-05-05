<?php 
// koneksi database
include '../config.php';
?>

<?php
// mendeklarasikan variabel pada tabel tabel_barang
$kode_barang=$_POST['kode_barang'];
$jenis_barang=$_POST['jenis_barang'];
$nama_barang=$_POST['nama_barang'];
$spesifikasi_barang=$_POST['spesifikasi_barang'];
$tahun_masuk=$_POST['tahun_masuk'];
$kondisi_barang=$_POST['kondisi_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$tempat_barang=$_POST['tempat_barang'];
 






// mendeklarasikan variabel pada tabel peminjam
$id_peminjam=$_POST['id_peminjam'];
$nama_peminjam=$_POST['nama_peminjam'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jen_kel=$_POST['jen_kel'];
$status=$_POST['status'];
$kelas=$_POST['kelas'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>TRANSAKSI PEMINJAMAN</title>
</head>
<body background="bubbles.jpg">
	<fieldset>
	<legend>TRANSAKSI PEMINJAMAN</legend>
	<form method="post" action="peminjaman_act.php">
		<table border="0">
		<tr>
			<td>NIS/Kode Mapel</td>
				<td>
					<select name="id_peminjam" >
		            <option>- Pilih NIS/Kode Mapel.. -</option>
		            <?php 
		               	$data_peminjam=mysqli_query($koneksi,"select * from peminjam order by id_peminjam asc");
		            	if(mysqli_num_rows($data_peminjam)) {
		            ?>
		            <?php 
		                	while($peminjam= mysqli_fetch_array($data_peminjam)) {
		            ?>
		                    <option value="<?php echo $peminjam['id_peminjam']; ?>"><?php echo $peminjam['id_peminjam']; ?></option>
		            <?php 
		                	 } ?>
		            <?php 
		            	} 
		            ?>
		       		</select>
				</td>
				
		</tr>
			<tr>
				<td>Nama Peminjam</td>
				<td><input type="text" name="nama_peminjam"></td>
			</tr>
			<tr>
				<td>Kode Barang</td>
				<td>

					<select name="kode_barang" onchange="changeValue(this.value)" >
		            <option>- Pilih Kode Barang.. -</option>
		            <?php 
		            	$jsArray = "var kode_brg = new Array();\n";
		            	$data_brg=mysqli_query($koneksi,"select * from tabel_barang order by kode_barang asc");
		            	if(mysqli_num_rows($data_brg)) {
		            ?>
		                <?php 
		                	while($brg= mysqli_fetch_array($data_brg)) {
		                ?>
		                    <option value="<?php echo $brg['kode_barang']; ?>"><?php echo $brg['kode_barang']; ?></option>
		                <?php 
		                	$jsArray .= "kode_brg['" . $brg['kode_barang'] . "'] = {jenis_brg:'" . addslashes($brg['jenis_barang']) . "',nama_brg:'" . addslashes($brg['nama_barang']) . "',kondisi_brg:'" . addslashes($brg['kondisi_barang']) . "'};\n"; } ?>
		            	<?php 
		            	} 
		            	?>
		       		</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Barang</td>
				<td>
					<input type="text"  name="jenis_barang" id="jenis_brg" readonly="readonly">
				</td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>
					<input type="text"  name="nama_barang" id="nama_brg"  readonly="readonly">
				</td>
			</tr>
			<tr>
				<td>Kondisi Barang</td>
				<td>
					<input type="text"  name="kondisi_barang" id="kondisi_brg"  readonly="readonly">
				</td>
				
			</tr>
			<tr>
				<td>Jumlah Pinjaman</td>
				<td><input type="text" name="jumlah_pinjaman"></td>
			</tr>
			<tr>
				<td>Jangka Waktu Peminjaman</td>
				<td><input type="text" name="jangka_waktu"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="simpan" value="simpan"></td>
			</tr>
			
		</table>
	</form>
	</fieldset>
	
	<script type="text/javascript">    
    			<?php echo $jsArray; ?>  
    			function changeValue(kode_barang){  
    			document.getElementById('jenis_brg').value = kode_brg[kode_barang].jenis_brg;  
    			document.getElementById('nama_brg').value = kode_brg[kode_barang].nama_brg;
    			document.getElementById('kondisi_brg').value = kode_brg[kode_barang].kondisi_brg; 
				};
	</script>
</body>
</html>

