-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 10 Apr 2017 pada 16.16
-- Versi Server: 10.1.19-MariaDB
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
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL,
  `id_jenis_mk` int(11) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(20) NOT NULL,
  `sks` int(11) NOT NULL,
  `deskripsi_matkul` text NOT NULL,
  `capaian_matkul` text NOT NULL,
  `penilaian_matkul` varchar(35) NOT NULL,
  `pokok_pembahasan` text NOT NULL,
  `pustaka_utama` text NOT NULL,
  `pustaka_pendukung` text NOT NULL,
  `syarat_sks` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `id_jenis_mk`, `kode_matkul`, `nama_matkul`, `sks`, `deskripsi_matkul`, `capaian_matkul`, `penilaian_matkul`, `pokok_pembahasan`, `pustaka_utama`, `pustaka_pendukung`, `syarat_sks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 'e1ew', 'dwqqwd', 2, 'qqqqddqdq', 'dqdqwdcq', 'dqdqdq', 'dqwdqwdqw', 'dqdqwd', '', '21', '2017-04-09 15:53:20', '2017-04-09 15:53:44', '2017-04-09 15:53:44'),
(3, 3, 'dwdq', 'weqweqw', 2, 'cedqq', 'cqqdqwdq', 'dqwdqdq', 'dqdqdq', 'dqdqdq', '', '21', '2017-04-09 15:54:32', '2017-04-09 15:54:52', '2017-04-09 15:54:52'),
(4, 3, 'weq21', 'wdqqd', 2, 'pfoqep', 'oqkdpoqwk', 'qmopdqwod', 'qodqpodk', 'oqkdpoq', 'doqpdok', '20', '2017-04-09 16:04:10', '2017-04-09 16:04:10', NULL),
(5, 2, 'weq21', 'weq21', 2, 'pfoqep', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '20', '2017-04-09 16:05:01', '2017-04-09 16:49:50', '2017-04-09 16:49:50'),
(6, 2, 'weq21', 'weq21', 2, 'pfoqepdqwdq', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '20', '2017-04-09 16:32:33', '2017-04-09 16:49:45', '2017-04-09 16:49:45'),
(7, 3, 'weq21dw', 'weq21', 2, 'pfoqep', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '20', '2017-04-09 16:39:41', '2017-04-09 16:39:49', '2017-04-09 16:39:49'),
(8, 2, 'weq21', 'haloha', 4, 'pfoqepdqwdq', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '14', '2017-04-09 16:40:00', '2017-04-09 16:57:36', NULL),
(9, 3, 'weq21', 'jajaja', 2, 'pfoqepdqwdq', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '10', '2017-04-09 16:44:38', '2017-04-09 16:57:53', NULL),
(10, 3, 'weq21', 'weq21feww', 2, 'pfoqepdqwdq', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '18', '2017-04-09 16:49:31', '2017-04-09 16:50:27', '2017-04-09 16:50:27'),
(11, 1, 'weq21dfs', 'weqe', 2, 'pfoqepdqwdq', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '18', '2017-04-09 16:50:10', '2017-04-09 16:50:22', '2017-04-09 16:50:22'),
(12, 3, 'weq21dwqd', 'weq21', 2, 'pfoqepdqwdq', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '16', '2017-04-09 16:52:12', '2017-04-09 16:56:14', NULL),
(13, 3, 'weq21', 'weq21wqw', 3, 'pfoqepdqwdq', 'oqkdpoqwk', 'oqkdpoqwk', 'qodqpodk', 'oqkdpoq', 'doqpdok', '24', '2017-04-09 16:52:32', '2017-04-09 16:55:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_mk` (`id_jenis_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`id_jenis_mk`) REFERENCES `jenis_mk` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
