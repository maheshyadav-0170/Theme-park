-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 10:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquatica`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogindetails`
--

CREATE TABLE `adminlogindetails` (
  `adminId` int(11) NOT NULL,
  `adminUsername` varchar(30) NOT NULL,
  `adminPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogindetails`
--

INSERT INTO `adminlogindetails` (`adminId`, `adminUsername`, `adminPassword`) VALUES
(1, 'admin', '12345'),


-- --------------------------------------------------------

--
-- Table structure for table `customerbookings`
--

CREATE TABLE `customerbookings` (
  `BookingId` int(11) NOT NULL,
  `custFname` varchar(30) NOT NULL,
  `custLname` varchar(30) NOT NULL,
  `custEmail` varchar(40) NOT NULL,
  `custPhone` int(10) NOT NULL,
  `custCity` varchar(30) NOT NULL,
  `custState` varchar(30) NOT NULL,
  `cDate` date NOT NULL,
  `cGuestNo` int(2) NOT NULL,
  `plans` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerbookings`
--

INSERT INTO `customerbookings` (`BookingId`, `custFname`, `custLname`, `custEmail`, `custPhone`, `custCity`, `custState`, `cDate`, `cGuestNo`, `plans`) VALUES
(4, 'ee', 'e', 's@g.con', 0, 'wjjw', 'Goa', '2023-03-21', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `cId` int(1) NOT NULL,
  `cFname` varchar(30) NOT NULL,
  `cLname` varchar(30) NOT NULL,
  `cEmail` varchar(30) NOT NULL,
  `cPassword` varchar(20) NOT NULL,
  `cPhone` bigint(10) DEFAULT NULL,
  `cCity` varchar(30) NOT NULL,
  `cState` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`cId`, `cFname`, `cLname`, `cEmail`, `cPassword`, `cPhone`, `cCity`, `cState`) VALUES
(41, 'your first name', 'your last name', 'yourname@gmail.com', '12345', 4294967295, 'Blr', 'Karnataka');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogindetails`
--
ALTER TABLE `adminlogindetails`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `customerbookings`
--
ALTER TABLE `customerbookings`
  ADD PRIMARY KEY (`BookingId`,`custEmail`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`cId`,`cEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogindetails`
--
ALTER TABLE `adminlogindetails`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customerbookings`
--
ALTER TABLE `customerbookings`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `cId` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
