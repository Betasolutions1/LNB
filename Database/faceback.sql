-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 12:31 PM
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
CREATE DATABASE IF NOT EXISTS `faceback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `faceback`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Username`, `Password`) VALUES
('98d34c1758b15b5a359b69c2b08c5767', '98d34c1758b15b5a359b69c2b08c5767');

-- --------------------------------------------------------

--
-- Table structure for table `answered`
--

CREATE TABLE IF NOT EXISTS `answered` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `answers` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `a_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(30) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `categories_name`) VALUES
(1, 'Hardware'),
(2, 'Software'),
(3, 'Journalism'),
(4, 'Construction'),
(5, 'Employment');

-- --------------------------------------------------------

--
-- Table structure for table `club_signup`
--

CREATE TABLE IF NOT EXISTS `club_signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `club_user_name` varchar(55) NOT NULL,
  `club_pwd` varchar(55) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `club_signup`
--

INSERT INTO `club_signup` (`id`, `user_id`, `club_id`, `club_user_name`, `club_pwd`, `last_login`) VALUES
(1, 8, 1, 'amit', 'amit', '2017-01-20 09:54:23'),
(2, 9, 2, 'sharmila', 'sharmila', '2017-01-20 09:54:23'),
(4, 11, 2, 'gowthami', 'gowthami', '2017-01-20 09:55:19'),
(5, 12, 1, 'nikil', 'nikil', '2017-01-20 10:02:10'),
(6, 15, 2, 'rajesh', 'rajesh', '2017-01-20 10:02:10'),
(8, 10, 1, 'valli', 'valli007', '2017-01-31 10:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `company_discussions`
--

CREATE TABLE IF NOT EXISTS `company_discussions` (
  `dscussion_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `discussion_txt` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dscussion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company_discussions`
--

INSERT INTO `company_discussions` (`dscussion_id`, `user_id`, `company`, `discussion_txt`, `date`) VALUES
(1, 10, 'Betasolutions', 'egre srtyh rt5yh', '2017-02-01 12:16:19'),
(2, 9, 'Black cubes', 'hellooo', '2017-02-02 04:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `email_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `send_id` int(11) NOT NULL,
  `dec` text NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `user_id`, `send_id`, `dec`) VALUES
(1, 'amit.ad1i4@yahoo.com', 9, 'ghdgfh'),
(2, 'gowthami.valli@gmail.com', 9, 'dfghdgfhd'),
(3, 'amit.ad1i4@yahoo.com', 9, 'sdfgsdfgsdfg'),
(4, 'gowthami.valli@gmail.com', 9, 'sgdfgdsfgsdfg'),
(5, 'amit.ad1i4@yahoo.com', 9, 'zxczxdsaf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `feedback_txt` varchar(120) NOT NULL,
  `star` varchar(1) NOT NULL,
  `Date` varchar(30) NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `feedback_txt`, `star`, `Date`) VALUES
(2, 8, 'Thanks Rohan', '5', '30-9-2013 11:34');

-- --------------------------------------------------------

--
-- Table structure for table `folio`
--

CREATE TABLE IF NOT EXISTS `folio` (
  `folio_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`folio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `folio`
--

INSERT INTO `folio` (`folio_id`, `user_id`, `description`) VALUES
(1, 9, 'Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labor'),
(3, 18, ''),
(4, 19, 'hi  this is swaroopa folio'),
(5, 20, ''),
(6, 21, ''),
(7, 10, ''),
(8, 11, ''),
(9, 12, ''),
(10, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE IF NOT EXISTS `friend_request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `who_sent_user_id` int(11) NOT NULL,
  `to_whom_user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`request_id`, `who_sent_user_id`, `to_whom_user_id`, `status`) VALUES
(1, 8, 9, 1),
(2, 10, 9, 1),
(3, 10, 11, 1),
(5, 11, 9, 0),
(6, 9, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group_chat`
--

CREATE TABLE IF NOT EXISTS `group_chat` (
  `chat_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `chat_txt` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`chat_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `group_chat`
--

INSERT INTO `group_chat` (`chat_id`, `user_id`, `chat_txt`, `time`) VALUES
(1, 8, 'Hello Friends How are you ? ', '30-9-2013 11:35'),
(2, 9, 'Hello', '5-11-2016 11:47'),
(3, 10, 'hi', '12-1-2017 14:43'),
(4, 9, 'yello', '12-1-2017 14:43'),
(5, 10, 'hello moto', '2017-01-12 04:48'),
(6, 11, 'success', '2017-01-12 04:49'),
(8, 10, 'LNB', '2017-01-12 05:06'),
(9, 10, 'hello', '2017-01-17 03:20'),
(10, 10, 'hello sir', '2017-01-17 03:25'),
(11, 10, 'xzfgjyt', '2017-01-19 03:21'),
(12, 11, 'hello moto', '2017-01-20 02:11'),
(13, 12, 'success', '2017-01-20 02:17'),
(14, 10, 'h cgjkyiuyk mjxyti', '2017-01-30 12:41'),
(15, 10, 'h cgjkyiuyk mjxyti', '2017-01-30 12:41'),
(16, 10, 'kiloooooo', '2017-01-30 12:42'),
(17, 10, 'hiuh', '2017-01-31 10:12');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `dec` text NOT NULL,
  `q_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `user_id`, `question`, `dec`, `q_post`, `cat_id`) VALUES
(1, 11, 'tryetryeertytr', 'rsdfgsdfgsdfgsdfg', '2016-12-22 05:43:32', 1),
(2, 11, 'dfsgsdf', 'asdfasdf', '2016-12-22 05:43:51', 4),
(3, 10, 'sdafadsrtfwe', 'sdfgsdfgsdfgsfgs', '2016-12-22 05:44:36', 3),
(4, 9, 'whats today topic', 'nothing', '2016-12-22 06:11:25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club`
--

CREATE TABLE IF NOT EXISTS `tbl_club` (
  `CLUB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CL_NAME` varchar(50) NOT NULL,
  `CL_DESC` text NOT NULL,
  `CL_MEM_COU` int(11) NOT NULL,
  PRIMARY KEY (`CLUB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_club`
--

INSERT INTO `tbl_club` (`CLUB_ID`, `CL_NAME`, `CL_DESC`, `CL_MEM_COU`) VALUES
(1, 'BNINFO', 'rliutgj pioutrfpj o;wiyeur ''periuqweridhf iurf oeiwurfo poi iuwqerqid', 10),
(2, 'LNB', 'frdeh oeurhd weirujye oeiwufrp uerdyu oiejfri heru eijrfpiejwoiu oweiufjr', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reference`
--

CREATE TABLE IF NOT EXISTS `tbl_reference` (
  `refrence_id` int(11) NOT NULL AUTO_INCREMENT,
  `club_id` int(11) NOT NULL,
  `who_user_id` int(11) NOT NULL,
  `to_whom_user_id` int(11) NOT NULL,
  `for_what` varchar(255) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `vendor_phone` varchar(15) NOT NULL,
  `vendor_email` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`refrence_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_reference`
--

INSERT INTO `tbl_reference` (`refrence_id`, `club_id`, `who_user_id`, `to_whom_user_id`, `for_what`, `vendor_name`, `vendor_phone`, `vendor_email`, `date`, `status`) VALUES
(1, 1, 10, 12, 'Sofeware requirements', 'jill', '9856321178', 'jill@gmail.com', '2017-01-31 09:53:40', 0),
(2, 1, 12, 10, 'Windows 10 IOS file', 'kill', '6987453214', 'kill@gmail.com', '2017-01-31 09:55:26', 0),
(3, 1, 10, 8, 'Photoshop', 'Ani', '8179562049', 'swaroopa@gmail.com', '2017-01-31 07:23:08', 0),
(4, 1, 10, 12, 'unity3d', 'Kranthi', '8008642153', 'kranthi@gmail.com', '2017-01-31 07:23:08', 0),
(5, 2, 9, 11, 'Photoshop', 'Kranthi', '8179562049', 'kranthi@gmail.com', '2017-02-02 04:53:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suggestions`
--

CREATE TABLE IF NOT EXISTS `tbl_suggestions` (
  `suggest_id` int(11) NOT NULL AUTO_INCREMENT,
  `suggest_topic_id` int(11) NOT NULL,
  `whos_suggest` int(11) NOT NULL,
  `to_whom_accept` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`suggest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_suggestions`
--

INSERT INTO `tbl_suggestions` (`suggest_id`, `suggest_topic_id`, `whos_suggest`, `to_whom_accept`, `status`) VALUES
(3, 1, 10, 10, 1),
(5, 10, 12, 10, 1),
(6, 8, 11, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suggest_topic`
--

CREATE TABLE IF NOT EXISTS `tbl_suggest_topic` (
  `suggest_topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `suggest_topic` varchar(255) NOT NULL,
  `sug_date` date NOT NULL,
  `count_connects` int(11) NOT NULL,
  PRIMARY KEY (`suggest_topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_suggest_topic`
--

INSERT INTO `tbl_suggest_topic` (`suggest_topic_id`, `user_id`, `suggest_topic`, `sug_date`, `count_connects`) VALUES
(1, 10, 'Helloooo I want android Software', '0000-00-00', 1),
(8, 11, 'get new things', '0000-00-00', 1),
(10, 12, 'kjshyfouhb uirehfh', '0000-00-00', -1),
(13, 10, 'kiloooooo', '2017-01-30', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Name`, `Email`, `Password`, `Gender`, `Birthday_Date`, `FB_Join_Date`, `designation`, `business`, `company`, `industry`, `user_status`, `phone`, `description`) VALUES
(8, 'Amit Dodiya', 'amit.ad1i4@yahoo.com', '123456', 'Male', '14-1-1994', '18-9-2013 22:10', 'Web Developer', 'Software', 'Black Cubes', 'Software', 'hi', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(9, 'gowthami', 'sharmila.gowthami@gmail.com', '123456', 'Female', '19-11-1979', '5-11-2016 11:13', 'Web Designer', 'HardWare', 'Black cubes', 'Hardware', 'hello', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(10, 'valli', 'gowthami.valli@gmail.com', '123456', 'Female', '14-7-1996', '5-11-2016 11:43', 'IT', 'Software', 'Betasolutions', 'Software', 'demo', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(11, 'gowthami sharmila11', 'sharmila.gowthami11@gmail.com', '963258741', 'Female', '7-7-1993', '7-11-2016 11:20', 'IT Engineer', 'Software', 'Betasolutions', 'HardWare', 'good', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(12, 'nikil ani', 'nikil.ani@gmail.com', '963258', 'Male', '19-11-1995', '7-11-2016 12:38', 'Software Engineer', 'Software', 'BetaSolutions', 'SoftWare', 'test', '1234567891', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,'),
(15, 'Rajesh', 'stevejobs@gmail.com', '123456', 'Male', '1-07-1993', '', 'CEO', '', 'Betasolutions', 'Software', '', '9515103611', 'hello all.. am busy'),
(16, 'Rajesh', 'beta.solutions@mail.com', '14794', 'Male', '01/07/1994', '', 'CEO', '', 'Black Cubes', 'IT', '', '9515103611', 'Blah Blah'),
(18, 'kranthi', 'kranthi@gmail.com', '123456', 'Male', '8Feb2015', '', 'Analyst', '', 'Hwaiee', 'IT-Software', '', '', ''),
(19, 'swaroopa', 'swaroopa@gmail.com', '123456', 'Female', '2Mar2015', '', 'Analyst', '', 'Hwaiee', 'Software', '', '', 'hello all.. am busy'),
(20, 'nani', 'nani@gmail.com', '123456', 'Male', '9Jun2013', '', 'CEO', '', 'Betasolutions', 'Software', '', '', ''),
(21, 'sandhya', 'sandya@gmail.com', '123456', 'Female', '5Apr2013', '', 'Analyst', '', 'Hwaiee', 'IT', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_notice`
--

CREATE TABLE IF NOT EXISTS `users_notice` (
  `notice_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `notice_txt` varchar(120) NOT NULL,
  `notice_time` varchar(30) NOT NULL,
  PRIMARY KEY (`notice_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users_notice`
--

INSERT INTO `users_notice` (`notice_id`, `user_id`, `notice_txt`, `notice_time`) VALUES
(2, 8, 'hello every one', '8-11-2016 12:11'),
(7, 8, '', '8-11-2016 12:11'),
(12, 8, '', '8-11-2016 12:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_clients`
--

CREATE TABLE IF NOT EXISTS `user_clients` (
  `clien_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_company` varchar(55) NOT NULL,
  `client_phone` varchar(13) NOT NULL,
  `clients_details` varchar(100) NOT NULL,
  PRIMARY KEY (`clien_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_clients`
--

INSERT INTO `user_clients` (`clien_id`, `user_id`, `client_name`, `client_company`, `client_phone`, `clients_details`) VALUES
(1, 10, 'Swaroopa', 'Betasolutions', '9666191612', ''),
(2, 11, 'sandya', 'betasolutions', '965874525', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_cover_pic`
--

CREATE TABLE IF NOT EXISTS `user_cover_pic` (
  `cover_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`cover_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_cover_pic`
--

INSERT INTO `user_cover_pic` (`cover_id`, `user_id`, `image`) VALUES
(7, 8, '999584_496501817111249_1587007043_n.jpg'),
(8, 9, 'single_1.jpg'),
(9, 10, 'img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `job` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `collage` varchar(100) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `mobile_no_priority` varchar(10) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Email_id_priority` varchar(55) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `website` varchar(100) NOT NULL,
  `Facebook_ID` varchar(100) NOT NULL,
  `club_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `club_last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `job`, `school`, `collage`, `current_city`, `hometown`, `relationship_status`, `mobile_no`, `mobile_no_priority`, `Email`, `Email_id_priority`, `quote`, `website`, `Facebook_ID`, `club_id`, `industry_id`, `company_id`, `club_last_login`) VALUES
(1, 8, '', 'vccm', '', 'Rajkot', 'Rajkot', 'Single', '7600898210', 'Private', '', '', '', 'www.wix.com/amitad1i4/amit', 'www.facebook.com/Amit.000002', 1, 0, 0, '2017-01-17 07:23:04'),
(2, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0, '2017-01-17 07:23:07'),
(3, 10, 'Software', 'Viit', '', 'visakhapatnam', 'vizag', '', '8179562049', 'Private', '', '', 'Every Day is the second chance to enjoy our life', '', '', 2, 0, 0, '2017-02-01 11:13:55'),
(4, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 0, 0, '2017-01-17 11:51:54'),
(5, 12, '', '', '', '', '', '', '', 'Private', '', '', '', '', '', 1, 0, 0, '2017-01-20 08:43:54'),
(8, 15, '', 'bashyamzhgdhj r', '', 'vizag', 'visakhapatnam', '', '9515103611', 'Public', 'stevejobs@gmail.com', 'Public', '', '', '', 0, 0, 0, '2017-01-20 08:07:06'),
(9, 16, '', 'SScPolytechnic', '', 'Vizag', 'Vizag', '', '9515103611', 'Public', 'beta.solutions@mail.com', 'Public', '', '', '', 0, 0, 0, '2017-01-20 08:27:48'),
(11, 18, '', '', '', '', '', '', '', '', 'kranthi@gmail.com', '', '', '', '', 0, 0, 0, '2017-02-02 09:09:47'),
(12, 19, '', 'zphigh school', '', 'vsz', 'pdt', '', '', '', 'swaroopa@gmail.com', '', '', '', '', 0, 0, 0, '2017-02-02 11:27:23'),
(13, 20, '', '', '', '', '', '', '', '', 'nani@gmail.com', '', '', '', '', 0, 0, 0, '2017-02-02 10:38:50'),
(14, 21, '', '', '', '', '', '', '', '', 'sandya@gmail.com', '', '', '', '', 0, 0, 0, '2017-02-02 10:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_ledger`
--

CREATE TABLE IF NOT EXISTS `user_ledger` (
  `ledger_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `credit` float NOT NULL,
  `debit` float NOT NULL,
  `total_bal` float NOT NULL,
  `led_reason` varchar(255) NOT NULL,
  PRIMARY KEY (`ledger_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_ledger`
--

INSERT INTO `user_ledger` (`ledger_id`, `user_id`, `date`, `credit`, `debit`, `total_bal`, `led_reason`) VALUES
(1, 10, '2017-01-11', 0, 3000, 50000, 'For Shopping bill'),
(2, 10, '2017-01-10', 25000.2, 1200, 75000, 'Salary'),
(3, 10, '2017-01-11', 0, 0, 0, '7500'),
(4, 10, '2017-01-11', 235, 0, 0, 'shopping'),
(5, 12, '2017-01-20', 0, 0, 0, 'tdjn'),
(6, 11, '2017-01-20', 5000, 0, 0, 'Day1 '),
(7, 10, '2017-01-30', 0, 648, 0, 'edyhtuh'),
(8, 9, '2017-02-02', 5000, 0, 0, 'shopping');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE IF NOT EXISTS `user_post` (
  `post_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `post_txt` text NOT NULL,
  `post_pic` varchar(150) NOT NULL,
  `post_time` varchar(30) NOT NULL,
  `priority` varchar(8) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `post_txt`, `post_pic`, `post_time`, `priority`, `likes`) VALUES
(48, 9, ',kjaysughciufhyv ', '', '5-11-2016 11:18', 'Public', 9),
(49, 9, 'added a new photo.', 'person1.jpg', '5-11-2016 11:18', 'Public', 2),
(50, 10, 'Join Faceback', '', '5-11-2016 11:43', 'Public', 0),
(51, 9, 'added a new photo.', 'g7.jpg', '5-11-2016 11:46', 'Public', 1),
(52, 11, 'Join Faceback', '', '7-11-2016 11:20', 'Public', 0),
(53, 12, 'Join Faceback', '', '7-11-2016 12:38', 'Public', 0),
(54, 10, 'mvklfdi poe9wiu ', '', '8-11-2016 12:4', 'Public', 1),
(55, 10, 'my status..................................', '', '8-11-2016 12:5', 'Private', 0),
(88, 11, 'helloooooooooooooo', '', '02-12-2016  04:42 ', 'public', 0),
(91, 11, 'just funnyyyyyyyyyyy', '', '02-12-2016  04:58 ', 'public', 0),
(94, 11, 'ugykiu srt56yu7', '', '02-12-2016  05:04 ', 'public', 1),
(95, 11, 'what to do ................?\nWhat not to do.......................???????????????????', '', '02-12-2016  05:06 ', 'public', 0),
(100, 10, 'jytgu,kghb\n', '', '02-12-2016  05:12 ', 'public', 0),
(101, 11, 'eyuhrt', '', '02-12-2016  05:13 ', 'public', 1),
(103, 9, 'nbxcncvbnvn', '', '02-12-2016  05:14 ', 'public', 1),
(104, 9, 'gzdfghbcvxnb cn\n', '', '02-12-2016  05:14 ', 'public', 1),
(105, 9, 'hello......................\n', '', '10-12-2016  04:55 ', 'public', 1),
(106, 9, 'hello.....................\n', '', '13-12-2016  12:42 ', 'public', 1),
(107, 9, '.idfuoglih;aeog', '', '13-12-2016  12:42 ', 'public', 1),
(108, 10, '.kjgbibim', '', '22-12-2016  03:48 ', 'public', 1),
(110, 9, 'hello', '', '23-12-2016  11:40 ', 'public', 2),
(111, 9, '', '', '10-01-2017  11:39 ', 'public', 0),
(112, 11, 'gsgRFSDG', '', '20-01-2017  02:18 ', 'public', 0),
(113, 11, 'aehedh', '', '20-01-2017  02:18 ', 'public', 0),
(114, 11, 'agetr', '', '20-01-2017  02:18 ', 'public', 0),
(115, 11, 'aedhde', '', '20-01-2017  02:18 ', 'public', 0),
(116, 12, 'eshythfgxhfh', '', '20-01-2017  02:19 ', 'public', 0),
(117, 12, 'shrusrjhrj', '', '20-01-2017  02:19 ', 'public', 0),
(118, 12, 'srurfjyj', '', '20-01-2017  02:19 ', 'public', 0),
(119, 12, 'Hola bonita', '', '20-01-2017  02:20 ', 'public', 0),
(120, 9, '', '', '', 'Select P', 0),
(121, 10, 'hello ... killooooo', '', '', '', 1),
(122, 10, 'htyutm', '', '', '', 0),
(123, 10, 'hiiiiii', '', '', '', 0),
(124, 19, 'uoloui;l', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_post_comment`
--

CREATE TABLE IF NOT EXISTS `user_post_comment` (
  `comment_id` int(7) NOT NULL AUTO_INCREMENT,
  `post_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` varchar(50) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_post_comment`
--

INSERT INTO `user_post_comment` (`comment_id`, `post_id`, `user_id`, `comment`, `comment_time`) VALUES
(1, 48, 9, 'nbvfdcnhmg', ''),
(2, 48, 9, 'dfhnb', ''),
(3, 54, 10, 'hi....', ''),
(4, 53, 10, 'hello', ''),
(5, 54, 12, 'hell', ''),
(6, 54, 10, 'how', ''),
(8, 54, 9, 'hyu', ''),
(9, 52, 9, 'jack & jill', ''),
(10, 52, 9, 'jik', ''),
(11, 54, 10, 'kjufhkehj o;ewiurfjweiuwelrhbhfgieru ferhfghbfgjhgfcehjfyuetgrmf eyf fegrf rehgfu ae rfruk iu fruy', ''),
(12, 52, 10, 'k,gjhi', ''),
(13, 48, 9, 'hello', '2017-01-29 07:40'),
(14, 51, 9, 'hi...', '2017-01-29 07:40'),
(15, 49, 9, 'hello', '2017-01-29 08:06'),
(16, 120, 9, 'hello', '2017-01-29 08:46'),
(17, 110, 9, 'beta', '2017-01-29 09:53'),
(18, 51, 9, 'bye', '2017-01-29 09:59'),
(19, 53, 10, 'hello', '2017-02-01 11:10'),
(20, 110, 10, 'killlllllllllll', '2017-02-01 11:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_post_status`
--

CREATE TABLE IF NOT EXISTS `user_post_status` (
  `status_id` int(7) NOT NULL AUTO_INCREMENT,
  `post_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `user_post_status`
--

INSERT INTO `user_post_status` (`status_id`, `post_id`, `user_id`, `status`) VALUES
(2, 106, 10, 'Like'),
(3, 108, 10, 'Like'),
(10, 101, 10, 'Like'),
(11, 103, 10, 'Like'),
(36, 51, 9, 'Like'),
(38, 110, 9, 'Like'),
(41, 48, 9, 'Like'),
(42, 48, 10, 'Like'),
(44, 121, 10, 'Like'),
(45, 49, 9, 'Like'),
(46, 105, 9, 'Like'),
(47, 124, 19, 'Like');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_pic`
--

CREATE TABLE IF NOT EXISTS `user_profile_pic` (
  `profile_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_profile_pic`
--

INSERT INTO `user_profile_pic` (`profile_id`, `user_id`, `image`) VALUES
(6, 8, 'my.jpg'),
(7, 9, 'person1.jpg'),
(8, 10, 'img1.jpg'),
(9, 11, 'b22.jpg'),
(10, 12, 't2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_secret_quotes`
--

CREATE TABLE IF NOT EXISTS `user_secret_quotes` (
  `user_id` int(7) NOT NULL,
  `Question1` varchar(50) NOT NULL,
  `Answer1` varchar(20) NOT NULL,
  `Question2` varchar(50) NOT NULL,
  `Answer2` varchar(20) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_secret_quotes`
--

INSERT INTO `user_secret_quotes` (`user_id`, `Question1`, `Answer1`, `Question2`, `Answer2`) VALUES
(8, 'what is the first name of your oldest nephew?', 'OneRaj', 'who is your all-time favorite movie character?', 'Amir Khan'),
(9, 'what is the first name of your favorite uncle?', 'Noodiles', 'what was your favorite food as a child?', 'Noodiles'),
(10, 'what is the first name of your favorite uncle?', 'Noodiles', 'what was your favorite food as a child?', 'Noodiles'),
(11, 'what is the first name of your favorite uncle?', 'candy', 'what was your favorite food as a child?', 'my pet'),
(12, 'what is your oldest cousins name?', 'vanu', 'what was the last name of your first boss?', 'nani'),
(15, 'Privacy Question13', '', 'Privacy Question22', ''),
(16, 'Privacy Question11', '', 'Privacy Question21', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE IF NOT EXISTS `user_skills` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `skill_rating` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`skill_id`, `user_id`, `skill`, `skill_rating`) VALUES
(1, 10, 'Webdesign', 90),
(2, 10, 'photoshop', 80),
(3, 10, 'Browsing New Data', 90);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE IF NOT EXISTS `user_status` (
  `user_id` int(7) NOT NULL,
  `status` varchar(8) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_id`, `status`) VALUES
(8, 'Offline'),
(9, 'Offline'),
(10, 'Online'),
(11, 'Online'),
(12, 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `user_todolist`
--

CREATE TABLE IF NOT EXISTS `user_todolist` (
  `todo_id` int(11) NOT NULL AUTO_INCREMENT,
  `todo_user_id` int(11) NOT NULL,
  `todo_type` varchar(50) NOT NULL,
  `todo_contact` varchar(13) NOT NULL,
  `todo_label` varchar(50) NOT NULL,
  `todo_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `todo_status` int(11) NOT NULL,
  PRIMARY KEY (`todo_id`),
  UNIQUE KEY `todo_contact` (`todo_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_todolist`
--

INSERT INTO `user_todolist` (`todo_id`, `todo_user_id`, `todo_type`, `todo_contact`, `todo_label`, `todo_datetime`, `todo_status`) VALUES
(1, 9, 'new task', '9666191612', 'LNB', '2017-01-11 07:34:56', 0),
(2, 10, ' CONSIGNMENTS', ' Relish', ' Relish', '2017-01-11 07:35:15', 1),
(3, 10, ' MEETINGS', ' Tent', ' Tent', '2017-01-30 09:26:56', 1),
(4, 9, ' MEETINGS', ' Mustard', ' Mustard', '2017-01-11 07:38:14', 0),
(6, 11, ' MEETINGS', ' Flashlight', ' Flashlight', '2017-01-20 08:54:18', 1),
(7, 10, ' CALL', ' Ketchup', ' Ketchup', '2017-01-30 05:20:30', 1),
(17, 11, 'CALL', 'Tent', 'xghkx', '2017-01-20 09:28:28', 1),
(18, 11, 'MEETINGS', 'Relish', 'New task', '2017-01-20 09:28:21', 0),
(19, 10, 'MEETINGS', 'Flashlight', 'New task', '2017-02-01 08:07:05', 1),
(20, 9, 'CALL', 'Ketchup', 'New task', '2017-02-01 06:37:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_warning`
--

CREATE TABLE IF NOT EXISTS `user_warning` (
  `user_id` int(7) NOT NULL,
  `warning_txt` varchar(200) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `work_projects`
--

CREATE TABLE IF NOT EXISTS `work_projects` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `work_title` varchar(25) NOT NULL,
  `work_description` varchar(255) NOT NULL,
  `work_image` varchar(255) NOT NULL,
  PRIMARY KEY (`work_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `work_projects`
--

INSERT INTO `work_projects` (`work_id`, `user_id`, `work_title`, `work_description`, `work_image`) VALUES
(1, 10, 'Project 1', 'bdskufyh ;owerud eowyr owquied weyi iuweyhd fuediWQEY LQWRYD TWYE LQWYHDUIEWRD UIquwryd wiuyd iuqweduyw ', 'f_c.jpg'),
(2, 9, 'project 2', 'edf jieurf woeyr foweui roweyro', 'folio_cover.jpg'),
(3, 9, 'project 3', 'ud rfhjmeryi iafaiweyt eiu dj,ewyhgd yegdi wyefsssssse uleui rfweuohnf', 'folio_cover_2.jpg'),
(4, 10, 'project 4', 'areg ERStggyg  aewrtgf ewfweart4 fEF rtg ERWTFGWE VERTG Asrt hrtyh xf d ghrthtry', 'folio_cover_3.jpg'),
(5, 10, 'Project LNB', ' wreetg 5 54 ertgryh wt5 y54rtg yr5t4g teg r54t ', 'logo.png'),
(6, 10, 'LNB ', ' Its like a social network to connect the people and their business relationships..', '11.png'),
(7, 19, 'swaroopa first project', ' uh uoefyhJBHd jkh;oweuh hBASjkhilu', '7.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `group_chat`
--
ALTER TABLE `group_chat`
  ADD CONSTRAINT `group_chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `users_notice`
--
ALTER TABLE `users_notice`
  ADD CONSTRAINT `users_notice_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_cover_pic`
--
ALTER TABLE `user_cover_pic`
  ADD CONSTRAINT `user_cover_pic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_post`
--
ALTER TABLE `user_post`
  ADD CONSTRAINT `user_post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_post_comment`
--
ALTER TABLE `user_post_comment`
  ADD CONSTRAINT `user_post_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_post_comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `user_post` (`post_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_post_status`
--
ALTER TABLE `user_post_status`
  ADD CONSTRAINT `user_post_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_post_status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_post` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profile_pic`
--
ALTER TABLE `user_profile_pic`
  ADD CONSTRAINT `user_profile_pic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_secret_quotes`
--
ALTER TABLE `user_secret_quotes`
  ADD CONSTRAINT `user_secret_quotes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_status`
--
ALTER TABLE `user_status`
  ADD CONSTRAINT `user_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_warning`
--
ALTER TABLE `user_warning`
  ADD CONSTRAINT `user_warning_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
