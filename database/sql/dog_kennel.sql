-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2022 at 06:50 PM
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
-- Database: `dog_kennel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `message_date`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'mgmg@gmail.com', '09123123123', 'Hello', 'Loare Hello', '2022-12-25', '2022-12-25 02:00:19', '2022-12-25 02:00:19'),
(2, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2022-12-30', '2022-12-30 11:17:24', '2022-12-30 11:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breed` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breeder` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registrar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dog_breed_group_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `breed`, `sex`, `color`, `date_of_birth`, `breeder`, `owner`, `reg_no`, `registered`, `registrar`, `dog_breed_group_id`, `created_at`, `updated_at`, `photo`, `main_photo`, `video`) VALUES
(1, 'THREE FARM\'S FIFI', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20201125/efhklrstuvz2.jpg,https://thaipitbullkennelclub.com/uploads/dog/20201008/aknoptuz2356.png,https://thaipitbullkennelclub.com/uploads/dog/20201126/defgintvwy25.jpg,https://thaipitbullkennelclub.com/uploads/dog/20190723/bdfgimnopuw7.png', 'https://thaipitbullkennelclub.com/uploads/dog/20221206/celqtuy02349.jpg', 'https://www.recruitmentmyanmarsak.com/data/video/3.mp4'),
(2, 'THREE FARM\'S SHABU', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', NULL),
(3, 'THREE FARM\'S FIFI', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://thaipitbullkennelclub.com/uploads/dog/20221130/biklmwz34578.jpg', 'https://www.recruitmentmyanmarsak.com/data/video/3.mp4'),
(4, 'THREE FARM\'S SHABU', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://www.recruitmentmyanmarsak.com/data/video/3.mp4'),
(5, 'THREE FARM\'S FIFI', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20201125/efhklrstuvz2.jpg,https://thaipitbullkennelclub.com/uploads/dog/20201008/aknoptuz2356.png,https://thaipitbullkennelclub.com/uploads/dog/20201126/defgintvwy25.jpg,https://thaipitbullkennelclub.com/uploads/dog/20190723/bdfgimnopuw7.png', 'https://thaipitbullkennelclub.com/uploads/dog/20221206/celqtuy02349.jpg', 'https://www.recruitmentmyanmarsak.com/data/video/3.mp4'),
(6, 'THREE FARM\'S SHABU', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', NULL),
(7, 'THREE FARM\'S FIFI', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://thaipitbullkennelclub.com/uploads/dog/20221130/biklmwz34578.jpg', 'https://www.recruitmentmyanmarsak.com/data/video/3.mp4'),
(8, 'THREE FARM\'S SHABU', 'AMERICAN BANDOG', 'FEMALE', 'BROWN WHITE', '2022-09-10 ( 0Y 3M )', 'THREE FARM', 'ALEX LIM', 'TPKC_F_2212-27270732', '2022-12-06', 'TPKC', '1', NULL, NULL, 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg,https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://thaipitbullkennelclub.com/uploads/dog/20221130/gioprsuz0245.jpg', 'https://www.recruitmentmyanmarsak.com/data/video/3.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `dog_breed_groups`
--

CREATE TABLE `dog_breed_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dog_breed_groups`
--

INSERT INTO `dog_breed_groups` (`id`, `name`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'REDBULL POWER KENNEL', 'https://thaipitbullkennelclub.com/uploads/kennel/20220202/abciqrt01257.jpg', NULL, NULL, NULL),
(2, 'P.P.Pitbull & Bandog Kennel SK', 'https://thaipitbullkennelclub.com/uploads/kennel/20220128/efhilqry0479.jpg', NULL, NULL, NULL),
(3, 'REDBULL POWER KENNEL', 'https://thaipitbullkennelclub.com/uploads/kennel/20220202/abciqrt01257.jpg', NULL, NULL, NULL),
(4, 'P.P.Pitbull & Bandog Kennel SK', 'https://thaipitbullkennelclub.com/uploads/kennel/20220128/efhilqry0479.jpg', NULL, NULL, NULL),
(5, 'REDBULL POWER KENNEL', 'https://thaipitbullkennelclub.com/uploads/kennel/20220202/abciqrt01257.jpg', NULL, NULL, NULL),
(6, 'P.P.Pitbull & Bandog Kennel SK', 'https://thaipitbullkennelclub.com/uploads/kennel/20220128/efhilqry0479.jpg', NULL, NULL, NULL),
(7, 'REDBULL POWER KENNEL', 'https://thaipitbullkennelclub.com/uploads/kennel/20220202/abciqrt01257.jpg', NULL, NULL, NULL),
(8, 'P.P.Pitbull & Bandog Kennel SK', 'https://thaipitbullkennelclub.com/uploads/kennel/20220128/efhilqry0479.jpg', NULL, NULL, NULL);

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
(5, '2022_12_25_082533_create_contacts_table', 1),
(6, '2022_12_25_084632_create_dog_breed_groups_table', 2),
(8, '2022_12_25_101952_create_dogs_table', 3),
(9, '2022_12_26_075045_add_photo_to_dogs_table', 4),
(10, '2022_12_26_075214_add_main_photo_to_dogs_table', 5),
(11, '2022_12_30_053521_add_video_to_dogs_table', 6),
(12, '2022_12_30_173823_create_orders_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `dog_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_option` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `dog_id`, `name`, `email`, `phone`, `location`, `payment_option`, `additional_note`, `order_date_time`, `created_at`, `updated_at`) VALUES
(1, '1', 'Mg Mg', 'mgmg@gmail.com', '09123123123', 'Yangon', 'Cash On Delivery', NULL, '2022-12-30', '2022-12-30 11:13:41', '2022-12-30 11:13:41'),
(2, '1', 'Mg Mg', 'mgmgmg@gmail.com', '09123123123', 'Yangon', 'KPay', 'Hello', '2022-12-30', '2022-12-30 11:14:20', '2022-12-30 11:14:20'),
(3, '3', 'Mg Mg', 'mgmgmg@gmail.com', '09123123123', 'Yangon', 'KPay', 'asdf', '2022-12-30', '2022-12-30 11:15:53', '2022-12-30 11:15:53');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog_breed_groups`
--
ALTER TABLE `dog_breed_groups`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dog_breed_groups`
--
ALTER TABLE `dog_breed_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
