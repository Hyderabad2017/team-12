-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 08:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `childvals1`
--

CREATE TABLE `childvals1` (
  `id` varchar(255) NOT NULL,
  `skill1` int(255) NOT NULL,
  `skill2` int(255) NOT NULL,
  `skill3` int(255) NOT NULL,
  `skill4` int(255) NOT NULL,
  `skill5` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `childvals1`
--

INSERT INTO `childvals1` (`id`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`) VALUES
('LC20170001', 3, 3, 2, 2, 3),
('LC20170002', 3, 2, 4, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `childvals1`
--
ALTER TABLE `childvals1`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
