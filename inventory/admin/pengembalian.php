<!DOCTYPE html>
<html>
<head>
	<title>TRANSAKSI PENGEMBALIAN</title>
</head>
<body background="bubbles.jpg">
	<center><h2>DATA PENGEMBALIAN BARANG</h2></center>
<table border="1">
	<tr>
			<th>NO</th>
			<th>NIS/MAPEL</th>
			<th>NAMA PEMINJAM</th>
			<th>KODE BARANG</th>
			<th>NAMA BARANG</th>
			<th>JUMLAH PINJAMAN</th>
			<th>KONDISI BARANG</th>
			<th>STATUS PENGEMBALIAN</th>
	</tr>
		<?php
		include '../config.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from peminjaman order by id_peminjam asc");
		while($d = mysqli_fetch_array($data)){

		?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['id_peminjam'];?></td>
		<td><?php echo $d['nama_peminjam'];?></td>
		<td><?php echo $d['kode_barang'];?></td>
		<td><?php echo $d['nama_barang'];?></td>
		<td><?php echo $d['jumlah_pinjaman'];?></td>
		<td><?php echo $d['kondisi_barang'];?></td>
		<td>
			<a href="hapus.php?kode_barang=<?php echo $d['kode_barang'];?>">Dikembalikan</a>
		</td>
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>


			
					
			