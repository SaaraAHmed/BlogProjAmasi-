-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 04:13 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogdb`
--

CREATE TABLE `blogdb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogTitle` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogdb`
--

INSERT INTO `blogdb` (`id`, `blogTitle`, `content`, `created_at`, `updated_at`) VALUES
(16, 'jhjhjhj', 'jhjhj', '2024-05-16 20:13:01', NULL),
(18, 'ggggggggggg', 'm', '2024-05-16 22:58:54', NULL),
(20, 'njjjjffffff', 'ggggggggg', '2024-05-16 22:59:16', NULL),
(21, 'ffffffffffffffffffffff', 'vvvvvvvvvvvvvvvvvv', '2024-05-16 22:59:27', NULL),
(30, 'g', 'm', '2024-05-16 23:13:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogdb`
--
ALTER TABLE `blogdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogdb`
--
ALTER TABLE `blogdb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
