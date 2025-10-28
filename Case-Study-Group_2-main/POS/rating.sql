-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 06:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) NOT NULL,
  `rating_id` bigint(20) NOT NULL,
  `Humor` float NOT NULL,
  `Personality` float NOT NULL,
  `Creativity` float NOT NULL,
  `Fashion` float NOT NULL,
  `Hygiene` float NOT NULL,
  `Trustworthiness` float NOT NULL,
  `avg` float NOT NULL,
  `total` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating_id`, `Humor`, `Personality`, `Creativity`, `Fashion`, `Hygiene`, `Trustworthiness`, `avg`, `total`) VALUES
(1, 1723198222348375, 9.5, 0, 0, 0, 0, 0, 1.58, 2),
(3, 1723198304232411, 8.5, 9, 9.5, 10, 10, 9.5, 9.42, 2),
(4, 1723198324344278, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1723385498945721, 5, 8, 8, 8, 7.5, 7, 7.25, 6),
(6, 1723397903382361, 37, 39, 39, 38, 38, 37, 38, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `rating_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `rating_id`) VALUES
(6, 'sohaankanes@gmail.coms', 'sohaankasnes@gmail.com', 1723198222348375),
(8, 'admddin@gmail.com', 'creddatbe228', 1723198304232411),
(9, 'sohaafffnkane@gmail.com', 'crffeatbe228', 1723198324344278),
(10, 'sohaankane@gmail.com', 'creatbe228', 1723385498945721),
(11, 'admin@gmail.com', '11111111', 1723397903382361);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH,
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
