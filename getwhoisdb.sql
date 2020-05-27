-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 01:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getwhoisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `status_id`, `order_id`, `file`) VALUES
(1, 1, 0, 2, '/storage/HostStudioz -Nasir-2.pdf'),
(2, 1, 0, 3, '/storage/HostStudioz -Nasir-3.pdf'),
(3, 1, 0, 4, '/storage/HostStudioz -Nasir-4.pdf'),
(4, 1, 0, 5, '/storage/HostStudioz -Nasir-5.pdf'),
(5, 1, 0, 6, '/storage/HostStudioz -Nasir-6.pdf'),
(6, 1, 0, 7, '/storage/HostStudioz -Nasir-7.pdf'),
(7, 1, 0, 8, '/storage/HostStudioz -Nasir-8.pdf'),
(8, 1, 0, 9, '/storage/HostStudioz -Nasir-9.pdf'),
(9, 1, 0, 10, '/storage/HostStudioz -Nasir-10.pdf'),
(10, 1, 0, 11, '/storage/HostStudioz -Nasir-11.pdf'),
(11, 1, 0, 12, '/storage/HostStudioz -Nasir-12.pdf'),
(12, 1, 0, 13, '/storage/HostStudioz -Nasir-13.pdf'),
(13, 1, 0, 14, '/storage/HostStudioz -Nasir-14.pdf'),
(14, 1, 0, 15, '/storage/HostStudioz -Nasir-15.pdf'),
(15, 1, 0, 16, '/storage/HostStudioz -Nasir-16.pdf'),
(16, 1, 0, 17, '/storage/HostStudioz -Nasir-17.pdf'),
(17, 1, 0, 18, '/storage/HostStudioz -Nasir-18.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(2, 'emails', '{\"displayName\":\"App\\\\Jobs\\\\SendEmailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmailJob\",\"command\":\"O:21:\\\"App\\\\Jobs\\\\SendEmailJob\\\":8:{s:10:\\\"\\u0000*\\u0000details\\\";a:3:{s:2:\\\"to\\\";s:21:\\\"hoststudioz@gmail.com\\\";s:10:\\\"Attachment\\\";s:67:\\\"C:\\\\xampp\\\\htdocs\\\\getwhoisdb.in\\\\storage\\\\app\\/HostStudioz -Nasir-17.pdf\\\";s:7:\\\"Subnect\\\";s:29:\\\"Invoice Genrated Successfully\\\";}s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:6:\\\"emails\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1590574373, 1590574373),
(4, 'emails', '{\"displayName\":\"App\\\\Jobs\\\\SendEmailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"delay\":null,\"timeout\":null,\"timeoutAt\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmailJob\",\"command\":\"O:21:\\\"App\\\\Jobs\\\\SendEmailJob\\\":8:{s:10:\\\"\\u0000*\\u0000details\\\";a:3:{s:2:\\\"to\\\";s:21:\\\"hoststudioz@gmail.com\\\";s:10:\\\"Attachment\\\";s:67:\\\"C:\\\\xampp\\\\htdocs\\\\getwhoisdb.in\\\\storage\\\\app\\/HostStudioz -Nasir-18.pdf\\\";s:7:\\\"Subnect\\\";s:29:\\\"Invoice Genrated Successfully\\\";}s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:6:\\\"emails\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:5:\\\"delay\\\";N;s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1590576007, 1590576007);

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
(3, '2020_05_23_070155_create_products_table', 1),
(4, '2020_05_23_070338_create_periods_table', 1),
(5, '2020_05_23_072835_create_time4vps_table', 1),
(6, '2020_05_24_194647_create_orders_table', 1),
(7, '2020_05_27_075419_create_jobs_table', 1),
(8, '2020_05_27_110620_create_invoices_table', 2),
(9, '2020_05_27_110620_create_jobs_table', 2),
(10, '2020_05_27_110620_create_orders_table', 2),
(11, '2020_05_27_110620_create_password_resets_table', 2),
(12, '2020_05_27_110620_create_periods_table', 2),
(13, '2020_05_27_110620_create_products_table', 2),
(14, '2020_05_27_110620_create_time4vps_table', 2),
(15, '2020_05_27_110620_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT 0,
  `request` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status_id`, `request`, `response`, `created_at`, `updated_at`) VALUES
(2, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"16\"]}', NULL, NULL, NULL),
(3, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"16\"]}', NULL, NULL, NULL),
(4, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"16\"]}', NULL, NULL, NULL),
(5, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(6, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(7, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(8, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(9, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(10, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(11, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(12, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"8.09\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"8.09\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"8.09\",\"forms\":[\"595\"],\"addons\":[\"24\"]}', NULL, NULL, NULL),
(13, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"129\",\"productName\":\"Linux 8\",\"productPrice\":\"13.49\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"13.49\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 2 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 8192 MB<\\/li><li><strong>Storage:<\\/strong> 80 GB<\\/li><li><strong>Bandwidth:<\\/strong> 8 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"13.49\",\"forms\":[\"599\"],\"addons\":[\"22\",\"19\"]}', NULL, NULL, NULL),
(14, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"130\",\"productName\":\"Linux 16\",\"productPrice\":\"145.72\",\"productCycle\":\"s\",\"productCycleTitle\":\"Semi-Annually\",\"totalAmmount\":\"145.72\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 4 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 16384 MB<\\/li><li><strong>Storage:<\\/strong> 160 GB<\\/li><li><strong>Bandwidth:<\\/strong> 16 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"145.72\"}', NULL, NULL, NULL),
(15, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"130\",\"productName\":\"Linux 16\",\"productPrice\":\"24.29\",\"productCycle\":\"m\",\"productCycleTitle\":\"Monthly\",\"totalAmmount\":\"24.29\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 4 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 16384 MB<\\/li><li><strong>Storage:<\\/strong> 160 GB<\\/li><li><strong>Bandwidth:<\\/strong> 16 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"145.72\"}', NULL, NULL, NULL),
(16, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"161.97\",\"productCycle\":\"b\",\"productCycleTitle\":\"Biennially\",\"totalAmmount\":\"161.97\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"161.97\",\"forms\":[\"596\"],\"addons\":[\"22\"]}', NULL, NULL, NULL),
(17, 1, 0, '{\"_token\":\"PGvn07eZbefKnqKaiTBxE3vNIF2PihMAOKUfZmhl\",\"productID\":\"128\",\"productName\":\"Linux 4\",\"productPrice\":\"80.99\",\"productCycle\":\"a\",\"productCycleTitle\":\"Annually\",\"totalAmmount\":\"80.99\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4096 MB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"80.99\",\"addons\":[\"22\"]}', NULL, NULL, NULL),
(18, 1, 0, '{\"_token\":\"17XJo9lPm7XFoap7JebWDK8sR1MRvLuQgSTzOUNV\",\"productID\":\"136\",\"productName\":\"Windows 4\",\"productPrice\":\"134.99\",\"productCycle\":\"a\",\"productCycleTitle\":\"Annually\",\"totalAmmount\":\"134.99\",\"description\":\"<ul><li><strong>CPU:<\\/strong> 1 x 2.60 GHz<\\/li><li><strong>RAM:<\\/strong> 4 GB<\\/li><li><strong>Storage:<\\/strong> 40 GB<\\/li><li><strong>Bandwidth:<\\/strong> 4 TB<\\/li><li><strong>Port speed:<\\/strong> 100 Mbps<\\/li><li><strong>Backups:<\\/strong> Optional<\\/li><li><strong>Available OS:<\\/strong> Windows 2012 \\/ 2016 \\/ 2019<\\/li><li><strong>Virtualization:<\\/strong> KVM<\\/li><\\/ul>\",\"price\":\"134.99\",\"forms\":[\"619\"],\"addons\":[\"19\"]}', NULL, NULL, NULL);

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
-- Table structure for table `periods`
--

CREATE TABLE `periods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time4vps`
--

CREATE TABLE `time4vps` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nasir', 'hoststudioz@gmail.com', NULL, '$2y$10$Ts3FqnJn0R7Ih27JUVa.p.sCWLCYr70pPn6OXoG7Lbb8evhcuVg8m', NULL, '2020-05-27 02:25:52', '2020-05-27 02:25:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time4vps`
--
ALTER TABLE `time4vps`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `periods`
--
ALTER TABLE `periods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time4vps`
--
ALTER TABLE `time4vps`
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
