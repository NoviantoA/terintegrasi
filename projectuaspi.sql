-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 09:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuaspi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categotytabel`
--

CREATE TABLE `categotytabel` (
  `CatId` int(10) NOT NULL,
  `CatName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categotytabel`
--

INSERT INTO `categotytabel` (`CatId`, `CatName`) VALUES
(1, 'teh'),
(2, 'coffe');

-- --------------------------------------------------------

--
-- Table structure for table `itemtabel`
--

CREATE TABLE `itemtabel` (
  `itId` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `itCat` varchar(50) NOT NULL,
  `itPrice` int(20) NOT NULL,
  `itQty` int(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemtabel`
--

INSERT INTO `itemtabel` (`itId`, `name`, `itCat`, `itPrice`, `itQty`) VALUES
(1, 'teh hyung', 'teh', 15000, 29),
(2, 'es teh hangat', 'teh', 5000, 80);

-- --------------------------------------------------------

--
-- Table structure for table `ordertabel`
--

CREATE TABLE `ordertabel` (
  `OrdId` int(10) NOT NULL,
  `OrdDate` date NOT NULL,
  `OrdAmt` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertabel`
--

INSERT INTO `ordertabel` (`OrdId`, `OrdDate`, `OrdAmt`) VALUES
(1, '2023-05-06', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categotytabel`
--
ALTER TABLE `categotytabel`
  ADD PRIMARY KEY (`CatId`);

--
-- Indexes for table `itemtabel`
--
ALTER TABLE `itemtabel`
  ADD PRIMARY KEY (`itId`);

--
-- Indexes for table `ordertabel`
--
ALTER TABLE `ordertabel`
  ADD PRIMARY KEY (`OrdId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categotytabel`
--
ALTER TABLE `categotytabel`
  MODIFY `CatId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `itemtabel`
--
ALTER TABLE `itemtabel`
  MODIFY `itId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertabel`
--
ALTER TABLE `ordertabel`
  MODIFY `OrdId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
