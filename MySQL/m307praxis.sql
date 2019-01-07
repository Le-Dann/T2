-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 05:23 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m307praxis`
--

-- --------------------------------------------------------

--
-- Table structure for table `auftrag`
--
CREATE DATABASE `m307praxis`;

USE `m307praxis`;

CREATE TABLE `auftrag` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `service` varchar(40) NOT NULL,
  `priority` varchar(16) NOT NULL,
  `date` varchar(40) NOT NULL,
  ADD PRIMARY KEY(`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Value example
INSERT INTO `auftrag` (`orderID`, `firstname`, `lastname`, `email`, `phone`, `service`, `priority`, `date`) VALUES
(1, 'Dylan', 'Muchenberger', 'dylan.muchenberger@gmail.com', '0763604416', 'Grosser Service', 'standard', ''),




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
