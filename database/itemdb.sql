-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 08:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwplab`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemdb`
--

CREATE TABLE `itemdb` (
  `itemid` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` double(100,2) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemdb`
--

INSERT INTO `itemdb` (`itemid`, `name`, `price`, `quantity`) VALUES
(1, 'GTX1650', 12500.00, 17),
(2, 'keyboard', 1299.99, 37),
(3, 'Monitor', 8599.00, 8),
(4, 'i7 9700k', 23699.00, 13),
(5, 'motherboard', 7500.00, 27),
(6, 'Mouse', 859.00, 25),
(7, 'PSU', 2399.00, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemdb`
--
ALTER TABLE `itemdb`
  ADD PRIMARY KEY (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemdb`
--
ALTER TABLE `itemdb`
  MODIFY `itemid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
