-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 23, 2021 at 07:23 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--
CREATE DATABASE IF NOT EXISTS `jobs` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `jobs`;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `canname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `applying` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `canname`, `comname`, `applying`, `qual`, `pass`) VALUES
(9, 'Sarthak Mishra', 'Suzlon', 'Superwiser', 'MBA', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jdesc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ctc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cname`, `position`, `jdesc`, `skills`, `ctc`) VALUES
(11, 'Sartech Ind.', 'Cloud Engineer', 'Need a trained guy.', 'Java, cloud computing, C, C++', '25 LPA'),
(8, 'Asus', 'Software Developer', 'Need a trained guy!', 'Java, C, C++', '20 LPA'),
(12, 'Suzlon', 'Superwiser', 'Management degree required.', 'Java, C, Python', '18 LPA');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `phone`, `email`, `password`) VALUES
(6, 'Sarthak', '6392359512', 'mishrasarthak44@gmail.com', '12345'),
(7, 'Sarthak Mishra', '6392359512', 'smishra20@iiitmanipur.ac.in', '123456'),
(8, 'Apple', '6392359512', 'sarthak@gmail.com', '1234567');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
