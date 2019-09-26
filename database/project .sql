-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2019 at 07:19 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE IF NOT EXISTS `attendence` (
  `StudentId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  KEY `CourseId` (`CourseId`),
  KEY `StudentId` (`StudentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `CourseId` int(11) NOT NULL,
  `Emp_No` int(11) NOT NULL,
  `Grade` int(2) NOT NULL,
  `NAME` varchar(120) NOT NULL,
  PRIMARY KEY (`CourseId`),
  KEY `Emp_No` (`Emp_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `Hall_No` int(11) NOT NULL,
  `Emp_No` int(11) NOT NULL,
  `Allocator` varchar(100) NOT NULL,
  PRIMARY KEY (`Hall_No`),
  KEY `Emp_No` (`Emp_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `non_acedemic_staff`
--

DROP TABLE IF EXISTS `non_acedemic_staff`;
CREATE TABLE IF NOT EXISTS `non_acedemic_staff` (
  `Emp_No` int(11) NOT NULL,
  `Username` varchar(120) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_Address` varchar(120) NOT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Password` varchar(120) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_Number` int(10) NOT NULL,
  PRIMARY KEY (`Emp_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `NotificationId` int(11) NOT NULL,
  `Emp_No` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Message` varchar(1000) NOT NULL,
  PRIMARY KEY (`NotificationId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `Name` varchar(100) NOT NULL,
  `Contact_Number` int(10) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `NotificationId` int(11) NOT NULL,
  PRIMARY KEY (`StudentId`),
  KEY `NotificationId` (`NotificationId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `Amount` int(100) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `Date` date NOT NULL,
  KEY `CourseId` (`CourseId`),
  KEY `StudentId` (`StudentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `CourseId` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `Marks` int(11) NOT NULL,
  PRIMARY KEY (`CourseId`,`StudentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `StudentId` int(11) NOT NULL,
  `Username` varchar(120) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_Address` varchar(120) NOT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Password` varchar(120) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_Number` int(10) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`StudentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `Emp_No` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `Username` varchar(120) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email_Address` varchar(120) NOT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Password` varchar(120) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_Number` int(10) NOT NULL,
  PRIMARY KEY (`Emp_No`),
  KEY `CourseId` (`CourseId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
