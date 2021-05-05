<?php 
// koneksi database
include '../config.php';
$kode_barang=$_POST['kode_barang'];
$jenis_barang=$_POST['jenis_barang'];
$nama_barang=$_POST['nama_barang'];
$kondisi_barang=$_POST['kondisi_barang'];
$id_peminjam=$_POST['id_peminjam'];
$nama_peminjam=$_POST['nama_peminjam'];
$jumlah_pinjaman=$_POST['jumlah_pinjaman'];
$jangka_waktu=$_POST['jangka_waktu'];

// menginput data ke database
$query_insert=mysqli_query($koneksi,"insert into peminjaman values('$kode_barang','$jenis_barang','$nama_barang','$kondisi_barang','$id_peminjam','$nama_peminjam','$jumlah_pinjaman','$jangka_waktu')");

$data=mysqli_query($koneksi,"select tabel_barang.*, peminjaman.* from tabel_barang, peminjaman where tabel_barang.kode_barang=peminjaman.kode_barang");
    while($d = mysqli_fetch_array($data)) {
    $jumlah_pinjam=$d['jumlah_pinjaman'];
    $jumlah_brg=$d['jumlah_barang'];
    $sisa_barang=$jumlah_brg-$jumlah_pinjam;
    }
//$data=mysqli_query($koneksi,"select jumlah_barang from tabel_barang");
//$d=mysqli_fetch_array($data);
//$sisa_barang=$d-$jumlah_pinjaman;

//mengupdate data ke tabel stok_barang
//$query_update = mysqli_query($koneksi,"update stok_barang set sisa_barang='$sisa_barang'");
$query_update = "update stok_barang set
sisa_barang='$sisa_barang'
where kode_barang='$kode_barang'
";
//eksekusi query insert1
mysqli_query($koneksi,$query_insert);

//eksekusi query insert1
mysqli_query($koneksi,$query_update);

//mengupdate data ke tabel stok_barang

header("location: peminjaman.php");

?>