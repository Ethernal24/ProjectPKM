-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 07:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_06_02_055945_create_m_cust_pdam_table', 0),
(2, '2024_06_02_055945_create_m_provider_table', 0),
(3, '2024_06_02_055945_create_m_pulsa_table', 0),
(4, '2024_06_02_055945_create_m_token_pln_table', 0),
(5, '2024_06_02_055945_create_m_voucher_table', 0),
(6, '2024_06_02_055945_create_t_invoice_table', 0),
(7, '2024_06_02_055945_create_t_invoice_detail_table', 0),
(8, '2024_06_02_055945_create_t_tagihan_pdam_table', 0),
(9, '2024_06_02_055945_create_t_user_table', 0),
(10, '2024_06_02_061153_create_m_cust_pdam_table', 0),
(11, '2024_06_02_061153_create_m_provider_table', 0),
(12, '2024_06_02_061153_create_m_pulsa_table', 0),
(13, '2024_06_02_061153_create_m_token_pln_table', 0),
(14, '2024_06_02_061153_create_m_voucher_table', 0),
(15, '2024_06_02_061153_create_t_invoice_table', 0),
(16, '2024_06_02_061153_create_t_invoice_detail_table', 0),
(17, '2024_06_02_061153_create_t_tagihan_pdam_table', 0),
(18, '2024_06_02_061153_create_t_user_table', 0),
(19, '2024_06_02_061228_create_m_cust_pdam_table', 0),
(20, '2024_06_02_061228_create_m_provider_table', 0),
(21, '2024_06_02_061228_create_m_pulsa_table', 0),
(22, '2024_06_02_061228_create_m_token_pln_table', 0),
(23, '2024_06_02_061228_create_m_voucher_table', 0),
(24, '2024_06_02_061228_create_t_invoice_table', 0),
(25, '2024_06_02_061228_create_t_invoice_detail_table', 0),
(26, '2024_06_02_061228_create_t_tagihan_pdam_table', 0),
(27, '2024_06_02_061228_create_t_user_table', 0),
(28, '0001_01_01_000000_create_users_table', 1),
(29, '0001_01_01_000001_create_cache_table', 1),
(30, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_cust_pdam`
--

CREATE TABLE `m_cust_pdam` (
  `cust_pdam_id` int(11) NOT NULL,
  `cust_pdam_no` int(6) NOT NULL,
  `gol_pdam` varchar(50) NOT NULL DEFAULT '',
  `cust_pdam_nama` varchar(50) NOT NULL,
  `cust_pdam_alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_provider`
--

CREATE TABLE `m_provider` (
  `provider_id` int(11) NOT NULL,
  `provider_name` varchar(50) NOT NULL,
  `provider_logo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_provider`
--

INSERT INTO `m_provider` (`provider_id`, `provider_name`, `provider_logo`) VALUES
(1, 'Telkomsel', NULL),
(2, 'XL', NULL),
(3, 'Three', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_pulsa`
--

CREATE TABLE `m_pulsa` (
  `pulsa_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `pulsa_nominal` int(50) NOT NULL,
  `pulsa_status` int(1) NOT NULL COMMENT '1-BelumTerpakai, 2-Booking, 3-UdahTerpakai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_token_pln`
--

CREATE TABLE `m_token_pln` (
  `token_pln_id` int(11) NOT NULL,
  `token_pln_no` int(20) NOT NULL,
  `token_pln_nominal` int(50) NOT NULL,
  `token_pln_kode` int(50) NOT NULL,
  `token_pln_status` int(1) NOT NULL COMMENT '1-BelumTerpakai, 2-Booking, 3-UdahTerpakai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_token_pln`
--

INSERT INTO `m_token_pln` (`token_pln_id`, `token_pln_no`, `token_pln_nominal`, `token_pln_kode`, `token_pln_status`) VALUES
(1, 111222, 10000, 12345678, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_voucher`
--

CREATE TABLE `m_voucher` (
  `voucher_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_redeemed` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = belum dipake, 2 = sudah terpakai',
  `redeemed_at` timestamp NULL DEFAULT NULL,
  `voucher_nominal_diskon` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FAmaCJBRPdCjOSA8hG4jvJsg6Ofm8141JOxJVs6M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3VDNG5mckcxRUpZcUlJTVA5a3dzdFBudEJLQ2g4Sm9OcjduMk9LMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1717695247),
('lxn15NdIoxHJjdsV4ZYeILGdSIxujZ2vsb9adVRd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZzZQQnRmeXgyZW1xbXRIM3lmZ2VaR0M5UDdQUk5sODZmZWVVMGNjZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1717729928),
('O5KrjXYTiYr0GlYzH75k7kKSzQCeCSpFCkrIhh1f', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlJpWHhxZ1ZpNHdnT2l4YWM0UXBwV0hnd0hlU21UZTFha0pFbTdtdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lL2RldGFpbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717731549),
('pYE6vMdqbVQbcSwZfXV027GVcelELGx3RWEd1KqU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEx2cUNQc1RQRU9xNkc4RFMzV1BCSnZPeDVjUnk1N1BvaW9UcldEeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1717695929);

-- --------------------------------------------------------

--
-- Table structure for table `t_invoice`
--

CREATE TABLE `t_invoice` (
  `invoice_id` int(11) NOT NULL,
  `voucher_id` int(11) DEFAULT NULL,
  `invoice_no` varchar(50) NOT NULL COMMENT 'str random',
  `invoice_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = token, 2 = pulsA, 3 = pdam',
  `invoice_total` int(50) NOT NULL,
  `invoice_status` int(1) NOT NULL COMMENT '1-BelumSelesai, 2-checkout, belum bayar, 3 = lunas',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL COMMENT 'ini isinya user_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_invoice_detail`
--

CREATE TABLE `t_invoice_detail` (
  `invoice_detail_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `token_pln_id` int(11) NOT NULL,
  `tagihan_pdam_id` int(11) NOT NULL,
  `pulsa_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL COMMENT 'ini isinya user_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_tagihan_pdam`
--

CREATE TABLE `t_tagihan_pdam` (
  `tagihan_pdam_id` int(11) NOT NULL,
  `cust_pdam_id` int(11) NOT NULL,
  `tagihan_pdam_periode` varchar(255) NOT NULL COMMENT 'Y-m',
  `tagihan_pdam_total` varchar(50) NOT NULL,
  `tagian_pdam_meter` int(100) NOT NULL,
  `tagihan_pdam_status` int(1) NOT NULL COMMENT '1-Belumselesai, 2-selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) DEFAULT NULL,
  `user_username` int(11) DEFAULT NULL,
  `user_password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_cust_pdam`
--
ALTER TABLE `m_cust_pdam`
  ADD PRIMARY KEY (`cust_pdam_id`);

--
-- Indexes for table `m_provider`
--
ALTER TABLE `m_provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- Indexes for table `m_pulsa`
--
ALTER TABLE `m_pulsa`
  ADD PRIMARY KEY (`pulsa_id`) USING BTREE,
  ADD KEY `id_provider` (`provider_id`);

--
-- Indexes for table `m_token_pln`
--
ALTER TABLE `m_token_pln`
  ADD PRIMARY KEY (`token_pln_id`);

--
-- Indexes for table `m_voucher`
--
ALTER TABLE `m_voucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `t_invoice`
--
ALTER TABLE `t_invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD UNIQUE KEY `user_id` (`created_by`),
  ADD KEY `voucher_id` (`voucher_id`);

--
-- Indexes for table `t_invoice_detail`
--
ALTER TABLE `t_invoice_detail`
  ADD PRIMARY KEY (`invoice_detail_id`),
  ADD KEY `token_pln_id` (`token_pln_id`),
  ADD KEY `tagihan_pdam_id` (`tagihan_pdam_id`),
  ADD KEY `pulsa_id` (`pulsa_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `t_tagihan_pdam`
--
ALTER TABLE `t_tagihan_pdam`
  ADD PRIMARY KEY (`tagihan_pdam_id`),
  ADD KEY `cust_pdam_id` (`cust_pdam_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `m_cust_pdam`
--
ALTER TABLE `m_cust_pdam`
  MODIFY `cust_pdam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_provider`
--
ALTER TABLE `m_provider`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_pulsa`
--
ALTER TABLE `m_pulsa`
  MODIFY `pulsa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_token_pln`
--
ALTER TABLE `m_token_pln`
  MODIFY `token_pln_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_voucher`
--
ALTER TABLE `m_voucher`
  MODIFY `voucher_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_invoice`
--
ALTER TABLE `t_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_invoice_detail`
--
ALTER TABLE `t_invoice_detail`
  MODIFY `invoice_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_tagihan_pdam`
--
ALTER TABLE `t_tagihan_pdam`
  MODIFY `tagihan_pdam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
eecoshopecoshopcoshop