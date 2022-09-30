-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 12:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarthaknotebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_carts`
--

CREATE TABLE `add_to_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_to_carts`
--

INSERT INTO `add_to_carts` (`id`, `product_id`, `user_id`, `quantity`, `delete_status`, `created_at`, `updated_at`) VALUES
(92, '2', '6', '2', 0, '2022-08-23 04:40:23', '2022-08-23 04:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `image`, `description`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Long Register', '1660130050.jpg', NULL, 1, 0, '2022-08-10 04:51:21', '2022-08-10 05:44:10'),
(2, 'Convent Notebook', '1660129997.jpg', NULL, 1, 0, '2022-08-10 05:43:17', '2022-08-10 05:43:17'),
(3, 'A4 Notbook', '1660130832.jpg', NULL, 1, 0, '2022-08-10 05:57:12', '2022-08-10 05:57:12'),
(4, 'A4 Spiral Notbook', '1660130889.jpg', NULL, 1, 0, '2022-08-10 05:58:09', '2022-08-10 05:58:09'),
(5, 'Practical Notbook', '1660131105.jpg', NULL, 1, 0, '2022-08-10 05:59:07', '2022-08-10 06:01:45'),
(6, 'Test Notebook', '1660131115.jpg', NULL, 1, 0, '2022-08-10 05:59:36', '2022-08-10 06:01:55'),
(7, 'Register Notbook', '1660131008.jpg', NULL, 1, 0, '2022-08-10 06:00:08', '2022-08-10 06:00:08'),
(8, 'Scrap Book', '1660131044.jpg', NULL, 1, 0, '2022-08-10 06:00:44', '2022-08-10 06:00:44'),
(9, 'Drawing Notebook', '1660131076.jpg', NULL, 1, 0, '2022-08-10 06:01:13', '2022-08-10 06:01:16'),
(10, NULL, '1660281190.jpg', NULL, 1, 1, '2022-08-11 23:43:10', '2022-08-11 23:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `contact`, `message`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'demo@fgfrh', '4766876980', 'hbfhsar ewretryt', 1, 0, '2022-08-19 04:20:03', '2022-08-19 04:20:03'),
(2, 'vgvdfs', 'ddg@ghfrhgf', '64565767', 'koipjkkk', 1, 0, '2022-08-19 04:37:00', '2022-08-19 04:37:00'),
(3, 'Paki Ramos', 'jefuqony@mailinator.com', '184', 'Eveniet in pariatur', 1, 0, '2022-09-30 04:42:26', '2022-09-30 04:42:26');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `image`, `email`, `subject`, `message`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'sgryhrfhs', '1660653100.png', 'anchal@dubey.com', 'ncndnvnfnvsu', 'bhdsh yhrhyrh rthrh', 1, 0, '2022-08-16 07:01:40', '2022-08-16 07:01:40'),
(2, 'Vaani', '1660653191.png', 'xanchal@123.com', 'cafumgdgdg', 'cvdr sdgdrhrf syhyhrfh', 1, 0, '2022-08-16 07:03:11', '2022-08-16 07:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, '1660281234.jpg', '0', '2022-08-11 23:43:54', '2022-08-11 23:43:54'),
(2, '1660646300.jpg', '0', '2022-08-16 05:06:56', '2022-08-16 05:08:20'),
(3, '1660646226.jpg', '0', '2022-08-16 05:07:06', '2022-08-16 05:07:06'),
(4, '1660646238.jpg', '0', '2022-08-16 05:07:18', '2022-08-16 05:07:18'),
(5, '1660646250.png', '0', '2022-08-16 05:07:30', '2022-08-16 05:07:30'),
(6, '1660646264.jpg', '0', '2022-08-16 05:07:44', '2022-08-16 05:07:44');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_16_102825_create_subscribes_table', 2),
(6, '2022_06_23_090921_create_settings_table', 2),
(7, '2022_07_18_070159_create_categories_table', 2),
(8, '2022_07_18_095953_create_products_table', 2),
(9, '2022_07_19_070813_create_multiimages_table', 3),
(10, '2022_07_05_120636_create_galleries_table', 4),
(11, '2022_07_22_065125_create_add_to_carts_table', 5),
(12, '2022_07_26_105314_create_wishlists_table', 6),
(13, '2022_06_16_091607_create_feedback_table', 7),
(23, '2022_07_28_075436_create_orders_table', 8),
(24, '2022_07_28_075854_create_order_items_table', 8),
(25, '2022_08_02_055038_create_payments_table', 8),
(28, '2022_06_16_090049_create_enquiries_table', 9),
(29, '2022_08_19_082633_create_contacts_table', 10),
(30, '2022_08_22_050101_create_topproducts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `multiimages`
--

CREATE TABLE `multiimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `imageName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiimages`
--

INSERT INTO `multiimages` (`id`, `product_id`, `imageName`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 1, '166013362152.jpg', 0, '2022-08-10 06:43:41', '2022-08-10 06:43:41'),
(2, 1, '166013362196.jpg', 0, '2022-08-10 06:43:41', '2022-08-10 06:43:41'),
(3, 1, '166013362184.jpg', 0, '2022-08-10 06:43:41', '2022-08-10 06:43:41'),
(4, 4, '166081231767.jpg', 0, '2022-08-18 03:15:17', '2022-08-18 03:15:17'),
(5, 4, '166081231787.jpg', 0, '2022-08-18 03:15:17', '2022-08-18 03:15:17'),
(6, 4, '16608123172.jpg', 0, '2022-08-18 03:15:17', '2022-08-18 03:15:17'),
(7, 2, '166081245525.jpg', 0, '2022-08-18 03:17:35', '2022-08-18 03:17:35'),
(8, 2, '166081245571.jpg', 0, '2022-08-18 03:17:35', '2022-08-18 03:17:35'),
(9, 2, '166081245547.png', 0, '2022-08-18 03:17:35', '2022-08-18 03:17:35'),
(10, 3, '166081247976.jpg', 0, '2022-08-18 03:17:59', '2022-08-18 03:17:59'),
(11, 3, '166081247929.png', 0, '2022-08-18 03:17:59', '2022-08-18 03:17:59'),
(12, 3, '166081247945.jpg', 0, '2022-08-18 03:17:59', '2022-08-18 03:17:59'),
(13, 5, '166081251737.jpg', 0, '2022-08-18 03:18:37', '2022-08-18 03:18:37'),
(14, 5, '166081251711.png', 0, '2022-08-18 03:18:37', '2022-08-18 03:18:37'),
(15, 5, '166081251769.jpg', 0, '2022-08-18 03:18:37', '2022-08-18 03:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` tinyint(4) NOT NULL DEFAULT 1,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` date DEFAULT NULL,
  `outfordelivery_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `zipcode`, `payment_id`, `payment_mode`, `order_status`, `payment_status`, `message`, `tracking_no`, `shipped_date`, `outfordelivery_date`, `created_at`, `updated_at`) VALUES
(10, '1', '1180', 'Wegentum Tech', 'anchal@123', '354654656', NULL, NULL, NULL, NULL, NULL, NULL, ' ', 'COD', 1, 'pending', NULL, 'welcome2753', NULL, NULL, '2022-08-23 01:59:58', '2022-08-23 01:59:58'),
(11, '1', '780', 'Wegentum Tech', 'anchal@123', '354654656', NULL, NULL, NULL, NULL, NULL, NULL, ' ', 'COD', 4, NULL, NULL, 'welcome3796', NULL, NULL, '2022-08-23 02:02:14', '2022-08-23 06:43:52'),
(12, '1', '780', 'Wegentum Tech', 'anchal@123', '354654656', 'fgfhfhbsfgs', 'fjfjfh', 'trtrtrtrt', 'fhfhfh', 'hffh', '68686', ' ', 'COD', 1, 'pending', 'hthtyhtyh', 'welcome7194', NULL, NULL, '2022-08-23 03:31:30', '2022-08-23 03:31:30'),
(13, '1', '380', 'Wegentum Tech', 'anchal@123', '354654656', 'fgfhfhbsfgs', 'fjfjfh', 'trtrtrtrt', 'fhfhfh', 'hffh', '68686', ' ', 'COD', 1, 'pending', 'hthtyhtyh', 'welcome3965', NULL, NULL, '2022-08-23 05:00:42', '2022-08-23 05:00:42'),
(16, '3', '400', 'Anchal', 'anchal@dubey.com', '1324356467', 'inigerinr', 'nnijfifrtfgr', 'fhfhf', 'fhfhfhrutu', 'pilkhtyhh', '678984', ' ', 'COD', 2, 'pending', 'mkloiukjhjh', 'welcome6393', NULL, NULL, '2022-08-23 05:45:34', '2022-08-23 05:45:51'),
(26, '7', '455', 'Tate Medina', 'vejaqyjy@mailinator.com', '+1 (221) 789-4533', '947 West Old Freeway', '769 Old Extension', '517 East Rocky Oak Extension', '290 Clarendon Freeway', '39 West White Nobel Boulevard', '278 New Drive', ' ', 'COD', 1, 'pending', '198 West New Road', 'welcome4943', NULL, NULL, '2022-09-30 02:30:51', '2022-09-30 02:30:51'),
(27, '9', '899', 'Gyan Verma', 'admin123@gmail.com', '6307233365', 'Gilat Bazar, Shivpur Varanasi', 'Tarna Shivpur', 'Varanasi', 'Uttar Pradesh', 'Nesciunt vel irure', '221105', ' ', 'COD', 1, 'pending', 'rtdgvcgfghf', 'welcome1336', NULL, NULL, '2022-09-30 02:36:42', '2022-09-30 02:36:42'),
(28, '10', '210', 'demo1', 'shop@gmail.com', NULL, 'Gilat Bazar, Shivpur Varanasi', 'Varanasi', 'Varanasi', 'Uttar Pradesh', 'Earum sunt officiis', '0001', ' ', 'COD', 1, 'pending', 'gtgjdfjkglksdfjhgksdfhgjsdfhg', 'welcome5364', NULL, NULL, '2022-09-30 03:09:43', '2022-09-30 03:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '3', '200', '2022-08-17 03:20:03', '2022-08-17 03:20:03'),
(2, '1', '3', '2', '190', '2022-08-17 03:20:03', '2022-08-17 03:20:03'),
(3, '2', '3', '3', '190', '2022-08-17 03:21:06', '2022-08-17 03:21:06'),
(4, '3', '2', '2', '210', '2022-08-17 03:26:26', '2022-08-17 03:26:26'),
(5, '4', '3', '2', '190', '2022-08-17 04:31:11', '2022-08-17 04:31:11'),
(6, '5', '2', '3', '210', '2022-08-17 04:38:16', '2022-08-17 04:38:16'),
(7, '8', '2', '2', '210', '2022-08-17 05:02:13', '2022-08-17 05:02:13'),
(8, '11', '3', '6', '190', '2022-08-17 05:07:48', '2022-08-17 05:07:48'),
(9, '11', '2', '2', '210', '2022-08-17 05:07:48', '2022-08-17 05:07:48'),
(10, '14', '1', '2', '200', '2022-08-17 05:12:46', '2022-08-17 05:12:46'),
(11, '14', '2', '1', '210', '2022-08-17 05:12:46', '2022-08-17 05:12:46'),
(12, '15', '2', '2', '210', '2022-08-17 05:22:42', '2022-08-17 05:22:42'),
(13, '16', '1', '2', '200', '2022-08-17 05:24:47', '2022-08-17 05:24:47'),
(14, '16', '2', '3', '210', '2022-08-17 05:24:47', '2022-08-17 05:24:47'),
(15, '17', '1', '2', '200', '2022-08-17 05:26:15', '2022-08-17 05:26:15'),
(16, '18', '3', '2', '190', '2022-08-17 05:27:49', '2022-08-17 05:27:49'),
(17, '19', '2', '2', '210', '2022-08-17 05:28:55', '2022-08-17 05:28:55'),
(18, '20', '1', '2', '200', '2022-08-17 05:30:28', '2022-08-17 05:30:28'),
(19, '21', '1', '2', '200', '2022-08-17 05:31:55', '2022-08-17 05:31:55'),
(20, '22', '2', '4', '210', '2022-08-18 04:47:22', '2022-08-18 04:47:22'),
(21, '22', '3', '3', '190', '2022-08-18 04:47:22', '2022-08-18 04:47:22'),
(22, '22', '1', '2', '200', '2022-08-18 04:47:22', '2022-08-18 04:47:22'),
(23, '22', '4', '2', '99', '2022-08-18 04:47:22', '2022-08-18 04:47:22'),
(24, '22', '5', '4', '65', '2022-08-18 04:47:22', '2022-08-18 04:47:22'),
(25, '23', '1', '2', '200', '2022-08-18 05:17:09', '2022-08-18 05:17:09'),
(26, '23', '2', '2', '210', '2022-08-18 05:17:09', '2022-08-18 05:17:09'),
(27, '24', '1', '2', '200', '2022-08-18 05:46:50', '2022-08-18 05:46:50'),
(28, '24', '2', '20', '210', '2022-08-18 05:46:50', '2022-08-18 05:46:50'),
(29, '24', '3', '1', '190', '2022-08-18 05:46:50', '2022-08-18 05:46:50'),
(30, '25', '1', '2', '200', '2022-08-19 01:50:43', '2022-08-19 01:50:43'),
(31, '25', '2', '2', '210', '2022-08-19 01:50:43', '2022-08-19 01:50:43'),
(32, '25', '3', '1', '190', '2022-08-19 01:50:43', '2022-08-19 01:50:43'),
(33, '26', '5', '2', '65', '2022-08-19 01:54:52', '2022-08-19 01:54:52'),
(34, '26', '4', '3', '99', '2022-08-19 01:54:52', '2022-08-19 01:54:52'),
(35, '27', '1', '2', '200', '2022-08-19 01:59:45', '2022-08-19 01:59:45'),
(36, '28', '3', '2', '190', '2022-08-19 02:02:51', '2022-08-19 02:02:51'),
(37, '1', '1', '2', '200', '2022-08-19 02:06:34', '2022-08-19 02:06:34'),
(38, '1', '3', '2', '190', '2022-08-19 02:06:34', '2022-08-19 02:06:34'),
(39, '3', '4', '2', '99', '2022-08-19 07:03:07', '2022-08-19 07:03:07'),
(40, '4', '5', '2', '65', '2022-08-23 01:08:53', '2022-08-23 01:08:53'),
(41, '4', '4', '2', '99', '2022-08-23 01:08:53', '2022-08-23 01:08:53'),
(42, '5', '1', '1', '200', '2022-08-23 01:21:06', '2022-08-23 01:21:06'),
(43, '5', '2', '2', '210', '2022-08-23 01:21:06', '2022-08-23 01:21:06'),
(44, '9', '1', '2', '200', '2022-08-23 01:58:31', '2022-08-23 01:58:31'),
(45, '10', '3', '4', '190', '2022-08-23 01:59:58', '2022-08-23 01:59:58'),
(46, '10', '2', '2', '210', '2022-08-23 01:59:58', '2022-08-23 01:59:58'),
(47, '11', '1', '2', '200', '2022-08-23 02:02:14', '2022-08-23 02:02:14'),
(48, '11', '3', '2', '190', '2022-08-23 02:02:14', '2022-08-23 02:02:14'),
(49, '12', '1', '2', '200', '2022-08-23 03:31:30', '2022-08-23 03:31:30'),
(50, '12', '3', '2', '190', '2022-08-23 03:31:30', '2022-08-23 03:31:30'),
(51, '13', '3', '2', '190', '2022-08-23 05:00:42', '2022-08-23 05:00:42'),
(52, '14', '1', '2', '200', '2022-08-23 05:02:08', '2022-08-23 05:02:08'),
(53, '16', '1', '2', '200', '2022-08-23 05:45:34', '2022-08-23 05:45:34'),
(54, '18', '2', '5', '210', '2022-09-30 01:44:43', '2022-09-30 01:44:43'),
(55, '18', '3', '9', '190', '2022-09-30 01:44:43', '2022-09-30 01:44:43'),
(56, '18', '4', '9', '99', '2022-09-30 01:44:43', '2022-09-30 01:44:43'),
(57, '18', '1', '1', '200', '2022-09-30 01:44:43', '2022-09-30 01:44:43'),
(58, '19', '2', '3', '210', '2022-09-30 01:56:27', '2022-09-30 01:56:27'),
(59, '19', '1', '3', '200', '2022-09-30 01:56:27', '2022-09-30 01:56:27'),
(60, '19', '3', '3', '190', '2022-09-30 01:56:27', '2022-09-30 01:56:27'),
(61, '19', '4', '5', '99', '2022-09-30 01:56:27', '2022-09-30 01:56:27'),
(62, '20', '1', '1', '200', '2022-09-30 02:17:33', '2022-09-30 02:17:33'),
(63, '20', '2', '1', '210', '2022-09-30 02:17:33', '2022-09-30 02:17:33'),
(64, '20', '3', '1', '190', '2022-09-30 02:17:33', '2022-09-30 02:17:33'),
(65, '21', '1', '1', '200', '2022-09-30 02:19:39', '2022-09-30 02:19:39'),
(66, '21', '2', '1', '210', '2022-09-30 02:19:39', '2022-09-30 02:19:39'),
(67, '22', '2', '1', '210', '2022-09-30 02:23:16', '2022-09-30 02:23:16'),
(68, '22', '1', '1', '200', '2022-09-30 02:23:16', '2022-09-30 02:23:16'),
(69, '22', '3', '1', '190', '2022-09-30 02:23:16', '2022-09-30 02:23:16'),
(70, '23', '6', '1', '100', '2022-09-30 02:25:27', '2022-09-30 02:25:27'),
(71, '23', '5', '1', '65', '2022-09-30 02:25:27', '2022-09-30 02:25:27'),
(72, '23', '4', '1', '99', '2022-09-30 02:25:27', '2022-09-30 02:25:27'),
(73, '24', '4', '1', '99', '2022-09-30 02:26:49', '2022-09-30 02:26:49'),
(74, '24', '5', '1', '65', '2022-09-30 02:26:49', '2022-09-30 02:26:49'),
(75, '24', '2', '1', '210', '2022-09-30 02:26:49', '2022-09-30 02:26:49'),
(76, '24', '1', '1', '200', '2022-09-30 02:26:49', '2022-09-30 02:26:49'),
(77, '25', '6', '2', '100', '2022-09-30 02:28:10', '2022-09-30 02:28:10'),
(78, '25', '4', '1', '99', '2022-09-30 02:28:10', '2022-09-30 02:28:10'),
(79, '25', '1', '1', '200', '2022-09-30 02:28:10', '2022-09-30 02:28:10'),
(80, '26', '5', '1', '65', '2022-09-30 02:30:51', '2022-09-30 02:30:51'),
(81, '26', '1', '1', '200', '2022-09-30 02:30:51', '2022-09-30 02:30:51'),
(82, '26', '3', '1', '190', '2022-09-30 02:30:51', '2022-09-30 02:30:51'),
(83, '27', '2', '1', '210', '2022-09-30 02:36:42', '2022-09-30 02:36:42'),
(84, '27', '3', '1', '190', '2022-09-30 02:36:42', '2022-09-30 02:36:42'),
(85, '27', '4', '1', '99', '2022-09-30 02:36:42', '2022-09-30 02:36:42'),
(86, '27', '1', '2', '200', '2022-09-30 02:36:42', '2022-09-30 02:36:42'),
(87, '28', '2', '1', '210', '2022-09-30 03:09:43', '2022-09-30 03:09:43');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_product` tinyint(4) NOT NULL DEFAULT 0,
  `p_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pqty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_mainimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In_stock',
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `p_name`, `top_product`, `p_price`, `m_price`, `pqty`, `short_description`, `description`, `discount`, `p_mainimg`, `stock_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Copy 1', 1, '200', '300', '-17', NULL, 'hy this is ....', '10', '1660132684.png', 'In_stock', 0, '2022-08-10 06:28:04', '2022-09-30 02:36:42'),
(2, 2, 'Copy 2', 1, '210', '250', '-18', NULL, '<p>ikohohuouo</p>', '5', '1660132791.jpg', 'In_stock', 0, '2022-08-10 06:29:51', '2022-09-30 03:09:43'),
(3, 9, 'Copy 3', 1, '190', '200', '-20', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 18px; letter-spacing: normal; background-color: rgba(231, 225, 251, 0.6);\">The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur perferendis porro assumenda ut adipisci nihil aliquam? Aperiam rem quibusdam odio.</span></p>', '5', '1660133259.jpg', 'In_stock', 0, '2022-08-10 06:37:39', '2022-09-30 02:36:42'),
(4, 1, 'Register Copy', 1, '99', '110', '-14', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 18px; letter-spacing: normal; background-color: rgba(231, 225, 251, 0.6);\">The best product descriptions address your ideal buyer directly and personally Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur perferendis porro assumenda ut adipisci nihil aliquam? Aperiam rem quibusdam odio.</span></p>', '4', '1660137999.jpg', 'In_stock', 0, '2022-08-10 07:56:39', '2022-09-30 02:36:42'),
(5, 9, 'drawing copy', 0, '65', '70', '-5', NULL, '<p>kiktkio</p>', '6', '1660799334.jpg', 'In_stock', 0, '2022-08-17 23:38:54', '2022-09-30 02:30:51'),
(6, 5, 'Practical copy', 0, '100', '120', '3', NULL, '<p>lorem tioipiuoliupli hdhhthhng ,ookjy,ypp</p>', '8', '1661168136.jpg', 'In_stock', 0, '2022-08-22 06:05:36', '2022-09-30 02:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_optional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `logo`, `contact_no`, `url`, `contact_optional`, `address`, `email`, `facebook_link`, `twitter_link`, `insta_link`, `linkedin_link`, `pinterest_link`, `google_link`, `f_about`, `g_map`, `delete_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sarthak Notebooks', '1660906511.jpg', '1234567890', NULL, '1223344556', 'sidsfd varanasi', 'sarthaknotebooks@mail.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', 'https://www.pinterest.com', 'https://www.google.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.', NULL, 0, 1, '2022-08-19 05:25:11', '2022-08-19 06:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subscribe At` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Un subscribe At` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `Subscribe At`, `Un subscribe At`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'fdfg@hytgh', NULL, NULL, 0, '2022-08-19 04:15:14', '2022-08-19 04:15:14'),
(2, 'ggrt@reg', NULL, NULL, 0, '2022-08-19 04:20:17', '2022-08-19 04:20:17'),
(3, 'vxdcg@ergrfg', NULL, NULL, 0, '2022-08-19 04:33:44', '2022-08-19 04:33:44'),
(4, 'gdfhgfg@bfvb', NULL, NULL, 0, '2022-08-19 04:34:44', '2022-08-19 04:34:44'),
(5, 'kujmh@yuy', NULL, NULL, 0, '2022-08-19 04:35:20', '2022-08-19 04:35:20'),
(6, 'fhfg@kjhng', NULL, NULL, 0, '2022-08-19 04:35:50', '2022-08-19 04:35:50'),
(7, 'gfgg@tgdg', NULL, NULL, 0, '2022-08-19 04:36:39', '2022-08-19 04:36:39'),
(8, 'gyan@wegentumtech.com', NULL, NULL, 0, '2022-09-30 04:45:28', '2022-09-30 04:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `topproducts`
--

CREATE TABLE `topproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_mainimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `zipcode`, `order_status`, `message`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'Wegentum Tech', 'anchal@123', '354654656', 'fgfhfhbsfgs', 'fjfjfh', 'trtrtrtrt', 'fhfhfh', 'hffh', '68686', 0, 'hthtyhtyh', NULL, '$2y$10$DOPkrgw1G5I3nCGiz0P.HOdZTfp3bdilY.u.DCIDEObpTiK1YDYp6', NULL, '2022-08-10 01:06:35', '2022-08-23 03:31:30'),
(2, 'customer', 'fhtgjngn', 'admin@145', '1324356467', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$Pk0.oJiwz/czLM1kTY//N.jIKWcPjwyNRZcWJbSI6AP8GblUXqdZm', NULL, '2022-08-10 01:08:35', '2022-08-10 01:08:35'),
(3, 'customer', 'Anchal', 'anchal@dubey.com', '1324356467', 'inigerinr', 'nnijfifrtfgr', 'fhfhf', 'fhfhfhrutu', 'pilkhtyhh', '678984', 0, 'mkloiukjhjh', NULL, '$2y$10$850TkxcLVwGJjZCKaYC0Uuu.Ieph1lhP9SmzX8K72xk7qlrNC.QGi', NULL, '2022-08-10 01:25:49', '2022-08-23 05:02:08'),
(4, 'Owner', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$nWOteGXMndspgwEBDXOJeO8H82R3ZxcwA9hXsQgwxI0m3GOQAFLwG', NULL, '2022-08-10 04:24:31', '2022-08-10 04:24:31'),
(6, 'customer', 'demo2', 'demo@123', '123123123', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$68zebpraRNj.YtZG16ckyueGel.0G85.PNued.PvvGcv4QwpwLHGy', NULL, '2022-08-23 04:39:37', '2022-08-23 04:39:37'),
(7, 'customer', 'Tate Medina', 'vejaqyjy@mailinator.com', '+1 (221) 789-4533', '947 West Old Freeway', '769 Old Extension', '517 East Rocky Oak Extension', '290 Clarendon Freeway', '39 West White Nobel Boulevard', '278 New Drive', 0, '198 West New Road', NULL, '$2y$10$JNj.jw5PgE1r31e6BTpheeckbXK9nyWIqrm5/bWko1CalvqtPYEAG', NULL, '2022-09-30 00:20:56', '2022-09-30 00:22:47'),
(9, 'customer', 'Gyan Verma', 'admin123@gmail.com', '6307233365', 'Gilat Bazar, Shivpur Varanasi', 'Tarna Shivpur', 'Varanasi', 'Uttar Pradesh', 'Nesciunt vel irure', '221105', 0, 'rtdgvcgfghf', NULL, '$2y$10$p4pKBvwYW4OnWJejAVRxiuaeGXSisWsTtsSEavWjoRXzO4d82Zw76', NULL, '2022-09-30 02:35:19', '2022-09-30 02:36:42'),
(10, 'customer', 'demo1', 'shop@gmail.com', NULL, 'Gilat Bazar, Shivpur Varanasi', 'Varanasi', 'Varanasi', 'Uttar Pradesh', 'Earum sunt officiis', '0001', 0, 'gtgjdfjkglksdfjhgksdfhgjsdfhg', NULL, '$2y$10$FXgAO4Z5lM72oIOps7Li4e6QW6QOdVBJ/PiTLtYNbz./owxiplKmC', NULL, '2022-09-30 03:03:04', '2022-09-30 03:09:43'),
(11, 'customer', 'project', 'project@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$i9ENBQ42cEXxvf7VlJtFEunBJeAJvBfRy7aR68MRG2KvM/mwUICfW', NULL, '2022-09-30 03:12:37', '2022-09-30 03:12:37'),
(12, 'customer', 'mm', 'mm@gmail.com', '87954648745', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$u/3c/2MuSb1Ivg3F4wxzkOhGWuDvD0oQo5TqYGJ2AYo8x6z5JP2d2', NULL, '2022-09-30 03:21:14', '2022-09-30 03:21:14'),
(14, 'customer', 'mm', 'mmee@gmail.com', '5487986532', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$fcBnKD96wMxMUxukzkG8WOIlRZQgDLhJSJWV7AMqS/r.zvWakEFh6', NULL, '2022-09-30 03:23:17', '2022-09-30 03:23:17'),
(15, 'customer', 'shop', 'gyan@wegentumtech.com', '8601996064', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$VVa57zKEIkUIIcpYiLpwcO9u9QHM8tl67jsdS.rScPRSNxGwfXP9a', NULL, '2022-09-30 03:28:17', '2022-09-30 03:28:17'),
(16, 'customer', 'apj', 'apj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$onnpxnSuQnmSXa3.h4FsMOBCyF/PsDiyVZ0Pe.TnRdSKr/LLh98mS', NULL, '2022-09-30 03:36:51', '2022-09-30 03:36:51'),
(18, 'customer', 'apjgg', 'apjdfg@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$QhMSNqsOb4ipMmZre0ZE6u0cBS8bGfC9sw/nU7O1Vh9GRjIPclfjm', NULL, '2022-09-30 03:38:09', '2022-09-30 03:38:09'),
(19, 'customer', 'apjggsd', 'apjsddfg@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$upsQWnZLkPHqkqmBBfBX4ub16pcMxKnhCq.yBf5AHvNdaPT/YAjMe', NULL, '2022-09-30 03:38:55', '2022-09-30 03:38:55'),
(21, 'customer', 'apjggsd', 'apjswdfg@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$BkMo68QfWrI9cLUTFUPHKum4WdiTjMi89EtskQhONv50oTrFBxUKy', NULL, '2022-09-30 03:40:19', '2022-09-30 03:40:19'),
(22, 'customer', 'cos', 'cos@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$YCJcaEhTmD9mpEAAifRQxuPzlyBUFkATofPZOxv2kyCdQjUwNsl4W', NULL, '2022-09-30 03:44:13', '2022-09-30 03:44:13'),
(23, 'customer', 'abs', 'abs@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$e35NGPLB4EUn4sgzO3YUEOLg9vLxKOaRM55aQ60OxrdKsEjsOTRf.', NULL, '2022-09-30 03:45:10', '2022-09-30 03:45:10'),
(24, 'customer', 'abs', 'abss@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$9tOd4vbr8KjtpO.NK4Xjr.sdfPu3gMkvfYVeT4AgJEiOUnWQRxBeu', NULL, '2022-09-30 03:46:43', '2022-09-30 03:46:43'),
(25, 'customer', 'abscc', 'absscv@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$XxFORpAxXvOBGZQ48ThtiejJXo4vL14TPQACRDGEdPKzywWfEkyDy', NULL, '2022-09-30 03:47:14', '2022-09-30 03:47:14'),
(26, 'customer', 'moj', 'moj@gmail.com', '5487896356', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$oKFGnIV13KgPHV9nrt5XYuO3sfwchvZLMyAUB.zsJ8gCGj5QSSQQ.', NULL, '2022-09-30 03:48:19', '2022-09-30 03:48:19'),
(27, 'customer', 'Logan Atkinson', 'fulozek@mailinator.com', '9', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$/xp6oohVJB3g34QlOq6W8OQ/gc.RosxFkoxGBME9u3f6m1qqTh5wu', NULL, '2022-09-30 03:49:50', '2022-09-30 03:49:50'),
(28, 'customer', 'Gavin Good', 'zavuhop@mailinator.com', '8', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$PxYvw22/l2FZf32Eb0tn3.U6x0aROBUtT2iM5Zq1X8xdKbdMjKLkO', NULL, '2022-09-30 03:50:21', '2022-09-30 03:50:21'),
(29, 'customer', 'Sonya Hamilton', 'xyjykaf@mailinator.com', '66', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$NoKU.fA2wHSezW2.qnbAwe2K5anOJZbrs47tsYUAKsJnh7DIVA3km', NULL, '2022-09-30 03:52:48', '2022-09-30 03:52:48'),
(30, 'customer', 'Phoebe Sweet', 'wuzokidu@mailinator.com', '100', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$rxZP/8yWMWpq69gu.QnMd.Q3cunLVk3fjjW9jXFl4WPahL5Tv.aRm', NULL, '2022-09-30 03:53:35', '2022-09-30 03:53:35'),
(31, 'customer', 'Tamara Wright', 'difat@mailinator.com', '93', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$XMWLwyXKHNX/UPj.ptnj7etZi/thaNz952gwRua2xHJHR4s5k.ksm', NULL, '2022-09-30 03:53:56', '2022-09-30 03:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `prod_id`, `delete_status`, `created_at`, `updated_at`) VALUES
(13, '1', '1', 0, '2022-08-23 01:20:11', '2022-08-23 01:20:11'),
(14, '1', '2', 1, '2022-08-23 01:20:12', '2022-08-23 01:20:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_carts`
--
ALTER TABLE `add_to_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiimages`
--
ALTER TABLE `multiimages`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topproducts`
--
ALTER TABLE `topproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_carts`
--
ALTER TABLE `add_to_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `multiimages`
--
ALTER TABLE `multiimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topproducts`
--
ALTER TABLE `topproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
