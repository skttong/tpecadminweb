-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Mar 05, 2024 at 02:49 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdistrict` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeposition` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `agency`, `position`, `address`, `province`, `district`, `subdistrict`, `typeposition`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'sommanuttong@gmail.com', NULL, '$2y$10$w7O88kP7IzMQgcgpwlxc1eUSyefjp2KtNCMp1BSwRQfb9UCUgJO5O', '1', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 03:29:23', '2023-09-26 03:29:23'),
(2, 'sommanut ketpong', 'sommanuttong@hotmail.com', NULL, '$2y$10$8sda4SrxpPJDOJHADYfoueW51K3r86EE.HSYhzXOaKL6sc/lOcJA.', '2', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 03:39:03', '2023-09-26 03:39:03'),
(6, 'sommanut ketpong', 'sommanut_tong@hotmail.com', NULL, '$2y$10$9ov3wqsfVODLN5d9.E9/y.LxTLYC.6cL9h5vmoK16FdDGhiBLLcv2', '3', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-10 06:41:22', '2023-10-10 06:41:22'),
(9, 'sommanut ketpong', 'sommanut_tong@gmail.com', NULL, '$2y$10$4.u.f1BTdHeiXEJ.Z50EdOJvDduFwAcuczd4D/66IGhDyD3fHb9ae', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'ยุวนา  ไขว้พันธ์', 'oilooy427@gmail.com', NULL, '$2y$10$.O/a.3MC5IJTGieKytUWceJhS7q2usn2oe7gCaY7.965/lN19DEgi', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'อสมาภรณ์ ทิมฉิม', 'child.mhc13@gmail.com', NULL, '$2y$10$fn7MOHRKcSNMW0/.mb/e0u8PcP3Fp6NjBStZK0.G3S7ytLolVlEKC', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'วนิดา แก้ววงศ์', 'wanidaricd391@gmail.com', NULL, '$2y$10$TNe/jathTRINdqWmYH46E.oel5uKPhQJRdAhFnmZ5t8rkRVf8.cyq', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'ธิดารัตน์ บุญปก', 'Mentalhealthcenter10@gmail.com', NULL, '$2y$10$lXE2gdgzBI8M4xGnzsYsHOaGHE/qXR/YLVulcgiDhxYzgOgaRxECC', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'ธัณภ์วรัตน์  จันทร์นวล', 'can.thanwarat@gmail.com', NULL, '$2y$10$hSSL0leUD0VFwdmqtj8QseMOQiyzc5g3B6H1SxAtwJUrorAaWeHC.', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'กีรติ ลิ่มสืบเชื้อ', 'triple.p.camri@gmail.com', NULL, '$2y$10$.QuDtv2Dzw4qQhT7UFtHvOD6e5I2CeCR0iehTtqFL3VtEuTt82cY6', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'ศศิรกานญ์ รุ่งสกุล', 'sasirakan.r@gmail.com', NULL, '$2y$10$xVmjCsAWCcycWOc5HNFKuOsdIbPhmtTWbWklfxd1b9Nq0gysgCUmu', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'ระวีวรรณ สุขเนาวรัตน์', 'raweewan.302532@gmail.com', NULL, '$2y$10$mq87W9urRUgi/REyRDDZXOR6NLJ.xOCNoFLEW6aJYQ1I0ttlgggEG', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'วรพจน์ พนาปวุฒิกุล', 'jamepc@gmail.com', NULL, '$2y$10$iT..byKJZw0jyHsva.rZKOjOownVHADPbyoSD/kMrdykeEe6bu59O', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'เบญญภา สมลักษณ์', 'benyapha04@gmail.com', NULL, '$2y$10$kACex64hQKBbaNuLi9cNpuGS7gpE0idlL3Q.IVWueW5yy8DwSgcMa', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'วรัญญ์กานต์ วงษ์ขันธ์', 'warantorthank@gmail.com', NULL, '$2y$10$ZYLfp4Ag00MnF6R/nm5cn.tNBv0GIxWypmHGA0KXJdKlXUWbd2OiO', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'มาลิณี   พุทธมา', 'beermalinee@gmail.com', NULL, '$2y$10$.nZ9VZVZk563dLKezLbHre4LfdL82Sf3XZLGpYEl9aFqrAe1Csxea', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'ภัทราพร ตันนุกูล', 'kinglovelinus06@gmail.com', NULL, '$2y$10$/lSpuORlIrq.MCWrnmHh6Oa9ZOivTaPAgY.vedsq0sN97dRi4XOQO', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'รุสนี  มะทา', 'rusnimatha@gmail.com', NULL, '$2y$10$ghLFSAAJqAtXDxY89NtzTO.lNNvOFoD8SQXKr0ddp6AuDtqSm8KRe', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
