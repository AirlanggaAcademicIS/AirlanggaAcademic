-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 02:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
-- Table structure for table `notulensi`
--

CREATE TABLE `notulensi` (
  `id_notulen` int(5) NOT NULL,
  `id_permohonan_ruang` varchar(12) NOT NULL,
  `nip_petugas` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_rapat` varchar(100) NOT NULL,
  `agenda_rapat` text NOT NULL,
  `waktu_pelaksanaan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hasil_pembahasan` longtext NOT NULL,
  `id_verifikasi` varchar(2) NOT NULL,
  `deskripsi_rapat` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notulensi`
--

INSERT INTO `notulensi` (`id_notulen`, `id_permohonan_ruang`, `nip_petugas`, `nip`, `nama_rapat`, `agenda_rapat`, `waktu_pelaksanaan`, `hasil_pembahasan`, `id_verifikasi`, `deskripsi_rapat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '123', '123', '123', 'asda', 'asd', '2017-04-08 17:00:00', 'asd', '1', 'asdasd', '2017-04-09 04:18:31', '2017-04-09 04:18:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notulensi`
--
ALTER TABLE `notulensi`
  ADD PRIMARY KEY (`id_notulen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notulensi`
--
ALTER TABLE `notulensi`
  MODIFY `id_notulen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
