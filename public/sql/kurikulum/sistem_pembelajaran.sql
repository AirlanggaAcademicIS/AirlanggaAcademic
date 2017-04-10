-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2017 pada 07.49
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
-- Struktur dari tabel `sistem_pembelajaran`
--

CREATE TABLE IF NOT EXISTS `sistem_pembelajaran` (
  `id` int(11) NOT NULL,
  `sistem_pembelajaran` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sistem_pembelajaran`
--

INSERT INTO `sistem_pembelajaran` (`id`, `sistem_pembelajaran`, `created_at`, `updated_at`) VALUES
(1, 'Ceramah', '2017-04-09 07:38:28', '2017-04-09 22:38:00'),
(2, 'Presentasi', '2017-04-09 22:38:15', '2017-04-09 22:38:15'),
(3, 'Diskusi', '2017-04-09 22:38:24', '2017-04-09 22:38:24'),
(4, 'Tugas terstruktur', '2017-04-09 22:41:44', '2017-04-09 22:41:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sistem_pembelajaran`
--
ALTER TABLE `sistem_pembelajaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sistem_pembelajaran`
--
ALTER TABLE `sistem_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
