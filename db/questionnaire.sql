-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 07:55 PM
-- Server version: 10.0.21-MariaDB
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `q19` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`rollno`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`) VALUES
(0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `opt1` varchar(1000) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `optcr` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
(7, 'who is yur favourite actor ?', 'varun dhavan', 'shahrukh khan', 'salman khan', 'amir khan', 'opt3');

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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `branch`, `year`, `university`, `college`, `rollno`, `email`, `contact`, `facebookid`, `address`, `password`) VALUES
('kripa', 'CSE', 1, 'AU', 'IERT allahabad', 123, 'abc@gmail.com', 1234567, 'facebook.com/iert', 'hknk', '12345'),
('kripa', 'CSE', 1, 'AU', 'IERT allahabad', 12345, 'abc@gmail.com', 12345675, 'facebook.com/iert', 'hknk', '123'),
('kripa', 'CSE', 1, 'iertq', 'iertq', 12345678, 'abc@gmail.com', 2147483647, 'skdfv nskd', 'adlkfnsd', '1234'),
('kripa', 'CSE', 1, 'uptu', 'IERT', 1311010024, 'iamkripashanker@gmail.com', 7054, 'facebook.com/iert', 'satsang mandir arail naini', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
