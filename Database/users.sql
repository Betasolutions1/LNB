-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 05:55 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faceback`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Birthday_Date` varchar(11) NOT NULL,
  `FB_Join_Date` varchar(30) NOT NULL,
  `designation` varchar(251) NOT NULL,
  `business` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `industry` varchar(125) NOT NULL,
  `user_status` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Name`, `Email`, `Password`, `Gender`, `Birthday_Date`, `FB_Join_Date`, `designation`, `business`, `company`, `industry`, `user_status`, `phone`, `description`) VALUES
(8, 'Amit Dodiya', 'amit.ad1i4@yahoo.com', '123456', 'Male', '14-1-1994', '18-9-2013 22:10', 'Web Developer', 'Software', 'Black Cubes', 'Software', 'hi', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(9, 'gowthami', 'sharmila.gowthami@gmail.com', '123456', 'Female', '19-11-1979', '5-11-2016 11:13', 'Web Designer', 'HardWare', 'Black cubes', 'Hardware', 'hello', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(10, 'valli', 'gowthami.valli@gmail.com', '123456', 'Female', '14-7-1996', '5-11-2016 11:43', 'IT', 'Software', 'Betasolutions', 'Software', 'demo', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet'),
(11, 'gowthami sharmila11', 'sharmila.gowthami11@gmail.com', '963258741', 'Female', '7-7-1993', '7-11-2016 11:20', 'IT Engineer', 'Software', 'Betasolutions', 'HardWare', 'good', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(12, 'nikil ani', 'nikil.ani@gmail.com', '963258', 'Male', '19-11-1995', '7-11-2016 12:38', 'Software Engineer', 'Software', 'BetaSolutions', 'SoftWare', 'test', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(15, 'Rajesh', 'stevejobs@gmail.com', '123456', 'Male', '1-07-1993', '', 'CEO', '', 'Betasolutions', 'Software', '', '9515103611', 'hello all.. am busy'),
(16, 'Rajesh', 'beta.solutions@mail.com', '14794', 'Male', '01/07/1994', '', 'CEO', '', 'Black Cubes', 'IT', '', '9515103611', 'Blah Blah'),
(18, 'kranthi', 'kranthi@gmail.com', '123456', 'Male', '8Feb2015', '', 'Analyst', '', 'Hwaiee', 'IT-Software', '', '', ''),
(19, 'swaroopa', 'swaroopa@gmail.com', '123456', 'Female', '2Mar2015', '', 'Analyst', '', 'Hwaiee', 'Software', '', '', 'hello all.. am busy'),
(20, 'nani', 'nani@gmail.com', '123456', 'Male', '9Jun2013', '', 'CEO', '', 'Betasolutions', 'Software', '', '', ''),
(21, 'sandhya', 'sandya@gmail.com', '123456', 'Female', '5Apr2013', '', 'Analyst', '', 'Hwaiee', 'IT', '', '', ''),
(22, 'sandhya', 'sandy@gmail.com', '123456', 'Female', '4Mar2016', '', 'CEO', '', 'Hwaiee', 'IT-Software', '', '8179562049', 'hello all.. am busy'),
(23, 'sandhya', 'sandy1@gmail.com', 'admin', 'Female', '1Jan2017', '', 'CEO', '', 'Beta Solutions', 'IT-Software', '', '8179562049', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
