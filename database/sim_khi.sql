-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 09:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_khi`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_activity`
--

CREATE TABLE `daily_activity` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `wfo_wfh` varchar(10) NOT NULL,
  `fungsional` varchar(50) DEFAULT NULL,
  `butir_kegiatan` varchar(50) DEFAULT NULL,
  `kegiatan` text NOT NULL,
  `berkas` varchar(100) DEFAULT NULL,
  `satuan` varchar(100) NOT NULL,
  `kuantitas` int(3) NOT NULL,
  `is_internet` varchar(1) NOT NULL,
  `is_done` int(1) NOT NULL DEFAULT 2,
  `tgl` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_activity`
--

INSERT INTO `daily_activity` (`id`, `nip`, `wfo_wfh`, `fungsional`, `butir_kegiatan`, `kegiatan`, `berkas`, `satuan`, `kuantitas`, `is_internet`, `is_done`, `tgl`, `created_at`, `updated_at`, `created_by`) VALUES
(4, '199602182019011002', 'WFO', NULL, NULL, 'Membuat aplikasi KHI - Part 1 : Rancangan DB', NULL, 'Modul Program', 1, '1', 1, '2021-07-30', '2021-08-09 06:10:20', '2021-08-08 23:10:20', '199602182019011002'),
(6, '199602182019011002', 'WFO', NULL, NULL, 'Mengikuti Apel Pagi  (Host, Menyiapkan Lagu2, Pembacaan UUD)', NULL, 'Kegiatan', 1, '1', 1, '2021-08-02', '2021-08-01 22:43:31', '2021-08-01 22:43:31', '199602182019011002'),
(7, '199602182019011002', 'WFO', NULL, NULL, 'Instalasi VIMK Tahunan 2021 di Laptop Kak Chesil', NULL, 'Kegiatan', 1, '1', 1, '2021-08-02', '2021-08-01 22:44:16', '2021-08-01 22:44:16', '199602182019011002'),
(8, '199602182019011002', 'WFO', NULL, NULL, 'Menyiapkan Kelas Elearning SAKERNAS Petugas Kota Padang Panjang', NULL, 'Kegiatan', 1, '1', 1, '2021-08-02', '2021-08-01 22:45:09', '2021-08-01 22:45:09', '199602182019011002'),
(9, '199602182019011002', 'WFO', NULL, NULL, 'Memeriksa Dokumen SPTK 2021', NULL, 'Dokumen', 4, '1', 1, '2021-08-02', '2021-08-02 07:56:34', '2021-08-02 00:56:34', '199602182019011002'),
(10, '199602182019011002', 'WFO', NULL, NULL, 'Menyiapkan Apel Pagi - Zoom + Operator + Petugas Pembaca UUD 1945', NULL, 'Kegiatan', 1, '1', 1, '2021-08-09', '2021-08-08 22:12:37', '2021-08-08 22:12:37', '199602182019011002'),
(11, '199602182019011002', 'WFO', NULL, NULL, 'SWAB PCR Ke Puskesmas Sikolos', NULL, 'Kegiatan', 1, '2', 1, '2021-08-09', '2021-08-08 22:13:06', '2021-08-08 22:13:06', '199602182019011002'),
(12, '199602182019011002', 'WFO', NULL, NULL, 'Melengkapi Pemutakhiran MySAPK - Progres 9/12 Tab', NULL, 'Kegiatan', 1, '1', 1, '2021-08-09', '2021-08-08 22:13:53', '2021-08-08 22:13:53', '199602182019011002'),
(13, '199602182019011002', 'WFO', NULL, NULL, 'Memeriksa Dokumen SPTK 2021', NULL, 'Kegiatan', 3, '1', 2, '2021-08-09', '2021-08-09 06:07:55', '2021-08-09 06:07:55', '199602182019011002');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_09_053654_create_sessions_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QdsPACQJPPQGVB3pbzk2kpWcw05IZ2D5SrrRztan', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMXNDQk5RN3FtR3hJWDFMMXBkeUd4cjJ4U0pwZnlIbDUxSVhIeFdXMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hY3QvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEU2eEx3S3NLWTl3ZGhPbS8yTEYvMy5VL0czVjBzTng5Umg3dU5ZbHpuYnZFQXUyR1R0MGIyIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRFNnhMd0tzS1k5d2RoT20vMkxGLzMuVS9HM1Ywc054OVJoN3VOWWx6bmJ2RUF1MkdUdDBiMiI7fQ==', 1628490249);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisasi` int(11) NOT NULL,
  `unit_kerja` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `organisasi`, `unit_kerja`, `foto`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'easbi', '', 0, '', '', 'easbi@bps.go.id', NULL, '$2y$10$E6xLwKsKY9wdhOm/2LF/3.U/G3V0sNx9Rh7uNYlznbvEAu2GTt0b2', NULL, NULL, NULL, NULL, NULL, '2021-08-08 22:55:07', '2021-08-08 22:55:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_activity`
--
ALTER TABLE `daily_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `daily_activity`
--
ALTER TABLE `daily_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
