-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2025 pada 08.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumbangan_komite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `wali_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `wali_kelas`, `created_at`, `updated_at`) VALUES
(4, 'X AKT 1', 'FATIMAH HIDAYAT, S.Pd', '2025-08-02 04:22:22', '2025-08-02 04:22:22'),
(5, 'X AKT 2', 'HAYATUL AZMA, M.Pd', '2025-08-02 04:23:37', '2025-08-02 04:23:37'),
(6, 'X MP 1', 'ULFA ARMA  YENNI, S.Pd', '2025-08-02 04:24:45', '2025-08-02 04:24:45'),
(7, 'X MP 2', 'FIRA MARTA FAUZIANA, S.Pd', '2025-08-02 04:48:05', '2025-08-02 04:48:05'),
(8, 'X BRT 1', 'LISMASIDA, S.Pd', '2025-08-02 04:48:36', '2025-08-02 04:48:36'),
(9, 'X BRT 2', 'SYAFRIZAL, S.Pd', '2025-08-02 04:49:01', '2025-08-02 04:49:01'),
(10, 'X TKJ', 'MODRIAN DE MALGUSTA , S.Sn', '2025-08-02 04:49:41', '2025-08-02 04:49:41'),
(11, 'X DKV', 'NELLI GUSTI, S.Pd', '2025-08-02 04:50:11', '2025-08-02 04:50:11'),
(12, 'X KL 1', 'RIKA ASTUTI, S.Pd', '2025-08-02 04:50:47', '2025-08-02 04:50:47'),
(13, 'X KL 2', 'Drs. SYAHIRUL ALIM', '2025-08-02 04:51:16', '2025-08-02 04:51:16'),
(14, 'XI AKT 1', 'HANIF AIDAR, SE', '2025-08-02 04:51:40', '2025-08-02 04:51:40'),
(15, 'XI AK 2', 'SRIYANI PUTRI, S.Si', '2025-08-02 04:52:15', '2025-08-02 04:52:15'),
(16, 'XI OTKP 1', 'GUSNAINI, S.Pd', '2025-08-02 04:52:52', '2025-08-02 04:52:52'),
(17, 'XI OTKP2.23', 'ARNELIS, S.Pd', '2025-08-02 04:53:23', '2025-08-02 04:53:23'),
(18, 'XI BDP 1.23', 'EMBUN SURYANI, M.Pd', '2025-08-02 04:53:53', '2025-08-02 04:53:53'),
(19, 'XI BDP 2.23', 'Dra.ERMY SOEWITA', '2025-08-02 04:55:26', '2025-08-02 04:55:26'),
(20, 'XI TKJ.23', 'AHMAD DIAN, SH', '2025-08-02 04:56:04', '2025-08-02 04:56:04'),
(21, 'XI DKV.', 'RINA MILIA NOFA, S.Pd', '2025-08-02 04:56:59', '2025-08-02 04:56:59'),
(22, 'XI TB.23', 'HAINIS JULITA, S.Pd', '2025-08-02 04:57:55', '2025-08-02 04:57:55'),
(23, 'XII AKL 1', 'Dra.ASRIYANTI', '2025-08-02 04:58:25', '2025-08-02 04:58:25'),
(24, 'XII AKL 2', 'NOVIANTI,M.Pde', '2025-08-02 04:59:06', '2025-08-02 04:59:06'),
(25, 'XII BRT 1', 'YELLI SUMARTI, S.Pd', '2025-08-02 04:59:43', '2025-08-02 04:59:43'),
(26, 'XII BRT 2', 'YURDANELA, S.Pd', '2025-08-02 05:08:37', '2025-08-02 05:08:37'),
(27, 'XII DKV', 'TEGAR PRAKARSA, S.Ds', '2025-08-02 05:09:31', '2025-08-02 05:09:31'),
(28, 'XII MP 1', 'ISNAWATI, S.Pd', '2025-08-02 05:09:53', '2025-08-02 05:09:53'),
(29, 'XII MP 2', 'YULFA ENDRI, S.Pd', '2025-08-02 05:10:28', '2025-08-02 05:10:28'),
(30, 'XII KL', 'ANTONI ARIES, M.Pd', '2025-08-02 05:10:55', '2025-08-02 05:10:55'),
(31, 'XII TKJ', 'ASNAWENI, S.Pd', '2025-08-02 05:11:21', '2025-08-02 05:11:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '0001_01_01_000000_create_users_table', 1),
(13, '0001_01_01_000001_create_cache_table', 1),
(14, '0001_01_01_000002_create_jobs_table', 1),
(15, '2025_07_10_000000_create_kelas_table', 1),
(16, '2025_07_11_072009_create_pengawas_table', 1),
(17, '2025_07_11_074549_create_pembayaran_table', 1),
(18, '2025_07_11_081112_create_laporans_table', 1),
(19, '2025_07_14_133000_create_spp_table', 1),
(20, '2025_07_14_133050_create_siswa_table', 1),
(21, '2025_07_21_105139_add_siswa_id_to_pembayaran_table', 1),
(22, '2025_07_21_105824_remove_nama_siswa_from_pembayaran_table', 1),
(23, '2025_08_01_150935_add_kelas_id_to_spp_table', 1),
(24, '2025_08_02_040122_remove_kelas_id_from_spp_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `siswa_id`, `jumlah`, `tanggal_bayar`, `created_at`, `updated_at`) VALUES
(5, 617, 175000, '2025-08-03', '2025-08-03 08:53:41', '2025-08-03 08:53:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengawas`
--

CREATE TABLE `pengawas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DAbiOte93l8j5ak3mGZ2JaihptCiL245VaWrh1E9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUVE1eHoyZUZsZUh4aE9kNkRZblVDM01NQ2N0a0U5OTE4QTIyTENhUCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xhcG9yYW4iO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xhcG9yYW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754287728),
('qWg9KgZi9o8vfFkZo9dOYnVBORDy3r4oVlRjiZ0z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTVGaTZ5VGtmaFJhUExPUVpTNG4yd1RnNURibW14ZENiMnpzY0lDUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1754290502);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nis` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nik` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `spp_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `email`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nik`, `agama`, `alamat`, `kelas_id`, `spp_id`, `created_at`, `updated_at`) VALUES
(617, 'Melati Kurniawan', NULL, '231001', 'Perempuan', 'Pariaman', '2006-02-07', '13220702060008', 'Islam', 'Batusangkar, Sumatra Barat', 21, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(618, 'Reza Wahyuni', NULL, '231002', 'Laki-laki', 'Dharmasraya', '2006-01-21', '13582101060002', 'Islam', 'Batusangkar, Sumatra Barat', 20, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(619, 'Melati Pratama', NULL, '231003', 'Perempuan', 'Payakumbuh', '2006-11-04', '13100411060004', 'Islam', 'Batusangkar, Sumatra Barat', 4, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(620, 'Rudi Yuliana', NULL, '231004', 'Perempuan', 'Padang Panjang', '2007-12-29', '13242912070001', 'Islam', 'Batusangkar, Sumatra Barat', 13, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(621, 'Siti Aminah', NULL, '231005', 'Laki-laki', 'Pariaman', '2006-12-31', '13593112060002', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(622, 'Ayu Wahyuni', NULL, '231006', 'Laki-laki', 'Padang', '2007-11-20', '13882011070004', 'Islam', 'Batusangkar, Sumatra Barat', 8, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(623, 'Putri Putra', NULL, '231007', 'Laki-laki', 'Pariaman', '2006-11-06', '13380611060009', 'Islam', 'Batusangkar, Sumatra Barat', 19, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(624, 'Melati Aminah', NULL, '231008', 'Perempuan', 'Dharmasraya', '2007-09-04', '13950409070005', 'Islam', 'Batusangkar, Sumatra Barat', 15, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(625, 'Nadia Saputra', NULL, '231009', 'Laki-laki', 'Padang Panjang', '2007-09-03', '13690309070008', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(626, 'Siti Permata', NULL, '231010', 'Laki-laki', 'Dharmasraya', '2006-06-19', '13921906060003', 'Islam', 'Batusangkar, Sumatra Barat', 8, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(627, 'Andi Aminah', NULL, '231011', 'Perempuan', 'Dharmasraya', '2006-07-21', '13832107060006', 'Islam', 'Batusangkar, Sumatra Barat', 13, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(628, 'Indah Kurniawan', NULL, '231012', 'Laki-laki', 'Payakumbuh', '2007-11-24', '13452411070003', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(629, 'Andi Aminah', NULL, '231013', 'Perempuan', 'Payakumbuh', '2007-03-31', '13973103070008', 'Islam', 'Batusangkar, Sumatra Barat', 23, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(630, 'Putri Saputra', NULL, '231014', 'Laki-laki', 'Bukittinggi', '2006-03-09', '13910903060007', 'Islam', 'Batusangkar, Sumatra Barat', 30, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(631, 'Nadia Wahyuni', NULL, '231015', 'Perempuan', 'Payakumbuh', '2007-05-02', '13650205070004', 'Islam', 'Batusangkar, Sumatra Barat', 6, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(632, 'Ayu Aminah', NULL, '231016', 'Laki-laki', 'Payakumbuh', '2007-05-02', '13510205070007', 'Islam', 'Batusangkar, Sumatra Barat', 14, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(633, 'Ayu Wahyuni', NULL, '231017', 'Perempuan', 'Payakumbuh', '2006-12-01', '13120112060006', 'Islam', 'Batusangkar, Sumatra Barat', 22, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(634, 'Melati Yuliana', NULL, '231018', 'Perempuan', 'Dharmasraya', '2007-09-13', '13311309070003', 'Islam', 'Batusangkar, Sumatra Barat', 8, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(635, 'Siti Putra', NULL, '231019', 'Perempuan', 'Padang', '2006-02-05', '13100502060002', 'Islam', 'Batusangkar, Sumatra Barat', 28, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(636, 'Andi Permata', NULL, '231020', 'Laki-laki', 'Padang Panjang', '2006-09-03', '13380309060004', 'Islam', 'Batusangkar, Sumatra Barat', 20, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(637, 'Budi Wahyuni', NULL, '231021', 'Perempuan', 'Padang Panjang', '2007-12-14', '13761412070009', 'Islam', 'Batusangkar, Sumatra Barat', 11, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(638, 'Ayu Permata', NULL, '231022', 'Perempuan', 'Dharmasraya', '2007-05-05', '13900505070009', 'Islam', 'Batusangkar, Sumatra Barat', 15, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(639, 'Rudi Pratama', NULL, '231023', 'Perempuan', 'Padang Panjang', '2007-11-22', '13262211070003', 'Islam', 'Batusangkar, Sumatra Barat', 7, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(640, 'Ayu Kurniawan', NULL, '231024', 'Laki-laki', 'Dharmasraya', '2006-07-19', '13091907060002', 'Islam', 'Batusangkar, Sumatra Barat', 12, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(641, 'Siti Putra', NULL, '231025', 'Laki-laki', 'Dharmasraya', '2006-07-23', '13902307060008', 'Islam', 'Batusangkar, Sumatra Barat', 15, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(642, 'Putri Wahyuni', NULL, '231026', 'Laki-laki', 'Payakumbuh', '2006-12-04', '13170412060005', 'Islam', 'Batusangkar, Sumatra Barat', 29, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(643, 'Joko Yuliana', NULL, '231027', 'Perempuan', 'Padang', '2007-01-24', '13512401070007', 'Islam', 'Batusangkar, Sumatra Barat', 9, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(644, 'Reza Saputra', NULL, '231028', 'Perempuan', 'Pariaman', '2007-03-27', '13682703070003', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(645, 'Rudi Pratama', NULL, '231029', 'Perempuan', 'Padang', '2006-06-06', '13450606060009', 'Islam', 'Batusangkar, Sumatra Barat', 18, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(646, 'Rudi Hartono', NULL, '231030', 'Laki-laki', 'Dharmasraya', '2007-11-22', '13362211070009', 'Islam', 'Batusangkar, Sumatra Barat', 24, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(647, 'Joko Anggraini', NULL, '231031', 'Laki-laki', 'Padang', '2006-04-21', '13212104060007', 'Islam', 'Batusangkar, Sumatra Barat', 11, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(648, 'Budi Permata', NULL, '231032', 'Laki-laki', 'Solok', '2007-06-10', '13291006070001', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(649, 'Indah Wahyuni', NULL, '231033', 'Perempuan', 'Solok', '2007-11-24', '13412411070001', 'Islam', 'Batusangkar, Sumatra Barat', 18, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(650, 'Melati Wahyuni', NULL, '231034', 'Perempuan', 'Pariaman', '2007-08-28', '13552808070008', 'Islam', 'Batusangkar, Sumatra Barat', 22, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(651, 'Rudi Aminah', NULL, '231035', 'Laki-laki', 'Bukittinggi', '2006-05-17', '13781705060001', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(652, 'Indah Yuliana', NULL, '231036', 'Laki-laki', 'Bukittinggi', '2006-04-29', '13852904060003', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(653, 'Andi Saputra', NULL, '231037', 'Laki-laki', 'Bukittinggi', '2006-10-22', '13152210060007', 'Islam', 'Batusangkar, Sumatra Barat', 24, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(654, 'Ayu Pratama', NULL, '231038', 'Perempuan', 'Pariaman', '2007-08-13', '13041308070007', 'Islam', 'Batusangkar, Sumatra Barat', 30, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(655, 'Joko Saputra', NULL, '231039', 'Perempuan', 'Padang', '2006-01-08', '13760801060007', 'Islam', 'Batusangkar, Sumatra Barat', 27, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(656, 'Putri Hartono', NULL, '231040', 'Laki-laki', 'Bukittinggi', '2007-06-13', '13491306070006', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(657, 'Ayu Saputra', NULL, '231041', 'Perempuan', 'Padang', '2006-12-14', '13201412060001', 'Islam', 'Batusangkar, Sumatra Barat', 18, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(658, 'Reza Pratama', NULL, '231042', 'Perempuan', 'Padang', '2007-07-21', '13752107070003', 'Islam', 'Batusangkar, Sumatra Barat', 11, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(659, 'Andi Yuliana', NULL, '231043', 'Perempuan', 'Dharmasraya', '2007-02-14', '13071402070001', 'Islam', 'Batusangkar, Sumatra Barat', 7, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(660, 'Dedi Saputra', NULL, '231044', 'Perempuan', 'Padang', '2007-11-21', '13122111070003', 'Islam', 'Batusangkar, Sumatra Barat', 13, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(661, 'Siti Anggraini', NULL, '231045', 'Perempuan', 'Padang', '2006-10-31', '13683110060003', 'Islam', 'Batusangkar, Sumatra Barat', 14, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(662, 'Putri Anggraini', NULL, '231046', 'Laki-laki', 'Dharmasraya', '2007-05-12', '13581205070006', 'Islam', 'Batusangkar, Sumatra Barat', 28, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(663, 'Nadia Hartono', NULL, '231047', 'Perempuan', 'Dharmasraya', '2006-04-09', '13980904060006', 'Islam', 'Batusangkar, Sumatra Barat', 22, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(664, 'Reza Hartono', NULL, '231048', 'Laki-laki', 'Padang Panjang', '2007-08-25', '13072508070002', 'Islam', 'Batusangkar, Sumatra Barat', 13, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(665, 'Reza Wahyuni', NULL, '231049', 'Perempuan', 'Pariaman', '2006-08-02', '13850208060005', 'Islam', 'Batusangkar, Sumatra Barat', 28, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(666, 'Indah Yuliana', NULL, '231050', 'Perempuan', 'Dharmasraya', '2006-01-26', '13092601060004', 'Islam', 'Batusangkar, Sumatra Barat', 12, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(667, 'Reza Permata', NULL, '231051', 'Perempuan', 'Padang Panjang', '2006-02-26', '13052602060009', 'Islam', 'Batusangkar, Sumatra Barat', 15, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(668, 'Siti Pratama', NULL, '231052', 'Perempuan', 'Padang Panjang', '2007-08-02', '13530208070005', 'Islam', 'Batusangkar, Sumatra Barat', 19, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(669, 'Dedi Hartono', NULL, '231053', 'Perempuan', 'Padang Panjang', '2006-10-02', '13500210060004', 'Islam', 'Batusangkar, Sumatra Barat', 9, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(670, 'Ayu Yuliana', NULL, '231054', 'Laki-laki', 'Solok', '2007-03-05', '13740503070006', 'Islam', 'Batusangkar, Sumatra Barat', 15, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(671, 'Rudi Putra', NULL, '231055', 'Laki-laki', 'Payakumbuh', '2006-01-09', '13280901060006', 'Islam', 'Batusangkar, Sumatra Barat', 14, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(672, 'Nadia Hartono', NULL, '231056', 'Perempuan', 'Solok', '2006-10-16', '13971610060007', 'Islam', 'Batusangkar, Sumatra Barat', 8, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(673, 'Putri Aminah', NULL, '231057', 'Perempuan', 'Dharmasraya', '2007-08-06', '13850608070001', 'Islam', 'Batusangkar, Sumatra Barat', 7, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(674, 'Rudi Permata', NULL, '231058', 'Perempuan', 'Pariaman', '2007-11-06', '13170611070001', 'Islam', 'Batusangkar, Sumatra Barat', 20, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(675, 'Putri Wahyuni', NULL, '231059', 'Perempuan', 'Bukittinggi', '2006-07-03', '13020307060003', 'Islam', 'Batusangkar, Sumatra Barat', 6, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(676, 'Siti Putra', NULL, '231060', 'Laki-laki', 'Dharmasraya', '2006-07-19', '13831907060002', 'Islam', 'Batusangkar, Sumatra Barat', 28, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(677, 'Andi Saputra', NULL, '231061', 'Perempuan', 'Dharmasraya', '2006-11-29', '13382911060005', 'Islam', 'Batusangkar, Sumatra Barat', 12, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(678, 'Siti Yuliana', NULL, '231062', 'Laki-laki', 'Padang Panjang', '2007-03-16', '13081603070004', 'Islam', 'Batusangkar, Sumatra Barat', 15, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(679, 'Indah Wahyuni', NULL, '231063', 'Laki-laki', 'Padang Panjang', '2007-11-11', '13831111070001', 'Islam', 'Batusangkar, Sumatra Barat', 4, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(680, 'Andi Saputra', NULL, '231064', 'Perempuan', 'Bukittinggi', '2007-12-19', '13011912070005', 'Islam', 'Batusangkar, Sumatra Barat', 30, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(681, 'Budi Hartonos', NULL, '231065', 'Laki-laki', 'Padang Panjang', '2006-02-02', '13700202060005', 'Islam', 'Batusangkar, Sumatra Barat', 4, 7, '2025-08-03 08:34:50', '2025-08-03 20:26:31'),
(682, 'Indah Hartono', NULL, '231066', 'Perempuan', 'Bukittinggi', '2007-05-04', '13330405070009', 'Islam', 'Batusangkar, Sumatra Barat', 11, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(683, 'Joko Aminah', NULL, '231067', 'Perempuan', 'Padang', '2006-05-17', '13081705060009', 'Islam', 'Batusangkar, Sumatra Barat', 11, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(684, 'Ayu Wahyuni', NULL, '231068', 'Laki-laki', 'Padang Panjang', '2007-09-03', '13180309070008', 'Islam', 'Batusangkar, Sumatra Barat', 10, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(685, 'Indah Anggraini', NULL, '231069', 'Perempuan', 'Bukittinggi', '2007-05-30', '13133005070002', 'Islam', 'Batusangkar, Sumatra Barat', 13, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(686, 'Joko Kurniawan', NULL, '231070', 'Laki-laki', 'Pariaman', '2006-08-27', '13222708060008', 'Islam', 'Batusangkar, Sumatra Barat', 8, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(687, 'Ayu Permata', NULL, '231071', 'Laki-laki', 'Padang', '2006-05-18', '13431805060003', 'Islam', 'Batusangkar, Sumatra Barat', 9, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(688, 'Budi Yuliana', NULL, '231072', 'Perempuan', 'Solok', '2006-08-07', '13410708060006', 'Islam', 'Batusangkar, Sumatra Barat', 12, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(689, 'Rudi Saputra', NULL, '231073', 'Perempuan', 'Dharmasraya', '2006-08-27', '13712708060001', 'Islam', 'Batusangkar, Sumatra Barat', 8, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(690, 'Melati Kurniawan', NULL, '231074', 'Perempuan', 'Padang', '2007-05-27', '13672705070004', 'Islam', 'Batusangkar, Sumatra Barat', 9, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(691, 'Putri Pratama', NULL, '231075', 'Laki-laki', 'Pariaman', '2006-11-26', '13952611060001', 'Islam', 'Batusangkar, Sumatra Barat', 6, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(692, 'Andi Kurniawan', NULL, '231076', 'Perempuan', 'Dharmasraya', '2007-10-13', '13671310070001', 'Islam', 'Batusangkar, Sumatra Barat', 5, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(693, 'Ayu Permata', NULL, '231077', 'Perempuan', 'Dharmasraya', '2006-03-03', '13010303060008', 'Islam', 'Batusangkar, Sumatra Barat', 22, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(694, 'Dedi Wahyuni', NULL, '231078', 'Perempuan', 'Padang', '2006-05-03', '13430305060008', 'Islam', 'Batusangkar, Sumatra Barat', 30, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(695, 'Indah Aminah', NULL, '231079', 'Laki-laki', 'Dharmasraya', '2006-09-08', '13040809060003', 'Islam', 'Batusangkar, Sumatra Barat', 30, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(696, 'Andi Pratama', NULL, '231080', 'Laki-laki', 'Bukittinggi', '2006-07-15', '13551507060004', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(697, 'Putri Pratama', NULL, '231081', 'Laki-laki', 'Dharmasraya', '2007-05-18', '13651805070004', 'Islam', 'Batusangkar, Sumatra Barat', 21, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(698, 'Melati Saputra', NULL, '231082', 'Perempuan', 'Dharmasraya', '2007-07-15', '13981507070009', 'Islam', 'Batusangkar, Sumatra Barat', 19, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(699, 'Putri Permata', NULL, '231083', 'Laki-laki', 'Solok', '2006-12-26', '13412612060008', 'Islam', 'Batusangkar, Sumatra Barat', 20, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(700, 'Reza Aminah', NULL, '231084', 'Laki-laki', 'Solok', '2007-10-04', '13880410070001', 'Islam', 'Batusangkar, Sumatra Barat', 29, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(701, 'Nadia Permata', NULL, '231085', 'Perempuan', 'Pariaman', '2007-09-07', '13940709070006', 'Islam', 'Batusangkar, Sumatra Barat', 25, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(702, 'Joko Anggraini', NULL, '231086', 'Laki-laki', 'Solok', '2007-11-22', '13792211070009', 'Islam', 'Batusangkar, Sumatra Barat', 10, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(703, 'Melati Saputra', NULL, '231087', 'Laki-laki', 'Padang', '2006-01-29', '13992901060006', 'Islam', 'Batusangkar, Sumatra Barat', 12, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(704, 'Putri Permata', NULL, '231088', 'Perempuan', 'Bukittinggi', '2007-01-27', '13902701070007', 'Islam', 'Batusangkar, Sumatra Barat', 4, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(705, 'Andi Putra', NULL, '231089', 'Perempuan', 'Padang', '2007-11-19', '13161911070004', 'Islam', 'Batusangkar, Sumatra Barat', 27, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(706, 'Rudi Saputra', NULL, '231090', 'Laki-laki', 'Payakumbuh', '2007-07-23', '13772307070003', 'Islam', 'Batusangkar, Sumatra Barat', 4, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(707, 'Budi Anggraini', NULL, '231091', 'Perempuan', 'Payakumbuh', '2007-04-21', '13222104070008', 'Islam', 'Batusangkar, Sumatra Barat', 19, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(708, 'Nadia Saputra', NULL, '231092', 'Laki-laki', 'Padang', '2007-06-15', '13951506070002', 'Islam', 'Batusangkar, Sumatra Barat', 5, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(709, 'Putri Aminah', NULL, '231093', 'Perempuan', 'Padang Panjang', '2006-11-22', '13912211060004', 'Islam', 'Batusangkar, Sumatra Barat', 6, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(710, 'Joko Saputra', NULL, '231094', 'Perempuan', 'Padang', '2006-05-20', '13762005060002', 'Islam', 'Batusangkar, Sumatra Barat', 8, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(711, 'Putri Aminah', NULL, '231095', 'Laki-laki', 'Payakumbuh', '2006-11-02', '13780211060003', 'Islam', 'Batusangkar, Sumatra Barat', 14, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(712, 'Siti Pratama', NULL, '231096', 'Laki-laki', 'Bukittinggi', '2007-08-01', '13670108070002', 'Islam', 'Batusangkar, Sumatra Barat', 27, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(713, 'Budi Kurniawan', NULL, '231097', 'Laki-laki', 'Bukittinggi', '2007-02-25', '13802502070006', 'Islam', 'Batusangkar, Sumatra Barat', 28, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(714, 'Joko Saputra', NULL, '231098', 'Laki-laki', 'Dharmasraya', '2006-02-05', '13180502060008', 'Islam', 'Batusangkar, Sumatra Barat', 28, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(715, 'Indah Yuliana', NULL, '231099', 'Perempuan', 'Padang Panjang', '2006-11-17', '13051711060006', 'Islam', 'Batusangkar, Sumatra Barat', 14, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(716, 'Dedi Yuliana', NULL, '231100', 'Perempuan', 'Solok', '2006-02-24', '13642402060009', 'Islam', 'Batusangkar, Sumatra Barat', 10, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(717, 'Ayu Putra', NULL, '231101', 'Laki-laki', 'Solok', '2007-01-06', '13830601070001', 'Islam', 'Batusangkar, Sumatra Barat', 30, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(718, 'Andi Kurniawan', NULL, '231102', 'Perempuan', 'Payakumbuh', '2006-03-23', '13192303060003', 'Islam', 'Batusangkar, Sumatra Barat', 24, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(719, 'Joko Anggraini', NULL, '231103', 'Perempuan', 'Dharmasraya', '2007-03-25', '13212503070006', 'Islam', 'Batusangkar, Sumatra Barat', 26, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(720, 'Ayu Hartono', NULL, '231104', 'Laki-laki', 'Padang', '2007-12-10', '13271012070008', 'Islam', 'Batusangkar, Sumatra Barat', 22, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(721, 'Indah Permata', NULL, '231105', 'Laki-laki', 'Solok', '2007-08-07', '13910708070005', 'Islam', 'Batusangkar, Sumatra Barat', 26, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(722, 'Putri Permata', NULL, '231106', 'Perempuan', 'Bukittinggi', '2007-03-06', '13080603070001', 'Islam', 'Batusangkar, Sumatra Barat', 4, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(723, 'Joko Wahyuni', NULL, '231107', 'Perempuan', 'Pariaman', '2007-02-07', '13010702070003', 'Islam', 'Batusangkar, Sumatra Barat', 31, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(724, 'Reza Hartono', NULL, '231108', 'Perempuan', 'Padang', '2006-07-11', '13511107060005', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(725, 'Joko Anggraini', NULL, '231109', 'Perempuan', 'Payakumbuh', '2006-06-19', '13321906060002', 'Islam', 'Batusangkar, Sumatra Barat', 12, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(726, 'Siti Yuliana', NULL, '231110', 'Laki-laki', 'Bukittinggi', '2007-12-01', '13590112070007', 'Islam', 'Batusangkar, Sumatra Barat', 28, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(727, 'Dedi Hartono', NULL, '231111', 'Laki-laki', 'Padang', '2006-01-09', '13770901060007', 'Islam', 'Batusangkar, Sumatra Barat', 27, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(728, 'Dedi Saputra', NULL, '231112', 'Perempuan', 'Solok', '2007-05-16', '13991605070003', 'Islam', 'Batusangkar, Sumatra Barat', 6, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(729, 'Melati Putra', NULL, '231113', 'Laki-laki', 'Padang Panjang', '2007-03-17', '13401703070001', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(730, 'Putri Hartono', NULL, '231114', 'Laki-laki', 'Solok', '2006-02-15', '13041502060001', 'Islam', 'Batusangkar, Sumatra Barat', 25, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(731, 'Putri Permata', NULL, '231115', 'Laki-laki', 'Bukittinggi', '2007-03-19', '13261903070004', 'Islam', 'Batusangkar, Sumatra Barat', 23, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(732, 'Siti Hartono', NULL, '231116', 'Perempuan', 'Pariaman', '2006-06-03', '13550306060009', 'Islam', 'Batusangkar, Sumatra Barat', 10, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(733, 'Budi Wahyuni', NULL, '231117', 'Laki-laki', 'Dharmasraya', '2006-04-13', '13291304060008', 'Islam', 'Batusangkar, Sumatra Barat', 31, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(734, 'Budi Anggraini', NULL, '231118', 'Laki-laki', 'Solok', '2006-05-24', '13772405060004', 'Islam', 'Batusangkar, Sumatra Barat', 27, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(735, 'Ayu Pratama', NULL, '231119', 'Perempuan', 'Payakumbuh', '2006-03-18', '13241803060002', 'Islam', 'Batusangkar, Sumatra Barat', 30, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(736, 'Putri Saputra', NULL, '231120', 'Laki-laki', 'Dharmasraya', '2007-02-25', '13532502070009', 'Islam', 'Batusangkar, Sumatra Barat', 22, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(737, 'Rudi Kurniawan', NULL, '231121', 'Laki-laki', 'Pariaman', '2007-07-17', '13801707070004', 'Islam', 'Batusangkar, Sumatra Barat', 6, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(738, 'Andi Saputra', NULL, '231122', 'Perempuan', 'Pariaman', '2007-03-31', '13833103070001', 'Islam', 'Batusangkar, Sumatra Barat', 29, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(739, 'Siti Aminah', NULL, '231123', 'Perempuan', 'Dharmasraya', '2006-06-12', '13831206060002', 'Islam', 'Batusangkar, Sumatra Barat', 5, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(740, 'Nadia Pratama', NULL, '231124', 'Laki-laki', 'Solok', '2007-10-01', '13290110070003', 'Islam', 'Batusangkar, Sumatra Barat', 10, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(741, 'Nadia Anggraini', NULL, '231125', 'Laki-laki', 'Bukittinggi', '2007-10-25', '13312510070004', 'Islam', 'Batusangkar, Sumatra Barat', 19, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(742, 'Reza Pratama', NULL, '231126', 'Laki-laki', 'Padang', '2007-12-14', '13821412070006', 'Islam', 'Batusangkar, Sumatra Barat', 7, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(743, 'Rudi Permata', NULL, '231127', 'Laki-laki', 'Pariaman', '2006-07-25', '13642507060005', 'Islam', 'Batusangkar, Sumatra Barat', 20, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(744, 'Putri Hartono', NULL, '231128', 'Laki-laki', 'Padang Panjang', '2006-02-04', '13170402060008', 'Islam', 'Batusangkar, Sumatra Barat', 31, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(745, 'Ayu Hartono', NULL, '231129', 'Perempuan', 'Solok', '2007-07-26', '13242607070007', 'Islam', 'Batusangkar, Sumatra Barat', 8, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(746, 'Nadia Saputra', NULL, '231130', 'Perempuan', 'Solok', '2006-06-21', '13172106060008', 'Islam', 'Batusangkar, Sumatra Barat', 4, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(747, 'Andi Wahyuni', NULL, '231131', 'Perempuan', 'Padang Panjang', '2007-10-27', '13312710070009', 'Islam', 'Batusangkar, Sumatra Barat', 9, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(748, 'Rudi Wahyuni', NULL, '231132', 'Perempuan', 'Pariaman', '2007-09-15', '13931509070001', 'Islam', 'Batusangkar, Sumatra Barat', 31, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(749, 'Budi Yuliana', NULL, '231133', 'Laki-laki', 'Dharmasraya', '2007-06-20', '13762006070004', 'Islam', 'Batusangkar, Sumatra Barat', 22, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(750, 'Siti Saputra', NULL, '231134', 'Perempuan', 'Payakumbuh', '2007-02-15', '13901502070003', 'Islam', 'Batusangkar, Sumatra Barat', 14, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(751, 'Rudi Yuliana', NULL, '231135', 'Laki-laki', 'Bukittinggi', '2007-06-20', '13872006070009', 'Islam', 'Batusangkar, Sumatra Barat', 17, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(752, 'Budi Permata', NULL, '231136', 'Perempuan', 'Dharmasraya', '2006-02-06', '13760602060008', 'Islam', 'Batusangkar, Sumatra Barat', 25, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(753, 'Indah Yuliana', NULL, '231137', 'Laki-laki', 'Bukittinggi', '2007-12-21', '13172112070008', 'Islam', 'Batusangkar, Sumatra Barat', 21, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(754, 'Indah Hartono', NULL, '231138', 'Perempuan', 'Padang', '2006-12-21', '13192112060004', 'Islam', 'Batusangkar, Sumatra Barat', 10, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(755, 'Andi Pratama', NULL, '231139', 'Perempuan', 'Bukittinggi', '2006-07-11', '13931107060005', 'Islam', 'Batusangkar, Sumatra Barat', 19, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(756, 'Reza Pratama', NULL, '231140', 'Perempuan', 'Bukittinggi', '2007-02-23', '13062302070001', 'Islam', 'Batusangkar, Sumatra Barat', 24, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(757, 'Dedi Putra', NULL, '231141', 'Perempuan', 'Solok', '2007-04-07', '13540704070004', 'Islam', 'Batusangkar, Sumatra Barat', 16, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(758, 'Ayu Wahyuni', NULL, '231142', 'Perempuan', 'Padang Panjang', '2006-07-23', '13912307060008', 'Islam', 'Batusangkar, Sumatra Barat', 10, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(759, 'Joko Pratama', NULL, '231143', 'Laki-laki', 'Payakumbuh', '2007-05-19', '13681905070008', 'Islam', 'Batusangkar, Sumatra Barat', 23, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(760, 'Melati Permata', NULL, '231144', 'Laki-laki', 'Dharmasraya', '2007-04-03', '13550304070005', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(761, 'Siti Pratama', NULL, '231145', 'Perempuan', 'Pariaman', '2007-05-21', '13212105070001', 'Islam', 'Batusangkar, Sumatra Barat', 11, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(762, 'Indah Saputra', NULL, '231146', 'Perempuan', 'Solok', '2007-08-25', '13142508070005', 'Islam', 'Batusangkar, Sumatra Barat', 6, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(763, 'Rudi Pratama', NULL, '231147', 'Perempuan', 'Payakumbuh', '2006-01-16', '13851601060003', 'Islam', 'Batusangkar, Sumatra Barat', 18, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(764, 'Putri Saputra', NULL, '231148', 'Laki-laki', 'Bukittinggi', '2007-06-20', '13032006070009', 'Islam', 'Batusangkar, Sumatra Barat', 26, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(765, 'Indah Hartono', NULL, '231149', 'Laki-laki', 'Payakumbuh', '2007-07-13', '13881307070008', 'Islam', 'Batusangkar, Sumatra Barat', 4, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(766, 'Melati Putra', NULL, '231150', 'Laki-laki', 'Padang', '2006-02-20', '13772002060005', 'Islam', 'Batusangkar, Sumatra Barat', 15, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(767, 'Melati Putra', NULL, '231151', 'Perempuan', 'Padang Panjang', '2007-12-08', '13530812070003', 'Islam', 'Batusangkar, Sumatra Barat', 25, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(768, 'Ayu Wahyuni', NULL, '231152', 'Laki-laki', 'Padang Panjang', '2006-01-03', '13320301060009', 'Islam', 'Batusangkar, Sumatra Barat', 13, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(769, 'Nadia Saputra', NULL, '231153', 'Laki-laki', 'Padang Panjang', '2006-02-17', '13641702060002', 'Islam', 'Batusangkar, Sumatra Barat', 23, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(770, 'Melati Aminah', NULL, '231154', 'Perempuan', 'Padang Panjang', '2006-07-05', '13700507060009', 'Islam', 'Batusangkar, Sumatra Barat', 28, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(771, 'Dedi Pratama', NULL, '231155', 'Laki-laki', 'Padang Panjang', '2007-03-13', '13091303070003', 'Islam', 'Batusangkar, Sumatra Barat', 7, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(772, 'Joko Kurniawan', NULL, '231156', 'Perempuan', 'Bukittinggi', '2006-07-04', '13260407060005', 'Islam', 'Batusangkar, Sumatra Barat', 28, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(773, 'Melati Wahyuni', NULL, '231157', 'Perempuan', 'Pariaman', '2007-10-27', '13392710070004', 'Islam', 'Batusangkar, Sumatra Barat', 23, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(774, 'Ayu Yuliana', NULL, '231158', 'Laki-laki', 'Pariaman', '2006-01-23', '13042301060007', 'Islam', 'Batusangkar, Sumatra Barat', 12, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(775, 'Rudi Yuliana', NULL, '231159', 'Laki-laki', 'Pariaman', '2007-09-10', '13221009070008', 'Islam', 'Batusangkar, Sumatra Barat', 24, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(776, 'Budi Wahyuni', NULL, '231160', 'Laki-laki', 'Solok', '2006-07-01', '13650107060004', 'Islam', 'Batusangkar, Sumatra Barat', 28, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(777, 'Nadia Permata', NULL, '231161', 'Perempuan', 'Padang Panjang', '2007-04-07', '13790704070004', 'Islam', 'Batusangkar, Sumatra Barat', 11, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(778, 'Siti Hartono', NULL, '231162', 'Laki-laki', 'Pariaman', '2006-07-27', '13952707060004', 'Islam', 'Batusangkar, Sumatra Barat', 30, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(779, 'Nadia Anggraini', NULL, '231163', 'Laki-laki', 'Solok', '2006-05-16', '13141605060004', 'Islam', 'Batusangkar, Sumatra Barat', 8, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(780, 'Budi Aminah', NULL, '231164', 'Perempuan', 'Dharmasraya', '2007-08-13', '13131308070001', 'Islam', 'Batusangkar, Sumatra Barat', 15, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(781, 'Reza Yuliana', NULL, '231165', 'Perempuan', 'Pariaman', '2006-03-14', '13721403060001', 'Islam', 'Batusangkar, Sumatra Barat', 26, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(782, 'Budi Kurniawan', NULL, '231166', 'Laki-laki', 'Pariaman', '2007-01-05', '13700501070009', 'Islam', 'Batusangkar, Sumatra Barat', 8, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(783, 'Reza Hartono', NULL, '231167', 'Perempuan', 'Payakumbuh', '2007-04-18', '13751804070007', 'Islam', 'Batusangkar, Sumatra Barat', 11, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(784, 'Putri Permata', NULL, '231168', 'Perempuan', 'Padang Panjang', '2007-07-11', '13431107070006', 'Islam', 'Batusangkar, Sumatra Barat', 16, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(785, 'Reza Hartono', NULL, '231169', 'Perempuan', 'Dharmasraya', '2007-08-03', '13400308070009', 'Islam', 'Batusangkar, Sumatra Barat', 29, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(786, 'Putri Anggraini', NULL, '231170', 'Perempuan', 'Pariaman', '2006-11-25', '13602511060008', 'Islam', 'Batusangkar, Sumatra Barat', 31, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(787, 'Andi Wahyuni', NULL, '231171', 'Perempuan', 'Dharmasraya', '2007-08-03', '13760308070005', 'Islam', 'Batusangkar, Sumatra Barat', 18, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(788, 'Melati Wahyuni', NULL, '231172', 'Laki-laki', 'Bukittinggi', '2007-03-02', '13010203070005', 'Islam', 'Batusangkar, Sumatra Barat', 20, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(789, 'Indah Yuliana', NULL, '231173', 'Laki-laki', 'Bukittinggi', '2006-04-18', '13291804060001', 'Islam', 'Batusangkar, Sumatra Barat', 18, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(790, 'Dedi Wahyuni', NULL, '231174', 'Perempuan', 'Bukittinggi', '2007-07-23', '13682307070003', 'Islam', 'Batusangkar, Sumatra Barat', 8, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(791, 'Dedi Saputra', NULL, '231175', 'Perempuan', 'Pariaman', '2006-10-07', '13940710060009', 'Islam', 'Batusangkar, Sumatra Barat', 4, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(792, 'Budi Kurniawan', NULL, '231176', 'Perempuan', 'Solok', '2006-12-04', '13120412060003', 'Islam', 'Batusangkar, Sumatra Barat', 11, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(793, 'Andi Saputra', NULL, '231177', 'Perempuan', 'Pariaman', '2006-10-21', '13622110060008', 'Islam', 'Batusangkar, Sumatra Barat', 15, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(794, 'Reza Yuliana', NULL, '231178', 'Perempuan', 'Solok', '2007-02-14', '13821402070008', 'Islam', 'Batusangkar, Sumatra Barat', 5, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(795, 'Putri Yuliana', NULL, '231179', 'Laki-laki', 'Payakumbuh', '2007-08-14', '13451408070008', 'Islam', 'Batusangkar, Sumatra Barat', 15, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(796, 'Nadia Anggraini', NULL, '231180', 'Perempuan', 'Payakumbuh', '2007-10-19', '13391910070008', 'Islam', 'Batusangkar, Sumatra Barat', 10, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(797, 'Putri Aminah', NULL, '231181', 'Laki-laki', 'Dharmasraya', '2006-08-22', '13082208060005', 'Islam', 'Batusangkar, Sumatra Barat', 31, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(798, 'Siti Permata', NULL, '231182', 'Perempuan', 'Dharmasraya', '2006-09-15', '13471509060007', 'Islam', 'Batusangkar, Sumatra Barat', 5, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(799, 'Joko Kurniawan', NULL, '231183', 'Perempuan', 'Dharmasraya', '2006-06-07', '13230706060009', 'Islam', 'Batusangkar, Sumatra Barat', 25, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(800, 'Siti Yuliana', NULL, '231184', 'Laki-laki', 'Bukittinggi', '2006-08-12', '13151208060009', 'Islam', 'Batusangkar, Sumatra Barat', 21, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(801, 'Melati Putra', NULL, '231185', 'Laki-laki', 'Padang Panjang', '2007-02-11', '13161102070001', 'Islam', 'Batusangkar, Sumatra Barat', 4, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(802, 'Siti Wahyuni', NULL, '231186', 'Perempuan', 'Bukittinggi', '2007-11-17', '13011711070007', 'Islam', 'Batusangkar, Sumatra Barat', 25, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(803, 'Rudi Yuliana', NULL, '231187', 'Laki-laki', 'Bukittinggi', '2007-11-13', '13321311070004', 'Islam', 'Batusangkar, Sumatra Barat', 22, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(804, 'Melati Kurniawan', NULL, '231188', 'Laki-laki', 'Dharmasraya', '2006-04-07', '13450704060006', 'Islam', 'Batusangkar, Sumatra Barat', 13, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(805, 'Budi Yuliana', NULL, '231189', 'Perempuan', 'Dharmasraya', '2007-06-05', '13760506070004', 'Islam', 'Batusangkar, Sumatra Barat', 20, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(806, 'Dedi Aminah', NULL, '231190', 'Laki-laki', 'Padang Panjang', '2007-08-16', '13801608070003', 'Islam', 'Batusangkar, Sumatra Barat', 10, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(807, 'Ayu Pratama', NULL, '231191', 'Laki-laki', 'Padang Panjang', '2006-10-23', '13722310060007', 'Islam', 'Batusangkar, Sumatra Barat', 16, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(808, 'Rudi Pratama', NULL, '231192', 'Laki-laki', 'Bukittinggi', '2006-05-26', '13502605060001', 'Islam', 'Batusangkar, Sumatra Barat', 28, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(809, 'Putri Hartono', NULL, '231193', 'Perempuan', 'Dharmasraya', '2007-11-25', '13132511070008', 'Islam', 'Batusangkar, Sumatra Barat', 13, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(810, 'Budi Aminah', NULL, '231194', 'Perempuan', 'Padang', '2006-05-03', '13940305060007', 'Islam', 'Batusangkar, Sumatra Barat', 10, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(811, 'Reza Anggraini', NULL, '231195', 'Perempuan', 'Pariaman', '2006-06-03', '13970306060005', 'Islam', 'Batusangkar, Sumatra Barat', 29, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(812, 'Nadia Yuliana', NULL, '231196', 'Laki-laki', 'Bukittinggi', '2006-03-17', '13041703060008', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(813, 'Nadia Saputra', NULL, '231197', 'Laki-laki', 'Bukittinggi', '2006-11-17', '13851711060008', 'Islam', 'Batusangkar, Sumatra Barat', 23, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(814, 'Dedi Hartono', NULL, '231198', 'Perempuan', 'Dharmasraya', '2007-10-06', '13620610070005', 'Islam', 'Batusangkar, Sumatra Barat', 15, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(815, 'Indah Yuliana', NULL, '231199', 'Laki-laki', 'Padang Panjang', '2006-12-23', '13292312060004', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(816, 'Indah Kurniawan', NULL, '231200', 'Laki-laki', 'Bukittinggi', '2006-03-18', '13911803060006', 'Islam', 'Batusangkar, Sumatra Barat', 12, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(817, 'Indah Kurniawan', NULL, '231201', 'Laki-laki', 'Solok', '2007-08-17', '13851708070008', 'Islam', 'Batusangkar, Sumatra Barat', 30, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(818, 'Andi Yuliana', NULL, '231202', 'Laki-laki', 'Dharmasraya', '2006-09-10', '13091009060009', 'Islam', 'Batusangkar, Sumatra Barat', 14, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(819, 'Ayu Putra', NULL, '231203', 'Perempuan', 'Dharmasraya', '2007-10-08', '13720810070008', 'Islam', 'Batusangkar, Sumatra Barat', 24, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(820, 'Indah Putra', NULL, '231204', 'Perempuan', 'Bukittinggi', '2006-03-11', '13751103060007', 'Islam', 'Batusangkar, Sumatra Barat', 9, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(821, 'Rudi Permata', NULL, '231205', 'Laki-laki', 'Bukittinggi', '2006-08-20', '13092008060003', 'Islam', 'Batusangkar, Sumatra Barat', 4, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(822, 'Dedi Wahyuni', NULL, '231206', 'Laki-laki', 'Solok', '2006-06-02', '13380206060008', 'Islam', 'Batusangkar, Sumatra Barat', 6, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(823, 'Rudi Kurniawan', NULL, '231207', 'Laki-laki', 'Pariaman', '2007-08-01', '13400108070005', 'Islam', 'Batusangkar, Sumatra Barat', 6, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(824, 'Joko Anggraini', NULL, '231208', 'Perempuan', 'Solok', '2007-07-03', '13110307070004', 'Islam', 'Batusangkar, Sumatra Barat', 29, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(825, 'Budi Permata', NULL, '231209', 'Laki-laki', 'Bukittinggi', '2007-09-10', '13951009070005', 'Islam', 'Batusangkar, Sumatra Barat', 30, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(826, 'Siti Kurniawan', NULL, '231210', 'Perempuan', 'Solok', '2007-03-06', '13230603070001', 'Islam', 'Batusangkar, Sumatra Barat', 24, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(827, 'Joko Permata', NULL, '231211', 'Perempuan', 'Solok', '2007-01-25', '13192501070004', 'Islam', 'Batusangkar, Sumatra Barat', 6, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(828, 'Dedi Yuliana', NULL, '231212', 'Laki-laki', 'Pariaman', '2006-04-08', '13330804060003', 'Islam', 'Batusangkar, Sumatra Barat', 11, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(829, 'Ayu Hartono', NULL, '231213', 'Laki-laki', 'Padang', '2006-03-28', '13242803060002', 'Islam', 'Batusangkar, Sumatra Barat', 16, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(830, 'Indah Wahyuni', NULL, '231214', 'Perempuan', 'Padang Panjang', '2006-11-22', '13372211060003', 'Islam', 'Batusangkar, Sumatra Barat', 7, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(831, 'Ayu Wahyuni', NULL, '231215', 'Laki-laki', 'Pariaman', '2006-05-11', '13481105060007', 'Islam', 'Batusangkar, Sumatra Barat', 15, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(832, 'Dedi Putra', NULL, '231216', 'Perempuan', 'Solok', '2006-01-08', '13840801060003', 'Islam', 'Batusangkar, Sumatra Barat', 27, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(833, 'Dedi Permata', NULL, '231217', 'Perempuan', 'Padang Panjang', '2006-04-03', '13890304060006', 'Islam', 'Batusangkar, Sumatra Barat', 6, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(834, 'Siti Aminah', NULL, '231218', 'Perempuan', 'Pariaman', '2006-10-18', '13751810060009', 'Islam', 'Batusangkar, Sumatra Barat', 8, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(835, 'Budi Saputra', NULL, '231219', 'Perempuan', 'Padang Panjang', '2006-06-27', '13332706060009', 'Islam', 'Batusangkar, Sumatra Barat', 19, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(836, 'Indah Anggraini', NULL, '231220', 'Perempuan', 'Solok', '2006-07-18', '13891807060009', 'Islam', 'Batusangkar, Sumatra Barat', 26, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(837, 'Putri Hartono', NULL, '231221', 'Perempuan', 'Pariaman', '2006-12-16', '13581612060004', 'Islam', 'Batusangkar, Sumatra Barat', 9, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(838, 'Melati Wahyuni', NULL, '231222', 'Perempuan', 'Dharmasraya', '2007-05-31', '13163105070004', 'Islam', 'Batusangkar, Sumatra Barat', 10, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(839, 'Rudi Pratama', NULL, '231223', 'Laki-laki', 'Padang Panjang', '2007-05-09', '13110905070005', 'Islam', 'Batusangkar, Sumatra Barat', 7, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(840, 'Andi Aminah', NULL, '231224', 'Laki-laki', 'Padang', '2007-08-03', '13250308070003', 'Islam', 'Batusangkar, Sumatra Barat', 18, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(841, 'Ayu Permata', NULL, '231225', 'Perempuan', 'Payakumbuh', '2006-04-23', '13832304060009', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(842, 'Andi Hartono', NULL, '231226', 'Laki-laki', 'Padang', '2007-01-31', '13593101070008', 'Islam', 'Batusangkar, Sumatra Barat', 17, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(843, 'Ayu Hartono', NULL, '231227', 'Laki-laki', 'Padang Panjang', '2007-06-03', '13760306070004', 'Islam', 'Batusangkar, Sumatra Barat', 9, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(844, 'Joko Saputra', NULL, '231228', 'Perempuan', 'Pariaman', '2007-02-04', '13230402070005', 'Islam', 'Batusangkar, Sumatra Barat', 11, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(845, 'Dedi Wahyuni', NULL, '231229', 'Laki-laki', 'Pariaman', '2006-09-25', '13212509060005', 'Islam', 'Batusangkar, Sumatra Barat', 9, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(846, 'Siti Kurniawan', NULL, '231230', 'Laki-laki', 'Payakumbuh', '2006-08-12', '13721208060002', 'Islam', 'Batusangkar, Sumatra Barat', 4, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(847, 'Nadia Permata', NULL, '231231', 'Laki-laki', 'Padang', '2006-11-25', '13352511060001', 'Islam', 'Batusangkar, Sumatra Barat', 7, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(848, 'Rudi Pratama', NULL, '231232', 'Perempuan', 'Payakumbuh', '2007-11-25', '13542511070005', 'Islam', 'Batusangkar, Sumatra Barat', 21, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(849, 'Putri Anggraini', NULL, '231233', 'Laki-laki', 'Pariaman', '2007-02-20', '13252002070003', 'Islam', 'Batusangkar, Sumatra Barat', 28, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(850, 'Reza Wahyuni', NULL, '231234', 'Perempuan', 'Bukittinggi', '2007-05-29', '13592905070006', 'Islam', 'Batusangkar, Sumatra Barat', 20, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(851, 'Reza Anggraini', NULL, '231235', 'Laki-laki', 'Padang', '2007-12-30', '13293012070005', 'Islam', 'Batusangkar, Sumatra Barat', 24, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(852, 'Ayu Permata', NULL, '231236', 'Laki-laki', 'Padang', '2006-08-10', '13561008060007', 'Islam', 'Batusangkar, Sumatra Barat', 22, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(853, 'Joko Saputra', NULL, '231237', 'Laki-laki', 'Payakumbuh', '2007-03-11', '13711103070003', 'Islam', 'Batusangkar, Sumatra Barat', 19, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(854, 'Reza Yuliana', NULL, '231238', 'Laki-laki', 'Bukittinggi', '2006-07-06', '13530607060005', 'Islam', 'Batusangkar, Sumatra Barat', 13, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(855, 'Rudi Aminah', NULL, '231239', 'Perempuan', 'Dharmasraya', '2006-07-14', '13331407060004', 'Islam', 'Batusangkar, Sumatra Barat', 21, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(856, 'Joko Hartono', NULL, '231240', 'Laki-laki', 'Pariaman', '2007-05-03', '13340305070001', 'Islam', 'Batusangkar, Sumatra Barat', 10, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(857, 'Indah Saputra', NULL, '231241', 'Laki-laki', 'Padang Panjang', '2006-08-04', '13630408060002', 'Islam', 'Batusangkar, Sumatra Barat', 23, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(858, 'Melati Kurniawan', NULL, '231242', 'Laki-laki', 'Padang Panjang', '2007-07-22', '13482207070007', 'Islam', 'Batusangkar, Sumatra Barat', 28, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(859, 'Indah Permata', NULL, '231243', 'Perempuan', 'Padang Panjang', '2006-05-18', '13661805060006', 'Islam', 'Batusangkar, Sumatra Barat', 17, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(860, 'Nadia Permata', NULL, '231244', 'Laki-laki', 'Bukittinggi', '2007-08-26', '13842608070008', 'Islam', 'Batusangkar, Sumatra Barat', 29, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(861, 'Andi Kurniawan', NULL, '231245', 'Perempuan', 'Padang Panjang', '2006-12-10', '13931012060009', 'Islam', 'Batusangkar, Sumatra Barat', 8, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(862, 'Melati Aminah', NULL, '231246', 'Perempuan', 'Solok', '2007-09-02', '13910209070007', 'Islam', 'Batusangkar, Sumatra Barat', 23, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(863, 'Putri Anggraini', NULL, '231247', 'Perempuan', 'Padang', '2006-10-02', '13230210060008', 'Islam', 'Batusangkar, Sumatra Barat', 14, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(864, 'Budi Yuliana', NULL, '231248', 'Perempuan', 'Pariaman', '2006-06-02', '13190206060008', 'Islam', 'Batusangkar, Sumatra Barat', 15, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(865, 'Reza Anggraini', NULL, '231249', 'Perempuan', 'Payakumbuh', '2007-02-17', '13521702070003', 'Islam', 'Batusangkar, Sumatra Barat', 20, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(866, 'Joko Saputra', NULL, '231250', 'Laki-laki', 'Bukittinggi', '2007-11-29', '13322911070003', 'Islam', 'Batusangkar, Sumatra Barat', 18, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(867, 'Dedi Aminah', NULL, '231251', 'Perempuan', 'Padang', '2007-11-22', '13632211070003', 'Islam', 'Batusangkar, Sumatra Barat', 19, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(868, 'Joko Pratama', NULL, '231252', 'Perempuan', 'Padang Panjang', '2007-12-03', '13230312070002', 'Islam', 'Batusangkar, Sumatra Barat', 25, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(869, 'Ayu Permata', NULL, '231253', 'Laki-laki', 'Padang', '2006-09-02', '13910209060007', 'Islam', 'Batusangkar, Sumatra Barat', 24, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(870, 'Nadia Hartono', NULL, '231254', 'Perempuan', 'Padang', '2007-08-01', '13190108070001', 'Islam', 'Batusangkar, Sumatra Barat', 15, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(871, 'Indah Saputra', NULL, '231255', 'Laki-laki', 'Payakumbuh', '2006-11-29', '13542911060004', 'Islam', 'Batusangkar, Sumatra Barat', 7, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(872, 'Budi Kurniawan', NULL, '231256', 'Perempuan', 'Bukittinggi', '2007-04-07', '13220704070001', 'Islam', 'Batusangkar, Sumatra Barat', 6, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(873, 'Nadia Kurniawan', NULL, '231257', 'Laki-laki', 'Padang', '2006-02-22', '13132202060004', 'Islam', 'Batusangkar, Sumatra Barat', 23, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(874, 'Joko Hartono', NULL, '231258', 'Laki-laki', 'Payakumbuh', '2007-11-01', '13670111070009', 'Islam', 'Batusangkar, Sumatra Barat', 7, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(875, 'Budi Putra', NULL, '231259', 'Perempuan', 'Dharmasraya', '2007-09-08', '13130809070005', 'Islam', 'Batusangkar, Sumatra Barat', 5, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(876, 'Andi Kurniawan', NULL, '231260', 'Perempuan', 'Dharmasraya', '2007-01-04', '13480401070008', 'Islam', 'Batusangkar, Sumatra Barat', 6, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(877, 'Budi Pratama', NULL, '231261', 'Perempuan', 'Padang Panjang', '2007-09-26', '13822609070009', 'Islam', 'Batusangkar, Sumatra Barat', 4, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(878, 'Nadia Putra', NULL, '231262', 'Laki-laki', 'Padang Panjang', '2006-04-25', '13032504060007', 'Islam', 'Batusangkar, Sumatra Barat', 18, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(879, 'Reza Putra', NULL, '231263', 'Laki-laki', 'Payakumbuh', '2007-05-25', '13442505070003', 'Islam', 'Batusangkar, Sumatra Barat', 15, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(880, 'Melati Saputra', NULL, '231264', 'Perempuan', 'Dharmasraya', '2007-07-10', '13911007070007', 'Islam', 'Batusangkar, Sumatra Barat', 14, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(881, 'Melati Aminah', NULL, '231265', 'Perempuan', 'Padang Panjang', '2007-02-24', '13312402070004', 'Islam', 'Batusangkar, Sumatra Barat', 16, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50');
INSERT INTO `siswa` (`id`, `nama`, `email`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nik`, `agama`, `alamat`, `kelas_id`, `spp_id`, `created_at`, `updated_at`) VALUES
(882, 'Joko Permata', NULL, '231266', 'Laki-laki', 'Payakumbuh', '2006-06-13', '13321306060008', 'Islam', 'Batusangkar, Sumatra Barat', 4, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(883, 'Rudi Wahyuni', NULL, '231267', 'Perempuan', 'Padang Panjang', '2006-02-15', '13411502060003', 'Islam', 'Batusangkar, Sumatra Barat', 28, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(884, 'Andi Wahyuni', NULL, '231268', 'Laki-laki', 'Payakumbuh', '2007-03-06', '13680603070001', 'Islam', 'Batusangkar, Sumatra Barat', 19, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(885, 'Andi Saputra', NULL, '231269', 'Perempuan', 'Padang Panjang', '2006-03-02', '13190203060007', 'Islam', 'Batusangkar, Sumatra Barat', 13, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(886, 'Dedi Putra', NULL, '231270', 'Laki-laki', 'Payakumbuh', '2007-04-27', '13962704070006', 'Islam', 'Batusangkar, Sumatra Barat', 12, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(887, 'Dedi Aminah', NULL, '231271', 'Laki-laki', 'Bukittinggi', '2007-06-01', '13240106070006', 'Islam', 'Batusangkar, Sumatra Barat', 6, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(888, 'Nadia Permata', NULL, '231272', 'Perempuan', 'Payakumbuh', '2006-07-08', '13140807060008', 'Islam', 'Batusangkar, Sumatra Barat', 16, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(889, 'Andi Yuliana', NULL, '231273', 'Laki-laki', 'Bukittinggi', '2006-06-25', '13232506060007', 'Islam', 'Batusangkar, Sumatra Barat', 22, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(890, 'Dedi Hartono', NULL, '231274', 'Perempuan', 'Bukittinggi', '2007-11-19', '13501911070006', 'Islam', 'Batusangkar, Sumatra Barat', 5, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(891, 'Budi Aminah', NULL, '231275', 'Perempuan', 'Bukittinggi', '2006-10-31', '13053110060008', 'Islam', 'Batusangkar, Sumatra Barat', 20, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(892, 'Melati Yuliana', NULL, '231276', 'Perempuan', 'Bukittinggi', '2006-01-07', '13250701060006', 'Islam', 'Batusangkar, Sumatra Barat', 11, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(893, 'Rudi Pratama', NULL, '231277', 'Laki-laki', 'Dharmasraya', '2006-02-23', '13452302060001', 'Islam', 'Batusangkar, Sumatra Barat', 29, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(894, 'Budi Anggraini', NULL, '231278', 'Laki-laki', 'Padang', '2006-05-30', '13233005060001', 'Islam', 'Batusangkar, Sumatra Barat', 30, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(895, 'Joko Kurniawan', NULL, '231279', 'Laki-laki', 'Solok', '2006-06-04', '13120406060006', 'Islam', 'Batusangkar, Sumatra Barat', 13, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(896, 'Indah Putra', NULL, '231280', 'Laki-laki', 'Solok', '2006-05-08', '13140805060005', 'Islam', 'Batusangkar, Sumatra Barat', 19, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(897, 'Putri Hartono', NULL, '231281', 'Perempuan', 'Padang', '2007-07-02', '13640207070003', 'Islam', 'Batusangkar, Sumatra Barat', 10, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(898, 'Putri Wahyuni', NULL, '231282', 'Perempuan', 'Padang', '2007-12-01', '13530112070001', 'Islam', 'Batusangkar, Sumatra Barat', 21, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(899, 'Siti Pratama', NULL, '231283', 'Laki-laki', 'Payakumbuh', '2007-09-23', '13412309070009', 'Islam', 'Batusangkar, Sumatra Barat', 23, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(900, 'Nadia Saputra', NULL, '231284', 'Perempuan', 'Padang', '2006-05-06', '13220605060007', 'Islam', 'Batusangkar, Sumatra Barat', 16, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(901, 'Nadia Permata', NULL, '231285', 'Laki-laki', 'Padang', '2007-06-14', '13871406070002', 'Islam', 'Batusangkar, Sumatra Barat', 5, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(902, 'Budi Wahyuni', NULL, '231286', 'Laki-laki', 'Pariaman', '2006-06-13', '13871306060006', 'Islam', 'Batusangkar, Sumatra Barat', 28, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(903, 'Melati Anggraini', NULL, '231287', 'Laki-laki', 'Dharmasraya', '2007-06-11', '13591106070004', 'Islam', 'Batusangkar, Sumatra Barat', 11, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(904, 'Indah Permata', NULL, '231288', 'Perempuan', 'Bukittinggi', '2007-05-29', '13172905070006', 'Islam', 'Batusangkar, Sumatra Barat', 18, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(905, 'Andi Permata', NULL, '231289', 'Laki-laki', 'Pariaman', '2006-09-25', '13472509060008', 'Islam', 'Batusangkar, Sumatra Barat', 15, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(906, 'Ayu Pratama', NULL, '231290', 'Perempuan', 'Dharmasraya', '2007-06-08', '13860806070007', 'Islam', 'Batusangkar, Sumatra Barat', 13, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(907, 'Ayu Aminah', NULL, '231291', 'Laki-laki', 'Pariaman', '2007-10-22', '13712210070004', 'Islam', 'Batusangkar, Sumatra Barat', 17, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(908, 'Budi Saputra', NULL, '231292', 'Laki-laki', 'Solok', '2006-02-10', '13461002060006', 'Islam', 'Batusangkar, Sumatra Barat', 5, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(909, 'Joko Aminah', NULL, '231293', 'Laki-laki', 'Padang Panjang', '2006-12-26', '13092612060003', 'Islam', 'Batusangkar, Sumatra Barat', 18, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(910, 'Budi Putra', NULL, '231294', 'Perempuan', 'Payakumbuh', '2006-11-16', '13651611060008', 'Islam', 'Batusangkar, Sumatra Barat', 10, 7, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(911, 'Indah Hartono', NULL, '231295', 'Perempuan', 'Dharmasraya', '2006-04-03', '13760304060008', 'Islam', 'Batusangkar, Sumatra Barat', 22, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(912, 'Putri Anggraini', NULL, '231296', 'Perempuan', 'Solok', '2007-04-23', '13222304070002', 'Islam', 'Batusangkar, Sumatra Barat', 9, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(913, 'Melati Yuliana', NULL, '231297', 'Perempuan', 'Pariaman', '2007-12-03', '13060312070001', 'Islam', 'Batusangkar, Sumatra Barat', 5, 5, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(914, 'Budi Permata', NULL, '231298', 'Laki-laki', 'Solok', '2006-10-02', '13710210060005', 'Islam', 'Batusangkar, Sumatra Barat', 7, 4, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(915, 'Indah Saputra', NULL, '231299', 'Laki-laki', 'Padang Panjang', '2007-03-02', '13120203070006', 'Islam', 'Batusangkar, Sumatra Barat', 9, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50'),
(916, 'Melati Wahyuni', NULL, '231300', 'Perempuan', 'Padang', '2006-10-12', '13161210060009', 'Islam', 'Batusangkar, Sumatra Barat', 11, 6, '2025-08-03 08:34:50', '2025-08-03 08:34:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` year(4) NOT NULL,
  `nominal` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id`, `tahun`, `nominal`, `created_at`, `updated_at`) VALUES
(4, '2022', 150000.00, '2025-08-02 12:15:28', '2025-08-02 12:15:28'),
(5, '2023', 160000.00, '2025-08-02 12:15:28', '2025-08-02 12:15:28'),
(6, '2024', 175000.00, '2025-08-02 12:15:28', '2025-08-02 12:15:28'),
(7, '2025', 180000.00, '2025-08-02 12:15:28', '2025-08-02 12:15:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','pengawas','siswa') NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin2@example.com', NULL, '$2y$12$dsfy25wCJ8WY87dFsh0dJO8hOaZ5/NF2XmjR8wB3I748QjxgGMeXq', 'admin', NULL, '2025-08-01 20:48:23', '2025-08-01 20:48:23'),
(2, 'Pengawas Utama', 'pengawas@example.com', NULL, '$2y$12$AOyoMdEOOTKi/H81r6AM5uzTMlliCLF5uCjnjIGHKdeRsJ3InJmcS', 'pengawas', NULL, '2025-08-01 20:48:24', '2025-08-01 20:48:24'),
(3, 'Siswa Satu', 'siswa1@example.com', NULL, '$2y$12$Hyy.DGfI.sCtdilfEW2gp.cKSuPCKQwFSTkviViu8MHKv6grnX89.', 'siswa', NULL, '2025-08-01 20:48:24', '2025-08-01 20:48:24'),
(4, 'Siswa Dua', 'siswa2@example.com', NULL, '$2y$12$dE1hi6DNyHYOzFoUss8GdOLWaVnCwMaHckJFyz1LtXxUyRctCZM1.', 'siswa', NULL, '2025-08-01 20:48:25', '2025-08-01 20:48:25'),
(7, 'dina', 'dina@example.com', NULL, '$2y$12$bbjFsD1FEs0cdoFyqXdNaO9KZwLKIWgduCtdX36xIHahGUBo.ITTu', 'siswa', NULL, '2025-08-03 23:36:52', '2025-08-03 23:36:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_siswa_id_foreign` (`siswa_id`);

--
-- Indeks untuk tabel `pengawas`
--
ALTER TABLE `pengawas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengawas_email_unique` (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nis_unique` (`nis`),
  ADD KEY `siswa_kelas_id_foreign` (`kelas_id`),
  ADD KEY `siswa_spp_id_foreign` (`spp_id`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengawas`
--
ALTER TABLE `pengawas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=918;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_spp_id_foreign` FOREIGN KEY (`spp_id`) REFERENCES `spp` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
