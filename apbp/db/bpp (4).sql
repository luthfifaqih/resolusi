-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2021 at 12:10 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama_kel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_bantuan` varchar(255) NOT NULL,
  `priode` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `nama_kel`, `alamat`, `jenis_bantuan`, `priode`, `keterangan`) VALUES
(1, 'aab', 'sw', 'aaw', 2232, 'aaassaaa');

-- --------------------------------------------------------

--
-- Table structure for table `gapoktan`
--

CREATE TABLE `gapoktan` (
  `id_anggota` int(50) NOT NULL,
  `nama_anggota` varchar(128) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jenjang_usia` int(20) NOT NULL,
  `nama_gapoktan` varchar(50) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gapoktan`
--

INSERT INTO `gapoktan` (`id_anggota`, `nama_anggota`, `lahir`, `alamat`, `jenis_kelamin`, `jenjang_usia`, `nama_gapoktan`, `nama_desa`, `jabatan`) VALUES
(53, 'luthfi  1', '2021-12-08', 'pebayuran ', 'perempuan', 20, 'gumir', 'karang reja', 'bendahara'),
(54, 'nur azani bayu rezki', '1998-09-11', 'karawang', 'Laki-Laki', 23, 'agunggeng', 'karang bahagia', 'sekretaris'),
(55, 'm.david', '2021-12-11', 'karawang', 'Laki-Laki', 31, 'agunggeng', 'karang bahagia', 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `hama`
--

CREATE TABLE `hama` (
  `id_hama` int(111) NOT NULL,
  `nama_hama` varchar(125) NOT NULL,
  `jenis_hama` varchar(128) NOT NULL,
  `penanganan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hama`
--

INSERT INTO `hama` (`id_hama`, `nama_hama`, `jenis_hama`, `penanganan`) VALUES
(1, 'asas1', 'ssaa1', 'ssssssss 1');

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id_tanah` int(11) NOT NULL,
  `desa` varchar(128) NOT NULL,
  `jenis_tanah` varchar(128) NOT NULL,
  `lbl` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id_tanah`, `desa`, `jenis_tanah`, `lbl`) VALUES
(1, 'pebayuran', 'dsdaw', '12233113'),
(2, 'bantar jaya', 'dsdaw', '1223311');

-- --------------------------------------------------------

--
-- Table structure for table `nonsub`
--

CREATE TABLE `nonsub` (
  `id_pupuk` int(50) NOT NULL,
  `jenis_pupuk` varchar(500) NOT NULL,
  `kandungan` varchar(500) NOT NULL,
  `harga` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonsub`
--

INSERT INTO `nonsub` (`id_pupuk`, `jenis_pupuk`, `kandungan`, `harga`) VALUES
(1, 'npk1', 'hshsias1', '5000'),
(2, 'npk', 'hshsias', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `penyuluh`
--

CREATE TABLE `penyuluh` (
  `id_penyuluh` int(6) NOT NULL,
  `nama_penyuluh` varchar(50) NOT NULL,
  `jabatan_penyuluh` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kontak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyuluh`
--

INSERT INTO `penyuluh` (`id_penyuluh`, `nama_penyuluh`, `jabatan_penyuluh`, `desa`, `kontak`) VALUES
(2, 'nur azani bayu rezki', 'pengawas hama', 'bantar jaya', '6554564567'),
(3, 'bayu', 'pengawas hama', 'pebayuran', '6554564567');

-- --------------------------------------------------------

--
-- Table structure for table `pupuksub`
--

CREATE TABLE `pupuksub` (
  `id_pupuk` int(50) NOT NULL,
  `jenis_pupuk` varchar(100) NOT NULL,
  `kandungan` varchar(100) NOT NULL,
  `harga` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pupuksub`
--

INSERT INTO `pupuksub` (`id_pupuk`, `jenis_pupuk`, `kandungan`, `harga`) VALUES
(4, 'npk1', 'hshsias', '5000'),
(5, 'npk', 'hshsias', '33333');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'nur azani', '123', 'bayu rezki\r\n', 1),
(2, 'bayu', '123', 'bayu', 0),
(11, 'Bayu rez', '123', '123', 1),
(12, 'admin', '123', 'admin@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `gapoktan`
--
ALTER TABLE `gapoktan`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `hama`
--
ALTER TABLE `hama`
  ADD PRIMARY KEY (`id_hama`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_tanah`);

--
-- Indexes for table `nonsub`
--
ALTER TABLE `nonsub`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- Indexes for table `penyuluh`
--
ALTER TABLE `penyuluh`
  ADD PRIMARY KEY (`id_penyuluh`);

--
-- Indexes for table `pupuksub`
--
ALTER TABLE `pupuksub`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gapoktan`
--
ALTER TABLE `gapoktan`
  MODIFY `id_anggota` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `hama`
--
ALTER TABLE `hama`
  MODIFY `id_hama` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id_tanah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nonsub`
--
ALTER TABLE `nonsub`
  MODIFY `id_pupuk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyuluh`
--
ALTER TABLE `penyuluh`
  MODIFY `id_penyuluh` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pupuksub`
--
ALTER TABLE `pupuksub`
  MODIFY `id_pupuk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
