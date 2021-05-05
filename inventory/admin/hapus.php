<?php 
// koneksi database
include '../config.php';

// menangkap data id yang di kirim dari url
$kode_barang = $_GET['kode_barang'];


// menghapus data dari database
mysqli_query($koneksi,"delete from peminjaman where kode_barang='$kode_barang'");

$data=mysqli_query($koneksi,"select * from tabel_barang where kode_barang='$kode_barang'");
    while($d = mysqli_fetch_array($data)) {
    $jumlah_stok=$d['jumlah_barang'];
    
    }
 $query_update = "update stok_barang set
sisa_barang='$jumlah_stok'
where kode_barang='$kode_barang'
";


mysqli_query($koneksi,$query_update);

// mengalihkan halaman kembali ke tampil.php
header("location:pengembalian.php");

?>