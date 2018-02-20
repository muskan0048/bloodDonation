-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2017 at 06:38 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laghu`
--

-- --------------------------------------------------------

--
-- Table structure for table `lblood`
--

CREATE TABLE `lblood` (
  `SNo` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `BloodG` varchar(5) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lblood`
--

INSERT INTO `lblood` (`SNo`, `Name`, `Email`, `Contact`, `Gender`, `DOB`, `BloodG`, `Address`, `City`, `Pincode`) VALUES
(1, 'cjidsj', 'kjldkjsa@mddm', '7578', 'Female', '2017-04-06', 'A+', 'kjleje', 'kfjdk', '48085');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lblood`
--
ALTER TABLE `lblood`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lblood`
--
ALTER TABLE `lblood`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
