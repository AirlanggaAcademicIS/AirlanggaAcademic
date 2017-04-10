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
-- Table structure for table `kbk`
--

CREATE TABLE IF NOT EXISTS `kbk` (
  `id_kbk` int(11) NOT NULL,
  `jenis_kbk` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbk`
--

INSERT INTO `kbk` (`id_kbk`, `jenis_kbk`, `created_at`, `updated_at`) VALUES
(1, 'Data Mining', '2017-04-09 02:22:56', '2017-04-09 02:22:56'),
(2, 'Sistem Pendukung Keputusan', '2017-04-09 02:26:08', '2017-04-09 02:26:08'),
(3, 'Information System Engineering', '2017-04-09 02:26:15', '2017-04-09 02:26:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kbk`
--
ALTER TABLE `kbk`
  ADD PRIMARY KEY (`id_kbk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kbk`
--
ALTER TABLE `kbk`
  MODIFY `id_kbk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
