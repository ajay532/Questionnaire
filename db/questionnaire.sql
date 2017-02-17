-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 09:48 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

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

CREATE TABLE `answer` (
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

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user` int(11) NOT NULL,
  `liketype` varchar(1000) NOT NULL,
  `prob` varchar(1000) NOT NULL,
  `problems` varchar(1000) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `improve` varchar(1000) NOT NULL,
  `start` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user`, `liketype`, `prob`, `problems`, `questions`, `experience`, `improve`, `start`) VALUES
(1, '', '', '', '', '', '', 'finish');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `opt1` varchar(1000) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `optcr` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'Shubham', 'lnl', 'jjk', 'j jk k', 'jj j', 'opt1'),
(9, 'dsfioejioeg', 'a', 'a', 's', 's', 'opt1');

-- --------------------------------------------------------

--
-- Table structure for table `ranklist`
--

CREATE TABLE `ranklist` (
  `id` int(100) NOT NULL,
  `rollno` int(100) NOT NULL,
  `rank` int(100) NOT NULL,
  `correct` int(100) NOT NULL,
  `wrong` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
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

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `rollno` int(11) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`rollno`, `start_time`, `end_time`) VALUES
(1, '2017-02-17 14:17:36', '2017-02-17 14:19:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranklist`
--
ALTER TABLE `ranklist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ranklist`
--
ALTER TABLE `ranklist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
