-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2019 at 10:18 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE `stuinfo` (
  `id` int(12) NOT NULL,
  `f_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `father_name` varchar(256) NOT NULL,
  `p_number` varchar(256) NOT NULL,
  `id_number` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`id`, `f_name`, `email`, `father_name`, `p_number`, `id_number`) VALUES
(1, 'sujan', 'asd@fm.com', 'Humayun', '123456', '8545747'),
(2, 'Abul', 'Miya@gmfds.com', 'Abul borkot', '0125788526546', '5468498498'),
(3, 'liza', 'Simran@gmail.com', 'good man', '01478844', '5886987'),
(4, 'korim', 'korim@gmail.com', 'korim@gmai.com', '123456', '12456465');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stuinfo`
--
ALTER TABLE `stuinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stuinfo`
--
ALTER TABLE `stuinfo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
