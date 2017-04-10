-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 08:04 AM
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
-- Table structure for table `asset`
--

CREATE TABLE IF NOT EXISTS `asset` (
  `id_asset` int(11) NOT NULL,
  `nip_petugas` varchar(50) NOT NULL,
  `serial_barcode` text NOT NULL,
  `nama_asset` text NOT NULL,
  `lokasi` text NOT NULL,
  `expired_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_supplier` varchar(50) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92686 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id_asset`, `nip_petugas`, `serial_barcode`, `nama_asset`, `lokasi`, `expired_date`, `nama_supplier`, `harga_satuan`, `jumlah_barang`, `total_harga`, `created_at`, `updated_at`) VALUES
(35125, '196701102007011002', 'asd261adhhshkahd2132jjs', 'Komputer', 'Labkom', '2017-04-08 23:16:09', 'Dhania Ulfa', 1000000, 3, 3000000, '2017-04-08 06:46:37', NULL),
(41937, '198103192009101002', 'adjh64726dwhgasckjq18', 'Papan Tulis', 'Ruang 312', '2017-04-28 17:00:00', 'Faiq Nur Majid', 150000, 2, 300000, '2017-04-08 23:20:50', NULL),
(67153, '197105041993032001', 'sajf882jhfjshsak13jsa', 'Proyektor', 'Ruang 301', '2017-04-13 17:00:00', 'Dhanang Wibisono', 750000, 2, 1500000, '2017-04-08 23:18:08', NULL),
(92671, '197707012007102001', 'asdksjerjlkscnjewhr12715361d', 'Bangku Kuliah', 'Ruang 101', '2017-04-04 17:00:00', 'Vincentius', 200000, 10, 2000000, '2017-04-08 23:19:29', NULL),
(92685, '19782748221', 'fehfi272ssdsahfq', 'aaaa', 'aa', '2017-04-10 17:00:00', 'aaaa', 1000000, 2, 2000000, '2017-04-09 20:59:26', '2017-04-09 20:59:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92686;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
