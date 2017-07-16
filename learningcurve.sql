-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 02:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learningcurve`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `childvals2`
--

CREATE TABLE `childvals2` (
  `id` varchar(255) NOT NULL,
  `skill1` int(255) NOT NULL,
  `skill2` int(255) NOT NULL,
  `skill3` int(255) NOT NULL,
  `skill4` int(255) NOT NULL,
  `skill5` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `mci_values1`
--

CREATE TABLE `mci_values1` (
  `id` varchar(255) NOT NULL,
  `mci1` int(11) NOT NULL,
  `mci2` int(11) NOT NULL,
  `mci3` int(11) NOT NULL,
  `mci4` int(11) NOT NULL,
  `mci5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mci_values2`
--

CREATE TABLE `mci_values2` (
  `id` varchar(255) NOT NULL,
  `mci1` int(11) NOT NULL,
  `mci2` int(11) NOT NULL,
  `mci3` int(11) NOT NULL,
  `mci4` int(11) NOT NULL,
  `mci5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` varchar(255) NOT NULL,
  `cv1` int(11) NOT NULL,
  `cv2` int(11) NOT NULL,
  `cv3` int(11) NOT NULL,
  `cv4` int(11) NOT NULL,
  `cv5` int(11) NOT NULL,
  `mcv1` int(11) NOT NULL,
  `mcv2` int(11) NOT NULL,
  `mcv3` int(11) NOT NULL,
  `mcv4` int(11) NOT NULL,
  `mcv5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sdata`
--

CREATE TABLE `sdata` (
  `sid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `childvals1`
--
ALTER TABLE `childvals1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `childvals2`
--
ALTER TABLE `childvals2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mci_values1`
--
ALTER TABLE `mci_values1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mci_values2`
--
ALTER TABLE `mci_values2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdata`
--
ALTER TABLE `sdata`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `class` (`class`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
