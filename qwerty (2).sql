-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2013 at 06:20 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qwerty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('jay', 'BABA327D241746EE0829E7E88117D4D5'),
('admin', '21232F297A57A5A743894A0E4A801FC3');

-- --------------------------------------------------------

--
-- Table structure for table `agent_request`
--

CREATE TABLE IF NOT EXISTS `agent_request` (
  `name` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(65) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`) VALUES
(1, 'Rusmus Loford'),
(2, 'Liza Downald'),
(3, 'Bijerni Thorostrop');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `isbn` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(65) NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`isbn`),
  KEY `FK_bookauth` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `book_name`, `author_id`, `status`) VALUES
(1, 'php', 1, 'Available'),
(2, 'asp', 2, 'Available'),
(3, 'jsp', 1, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(65) NOT NULL,
  `isbn` int(11) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `FK_category` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE IF NOT EXISTS `homes` (
  `Name` varchar(11) NOT NULL,
  `Address` varchar(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `Sq.feet` int(11) NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `Prize` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`Name`, `Address`, `beds`, `Sq.feet`, `City`, `State`, `Prize`, `ID`) VALUES
('PAnchnath', 'kalawad Roa', 3, 12354, '', '', 100000, 1),
('Shiv', 'Uni. Road', 4, 6000, '', '', 100000, 2),
('star', '8b,radha kr', 5, 0, 'Rajkot', 'Gujarat', 1000, 3),
('', '', 0, 0, '', '', 0, 4),
('l', 'l', 3, 0, '', 'Gujarat', 0, 5),
('', '', 0, 0, '', '', 0, 6),
('rrr', 'rrr', 0, 0, 'rrr', 'rrr', 0, 7),
('One', 'mkdsakdskl', 9, 2147483647, 'morbi', 'Goa', 99999999, 8),
('one', 'two', 3, 333, 'three', 'four', 100000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `Name` text,
  `Address` text,
  `Mail` text,
  `Gender` text,
  `Additional` text,
  `thype` text,
  `validated` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Name`, `Address`, `Mail`, `Gender`, `Additional`, `thype`, `validated`, `pass`) VALUES
('Peter', 'Griffin', '35', NULL, NULL, NULL, 'yes', ''),
('J', 'lname', NULL, NULL, NULL, NULL, 'yes', ''),
('Smit', 'lname', NULL, NULL, NULL, NULL, 'yes', ''),
('smit', 'lname', NULL, NULL, NULL, NULL, 'yes', ''),
('s', 'lname', NULL, NULL, NULL, NULL, 'yes', ''),
('A', 'lname', NULL, NULL, NULL, NULL, 'yes', '7fc56270e7a70fa81a5935b72eacbe29'),
('m', 'lname', NULL, NULL, NULL, NULL, 'yes', 'd41d8cd98f00b204e9800998ecf8427e'),
('k', 'lname', NULL, NULL, NULL, NULL, 'yes', '8ce4b16b22b58894aa86c421e8759df3'),
('jay', 'lname', NULL, NULL, NULL, NULL, 'yes', 'BABA327D241746EE0829E7E88117D4D5'),
('', 'lname', NULL, NULL, NULL, NULL, 'no', 'd41d8cd98f00b204e9800998ecf8427e'),
('', 'lname', NULL, NULL, NULL, NULL, 'no', 'd41d8cd98f00b204e9800998ecf8427e'),
('l', 'lname', NULL, NULL, NULL, NULL, 'no', '5a105e8b9d40e1329780d62ea2265d8a'),
('l', 'lname', NULL, NULL, NULL, NULL, 'no', '5a105e8b9d40e1329780d62ea2265d8a'),
('test', 'lname', NULL, NULL, NULL, NULL, 'no', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ph_no` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `Que` text NOT NULL,
  `ans` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fname`, `lname`, `email`, `password`, `ph_no`, `address`, `city`, `state`, `zipcode`, `Que`, `ans`) VALUES
(1, 'vidhi', 'shah', 'vidhishah@gmail.com', '1234567', 455666, 'dsfsgdfgfd', 'ahmedabad', 'gujrat', 370001, '', ''),
(4, 'dsf', 'fsaf', 'fasfas', 'sdasd', 0, 'sd', 'sda', 'sad', 0, '', ''),
(8, '', '', 'jaysheth9092@gmail.c', '', 0, '', 'Rajkot', 'Gujarat', 0, '', ''),
(20, 'Jay', 'Sheth', 'jaysheth9092@gmail.c', 'njsnajnaks', 2147483647, 'nkjdnsjknck', 'Rajkot', 'Gujarat', 0, '', ''),
(10, '', '', 'jaysheth9092@gmail.c', '', 0, '', 'Rajkot', 'Gujarat', 0, '', ''),
(11, 'Jay', 'Sheth', 'jaysheth9092@gmail.c', '', 0, '', 'Rajkot', 'Gujarat', 0, '', ''),
(12, '', 'ajsk', '', '', 0, '', '', '', 0, '', ''),
(13, 'Jay', 'Sheth', 'jaysheth9092@gmail.c', 'kjlk', 54646, 'kjl', 'Rajkot', 'Gujarat', 0, '', ''),
(14, '', '', '', '', 0, '', '', '', 0, '', ''),
(15, 'one', 'two', 'kaj@ga.cm', '1234567', 2147483647, 'njxkdcnsjdsjn', 'rAJKOTT', 'JSDKLSALSKAD', 0, '', ''),
(16, 'sxdjks', 'MSDNK', 'njkdfa@jkfd.com', 'jndfnjsd', 2147483647, 'njkdsfnjk', 'njkdsfnkdsf', 'Nagaland', 0, '', ''),
(17, 'Jay', 'Sheth', 'jaysheth9092@gmail.c', ',ls;ad,;ls', 2147483647, 'jjjjjjjjjjjjjjjjjjjjjjjjj', 'Rajkot', 'Gujarat', 0, '', ''),
(18, 'Jaynjdks', 'ja', 'nkjcksa@ngnjs.com', 'name@example.com', 2147483647, 'njdkvnfskjx', 'nfksnjkd', 'Click to Select State', 0, '', ''),
(19, 'Jay', 'Sheth', 'jaysheth9092@gmail.c', '66666666666666', 6666666, ' kldfmlk', 'Rajkot', 'Gujarat', 0, '', ''),
(21, 'Jaynjkxzc', 'Shethcnsdkj', 'sdnjsakjaysheth9092@', 'asjaskjnska', 2147483647, 'nkjdnsjknck', 'ckacnkjsack', 'Click to Select State', 0, '', ''),
(22, 'Jay', 'Sheth', 'jaysheth9092@gmail.c', 'jknjdsnjksd', 989898989, 'kjdnvsjknksc', 'Rajkot', 'Gujarat', 0, '', ''),
(23, '', '', '', '', 0, '', '', '', 0, '', ''),
(24, 'qqewkq', 'asdnjksad', 'sxjnkcnskj@njdskn.xn', 'ncjkncdsj', 2147483647, 'nkjcdsnjkcsjk', 'njcfjfjfjf', 'Arunachal Pradesh', 0, '', ''),
(25, 'sdmfkdms', 'mklsdk', 'jaysheth9092@gmail.c', 'dsmkscmlk', 4444444, 'mklcsklmlksdc', 'Rajkot', 'Click to Select State', 0, '', ''),
(26, 'klkk', 'kl', 'jkd@hjdkf.com', 'njscnjcs', 2147483647, 'cdnjkcs', 'njcsj', 'Maharashtra', 0, '', ''),
(27, 'klkk', 'kl', 'jkd@hjdkf.com', 'casxnjax', 2147483647, 'njkcnjkdc', 'njkdckjcn', 'Nagaland', 0, '', ''),
(28, 'klkk', 'kl', 'jkd@hjdkf.com', 'cdcsdcsd', 2147483647, 'njkcnjkdc', 'njkdckjcn', 'Nagaland', 0, '', ''),
(55, 'l', 'l', 'nkjcksa@ngnjs.com', 'name@example.com', 2147483647, 'ncsdkj', 'njkcs', 'Madhya Pradesh', 0, 'What was your favorite place to visit as a child?', 'jay');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('jay', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `FK_bookauth` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK_category` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
