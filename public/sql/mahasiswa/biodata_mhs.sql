-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 05:56 AM
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
-- Table structure for table `biodata_mhs`
--

CREATE TABLE `biodata_mhs` (
  `id` int(11) NOT NULL,
  `nip_petugas` varchar(15) NOT NULL DEFAULT '0312456789',
  `nim` varchar(15) NOT NULL,
  `nama_mhs` varchar(70) NOT NULL,
  `email_mhs` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `negara_asal` varchar(30) NOT NULL,
  `provinsi_asal` varchar(30) NOT NULL,
  `kota_asal` varchar(30) NOT NULL,
  `kota_tinggal` varchar(30) NOT NULL,
  `alamat_tinggal` varchar(50) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `kebangsaan` varchar(30) NOT NULL,
  `sma_asal` varchar(30) NOT NULL,
  `nama_ayah` varchar(70) NOT NULL,
  `nama_ibu` varchar(70) NOT NULL,
  `deskripsi_diri` text NOT NULL,
  `motto` varchar(70) NOT NULL,
  `foto_mhs` varchar(50) NOT NULL,
  `kartu_identitas` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata_mhs`
--

INSERT INTO `biodata_mhs` (`id`, `nip_petugas`, `nim`, `nama_mhs`, `email_mhs`, `jenis_kelamin`, `negara_asal`, `provinsi_asal`, `kota_asal`, `kota_tinggal`, `alamat_tinggal`, `ttl`, `angkatan`, `agama`, `kebangsaan`, `sma_asal`, `nama_ayah`, `nama_ibu`, `deskripsi_diri`, `motto`, `foto_mhs`, `kartu_identitas`, `created_at`, `updated_at`) VALUES
(1, '08777777', '081411631050', 'Halim', 'halim@gmail.com', 'Perempuan', 'indonesia', 'jawa timur', 'mojokerto', 'surabaya', 'jalan mulyorejo', 'mojokerto, 5 april 1997', '2014', 'Islam', 'indonesia', 'sma 1 moojokerto', 'adi', 'siti', 'aku berkacamata', 'do the best', '115351354864.jpg', '4843464.jpg', '2017-04-09 09:05:38', '2017-04-09 17:30:43'),
(2, '0312456789', '081411631001', 'hai', 'hai@gmail.com', 'Laki-Laki', 'Indonesia', 'Jawa Timur', 'Sidoarjo', 'Sidoarjo', 'Jalan Pahlawan', '06 Mei 1996', '2014', 'Islam', 'Indonesia', 'SMAN 2 Sidoarjo', 'Budi', 'Nur', 'saya kurus', 'apa aja boleh', '45343864346.jpg', '488434.jpg', '2017-04-09 17:30:22', '2017-04-09 17:30:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_mhs`
--
ALTER TABLE `biodata_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_mhs`
--
ALTER TABLE `biodata_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
