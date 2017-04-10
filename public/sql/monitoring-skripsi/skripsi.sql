-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 11:48 AM
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
  `upload_berkas_proposal` varchar(100) NOT NULL,
  `upload_berkas_skripsi` varchar(100) NOT NULL,
  `nip_petugas` varchar(50) NOT NULL,
  `tgl_sidangpro` date DEFAULT NULL,
  `waktu_sidangpro` time DEFAULT NULL,
  `tempat_sidangpro` varchar(25) NOT NULL,
  `nilai_sidangpro` int(11) NOT NULL,
  `tgl_sidangskrip` date DEFAULT NULL,
  `waktu_sidangskrip` time DEFAULT NULL,
  `tempat_sidangskrip` varchar(25) NOT NULL,
  `nilai_sidangskrip` int(25) NOT NULL,
  `tanggal_pengumpulan_proposal` date DEFAULT NULL,
  `tanggal_pengumpulan_skripsi` date DEFAULT NULL,
  `is_verified` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `NIM`, `id_kbk`, `id_statusprop`, `id_statusskrip`, `Judul`, `upload_berkas_proposal`, `upload_berkas_skripsi`, `nip_petugas`, `tgl_sidangpro`, `waktu_sidangpro`, `tempat_sidangpro`, `nilai_sidangpro`, `tgl_sidangskrip`, `waktu_sidangskrip`, `tempat_sidangskrip`, `nilai_sidangskrip`, `tanggal_pengumpulan_proposal`, `tanggal_pengumpulan_skripsi`, `is_verified`, `created_at`, `updated_at`) VALUES
(1, '081411631038', 2, 3, 1, 'TOPSIS', 'https://drive.google.com/open?id=0ByPoVtJEf-ZEaGRQaHVzM000Ylk', 'https://drive.google.com/open?id=0ByPoVtJEf-ZEaGRQaHVzM000Ylk', '199672815126', '2017-04-06', '07:50:00', 'LABKOM 4', 74, '2017-04-23', '09:00:00', 'LABKOM 2', 0, '2017-04-02', '2017-04-09', 2, '2017-04-09 01:46:23', '2017-04-09 01:46:23');

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
  MODIFY `id_skripsi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
