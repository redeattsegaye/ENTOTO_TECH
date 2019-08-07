-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2019 at 12:43 AM
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
-- Database: `studentclerance`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `privilage` varchar(100) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1235 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `student_id`, `stud_id`, `privilage`) VALUES
('redi', '1234', NULL, 1, 'admin'),
('ruth', 'stud', NULL, 1234, 'student'),
('tolani', 'admin', NULL, 123, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

DROP TABLE IF EXISTS `office`;
CREATE TABLE IF NOT EXISTS `office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `officername` text NOT NULL,
  `officename` varchar(100) NOT NULL,
  `signupdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `officername`, `officename`, `signupdate`, `password`) VALUES
(1, 'kebede', 'library', '2019-07-19 14:37:35', '1234'),
(2, 'Nahome', 'Registrar', '2019-07-19 14:38:07', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `Last_class_date` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `message` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `reqid` int(11) NOT NULL AUTO_INCREMENT,
  `reqdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reqid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Last_class_date`, `type`, `message`, `student_id`, `reqid`, `reqdate`) VALUES
('aa', 'dd', 'fff', 0, 1, '2019-07-20 00:18:41'),
('2019-07-18', 'graduate', 'qqq', 0, 2, '2019-07-20 00:18:41'),
('2019-07-04', 'graduate', 'hi', 0, 3, '2019-07-20 00:18:41'),
('2019-07-18', 'graduate', 'dfdsf', 0, 4, '2019-07-20 00:18:41'),
('2019-07-10', 'graduate', 'kj', 0, 5, '2019-07-20 00:18:41'),
('2019-07-17', 'graduate', 'dad', 0, 6, '2019-07-20 00:18:41'),
('2019-07-25', 'graduate', 'eqw', 0, 7, '2019-07-20 00:18:41'),
('2019-07-16', 'graduate', 'ewew', 0, 8, '2019-07-20 00:18:41'),
('2019-07-10', 'withdrwal', 'dsds', 0, 9, '2019-07-20 00:18:41'),
('', 'graduate', 'hh,jh', 0, 10, '2019-07-20 00:18:41'),
('2019-07-14', 'graduate', 'nnn', 0, 11, '2019-07-20 00:18:41'),
('2019-07-04', 'withdrwal', 'hi', 0, 12, '2019-07-20 00:18:41'),
('2019-07-05', 'withdrwal', 'this', 0, 13, '2019-07-20 00:18:41'),
('2019-07-20', 'Dismisal', 'sdfj', 0, 14, '2019-07-20 00:18:41'),
('2019-07-15', 'Dismisal', 'hey', 0, 15, '2019-07-20 00:18:41'),
('2019-07-17', 'withdrwal', 'hey nani', 3, 16, '2019-07-20 00:45:44'),
('2019-07-18', 'Dismisal', 'FSDHFDHF', 3, 28, '2019-07-24 19:53:43'),
('2019-07-31', 'withdrwal', 'to be done', 3, 27, '2019-07-21 14:59:50'),
('2019-07-17', 'withdrwal', 'hiii', 3, 26, '2019-07-20 18:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL,
  `Reqid` int(11) NOT NULL,
  `officeid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `stausdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `fullname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `registration_date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fullname`, `age`, `gender`, `department`, `program`, `registration_date`, `username`, `password`, `student_id`, `phone`) VALUES
('Redeat tsegaye', 12, 'female', 'Mechanical', 'program_Extension', '2019-07-05', 'redu', '12', 12, 0),
('lili getachew', 10, 'female', 'Mechanical', 'program_business', '2019-07-11', 'lili', '1234', 7, 0),
('lili getachew', 4, 'female', 'Chemical', 'Regular', '2019-07-12', 'redii', '1233', 6, 24),
('lili getachew', 4, 'male', 'Electrical', 'Regular', '2019-07-12', 'redu', '12', 6, 4),
('nahom', 5, 'female', 'Chemical', 'Regular', '2019-07-10', 'abebe', '1223', 4, 9),
('nahome ', 3, 'female', 'Mechanical', 'Regular', '2019-07-16', 'nani', '12345', 3, 4),
('mesi hailu', 4, 'female', 'Accounting', 'Extension', '2019-07-19', 'mesi', '123', 3, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
