<!DOCTYPE html>
<html>
<head>
	<title>DATA LAPORAN BARANG</title>
</head>
<body background="bubbles.jpg">

	<center>

		<h2>DATA LAPORAN BARANG</h2>
		

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
			<th width="15%">Tahun Masuk Barang</th>
			<th width="15%">Jumlah Barang</th>
			
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tabel_barang");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['kode_barang']; ?></td>
			<td><?php echo $data['jenis_barang']; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['kondisi_barang']; ?></td>
			<td><?php echo $data['tahun_masuk']; ?></td>
			<td><?php echo $data['jumlah_barang']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	

</body>
</html>