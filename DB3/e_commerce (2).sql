-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2021 at 01:16 PM
-- Server version: 5.7.26
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ameen kayed', 'amkyd.99990@gmail.com', NULL, '$2y$10$ic5qMKpjnZgpFGPI/6NcwOatmAkcfQN2rM5H7D6QYq.pxPK8FEv9q', 'amkyd.99990@gmail.com', NULL, '2021-02-14 11:53:09', '2021-02-14 11:53:09'),
(2, 'ameen kayed', 'amkyd.99999@gmail.com', NULL, '$2y$10$XOTpqeuwukFs34HefZSA/.CySjWFet90VMhUkBCHcTvxgGUBYBnUW', 'amkyd.99990@gmail.com', NULL, '2021-02-15 10:49:52', '2021-02-15 10:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doc_id`, `user`, `date`, `phone`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'as@as.as', '2021-03-11 10:40:50', '', '', NULL, NULL),
(2, 2, 'as@as.as', '2021-03-16 10:10:00', '0962298812', 'as', '2021-03-10 08:12:22', '2021-03-10 08:12:22'),
(3, 2, 'as@as.as', '2021-03-16 12:18:00', '0962298812', 'as', '2021-03-10 08:13:39', '2021-03-10 08:13:39'),
(4, 2, 'as@as.as', '2023-09-04 03:19:00', '0962298812', 'as', '2021-03-10 08:14:12', '2021-03-10 08:14:12'),
(5, 2, 'as@as.as', '2021-04-10 11:05:00', '0962298812', 'as', '2021-03-10 10:05:20', '2021-03-10 10:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `dentists`
--

DROP TABLE IF EXISTS `dentists`;
CREATE TABLE IF NOT EXISTS `dentists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Qualification` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Certification` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Professional_Skills` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Education` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Awards` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dentists`
--

INSERT INTO `dentists` (`id`, `name`, `job`, `img`, `facebook`, `twitter`, `created_at`, `updated_at`, `Qualification`, `Certification`, `Professional_Skills`, `Education`, `Awards`, `bio`) VALUES
(1, 'Dr. Johnson Melbourne', 'Prosthodontics Dentist', 'doctor-1.jpg', NULL, NULL, NULL, NULL, 'MDS, BDS - Periodontology and Oral Implantology, 5 Years Experience', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'National Specialist Register in Dental', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Dr. Ena Dicrosa', 'Aesthetic Dentistry', 'doctor-3.jpg', NULL, NULL, NULL, NULL, 'MDS, BDS - Periodontology and Oral Implantology, 5 Years Experience', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu2222222222222222a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq22222222222222ua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua22222222222.', 'National Specialist Register in Dental222222222222222', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.222222222222222222222222'),
(3, 'Dr. Addison Smith', 'Gastroenterologists', 'doctor-2.jpg', NULL, NULL, NULL, NULL, 'MDS, BDS - Periodontology and Oral Implantology, 5 Years Experience333333333333333333333', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit3333333333333333333, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed d333333333333333333333o eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do333333333333333333333333 eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'National Specialist Register in Dental', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.33333333333333333333333'),
(4, 'Dr. Amee Kayed', 'Aesthetic Dentistry', 'ameen.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `abbr` varchar(10) CHARACTER SET latin1 NOT NULL,
  `local` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `direction` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `abbr`, `local`, `name`, `direction`, `active`, `created_at`, `updated_at`) VALUES
(1, 'dfgdfg', NULL, 'dfgdfg', 'ltr', 1, '2021-02-24 11:17:29', '2021-02-24 11:17:29'),
(2, 'utut', NULL, 'uytu', 'ltr', 1, '2021-02-24 11:18:35', '2021-02-24 11:18:35'),
(3, 'hfghfgh', NULL, 'dfhfgdh', 'ltr', 1, '2021-02-24 11:18:52', '2021-02-24 11:18:52'),
(4, 'dfgfdg', NULL, 'gdfgfdg', 'ltr', 1, '2021-02-24 11:20:26', '2021-02-24 11:20:26'),
(5, 'dfgfdg', NULL, 'gdfgfdg', 'ltr', 1, '2021-02-24 11:21:00', '2021-02-24 11:21:00'),
(6, 'ar_AR', NULL, 'arabic', 'ltr', 1, '2021-02-24 11:21:18', '2021-02-24 11:21:18'),
(7, 'ar_AR', NULL, 'arabic', 'ltr', 1, '2021-02-24 11:23:50', '2021-02-24 11:23:50'),
(8, 'fgfg', NULL, 'fgfg', 'ltr', 1, '2021-02-24 11:23:54', '2021-02-24 11:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

DROP TABLE IF EXISTS `main_categories`;
CREATE TABLE IF NOT EXISTS `main_categories` (
  `id` int(11) NOT NULL,
  `translation_lang` varchar(10) NOT NULL,
  `translation_of` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sender_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sender_phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_name`, `sender_email`, `sender_phone`, `subject`, `text`, `created_at`, `updated_at`) VALUES
(1, 'ameen', 'amkyd.99999@gmail.com', '0962298812', 'test', 'dsddddddddddddddddddddddddddddddd', '2021-03-10 09:21:09', '2021-03-10 09:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_09_110044_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `desc`, `created_at`, `updated_at`, `photo`) VALUES
(1, 'General Dentistry', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, NULL, 'services-1.jpg'),
(2, 'Cosmetic Dentistry', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, NULL, 'services-2.jpg'),
(3, 'Dental Implants', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, NULL, 'services-3.jpg'),
(4, 'Orthodontics', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, NULL, 'services-4.jpg'),
(5, 'Teeth Whitening', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, NULL, 'services-5.jpg'),
(6, 'Teeth Cleaning', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, NULL, 'services-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`, `phone`) VALUES
(1, 'ameen', 'amkyd.99990@gmail.com', NULL, '$2y$10$89AhYsfQSQqCRQDDRybS3uNye/dmtDZS4yuUxR4cDP5DUXyh53IKW', NULL, '2021-02-15 10:17:19', '2021-02-15 10:17:19', 0, NULL),
(2, 'ahmad', 'ac@cc.com', NULL, '$2y$10$PKgrgWUW0RL0CMpoSYEGcefZNG3GXKHdRycboYqPM6WCSiFn5SXvC', NULL, '2021-02-25 08:19:30', '2021-02-25 08:19:30', 0, NULL),
(3, 'as', 'as@as.as', NULL, '$2y$10$.oEM8Ro6K5yJqJLHILLVdumuTvMMnA03IlldNGcwjC7YqXpqHaLWi', NULL, '2021-02-25 08:32:59', '2021-02-25 08:32:59', 0, '0962298812'),
(4, 'ws', 'ws@ws.ws', NULL, '$2y$10$AUJWg5BLwS1uEKJpdWv4AeJLx20izaL.Ms0iZ86CPprbdwQBpDRou', NULL, '2021-02-25 08:45:01', '2021-02-25 08:45:01', 1, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
