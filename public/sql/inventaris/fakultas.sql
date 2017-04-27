-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 05:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(25) NOT NULL,
  `id_universitas` int(25) NOT NULL,
  `kode_fakultas` varchar(25) NOT NULL,
  `nama_fakultas` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `id_universitas`, `kode_fakultas`, `nama_fakultas`, `created_at`, `updated_at`) VALUES
(1, 2, '01', 'Sains Teknologi', '2017-04-09 06:09:46', '2017-04-08 23:09:46'),
(2, 2, '02', 'Keolahragaan', '2017-04-09 06:10:28', '2017-04-08 23:10:28'),
(3, 2, '03', 'Kesehatan Masyarakat', '2017-04-09 06:12:29', '2017-04-08 23:12:29'),
(4, 2, '04', 'Keperawatan', '2017-04-09 06:12:40', '2017-04-08 23:12:40'),
(5, 2, '05', 'Kedokteran Hewan', '2017-04-09 06:12:51', '2017-04-08 23:12:51'),
(9916, 2, '07', 'Kedokteran Gigi', '2017-04-08 23:14:00', '2017-04-08 23:14:00'),
(9917, 2, '08', 'Kedokteran Umum', '2017-04-08 23:14:34', '2017-04-08 23:14:34'),
(9918, 2, '09', 'Hukum', '2017-04-08 23:15:07', '2017-04-08 23:15:07'),
(9919, 2, '10', 'Psikologi', '2017-04-08 23:15:41', '2017-04-08 23:15:41'),
(9920, 2, '11', 'Ekonomi Bisnis', '2017-04-08 23:16:15', '2017-04-08 23:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9921;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
