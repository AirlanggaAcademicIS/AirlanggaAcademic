-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 12:30 PM
-- Server version: 10.1.21-MariaDB
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
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id_asset` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL,
  `serial_barcode` text NOT NULL,
  `nama_asset` text NOT NULL,
  `lokasi` text NOT NULL,
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

INSERT INTO `asset` (`id_asset`, `kategori_id`, `nip_petugas_id`, `status_id`, `serial_barcode`, `nama_asset`, `lokasi`, `expired_date`, `nama_supplier`, `harga_satuan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3457, 1, '12345', 1, 'serial barcode', 'nama aset', 'lokasi', '2017-05-07 10:40:33', 'nama suplier', 30000, '2017-05-07 10:40:33', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `atribut_softskill`
--

CREATE TABLE `atribut_softskill` (
  `id_softskill` int(11) NOT NULL,
  `softskill` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atribut_softskill`
--

INSERT INTO `atribut_softskill` (`id_softskill`, `softskill`) VALUES
(1, 'dummy_softskill');

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
(1, '12345678910', 'nama dosen', 'alamat dosen', 'status dosen', '2017-05-07', '2017-05-07 09:01:01', NULL, NULL);

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
  `ttl` varchar(30) DEFAULT NULL,
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

INSERT INTO `biodata_mhs` (`id_bio`, `nim_id`, `nama_mhs`, `email_mhs`, `foto_mhs`, `jenis_kelamin`, `negara_asal`, `provinsi_asal`, `kota_asal`, `kota_tinggal`, `alamat_tinggal`, `ttl`, `angkatan`, `agama`, `kebangsaan`, `sma_asal`, `nama_ayah`, `nama_ibu`, `deskripsi_diri`, `motto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081411631070', 'nama mhs', 'email@mhs.com', '', 'jenis kelamin', 'negara asal', 'provinsi asal', 'kota asal', 'kota tinggal ', 'alamat tinggal', 'surabaya, 7 juni 2015', '2014', 'agama', 'kebangsaan', 'sma asal', 'nama ayah', 'nama ibu', 'deskripsi diri', 'motto', '2017-05-07 09:22:12', NULL, NULL);

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
(1, 2, 1, 'KK9', 'deskripsi kk9', '2017-05-07 11:14:42', NULL, NULL),
(2, 2, 1, 'KK9', 'deskripsi kk9', '2017-05-07 11:15:02', NULL, NULL);

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
(1, 1, 'kode1', 'deskripsi kode1', '2017-05-07 11:23:49', NULL, NULL);

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
(2, 1, '2017-05-07 11:15:50', NULL, NULL);

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
  `kode_penelitian_id` int(15) NOT NULL,
  `anggota` varchar(70) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_anggota`
--

INSERT INTO `detail_anggota` (`id_anggota`, `kode_penelitian_id`, `anggota`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1000, 'Bejo', 0, '2017-05-11 08:00:12', NULL, NULL);

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
(1, 1, '2017-05-07 11:24:47', NULL, NULL);

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
(1, 1, '2017-05-07 11:24:17', NULL, NULL);

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
(1, '081411631070', 2, 89, '2017-05-21 14:14:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penelitian`
--

CREATE TABLE `detail_penelitian` (
  `id_penelitian` int(15) NOT NULL,
  `kode_penelitian_id` int(15) NOT NULL,
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
(2, 1000, 'abstrak', 'background', 'objective', 'methods', 'results', '2017-05-11 07:58:58', NULL, NULL);

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
(1, '12345', 'nama dokumen', '2017-05-07 10:27:02', 'url dokumen', '2017-05-07 10:27:02', NULL, NULL);

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
('12345678910', '2017-05-07 08:58:51', NULL, NULL);

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
(1, '12345678910', 1, '2017-05-07 09:40:37', NULL, NULL);

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
(1, '12345678910', 1, '2017-05-07 09:41:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_rapat`
--

CREATE TABLE `dosen_rapat` (
  `nip` varchar(20) NOT NULL,
  `notulen_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Senin');

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
(1, 1, 1, 2, '2017-05-25 09:03:49', NULL, NULL),
(1, 2, 1, 2, '2017-05-21 13:06:26', NULL, NULL),
(1, 3, 1, 2, '2017-05-25 08:30:21', NULL, NULL);

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
(1, 1, 1, 1, '2017-05-07 10:31:32', NULL, NULL);

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
(3, '08:40:00');

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
(2, 'UAS', '2017-05-21 13:51:12', NULL, NULL);

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
(123455677, 'Decision Support System to Majoring High School Student', '314-322', 'Information System', '2017-04-04', NULL, '3', '4', '2017-04-09 11:44:09', '', '2017-04-09 05:51:52', NULL),
(123455679, 'The Decision Support System For Predicting Color Change', '122-145', 'Information System', '2017-03-08', NULL, '4', '4', '2017-04-09 05:44:16', '', '2017-04-09 05:58:45', NULL);

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
(123455677, '12345678910', '2017-05-07 09:12:07', NULL, NULL);

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
(1, 'dokumen', '2017-05-27 07:33:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_capaian_pembelajaran`
--

CREATE TABLE `kategori_capaian_pembelajaran` (
  `id_kategori_cpem` int(11) NOT NULL,
  `nama_cpem` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_capaian_pembelajaran`
--

INSERT INTO `kategori_capaian_pembelajaran` (`id_kategori_cpem`, `nama_cpem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kategori cpem', '2017-05-07 11:13:30', NULL, NULL);

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
  `media_pembelajaran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori_media_pembelajaran`
--

INSERT INTO `kategori_media_pembelajaran` (`id`, `kategori_media_pembelajaran`, `media_pembelajaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kategori media', 'media', '2017-05-07 11:22:59', NULL, NULL);

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
(3, 'Information System Engineering', '2017-04-09 02:26:15', '2017-04-09 02:26:15', NULL);

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
(1, 1, '2017-05-02', 'catatan konsultasi', '2017-05-07 09:39:54', NULL, NULL);

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

--
-- Dumping data for table `koor_mk`
--

INSERT INTO `koor_mk` (`id_koor_mk`, `nip_id`, `mk_id`, `status_tt_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, '12345678910', 1, 1, '2017-05-07 11:18:31', NULL, NULL),
(1, '12345678910', 1, 1, '2017-05-07 11:18:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nip_id` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nip_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('081411631070', '12345678910', '2017-05-07 09:16:12', NULL, NULL);

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
(4, '12345', 3457, 'asset yang dimaintanance', 'nama pemeintanace', 'masalah', 'solusi', '2017-05-09 23:00:00', '2017-05-07 10:41:48', NULL, NULL);

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
  `deskripsi_matkul` text NOT NULL,
  `capaian_matkul` text NOT NULL,
  `penilaian_matkul` varchar(200) NOT NULL,
  `pokok_pembahasan` text NOT NULL,
  `pustaka_utama` text NOT NULL,
  `pustaka_pendukung` text NOT NULL,
  `syarat_sks` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `jenis_mk_id`, `kode_matkul`, `nama_matkul`, `sks`, `deskripsi_matkul`, `capaian_matkul`, `penilaian_matkul`, `pokok_pembahasan`, `pustaka_utama`, `pustaka_pendukung`, `syarat_sks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'kode1', 'nama mk', 3, 'deskripsi mk', 'capaian mk', 'penilaian mk', 'pokok pembahasan mk', 'pustaka utama mk', 'pustaka pendukung mk', '123', '2017-05-07 10:15:38', NULL, NULL);

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
('081411631070', 1, '2017-05-07 10:32:48', NULL, NULL);

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
('12345678910', 1, 0, '2017-05-07 10:22:55', NULL, NULL);

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
(1, '081411631070', 'AB', 0, '2017-05-07 10:22:03', NULL, NULL);

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
(1, 1, 1, '2017-05-07 10:18:03', NULL, NULL);

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
(1, 1, 1, '2017-05-07 11:20:48', NULL, NULL);

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
(2, 1, '2017-05-07 11:16:28', NULL, NULL);

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
(1, 1, '2017-05-07 11:25:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notulen_rapat`
--

CREATE TABLE `notulen_rapat` (
  `id_notulen` int(11) NOT NULL,
  `permohonan_ruang_id` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `nip_id` varchar(20) NOT NULL,
  `nama_rapat` varchar(100) NOT NULL,
  `agenda_rapat` longtext NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `hasil_pembahasan` longtext NOT NULL,
  `id_verifikasi` varchar(2) NOT NULL,
  `deskripsi_rapat` varchar(100) NOT NULL,
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
(1, 'judul penelitian dosen', 'nama ketua', 'bidang penelitian', 'url file', '2017-05-02', 1, '2017-05-07 09:05:11', NULL, NULL);

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
  `alasan_verified` text NOT NULL,
  `file_pen` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penelitian_mhs`
--

INSERT INTO `penelitian_mhs` (`kode_penelitian`, `nim_id`, `nip_petugas_id`, `judul`, `peneliti`, `fakultas`, `tahun`, `halaman_naskah`, `sumber_dana`, `besar_dana`, `sk`, `publikasi`, `kategori_penelitian`, `is_verified`, `alasan_verified`, `file_pen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1000, '081411631070', '12345', 'Judul', 'Peneliti', 'Fakultas', '2017', 'halaman', 'sumber dana', 'besar', 'sk', 'publikasi', 'PKM', 0, '', NULL, '2017-05-11 07:58:06', NULL, NULL);

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
('12345678910', 1, '2017-05-07 09:10:20', NULL, NULL);

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
(1, 'nama kegiatan pengmas', 'tempat kegiatan pengmas', '2017-05-08', 'url file pengmas', 1, '2017-05-07 09:02:35', NULL, NULL);

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
(1, 1, 0, 'revisi', 'nama', 'history', 'tujuan', 'mekanisme', '2017-05-03', '2017-05-08', 'rencana pengajuan', 'rencana pelaksanaan', 'url poster', '2017-05-07 10:50:50', NULL, NULL);

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
('12345678910', 1, '2017-05-07 09:11:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_ruang`
--

CREATE TABLE `permohonan_ruang` (
  `id_permohonan_ruang` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
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
(1, '12345', 'nama pemohon', '2017-05-30', 1, '12345678910', '2017-05-07 10:26:20', NULL, NULL);

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
(1, 1, 30, '2017-05-07 10:21:21', NULL, NULL);

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
('12345', 'nama petugas', 'telp petugas', 'email@petugas.com', 2, '2017-05-07 09:19:15', NULL, NULL);

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
  `alasan_verified` text NOT NULL,
  `skor` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nip_petugas_id`, `nim_id`, `kelompok_kegiatan`, `jenis_kegiatan`, `tingkat`, `prestasi`, `tahun_kegiatan`, `penyelenggara`, `file_prestasi`, `ps_is_verified`, `alasan_verified`, `skor`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', '081411631070', 'kelompok kegiatan prestasi', 'jenis kegiatan', 'tingkat', 'prestasi', '2015', 'penyelenggara', 'url file prestasi', 0, '', NULL, '2017-05-07 09:23:54', NULL, NULL);

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
(1, 'nama ruang', 23, '2017-05-07 10:18:46', NULL, NULL),
(2, 'nama ruang 2', 34, '2017-05-21 13:03:15', NULL, NULL);

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

INSERT INTO `skripsi` (`id_skripsi`, `NIM_id`, `kbk_id`, `statusprop_id`, `statusskrip_id`, `Judul`, `upload_berkas_proposal`, `upload_berkas_skripsi`, `nip_petugas_id`, `tgl_sidangpro`, `waktu_sidangpro`, `tempat_sidangpro`, `nilai_sidangpro`, `nilai_sidangskrip`, `tgl_sidangskrip`, `waktu_sidangskrip`, `tempat_sidangskrip`, `tanggal_pengumpulan_proposal`, `tanggal_pengumpulan_skripsi`, `is_verified`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '081411631070', 2, 1, 1, 'judul skripsi', 'url berkas', '', '12345', '2017-05-01', '03:00:00', 'tempat sidang proposal', NULL, NULL, '2017-05-02', '01:00:00', 'tempat sidang skripsi', '2017-05-03', '2017-05-01', 1, '2017-05-07 09:38:38', NULL, NULL);

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
(1, 'rusak', '2017-05-27 07:36:09', NULL, NULL);

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
(1, 'disetjui', '2017-05-07 09:35:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_team_teaching`
--

CREATE TABLE `status_team_teaching` (
  `id_status_tt` int(11) NOT NULL,
  `status_tt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_team_teaching`
--

INSERT INTO `status_team_teaching` (`id_status_tt`, `status_tt`) VALUES
(1, 'PJMK1');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_dosen`
--

CREATE TABLE `surat_keluar_dosen` (
  `id_surat_keluar` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar_dosen`
--

INSERT INTO `surat_keluar_dosen` (`id_surat_keluar`, `nip_petugas_id`, `nama`, `tgl_upload`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'nama dosen', '2017-05-07 10:30:37', '2017-05-07 10:30:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_mhs`
--

CREATE TABLE `surat_keluar_mhs` (
  `id_surat_keluar` int(11) NOT NULL,
  `nip_petugas_id` varchar(50) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar_mhs`
--

INSERT INTO `surat_keluar_mhs` (`id_surat_keluar`, `nip_petugas_id`, `nama_lembaga`, `nama`, `alamat`, `tgl_upload`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'nama lembaga', 'nama mhs', 'alamat lembaga', '2017-05-07 10:29:51', '2017-05-07 10:29:51', NULL, NULL);

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
(1, '', '12345', 'nama lembaga', 'judul surat masuk', '081411631050', 0, '2017-05-07 10:28:22', NULL, NULL);

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
  `semester_periode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thn_akademik`
--

INSERT INTO `thn_akademik` (`id_thn_akademik`, `semester_periode`) VALUES
(1, '2014/2015 genap');

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
(6, '12345', 3457, '081411631070', 'asset yang dipinjam', '2017-05-17', '2017-05-01', '2017-05-02', '2017-05-07 10:45:31', '2017-05-07 10:44:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int(11) NOT NULL,
  `kode_universitas` varchar(10) NOT NULL,
  `nama_universitas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `kode_universitas`, `nama_universitas`) VALUES
(1, 'kode1', 'Unair');

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
(1, '', 'Kretawiweka', '', 'ekanuraga@gmail.com', '$2y$10$vCIEXVF7bLslTCieJl/UdOy6tmXKFCTN8YayFDshIcJ2/Ij0D3E1.', 'NGdXD1d8Zap6M1gbgutblBahGAhTA0RtuuZMwx6Om7dWPXTlO9SjZ02jN4eB', '2017-02-28 12:39:02', '2017-02-28 12:39:02'),
(2, '', 'Ramadhan Akira', '', 'akirahadian@gmail.com', '$2y$10$tAOqSqzwql2n2d3neLjCPux1XPwH7fYPDTRVhCUFDtL6DOcvtPCzy', 'zjDRh9mmCVo57Vnz0QNJ63LFtrCCh38tUwP3fEenww3HkA1q4lDsrrsnbmMK', '2017-03-05 01:23:21', '2017-03-05 01:23:21'),
(3, '', 'hilmi', '', 'hilmi@olimpiade.id', '$2y$10$k9QR9NqivqP0yoPxTUfIdOAuFuaIaeAVXU0Uf8BtWiqL9DNz50jVa', 'PJRXO2JUzYvWR2R4x5zXEKEME3lqGZhx9ydjgTCaNXRzouR7iNsqL8AqZ8ZV', '2017-03-17 19:58:55', '2017-03-17 19:58:55'),
(4, '081411631006', 'admin', 'mahasiswa', 'admin@psi.com', '$2y$10$9S83V93bZX74YV2V4tWRCOJeAaRMnTX0ys.5PZGiHjd3JEAmAuyv6', 'XK6BJcl4n38F5ZKtLYFcTY4eoPnFwWLzpIiafpPlXEsrGoVV7LKpisHDGj5Y', '2017-03-17 20:16:14', '2017-03-17 20:16:14'),
(5, '081411631070', 'Mahasiswa', 'mahasiswa', 'mahasiswa@email.com', '$2y$10$jOI14OJADWUUImOHnZztquz9BdO/2dFYiRPBhtyygc8DEmIbLNLNq', 'pVYK5fmtf7SSYLYTp2sqJTQraI7pUGBb5CniE4XSv8CSTdV7dQvlxL1KZLBI', '2017-05-10 03:40:14', '2017-05-10 03:40:14'),
(6, '12345678910', 'Dosen', 'dosen', 'dosen@email.com', '$2y$10$AeNiPmUWYXL5vCE4EaQKoeR265B7d4EzZWajzJEj610EaiW7VNuZm', 'rOem6p0uegCq6vVld8QRQPvE6GNpA3DZkB5VKPWYyKFZwVyVe9UgiRQ6QSGT', '2017-05-10 03:54:39', '2017-05-10 03:54:39'),
(7, '12345', 'Karyawan', 'karyawan', '123123@gmail.com', '$2y$10$zabtKldYAuIH/KbIbYofuON3U/jlvBXIEFY/w.ItHp0WdfvfFteda', 'COEd39ZPUoatKUMjTil5ZyVZrZxCo4TaEux62h7nD1dcWkOoedCntbo6JJUl', '2017-05-10 03:55:29', '2017-05-10 03:55:29');

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
  ADD KEY `kategori_id_2` (`kategori_id`),
  ADD KEY `nip_petugas` (`nip_petugas_id`);

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
  ADD PRIMARY KEY (`id_anggota`,`kode_penelitian_id`),
  ADD KEY `kode_penelitian` (`kode_penelitian_id`),
  ADD KEY `kode_penelitian_2` (`kode_penelitian_id`);

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
  ADD PRIMARY KEY (`id_penelitian`,`kode_penelitian_id`),
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
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3458;
--
-- AUTO_INCREMENT for table `atribut_softskill`
--
ALTER TABLE `atribut_softskill`
  MODIFY `id_softskill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  MODIFY `biodata_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `biodata_mhs`
--
ALTER TABLE `biodata_mhs`
  MODIFY `id_bio` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  MODIFY `id_cpem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cp_mata_kuliah`
--
ALTER TABLE `cp_mata_kuliah`
  MODIFY `id_cpmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cp_program`
--
ALTER TABLE `cp_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_anggota`
--
ALTER TABLE `detail_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_penelitian`
--
ALTER TABLE `detail_penelitian`
  MODIFY `id_penelitian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_mk`
--
ALTER TABLE `jenis_mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_penilaian`
--
ALTER TABLE `jenis_penilaian`
  MODIFY `id_jenis_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `jurnal_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123455680;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori_capaian_pembelajaran`
--
ALTER TABLE `kategori_capaian_pembelajaran`
  MODIFY `id_kategori_cpem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori_dana`
--
ALTER TABLE `kategori_dana`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori_media_pembelajaran`
--
ALTER TABLE `kategori_media_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `konferensi`
--
ALTER TABLE `konferensi`
  MODIFY `konferensi_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mk_ditawarkan`
--
ALTER TABLE `mk_ditawarkan`
  MODIFY `id_mk_ditawarkan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notulen_rapat`
--
ALTER TABLE `notulen_rapat`
  MODIFY `id_notulen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penelitian_dosen`
--
ALTER TABLE `penelitian_dosen`
  MODIFY `penelitian_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penelitian_mhs`
--
ALTER TABLE `penelitian_mhs`
  MODIFY `kode_penelitian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  MODIFY `kegiatan_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengajuan_kegiatan`
--
ALTER TABLE `pengajuan_kegiatan`
  MODIFY `id_kegiatan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permohonan_ruang`
--
ALTER TABLE `permohonan_ruang`
  MODIFY `id_permohonan_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status_skripsi`
--
ALTER TABLE `status_skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status_team_teaching`
--
ALTER TABLE `status_team_teaching`
  MODIFY `id_status_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_keluar_dosen`
--
ALTER TABLE `surat_keluar_dosen`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_keluar_mhs`
--
ALTER TABLE `surat_keluar_mhs`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `surat_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thn_akademik`
--
ALTER TABLE `thn_akademik`
  MODIFY `id_thn_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_universitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `asset_ibfk_1` FOREIGN KEY (`nip_petugas_id`) REFERENCES `petugas_tu` (`nip_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `capaian_pembelajaran_ibfk_2` FOREIGN KEY (`kategori_cpem_id`) REFERENCES `kategori_capaian_pembelajaran` (`id_kategori_cpem`) ON DELETE CASCADE ON UPDATE CASCADE;

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
