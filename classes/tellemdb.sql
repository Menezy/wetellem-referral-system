-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 12:38 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pword` varchar(64) NOT NULL,
  `refid` varchar(11) NOT NULL,
  `refcount` int(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `fullname`, `email`, `pword`, `refid`, `refcount`, `phone`, `img`, `gender`) VALUES
(1, 'Tester', 'Testing Tester', 'tester@tester.io', 'qwertyuiop', 'Tes17665492', 0, '09011223344', '', 'Male'),
(2, 'xahxvvvv', 'collins', 'vzhv@ggg.com', 'azure', 'xah29064469', 0, '', '', ''),
(3, 'hello hi', 'collins idubo', 'vzhdv@ggg.com', 'hallo', 'hel28514837', 0, '09032289130', '', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
