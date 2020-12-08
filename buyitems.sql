-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 08:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyitems`
--

CREATE TABLE `buyitems` (
  `id` int(5) NOT NULL,
  `cardname` varchar(20) NOT NULL,
  `cardno` int(16) NOT NULL,
  `epx` varchar(5) NOT NULL,
  `cvv` int(3) NOT NULL,
  `bill` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyitems`
--

INSERT INTO `buyitems` (`id`, `cardname`, `cardno`, `epx`, `cvv`, `bill`) VALUES
(1, 'Rexton Itsiah', 2147483647, '90/98', 766, '47 Maxweel  Road'),
(2, 'Rexton Itsiah', 2147483647, '90/98', 766, '47 Maxweel  Road'),
(3, 'Rexton Itsiah', 2147483647, '07/64', 455, '47 Maxweel  Road'),
(4, '0', 66, '99/09', 677, '47 Maxweel  Road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyitems`
--
ALTER TABLE `buyitems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyitems`
--
ALTER TABLE `buyitems`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
