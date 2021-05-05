-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2019 at 12:49 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(15) NOT NULL,
  `nama_peminjam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jen_kel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `nama_peminjam`, `no_hp`, `alamat`, `jen_kel`, `status`, `kelas`) VALUES
(111, 'coba saja', '081', 'alamat', 'Perempuan', 'Siswa', 'X TKJ 3'),
(888, 'Nuning', '085234', 'Blitar', 'Perempuan', 'Siswa', 'XII TKJ 3'),
(1111, 'q', '086', 'gg', 'Laki-Laki', 'Guru', 'XI TKJ 3'),
(12345, 'qwerty', '085', 'alamat', 'Laki-Laki', 'Guru', 'XI TKJ 1'),
(99999, 'naning', '085234', 'garum', 'Perempuan', 'Siswa', 'XII TKJ 1');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode_barang` int(15) NOT NULL,
  `jenis_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kondisi_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_peminjam` int(15) NOT NULL,
  `nama_peminjam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_pinjaman` int(15) NOT NULL,
  `jangka_waktu` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kode_barang` int(15) NOT NULL,
  `jenis_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kondisi_barang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sisa_barang` int(15) NOT NULL,
  `id_peminjam` int(15) NOT NULL,
  `nama_peminjam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_pinjaman` int(15) NOT NULL,
  `jangka_waktu` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_user` int(15) NOT NULL,
  `nama_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` int(12) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_user`, `nama_user`, `jabatan`, `no_hp`, `username`, `password`) VALUES
(1, 'admin', 'admin', 0, 'admin', 'admin'),
(2, 'naning', 'guru', 561355, 'naning', 'naning');

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `kode_barang` int(15) NOT NULL,
  `jenis_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_masuk` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_keluar` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `kondisi_barang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sisa_barang` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`kode_barang`, `jenis_barang`, `nama_barang`, `jumlah_masuk`, `jumlah_keluar`, `kondisi_barang`, `sisa_barang`) VALUES
(12345, 'Alat Jaringan', 'RB 941', '60', '', 'Baik', '60'),
(2, 'Peripheral', 'LAN Card', '5', '', 'Baik', '60'),
(3, 'bahan', 'wireless', '15', '', 'baik', '15'),
(9, 'bahan', 'konektor', '250', '', 'Baik', '250'),
(488, 'Alat Jaringan', 'LHG', '10', '', 'Baik', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `kode_barang` int(15) NOT NULL,
  `jenis_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `spesifikasi_barang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_masuk` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `kondisi_barang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_barang` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`kode_barang`, `jenis_barang`, `nama_barang`, `spesifikasi_barang`, `tahun_masuk`, `kondisi_barang`, `jumlah_barang`, `tempat_barang`) VALUES
(2, 'Peripheral', 'LAN Card', 'gigabit', '2018', 'Baik', '5', 'Rak B'),
(3, 'bahan', 'wireless', 'n', '2017', 'baik', '15', 'Rak A'),
(9, 'bahan', 'konektor', 'rj45', '2019', 'Baik', '250', 'Rak A'),
(488, 'Alat Jaringan', 'LHG', 'AC', '2019', 'Baik', '10', 'Rak G'),
(12345, 'Alat Jaringan', 'RB 941', 'SMIPS', '2018', 'Baik', '60', 'Rak A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `id_peminjam` (`id_peminjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_barang_2` (`kode_barang`),
  ADD KEY `id_peminjam` (`id_peminjam`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tabel_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_peminjam`) REFERENCES `peminjam` (`id_peminjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tabel_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_peminjam`) REFERENCES `peminjam` (`id_peminjam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `petugas` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD CONSTRAINT `stok_barang_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tabel_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
