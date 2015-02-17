-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 02:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `register_table_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`register_table_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`register_table_id`, `username`, `password`) VALUES
(1, 'Mutia', '3eb4c11722507eae902e13a8f202e947');

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE IF NOT EXISTS `register_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) DEFAULT NULL,
  `sur_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`id`, `email`, `sur_name`, `last_name`, `job_title`, `company_name`) VALUES
(1, 'mutihafi46@gmail.com', 'Mutia', 'Mutia', 'Job Title', 'IPB');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
