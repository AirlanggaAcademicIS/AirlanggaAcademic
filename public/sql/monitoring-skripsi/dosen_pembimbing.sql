-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2017 pada 16.26
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Struktur dari tabel `dosen_pembimbing`
--

CREATE TABLE `dosen_pembimbing` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_skripsi` int(11) NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen_pembimbing`
--

INSERT INTO `dosen_pembimbing` (`id`, `id_skripsi`, `nip`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '214', 1, '2017-04-08 23:25:17', '2017-04-08 23:43:24', '2017-04-08 23:43:24'),
(2, 1, '215', 1, '2017-04-08 23:25:26', '2017-04-08 23:52:40', '2017-04-08 23:52:40'),
(3, 1, '216', 1, '2017-04-08 23:40:51', '2017-04-08 23:52:42', '2017-04-08 23:52:42'),
(4, 2, '214', 1, '2017-04-08 23:49:53', '2017-04-08 23:52:45', '2017-04-08 23:52:45'),
(5, 1, '214', 1, '2017-04-08 23:52:52', '2017-04-08 23:54:05', '2017-04-08 23:54:05'),
(6, 1, '214', 2, '2017-04-08 23:54:12', '2017-04-09 00:02:54', '2017-04-09 00:02:54'),
(7, 1, '215', 1, '2017-04-08 23:55:55', '2017-04-09 00:02:57', '2017-04-09 00:02:57'),
(8, 1, '214', 1, '2017-04-09 00:03:04', '2017-04-09 00:12:30', '2017-04-09 00:12:30'),
(9, 2, '214', 2, '2017-04-09 00:04:07', '2017-04-09 00:08:16', '2017-04-09 00:08:16'),
(10, 1, '216', 1, '2017-04-09 00:08:23', '2017-04-09 00:12:27', '2017-04-09 00:12:27'),
(11, 1, '216', 1, '2017-04-09 00:08:53', '2017-04-09 00:08:58', '2017-04-09 00:08:58'),
(12, 3, '216', 1, '2017-04-09 00:09:05', '2017-04-09 00:12:24', '2017-04-09 00:12:24'),
(13, 1, '214', 1, '2017-04-09 00:12:33', '2017-04-09 00:13:59', '2017-04-09 00:13:59'),
(14, 1, '214', 2, '2017-04-09 00:12:56', '2017-04-09 00:13:56', '2017-04-09 00:13:56'),
(15, 2, '214', 1, '2017-04-09 00:13:32', '2017-04-09 00:13:53', '2017-04-09 00:13:53'),
(16, 1, '214', 1, '2017-04-09 00:13:42', '2017-04-09 00:13:51', '2017-04-09 00:13:51'),
(17, 1, '214', 1, '2017-04-09 00:30:02', '2017-04-09 02:12:00', '2017-04-09 02:12:00'),
(18, 2, '215', 1, '2017-04-09 01:10:56', '2017-04-09 03:34:49', '2017-04-09 03:34:49'),
(19, 3, '216', 2, '2017-04-09 01:54:59', '2017-04-09 03:58:41', '2017-04-09 03:58:41'),
(20, 3, '214', 2, '2017-04-09 01:57:43', '2017-04-09 03:24:23', '2017-04-09 03:24:23'),
(21, 1, '214', 2, '2017-04-09 03:34:44', '2017-04-09 04:00:51', '2017-04-09 04:00:51'),
(22, 3, '216', 2, '2017-04-09 03:57:24', '2017-04-09 04:00:27', NULL),
(23, 2, '216', 1, '2017-04-09 03:59:02', '2017-04-09 03:59:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
