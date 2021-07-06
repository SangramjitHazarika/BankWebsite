-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2021 at 10:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `Sl.No.` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `receiver_email` varchar(255) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Date_and_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`Sl.No.`, `sender_name`, `receiver_name`, `sender_email`, `receiver_email`, `Amount`, `Date_and_time`) VALUES
(1, 'Sourav Sharma', 'Abhay Singh', 'souravsh25@gmail.com', 'abhaysg354@gmail.com', 2000, '2021-07-06 23:40:23'),
(2, 'Shreya Gupta', 'Sangramjit Hazarika', 'shreyagupta478@gmail.com', 'sangramjithazarika45@gmail.com', 2000, '2021-07-06 23:40:53'),
(3, 'Naina Das', 'Ishan Chaudhary', 'nainadas345@gmail.com', 'ishanchaudhary56@gmail.com', 1200, '2021-07-06 23:41:13'),
(4, 'David Das', 'Sangramjit Hazarika', 'daviddas256@gmail.com', 'sangramjithazarika45@gmail.com', 1500, '2021-07-07 00:17:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`Sl.No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `Sl.No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
