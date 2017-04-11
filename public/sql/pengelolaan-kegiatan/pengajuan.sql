-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 02:38 PM
-- Server version: 10.1.16-MariaDB
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
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(60) NOT NULL,
  `latar_belakang` text NOT NULL,
  `tujuan_kegiatan` text NOT NULL,
  `mekanisme_kegiatan` text NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tempat_pengajuan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `nama_kegiatan`, `latar_belakang`, `tujuan_kegiatan`, `mekanisme_kegiatan`, `tanggal_pengajuan`, `tempat_pengajuan`, `created_at`, `updated_at`) VALUES
(8, 'Rapat Kerja HIMSI', 'Dalam era zaman yang kompetitif ini, setiap struktur sosial akan selalu berusaha meningkatkan kapasitasnya agar dapat terus beradaptasi dengan perkembangan jaman. Dengan terpilihnya pengurus baru Himpunan Mahasiswa Sistem Informasi (HIMSI) Universitas Airlangga periode 2016 dan akan dimulainya periode kepengurusan baru HIMSI, untuk itu diperlukan persiapan sebelum memulai program kerja dalam menjalankan kepungurusan HIMSI.\r\nRapat Kerja merupakan sebuah kegiatan sebagai acuan dari program kerja yang akan dilaksanakan sebuah organisasi, juga sebagai proses manajemen yang akan dilaksanakan oleh pengurus dalam kegiatannya kedepan nanti, kegiatan inilah yang akan  memberikan panduan bagaimana dan kemana program kerja akan diarahkan. Rapat Kerja sebagai pijakan awal dari seluruh agenda yang akan disusun oleh para pengurus baru HIMSI. Kegiatan ini dirasa sangat penting untuk diadakan agar terjadi keselarasan antara pengurus baru dan tujuan HIMSI. Dengan demikian diharapkan dengan adanya Rapat Kerja, sistematika program kerja selama setahun kedepan akan lebih terorganisir dan terarah.', 'a.	Persiapan awal pengurus baru HIMSI sebelum menjalankan program kerja.\r\nb.	Menyelaraskan antara pengurus baru dan tujuan HIMSI.\r\nc.	Merekatkan hubungan antar pengurus HIMSI.', 'Rapat Kerja Pengurus HIMSI 2016 dengan tema “HIMSI Bangkit”. Adapun mekanisme dan rancangan kegiatannya adalah sebagai berikut:\r\n1.	Rapat, di dalamnya terdapat agenda beberapa pleno, mulai dari membahas program kerja tiap bidang, tanggal pelaksanaan program kerja dan dana untuk program kerja tersebut.\r\n2.	Diskusi, dimaksudkan untuk memberikan kesempatan diskusi kepada seluruh pengurus untuk mempertimbangkan program kerja.\r\n3.	Game dan/atau Outdoor activity, yang bertujuan untuk saling mengenal dan merekatkan hubungan antar pengurus HIMSI 2016.   \r\nDari berbagai serangkaian kegiatan ini diharapkan dapat memenuhi target yaitu sistematika program kerja HIMSI selama setahun kedepan akan lebih terorganisir dan terarah.', '2017-04-16', 'Kegiatan ini akan dilaksanakan pada:\r\nhari	:  Senin – Rabu,\r\ntanggal	:  25 - 27 Januari 2016,\r\nwaktu	:  Sesuai susunan acara,\r\ntempat	:  Villa Gumrining, Jl. Air Panas, Pacet, Mojokerto', '2017-04-10 12:31:44', '2017-04-10 05:31:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
