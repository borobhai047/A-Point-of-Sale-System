-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 07:30 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `discount` int(10) DEFAULT 0,
  `id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `image`, `description`, `price`, `quantity`, `total`, `discount`, `id`) VALUES
('Jason', '30cm.jpeg', 'dfg', '122', 2, 129, 0, 1),
('Jasons', '2010 inception wide.jpg', 'dfg', '500', 3, 530, 0, 2);

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
(6, 1723397903382361, 37, 39, 39, 38, 38, 37, 38, 5),
(7, 1723401587838119, 29, 23.5, 24, 25, 26, 27, 25.75, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
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
(11, 'admin@gmail.com', '11111111', 1723397903382361),
(12, 'admin007@gmail.com', 'admin007', 1723401587838119);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
