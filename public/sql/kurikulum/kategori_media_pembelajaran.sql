-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2017 pada 16.49
-- Versi Server: 10.1.21-MariaDB
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
-- Struktur dari tabel `kategori_media_pembelajaran`
--

CREATE TABLE `kategori_media_pembelajaran` (
  `id` int(11) NOT NULL,
  `kategori_media_pembelajaran` varchar(5) NOT NULL,
  `media_pembelajaran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_media_pembelajaran`
--

INSERT INTO `kategori_media_pembelajaran` (`id`, `kategori_media_pembelajaran`, `media_pembelajaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PL', 'Perangkat Lunak', '2017-04-09 07:39:28', '2017-04-09 07:39:28', NULL),
(2, 'PK', 'Perangkat Keras', '2017-04-09 07:39:39', '2017-04-09 07:39:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_media_pembelajaran`
--
ALTER TABLE `kategori_media_pembelajaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_media_pembelajaran`
--
ALTER TABLE `kategori_media_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
