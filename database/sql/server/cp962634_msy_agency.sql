-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2022 at 09:20 AM
-- Server version: 5.6.51
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp962634_msy_agency`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2022_03_16_153211_create_passports_table', 2),
(5, '2022_03_22_171510_add_join_date_to_passports_table', 3);

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
  `join_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `name`, `father_name`, `nrc`, `date_of_birth`, `passport`, `passport_date`, `local_agent_name`, `phone`, `address`, `gender`, `remark`, `created_at`, `updated_at`, `join_date`) VALUES
(10, 'ZIN MAR MYINT', 'U YIN HTWE', '12/KHA YA NA (N) 159358', '18.8.1991', 'MF 597885', '7.1.2022', 'MA THIN', '09-', 'KHAYAN', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:35:31', '2022-03-28 20:41:45', '2022-03-29'),
(11, 'AYE NYO', 'U NYEIN MYINT', '14/PHA PA NA (N) 208268', '18.8.1988', 'MF 593875', '6.1.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:37:26', '2022-03-28 20:42:51', '2022-03-29'),
(12, 'MYA MYA THIN', 'U WIN NAING OO', '12/DA GA TA (N) 149880', '3.8.1987', 'MF 621836', '21.1.2022', 'MA THIN', '09-', 'YANGON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:38:49', '2022-03-28 20:43:12', '2022-03-29'),
(13, 'ZIN MAR OO', 'U HLA THEIN', '14/AH GA PA (N) 216072', '5.5.1992', 'MF 593801', '6.1.2022', 'MA THIN', '09-', 'INGAPU', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:41:02', '2022-03-28 20:41:02', '2022-03-29'),
(14, 'AYE AYE THAN', 'U AYE SHWE', '14/PHA PA NA (N) 215157', '8.2.1987', 'MF 736878', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:46:16', '2022-03-28 20:49:19', '2022-03-29'),
(16, 'THAZIN HLAING', 'U SOE TINT', '14/PHA PA NA (N) 061519', '26.4.1996', 'MF 737429', '18.3.2022', 'MA THAN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:50:27', '2022-03-28 20:54:12', '2022-03-29'),
(17, 'AYE JULY MOE', 'U THAN SEIN', '14/PHA PA NA (N) 208996', '11.7.1995', 'MF 737434', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:56:58', '2022-03-28 20:56:58', '2022-03-29'),
(18, 'MOH MOH AYE', 'U SOE NYUNT', '13/SA SA NA (N) 054318', '2.12.1988', 'MF 689757', '25.2.2022', 'MA THIN', '09-', 'HSI HSENG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 20:59:12', '2022-03-28 20:59:12', '2022-03-29'),
(19, 'SAN SAN MAW', 'U THAN WIN', '8/NA MA NA (N) 148854', '14.11.1992', 'MF 747296', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:00:35', '2022-03-28 21:00:59', '2022-03-29'),
(20, 'NAN EI HTWE', 'U TUN CHO', '12/DA GA TA (N) 086648', '23.12.1995', 'MF 582731', '31.12.2021', 'MA THIN', '09-', 'YANGON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:03:41', '2022-03-28 21:03:41', '2022-03-29'),
(21, 'WIN HTWE', 'U AUNG THEIN', '9/KA PA TA (N) 230394', '5.7.1989', 'MF 582695', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:05:00', '2022-03-28 21:05:00', '2022-03-29'),
(22, 'KHIN CHAW SU', 'U SEIN WIN', '9/KA PA TA (N) 228317', '12.12.1993', 'MF 582698', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:06:41', '2022-03-28 21:07:31', '2022-03-29'),
(23, 'MAR MAR HTAY', 'U KYAW SWE', '8/NA MA NA (N) 233507', '18.5.1997', 'MF 747295', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:10:52', '2022-03-28 21:10:52', '2022-03-29'),
(24, 'WAI WAI MYINT', 'U SEIN SHWE', '14/HA THA TA (N) 293934', '24.5.1989', 'MF 583666', '31.12.2021', 'MA THIN', '09-', 'HINTHADA', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:14:43', '2022-03-28 21:14:43', '2022-03-29'),
(25, 'AUNG KO LATT', 'U NI', '9/KA PA TA (N) 227577', '18.6.1991', 'MF 582699', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:17:03', '2022-03-28 21:17:03', '2022-03-29'),
(26, 'WAI LIAN KYAW', 'U THAN WIN', '14/PHA PA NA (N) 049794', '3.4.1991', 'MF 737430', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:18:54', '2022-03-28 21:18:54', '2022-03-29'),
(27, 'PHYO OO', NULL, NULL, '21.1.1990', 'MF 737438', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:19:44', '2022-03-28 21:19:44', '2022-03-29'),
(28, 'NAING LIN', 'U TIN WIN', '7/THA NA PA (N) 099098', '23.5.2000', 'MF 502944', '17.12.2021', 'MA THIN', '09-', 'THANNATBIN', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:43:34', '2022-03-28 21:43:34', '2022-03-29'),
(29, 'AUNG MYINT WIN', 'U KHIN WIN', '14/HA THA TA (N) 213725', '25.11.1979', 'MF 669711', '16.2.2022', 'MA THIN', '09-', 'HINTHADA', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:44:46', '2022-03-28 21:44:46', '2022-03-29'),
(30, 'WAI PHYO AUNG', 'U KYAW ZIN', '8/NA MA NA (N) 239836', '11.6.2003', 'MF 747298', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:46:08', '2022-03-28 21:46:08', '2022-03-29'),
(31, 'NYUNT LWIN', 'U SAN NU', '8/NA MA NA (N) 100892', '30.12.1980', 'MF 747297', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:47:07', '2022-03-28 21:47:07', '2022-03-29'),
(32, 'THET NAING AUNG', 'U TOE LAY', '14/DA DA YA (N) 183670', '4.7.1998', 'MF 737432', '18.3.2022', 'MA THIN', '09-', 'DEDAYE', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:48:18', '2022-03-28 21:48:18', '2022-03-29'),
(33, 'AUNG THU', 'U BO NAING HTAY', '9/MA HTA LA (N) 368194', '15.1.2000', 'MF 618387', '20.1.2022', 'MA THIN', '09-', 'MEIKHTILA', 'male', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:49:32', '2022-03-28 21:49:32', '2022-03-29'),
(34, 'WAR WAR THEIN', 'U KHAING SOE', '14/PHA PA NA (N) 199117', '22.6.1998', 'MF 737431', '18.3.2022', 'MA THIN', '09-', 'PYAPON', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:51:04', '2022-03-28 21:51:04', '2022-03-29'),
(35, 'ZIN MAR KHAING', 'U WIN SOE', '8/NA MA NA (N) 239864', '18.11.2003', 'MF 747300', '24.3.2022', 'MA THIN', '09-', 'NATMAUK', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:52:25', '2022-03-28 21:52:25', '2022-03-29'),
(36, 'LWIN LWIN AUNG', 'U HTEIN WIN', '9/KA PA TA (N) 273352', '5.5.2001', 'MF 598437', '7.1.2022', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:53:43', '2022-03-28 21:53:43', '2022-03-29'),
(37, 'HTAY HTAY LWIN', 'U HTEIN WIN', '9/KA PA TA (N) 127777', '28.4.1991', 'MF 598438', '7.1.2022', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:54:46', '2022-03-28 21:54:46', '2022-03-29'),
(38, 'MOE MOE KHAING', 'U TIN HAN', '14/HA THA TA (N) 213676', '23.10.1980', 'MF 669713', '16.2.2022', 'MA THIN', '09-', 'HINTHADA', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:56:09', '2022-03-28 21:56:09', '2022-03-29'),
(39, 'NWE NWE SOE', 'U ZAKAR', '9/KA PA TA (N) 251819', '31.5.1984', 'MF 582696', '31.12.2021', 'MA THIN', '09-', 'KYAUKPADAUNG', 'female', 'စာအုပ်နှင့်လာအပ် (Kuiburi Fruit)', '2022-03-28 21:57:22', '2022-03-28 21:57:22', '2022-03-29');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
