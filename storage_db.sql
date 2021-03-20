-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2021 at 01:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `em_stock_table`
--

CREATE TABLE `em_stock_table` (
  `id` int(12) NOT NULL,
  `category` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expire` date NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `em_stock_table`
--

INSERT INTO `em_stock_table` (`id`, `category`, `item`, `location`, `expire`, `indate`) VALUES
(72, 'カップ麺', '焼きそば', 'キチンキャビネット', '2030-06-01', '2021-03-18 16:55:28'),
(77, 'カレー', '野菜カレー', 'キチンキャビネット', '2023-02-08', '2021-03-20 12:58:06'),
(86, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-01-02', '2021-03-20 19:39:51'),
(87, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-01-02', '2021-03-20 19:39:51'),
(88, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-01-02', '2021-03-20 19:39:51'),
(89, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-01-02', '2021-03-20 19:39:51'),
(90, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-01-02', '2021-03-20 19:39:51'),
(91, '缶詰', '鯖トマト煮', '冷蔵庫', '2021-03-02', '2021-03-20 19:39:51'),
(92, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-01-02', '2021-03-20 19:39:51'),
(93, 'カップ麺', '焼きそば', 'キチンキャビネット', '2022-03-14', '2021-03-20 19:40:30'),
(94, 'カップ麺', '焼きそば', 'キチンキャビネット', '2023-09-16', '2021-03-20 19:40:30'),
(95, 'カップ麺', '焼きそば', 'キチンキャビネット', '2025-03-14', '2021-03-20 19:40:30'),
(96, 'カップ麺', '焼きそば', 'キチンキャビネット', '2021-06-10', '2021-03-20 19:40:30'),
(97, 'カップ麺', '焼きそば', 'キチンキャビネット', '2023-09-18', '2021-03-20 19:40:30'),
(98, 'カレー', '野菜カレー', 'キチンキャビネット', '2024-02-15', '2021-03-20 19:41:18'),
(99, 'カレー', '野菜カレー', 'キチンキャビネット', '2024-02-15', '2021-03-20 19:41:18'),
(100, 'カレー', '野菜カレー', 'キチンキャビネット', '2024-02-15', '2021-03-20 19:41:18'),
(101, 'カレー', 'ビーフカレー', 'キチンキャビネット', '2025-01-26', '2021-03-20 19:41:52'),
(102, 'カレー', 'ビーフカレー', 'キチンキャビネット', '2024-01-26', '2021-03-20 19:41:52'),
(103, 'カレー', 'ビーフカレー', 'キチンキャビネット', '2023-12-12', '2021-03-20 19:41:52'),
(104, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(105, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(106, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(107, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(108, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(109, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(110, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(111, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(112, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(113, '米', 'インスタントライス', '押入れ', '2024-05-12', '2021-03-20 19:42:54'),
(117, 'パスタ', 'スパゲティー', 'キチンキャビネット', '2025-02-14', '2021-03-20 20:50:52'),
(118, 'パスタ', 'スパゲティー', 'キチンキャビネット', '2025-02-14', '2021-03-20 20:50:52'),
(119, 'パスタ', 'スパゲティー', 'キチンキャビネット', '2025-02-14', '2021-03-20 20:50:52'),
(120, 'パスタ', 'スパゲティー', 'キチンキャビネット', '2025-02-14', '2021-03-20 20:50:52'),
(121, '菓子類', '羊羮', '押入れ', '2021-08-12', '2021-03-20 20:52:20'),
(122, '菓子類', '羊羮', '押入れ', '2025-08-12', '2021-03-20 20:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_id`
--

CREATE TABLE `user_id` (
  `id` int(12) NOT NULL,
  `user_nm` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_pw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `life_flag` int(12) NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_id`
--

INSERT INTO `user_id` (`id`, `user_nm`, `user_id`, `user_pw`, `life_flag`, `indate`) VALUES
(1, 'user1', '1234', 'pass1', 0, '2021-03-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `em_stock_table`
--
ALTER TABLE `em_stock_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_id`
--
ALTER TABLE `user_id`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `em_stock_table`
--
ALTER TABLE `em_stock_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `user_id`
--
ALTER TABLE `user_id`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
