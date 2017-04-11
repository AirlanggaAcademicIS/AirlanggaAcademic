-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2017 pada 13.08
-- Versi Server: 5.6.26
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
-- Struktur dari tabel `akunmahasiswa`
--

CREATE TABLE IF NOT EXISTS `akunmahasiswa` (
  `id` int(12) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nip` varchar(15) NOT NULL DEFAULT '123456',
  `password` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akunmahasiswa`
--

INSERT INTO `akunmahasiswa` (`id`, `nim`, `nama`, `nip`, `password`, `created_at`, `updated_at`) VALUES
(6, '123345', 'brambram', '123456', 'nim', '2017-04-09 04:44:44', '2017-04-09 04:45:05'),
(7, '0811', 'fandi', '123456', '0811', '2017-04-09 04:58:29', '2017-04-09 04:58:29'),
(8, '12345678', 'osasa', '123456', '12345678', '2017-04-09 04:59:43', '2017-04-09 05:04:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akunmahasiswa`
--
ALTER TABLE `akunmahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akunmahasiswa`
--
ALTER TABLE `akunmahasiswa`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
