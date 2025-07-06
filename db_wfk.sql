-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 01:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wfk`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `reservation_date`, `reservation_id`, `created_at`, `updated_at`) VALUES
(1, 'Haryanto Nugroho', '2023-07-03', 5, '2023-07-20 19:08:57', '2023-07-25 01:37:05'),
(22, 'Hani Riani', '2023-07-25', 3, '2023-07-23 19:30:10', '2023-07-23 19:30:10'),
(24, 'Adam Mohammad Sobari', '2023-07-26', 4, '2023-07-23 19:34:25', '2023-07-23 19:34:25'),
(25, 'Pipit Pitriani', '2023-07-27', 5, '2023-07-23 19:36:15', '2023-07-23 19:36:15'),
(26, 'Leti Nurfadillah', '2023-07-29', 2, '2023-07-23 19:37:15', '2023-07-23 19:37:59'),
(27, 'Imam Pauzi', '2023-07-30', 6, '2023-07-23 19:43:31', '2023-07-23 19:43:31'),
(28, 'Tatang Jamaludin', '2023-07-31', 6, '2023-07-23 19:56:02', '2023-07-23 19:56:02'),
(29, 'Bismi Sri', '2023-08-05', 5, '2023-07-23 20:01:44', '2023-07-23 20:01:44'),
(30, 'Ade Amung', '2023-08-04', 3, '2023-07-23 20:04:07', '2023-07-23 20:04:07'),
(31, 'Fauzan galang', '2023-07-28', 2, '2023-07-23 20:10:13', '2023-07-23 20:10:13'),
(32, 'Leti Nurdatilah', '2023-07-27', 5, '2023-07-25 01:35:27', '2023-07-25 01:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `customer_menu`
--

CREATE TABLE `customer_menu` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_menu`
--

INSERT INTO `customer_menu` (`customer_id`, `menu_id`) VALUES
(1, 11),
(1, 2),
(1, 2),
(1, 4),
(1, 3),
(1, 1),
(1, 2),
(1, 1),
(1, 3),
(1, 3),
(22, 1),
(27, 1),
(22, 2),
(25, 1);

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `country`, `price`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Sushi Tamago', 'Japan', 18000, 'sushi.jpeg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(2, 'Spaghetti Bolognese', 'Italiano', 20000, 'spaghetti.jpeg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(3, 'Nasi Goreng Spesial', 'Indonesia', 14000, 'nasi goreng.jpg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(4, 'tteobokki', 'South Korea', 18000, 'tteobokki.jpg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(5, 'Nasi Kucing', 'Malaysia', 13000, 'nasi kucing.jpg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(6, 'Kimchi', 'South Korea', 15000, 'kimchi.webp', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(7, 'Nasi Kebuli', 'Saudi Arabia', 18000, 'nasi kebuli.jpg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(8, 'Pizza', 'Italiano', 30000, 'pizza.jpg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(9, 'Seblak', 'Indonesia', 14000, 'seblak.webp', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(10, 'Taco', 'Mexico', 16000, 'taco.jpg', '2023-07-19 17:37:59', '2023-07-19 17:37:59'),
(11, 'Kebab', 'Turkey', 20000, 'kebab.webp', '2023-07-19 17:37:59', '2023-07-19 17:37:59');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_19_152929_create_menus_table', 2),
(7, '2023_07_19_181717_create_reservations_table', 3),
(9, '2023_07_20_161546_create_customers_table', 4),
(10, '2023_07_20_185554_create_customer_menu_table', 5),
(11, '2023_07_21_143831_add_reservation_date_column_to_customers_table', 6),
(12, '2023_07_22_211506_create_roles_table', 7),
(14, '2023_07_22_215020_create_users_table', 8),
(15, '2023_07_22_215235_create_roles_table', 9),
(16, '2023_07_22_215316_add_role_id_column_to_users_table', 10);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meja` varchar(100) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `meja`, `ruangan`, `created_at`, `updated_at`) VALUES
(1, 'NO-1', 'ROOM-1', '2023-07-19 21:11:20', '2023-07-19 21:11:20'),
(2, 'NO-2', 'ROOM-1', '2023-07-19 21:11:20', '2023-07-19 21:11:20'),
(3, 'NO-3', 'ROOM-1', '2023-07-19 21:11:20', '2023-07-19 21:11:20'),
(4, 'NO-1', 'ROOM-2', '2023-07-19 21:11:20', '2023-07-19 21:11:20'),
(5, 'NO-2', 'ROOM-2', '2023-07-19 21:11:20', '2023-07-19 21:11:20'),
(6, 'NO-3', 'ROOM-2', '2023-07-19 21:11:20', '2023-07-19 21:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-07-22 14:56:24', '2023-07-22 14:56:24'),
(2, 'Customer', '2023-07-22 14:56:24', '2023-07-22 14:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$fVb3r1GAdPJIO4deyb2yFeZRbAYxoamIXNve/LFKKacK4aoQbMjEa', NULL, NULL, NULL),
(4, 'customer', 'customer@gmail.com', 2, NULL, '$2y$10$mlutg/LiseHkZYu9KVpB0ep8Ftfl6MNpOriVqrWgEgKzABVJh2fv2', NULL, NULL, NULL),
(5, 'admin2', 'admin2@gmail.com', 1, NULL, 'naonwe', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `customer_menu`
--
ALTER TABLE `customer_menu`
  ADD KEY `customer_menu_customer_id_foreign` (`customer_id`),
  ADD KEY `customer_menu_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`);

--
-- Constraints for table `customer_menu`
--
ALTER TABLE `customer_menu`
  ADD CONSTRAINT `customer_menu_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
