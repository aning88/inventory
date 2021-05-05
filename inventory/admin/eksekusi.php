<?php
//koneksi database, sesuaikan dengan username dan password database Anda
include '../config.php';

//menangkap data yang dipostkan 
$kode_barang=$_POST['kode_barang'];
$jenis_barang=$_POST['jenis_barang'];
$nama_barang=$_POST['nama_barang'];
$spesifikasi_barang=$_POST['spesifikasi_barang'];
$tahun_masuk=$_POST['tahun_masuk'];
$kondisi_barang=$_POST['kondisi_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$tempat_barang=$_POST['tempat_barang'];

//$kode_barang=$_POST['kode_barang'];
//$jenis_barang=$_POST['jenis_barang'];
//$nama_barang=$_POST['nama_barang'];
//$kondisi_barang=$_POST['kondisi_barang'];
$id_peminjam=$_POST['id_peminjam'];
$nama_peminjam=$_POST['nama_peminjam'];
$jumlah_pinjaman=$_POST['jumlah_pinjaman'];
//$jangka_waktu=$_POST['jangka_waktu'];
$sisa_barang=$jumlah_barang-$jumlah_pinjaman;

//$kode_barang=$_POST['kode_barang'];
//$jenis_barang=$_POST['jenis_barang'];
//$nama_barang=$_POST['nama_barang'];
$jumlah_masuk=$jumlah_barang;
//$kondisi_barang=$_POST['kondisi_barang'];
$jumlah_keluar=$jumlah_pinjaman;


//perintah query insert ke table barang
//$query_insert1 = mysqli_query($koneksi,"insert into tabel_barang values('$kode_barang','$jenis_barang','$nama_barang','$spesifikasi_barang','$tahun_masuk','$kondisi_barang','$jumlah_barang','$tempat_barang')");


$query_insert1 = "insert into tabel_barang set
kode_barang='$kode_barang',
jenis_barang='$jenis_barang',
nama_barang='$nama_barang',
spesifikasi_barang='$spesifikasi_barang',
tahun_masuk='$tahun_masuk',
kondisi_barang='$kondisi_barang',
jumlah_barang='$jumlah_barang',
tempat_barang='$tempat_barang'
";

//perintah query insert ke table detail obat
$query_insert2 = "insert into stok_barang set
kode_barang='$kode_barang',
jenis_barang='$jenis_barang',
nama_barang='$nama_barang',
jumlah_masuk='$jumlah_masuk',
jumlah_keluar='$jumlah_keluar',
kondisi_barang='$kondisi_barang',
sisa_barang='$sisa_barang'
";

//eksekusi query insert1
$insert1 = mysqli_query($koneksi,$query_insert1);

//eksekusi query update
$insert2 = mysqli_query($koneksi,$query_insert2);

// mengalihkan halaman kembali ke input_barang.php
header("location:input_barang.php");
?>