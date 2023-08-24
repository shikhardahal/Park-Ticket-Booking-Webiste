-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2023 at 09:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `ticket_number` varchar(250) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `cat` varchar(250) DEFAULT NULL,
  `cat_id` varchar(250) DEFAULT NULL,
  `price` varchar(250) NOT NULL DEFAULT '0',
  `tax` varchar(250) NOT NULL DEFAULT '0',
  `taxpawanmedia` varchar(250) NOT NULL,
  `taxngarpalika` varchar(250) NOT NULL,
  `taxpark` varchar(250) NOT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `payment_method` varchar(250) NOT NULL DEFAULT 'cash',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cat_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `ticket_number`, `staff_id`, `name`, `qty`, `cat`, `cat_id`, `price`, `tax`, `taxpawanmedia`, `taxngarpalika`, `taxpark`, `phone`, `payment_method`, `created_at`, `cat_name`) VALUES
(32, '', NULL, 'dadfsa', '3', '12', '16', '7500', '', '', '', '', '9815148170', '', '2023-07-03 17:32:18', 'Picnic Shade A'),
(33, '', NULL, 'shikhar dahal', '1', '14', '28', '40', '', '', '', '', '9815148170', '', '2023-07-03 17:52:50', 'Normal'),
(37, '', NULL, 'shikhar dahal', '4', '13', '23', '400', '', '', '', '', '9815148170', '', '2023-07-03 18:09:46', 'Camera Shooting'),
(38, '', NULL, NULL, '20', '14', '13', '600', '', '', '', '', NULL, '', '2023-07-04 13:10:28', 'Student'),
(39, '', NULL, NULL, '20', '12', '16', '50000', '', '', '', '', NULL, '', '2023-07-04 13:26:18', 'Picnic Shade A'),
(40, '', NULL, NULL, '3', '14', '13', '90', '', '', '', '', NULL, '', '2023-07-04 14:31:29', 'Student'),
(41, '', NULL, 'damodar', '4', '12', '15', '6000', '', '', '', '', '9815148170', '', '2023-07-04 14:32:34', 'Picnic in ground with tent'),
(42, '', NULL, '444', '4', '13', '20', '24000', '', '', '', '', '33333', '', '2023-07-04 15:22:25', 'Serial Shooting'),
(43, '', NULL, 'dddd', '4', '12', '12', '12000', '', '', '', '', '9815148170', '', '2023-07-04 16:20:25', 'Picnic Tathi'),
(44, '', NULL, NULL, '20', '14', '13', '600', '', '', '', '', NULL, '', '2023-07-04 16:31:16', 'Student'),
(45, '', NULL, NULL, '20', '14', '13', '600', '', '', '', '', NULL, '', '2023-07-04 16:41:07', 'Student'),
(80, '', NULL, NULL, '3', '14', '28', '120', '', '', '', '', NULL, '', '2023-07-05 14:31:25', 'Normal'),
(81, '', NULL, NULL, '2', '14', '28', '80', '', '', '', '', NULL, '', '2023-07-05 14:35:38', 'Normal'),
(82, '', NULL, NULL, '6', '13', '22', '6000', '', '', '', '', NULL, '', '2023-07-05 14:36:29', 'Video Camera Shooting'),
(83, '', NULL, NULL, '2', '13', '23', '200', '', '', '', '', NULL, '', '2023-07-05 14:41:14', 'Camera Shooting'),
(84, '', NULL, NULL, '2', '12', '12', '6000', '', '', '', '', NULL, '', '2023-07-05 15:02:04', 'Picnic Tathi'),
(86, '', NULL, 'eeeeee', '2', '13', '20', '12000', '', '', '', '', '9815148170', '', '2023-07-13 17:53:38', 'Serial Shooting'),
(87, '', NULL, NULL, '3', '12', '11', '2100', '', '', '', '', NULL, '', '2023-07-17 10:23:59', 'Ground Picnic'),
(88, '', NULL, 'fffsa', '2', '13', '19', '17000', '', '', '', '', '9815148170', 'online', '2023-07-17 13:34:00', 'Film Shooting (Big Screen)'),
(89, '', NULL, NULL, '2', '14', '28', '80', '', '', '', '', NULL, 'offline', '2023-07-17 13:37:51', 'Normal'),
(90, '', NULL, 'rrrrrrrwrew', '2', '14', '13', '60', '', '', '', '', NULL, 'cash', '2023-07-17 13:39:27', 'Student'),
(91, '', NULL, 're', '2', '20', '38', '100.2', '0', '', '', '', '9815148170', 'cash', '2023-07-19 00:16:22', 'rrtrrtr'),
(92, '', NULL, 'shikhar dahal', '1', '20', '38', '50.1', '0', '', '', '', '9815148170', 'cash', '2023-07-19 00:18:53', 'rrtrrtr'),
(93, '', NULL, 'kchha', '1', '20', '38', '50.1', '0', '', '', '', '9815148170', 'cash', '2023-07-19 00:26:17', 'rrtrrtr'),
(94, '', NULL, 'rtrrr', '2', '20', '38', '100.2', '0', '', '', '', '9815148170', 'cash', '2023-07-19 00:30:04', 'rrtrrtr'),
(95, '', NULL, '34ww', '1', '20', '38', '50.1', '0', '', '', '', '9815148170', 'cash', '2023-07-19 00:31:21', 'rrtrrtr'),
(96, '', NULL, 'reewwd', '2', '20', '38', '100.2', '4.4', '', '', '', '9815148170', 'cash', '2023-07-19 00:38:24', 'rrtrrtr'),
(97, '', NULL, 'qwertt', '1', '20', '38', '50.1', '2.2', '', '', '', '9815148170', 'cash', '2023-07-19 00:56:21', 'rrtrrtr'),
(98, '', NULL, NULL, '1', '14', '28', '40', '0', '', '', '', NULL, 'cash', '2023-07-19 01:02:14', 'Normal'),
(99, '', NULL, 'dsafd', '1', '20', '38', '50.1', '2.2', '', '', '', '9815148170', 'cash', '2023-07-19 01:05:43', 'rrtrrtr'),
(100, '', NULL, 'ddddd', '2', '20', '39', '90', '24.6', '', '', '', '9815148170', 'cash', '2023-07-19 12:27:34', 'marrrige'),
(101, '', NULL, 'erwqrwqr', '2', '20', '39', '90', '24.6', '', '', '', '9815148170', 'cash', '2023-07-19 13:19:25', 'marrrige'),
(102, '', NULL, 'tatdtadt', '1', '20', '39', '45', '12.3', '', '', '', '9815148170', 'cash', '2023-07-19 13:48:59', 'marrrige'),
(103, '', NULL, 'ere', '1', '20', '39', '45', '12.3', '', '', '', '9815148170', 'online', '2023-07-20 00:09:40', 'marrrige'),
(104, '', NULL, 'firstentry', '2', '20', '40', '100', '24', '', '', '', '9815148170', 'cash', '2023-07-20 19:40:47', 'hshshsh'),
(105, '', NULL, 'rtfff', '2', '20', '40', '100', '24', '4', '20', '76', '9815148170', 'cash', '2023-07-20 19:51:50', 'hshshsh'),
(107, 'rr0015', NULL, 'eeee', '2', '20', '41', '66', '66', '66', '66', '66', '9815148170', 'cash', '2023-07-20 23:16:27', 'फफ'),
(108, 'rr0000016', NULL, 'dadfsa', '2', '20', '41', '66', '66', '66', '66', '66', '222222', 'cash', '2023-07-20 23:29:36', 'फफ'),
(110, 'rr000017', NULL, 'dsafd', '1', '20', '40', '50', '12', '2', '10', '38', '9815148170', 'cash', '2023-07-21 09:43:36', 'hshshsh');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `created_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`) VALUES
(12, 'Picnic', 'This is picnic category', NULL, NULL),
(13, 'Film', 'This is film category', NULL, NULL),
(14, 'Entry', 'This is entry field', NULL, NULL),
(20, 'rr', 'rrr', NULL, NULL),
(22, 'फफ', 'ddd', NULL, NULL);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_07_05_143846_create_permission_tables', 2),
(5, '2023_07_05_143847_create_permission_tables', 2),
(6, '2023_07_05_143848_create_permission_tables', 2),
(7, '2023_07_05_143850_create_permission_tables', 2),
(8, '2023_07_05_143851_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) DEFAULT '0',
  `tax` varchar(250) NOT NULL,
  `taxpawanmedia` varchar(250) NOT NULL,
  `taxngarpalika` varchar(250) NOT NULL,
  `taxpark` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `name`, `price`, `tax`, `taxpawanmedia`, `taxngarpalika`, `taxpark`, `created_at`) VALUES
(11, 12, 'Ground Picnic', '700', '', '', '', '', '2023-06-27 15:34:12'),
(12, 12, 'Picnic Tathi', '3000', '', '', '', '', '2023-06-27 15:35:13'),
(13, 14, 'Student', '30', '', '', '', '', '2023-06-27 15:35:55'),
(14, 12, 'Picnic Stage', '2000', '', '', '', '', '2023-06-27 15:43:06'),
(15, 12, 'Picnic in ground with tent', '1500', '', '', '', '', '2023-06-27 15:44:59'),
(16, 12, 'Picnic Shade A', '2500', '', '', '', '', '2023-06-27 15:45:26'),
(17, 12, 'Picnic Shade B', '2000', '', '', '', '', '2023-06-27 15:45:55'),
(18, 12, 'Picnic Shade C', '1000', '', '', '', '', '2023-06-27 15:46:11'),
(20, 13, 'Serial Shooting', '6000', '', '', '', '', '2023-06-27 15:47:15'),
(21, 13, 'Song Shooting', '3000', '', '', '', '', '2023-06-27 15:47:32'),
(22, 13, 'Video Camera Shooting', '1000', '', '', '', '', '2023-06-27 15:47:51'),
(23, 13, 'Camera Shooting', '100', '', '', '', '', '2023-06-27 15:48:11'),
(28, 14, 'Normal', '40', '', '', '', '', '2023-07-03 17:52:30'),
(33, 20, 'rr', '333', '', '', '', '', '2023-07-18 15:52:49'),
(35, 20, 'ram', '60', '13', '', '', '', '2023-07-18 23:57:43'),
(38, 20, 'rrtrrtr', '50.1', '2.2', '', '', '', '2023-07-19 00:09:52'),
(39, 20, 'marrrige', '45', '12.3', '', '', '', '2023-07-19 12:26:58'),
(40, 20, 'hshshsh', '50', '12', '2', '10', '38', '2023-07-20 16:53:21'),
(41, 20, 'फफ', '33', '33', '33', '33', '33', '2023-07-20 23:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT '0',
  `remember_token` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `status`, `remember_token`, `created_at`) VALUES
(1, 'Haris', 'Haris@gmail.com', 'staff', '$2y$10$xXTZDMSu2aikfuJM3VCqk.Glrum.EnFvFLjkudfD5kpLn7u6HFwaS', '1', 'C1LbpJ1iZaENRtrYPGssgbSH0NPd76AHZFxV1qquALjjgjWyAZuBQ9BEl1P9', '2023-06-18 18:50:11'),
(2, 'user', 'user@gmail.com', 'user', '$2y$10$cbfXaQuuJ122bYd7JF.KSujQ8kxBRMmT1NMppXTzPYJrV77O5pan2', '1', 'n3oT4CsyWtO7tbKvMY9sqIgQbrfDYGULP40jgSDyEi5CwOvDH7MWNX00OcN8', '2023-06-18 18:51:18'),
(3, 'user_name', 'user_name@gmail.com', 'user', '$2y$10$cbfXaQuuJ122bYd7JF.KSujQ8kxBRMmT1NMppXTzPYJrV77O5pan2', '1', 'nnEZRFsFbXEjr94XEPy8Of75PstQlg8IEuNeJ9qe3quWJ70kpJpRZM36Ekg0', '2023-06-18 19:19:00'),
(4, 'Shikhar Dahal', 'shikhardahal33@gmail.com', 'user', '$2y$10$cbfXaQuuJ122bYd7JF.KSujQ8kxBRMmT1NMppXTzPYJrV77O5pan2', '1', 'YgVQ0IKxhCJUG1kNmwMWbRfL88NAtrX9vO8Jz1EtrsL9BdSAO5yWg2NUJMM9', '2023-06-27 06:40:32'),
(5, 'Hris', 'Hariss@gmai.om', 'staff', 'asdadasdasdasdasdasdasd', '1', NULL, '2023-07-05 20:21:05'),
(6, 'Damodar', 'acharyad2019@gmail.com', 'user', '$2y$10$cbfXaQuuJ122bYd7JF.KSujQ8kxBRMmT1NMppXTzPYJrV77O5pan2', '0', '9Z4oPUwf7hcQPDScSM3ZeWnzJgAwbiogV5VXPZ84dgKJaDuVwl5NIk6sCZVn', '2023-07-06 21:54:52'),
(7, 'Damodar Acharya', 'ddd@gmail.com', 'user', '123456', '0', NULL, '2023-07-07 00:42:13'),
(8, 'dsafd', 'admin@example.com', 'user', '$2y$10$91/4zoY.xPsYLgH6NYWsueiqXr0zUensukgN2t5vqlkCb5VQKRlu2', '1', 'PJqYlPwOVabWjsoItHTsvuaHQHnt1WLRXk19oBM4eLvt9HsPe4rIdWvG60jT', '2023-07-07 15:52:01'),
(9, 'damoo', 'damoo@gmail.com', 'user', '$2y$10$xXTZDMSu2aikfuJM3VCqk.Glrum.EnFvFLjkudfD5kpLn7u6HFwaS', '1', 'QQVdUuLtkaTHyKc4pzqOhOSGqnd7QOJ6eEbG0G1V0GmmC6qbhip6Wj49icFA', '2023-07-07 20:58:16'),
(10, 'nn', 'nn@gmail.com', 'staff', '123456', '1', NULL, '2023-07-21 09:26:26'),
(11, 'what', 'what@gmail.com', 'staff', '$2y$10$Eq/oKYwaXQNEFcQ3dkPV0uDukQ00EdpCqQFqEiWlbLv.jJ2w8XfU2', '1', NULL, '2023-07-21 09:31:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
