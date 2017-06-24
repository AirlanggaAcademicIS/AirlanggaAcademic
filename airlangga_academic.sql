-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2017 at 11:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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

CREATE TABLE `asset` (
  `id_asset` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL,
  `serial_barcode` text NOT NULL,
  `nama_asset` text NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `expired_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_supplier` varchar(50) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id_asset`, `kategori_id`, `nip_petugas_id`, `status_id`, `serial_barcode`, `nama_asset`, `lokasi_id`, `expired_date`, `nama_supplier`, `harga_satuan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 1, '12345', 2, 'ASTSONY proyektor.png', 'SONY proyektor', 1, '2017-06-08 04:52:41', 'berlian komputer', 12000000, '2017-05-25 05:23:51', '2017-06-07 19:52:41', '2017-06-07 19:52:41'),
(9, 2, '12345', 2, 'ASTHUAWEI2889qrnetworkswitch.png', 'HUAWEI 2889qr network switch', 1, '2017-06-08 04:52:41', 'berlian komputer', 900000, '2017-05-25 05:34:16', '2017-06-07 19:52:53', '2017-06-07 19:52:53'),
(10, 2, '12345', 4, 'ASTHUAWEI2889qrnetworkswitch', 'HUAWEI 2889qr network switch', 1, '2017-06-08 04:52:41', 'berlian komputer', 900000, '2017-05-25 05:37:07', '2017-06-07 19:53:03', '2017-06-07 19:53:03'),
(11, 2, '12345', 2, 'ASTHUAWEI2889qrnetworkswitch7.png', 'HUAWEI 2889qr network switch 7', 1, '2017-06-10 02:27:32', 'berlian komputer', 900000, '2017-05-25 05:37:34', '2017-06-09 19:27:32', '2017-06-09 19:27:32'),
(12, 4, '12345', 1, 'ASTpedomanskripsi2112.png', 'pedoman skripsi 2112', 1, '2017-06-08 04:52:41', 'airlangga press', 0, '2017-05-25 05:40:14', '2017-06-07 19:55:38', '2017-06-07 19:55:38'),
(13, 1, '12345', 1, 'ASTkartuwr.png', 'kartu wr', 1, '2017-06-10 02:27:29', 'bambang', 145000, '2017-06-07 19:52:10', '2017-06-09 19:27:29', '2017-06-09 19:27:29'),
(14, 2, '12345', 3, 'ASTmobil.png', 'Mobil Dinas Honda CRV S 789 UK', 2, '2017-06-12 20:17:04', 'honda', 100000000, '2017-06-07 20:56:56', '2017-06-09 19:27:36', '2017-06-09 19:27:36'),
(15, 1, '12345', 1, 'astDell244HVU24inchMonitor.png', 'Dell 244HVU 24 inch Monitor', 5, '2017-06-13 03:01:31', 'Ali KOMP', 190000000, '2017-06-12 17:45:37', '2017-06-12 20:01:31', '2017-06-12 20:01:31'),
(16, 1, '12345', 1, 'astPrinterEpsonL120.png', 'Printer Epson L120', 5, '2017-06-13 03:21:37', 'Ali KOMP', 1500000, '2017-06-12 19:59:53', '2017-06-12 20:21:37', NULL),
(17, 1, '12345', 1, 'astAntiVirusAVAST.png', 'AntiVirus AVAST', 6, '2017-06-13 03:18:03', 'Ali KOMP', 500000, '2017-06-12 20:10:41', '2017-06-12 20:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `atribut_softskill`
--

CREATE TABLE `atribut_softskill` (
  `id_softskill` int(11) NOT NULL,
  `softskill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atribut_softskill`
--

INSERT INTO `atribut_softskill` (`id_softskill`, `softskill`) VALUES
(1, 'Kesopanan'),
(2, 'Komunikasi'),
(3, 'Integritas'),
(4, 'Etos Kerja'),
(5, 'Kepemimpinan'),
(6, 'Kerja Sama');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_dosen`
--

CREATE TABLE `biodata_dosen` (
  `biodata_id` int(12) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(60) NOT NULL,
  `alamat_dosen` varchar(60) NOT NULL,
  `status_dosen` varchar(60) NOT NULL,
  `tanggal_lahir_dosen` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `biodata_dosen`
--

INSERT INTO `biodata_dosen` (`biodata_id`, `nip`, `nama_dosen`, `alamat_dosen`, `status_dosen`, `tanggal_lahir_dosen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345678910', 'Prof. Einstein', 'Jl. Waru no. 9 Surabaya', 'Aktif', '2017-05-07', '2017-05-07 09:01:01', NULL, NULL),
(2, '12345678911', 'John PhD', 'Jl. Mawar No.9 Surabaya', 'Aktif', '2017-05-07', '2017-05-07 09:01:01', NULL, NULL),
(3, '12345678912', 'Kayla S.Kom.,M.Kom.', 'Jalan Mulyorejo 124', 'Aktif', '2017-05-07', '2017-05-07 09:01:01', NULL, NULL),
(6, '0799667799', 'Renold', 'kepanjen gang 1', 'Dosen Tetap', '2000-12-13', '2017-06-14 02:43:39', '2017-06-14 02:43:39', NULL),
(7, '123456', '12345', 'lapangan', 'Dosen Tetap', '2017-06-15', '2017-06-14 15:02:05', '2017-06-14 15:02:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biodata_mhs`
--

CREATE TABLE `biodata_mhs` (
  `id_bio` int(15) NOT NULL,
  `nim_id` varchar(15) NOT NULL,
  `nama_mhs` varchar(70) NOT NULL,
  `email_mhs` varchar(50) NOT NULL,
  `foto_mhs` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `negara_asal` varchar(30) DEFAULT NULL,
  `provinsi_asal` varchar(30) DEFAULT NULL,
  `kota_asal` varchar(30) DEFAULT NULL,
  `kota_tinggal` varchar(30) DEFAULT NULL,
  `alamat_tinggal` varchar(50) DEFAULT NULL,
  `kota_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` varchar(15) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `kebangsaan` varchar(30) DEFAULT NULL,
  `sma_asal` varchar(30) DEFAULT NULL,
  `nama_ayah` varchar(70) DEFAULT NULL,
  `nama_ibu` varchar(70) DEFAULT NULL,
  `deskripsi_diri` text,
  `motto` varchar(70) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata_mhs`
--

INSERT INTO `biodata_mhs` (`id_bio`, `nim_id`, `nama_mhs`, `email_mhs`, `foto_mhs`, `jenis_kelamin`, `negara_asal`, `provinsi_asal`, `kota_asal`, `kota_tinggal`, `alamat_tinggal`, `kota_lahir`, `tanggal_lahir`, `no_hp`, `angkatan`, `agama`, `kebangsaan`, `sma_asal`, `nama_ayah`, `nama_ibu`, `deskripsi_diri`, `motto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081411631070', 'Prianka Ratu Masitho', 'priankarm@airlangga-academic.com', '1497318777.jpg', 'Perempuan', 'Indonesia', 'Jawa Tengah', 'Yogyakarta', 'Surabaya', 'Jl Mulyorejo No 9', 'Mojokerto', '5 Mei 1998', '083830557123', '2014', 'Islam', 'Indonesia', 'SMA Pertiwi', 'Jammy', 'Zainab', 'Mahasiwa Sistem Informasi', 'Nothing''s gonna change my love for you', '2017-05-07 09:22:12', '2017-06-12 18:52:57', NULL),
(2, '081411631099', 'Jerry Kim', 'jerryKim1996@email.com', '1497320214.jpg', 'Perempuan', 'Indonesia', 'Jawa Timur', 'Surabaya', 'Surabaya', 'Jl Mulyorejo No 78', 'Jombang', '9 Juni 1997', '098768854323', '2018', 'Islam', 'Indonesia', 'SMA Pertiwi 6', 'Jared', 'Oiku', 'Mahasiwa Sistem Informasi', 'Better late than never', '2017-05-07 09:22:12', '2017-06-12 19:16:54', NULL),
(4, '081711631006', 'Muhammad Hilmi Achwin', 'hilmi@olimpiade.id', '1497308693.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-12 16:04:53', '2017-06-12 16:04:53', NULL),
(6, '88888888', 'Kendall Jenner', 'kendal@jenner.com', '1497320600.jpg', 'Perempuan', 'USA', 'California', 'Los Angeles', 'Los Angeles', 'Beverly Hills A2', 'New York', '1999-08-02', '08520987890', '2014', 'Kristen', 'USA', 'Cali High', 'Bruce Jenner', 'Caitlyn Jenner', 'I am a superstar', 'Dream high', '2017-06-12 19:23:20', '2017-06-12 19:31:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `capaian_pembelajaran`
--

CREATE TABLE `capaian_pembelajaran` (
  `id_cpem` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `kategori_cpem_id` int(11) NOT NULL,
  `kode_cpem` varchar(5) DEFAULT NULL,
  `deskripsi_cpem` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capaian_pembelajaran`
--

INSERT INTO `capaian_pembelajaran` (`id_cpem`, `prodi_id`, `kategori_cpem_id`, `kode_cpem`, `deskripsi_cpem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'KK9', 'Menunjukkan sikap bertanggung jawab atas pekerjaan di bidang keahliannya secara mandiri', '2017-05-07 11:14:42', NULL, NULL),
(2, 1, 1, 'KK3', 'Mampu menformulasikan permasalahan di industri berdasakan konsep terkait', '2017-05-07 11:15:02', NULL, NULL),
(3, 1, 2, 'KU2', 'Mampu menunjukkan kinerja mandri', '2017-06-12 08:15:14', NULL, NULL),
(4, 1, 3, 'S9', 'Bersikap bertanggung jawab dalam menyelesaikan tugas dan perkuliahan', '2017-06-12 08:15:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cp_mata_kuliah`
--

CREATE TABLE `cp_mata_kuliah` (
  `id_cpmk` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `kode_cpmk` varchar(5) NOT NULL,
  `deskripsi_cpmk` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_mata_kuliah`
--

INSERT INTO `cp_mata_kuliah` (`id_cpmk`, `matakuliah_id`, `kode_cpmk`, `deskripsi_cpmk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'M1', 'Mahasiswa mampu menjelaskan matriks', '2017-05-07 11:23:49', NULL, NULL),
(2, 1, 'M2', 'Mahasiswa mampu mencari nilai determinan matriks', '2017-05-07 11:23:49', NULL, NULL),
(3, 1, 'M3', 'Mahasiswa mampu menjelasakan jenis-jenis matriks', '2017-05-07 11:23:49', NULL, NULL),
(4, 1, 'SD1', 'Pintar Statistika', '2017-06-14 13:02:10', '2017-06-14 13:02:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cp_prodi`
--

CREATE TABLE `cp_prodi` (
  `cpem_id` int(11) NOT NULL,
  `mk_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_prodi`
--

INSERT INTO `cp_prodi` (`cpem_id`, `mk_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '2017-06-14 13:13:41', '2017-06-14 13:13:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cp_program`
--

CREATE TABLE `cp_program` (
  `id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `capaian_program_spesifik` varchar(255) NOT NULL,
  `dimensi_capaian_umum` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_program`
--

INSERT INTO `cp_program` (`id`, `prodi_id`, `capaian_program_spesifik`, `dimensi_capaian_umum`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'capaian program spesifik', 'dimensi capaian umum', '2017-05-28 07:40:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_anggota`
--

CREATE TABLE `detail_anggota` (
  `id_anggota` int(11) NOT NULL,
  `kode_penelitian_id` int(15) DEFAULT NULL,
  `anggota` varchar(70) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_anggota`
--

INSERT INTO `detail_anggota` (`id_anggota`, `kode_penelitian_id`, `anggota`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1000, 'Bejo', '2017-05-11 08:00:12', NULL, NULL),
(3, 1001, 'Me, myself and i', '2017-06-12 16:10:41', '2017-06-12 16:10:41', NULL),
(4, 1002, '1. Kim Kardashian -> ketua\r\n2. Bruce Jenner', '2017-06-12 19:42:19', '2017-06-12 19:42:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategori`
--

CREATE TABLE `detail_kategori` (
  `media_pembelajaran_id` int(11) NOT NULL,
  `cpmk_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kategori`
--

INSERT INTO `detail_kategori` (`media_pembelajaran_id`, `cpmk_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-05-07 11:24:47', NULL, NULL),
(1, 4, '2017-06-14 13:02:10', '2017-06-14 13:02:10', NULL),
(2, 1, '2017-05-07 11:24:47', NULL, NULL),
(2, 4, '2017-06-14 13:02:10', '2017-06-14 13:02:10', NULL),
(3, 4, '2017-06-14 13:02:10', '2017-06-14 13:02:10', NULL),
(4, 1, '2017-05-07 11:24:47', NULL, NULL),
(4, 4, '2017-06-14 13:02:10', '2017-06-14 13:02:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_media_pembelajaran`
--

CREATE TABLE `detail_media_pembelajaran` (
  `cpmk_id` int(11) NOT NULL,
  `sistem_pembelajaran_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_media_pembelajaran`
--

INSERT INTO `detail_media_pembelajaran` (`cpmk_id`, `sistem_pembelajaran_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-05-07 11:24:17', NULL, NULL),
(1, 3, '2017-05-07 11:24:17', NULL, NULL),
(1, 4, '2017-05-07 11:24:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_nilai`
--

CREATE TABLE `detail_nilai` (
  `mk_ditawarkan_id` int(11) NOT NULL,
  `mhs_id` varchar(15) NOT NULL,
  `jenis_penilaian_id` int(11) NOT NULL,
  `detail_nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_nilai`
--

INSERT INTO `detail_nilai` (`mk_ditawarkan_id`, `mhs_id`, `jenis_penilaian_id`, `detail_nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081411631070', 1, 67, '2017-05-07 10:23:59', NULL, NULL),
(1, '081411631070', 2, 89, '2017-05-21 14:14:36', NULL, NULL),
(1, '081411631070', 3, 76, '2017-06-11 13:29:22', NULL, NULL),
(1, '081411631070', 4, 45, '2017-06-11 13:29:22', NULL, NULL),
(1, '081411631070', 5, 89, '2017-06-11 13:29:22', NULL, NULL),
(1, '081411631099', 1, 67, '2017-06-11 13:37:56', NULL, NULL),
(1, '081411631099', 2, 89, '2017-06-11 13:37:56', NULL, NULL),
(1, '081411631099', 3, 98, '2017-06-11 13:37:56', NULL, NULL),
(1, '081411631099', 4, 56, '2017-06-11 13:37:56', NULL, NULL),
(1, '081411631099', 5, 79, '2017-06-11 13:37:56', NULL, NULL),
(5, '081411631070', 1, 67, '2017-05-07 10:23:59', NULL, NULL),
(5, '081411631070', 2, 89, '2017-05-21 14:14:36', NULL, NULL),
(5, '081411631070', 3, 76, '2017-06-11 13:29:22', NULL, NULL),
(5, '081411631070', 4, 45, '2017-06-11 13:29:22', NULL, NULL),
(5, '081411631070', 5, 89, '2017-06-11 13:29:22', NULL, NULL),
(5, '081411631099', 1, 67, '2017-06-11 13:37:56', NULL, NULL),
(5, '081411631099', 2, 89, '2017-06-11 13:37:56', NULL, NULL),
(5, '081411631099', 3, 98, '2017-06-11 13:37:56', NULL, NULL),
(5, '081411631099', 4, 56, '2017-06-11 13:37:56', NULL, NULL),
(5, '081411631099', 5, 79, '2017-06-11 13:37:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penelitian`
--

CREATE TABLE `detail_penelitian` (
  `id_penelitian` int(15) NOT NULL,
  `kode_penelitian_id` int(15) DEFAULT NULL,
  `abstract` text NOT NULL,
  `background` text NOT NULL,
  `objective` text NOT NULL,
  `methods` text NOT NULL,
  `results` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penelitian`
--

INSERT INTO `detail_penelitian` (`id_penelitian`, `kode_penelitian_id`, `abstract`, `background`, `objective`, `methods`, `results`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1000, 'abstrak', 'background', 'objective', 'methods', 'results', '2017-05-11 07:58:58', NULL, NULL),
(5, 1001, 'Abstrak ku', 'Background ku', 'Tujuan ku', 'Metodologi Penelitian', '1 Alat pembangkit listrik tenaga dalam', '2017-06-12 16:10:42', '2017-06-12 16:10:42', NULL),
(6, 1002, 'Minuman campuran adalah suatu minuman yang merupakan hasil campuran \r\ndari sekurang-kurangnya dua jenis minuman yang berbeda. Agar penampilan dari\r\nminuman campuran itu dapat lebih menarik pandangan dan selera minum, maka\r\nperlu diberi hiasan (garnish) di samping rasa, aroma dan warna, hiasan ini juga\r\nberguna untuk menambah daya tarik dan penampilan minuman tersebut, sehingga\r\nakan memiliki nilai tambah. Banyak minuman yang memiliki rasa dan nikmat\r\nyang beraneka ragam. Pada umumnya minuman itu terdiri dari beberapa\r\nkomposisi yaitu rasa dan kandungan tambahan (vitamin, mineral dan lain-lain).\r\nSebagai contoh, minuman ringan adalah air yang dicampurkan dengan bahanbahan\r\nmineral\r\ndan\r\nkemudian\r\nditambahkan\r\ndengan\r\ngas\r\nCO2\r\n. Kami membuat suatu\r\nproduk minuman yang menarik dan unik bertujuan menciptakan sensasi rasa yang\r\nberbeda, yaitu dengan penyajian gelas yang terbagi menjadi dua, tiga atau empat\r\npartisi/bagian dengan sedotan yang juga memiliki jumlah lubang sesuai jumlah\r\npartisi pada gelas, sehingga percampuran berbagai rasa minuman tersebut terjadi\r\ndi dalam mulut setelah dihisap.\r\n \r\nKata Kunci: minuman, campur, rasa, sensasi', 'Indonesia memiliki bermacam-macam wirausaha dari yang kecil sampai \r\nyang besar, seperti home industri makanan atau minuman sampai yang memiliki\r\nperusahaan ternama di Indonesia itu sendiri. Namun banyak wirausaha yang\r\nmeniru produk makanan dan minuman dari produk lain. \r\nContohnya yang sedang digemari masyarakat sekarang adalah capcin\r\n(capucino cincau), pop ice bubble dan sebagainya. Minuman tersebut sekarang\r\ntidak setenar lagi seperti saat baru muncul di pasaran karena banyak persaingan\r\ndalam inovasi pembuatan minuman yang lain. \r\nOleh karena itu, kami menciptakan inovasi baru dalam bidang minuman\r\nringan, yang memiliki cita rasa berbeda dengan mencampurkan berbagai rasa,\r\nyaitu dengan penyajian gelas yang terbagi menjadi tiga atau empat sekat/bagian\r\ndan penyajiannya menggunakan satu sedotan yang memiliki berbagai lubang.\r\nSehingga percampuran minuman tersebut terjadi didalam mulut bukan disedotan\r\natau di gelasnya. Kami berkeyakinan bahwa minuman ini akan lebih tenar\r\ndibanding minuman-minuman lain karena selain memiliki rasa yang khas, kami\r\nmenyediakan minuman ini dalam bentuk penyajian yang menarik dan belum\r\npernah digunakan dalam penyajian minuman lain.', '1. Untuk menciptakan suatu produk yang menarik dari segi penampilan \r\ntetapi menyehatkan untuk tubuh .\r\n2. Untuk mengembangkan jiwa kreativitas mahasiswa dan masyarakat agar \r\nlebih kreatif dalam berwirausaha.\r\n3. Mengajak mahasiswa dan masyarakat untuk ikut berpartisipasi dalam \r\nusaha ini', 'Metode Produksi \r\nProduksi yang akan kami lakukan bekerjasama dengan pabrik sedotdan sablon gelas plastik yang telah kami berikan pengarahan sebelummengenai cara produksi produk ini. \r\nMetode Pemasaran \r\na. Poster\r\nSejumlah poster yang memuat iklan produk ini akan kami sebabeberapa tempat di lingkup kampus. \r\nb. Brosur dan Pamflet\r\nBrosur dan pamflet untuk produk ini akan kami sebarkasebanyak-banyaknya ke lingkup kampus dan daerah sekitarnya.', '-', '2017-06-12 19:42:19', '2017-06-12 19:42:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url_dokumen` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `nip_petugas_id`, `nama`, `tgl_upload`, `url_dokumen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'Template Presentasi Proposal', '2017-06-13 01:40:18', 'L22-Limit.ppt', '2017-05-07 10:27:02', NULL, NULL),
(2, '12345', 'Template Presentasi Skripsi', '2017-06-13 01:40:12', 'L22-Limit.ppt', '2017-06-05 19:35:15', NULL, NULL),
(3, '12345', 'Dokumen A', '2017-06-13 01:39:25', '1497317965.docx', '2017-06-12 18:39:25', '2017-06-12 18:39:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL,
  `kegiatan_id` int(25) NOT NULL,
  `lesson_learned` varchar(500) NOT NULL,
  `url_foto` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dokumentasi`, `kegiatan_id`, `lesson_learned`, `url_foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'lesson learned', 'url foto kegiatan', '2017-05-07 10:51:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0799667799', '2017-06-14 02:43:39', '2017-06-14 02:43:39', NULL),
('123456', '2017-06-14 15:02:05', '2017-06-14 15:02:05', NULL),
('12345678910', '2017-05-07 08:58:51', NULL, NULL),
('12345678911', '2017-05-30 13:16:56', NULL, NULL),
('12345678912', '2017-05-30 13:16:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_kegiatan`
--

CREATE TABLE `dosen_kegiatan` (
  `kegiatan_id` int(25) NOT NULL,
  `nip_id` varchar(20) NOT NULL,
  `jabatan_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_kegiatan`
--

INSERT INTO `dosen_kegiatan` (`kegiatan_id`, `nip_id`, `jabatan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345678910', 1, '2017-05-07 10:55:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pembimbing`
--

CREATE TABLE `dosen_pembimbing` (
  `skripsi_id` int(11) NOT NULL,
  `nip_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen_pembimbing`
--

INSERT INTO `dosen_pembimbing` (`skripsi_id`, `nip_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345678910', 1, '2017-05-07 09:40:37', NULL, NULL),
(1, '12345678911', 0, '2017-05-30 13:21:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pemohon_surat`
--

CREATE TABLE `dosen_pemohon_surat` (
  `nip_id` varchar(20) NOT NULL,
  `surat_keluar_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_pemohon_surat`
--

INSERT INTO `dosen_pemohon_surat` (`nip_id`, `surat_keluar_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345678910', 1, '2017-05-07 10:32:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_penguji`
--

CREATE TABLE `dosen_penguji` (
  `skripsi_id` int(11) NOT NULL,
  `nip_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen_penguji`
--

INSERT INTO `dosen_penguji` (`skripsi_id`, `nip_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345678912', 1, '2017-05-07 09:41:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_rapat`
--

CREATE TABLE `dosen_rapat` (
  `nip` varchar(20) NOT NULL,
  `notulen_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_rapat`
--

INSERT INTO `dosen_rapat` (`nip`, `notulen_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345678910', 1, 0, '2017-05-30 13:12:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elearning`
--

CREATE TABLE `elearning` (
  `id_elearning` int(11) NOT NULL,
  `mk_ditawarkan_id` int(11) NOT NULL,
  `nip_id` varchar(20) DEFAULT NULL,
  `nama_file` varchar(30) DEFAULT NULL,
  `direktori_file` varchar(100) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elearning`
--

INSERT INTO `elearning` (`id_elearning`, `mk_ditawarkan_id`, `nip_id`, `nama_file`, `direktori_file`, `judul`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, '12345678910', 'nama fie elearning', 'url file elearnig', 'judul elearning', '2017-05-07 11:17:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `universitas_id` int(11) NOT NULL,
  `kode_fakultas` varchar(10) NOT NULL,
  `nama_fakultas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `universitas_id`, `kode_fakultas`, `nama_fakultas`) VALUES
(1, 1, 'kode1', 'FST');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(20) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kuliah`
--

CREATE TABLE `jadwal_kuliah` (
  `mk_ditawarkan_id` int(11) NOT NULL,
  `jam_id` int(11) NOT NULL,
  `hari_id` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kuliah`
--

INSERT INTO `jadwal_kuliah` (`mk_ditawarkan_id`, `jam_id`, `hari_id`, `ruang_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, '2017-05-07 10:20:29', NULL, NULL),
(1, 1, 2, 1, '2017-05-25 09:03:49', NULL, NULL),
(1, 2, 2, 3, '2017-05-21 13:06:26', NULL, NULL),
(1, 3, 1, 1, '2017-05-25 08:30:21', NULL, NULL),
(2, 2, 2, 3, '2017-06-11 13:05:04', NULL, NULL),
(2, 3, 1, 1, '2017-06-11 13:05:04', NULL, NULL),
(4, 3, 1, 2, '2017-06-11 13:06:20', NULL, NULL),
(4, 3, 2, 2, '2017-06-11 13:06:20', NULL, NULL),
(5, 3, 2, 2, '2017-06-11 13:07:11', NULL, NULL),
(5, 3, 4, 3, '2017-06-11 13:07:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_permohonan`
--

CREATE TABLE `jadwal_permohonan` (
  `permohonan_ruang_id` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `hari_id` int(11) NOT NULL,
  `jam_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_permohonan`
--

INSERT INTO `jadwal_permohonan` (`permohonan_ruang_id`, `ruang_id`, `hari_id`, `jam_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, '2017-05-07 10:31:32', NULL, NULL),
(2, 1, 4, 1, '2017-06-12 18:34:30', '2017-06-12 18:34:30', NULL),
(3, 1, 5, 1, '2017-06-14 14:06:22', '2017-06-14 14:06:22', NULL),
(3, 1, 5, 2, '2017-06-14 14:06:22', '2017-06-14 14:06:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `waktu`) VALUES
(1, '07:00:00'),
(2, '07:50:00'),
(3, '08:50:00'),
(4, '09:40:00'),
(5, '10:40:00'),
(6, '11:30:00'),
(7, '13:00:00'),
(8, '13:50:00'),
(9, '14:50:00'),
(10, '15:50:00'),
(11, '16:40:00'),
(12, '17:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mk`
--

CREATE TABLE `jenis_mk` (
  `id` int(11) NOT NULL,
  `jenis_mk` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_mk`
--

INSERT INTO `jenis_mk` (`id`, `jenis_mk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Utama', '2017-04-08 10:28:38', NULL, NULL),
(2, 'Pendukung', '2017-04-08 10:28:38', NULL, NULL),
(3, 'Khusus', '2017-04-08 10:29:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penilaian`
--

CREATE TABLE `jenis_penilaian` (
  `id_jenis_penilaian` int(11) NOT NULL,
  `nama_jenis` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_penilaian`
--

INSERT INTO `jenis_penilaian` (`id_jenis_penilaian`, `nama_jenis`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'UTS', '2017-05-07 09:42:56', NULL, NULL),
(2, 'UAS', '2017-05-21 13:51:12', NULL, NULL),
(3, 'Softskill', '2017-06-11 13:24:48', NULL, NULL),
(4, 'Kuis', '2017-06-11 13:24:48', NULL, NULL),
(5, 'Tugas', '2017-06-11 13:24:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `jurnal_id` int(12) NOT NULL,
  `nama_jurnal` varchar(300) NOT NULL,
  `halaman_jurnal` varchar(10) NOT NULL,
  `bidang_jurnal` varchar(60) NOT NULL,
  `tanggal_jurnal` date DEFAULT NULL,
  `status_jurnal` int(1) DEFAULT NULL,
  `volume_jurnal` varchar(15) NOT NULL,
  `penulis_ke` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file_jurnal` varchar(60) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`jurnal_id`, `nama_jurnal`, `halaman_jurnal`, `bidang_jurnal`, `tanggal_jurnal`, `status_jurnal`, `volume_jurnal`, `penulis_ke`, `created_at`, `file_jurnal`, `updated_at`, `deleted_at`) VALUES
(123455680, 'penelitian tanaman hias', '123-125', 'biologi', '2017-06-13', 1, '2', '1', '2017-06-14 01:29:28', '1497428968.pdf', '2017-06-14 01:30:12', NULL),
(123455682, 'penelitian tanaman gantung aja', '123-125', 'biologi banget', '2017-09-19', 1, '1', '1', '2017-06-14 01:56:30', '1497430590.jpg', '2017-06-14 15:08:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_dosen`
--

CREATE TABLE `jurnal_dosen` (
  `jurnal_id` int(12) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_dosen`
--

INSERT INTO `jurnal_dosen` (`jurnal_id`, `nip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(123455680, '12345678910', '2017-06-14 01:29:28', '2017-06-14 01:29:28', NULL),
(123455682, '12345678910', '2017-06-14 01:56:30', '2017-06-14 01:56:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Elektronik', '2017-05-27 07:33:49', NULL, NULL),
(2, 'Mekanik', '2017-06-12 08:23:50', NULL, NULL),
(3, 'Furniture', '2017-06-12 08:23:50', NULL, NULL),
(4, 'Dokumen', '2017-06-12 08:23:50', NULL, NULL),
(5, 'Kendaraan', '2017-06-13 00:44:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_capaian_pembelajaran`
--

CREATE TABLE `kategori_capaian_pembelajaran` (
  `id_kategori_cpem` int(11) NOT NULL,
  `nama_cpem` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_capaian_pembelajaran`
--

INSERT INTO `kategori_capaian_pembelajaran` (`id_kategori_cpem`, `nama_cpem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kemampuan Khusus', '2017-05-07 11:13:30', NULL, NULL),
(2, 'Kemampuan Umum', '2017-06-12 06:13:47', NULL, NULL),
(3, 'Softskill', '2017-06-12 06:13:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_dana`
--

CREATE TABLE `kategori_dana` (
  `id_sumber` int(11) NOT NULL,
  `jenis_dana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_dana`
--

INSERT INTO `kategori_dana` (`id_sumber`, `jenis_dana`) VALUES
(1, 'Dana Fakulats');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_media_pembelajaran`
--

CREATE TABLE `kategori_media_pembelajaran` (
  `id` int(11) NOT NULL,
  `kategori_media_pembelajaran` varchar(15) NOT NULL,
  `media_pembelajaran` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori_media_pembelajaran`
--

INSERT INTO `kategori_media_pembelajaran` (`id`, `kategori_media_pembelajaran`, `media_pembelajaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Perangkat Lunak', 'SPSS', '2017-05-07 11:22:59', NULL, NULL),
(2, 'Perangkat Lunak', 'Minitab', '2017-05-07 11:22:59', NULL, NULL),
(3, 'Perangkat Keras', 'Papan Tulis', '2017-05-07 11:22:59', NULL, NULL),
(4, 'Perangkat Keras', 'LCD Projector', '2017-05-07 11:22:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kbk`
--

CREATE TABLE `kbk` (
  `id_kbk` int(11) NOT NULL,
  `jenis_kbk` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbk`
--

INSERT INTO `kbk` (`id_kbk`, `jenis_kbk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Data Mining', '2017-04-09 02:22:56', '2017-04-09 02:22:56', NULL),
(2, 'Sistem Pendukung Keputusan', '2017-04-09 02:26:08', '2017-04-09 02:26:08', NULL),
(3, 'Information System Engineering', '2017-04-09 02:26:15', '2017-04-09 02:26:15', NULL),
(4, 'RPL', '2017-06-19 07:45:53', '2017-06-19 07:45:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konferensi`
--

CREATE TABLE `konferensi` (
  `konferensi_id` int(12) NOT NULL,
  `nama_konferensi` varchar(60) NOT NULL,
  `pemapar_konferensi` varchar(60) NOT NULL,
  `tempat_konferensi` varchar(60) NOT NULL,
  `tanggal_konferensi` date NOT NULL,
  `file_konferensi` varchar(60) NOT NULL,
  `materi_konferensi` varchar(60) NOT NULL,
  `status_konferensi` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konferensi`
--

INSERT INTO `konferensi` (`konferensi_id`, `nama_konferensi`, `pemapar_konferensi`, `tempat_konferensi`, `tanggal_konferensi`, `file_konferensi`, `materi_konferensi`, `status_konferensi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nama konferensi', 'pemapar konferensi', 'tempat konferensi', '2017-05-03', 'url file koonferensi', 'materi konferensi', 1, '2017-05-07 09:06:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konferensi_dosen`
--

CREATE TABLE `konferensi_dosen` (
  `nip` varchar(20) NOT NULL,
  `konferensi_id` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konferensi_dosen`
--

INSERT INTO `konferensi_dosen` (`nip`, `konferensi_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345678910', 1, '2017-05-07 09:09:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `skripsi_id` int(11) NOT NULL,
  `tgl_konsul` date NOT NULL,
  `catatan_konsul` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `skripsi_id`, `tgl_konsul`, `catatan_konsul`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-05-02', 'BAB 2 : Progress TOP', '2017-05-07 09:39:54', NULL, NULL),
(2, 1, '2017-05-03', 'BAB 3: Menambahkan Gant Chart', '2017-05-07 09:39:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `koor_mk`
--

CREATE TABLE `koor_mk` (
  `id_koor_mk` int(11) NOT NULL,
  `nip_id` varchar(20) NOT NULL,
  `mk_id` int(11) NOT NULL,
  `status_tt_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Labkom 1', '2017-06-13 00:41:26', NULL, NULL),
(2, 'Labkom 2', '2017-06-13 00:41:26', NULL, NULL),
(3, 'Labkom 3', '2017-06-13 00:42:47', NULL, NULL),
(4, 'Labkom 4', '2017-06-13 00:42:47', NULL, NULL),
(5, 'R.Dosen SI', '2017-06-13 00:43:39', NULL, NULL),
(6, 'Departemen SI', '2017-06-13 00:43:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nip_id` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nip_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('081411631070', '12345678910', '2017-05-07 09:16:12', NULL, NULL),
('081411631099', '12345678910', '2017-06-11 13:30:00', '2017-06-12 19:17:17', NULL),
('081711631006', '12345678910', '2017-06-12 16:04:52', '2017-06-12 16:04:52', NULL),
('88888888', '12345678910', '2017-06-12 19:23:20', '2017-06-12 19:23:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id_maintenance` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `asset_yang_dimaintenance` text NOT NULL,
  `nama_pemaintenance` varchar(50) NOT NULL,
  `problem` text NOT NULL,
  `solution` text NOT NULL,
  `waktu_maintenance` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id_maintenance`, `nip_petugas_id`, `asset_id`, `asset_yang_dimaintenance`, `nama_pemaintenance`, `problem`, `solution`, `waktu_maintenance`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '12345', 14, 'Mobil Dinas Honda CRV S 789 UK', 'Bambang', 'pendingin tidak berfungsi', 'Mengisi Freon', '2017-06-24 06:00:00', '2017-06-12 20:20:26', '2017-06-12 19:01:46', '2017-06-12 19:01:46'),
(6, '12345', 15, 'Dell 244HVU 24 inch Monitor', 'Rahma', 'LED harus ganti', 'ganti LED', '2017-06-13 17:00:00', '2017-06-12 19:01:39', '2017-06-12 19:02:15', NULL),
(7, '12345', 16, 'Printer Epson L120', 'Dhanang', 'Kabel putus', 'Beli baru', '2017-06-14 17:00:00', '2017-06-12 20:20:45', '2017-06-12 20:21:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mk` int(11) NOT NULL,
  `jenis_mk_id` int(11) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `deskripsi_matkul` text,
  `capaian_matkul` text,
  `penilaian_matkul` varchar(200) DEFAULT NULL,
  `pokok_pembahasan` text,
  `pustaka_utama` text,
  `pustaka_pendukung` text,
  `syarat_sks` varchar(3) DEFAULT NULL,
  `deskripsi_mata_ajar` text,
  `status_rps` int(11) DEFAULT NULL,
  `status_silabus` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `jenis_mk_id`, `kode_matkul`, `nama_matkul`, `sks`, `deskripsi_matkul`, `capaian_matkul`, `penilaian_matkul`, `pokok_pembahasan`, `pustaka_utama`, `pustaka_pendukung`, `syarat_sks`, `deskripsi_mata_ajar`, `status_rps`, `status_silabus`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'kode1', 'Statistika Deskriptif', 3, 'Pada Matakuliah ini, mahasiswa belajar mengenai dasar dasar Statistika.\r\n', 'Mahasiswa mampu meringkas dan menyajikan informasi numerik sehingga menjadi jelas dan berguna.', 'Tugas (25%) + UTS (30%) + UAS (35%) + SoftSkill(10%)', '1) Perhitungan Determinan Matriks\r\n2) representasi masalah dengan matriks', '1) Kumar, Santha.2013.Dasar dasar Statistika.Pearson:New York City.', '2) Neil, Goodblood.Statistika Pengembangan.Gramedia: Jakarta', '123', '1) Pendahuluan Metode Riset mengunakan teknik stastitik, serta keuntungan serta kerugian masih-masih teknik\r\n2) Visualisasi data: menciptakan dan menginterpretasikan histogram, bar charts, dan frequency plots.\r\n3) Central Tendency: menghitung dan menginterpretasikan ukuran distribusi, mean, median, dan mode\r\n4) Variability:  mengukur penyebaran data menggunakan rentang dan deviasi standar. serta mengidentifikasi outlier dalam data set menggunakan konsep rentang interkuartil.\r\n5) Standarisasi : mengkonversi distribusi ke distribusi normal standar menggunakan Z-skor. serta menghitung proporsi menggunakan distribusi standar.\r\n6) Distribusi Normal : menggunakan distribusi normal untuk menghitung probabilitas.serta menggunakan Z-table untuk mencari proporsi pengamatan atas, bawah, atau di antara nilai-nilai.\r\n7) Sampling Distribusi : menerapkan konsep probabilitas dan normalisasi untuk set data sampel.', 0, 0, '2017-05-07 10:15:38', NULL, NULL),
(2, 2, 'MAK123', 'Matrik dan Transformasi Linier', 3, 'Pada Mata kuliah ini, mahasiswa dapat mempelajari matriks dan perhitungannya.', 'Mahasiswa mampu menyelesaikan Operasi Matrik, sistem persamaan linier, operasi vektor, dan aljabar linier numerik.\r\n', 'Tugas (25%) + UTS (30%) + UAS (35%) + SoftSkill(10%)', '1) Konsep Matriks\r\n2) Determinan matriks', 'Anton, H. 2000. Dasar-dasar Aljabar Linear jilid 1 dan 2. Jakarta: Penerbit Inter Aksara.\r\nDewiyani. 2006. Buku Materi Kuliah STIKOM : Aljabar Linear. Surabaya : STIKOM. ', 'Kolman, Bernard. 2004. Elementary Linear Algebra. New Jearsey: Prentice Hall.\r\nLeon, S. J. 2001. Aljabar Linier dan Aplikasinya. Jakarta : Penerbit Airlangga.', '0', 'Pengertian Matriks ( Jenis jenis matriks & Operasi Matriks)\r\nDeterminan Matriks\r\nInvers Matriks\r\nSistem Persamaan Linear\r\nVektor\r\nPerkalian vektor Sudut antara 2 vektor Vektor satuan Proj (u,v) dan komp(u,v)\r\nRuang vector\r\nProses Gram Schmidt\r\nTransformasi Linear Kernel Jangkauan\r\nNilai Eigen, Vektor Eigen', 0, 0, '2017-06-11 12:37:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_kegiatan`
--

CREATE TABLE `mhs_kegiatan` (
  `kegiatan_id` int(25) NOT NULL,
  `nim_id` varchar(15) NOT NULL,
  `jabatan_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_kegiatan`
--

INSERT INTO `mhs_kegiatan` (`kegiatan_id`, `nim_id`, `jabatan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081411631070', 1, '2017-05-07 10:54:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_pemohon_surat`
--

CREATE TABLE `mhs_pemohon_surat` (
  `nim_id` varchar(15) NOT NULL,
  `surat_keluar_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_pemohon_surat`
--

INSERT INTO `mhs_pemohon_surat` (`nim_id`, `surat_keluar_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('081411631070', 1, '2017-05-07 10:32:48', NULL, NULL),
('081411631070', 2, '2017-06-14 14:16:18', '2017-06-14 14:16:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk_diajar`
--

CREATE TABLE `mk_diajar` (
  `dosen_id` varchar(20) NOT NULL,
  `mk_ditawarkan_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk_diajar`
--

INSERT INTO `mk_diajar` (`dosen_id`, `mk_ditawarkan_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345678910', 1, 0, '2017-05-07 10:22:55', NULL, NULL),
('12345678910', 4, 0, '2017-06-11 13:09:27', NULL, NULL),
('12345678910', 5, 0, '2017-06-11 13:09:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk_diambil`
--

CREATE TABLE `mk_diambil` (
  `mk_ditawarkan_id` int(11) NOT NULL,
  `mhs_id` varchar(15) NOT NULL,
  `nilai` varchar(2) NOT NULL,
  `is_approve` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk_diambil`
--

INSERT INTO `mk_diambil` (`mk_ditawarkan_id`, `mhs_id`, `nilai`, `is_approve`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081411631070', '0', 0, '2017-05-07 10:22:03', NULL, NULL),
(2, '081411631070', '0', 0, '2017-06-11 13:23:28', NULL, NULL),
(4, '081411631070', '0', 0, '2017-06-11 13:22:57', NULL, NULL),
(5, '081411631070', '0', 0, '2017-06-11 13:22:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk_ditawarkan`
--

CREATE TABLE `mk_ditawarkan` (
  `id_mk_ditawarkan` int(11) NOT NULL,
  `thn_akademik_id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk_ditawarkan`
--

INSERT INTO `mk_ditawarkan` (`id_mk_ditawarkan`, `thn_akademik_id`, `matakuliah_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2017-05-07 10:18:03', NULL, NULL),
(2, 2, 1, '2017-06-11 12:39:11', NULL, NULL),
(3, 2, 2, '2017-06-11 12:39:11', NULL, NULL),
(4, 5, 2, '2017-06-11 12:39:44', NULL, NULL),
(5, 5, 1, '2017-06-11 12:39:44', NULL, NULL),
(6, 8, 1, '2017-06-23 22:36:23', '2017-06-23 22:36:23', NULL),
(7, 8, 2, '2017-06-23 22:36:24', '2017-06-23 22:36:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk_prasyarat`
--

CREATE TABLE `mk_prasyarat` (
  `id_mk_prasyarat` int(11) NOT NULL,
  `mk_id` int(11) NOT NULL,
  `mk_syarat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk_prasyarat`
--

INSERT INTO `mk_prasyarat` (`id_mk_prasyarat`, `mk_id`, `mk_syarat_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2017-05-07 11:20:48', NULL, NULL),
(2, 1, 2, '2017-06-14 13:08:57', '2017-06-14 13:08:57', NULL),
(3, 1, 2, '2017-06-14 13:10:48', '2017-06-14 13:10:48', NULL),
(4, 1, 2, '2017-06-14 13:12:34', '2017-06-14 13:12:34', NULL),
(5, 1, 2, '2017-06-14 13:13:09', '2017-06-14 13:13:09', NULL),
(6, 2, 2, '2017-06-14 13:13:41', '2017-06-14 13:13:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk_prodi`
--

CREATE TABLE `mk_prodi` (
  `prodi_id` int(11) NOT NULL,
  `mk_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk_prodi`
--

INSERT INTO `mk_prodi` (`prodi_id`, `mk_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-05-07 11:16:28', NULL, NULL),
(1, 2, '2017-05-07 11:16:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mk_softskill`
--

CREATE TABLE `mk_softskill` (
  `mk_id` int(11) NOT NULL,
  `softskill_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk_softskill`
--

INSERT INTO `mk_softskill` (`mk_id`, `softskill_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-05-07 11:25:42', NULL, NULL),
(1, 3, '2017-05-07 11:25:42', NULL, NULL),
(1, 4, '2017-05-07 11:25:42', NULL, NULL),
(2, 3, '2017-06-12 06:33:02', NULL, NULL),
(2, 6, '2017-06-12 06:33:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notulen_rapat`
--

CREATE TABLE `notulen_rapat` (
  `id_notulen` int(11) NOT NULL,
  `permohonan_ruang_id` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) DEFAULT NULL,
  `nip_id` varchar(20) DEFAULT NULL,
  `nama_rapat` varchar(100) NOT NULL,
  `agenda_rapat` longtext NOT NULL,
  `waktu_pelaksanaan` date DEFAULT NULL,
  `hasil_pembahasan` longtext,
  `id_verifikasi` varchar(2) DEFAULT NULL,
  `deskripsi_rapat` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notulen_rapat`
--

INSERT INTO `notulen_rapat` (`id_notulen`, `permohonan_ruang_id`, `nip_petugas_id`, `nip_id`, `nama_rapat`, `agenda_rapat`, `waktu_pelaksanaan`, `hasil_pembahasan`, `id_verifikasi`, `deskripsi_rapat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '12345', '12345678910', 'nama rapat', 'agenda rapat', '2017-05-12', 'hasil_pembahasan', '0', '', '2017-05-12 10:02:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_dosen`
--

CREATE TABLE `penelitian_dosen` (
  `penelitian_id` int(12) NOT NULL,
  `judul_penelitian` varchar(60) NOT NULL,
  `nama_ketua` varchar(60) NOT NULL,
  `bidang_penelitian` varchar(60) NOT NULL,
  `file_penelitian` varchar(60) NOT NULL,
  `tanggal_penelitian` date NOT NULL,
  `status_penelitian` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penelitian_dosen`
--

INSERT INTO `penelitian_dosen` (`penelitian_id`, `judul_penelitian`, `nama_ketua`, `bidang_penelitian`, `file_penelitian`, `tanggal_penelitian`, `status_penelitian`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'judul penelitian dosen', 'nama ketua', 'bidang penelitian', 'url file', '2017-05-02', 1, '2017-05-07 09:05:11', NULL, NULL),
(2, 'Penelitian Pangan', 'Dewo', 'Pertanian', '1497477055.pdf', '2017-06-30', 0, '2017-06-14 14:50:55', '2017-06-14 14:50:55', NULL),
(3, 'tugas', 'alun', 'kesehatan', '1497477892.pdf', '2017-06-15', 0, '2017-06-14 15:04:52', '2017-06-14 15:04:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_mhs`
--

CREATE TABLE `penelitian_mhs` (
  `kode_penelitian` int(15) NOT NULL,
  `nim_id` varchar(15) DEFAULT NULL,
  `nip_petugas_id` varchar(50) DEFAULT NULL,
  `judul` varchar(100) NOT NULL,
  `peneliti` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `halaman_naskah` varchar(10) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `besar_dana` varchar(10) NOT NULL,
  `sk` varchar(30) NOT NULL,
  `publikasi` varchar(30) NOT NULL,
  `kategori_penelitian` varchar(30) NOT NULL,
  `is_verified` int(3) NOT NULL DEFAULT '0',
  `alasan_verified` text,
  `skor` int(10) DEFAULT NULL,
  `file_pen` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penelitian_mhs`
--

INSERT INTO `penelitian_mhs` (`kode_penelitian`, `nim_id`, `nip_petugas_id`, `judul`, `peneliti`, `fakultas`, `tahun`, `halaman_naskah`, `sumber_dana`, `besar_dana`, `sk`, `publikasi`, `kategori_penelitian`, `is_verified`, `alasan_verified`, `skor`, `file_pen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1000, '081411631070', '12345', 'Judul', 'Peneliti', 'Fakultas', '2017', 'halaman', 'sumber dana', 'besar', 'sk', 'publikasi', 'PKM', 0, '', NULL, 'cscw15.pdf', '2017-06-12 23:08:37', '2017-06-12 16:08:37', NULL),
(1001, '081411631070', '12345', 'Pembangkit Listrik Tenaga Dalam', 'Lisa M', 'Sains dan Teknologi', '2017', '123', 'Dikti', '2500000', '-', '-', 'PKM', 1, NULL, NULL, 'feliciano-ICSE2016.pdf', '2017-06-12 23:17:07', '2017-06-12 16:17:07', NULL),
(1002, '88888888', '12345', 'PKM-K-Minuman-MiM', 'Kendall Jenner', 'Sains dan Teknologi', '2014', '18', 'Dikti', '10000000', '-', '-', 'PKM', 1, NULL, NULL, 'PKM-K-Minuman-MiM.pdf', '2017-06-13 02:52:25', '2017-06-12 19:52:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_milik_dosen`
--

CREATE TABLE `penelitian_milik_dosen` (
  `nip` varchar(20) NOT NULL,
  `penelitian_id` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penelitian_milik_dosen`
--

INSERT INTO `penelitian_milik_dosen` (`nip`, `penelitian_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345678910', 1, '2017-05-07 09:10:20', NULL, NULL),
('12345678910', 2, '2017-06-14 14:50:55', '2017-06-14 14:50:55', NULL),
('12345678910', 3, '2017-06-14 15:04:52', '2017-06-14 15:04:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian_masyarakat`
--

CREATE TABLE `pengabdian_masyarakat` (
  `kegiatan_id` int(12) NOT NULL,
  `nama_kegiatan` varchar(60) NOT NULL,
  `tempat_kegiatan` varchar(60) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `file_pengmas` varchar(60) NOT NULL,
  `status_pengmas` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengabdian_masyarakat`
--

INSERT INTO `pengabdian_masyarakat` (`kegiatan_id`, `nama_kegiatan`, `tempat_kegiatan`, `tanggal_kegiatan`, `file_pengmas`, `status_pengmas`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nama kegiatan pengmas', 'tempat kegiatan pengmas', '2017-05-08', 'url file pengmas', 1, '2017-05-07 09:02:35', NULL, NULL),
(2, 'kerja bakti bangun acc', 'sidoarjo', '2017-07-08', '1497429403.jpg', 1, '2017-06-14 01:36:43', '2017-06-14 01:36:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_kegiatan`
--

CREATE TABLE `pengajuan_kegiatan` (
  `id_kegiatan` int(25) NOT NULL,
  `konfirmasi_lpj` int(5) NOT NULL,
  `konfirmasi_proposal` int(5) NOT NULL,
  `revisi` text,
  `nama` text NOT NULL,
  `history` text NOT NULL,
  `tujuan` text NOT NULL,
  `mekanisme` text NOT NULL,
  `tglpengajuan` date NOT NULL,
  `tglpelaksanaan` date DEFAULT NULL,
  `rpengajuan` varchar(25) NOT NULL,
  `rpelaksanaan` varchar(25) DEFAULT NULL,
  `url_poster` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_kegiatan`
--

INSERT INTO `pengajuan_kegiatan` (`id_kegiatan`, `konfirmasi_lpj`, `konfirmasi_proposal`, `revisi`, `nama`, `history`, `tujuan`, `mekanisme`, `tglpengajuan`, `tglpelaksanaan`, `rpengajuan`, `rpelaksanaan`, `url_poster`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 0, 'revisi', 'nama', 'history', 'tujuan', 'mekanisme', '2017-05-03', '2017-05-08', 'rencana pengajuan', 'rencana pelaksanaan', 'url poster', '2017-05-07 10:50:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengmas_dosen`
--

CREATE TABLE `pengmas_dosen` (
  `nip` varchar(20) NOT NULL,
  `kegiatan_id` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengmas_dosen`
--

INSERT INTO `pengmas_dosen` (`nip`, `kegiatan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345678910', 1, '2017-05-07 09:11:30', NULL, NULL),
('12345678910', 2, '2017-06-14 01:36:43', '2017-06-14 01:36:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_ruang`
--

CREATE TABLE `permohonan_ruang` (
  `id_permohonan_ruang` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) DEFAULT NULL,
  `nama` varchar(64) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `atribut_verifikasi` int(11) NOT NULL,
  `nim_nip` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan_ruang`
--

INSERT INTO `permohonan_ruang` (`id_permohonan_ruang`, `nip_petugas_id`, `nama`, `tgl_pinjam`, `atribut_verifikasi`, `nim_nip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'Kelas Pengganti Metpen', '2017-05-30', 2, '12345678910', '2017-05-07 10:26:20', '2017-06-12 18:41:05', NULL),
(2, '12345', 'PHL Kalkulus', '2017-06-15', 1, '081411631070', '2017-06-12 18:34:30', '2017-06-12 18:41:11', NULL),
(3, '12345', 'PHL PSI', '2017-06-16', 1, '081411631070', '2017-06-14 14:06:21', '2017-06-14 14:07:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `persentase_penilaian`
--

CREATE TABLE `persentase_penilaian` (
  `jenis_penilaian_id` int(11) NOT NULL,
  `mk_ditawarkan_id` int(11) NOT NULL,
  `persentase` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persentase_penilaian`
--

INSERT INTO `persentase_penilaian` (`jenis_penilaian_id`, `mk_ditawarkan_id`, `persentase`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 30, '2017-05-07 10:21:21', NULL, NULL),
(1, 4, 30, '2017-06-11 13:43:59', NULL, NULL),
(1, 5, 30, '2017-06-11 13:43:59', NULL, NULL),
(2, 4, 20, '2017-06-11 13:43:59', NULL, NULL),
(2, 5, 20, '2017-06-11 13:43:59', NULL, NULL),
(3, 4, 15, '2017-06-11 13:43:59', NULL, NULL),
(3, 5, 15, '2017-06-11 13:43:59', NULL, NULL),
(4, 4, 15, '2017-06-11 13:43:59', NULL, NULL),
(4, 5, 15, '2017-06-11 13:43:59', NULL, NULL),
(5, 4, 10, '2017-06-11 13:43:59', NULL, NULL),
(5, 5, 10, '2017-06-11 13:43:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas_tu`
--

CREATE TABLE `petugas_tu` (
  `nip_petugas` varchar(50) NOT NULL,
  `nama_petugas` varchar(24) NOT NULL,
  `no_telp_petugas` varchar(12) NOT NULL,
  `email_petugas` varchar(100) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_tu`
--

INSERT INTO `petugas_tu` (`nip_petugas`, `nama_petugas`, `no_telp_petugas`, `email_petugas`, `prodi_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345', 'George Mayer', '089535891657', '123123@gmail.com', 1, '2017-05-07 09:19:15', NULL, NULL),
('1234567', 'Faisal Rahman', '01234567', 'faisal@gmail.com', 1, '2017-06-14 13:57:46', '2017-06-14 13:58:40', '2017-06-14 13:58:40'),
('12346', 'Jeremy Mayer', '089535654789', 'j123@gmail.com', 1, '2017-05-07 09:19:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) DEFAULT NULL,
  `nim_id` varchar(15) NOT NULL,
  `kelompok_kegiatan` varchar(70) NOT NULL,
  `jenis_kegiatan` varchar(70) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `prestasi` varchar(30) NOT NULL,
  `tahun_kegiatan` varchar(4) NOT NULL,
  `penyelenggara` varchar(30) NOT NULL,
  `file_prestasi` varchar(50) NOT NULL,
  `ps_is_verified` int(12) NOT NULL DEFAULT '0',
  `alasan_verified` text,
  `skor` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nip_petugas_id`, `nim_id`, `kelompok_kegiatan`, `jenis_kegiatan`, `tingkat`, `prestasi`, `tahun_kegiatan`, `penyelenggara`, `file_prestasi`, `ps_is_verified`, `alasan_verified`, `skor`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', '081411631070', 'Kegiatan Wajib Universitas', 'Latihan Kepemimpinan', 'Departemen/Prodi', 'Satria Airlangga Surabaya', '2015', 'penyelenggara', '1497307901.png', 1, '', 200, '2017-05-07 09:23:54', '2017-06-12 16:05:37', NULL),
(2, NULL, '081411631070', 'Kegiatan Bidang Minat dan Bakat', 'Mengikuti kegiatan Minat dan Bakat', 'Nasional', 'Runner Up Hackathon 3.0', '2015', 'Telkom', '1497308813.png', 2, 'salah', NULL, '2017-06-12 16:06:53', '2017-06-12 16:06:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `nip_id` varchar(20) DEFAULT NULL,
  `kode_prodi` varchar(10) DEFAULT NULL,
  `nama_prodi` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `fakultas_id`, `nip_id`, `kode_prodi`, `nama_prodi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '12345678910', 'kode1', 'Sistem Informasi', '2017-05-27 07:11:15', NULL, NULL),
(2, 1, '12345678910', '123', 'Biologi', '2017-05-07 10:59:47', NULL, NULL),
(3, 1, '12345678910', '12', 'Matematika', '2017-05-27 07:16:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rincian_dana`
--

CREATE TABLE `rincian_dana` (
  `id_rdana` int(11) NOT NULL,
  `kegiatan_id` int(25) NOT NULL,
  `nama` text NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `sumber_id` int(11) NOT NULL,
  `kategori_dana` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_dana`
--

INSERT INTO `rincian_dana` (`id_rdana`, `kegiatan_id`, `nama`, `kuantitas`, `harga`, `sumber_id`, `kategori_dana`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'nama rincian barang', 3, 1500, 3, 0, '2017-05-07 10:53:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rincian_rundown`
--

CREATE TABLE `rincian_rundown` (
  `id_rundown` int(11) NOT NULL,
  `kegiatan_id` int(25) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori_rundown` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_rundown`
--

INSERT INTO `rincian_rundown` (`id_rundown`, `kegiatan_id`, `waktu`, `nama`, `kategori_rundown`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-05-04 00:00:00', 'nama kegiatan rundown', 0, '2017-05-07 10:52:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kapasitas`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '302', 60, '2017-05-07 10:18:46', NULL, NULL),
(2, '301A', 34, '2017-05-21 13:03:15', NULL, NULL),
(3, '301B', 50, '2017-06-11 11:48:32', NULL, NULL),
(4, '322A', 60, '2017-06-11 11:48:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sistem_pembelajaran`
--

CREATE TABLE `sistem_pembelajaran` (
  `id` int(11) NOT NULL,
  `sistem_pembelajaran` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistem_pembelajaran`
--

INSERT INTO `sistem_pembelajaran` (`id`, `sistem_pembelajaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ceramah', '2017-04-09 07:38:28', '2017-04-09 22:38:00', NULL),
(2, 'Presentasi', '2017-04-09 22:38:15', '2017-04-09 22:38:15', NULL),
(3, 'Diskusi', '2017-04-09 22:38:24', '2017-04-09 22:38:24', NULL),
(4, 'Tugas terstruktur', '2017-04-09 22:41:44', '2017-04-09 22:41:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `id_skripsi` int(11) NOT NULL,
  `NIM_id` varchar(15) NOT NULL,
  `kbk_id` int(11) NOT NULL,
  `statusprop_id` int(11) DEFAULT NULL,
  `statusskrip_id` int(11) DEFAULT NULL,
  `Judul` varchar(100) NOT NULL,
  `upload_form_usulan` varchar(100) DEFAULT NULL,
  `upload_berkas_proposal` varchar(100) DEFAULT NULL,
  `upload_berkas_skripsi` varchar(100) DEFAULT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `tgl_sidangpro` date DEFAULT NULL,
  `waktu_sidangpro` time DEFAULT NULL,
  `tempat_sidangpro` varchar(25) DEFAULT NULL,
  `nilai_sidangpro` double DEFAULT NULL,
  `nilai_sidangskrip` double DEFAULT NULL,
  `tgl_sidangskrip` date DEFAULT NULL,
  `waktu_sidangskrip` time DEFAULT NULL,
  `tempat_sidangskrip` varchar(25) DEFAULT NULL,
  `tanggal_pengumpulan_proposal` date DEFAULT NULL,
  `tanggal_pengumpulan_skripsi` date DEFAULT NULL,
  `is_verified` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `NIM_id`, `kbk_id`, `statusprop_id`, `statusskrip_id`, `Judul`, `upload_form_usulan`, `upload_berkas_proposal`, `upload_berkas_skripsi`, `nip_petugas_id`, `tgl_sidangpro`, `waktu_sidangpro`, `tempat_sidangpro`, `nilai_sidangpro`, `nilai_sidangskrip`, `tgl_sidangskrip`, `waktu_sidangskrip`, `tempat_sidangskrip`, `tanggal_pengumpulan_proposal`, `tanggal_pengumpulan_skripsi`, `is_verified`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081411631070', 2, 1, 1, 'Rancang Bangun Sistem Pendukung Keputusan Pemilihan Suplier di PT Near', NULL, '1495872093.docx', NULL, '12345', '2017-05-01', '03:00:00', 'Labkom 4', NULL, NULL, NULL, NULL, NULL, '2017-06-14', '2017-06-14', 2, '2017-05-07 09:38:38', '2017-06-14 14:12:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_asset`
--

CREATE TABLE `status_asset` (
  `id_status` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `status_asset`
--

INSERT INTO `status_asset` (`id_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ready', '2017-05-27 07:36:09', NULL, NULL),
(2, 'Borrowed', '2017-06-12 08:21:15', NULL, NULL),
(3, 'Maintanance', '2017-06-12 08:21:15', NULL, NULL),
(4, 'Broken', '2017-06-12 08:21:35', NULL, NULL),
(5, 'Expired', '2017-06-12 08:21:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_skripsi`
--

CREATE TABLE `status_skripsi` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `status_skripsi`
--

INSERT INTO `status_skripsi` (`id`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Disetjui', '2017-05-07 09:35:05', NULL, NULL),
(2, 'Revisi', '2017-05-07 09:35:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_team_teaching`
--

CREATE TABLE `status_team_teaching` (
  `id_status_tt` int(11) NOT NULL,
  `status_tt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_dosen`
--

CREATE TABLE `surat_keluar_dosen` (
  `id_surat_keluar` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) DEFAULT NULL,
  `nama` varchar(64) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar_dosen`
--

INSERT INTO `surat_keluar_dosen` (`id_surat_keluar`, `nip_petugas_id`, `nama`, `tgl_upload`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'Surat Pengantar Conference', '2017-05-07 10:30:37', 0, '2017-05-07 10:30:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_mhs`
--

CREATE TABLE `surat_keluar_mhs` (
  `id_surat_keluar` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) DEFAULT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar_mhs`
--

INSERT INTO `surat_keluar_mhs` (`id_surat_keluar`, `nip_petugas_id`, `nama_lembaga`, `nama`, `alamat`, `tgl_upload`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'Bank Indonesia', 'Permohonan Magang', 'Jalan Pahlawan No.35', '2017-06-13 01:35:04', 1, '2017-05-07 10:29:51', '2017-06-14 14:17:45', NULL),
(2, '12345', 'pertamina', 'magang', 'karang', '2017-06-14 21:16:18', 2, '2017-06-14 14:16:18', '2017-06-14 14:17:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `no_surat_masuk` varchar(25) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `judul_surat_masuk` varchar(100) NOT NULL,
  `nim_nip` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_surat_masuk`, `nip_petugas_id`, `nama_lembaga`, `judul_surat_masuk`, `nim_nip`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', '12345', 'Bank Indonesia', 'Surat Penerimaan Magang', '081411631070', 0, '2017-05-07 10:28:22', NULL, NULL),
(2, '', '12345', 'ASINDO', 'Surat Undangan Conference', '12345678910', 0, '2017-05-07 10:28:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `surat_id` int(12) NOT NULL,
  `file_sk` varchar(60) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `keterangan_sk` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`surat_id`, `file_sk`, `no_surat`, `tanggal_surat`, `keterangan_sk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'file sk', 'no surat tugas', '2017-05-02', 'keterangan sk', '2017-05-07 09:07:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas_dosen`
--

CREATE TABLE `surat_tugas_dosen` (
  `nip` varchar(20) NOT NULL,
  `surat_id` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_tugas_dosen`
--

INSERT INTO `surat_tugas_dosen` (`nip`, `surat_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('12345678910', 1, '2017-05-07 09:08:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thn_akademik`
--

CREATE TABLE `thn_akademik` (
  `id_thn_akademik` int(11) NOT NULL,
  `semester_periode` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thn_akademik`
--

INSERT INTO `thn_akademik` (`id_thn_akademik`, `semester_periode`, `created_at`, `updated_at`) VALUES
(1, '2014/2015 Genap', '2017-06-06 06:09:47', NULL),
(2, '2015/2016 Ganjil', '2017-06-06 06:09:47', NULL),
(3, '2015/2016 Genap', '2017-06-06 06:09:47', NULL),
(4, '2016/2017 Ganjil', '2017-06-06 06:09:47', NULL),
(5, '2016/2017 Genap', '2017-06-06 06:09:47', NULL),
(6, '2000/2001 Gasal', '2017-06-23 19:00:22', '2017-06-23 19:00:22'),
(7, '2004/2005 Gasal', '2017-06-23 22:29:49', '2017-06-23 22:29:49'),
(8, '2005/2006 Gasal', '2017-06-23 22:36:23', '2017-06-23 22:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_peminjaman`
--

CREATE TABLE `transaksi_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `nim_nip_peminjam` varchar(20) NOT NULL,
  `asset_yang_dipinjam` text NOT NULL,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date NOT NULL,
  `expected_checkin_date` date NOT NULL,
  `waktu_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_peminjaman`
--

INSERT INTO `transaksi_peminjaman` (`id_peminjaman`, `nip_petugas_id`, `asset_id`, `nim_nip_peminjam`, `asset_yang_dipinjam`, `checkin_date`, `checkout_date`, `expected_checkin_date`, `waktu_pinjam`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '12345', 9, '12345678910', 'HUAWEI 2889qr network switch', '2017-05-25', '2017-05-25', '2017-05-31', '2017-06-13 01:05:13', '2017-05-25 05:46:01', '2017-06-12 18:05:13', '2017-06-12 18:05:13'),
(4, '12345', 11, '12345678911', 'HUAWEI 2889qr network switch 7', '2017-05-25', '2017-05-25', '2017-05-26', '2017-06-13 01:05:17', '2017-05-25 06:58:02', '2017-06-12 18:05:17', '2017-06-12 18:05:17'),
(5, '12345', 12, '081411631070', 'pedoman skripsi 2112', '2017-05-25', '2017-05-25', '2017-05-26', '2017-06-13 01:05:21', '2017-05-25 06:58:51', '2017-06-12 18:05:21', '2017-06-12 18:05:21'),
(6, '12345', 10, '081411631070', 'HUAWEI 2889qr network switch', '2017-05-25', '2017-05-25', '2017-05-26', '2017-06-13 01:05:32', '2017-05-25 07:15:45', '2017-06-12 18:05:32', '2017-06-12 18:05:32'),
(7, '12345', 13, '081411631071', 'kartu wr', '2017-06-12', '2017-06-08', '2017-06-09', '2017-06-13 01:05:39', '2017-06-07 20:54:36', '2017-06-12 18:05:39', '2017-06-12 18:05:39'),
(8, '12345', 15, '081411631024', 'Dell 244HVU 24 inch Monitor', '2017-06-13', '2017-06-13', '2017-06-27', '2017-06-13 01:07:23', '2017-06-12 18:05:06', '2017-06-12 18:07:23', '2017-06-12 18:07:23'),
(9, '12345', 17, '081411631024', 'AntiVirus AVAST', '2017-06-13', '2017-06-13', '2017-06-14', '2017-06-13 03:18:03', '2017-06-12 20:16:24', '2017-06-12 20:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(11) NOT NULL,
  `kode_universitas` varchar(10) NOT NULL,
  `nama_universitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `kode_universitas`, `nama_universitas`) VALUES
(1, 'kode1', 'Universitas Airlangga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `role` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '081411631006', 'admin', 'mahasiswa', 'admin@psi.com', '$2y$10$9S83V93bZX74YV2V4tWRCOJeAaRMnTX0ys.5PZGiHjd3JEAmAuyv6', 'XK6BJcl4n38F5ZKtLYFcTY4eoPnFwWLzpIiafpPlXEsrGoVV7LKpisHDGj5Y', '2017-03-17 20:16:14', '2017-03-17 20:16:14'),
(5, '081411631070', 'Prianka Ratu Masitho', 'mahasiswa', 'priankarm@airlangga-academic.com', '$2y$10$lg7ykAXZzhjHUmVy6CePCuFSK/rGlnRfU0sH2E38PMDyMPPvY68Ey', 'zbmta6NoEbhYchxiEE8kp1yhjgFjsDV1LbENrsWNHwzzqtpXLTZz559u89Wl', '2017-05-10 03:40:14', '2017-06-12 18:48:12'),
(6, '12345678910', 'Prof. Einstein', 'dosen', 'Einstein@email.com', '$2y$10$AeNiPmUWYXL5vCE4EaQKoeR265B7d4EzZWajzJEj610EaiW7VNuZm', 'vdXgKXYnnp8AW6MCQ6zzFD6KqzAUjMezt2Cj36qcoEcFGnAFXZqqW30hDrQ8', '2017-05-10 03:54:39', '2017-05-10 03:54:39'),
(7, '12345', 'George Mayer', 'karyawan', '123123@gmail.com', '$2y$10$zabtKldYAuIH/KbIbYofuON3U/jlvBXIEFY/w.ItHp0WdfvfFteda', 'W1bc2WwdhubA7DtIdQwzFJDqmDcRSl6ExzDyKdFQEWzrlg2NutP56i8zH6va', '2017-05-10 03:55:29', '2017-05-10 03:55:29'),
(8, '12345678911', 'John PhD', 'dosen', 'John@email.com', '$2y$10$AeNiPmUWYXL5vCE4EaQKoeR265B7d4EzZWajzJEj610EaiW7VNuZm', 'rOem6p0uegCq6vVld8QRQPvE6GNpA3DZkB5VKPWYyKFZwVyVe9UgiRQ6QSGT', '2017-05-10 03:54:39', '2017-05-10 03:54:39'),
(9, '12345678912', 'Kayla S.Kom.,M.Kom.', 'dosen', 'kayla123n@email.com', '$2y$10$AeNiPmUWYXL5vCE4EaQKoeR265B7d4EzZWajzJEj610EaiW7VNuZm', 'rOem6p0uegCq6vVld8QRQPvE6GNpA3DZkB5VKPWYyKFZwVyVe9UgiRQ6QSGT', '2017-05-10 03:54:39', '2017-05-10 03:54:39'),
(10, '081411631099', 'Jenny Kim', 'mahasiswa', 'jerryKim1996@email.com', '$2y$10$jOI14OJADWUUImOHnZztquz9BdO/2dFYiRPBhtyygc8DEmIbLNLNq', 'J0kuQQYGjjFQs89YOikmY6p9x5EU35UFDODsbD4JbAfMleDn05tJQJrXjZv5', '2017-05-10 03:40:14', '2017-06-12 19:16:54'),
(11, '123456', 'Jeremy Mayer', 'karyawan', 'j123@gmail.com', '$2y$10$zabtKldYAuIH/KbIbYofuON3U/jlvBXIEFY/w.ItHp0WdfvfFteda', 'COEd39ZPUoatKUMjTil5ZyVZrZxCo4TaEux62h7nD1dcWkOoedCntbo6JJUl', '2017-05-10 03:55:29', '2017-05-10 03:55:29'),
(12, '081411631006', '081411631006', 'mahasiswa', 'hilmi@olimpiade.id', '$2y$10$hcqAEffcDlEyQRkk9cd/0.Xg8BydaCJ0UyD.x4Oa2Vq0LkYW10dB2', NULL, '2017-06-12 16:01:49', '2017-06-12 16:01:49'),
(13, '081711631006', '081711631006', 'mahasiswa', 'hilmi@olimpiade.id', '$2y$10$ShOrxbWyu6FpBDDa7WL1.ONKiV7AwtQ9R5kQUc6bAMt1ROd5hzvSm', NULL, '2017-06-12 16:04:53', '2017-06-12 16:04:53'),
(14, '081411631007', '081411631007', 'mahasiswa', 'fandi@bram.com', '$2y$10$zjorCa5gex7.nZAnxdyGj.NBxY..90c.7puWpVbhfz7Vda1be1FVe', NULL, '2017-06-12 19:10:50', '2017-06-12 19:10:50'),
(15, '88888888', '88888888', 'mahasiswa', 'kendal@jenner.com', '$2y$10$.oI8CuNoFiKJpUWd.ja0jeJTluXe6pmOC15M3U9eh9yCxAaIbSxKm', NULL, '2017-06-12 19:23:21', '2017-06-12 19:24:26'),
(16, '0799667799', 'Renold', 'dosen', 'Renold@gmail.com', '$2y$10$wwpfozLmFcMAJR0VE/CpxOrm4Hddr55molijWh/pydaoxsV1mMLD6', 'YA9iMqCsbBZFLOXHTE4yefOUi6RFbuoNnuzKkMXARDKAX1nJTj2zo39qkZBs', '2017-06-14 02:43:39', '2017-06-14 02:43:39'),
(17, '1234567', 'Faisal', 'karyawan', 'faisal@gmail.com', '$2y$10$zabtKldYAuIH/KbIbYofuON3U/jlvBXIEFY/w.ItHp0WdfvfFteda', NULL, '2017-06-14 13:57:46', '2017-06-14 13:57:46'),
(18, '123456', '12345', 'dosen', 'dosen@psi.com', '$2y$10$guHyWJ3m8XeC3l/I.NVaPuQSZqF3eE7r6BYR/0Ex8EZaTgrV20S9S', NULL, '2017-06-14 15:02:05', '2017-06-14 15:02:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id_asset`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `nip_petugas` (`nip_petugas_id`),
  ADD KEY `lokasi_id` (`lokasi_id`);

--
-- Indexes for table `atribut_softskill`
--
ALTER TABLE `atribut_softskill`
  ADD PRIMARY KEY (`id_softskill`);

--
-- Indexes for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  ADD PRIMARY KEY (`biodata_id`,`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `biodata_mhs`
--
ALTER TABLE `biodata_mhs`
  ADD PRIMARY KEY (`id_bio`,`nim_id`),
  ADD KEY `nim` (`nim_id`);

--
-- Indexes for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD PRIMARY KEY (`id_cpem`),
  ADD KEY `prodi_id` (`prodi_id`),
  ADD KEY `kategori_cpem_id` (`kategori_cpem_id`);

--
-- Indexes for table `cp_mata_kuliah`
--
ALTER TABLE `cp_mata_kuliah`
  ADD PRIMARY KEY (`id_cpmk`),
  ADD KEY `matakuliah_id` (`matakuliah_id`);

--
-- Indexes for table `cp_prodi`
--
ALTER TABLE `cp_prodi`
  ADD PRIMARY KEY (`cpem_id`,`mk_id`),
  ADD KEY `cpem_id` (`cpem_id`),
  ADD KEY `mk_id` (`mk_id`);

--
-- Indexes for table `cp_program`
--
ALTER TABLE `cp_program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `detail_anggota`
--
ALTER TABLE `detail_anggota`
  ADD PRIMARY KEY (`id_anggota`) USING BTREE,
  ADD KEY `kode_penelitian` (`kode_penelitian_id`);

--
-- Indexes for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  ADD PRIMARY KEY (`media_pembelajaran_id`,`cpmk_id`),
  ADD KEY `media_pembelajaran_id` (`media_pembelajaran_id`),
  ADD KEY `cpmk_id` (`cpmk_id`);

--
-- Indexes for table `detail_media_pembelajaran`
--
ALTER TABLE `detail_media_pembelajaran`
  ADD PRIMARY KEY (`cpmk_id`,`sistem_pembelajaran_id`),
  ADD KEY `cpmk_id` (`cpmk_id`),
  ADD KEY `sistem_pembelajaran_id` (`sistem_pembelajaran_id`);

--
-- Indexes for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  ADD PRIMARY KEY (`mk_ditawarkan_id`,`mhs_id`,`jenis_penilaian_id`),
  ADD KEY `mk_ditawarkan_id` (`mk_ditawarkan_id`),
  ADD KEY `jenis_penilaian_id` (`jenis_penilaian_id`),
  ADD KEY `mhs_id` (`mhs_id`) USING BTREE;

--
-- Indexes for table `detail_penelitian`
--
ALTER TABLE `detail_penelitian`
  ADD PRIMARY KEY (`id_penelitian`) USING BTREE,
  ADD KEY `kode_penelitian` (`kode_penelitian_id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `nip_petugas` (`nip_petugas_id`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`),
  ADD KEY `kegiatan_id` (`kegiatan_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `dosen_kegiatan`
--
ALTER TABLE `dosen_kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`,`nip_id`),
  ADD KEY `jabatan_id` (`jabatan_id`),
  ADD KEY `kegiatan_id` (`kegiatan_id`),
  ADD KEY `nip` (`nip_id`);

--
-- Indexes for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  ADD PRIMARY KEY (`skripsi_id`,`nip_id`,`status`),
  ADD KEY `nip_id` (`nip_id`),
  ADD KEY `skripsi_id` (`skripsi_id`) USING BTREE;

--
-- Indexes for table `dosen_pemohon_surat`
--
ALTER TABLE `dosen_pemohon_surat`
  ADD PRIMARY KEY (`nip_id`,`surat_keluar_id`),
  ADD KEY `nip` (`nip_id`,`surat_keluar_id`),
  ADD KEY `id_surat_keluar` (`surat_keluar_id`);

--
-- Indexes for table `dosen_penguji`
--
ALTER TABLE `dosen_penguji`
  ADD PRIMARY KEY (`skripsi_id`,`nip_id`),
  ADD KEY `nip_id` (`nip_id`),
  ADD KEY `skripsi_id` (`skripsi_id`) USING BTREE;

--
-- Indexes for table `dosen_rapat`
--
ALTER TABLE `dosen_rapat`
  ADD PRIMARY KEY (`nip`,`notulen_id`),
  ADD KEY `id_notulen` (`notulen_id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `elearning`
--
ALTER TABLE `elearning`
  ADD PRIMARY KEY (`id_elearning`),
  ADD KEY `mk_ditawarkan_id` (`mk_ditawarkan_id`,`nip_id`),
  ADD KEY `nip` (`nip_id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD KEY `universitas_id` (`universitas_id`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD PRIMARY KEY (`mk_ditawarkan_id`,`jam_id`,`hari_id`,`ruang_id`),
  ADD KEY `hari_idfk_1` (`hari_id`),
  ADD KEY `jam_idfk_1` (`jam_id`),
  ADD KEY `ruang_idfk_1` (`ruang_id`),
  ADD KEY `mk_ditawarkan_id` (`mk_ditawarkan_id`);

--
-- Indexes for table `jadwal_permohonan`
--
ALTER TABLE `jadwal_permohonan`
  ADD PRIMARY KEY (`permohonan_ruang_id`,`ruang_id`,`hari_id`,`jam_id`),
  ADD KEY `ruang_id` (`ruang_id`),
  ADD KEY `id_jam` (`jam_id`),
  ADD KEY `id_permohonan_ruang` (`permohonan_ruang_id`) USING BTREE,
  ADD KEY `id_hari` (`hari_id`) USING BTREE;

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `jenis_mk`
--
ALTER TABLE `jenis_mk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_penilaian`
--
ALTER TABLE `jenis_penilaian`
  ADD PRIMARY KEY (`id_jenis_penilaian`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`jurnal_id`);

--
-- Indexes for table `jurnal_dosen`
--
ALTER TABLE `jurnal_dosen`
  ADD PRIMARY KEY (`jurnal_id`,`nip`),
  ADD KEY `jurnal_id` (`jurnal_id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_capaian_pembelajaran`
--
ALTER TABLE `kategori_capaian_pembelajaran`
  ADD PRIMARY KEY (`id_kategori_cpem`);

--
-- Indexes for table `kategori_dana`
--
ALTER TABLE `kategori_dana`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `kategori_media_pembelajaran`
--
ALTER TABLE `kategori_media_pembelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kbk`
--
ALTER TABLE `kbk`
  ADD PRIMARY KEY (`id_kbk`);

--
-- Indexes for table `konferensi`
--
ALTER TABLE `konferensi`
  ADD PRIMARY KEY (`konferensi_id`);

--
-- Indexes for table `konferensi_dosen`
--
ALTER TABLE `konferensi_dosen`
  ADD PRIMARY KEY (`nip`,`konferensi_id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `konferensi_id` (`konferensi_id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `skripsi_id` (`skripsi_id`);

--
-- Indexes for table `koor_mk`
--
ALTER TABLE `koor_mk`
  ADD PRIMARY KEY (`id_koor_mk`,`nip_id`,`mk_id`),
  ADD KEY `mk_id` (`mk_id`),
  ADD KEY `status_tt_id` (`status_tt_id`),
  ADD KEY `nip_id` (`nip_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `nlp` (`nip_id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id_maintenance`),
  ADD KEY `asset_id` (`asset_id`),
  ADD KEY `nip_petugas` (`nip_petugas_id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`),
  ADD KEY `id_jenis_mk` (`jenis_mk_id`);

--
-- Indexes for table `mhs_kegiatan`
--
ALTER TABLE `mhs_kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`,`nim_id`),
  ADD KEY `jabatan_id` (`jabatan_id`),
  ADD KEY `kegiatan_id` (`kegiatan_id`),
  ADD KEY `nim` (`nim_id`);

--
-- Indexes for table `mhs_pemohon_surat`
--
ALTER TABLE `mhs_pemohon_surat`
  ADD PRIMARY KEY (`nim_id`,`surat_keluar_id`),
  ADD KEY `surat_keluar_id` (`surat_keluar_id`),
  ADD KEY `nim` (`nim_id`) USING BTREE;

--
-- Indexes for table `mk_diajar`
--
ALTER TABLE `mk_diajar`
  ADD PRIMARY KEY (`dosen_id`,`mk_ditawarkan_id`),
  ADD KEY `mk_ditawarkan_idfk_3` (`mk_ditawarkan_id`),
  ADD KEY `dosen_id` (`dosen_id`) USING BTREE;

--
-- Indexes for table `mk_diambil`
--
ALTER TABLE `mk_diambil`
  ADD PRIMARY KEY (`mk_ditawarkan_id`,`mhs_id`),
  ADD KEY `mhs_id` (`mhs_id`),
  ADD KEY `mk_ditawarkan_id` (`mk_ditawarkan_id`) USING BTREE;

--
-- Indexes for table `mk_ditawarkan`
--
ALTER TABLE `mk_ditawarkan`
  ADD PRIMARY KEY (`id_mk_ditawarkan`),
  ADD KEY `thn_akademik_id` (`thn_akademik_id`),
  ADD KEY `matakuliah_id` (`matakuliah_id`),
  ADD KEY `id_mk_ditawarkan` (`id_mk_ditawarkan`) USING BTREE;

--
-- Indexes for table `mk_prasyarat`
--
ALTER TABLE `mk_prasyarat`
  ADD PRIMARY KEY (`id_mk_prasyarat`,`mk_id`,`mk_syarat_id`),
  ADD KEY `mk_id` (`mk_id`),
  ADD KEY `mk_id2` (`mk_syarat_id`);

--
-- Indexes for table `mk_prodi`
--
ALTER TABLE `mk_prodi`
  ADD PRIMARY KEY (`prodi_id`,`mk_id`),
  ADD KEY `prodi_id` (`prodi_id`),
  ADD KEY `mk_id` (`mk_id`);

--
-- Indexes for table `mk_softskill`
--
ALTER TABLE `mk_softskill`
  ADD PRIMARY KEY (`mk_id`,`softskill_id`),
  ADD KEY `mk_id` (`mk_id`),
  ADD KEY `softskill_id` (`softskill_id`);

--
-- Indexes for table `notulen_rapat`
--
ALTER TABLE `notulen_rapat`
  ADD PRIMARY KEY (`id_notulen`),
  ADD KEY `nip_petugas_id` (`nip_petugas_id`),
  ADD KEY `nip_id` (`nip_id`),
  ADD KEY `id_permohonan_ruang` (`permohonan_ruang_id`) USING BTREE;

--
-- Indexes for table `penelitian_dosen`
--
ALTER TABLE `penelitian_dosen`
  ADD PRIMARY KEY (`penelitian_id`);

--
-- Indexes for table `penelitian_mhs`
--
ALTER TABLE `penelitian_mhs`
  ADD PRIMARY KEY (`kode_penelitian`),
  ADD KEY `Det_kode_penelitian` (`nim_id`),
  ADD KEY `nim_id` (`nim_id`),
  ADD KEY `nip_petugas_id` (`nip_petugas_id`);

--
-- Indexes for table `penelitian_milik_dosen`
--
ALTER TABLE `penelitian_milik_dosen`
  ADD PRIMARY KEY (`nip`,`penelitian_id`),
  ADD KEY `penelitian_id` (`penelitian_id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD PRIMARY KEY (`kegiatan_id`);

--
-- Indexes for table `pengajuan_kegiatan`
--
ALTER TABLE `pengajuan_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `pengmas_dosen`
--
ALTER TABLE `pengmas_dosen`
  ADD PRIMARY KEY (`nip`,`kegiatan_id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_kegiatan` (`kegiatan_id`);

--
-- Indexes for table `permohonan_ruang`
--
ALTER TABLE `permohonan_ruang`
  ADD PRIMARY KEY (`id_permohonan_ruang`),
  ADD KEY `nip_petugas` (`nip_petugas_id`);

--
-- Indexes for table `persentase_penilaian`
--
ALTER TABLE `persentase_penilaian`
  ADD PRIMARY KEY (`jenis_penilaian_id`,`mk_ditawarkan_id`),
  ADD KEY `mk_ditawarkan_idfk_5` (`mk_ditawarkan_id`),
  ADD KEY `jenis_penilaian_id` (`jenis_penilaian_id`) USING BTREE;

--
-- Indexes for table `petugas_tu`
--
ALTER TABLE `petugas_tu`
  ADD PRIMARY KEY (`nip_petugas`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `nim` (`nim_id`),
  ADD KEY `nip_petugas` (`nip_petugas_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `fakultas_id` (`fakultas_id`),
  ADD KEY `nip` (`nip_id`);

--
-- Indexes for table `rincian_dana`
--
ALTER TABLE `rincian_dana`
  ADD PRIMARY KEY (`id_rdana`),
  ADD KEY `kegiatan_id` (`kegiatan_id`),
  ADD KEY `sumber_id` (`sumber_id`);

--
-- Indexes for table `rincian_rundown`
--
ALTER TABLE `rincian_rundown`
  ADD PRIMARY KEY (`id_rundown`),
  ADD KEY `kegiatan_id` (`kegiatan_id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `sistem_pembelajaran`
--
ALTER TABLE `sistem_pembelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id_skripsi`),
  ADD KEY `NIM_id` (`NIM_id`),
  ADD KEY `kbk_id` (`kbk_id`),
  ADD KEY `statusskrip_id` (`statusskrip_id`),
  ADD KEY `nip_petugas_id` (`nip_petugas_id`),
  ADD KEY `statusprop_id` (`statusprop_id`) USING BTREE;

--
-- Indexes for table `status_asset`
--
ALTER TABLE `status_asset`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `status_skripsi`
--
ALTER TABLE `status_skripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_team_teaching`
--
ALTER TABLE `status_team_teaching`
  ADD PRIMARY KEY (`id_status_tt`);

--
-- Indexes for table `surat_keluar_dosen`
--
ALTER TABLE `surat_keluar_dosen`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD KEY `nip_petugas` (`nip_petugas_id`);

--
-- Indexes for table `surat_keluar_mhs`
--
ALTER TABLE `surat_keluar_mhs`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD KEY `nip_petugas` (`nip_petugas_id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip_petugas_id` (`nip_petugas_id`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indexes for table `surat_tugas_dosen`
--
ALTER TABLE `surat_tugas_dosen`
  ADD PRIMARY KEY (`nip`,`surat_id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `surat_id` (`surat_id`);

--
-- Indexes for table `thn_akademik`
--
ALTER TABLE `thn_akademik`
  ADD PRIMARY KEY (`id_thn_akademik`);

--
-- Indexes for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `asset_id` (`asset_id`),
  ADD KEY `nip_petugas_id` (`nip_petugas_id`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_universitas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `atribut_softskill`
--
ALTER TABLE `atribut_softskill`
  MODIFY `id_softskill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  MODIFY `biodata_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `biodata_mhs`
--
ALTER TABLE `biodata_mhs`
  MODIFY `id_bio` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  MODIFY `id_cpem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cp_mata_kuliah`
--
ALTER TABLE `cp_mata_kuliah`
  MODIFY `id_cpmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cp_program`
--
ALTER TABLE `cp_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_anggota`
--
ALTER TABLE `detail_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `detail_penelitian`
--
ALTER TABLE `detail_penelitian`
  MODIFY `id_penelitian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `elearning`
--
ALTER TABLE `elearning`
  MODIFY `id_elearning` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jenis_mk`
--
ALTER TABLE `jenis_mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_penilaian`
--
ALTER TABLE `jenis_penilaian`
  MODIFY `id_jenis_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `jurnal_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123455683;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_capaian_pembelajaran`
--
ALTER TABLE `kategori_capaian_pembelajaran`
  MODIFY `id_kategori_cpem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori_dana`
--
ALTER TABLE `kategori_dana`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori_media_pembelajaran`
--
ALTER TABLE `kategori_media_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konferensi`
--
ALTER TABLE `konferensi`
  MODIFY `konferensi_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `koor_mk`
--
ALTER TABLE `koor_mk`
  MODIFY `id_koor_mk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mk_ditawarkan`
--
ALTER TABLE `mk_ditawarkan`
  MODIFY `id_mk_ditawarkan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mk_prasyarat`
--
ALTER TABLE `mk_prasyarat`
  MODIFY `id_mk_prasyarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notulen_rapat`
--
ALTER TABLE `notulen_rapat`
  MODIFY `id_notulen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penelitian_dosen`
--
ALTER TABLE `penelitian_dosen`
  MODIFY `penelitian_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penelitian_mhs`
--
ALTER TABLE `penelitian_mhs`
  MODIFY `kode_penelitian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  MODIFY `kegiatan_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_kegiatan`
--
ALTER TABLE `pengajuan_kegiatan`
  MODIFY `id_kegiatan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permohonan_ruang`
--
ALTER TABLE `permohonan_ruang`
  MODIFY `id_permohonan_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rincian_dana`
--
ALTER TABLE `rincian_dana`
  MODIFY `id_rdana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rincian_rundown`
--
ALTER TABLE `rincian_rundown`
  MODIFY `id_rundown` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sistem_pembelajaran`
--
ALTER TABLE `sistem_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status_asset`
--
ALTER TABLE `status_asset`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `status_skripsi`
--
ALTER TABLE `status_skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_team_teaching`
--
ALTER TABLE `status_team_teaching`
  MODIFY `id_status_tt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keluar_dosen`
--
ALTER TABLE `surat_keluar_dosen`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_keluar_mhs`
--
ALTER TABLE `surat_keluar_mhs`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `surat_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thn_akademik`
--
ALTER TABLE `thn_akademik`
  MODIFY `id_thn_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `asset_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asset_ibfk_2` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasi` (`id`),
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status` FOREIGN KEY (`status_id`) REFERENCES `status_asset` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  ADD CONSTRAINT `biodata_dosen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `biodata_mhs`
--
ALTER TABLE `biodata_mhs`
  ADD CONSTRAINT `biodata_mhs_ibfk_1` FOREIGN KEY (`nim_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD CONSTRAINT `capaian_pembelajaran_ibfk_2` FOREIGN KEY (`kategori_cpem_id`) REFERENCES `kategori_capaian_pembelajaran` (`id_kategori_cpem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `capaian_pembelajaran_ibfk_3` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `cp_mata_kuliah`
--
ALTER TABLE `cp_mata_kuliah`
  ADD CONSTRAINT `cp_mata_kuliah_ibfk_1` FOREIGN KEY (`matakuliah_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cp_prodi`
--
ALTER TABLE `cp_prodi`
  ADD CONSTRAINT `cp_prodi_ibfk_2` FOREIGN KEY (`mk_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cp_prodi_ibfk_3` FOREIGN KEY (`cpem_id`) REFERENCES `capaian_pembelajaran` (`id_cpem`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cp_program`
--
ALTER TABLE `cp_program`
  ADD CONSTRAINT `cp_program_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_anggota`
--
ALTER TABLE `detail_anggota`
  ADD CONSTRAINT `kode_penelitian_mhs_ibfk1` FOREIGN KEY (`kode_penelitian_id`) REFERENCES `penelitian_mhs` (`kode_penelitian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  ADD CONSTRAINT `detail_kategori_ibfk_1` FOREIGN KEY (`media_pembelajaran_id`) REFERENCES `kategori_media_pembelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_kategori_ibfk_2` FOREIGN KEY (`cpmk_id`) REFERENCES `cp_mata_kuliah` (`id_cpmk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_media_pembelajaran`
--
ALTER TABLE `detail_media_pembelajaran`
  ADD CONSTRAINT `detail_media_pembelajaran_ibfk_1` FOREIGN KEY (`cpmk_id`) REFERENCES `cp_mata_kuliah` (`id_cpmk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_media_pembelajaran_ibfk_2` FOREIGN KEY (`sistem_pembelajaran_id`) REFERENCES `sistem_pembelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  ADD CONSTRAINT `detail_nilai_ibfk_2` FOREIGN KEY (`mk_ditawarkan_id`) REFERENCES `mk_diambil` (`mk_ditawarkan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_nilai_ibfk_3` FOREIGN KEY (`mhs_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jenis_penilaian_idfk_1` FOREIGN KEY (`jenis_penilaian_id`) REFERENCES `jenis_penilaian` (`id_jenis_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_penelitian`
--
ALTER TABLE `detail_penelitian`
  ADD CONSTRAINT `kode_penelitian_mhs_ibfk2` FOREIGN KEY (`kode_penelitian_id`) REFERENCES `penelitian_mhs` (`kode_penelitian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD CONSTRAINT `fk_dokumentasi_kegiatan` FOREIGN KEY (`kegiatan_id`) REFERENCES `pengajuan_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen_kegiatan`
--
ALTER TABLE `dosen_kegiatan`
  ADD CONSTRAINT `dosen_kegiatan_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_kegiatan_ibfk_2` FOREIGN KEY (`kegiatan_id`) REFERENCES `pengajuan_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_kegiatan_ibfk_3` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  ADD CONSTRAINT `dosen_pembimbing_ibfk_1` FOREIGN KEY (`skripsi_id`) REFERENCES `skripsi` (`id_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_pembimbing_ibfk_2` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen_pemohon_surat`
--
ALTER TABLE `dosen_pemohon_surat`
  ADD CONSTRAINT `dosen_pemohon_surat_ibfk_1` FOREIGN KEY (`surat_keluar_id`) REFERENCES `surat_keluar_dosen` (`id_surat_keluar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_pemohon_surat_ibfk_2` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE;

--
-- Constraints for table `dosen_penguji`
--
ALTER TABLE `dosen_penguji`
  ADD CONSTRAINT `dosen_penguji_ibfk_1` FOREIGN KEY (`skripsi_id`) REFERENCES `skripsi` (`id_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_penguji_ibfk_2` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen_rapat`
--
ALTER TABLE `dosen_rapat`
  ADD CONSTRAINT `dosen_rapat_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_rapat_ibfk_3` FOREIGN KEY (`notulen_id`) REFERENCES `notulen_rapat` (`id_notulen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elearning`
--
ALTER TABLE `elearning`
  ADD CONSTRAINT `elearning_ibfk_1` FOREIGN KEY (`mk_ditawarkan_id`) REFERENCES `mk_ditawarkan` (`id_mk_ditawarkan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `elearning_ibfk_2` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD CONSTRAINT `fakultas_ibfk_1` FOREIGN KEY (`universitas_id`) REFERENCES `universitas` (`id_universitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD CONSTRAINT `hari_idfk_1` FOREIGN KEY (`hari_id`) REFERENCES `hari` (`id_hari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_kuliah_ibfk_1` FOREIGN KEY (`mk_ditawarkan_id`) REFERENCES `mk_ditawarkan` (`id_mk_ditawarkan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jam_idfk_1` FOREIGN KEY (`jam_id`) REFERENCES `jam` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ruang_idfk_1` FOREIGN KEY (`ruang_id`) REFERENCES `ruang` (`id_ruang`);

--
-- Constraints for table `jadwal_permohonan`
--
ALTER TABLE `jadwal_permohonan`
  ADD CONSTRAINT `jadwal_permohonan_ibfk_1` FOREIGN KEY (`permohonan_ruang_id`) REFERENCES `permohonan_ruang` (`id_permohonan_ruang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_permohonan_ibfk_2` FOREIGN KEY (`ruang_id`) REFERENCES `ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_permohonan_ibfk_3` FOREIGN KEY (`hari_id`) REFERENCES `hari` (`id_hari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_permohonan_ibfk_4` FOREIGN KEY (`jam_id`) REFERENCES `jam` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jurnal_dosen`
--
ALTER TABLE `jurnal_dosen`
  ADD CONSTRAINT `jurnal_dosen_ibfk_1` FOREIGN KEY (`jurnal_id`) REFERENCES `jurnal` (`jurnal_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jurnal_dosen_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konferensi_dosen`
--
ALTER TABLE `konferensi_dosen`
  ADD CONSTRAINT `konferensi_dosen_ibfk_2` FOREIGN KEY (`konferensi_id`) REFERENCES `konferensi` (`konferensi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konferensi_dosen_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`skripsi_id`) REFERENCES `skripsi` (`id_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koor_mk`
--
ALTER TABLE `koor_mk`
  ADD CONSTRAINT `koor_mk_ibfk_1` FOREIGN KEY (`mk_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koor_mk_ibfk_2` FOREIGN KEY (`status_tt_id`) REFERENCES `status_team_teaching` (`id_status_tt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koor_mk_ibfk_3` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `asset` FOREIGN KEY (`asset_id`) REFERENCES `asset` (`id_asset`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`jenis_mk_id`) REFERENCES `jenis_mk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mhs_kegiatan`
--
ALTER TABLE `mhs_kegiatan`
  ADD CONSTRAINT `mhs_kegiatan_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mhs_kegiatan_ibfk_2` FOREIGN KEY (`kegiatan_id`) REFERENCES `pengajuan_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mhs_kegiatan_ibfk_3` FOREIGN KEY (`nim_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mhs_pemohon_surat`
--
ALTER TABLE `mhs_pemohon_surat`
  ADD CONSTRAINT `mhs_pemohon_surat_ibfk_1` FOREIGN KEY (`surat_keluar_id`) REFERENCES `surat_keluar_mhs` (`id_surat_keluar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mhs_pemohon_surat_ibfk_2` FOREIGN KEY (`nim_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk_diajar`
--
ALTER TABLE `mk_diajar`
  ADD CONSTRAINT `mk_diajar_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mk_ditawarkan_idfk_3` FOREIGN KEY (`mk_ditawarkan_id`) REFERENCES `mk_ditawarkan` (`id_mk_ditawarkan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk_diambil`
--
ALTER TABLE `mk_diambil`
  ADD CONSTRAINT `mk_diambil_ibfk_1` FOREIGN KEY (`mhs_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mk_ditawarkan_idfk_4` FOREIGN KEY (`mk_ditawarkan_id`) REFERENCES `mk_ditawarkan` (`id_mk_ditawarkan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk_ditawarkan`
--
ALTER TABLE `mk_ditawarkan`
  ADD CONSTRAINT `mk_ditawarkan_ibfk_1` FOREIGN KEY (`matakuliah_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thn_akademik_id` FOREIGN KEY (`thn_akademik_id`) REFERENCES `thn_akademik` (`id_thn_akademik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk_prasyarat`
--
ALTER TABLE `mk_prasyarat`
  ADD CONSTRAINT `mk_prasyarat_ibfk_1` FOREIGN KEY (`mk_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mk_prasyarat_ibfk_2` FOREIGN KEY (`mk_syarat_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk_prodi`
--
ALTER TABLE `mk_prodi`
  ADD CONSTRAINT `mk_prodi_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mk_prodi_ibfk_2` FOREIGN KEY (`mk_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk_softskill`
--
ALTER TABLE `mk_softskill`
  ADD CONSTRAINT `mk_softskill_ibfk_1` FOREIGN KEY (`mk_id`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mk_softskill_ibfk_2` FOREIGN KEY (`softskill_id`) REFERENCES `atribut_softskill` (`id_softskill`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notulen_rapat`
--
ALTER TABLE `notulen_rapat`
  ADD CONSTRAINT `notulen_rapat_ibfk_1` FOREIGN KEY (`permohonan_ruang_id`) REFERENCES `permohonan_ruang` (`id_permohonan_ruang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notulen_rapat_ibfk_2` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notulen_rapat_ibfk_3` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penelitian_mhs`
--
ALTER TABLE `penelitian_mhs`
  ADD CONSTRAINT `penelitian_mhs_ibfk_4` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penelitian_mhs_ibfk_5` FOREIGN KEY (`nim_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penelitian_milik_dosen`
--
ALTER TABLE `penelitian_milik_dosen`
  ADD CONSTRAINT `penelitian_milik_dosen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penelitian_milik_dosen_ibfk_2` FOREIGN KEY (`penelitian_id`) REFERENCES `penelitian_dosen` (`penelitian_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengmas_dosen`
--
ALTER TABLE `pengmas_dosen`
  ADD CONSTRAINT `pengmas_dosen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengmas_dosen_ibfk_2` FOREIGN KEY (`kegiatan_id`) REFERENCES `pengabdian_masyarakat` (`kegiatan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permohonan_ruang`
--
ALTER TABLE `permohonan_ruang`
  ADD CONSTRAINT `permohonan_ruang_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `persentase_penilaian`
--
ALTER TABLE `persentase_penilaian`
  ADD CONSTRAINT `persentase_penilaian_ibfk_1` FOREIGN KEY (`jenis_penilaian_id`) REFERENCES `jenis_penilaian` (`id_jenis_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persentase_penilaian_ibfk_2` FOREIGN KEY (`mk_ditawarkan_id`) REFERENCES `mk_ditawarkan` (`id_mk_ditawarkan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas_tu`
--
ALTER TABLE `petugas_tu`
  ADD CONSTRAINT `petugas_tu_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestasi_ibfk_2` FOREIGN KEY (`nim_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodi_ibfk_2` FOREIGN KEY (`nip_id`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rincian_dana`
--
ALTER TABLE `rincian_dana`
  ADD CONSTRAINT `rincian_dana_ibfk_1` FOREIGN KEY (`kegiatan_id`) REFERENCES `pengajuan_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rincian_rundown`
--
ALTER TABLE `rincian_rundown`
  ADD CONSTRAINT `rincian_rundown_ibfk_1` FOREIGN KEY (`kegiatan_id`) REFERENCES `pengajuan_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD CONSTRAINT `skripsi_ibfk_1` FOREIGN KEY (`statusprop_id`) REFERENCES `status_skripsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skripsi_ibfk_2` FOREIGN KEY (`statusskrip_id`) REFERENCES `status_skripsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skripsi_ibfk_5` FOREIGN KEY (`kbk_id`) REFERENCES `kbk` (`id_kbk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skripsi_ibfk_6` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skripsi_ibfk_7` FOREIGN KEY (`NIM_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_keluar_dosen`
--
ALTER TABLE `surat_keluar_dosen`
  ADD CONSTRAINT `surat_keluar_dosen_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_keluar_mhs`
--
ALTER TABLE `surat_keluar_mhs`
  ADD CONSTRAINT `surat_keluar_mhs_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_tugas_dosen`
--
ALTER TABLE `surat_tugas_dosen`
  ADD CONSTRAINT `surat_tugas_dosen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_tugas_dosen_ibfk_2` FOREIGN KEY (`surat_id`) REFERENCES `surat_tugas` (`surat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD CONSTRAINT `transaksi_peminjaman_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_peminjaman_ibfk_2` FOREIGN KEY (`asset_id`) REFERENCES `asset` (`id_asset`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
