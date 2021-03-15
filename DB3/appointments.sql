-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2021 at 02:14 PM
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
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doc_id`, `user`, `date`, `phone`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'as@as.as', '2021-03-11 12:40:50', '', '', NULL, NULL),
(2, 2, 'as@as.as', '2021-03-16 12:10:00', '0962298812', 'as', '2021-03-10 08:12:22', '2021-03-10 08:12:22'),
(3, 2, 'as@as.as', '2021-03-16 14:18:00', '0962298812', 'as', '2021-03-10 08:13:39', '2021-03-10 08:13:39'),
(4, 2, 'as@as.as', '2023-09-04 06:19:00', '0962298812', 'as', '2021-03-10 08:14:12', '2021-03-10 08:14:12'),
(5, 2, 'as@as.as', '2021-04-10 14:05:00', '0962298812', 'as', '2021-03-10 10:05:20', '2021-03-10 10:05:20'),
(6, 2, 'as@as.as', '4', '0962298812', 'as', '2021-03-15 11:57:42', '2021-03-15 11:57:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
