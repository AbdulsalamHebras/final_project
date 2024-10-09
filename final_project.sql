-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 08:36 AM
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
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `DOB` date NOT NULL,
  `DOD` date DEFAULT NULL,
  `nationality` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `description`, `DOB`, `DOD`, `nationality`, `phone_number`, `email`, `job`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Abdulsalam Hebras', 'sadsfmedf', '2024-10-17', '2024-10-18', 'american', '7713324126', 'salamhebras@gmail.com', 'Writer', 'authors/Class.jpg', '2024-10-09 03:34:41', '2024-10-09 03:34:41'),
(2, 'asalkadjsf', 'safdjgfgjfmb', '2024-10-17', '2024-10-09', 'american', '7713324124', 'sal@gmail.com', 'Writeras', 'authors/def.jpg', '2024-10-09 03:40:19', '2024-10-09 03:40:19'),
(3, 'rgergv', 'fgfdgvfsh', '2024-10-17', '2024-10-17', 'andorran', '7713324113', '21160017@su.edu.ye', 'wreferf', 'authors/Class.jpg', '2024-10-09 03:41:41', '2024-10-09 03:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abdulsalam Hebras', '2024-10-09 00:59:12', '2024-10-09 00:59:12'),
(2, 'adventure', '2024-10-09 06:23:10', '2024-10-09 06:23:10');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(57, '0001_01_01_000000_create_users_table', 1),
(58, '0001_01_01_000001_create_cache_table', 1),
(59, '0001_01_01_000002_create_jobs_table', 1),
(60, '2024_10_03_232052_create_categories_table', 1),
(61, '2024_10_03_232153_create_stories_table', 1),
(62, '2024_10_03_233124_create_authors_table', 1),
(63, '2024_10_03_234236_create_publishing_homes_table', 1),
(64, '2024_10_03_235643_create_story_publishing_homes_table', 1),
(65, '2024_10_04_000316_create_story_authors_table', 1),
(66, '2024_10_06_203712_create_user_favorite_stories_table', 1),
(67, '2024_10_06_203723_create_user_read_stories_table', 1);

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
-- Table structure for table `publishing_homes`
--

CREATE TABLE `publishing_homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishing_homes`
--

INSERT INTO `publishing_homes` (`id`, `name`, `country`, `phone_number`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Noor', 'Algeria', '7713324126', 'noor77@gmail.com', 'publishingHomes/classfi.jpg', '2024-10-09 04:32:55', '2024-10-09 04:32:55'),
(2, 'Noor2', 'Azerbaijan', '7713324113', 'noor277@gmail.com', 'publishingHomes/ERD.png', '2024-10-09 04:33:28', '2024-10-09 04:33:28'),
(3, 'Noor4', 'Andorra', '7713324127', 'noor477@gmail.com', 'publishingHomes/Class.jpg', '2024-10-09 04:39:50', '2024-10-09 04:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('B74WXxV7ZE7nBmlyO3n7VsTuuWXUObAQIscgwQbN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNElRUHZtUHBYMUdFNzBydHc3WTBvcFNidElKOHo2azBJSTlwbmhwQSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvc3RvcnkvOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1728455630);

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `writing_date` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `parts` int(11) NOT NULL,
  `deposit_number` int(11) NOT NULL,
  `edition_number` int(11) NOT NULL,
  `deposit_date` date NOT NULL,
  `pages` int(11) NOT NULL,
  `copies` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `name`, `summary`, `writing_date`, `image`, `category_id`, `language`, `parts`, `deposit_number`, `edition_number`, `deposit_date`, `pages`, `copies`, `price`, `created_at`, `updated_at`) VALUES
(7, 'Abdulsalam Hebras', 'adfdgk', '2024-10-16', 'stories/classfi.jpg', 1, 'Finnish', 3, 1, 2, '2024-10-08', 250, 20, 48.25, '2024-10-09 04:34:22', '2024-10-09 04:34:22'),
(8, 'tribs', 'ghhthththh', '2024-10-02', 'stories/action.jpg', 2, 'French', 2, 8, 1, '2024-10-08', 260, 40, 48.25, '2024-10-09 06:24:19', '2024-10-09 06:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `story_authors`
--

CREATE TABLE `story_authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_authors`
--

INSERT INTO `story_authors` (`id`, `story_id`, `author_id`, `created_at`, `updated_at`) VALUES
(3, 7, 2, NULL, NULL),
(4, 7, 3, NULL, NULL),
(5, 8, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `story_publishing_homes`
--

CREATE TABLE `story_publishing_homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `publishing_home_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_publishing_homes`
--

INSERT INTO `story_publishing_homes` (`id`, `story_id`, `publishing_home_id`, `created_at`, `updated_at`) VALUES
(1, 7, 1, NULL, NULL),
(2, 7, 2, NULL, NULL),
(3, 8, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_name` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$SvejAiST0G8P4HC.RtQdPepb5OsPKeRZEsI1EZhYXvJCUwiqZErKu', 'admin', NULL, '2024-10-07 03:41:45', '2024-10-07 03:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_favorite_stories`
--

CREATE TABLE `user_favorite_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_read_stories`
--

CREATE TABLE `user_read_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_read_stories`
--

INSERT INTO `user_read_stories` (`id`, `story_id`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 8, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `publishing_homes`
--
ALTER TABLE `publishing_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stories_category_id_foreign` (`category_id`);

--
-- Indexes for table `story_authors`
--
ALTER TABLE `story_authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `story_authors_story_id_foreign` (`story_id`),
  ADD KEY `story_authors_author_id_foreign` (`author_id`);

--
-- Indexes for table `story_publishing_homes`
--
ALTER TABLE `story_publishing_homes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `story_publishing_homes_story_id_foreign` (`story_id`),
  ADD KEY `story_publishing_homes_publishing_home_id_foreign` (`publishing_home_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_favorite_stories`
--
ALTER TABLE `user_favorite_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_favorite_stories_story_id_foreign` (`story_id`),
  ADD KEY `user_favorite_stories_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_read_stories`
--
ALTER TABLE `user_read_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_read_stories_story_id_foreign` (`story_id`),
  ADD KEY `user_read_stories_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `publishing_homes`
--
ALTER TABLE `publishing_homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `story_authors`
--
ALTER TABLE `story_authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `story_publishing_homes`
--
ALTER TABLE `story_publishing_homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_favorite_stories`
--
ALTER TABLE `user_favorite_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_read_stories`
--
ALTER TABLE `user_read_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `story_authors`
--
ALTER TABLE `story_authors`
  ADD CONSTRAINT `story_authors_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `story_authors_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`);

--
-- Constraints for table `story_publishing_homes`
--
ALTER TABLE `story_publishing_homes`
  ADD CONSTRAINT `story_publishing_homes_publishing_home_id_foreign` FOREIGN KEY (`publishing_home_id`) REFERENCES `publishing_homes` (`id`),
  ADD CONSTRAINT `story_publishing_homes_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`);

--
-- Constraints for table `user_favorite_stories`
--
ALTER TABLE `user_favorite_stories`
  ADD CONSTRAINT `user_favorite_stories_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_favorite_stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_read_stories`
--
ALTER TABLE `user_read_stories`
  ADD CONSTRAINT `user_read_stories_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_read_stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
