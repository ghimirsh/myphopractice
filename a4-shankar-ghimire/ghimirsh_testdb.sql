-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2020 at 11:26 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghimirsh_testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `authors` varchar(150) NOT NULL,
  `price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `title`, `subject`, `publisher`, `authors`, `price`) VALUES
(1, 'Fundamentals of Programming in Java', 'Java', 'McMillan', 'Peter Holand', 135),
(10, 'Introduction to PHP', 'Web Programming', 'McGraw Hill', 'Mr Tom', 150),
(11, 'PHP in Depth', 'Web programming', 'McMillan', 'Mr Manish', 150),
(12, 'PHP practical', 'Web programming', 'McMillan', 'Mr. Robin', 45);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `username`, `password`) VALUES
(1002, 'abc', '$2y$10$Zgr0n4NRd0BRAh7DuvN9PepMq/yDqi9fD/CNHw4B0QFIn8kALdILK'),
(1003, 'test', '$2y$10$1fBL9bOm6nqHQ.qVY0plo.q5v2wPGb9k2OHcbdODTF9c/4fOkZ7me'),
(1005, 'shankar', '$2y$10$bTD6HA4wmfFc4BP3V4DCBOTWkMUP4NJQjvTkcsK4WsYMNhDNL73Pi'),
(1014, 'sunil', '$2y$10$//CdxfMhIMTY59XEWASNxeS7TnjmkmK1XNjtdYReckx/rPyAvXUSy'),
(1012, 'testing1', '$2y$10$/k86xPtQlUMapbnLWIO1S.X62eV1dsfRhK84gHqN1ZXf.buNOrJ6O'),
(1013, 'aadad', '$2y$10$v0mOXPfbP/n3Y8f6d42hw.7vCfYAJAor9EB3Lt.QxB.jwLvi34pfq'),
(1015, 'testing2', '$2y$10$KIDkcYNQa71z6CgfabHROeUbCUoLdizMutnCNTDRzvLUusv0CTl3G'),
(1016, 'guest', '$2y$10$edhzHDNzDCijcL7pAHvt1.mT4poE0bzXaGRrM2JSlkPr/FM8nkZgK');

-- --------------------------------------------------------

--
-- Table structure for table `tblusertest1`
--

CREATE TABLE `tblusertest1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusertest1`
--

INSERT INTO `tblusertest1` (`id`, `username`, `password`) VALUES
(1, 'test', 'test'),
(2, 'abc', '$2y$10$Qu/yr09RyNdDe2A/uCQ20.Wa2EbOumQTsbwUFJ1w8EPS1gY5Jg/VO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tblusertest1`
--
ALTER TABLE `tblusertest1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `tblusertest1`
--
ALTER TABLE `tblusertest1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
