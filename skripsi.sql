-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 04:45 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlangga_academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE IF NOT EXISTS `skripsi` (
  `id_skripsi` int(11) NOT NULL,
  `NIM` varchar(15) NOT NULL,
  `id_kbk` int(11) NOT NULL,
  `id_statusprop` int(11) NOT NULL,
  `id_statusskrip` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `upload_berkas` varchar(100) NOT NULL,
  `nip_petugas` varchar(50) NOT NULL,
  `tgl_sidangpro` date DEFAULT NULL,
  `waktu_sidangpro` time DEFAULT NULL,
  `tempat_sidangpro` varchar(25) NOT NULL,
  `nilai_sidangpro` int(11) NOT NULL,
  `tgl_sidangskrip` date DEFAULT NULL,
  `waktu_sidangskrip` time DEFAULT NULL,
  `tempat_sidangskrip` varchar(25) NOT NULL,
  `tanggal_pengumpulan_proposal` date DEFAULT NULL,
  `tanggal_pengumpulan_skripsi` date DEFAULT NULL,
  `is_verified` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id_skripsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
