-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 22, 2022 at 06:18 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `rapture`
--

DROP TABLE IF EXISTS `rapture`;
CREATE TABLE IF NOT EXISTS `rapture` (
  `rap_id` int(200) NOT NULL AUTO_INCREMENT,
  `rap_name` text NOT NULL,
  `rap_email` varchar(200) NOT NULL,
  `rap_pass` varchar(20) NOT NULL,
  `rap_conf` varchar(20) NOT NULL,
  `rap_img` varchar(250) NOT NULL,
  `rap_phn` varchar(15) NOT NULL,
  `rap_add` varchar(250) NOT NULL,
  `rap_subs` varchar(200) NOT NULL,
  PRIMARY KEY (`rap_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapture`
--

INSERT INTO `rapture` (`rap_id`, `rap_name`, `rap_email`, `rap_pass`, `rap_conf`, `rap_img`, `rap_phn`, `rap_add`, `rap_subs`) VALUES
(4, 'Haviva Ray', 'xaqon@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '', '8376482736', 'Mumbai', ''),
(10, 'Steel Macdonald', 'zozym@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '', '9263764518', 'Bengaluru', 'sdvcsd@gmail.com'),
(9, 'Ivan Gates', 'nano@gmail.com', 'nano', 'nano', '', '9876543218', 'Chennai', ''),
(12, 'Nancylin', 'nevelin@gmail.com', 'nevelin', 'nevelin', '', '8234565432', 'Bengaluru', 'sdbsd@gmail.com'),
(13, 'Cailin Vasquez', 'jywrevy@mator.com', 'Pa$$w0r', 'Pa$$w0r', '', '7625398345', 'Mumbai', ''),
(20, 'ciciha', 'lipodix@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '', '', '', ''),
(23, 'Nancylin', 'nevelin@gmail.com', 'nevelin', 'nevelin', '', '8234565432', 'Bengaluru', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
