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
-- Table structure for table `mci_values1`
--

CREATE TABLE `mci_values1` (
  `id` varchar(11) NOT NULL,
  `mci1` int(11) NOT NULL,
  `mci2` int(11) NOT NULL,
  `mci3` int(11) NOT NULL,
  `mci4` int(11) NOT NULL,
  `mci5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mci_values1`
--

INSERT INTO `mci_values1` (`id`, `mci1`, `mci2`, `mci3`, `mci4`, `mci5`) VALUES
('LC20170001', 3, 4, 1, 2, 3),
('LC20170002', 1, 3, 5, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mci_values1`
--
ALTER TABLE `mci_values1`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
