-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2022 at 08:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msy_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contract_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_male` int(11) DEFAULT NULL,
  `contract_female` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract_date`, `contract_male`, `contract_female`, `remark`, `demand_id`, `created_at`, `updated_at`) VALUES
(1, '1.1.2022', 10, 10, NULL, 1, '2022-05-29 05:34:12', '2022-05-29 05:34:12'),
(2, '1.2.2022', 0, 10, NULL, 2, '2022-05-29 05:34:50', '2022-05-29 05:34:50'),
(3, '2.2.2020', 10, 0, NULL, 2, '2022-05-29 05:35:04', '2022-05-29 05:35:45'),
(4, '1.1.2023', 10, 50, NULL, 3, '2022-05-29 05:43:45', '2022-05-29 05:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Thailand', '2022-05-16 19:33:33', '2022-05-16 19:33:33'),
(2, 'Malaysia', '2022-05-16 19:33:39', '2022-05-16 19:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE `demands` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overseas_agencie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabinet_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demand_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`id`, `company_name`, `countrie_id`, `overseas_agencie_id`, `male`, `female`, `demand_date`, `cabinet_date`, `issue_date`, `issue_number`, `created_at`, `updated_at`, `demand_status`) VALUES
(1, 'MSYN', '1', '1', '10', '10', '1.1.2022', '1.1.2022', NULL, NULL, '2022-05-29 05:33:50', '2022-05-29 05:34:33', 'new_demand'),
(2, 'MSYN', '1', '2', '20', '10', '1.1.2022', NULL, NULL, NULL, '2022-05-29 05:33:58', '2022-05-29 05:35:19', 'new_demand'),
(3, 'MP', '2', '4', '10', '50', NULL, NULL, NULL, NULL, '2022-05-29 05:43:31', '2022-05-29 05:43:31', 'old_demand');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labour_management`
--

CREATE TABLE `labour_management` (
  `id` int(10) UNSIGNED NOT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `overseas_agencies_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labour_management`
--

INSERT INTO `labour_management` (`id`, `passport_id`, `demand_id`, `contract_id`, `created_at`, `updated_at`, `overseas_agencies_id`) VALUES
(1, 10, 1, 1, '2022-05-30 10:39:12', '2022-05-30 10:39:12', 1),
(2, 11, 1, 1, '2022-05-30 10:39:12', '2022-05-30 10:39:12', 1),
(3, 12, 1, 1, '2022-05-30 10:39:12', '2022-05-30 10:39:12', 1),
(4, 13, 1, 1, '2022-05-30 10:39:12', '2022-05-30 10:39:12', 1),
(5, 14, 1, 1, '2022-05-30 10:39:12', '2022-05-30 10:39:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_05_29_034813_add_place_of_passport_to_passports_table', 10),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_03_16_153211_create_passports_table', 2),
(6, '2022_03_22_171510_add_join_date_to_passports_table', 3),
(7, '2022_05_16_055009_create_countries_table', 4),
(8, '2022_05_16_061642_create_overseas_agencies_table', 5),
(9, '2022_05_16_083838_add_passport_fields_to_passports_table', 6),
(10, '2022_05_16_095400_add_contact_to_overseas_agencies_table', 7),
(11, '2022_05_16_160805_create_demands_table', 8),
(12, '2022_05_16_175440_add_demand_status_to_demands_table', 9),
(13, '2022_05_29_043426_create_contracts_table', 11),
(14, '2022_05_29_081917_create_sendings_table', 12),
(15, '2022_05_30_155222_create_labour_management_table', 13),
(16, '2022_05_30_170817_add_overseas_agencies_id_to_labour_management_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `overseas_agencies`
--

CREATE TABLE `overseas_agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_agencies`
--

INSERT INTO `overseas_agencies` (`id`, `company_name`, `type_of_company`, `company_phone`, `company_email`, `company_address`, `countrie_id`, `created_at`, `updated_at`, `contact`) VALUES
(1, 'Miss.Nitinan Bawornhiranyanon', NULL, NULL, NULL, NULL, '1', '2022-05-28 22:14:32', '2022-05-29 04:37:21', 'Miss'),
(2, 'Mr.Sanong Poopong', NULL, NULL, NULL, NULL, '1', '2022-05-28 22:14:45', '2022-05-29 04:37:32', 'Mr Sanong'),
(3, 'Prataeawevee Concrete Ltd.,Part', NULL, NULL, NULL, NULL, '1', '2022-05-28 22:14:55', '2022-05-29 04:37:44', 'Prateawa'),
(4, 'ABC CO.,LTD MY', 'Electronic Factory', '09222320229', 'abc@gmail.com', 'Malaysia', '2', '2022-05-29 04:35:23', '2022-05-29 04:35:23', 'Abc U Mya'),
(5, 'My', 'Factory', NULL, NULL, NULL, '2', '2022-05-29 04:50:25', '2022-05-29 04:50:25', 'My');

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_agent_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `join_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_passport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `name`, `father_name`, `nrc`, `date_of_birth`, `passport`, `passport_date`, `local_agent_name`, `phone`, `address`, `gender`, `remark`, `created_at`, `updated_at`, `join_date`, `owic`, `owic_date`, `reject_status`, `reject_date`, `reject_reason`, `place_of_passport`) VALUES
(10, 'ZIN MAR MYINT', 'U YIN HTWE', '12/KHA YA NA (N) 159358', '18.8.1991', 'MF 597885', '7.1.2022', 'MA THIN', '09-', 'KHAYAN', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:35:31', '2022-03-28 20:41:45', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'AYE NYO', 'U NYEIN MYINT', '14/PHA PA NA (N) 208268', '18.8.1988', 'MF 593875', '6.1.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:37:26', '2022-03-28 20:42:51', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'MYA MYA THIN', 'U WIN NAING OO', '12/DA GA TA (N) 149880', '3.8.1987', 'MF 621836', '21.1.2022', 'MA THIN', '09-', 'YANGON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:38:49', '2022-03-28 20:43:12', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'ZIN MAR OO', 'U HLA THEIN', '14/AH GA PA (N) 216072', '5.5.1992', 'MF 593801', '6.1.2022', 'MA THIN', '09-', 'INGAPU', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:41:02', '2022-03-28 20:41:02', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'AYE AYE THAN', 'U AYE SHWE', '14/PHA PA NA (N) 215157', '8.2.1987', 'MF 736878', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:46:16', '2022-03-28 20:49:19', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'THAZIN HLAING', 'U SOE TINT', '14/PHA PA NA (N) 061519', '26.4.1996', 'MF 737429', '18.3.2022', 'MA THAN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:50:27', '2022-03-28 20:54:12', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'AYE JULY MOE', 'U THAN SEIN', '14/PHA PA NA (N) 208996', '11.7.1995', 'MF 737434', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:56:58', '2022-03-28 20:56:58', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'MOH MOH AYE', 'U SOE NYUNT', '13/SA SA NA (N) 054318', '2.12.1988', 'MF 689757', '25.2.2022', 'MA THIN', '09-', 'HSI HSENG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:59:12', '2022-03-28 20:59:12', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'SAN SAN MAW', 'U THAN WIN', '8/NA MA NA (N) 148854', '14.11.1992', 'MF 747296', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:00:35', '2022-03-28 21:00:59', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'NAN EI HTWE', 'U TUN CHO', '12/DA GA TA (N) 086648', '23.12.1995', 'MF 582731', '31.12.2021', 'MA THIN', '09-', 'YANGON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:03:41', '2022-03-28 21:03:41', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'WIN HTWE', 'U AUNG THEIN', '9/KA PA TA (N) 230394', '5.7.1989', 'MF 582695', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:05:00', '2022-03-28 21:05:00', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'KHIN CHAW SU', 'U SEIN WIN', '9/KA PA TA (N) 228317', '12.12.1993', 'MF 582698', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:06:41', '2022-03-28 21:07:31', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'MAR MAR HTAY', 'U KYAW SWE', '8/NA MA NA (N) 233507', '18.5.1997', 'MF 747295', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:10:52', '2022-03-28 21:10:52', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'WAI WAI MYINT', 'U SEIN SHWE', '14/HA THA TA (N) 293934', '24.5.1989', 'MF 583666', '31.12.2021', 'MA THIN', '09-', 'HINTHADA', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:14:43', '2022-03-28 21:14:43', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'AUNG KO LATT', 'U NI', '9/KA PA TA (N) 227577', '18.6.1991', 'MF 582699', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:17:03', '2022-03-28 21:17:03', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'WAI LIAN KYAW', 'U THAN WIN', '14/PHA PA NA (N) 049794', '3.4.1991', 'MF 737430', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:18:54', '2022-03-28 21:18:54', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'PHYO OO', NULL, NULL, '21.1.1990', 'MF 737438', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:19:44', '2022-03-28 21:19:44', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'NAING LIN', 'U TIN WIN', '7/THA NA PA (N) 099098', '23.5.2000', 'MF 502944', '17.12.2021', 'MA THIN', '09-', 'THANNATBIN', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:43:34', '2022-03-28 21:43:34', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'AUNG MYINT WIN', 'U KHIN WIN', '14/HA THA TA (N) 213725', '25.11.1979', 'MF 669711', '16.2.2022', 'MA THIN', '09-', 'HINTHADA', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:44:46', '2022-03-28 21:44:46', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'WAI PHYO AUNG', 'U KYAW ZIN', '8/NA MA NA (N) 239836', '11.6.2003', 'MF 747298', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:46:08', '2022-03-28 21:46:08', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'NYUNT LWIN', 'U SAN NU', '8/NA MA NA (N) 100892', '30.12.1980', 'MF 747297', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:47:07', '2022-03-28 21:47:07', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'THET NAING AUNG', 'U TOE LAY', '14/DA DA YA (N) 183670', '4.7.1998', 'MF 737432', '18.3.2022', 'MA THIN', '09-', 'DEDAYE', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:48:18', '2022-03-28 21:48:18', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'AUNG THU', 'U BO NAING HTAY', '9/MA HTA LA (N) 368194', '15.1.2000', 'MF 618387', '20.1.2022', 'MA THIN', '09-', 'MEIKHTILA', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:49:32', '2022-03-28 21:49:32', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'WAR WAR THEIN', 'U KHAING SOE', '14/PHA PA NA (N) 199117', '22.6.1998', 'MF 737431', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:51:04', '2022-03-28 21:51:04', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'ZIN MAR KHAING', 'U WIN SOE', '8/NA MA NA (N) 239864', '18.11.2003', 'MF 747300', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:52:25', '2022-03-28 21:52:25', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'LWIN LWIN AUNG', 'U HTEIN WIN', '9/KA PA TA (N) 273352', '5.5.2001', 'MF 598437', '7.1.2022', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:53:43', '2022-03-28 21:53:43', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'HTAY HTAY LWIN', 'U HTEIN WIN', '9/KA PA TA (N) 127777', '28.4.1991', 'MF 598438', '7.1.2022', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:54:46', '2022-03-28 21:54:46', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'MOE MOE KHAING', 'U TIN HAN', '14/HA THA TA (N) 213676', '23.10.1980', 'MF 669713', '16.2.2022', 'MA THIN', '09-', 'HINTHADA', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:56:09', '2022-03-28 21:56:09', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'NWE NWE SOE', 'U ZAKAR', '9/KA PA TA (N) 251819', '31.5.1984', 'MF 582696', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:57:22', '2022-03-28 21:57:22', '2022-03-29', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'May ', 'U Mg Mg', '4/abc(n)009887', '1.1.1995', 'EM 00003', '01/01/2022', '-', '854217073', 'Yangon', 'male', 'No', '2022-05-17 01:59:16', '2022-05-17 02:00:35', NULL, NULL, NULL, 'rejected', '17/5/2022', 'Nothing', NULL),
(44, 'Soe Soe', 'U Soe Kyaw', '5/(abc)009887', '1.1.1995', 'EM 00001', '01/01/2022', '-', '854217073', 'Yangon', 'male', 'No', '2022-05-17 21:49:05', '2022-05-17 21:49:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Mg Mg', 'U Mg Mg', '4/abc(n)009887', '1.1.1995', 'EM 00002', '01/01/2022', '-', '854217073', 'Yangon', 'male', 'No', '2022-05-17 21:49:05', '2022-05-17 21:49:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'May ', 'U Mg Mg', '4/abc(n)009887', '1.1.1995', 'EM 00003', '01/01/2022', '-', '854217073', 'Yangon', 'male', 'No', '2022-05-17 21:49:05', '2022-05-17 21:49:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Mg Mg', 'Mg Mg', '5/abc(n)009112', '1.1.2022', 'ME-00001', '1.1.2022', 'MSY', '09444151998', 'Yangon', 'male', 'Remark', '2022-05-28 21:23:25', '2022-05-28 21:56:33', '2022-05-29', NULL, NULL, NULL, NULL, NULL, 'YGN MDY'),
(48, 'Soe Soe', 'U Soe Kyaw', '5/(abc)009887', '1.1.1995', 'EM 00001', '01/01/2022', '-', '9444151665', 'Yangon', 'male', 'No', '2022-05-30 11:26:49', '2022-05-30 11:26:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Soe Soe', 'U Soe Kyaw', '5/(abc)009887', '1.1.1995', 'EM 00001', '01/01/2022', '-', '9444151665', 'Yangon', 'male', 'No', '2022-05-30 11:28:14', '2022-05-30 11:28:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Soe Soe', 'U Soe Kyaw', '5/(abc)009887', '1.1.1995', 'EM 00001', '01/01/2022', '-', '9444151665', 'Yangon', 'male', 'No', '2022-05-30 11:29:50', '2022-05-30 11:29:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Soe Soe', 'U Soe Kyaw', '5/(abc)009887', '1.1.1995', 'EM 00001', '01/01/2022', '-', '9444151665', 'Yangon', 'male', 'No', '2022-05-30 11:30:12', '2022-05-30 11:30:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Table structure for table `sendings`
--

CREATE TABLE `sendings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sending_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sending_male` int(11) DEFAULT NULL,
  `sending_female` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sendings`
--

INSERT INTO `sendings` (`id`, `sending_date`, `sending_male`, `sending_female`, `remark`, `demand_id`, `contract_id`, `created_at`, `updated_at`) VALUES
(2, '1.1.2022', 10, 10, NULL, 1, 1, '2022-05-29 05:38:02', '2022-05-29 05:38:02'),
(3, '1.2.2022', 0, 5, NULL, 2, 2, '2022-05-29 05:39:18', '2022-05-29 05:39:18'),
(4, '1.3.2022', 0, 5, NULL, 2, 2, '2022-05-29 05:39:50', '2022-05-29 05:39:50'),
(5, '1.1.2022', 10, 0, NULL, 3, 4, '2022-05-29 05:44:10', '2022-05-29 05:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ACc0APOsRpxoHUWicc4Tc.59kRN1ttfhvoDhnuYbS4Z2GagiP0yHq', NULL, '2022-03-16 07:37:52', '2022-03-16 07:37:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_management`
--
ALTER TABLE `labour_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `sendings`
--
ALTER TABLE `sendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `labour_management`
--
ALTER TABLE `labour_management`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sendings`
--
ALTER TABLE `sendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
