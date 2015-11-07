-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2015 at 08:53 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `rollno` int(11) NOT NULL,
  `q1` varchar(10) NOT NULL,
  `q2` varchar(10) NOT NULL,
  `q3` varchar(10) NOT NULL,
  `q4` varchar(10) NOT NULL,
  `q5` varchar(10) NOT NULL,
  `q6` varchar(10) NOT NULL,
  `q7` varchar(10) NOT NULL,
  `q8` varchar(10) NOT NULL,
  `q9` varchar(10) NOT NULL,
  `q10` varchar(10) NOT NULL,
  `q11` varchar(10) NOT NULL,
  `q12` varchar(10) NOT NULL,
  `q13` varchar(10) NOT NULL,
  `q14` varchar(10) NOT NULL,
  `q15` varchar(10) NOT NULL,
  `q16` varchar(10) NOT NULL,
  `q17` varchar(10) NOT NULL,
  `q18` varchar(10) NOT NULL,
  `q19` varchar(10) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`rollno`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`) VALUES
(0, '', 'opt4', '', '', '', 'opt3', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', 'opt3', '', 'opt2', '', 'opt3', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', 'opt2', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(532, 'opt2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(789, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1311010007, 'opt3', '', 'opt4', 'opt1', '', 'opt3', '', 'opt2', '', '', '', '', '', '', '', '', '', '', ''),
(1311010008, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `opt1` varchar(1000) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `optcr` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `optcr`) VALUES
(1, 'jb b', 'kjbkjb', 'jkbkjb', 'jbjb', 'kjbkjb', 'jbbjklb'),
(2, 'How many days in a week?', '3', '4', '1', '7', 'opt4'),
(3, 'How many days in a week?', '3', '4', '1', '7', 'opt4'),
(4, 'How many days in a week?', '3', '4', '1', '7', 'opt4'),
(5, 'who is yur favourite actor ?', 'varun dhavan', 'shahrukh khan', 'salman khan', 'amir khan', 'opt3'),
(6, 'who is yur favourite actor ?', 'varun dhavan', 'shahrukh khan', 'salman khan', 'amir khan', 'opt3'),
(7, 'who is yur favourite actor ?', 'varun dhavan', 'shahrukh khan', 'salman khan', 'amir khan', 'opt3'),
(8, 'Shubham', 'lnl', 'jjk', 'j jk k', 'jj j', 'opt1');

-- --------------------------------------------------------

--
-- Table structure for table `ranklist`
--

CREATE TABLE IF NOT EXISTS `ranklist` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `rollno` int(100) NOT NULL,
  `rank` int(100) NOT NULL,
  `correct` int(100) NOT NULL,
  `wrong` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rollno` (`rollno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ranklist`
--

INSERT INTO `ranklist` (`id`, `rollno`, `rank`, `correct`, `wrong`, `total`) VALUES
(1, 1311010007, 1, 2, 6, -4),
(2, 1311010008, 2, 0, 8, -8),
(3, 789, 2, 0, 8, -8);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(100) NOT NULL,
  `branch` char(10) NOT NULL,
  `year` int(11) NOT NULL,
  `university` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `rollno` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `facebookid` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `branch`, `year`, `university`, `college`, `rollno`, `email`, `contact`, `facebookid`, `address`, `password`) VALUES
('hbhb', 'CSE', 1, 'kbkhbkh', 'k k khjb', 532, 'kbkh@hoh', 123, 'kbub', 'biub', '532'),
('ajay532', 'CSE', 1, 'jhvjhv', 'hvhjhb', 789, 'kbk@jnjn', 5644, 'nnon', 'non', '789'),
('jnljn', 'CSE', 1, 'lknkn', 'lknlk', 1234, 'kln@df', 535, 'knlkn', 'klnlknkl', '1234'),
('AJAY PANDEY', 'CSE', 1, 'UPTU', 'IERT', 1311010007, 'ajaypandey1996@gmail.com', 1234565161, '3513513', '138/15 Ram Priya Road', 'pass');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
