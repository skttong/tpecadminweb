-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Mar 15, 2024 at 08:25 AM
-- Server version: 8.0.32
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveladminlte`
--

-- --------------------------------------------------------

--
-- Table structure for table `eq15611`
--

CREATE TABLE `eq15611` (
  `id` bigint UNSIGNED NOT NULL,
  `child_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r3` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r4` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r5` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r6` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r7` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r8` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r9` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r10` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r11` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r12` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r13` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r14` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r15` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eq15611`
--
ALTER TABLE `eq15611`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eq15611`
--
ALTER TABLE `eq15611`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
