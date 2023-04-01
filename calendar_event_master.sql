-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 01:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar_event_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_master`
--

CREATE TABLE `calendar_event_master` (
  `event_id` int(11) NOT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `period` int(11) NOT NULL,
  `dated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar_event_master`
--

INSERT INTO `calendar_event_master` (`event_id`, `class_name`, `teacher_name`, `contact_no`, `period`, `dated`) VALUES
(22, '6A', 'Teacher', 119, 3, '2023-03-24'),
(23, '6A', 'Teacher', 119, 3, '2023-03-24'),
(24, 'as', 'a', 56, 1, '2023-03-24'),
(25, 'as', 'a', 56, 1, '2023-03-24'),
(26, '6A', 'Teacher', 2, 1, '2023-03-23'),
(27, '6A', 'Teacher', 562, 1, '2023-03-01'),
(28, '6A', 'Teacher', 561, 1, '2023-03-16'),
(29, 'dsa', 'asd6+', 7, 3, '2023-03-23'),
(30, '6Aaaaaaaaa', 'aaaaaaaaaaaaaaaa', 2147483647, 8, '2023-03-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
