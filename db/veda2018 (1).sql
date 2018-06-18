-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 07:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veda2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'raji', '9999', 'raji@gmail.com', 7396706361),
(2, 'saji', '1234', 'saji@gmail.com', 7396706361);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` varchar(1000) DEFAULT NULL,
  `studentname` varchar(1000) DEFAULT NULL,
  `college` varchar(1000) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `department` varchar(1000) DEFAULT NULL,
  `event_category` varchar(1000) DEFAULT NULL,
  `event` varchar(1100) DEFAULT NULL,
  `event_location` varchar(1000) DEFAULT NULL,
  `fee` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `studentname`, `college`, `mobile`, `email`, `department`, `event_category`, `event`, `event_location`, `fee`) VALUES
(1, '493', 'PRATYUSHA', 'AEC', 7995887696, 'pratyu@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(2, '463', 'raji', 'AEC', 7995887696, 'raju@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(7, '15P31A0462', 'BALA', 'AEC', 78965232, 'bala@gmail.com', 'cse', 'Sparks', 'poster', 'cotton', '400'),
(14, '467', 'raji', 'ace', 9876543, 'adfgh@gmail.com', 'cse', 'digi', 'poster', 'Billgates', '500'),
(17, '464', 'dfg', 'erty', 3456, 'wer@gmail.com', 'ece', 'digi', 'poster', 'billgates', '100'),
(18, '462', 'tripura', 'acet', 9874521, 'tri@gmail.com', 'ece', 'digi', 'poster', 'cotton', '200'),
(32, '493', 'PRATYUSHA', 'AEC', 7995887696, 'pratyu@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(34, '463', 'raji', 'AEC', 7995887696, 'raju@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(35, '493', 'PRATYUSHA', 'AEC', 7995887696, 'pratyu@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(36, '463', 'raji', 'AEC', 7995887696, 'raju@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(37, '463', 'raji', 'AEC', 7995887696, 'raju@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(38, '493', 'PRATYUSHA', 'AEC', 7995887696, 'pratyu@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(39, '462', 'tripura', 'acet', 9874521, 'tri@gmail.com', 'ece', 'digi', 'poster', 'cotton', '200'),
(40, '463', 'raji', 'AEC', 7995887696, 'raju@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(41, '493', 'PRATYUSHA', 'AEC', 7995887696, 'pratyu@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(42, '463', 'raji', 'AEC', 7995887696, 'raju@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200'),
(43, '463', 'raji', 'AEC', 7995887696, 'raju@gmail.com', 'ece', 'digi', 'paper', 'billgates', '200');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `i` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `veda`
--

CREATE TABLE `veda` (
  `id` int(11) NOT NULL,
  `firstname` varchar(1000) DEFAULT NULL,
  `lastname` varchar(1000) DEFAULT NULL,
  `rollno` varchar(1000) DEFAULT NULL,
  `branch` varchar(1000) DEFAULT NULL,
  `college` varchar(1000) DEFAULT NULL,
  `year` varchar(1000) DEFAULT NULL,
  `event` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veda`
--

INSERT INTO `veda` (`id`, `firstname`, `lastname`, `rollno`, `branch`, `college`, `year`, `event`) VALUES
(1, 'pratyusha', 'pratyu', '1234567', 'ece', 'aec', '4', 'sparks'),
(2, 'pratyusha', 'pratyu', '1234567', 'ece', 'aec', '4', 'sparks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veda`
--
ALTER TABLE `veda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `veda`
--
ALTER TABLE `veda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
