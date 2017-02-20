-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 05:16 AM
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
-- Table structure for table `add_industry`
--

CREATE TABLE IF NOT EXISTS `add_industry` (
  `INDUSTRY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INDUSTRY_NAME` varchar(255) NOT NULL,
  PRIMARY KEY (`INDUSTRY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `add_industry`
--

INSERT INTO `add_industry` (`INDUSTRY_ID`, `INDUSTRY_NAME`) VALUES
(1, 'IT-Software'),
(2, 'IT-Software'),
(3, 'Accommodations'),
(4, 'Accounting'),
(5, 'Advertising'),
(6, 'Aerospace'),
(8, 'Agribusiness'),
(9, 'Air Transportation'),
(10, 'Auto Mobiles'),
(11, 'Banking'),
(12, 'Beauty & Cosmetics'),
(13, 'Biotechnology '),
(14, 'Chemical'),
(15, 'Construction'),
(16, 'Consulting'),
(17, 'Consumer Products'),
(18, 'Education'),
(19, 'Electronics'),
(20, 'Employment'),
(21, 'Entertainment & Recreation'),
(22, 'Fashion'),
(23, 'Financial Services'),
(24, 'Fine Arts'),
(25, 'Food & Beverage'),
(26, 'Health'),
(27, 'Information Technology'),
(28, 'Insurance'),
(30, 'Journalism & News'),
(31, 'Legal Services'),
(32, 'Manufacturing'),
(33, 'Media & Broadcasting'),
(34, 'Medical Devices & Supplies'),
(35, 'Motion Pictures & Video'),
(36, 'Music'),
(37, 'Pharmaceutical'),
(38, 'Public Administration'),
(39, 'Public Relations'),
(40, 'Publishing'),
(41, 'Rail '),
(42, 'Real Estate'),
(43, 'Retail'),
(44, 'Service'),
(45, 'Sports'),
(46, 'Technology'),
(47, 'Telecommunications'),
(48, 'Tourism'),
(49, 'Transportation'),
(50, 'Travel'),
(51, 'Utilities'),
(52, 'Video Game'),
(53, 'Web Services'),
(54, 'Computer Software'),
(55, 'Textiles '),
(56, 'Logging, Timber & Paper Mills'),
(57, 'Marine Transport'),
(58, 'Medical Supplies'),
(59, 'Mining'),
(60, 'Newspaper, Magazine & Book Publishing'),
(61, 'Natural Gas Pipelines'),
(62, 'Nursing Homes/Hospitals'),
(63, 'Power Utilities'),
(64, 'Radio/TV Stations'),
(65, 'Residential Construction'),
(66, 'Steel Production '),
(67, 'Venture Capital'),
(68, 'Waste Management');

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
-- Table structure for table `advertisments`
--

CREATE TABLE IF NOT EXISTS `advertisments` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_name` varchar(55) NOT NULL,
  `advertise_image` varchar(50) NOT NULL,
  `ads_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `advertisments`
--

INSERT INTO `advertisments` (`ads_id`, `ads_name`, `advertise_image`, `ads_desc`) VALUES
(9, 'Beta Solutions', 'blck_2046_200_900_ver.jpg', 'Beta solutions is the Software Designing company');

-- --------------------------------------------------------

--
-- Table structure for table `answered`
--

CREATE TABLE IF NOT EXISTS `answered` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `answered`
--

INSERT INTO `answered` (`ans_id`, `user_id`, `quest_id`, `answer`, `datetime`) VALUES
(1, 10, 10, 'Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. ', '2017-02-13 11:01:35'),
(2, 10, 10, 'Lorem ipsum dolor sit amet, ', '2017-02-13 11:15:14'),
(3, 10, 10, 'dr yzry rtyuht r5y', '2017-02-13 11:17:07'),
(4, 10, 10, 'Lorem ipsum dolor sit amet, inimicus electram convenire', '2017-02-13 11:17:28'),
(5, 10, 10, '6 lk7ol9 9ol o; ;', '2017-02-13 11:18:37'),
(6, 10, 10, 'Lorem ipsum dolor sit amet, inimicus electram convenire', '2017-02-13 11:19:24'),
(7, 10, 2, ' tdur u6 6udisanswers', '2017-02-13 11:24:08'),
(8, 10, 1, 'xcgh mnfmk', '2017-02-13 11:37:30'),
(9, 10, 2, 'sf thsrt srt ysrt rt hrt', '2017-02-13 11:38:10'),
(10, 10, 2, 'Lorem ipsum dolor sit amet, inimicus electram convenire', '2017-02-13 11:38:12'),
(11, 10, 1, 'Lorem ipsum dolor sit amet, inimicus electram convenire', '2017-02-13 11:38:23'),
(12, 10, 3, 'Lorem ipsum dolor sit amet, inimicus electram convenire', '2017-02-13 11:38:32'),
(13, 10, 10, 'dty7, 6o 7t8ol', '2017-02-13 12:31:48'),
(14, 9, 8, 'j,tfj vkuvby', '2017-02-18 05:32:09'),
(15, 9, 9, 'Lorem ipsum dolor sit amet, inimicus electram convenire', '2017-02-18 10:35:57'),
(16, 9, 9, 'Lorem ipsum dolor sit amet, inimicus electram convenire  lorium ipsum lorium ipsumlorium ipsumlorium ipsumlorium ipsum', '2017-02-18 10:36:30'),
(17, 9, 9, 'cyt ujty ujty jytfg yu', '2017-02-18 10:40:19'),
(18, 9, 9, 'workspace-vrworkspace-vrworkspace-vr', '2017-02-18 10:40:48'),
(19, 10, 10, 'dncngf', '2017-02-19 15:06:34');

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
(8, 10, 1, 'valli', 'valli', '2017-02-07 07:53:14');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `company_discussions`
--

INSERT INTO `company_discussions` (`dscussion_id`, `user_id`, `company`, `discussion_txt`, `date`) VALUES
(1, 10, 'Betasolutions', 'egre srtyh rt5yh', '2017-02-01 12:16:19'),
(2, 9, 'Black cubes', 'hellooo', '2017-02-02 04:50:36'),
(3, 10, 'Betasolutions', 'jouhsdvj ', '2017-02-02 12:33:38'),
(4, 10, 'Betasolutions', 'trjnykj', '2017-02-06 09:22:57'),
(5, 10, 'Betasolutions', 'r6f7tu i 6u 6y rt6uyh', '2017-02-06 09:23:05'),
(6, 10, 'Betasolutions', 'tyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '2017-02-06 09:23:20'),
(7, 10, 'Betasolutions', 'xft jy', '2017-02-07 05:02:39'),
(8, 10, 'Betasolutions', 'erhtrhu', '2017-02-07 05:12:02'),
(9, 10, 'Betasolutions', 'erg er aer eartg', '2017-02-07 05:12:39'),
(10, 10, 'Betasolutions', 'fyjytu', '2017-02-07 05:17:51'),
(11, 10, 'Betasolutions', 'vguykcy', '2017-02-07 05:59:58'),
(12, 10, 'Betasolutions', 'vguykcyfbh', '2017-02-07 06:01:29'),
(13, 10, 'Betasolutions', 'vguykcyuk,yikyin', '2017-02-07 06:03:36'),
(14, 10, 'Betasolutions', 'egre srtyh rt5yh', '2017-02-07 06:26:59'),
(15, 10, 'Betasolutions', 'helloooooooooooo', '2017-02-07 06:27:06'),
(16, 10, 'Betasolutions', 'helloooooooooooow4356', '2017-02-07 06:27:44'),
(17, 10, 'Betasolutions', 'helloooooooooooo', '2017-02-07 07:13:37'),
(18, 10, 'Betasolutions', 'dghbrt er ', '2017-02-08 04:43:53'),
(19, 10, 'Betasolutions', 'helloooooooooooo', '2017-02-12 04:42:35'),
(20, 10, 'Betasolutions', 'hi', '2017-02-15 07:05:54'),
(21, 10, 'Betasolutions', 'hola bonita', '2017-02-15 07:45:35'),
(22, 10, 'Betasolutions', 'ho', '2017-02-19 14:25:15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `folio`
--

INSERT INTO `folio` (`folio_id`, `user_id`, `description`) VALUES
(1, 9, 'Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labor'),
(3, 18, ''),
(4, 19, 'hi  this is swaroopa folio'),
(5, 20, ''),
(6, 21, ''),
(7, 10, 'Stack Overflow is a community of 6.7 million programmers, just like you, helping each other. \nJoin them; it only takes a minute: \ndata-remodal-action="confirm"\nfolio_dynmic_referfolio_dynmic_referfolio_dynmic_refer\nStack Overflow is a community of 6.7 mil'),
(8, 11, ''),
(9, 12, ''),
(10, 8, ''),
(11, 22, '');

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
(6, 12, 10, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

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
(17, 10, 'hiuh', '2017-01-31 10:12'),
(18, 10, 'ftgjnfv m', '2017-02-02 01:33'),
(19, 10, 'xtdgjmfgh', '2017-02-03 07:46'),
(20, 10, 'fgtjn ghtjk', '2017-02-03 08:29'),
(21, 10, ';oujh;o', '2017-02-06 07:39'),
(22, 10, 'hello..........', '2017-02-06 07:43'),
(23, 10, 'dfh dfth trh sery', '2017-02-07 07:58'),
(24, 10, 'hello moto', '2017-02-07 07:58'),
(25, 10, 'success', '2017-02-07 07:58'),
(26, 10, 't7 m78 ', '2017-02-10 10:12'),
(27, 10, 'wgrfg', '2017-02-15 08:06'),
(28, 10, '2', '2017-02-19 03:25'),
(29, 10, 'afgdf', '2017-02-19 03:32');

-- --------------------------------------------------------

--
-- Table structure for table `lnb_about`
--

CREATE TABLE IF NOT EXISTS `lnb_about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_description` varchar(500) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lnb_about`
--

INSERT INTO `lnb_about` (`about_id`, `about_description`) VALUES
(1, 'a er5yhrt uuy665uj'),
(2, ' weuio leij fpweoiur lweud rj;/weo irwe8oyr weoi;urd ;owejkq  wuiqd hlw.jnD IWEUOYQOWIED QWLJIDRO;IWEU JOWIEJd lwei;our;weijf/weiu i;owe ');

-- --------------------------------------------------------

--
-- Table structure for table `lnb_careers`
--

CREATE TABLE IF NOT EXISTS `lnb_careers` (
  `career_id` int(11) NOT NULL AUTO_INCREMENT,
  `career_is` varchar(500) NOT NULL,
  PRIMARY KEY (`career_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lnb_careers`
--

INSERT INTO `lnb_careers` (`career_id`, `career_is`) VALUES
(1, 'dtr muj6u');

-- --------------------------------------------------------

--
-- Table structure for table `lnb_help`
--

CREATE TABLE IF NOT EXISTS `lnb_help` (
  `help_id` int(11) NOT NULL AUTO_INCREMENT,
  `help_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`help_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lnb_help`
--

INSERT INTO `lnb_help` (`help_id`, `help_desc`) VALUES
(1, 'ft htrf hsrt ');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `que_desc` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `INDUSTRY_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `user_id`, `question`, `que_desc`, `datetime`, `INDUSTRY_ID`) VALUES
(1, 11, 'tryetryeertytr', 'rsdfgsdfgsdfgsdfg', '2016-12-22 05:43:32', 1),
(2, 11, 'dfsgsdf', 'asdfasdf', '2016-12-22 05:43:51', 4),
(3, 10, 'sdafadsrtfwe', 'sdfgsdfgsdfgsfgs', '2016-12-22 05:44:36', 3),
(4, 9, 'whats today topic', 'nothing', '2016-12-22 06:11:25', 3),
(6, 12, 'sed gr', 're tg', '2017-02-13 07:31:25', 6),
(7, 10, ' ynrs5ty', 'rt5 nyher', '2017-02-13 07:32:07', 13),
(8, 10, ' ynrs5ty', 'rt5 nyher', '2017-02-13 07:34:59', 15),
(9, 10, 'Lorem ipsum dolor sit amet, inimicus electram ', 'Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no ', '2017-02-13 09:41:56', 18),
(10, 10, ' ynrs5ty', 'rt5 nyher', '2017-02-13 09:45:55', 16);

-- --------------------------------------------------------

--
-- Table structure for table `send_mails`
--

CREATE TABLE IF NOT EXISTS `send_mails` (
  `send_id` int(11) NOT NULL AUTO_INCREMENT,
  `recive_user_id` int(11) NOT NULL,
  `sender_user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `matter_desc` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`send_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `send_mails`
--

INSERT INTO `send_mails` (`send_id`, `recive_user_id`, `sender_user_id`, `subject`, `matter_desc`, `datetime`) VALUES
(1, 10, 15, 'EW Tger ', 'er ear yaery', '2017-02-14 11:57:57'),
(2, 15, 10, 'EW Tger ', 'at6 uya5t4y u6t', '2017-02-14 11:56:40'),
(3, 15, 10, 'gliy ouhn  ih khgvb kgb,vb kgbv ', 'ae y ,ue h uwg kq,wuh hjwn oljQW QWIWUQ BUIQH', '2017-02-14 09:15:45'),
(4, 19, 10, 'rem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem', 'rem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudemrem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem', '2017-02-14 09:15:45'),
(5, 8, 10, 'EW Tger ', 'wqrtgrt', '2017-02-15 07:08:28'),
(6, 8, 9, 'EW Tger ', 'e t etery erf cgre ya4', '2017-02-18 09:11:38'),
(8, 8, 9, '', '', '2017-02-18 10:15:39');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_club`
--

INSERT INTO `tbl_club` (`CLUB_ID`, `CL_NAME`, `CL_DESC`, `CL_MEM_COU`) VALUES
(1, 'BNINFO', 'rliutgj pioutrfpj o;wiyeur ''periuqweridhf iurf oeiwurfo poi iuwqerqid', 10),
(2, 'LNB', 'frdeh oeurhd weirujye oeiwufrp uerdyu oiejfri heru eijrfpiejwoiu oweiufjr', 5),
(3, 'ZADOOO', 'RT RT6 URTU6Y7IJ TYUY7IK XTRFU6', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_reference`
--

INSERT INTO `tbl_reference` (`refrence_id`, `club_id`, `who_user_id`, `to_whom_user_id`, `for_what`, `vendor_name`, `vendor_phone`, `vendor_email`, `date`, `status`) VALUES
(1, 1, 10, 12, 'Sofeware requirements', 'jill', '9856321178', 'jill@gmail.com', '2017-01-31 09:53:40', 0),
(2, 1, 12, 10, 'Windows 10 IOS file', 'kill', '6987453214', 'kill@gmail.com', '2017-02-12 04:41:23', 1),
(3, 1, 10, 8, 'Photoshop', 'Ani', '8179562049', 'swaroopa@gmail.com', '2017-01-31 07:23:08', 0),
(4, 1, 10, 12, 'unity3d', 'Kranthi', '8008642153', 'kranthi@gmail.com', '2017-01-31 07:23:08', 0),
(5, 2, 9, 11, 'Photoshop', 'Kranthi', '8179562049', 'kranthi@gmail.com', '2017-02-02 04:53:30', 0),
(6, 1, 10, 8, 'Photoshop', 'Ani', '08179562049', 'sharmila.gowthami@gmail.com', '2017-02-06 06:45:22', 0),
(7, 1, 10, 12, 'Photoshop', 'Kranthi', '8179562049', 'sharmila.gowthami@gmail.com', '2017-02-07 07:32:32', 0),
(8, 1, 10, 8, 'Photoshop', 'Ani', '8179562049', 'sharmila.gowthami@gmail.com', '2017-02-07 07:42:28', 0),
(11, 1, 10, 12, 'unity3d', 'Ani', '8179562049', 'sharmila.gowthami@gmail.com', '2017-02-10 08:44:49', 0),
(12, 1, 10, 8, 'Photoshop', 'Kranthi', '8179562049', 'sharmila.gowthami@gmail.com', '2017-02-10 08:45:46', 0),
(13, 1, 10, 12, 'unity3d', 'Ani', '8179562049', 'sharmila.gowthami@gmail.com', '2017-02-10 08:48:23', 0),
(14, 1, 10, 8, 'Photoshop', 'Ani', '8179562049', 'sharmila.gowthami@gmail.com', '2017-02-12 04:40:31', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_suggestions`
--

INSERT INTO `tbl_suggestions` (`suggest_id`, `suggest_topic_id`, `whos_suggest`, `to_whom_accept`, `status`) VALUES
(3, 1, 10, 10, 1),
(6, 8, 11, 9, 1),
(13, 10, 12, 10, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_suggest_topic`
--

INSERT INTO `tbl_suggest_topic` (`suggest_topic_id`, `user_id`, `suggest_topic`, `sug_date`, `count_connects`) VALUES
(1, 10, 'Helloooo I want android Software', '0000-00-00', 1),
(8, 11, 'get new things', '0000-00-00', 1),
(10, 12, 'kjshyfouhb uirehfh', '0000-00-00', -30),
(13, 10, 'kiloooooo', '2017-01-30', 0),
(14, 10, 'cgfjmnghm', '2017-02-03', 0),
(15, 10, 'yfjh', '2017-02-03', 0),
(16, 10, 'dtuyj', '2017-02-06', 0),
(17, 10, 'tfy trfh tyu', '2017-02-07', 0),
(18, 10, 'kiloooooogy tyu', '2017-02-07', 0),
(19, 10, 'hello how r u??????', '2017-02-07', 0),
(20, 10, 'ftuy', '2017-02-07', 0),
(21, 10, 'kiloooooo', '2017-02-10', 0),
(22, 10, 'sr u67t6i ', '2017-02-10', 0),
(23, 10, 'get new things', '2017-02-10', 0),
(24, 10, 'get new things', '2017-02-10', 0),
(25, 10, 'fhxjty ', '2017-02-10', 0),
(26, 10, 'srt rt rt ', '2017-02-10', 0),
(27, 10, 'kiloooooo', '2017-02-10', 0),
(28, 10, 'fy jyj', '2017-02-10', 0),
(29, 10, 'get new things', '2017-02-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE IF NOT EXISTS `terms_conditions` (
  `term_id` int(11) NOT NULL AUTO_INCREMENT,
  `term_cond` varchar(500) NOT NULL,
  PRIMARY KEY (`term_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`term_id`, `term_cond`) VALUES
(1, 'tdy utyy');

-- --------------------------------------------------------

--
-- Table structure for table `todo_insertions`
--

CREATE TABLE IF NOT EXISTS `todo_insertions` (
  `todo_id` int(11) NOT NULL AUTO_INCREMENT,
  `todo_user_id` int(11) NOT NULL,
  `todo_type` varchar(50) NOT NULL,
  `todo_contact` varchar(13) NOT NULL,
  `todo_label` varchar(50) NOT NULL,
  `todo_datetime` datetime NOT NULL,
  `todo_status` int(11) NOT NULL,
  PRIMARY KEY (`todo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `todo_insertions`
--

INSERT INTO `todo_insertions` (`todo_id`, `todo_user_id`, `todo_type`, `todo_contact`, `todo_label`, `todo_datetime`, `todo_status`) VALUES
(1, 10, 'CONSIGNMENTS', 'Mustard', 'New task', '0000-00-00 00:00:00', 1),
(2, 10, 'CONSIGNMENTS', 'Mustard', 'New task6', '0000-00-00 00:00:00', 1),
(3, 10, 'CONSIGNMENTS', 'Mustard', 'xghkx', '0000-00-00 00:00:00', 1),
(4, 10, 'CONSIGNMENTS', 'Mustard', 'New task', '2017-02-10 12:03:00', 0),
(5, 10, 'MEETINGS', 'Relish', 'hrtdz', '2017-02-10 12:05:00', 1),
(6, 10, 'CALL', 'Mustard', 'New task6', '2017-02-15 08:05:00', 1),
(7, 10, 'CONSIGNMENTS', 'Ketchup', 'Khemka', '2017-02-15 08:42:00', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
(21, 'sandhya', 'sandya@gmail.com', '123456', 'Female', '5Apr2013', '', 'Analyst', '', 'Hwaiee', 'IT', '', '', ''),
(22, 'sandhya', 'sandy@gmail.com', '123456', 'Female', '4Mar2016', '', 'CEO', '', 'Hwaiee', 'IT-Software', '', '8179562049', 'hello all.. am busy');

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
-- Table structure for table `users_quotes`
--

CREATE TABLE IF NOT EXISTS `users_quotes` (
  `quote_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `quote_txt` text NOT NULL,
  PRIMARY KEY (`quote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users_quotes`
--

INSERT INTO `users_quotes` (`quote_id`, `user_id`, `quote_txt`) VALUES
(1, 9, 'dgb h dbh'),
(2, 9, 'hello this day is.. :P'),
(3, 9, 'hello LNB'),
(4, 10, 'The day the earth stood still');

-- --------------------------------------------------------

--
-- Table structure for table `user_accomplishments`
--

CREATE TABLE IF NOT EXISTS `user_accomplishments` (
  `accomp_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `start_year` varchar(25) NOT NULL,
  `end_year` varchar(25) NOT NULL,
  `acomp_title` varchar(55) NOT NULL,
  `acomp_desc` varchar(155) NOT NULL,
  PRIMARY KEY (`accomp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_accomplishments`
--

INSERT INTO `user_accomplishments` (`accomp_id`, `user_id`, `start_year`, `end_year`, `acomp_title`, `acomp_desc`) VALUES
(1, 9, '2010', '2011', 'Whole sale trading System', 'wse fer   grtg yrt rt trtttt ttttyh rtttttt tt  rtgy    t y'),
(2, 9, '2011', '2013', 'Web servers', ' lorium ipsum lorium ipsumlorium ipsumlorium ipsumlorium ipsum lorium ipsum lorium ipsum lorium ipsum'),
(3, 10, '2011', '2017', 'Beta Solutions', 'Great Journey');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_clients`
--

INSERT INTO `user_clients` (`clien_id`, `user_id`, `client_name`, `client_company`, `client_phone`, `clients_details`) VALUES
(1, 10, 'Swaroopa', 'Betasolutions', '9666191612', ''),
(2, 11, 'sandya', 'betasolutions', '965874525', ''),
(3, 10, 'valli gowthami', 'zdh  hbt', '8179562049', ' htrf dyze tyesysrty');

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
(8, 9, '1.jpg'),
(9, 10, 'tumblr_m7fnc6Rdzh1r5urpdo1_500.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(14, 21, '', '', '', '', '', '', '', '', 'sandya@gmail.com', '', '', '', '', 0, 0, 0, '2017-02-02 10:39:56'),
(15, 22, '', '', '', '', '', '', '8179562049', 'Public', 'sandy@gmail.com', 'Private', '', '', '', 0, 0, 0, '2017-02-02 12:32:44');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
(8, 9, '2017-02-02', 5000, 0, 0, 'shopping'),
(9, 10, '2017-02-03', 0, 0, 0, 'yjh'),
(10, 10, '2017-02-06', 0, 654, 0, 'sry6uj'),
(11, 10, '2017-02-06', 5444, 0, 0, 'r6yjn vftu6j6y'),
(17, 10, '2017-02-06', 863, 89, 0, 't7 e6tr uh'),
(18, 10, '2017-02-06', 8463, 45656, 0, 'trh rst rtuyh rty'),
(19, 10, '2017-02-07', 5463, 85, 0, 'rtjh r6tt6ryh'),
(20, 10, '2017-02-10', 4, 0, 0, 's nu6u67 67 '),
(21, 10, '2017-02-10', 452, 5, 0, 'i[po[k'),
(22, 10, '0000-00-00', 0, 0, 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=174 ;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `post_txt`, `post_pic`, `post_time`, `priority`, `likes`) VALUES
(48, 9, ',kjaysughciufhyv ', '', '5-11-2016 11:18', 'Public', 9),
(49, 9, 'added a new photo.', 'person1.jpg', '5-11-2016 11:18', 'Public', 3),
(50, 10, 'Join Faceback', '', '5-11-2016 11:43', 'Public', 0),
(51, 9, 'added a new photo.', 'g7.jpg', '5-11-2016 11:46', 'Public', 0),
(52, 11, 'Join Faceback', '', '7-11-2016 11:20', 'Public', 0),
(53, 12, 'Join Faceback', '', '7-11-2016 12:38', 'Public', 0),
(54, 10, 'mvklfdi poe9wiu ', '', '8-11-2016 12:4', 'Public', 1),
(55, 10, 'my status..................................', '', '8-11-2016 12:5', 'Private', 0),
(88, 11, 'helloooooooooooooo', '', '02-12-2016  04:42 ', 'public', 0),
(91, 11, 'just funnyyyyyyyyyyy', '', '02-12-2016  04:58 ', 'public', 0),
(94, 11, 'ugykiu srt56yu7', '', '02-12-2016  05:04 ', 'public', 1),
(95, 11, 'what to do ................?\nWhat not to do.......................???????????????????', '', '02-12-2016  05:06 ', 'public', 0),
(100, 10, 'jytgu,kghb\n', '', '02-12-2016  05:12 ', 'public', 0),
(101, 11, 'eyuhrt', '', '02-12-2016  05:13 ', 'public', 0),
(103, 9, 'nbxcncvbnvn', '', '02-12-2016  05:14 ', 'public', 1),
(104, 9, 'gzdfghbcvxnb cn\n', '', '02-12-2016  05:14 ', 'public', 1),
(105, 9, 'hello......................\n', '', '10-12-2016  04:55 ', 'public', 1),
(106, 9, 'hello.....................\n', '', '13-12-2016  12:42 ', 'public', 0),
(107, 9, '.idfuoglih;aeog', '', '13-12-2016  12:42 ', 'public', 1),
(108, 10, '.kjgbibim', '', '22-12-2016  03:48 ', 'public', 1),
(110, 9, 'hello', '', '23-12-2016  11:40 ', 'public', 2),
(111, 9, '', '', '10-01-2017  11:39 ', 'public', 1),
(112, 11, 'gsgRFSDG', '', '20-01-2017  02:18 ', 'public', 0),
(113, 11, 'aehedh', '', '20-01-2017  02:18 ', 'public', 0),
(114, 11, 'agetr', '', '20-01-2017  02:18 ', 'public', 0),
(115, 11, 'aedhde', '', '20-01-2017  02:18 ', 'public', 0),
(116, 12, 'eshythfgxhfh', '', '20-01-2017  02:19 ', 'public', 1),
(117, 12, 'shrusrjhrj', '', '20-01-2017  02:19 ', 'public', 1),
(118, 12, 'srurfjyj', '', '20-01-2017  02:19 ', 'public', 0),
(119, 12, 'Hola bonita', '', '20-01-2017  02:20 ', 'public', 2),
(120, 9, '', '', '', 'Select P', 0),
(121, 10, 'hello ... killooooo', '', '', '', 0),
(122, 10, 'htyutm', '', '', '', 1),
(123, 10, 'hiiiiii', '', '', '', 0),
(124, 19, 'uoloui;l', '', '', '', 3),
(125, 10, 'cft ty ujtru', '', '', '', 0),
(126, 10, 'yh jdty jdy6u6 rt6 y', '', '', '', -1),
(127, 10, 't htuj dtyuiy dyt', '', '', '', 1),
(128, 10, 'dr hryrtyh', '', '', '', 1),
(129, 10, 'trfhtr fyh', '', '', '', 1),
(130, 10, 'f jyuik', '', '', '', 1),
(131, 10, 'ar trtuhsrtuh srtuh', '', '', '', 0),
(132, 10, 'weur wkeb filue rhf', '', '', '', 0),
(133, 10, 'dzhnxft htujhdty', '', '', '', 1),
(134, 9, ' er gw fouj pwee  nhf jhnds js  d dhn f nlej fijreij f', '3@2x.jpg', '18-02-2017 07:47', 'private', 0),
(135, 9, ' k h ojh sdnferjh f;oeij feb frelm v,d hbfvbs dfkhfhb f uhse jfvb fkhnf snfjvbusf iuhf  s hed f bf bfh sdh fiuhsd b hn vfsndf', '1.jpg', '18-02-2017 07:51', 'public', 0),
(136, 9, ' jgv j,yufg iy,gmujy ikygyifg ctufclif', '2.jpg', '18-02-2017 07:55', 'public', 1),
(137, 9, ' rdt rt f hvcb nftg jfhcfg sre yhdcjnc hvbnjr mdgh xfdv bszedf bdzf gd ', '04.jpg', '18-02-2017 08:02', 'public', 0),
(138, 9, ' hy trfuh drtujh tyx hjt uyrtsyh', '06.jpg', '18-02-2017 08:10', 'public', 1),
(139, 10, '323\n', '', '', '', 0),
(140, 10, '', '', '', '', 0),
(141, 10, '', '', '', '', 0),
(142, 10, '', '', '', '', 0),
(143, 10, '', '', '', '', 0),
(144, 10, '', '', '', '', 0),
(154, 10, 'AFGASDFGSAD\n', '', '', '', 0),
(155, 10, 'ADGFSADFG', '', '', '', 0),
(156, 10, 'DHSGG', '', '', '', 0),
(157, 10, 'DFHGSG', '', '', '', 0),
(158, 10, 'ytkiyuikuklghjk', '', '', '', 1),
(159, 10, '', '', '', '', 0),
(160, 10, '', '', '', '', 0),
(161, 10, '', '', '', '', 0),
(162, 10, '', '', '', '', 0),
(163, 10, '', '', '', '', 0),
(164, 10, '', '', '', '', 1),
(165, 10, '', '', '', '', 1),
(166, 10, '', '', '', '', 0),
(167, 10, '', '', '', '', 0),
(168, 10, '', '', '', '', 0),
(169, 10, 'undefined', '', '', '', 1),
(170, 10, 'afadfD', '', '', '', 0),
(171, 10, 'qwtrt', '', '', '', 0),
(172, 10, 'wqerqw', '', '', '', 1),
(173, 10, 'Hola bonita', '', '', '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

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
(20, 110, 10, 'killlllllllllll', '2017-02-01 11:39'),
(21, 124, 10, 'xfgjmn ', '2017-02-03 07:44'),
(22, 124, 10, 'efgn', '2017-02-03 10:20'),
(23, 123, 10, 'yuhjv', '2017-02-06 08:46'),
(24, 133, 10, 'yvucf t tuy7 ', '2017-02-07 12:17'),
(25, 130, 10, 'tyu tuy6d6 re5y ', '2017-02-07 12:17'),
(32, 130, 10, 'vk.ui ;o', '2017-02-07 12:36'),
(41, 133, 10, 'jyhg hv', '2017-02-07 12:42'),
(42, 131, 10, ',jg .ug', '2017-02-07 12:44'),
(43, 133, 10, '', '2017-02-07 12:44'),
(44, 120, 10, '4123', '2017-02-07 12:44'),
(45, 48, 9, 'hjnfg', '2017-02-18 06:06'),
(46, 133, 9, '', '2017-02-18 06:07'),
(47, 48, 10, 'vXZ', '2017-02-19 03:31'),
(48, 139, 10, 'vsadvgsdf', '2017-02-19 03:32'),
(49, 139, 10, '', '2017-02-19 03:32'),
(50, 108, 10, 'sgbvsfgvbasdf', '2017-02-19 03:32');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `user_post_status`
--

INSERT INTO `user_post_status` (`status_id`, `post_id`, `user_id`, `status`) VALUES
(3, 108, 10, 'Like'),
(11, 103, 10, 'Like'),
(38, 110, 9, 'Like'),
(41, 48, 9, 'Like'),
(42, 48, 10, 'Like'),
(45, 49, 9, 'Like'),
(46, 105, 9, 'Like'),
(47, 124, 19, 'Like'),
(69, 119, 10, ''),
(73, 124, 10, 'Like'),
(75, 126, 10, 'Like'),
(76, 122, 10, 'Like'),
(77, 116, 10, 'Like'),
(79, 49, 10, 'Like'),
(83, 127, 10, 'Like'),
(93, 128, 10, 'Like'),
(95, 111, 10, 'Like'),
(96, 117, 10, 'Like'),
(97, 129, 10, 'Like'),
(98, 119, 10, 'Like'),
(99, 133, 9, 'Like'),
(100, 158, 10, 'Like'),
(105, 164, 10, 'Like'),
(121, 165, 10, 'Like'),
(122, 172, 10, 'Like'),
(123, 169, 10, 'Like'),
(124, 138, 10, 'Like'),
(125, 136, 10, 'Like');

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
(7, 9, '2.jpg'),
(8, 10, '3.jpg'),
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
(21, '', '', '', ''),
(22, 'Security Questions12', 'Security Answers11', 'Security Questions21', 'Security Answers21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`skill_id`, `user_id`, `skill`, `skill_rating`) VALUES
(1, 10, 'Webdesign', 90),
(2, 10, 'photoshop', 80),
(3, 10, 'Browsing New Data', 90),
(4, 10, 'Java', 76),
(5, 10, 'php', 95),
(6, 10, 'xfgjn', 0),
(7, 10, 'styjtyj', 0),
(8, 10, 'rtyhrtyhry', 0),
(9, 10, 'bnmy ', 0),
(10, 10, 'pokjp', 65),
(11, 10, 'trfg ftgr h', 0),
(12, 10, 'ytujtyj', 0),
(13, 10, 'frtguj nty t', 0),
(14, 10, 'uyhj tyujh', 0),
(15, 10, 'rfth t6rrrrrrrrrrrruy ', 0),
(16, 10, 'tcyjh ty', 0),
(17, 10, 'rtfg', 0),
(18, 10, 'a4et ertg', 45),
(19, 10, 'fgcyh bhcty', 0),
(20, 10, 'fgcyh bhcty', 0),
(21, 10, 'xftghn tfh', 0),
(22, 10, 'rdh r', 0),
(23, 10, 'rtkugy', 0),
(24, 10, 'cyj', 0),
(25, 10, 'dty ty', 0),
(26, 10, 'e rrey ', 0),
(27, 10, 'xyz', 0),
(28, 10, 'rt uj6rtuy', 0),
(29, 10, 'fgx h', 45),
(30, 10, 'jh,jh uy', 0),
(31, 10, 'dfgt', 0),
(32, 10, 'yr rt6uy 6', 0),
(33, 10, 'tcyjh ty', 0),
(34, 10, 'hgjhgkjmnj', 0),
(35, 10, 'r67i m6', 0),
(36, 10, 'ioym l7ko 7', 0),
(37, 10, 'yu m i7i', 0),
(38, 10, 'dty dtyu', 0),
(39, 9, 'image convertion', 85);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(7, 19, 'swaroopa first project', ' uh uoefyhJBHd jkh;oweuh hBASjkhilu', '7.jpg'),
(8, 9, 'Project LNB', 'lets network going good', 'bg.jpg'),
(9, 9, 'Caliuhn jkn', ' er gw fouj pwee  nhf jhnds js  d dhn f nlej fijreij f', '3@2x.jpg'),
(10, 9, ' owe  erj ', ' k h ojh sdnferjh f;oeij feb frelm v,d hbfvbs dfkhfhb f uhse jfvb fkhnf snfjvbusf iuhf  s hed f bf bfh sdh fiuhsd b hn vfsndf', '1.jpg'),
(11, 9, 'Project LNBzste', ' jgv j,yufg iy,gmujy ikygyifg ctufclif', '2.jpg'),
(12, 9, 'qwert', ' rdt rt f hvcb nftg jfhcfg sre yhdcjnc hvbnjr mdgh xfdv bszedf bdzf gd ', '04.jpg'),
(13, 9, 'sdf vse ', ' Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu', '02.jpg'),
(14, 9, 'rs gdr gtrf', ' hy trfuh drtujh tyx hjt uyrtsyh', '06.jpg');

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
