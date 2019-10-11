-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2019 at 10:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EkhaaeGate_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `id` int(10) UNSIGNED NOT NULL,
  `braName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`id`, `braName`) VALUES
(1, 'الرياض'),
(2, 'جدة'),
(3, 'الدمام');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `homID` int(11) NOT NULL,
  `homBranch` int(11) NOT NULL,
  `homType` int(11) NOT NULL,
  `homDistrict` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homStatus` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `homID`, `homBranch`, `homType`, `homDistrict`, `homStatus`, `created_at`, `updated_at`) VALUES
(1, 1001, 1, 1, 'test', 1, NULL, NULL),
(2, 1002, 2, 2, 'النزهة2', 1, '2018-02-17 19:40:50', '2018-02-17 19:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2018_02_17_210044_create_orphans_table', 3),
(6, '2018_02_17_214816_create_homes_table', 4),
(7, '2018_02_17_220039_create_branchs_table', 5),
(8, '2014_10_12_000000_create_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orphans`
--

CREATE TABLE `orphans` (
  `id` int(10) UNSIGNED NOT NULL,
  `orpNationalID` int(11) NOT NULL,
  `orpMinistryNo` int(11) NOT NULL,
  `orpEkhaaNo` int(11) NOT NULL,
  `orpEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orpFirstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orpSecName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orpThirdName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orpForthName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orpMobile` int(11) NOT NULL,
  `orpGender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `orpBranch` int(11) NOT NULL,
  `orpHome` int(11) DEFAULT NULL,
  `orpReferralNo` int(11) NOT NULL,
  `orpMinistryStatus` int(11) NOT NULL,
  `oprEkhaaStatus` int(11) NOT NULL,
  `orpType` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orphans`
--

INSERT INTO `orphans` (`id`, `orpNationalID`, `orpMinistryNo`, `orpEkhaaNo`, `orpEmail`, `orpFirstname`, `orpSecName`, `orpThirdName`, `orpForthName`, `orpMobile`, `orpGender`, `orpBranch`, `orpHome`, `orpReferralNo`, `orpMinistryStatus`, `oprEkhaaStatus`, `orpType`, `created_at`, `updated_at`) VALUES
(1, 1106206921, 12345, 12345, 'yaser@outlook.com', 'ياسر', 'Abdulrahman', 'aljedaie', 'Aljedaie', 4, 'Female', 1, NULL, 1, 1, 1, 1, '2018-02-17 18:46:19', '2018-02-17 20:17:55'),
(2, 1106206922, 12340, 12340, 'yaser0@outlook.com', 'Yaser', 'Abdulrahman', 'aljedaie', 'Aljedaie', 4, 'Male', 1, NULL, 1, 1, 1, 1, '2018-02-17 19:03:41', '2018-02-17 19:03:41'),
(3, 1106206923, 12341, 12341, 'yaser1@outlook.com', 'Yaser', 'Abdulrahman', 'aljedaie', 'Aljedaie', 4, 'Male', 1, NULL, 1, 1, 1, 1, '2018-02-17 19:05:18', '2018-02-17 19:05:18'),
(4, 1106206924, 12343, 12342, 'yaser2@outlook.com', 'Yaser', 'Abdulrahman', 'aljedaie', 'Aljedaie', 4, 'Male', 1, NULL, 1, 1, 1, 1, '2018-02-17 19:06:02', '2018-02-17 19:06:02'),
(5, 1234567890, 1233, 1233, 'yaserabdulrhman@outlook.com', 'Yaser', 'Abdulrahman', 'aljedaie', 'Aljedaie', 4, 'Male', 3, NULL, 1, 1, 1, 1, '2018-02-17 19:10:23', '2018-02-17 19:10:23'),
(6, 1234567891, 1234, 1234, 'yaserabdulrhman2@outlook.com', 'Yaser', 'Abdulrahman', 'aljedaie', 'Aljedaie', 4, 'Male', 3, 1, 1, 1, 1, 1, '2018-02-17 19:11:19', '2018-02-17 19:21:01'),
(7, 1234567898, 4321, 4321, 'saud2@outlook.com', 'Yaser', 'Abdulrahman2', 'aljedaie', 'Aljedaie', 6, 'Male', 2, 1, 1, 1, 1, 1, '2018-02-18 05:24:38', '2018-02-18 05:26:05'),
(8, 1080208553, 56789, 56789, 'm.s.y.99@hotmail.com', 'محمد', 'ماجد', 'موسى', 'فهد', 55997191, 'Male', 2, 2, 1, 2, 1, 1, '2018-04-15 05:39:34', '2018-04-15 05:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `empNationalID` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empFirstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empSecName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empThirdName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empMobile` int(11) NOT NULL,
  `empGender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `empJobTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empPicture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empBranch` int(11) NOT NULL,
  `empRoles` int(11) NOT NULL,
  `empPassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `empNationalID`, `email`, `empFirstname`, `empSecName`, `empThirdName`, `empMobile`, `empGender`, `empJobTitle`, `empPicture`, `empBranch`, `empRoles`, `empPassword`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1106206921, 'yaser@outlook.com', 'Yaser', 'Abdulrahman', 'aljedaie', 3, 'Male', 'Supervisor', NULL, 1, 1, '$2y$10$SgvF/IPp34Ym2y3R4YRYg.6N7NxDfKfvN1RJ9mQ3NP2zAOqgYw8ha', 'b8Kr45M3423uFHP4IsYWHCb0C3iYg7l5LfTWWxWLKMF1cy0ETmos729AgRV0', '2018-02-17 21:27:25', '2018-02-17 21:27:25'),
(2, 1106206922, 'saud@outlook.com', 'Saud', 'Ibrahim', 'alsarran', 559979198, 'Male', 'Supervisor', NULL, 1, 1, '$2y$10$niCoue1Kl0qnu35vrS4dKOzbNTftpxlXsAF8M7wgTn69hnMl1g2.W', 'qpDUhe7E0aqI8359TiJsBWIdIgJakXnDnB1H3JkluJnsEUBDtSdY9PC0ILba', '2018-02-17 22:16:58', '2018-02-17 22:16:58'),
(3, 1106206999, 'yaser4@outlook.com', 'Sara', 'khaled', 'almosa', 55999719, 'Male', 'Supervisor', NULL, 1, 1, '$2y$10$k7K2i9P1EKDfDWo.C1W4JehCe6mDFCYV/7DJSpIrQbtkgA0jb/PJm', NULL, '2018-02-19 18:47:36', '2018-02-19 18:47:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orphans`
--
ALTER TABLE `orphans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orphans_orpnationalid_unique` (`orpNationalID`),
  ADD UNIQUE KEY `orphans_orpministryno_unique` (`orpMinistryNo`),
  ADD UNIQUE KEY `orphans_orpekhaano_unique` (`orpEkhaaNo`),
  ADD UNIQUE KEY `orphans_orpemail_unique` (`orpEmail`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_empnationalid_unique` (`empNationalID`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orphans`
--
ALTER TABLE `orphans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
