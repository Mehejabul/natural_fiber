-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abrar_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `type` enum('long','short_left','short_right') NOT NULL DEFAULT 'short_left',
  `view_section` enum('bellow_slider','bellow_trending_categories','bellow_product_type') NOT NULL DEFAULT 'bellow_slider',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image`, `status`, `type`, `view_section`, `created_at`, `updated_at`) VALUES
(2, '1717912424.jfif', 'Active', 'short_left', 'bellow_slider', '2023-12-20 15:44:08', '2024-06-09 00:41:36'),
(5, '1717913922.jfif', 'Active', 'short_right', 'bellow_slider', '2024-06-09 00:18:42', '2024-06-09 00:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'color', NULL, NULL),
(2, 'size', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1717052741.jpg', 'Active', '2024-01-14 20:05:10', '2024-05-30 01:05:57'),
(2, '1705915737.png', 'Active', '2024-01-14 20:04:15', '2024-06-15 11:48:53'),
(3, '1706257692.jpg', 'Inactive', '2024-01-26 19:28:12', '2024-06-15 11:48:57'),
(4, '1706257733.jpg', 'Active', '2024-01-26 19:28:53', '2024-06-15 11:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `address`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abrar Mart', '', '', '', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalogues`
--

CREATE TABLE `catalogues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogues`
--

INSERT INTO `catalogues` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Toys & Games', 'toys-games', NULL, 'Active', NULL, '2024-05-27 23:21:49'),
(2, 'Stationary & crafts', 'stationary-crafts', NULL, 'Active', NULL, '2024-05-27 23:21:51'),
(3, 'Mother & Baby', NULL, NULL, 'Active', NULL, '2024-05-08 14:33:36'),
(4, 'Cosmetic', NULL, NULL, 'Active', NULL, '2024-05-08 14:25:30'),
(5, 'Health  & Beauty', NULL, NULL, 'Active', NULL, '2024-05-08 14:26:18'),
(7, 'Groceries', NULL, NULL, 'Active', '2024-05-08 14:37:29', '2024-05-15 15:43:19'),
(8, 'Bags & travels', NULL, NULL, 'Active', '2024-05-08 14:38:58', '2024-05-08 18:23:53'),
(9, 'Jewellary', NULL, NULL, 'Inactive', '2024-05-08 14:40:37', '2024-05-27 02:05:10'),
(10, 'Fashion', NULL, NULL, 'Active', '2024-05-08 14:41:16', '2024-05-08 14:41:16'),
(11, 'Furniture & decore', NULL, NULL, 'Inactive', '2024-05-08 14:42:00', '2024-05-16 14:01:43'),
(12, 'Kitchen & daining', NULL, NULL, 'Active', '2024-05-08 14:42:51', '2024-05-08 14:42:51'),
(13, 'Books', NULL, NULL, 'Active', '2024-05-08 14:43:13', '2024-05-16 17:18:12'),
(14, 'Gift Iteam', NULL, NULL, 'Active', '2024-05-08 14:43:28', '2024-05-08 14:43:28'),
(15, 'calculator', NULL, NULL, 'Active', '2024-05-09 03:53:56', '2024-05-09 03:53:56'),
(16, 'Medicine  items', NULL, NULL, 'Inactive', '2024-05-16 15:32:00', '2024-05-16 15:50:38'),
(17, 'Electric items', NULL, NULL, 'Active', '2024-05-16 15:32:25', '2024-05-16 15:32:25'),
(18, 'Vegitable items', NULL, NULL, 'Inactive', '2024-05-16 16:01:20', '2024-05-16 16:01:36'),
(19, 'Birthday Items', NULL, NULL, 'Active', '2024-05-17 16:24:05', '2024-05-17 16:24:05'),
(20, 'Test Catalogue', 'test-catalogue', NULL, 'Active', '2024-05-27 13:38:07', '2024-05-27 13:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `catalogue_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `homepage_view` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `catalogue_id`, `name`, `slug`, `image`, `description`, `status`, `homepage_view`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 'Shirt', NULL, '1714984671.png', NULL, 'Inactive', NULL, '2024-04-26 06:20:13', '2024-05-27 12:40:48'),
(3, 0, 1, 'sports & outdoor plays', NULL, '1716837596.jpeg', NULL, 'Active', 'no', '2024-04-26 06:20:41', '2024-05-27 23:23:48'),
(4, 10, 1, 'Pant', NULL, '1714984751.png', NULL, 'Inactive', NULL, '2024-04-26 06:20:52', '2024-05-27 12:40:57'),
(6, 15, 1, 'Shoes', NULL, '1714984812.png', NULL, 'Inactive', NULL, '2024-04-26 06:21:13', '2024-05-16 14:16:04'),
(53, 0, 4, 'Lips', NULL, NULL, 'test', 'Inactive', 'yes', '2024-04-26 06:34:39', '2024-05-29 23:13:14'),
(54, 0, 4, 'Eyes', NULL, NULL, NULL, 'Inactive', NULL, '2024-04-26 06:34:50', '2024-05-16 15:05:17'),
(55, 0, 4, 'Face', NULL, NULL, NULL, 'Inactive', NULL, '2024-04-26 06:35:00', '2024-05-16 15:05:18'),
(56, 0, 4, 'Makeup &  Accessories', NULL, NULL, NULL, 'Inactive', NULL, '2024-04-26 06:35:12', '2024-05-16 15:05:20'),
(62, 53, 4, 'Liquid Lipsticks', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 14:58:50', '2024-05-16 15:05:21'),
(63, 53, 4, 'lip Gloss', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 14:59:21', '2024-05-16 15:05:24'),
(64, 53, 4, 'lip Liners', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 15:01:32', '2024-05-16 15:05:25'),
(65, 53, 4, 'lip Tint', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 15:01:55', '2024-05-16 15:05:26'),
(66, 53, 4, 'Lip Blam and treatment', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 15:02:45', '2024-05-16 15:05:29'),
(67, 54, 4, 'Eye Shadow', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 15:03:37', '2024-05-16 15:05:30'),
(68, 54, 4, 'Mascaras', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 15:04:23', '2024-05-16 15:05:36'),
(69, 54, 4, 'Eye Brows', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 15:17:55', '2024-05-16 15:05:37'),
(70, 54, 4, 'False Eye Lashyes', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 15:20:45', '2024-05-16 15:05:40'),
(71, 3, 1, 'Baby Tend', NULL, '1715146525.png', NULL, 'Active', NULL, '2024-05-08 15:35:25', '2024-05-08 15:35:25'),
(72, 0, 1, 'Party & birthday', NULL, '1715927962.jpeg', NULL, 'Active', NULL, '2024-05-08 17:24:15', '2024-05-17 16:39:22'),
(73, 0, 1, 'Learning and Education', NULL, '1715163679.png', NULL, 'Active', NULL, '2024-05-08 17:25:05', '2024-05-08 20:21:19'),
(74, 72, 1, 'Ballons', NULL, NULL, NULL, 'Active', NULL, '2024-05-08 17:25:34', '2024-05-17 16:38:50'),
(75, 72, 1, 'Party Packs & sets', NULL, NULL, NULL, 'Active', NULL, '2024-05-08 17:25:59', '2024-05-17 16:38:44'),
(76, 72, 1, 'Cake and Cupcake toppers', NULL, NULL, NULL, 'Active', NULL, '2024-05-08 17:26:40', '2024-05-17 16:38:44'),
(77, 72, 1, 'Candale', NULL, NULL, NULL, 'Active', NULL, '2024-05-08 17:27:00', '2024-05-17 16:38:44'),
(78, 72, 1, 'party tabelware', NULL, NULL, NULL, 'Active', NULL, '2024-05-08 17:27:20', '2024-05-17 16:38:44'),
(79, 73, 1, 'Dairy Journals & Notebooks', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:27:45', '2024-05-16 15:05:50'),
(80, 73, 1, 'Musical Toys', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:28:06', '2024-05-16 15:06:03'),
(81, 73, 1, 'Electric learning Toys', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:30:18', '2024-05-16 15:06:05'),
(82, 73, 1, 'Basic & lifeskill Toys', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:30:40', '2024-05-16 15:06:06'),
(83, 73, 1, 'Shapes and Color', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:31:02', '2024-05-16 15:06:07'),
(84, 73, 1, 'Geology and earth science', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:33:46', '2024-05-16 15:06:09'),
(85, 3, 1, 'Blasterf guns', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:34:29', '2024-05-16 15:06:11'),
(86, 3, 1, 'jercy', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:34:53', '2024-05-16 15:06:16'),
(87, 3, 1, 'Football', NULL, '1715833145.jpg', NULL, 'Active', NULL, '2024-05-08 17:35:18', '2024-05-16 14:19:05'),
(88, 3, 1, 'cricket', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:36:10', '2024-05-16 15:06:15'),
(89, 3, 1, 'Ball', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:36:26', '2024-05-16 15:06:19'),
(90, 3, 1, 'Badminton', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:36:43', '2024-05-16 15:06:21'),
(91, 3, 1, 'Outdor game accossires', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:37:07', '2024-05-16 15:06:29'),
(92, 0, 2, 'Writing & correction', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:42:56', '2024-05-16 15:06:31'),
(93, 0, 2, 'School and Office equipment', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:43:16', '2024-05-16 15:06:32'),
(94, 0, 2, 'Religious iteam', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:43:54', '2024-05-16 15:06:34'),
(95, 92, 2, 'Pens Highliters and Marker', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:44:31', '2024-05-16 15:06:36'),
(96, 92, 2, 'pencils', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:44:49', '2024-05-16 15:06:37'),
(97, 92, 2, 'Erasers', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:45:10', '2024-05-16 15:06:38'),
(98, 92, 2, 'correction liquid and pens', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:45:31', '2024-05-16 15:06:40'),
(99, 92, 2, 'Inks & Refills', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:46:20', '2024-05-16 15:06:41'),
(100, 92, 2, 'Digital pens', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:46:39', '2024-05-16 15:06:42'),
(101, 93, 2, 'Tapes and Dispensers', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:49:52', '2024-05-16 15:06:49'),
(102, 93, 2, 'Geomatric Boxes', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:50:22', '2024-05-16 15:06:50'),
(103, 94, 2, 'toshbi', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:52:25', '2024-05-16 15:06:51'),
(104, 94, 2, 'Ator', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:52:26', '2024-05-16 15:06:52'),
(105, 94, 2, 'Tupi', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 17:52:59', '2024-05-16 15:06:53'),
(106, 0, 3, 'Diapering & potty', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:03:56', '2024-05-16 15:06:53'),
(107, 0, 3, 'Baby personal Care', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:04:21', '2024-05-16 15:06:56'),
(108, 106, 3, 'Dispossible Diapers', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:05:16', '2024-05-16 15:06:55'),
(109, 106, 3, 'Wipes and Refils', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:06:00', '2024-05-16 15:06:57'),
(110, 106, 3, 'Potty sets', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:06:39', '2024-05-16 15:06:59'),
(111, 107, 3, 'Toothbrush & Toothpaste', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:07:24', '2024-05-16 15:07:06'),
(112, 107, 3, 'Lotions & creams', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:08:30', '2024-05-16 15:07:07'),
(113, 107, 3, 'Hooded Towlels', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:08:56', '2024-05-16 15:07:12'),
(114, 107, 3, 'Foaming Soaps', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:09:12', '2024-05-16 15:07:14'),
(115, 107, 3, 'Washcloths', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:09:30', '2024-05-16 15:07:15'),
(116, 107, 3, 'Grooming & Healthcare', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:09:48', '2024-05-16 15:07:17'),
(117, 107, 3, 'Bar Soaps', NULL, '1715163443.png', NULL, 'Active', NULL, '2024-05-08 18:10:03', '2024-05-08 20:17:23'),
(118, 0, 10, 'Accessories', NULL, '1715836060.jpeg', NULL, 'Active', NULL, '2024-05-08 18:12:55', '2024-05-16 15:07:40'),
(119, 0, 10, 'Women Fashion', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:13:20', '2024-05-16 15:07:20'),
(120, 0, 10, 'Men Fashion', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:14:11', '2024-05-16 15:07:22'),
(121, 118, 10, 'Belts', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:14:54', '2024-05-16 15:07:23'),
(122, 118, 10, 'Hats and Caps', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:15:18', '2024-05-16 15:07:51'),
(123, 118, 10, 'Umbrella', NULL, '1715833260.html', NULL, 'Active', NULL, '2024-05-08 18:16:12', '2024-05-16 14:21:00'),
(124, 118, 10, 'Braces & garter belts', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:16:49', '2024-05-16 15:07:59'),
(125, 118, 10, 'Gloves', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:17:33', '2024-05-16 15:08:00'),
(126, 119, 10, 'Traditional wear', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:18:14', '2024-05-16 15:08:01'),
(127, 119, 10, 'Muslim wear', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:18:52', '2024-05-16 15:08:02'),
(128, 119, 10, 'western wear', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:19:27', '2024-05-16 15:08:03'),
(129, 120, 10, 'clothing', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:20:17', '2024-05-16 15:08:04'),
(130, 120, 10, 'shoes', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:20:42', '2024-05-16 15:08:06'),
(131, 120, 10, 'Muslim wears', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:21:07', '2024-05-16 15:08:07'),
(132, 120, 10, 'Sunglass', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:21:33', '2024-05-16 15:08:11'),
(133, 0, 5, 'skin care', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:24:20', '2024-05-16 15:08:14'),
(134, 0, 5, 'Bath & Body', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:25:04', '2024-05-16 15:08:20'),
(135, 0, 5, 'Hair Care', NULL, '1715163606.png', NULL, 'Active', NULL, '2024-05-08 18:25:31', '2024-05-08 20:20:06'),
(136, 0, 5, 'Oral care', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:25:59', '2024-05-16 15:08:22'),
(137, 0, 5, 'Beauty Tools', NULL, '1715832792.jpeg', NULL, 'Active', NULL, '2024-05-08 18:26:51', '2024-05-16 14:13:12'),
(138, 0, 5, 'Fragrances', NULL, '1715163703.png', NULL, 'Active', NULL, '2024-05-08 18:27:20', '2024-05-08 20:21:43'),
(139, 138, 5, 'Attar', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:27:48', '2024-05-16 15:08:23'),
(140, 138, 5, 'Men Fragrances', NULL, '1715832699.jpg', NULL, 'Active', NULL, '2024-05-08 18:28:12', '2024-05-16 14:11:39'),
(141, 138, 5, 'Women Fragrances', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:28:42', '2024-05-16 15:08:25'),
(142, 138, 5, 'Body Spray', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:29:10', '2024-05-16 15:08:38'),
(143, 138, 5, 'Unisex', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:29:43', '2024-05-16 15:08:39'),
(144, 138, 5, 'Body spray & Mist', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:30:07', '2024-05-16 15:08:41'),
(145, 138, 5, 'Perfumed Candies', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:30:35', '2024-05-16 15:08:44'),
(146, 134, 5, 'Body Soaps & Shower', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:31:27', '2024-05-16 15:08:45'),
(147, 134, 5, 'Hand Washes and Sanitary', NULL, '1715163478.png', NULL, 'Active', NULL, '2024-05-08 18:31:59', '2024-05-08 20:17:58'),
(148, 0, 5, 'Bath & Body accossires', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:32:24', '2024-05-16 15:08:46'),
(149, 135, 5, 'Hair Oils', NULL, '1715833429.jpeg', NULL, 'Active', NULL, '2024-05-08 18:33:55', '2024-05-16 14:23:49'),
(150, 135, 5, 'Shampoo', NULL, '1715832756.jpg', NULL, 'Active', NULL, '2024-05-08 18:34:17', '2024-05-16 14:12:36'),
(151, 136, 5, 'Toothbrushes', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:36:03', '2024-05-16 15:08:54'),
(152, 136, 5, 'Teeth Whitening', NULL, NULL, NULL, 'Inactive', NULL, '2024-05-08 18:36:23', '2024-05-16 15:08:55'),
(153, 0, 2, 'calculator', NULL, '1715833043.jpg', NULL, 'Active', NULL, '2024-05-09 03:56:45', '2024-05-16 14:17:23'),
(154, 0, 7, 'chocklet', NULL, '1715836159.jpeg', NULL, 'Active', NULL, '2024-05-15 15:45:08', '2024-05-16 15:09:19'),
(155, 0, 7, 'coffi', NULL, '1715832829.jpg', NULL, 'Active', NULL, '2024-05-16 03:46:10', '2024-05-16 14:13:49'),
(156, 54, 4, 'eye linner', NULL, '1715833484.jpeg', NULL, 'Active', NULL, '2024-05-16 04:14:58', '2024-05-16 14:24:44'),
(157, 0, 7, 'spice', NULL, '1715833393.jpeg', NULL, 'Active', NULL, '2024-05-16 12:19:45', '2024-05-16 14:23:13'),
(158, 0, 17, 'elictric coffee grinder', NULL, '1715837830.jpeg', 'all digital item', 'Active', NULL, '2024-05-16 15:37:10', '2024-05-16 15:55:32'),
(160, 0, 17, 'Camping lamp', NULL, '1715838143.jpeg', 'all digital lamp item', 'Active', NULL, '2024-05-16 15:42:23', '2024-05-16 15:55:56'),
(161, 0, 17, 'Digital Scale', NULL, '1715838480.jpeg', 'ALL DIGITAL SCALE', 'Active', NULL, '2024-05-16 15:48:00', '2024-05-16 15:56:23'),
(162, 0, 13, 'Magic book', NULL, '1715844093.jpeg', 'child magic book', 'Active', NULL, '2024-05-16 17:21:33', '2024-05-16 17:21:33'),
(163, 0, 19, 'birthday celebration pakage', NULL, '1715927163.jpeg', 'happy birthday', 'Active', NULL, '2024-05-17 16:26:03', '2024-05-17 16:26:03'),
(164, 0, 20, 'Test Category', NULL, '1717212479.jpg', NULL, 'Active', 'yes', '2024-05-27 13:39:57', '2024-05-31 21:27:59'),
(165, 164, 20, 'Test SubCategory', NULL, '1717212525.jpg', 'test Sub Category', 'Active', 'yes', '2024-05-27 13:42:00', '2024-05-31 21:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `size_guide` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `support_hour` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `fb_order` varchar(2) DEFAULT '1',
  `youtube_order` varchar(2) DEFAULT '2',
  `insta_order` varchar(2) DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `logo`, `favicon`, `size_guide`, `phone`, `email`, `support_hour`, `facebook`, `youtube`, `instagram`, `fb_order`, `youtube_order`, `insta_order`, `created_at`, `updated_at`) VALUES
(1, '1717051301.jpg', '1717051301.png', '1715847437.jpg', '01909146434', 'shahjalal4645@gmail.com', 'office address 326 west shewrapara,mirpur,dhaka 1216(central mosques of shewrapara,haji sattar ali road) 8am-11pm(everyday) 01909146434 01723354980 shahjalal4645@gmail.com  towiter/f/instragram/youtube', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://www.instagram.com/', '1', '1', '1', NULL, '2024-06-02 23:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bod` date DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `bod`, `company_name`, `country`, `street_address`, `city`, `created_at`, `updated_at`) VALUES
(1, 18, 'demo', NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:21:58', '2024-05-14 12:21:58'),
(2, 19, 'shahjalal', NULL, NULL, NULL, NULL, NULL, '2024-05-14 13:09:21', '2024-05-14 13:09:21'),
(3, 20, 'Md. Mohsin Kabir', NULL, NULL, NULL, NULL, NULL, '2024-05-18 01:59:14', '2024-05-18 01:59:14'),
(4, 23, 'new customer', NULL, NULL, NULL, NULL, NULL, '2024-06-01 21:51:06', '2024-06-01 21:51:06');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_030116_create_brands_table', 2),
(6, '2023_11_27_030454_create_catalogues_table', 3),
(7, '2023_11_27_031320_create_categories_table', 4),
(8, '2023_11_27_080300_create_attributes_table', 5),
(9, '2023_11_27_081510_create_product_variations_table', 6),
(10, '2023_11_27_082505_create_products_table', 7),
(11, '2023_11_27_101532_create_stocks_table', 7),
(12, '2023_11_27_104727_create_units_table', 8),
(13, '2023_11_28_054136_create_customers_table', 9),
(14, '2023_12_02_065417_create_orders_table', 9),
(15, '2023_12_02_065447_create_order_items_table', 9),
(16, '2023_12_02_065511_create_shippings_table', 9),
(17, '2023_12_02_065606_create_transactions_table', 9),
(18, '2023_12_04_023940_create_product_variation_details_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(12, 161, '1716891187_jpeg', '2024-05-28 04:13:07', '2024-05-28 04:13:07'),
(13, 161, '1716891187_jpeg', '2024-05-28 04:13:07', '2024-05-28 04:13:07'),
(14, 161, '1716891187.jpeg', '2024-05-28 04:13:07', '2024-05-28 04:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `subtotal` double NOT NULL,
  `discount` double NOT NULL DEFAULT 0,
  `tax` double NOT NULL DEFAULT 0,
  `shipping` double DEFAULT 0,
  `total` double NOT NULL,
  `status` enum('ordered','delivered','canceled','shipping','confirm') NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `shipping`, `total`, `status`, `is_shipping_different`, `created_at`, `updated_at`) VALUES
(19, 18, 3040, 0, 0, 70, 3110, 'delivered', 0, '2024-05-14 12:23:54', '2024-05-16 13:34:11'),
(20, 2, 4050, 0, 0, 120, 4170, 'delivered', 0, '2024-05-14 12:59:37', '2024-05-16 13:33:35'),
(21, 2, 2100, 0, 0, 120, 2220, 'shipping', 0, '2024-05-14 13:41:11', '2024-05-16 16:19:32'),
(22, 2, 840, 0, 0, 120, 960, 'confirm', 0, '2024-05-14 21:51:30', '2024-05-14 21:52:35'),
(23, 2, 2950, 0, 0, 120, 3070, 'confirm', 0, '2024-05-16 01:32:42', '2024-05-31 13:51:11'),
(24, 2, 500, 0, 0, 120, 620, 'confirm', 0, '2024-05-16 13:40:32', '2024-05-16 13:41:06'),
(25, 2, 2000, 0, 0, 120, 2120, 'canceled', 0, '2024-05-16 15:20:35', '2024-05-16 16:21:48'),
(26, 2, 3000, 0, 0, 120, 3120, 'shipping', 0, '2024-05-16 15:21:54', '2024-05-16 16:19:02'),
(27, 2, 1200, 0, 0, 120, 1320, 'delivered', 0, '2024-05-16 16:10:06', '2024-05-16 16:13:52'),
(28, 2, 800, 0, 0, 70, 870, 'shipping', 0, '2024-05-16 16:31:00', '2024-05-16 16:31:22'),
(29, 2, 3040, 0, 0, 120, 3160, 'shipping', 0, '2024-05-16 16:42:00', '2024-05-16 16:43:01'),
(30, 2, 2400, 0, 0, 120, 2520, 'confirm', 0, '2024-05-17 13:32:56', '2024-05-17 13:34:03'),
(31, 2, 550, 0, 0, 120, 670, 'confirm', 0, '2024-05-17 23:01:56', '2024-05-18 00:29:45'),
(32, 20, 550, 0, 0, 70, 620, 'delivered', 0, '2024-05-18 01:59:52', '2024-05-19 10:12:14'),
(33, 2, 500, 0, 0, 120, 620, 'shipping', 0, '2024-05-18 22:32:34', '2024-05-18 22:33:46'),
(34, 1, 150, 0, 0, NULL, 150, 'ordered', 0, '2024-06-03 00:28:18', '2024-06-03 00:28:18'),
(35, 1, 100, 0, 0, 120, 220, 'ordered', 0, '2024-06-03 00:42:44', '2024-06-03 00:42:44'),
(36, 1, 1200, 0, 0, 120, 1320, 'ordered', 0, '2024-06-03 00:47:53', '2024-06-03 00:47:53'),
(37, 1, 1200, 0, 0, NULL, 1200, 'ordered', 0, '2024-06-03 00:54:14', '2024-06-03 00:54:14'),
(38, 2, 700, 0, 0, 70, 770, 'ordered', 0, '2024-06-11 12:57:59', '2024-06-11 12:57:59'),
(39, 2, 700, 0, 0, 120, 820, 'ordered', 0, '2024-06-11 13:04:24', '2024-06-11 13:04:24'),
(48, 23, 1400, 0, 0, 120, 1520, 'ordered', 0, '2024-06-11 22:00:29', '2024-06-11 22:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_variations_id` bigint(20) NOT NULL DEFAULT 0,
  `order_id` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `product_variations_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(14, 77, 0, 19, 1520, 2, '2024-05-14 12:23:54', '2024-05-14 12:23:54'),
(15, 115, 0, 20, 550, 3, '2024-05-14 12:59:37', '2024-05-14 12:59:37'),
(16, 116, 0, 20, 950, 2, '2024-05-14 12:59:37', '2024-05-14 12:59:37'),
(17, 44, 0, 20, 500, 1, '2024-05-14 12:59:37', '2024-05-14 12:59:37'),
(18, 44, 0, 21, 500, 1, '2024-05-14 13:41:11', '2024-05-14 13:41:11'),
(19, 80, 0, 21, 800, 2, '2024-05-14 13:41:11', '2024-05-14 13:41:11'),
(20, 117, 0, 22, 280, 3, '2024-05-14 21:51:30', '2024-05-14 21:51:30'),
(21, 115, 0, 23, 550, 1, '2024-05-16 01:32:42', '2024-05-16 01:32:42'),
(22, 84, 0, 23, 900, 1, '2024-05-16 01:32:42', '2024-05-16 01:32:42'),
(23, 78, 0, 23, 1500, 1, '2024-05-16 01:32:42', '2024-05-16 01:32:42'),
(24, 147, 0, 24, 250, 2, '2024-05-16 13:40:32', '2024-05-16 13:40:32'),
(25, 151, 0, 25, 1000, 2, '2024-05-16 15:20:35', '2024-05-16 15:20:35'),
(26, 152, 0, 26, 1500, 2, '2024-05-16 15:21:54', '2024-05-16 15:21:54'),
(27, 87, 0, 27, 1200, 1, '2024-05-16 16:10:06', '2024-05-16 16:10:06'),
(28, 75, 2, 28, 800, 1, '2024-05-16 16:31:00', '2024-05-16 16:31:00'),
(29, 77, 0, 29, 1520, 2, '2024-05-16 16:42:00', '2024-05-16 16:42:00'),
(30, 152, 0, 30, 1200, 2, '2024-05-17 13:32:56', '2024-05-17 13:32:56'),
(31, 96, 0, 31, 550, 1, '2024-05-17 23:01:56', '2024-05-17 23:01:56'),
(32, 96, 0, 32, 550, 1, '2024-05-18 01:59:52', '2024-05-18 01:59:52'),
(33, 44, 0, 33, 500, 1, '2024-05-18 22:32:34', '2024-05-18 22:32:34'),
(34, 161, 0, 34, 150, 1, '2024-06-03 00:28:18', '2024-06-03 00:28:18'),
(35, 157, 0, 35, 100, 1, '2024-06-03 00:42:44', '2024-06-03 00:42:44'),
(36, 156, 0, 36, 1200, 1, '2024-06-03 00:47:53', '2024-06-03 00:47:53'),
(37, 156, 0, 37, 1200, 1, '2024-06-03 00:54:14', '2024-06-03 00:54:14'),
(38, 75, 0, 38, 700, 1, '2024-06-11 12:57:59', '2024-06-11 12:57:59'),
(39, 75, 0, 39, 700, 1, '2024-06-11 13:04:24', '2024-06-11 13:04:24'),
(40, 75, 4, 48, 700, 1, '2024-06-11 22:00:29', '2024-06-11 22:00:29'),
(41, 75, 5, 48, 700, 1, '2024-06-11 22:00:29', '2024-06-11 22:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', '<p>Friend\'s Corporation International is a packaging products manufacturing company in Bangladesh. We manufacture products in our own 4 factories. We mainly serve the needs of customers through online. We are committed to building customer relationships with trust.</p>', 'Active', '2024-06-09 02:04:15', '2024-06-09 04:13:12'),
(2, 'DELIVERY INFORMATION', '<p>We deliver goods all over Bangladesh through Courier / Transport. Courier fee to be borne by buyer. And use the product price payment system through the condition.</p>', 'Active', '2024-06-09 02:05:29', '2024-06-09 02:05:29'),
(3, 'CONTACT US', NULL, 'Active', '2024-06-09 02:06:06', '2024-06-09 02:06:06'),
(4, 'PRIVACY POLICY', NULL, 'Active', '2024-06-09 02:06:40', '2024-06-09 02:06:40'),
(5, 'EXCHANGE AND RETURN POLICY', NULL, 'Active', '2024-06-09 02:10:21', '2024-06-09 02:10:21');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) NOT NULL,
  `catalogue_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `type` bigint(20) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `has_stock` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `discount_type` enum('Fixed','Percentage','Not_Apply') NOT NULL DEFAULT 'Not_Apply',
  `discount_amount` double NOT NULL DEFAULT 0,
  `cost` double NOT NULL,
  `mrp` double NOT NULL,
  `alert_stock` int(11) NOT NULL DEFAULT 0,
  `view_section` bigint(20) DEFAULT NULL,
  `size_guide` varchar(255) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `description` longtext DEFAULT NULL,
  `details_description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `unit_id`, `catalogue_id`, `category_id`, `brand_id`, `title`, `slug`, `code`, `color`, `type`, `weight`, `has_stock`, `discount_type`, `discount_amount`, `cost`, `mrp`, `alert_stock`, `view_section`, `size_guide`, `tags`, `status`, `description`, `details_description`, `image`, `created_at`, `updated_at`) VALUES
(44, 1, 20, 164, 1, 'Miss & Mrs Ultrafine Dipliner Eye Liner', 'miss-mrs-ultrafine-dipliner-eye-liner', 'eye-001', NULL, 0, '100gm', 'Yes', 'Not_Apply', 0, 200, 500, 50, 1, NULL, NULL, 'Active', NULL, '<p>Product Type: Sneakers Converse Color: Black and White Material: Soft Fabric with Rubber Sole Gender: Men Weight: Very Light and Durable Men footwear is intended to protect and comfort the human foot while the wearer is doing various activities. Footwear is also used as an item of decoration and fashion. The design of footwear has varied enormously through time and from culture to culture, with appearance originally being tied to function. Additionally, fashion has often dictated many design elements, such as whether shoes have very high heels or flat ones.</p>', '1717328028.jpg', '2024-01-20 07:31:05', '2024-06-02 05:36:38'),
(75, 1, 1, 71, 1, 'Baby Beautiful Tent Play House', NULL, 'bbrph', 'Multicolor', 0, '1 kg', 'Yes', 'Fixed', 100, 500, 800, 10, 3, NULL, NULL, 'Active', NULL, '<h2>Product details of Baby Beautiful Tent Play House With 50 pcs plastic balls- Multi Color</h2><ul><li>• Baby Beautiful Tent Play House with 50 pcs plastic balls• Multi Color design for a fun and vibrant playtime• Perfect for indoor and outdoor play• Includes 50 plastic balls for added entertainment• Easy to set up and take down• Ideal for children\'s parties and playdates• Encourages imaginative and active play• Durable and safe for children to use• Enhances hand-eye coordination and motor skills• From the Toys &amp; Games category, under Play Tents &amp; Tunnels</li><li>Baby Beautiful Tent Play House With 50 pcs plastic balls- Multi Color</li><li>Product Type: Toy tent</li><li>Good quality product</li><li>Easy to use</li><li>The perfect den for every little adventurer</li><li>Great fun for indoors and outdoors</li><li>Compact size can take it anywhere</li><li>There have some pictures of design.</li><li>Please Note: Colour &amp; design may be changed according to product availability.</li></ul>', '1715147370.png', '2024-05-08 15:49:30', '2024-05-27 23:20:42'),
(77, 1, 1, 82, 1, 'Baby Piano Gym Mat Useful For Fitness Baby Play Mat', NULL, 'bpm-001', 'same as product', 0, '1kg', 'Yes', 'Not_Apply', 0, 1200, 1520, 20, 1, NULL, NULL, 'Active', NULL, '<ul><li>Baby Piano Gym Mat Useful For Fitness Baby Play Mat</li><li>Product: Baby Piano Gym Mat, Baby Gym Mat, Baby Play Mat</li><li>Material: Plastic</li><li>Product size: 76*56*43</li><li>Cloth: Washable</li><li>Baby Piano Gym Mat Useful For Fitness Baby Play Mat</li></ul><p>Product: Baby Piano Gym Mat, Baby Gym Mat, Baby Play Mat</p><p>Material: Plastic</p><p>Product size: 76*56*43</p><p>Cloth: Washable</p>', '1715159747.png', '2024-05-08 19:15:47', '2024-05-08 19:15:47'),
(78, 1, 1, 83, 1, 'Puzzle Mat Children Alphabet Numbers Puzzles', NULL, '13900', 'same ase product', 0, '500 gm', 'Yes', 'Not_Apply', 0, 1250, 1500, 20, 1, NULL, NULL, 'Active', NULL, '<h2>Product details of 36Pcs Puzzle Mat Children Alphabet Numbers Puzzles Crawling Foam Floor Mat Education Toy Interactive Toy, Brain Teaser, Kids\'</h2><ul><li>Specifications:</li><li>36 multicolored foam tiles, interlocking puzzle mat with removable alphabets letters and numbers.</li><li>Made of high density foam, this mat is safe, soft and durable. Suitable for playrooms, classrooms, gyms.</li><li>Ideal tool to teach kids alphabet and numbers, encourages the development of children\'s motor skills, hand and eye coordination, logic, and visual sensory development.</li><li>Type: Puzzle Mat</li><li>Material: Foam</li><li>Quantity: 36Pcs</li><li>Features: Educational Toy, Colorful, Alphabet Numbers Learning, Soft, Interlocking</li><li>Length: 5cm/1.97\", 6cm/2.36\", 12cm/4.72\" (Approx.)</li><li>Width: 5cm/1.97\", 6cm/2.36\", 12cm/4.72\" (Approx.)</li><li>Notes:</li><li>Due to the light and screen setting difference, the item\'s color may be slightly different from the pictures.</li><li>Please allow slight dimension difference due to different manual measurement.</li><li>Package Includes:</li><li>36 x Puzzle Mats</li></ul>', '1715159986.png', '2024-05-08 19:19:46', '2024-05-08 19:27:05'),
(79, 1, 1, 91, 1, 'Baby Large Play Mat - Multicolor', NULL, 'bl-p-001', 'Multicolor', 0, '100gm', 'Yes', 'Not_Apply', 0, 950, 1200, 20, 1, NULL, NULL, 'Active', NULL, NULL, '1715161401.png', '2024-05-08 19:43:21', '2024-05-08 23:28:35'),
(80, 1, 1, 82, 1, 'bottomTagUrl Magnet Chess Gold & Silver', NULL, 'Mcg', 'same as product', 0, '100gm', 'Yes', 'Not_Apply', 0, 500, 800, 20, 1, NULL, NULL, 'Active', NULL, NULL, '1715161580.png', '2024-05-08 19:46:20', '2024-05-08 19:46:20'),
(81, 1, 5, 134, 1, 'Aveeno Baby Daily Care Baby Moisturising Lotion (150ml)', NULL, 'abrar 002', 'same as color', 0, '150ml', 'Yes', 'Not_Apply', 0, 750, 880, 100, 3, NULL, NULL, 'Active', NULL, '<p>Aveeno Baby daily care baby moisturising lotion moisturizes for 24 hours and soothes baby skin, leaving it soft, smooth and healthy looking. For daily use. It feels nourishing and non-greasy and provides fast relief for very dry skin. Suitable for body and face. With a soft fragrance. Formulated to minimize the risk of allergies. Fast absorption. Paediatrician tested.</p><ul><li>With a soft fragrance</li><li>Fast absorption</li><li>Formulated to minimise the risk of allergies</li><li>Paediatrician tested</li></ul>', '1715161840.png', '2024-05-08 19:50:40', '2024-05-08 23:34:14'),
(82, 1, 4, 53, 1, 'MIXIU SCRU Cream Lips Scrub, 11.5g', NULL, '0003', 'same as image', 0, '11.5g', 'Yes', 'Not_Apply', 0, 85, 150, 23, 3, NULL, NULL, 'Active', NULL, '<h2>Product details of MIXIU SCRU Cream Lips Scrub, 11.5g</h2><ul><li>SCRU Cream Lips Scrub, 11.5g</li><li>Mixiu Scru Cream for lip use</li><li>Cigarette black spots will remove from the lips.</li><li>It is a lip scrubber. It has to be massaged lightly on the lips.</li><li>It is very soft. and changing is seen with the first use.</li><li>One full use is enough. Even if you leave the use, it will remain pink.</li><li>Dirt will be removed.</li><li>Gel type formula</li></ul>', '1715161952.jpg', '2024-05-08 19:52:32', '2024-05-08 19:52:32'),
(83, 1, 5, 140, 1, 'davidoff cool water', NULL, 'ifp', 'same as product', 0, '50 gm', 'Yes', 'Not_Apply', 0, 3300, 3600, 20, 3, NULL, NULL, 'Active', NULL, '<h2>Product details of Davidoff Cool Water EDT 125 ml for men - Body Spray For Men</h2><ul><li>Brand: DAVIDOFF</li><li>Line: Cool Water</li><li>Made In: France</li><li>Size: 125 ml</li><li>For: Men</li><li>Fragrance:Top notes: mint and green nuances, lavender, coriander and rosemary, Heart notes: geranium, neroli, jasmine and sandalwood, Base notes: cedarwood, musk, amber and tobacco.</li><li>Fragrance Type: EDT</li><li>#BodySprayforMen</li></ul><p>&nbsp;</p><h2>Specifications of Davidoff Cool Water EDT 125 ml for men - Body Spray For Men</h2><ul><li>Brand</li></ul><p>Davidoff</p><ul><li>SKU</li></ul><p>133500336_BD-1055208677</p><ul><li>Country of Origin</li></ul><p>Not Specified</p><ul><li>Capacity</li></ul><p>125 ml</p><ul><li>Pack Size</li></ul><p>1</p><p>What’s in the box</p><p>Davidoff Cool Water EDT 125 ml for men - Body Spray For Men</p>', '1715162214.png', '2024-05-08 19:56:54', '2024-05-14 23:23:12'),
(84, 1, 5, 140, 1, 'One man show perfume', NULL, 'idrp', 'sae as product', 0, '100gm', 'Yes', 'Not_Apply', 0, 500, 900, 20, 3, NULL, NULL, 'Active', NULL, NULL, '1715162331.png', '2024-05-08 19:58:51', '2024-05-14 23:20:59'),
(85, 1, 1, 79, 1, 'tab digital hand writting', NULL, 'spl-001', 'same as product', 0, '100gm', 'Yes', 'Not_Apply', 0, 400, 500, 20, 6, NULL, NULL, 'Active', NULL, NULL, '1715162760.png', '2024-05-08 20:06:00', '2024-05-14 23:17:48'),
(86, 1, 1, 83, 1, 'Green Laser Pointer Pen Light', NULL, 'glp', 'same as product', 0, '100gm', 'Yes', 'Not_Apply', 0, 80, 550, 20, 6, NULL, NULL, 'Active', NULL, NULL, '1715162924.png', '2024-05-08 20:08:44', '2024-05-16 12:02:18'),
(87, 1, 2, 93, 1, 'lunch box', NULL, 'sbs-001', 'Same as image', 0, NULL, 'Yes', 'Not_Apply', 50, 300, 1200, 20, 6, NULL, NULL, 'Active', NULL, NULL, '1715163087.png', '2024-05-08 20:11:27', '2024-05-16 16:32:55'),
(88, 1, 2, 93, 1, 'Table Clock - Loud Alarm', NULL, 'twbl', 'Same as image', 0, '100gm', 'Yes', 'Not_Apply', 0, 300, 550, 20, 6, NULL, NULL, 'Active', NULL, NULL, '1715163237.png', '2024-05-08 20:13:57', '2024-05-16 12:03:07'),
(89, 2, 1, 83, 1, 'Super Light Clay', NULL, '0004', 'same as image', 0, '10g', 'Yes', 'Not_Apply', 0, 50, 100, 10, 4, NULL, NULL, 'Active', NULL, '<p>✅12 Colors Soft Super Light Clay Modeling Air Dry Clay For DIY Handmade Toys</p><p>✅made in chaina</p><p>✅cash on delivery</p>', '1715692345.jpeg', '2024-05-08 20:26:01', '2024-05-14 23:13:21'),
(90, 2, 1, 91, 1, 'ALLOY CAR MODEL', NULL, '0008', 'SAME AS IMAGE', 0, '150G', 'Yes', 'Not_Apply', 0, 430, 950, 10, 4, NULL, NULL, 'Active', NULL, '<p>✅ALLOY CAR MODEL</p><p>▶Made in chaina</p><p>▶age-3+</p><p>▶1box-6pcs</p><p>✅cash on delivery</p>', '1715691134.jpeg', '2024-05-08 21:12:10', '2024-05-14 22:52:14'),
(93, 1, 1, 80, 1, 'Talking and Singing Cactus Plush Toys', NULL, '000009', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 340, 450, 30, 4, NULL, NULL, 'Active', NULL, '<h2>Product Summary &amp; Specification</h2><p>Summary:</p><p><strong>Product Description:</strong><br><strong>Your Organizer for Important Document</strong><br>The Talking and Singing Cactus Toys - Non-Brand Dancing Cactus, a whimsical and entertaining plush companion that brings the joy of music and dance to your child\'s playtime. Designed with care and innovation, this delightful cactus is more than just a toy; it\'s a magical blend of music, motion, and endless fun.<br><strong>Enchanting Musical Repertoire</strong><br>With a repertoire of 120 songs, the Non-Brand Dancing Cactus transforms any playtime into a musical adventure. From Talking and Singing Cactus Plush Toys classic tunes to catchy melodies, this plush companion serenades your child with an array of delightful music, creating an enchanting atmosphere of joy.<br><strong>Extended Playtime Enjoyment</strong><br>Equipped with a rechargeable battery, the Dancing Cactus ensures extended playtime enjoyment for your child. The Talking Singing Cactus Toys 120 song built-in battery offers up to 1 hour of uninterrupted musical and dancing fun, providing a delightful experience that captivates and engages.<br><strong>Kid-Friendly Design</strong><br>Crafted with the safety and enjoyment of young children in mind, the Dancing Cactus is recommended for ages 6 and up. The plush material ensures a soft and huggable touch, making it an ideal companion for bedtime or daytime play. Say goodbye to long waits for playtime to resume. The Dancing Cactus features a quick and efficient 3-hour charging time, ensuring that the excitement never wanes. Once charged, your child\'s musical companion is ready to dance its way into their heart.<br><strong>Vibrant and Playful Aesthetics</strong><br>The Dancing Cactus comes in a vibrant and playful design, adding a burst of color and whimsy to any play space. Its cheerful appearance and lively dance moves make it an instant favorite among kids, sparking their imagination and creativity. Weighing only 7.2 ounces, the Dancing Cactus is compact and lightweight, making it easy for children to carry and interact with. Its dimensions of 12.3 x 4.7 x 4.3 inches provide the perfect balance of portability and playfulness.<br><strong>Durable Plush Construction</strong><br>Built to withstand the energy and enthusiasm of young children, the Dancing Cactus features a durable plush construction. Its quality craftsmanship ensures that it can withstand the rigors of playtime, becoming a lasting companion in your child\'s adventures.<br><strong>Rechargeable Talking and Singing Cactus Toys price in BD</strong><br>The Automatic Talking Singing Cactus Toys price in Bangladesh at Rokomari.com and the products combine style. Identified by the ASIN B08THR8MCP, the Dancing Cactus is easily searchable for quick and convenient online ordering. Bring the magic of music and dance to your child\'s world with this charming and interactive plush companion. The Non-Brand Dancing Cactus - where plush meets playfulness and music meets motion. Elevate your child\'s playtime with this enchanting companion that transforms any moment into a dance of joy. Order now and let the music play</p><figure class=\"table\"><table><tbody><tr><td>Specification:</td><td>&nbsp;</td></tr><tr><td>Title:</td><td>Talking and Singing Cactus Plush Toys</td></tr><tr><td>Brand:</td><td><a href=\"https://www.rokomari.com/brand/9152\">Non-Brand</a></td></tr><tr><td>Product Type</td><td>Toy</td></tr><tr><td>Material</td><td>‎Plush</td></tr><tr><td>Colour</td><td>Multicolor</td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Age</td><td>0 Months+</td></tr><tr><td>Dimensions</td><td>12.3 x 4.7 x 4.3 inches (31.2 x 11.9 x 10.9 cm)</td></tr><tr><td>Battery</td><td>3 AA batteries</td></tr><tr><td>Product Weight</td><td>204.12 grams</td></tr><tr><td>Power Sources</td><td>Rechargeable Battery</td></tr><tr><td>Music System</td><td>Yes</td></tr><tr><td>Number of Music</td><td>120 Song</td></tr></tbody></table></figure><p>Show More</p><p><a href=\"https://www.rokomari.com/book/category/2865?ref=dp_ct2865\">Learning &amp; Educational Toys</a><a href=\"https://www.rokomari.com/book/category/2873?ref=dp_ct2873\">Puzzle &amp; Cubes</a><a href=\"https://www.rokomari.com/book/category/3060?ref=dp_ct3060\">Baby &amp; Toddler Toys</a><a href=\"https://www.rokomari.com/book/category/3048?ref=dp_ct3048\">Novelty &amp; Gag Toys</a><a href=\"https://www.rokomari.com/book/category/3510?ref=dp_ct3510\">Table Game</a><a href=\"https://www.rokomari.com/book/category/2868?ref=dp_ct2868\">Soft Toys</a><a href=\"https://www.rokomari.com/book/category/2869?ref=dp_ct2869\">Sports &amp; Outdoor Toys</a><a href=\"https://www.rokomari.com/book/category/2872?ref=dp_ct2872\">Board Games</a></p><p><br>&nbsp;</p>', '1715169322.jpeg', '2024-05-08 21:55:22', '2024-05-08 21:55:22'),
(94, 1, 5, 133, 1, 'Rohto Skin Aqua Super Moisture Gel Gold Sunscreen', NULL, 'oooo10', 'same as imge', 0, '110g', 'Yes', 'Not_Apply', 0, 1350, 1480, 10, 4, NULL, NULL, 'Active', NULL, '<ul><li>Net contents: 110g</li><li>UV protection: SPF50+/PA++++</li><li>For all skin types and all parts of your body</li><li>Discontinue use when you feel a skin irritation.Rinse thoroughly when the gel gets into your eyes.</li><li>Made in Japan</li></ul>', '1715170022.jpeg', '2024-05-08 22:07:02', '2024-05-15 15:13:33'),
(95, 1, 10, 123, 1, 'Sankar\'s Black Umbrella', NULL, '000011', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 480, 650, 5, 3, NULL, NULL, 'Active', NULL, '<p><br>&nbsp;</p><h2>✅Sankar\'s Black Umbrella</h2><p>✅made in china</p><p><br>&nbsp;</p><h2>✅cash on delivery</h2>', '1715692207.jpeg', '2024-05-08 22:18:58', '2024-05-14 23:10:07'),
(96, 1, 10, 123, 1, 'BMW Auto Lock Umbrella', NULL, '00013', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 450, 550, 10, 3, NULL, NULL, 'Active', NULL, '<ul><li>12.5-inch size</li><li>Auto-lock system&nbsp;</li><li>Main material Polyester</li><li>Number of panels ribs 10</li><li>4-color Umbrella available</li></ul>', '1715750133.jpeg', '2024-05-08 22:32:25', '2024-05-15 15:16:38'),
(97, 1, 10, 123, 1, '7\" Mini Folding Capsule Umbrella', NULL, '00000111', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 265, 380, 10, 3, NULL, NULL, 'Active', NULL, '<ul><li>Product Type: Capsule Umbrella</li><li>Fabric Material: Tapeta &amp; rubber mixed Fabric</li><li>The cute umbrella is ultra light-weight and small</li><li>Can be carried with ease wherever you go</li><li>Ultra small, the cool umbrella is Mini size</li><li>Foldable to 18 cm / 7 inches</li><li>Compact design can easily be stored in your bag or pocket</li><li>Flexible fibreglass and 6-rib of aluminium alloy design</li><li>Frosted rubberized handle brings you a lasting sense of comfortable grip</li><li>Fully blocks heat and harsh UV rays with the intensive black vinyl coating</li><li>Made in: China</li><li>Safety from Rain, Sunshine</li><li>Use: Adult use</li></ul>', '1715744843.jpeg', '2024-05-08 22:38:53', '2024-05-15 13:47:23'),
(98, 1, 10, 123, 1, 'Maytto Mini Windproof Vented Umbrella', NULL, '0000015', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 750, 900, 20, 3, NULL, NULL, 'Active', NULL, '<ul><li>Windproof</li><li>Practical and durable</li><li>Made of anti-splash umbrella cloth</li><li>Black plastic coating material</li><li>Effectively UV shielding</li><li>Ergonomic handle design that provides comfort and stability</li><li>Flat shape</li><li>Durable in use</li></ul>', '1715745057.jpeg', '2024-05-08 22:47:05', '2024-05-15 13:50:57'),
(99, 1, 10, 123, 1, 'Double Layer Windproof Reverse Folding C-Hook', NULL, '00014', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 650, 820, 10, 3, NULL, NULL, 'Active', NULL, '<ul><li>8 Ribs&nbsp;</li><li>Double-layer</li><li>The C-hook handle gives more convenience to holding the umbrella</li><li>3 people can use it together</li></ul>', '1715745300.jpeg', '2024-05-08 23:00:54', '2024-05-15 13:56:18'),
(100, 1, 10, 123, 1, 'Transparent 3-Fold Imported Umbrella', NULL, '000015', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 500, 600, 20, 4, NULL, NULL, 'Active', NULL, '<ul><li>Pattern: Transparent</li><li>Material: Plastic</li><li>Easy to Carry</li><li>System : 3 Folds</li><li>Color: Pu</li></ul>', '1715173540.jpg', '2024-05-08 23:05:40', '2024-05-08 23:05:40'),
(101, 1, 10, 123, 1, 'Lady\'s Capsule Umbrella', NULL, '00018', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 450, 550, 10, 3, NULL, NULL, 'Active', NULL, '<ul><li>Suitable for girls</li><li>Capsule shape umbrella holding cover</li><li>Size: 7 inches</li></ul>', '1715745543.jpeg', '2024-05-08 23:09:33', '2024-05-15 13:59:03'),
(102, 1, 10, 123, 1, 'Ladies  Print Umbrella', NULL, '0000110', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 350, 450, 10, 3, NULL, NULL, 'Active', NULL, '<ul><li>Atlas World Class Heavy Deauty Umbrella.</li><li>Black paint iron frame, anti-rust, more solid, non-slip handle.</li><li>Umbrella with a black coating, good sunscreen, heat insulation and cooling..</li><li>Flexible operation, lightweight, easy to carry on.</li><li>Good for photography, theatrical performances, daily use or other special occasions.</li><li>Metal ribs make this umbrella more sturdy and durable.</li><li>It is smooth to open and close, comfortable to hold.</li><li>Colorful, exciting patterns make our umbrellas super stylish and fun.</li><li>Great for rainy days, this umbrella will keep little ones dry on a wet day.</li></ul>', '1715174289.webp', '2024-05-08 23:18:09', '2024-05-15 14:01:52'),
(104, 1, 1, 3, 1, 'Drone D74', NULL, 'abrarmart 00222', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 2050, 2300, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Title:</td><td>Drone D74 2.4 Ghz Without Camera (drone_d74_ran)</td></tr><tr><td>Brand:</td><td><a href=\"https://www.rokomari.com/brand/9152\">Non-Brand</a></td></tr><tr><td>Working Distance</td><td>80 -100 m</td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Flying Time</td><td>20 Minutes</td></tr><tr><td>Colour</td><td>White</td></tr><tr><td>Dimensions</td><td>24 x 24 x 13cm</td></tr><tr><td>Model</td><td>D74</td></tr><tr><td>Battery</td><td>3 x 1.5V AA</td></tr><tr><td>Frequency</td><td>2.4 GHz</td></tr><tr><td>Remote Control</td><td>Yes</td></tr><tr><td>Charging Time</td><td>50 Minite</td></tr><tr><td>Product Weight</td><td>400 gm</td></tr><tr><td>Remote Control Distance</td><td>300 meter</td></tr><tr><td>Auto Return Button</td><td>Yes</td></tr><tr><td>Package Includes</td><td>1 x YDJIA D74 Drone<br>1 x Remote Control<br>1 x USB Charger<br>1 x Rechargeable Battery<br>1 x Extra Propellers<br>1 x Propeller Protector<br>1 x Screwdriver<br>1 x Manual</td></tr></tbody></table></figure>', '1715178439.jpg', '2024-05-09 00:27:19', '2024-05-15 14:06:57'),
(109, 1, 2, 153, 1, 'Casio Scientific Calculator', NULL, 'abrarmart 43', 'same as imge', 0, '500g', 'Yes', 'Not_Apply', 0, 2000, 2200, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Title:</td><td>Casio Scientific Calculator (2nd edition) Black</td></tr><tr><td>Brand:</td><td><a href=\"https://www.rokomari.com/brand/6911\">CASIO</a></td></tr><tr><td>Warranty Period</td><td>3 Years</td></tr><tr><td>Colour</td><td>Black</td></tr><tr><td>Country of Origin</td><td>Japan</td></tr><tr><td>Digit</td><td>10 + 2 Digits</td></tr><tr><td>Features</td><td>9 variables, Table function, slide-on hard case,</td></tr><tr><td>Dimensions</td><td>161.5 × 77 × 11.1mm.</td></tr><tr><td>Model</td><td>fx-991ES Plus-2.</td></tr><tr><td>Display Type</td><td>LCD Display.</td></tr><tr><td>Power Type</td><td>Solar &amp; Battery.</td></tr><tr><td>Material</td><td>Plastic.</td></tr><tr><td>Battery Type</td><td>Solar Powered.</td></tr><tr><td>Product Weight</td><td>95 Grams.</td></tr><tr><td>Number of Functions</td><td>More.</td></tr><tr><td>Display Size</td><td>Large.</td></tr><tr><td>Country of Assemble</td><td>Thailand.</td></tr></tbody></table></figure><p>Show Less</p><p><a href=\"https://www.rokomari.com/book/category/2712?ref=dp_ct2712\">Desk Calculator</a></p><p><br>&nbsp;</p>', '1715191186.jpg', '2024-05-09 03:59:46', '2024-05-15 14:12:53'),
(110, 1, 2, 153, 1, 'Deli Calculator - EM889', NULL, 'abrarmart 44', 'same as imge', 0, '300g', 'Yes', 'Not_Apply', 0, 400, 500, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Specification:</td></tr><tr><td>Title:</td></tr><tr><td>Brand:</td></tr><tr><td>Colour</td></tr><tr><td>Country of Origin</td></tr><tr><td>Digit</td></tr><tr><td>Features</td></tr><tr><td>Dimensions</td></tr><tr><td>Model</td></tr><tr><td>Display Type</td></tr><tr><td>Power Type</td></tr><tr><td>Material</td></tr><tr><td>Battery Type</td></tr><tr><td>Product Weight</td></tr><tr><td>Number of Functions</td></tr></tbody></table></figure>', '1715191466.jpg', '2024-05-09 04:04:26', '2024-05-15 14:14:16'),
(111, 1, 2, 153, 1, 'Deli Scientific Calculator', NULL, 'abrarmart 0045', 'same as imge', 0, '300g', 'Yes', 'Not_Apply', 0, 400, 450, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Specification:</td></tr><tr><td>Title:</td></tr><tr><td>Brand:</td></tr><tr><td>Warranty Period</td></tr><tr><td>Colour</td></tr><tr><td>Digit</td></tr><tr><td>Features</td></tr><tr><td>Dimensions</td></tr><tr><td>Model</td></tr><tr><td>Display Type</td></tr><tr><td>Power Type</td></tr><tr><td>Material</td></tr><tr><td>Battery Type</td></tr><tr><td>Product Weight</td></tr><tr><td>Number of Functions</td></tr><tr><td>Display Size</td></tr></tbody></table></figure>', '1715746766.png', '2024-05-09 04:10:27', '2024-05-15 14:20:08'),
(112, 1, 10, 119, 1, 'Casio Silver Case Black', NULL, 'abrarmart 0047', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 2200, 2400, 1, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Specification:</td><td>&nbsp;</td></tr><tr><td>Title:</td><td>Casio Silver Case Black Leather Band Women\'s Watch</td></tr><tr><td>Brand:</td><td><a href=\"https://www.rokomari.com/brand/13366\">CASIO Watch</a></td></tr><tr><td>Warranty Period</td><td>3 Years</td></tr><tr><td>Colour</td><td>Silver and Black</td></tr><tr><td>Country of Origin</td><td>Japan</td></tr><tr><td>Waterproof</td><td>Yes</td></tr><tr><td>Watch Type</td><td>Analog</td></tr><tr><td>Features</td><td>Attractive &amp; Unique Design<br>Long lasting<br>Made of premium material for long lasting use.<br>Water resistance 30 metre,</td></tr><tr><td>Battery Life</td><td>3 years on SR626SW</td></tr><tr><td>Dimensions</td><td>10cm x 6cm x 10cm</td></tr><tr><td>Model</td><td>LTP-V005L-7AUDF</td></tr><tr><td>Display Type</td><td>Analog</td></tr><tr><td>Battery Type</td><td>Lithium batteries.</td></tr><tr><td>LED lighting</td><td>NO</td></tr><tr><td>Product Weight</td><td>24 Grams</td></tr><tr><td>Shape</td><td>Round</td></tr><tr><td>Glass Material</td><td>Mineral Glass</td></tr><tr><td>Case Material</td><td>Stainless Steel</td></tr><tr><td>Clasp</td><td>Buckle</td></tr><tr><td>Case Thickness</td><td>11 mm</td></tr><tr><td>Accuracy</td><td>±20 seconds per month</td></tr><tr><td>Band Width</td><td>12 Millimeters</td></tr><tr><td>Dial Colour</td><td>White</td></tr><tr><td>Case Diameter</td><td>28 millimeters</td></tr><tr><td>Belt Material</td><td>Leather</td></tr><tr><td>Belt Colour</td><td>Black</td></tr></tbody></table></figure><p>Show Less</p><p><a href=\"https://www.rokomari.com/book/category/6207?ref=dp_ct6207\">Unisex Watches</a><a href=\"https://www.rokomari.com/book/category/6209?ref=dp_ct6209\">Men Watches</a><a href=\"https://www.rokomari.com/book/category/6210?ref=dp_ct6210\">Kids Watches</a><a href=\"https://www.rokomari.com/book/category/6216?ref=dp_ct6216\">Casual</a><a href=\"https://www.rokomari.com/book/category/6217?ref=dp_ct6217\">Business</a><a href=\"https://www.rokomari.com/book/category/6218?ref=dp_ct6218\">Fashion</a><a href=\"https://www.rokomari.com/book/category/6219?ref=dp_ct6219\">Sports</a><a href=\"https://www.rokomari.com/book/category/6220?ref=dp_ct6220\">Accessories</a></p><p><br>&nbsp;</p>', '1715192160.jpg', '2024-05-09 04:16:00', '2024-05-15 14:52:34'),
(113, 1, 10, 120, 1, 'Casio Digital Watch', NULL, 'abrarmart0047', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 2200, 2400, 1, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Specification:</td><td>&nbsp;</td></tr><tr><td>Title:</td><td>Casio Digital Watch</td></tr><tr><td>Brand:</td><td><a href=\"https://www.rokomari.com/brand/13366\">CASIO Watch</a></td></tr><tr><td>Warranty Period</td><td>3 Years</td></tr><tr><td>Colour</td><td>Black</td></tr><tr><td>Country of Origin</td><td>Japan</td></tr><tr><td>Waterproof</td><td>Yes</td></tr><tr><td>Watch Type</td><td>Digital</td></tr><tr><td>Features</td><td>Auto-calendar (to year 2099)</td></tr><tr><td>Dimensions</td><td>4.41 x 1.15 x 4 cm;</td></tr><tr><td>Model</td><td>F-200W-1ADF</td></tr><tr><td>Battery</td><td>CR2 batteries</td></tr><tr><td>LED lighting</td><td>Yes.</td></tr><tr><td>Product Weight</td><td>84 Grams</td></tr><tr><td>Shape</td><td>Round.</td></tr><tr><td>Glass Material</td><td>Mineral Glass</td></tr><tr><td>Case Material</td><td>Resin</td></tr><tr><td>Clasp</td><td>Tang Buckle</td></tr><tr><td>Movement</td><td>Digital</td></tr><tr><td>Case Thickness</td><td>11 Millimeters</td></tr><tr><td>Band Width</td><td>18 Millimeters</td></tr><tr><td>Dial Colour</td><td>Gray</td></tr><tr><td>Case Diameter</td><td>30 Millimeters</td></tr><tr><td>Water Resistance Level</td><td>100 Meters</td></tr><tr><td>Belt Material</td><td>Rubber</td></tr><tr><td>Belt Colour</td><td>Black</td></tr></tbody></table></figure><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', '1715192628.jpg', '2024-05-09 04:23:48', '2024-05-15 14:53:31'),
(114, 1, 2, 92, 1, 'rate Machine Price Tag', NULL, 'abrarmart48', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 350, 400, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Specification:</td><td>&nbsp;</td></tr><tr><td>Title:</td><td>Combo of Price Labeller Machine Price Tag</td></tr><tr><td>Brand:</td><td><a href=\"https://www.rokomari.com/brand/9152\">Non-Brand</a></td></tr><tr><td>Material</td><td>Plastic</td></tr><tr><td>Colour</td><td>Assorted</td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Quantity Per Pack</td><td>1 Pcs</td></tr><tr><td>Features</td><td>10 Roll Labels<br>Easy and Quick to Get wanted Price Tag<br>Light Weight<br>Easy To Operate</td></tr><tr><td>Model</td><td>MX5500</td></tr></tbody></table></figure><p><a href=\"https://www.rokomari.com/book/category/2280?ref=dp_ct2280\">Stapler and Punch machine</a><a href=\"https://www.rokomari.com/book/category/2612?ref=dp_ct2612\">Scissors &amp; Cutters</a><a href=\"https://www.rokomari.com/book/category/3149?ref=dp_ct3149\">Stamps &amp; Stamps Supplies</a><a href=\"https://www.rokomari.com/book/category/3163?ref=dp_ct3163\">Binders &amp; Binders Accessories</a><a href=\"https://www.rokomari.com/book/category/6421?ref=dp_ct6421\">Paper Clips</a></p><p><br>&nbsp;</p>', '1715749010.jpeg', '2024-05-09 04:34:12', '2024-05-15 14:56:50'),
(115, 1, 1, 3, 1, 'Deer Football Deer 5', NULL, 'abrarmart0080', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 400, 550, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Specification:</td></tr><tr><td>Title:</td></tr><tr><td>Brand:</td></tr><tr><td>Material</td></tr><tr><td>Colour</td></tr><tr><td>Size</td></tr><tr><td>Features</td></tr><tr><td>Product Weight</td></tr></tbody></table></figure>', '1715252997.jpg', '2024-05-09 21:09:57', '2024-05-15 14:58:49'),
(116, 1, 1, 3, 1, 'Qatar footBall Size 5 Blue', NULL, 'abrarmart 0088', 'same as imge', 0, '100g', 'Yes', 'Not_Apply', 0, 800, 950, 10, 4, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Specification:</td></tr><tr><td>Title:</td></tr><tr><td>Brand:</td></tr></tbody></table></figure>', '1715253163.jpg', '2024-05-09 21:12:43', '2024-05-15 14:59:57'),
(117, 1, 4, 53, 1, 'Bioaqua lipbam - 30g', NULL, 'abrarmart000110', 'same as imge', 0, '30g', 'Yes', 'Not_Apply', 10, 140, 280, 10, 4, NULL, NULL, 'Active', NULL, '<h2>Product details of Bioaqua Pink Cherry Cream - 30g</h2><ul><li>Apply to your lip, private part or any part</li><li>Supplements the skin with essential moisture</li><li>Giving it softness and hydration</li><li>Main ingredients: Extracting the essence of sakura</li><li>Cherry blossom is natural beauty skin care flower</li><li>They are rich in peptides and vitamins</li><li>A matte finish lip color.</li><li>Apply on the lips evenly, making lips pink and wet .</li><li>Pink nipple areola.</li><li>Pink skin.</li><li>Apply on the inner part of the thigh, allows to wear a bikini more confidently .</li></ul><p>Introducing Bioaqua Pink Cherry Cream, a 30g moisturizing cream suitable for all skin types. This cream is perfect for those looking to nourish and hydrate their skin. Infused with the sweet scent of cherry, it will leave your skin feeling soft and supple. Use it as a lip balm or treatment to keep your lips moisturized and healthy. Trust Bioaqua to provide you with the best skincare products.</p>', '1715684778.jpg', '2024-05-14 21:00:12', '2024-05-14 21:06:18'),
(120, 1, 7, 154, 1, 'Kitkat 4 finger', NULL, 'abrarmart1200', 'same as imge', 0, '17g', 'Yes', 'Not_Apply', 0, 53, 80, 100, 3, NULL, NULL, 'Active', NULL, '<p>Highlights:</p><ul><li>Age: Kids</li><li>Flavour: Chocolate</li><li>Country of Origin: India</li></ul><figure class=\"table\"><table><tbody><tr><td>Specification:</td></tr><tr><td>Title:</td></tr><tr><td>Brand:</td></tr><tr><td>Country of Origin</td></tr><tr><td>Quantity Per Pack</td></tr><tr><td>Age</td></tr><tr><td>Flavour</td></tr><tr><td>Features</td></tr><tr><td>Item Form</td></tr></tbody></table></figure><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr></tbody></table></figure>', '1715751230.jpeg', '2024-05-15 15:33:50', '2024-05-15 15:46:45'),
(121, 1, 5, 146, 1, 'Boots Baby Head to Toe Wash', NULL, 'abrarmart12002', 'same as imge', 0, '300g', 'Yes', 'Not_Apply', 0, 950, 1250, 10, 3, NULL, NULL, 'Active', NULL, '<h2>Boots Baby Head to toe wash 500ml</h2><p>Boots are comparatively cheap and at a time provide the best products for babies. A gentle and mild head-to-toe wash is a necessity for a baby’s skincare. This gives a nice and fresh condition for a baby.</p><p>We at Cosmetics Corner recommend this product to our little customers for their happy and healthy bathing.</p><h2><strong>Ingredients of Boots Baby Head to toe wash 500ml</strong></h2><p><strong>Boots Baby head-to-toe wash ingredients </strong>are:</p><ul><li>Aqua</li><li>Sodium laureth sulfate</li><li>Citric acid</li><li>Glycerin</li><li>Potassium sorbate, etc.</li></ul><h2><strong>Benefits of Boots Baby Head-to-toe wash 500ml</strong></h2><p><strong>Boots head-to-toe wash </strong>promises to bring fun while bathing. This product is 100% vegan, not tested on any animals, dermatologically proven, and mild formula.</p><p>Moreover, this is a tear-free product so the baby can have fun without any tension. This product produces a good amount of foam, creates bath bubbles, and cleanses the skin deeply.</p><h3><strong>Why should you buy this from us?</strong></h3><p><strong>Boots Baby head-to-toe wash review </strong>is very good. Especially, at this price this product works like a gem. That’s why CosmeticsCorner came up with this one, you will not be upset by using it.</p><p>Moreover, <strong>Boots Baby head-to-toe wash 500ml price </strong>is very affordable. Anyone can have it for their precious baby. <strong>Boots baby head-to-toe wash Bangladesh price </strong>is almost 1000 tk.</p><p>However, we sell various skin care products directly from boots. So here, you will get 100% authentic products without any doubt.</p>', '1715760285.webp', '2024-05-15 18:04:45', '2024-05-15 18:04:45'),
(122, 1, 10, 119, 1, 'Portable Multifunctional Fan', NULL, 'abrarmart 12003', 'same as imge', 0, '10g', 'Yes', 'Not_Apply', 0, 350, 650, 10, 3, NULL, NULL, 'Active', NULL, '<p>Made in china</p><p>&nbsp;</p>', '1715760671.jpeg', '2024-05-15 18:11:11', '2024-05-15 18:11:11'),
(123, 2, 5, 137, 1, 'Beauty Blander Puff Make Up', NULL, 'abrarmart 12004', 'same as imge', 0, '10g', 'Yes', 'Not_Apply', 0, 180, 200, 10, 3, NULL, NULL, 'Active', NULL, '<h2>Product details of 6pcs Beauty Blender Makeup Puff Set With _Bottle</h2><ul><li>6pcs Cosmetic Puff Blending Multi Shape Beauty Egg Blender Make Up Makeup Sponge Set With Bottle</li><li>Powder Puff</li><li>Beauty Blender</li><li>Makeup Sponge</li><li>Foundation</li><li>Tinted Moisturizer</li><li>BB &amp; CC Cream</li><li>Set of 6 beauty blenders in assorted shapes and sizes for easy makeup blending. Comes in cute storage container. Available in assorted colours.</li><li>Product Types: Powder Puff</li><li>Get a flawless blend with the award-winning BEAUTYBLENDER Makeup Sponge. An edgeless, reusable, high-definition cosmetic sponge applicator, in classic Multicolor</li><li>The exclusive aqua-activated material provides an airbrushed application and absorbs minimal product, so your favorite formula lands on your complexion, not your sponge.</li><li>BEAUTYBLENDER Makeup Sponge is a ten-time Allure Best of Beauty award winner. The unique shape and exclusive material available only with Beauty blender ensures impeccable, streak-free application with minimum product waste. Use with primers, foundations, powders, and setting sprays, and any other complexion product. Beauty blender doubles in size and becomes even softer, returning to its original size when it air dries.</li><li>Beauty blender has chosen to use safe, water-soluble dyes that do not harm the environment and will maintain the integrity of their proprietary foam. For this reason, you may notice some color run off or wash away the first time you wet your Beautyblender makeup sponge. This is normal and will disappear after you have cleansed the product several times. Please note: the color will not transfer onto the face or clothing.</li><li>Beauty blender recommends replacing your blender every 3 - 6 months, depending on use. Remember to always wet your Beauty blender makeup sponge before using for optimum complexion finish. Handcrafted in the USA. Cruelty free and vegan.</li><li>Beauty Blender set</li></ul><p>&nbsp;</p><h2>Specifications of 6pcs Beauty Blender Makeup Puff Set With _Bottle</h2><ul><li>Brand</li></ul><p>No Brand</p>', '1715761184.jpeg', '2024-05-15 18:19:44', '2024-05-16 12:05:14'),
(124, 1, 1, 71, 1, 'Baby Push Walker', NULL, 'abrarmart12005', 'same as imge', 0, '300g', 'Yes', 'Not_Apply', 0, 3000, 3500, 10, 3, NULL, NULL, 'Active', NULL, '<p>made in china</p>', '1715761994.jpeg', '2024-05-15 18:33:14', '2024-05-15 18:33:14'),
(125, 1, 7, 154, 1, 'Amul dark chocolate', NULL, 'abrarmart12007', 'same as imge', 0, '150g', 'Yes', 'Not_Apply', 0, 200, 250, 20, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Brand</td><td>Amul</td></tr><tr><td>Item Form</td><td>CHOCOLATE EGG</td></tr><tr><td>Occasion</td><td>New Year</td></tr><tr><td>Chocolate Type</td><td>Dark</td></tr><tr><td>Flavour</td><td>Dark Chocolate</td></tr><tr><td>Net Quantity</td><td>150.0 gram</td></tr><tr><td>Diet Type</td><td>Vegetarian</td></tr></tbody></table></figure>', '1715762376.jpeg', '2024-05-15 18:39:36', '2024-05-15 18:39:36'),
(126, 1, 7, 154, 1, 'Amul  Milk Choclate', NULL, 'abrarmart1209', 'same as imge', 0, '150g', 'Yes', 'Not_Apply', 0, 200, 250, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td>Brand</td><td>Amul</td></tr><tr><td>Item Form</td><td>CHOCOLATE EGG</td></tr><tr><td>Occasion</td><td>New Year</td></tr><tr><td>Chocolate Type</td><td>Dark</td></tr><tr><td>Flavour</td><td>Dark Chocolate</td></tr><tr><td>Net Quantity</td><td>150.0 gram</td></tr><tr><td>Diet Type</td><td>Vegetarian</td></tr></tbody></table></figure>', '1715762670.jpeg', '2024-05-15 18:44:30', '2024-05-15 18:44:30'),
(127, 1, 7, 154, 1, 'Dairy Milk Bably Chocolate', NULL, 'abrarmart12009', 'same as imge', 0, '75g', 'Yes', 'Not_Apply', 0, 123, 150, 10, 3, NULL, NULL, 'Active', NULL, '<p>product of orgin india</p>', '1715763429.jpeg', '2024-05-15 18:57:09', '2024-05-15 18:57:09'),
(128, 1, 7, 154, 1, 'Pringles (134g)', NULL, 'abrarmart 12009', 'same as imge', 0, '134g', 'Yes', 'Not_Apply', 0, 290, 340, 10, 3, NULL, NULL, 'Active', NULL, '<p>Highlights:</p><ul><li>Country of Origin: Malaysia</li><li>Net Weight: 134 gm</li><li>Chips Material: Potato</li></ul>', '1715794069.jpeg', '2024-05-16 03:27:49', '2024-05-16 03:27:49'),
(129, 1, 7, 154, 1, 'Pringles(134g)', NULL, 'abrarmart12010', 'same as imge', 0, '134g', 'Yes', 'Not_Apply', 0, 290, 340, 12, 4, NULL, NULL, 'Active', NULL, '<p>Highlights:</p><ul><li>Country of Origin: Malaysia</li><li>Net Weight: 134 gm</li><li>Chips Material: Potato</li></ul>', '1715794272.jpeg', '2024-05-16 03:31:12', '2024-05-16 03:31:12'),
(130, 2, 7, 154, 1, 'Melbourne Cheese Slice 12pcs', NULL, 'abrarmart12101', 'same as imge', 0, '200g', 'Yes', 'Not_Apply', 0, 295, 400, 10, 4, NULL, NULL, 'Active', NULL, '<p>These cheese slices are likely versatile and can be used in a variety of dishes to add creaminess and flavor. Whether melted on a grilled cheese sandwich, layered in a burger, or used as a topping for crackers or sandwiches, they provide a quick and tasty way to enjoy cheese.</p>', '1715794677.jpeg', '2024-05-16 03:37:57', '2024-05-16 03:37:57'),
(131, 2, 5, 140, 1, 'FOGG Fragrance Body Spray', NULL, 'abrarmart12102', 'same as imge', 0, '120g', 'Yes', 'Not_Apply', 0, 300, 500, 5, 4, NULL, NULL, 'Active', NULL, '<p><strong>Description</strong></p><p>FOGG Fresh Aromatic Fragrance Body Spray for Men will give you a fresh and pleasant sensation with its beautiful aroma and body odor neutralization that can last throughout your daily activities.<br><br><strong>Features</strong><br>• Will give you a fresh and pleasant sensation.<br>• Beautiful and sensual aroma.<br>• Neutralises body odor.<br>• Lasts throughout your daily activities.<br><br><strong>Specifications</strong><br>• Brand: Fogg<br>• Type: Deodorant<br>• Fragrance Type: Body Spray<br>• Target Group: Men<br>• Size: 120 ml</p>', '1715794998.jpeg', '2024-05-16 03:43:18', '2024-05-16 03:43:18'),
(132, 1, 7, 155, 1, 'Coffee Jar 200gm', NULL, 'abrarmart12012', 'same as imge', 0, '200g', 'Yes', 'Not_Apply', 0, 650, 750, 5, 4, NULL, NULL, 'Active', NULL, '<p>Nescafé Classic Instant Coffee is a well-known and widely consumed coffee product globally. Here\'s what you can expect from a 200g jar of Nescafé Classic Instant Coffee:</p><p><strong>Instant Coffee:</strong> Nescafé Classic is an instant coffee powder that dissolves quickly in hot water, providing a convenient and quick way to make a cup of coffee without the need for brewing equipment.</p><p><strong>Classic Flavor:</strong> Nescafé Classic is known for its signature flavor profile, which is characterized by a well-balanced and smooth taste with rich aroma notes. It\'s a popular choice for coffee drinkers who enjoy a traditional coffee experience.</p><p><strong>200g Jar:</strong> The 200g jar provides a generous quantity of coffee powder that can last for multiple servings, making it suitable for regular consumption at home, in the office, or when traveling.</p><p><strong>Versatile:</strong> Nescafé Classic can be enjoyed black or customized with milk, cream, sugar, or other flavorings according to your preference. It\'s suitable for various coffee preparations, including hot coffee, iced coffee, and coffee-based desserts.</p><p><strong>Convenience:</strong> Instant coffee is convenient for busy mornings or when you want a quick caffeine boost throughout the day. Simply add hot water, stir, and enjoy.</p><p>Overall, Nescafé Classic Instant Coffee offers a convenient and versatile coffee solution for coffee lovers seeking a classic and satisfying coffee experience.</p><p><br>&nbsp;</p>', '1715795418.jpeg', '2024-05-16 03:50:18', '2024-05-16 03:50:18'),
(133, 16, 7, 154, 1, 'Pasta Hat Macaroni (500g)', NULL, 'abrarmart 121011', 'same as imge', 0, '500g', 'Yes', 'Not_Apply', 0, 140, 200, 5, 4, NULL, NULL, 'Active', NULL, '<p>The larger size of the elbow macaroni can be particularly appealing for dishes where you want a heartier bite or where the pasta needs to hold up to robust sauces or fillings. Enjoy experimenting with different recipes and sauces to create delicious meals with Pasta Hat Big Elbow Macaroni!</p>', '1715795748.jpeg', '2024-05-16 03:55:48', '2024-05-16 03:55:48'),
(134, 1, 5, 135, 1, 'L\'oreal Paris Studio Hire gel', NULL, 'abrarmart120012', 'same as imge', 0, '150ml', 'Yes', 'Not_Apply', 0, 500, 650, 2, 4, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><th>Solution Type</th><td>Unassigned</td></tr><tr><th>Brand Name</th><td>Loreal</td></tr><tr><th>Manufacturer</th><td>Loreal Professional</td></tr></tbody></table></figure>', '1715824483.jpeg', '2024-05-16 04:02:03', '2024-05-16 11:55:49'),
(135, 1, 5, 134, 1, 'Vaseline Blueseal 100ml', NULL, 'abrarmart120120', 'same as imge', 0, '100ml', 'Yes', 'Not_Apply', 0, 350, 450, 5, 3, NULL, NULL, 'Active', NULL, '<p>Solution Type</p><p>Dryness Control</p><p>Brand Name</p><p>Vaseline</p><p>Manufacturer</p><p>Vaseline</p><p>Country of Manufacture</p><p>South Africa</p>', '1715796545.jpeg', '2024-05-16 04:09:05', '2024-05-16 04:09:05'),
(136, 1, 4, 156, 1, 'W7 Liquid Eyeliner Pot 8ml - Black', NULL, 'abrarmart12109', 'same as imge', 0, '8ml', 'Yes', 'Not_Apply', 0, 140, 250, 5, 4, NULL, NULL, 'Active', NULL, '<p>Skin Type</p><p>All Types of Skin</p><p>Solution Type</p><p>Unassigned</p><p>Brand Name</p><p>W7 Cosmetics</p><p>Manufacturer</p><p>W7 Pro</p><p>Country of Manufacture</p><p>China</p>', '1715797024.jpeg', '2024-05-16 04:17:04', '2024-05-16 04:17:04'),
(137, 1, 5, 150, 1, 'Tresemme Pro Collection (700ml)', NULL, 'abrarmart12120', 'same as imge', 0, '700ml', 'Yes', 'Not_Apply', 0, 820, 1050, 10, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><th>Hair Type</th><td>Damaged Hair</td></tr><tr><th>Solution Type</th><td>Keratin Solution</td></tr><tr><th>Gender</th><td>For Men &amp; Women (Both)</td></tr><tr><th>Brand Name</th><td>Tresemme</td></tr><tr><th>Manufacturer</th><td>Unilever</td></tr></tbody></table></figure>', '1715797396.jpeg', '2024-05-16 04:23:16', '2024-05-16 04:23:16'),
(138, 1, 5, 150, 1, 'Tresemme Biotin+7 Repair Shampoo - 700ml', NULL, 'abrarmart1210100', 'same as imge', 0, '700ml', 'Yes', 'Not_Apply', 0, 820, 1040, 5, 3, NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><th>Hair Type</th><td>Damaged Hair</td></tr><tr><th>Solution Type</th><td>Keratin Solution</td></tr><tr><th>Gender</th><td>For Men &amp; Women (Both)</td></tr><tr><th>Brand Name</th><td>Tresemme</td></tr><tr><th>Manufacturer</th><td>Unilever</td></tr></tbody></table></figure>', '1715797633.jpeg', '2024-05-16 04:27:13', '2024-05-16 04:27:13'),
(139, 1, 3, 117, 1, 'Aveeno Baby Daily Care Hair & Body Wash 300 ml', NULL, 'abrarmart 1210111', 'same as imge', 0, '300ml', 'Yes', 'Not_Apply', 0, 1300, 1500, 5, 4, NULL, NULL, 'Active', NULL, '<p>Formulated with Natural Oat Extract , Aveeno® Baby Daily Care Hair &amp; Body Wash gently cleanses and nourishes your baby\'s delicate skin from top to toe without leaving it dry . It is designed to preserve baby skin\'s protective barrier and microbiome.</p><p>Aveeno® Baby Daily Care Gentle Bath Wash has a gentle fragrance , and is pH balanced , tear-free and free from sulphates, soaps and dyes.</p>', '1715798064.jpeg', '2024-05-16 04:34:24', '2024-05-16 11:59:52'),
(140, 7, 7, 157, 1, 'Tiger jeera 500g', NULL, 'abrarmart1210098', 'same as imge', 0, '500g', 'Yes', 'Not_Apply', 0, 550, 650, 1, 4, NULL, NULL, 'Active', NULL, '<p><strong>&nbsp;Tiger jeera 500g</strong></p><p><strong>মসলা হিসেবে পরিচিত হলেও জিরা আসলে নানা ঔষধিগুণ সম্পন্ন। খাবারের স্বাদ ও গন্ধ বাড়ানোর পাশাপাশি শরীরের অনেক সমস্যার সমাধানও করে জিরা। পেটের বিভিন্ন অসুখ কমানোর পাশাপাশি হজমক্ষমতাও বাড়ায় জিরা। সেইসঙ্গে অ্যাজমার সমস্যা কমায়, বাড়ায় ত্বক ও চুলের সৌন্দর্য। জিরার রয়েছে অনেকগুলো উপকারিতা।</strong></p><p><strong>গ্যাস্ট্রিকের সমস্যায় সমাধান দেয়</strong></p><p><strong>গ্যাস্ট্রিকের সমস্যায় সমাধান দিতে পারে জিরা। পেটে ব্যথা কমাতেও এটি দারুণ কার্যকরী। হজমক্ষমতা বাড়াতেও কাজ করে জিরা। যাদের হজমে সমস্যা আছে তারা দিনে তিনবার জিরা দিয়ে তৈরি চা পান করবেন। এতে উপকার পাবেন।</strong></p><p><strong>অনিদ্রা দূর করে</strong></p><p><strong>ঘুমাতে যাওয়ার আগে এক চামচ চটকানো কলার সঙ্গে আধা চামচ জিরার গুঁড়া মিশিয়ে খেয়ে নিন। জিরা ও কলা একসঙ্গে খেলে মস্তিষ্কে মেলাটোনিন নামে এক ধরনের কেমিক্যালের ক্ষরণ বেড়ে যায়। এই কেমিক্যাল ভালো ঘুমের ক্ষেত্রে সাহায্য করে।</strong></p><p><strong>জ্বরের প্রকোপ কমায়</strong></p><p><strong>এক গ্লাস পানিতে এক চা চামচ জিরা এবং সামান্য আদা মিশিয়ে নিন। এরপর সেই পানি ফুটিয়ে ছেঁকে নিন। সেই পানি দিনে ২-৩ বার পান করতে হবে। এতে জ্বর কমে যাবে।</strong></p><p><strong>কোষ্ঠকাঠিন্য দূর করে</strong></p><p><strong>জিরায় আছে প্রচুর ফাইবার, যা অনেকগুলো এনজাইমের ক্ষরণ বাড়িয়ে দেয়। এটি কোষ্ঠকাঠিন্য সারাতে বিশেষ ভূমিকা রাখে। জিরা খেলে তা পাইলসের কষ্ট কমাতেও সাহায্য করে। প্রতিদিন সকালে খালি পেটে এক গ্লাস পানিতে এক চা চামচ ভাজা জিরা গুঁড়া মিশিয়ে খেয়ে নিন। এতে উপকার মিলবে।</strong></p><p><strong>জিরা খাওয়ার উপকারিতা</strong></p><p><strong>* বিভিন্ন গবেষণায় দেখা গেছে, অতিরিক্ত জিরা খেলে তা রক্তকে তরল করে দিতে পারে। অতিরিক্ত জিরা খেলে তা ডায়াবেটিস রোগীদের জন্য ক্ষতিকর হতে পারে।</strong></p><p><strong>* জিরা বেশি খেলে তা রক্তে শর্করার মাত্রা হঠাৎ কমিয়ে দিতে পারে। এর ফলে হঠাৎ রক্তচাপ কমে যেতে পারে।</strong></p><p><strong>* জিরার তেল অতিরিক্ত ব্যবহার করলে তা অতিরিক্ত প্রদাহ সৃষ্টি করতে পারে।</strong></p>', '1715825840.jpeg', '2024-05-16 12:17:20', '2024-05-16 12:20:09'),
(141, 7, 7, 157, 1, 'TIGER JEERA 250G', NULL, 'abrarmart1200100', 'same as imge', 0, '250', 'Yes', 'Not_Apply', 0, 250, 350, 1, 3, NULL, NULL, 'Active', NULL, '<p><strong>Tiger jeera 250g</strong></p><p><strong>মসলা হিসেবে পরিচিত হলেও জিরা আসলে নানা ঔষধিগুণ সম্পন্ন। খাবারের স্বাদ ও গন্ধ বাড়ানোর পাশাপাশি শরীরের অনেক সমস্যার সমাধানও করে জিরা। পেটের বিভিন্ন অসুখ কমানোর পাশাপাশি হজমক্ষমতাও বাড়ায় জিরা। সেইসঙ্গে অ্যাজমার সমস্যা কমায়, বাড়ায় ত্বক ও চুলের সৌন্দর্য। জিরার রয়েছে অনেকগুলো উপকারিতা।</strong></p><p><strong>গ্যাস্ট্রিকের সমস্যায় সমাধান দেয়</strong></p><p><strong>গ্যাস্ট্রিকের সমস্যায় সমাধান দিতে পারে জিরা। পেটে ব্যথা কমাতেও এটি দারুণ কার্যকরী। হজমক্ষমতা বাড়াতেও কাজ করে জিরা। যাদের হজমে সমস্যা আছে তারা দিনে তিনবার জিরা দিয়ে তৈরি চা পান করবেন। এতে উপকার পাবেন।</strong></p><p><strong>অনিদ্রা দূর করে</strong></p><p><strong>ঘুমাতে যাওয়ার আগে এক চামচ চটকানো কলার সঙ্গে আধা চামচ জিরার গুঁড়া মিশিয়ে খেয়ে নিন। জিরা ও কলা একসঙ্গে খেলে মস্তিষ্কে মেলাটোনিন নামে এক ধরনের কেমিক্যালের ক্ষরণ বেড়ে যায়। এই কেমিক্যাল ভালো ঘুমের ক্ষেত্রে সাহায্য করে।</strong></p><p><strong>জ্বরের প্রকোপ কমায়</strong></p><p><strong>এক গ্লাস পানিতে এক চা চামচ জিরা এবং সামান্য আদা মিশিয়ে নিন। এরপর সেই পানি ফুটিয়ে ছেঁকে নিন। সেই পানি দিনে ২-৩ বার পান করতে হবে। এতে জ্বর কমে যাবে।</strong></p><p><strong>কোষ্ঠকাঠিন্য দূর করে</strong></p><p><strong>জিরায় আছে প্রচুর ফাইবার, যা অনেকগুলো এনজাইমের ক্ষরণ বাড়িয়ে দেয়। এটি কোষ্ঠকাঠিন্য সারাতে বিশেষ ভূমিকা রাখে। জিরা খেলে তা পাইলসের কষ্ট কমাতেও সাহায্য করে। প্রতিদিন সকালে খালি পেটে এক গ্লাস পানিতে এক চা চামচ ভাজা জিরা গুঁড়া মিশিয়ে খেয়ে নিন। এতে উপকার মিলবে।</strong></p><p><strong>জিরা খাওয়ার উপকারিতা</strong></p><p><strong>* বিভিন্ন গবেষণায় দেখা গেছে, অতিরিক্ত জিরা খেলে তা রক্তকে তরল করে দিতে পারে। অতিরিক্ত জিরা খেলে তা ডায়াবেটিস রোগীদের জন্য ক্ষতিকর হতে পারে।</strong></p><p><strong>* জিরা বেশি খেলে তা রক্তে শর্করার মাত্রা হঠাৎ কমিয়ে দিতে পারে। এর ফলে হঠাৎ রক্তচাপ কমে যেতে পারে।</strong></p><p><strong>* জিরার তেল অতিরিক্ত ব্যবহার করলে তা অতিরিক্ত প্রদাহ সৃষ্টি করতে পারে।</strong></p>', '1715826439.jpeg', '2024-05-16 12:27:19', '2024-05-16 12:27:19'),
(142, 7, 7, 157, 1, 'কাঠবাদাম -250gm', NULL, 'abrarmart12201', 'same as imge', 0, '250g', 'Yes', 'Not_Apply', 0, 280, 350, 5, 4, NULL, NULL, 'Active', NULL, NULL, '1715826699.jpeg', '2024-05-16 12:31:39', '2024-05-16 12:31:39');
INSERT INTO `products` (`id`, `unit_id`, `catalogue_id`, `category_id`, `brand_id`, `title`, `slug`, `code`, `color`, `type`, `weight`, `has_stock`, `discount_type`, `discount_amount`, `cost`, `mrp`, `alert_stock`, `view_section`, `size_guide`, `tags`, `status`, `description`, `details_description`, `image`, `created_at`, `updated_at`) VALUES
(143, 5, 7, 157, 1, 'সজিনা পাতা গুঁড়ো 1kg', NULL, 'abrarmart122022', 'same as imge', 0, '1000g', 'Yes', 'Not_Apply', 0, 400, 600, 1, 4, NULL, NULL, 'Active', NULL, '<p>মরিঙ্গা বা সজিনা পাতাকে সুপার ফুড বলা হয়। সজিনা গুঁড়োয় থাকা ভিটামিন ও মিনারেল রক্তের গ্লুকোজের মাত্রা নিয়ন্ত্রণ করতে সাহায্য করে। নিয়মিত সজিনা পাতা সেবন উচ্চ রক্তচাপ নিয়ন্ত্রণ করতে সাহায্য করে। এতে থাকা ভিটামিন, অ্যান্টি-অক্সিডেন্ট ও অ্যান্টি-ইনফ্লেমেটরি উপাদান আমাদের রোগ প্রতিরোধ ক্ষমতা বৃদ্ধি করে। ডায়াবেটিস নিয়ন্ত্রণে সজিনা পাউডার অনেক গুরুত্বপূর্ণ ভূমিকা পালন করে। নিয়মিত সজিনা পাতা খেলে ক্ষুধামন্দা দূর হয় এবং হজমশক্তি বাড়ে। এটি শরীরের ডিফেন্স মেকানিজমকে আরো শক্তিশালী করতে সাহায্য করে এবং এর পাশাপাশি চোখের দৃষ্টিশক্তি বাড়াতেও সজিনা পাতা অনেক উপকারী।</p>', '1715828076.png', '2024-05-16 12:54:36', '2024-05-16 12:56:23'),
(144, 5, 7, 157, 1, 'কালোজিরা 1kg', NULL, 'abrarmart122099', 'same as imge', 0, '1000g', 'Yes', 'Not_Apply', 0, 350, 500, 2, 4, NULL, NULL, 'Active', NULL, '<ul><li>কালোজিরা চুলপড়া, মাথাব্যথা, অনিদ্রা, মাথা ঝিমঝিম করা, মুখশ্রী ও সৌন্দর্য রক্ষা, অবসন্নতা-দুর্বলতা, নিষ্ক্রিয়তা ও অলসতা, আহারে অরুচি এবং মস্তিষ্ক শক্তি তথা স্মরণশক্তি বাড়ায়।</li><li>গোপন শক্তি বাড়াতে এক চামুচ কালোজিরাই যথেষ্ট। কারণ কালোজিরায় এ ক্ষমতা অপরিসীম</li><li>কালোজিরায় রয়েছে-ফসফেট, লৌহ, ফসফরাস, কার্বো-হাইড্রেট ছাড়াও জীবাণুনাশক বিভিন্ন উপাদান</li><li>কালোজিরায় ক্যান্সার প্রতিরোধক কেরোটিন ও শক্তিশালী হরমোন,</li><li>প্রস্রাবসংক্রান্ত বিভিন্ন রোগ প্রতিরোধকারী উপাদান,</li><li>পাচক এনজাইম ও অম্লনাশক উপাদান এবং অম্লরোগের প্রতিষেধক।</li></ul>', '1715828529.jpeg', '2024-05-16 13:02:09', '2024-05-16 13:02:09'),
(145, 5, 7, 157, 1, 'মোরব্বা 1kg', NULL, 'abrarmart 1220022', 'same as imge', 0, '1000g', 'Yes', 'Not_Apply', 0, 160, 250, 3, 4, NULL, NULL, 'Active', NULL, '<h4><strong>চাল কুমড়ার মোরব্বা&nbsp;</strong></h4>', '1715828909.jpeg', '2024-05-16 13:08:29', '2024-05-16 13:08:29'),
(146, 5, 7, 157, 1, 'Chia Seed 1kg', NULL, 'abrarmart1220054', 'same as imge', 0, '1k', 'Yes', 'Not_Apply', 0, 400, 500, 5, 3, NULL, NULL, 'Active', NULL, '<p><strong>চিয়া সিড</strong> (Chia seed) বা চিয়া <a href=\"https://www.asolfood.com/product/3376/\">বীজ</a> মরুভূমিতে জন্মানো সালভিয়া হিসপানিকা (Salvia Hispanica) উদ্ভিদের বীজ। এই অতি উপকারি বীজটির আদি জন্মস্থান সেন্ট্রাল আমেরিকা এবং সেখানকার প্রাচীন আদিবাসি অ্যাজটেক জাতির খাদ্য তালিকায় এই বীজ অন্তর্ভুক্ত থাকার প্রমাণ পাওয়া যায়। প্রাচীন মায়া এবং অ্যাজটেক জাতির মানুষ চিয়া সিডকে সোনার থেকেও মূল্যবান মনে করত। তারা বিশ্বাস করত এটা তাদের শক্তি ও সাহস জোগাবে। তবে বাংলাদেশের গ্রামেগঞ্জেও <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> পাওয়া যায়।</p><p><strong>চিয়া বীজ</strong> সাদা ও কালো রং এর এবং তিলের মত ছোট সাইজের হয়। <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> একটি সুপার ফুড যাতে আছে প্রচুর পরিমানে ওমেগা-৩ ফ্যাটি এসিড; কোয়েরসেটিন (Quercetin) কেম্পফেরল (Kaempferol), ক্লোরোজেনিক এসিড (Chlorogenic acid) এবং ক্যাফিক এসিড (Caffeic acid) নামক এন্টিঅক্সিডেন্ট; পটাশিয়াম, ম্যাগনেশিয়াম এবং দ্রবণীয় ও অদ্রবণীয় খাদ্যআঁশ (ফাইবার)।</p><h4><strong>চিয়া বীজ (Chia seed) এর পুষ্টিগুণঃ-</strong></h4><p>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> শক্তি এবং কর্মক্ষমতা বৃদ্ধি করে।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> রোগ প্রতিরোধ ক্ষমতাকে আরও শক্তিশালী করে।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> ওজন কমাতে সহায়তা ক।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> ব্লাড সুগার (রক্তের চিনি) স্বাভাবিক রাখে, ফলে ডায়াবেটিস হওয়ার ঝুঁকি কমায়।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> হাড়ের স্বাস্থ্য রক্ষায় বিশেষ উপকা।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> মলাশয় (colon) পরিষ্কার রাখে ফলে কোলন ক্যান্সারের ঝুঁকি কমায়।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> শরীর থেকে টক্সিন (বিষাক্ত পদার্থ) বের করে দ।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> প্রদাহজনিত সমস্যা দূর করে।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> ভাল ঘুম হতে সাহায্য করে।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> ক্যান্সার রোধ করে।<br>• <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> এটেনশান ডেফিসিট হাইপার এক্টিভিটি ডিসর্ডার (Attention deficit hyperactivity disorder ADHD) দূর করে।</p><h4><strong>তোহফার চিয়া বীজ কেনো খাবেন ?</strong></h4><p>• বাছাই করা দানা<br>• স্বাস্থ্যকর পরিবেশে মোড়কজাত<br>• পুষ্টিকর ও শতভাগ খাঁটি</p><p>সকালে খালি পেটে অথবা রাতে ঘুমানোর আগে ১-২ চা চামচ চিয়া সিড পানিতে ভিজিয়ে রাখুন। ১০-২০ মিনিট ভজিয়ে রাখার পর ছেঁকে সেই পানি পান করুন। চাইলে না ছেঁকে <a href=\"https://www.asolfood.com/product/3376/\">চিয়া বীজ</a> সহ পানি পান করতে পারে। উভয়ই স্বাস্থ্যকর।</p>', '1715829682.jpeg', '2024-05-16 13:21:22', '2024-05-16 13:21:22'),
(147, 7, 7, 157, 1, 'মেহেদী পাতা গুঁড়া 250gm', NULL, 'abrarmart 122033', 'same as imge', 0, '250g', 'Yes', 'Not_Apply', 0, 200, 250, 4, 3, NULL, NULL, 'Active', NULL, '<p>মেহেদী পাতা গুঁড়া (Henna Leaf Powder)</p><p>সুন্দর চুলই নারী সৌন্দর্যের মূল উপাদান। আর তাই প্রাচীন কাল থেকেই রমণীগণ চুলের বিশেষ যত্ন নিয়ে আসছেন। নানান প্রাকৃতিক উপাদান দিয়ে চুলের যত্ন করতেন/ করেন তারা। আর সে সব প্রাকৃতিক উপাদান গুলোর মধ্যে মূল যেই উপাদানটি ব্যবহার করা হতো তা হলো মেহেদী। মেহেদী পাতার রং-এ তারা চুল রাঙাতেন এবং চুলের যত্ন নিতেন। বহুকাল পেরিয়ে গিয়েছে, কিন্তু এখনো মেহেদী পাতার কদর কমেনি একটুও। এখনো সৌন্দর্য সচেতন নারীরা নিজের চুল গুলোকে সুন্দর ও ঝলমলে রাখার জন্য ব্যবহার করেন মেহেদী পাতা।</p><p>আসুন জেনে নেয়া যাক মেহেদী পাতার গুন সম্পর্কে।</p><p>চুল পড়া কমাতে………<br>অনেকেই চুল পড়া সমস্যায় ভুগছেন। যাদের চুল পড়ে যাচ্ছে তারা চুল পড়া কমানোর জন্য মেহেদী ব্যবহার করতে পারেন। মাসে দুই বার মেহেদী পাতার গুঁড়ো পুরো চুলে লাগিয়ে ঘন্টাখানেক রেখে ধুয়ে ফেলুন। মেহেদীর সাথে আমলকীর গুড়া বা আমলকী বাঁটা মিশিয়ে নিলে আরো বেশি উপকার পাওয়া যাবে।<br>কন্ডিশনার হিসেবে………<br>কন্ডিশনার হিসেবে মেহেদীর জুড়ি নেই। দুই সপ্তাহ পরপর মেহেদী পাতার সাথে ডিমের সাদা অংশ ও পাকা কলা মিশিয়ে নিন। এরপর মিশণটি পুরো চুলে ভালো করে মেখে নিন। মাথায় শাওয়ার ক্যাপ পরে নিন। এভাবে একঘন্টা রেখে চুল ধুয়ে ফেলুন। নিয়ম মেনে দুই সপ্তাহ পরপর ব্যবহার করলে চুলের ভঙ্গুর ভাব দূর হবে এবং চুলের উজ্জ্বলতা বৃদ্ধি পাবে।<br>চুল রাঙাতে……<br>যাদের চুল পেকে গিয়েছে অথবা একটু একটু পাকা শুরু করেছে তারা বেশ দুশ্চিন্তায় থাকেন সাদা চুলগুলো নিয়ে। কিভাবে সাদা চুল ঢাকবেন তা নিয়ে চিন্তার শেষ থাকে না। চুলের রং ব্যবহারেরও আছে নানান পার্শ্বপ্রতিক্রিয়া। তাই চুলের রঙ ব্যবহার করতে ইচ্ছে করে না। যারা এমন সমস্যায় আছেন তারা চুল রাঙাতে ব্যবহার করতে পারেন মেহেদী। মেহেদী পাতা গুঁড়ো চায়ের ঘন লিকার অথবা কফির লিকার মিশিয়ে নিন। এতে রং ভালো হবে।<br>খুশকি থেকে মুক্তি পেতে……<br>খুশকির সমস্যা থেকে রেহাই পেতেও মেহেদীর জুড়ি নেই। যারা খুশকি সমস্যাতে আছেন তারা খুব সহজেই মেহেদী পাতা ব্যবহার করে খুশকির থেকে রেহাই পেতে পারবেন। মেহেদী বাঁটার সাথে লেবুর রস মিশিয়ে পুরো মাথায় মেখে রাখুন এক ঘন্টা। এরপর চুল ভালো করে ধুয়ে ফেলুন। মাসে দুইবার ব্যবহার করলে খুশকি থাকবে না।</p><p>আমার ডালের নতুন সংযোযোন মেহেদী পাতার গুঁড়ো। আমাদের ফ্যামিলি মেম্বারগন এখন থেকে আমাদের কাছে অর্ডার করতে পারবেন চুলের প্রাকৃতিক সৌন্দর্যের এই অদ্ভুত উপাদান টি। নিঃসন্দেহে এই মেহেদী পাতার গুঁড়ো গুন এবং মানের বিচারে সর্বাপেক্ষা উন্নতমানের।</p>', '1715830087.jpeg', '2024-05-16 13:28:07', '2024-05-16 13:28:07'),
(148, 1, 5, 149, 1, 'Donla Olive Oil  100ml', NULL, 'abrarmart122006', 'same as imge', 0, '100ml', 'Yes', 'Not_Apply', 0, 190, 260, 1, 3, NULL, NULL, 'Active', NULL, '<ul><li>Donla Olive Oil (Thailand) – 100ml</li><li>Net weight: 100ml</li><li>Product Quality: 100% Original</li><li>Country of Origin: Thailand</li><li>For smooth and better skin.</li><li>Gives deep and better moisturization.</li><li>Nourishes and softens skin.</li><li>Suitable for all skin Types.</li><li>After bathing with skin or hand wash, massage this oil for a while and try to get a soft skin.</li></ul><p> </p><p><strong>SKU:</strong> TM-012</p><p><strong>Brand:</strong> <a href=\"https://stygen.gift/brand/donla\">Donla</a></p>', '1715831849.jpeg', '2024-05-16 13:57:29', '2024-05-17 15:24:47'),
(149, 1, 16, 161, 1, 'Sf 400', NULL, 'abrarmart122009', 'same as imge', 0, '200g', 'Yes', 'Not_Apply', 0, 230, 350, 5, 4, NULL, NULL, 'Active', NULL, '<p><a href=\"https://www.bdshop.com/universal-digital-electronic-kitchen-scale-sf-400#description\">Details</a></p><h2>Digital Electronic Kitchen Scale SF 400 In Bangladesh<br><br>&nbsp;</h2><p>The Digital Electronic Kitchen Scale SF 400 is&nbsp;available in Bangladesh.&nbsp;Get the original&nbsp;products&nbsp;at the most affordable price only at&nbsp;BDSHOP.COM<i>&nbsp;</i>and enjoy the quality with the promise of the best customer service in Bangladesh.<br><br>Universal Digital Electronic Kitchen Scale SF 400&nbsp;has a 5 kg weight capacity, 0.001 kg accuracy, auto zero-on and power-off function, clear LCD readout, multi-unit display, 2 X 1.5V 3AAA batteries, 25.2 x 18.7 x 4.6cm package dimension.<br><br>The Digital Electronic Kitchen Scale SF 400 comes&nbsp;with 7 days&nbsp;of replacement Warranty.</p>', '1715835083.jpeg', '2024-05-16 14:51:23', '2024-05-16 15:48:38'),
(151, 1, 16, 160, 1, 'Camping lamb', NULL, 'abrarmart 1220099', 'same as imge', 0, '1000g', 'Yes', 'Not_Apply', 0, 650, 1000, 5, 3, NULL, NULL, 'Active', NULL, '<p>Features</p><p>Retro Outdoor Lantern</p><p>Usage</p><p>Outdoor Lighting, Camping, Fishing...</p><p>Base Type</p><p>Wedge</p><p>Light Source</p><p>LED bulbs</p><p>Battery Type</p><p>Lithium Metal</p><p>Lighting Period (h)</p><p>6</p><p>Body Material</p><p>ABS</p><p>Is Batteries Required</p><p>No</p><p>Power Source</p><p>Rechargeable Battery</p><p>Brand Name</p><p>Dysaim</p><p>Origin</p><p>Mainland China</p><p>Item Type</p><p>Portable Lanterns</p><p>Product</p><p>Camping Lantern</p><p>Modes</p><p>2 Modes</p><p>Waterproof</p><p>IPX4</p><p>Battery</p><p>18650 Battery</p><p>Battery Capacity</p><p>1800mAh</p><p>Charging</p><p>USB Rechargeable</p><p>Nordic Style</p><p>Horse Lights</p><p>Feature 1</p><p>camping</p><p>Feature 2</p><p>Flashlight</p><p>Feature 3</p><p>camping equipment</p><p>Feature 4</p><p>rechargeable light</p><p>Feature 5</p><p>Camping tent</p><p>Feature 6</p><p>outdoor lighting</p><p>Feature 7</p><p>Lantern</p><p>Feature 8</p><p>Camping supplies</p><p>Feature 9</p><p>light</p><p>Feature 10</p><p>camp</p><p>Feature 11</p><p>Camping tent travel</p><p>Feature 12</p><p>rechargeable bulb</p><p>Feature 13</p><p>outdoor lights waterproof</p><p>Feature 14</p><p>magnet led</p><p>Feature 15</p><p>camping lamp</p><p>Feature 16</p><p>camping light</p><p>Feature 17</p><p>camping lantern</p><p>Feature 18</p><p>Portable Lanterns</p><p>Feature 19</p><p>Rechargeable Camping Lantern</p><p>Feature 20</p><p>USB Charging Tent Light</p>', '1715835838.jpeg', '2024-05-16 15:03:58', '2024-05-16 15:42:55'),
(152, 1, 16, 158, 1, 'Electric coffee Grinder', NULL, 'abrarmart 122211', 'same as imge', 0, '500g', 'Yes', 'Not_Apply', 300, 800, 1500, 40, 3, NULL, NULL, 'Active', NULL, '<ul><li>Product category: Grinder</li><li>Speed control gear: 1st gear</li><li>Applicable number of people: 1 person</li><li>Mixing blades: multiple mixing blades</li><li>Energy efficiency level: Level 2 energy efficiency</li><li>Number of blades: 4</li><li>Body material: stainless steel</li><li>Rated Power: 200W</li><li>Material: Stainless steel</li><li>Rated Voltage: 220V</li></ul>', '1715836662.jpeg', '2024-05-16 15:17:42', '2024-05-16 15:38:40'),
(153, 1, 13, 162, 1, 'গাজী ম্যাজিক হাতের লেখা শিখার বই', NULL, 'abrarmart 122005', 'same as imge', 0, '40g', 'Yes', 'Not_Apply', 0, 180, 280, 10, 4, NULL, NULL, 'Active', NULL, '<p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf3/1.5/16/1f4d2.png\" alt=\"📒\" width=\"16\" height=\"16\"> শিশুর হাতের লেখা শেখার ম্যাজিক বই (Magic Book) – লিখার ৫ মিনিট পর মুছে যায় পাতার লেখা। একটি বই এর মাঝেই থাকছে-</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> <strong>স্বরবর্ণ</strong> (অ,আ,ই…), <strong>ব্যঞ্জনবর্ণ</strong> (ক,খ,গ…), বড় ও ছোট হাতের <strong>এলফাবেট</strong> (A,B,C…) – (a,b,c…), <strong>সংখ্যা</strong> (১,২,৩…), <strong>নাম্বার</strong> (1,2,3…), <strong>আরবি</strong> (…ب,ت,ث,।), <strong>মাস ও বারের</strong> নাম এবং ইংরেজি ও বাংলা <strong>ছড়া</strong> আরো অনেক কিছু।</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> বইটির সাথে থাকবে <strong>১টি কলম, ৫ টি শিষ এবং গ্রিপার</strong>।</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> বর্ণমালাগুলি খোদাই বা খাঁজকাটা থাকায় সহজেই শিশু তার উপর হাত ঘুরিয়ে লিখা শিখতে পারবে।</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> পরিবেশবান্ধব উন্নতমানের কাগজ ও লেমিনেটেড হওয়ায় সহজে ছিড়বে না।</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> লিখার পাশাপাশি বিভিন্ন রঙ এর ছবির সাথে মিলিয়ে শব্দ, বাক্য, ছড়া, দিনের নাম, মাসের নাম, কবিতা ইত্যাদি শিখতে পারবে।</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> সবকিছু একটি বই এ থাকায় শিশু নিজের ইচ্ছামতন স্বাধীনভাবে পাতা উল্টিয়ে দেখতে, লিখতে ও শিখতে পারবে।</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> গ্রিপারটি কলমে লাগিয়ে সহজেই ছোট ছোট হাতে লিখতে পারবে।</p><p><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"> বাজারের অন্যান্য বই এর চেয়ে মানসম্পন্ন এবং নির্ভরযোগ্য দামে এই ম্যাজিক হাতের লেখা শিখার বইটি</p>', '1715844529.jpeg', '2024-05-16 17:26:18', '2024-05-16 17:28:49'),
(154, 1, 1, 75, 1, 'Party Spray 30g', NULL, 'abrarmart 122900', 'same as imge', 0, '30g', 'Yes', 'Not_Apply', 0, 30, 40, 10, 4, NULL, NULL, 'Active', NULL, '<ul><li>Product Type: Snow Spray</li><li>No extra gas</li><li>Colour: White</li><li>Good quality product</li><li>Enjoy your party with this Spray</li><li>88 %more</li><li>Product Type: Snow Spray</li><li>No extra gas</li><li>Good quality product</li><li>Enjoy your party with this Spray</li></ul>', '1715848536.jpeg', '2024-05-16 18:35:36', '2024-05-16 18:35:36'),
(155, 1, 1, 75, 1, 'PARTY SPRAY 550ML', NULL, 'abrarmart 1221008', 'same as imge', 0, '550', 'Yes', 'Not_Apply', 0, 300, 400, 10, 4, NULL, NULL, 'Active', NULL, '<p>Made in Taiwan; Size: Large; quantity: Single</p>', '1715848958.jpeg', '2024-05-16 18:42:38', '2024-05-16 18:42:38'),
(156, 2, 19, 163, 1, 'Birthday package', NULL, 'abrarmart122110', 'same as imge', 0, '10g', 'Yes', 'Not_Apply', 0, 700, 1200, 1, 4, NULL, NULL, 'Active', NULL, '<p>Send all Birthday accessories in one deal gift to anywhere in Bangladesh. This is a great package to add with any cake for anyone at any age to spice up the party. This package includes:</p><ol><li>One Birthday Banner&nbsp;</li><li>&nbsp;(100) pcs&nbsp;Birthday party balloons</li><li>10 Birthday Party Caps</li><li>One plastic cake server</li><li>Birthday candle box</li><li>&nbsp;One pac of (6 pc) spark candle</li><li>fox packet candy</li><li>One snow spray.</li><li>One big party poppers boom</li></ol>', '1715927010.jpeg', '2024-05-17 16:23:30', '2024-05-17 16:34:59'),
(157, 7, 7, 157, 1, 'সোনাপাতা গুড়া)250g', NULL, 'abrarmart 122112', 'same as imge', 0, '250g', 'Yes', 'Not_Apply', 0, 50, 100, 1, 4, NULL, NULL, 'Active', NULL, '<p><strong>উপাদান-</strong> প্রাকৃতিক উপায়ে পরিশোধিত সোনাপাতা।</p><p><strong>উপকারিতা-</strong></p><p>১। শরীরের ওজন কমাতে সাহায্য করে।</p><p>২। উচ্চ রক্তচাপ কমাতে সাহায্য করে।</p><p>৩। হজম প্রক্রিয়াকে সক্রিয় করে।</p><p>৪। কোষ্ঠকাঠিন্য দূর করতে চমৎকার কাজ করে।</p><p><strong>ব্যবহারবিধি-</strong></p><p>প্রতিদিন ২০-৪০ মিলিগ্রাম সোনাপাতা গুঁড়া এক গ্লাস গরম পানিতে ভিজিয়ে রেখে সকালে পান করতে হবে।</p><p>&nbsp;</p><p><strong>সতর্কতা-</strong></p><p>এটি সপ্তাহে ২ দিনের বেশি পান করা ঠিক নয়। অন্ত্রের কোনো রোগ থাকলে যেমন অন্ত্রের প্রদাহ, আলসার এসব ক্ষেত্রে সোনাপাতা ব্যবহার করা যাবে না।</p>', '1715929476.jpeg', '2024-05-17 17:04:36', '2024-05-17 17:04:36'),
(161, 1, 1, 71, 1, 'Test Product', 'test-product', 'zariq-1', NULL, NULL, NULL, 'Yes', 'Not_Apply', 0, 100, 150, 10, NULL, NULL, NULL, 'Active', '<p>Details</p>', '<p>More Information</p>', '1716891187.jpeg', '2024-05-28 04:13:07', '2024-05-28 04:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `image`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, '1715920893.jpg', 'Winter Special', 'Active', '2023-12-20 15:41:47', '2024-05-17 14:41:33'),
(2, '1715920873.jpg', 'Summer Special', 'Active', '2023-12-20 15:42:09', '2024-05-17 14:41:13'),
(6, '1715920835.jpg', 'Rainy special', 'Active', '2024-05-17 14:40:35', '2024-05-17 14:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'S', NULL, NULL),
(2, 'M', NULL, NULL),
(3, 'L', NULL, NULL),
(4, 'XL', NULL, NULL),
(5, 'XXL', NULL, NULL),
(10, '32', NULL, NULL),
(11, '34', NULL, NULL),
(12, '36', NULL, NULL),
(13, '38', NULL, NULL),
(14, '40', NULL, NULL),
(15, '42', NULL, NULL),
(16, '44', NULL, NULL),
(17, '46', NULL, NULL),
(18, '48', NULL, NULL),
(19, '4-5 YEARS', NULL, NULL),
(20, '6-7 YEARS', NULL, NULL),
(21, '8-9 YEARS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variation_details`
--

CREATE TABLE `product_variation_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_variations_id` bigint(20) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variation_details`
--

INSERT INTO `product_variation_details` (`id`, `product_id`, `product_variations_id`, `price`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(4, 13, 1, 0, 5, NULL, '2023-12-17 12:12:30', '2023-12-17 12:12:30'),
(5, 13, 2, 0, 10, NULL, '2023-12-17 12:12:30', '2023-12-17 12:12:30'),
(155, 75, 2, 0, 5, NULL, '2024-05-08 16:18:49', '2024-05-08 16:18:49'),
(156, 75, 2, 0, 5, NULL, '2024-05-08 16:18:49', '2024-05-08 16:18:49'),
(157, 75, 3, 0, 10, NULL, '2024-05-08 16:18:49', '2024-05-08 16:18:49'),
(158, 75, 4, 0, 15, NULL, '2024-05-08 16:18:49', '2024-05-08 16:18:49'),
(159, 75, 5, 0, 5, NULL, '2024-05-08 16:18:49', '2024-05-08 16:18:49'),
(160, 161, 1, 0, 5, NULL, '2024-05-28 22:52:04', '2024-05-29 05:04:58'),
(161, 161, 2, 0, 3, NULL, '2024-05-28 22:52:04', '2024-05-28 22:52:04'),
(162, 161, 3, 0, 5, NULL, '2024-05-28 22:52:04', '2024-05-28 22:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `line1` varchar(255) NOT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `available_qty` int(11) DEFAULT NULL,
  `alert_stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `quantity`, `available_qty`, `alert_stock`, `created_at`, `updated_at`) VALUES
(33, 44, 101, 98, 10, '2024-01-20 07:31:05', '2024-05-29 05:52:58'),
(62, 75, 50, 49, 10, '2024-05-08 15:49:30', '2024-05-16 16:31:22'),
(64, 77, 100, 98, 20, '2024-05-08 19:15:47', '2024-05-16 16:43:01'),
(65, 78, 100, 100, 20, '2024-05-08 19:19:46', '2024-05-16 20:48:26'),
(66, 79, 100, 100, 20, '2024-05-08 19:43:21', '2024-05-16 16:03:10'),
(67, 80, 100, 96, 20, '2024-05-08 19:46:20', '2024-05-16 16:19:34'),
(68, 81, 100, 100, 100, '2024-05-08 19:50:40', '2024-05-16 16:02:35'),
(69, 82, 1000, 1000, 23, '2024-05-08 19:52:32', '2024-05-16 20:47:34'),
(70, 83, 100, 100, 20, '2024-05-08 19:56:54', '2024-05-16 16:05:52'),
(71, 84, 100, 100, 20, '2024-05-08 19:58:51', '2024-05-16 20:47:48'),
(72, 85, 100, 100, 20, '2024-05-08 20:06:00', '2024-05-16 20:51:50'),
(73, 86, 100, 100, 20, '2024-05-08 20:08:44', '2024-05-16 16:07:46'),
(74, 87, 100, 99, 20, '2024-05-08 20:11:27', '2024-05-16 16:12:54'),
(75, 88, 100, 100, 20, '2024-05-08 20:13:57', '2024-05-16 20:51:36'),
(76, 89, 1000, 1000, 10, '2024-05-08 20:26:01', '2024-05-16 20:50:35'),
(77, 90, 50, 50, 10, '2024-05-08 21:12:10', '2024-05-16 16:02:00'),
(78, 93, 1000, 1000, 30, '2024-05-08 21:55:22', '2024-05-16 20:51:25'),
(79, 94, 1000, 1000, 10, '2024-05-08 22:07:02', '2024-05-16 20:49:43'),
(80, 95, 100, 100, 5, '2024-05-08 22:18:58', '2024-05-16 20:49:53'),
(81, 96, 1000, 999, 10, '2024-05-08 22:32:25', '2024-05-18 02:07:09'),
(82, 97, 100, 100, 10, '2024-05-08 22:38:53', '2024-05-16 15:53:01'),
(83, 98, 1000, 1000, 20, '2024-05-08 22:47:05', '2024-05-16 20:46:42'),
(84, 99, 30, 30, 10, '2024-05-08 23:00:54', '2024-05-16 16:06:53'),
(85, 100, 90, 90, 20, '2024-05-08 23:05:40', '2024-05-16 20:52:17'),
(86, 101, 90, 90, 10, '2024-05-08 23:09:33', '2024-05-16 16:09:10'),
(87, 102, 90, 90, 10, '2024-05-08 23:18:09', '2024-05-16 16:09:00'),
(89, 104, 99, 99, 10, '2024-05-09 00:27:19', '2024-05-16 16:07:04'),
(94, 109, 50, 50, 10, '2024-05-09 03:59:46', '2024-05-16 16:04:53'),
(95, 110, 70, 70, 10, '2024-05-09 04:04:26', '2024-05-16 16:06:21'),
(96, 111, 50, 50, 10, '2024-05-09 04:10:27', '2024-05-16 16:06:32'),
(97, 112, 10, 10, 1, '2024-05-09 04:16:00', '2024-05-16 16:05:01'),
(98, 113, 10, 10, 1, '2024-05-09 04:23:48', '2024-05-16 16:04:45'),
(99, 114, 40, 40, 10, '2024-05-09 04:34:12', '2024-05-16 20:49:29'),
(100, 115, 50, 50, 10, '2024-05-09 21:09:57', '2024-05-16 16:06:07'),
(101, 116, 40, 40, 10, '2024-05-09 21:12:43', '2024-05-16 20:48:15'),
(102, 117, 50, 50, 10, '2024-05-14 21:00:12', '2024-05-16 16:03:54'),
(103, 120, 1000, 1000, 100, '2024-05-15 15:33:50', '2024-05-16 16:07:56'),
(104, 121, 50, 50, 10, '2024-05-15 18:04:45', '2024-05-16 16:04:15'),
(105, 122, 100, 100, 10, '2024-05-15 18:11:11', '2024-05-16 20:48:50'),
(106, 123, 50, 50, 10, '2024-05-15 18:19:44', '2024-05-16 16:03:42'),
(107, 124, 100, 100, 10, '2024-05-15 18:33:14', '2024-05-16 16:03:31'),
(108, 125, 160, 160, 20, '2024-05-15 18:39:36', '2024-05-16 20:55:09'),
(109, 126, 80, 80, 10, '2024-05-15 18:44:30', '2024-05-16 16:02:13'),
(110, 127, 100, 100, 10, '2024-05-15 18:57:09', '2024-05-16 16:05:38'),
(111, 128, 120, 120, 10, '2024-05-16 03:27:49', '2024-05-16 20:49:01'),
(112, 129, 120, 120, 12, '2024-05-16 03:31:12', '2024-05-16 20:48:38'),
(113, 130, 120, 120, 10, '2024-05-16 03:37:57', '2024-05-16 20:47:15'),
(114, 131, 100, 100, 5, '2024-05-16 03:43:18', '2024-05-16 16:07:33'),
(115, 132, 50, 50, 5, '2024-05-16 03:50:18', '2024-05-16 16:05:25'),
(116, 133, 50, 50, 5, '2024-05-16 03:55:48', '2024-05-16 20:48:03'),
(117, 134, 40, 40, 2, '2024-05-16 04:02:03', '2024-05-16 16:08:32'),
(118, 135, 60, 60, 5, '2024-05-16 04:09:05', '2024-05-16 20:53:14'),
(119, 136, 50, 50, 5, '2024-05-16 04:17:04', '2024-05-16 20:52:54'),
(120, 137, 40, 40, 10, '2024-05-16 04:23:16', '2024-05-16 20:52:39'),
(121, 138, 70, 70, 5, '2024-05-16 04:27:13', '2024-05-16 20:52:28'),
(122, 139, 100, 100, 5, '2024-05-16 04:34:24', '2024-05-16 16:02:49'),
(123, 140, 16, 16, 1, '2024-05-16 12:17:20', '2024-05-16 20:50:47'),
(124, 141, 25, 25, 1, '2024-05-16 12:27:19', '2024-05-16 20:51:11'),
(125, 142, 35, 35, 5, '2024-05-16 12:31:40', '2024-05-16 20:53:28'),
(126, 143, 5, 5, 1, '2024-05-16 12:54:36', '2024-05-16 20:46:03'),
(127, 144, 30, 30, 2, '2024-05-16 13:02:09', '2024-05-16 20:53:55'),
(128, 145, 40, 40, 3, '2024-05-16 13:08:29', '2024-05-16 20:46:23'),
(129, 146, 60, 60, 5, '2024-05-16 13:21:22', '2024-05-16 16:05:12'),
(130, 147, 16, 16, 4, '2024-05-16 13:28:07', '2024-05-16 20:53:43'),
(131, 148, 10, 10, 1, '2024-05-16 13:57:29', '2024-05-16 16:06:41'),
(132, 149, 60, 60, 5, '2024-05-16 14:51:23', '2024-05-16 20:50:16'),
(133, 151, 50, 50, 5, '2024-05-16 15:03:58', '2024-05-16 16:04:36'),
(134, 152, 50, 48, 40, '2024-05-16 15:17:42', '2024-05-16 16:19:02'),
(135, 153, 50, 50, 10, '2024-05-16 17:26:18', '2024-05-16 17:26:18'),
(136, 154, 300, 300, 10, '2024-05-16 18:35:36', '2024-05-16 18:35:36'),
(137, 155, 70, 70, 10, '2024-05-16 18:42:38', '2024-05-16 18:42:38'),
(138, 156, 20, 20, 1, '2024-05-17 16:23:30', '2024-05-17 16:23:30'),
(139, 157, 5, 5, 1, '2024-05-17 17:04:36', '2024-05-17 17:04:36'),
(140, 161, 100, 13, 10, '2024-05-28 04:13:07', '2024-05-29 05:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `mode` enum('cod','card','mobile_banking') NOT NULL DEFAULT 'cod',
  `status` enum('pending','approved','declined','refunded') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'cod', 'pending', '2023-12-02 21:13:03', '2023-12-02 21:13:03'),
(2, 3, 2, 'cod', 'pending', '2023-12-03 19:53:45', '2023-12-03 19:53:45'),
(3, 3, 3, 'cod', 'pending', '2023-12-03 19:58:39', '2023-12-03 19:58:39'),
(4, 7, 4, 'cod', 'pending', '2023-12-07 12:55:17', '2023-12-07 12:55:17'),
(5, 2, 9, 'cod', 'pending', '2023-12-15 16:30:08', '2023-12-15 16:30:08'),
(6, 7, 10, 'cod', 'pending', '2023-12-18 00:11:55', '2023-12-18 00:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'piece', NULL, NULL, NULL),
(2, 'box', NULL, NULL, NULL),
(3, 'meter', NULL, NULL, NULL),
(4, 'cft', NULL, NULL, NULL),
(5, 'kg', NULL, NULL, NULL),
(6, 'liter', NULL, NULL, NULL),
(7, 'gm', NULL, NULL, NULL),
(8, 'dozon', NULL, NULL, NULL),
(9, 'cm', NULL, NULL, NULL),
(10, 'mm', NULL, NULL, NULL),
(11, 'ft', NULL, NULL, NULL),
(12, 'yard', NULL, NULL, NULL),
(13, 'ml', NULL, NULL, NULL),
(14, 'syp', NULL, NULL, NULL),
(15, 'bag', NULL, NULL, NULL),
(16, 'packet', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `designation_id` bigint(20) NOT NULL DEFAULT 0,
  `district` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` enum('Admin','Customer') NOT NULL DEFAULT 'Customer',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `designation_id`, `district`, `address`, `image`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morshed Ahmed', 'superadmin@gmail.com', '017', NULL, '$2y$10$7MoHhANxFYCYBRPI.kpTm.SmlyfOXLWhazIOuAbBrMFvtr/d1MPzm', 0, NULL, 'abc', NULL, 'Admin', 'Active', NULL, NULL, NULL),
(2, 'ADMIN', 'flarish@gmail.com', '018', NULL, '$2y$10$XRbmmAK7EvqH2AdY/5oSee/nftOL2Yba4oWpSD8UC6xjQKArtdchK', 0, NULL, 'abc', NULL, 'Admin', 'Active', NULL, NULL, NULL),
(18, 'demo', 'demo@gmail.com', '01714294499', NULL, '$2y$12$F25ukxNAj6eAyQMqsA4BBupQSzyGYwRutnGpkFD7G9s94XLXnVzQm', 0, NULL, 'mirpur 11', NULL, 'Customer', 'Active', NULL, '2024-05-14 12:21:58', '2024-05-30 03:17:28'),
(19, 'shahjalal', 'shahjalal4645@gmail.com', '01849448551', NULL, '$2y$12$Gdfp61jWjWGeCfyKEmtmL.s/zW9njLn/9gLoCzFN0Qp5yx6HGxbI2', 0, NULL, 'noakhali', NULL, 'Customer', 'Active', NULL, '2024-05-14 13:09:21', '2024-05-30 03:29:27'),
(20, 'Md. Mohsin Kabir', 'mohsinkabirseo@gmail.com', '01518301098', NULL, '$2y$12$ZwPelP.WQ.HxPk.es3ctZehhixFvenGhALI8P0ZwS8OFDhzd4WmNW', 0, NULL, 'Shewrapara, Mirpur, Dhaka', NULL, 'Customer', 'Active', NULL, '2024-05-18 01:59:14', '2024-05-18 01:59:14'),
(23, 'new customer', 'customer@gmail.com', '01909146434', NULL, '$2y$10$PZl8NdTJKPPI7LZ7/kFvSesURU2brBCi/P6jD/IQZ2UhFdRivKhBm', 0, NULL, 'Afsana tower, 18 Alaul Avenue, Sector-6, Uttara', NULL, 'Customer', 'Active', NULL, '2024-06-01 21:51:06', '2024-06-01 21:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `view_sections`
--

CREATE TABLE `view_sections` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `view_sections`
--

INSERT INTO `view_sections` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Arrival', 'new_arrival', 'Active', '2024-05-04 08:03:28', '2024-05-04 08:04:46'),
(2, 'Feature Products', 'feature_products', 'Active', '2024-05-04 09:51:44', '2024-05-04 09:51:44'),
(3, 'Most Popular', 'most_popular', 'Active', '2024-05-04 09:51:55', '2024-05-04 09:51:55'),
(4, 'Best Seller', 'best_seller', 'Active', '2024-05-04 09:52:10', '2024-05-04 09:52:10'),
(5, 'Flash Sell', 'flash_sell', 'Active', '2024-05-04 09:52:29', '2024-05-04 09:52:29'),
(6, 'Speacial Offer', 'speacial_offer', 'Active', '2024-05-04 09:52:50', '2024-05-04 09:52:50'),
(7, 'Trending Products', 'trending_products', 'Active', '2024-05-04 09:53:06', '2024-05-04 09:53:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variation_details`
--
ALTER TABLE `product_variation_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `view_sections`
--
ALTER TABLE `view_sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_variation_details`
--
ALTER TABLE `product_variation_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `view_sections`
--
ALTER TABLE `view_sections`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
