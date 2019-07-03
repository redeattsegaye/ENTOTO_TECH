-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2019 at 11:27 PM
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
-- Database: `student_c`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

DROP TABLE IF EXISTS `approved`;
CREATE TABLE IF NOT EXISTS `approved` (
  `Stud_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Privillage` text NOT NULL,
  `0ffice_ID` int(11) NOT NULL,
  `Ap_date` date NOT NULL,
  PRIMARY KEY (`Stud_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

DROP TABLE IF EXISTS `office`;
CREATE TABLE IF NOT EXISTS `office` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Office_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Office_Name` text NOT NULL,
  `Privilage` text NOT NULL,
  PRIMARY KEY (`Office_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`UserName`, `FullName`, `Password`, `Office_ID`, `Office_Name`, `Privilage`) VALUES
('abebe', 'abebealemu', 'tgy7', 1, 'HR', 'pass'),
('chala', 'chalaalmu', 'yui8', 8, 'ITSC', 'setdepartment');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `Stud_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Req_Type` text NOT NULL,
  `Req_Date` date NOT NULL,
  PRIMARY KEY (`Stud_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `UserName` text NOT NULL,
  `FullName` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  `stud_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Instiute and program` text NOT NULL,
  PRIMARY KEY (`stud_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`UserName`, `FullName`, `Password`, `stud_ID`, `Instiute and program`) VALUES
('redi', 'redeattsegaye', '123', 12, 'software'),
('tigi', 'tigistashine', '345', 34, 'IS'),
('leli', 'lemlem H', '456', 78, 'computerscience');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_action` text NOT NULL,
  `Action_date` date NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
