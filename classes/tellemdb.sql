-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2018 at 12:57 AM
-- Server version: 5.7.18-1
-- PHP Version: 7.1.6-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tellemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `trackref`
--

CREATE TABLE `trackref` (
  `sn` int(11) NOT NULL,
  `refID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `dateJoined` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackref`
--

INSERT INTO `trackref` (`sn`, `refID`, `userID`, `dateJoined`) VALUES
(1, 2, 1, '2018:05:13 00:32:01am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `uname` varchar(15) DEFAULT NULL,
  `fullname` varchar(35) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pword` varchar(64) DEFAULT NULL,
  `refid` varchar(20) DEFAULT NULL,
  `refcount` int(255) DEFAULT '0',
  `phone` varchar(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `fullname`, `email`, `pword`, `refid`, `refcount`, `phone`, `img`, `gender`) VALUES
(1, 'Kendrick', 'Precious Tom', 'tomprezine@gmail.com', 'root', '77d6xyep8l3crxx3', 0, '8179685649', NULL, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trackref`
--
ALTER TABLE `trackref`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trackref`
--
ALTER TABLE `trackref`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
