-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 01:53 AM
-- Server version: 10.3.35-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selodesign_swissdomainvault`
--

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `campaign_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upsell_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoiced_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_sub_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Paid','Unpaid','Cancelled','Refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `campaign_id`, `upsell_id`, `offer_id`, `invoiced_to`, `pay_to`, `total_sub_amount`, `total_amount`, `currency`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, '162090005530', '164421827634', '162090035263', 'sunil kumar<br>vill manjhot post office kuphara distt &amp; teh chamba pin no 176314(hp), vill manjhot post office kuphara distt &amp; teh chamba pin no 176314(hp)<br>chamba, Himachal Pradesh, 176314<br>India', 'Swissdomainvault Private Limited<br>Swissdomainvault address<br> - Swissdomainvault address2 147301 USA<br>Tel: (+41) 43 505 1054<br>CIN: 8568947685768456<br>PAN No. Hfdrtu847575<br>GST ID:  JKHjsfdjhsfgdsjhfgdhsfg<br>SAC CODE: 998315', '92.45', '92.45', 'CHF', 'Paid', '2022-02-07 12:18:01', '2022-02-07 12:18:01'),
(2, 7, '162090005530', '165147542145', '162090035263', 'sunil kumar<br>vill manjhot post office kuphara distt &amp; teh chamba pin no 176314(hp), vill manjhot post office kuphara distt &amp; teh chamba pin no 176314(hp)<br>chamba, Himachal Pradesh, 176314<br>India', 'Swissdomainvault Private Limited<br>Swissdomainvault address<br> - Swissdomainvault address2 147301 USA<br>Tel: (+41) 43 505 1054<br>CIN: 8568947685768456<br>PAN No. Hfdrtu847575<br>GST ID:  JKHjsfdjhsfgdsjhfgdhsfg<br>SAC CODE: 998315', '24.5', '24.5', 'CHF', 'Paid', '2022-05-02 11:10:29', '2022-05-02 11:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain_register_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dnsmanagement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idprotection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailforwarding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `enum_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enum_total_charged` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enum_registry_create_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enum_registry_exp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enum_order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enum_tracking_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enum_server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_time_perod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `domain_name`, `domain_price`, `service_name`, `service_category`, `domain_register_type`, `domain_quantity`, `dnsmanagement`, `idprotection`, `emailforwarding`, `invoice_id`, `enum_order_id`, `enum_total_charged`, `enum_registry_create_date`, `enum_registry_exp_date`, `enum_order_status`, `enum_tracking_key`, `enum_server`, `reg_time_perod`, `invoice_type`, `created_at`, `updated_at`) VALUES
(1, 'testinghgjfdhg.ch', '13.5', '', '', 'domain', '1', 'DNS Management', 'ID Protection', 'Email Forwarding', 1, '162722162', '8.95', '2022-02-07 07:18:00.000', '2023-02-07 07:18:00.000', 'Success', 'dfd89bd5-1919-479f-9299-4229713f4b30', '223.178.211.140', '1 Year', 'register_domain', '2022-02-07 12:18:01', '2022-02-07 12:18:01'),
(2, 'testinghgjfdhg.engineer', '27', '', '', 'domain', '1', '', '', '', 1, '162722162', '8.95', '2022-02-07 07:18:00.000', '2023-02-07 07:18:00.000', 'Success', 'dfd89bd5-1919-479f-9299-4229713f4b30', '223.178.211.140', '1 Year', 'register_domain', '2022-02-07 12:18:01', '2022-02-07 12:18:01'),
(3, 'testing-hgjfdhg.engineer', '27', '', '', 'domain', '1', '', '', '', 1, '162722162', '8.95', '2022-02-07 07:18:00.000', '2023-02-07 07:18:00.000', 'Success', 'dfd89bd5-1919-479f-9299-4229713f4b30', '223.178.211.140', '1 Year', 'register_domain', '2022-02-07 12:18:01', '2022-02-07 12:18:01'),
(4, 'testinghgjfdhg.ch', '24.95', 'Preferred', 'Wordpress Hosting', 'hosting', '1', '', '', '', 1, '162722162', '8.95', '2022-02-07 07:18:00.000', '2023-02-07 07:18:00.000', 'Success', 'dfd89bd5-1919-479f-9299-4229713f4b30', '223.178.211.140', '1 Year', 'register_domain', '2022-02-07 12:18:01', '2022-02-07 12:18:01'),
(5, 'care-sort.care', '24.5', '', '', 'domain', '1', '', '', '', 2, '297652661', '10.52', '2022-05-02 07:10:29.000', '2023-05-02 07:10:29.000', 'Success', '2576c1ac-5245-42c4-83c7-04dea55e1457', '223.178.212.238', '1 Year', 'register_domain', '2022-05-02 11:10:29', '2022-05-02 11:10:29');

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
(5, '2021_10_30_063326_add_user_type_fields_to_users', 2),
(6, '2021_11_03_053636_add_extra_fields_to_users', 3),
(7, '2021_11_09_071313_create_service_category_table', 4),
(8, '2021_11_11_080155_create_services_table', 5),
(9, '2021_11_17_105717_add_extra_fields_to_services', 6),
(21, '2022_02_01_115310_create_invoices_table', 7),
(22, '2022_02_01_122300_create_invoice_items_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sunilkumar1@gmail.com', '$2y$10$tSgp1dVyeMhWBkbP7K9R/.YigThlRoswBw1.tqwTBGLAbWawEk5fm', '2021-11-03 10:48:02'),
('sunilkumar@caresortsolutions.com', '$2y$10$S1tP8wMSRSPX6vcePWpRAeqkpDdusSJ4jlYMkUBA/1nGzj/IL.9rO', '2021-11-03 11:13:43');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Activate','Deactivate') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Activate',
  `service_category_id` int(11) NOT NULL,
  `is_popular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `description`, `short_desc`, `price`, `status`, `service_category_id`, `is_popular`, `created_at`, `updated_at`) VALUES
(6, 'Basic', 'basic', '<p> Perfect for personal sites or blogs. </p>\r\n    			                <p> <b> Starting At Only $8.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25,000 visitors</li>\r\n								</ul>', '<p> Perfect for personal sites or blogs. </p>\r\n    			                <p> <b> Starting At Only $8.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25,000 visitors</li>\r\n								</ul>', '8.99', 'Activate', 5, 'No', '2021-11-11 17:17:00', '2021-11-17 17:33:38'),
(7, 'Deluxe', 'deluxe', '<p> Perfect for the growing site. </p>\r\n    			                <p> <b> Starting At Only $12.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>15 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> &lt; 100,000 visitors</li>\r\n								</ul>', '<p> Perfect for the growing site. </p>\r\n    			                <p> <b> Starting At Only $12.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>15 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> &lt; 100,000 visitors</li>\r\n								</ul>', '12.95', 'Activate', 5, 'No', '2021-11-11 17:17:37', '2021-11-17 17:35:52'),
(8, 'Preferred', 'preferred', '<p> Simply the best package. </p>\r\n    			                <p> <b> Starting At Only $24.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 Domain Name</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>250,000 visitors</li>\r\n								</ul>', '<p> Simply the best package. </p>\r\n    			                <p> <b> Starting At Only $24.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 Domain Name</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>250,000 visitors</li>\r\n								</ul>', '24.95', 'Activate', 5, 'No', '2021-11-11 17:17:58', '2021-11-17 17:36:53'),
(9, 'Ultimate', 'ultimate', '<p> Need Power? This is for you </p>\r\n    			                <p> <b> Starting At Only $19.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>35 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>400,000 visitors</li>\r\n								</ul>', '<p> Need Power? This is for you </p>\r\n    			                <p> <b> Starting At Only $19.95/month</b> </p>\r\n    			                <ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n									<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>35 GB Storage</li>\r\n									<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>400,000 visitors</li>\r\n								</ul>', '19.95', 'Activate', 5, 'Yes', '2021-11-11 17:18:21', '2021-11-17 17:37:28'),
(16, 'Basic Hosting', 'basic-hosting', '<p> The Start Up Package </p>\r\n<p> <b> Starting AtStarting At Only $12.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25,000 visitors</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwith</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 B RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPU\'s</li>\r\n</ul>', '<p> The Start Up Package </p>\r\n<p> <b> Starting AtStarting At Only $12.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25,000 visitors</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwith</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 B RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPU\'s</li>\r\n</ul>', '12.95', 'Activate', 6, 'Yes', '2021-11-18 17:28:06', '2021-11-18 17:28:06'),
(17, 'BBB Hosting Package', 'bbb-hosting-package', '<p> The Start Up Package </p>\r\n<p> <b> Starting AtStarting At Only $12.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25,000 visitors</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwith</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 B RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPU\'s</li>\r\n</ul>', '<p> The Start Up Package </p>\r\n<p> <b> Starting AtStarting At Only $12.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 website</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>25,000 visitors</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwith</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 B RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPU\'s</li>\r\n</ul>', '12.95', 'Activate', 6, 'Yes', '2021-11-19 15:20:29', '2021-11-19 15:20:29'),
(18, 'Deluxe Hosting', 'deluxe-hosting', '<p>  The Speed Package </p>\r\n<p> <b> Starting At Only $19.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> Unlimited websites</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>100 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwith</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPU\'s</li>\r\n</ul>', '<p>  The Speed Package </p>\r\n<p> <b> Starting At Only $19.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> Unlimited websites</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>100 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwith</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPU\'s</li>\r\n</ul>', '19.95', 'Activate', 6, 'No', '2021-11-19 15:24:39', '2021-11-19 15:28:19'),
(19, 'Preferred Hosting', 'preferred-hosting', '<p> The Preferred Package </p>\r\n<p> <b> Starting At Only $24.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unlimited websites</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>500 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>6 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 CPU\'s</li>\r\n</ul>', '<p> The Preferred Package </p>\r\n<p> <b> Starting At Only $24.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"> <i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unlimited websites</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>500 GB Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Unmetered Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>6 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 CPU\'s</li>\r\n</ul>', '24.95', 'Activate', 6, 'Yes', '2021-11-19 15:26:54', '2021-11-19 15:26:54'),
(20, 'Basic', 'basic-1', '<p> The Basic VPS Package </p>\r\n<p> <b> Starting At Only $69.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>40 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux Only</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p> The Basic VPS Package </p>\r\n<p> <b> Starting At Only $69.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>40 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux Only</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '69.95', 'Activate', 7, 'No', '2021-11-19 15:33:09', '2021-11-19 15:40:58'),
(21, 'Deluxe', 'deluxe-1', '<p> The Deluxe VPS Package </p>\r\n<p> <b> Starting At Only $99.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>100 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux or Windows</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p> The Deluxe VPS Package </p>\r\n<p> <b> Starting At Only $99.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>100 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux or Windows</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '99.95', 'Activate', 7, 'No', '2021-11-19 15:34:50', '2021-11-19 15:41:49'),
(22, 'Preferred', 'preferred-1', '<p> The Preferred VPS Package </p>\r\n<p> <b> Starting At Only $139.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>125 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux or Windows</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p> The Preferred VPS Package </p>\r\n<p> <b> Starting At Only $139.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>4 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>125 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux or Windows</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '139.95', 'Activate', 7, 'Yes', '2021-11-19 15:36:56', '2021-11-19 15:42:30'),
(23, 'Ultimate', 'ultimate-1', '<p> The Ultimated VPS Package </p>\r\n<p> <b> Starting At Only $199.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>8 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>8 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>200 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux or Windows</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p> The Ultimated VPS Package </p>\r\n<p> <b> Starting At Only $199.95/month</b> </p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>8 CPA\'s</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>8 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>200 GB Hard Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Lynux or Windows</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '199.95', 'Activate', 7, 'No', '2021-11-19 15:38:41', '2021-11-19 15:43:16'),
(24, 'Basic', 'basic-2', '<p>The Basic Dedicated Server</p>\r\n<p><b> SINGLE PROCESSOR</b></p>\r\n<p>Intel Xeon E3-1230 v5 </p>\r\n<p><b>Starting At Only $229.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 4 Cores @ 3.4 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 16 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 2 x 250 GB SSD Primary Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p>The Basic Dedicated Server</p>\r\n<p><b> SINGLE PROCESSOR</b></p>\r\n<p>Intel Xeon E3-1230 v5 </p>\r\n<p><b>Starting At Only $229.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 4 Cores @ 3.4 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 16 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 2 x 250 GB SSD Primary Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '229.95', 'Activate', 8, 'No', '2021-11-19 15:47:22', '2021-11-19 15:47:22'),
(25, 'Deluxe', 'deluxe-2', '<p>The Deluxe Dedicated Server</p>\r\n<p><b>SINGLE PROCESSOR</b></p>\r\n<p>Intel Xeon E5-1650 v4</p>\r\n<p><b>Starting At Only $329.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>6 Cores @ 4.0 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>16 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 x 250 GB SSD Primary Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p>The Deluxe Dedicated Server</p>\r\n<p><b>SINGLE PROCESSOR</b></p>\r\n<p>Intel Xeon E5-1650 v4</p>\r\n<p><b>Starting At Only $329.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>6 Cores @ 4.0 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>16 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 x 250 GB SSD Primary Storage</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i> 5 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '329.95', 'Activate', 8, 'No', '2021-11-19 15:49:27', '2021-11-19 15:49:27'),
(26, 'Preferred', 'preferred-2', '<p>The Preferred Dedicated Server</p>\r\n<p><b>DUAL PROCESSOR</b></p>\r\n<p>Intel Xeon E5-2620 v4</p>\r\n<p><b>Starting At Only $429.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>16 Cores @ 2.1 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>32 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 x 480 GB Enterprise SSD Primary Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>8 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p>The Preferred Dedicated Server</p>\r\n<p><b>DUAL PROCESSOR</b></p>\r\n<p>Intel Xeon E5-2620 v4</p>\r\n<p><b>Starting At Only $429.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>16 Cores @ 2.1 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>32 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 x 480 GB Enterprise SSD Primary Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>8 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '429.95', 'Activate', 8, 'Yes', '2021-11-19 15:51:43', '2021-11-19 15:51:43'),
(27, 'Ultimate', 'ultimate-2', '<p>The Ultimate Dedicated Server</p>\r\n<p><b>DUAL PROCESSOR</b></p>\r\n<p>Intel Xeon E5-2620 v4</p>\r\n<p><b>Starting At Only $649.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>24 Cores @ 2.2 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>32 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 x 480 GB Enterprise SSD Primary Drive HW RAID 1</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '<p>The Ultimate Dedicated Server</p>\r\n<p><b>DUAL PROCESSOR</b></p>\r\n<p>Intel Xeon E5-2620 v4</p>\r\n<p><b>Starting At Only $649.95/month</b></p>\r\n<ul class=\"list-unstyled pl-0 mb-0 text-start\" id=\"PlanLists1\">\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>Includes</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>24 Cores @ 2.2 GHz</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>32 GB RAM</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>2 x 480 GB Enterprise SSD Primary Drive HW RAID 1</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>1 TB SATA Backup Drive</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>10 TB Bandwidth</li>\r\n	<li class=\"pb-2\"><i class=\"fa fa-check primary-clr pe-2\" aria-hidden=\"true\"></i>cPanel Control</li>\r\n</ul>', '649.95', 'Activate', 8, 'No', '2021-11-19 15:53:31', '2021-11-19 15:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Activate','Deactivate') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Activate',
  `is_featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `name`, `slug`, `description`, `short_desc`, `price`, `status`, `is_featured`, `created_at`, `updated_at`) VALUES
(5, 'Wordpress Hosting', 'wordpress-hosting', '<p>Headach free, highly secure, fast, and reliable wordpress hoting.<br></p>', '<p>Headach free, highly secure, fast, and reliable wordpress hoting.<br></p>', '10.95', 'Activate', 'Yes', '2021-11-11 11:58:02', '2021-11-17 16:06:52'),
(6, 'Cloud Hosting', 'cloud-hosting', '<p>Reseller plans are designed for you to earn money!<br></p>', '<p>Reseller plans are designed for you to earn money!<br></p>', '13.95', 'Activate', 'Yes', '2021-11-11 11:58:54', '2021-11-11 11:58:54'),
(7, 'VPS Hosting', 'vps-hosting', '<p>Dedicated functionality, but without the expense.<br></p>', '<p>Dedicated functionality, but without the expense.<br></p>', '70.95', 'Activate', 'Yes', '2021-11-11 11:59:42', '2021-11-11 11:59:42'),
(8, 'Dedicated Servers', 'dedicated-servers', '<p>Total control over your hosting configuration and environment.<br></p>', '<p>Total control over your hosting configuration and environment.<br></p>', '230.95', 'Activate', 'Yes', '2021-11-11 12:00:49', '2021-11-11 12:00:49');

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
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default_user.png',
  `user_type` enum('Admin','Customer','Subscriber','Guest') COLLATE utf8mb4_unicode_ci DEFAULT 'Customer',
  `user_status` enum('Pending','Suspend','Active') COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailing_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `mobile`, `avatar`, `user_type`, `user_status`, `first_name`, `last_name`, `companyname`, `address`, `address_two`, `city`, `state`, `postcode`, `country`, `currency`, `mailing_list`, `term_condition`, `created_at`, `updated_at`) VALUES
(1, 'Sunil kumar', 'sunilkumar@caresortsolutions.com', NULL, '$2y$10$xmpi.RxtcPn1ZhM6WCyBXOpOWOtVT.YsleNgVHDuQ1x7pP/6NUNdO', 'DWmY0lqELphTvvITCm7mExKs3OnRd3zzwHfkbpg9NdvhvTfkChOhfnaE0b5N', '9803288406', 'default_user.png', 'Admin', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-30 10:48:46', '2021-10-30 10:48:46'),
(2, 'sunil kumar', 'sunilkumar1@gmail.com', NULL, '$2y$10$cUPUWX9XiYz2JMpp9Gd6eOQalUB3Y8IhJxI5zsvCqhtrNxsBfmh5S', 'mau7sDCZ58yDmn3GrTxS4gl1Jb4aAl4VEym8ZsZ6jB4MRO8qFRvbmfQ0sU6n', '9803288406', 'default_user.png', 'Customer', 'Active', 'sunil', 'kumar', 'Caresort', 'Testing', 'Testing', 'testing', 'Testing', '123456', 'CH', 'USD', 'Yes', 'Yes', '2021-11-03 10:17:01', '2021-11-03 10:17:01'),
(3, 'testing testing', 'testing@gmail.com', NULL, '$2y$10$P6i2vKAvVIKh.Dz5/Qsawe4qhHj0MzdHMWIS3ROxrrLOCMxZGjqHG', NULL, '9803288406', 'default_user.png', 'Customer', 'Active', 'testing', 'testing', 'Caresort', 'testing', 'testing', 'testing', 'testing', '543545', 'CH', 'CHF', 'Yes', 'Yes', '2021-11-03 10:50:53', '2021-11-03 10:50:53'),
(4, 'testing2 testing2', 'testing2@gmail.com', NULL, '$2y$10$1Ot5jTJnCAJyEORIAWLU3u7aSUvn2gbBQQxMv3D9HnzJPNauL7S7C', NULL, '9803288406', 'default_user.png', 'Customer', 'Active', 'testing2', 'testing2', 'Caresort', 'testing2', 'testing2', 'testing2', 'testing2', '543545', 'CH', 'CHF', 'Yes', 'Yes', '2021-11-03 10:54:07', '2021-11-03 10:54:07'),
(5, 'testing3 testing3', 'testing3@gmail.com', NULL, '$2y$10$U5x0yOXct66vFbRGlnX3/ufiyMXnZu9D4G5UvnA.lG1fXJKgdQqxS', 'WSZ9vExrQPE9LazRe87qGLjp4U5Cl7ZaHqoV74WRg6jVE0VVvPa6sgBKICpd', '9803288406', 'default_user.png', 'Customer', 'Active', 'testing3', 'testing3', 'Caresort', 'dfdsf', 'dsfdsf', 'fdsfdsf', 'dsfd', '878745', 'CH', 'CHF', 'No', 'Yes', '2021-11-03 10:56:26', '2022-01-28 14:34:58'),
(6, 'Sunil kumar', 'testing4@gmail.com', NULL, '$2y$10$X1vgKht38mSk0EP6BanlSu8yw/ncVHlMG7ItzzyRoVKYvUgN1m.LC', NULL, '9803288406', 'default_user.png', 'Customer', 'Active', 'Sunil', 'kumar', 'Caresort', 'moahli', 'mohali', 'mohali', 'Punjab', '154878', 'CH', NULL, 'Yes', 'Yes', '2022-01-28 18:21:30', '2022-01-28 18:21:30'),
(7, 'sachin rana', 'ajaythakurcaresort@gmail.com', NULL, '$2y$10$asvEr6WbQOMHcwG2hXh/V.P0VwUJ01x7whfuqUKX0IGtpXONv9hcG', 'lj9wgiDwgsjtx6d319oX7U2Ag5pefZiwAI2z6pT5dfiiCMCs1pl6ew77JRMk', '1234567891', 'default_user.png', 'Customer', 'Active', 'sachin', 'rana', 'lkm;,;', 'dsfd', NULL, 'seres', 'Alabama', '12345', 'TG', 'USD', 'Yes', 'Yes', '2022-05-02 10:56:54', '2022-05-02 10:56:54'),
(8, 'mohan singh', 'caresortsolutions247@gmail.com', NULL, '$2y$10$a0CDqtGx9UYF/n1hmDj.meIQdeQwKinQ.S2s1dvdGPjAYqG6ava1u', NULL, '54552222', 'default_user.png', 'Customer', 'Active', 'mohan', 'singh', 'mohali', '5phase', 'punjab', 'India', 'punjab', '160055', 'CH', 'CHF', 'Yes', 'Yes', '2022-05-02 12:19:09', '2022-05-02 12:19:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_items_invoice_id_foreign` (`invoice_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD CONSTRAINT `invoice_items_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
