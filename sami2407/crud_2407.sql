-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2025 at 05:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_2407`
--

-- --------------------------------------------------------

--
-- Table structure for table `aptechsite`
--

CREATE TABLE `aptechsite` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aptechsite`
--

INSERT INTO `aptechsite` (`id`, `name`, `contact`, `email`, `address`) VALUES
(1, 'sami', 3252626476, 'sami2407f@aptechsite.net', 'karachi'),
(4, 'Muhammad Shayan Usman', 3215546484, 'abc@gmail.com', 'karachi'),
(5, 'jawad', 32565659526, 'jawad@gmail.com', 'karachi'),
(7, 'ali', 3256595854, 'alihamza@gmail.com', 'karachi'),
(8, 'kashif', 3256585955, 'kashif@gmail.com', 'lahore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aptechsite`
--
ALTER TABLE `aptechsite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aptechsite`
--
ALTER TABLE `aptechsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
