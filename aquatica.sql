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
(1, 'yadav@', '12345'),
(2, 'mahesh@', '67890'),
(49, 'mahesh2@gmail.com', '12345jed'),
(50, 'mahesh2@gmail.com', '12345jed'),
(51, 'ahe@gmail.com', '12345'),
(52, 'gokul@gmail.com', '12345Gokul'),
(53, 'npg@gmail.com', '12345'),
(54, 'dsi@gmail.com', 'Maheu3g3uie121@');

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
(4, 'ee', 'e', 's@g.con', 0, 'wjjw', 'Goa', '2023-03-21', 1, '1'),
(5, 'wd', 'd', 'd@gmail.com', 2147483647, 'Bengaluru', 'Arunach Pradesh', '2023-03-21', 2, 'Student Offer'),
(6, 'Mahesh', 'Yadav G', 'maheshyadav0170@gmail.com', 2147483647, 'Bengaluru', 'Madhya Pradesh', '2023-03-21', 2, 'Student Offer'),
(7, 'wd', 'd', 'd@gmail.com', 2147483647, 'Bengaluru', 'Arunach Pradesh', '2023-03-21', 2, 'Student Offer'),
(8, 'Sirified', 'S', 'sirisha@gmail.com', 2147483647, 'Bengaluru', 'Karnataka', '2023-03-22', 2, 'Early Bird Offers'),
(9, 'Mahesh', 'Yadav', 'gokul@gmail.com', 2147483647, 'Bengaluru', 'Himachal Pradesh', '2023-04-12', 1, 'Wonder Wednesday'),
(10, 'Mahesh', 'Yadav', 'gokul@gmail.com', 2147483647, 'Bengaluru', 'Himachal Pradesh', '2023-04-12', 1, 'Wonder Wednesday'),
(11, 'Mahesh', 'Yadav', 'gokul@gmail.com', 2147483647, 'Bengaluru', 'Himachal Pradesh', '2023-04-12', 1, 'Wonder Wednesday'),
(12, 'Mahesh', 'Yadav', 'gokul@gmail.com', 2147483647, 'Bengaluru', 'Himachal Pradesh', '2023-04-12', 1, 'Wonder Wednesday'),
(13, 'Mahesh', 'Yadav', 'gokul@gmail.com', 2147483647, 'Bengaluru', 'Himachal Pradesh', '2023-04-12', 1, 'Wonder Wednesday'),
(14, 'Mahesh', 'Yadav', 'gokul@gmail.com', 2147483647, 'Bengaluru', 'Himachal Pradesh', '2023-04-12', 1, 'Wonder Wednesday'),
(15, 'dh3id', 'eb2ue', 'j3ei@gmaul.c0fie', 2147483647, 'Bengaluru', 'Haryana', '2023-04-18', 1, 'Wonder Wednesday'),
(16, 'Kaushik', 'Yadav', 'k@gmail.com', 2147483647, 'Bengaluru', 'Jharkhand', '2023-04-14', 1, 'Student Offer'),
(17, 'Kaushik', 'Yadav', 'k@gmail.com', 2147483647, 'Bengaluru', 'Jharkhand', '2023-04-14', 1, 'Student Offer');

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
(41, 'Mahesh', 'Yadav G', 'maheshyadav0170@gmail.com', '12345', 4294967295, 'Blr', 'Karnataka'),
(44, 'mm', 'mm', 'npg@gmail.com', '12345', 0, 'rr', 'Andhra Pradesh'),
(45, 'Mahesh', 'Yadav G', 'yadav@gmail.com', 'Mahesh@0160', 0, 'Bengaluru', 'Karnataka'),
(47, 'jkbr3r', '3jeb3', 'Admin@gmail.come', 'passwordj2n', 4294967295, 'e', 'Select state'),
(48, 'Gokul', 'Yadav', 'gokul@gmail.com', '12345Gokul', 4294967295, 'Bengaluru', 'Karnataka'),
(49, 'Kaushik', 'Yadav', 'k@gmail.com', 'K1234@', 4294967295, 'Bengaluru', 'Jharkhand'),
(50, 'Makd3o', 'ud g7ef', 'k@gmail.cube', 'K1234@', 8787878787, 'Bende', 'Gujarat');

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
