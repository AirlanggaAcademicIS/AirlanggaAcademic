-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 06:07 AM
-- Server version: 10.1.13-MariaDB
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
-- Table structure for table `detail_penelitian`
--

CREATE TABLE `detail_penelitian` (
  `id` int(15) NOT NULL,
  `kode_penelitian` int(12) NOT NULL DEFAULT '100002',
  `abstract` text NOT NULL,
  `background` text NOT NULL,
  `objective` text NOT NULL,
  `methods` text NOT NULL,
  `results` text NOT NULL,
  `is_verified` int(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penelitian`
--

INSERT INTO `detail_penelitian` (`id`, `kode_penelitian`, `abstract`, `background`, `objective`, `methods`, `results`, `is_verified`, `created_at`, `updated_at`) VALUES
(3, 100002, 'In urna libero, pharetra a malesuada ac, dignissim scelerisque magna. Phasellus et lobortis purus. Integer convallis nisl purus, posuere rhoncus dolor lacinia vitae. Proin ut tellus tincidunt, vehicula diam non, consectetur tortor. Curabitur porttitor elementum ipsum, vitae viverra lectus malesuada vitae. Praesent metus tortor, mattis eget rhoncus sed, hendrerit et erat. Suspendisse ullamcorper ante ut turpis tincidunt, nec rhoncus eros lacinia. Vestibulum vitae odio quis nisi egestas tempor id ac ex. Donec lobortis eros suscipit enim efficitur accumsan. Praesent venenatis ut purus sed semper. Cras egestas viverra suscipit.', 'In urna libero, pharetra a malesuada ac, dignissim scelerisque magna. Phasellus et lobortis purus. Integer convallis nisl purus, posuere rhoncus dolor lacinia vitae. Proin ut tellus tincidunt, vehicula diam non, consectetur tortor. Curabitur porttitor elementum ipsum, vitae viverra lectus malesuada vitae. Praesent metus tortor, mattis eget rhoncus sed, hendrerit et erat. Suspendisse ullamcorper ante ut turpis tincidunt, nec rhoncus eros lacinia. Vestibulum vitae odio quis nisi egestas tempor id ac ex. Donec lobortis eros suscipit enim efficitur accumsan. Praesent venenatis ut purus sed semper. Cras egestas viverra suscipit.', 'In urna libero, pharetra a malesuada ac, dignissim scelerisque magna. Phasellus et lobortis purus. Integer convallis nisl purus, posuere rhoncus dolor lacinia vitae. Proin ut tellus tincidunt, vehicula diam non, consectetur tortor. Curabitur porttitor elementum ipsum, vitae viverra lectus malesuada vitae. Praesent metus tortor, mattis eget rhoncus sed, hendrerit et erat. Suspendisse ullamcorper ante ut turpis tincidunt, nec rhoncus eros lacinia. Vestibulum vitae odio quis nisi egestas tempor id ac ex. Donec lobortis eros suscipit enim efficitur accumsan. Praesent venenatis ut purus sed semper. Cras egestas viverra suscipit.', 'In urna libero, pharetra a malesuada ac, dignissim scelerisque magna. Phasellus et lobortis purus. Integer convallis nisl purus, posuere rhoncus dolor lacinia vitae. Proin ut tellus tincidunt, vehicula diam non, consectetur tortor. Curabitur porttitor elementum ipsum, vitae viverra lectus malesuada vitae. Praesent metus tortor, mattis eget rhoncus sed, hendrerit et erat. Suspendisse ullamcorper ante ut turpis tincidunt, nec rhoncus eros lacinia. Vestibulum vitae odio quis nisi egestas tempor id ac ex. Donec lobortis eros suscipit enim efficitur accumsan. Praesent venenatis ut purus sed semper. Cras egestas viverra suscipit.', 'In urna libero, pharetra a malesuada ac, dignissim scelerisque magna. Phasellus et lobortis purus. Integer convallis nisl purus, posuere rhoncus dolor lacinia vitae. Proin ut tellus tincidunt, vehicula diam non, consectetur tortor. Curabitur porttitor elementum ipsum, vitae viverra lectus malesuada vitae. Praesent metus tortor, mattis eget rhoncus sed, hendrerit et erat. Suspendisse ullamcorper ante ut turpis tincidunt, nec rhoncus eros lacinia. Vestibulum vitae odio quis nisi egestas tempor id ac ex. Donec lobortis eros suscipit enim efficitur accumsan. Praesent venenatis ut purus sed semper. Cras egestas viverra suscipit.', 0, '2017-04-09 20:59:27', '2017-04-09 20:59:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penelitian`
--
ALTER TABLE `detail_penelitian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penelitian`
--
ALTER TABLE `detail_penelitian`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
