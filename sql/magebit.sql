-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 03:04 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebit`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `timestamp`) VALUES
(2, 'aweawd@awd.l;v', '2020-12-03 15:59:03'),
(3, 'igors.trimailovs@bk.ru', '2020-12-03 15:59:03'),
(4, 'aweawd@awd.lv', '2020-12-03 15:59:03'),
(5, 'awe@awd.lv', '2020-12-03 15:59:03'),
(6, 'aweawd@awd.lv', '2020-12-03 15:59:03'),
(7, 'aweawd@awd.lv', '2020-12-03 15:59:03'),
(8, 'aweawd@awd.lv', '2020-12-03 15:59:03'),
(9, 'aweawd@awd.lv', '2020-12-03 15:59:03'),
(10, 'aweawd@awd.lv', '2020-12-03 15:59:03'),
(11, 'igors.trimailovs@icloud.com', '2020-12-03 15:59:03'),
(15, 'aweawd@awd.lv', '2020-12-03 15:59:03'),
(19, 'igors.trimailovs@icloud.com', '2020-12-03 15:59:03'),
(28, 'igors.trimailovs@bk.ru', '2020-12-03 15:59:03'),
(29, 'igors.trimailovs@bk.rus', '2020-12-03 15:59:03'),
(30, 'igors.trimailovs@icloud.com', '2020-12-03 15:59:03'),
(31, 'igors.trimailovs@icloud2.com', '2020-12-03 15:59:03'),
(32, 'awe@awd.lv', '2020-12-03 16:27:20'),
(33, 'awe@awd.lv', '2020-12-03 16:27:45'),
(34, 'aewrerwas@awdw.lv', '2020-12-03 18:56:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
