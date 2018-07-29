-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2018 at 03:57 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tezfuerza`
--

-- --------------------------------------------------------

--
-- Table structure for table `centerlised_table`
--

CREATE TABLE IF NOT EXISTS `centerlised_table` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_group_id` int(99) NOT NULL,
  `stud_individual_id` varchar(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `year` int(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  `mail_id` varchar(99) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `college` varchar(99) NOT NULL,
  `ppt` varchar(99) NOT NULL,
  `multimedia` varchar(99) NOT NULL,
  `technical_connection` varchar(99) NOT NULL,
  `technical_quiz` varchar(99) NOT NULL,
  `win_expert` varchar(99) NOT NULL,
  `code_buzz` varchar(99) NOT NULL,
  `date` varchar(99) NOT NULL,
  `payment_details` varchar(99) NOT NULL,
  `QRcode` int(6) DEFAULT NULL,
  `pptTime` varchar(10) DEFAULT NULL,
  `multimediaTime` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stud_individual_id` (`stud_individual_id`),
  UNIQUE KEY `QRcode` (`QRcode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `centerlised_table`
--

INSERT INTO `centerlised_table` (`id`, `stud_group_id`, `stud_individual_id`, `name`, `year`, `department`, `mail_id`, `mobile_no`, `college`, `ppt`, `multimedia`, `technical_connection`, `technical_quiz`, `win_expert`, `code_buzz`, `date`, `payment_details`, `QRcode`, `pptTime`, `multimediaTime`) VALUES
(3, 33, '3', 'sundar', 2, 'cse', 'sdadsada', 2147483647, 'dshfbsjdcs', '*', '*', '*', '*', '', '*', '24389', 'dsa', NULL, NULL, NULL),
(4, 3, '4', 'om', 1, 'cse', 'sdadsada', 2147483647, 'dshfbsjdcs', '*', '', '', '', '', '', '24389', 'dsa', NULL, NULL, NULL),
(6, 1, '12', 'killer', 1, 'cse', 'sdadsada', 2147483647, 'dshfbsjdcs', '*', '', '*', '', '', '*', '', '', NULL, NULL, NULL),
(7, 0, '44', 'hjh', 1, 'cse', 'sdadsada', 2147483647, 'dshfbsjdcs', '', '', '*', '*', '', '*', '', '', NULL, NULL, NULL),
(8, 7, '24', 'jkhj', 4, 'cse', 'sdadsada', 2147483647, 'dshfbsjdcs', '*', '', '', '*', '*', '', '', '', NULL, NULL, NULL),
(9, 11, '21', 'mapla', 1, 'cse', 'sdadsada', 2147483647, 'dshfbsjdcs', '*', '', '*', '*', '*', '', '', '', NULL, NULL, NULL),
(10, 1, '23', 'krishna', 1, 'cse', 'sdadsada', 4684, 'dshfbsjdcs', '*', '*', '', '*', '*', '', '', '', NULL, NULL, NULL),
(11, 3, '879', 'prakash', 1, 'cse', 'sdadsada', 1234567890, 'dshfbsjdcs', '*', '', '', '', '', '', '', '', NULL, NULL, NULL),
(34, 21121, '11', 'prakash', 1, 'cse', 'sdadsada', 1234567890, 'dshfbsjdcs', '*', '', '', '', '', '*', '', '', NULL, NULL, NULL),
(14, 112, '2', 'om', 0, 'cse', 'sdadsada', 0, '', '', '', '*', '', '*', '*', '', '', NULL, NULL, NULL),
(15, 112, '13', 'om', 0, '', '', 0, '', '', '', '*', '', '', '', '', '', NULL, NULL, NULL),
(16, 112, '14', 'om', 0, '', '', 0, '', '', '', '*', '', '', '', '', '', NULL, NULL, NULL),
(33, 12121, '0', 'murali', 1, 'cse', 'sdadsada', 1234567890, 'dshfbsjdcs', '*', '*', '', '', '*', '*', '', '', NULL, NULL, NULL),
(18, 111, '16', 'oddsdf', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '', '*', '', '', '', '', '', NULL, NULL, NULL),
(20, 111, '18', 'oddssddf', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(21, 111, '19', 'krishna', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(22, 111, '20', 'kumar', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(23, 112, '22', 'kumar', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(24, 112, '27', 'mapla', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(25, 112, '28', 'kunda', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(26, 113, '29', 'om', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(27, 113, '30', 'prakasa', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '', '', '', '', NULL, NULL, NULL),
(29, 114, '34', 'sowndhara', 0, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '', '*', '', '', '*', '', '', '', NULL, NULL, NULL),
(30, 1, '1111', 'murali', 1, 'cse', 'sdadsada', 0, '', '', '', '*', '', '*', '', '', '', NULL, NULL, NULL),
(31, 0, '7', 'pandi', 1, 'cse', 'sdadsada', 46722, 'dshfbsjdcs', '', '', '', '*', '', '*', '', '', NULL, NULL, NULL),
(32, 10, '33', 'monna', 1, 'cse', 'sdadsada', 1234567890, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(35, 1, '111', 'pandi', 1, 'cse', 'sdadsada', 1234567890, 'dshfbsjdcs', '*', '', '', '', '', '*', '', '', NULL, NULL, NULL),
(36, 1, '112', 'kodumodi', 1, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '*', '', '', '', '', '*', '', '', NULL, NULL, NULL),
(37, 1, '121', 'hari', 1, 'cse', 'sdadsada', 1234567890, 'dshfbsjdcs', '*', '', '', '', '', '*', '', '', NULL, NULL, NULL),
(38, 1, '11231', 'mapla', 1, 'cse', 'sdadsada', 0, 'dshfbsjdcs', '*', '', '', '', '', '*', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `code_buzz`
--

CREATE TABLE IF NOT EXISTS `code_buzz` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `stud_individual_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stud_individual_id` (`stud_individual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `code_buzz`
--

INSERT INTO `code_buzz` (`id`, `stud_individual_id`) VALUES
(1, 111),
(2, 121),
(3, 11231),
(4, 11),
(6, 1),
(7, 112);

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

--
-- Dumping data for table `final1`
--


-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `measurement_table`
--

CREATE TABLE IF NOT EXISTS `measurement_table` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `student_individual_id` int(99) NOT NULL,
  `ppt` varchar(10) NOT NULL,
  `multimedia` varchar(10) NOT NULL,
  `technical_quiz` varchar(10) NOT NULL,
  `technical_connection` varchar(10) NOT NULL,
  `win_expert` varchar(10) NOT NULL,
  `code_buzz` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_individual_id` (`student_individual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `measurement_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `multimedia`
--

CREATE TABLE IF NOT EXISTS `multimedia` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_group_id` int(99) NOT NULL,
  `j1_total` int(100) NOT NULL,
  `j2_total` int(100) NOT NULL,
  `total_mark` int(99) NOT NULL,
  `start_time` varchar(99) NOT NULL,
  `end_time` varchar(99) NOT NULL,
  `completed` varchar(99) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stud-group-id` (`stud_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `multimedia`
--

INSERT INTO `multimedia` (`id`, `stud_group_id`, `j1_total`, `j2_total`, `total_mark`, `start_time`, `end_time`, `completed`) VALUES
(1, 111, 10, 0, 13, '', '', '*'),
(2, 112, 10, 0, 14, '', '', ''),
(3, 113, 10, 0, 12, '', '', '*'),
(4, 114, 10, 0, 11, '', '', '*'),
(5, 33, 10, 0, 33, '', '', '*'),
(6, 1, 10, 0, 15, '', '', '*');

-- --------------------------------------------------------

--
-- Table structure for table `ppt`
--

CREATE TABLE IF NOT EXISTS `ppt` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_group_id` int(99) NOT NULL,
  `j1_total` int(100) NOT NULL,
  `j2_total` int(100) NOT NULL,
  `mark_1` int(99) NOT NULL,
  `mark_2` int(99) NOT NULL,
  `mark_3` int(99) NOT NULL,
  `total_mark` int(99) NOT NULL,
  `start_time` varchar(99) NOT NULL,
  `end_time` varchar(99) NOT NULL,
  `completed` varchar(99) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stud_group_id` (`stud_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ppt`
--


-- --------------------------------------------------------

--
-- Table structure for table `result_table_code_buzz`
--

CREATE TABLE IF NOT EXISTS `result_table_code_buzz` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `student_individual_id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `year` int(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  `college` varchar(99) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_individual_id` (`student_individual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `result_table_code_buzz`
--


-- --------------------------------------------------------

--
-- Table structure for table `result_table_multimedia`
--

CREATE TABLE IF NOT EXISTS `result_table_multimedia` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_group_id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  `year` int(99) NOT NULL,
  `college` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `result_table_multimedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_table_ppt`
--

CREATE TABLE IF NOT EXISTS `result_table_ppt` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_group_id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  `year` int(99) NOT NULL,
  `college` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `result_table_ppt`
--


-- --------------------------------------------------------

--
-- Table structure for table `result_table_technical_connection`
--

CREATE TABLE IF NOT EXISTS `result_table_technical_connection` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `student_individual_id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `year` int(99) NOT NULL,
  `college` varchar(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `result_table_technical_connection`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_table_technical_quiz`
--

CREATE TABLE IF NOT EXISTS `result_table_technical_quiz` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `student_individual_id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `year` int(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  `college` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `result_table_technical_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_table_winexpert`
--

CREATE TABLE IF NOT EXISTS `result_table_winexpert` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `student_individual_id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `year` varchar(99) NOT NULL,
  `department` varchar(99) NOT NULL,
  `college` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `result_table_winexpert`
--
-- --------------------------------------------------------

--
-- Table structure for table `singledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `technical_connection`
--

CREATE TABLE IF NOT EXISTS `technical_connection` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_individual_id` int(99) NOT NULL,
  `total_mark` int(99) NOT NULL,
  `earned_mark` int(99) NOT NULL,
  `start_time` varchar(99) NOT NULL,
  `end_time` varchar(99) NOT NULL,
  `completed` varchar(99) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stud_individual_id` (`stud_individual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `technical_connection`
--

INSERT INTO `technical_connection` (`id`, `stud_individual_id`, `total_mark`, `earned_mark`, `start_time`, `end_time`, `completed`) VALUES
(1, 2, 0, 21, '', '', '*'),
(2, 3, 0, 35, '', '', ''),
(3, 4, 0, 4, '', '', '*'),
(4, 44, 0, 31, '', '', '*'),
(5, 24, 0, 31, '', '', '*'),
(6, 12, 0, 33, '', '', '*'),
(7, 21, 32, 32, '', '', '*'),
(8, 16, 32, 12, '', '', '*'),
(9, 1111, 32, 33, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `technical_connection_questions`
--
-- --------------------------------------------------------

--
-- Table structure for table `technical_quiz`
--

CREATE TABLE IF NOT EXISTS `technical_quiz` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_individual_id` int(99) NOT NULL,
  `total_mark` int(99) NOT NULL,
  `earned_mark` int(99) NOT NULL,
  `star_time` varchar(99) NOT NULL,
  `end_time` varchar(99) NOT NULL,
  `completed` varchar(99) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stud_individual_id` (`stud_individual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12124 ;

--
-- Dumping data for table `technical_quiz`
--

INSERT INTO `technical_quiz` (`id`, `stud_individual_id`, `total_mark`, `earned_mark`, `star_time`, `end_time`, `completed`) VALUES
(2, 33, 12, 13, '', '', '*'),
(3, 0, 12, 23, '', '', '*'),
(8, 7, 12, 63, '', '', '*'),
(9, 3, 12, 67, '', '', '*'),
(10, 12, 12, 67, '', '', '*'),
(12123, 44, 0, 65, '', '', '*');

-- --------------------------------------------------------

--
-- Table structure for table `technical_quiz_questions`
--

CREATE TABLE IF NOT EXISTS `technical_quiz_questions` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer` varchar(99) NOT NULL,
  `option_1` varchar(99) NOT NULL,
  `option_2` varchar(99) NOT NULL,
  `option_3` varchar(99) NOT NULL,
  `option_4` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `technical_quiz_questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `winexpert`
--

CREATE TABLE IF NOT EXISTS `winexpert` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `stud_individual_id` varchar(99) NOT NULL,
  `total_mark` int(99) NOT NULL,
  `earned_mark` int(99) NOT NULL,
  `start_time` varchar(99) NOT NULL,
  `end_time` varchar(99) NOT NULL,
  `completed` varchar(99) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Stud_individual-id` (`stud_individual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `winexpert`
--

INSERT INTO `winexpert` (`id`, `stud_individual_id`, `total_mark`, `earned_mark`, `start_time`, `end_time`, `completed`) VALUES
(1, '1', 0, 2, '', '', ''),
(2, '3', 0, 22, '', '', '*'),
(3, '33', 0, 12, '', '', '*'),
(4, '13', 0, 5, '', '', '*'),
(5, '12', 0, 62, '', '', '*'),
(6, '4', 0, 4, '', '', '*'),
(7, '44', 0, 52, '', '', '*'),
(8, '24', 0, 72, '', '', '*'),
(9, '34', 23, 23, '', '', '*'),
(10, '01', 0, 33, '', '', '*'),
(11, '21', 0, 73, '', '', '*'),
(12, '1111', 0, 73, '', '', '*'),
(13, '23', 0, 44, '', '', '*');

-- --------------------------------------------------------

--
-- Table structure for table `winexpertques`
--

