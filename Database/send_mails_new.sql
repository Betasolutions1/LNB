-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 01:28 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `send_mails`
--

INSERT INTO `send_mails` (`send_id`, `recive_user_id`, `sender_user_id`, `subject`, `matter_desc`, `datetime`) VALUES
(1, 10, 15, 'EW Tger ', 'er ear yaery', '2017-02-14 11:57:57'),
(2, 15, 10, 'EW Tger ', 'at6 uya5t4y u6t', '2017-02-14 11:55:40'),
(3, 15, 10, 'gliy ouhn  ih khgvb kgb,vb kgbv ', 'ae y ,ue h uwg kq,wuh hjwn oljQW QWIWUQ BUIQH', '2017-02-14 09:15:45'),
(4, 19, 10, 'rem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem', 'rem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudemrem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem', '2017-02-14 09:15:45'),
(5, 8, 10, 'EW Tger ', 'wqrtgrt', '2017-02-15 07:08:28'),
(6, 8, 9, 'EW Tger ', 'e t etery erf cgre ya4', '2017-02-18 09:11:38'),
(7, 9, 10, 'z eryg', '   rsyt hrts h', '2017-02-23 05:54:07'),
(8, 12, 10, 'w ertger tg', 'aer a ghaer yaeryg', '2017-02-23 05:55:15'),
(9, 11, 10, 'LNB Mail', 'If u recive a mail than send me reply or acknowledgment', '2017-02-23 05:58:39'),
(10, 9, 10, 'w ertger tg', 'jtgvlu gl8yig luiobn;o', '2017-02-23 08:42:29'),
(11, 9, 10, 'z eryg', 'tyjek t67ki67uik', '2017-02-27 05:34:06'),
(12, 9, 10, 'lnb ', 'its too complicate...', '2017-02-27 05:35:41'),
(13, 16, 10, 'lnbuyt', 'tty ujty7i7yf6i6', '2017-02-27 05:58:54'),
(14, 15, 10, 'hello', 'xr myhxtf uji6ruj', '2017-02-27 08:01:40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
