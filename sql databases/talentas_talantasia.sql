-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2015 at 07:44 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE talentas_talantasia;
USE talentas_talantasia;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `talentas_talantasia`
--

-- --------------------------------------------------------

--
-- Table structure for table `bannerimages`
--

CREATE TABLE IF NOT EXISTS `bannerimages` (
  `Path` varchar(255) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Owner` varchar(100) DEFAULT NULL,
  `Contactno` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannerimages`
--

INSERT INTO `bannerimages` (`Path`, `Title`, `Owner`, `Contactno`) VALUES
('BannerImages/Banner1.jpg', '', '', ''),
('BannerImages/Banner2.jpg', '', '', ''),
('BannerImages/Banner3.jpg', '', '', ''),
('BannerImages/Banner4.jpg', '', '', ''),
('BannerImages/Banner5.jpg', '', '', ''),
('BannerImages/Banner6.jpg', '', '', ''),
('BannerImages/Banner7.jpg', 'Sunset', 'kithsirimewan Jayasena', 'kithjay@yahoo.com'),
('BannerImages/Banner8.jpg', 'Little Hut', 'kithsirimewan Jayasena', 'kithjay@yahoo.com'),
('BannerImages/Banner9.jpg', 'Landscape', 'kithsirimewan Jayasena', 'kithjay@yahoo.com'),
('BannerImages/Banner10.jpg', '', '', ''),
('BannerImages/Banner11.jpg', '', '', ''),
('BannerImages/Banner12.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE IF NOT EXISTS `logindetails` (
  `UName` varchar(20) NOT NULL,
  `DateofLog` date NOT NULL,
  `TimeofLog` time NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `MemberID` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` int(2) NOT NULL,
  `institute` varchar(250) NOT NULL,
  `Contact` int(12) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `interests` varchar(250) NOT NULL,
  `education` varchar(250) NOT NULL,
  `professional` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `profilepic` blob NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `FName`, `LName`, `DOB` , `Gender`, `Contact`, `Email`) VALUES
(1, 'Kasun', 'Wadasinghe', '1989-10-01',  1, 123456789, 'kasun@sinhela.com'),
(2, 'Kithsiri', 'Jayasena', '1989-10-01', 0, 123456789, 'kasun@sinhela.com'),
(3, '', '', '0000-00-00', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `NewsID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`NewsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `Title`, `Content`, `Date`) VALUES
(1, 'dfdsfsd', 'When you use a string column without an explicit limit, Rails will add an implicit :limit => 255. But if you use text, you''ll get whatever arbitrary length string type the database supports. PostgreSQL allows you to use a varchar column without a length but most databases use a separate type for that and Rails doesn''t know about varchar without a length. You have to use text in Rails to get a text column in PostgreSQL. There''s no difference in PostgreSQL between a column of type text and one of type varchar (but varchar(n) is different). Furthermore, if you''re deploying on top of PostgreSQL, there''s no reason to use :string (AKA varchar) at all, the database treats text and varchar(n) the same internally except for the extra length constraints for varchar(n); you should only use varchar(n) (AKA :string) if you have an external constraint (such as a government form that says that field 432 on form 897/B will be 23 characters long) on the column size.\n\nAs an aside, if you are using a string column anywhere, you should always specify the :limit as a reminder to yourself that there is a limit and you should have a validation in the model to ensure that the limit is not exceeded. If you exceed the limit, PostgreSQL will complain and raise an exception, MySQL will quietly truncate the string or complain (depending on the server configuration), SQLite will let it pass as-is, and other databases will do something else (probably complain).\n\nAlso, you should also be developing with PostgreSQL if you''re deploying to Heroku and you should match your development version to whatever version Heroku is using as well. There are other differences between databases (such as the behavior of GROUP BY) that ActiveRecord won''t insulate you from. You might be doing this already but I thought I''d mention it anyway.', '2013-12-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE IF NOT EXISTS `news_images` (
  `NewsID` int(11) NOT NULL,
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`imageid`,`NewsID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `POSTID` int(11) NOT NULL AUTO_INCREMENT,
  `MemberID` int(11) NOT NULL,
  `Category` varchar(45) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `Confirm` smallint(6) NOT NULL,
  PRIMARY KEY (`POSTID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `SchoolID` int(7) NOT NULL AUTO_INCREMENT,
  `SchoolName` varchar(255) NOT NULL,
  `City` varchar(100) NOT NULL,
  PRIMARY KEY (`SchoolID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`SchoolID`, `SchoolName`, `City`) VALUES
(1, 'Royal College', 'Colombo'),
(2, 'Royal College', 'Panadura'),
(3, 'Moratu Maha Vidyalaya', 'Moratuwa'),
(4, 'Prince of Wells', 'Moratuwa'),
(5, 'Central College', 'Piliyandala');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UName` varchar(20) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `UserLevel` int(1) NOT NULL,
  PRIMARY KEY (`UName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UName`, `MemberID`, `Password`, `UserLevel`) VALUES
('kasun', 1, 123, 0),
('kith', 2, 123, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
