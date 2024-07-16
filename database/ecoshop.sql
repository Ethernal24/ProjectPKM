-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ecoshop
CREATE DATABASE IF NOT EXISTS `ecoshop` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ecoshop`;

-- Dumping structure for table ecoshop.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecoshop.migrations: ~39 rows (approximately)
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

-- Dumping structure for table ecoshop.m_cust_pdam
CREATE TABLE IF NOT EXISTS `m_cust_pdam` (
  `cust_pdam_id` int NOT NULL AUTO_INCREMENT,
  `cust_pdam_no` int NOT NULL,
  `cust_pdam_nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cust_pdam_alamat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cust_pdam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.m_cust_pdam: ~0 rows (approximately)

-- Dumping structure for table ecoshop.m_list_no_pln
CREATE TABLE IF NOT EXISTS `m_list_no_pln` (
  `list_no_pln_id` int NOT NULL AUTO_INCREMENT,
  `no_pln` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`list_no_pln_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table ecoshop.m_list_no_pln: ~2 rows (approximately)
INSERT INTO `m_list_no_pln` (`list_no_pln_id`, `no_pln`) VALUES
	(1, 111222),
	(2, 222111);

-- Dumping structure for table ecoshop.m_nominal_pln
CREATE TABLE IF NOT EXISTS `m_nominal_pln` (
  `nominal_pln_id` int NOT NULL AUTO_INCREMENT,
  `nominal_pln` int NOT NULL,
  PRIMARY KEY (`nominal_pln_id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table ecoshop.m_nominal_pln: ~6 rows (approximately)
INSERT INTO `m_nominal_pln` (`nominal_pln_id`, `nominal_pln`) VALUES
	(1, 20000),
	(2, 30000),
	(3, 50000),
	(4, 100000),
	(5, 300000),
	(6, 500000);

-- Dumping structure for table ecoshop.m_nominal_pulsa
CREATE TABLE IF NOT EXISTS `m_nominal_pulsa` (
  `nominal_pulsa_id` int NOT NULL,
  `nominal` int NOT NULL,
  PRIMARY KEY (`nominal_pulsa_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table ecoshop.m_nominal_pulsa: ~6 rows (approximately)
INSERT INTO `m_nominal_pulsa` (`nominal_pulsa_id`, `nominal`) VALUES
	(1, 5000),
	(2, 10000),
	(3, 15000),
	(4, 20000),
	(5, 25000),
	(6, 30000),
	(7, 35000);

-- Dumping structure for table ecoshop.m_nominal_voucher
CREATE TABLE IF NOT EXISTS `m_nominal_voucher` (
  `nominal_voucher_id` int NOT NULL,
  `nominal_disc` int NOT NULL,
  PRIMARY KEY (`nominal_voucher_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table ecoshop.m_nominal_voucher: ~3 rows (approximately)
INSERT INTO `m_nominal_voucher` (`nominal_voucher_id`, `nominal_disc`) VALUES
	(1, 5000),
	(2, 7000),
	(3, 10000);

-- Dumping structure for table ecoshop.m_provider
CREATE TABLE IF NOT EXISTS `m_provider` (
  `provider_id` int NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `provider_logo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`provider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.m_provider: ~3 rows (approximately)
INSERT INTO `m_provider` (`provider_id`, `provider_name`, `provider_logo`) VALUES
	(1, 'Telkomsel', 'img/hero-img-2.png'),
	(2, 'XL', 'img/xl.png'),
	(3, 'Three', 'img/three.png');

-- Dumping structure for table ecoshop.m_pulsa
CREATE TABLE IF NOT EXISTS `m_pulsa` (
  `pulsa_id` int NOT NULL AUTO_INCREMENT,
  `provider_id` int NOT NULL,
  `pulsa_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 kepkaai 2 booking 3 kepkae',
  `nominal_pulsa_id` int DEFAULT NULL,
  `pulsa_buy_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pulsa_id`) USING BTREE,
  KEY `id_provider` (`provider_id`),
  KEY `nominal_pulsa_id` (`nominal_pulsa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.m_pulsa: ~34 rows (approximately)
INSERT INTO `m_pulsa` (`pulsa_id`, `provider_id`, `pulsa_status`, `nominal_pulsa_id`, `pulsa_buy_at`) VALUES
	(1, 1, 1, 3, '2024-07-06 08:27:45'),
	(2, 1, 0, 1, '2024-07-02 09:35:16'),
	(3, 1, 0, 2, '2024-07-02 08:58:18'),
	(4, 1, 0, 2, NULL),
	(6, 1, 0, 3, NULL),
	(7, 1, 0, 1, NULL),
	(8, 1, 1, 4, '2024-07-06 08:13:20'),
	(9, 1, 0, 4, NULL),
	(10, 2, 0, 1, NULL),
	(11, 2, 0, 1, NULL),
	(12, 2, 0, 2, NULL),
	(13, 2, 0, 2, NULL),
	(14, 2, 1, 3, '2024-07-06 08:28:46'),
	(15, 2, 0, 3, NULL),
	(16, 1, 0, 5, NULL),
	(17, 1, 0, 6, NULL),
	(18, 1, 0, 7, NULL),
	(19, 2, 0, 4, NULL),
	(20, 2, 0, 4, NULL),
	(21, 2, 0, 5, NULL),
	(22, 2, 0, 6, NULL),
	(23, 2, 0, 7, NULL),
	(24, 3, 0, 1, NULL),
	(25, 3, 0, 1, NULL),
	(26, 3, 0, 2, NULL),
	(27, 3, 0, 2, NULL),
	(28, 3, 0, 3, NULL),
	(29, 3, 0, 3, NULL),
	(30, 3, 0, 3, NULL),
	(31, 3, 1, 4, '2024-07-06 08:14:24'),
	(32, 3, 0, 4, NULL),
	(33, 3, 0, 5, NULL),
	(34, 3, 0, 6, NULL),
	(35, 3, 0, 7, NULL);

-- Dumping structure for table ecoshop.m_token_pln
CREATE TABLE IF NOT EXISTS `m_token_pln` (
  `token_pln_id` int NOT NULL AUTO_INCREMENT,
  `list_no_pln_id` int DEFAULT NULL,
  `nominal_pln_id` int NOT NULL,
  `token_pln_kode` int NOT NULL,
  `token_pln_status` int NOT NULL DEFAULT '0' COMMENT '0 blm kepake, 1 kepake',
  `token_buy_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`token_pln_id`),
  KEY `nominal_pln_id` (`nominal_pln_id`),
  KEY `list_no_pln_id` (`list_no_pln_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.m_token_pln: ~4 rows (approximately)
INSERT INTO `m_token_pln` (`token_pln_id`, `list_no_pln_id`, `nominal_pln_id`, `token_pln_kode`, `token_pln_status`, `token_buy_at`) VALUES
	(1, 1, 1, 12345678, 0, NULL),
	(2, NULL, 2, 11122233, 1, '2024-07-10 11:18:04'),
	(3, 1, 3, 43123456, 0, '2024-07-10 11:14:46'),
	(4, 1, 4, 12345645, 0, NULL);

-- Dumping structure for table ecoshop.m_voucher
CREATE TABLE IF NOT EXISTS `m_voucher` (
  `voucher_id` int unsigned NOT NULL AUTO_INCREMENT,
  `nominal_voucher_id` bigint DEFAULT NULL,
  `user_id` int NOT NULL,
  `is_redeemed` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'true false, 0 = belum pake, 1 = wis dipake',
  `redeemed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`voucher_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.m_voucher: ~2 rows (approximately)
INSERT INTO `m_voucher` (`voucher_id`, `nominal_voucher_id`, `user_id`, `is_redeemed`, `redeemed_at`) VALUES
	(1, 3, 1, 1, '2024-07-10 11:14:46'),
	(2, 2, 1, 1, '2024-07-10 11:15:23'),
	(3, 1, 1, 1, '2024-07-10 11:18:04');

-- Dumping structure for table ecoshop.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecoshop.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table ecoshop.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecoshop.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('tWH4UDmga8ikAzBqVP3aKs1VmqbVi5MAFB2gI9xN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTRKZlFxWWRVNUd4MFcyaE5tM2lESnoyNDlkbEZlNHVNcUtWOFVzeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9wcm9qZWN0cGttX3JlYWwudGVzdC9zaG9wL2ludm9pY2UtcGxuP2ludm9pY2VfaWQ9MjEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720635484);

-- Dumping structure for table ecoshop.t_invoice
CREATE TABLE IF NOT EXISTS `t_invoice` (
  `invoice_id` int NOT NULL AUTO_INCREMENT,
  `voucher_id` int DEFAULT NULL,
  `invoice_no` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'str random (10)',
  `invoice_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = token, 2 = pulsA, 3 = pdam',
  `nomor_telp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_pln_ui` int NOT NULL DEFAULT '0',
  `invoice_total` int NOT NULL DEFAULT '0',
  `invoice_status` int NOT NULL DEFAULT '1' COMMENT '1 baru, 2 lunas, 3 cancel',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`invoice_id`),
  KEY `voucher_id` (`voucher_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.t_invoice: ~15 rows (approximately)
INSERT INTO `t_invoice` (`invoice_id`, `voucher_id`, `invoice_no`, `invoice_type`, `nomor_telp`, `no_pln_ui`, `invoice_total`, `invoice_status`, `updated_at`, `created_at`) VALUES
	(5, 1, 'NlovqFWGuC', 2, '082233574795', 0, 15000, 1, '2024-06-28 19:56:38', '2024-06-28 19:56:38'),
	(6, 2, '8my2izGS4i', 2, '', 0, 8000, 1, '2024-06-28 20:09:21', '2024-06-28 20:09:21'),
	(7, 3, 'B8qqAuJTw9', 2, '', 0, 0, 1, '2024-06-28 20:12:41', '2024-06-28 20:12:41'),
	(8, 1, 'nUpQdCbjQz', 2, '08976868', 0, 5000, 1, '2024-06-29 03:18:31', '2024-06-29 03:18:31'),
	(9, 3, 'BKyEiNEweW', 2, '', 0, 10000, 1, '2024-06-29 03:56:29', '2024-06-29 03:56:29'),
	(10, 1, 'ylJVhhyGSn', 2, '7676766', 0, 5000, 1, '2024-07-02 01:48:08', '2024-07-02 01:48:08'),
	(11, 2, 'XS1kkPOIwL', 2, '89797779', 0, 3000, 2, '2024-07-02 15:58:18', '2024-07-02 15:58:18'),
	(12, 3, '4Wy8cWq5a4', 2, '09876454545', 0, 10000, 1, '2024-07-02 16:35:15', '2024-07-02 16:35:15'),
	(13, 1, 'ZOkLpAWYn1', 2, '0876436995', 0, 15000, 1, '2024-07-06 15:13:20', '2024-07-06 15:13:20'),
	(14, 2, 'aJvJMbpZ0M', 2, '086756489', 0, 13000, 1, '2024-07-06 15:14:24', '2024-07-06 15:14:24'),
	(15, 1, 'fCXBhv4Pd0', 2, '085463537', 0, 5000, 1, '2024-07-06 15:27:45', '2024-07-06 15:27:45'),
	(16, 3, 'UbuynBnugw', 2, '98574574', 0, 10000, 1, '2024-07-06 15:28:46', '2024-07-06 15:28:46'),
	(17, 2, '3Dg5ONmSR7', 1, NULL, 111222, 23000, 1, '2024-07-10 18:10:32', '2024-07-10 18:10:32'),
	(18, 1, 'QMlsQ8iBRv', 1, NULL, 111222, 40000, 1, '2024-07-10 18:14:46', '2024-07-10 18:14:46'),
	(19, 2, '5T4QGPLkCu', 1, NULL, 111222, 93000, 1, '2024-07-10 18:15:23', '2024-07-10 18:15:23'),
	(20, 3, '8uu1JiIsfc', 1, NULL, 111222, 25000, 1, '2024-07-10 18:17:26', '2024-07-10 18:17:26'),
	(21, 3, 'yt603zvlkX', 1, NULL, 222111, 25000, 1, '2024-07-10 18:18:04', '2024-07-10 18:18:04');

-- Dumping structure for table ecoshop.t_invoice_detail
CREATE TABLE IF NOT EXISTS `t_invoice_detail` (
  `invoice_detail_id` int NOT NULL AUTO_INCREMENT,
  `invoice_id` int NOT NULL,
  `token_pln_id` int DEFAULT NULL,
  `tagihan_pdam_id` int DEFAULT NULL,
  `pulsa_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`invoice_detail_id`),
  KEY `token_pln_id` (`token_pln_id`),
  KEY `tagihan_pdam_id` (`tagihan_pdam_id`),
  KEY `pulsa_id` (`pulsa_id`),
  KEY `invoice_id` (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.t_invoice_detail: ~15 rows (approximately)
INSERT INTO `t_invoice_detail` (`invoice_detail_id`, `invoice_id`, `token_pln_id`, `tagihan_pdam_id`, `pulsa_id`, `created_at`) VALUES
	(1, 5, NULL, NULL, 4, '2024-06-28 19:56:38'),
	(2, 6, NULL, NULL, 3, '2024-06-28 20:09:21'),
	(3, 7, NULL, NULL, 1, '2024-06-28 20:12:41'),
	(4, 8, NULL, NULL, 2, '2024-06-29 03:18:31'),
	(5, 9, NULL, NULL, 3, '2024-06-29 03:56:29'),
	(6, 10, NULL, NULL, 2, '2024-07-02 01:48:08'),
	(7, 11, NULL, NULL, 3, '2024-07-02 15:58:18'),
	(8, 12, NULL, NULL, 2, '2024-07-02 16:35:15'),
	(9, 13, NULL, NULL, 8, '2024-07-06 15:13:20'),
	(10, 14, NULL, NULL, 31, '2024-07-06 15:14:24'),
	(11, 15, NULL, NULL, 1, '2024-07-06 15:27:45'),
	(12, 16, NULL, NULL, 14, '2024-07-06 15:28:46'),
	(13, 17, 2, NULL, NULL, '2024-07-10 18:10:32'),
	(14, 18, 3, NULL, NULL, '2024-07-10 18:14:46'),
	(15, 19, 4, NULL, NULL, '2024-07-10 18:15:23'),
	(16, 20, 2, NULL, NULL, '2024-07-10 18:17:26'),
	(17, 21, 2, NULL, NULL, '2024-07-10 18:18:04');

-- Dumping structure for table ecoshop.t_tagihan_pdam
CREATE TABLE IF NOT EXISTS `t_tagihan_pdam` (
  `tagihan_pdam_id` int NOT NULL AUTO_INCREMENT,
  `cust_pdam_id` int NOT NULL,
  `tagihan_pdam_periode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Y-m',
  `tagihan_pdam_total` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tagian_pdam_meter` int NOT NULL,
  `tagihan_pdam_status` int NOT NULL COMMENT '1-Belumselesai, 2-selesai',
  PRIMARY KEY (`tagihan_pdam_id`),
  KEY `cust_pdam_id` (`cust_pdam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.t_tagihan_pdam: ~0 rows (approximately)

-- Dumping structure for table ecoshop.t_user
CREATE TABLE IF NOT EXISTS `t_user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecoshop.t_user: ~0 rows (approximately)
INSERT INTO `t_user` (`user_id`, `user_username`, `user_password`) VALUES
	(1, 'ntin', 'admin');

-- Dumping structure for table ecoshop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecoshop.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, '$2y$12$TBZHHxwCiXkuOeXbRKpv/OXKbXbd.THO2XXCvE.YsEJGt.gy.gqkm', '$2y$12$KtMZ/ybIYiTNs.OO8cCDLuTvB5Abx02P0W8VdUyAvrRV220EO92Z2', NULL, '$2y$12$s2a8r2p3eaVI911.zafiZ.Iv4jpMdKwh6QZNlI6V7VOcGAeEZYAny', NULL, '2024-07-06 10:13:41', '2024-07-06 10:13:41'),
	(3, 'coba', 'coba123@gmail.com', NULL, 'coba123', NULL, NULL, NULL),
	(4, 'tes', 'tes@gmail.com', NULL, '$2y$12$CPe.gILe91sncQ8Xyhc0eeNV9EdvrCr6PmZXpgpfZo5ZOjgVgTE6i', NULL, '2024-07-10 05:38:51', '2024-07-10 05:38:51');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
