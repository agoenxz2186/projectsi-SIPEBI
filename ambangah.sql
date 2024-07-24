-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 10:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `foto`, `id_users`, `created_at`, `updated_at`) VALUES
(6, 'Akademi Paradigta Indonesia Kubu Raya', 'Tanggal 9 Mei 2024 Akademi Paradigta Indonesia Kubu Raya kedatangan tamu dari lembaga Internasional Co Impact, sebuah organisasi yang fokus di bidang kesehatan, pendidikan, dan ekonomi untuk perempuan.', 'WhatsApp Image 2024-07-22 at 10.53.25.jpeg', 1, '2024-07-21 21:08:01', '2024-07-21 21:08:01'),
(7, 'Bazar Pakaian Siap Pakai', 'Kegiatan ini dilakukan oleh alumni Akademi Paradigta Desa Sungai Ambangah yang dilakukan di Balai Desa Sungai Ambangah 31 maret 2024. Tetapi yang mengorganisir pengumpulan pakaian dilakukan oleh alumni-alumni desa lain dan mentor-mentor dengan mengumpulkan pakaian dari dinas-dinas , guru, dan masyarakat di luar desa Sungai Ambangah.\r\nPukul 08:00 WIB ratusan warga sudah berkumpul menunggu kegiatan di buka. Kegiatan berjalan lancar di buka oleh kepala desa Sungai Ambangah.', 'WhatsApp Image 2024-07-22 at 10.54.45.jpeg', 1, '2024-07-21 21:15:57', '2024-07-21 21:15:57'),
(8, 'Kegiatan Diskusi Kampung Sosialisasi Tentang Pencegahan dan Penanggulangan Stunting', '2 hari berturut, kegiatan bersama akademia paradigta angkatan 7 menggelar kegiatan sosialisasi pencegahan dan penanggulangan stunting. Sasaran sosialisasi ini adalah ibu hamil, ibu menyusui, ibu yang memiliki balita, gadis remaja, dan juga catin. Dihari pertama kegiatan ini di hadiri oleh Bapak Sekdes Ambangah, pengurus Komite, Paradigta dan narasumber tenaga ahli gizi dari Puskesmas Sungai Durian. Di hari kedua kegiatan ini dilaksanakan di desa Permata Jaya yang di hadiri oleh Bapak Kepala Puskesmas Sungai Asam yang juga sebagai PJ Kades desa Permata Jaya, dan di hadiri juga oleh Ibu TP PKK desa Permata Jaya Ibu Kholilah Prasetyo sebagai Koordinator akademi Paradigta Kubu Raya, dengan narasumber tenaga ahli gizi dari Puskesmas Sungai Asam.', 'WhatsApp Image 2024-07-22 at 10.57.16.jpeg', 1, '2024-07-21 21:25:20', '2024-07-21 21:25:20'),
(9, 'Kegiatan Posyandu Balita dan Kelas Ibu Hamil Desa Sungai Ambangah', 'Pos Pelayanan Terpadu (Posyandu) balita dan kelas ibu hamil di Desa Sungai Ambangah mengadakan Kegiatan rutin yang dilakukan setiap satu bulan sekali ini bertujuan untuk meningkatkan kesehatan ibu dan anak di desa kami.\r\n\r\nPara ibu dengan antusias membawa anak-anak balita mereka untuk mendapatkan layanan kesehatan gratis. Layanan yang diberikan meliputi penimbangan berat badan, pengukuran tinggi badan, pemeriksaan kesehatan umum, serta pemberian vitamin dan imunisasi. \r\n\r\nSementara itu, kelas ibu hamil juga dilaksanakan di tempat yang sama. Kelas ini diikuti oleh para ibu hamil. Dalam kelas ini, mereka mendapatkan berbagai informasi penting mengenai kesehatan kehamilan, persiapan persalinan, dan perawatan bayi baru lahir. Materi yang disampaikan oleh bidan desa dan tenaga medis lainnya mencakup gizi selama kehamilan, tanda-tanda bahaya dalam kehamilan, dan teknik relaksasi untuk persalinan.\r\n\r\nKegiatan posyandu balita dan kelas ibu hamil di Desa Sungai Ambangah akan kembali dilaksanakan pada bulan depan dengan harapan semakin banyak ibu dan anak yang bisa mendapatkan manfaat dari program ini.', 'WhatsApp Image 2024-07-22 at 11.55.53.jpeg', 1, '2024-07-21 21:46:38', '2024-07-21 21:56:27'),
(10, 'Posyandu Lansia di Desa Sungai Ambangah', 'Posyandu Lansia di Desa Sungai Ambangah mengadakan kegiatan rutin bulanan yang diadakan di Balai Desa dan dihadiri oleh puluhan lansia yang antusias mengikuti rangkaian pemeriksaan kesehatan dan penyuluhan yang diberikan.\r\n\r\nPosyandu Lansia yang diadakan setiap bulan, ini bertujuan untuk meningkatkan kualitas hidup para lansia melalui pemeriksaan kesehatan rutin, pemberian vitamin, serta penyuluhan kesehatan. Pada kegiatan kali ini, tim medis dari Puskesmas melakukan pemeriksaan tekanan darah, kadar gula darah, dan memberikan konsultasi kesehatan secara gratis.', 'WhatsApp Image 2024-07-22 at 11.38.59.jpeg', 1, '2024-07-21 22:00:35', '2024-07-21 22:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
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
(13, '2024_05_25_025434_galeri_migration', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `laki_laki` bigint(20) NOT NULL,
  `perempuan` bigint(20) NOT NULL,
  `balita` bigint(20) NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` enum('Belum Menikah','Menikah','Cerai Hidup','Cerai Mati') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_kk` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` enum('Belum Menikah','Menikah','Cerai Hidup','Cerai Mati') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_usaha` enum('Perdagangan','Jasa','Kuliner','Industri Kreatif','Pertanian dan Perikanan','Manufaktur dan Produksi','Kesehatan','Transportasi dan Logistik','Teknologi Informasi','Pendidikan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_usaha` date NOT NULL,
  `status_usaha` enum('Milik Sendiri','Sewa','Kontrak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` double(8,2) NOT NULL,
  `alamat_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','warga') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'warga',
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', NULL, '$2y$12$aFlQNUpp3J2So/3GOl3R/ehDRhDN9IFGprRESERIoYQrcj6CT0deq', 'admin', 'foto', 'jrVeCtBVU24b0wGxNIWR9g9ONeGdshSekVb1ZzgUAjieda9MI7j33gRoZnEd', '2024-06-30 22:13:22', '2024-06-30 22:13:22'),
(2, 'User Biasa', 'user@example.com', NULL, '$2y$12$PAlGw6cX7FAPw7Z8BgjShupKKpSsZa5nL6BGA3SyVK3JLVGeegRIi', 'warga', 'foto', NULL, '2024-06-30 22:13:22', '2024-06-30 22:13:22'),
(5, 'tia', 'priwidal@gmail.com', NULL, '$2y$12$2z1YK989sTe2rU8vHgGn8.MnT1aT8b7fWFGYzT4a4KP63weLKK3Ca', 'admin', 'foto/OWvUUV47BGA1mHzrJyQrEtCaKBP7U1RxAHAUEPrM.jpg', NULL, '2024-07-01 22:24:13', '2024-07-09 04:20:51'),
(6, 'salu', 'desykashalu12@gmail.com', NULL, '$2y$12$EokYj67w5VSNyQgx/eUTp.6imYIUQZSdjIKkW4GuGKcHjdOWy4i9S', 'warga', 'foto/STl9IxcLyYhx3Csxi8ZMwoo2dpxxPccBD9fXNfX5.jpg', NULL, '2024-07-16 21:55:46', '2024-07-16 21:55:46');

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
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sktm_id_users_foreign` (`id_users`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
