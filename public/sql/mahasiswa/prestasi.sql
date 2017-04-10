-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2017 pada 11.54
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
-- Struktur dari tabel `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id` int(12) NOT NULL,
  `nip_petugas` varchar(15) DEFAULT '0312456789',
  `nim` varchar(15) NOT NULL DEFAULT '081411631013',
  `kelompok_kegiatan` varchar(70) NOT NULL,
  `jenis_kegiatan` varchar(70) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `prestasi` varchar(30) NOT NULL,
  `tahun_kegiatan` varchar(4) NOT NULL,
  `penyelenggara` varchar(30) NOT NULL,
  `file_prestasi` varchar(50) NOT NULL,
  `ps_is_verified` int(12) NOT NULL DEFAULT '0',
  `skor` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `nip_petugas`, `nim`, `kelompok_kegiatan`, `jenis_kegiatan`, `tingkat`, `prestasi`, `tahun_kegiatan`, `penyelenggara`, `file_prestasi`, `ps_is_verified`, `skor`, `created_at`, `updated_at`) VALUES
(4, NULL, '081411631013', 'Kegiatan Wajib Universitas', 'PPKMB', 'Universitas', 'kegiatan prestasi a', '2017', 'unair', 'hkjd.jpg', 1, NULL, '2017-04-09 02:00:17', '2017-04-09 02:00:17'),
(6, '0312456789', '081411631013', 'Kegiatan Bidang Organisasi dan Kepemimpinan', 'Panitia Kegiatan Kemahasiswaan', 'Departemen/Prodi', 'kegiatan prestasi c', '2016', 'unair', 'jhfd.jpg', 0, NULL, '2017-04-09 04:56:05', '2017-04-09 04:56:05'),
(7, '0312456789', '081411631013', 'Kegiatan Bidang Minat dan Bakat', 'Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat', 'Fakultas', 'afgvd', '2017', 'unair', 'jhfhsj.jpg', 0, NULL, '2017-04-10 02:44:09', '2017-04-10 02:44:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
