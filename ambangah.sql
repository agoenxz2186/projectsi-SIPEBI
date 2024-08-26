-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2024 at 05:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambangah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint UNSIGNED NOT NULL,
  `kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `kegiatan`, `keterangan`, `tanggal`, `created_at`, `updated_at`) VALUES
(4, 'Musyawarah Desa', 'Diikuti oleh pemerintah desa dan unsur-unsur masyarakat yang diselenggarakan oleh BPD', '2024-07-04', '2024-07-21 19:33:45', '2024-07-21 19:33:45'),
(5, 'Studi Pembelajaran Desa Wisata', 'Upaya memberikan manfaat ekonomi sosial dan lingkungan masyarakat', '2024-07-18', '2024-07-21 19:35:22', '2024-07-21 19:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `foto`, `created_at`, `updated_at`) VALUES
(10, 'Sungai Ambangah', 'WhatsApp Image 2024-05-16 at 13.45.01.jpeg', '2024-07-21 19:01:28', '2024-07-21 19:01:28'),
(11, 'Gerbang Tri Dharmacou Kumpai Besar', 'WhatsApp Image 2024-05-16 at 14.47.05.jpeg', '2024-07-21 19:02:08', '2024-07-21 19:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `geografis`
--

CREATE TABLE `geografis` (
  `id` bigint UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geografis`
--

INSERT INTO `geografis` (`id`, `keterangan`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Desa Sungai Ambangah merupakan Desa yang berada di wilayah Kecamatan Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat. Desa ini terdiri dari 5 (lima) Dusun, yaitu:', NULL, NULL, NULL, '2024-08-25 14:39:00'),
(2, NULL, 'dusun mekar purnomo', '3 rt dan 5 rw', '2024-08-25 14:25:51', '2024-08-25 14:34:38'),
(3, NULL, 'Dusun Kampung Baru', '1 RW dan 5 RT', '2024-08-26 08:43:18', '2024-08-26 08:43:18'),
(4, NULL, 'Dusun Karya Sari', '2 RW dan 9 RT', '2024-08-26 08:43:32', '2024-08-26 08:43:32'),
(5, NULL, 'Dusun Karya Desa', '2 RW dan 8 RT', '2024-08-26 08:43:46', '2024-08-26 08:43:46'),
(6, NULL, 'Dusun Kumpai', '1 RW dan 5 RT', '2024-08-26 08:44:00', '2024-08-26 08:44:00'),
(7, NULL, 'Jumlah Aparatur Desa', '11 orang', '2024-08-26 08:44:20', '2024-08-26 08:44:20'),
(8, NULL, 'Perangkat Desa', '5 orang', '2024-08-26 08:44:39', '2024-08-26 08:44:39'),
(9, NULL, 'Kepala Dusun', '5 orang', '2024-08-26 08:44:55', '2024-08-26 08:44:55'),
(10, NULL, 'RW', '8 orang', '2024-08-26 08:45:11', '2024-08-26 08:45:11'),
(11, NULL, 'RT', '34 orang', '2024-08-26 08:45:22', '2024-08-26 08:45:22'),
(12, NULL, 'BPD', '11 orang', '2024-08-26 08:45:33', '2024-08-26 08:45:33'),
(13, NULL, 'LPMD', '5 orang', '2024-08-26 08:45:45', '2024-08-26 08:45:45'),
(14, NULL, 'Luas Wilayah', '16.560 Ha', '2024-08-26 08:46:01', '2024-08-26 08:46:01'),
(15, NULL, 'Jumlah Gedung Sekolah', '12 buah', '2024-08-26 08:46:22', '2024-08-26 08:46:22'),
(16, NULL, 'PAUD', '3 buah', '2024-08-26 08:46:34', '2024-08-26 08:46:34'),
(17, NULL, 'SD', '5 buah', '2024-08-26 08:46:48', '2024-08-26 08:46:48'),
(18, NULL, 'SMP', '2 buah', '2024-08-26 08:47:00', '2024-08-26 08:47:00'),
(19, NULL, 'SMA', '2 buah', '2024-08-26 08:47:10', '2024-08-26 08:47:10'),
(20, NULL, 'PUSTU', '1 buah', '2024-08-26 08:47:29', '2024-08-26 08:47:29'),
(21, NULL, 'POSKESDES', '1 buah', '2024-08-26 08:47:41', '2024-08-26 08:47:41'),
(22, NULL, 'MASJID', '11 buah', '2024-08-26 08:47:52', '2024-08-26 08:47:52'),
(23, NULL, 'SURAU', '5 buah', '2024-08-26 08:48:03', '2024-08-26 08:48:03'),
(24, NULL, 'GEREJA', '1 buah', '2024-08-26 08:48:14', '2024-08-26 08:48:14'),
(25, NULL, 'KLENTENG/VIHARA', '1 buah', '2024-08-26 08:48:27', '2024-08-26 08:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id`, `nama`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(5, 'Paradigta', 'Organisasi Keperempuanan', 'WhatsApp Image 2024-07-22 at 10.53.25.jpeg', '2024-07-21 19:21:44', '2024-07-21 22:15:14'),
(7, 'PKK', 'Pemberdayaan dan Kesejahteraan Keluarga', 'WhatsApp Image 2024-07-23 at 14.56.18.jpeg', '2024-07-21 19:23:57', '2024-07-24 01:03:09'),
(9, 'Posyandu', 'Pos Pelayanan Terpadu', 'WhatsApp Image 2024-07-22 at 11.27.17.jpeg', '2024-07-21 19:25:29', '2024-07-21 22:16:11'),
(10, 'BUMDES', 'Badan Usaha Milik Desa', 'WhatsApp Image 2024-07-24 at 15.00.58.jpeg', '2024-07-21 19:26:24', '2024-07-24 01:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_10_170511_berita', 1),
(7, '2024_05_10_172834_penduduk', 1),
(8, '2024_05_13_064155_lembaga_migration', 1),
(9, '2024_05_13_220605_sktm', 1),
(10, '2024_05_13_220616_surat_usaha', 1),
(11, '2024_05_22_144350_struktur_organisasi_migration', 1),
(12, '2024_05_23_070243_agenda_migration', 1),
(13, '2024_05_25_025434_galeri_migration', 1),
(14, '2024_08_25_175959_tentang_kami', 2),
(15, '2024_08_25_180141_visi_misi', 2),
(16, '2024_08_25_180640_sejarah', 2),
(17, '2024_08_25_181827_geografis', 2),
(18, '2024_08_25_183455_add_foto_to_sejarah_table', 3),
(19, '2024_08_25_183606_add_foto_to_tentang_table', 4),
(20, '2024_08_25_203821_modify_visi_misi_columns_to_nullable_in_visi_misi_table', 5),
(21, '2024_08_25_210605_modify_sejarah_columns_to_text_in_sejarah_table', 6),
(22, '2024_08_25_211433_modify_geografis_columns_to_nullable_in_geografis_table', 7),
(23, '2024_08_26_160600_strukturfoto', 8),
(24, '2024_08_26_170904_add_status_to_users_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('desykashalu12@gmail.com', '$2y$12$5b4pADXlYKxDj3d16mgw/ew2jICyR8n4kQPUTJ0qAcrdCFGGKJQGu', '2024-07-16 21:56:10'),
('priwidal@gmail.com', '$2y$12$DbwbtckG/sTgM2.5nuChJus3oCzRioVotD1R1DrNaf4ODyhB5/.km', '2024-07-21 02:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` bigint UNSIGNED NOT NULL,
  `laki_laki` bigint NOT NULL,
  `perempuan` bigint NOT NULL,
  `balita` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `laki_laki`, `perempuan`, `balita`, `created_at`, `updated_at`) VALUES
(1, 3234, 3313, 573, '2024-06-30 22:13:22', '2024-07-21 19:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` bigint UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `deskripsi`, `created_at`, `updated_at`, `foto`) VALUES
(2, 'Desa Sungai Ambangah adalah salah satu desa yang terletak di Kecamatan Sungai Raya Kabupaten Kubu Raya, pada tahun 1950 dengan luas wilayah 15.650 Ha. Kepala Desa Sungai Ambangah yang pertama adalah bapak Abu Bakar. Dilanjut oleh Yusuf Abu Bakar pada tahun 1978. Kemudian pada tahun 2000 an dilanjut oleh Ahmadi Yusuf Abu Bakar. Pada tahun 2003 terjadi PJ yang di jabati oleh Sopian Hanipan hingga tahun 2017. Pada Tahun 2018 hingga sekarang kepala desa di lanjuti oleh bapak Samsuri.\r\nDesa yang awal mulanya hanya di tempati oleh beberapa saudara dan berkembang menjadi pesat oleh perantau yang berdatangan untuk berkebun dan menetap di desa ini hingga menjadi suatu desa yang memiliki penduduk yang terbilang padat.\r\nDesa yang dikenal dengan sebutan Kumpai Besar ini memiliki warga yang multikultural dalam artian beragam penganut agama yang berbeda. Hidup berdampingan menerapkan pola hidup yang harmonis serta bertoleransi santu sama lain menjadikan kelurahan Desa Sungai Ambangah semakin maju dan saat ini menjadi desa Mandiri.', '2024-08-25 13:56:05', '2024-08-25 14:08:31', 'sejarah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` enum('Belum Menikah','Menikah','Cerai Hidup','Cerai Mati') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_kk` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strukturfoto`
--

CREATE TABLE `strukturfoto` (
  `id` bigint UNSIGNED NOT NULL,
  `struktur_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strukturfoto`
--

INSERT INTO `strukturfoto` (`id`, `struktur_foto`, `created_at`, `updated_at`) VALUES
(1, 'struktur.png', NULL, '2024-08-26 10:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(5, 'Samsuri', 'Kepala Desa', '1721783896_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 20:37:56', '2024-07-23 18:18:17'),
(6, 'Rahmadani A.Md', 'Sekretaris', '1721783188_DANI.jpg', '2024-07-21 22:28:16', '2024-07-23 18:06:28'),
(7, 'Jamaludin', 'Kepala Urusan Umum', '1721808316_WhatsApp Image 2024-07-24 at 14.49.04.jpeg', '2024-07-21 22:34:48', '2024-07-24 01:05:16'),
(8, 'Komariah', 'Kepala Urusan Perencanaan', '1721783823_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 22:37:32', '2024-07-23 18:17:04'),
(9, 'Thohir, SE', 'Kepala Urusan Keuangan', '1721783838_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 22:40:09', '2024-07-23 18:17:19'),
(10, 'Heny Fitriani', 'Staf Kaur Keuangan', '1721783450_KAK HENI.jpg', '2024-07-21 22:41:52', '2024-07-23 18:10:51'),
(11, 'Windi Kristian', 'Kepala Seksi Pemerintahan', '1721783598_WINDI.jpg', '2024-07-21 22:44:53', '2024-07-23 18:13:19'),
(12, 'M. Arif AR', 'Kepala Seksi Kesejahteraan dan Pelayanan', '1721783554_ARIF.jpg', '2024-07-21 22:47:46', '2024-07-23 18:12:35'),
(13, 'Dwi Susanti', 'Kepala Dusun Kumpai', '1721783806_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 22:55:02', '2024-07-23 18:16:47'),
(14, 'Suharsono', 'Kepala Dusun Karya Sari', '1721806959_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 22:56:47', '2024-07-24 00:42:39'),
(15, 'Dedi Kusnadi', 'Kepala Dusun Mekar Sari', '1721806979_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 22:57:43', '2024-07-24 00:42:59'),
(16, 'M Adil Musa', 'Kepala Dusun Kampung Baru', '1721807001_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 22:58:43', '2024-07-24 00:43:21'),
(17, 'Basuni Busrah', 'Kepala Dusun Karya Desa', '1721807019_WhatsApp Image 2024-07-24 at 08.14.55.jpeg', '2024-07-21 22:59:27', '2024-07-24 00:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` enum('Belum Menikah','Menikah','Cerai Hidup','Cerai Mati') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_usaha` enum('Perdagangan','Jasa','Kuliner','Industri Kreatif','Pertanian dan Perikanan','Manufaktur dan Produksi','Kesehatan','Transportasi dan Logistik','Teknologi Informasi','Pendidikan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_usaha` date NOT NULL,
  `status_usaha` enum('Milik Sendiri','Sewa','Kontrak') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` double(8,2) NOT NULL,
  `alamat_usaha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` bigint UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `deskripsi`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'Website desa merupakan serana digital dimana masyarakat bisa melihat kegiatan yang dilakukan oleh desa sebagai wujud transparansi.', NULL, '2024-08-25 12:19:35', 'tentang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','warga') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'warga',
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(2, 'User Biasa', 'user@example.com', NULL, '$2y$12$PAlGw6cX7FAPw7Z8BgjShupKKpSsZa5nL6BGA3SyVK3JLVGeegRIi', 'warga', 'foto', NULL, '2024-06-30 22:13:22', '2024-08-26 10:28:32', 'approved'),
(5, 'tia', 'priwidal@gmail.com', NULL, '$2y$12$2z1YK989sTe2rU8vHgGn8.MnT1aT8b7fWFGYzT4a4KP63weLKK3Ca', 'admin', 'foto/OWvUUV47BGA1mHzrJyQrEtCaKBP7U1RxAHAUEPrM.jpg', NULL, '2024-07-01 22:24:13', '2024-07-09 04:20:51', 'pending'),
(6, 'salu', 'desykashalu12@gmail.com', NULL, '$2y$12$EokYj67w5VSNyQgx/eUTp.6imYIUQZSdjIKkW4GuGKcHjdOWy4i9S', 'warga', 'foto/STl9IxcLyYhx3Csxi8ZMwoo2dpxxPccBD9fXNfX5.jpg', NULL, '2024-07-16 21:55:46', '2024-07-16 21:55:46', 'pending'),
(7, 'Admin', 'admin@example.com', NULL, '$2y$12$YuQB6LBG3qUPc.y.bvnX3ekHlv0SKoWZMbm88U38qvLldDMwPShWm', 'admin', 'foto', NULL, '2024-08-26 10:11:23', '2024-08-26 10:11:23', 'approve'),
(8, 'adit', 'adit@gmail.com', NULL, '$2y$12$XGaolDCGGmYGn3YZY2WFZu6u.kNpNdco/FtBtmiFgtxqy0jn/J146', 'warga', 'foto/UZDeVPOu55QuLJSktZNO3XbSpGEGKhERTazSQsR6.png', NULL, '2024-08-26 10:29:21', '2024-08-26 10:46:14', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` bigint UNSIGNED NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, '\"Terwujudnya Desa Sungai Ambangah sebagai Desa yang mandiri, Berkepribadian, berbudaya, sehat, cerdas, sejahtera, dan toleran.\"', NULL, NULL, '2024-08-25 13:39:08'),
(3, 'Desa yang mandiri: mewujudkan kehidupan sejajar dengan masyarakat desa lain dengan keunggulan lokal.', 'Meningkatkan tata kelola pemerintahan yang baik berdasarkan demokratisasi, transparansi, dan kesetaraan gender.', '2024-08-25 12:44:38', '2024-08-25 12:44:38'),
(4, 'Berkepribadian: orientasi pada proses pembangunan kehidupan bermasyarakat.', 'Meningkatkan pembangunan dan pemeliharaan sarana prasarana desa berbasis kemampuan lokal.', '2024-08-25 12:45:00', '2024-08-25 12:45:00'),
(5, 'Berbudaya: menjunjung norma dan adat istiadat.', 'Meningkatkan kualitas dan akses pelayanan sosial dasar.', '2024-08-25 13:40:22', '2024-08-25 13:40:22'),
(6, 'Masyarakat sehat: jiwa dan raga yang kuat.', 'Meningkatkan pembangunan sarana prasarana usaha ekonomi desa.', '2024-08-25 13:40:49', '2024-08-25 13:40:49'),
(7, 'Masyarakat cerdas: menguasai IPTEK dan memanfaatkannya secara tepat.', 'Meningkatkan pembangunan sarana prasarana lingkungan hidup desa menuju masyarakat yang tanggap bencana.', '2024-08-25 13:41:22', '2024-08-25 13:41:22'),
(8, 'Masyarakat sejahtera: ketercukupan kebutuhan lahir dan batin.', 'Meningkatkan kualitas dan peran kelembagaan desa berbasis partisipasi masyarakat.', '2024-08-25 13:41:46', '2024-08-25 13:41:46'),
(9, 'Toleran: menghindari diskriminasi dan perselisihan yang merugikan.', NULL, '2024-08-25 13:41:56', '2024-08-25 13:41:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_id_users_foreign` (`id_users`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geografis`
--
ALTER TABLE `geografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sktm_id_users_foreign` (`id_users`);

--
-- Indexes for table `strukturfoto`
--
ALTER TABLE `strukturfoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_usaha_id_users_foreign` (`id_users`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `geografis`
--
ALTER TABLE `geografis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `strukturfoto`
--
ALTER TABLE `strukturfoto`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sktm`
--
ALTER TABLE `sktm`
  ADD CONSTRAINT `sktm_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD CONSTRAINT `surat_usaha_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
