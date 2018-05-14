-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 01:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 2, 1, '2018:05:13 00:32:01am'),
(2, 0, 2, '2018:05:13 02:32:54am'),
(3, 7, 3, '2018:05:13 02:39:07am'),
(4, 7, 4, '2018:05:13 03:08:09am');

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
  `referrer` varchar(50) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `fullname`, `email`, `pword`, `refid`, `refcount`, `phone`, `referrer`, `img`, `gender`) VALUES
(1, 'Kendrick', 'Precious Tom', 'tomprezine@gmail.com', 'root', '77d6xyep8l3crxx3', 0, '8179685649', NULL, NULL, 'Male'),
(2, 'Menezy', 'Bright Sunday', 'menezy10@gmail.com', 'hello', '7llg67w24pa51k5x', 2, '09032289130', NULL, NULL, 'Male'),
(3, 'bright', 'Solomon Haruna', 'menezy25@gmail.com', 'hithere', '1j0iurooaux5e9sl', 2, '09034456789', NULL, NULL, 'Male'),
(4, 'candrana', 'candrana beauty', 'candranabeauty@gmail', 'candrana', 'iw95fzk8csqs00or', 4, '08034472341', NULL, NULL, 'female'),
(5, 'test', 'Chiemela', 'test2@test.com', '', 'xi0m09ya1xfbba6w', 0, '08034472341', 'iw95fzk8csqs00or', NULL, 'Male'),
(6, 'solomon', 'solomon brandy', 'solomon@test.com', 'solop', 's6scjkq71s4qowbt', 0, '08034478905', '1j0iurooaux5e9sl', NULL, 'Male'),
(7, 'charles123', 'charles rookie', 'charles4@test.com', '$2y$10$Qz4yq133JJ/zUBxCTCB49OZ52yTDButnO7pRZE8vuDQGbnc4tlx/2', 'yy3a2xrybhtwa8bu', 0, '08048852017', '1j0iurooaux5e9sl', NULL, 'Male'),
(8, 'Judas', 'Judas Iscariot', 'judas@iscariot.com', '$2y$10$QrsQFA0lM5e9PMy8Ayb.reICj5moD3Hmis.qkbXvvWUzAi43eG2XC', 'ktc07w2l73plkul4', 0, '08034457890', '7llg67w24pa51k5x', NULL, 'Male');

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
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
