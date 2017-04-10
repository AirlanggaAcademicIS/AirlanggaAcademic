-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2017 pada 15.07
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Struktur dari tabel `detail_anggota`
--

CREATE TABLE `detail_anggota` (
  `id_anggota` int(11) NOT NULL,
  `kode_penelitian` int(11) NOT NULL DEFAULT '100001',
  `anggota` varchar(70) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verified` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_anggota`
--

INSERT INTO `detail_anggota` (`id_anggota`, `kode_penelitian`, `anggota`, `status`, `created_at`, `updated_at`, `is_verified`) VALUES
(1, 100001, 'Mas Yosia', 1, '2017-04-09 10:29:06', '2017-04-09 05:59:44', 0),
(3, 100001, 'osas', 1, '2017-04-09 05:44:01', '2017-04-09 05:44:01', 0),
(4, 100001, 'osas', 1, '2017-04-09 05:44:02', '2017-04-09 05:44:02', 0),
(5, 100001, 'men', 0, '2017-04-09 05:44:35', '2017-04-09 05:44:35', 0),
(6, 100001, 'Mas Yosie', 0, '2017-04-09 05:53:22', '2017-04-09 05:53:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_anggota`
--
ALTER TABLE `detail_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_anggota`
--
ALTER TABLE `detail_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
