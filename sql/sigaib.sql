-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2023 at 10:34 AM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigaib`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `gallery` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery`) VALUES
(1, 'Screenshot_from_2023-05-30_11-29-39.png'),
(2, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `m_menu`
--

CREATE TABLE `m_menu` (
  `id` int NOT NULL,
  `menu` varchar(250) NOT NULL,
  `controller` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `jenis` enum('Master','Laporan','Transaksi','') NOT NULL DEFAULT 'Master',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `m_menu`
--

INSERT INTO `m_menu` (`id`, `menu`, `controller`, `link`, `icon`, `jenis`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Menu', 'menu', 'admin/menu', '<i class=\"uil-chart\"></i>', 'Master', '2023-05-31 09:41:15', '2023-05-31 09:41:40', NULL),
(2, 'Manajemen User', 'user', 'admin/user', '<i class=\"uil-user\"></i>', 'Master', '2023-05-31 09:47:34', '2023-05-31 09:48:23', NULL),
(3, 'Setting', 'setting', 'admin/setting', '<i class=\" uil-server\"></i>', 'Master', '2023-05-31 09:48:56', '2023-05-31 09:50:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_provider`
--

CREATE TABLE `m_provider` (
  `id` int NOT NULL,
  `nama_provider` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `m_provider`
--

INSERT INTO `m_provider` (`id`, `nama_provider`, `keterangan`, `icon`) VALUES
(1, 'TELKOMSEL', '', ''),
(2, 'SMARTFREN', '', ''),
(3, 'INDOSAT', '', ''),
(4, 'XL', '', ''),
(5, 'DISKOMIFO', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `key` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `key`, `value`) VALUES
(1, 'site_title', 'Sigaib aplikasi terkini'),
(2, 'site_year', '2022'),
(3, 'site_logo', 'http://localhost/sigaib/assets/gallery/logo.png'),
(4, 'site_copyright', 'Mafadev'),
(5, 'site_name', 'Sigaib');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `provider_id` int NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` longtext NOT NULL,
  `last_login` datetime NOT NULL,
  `active` int NOT NULL COMMENT '1=active, 99=nonactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `provider_id`, `nama_lengkap`, `no_hp`, `email`, `username`, `password`, `last_login`, `active`, `created_at`, `updated_at`) VALUES
(3, 5, 'Juni Trianto', '089603933446', 'triantoj13@gmail.com', 'juni1924', '$2y$10$DHMTxTgW6bXxseqxtzYSmuIsUkqmkXE2N/tkizV0dtpkVodICUGmi', '2023-05-31 09:32:55', 1, '2023-05-28 03:48:26', '2023-05-31 09:30:40'),
(5, 5, 'Pak Kabid', '0', 'kabid@gmail.com', 'kabidegov', '$2y$10$luf6pUZ2CtERoiZ0drgVs.AUjNYclJPG64GHZIoAUOG48Q8EqSEQO', '2023-05-31 09:32:27', 1, '2023-05-28 06:19:19', '2023-05-31 09:09:19'),
(6, 5, 'Administrator', '0', 'admin@admin.com', 'administrator', '$2y$10$n0lS80OvsPjtWS1zua.HWOrLig1yVtgmtiGmY8HpiyBCpSI4vRDY.', '0000-00-00 00:00:00', 1, '2023-05-31 02:51:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `user_id`, `menu_id`) VALUES
(4, 3, 1),
(5, 3, 2),
(6, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_menu`
--
ALTER TABLE `m_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_provider`
--
ALTER TABLE `m_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_menu`
--
ALTER TABLE `m_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_provider`
--
ALTER TABLE `m_provider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
