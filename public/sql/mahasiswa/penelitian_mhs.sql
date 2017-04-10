-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 01:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
-- Table structure for table `penelitian_mhs`
--

CREATE TABLE `penelitian_mhs` (
  `kode_penelitian` int(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `peneliti` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `halaman_naskah` varchar(10) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `besar_dana` varchar(10) NOT NULL,
  `sk` varchar(30) NOT NULL,
  `publikasi` varchar(30) NOT NULL,
  `kategori_penelitian` varchar(30) NOT NULL,
  `is_verified` int(3) NOT NULL DEFAULT '0',
  `file_pen` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penelitian_mhs`
--

INSERT INTO `penelitian_mhs` (`kode_penelitian`, `judul`, `peneliti`, `fakultas`, `tahun`, `halaman_naskah`, `sumber_dana`, `besar_dana`, `sk`, `publikasi`, `kategori_penelitian`, `is_verified`, `file_pen`, `created_at`, `updated_at`) VALUES
(10008, 'Fiber Optic Displacement Sensors and Their Applications', 'M. Yusuf Indra', 'Saintek', '2015', '15', '-', '-', '-', '-', 'Penelitian Dosen', 1, NULL, '2017-04-10 11:50:36', NULL),
(10009, 'Pembangkit Listrik Tenaga Dalam', 'M. Yusuf Indra', 'Saintek', '2016', '25', 'DIKTI', '10 juta', '-', '-', 'PKM', 0, NULL, '2017-04-10 11:51:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penelitian_mhs`
--
ALTER TABLE `penelitian_mhs`
  ADD PRIMARY KEY (`kode_penelitian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penelitian_mhs`
--
ALTER TABLE `penelitian_mhs`
  MODIFY `kode_penelitian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10010;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
