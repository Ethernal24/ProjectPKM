-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 03:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
(1, '2024_06_26_062516_create_m_cust_pdam_table', 0),
(2, '2024_06_26_062516_create_m_provider_table', 0),
(3, '2024_06_26_062516_create_m_pulsa_table', 0),
(4, '2024_06_26_062516_create_m_token_pln_table', 0),
(5, '2024_06_26_062516_create_m_voucher_table', 0),
(6, '2024_06_26_062516_create_password_reset_tokens_table', 0),
(7, '2024_06_26_062516_create_sessions_table', 0),
(8, '2024_06_26_062516_create_t_invoice_table', 0),
(9, '2024_06_26_062516_create_t_invoice_detail_table', 0),
(10, '2024_06_26_062516_create_t_tagihan_pdam_table', 0),
(11, '2024_06_26_062516_create_t_user_table', 0),
(12, '2024_06_26_062516_create_users_table', 0),
(13, '2024_06_26_063905_create_m_cust_pdam_table', 0),
(14, '2024_06_26_063905_create_m_nominal_pulsa_table', 0),
(15, '2024_06_26_063905_create_m_provider_table', 0),
(16, '2024_06_26_063905_create_m_pulsa_table', 0),
(17, '2024_06_26_063905_create_m_token_pln_table', 0),
(18, '2024_06_26_063905_create_m_voucher_table', 0),
(19, '2024_06_26_063905_create_password_reset_tokens_table', 0),
(20, '2024_06_26_063905_create_sessions_table', 0),
(21, '2024_06_26_063905_create_t_invoice_table', 0),
(22, '2024_06_26_063905_create_t_invoice_detail_table', 0),
(23, '2024_06_26_063905_create_t_tagihan_pdam_table', 0),
(24, '2024_06_26_063905_create_t_user_table', 0),
(25, '2024_06_26_063905_create_users_table', 0),
(26, '2024_06_28_092437_create_m_cust_pdam_table', 0),
(27, '2024_06_28_092437_create_m_nominal_pulsa_table', 0),
(28, '2024_06_28_092437_create_m_nominal_voucher_table', 0),
(29, '2024_06_28_092437_create_m_provider_table', 0),
(30, '2024_06_28_092437_create_m_pulsa_table', 0),
(31, '2024_06_28_092437_create_m_token_pln_table', 0),
(32, '2024_06_28_092437_create_m_voucher_table', 0),
(33, '2024_06_28_092437_create_password_reset_tokens_table', 0),
(34, '2024_06_28_092437_create_sessions_table', 0),
(35, '2024_06_28_092437_create_t_invoice_table', 0),
(36, '2024_06_28_092437_create_t_invoice_detail_table', 0),
(37, '2024_06_28_092437_create_t_tagihan_pdam_table', 0),
(38, '2024_06_28_092437_create_t_user_table', 0),
(39, '2024_06_28_092437_create_users_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_cust_pdam`
--

CREATE TABLE `m_cust_pdam` (
  `cust_pdam_id` int(11) NOT NULL,
  `cust_pdam_no` int(11) NOT NULL,
  `gol_pdam` varchar(50) NOT NULL DEFAULT '',
  `cust_pdam_nama` varchar(50) NOT NULL,
  `cust_pdam_alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_nominal_pulsa`
--

CREATE TABLE `m_nominal_pulsa` (
  `nominal_pulsa_id` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `m_nominal_pulsa`
--

INSERT INTO `m_nominal_pulsa` (`nominal_pulsa_id`, `nominal`) VALUES
(1, 5000),
(2, 10000),
(3, 15000),
(4, 20000),
(5, 25000),
(6, 30000),
(7, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `m_nominal_voucher`
--

CREATE TABLE `m_nominal_voucher` (
  `nominal_voucher_id` int(11) NOT NULL,
  `nominal_disc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `m_nominal_voucher`
--

INSERT INTO `m_nominal_voucher` (`nominal_voucher_id`, `nominal_disc`) VALUES
(1, 5000),
(2, 7000),
(3, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `m_provider`
--

CREATE TABLE `m_provider` (
  `provider_id` int(11) NOT NULL,
  `provider_name` varchar(50) NOT NULL,
  `provider_logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_provider`
--

INSERT INTO `m_provider` (`provider_id`, `provider_name`, `provider_logo`) VALUES
(1, 'Telkomsel', 'img/hero-img-2.png'),
(2, 'XL', 'img/xl.png'),
(3, 'Three', 'img/three.png');

-- --------------------------------------------------------

--
-- Table structure for table `m_pulsa`
--

CREATE TABLE `m_pulsa` (
  `pulsa_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `pulsa_status` int(11) NOT NULL COMMENT '1-BelumTerpakai, 2-Booking, 3-UdahTerpakai',
  `nominal_pulsa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_pulsa`
--

INSERT INTO `m_pulsa` (`pulsa_id`, `provider_id`, `pulsa_status`, `nominal_pulsa_id`) VALUES
(1, 2, 1, 1),
(2, 1, 1, 2),
(3, 1, 1, 3),
(4, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_token_pln`
--

CREATE TABLE `m_token_pln` (
  `token_pln_id` int(11) NOT NULL,
  `token_pln_no` int(11) NOT NULL,
  `token_pln_nominal` int(11) NOT NULL,
  `token_pln_kode` int(11) NOT NULL,
  `token_pln_status` int(11) NOT NULL COMMENT '1-BelumTerpakai, 2-Booking, 3-UdahTerpakai'
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
  `voucher_id` int(10) UNSIGNED NOT NULL,
  `nominal_voucher_id` bigint(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `is_redeemed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true false, 0 = belum pake, 1 = wis dipake',
  `redeemed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_voucher`
--

INSERT INTO `m_voucher` (`voucher_id`, `nominal_voucher_id`, `user_id`, `is_redeemed`, `redeemed_at`) VALUES
(1, 1, 1, 1, '2024-06-28 20:18:31'),
(2, 2, 1, 1, '2024-06-28 13:09:21'),
(3, 1, 1, 1, '2024-06-28 20:56:29');

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
('IpHZERMbxmYe24Op1Lt4bDGjLZ9B0NSBu3CRsMAK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXpKbUNIVTJNdG90QkVsdldwQ09PckdYZTZQdWZhTlJMeWFadXRxRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1720141379),
('MdCoMrx6vY0TsunCK7hlNtx5ix4zzKxYsMr1WD8m', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQm9WV1lwV2Y2Y2FWNzZNTzVYT1dwbEZ1cW1ZekNsUnVOcWtjaEVjdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1720142235),
('x4I2Usi38xriAdn0nIH5DtwCWAucPdib9RKFBUrB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnNiUGw4TkJUb1ZyWTNSaU1uV2RWdlZZU1FDVThNQWtpR2RMajNxUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1720140896);

-- --------------------------------------------------------

--
-- Table structure for table `t_invoice`
--

CREATE TABLE `t_invoice` (
  `invoice_id` int(11) NOT NULL,
  `voucher_id` int(11) DEFAULT NULL,
  `invoice_no` varchar(10) NOT NULL COMMENT 'str random (10)',
  `invoice_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = token, 2 = pulsA, 3 = pdam',
  `nomor_telp` varchar(50) DEFAULT NULL,
  `invoice_total` int(11) NOT NULL DEFAULT 0,
  `invoice_status` int(11) NOT NULL DEFAULT 1 COMMENT '1-BelumSelesai, 2-checkout, belum bayar, 3 = lunas',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_invoice`
--

INSERT INTO `t_invoice` (`invoice_id`, `voucher_id`, `invoice_no`, `invoice_type`, `nomor_telp`, `invoice_total`, `invoice_status`, `updated_at`, `created_at`) VALUES
(5, 1, 'NlovqFWGuC', 2, '082233574795', 15000, 1, '2024-06-28 19:56:38', '2024-06-28 19:56:38'),
(6, 2, '8my2izGS4i', 2, '', 8000, 1, '2024-06-28 20:09:21', '2024-06-28 20:09:21'),
(7, 3, 'B8qqAuJTw9', 2, '', 0, 1, '2024-06-28 20:12:41', '2024-06-28 20:12:41'),
(8, 1, 'nUpQdCbjQz', 2, '08976868', 5000, 1, '2024-06-29 03:18:31', '2024-06-29 03:18:31'),
(9, 3, 'BKyEiNEweW', 2, '', 10000, 1, '2024-06-29 03:56:29', '2024-06-29 03:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `t_invoice_detail`
--

CREATE TABLE `t_invoice_detail` (
  `invoice_detail_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `token_pln_id` int(11) DEFAULT NULL,
  `tagihan_pdam_id` int(11) DEFAULT NULL,
  `pulsa_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_invoice_detail`
--

INSERT INTO `t_invoice_detail` (`invoice_detail_id`, `invoice_id`, `token_pln_id`, `tagihan_pdam_id`, `pulsa_id`, `created_at`) VALUES
(1, 5, NULL, NULL, 4, '2024-06-28 19:56:38'),
(2, 6, NULL, NULL, 3, '2024-06-28 20:09:21'),
(3, 7, NULL, NULL, 1, '2024-06-28 20:12:41'),
(4, 8, NULL, NULL, 2, '2024-06-29 03:18:31'),
(5, 9, NULL, NULL, 3, '2024-06-29 03:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `t_tagihan_pdam`
--

CREATE TABLE `t_tagihan_pdam` (
  `tagihan_pdam_id` int(11) NOT NULL,
  `cust_pdam_id` int(11) NOT NULL,
  `tagihan_pdam_periode` varchar(255) NOT NULL COMMENT 'Y-m',
  `tagihan_pdam_total` varchar(50) NOT NULL,
  `tagian_pdam_meter` int(11) NOT NULL,
  `tagihan_pdam_status` int(11) NOT NULL COMMENT '1-Belumselesai, 2-selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`user_id`, `user_username`, `user_password`) VALUES
(1, 'ntin', 'admin');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayam', 'babi12@gmail.com', NULL, '123456', NULL, NULL, NULL),
(2, '$2y$12$q905N23jptdnPLb1xnfQTur.FdQtRZwa2YEX5AEwxgQpys0JV6t0y', '$2y$12$B4zxTgRltbZbSBaIES/GK.LiuF7e65cXb7lpOV.FlzUD8GjsGHiaq', NULL, '$2y$12$l5/aH1bTVc3MHrSEY5n28uF8zf2dCbx/PBbBzenMH98g59boyzTKe', NULL, '2024-07-04 08:25:34', '2024-07-04 08:25:34'),
(3, '$2y$12$tq.Udl4JiF61tTQqmZ7rJeWRC5WHUbEdJho2IoGAhLhjkvaeTLgKC', '$2y$12$wcxAilVGJVvliFEExaAkNO1MYiMIRSdgHfeismTj6xOUf8g16RKpq', NULL, '$2y$12$WgqmBoD6h6YWC8f2JMEWzOauRSMtFbqoH/VrodJ5zWKQvmD2nl0EW', NULL, '2024-07-04 18:02:59', '2024-07-04 18:02:59');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `m_nominal_pulsa`
--
ALTER TABLE `m_nominal_pulsa`
  ADD PRIMARY KEY (`nominal_pulsa_id`) USING BTREE;

--
-- Indexes for table `m_nominal_voucher`
--
ALTER TABLE `m_nominal_voucher`
  ADD PRIMARY KEY (`nominal_voucher_id`) USING BTREE;

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
  ADD KEY `id_provider` (`provider_id`),
  ADD KEY `nominal_pulsa_id` (`nominal_pulsa_id`);

--
-- Indexes for table `m_token_pln`
--
ALTER TABLE `m_token_pln`
  ADD PRIMARY KEY (`token_pln_id`);

--
-- Indexes for table `m_voucher`
--
ALTER TABLE `m_voucher`
  ADD PRIMARY KEY (`voucher_id`) USING BTREE;

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
  ADD KEY `voucher_id` (`voucher_id`) USING BTREE;

--
-- Indexes for table `t_invoice_detail`
--
ALTER TABLE `t_invoice_detail`
  ADD PRIMARY KEY (`invoice_detail_id`),
  ADD KEY `token_pln_id` (`token_pln_id`),
  ADD KEY `tagihan_pdam_id` (`tagihan_pdam_id`),
  ADD KEY `pulsa_id` (`pulsa_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `t_tagihan_pdam`
--
ALTER TABLE `t_tagihan_pdam`
  ADD PRIMARY KEY (`tagihan_pdam_id`),
  ADD KEY `cust_pdam_id` (`cust_pdam_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `pulsa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_token_pln`
--
ALTER TABLE `m_token_pln`
  MODIFY `token_pln_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_voucher`
--
ALTER TABLE `m_voucher`
  MODIFY `voucher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_invoice`
--
ALTER TABLE `t_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_invoice_detail`
--
ALTER TABLE `t_invoice_detail`
  MODIFY `invoice_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_tagihan_pdam`
--
ALTER TABLE `t_tagihan_pdam`
  MODIFY `tagihan_pdam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
