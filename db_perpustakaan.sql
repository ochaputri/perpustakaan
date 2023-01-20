-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 07:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` int(10) NOT NULL,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kelas` enum('VIIA','VIIB','VIIC','VIID','VIIE','VIIF','VIIG','VIIIA','VIIIB','VIIIC','VIIID','VIIIE','VIIIF','VIIIG','IXA','IXB','IXC','IXD','IXE','IXF','IXG') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelas`, `tgl_input`) VALUES
(98986, 'ICA', 'KALIBAGOR', '2019-02-17', 'p', 'VIIE', '2022-11-17 14:46:02'),
(20102111, 'ocha', 'KALIBAGOR', '2017-02-17', 'p', 'IXD', '2022-11-17 15:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `no_induk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `asal` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `edisi` int(11) NOT NULL,
  `pengarang` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tanggal_masuk` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `tahun_terbit` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `jilid` int(11) NOT NULL,
  `isbn` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `lokasi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahasa` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `no_induk`, `judul`, `asal`, `edisi`, `pengarang`, `penerbit`, `tanggal_masuk`, `tahun_terbit`, `jilid`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`, `bahasa`) VALUES
(45, '24580/19/B', '309 Tahun tidur di dalam Gua', 'B', 1, 'ABU LUTFHI  Ar Raji', 'As Salam Kids', '20 Agustus 2019', '2018', 1, '09875431', 1, 'Rak 1', '2022-11-17 15:04:18', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `lokasi`) VALUES
(1, 'Rak 1'),
(4, 'Rak 2'),
(5, 'Rak 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_pinjam` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_kembali` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_buku`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `tgl_input`) VALUES
(388, 45, '309 Tahun tidur di dalam Gua', 20102111, 'ocha', '17-11-2022', '17-11-2023', 'Pinjam', '2022-11-17 15:04:18'),
(386, 45, '309 Tahun tidur di dalam Gua', 98986, 'ICA', '17-11-2022', '17-11-2023', 'Pinjam', '2022-11-17 15:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `level` enum('admin','user') COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'My-Account-Icon.jpg'),
(2, 'user', 'user', 'user', 'user', 'login.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
