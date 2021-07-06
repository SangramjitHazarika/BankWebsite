-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2021 at 10:07 PM
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
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Name` varchar(255) NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `Account_no` varchar(255) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Name`, `Email_id`, `Account_no`, `Balance`) VALUES
('Abhay Singh', 'abhaysg354@gmail.com', '10312342135', 82000),
('David Das', 'daviddas256@gmail.com', '10212342135', 138500),
('Ishan Chaudhary', 'ishanchaudhary56@gmail.com', '11231231234', 122420),
('Naina Das', 'nainadas345@gmail.com', '12234223454', 250780),
('Rimli Gayan', 'rimligayan98@gmail.com', '12212342135', 120000),
('Sangramjit Hazarika', 'sangramjithazarika45@gmail.com', '10034223454', 138500),
('Shreya Gupta', 'shreyagupta478@gmail.com', '10234223454', 98200),
('Sourav Sharma', 'souravsh25@gmail.com', '10222342135', 128000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Email_id`,`Account_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
