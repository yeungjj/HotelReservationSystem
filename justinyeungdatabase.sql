-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 08:27 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `justinyeungdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP DATABASE IF EXISTS justinyeungdatabase; 

CREATE DATABASE justinyeungdatabase; 

CREATE TABLE IF NOT EXISTS `rooms` (
  `roomID` varchar(255) NOT NULL,
  `roomName` varchar(255) NOT NULL,
  `roomPrice` varchar(255) NOT NULL,
  `numOfRooms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomID`, `roomName`, `roomPrice`, `numOfRooms`) VALUES
('1', 'The Classic', '100.00', '20'),
('2', 'The Premium', '110.00', '20'),
('3', 'The Executive', '150.00', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`roomID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


GRANT SELECT, INSERT, DELETE, UPDATE
ON justinyeungdatabase.*
TO justinyeung@localhost
IDENTIFIED BY ' justinyeungpass';