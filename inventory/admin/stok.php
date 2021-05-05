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

//mengambil data dari tabel tabel_barang
$data_brg=mysqli_query($koneksi,"select jumlah_barang from tabel_barang ");
$brg=mysqli_fetch_array($data_brg)	;	            	

$kode_barang=$_POST['kode_barang'];
$jenis_barang=$_POST['jenis_barang'];
$nama_barang=$_POST['nama_barang'];
$kondisi_barang=$_POST['kondisi_barang'];
$id_peminjam=$_POST['id_peminjam'];
$nama_peminjam=$_POST['nama_peminjam'];
$jumlah_pinjaman=$_POST['jumlah_pinjaman'];
$jangka_waktu=$_POST['jangka_waktu'];


//mengambil data dari tabel peminjaman
$data_peminjaman=mysqli_query($koneksi,"select jumlah_pinjaman from peminjaman ");
$peminjaman=mysqli_fetch_array($data_peminjaman)	;
?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA LAPORAN STOK BARANG</title>
</head>
<body background="bubbles.jpg">
	<center>
		<h2>DATA LAPORAN STOK BARANG</h2>
	</center>
	<?php 
	include '../config.php';
	?>
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th width="15%">Kode Barang</th>
			<th width="18%">Jenis Barang</th>
			<th>Nama Barang</th>
			<th width="15%">Kondisi Barang</th>
			<th width="15%">Sisa Barang</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from stok_barang");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['kode_barang']; ?></td>
			<td><?php echo $data['jenis_barang']; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['kondisi_barang']; ?></td>
			<td><?php echo $data['sisa_barang']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>