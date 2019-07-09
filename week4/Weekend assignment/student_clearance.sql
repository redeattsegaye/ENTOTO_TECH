-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2019 at 03:41 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `UserName` text NOT NULL,
  `OfficeID` int(11) NOT NULL AUTO_INCREMENT,
  `Password` int(11) NOT NULL,
  PRIMARY KEY (`OfficeID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `approverequest`
--

DROP TABLE IF EXISTS `approverequest`;
CREATE TABLE IF NOT EXISTS `approverequest` (
  `ApproveUser` varchar(50) NOT NULL,
  `Name` text NOT NULL,
  `Approved` varchar(50) NOT NULL,
  `Cancelled` varchar(50) NOT NULL,
  `Date for Both` date NOT NULL,
  `Office` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
CREATE TABLE IF NOT EXISTS `library` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

DROP TABLE IF EXISTS `officer`;
CREATE TABLE IF NOT EXISTS `officer` (
  `OfficeID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` text NOT NULL,
  `FullNAME` text NOT NULL,
  `Password` int(11) NOT NULL,
  PRIMARY KEY (`OfficeID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proctor`
--

DROP TABLE IF EXISTS `proctor`;
CREATE TABLE IF NOT EXISTS `proctor` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

DROP TABLE IF EXISTS `registrar`;
CREATE TABLE IF NOT EXISTS `registrar` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `StudentID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` text NOT NULL,
  `FullNAME` text NOT NULL,
  `Password` int(11) NOT NULL,
  `InstituteAndprogram` text NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentrequest`
--

DROP TABLE IF EXISTS `studentrequest`;
CREATE TABLE IF NOT EXISTS `studentrequest` (
  `StudentID` int(50) NOT NULL AUTO_INCREMENT,
  `UserRequest` varchar(50) NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentservice`
--

DROP TABLE IF EXISTS `studentservice`;
CREATE TABLE IF NOT EXISTS `studentservice` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toolsstore`
--

DROP TABLE IF EXISTS `toolsstore`;
CREATE TABLE IF NOT EXISTS `toolsstore` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Student` varchar(100) NOT NULL,
  `Admin` varchar(100) NOT NULL,
  `Officer` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
