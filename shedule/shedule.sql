-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 09:16 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_block_course`
--

CREATE TABLE IF NOT EXISTS `tb_block_course` (
  `id` int(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `batch_no` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_block_course`
--

INSERT INTO `tb_block_course` (`id`, `course_id`, `section`, `status`, `batch_no`) VALUES
(1, 'ENG113', 'A', 0, 'L1T1'),
(2, 'ENG113', 'B', 0, 'L1T1'),
(3, 'ENG113', 'C', 0, 'L1T1'),
(4, 'ENG113', 'D', 0, 'L1T1'),
(5, 'ENG113', 'E', 0, 'L1T1'),
(6, 'ENG113', 'F', 0, 'L1T1'),
(7, 'ENG113', 'G', 0, 'L1T1'),
(8, 'ENG113', 'H', 0, 'L1T1'),
(9, 'ENG113', 'I', 0, 'L1T1'),
(10, 'ENG113', 'J', 0, 'L1T1'),
(11, 'ENG113', 'K', 0, 'L1T1'),
(12, 'ENG113', 'L', 0, 'L1T1'),
(13, 'ENG113', 'M', 0, 'L1T1'),
(14, 'ENG113', 'N', 0, 'L1T1'),
(15, 'ENG113', 'O', 0, 'L1T1'),
(16, 'ENG113', 'P', 0, 'L1T1'),
(17, 'ENG113', 'Q', 0, 'L1T1'),
(18, 'ENG113', 'R', 0, 'L1T1'),
(19, 'ENG113', 'S', 0, 'L1T1'),
(20, 'ENG113', 'T', 0, 'L1T1'),
(21, 'ENG113', 'U', 0, 'L1T1'),
(22, 'ENG113', 'V', 0, 'L1T1'),
(23, 'ENG113', 'W', 0, 'L1T1'),
(24, 'ENG113', 'X', 0, 'L1T1'),
(27, 'CSE221', 'A', 0, 'L2T2'),
(28, 'CSE221', 'B', 0, 'L2T2'),
(29, 'CSE221', 'C', 0, 'L2T2'),
(30, 'CSE221', 'D', 0, 'L2T2'),
(31, 'CSE221', 'E', 0, 'L2T2'),
(32, 'CSE221', 'F', 0, 'L2T2'),
(33, 'CSE322', 'A', 0, 'L3T2'),
(34, 'CSE322', 'B', 0, 'L3T2'),
(35, 'CSE322', 'C', 0, 'L3T2'),
(36, 'CSE322', 'D', 0, 'L3T2'),
(37, 'CSE322', 'E', 0, 'L3T2'),
(38, 'CSE322', 'F', 0, 'L3T2'),
(39, 'CSE331', 'A', 0, 'L3T3'),
(40, 'CSE331', 'B', 0, 'L3T3'),
(41, 'CSE331', 'C', 0, 'L3T3'),
(42, 'CSE331', 'D', 0, 'L3T3'),
(43, 'CSE331', 'E', 0, 'L3T3'),
(44, 'CSE331', 'F', 0, 'L3T3'),
(45, 'CSE331', 'G', 0, 'L3T3'),
(46, 'CSE331', 'H', 0, 'L3T3'),
(47, 'CSE331', 'I', 0, 'L3T3'),
(48, 'CSE331', 'J', 0, 'L3T3'),
(49, 'CSE331', 'K', 0, 'L3T3'),
(50, 'CSE331', 'L', 0, 'L3T3'),
(51, 'CSE313', 'A', 0, 'L3T1'),
(52, 'CSE313', 'B', 0, 'L3T1'),
(53, 'CSE313', 'C', 0, 'L3T1'),
(54, 'CSE313', 'D', 0, 'L3T1'),
(55, 'CSE313', 'E', 0, 'L3T1'),
(56, 'CSE313', 'F', 0, 'L3T1'),
(57, 'CSE313', 'G', 0, 'L3T1'),
(58, 'CSE313', 'H', 0, 'L3T1'),
(59, 'CSE313', 'I', 0, 'L3T1'),
(60, 'CSE313', 'J', 0, 'L3T1'),
(61, 'CSE313', 'K', 0, 'L3T1'),
(62, 'CSE313', 'L', 0, 'L3T1'),
(63, 'CSE313', 'M', 0, 'L3T1'),
(64, 'CSE313', 'N', 0, 'L3T1'),
(65, 'CSE122', 'A', 0, 'L1T2'),
(66, 'CSE122', 'B', 0, 'L1T2'),
(67, 'CSE122', 'C', 0, 'L1T2'),
(68, 'CSE122', 'D', 0, 'L1T2'),
(69, 'CSE122', 'E', 0, 'L1T2'),
(70, 'CSE431', 'EVE-A', 0, '25'),
(71, 'CSE431', 'EVE-B', 0, '25'),
(72, 'CSE322', 'EVE-A', 0, '27'),
(73, 'CSE322', 'EVE-B', 0, '27'),
(74, 'CSE322', 'EVE-C', 0, '27'),
(75, 'CSE233', 'EVE-A', 0, '28'),
(76, 'MAT121', 'EVE-A', 0, '31'),
(77, 'CSE333', 'EVE-A', 0, '23'),
(78, 'CSE333', 'EVE-B', 0, '23'),
(79, 'NFE122', 'NFE-A', 0, '172'),
(80, 'ENG111', 'NFE-B', 0, '162');

-- --------------------------------------------------------

--
-- Table structure for table `tb_block_room`
--

CREATE TABLE IF NOT EXISTS `tb_block_room` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `bigroom` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_block_room`
--

INSERT INTO `tb_block_room` (`id`, `room_no`, `status`, `bigroom`) VALUES
(1, '102 CSEB', 1, 0),
(3, '601 CSEB', 0, 0),
(4, '602 CSEB', 1, 0),
(5, '701 CSEB', 1, 0),
(6, '702 CSEB', 1, 0),
(7, '801 CSEB', 1, 0),
(8, '802 CSEB', 1, 0),
(9, '901 CSEB', 0, 0),
(10, '902 CSEB', 0, 0),
(11, '903 CSEB', 1, 0),
(12, '101 DT5', 1, 0),
(13, '101 DT5', 1, 0),
(14, '105 DT5', 0, 0),
(15, '106 DT5', 0, 0),
(16, '107 DT5', 0, 0),
(17, '108 DT5', 0, 0),
(18, '113 DT5', 0, 0),
(19, '115 DT5', 0, 0),
(21, '303 DT5', 0, 0),
(22, '304 DT5', 0, 0),
(23, '801 DT5', 0, 0),
(24, '802 DT5', 0, 0),
(25, '803 DT5', 0, 0),
(26, '804 DT5', 0, 0),
(27, '805 DT5', 0, 0),
(28, '806 DT5', 0, 0),
(29, '807 DT5', 0, 0),
(30, '808 DT5', 0, 0),
(31, '901 DT5', 0, 0),
(32, '902 DT5', 0, 0),
(33, '201 MC', 0, 0),
(34, '301 AB', 0, 0),
(35, '304 AB', 0, 0),
(36, '306 AB', 0, 0),
(37, '401 AB', 0, 0),
(38, '404 AB', 0, 0),
(39, '405 AB', 0, 0),
(40, '406 AB', 0, 0),
(41, '501 AB', 0, 0),
(42, '502 AB', 0, 0),
(43, '504 AB', 0, 0),
(44, '601 AB', 0, 0),
(45, '604 AB', 0, 0),
(46, '605 AB', 0, 0),
(47, '101 CSEB', 1, 0),
(48, '402 MC', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_building_priority`
--

CREATE TABLE IF NOT EXISTS `tb_building_priority` (
  `id` int(100) NOT NULL,
  `building_no` varchar(100) NOT NULL,
  `level` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_building_priority`
--

INSERT INTO `tb_building_priority` (`id`, `building_no`, `level`) VALUES
(1, 'DT5', 2),
(2, 'CSEB', 1),
(3, 'AB', 3),
(4, 'MC', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE IF NOT EXISTS `tb_course` (
  `id` int(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `std_reg` int(100) NOT NULL,
  `tech_name` varchar(100) NOT NULL,
  `batch_no` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=345 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`id`, `course_title`, `course_id`, `section`, `std_reg`, `tech_name`, `batch_no`) VALUES
(1, 'Basic Functional English and English Spoken', 'ENG113', 'A', 43, 'IZP', 'L1T1'),
(2, 'Basic Functional English and English Spoken', 'ENG113', 'B', 40, 'SA', 'L1T1'),
(3, 'Basic Functional English and English Spoken', 'ENG113', 'C', 39, 'IZP', 'L1T1'),
(4, 'Basic Functional English and English Spoken', 'ENG113', 'D', 42, 'IZP', 'L1T1'),
(5, 'Basic Functional English and English Spoken', 'ENG113', 'E', 40, 'SMK', 'L1T1'),
(6, 'Basic Functional English and English Spoken', 'ENG113', 'F', 41, 'SZL', 'L1T1'),
(7, 'Basic Functional English and English Spoken', 'ENG113', 'G', 40, 'SZL', 'L1T1'),
(8, 'Basic Functional English and English Spoken', 'ENG113', 'H', 41, 'SZL', 'L1T1'),
(9, 'Basic Functional English and English Spoken', 'ENG113', 'I', 41, 'SZL', 'L1T1'),
(10, 'Basic Functional English and English Spoken', 'ENG113', 'J', 41, 'SA', 'L1T1'),
(11, 'Basic Functional English and English Spoken', 'ENG113', 'K', 42, 'SA', 'L1T1'),
(12, 'Basic Functional English and English Spoken', 'ENG113', 'L', 42, 'SA', 'L1T1'),
(13, 'Basic Functional English and English Spoken', 'ENG113', 'M', 42, 'SA', 'L1T1'),
(14, 'Basic Functional English and English Spoken', 'ENG113', 'N', 42, 'SZL', 'L1T1'),
(15, 'Basic Functional English and English Spoken', 'ENG113', 'O', 43, 'ASMHM', 'L1T1'),
(16, 'Basic Functional English and English Spoken', 'ENG113', 'P', 41, 'SMK', 'L1T1'),
(17, 'Basic Functional English and English Spoken', 'ENG113', 'Q', 41, 'SA', 'L1T1'),
(18, 'Basic Functional English and English Spoken', 'ENG113', 'R', 42, 'MRU', 'L1T1'),
(19, 'Basic Functional English and English Spoken', 'ENG113', 'S', 42, 'ASMHM', 'L1T1'),
(20, 'Basic Functional English and English Spoken', 'ENG113', 'T', 43, 'MRU', 'L1T1'),
(21, 'Basic Functional English and English Spoken', 'ENG113', 'U', 41, 'ASMHM', 'L1T1'),
(22, 'Basic Functional English and English Spoken', 'ENG113', 'V', 40, 'ASMHM', 'L1T1'),
(23, 'Basic Functional English and English Spoken', 'ENG113', 'W', 41, 'IZP', 'L1T1'),
(24, 'Basic Functional English and English Spoken', 'ENG113', 'X', 41, 'MKA', 'L1T1'),
(27, 'Algorithms', 'CSE221', 'A', 39, 'MMR', 'L2T2'),
(28, 'Algorithms', 'CSE221', 'B', 28, 'SN', 'L2T2'),
(29, 'Algorithms', 'CSE221', 'C', 44, 'IF', 'L2T2'),
(30, 'Algorithms', 'CSE221', 'D', 35, 'MZB', 'L2T2'),
(31, 'Algorithms', 'CSE221', 'E', 35, 'RAS', 'L2T2'),
(32, 'Algorithms', 'CSE221', 'F', 39, 'RAS', 'L2T2'),
(33, 'Computer Architecture and Organization', 'CSE322', 'A', 33, 'MFH', 'L3T2'),
(34, 'Computer Architecture and Organization', 'CSE322', 'B', 36, 'MR', 'L3T2'),
(35, 'Computer Architecture and Organization', 'CSE322', 'C', 45, 'MR', 'L3T2'),
(36, 'Computer Architecture and Organization', 'CSE322', 'D', 36, 'TA', 'L3T2'),
(37, 'Computer Architecture and Organization', 'CSE322', 'E', 39, 'RH', 'L3T2'),
(38, 'Computer Architecture and Organization', 'CSE322', 'F', 36, 'RH', 'L3T2'),
(39, 'Compiler Design', 'CSE331', 'A', 31, 'SAMM', 'L3T3'),
(40, 'Compiler Design', 'CSE331', 'B', 33, 'SAMM', 'L3T3'),
(41, 'Compiler Design', 'CSE331', 'C', 35, 'MRR', 'L3T3'),
(42, 'Compiler Design', 'CSE331', 'D', 41, 'TT', 'L3T3'),
(43, 'Compiler Design', 'CSE331', 'E', 40, 'CMKS', 'L3T3'),
(44, 'Compiler Design', 'CSE331', 'F', 39, 'NS', 'L3T3'),
(45, 'Compiler Design', 'CSE331', 'G', 43, 'PP', 'L3T3'),
(46, 'Compiler Design', 'CSE331', 'H', 42, 'FI', 'L3T3'),
(47, 'Compiler Design', 'CSE331', 'I', 35, 'NS', 'L3T3'),
(48, 'Compiler Design', 'CSE331', 'J', 38, 'SMTS', 'L3T3'),
(49, 'Compiler Design', 'CSE331', 'K', 31, 'SMTS', 'L3T3'),
(50, 'Compiler Design', 'CSE331', 'L', 35, 'RH', 'L3T3'),
(51, 'Computer Networks', 'CSE313', 'A', 39, 'NN', 'L3T1'),
(52, 'Computer Networks', 'CSE313', 'B', 35, 'TA', 'L3T1'),
(53, 'Computer Networks', 'CSE313', 'C', 40, 'GZI', 'L3T1'),
(54, 'Computer Networks', 'CSE313', 'D', 45, 'FNN', 'L3T1'),
(55, 'Computer Networks', 'CSE313', 'E', 43, 'FNN', 'L3T1'),
(56, 'Computer Networks', 'CSE313', 'F', 36, 'SNP', 'L3T1'),
(57, 'Computer Networks', 'CSE313', 'G', 40, 'RTHT', 'L3T1'),
(58, 'Computer Networks', 'CSE313', 'H', 43, 'TA', 'L3T1'),
(59, 'Computer Networks', 'CSE313', 'I', 38, 'SNF', 'L3T1'),
(60, 'Computer Networks', 'CSE313', 'J', 38, 'TC', 'L3T1'),
(61, 'Computer Networks', 'CSE313', 'K', 32, 'MRH', 'L3T1'),
(62, 'Computer Networks', 'CSE313', 'L', 36, 'MRH', 'L3T1'),
(63, 'Computer Networks', 'CSE313', 'M', 28, 'RTHT', 'L3T1'),
(64, 'Computer Networks', 'CSE313', 'N', 40, 'RAH', 'L3T1'),
(65, 'Programming and Problem Solving', 'CSE122', 'A', 45, 'MMR', 'L1T2'),
(66, 'Programming and Problem Solving', 'CSE122', 'B', 45, 'SRHN', 'L1T2'),
(67, 'Programming and Problem Solving', 'CSE122', 'C', 42, 'FTJ', 'L1T2'),
(68, 'Programming and Problem Solving', 'CSE122', 'D', 45, 'SN', 'L1T2'),
(69, 'Programming and Problem Solving', 'CSE122', 'E', 40, 'AK', 'L1T2'),
(70, 'E-Commerce and Web Applications', 'CSE431', 'EVE-A', 36, 'MTH', '25'),
(71, 'E-Commerce and Web Applications', 'CSE431', 'EVE-B', 36, 'MTH', '25'),
(72, 'Computer Architecture and Organization', 'CSE322', 'EVE-A', 38, 'NJ', '27'),
(73, 'Computer Architecture and Organization', 'CSE322', 'EVE-B', 39, 'GZI', '27'),
(74, 'Computer Architecture and Organization', 'CSE322', 'EVE-C', 32, 'GZI', '27'),
(75, 'Data Communication', 'CSE233', 'EVE-A', 52, 'CMKS', '28'),
(76, 'Mathematics - II: Linear Algebra and Coordinate Geometry', 'MAT121', 'EVE-A', 45, 'NR', '31'),
(77, 'Peripherals and Interfacing', 'CSE333', 'EVE-A', 41, 'SKB', '23'),
(78, 'Peripherals and Interfacing', 'CSE333', 'EVE-B', 40, 'MAAH', '23'),
(270, 'Software Engineering\r\n', 'CSE333', 'A', 20, 'ZNT\r\n', 'L3T3'),
(271, 'Software Engineering\r\n', 'CSE333', 'B', 42, 'RAH\r\n', 'L3T3'),
(272, 'Software Engineering\r\n', 'CSE333', 'C', 36, 'RA\r\n', 'L3T3'),
(273, 'Software Engineering\r\n', 'CSE333', 'D', 40, 'JAO\r\n', 'L3T3'),
(274, 'Software Engineering\r\n', 'CSE333', 'E', 42, 'RA\r\n', 'L3T3'),
(275, 'Software Engineering\r\n', 'CSE333', 'F', 40, 'UD\r\n', 'L3T3'),
(276, 'Software Engineering\r\n', 'CSE333', 'G', 41, 'FA\r\n', 'L3T3'),
(277, 'Software Engineering\r\n', 'CSE333', 'H', 42, 'FA\r\n', 'L3T3'),
(278, 'Software Engineering\r\n', 'CSE333', 'I', 36, 'TC\r\n', 'L3T3'),
(279, 'Software Engineering\r\n', 'CSE333', 'J', 37, 'TA\r\n', 'L3T3'),
(280, 'Software Engineering\r\n', 'CSE333', 'K', 31, 'TA\r\n', 'L3T3'),
(281, 'Software Engineering\r\n', 'CSE333', 'L', 36, 'FI\r\n', 'L3T3'),
(314, 'Computer Fundamentals\r\n', 'CSE112', 'A', 42, 'NJ\r\n', 'L1T1'),
(315, 'Computer Fundamentals\r\n', 'CSE112', 'B', 41, 'NJ\r\n', 'L1T1'),
(316, 'Computer Fundamentals\r\n', 'CSE112', 'C', 41, 'NJ\r\n', 'L1T1'),
(317, 'Computer Fundamentals\r\n', 'CSE112', 'D', 41, 'MAAH\r\n', 'L1T1'),
(318, 'Computer Fundamentals\r\n', 'CSE112', 'E', 43, 'TA\r\n', 'L1T1'),
(319, 'Computer Fundamentals\r\n', 'CSE112', 'F', 40, 'NN\r\n', 'L1T1'),
(320, 'Computer Fundamentals\r\n', 'CSE112', 'G', 41, 'MAAH\r\n', 'L1T1'),
(321, 'Computer Fundamentals\r\n', 'CSE112', 'H', 41, 'MSM\r\n', 'L1T1'),
(322, 'Computer Fundamentals\r\n', 'CSE112', 'I', 41, 'MSM\r\n', 'L1T1'),
(323, 'Computer Fundamentals\r\n', 'CSE112', 'J', 41, 'TA\r\n', 'L1T1'),
(324, 'Computer Fundamentals\r\n', 'CSE112', 'K', 42, 'TA\r\n', 'L1T1'),
(325, 'Computer Fundamentals\r\n', 'CSE112', 'L', 42, 'MAAH\r\n', 'L1T1'),
(326, 'Computer Fundamentals\r\n', 'CSE112', 'M', 43, 'AI\r\n', 'L1T1'),
(327, 'Computer Fundamentals\r\n', 'CSE112', 'N', 43, 'NJ\r\n', 'L1T1'),
(328, 'Computer Fundamentals\r\n', 'CSE112', 'O', 43, 'AI\r\n', 'L1T1'),
(329, 'Computer Fundamentals\r\n', 'CSE112', 'P', 41, 'AC\r\n', 'L1T1'),
(330, 'Computer Fundamentals\r\n', 'CSE112', 'Q', 42, 'AC\r\n', 'L1T1'),
(331, 'Computer Fundamentals\r\n', 'CSE112', 'R', 42, 'AC\r\n', 'L1T1'),
(332, 'Computer Fundamentals\r\n', 'CSE112', 'S', 42, 'AC\r\n', 'L1T1'),
(333, 'Computer Fundamentals\r\n', 'CSE112', 'T', 43, 'RS\r\n', 'L1T1'),
(334, 'Computer Fundamentals\r\n', 'CSE112', 'U', 42, 'MMI\r\n', 'L1T1'),
(335, 'Computer Fundamentals\r\n', 'CSE112', 'V', 40, 'RS\r\n', 'L1T1'),
(336, 'Computer Fundamentals\r\n', 'CSE112', 'W', 42, 'MMMM\r\n', 'L1T1'),
(337, 'Computer Fundamentals\r\n', 'CSE112', 'X', 41, 'NS\r\n', 'L1T1'),
(338, 'Computer Fundamentals\r\n', 'CSE112', 'Y', 41, 'MJR', 'L1T1'),
(339, 'Industrial Management\r\n', 'MGT414', 'EVE-A', 36, 'SA\r\n', '25'),
(340, 'Industrial Management\r\n', 'MGT414', 'EVE-B', 39, 'SA\r\n', '25'),
(341, 'Computer and Network Security\r\n', 'CSE432', 'EVE-A', 40, 'MRB\r\n', '23'),
(342, 'Microprocessor and Assembly Language\r\n', 'CSE231', 'EVE-A', 52, 'MRA\r\n', '28'),
(343, 'Food and Nutration', 'NFE122', 'NFE-A', 50, 'TIN', '172'),
(344, 'English Language I', 'ENG111', 'NFE-B', 50, 'NIT', '162');

-- --------------------------------------------------------

--
-- Table structure for table `tb_details_count`
--

CREATE TABLE IF NOT EXISTS `tb_details_count` (
  `id` int(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `batch_no` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `count` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_details_count`
--

INSERT INTO `tb_details_count` (`id`, `course_id`, `section`, `batch_no`, `room_no`, `count`, `date`, `time`) VALUES
(847, 'CSE322', 'EVE-A', '27', '101 DT5', 28, '2017-03-04', '18:00'),
(848, 'CSE322', 'EVE-A', '27', '102 DT5', 11, '2017-03-04', '18:00'),
(849, 'CSE322', 'EVE-B', '27', '102 DT5', 17, '2017-03-04', '18:00'),
(850, 'CSE322', 'EVE-B', '27', '105 DT5', 23, '2017-03-04', '18:00'),
(851, 'CSE322', 'EVE-C', '27', '105 DT5', 13, '2017-03-04', '18:00'),
(852, 'CSE322', 'EVE-C', '27', '106 DT5', 20, '2017-03-04', '18:00'),
(853, 'CSE333', 'EVE-A', '23', '101 DT5', 21, '2017-03-04', '18:00'),
(854, 'CSE333', 'EVE-A', '23', '102 DT5', 20, '2017-03-04', '18:00'),
(855, 'CSE333', 'EVE-A', '23', '106 DT5', 1, '2017-03-04', '18:00'),
(856, 'CSE333', 'EVE-B', '23', '106 DT5', 22, '2017-03-04', '18:00'),
(857, 'CSE333', 'EVE-B', '23', '107 DT5', 19, '2017-03-04', '18:00'),
(858, 'CSE431', 'EVE-A', '25', '107 DT5', 24, '2017-03-04', '18:00'),
(859, 'CSE431', 'EVE-A', '25', '108 DT5', 13, '2017-03-04', '18:00'),
(860, 'CSE431', 'EVE-B', '25', '108 DT5', 7, '2017-03-04', '18:00'),
(861, 'CSE431', 'EVE-B', '25', '113 DT5', 28, '2017-03-04', '18:00'),
(862, 'CSE431', 'EVE-B', '25', '115 DT5', 2, '2017-03-04', '18:00'),
(863, 'CSE233', 'EVE-A', '28', '108 DT5', 20, '2017-03-04', '18:00'),
(864, 'CSE233', 'EVE-A', '28', '115 DT5', 33, '2017-03-04', '18:00'),
(865, 'MAT121', 'EVE-A', '31', '115 DT5', 7, '2017-03-04', '18:00'),
(866, 'MAT121', 'EVE-A', '31', '303 DT5', 25, '2017-03-04', '18:00'),
(867, 'MAT121', 'EVE-A', '31', '304 DT5', 14, '2017-03-04', '18:00'),
(868, 'ENG113', 'A', 'L1T1', '101 DT5', 28, '2017-03-04', '10:00'),
(869, 'ENG113', 'A', 'L1T1', '102 DT5', 16, '2017-03-04', '10:00'),
(870, 'ENG113', 'B', 'L1T1', '102 DT5', 12, '2017-03-04', '10:00'),
(871, 'ENG113', 'B', 'L1T1', '105 DT5', 29, '2017-03-04', '10:00'),
(872, 'ENG113', 'C', 'L1T1', '105 DT5', 7, '2017-03-04', '10:00'),
(873, 'ENG113', 'C', 'L1T1', '106 DT5', 33, '2017-03-04', '10:00'),
(874, 'ENG113', 'D', 'L1T1', '106 DT5', 11, '2017-03-04', '10:00'),
(875, 'ENG113', 'D', 'L1T1', '107 DT5', 24, '2017-03-04', '10:00'),
(876, 'ENG113', 'D', 'L1T1', '108 DT5', 8, '2017-03-04', '10:00'),
(877, 'ENG113', 'E', 'L1T1', '108 DT5', 12, '2017-03-04', '10:00'),
(878, 'ENG113', 'E', 'L1T1', '113 DT5', 28, '2017-03-04', '10:00'),
(879, 'ENG113', 'E', 'L1T1', '115 DT5', 1, '2017-03-04', '10:00'),
(880, 'ENG113', 'F', 'L1T1', '115 DT5', 42, '2017-03-04', '10:00'),
(881, 'ENG113', 'G', 'L1T1', '115 DT5', 6, '2017-03-04', '10:00'),
(882, 'ENG113', 'G', 'L1T1', '303 DT5', 25, '2017-03-04', '10:00'),
(883, 'ENG113', 'G', 'L1T1', '304 DT5', 10, '2017-03-04', '10:00'),
(884, 'ENG113', 'H', 'L1T1', '304 DT5', 14, '2017-03-04', '10:00'),
(885, 'ENG113', 'H', 'L1T1', '801 DT5', 26, '2017-03-04', '10:00'),
(886, 'ENG113', 'H', 'L1T1', '802 DT5', 2, '2017-03-04', '10:00'),
(887, 'ENG113', 'I', 'L1T1', '802 DT5', 16, '2017-03-04', '10:00'),
(888, 'ENG113', 'I', 'L1T1', '803 DT5', 26, '2017-03-04', '10:00'),
(889, 'ENG113', 'J', 'L1T1', '803 DT5', 2, '2017-03-04', '10:00'),
(890, 'ENG113', 'J', 'L1T1', '804 DT5', 31, '2017-03-04', '10:00'),
(891, 'ENG113', 'J', 'L1T1', '805 DT5', 9, '2017-03-04', '10:00'),
(892, 'ENG113', 'K', 'L1T1', '805 DT5', 19, '2017-03-04', '10:00'),
(893, 'ENG113', 'K', 'L1T1', '806 DT5', 24, '2017-03-04', '10:00'),
(894, 'ENG113', 'L', 'L1T1', '806 DT5', 3, '2017-03-04', '10:00'),
(895, 'ENG113', 'L', 'L1T1', '807 DT5', 28, '2017-03-04', '10:00'),
(896, 'ENG113', 'L', 'L1T1', '808 DT5', 12, '2017-03-04', '10:00'),
(897, 'ENG113', 'M', 'L1T1', '808 DT5', 16, '2017-03-04', '10:00'),
(898, 'ENG113', 'M', 'L1T1', '901 DT5', 23, '2017-03-04', '10:00'),
(899, 'ENG113', 'M', 'L1T1', '902 DT5', 4, '2017-03-04', '10:00'),
(900, 'ENG113', 'N', 'L1T1', '902 DT5', 12, '2017-03-04', '10:00'),
(901, 'ENG113', 'N', 'L1T1', '101 CSEB', 31, '2017-03-04', '10:00'),
(902, 'ENG113', 'O', 'L1T1', '101 CSEB', 35, '2017-03-04', '10:00'),
(903, 'ENG113', 'O', 'L1T1', '102 CSEB', 9, '2017-03-04', '10:00'),
(904, 'ENG113', 'P', 'L1T1', '102 CSEB', 42, '2017-03-04', '10:00'),
(905, 'ENG113', 'Q', 'L1T1', '102 CSEB', 21, '2017-03-04', '10:00'),
(906, 'ENG113', 'Q', 'L1T1', '601 CSEB', 21, '2017-03-04', '10:00'),
(907, 'ENG113', 'R', 'L1T1', '601 CSEB', 1, '2017-03-04', '10:00'),
(908, 'ENG113', 'R', 'L1T1', '602 CSEB', 21, '2017-03-04', '10:00'),
(909, 'ENG113', 'R', 'L1T1', '701 CSEB', 18, '2017-03-04', '10:00'),
(910, 'ENG113', 'R', 'L1T1', '702 CSEB', 3, '2017-03-04', '10:00'),
(911, 'ENG113', 'S', 'L1T1', '702 CSEB', 17, '2017-03-04', '10:00'),
(912, 'ENG113', 'S', 'L1T1', '801 CSEB', 18, '2017-03-04', '10:00'),
(913, 'ENG113', 'S', 'L1T1', '802 CSEB', 8, '2017-03-04', '10:00'),
(914, 'ENG113', 'T', 'L1T1', '802 CSEB', 10, '2017-03-04', '10:00'),
(915, 'ENG113', 'T', 'L1T1', '901 CSEB', 19, '2017-03-04', '10:00'),
(916, 'ENG113', 'T', 'L1T1', '902 CSEB', 15, '2017-03-04', '10:00'),
(917, 'ENG113', 'U', 'L1T1', '902 CSEB', 5, '2017-03-04', '10:00'),
(918, 'ENG113', 'U', 'L1T1', '903 CSEB', 36, '2017-03-04', '10:00'),
(919, 'ENG113', 'U', 'L1T1', '301 AB', 1, '2017-03-04', '10:00'),
(920, 'ENG113', 'V', 'L1T1', '301 AB', 16, '2017-03-04', '10:00'),
(921, 'ENG113', 'V', 'L1T1', '304 AB', 14, '2017-03-04', '10:00'),
(922, 'ENG113', 'V', 'L1T1', '306 AB', 11, '2017-03-04', '10:00'),
(923, 'ENG113', 'W', 'L1T1', '306 AB', 7, '2017-03-04', '10:00'),
(924, 'ENG113', 'W', 'L1T1', '401 AB', 18, '2017-03-04', '10:00'),
(925, 'ENG113', 'W', 'L1T1', '404 AB', 14, '2017-03-04', '10:00'),
(926, 'ENG113', 'W', 'L1T1', '405 AB', 3, '2017-03-04', '10:00'),
(927, 'ENG113', 'X', 'L1T1', '405 AB', 15, '2017-03-04', '10:00'),
(928, 'ENG113', 'X', 'L1T1', '406 AB', 20, '2017-03-04', '10:00'),
(929, 'ENG113', 'X', 'L1T1', '501 AB', 7, '2017-03-04', '10:00'),
(930, 'CSE221', 'A', 'L2T2', '101 DT5', 21, '2017-03-04', '10:00'),
(931, 'CSE221', 'A', 'L2T2', '102 DT5', 19, '2017-03-04', '10:00'),
(932, 'CSE221', 'B', 'L2T2', '102 DT5', 1, '2017-03-04', '10:00'),
(933, 'CSE221', 'B', 'L2T2', '107 DT5', 24, '2017-03-04', '10:00'),
(934, 'CSE221', 'B', 'L2T2', '108 DT5', 4, '2017-03-04', '10:00'),
(935, 'CSE221', 'C', 'L2T2', '108 DT5', 16, '2017-03-04', '10:00'),
(936, 'CSE221', 'C', 'L2T2', '303 DT5', 21, '2017-03-04', '10:00'),
(937, 'CSE221', 'C', 'L2T2', '304 DT5', 8, '2017-03-04', '10:00'),
(938, 'CSE221', 'D', 'L2T2', '304 DT5', 16, '2017-03-04', '10:00'),
(939, 'CSE221', 'D', 'L2T2', '801 DT5', 20, '2017-03-04', '10:00'),
(940, 'CSE221', 'E', 'L2T2', '801 DT5', 1, '2017-03-04', '10:00'),
(941, 'CSE221', 'E', 'L2T2', '802 DT5', 18, '2017-03-04', '10:00'),
(942, 'CSE221', 'E', 'L2T2', '803 DT5', 17, '2017-03-04', '10:00'),
(943, 'CSE221', 'F', 'L2T2', '803 DT5', 4, '2017-03-04', '10:00'),
(944, 'CSE221', 'F', 'L2T2', '804 DT5', 24, '2017-03-04', '10:00'),
(945, 'CSE221', 'F', 'L2T2', '805 DT5', 12, '2017-03-04', '10:00'),
(946, 'CSE331', 'A', 'L3T3', '101 DT5', 28, '2017-03-04', '12:30'),
(947, 'CSE331', 'A', 'L3T3', '102 DT5', 4, '2017-03-04', '12:30'),
(948, 'CSE331', 'B', 'L3T3', '102 DT5', 24, '2017-03-04', '12:30'),
(949, 'CSE331', 'B', 'L3T3', '105 DT5', 10, '2017-03-04', '12:30'),
(950, 'CSE331', 'C', 'L3T3', '105 DT5', 26, '2017-03-04', '12:30'),
(951, 'CSE331', 'C', 'L3T3', '106 DT5', 10, '2017-03-04', '12:30'),
(952, 'CSE331', 'D', 'L3T3', '106 DT5', 34, '2017-03-04', '12:30'),
(953, 'CSE331', 'D', 'L3T3', '107 DT5', 8, '2017-03-04', '12:30'),
(954, 'CSE331', 'E', 'L3T3', '107 DT5', 16, '2017-03-04', '12:30'),
(955, 'CSE331', 'E', 'L3T3', '108 DT5', 20, '2017-03-04', '12:30'),
(956, 'CSE331', 'E', 'L3T3', '113 DT5', 5, '2017-03-04', '12:30'),
(957, 'CSE331', 'F', 'L3T3', '113 DT5', 23, '2017-03-04', '12:30'),
(958, 'CSE331', 'F', 'L3T3', '115 DT5', 17, '2017-03-04', '12:30'),
(959, 'CSE331', 'G', 'L3T3', '115 DT5', 32, '2017-03-04', '12:30'),
(960, 'CSE331', 'G', 'L3T3', '303 DT5', 12, '2017-03-04', '12:30'),
(961, 'CSE331', 'H', 'L3T3', '303 DT5', 13, '2017-03-04', '12:30'),
(962, 'CSE331', 'H', 'L3T3', '304 DT5', 24, '2017-03-04', '12:30'),
(963, 'CSE331', 'H', 'L3T3', '801 DT5', 6, '2017-03-04', '12:30'),
(964, 'CSE331', 'I', 'L3T3', '801 DT5', 20, '2017-03-04', '12:30'),
(965, 'CSE331', 'I', 'L3T3', '802 DT5', 16, '2017-03-04', '12:30'),
(966, 'CSE331', 'J', 'L3T3', '802 DT5', 2, '2017-03-04', '12:30'),
(967, 'CSE331', 'J', 'L3T3', '803 DT5', 28, '2017-03-04', '12:30'),
(968, 'CSE331', 'J', 'L3T3', '804 DT5', 9, '2017-03-04', '12:30'),
(969, 'CSE331', 'K', 'L3T3', '804 DT5', 22, '2017-03-04', '12:30'),
(970, 'CSE331', 'K', 'L3T3', '805 DT5', 10, '2017-03-04', '12:30'),
(971, 'CSE331', 'L', 'L3T3', '805 DT5', 18, '2017-03-04', '12:30'),
(972, 'CSE331', 'L', 'L3T3', '806 DT5', 18, '2017-03-04', '12:30'),
(973, 'CSE322', 'A', 'L3T2', '101 DT5', 21, '2017-03-04', '12:30'),
(974, 'CSE322', 'A', 'L3T2', '102 DT5', 13, '2017-03-04', '12:30'),
(975, 'CSE322', 'B', 'L3T2', '102 DT5', 7, '2017-03-04', '12:30'),
(976, 'CSE322', 'B', 'L3T2', '107 DT5', 24, '2017-03-04', '12:30'),
(977, 'CSE322', 'B', 'L3T2', '108 DT5', 6, '2017-03-04', '12:30'),
(978, 'CSE322', 'C', 'L3T2', '108 DT5', 14, '2017-03-04', '12:30'),
(979, 'CSE322', 'C', 'L3T2', '303 DT5', 21, '2017-03-04', '12:30'),
(980, 'CSE322', 'C', 'L3T2', '304 DT5', 11, '2017-03-04', '12:30'),
(981, 'CSE322', 'D', 'L3T2', '304 DT5', 13, '2017-03-04', '12:30'),
(982, 'CSE322', 'D', 'L3T2', '801 DT5', 21, '2017-03-04', '12:30'),
(983, 'CSE322', 'D', 'L3T2', '802 DT5', 3, '2017-03-04', '12:30'),
(984, 'CSE322', 'E', 'L3T2', '802 DT5', 15, '2017-03-04', '12:30'),
(985, 'CSE322', 'E', 'L3T2', '803 DT5', 21, '2017-03-04', '12:30'),
(986, 'CSE322', 'E', 'L3T2', '804 DT5', 4, '2017-03-04', '12:30'),
(987, 'CSE322', 'F', 'L3T2', '804 DT5', 20, '2017-03-04', '12:30'),
(988, 'CSE322', 'F', 'L3T2', '805 DT5', 17, '2017-03-04', '12:30'),
(989, 'CSE313', 'A', 'L3T1', '101 DT5', 28, '2017-03-04', '15:00'),
(990, 'CSE313', 'A', 'L3T1', '102 DT5', 12, '2017-03-04', '15:00'),
(991, 'CSE313', 'B', 'L3T1', '102 DT5', 16, '2017-03-04', '15:00'),
(992, 'CSE313', 'B', 'L3T1', '105 DT5', 20, '2017-03-04', '15:00'),
(993, 'CSE313', 'C', 'L3T1', '105 DT5', 16, '2017-03-04', '15:00'),
(994, 'CSE313', 'C', 'L3T1', '106 DT5', 25, '2017-03-04', '15:00'),
(995, 'CSE313', 'D', 'L3T1', '106 DT5', 19, '2017-03-04', '15:00'),
(996, 'CSE313', 'D', 'L3T1', '107 DT5', 24, '2017-03-04', '15:00'),
(997, 'CSE313', 'D', 'L3T1', '108 DT5', 3, '2017-03-04', '15:00'),
(998, 'CSE313', 'E', 'L3T1', '108 DT5', 17, '2017-03-04', '15:00'),
(999, 'CSE313', 'E', 'L3T1', '113 DT5', 27, '2017-03-04', '15:00'),
(1000, 'CSE313', 'F', 'L3T1', '113 DT5', 1, '2017-03-04', '15:00'),
(1001, 'CSE313', 'F', 'L3T1', '115 DT5', 36, '2017-03-04', '15:00'),
(1002, 'CSE313', 'G', 'L3T1', '115 DT5', 13, '2017-03-04', '15:00'),
(1003, 'CSE313', 'G', 'L3T1', '303 DT5', 25, '2017-03-04', '15:00'),
(1004, 'CSE313', 'G', 'L3T1', '304 DT5', 3, '2017-03-04', '15:00'),
(1005, 'CSE313', 'H', 'L3T1', '304 DT5', 21, '2017-03-04', '15:00'),
(1006, 'CSE313', 'H', 'L3T1', '801 DT5', 23, '2017-03-04', '15:00'),
(1007, 'CSE313', 'I', 'L3T1', '801 DT5', 3, '2017-03-04', '15:00'),
(1008, 'CSE313', 'I', 'L3T1', '802 DT5', 18, '2017-03-04', '15:00'),
(1009, 'CSE313', 'I', 'L3T1', '803 DT5', 18, '2017-03-04', '15:00'),
(1010, 'CSE313', 'J', 'L3T1', '803 DT5', 10, '2017-03-04', '15:00'),
(1011, 'CSE313', 'J', 'L3T1', '804 DT5', 29, '2017-03-04', '15:00'),
(1012, 'CSE313', 'K', 'L3T1', '804 DT5', 2, '2017-03-04', '15:00'),
(1013, 'CSE313', 'K', 'L3T1', '805 DT5', 28, '2017-03-04', '15:00'),
(1014, 'CSE313', 'K', 'L3T1', '806 DT5', 3, '2017-03-04', '15:00'),
(1015, 'CSE313', 'L', 'L3T1', '806 DT5', 24, '2017-03-04', '15:00'),
(1016, 'CSE313', 'L', 'L3T1', '807 DT5', 13, '2017-03-04', '15:00'),
(1017, 'CSE313', 'M', 'L3T1', '807 DT5', 15, '2017-03-04', '15:00'),
(1018, 'CSE313', 'M', 'L3T1', '808 DT5', 14, '2017-03-04', '15:00'),
(1019, 'CSE313', 'N', 'L3T1', '808 DT5', 14, '2017-03-04', '15:00'),
(1020, 'CSE313', 'N', 'L3T1', '901 DT5', 23, '2017-03-04', '15:00'),
(1021, 'CSE313', 'N', 'L3T1', '902 DT5', 4, '2017-03-04', '15:00'),
(1022, 'CSE122', 'A', 'L1T2', '101 DT5', 21, '2017-03-04', '15:00'),
(1023, 'CSE122', 'A', 'L1T2', '102 DT5', 20, '2017-03-04', '15:00'),
(1024, 'CSE122', 'A', 'L1T2', '107 DT5', 5, '2017-03-04', '15:00'),
(1025, 'CSE122', 'B', 'L1T2', '107 DT5', 19, '2017-03-04', '15:00'),
(1026, 'CSE122', 'B', 'L1T2', '108 DT5', 20, '2017-03-04', '15:00'),
(1027, 'CSE122', 'B', 'L1T2', '303 DT5', 7, '2017-03-04', '15:00'),
(1028, 'CSE122', 'C', 'L1T2', '303 DT5', 14, '2017-03-04', '15:00'),
(1029, 'CSE122', 'C', 'L1T2', '304 DT5', 24, '2017-03-04', '15:00'),
(1030, 'CSE122', 'C', 'L1T2', '801 DT5', 5, '2017-03-04', '15:00'),
(1031, 'CSE122', 'D', 'L1T2', '801 DT5', 16, '2017-03-04', '15:00'),
(1032, 'CSE122', 'D', 'L1T2', '802 DT5', 18, '2017-03-04', '15:00'),
(1033, 'CSE122', 'D', 'L1T2', '803 DT5', 12, '2017-03-04', '15:00'),
(1034, 'CSE122', 'E', 'L1T2', '803 DT5', 9, '2017-03-04', '15:00'),
(1035, 'CSE122', 'E', 'L1T2', '804 DT5', 24, '2017-03-04', '15:00'),
(1036, 'CSE122', 'E', 'L1T2', '805 DT5', 8, '2017-03-04', '15:00'),
(1101, 'MGT414', 'EVE-A', '25', '601 CSEB', 22, '2017-03-06', '18:00'),
(1102, 'MGT414', 'EVE-A', '25', '901 CSEB', 15, '2017-03-06', '18:00'),
(1103, 'MGT414', 'EVE-B', '25', '901 CSEB', 4, '2017-03-06', '18:00'),
(1104, 'MGT414', 'EVE-B', '25', '902 CSEB', 20, '2017-03-06', '18:00'),
(1105, 'MGT414', 'EVE-B', '25', '105 DT5', 16, '2017-03-06', '18:00'),
(1106, 'CSE231', 'EVE-A', '28', '601 CSEB', 18, '2017-03-06', '18:00'),
(1107, 'CSE231', 'EVE-A', '28', '901 CSEB', 16, '2017-03-06', '18:00'),
(1108, 'CSE231', 'EVE-A', '28', '902 CSEB', 19, '2017-03-06', '18:00'),
(1109, 'ENG111', 'NFE-B', '162', '105 DT5', 18, '2017-03-06', '18:00'),
(1110, 'ENG111', 'NFE-B', '162', '106 DT5', 22, '2017-03-06', '18:00'),
(1111, 'ENG111', 'NFE-B', '162', '107 DT5', 11, '2017-03-06', '18:00'),
(1112, 'NFE122', 'NFE-A', '172', '106 DT5', 22, '2017-03-06', '18:00'),
(1113, 'NFE122', 'NFE-A', '172', '107 DT5', 24, '2017-03-06', '18:00'),
(1114, 'NFE122', 'NFE-A', '172', '108 DT5', 5, '2017-03-06', '18:00'),
(1115, 'CSE432', 'EVE-A', '23', '107 DT5', 8, '2017-03-06', '18:00'),
(1116, 'CSE432', 'EVE-A', '23', '108 DT5', 20, '2017-03-06', '18:00'),
(1117, 'CSE432', 'EVE-A', '23', '113 DT5', 13, '2017-03-06', '18:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_exam_info`
--

CREATE TABLE IF NOT EXISTS `tb_exam_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `slot_a_start_time` varchar(100) NOT NULL,
  `slot_b_start_time` varchar(100) NOT NULL,
  `slot_c_start_time` varchar(100) NOT NULL,
  `slot_d_start_time` varchar(100) NOT NULL,
  `slot_a_end_time` varchar(100) NOT NULL,
  `slot_b_end_time` varchar(100) NOT NULL,
  `slot_c_end_time` varchar(100) NOT NULL,
  `slot_d_end_time` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_exam_info`
--

INSERT INTO `tb_exam_info` (`id`, `name`, `semester`, `slot_a_start_time`, `slot_b_start_time`, `slot_c_start_time`, `slot_d_start_time`, `slot_a_end_time`, `slot_b_end_time`, `slot_c_end_time`, `slot_d_end_time`) VALUES
(1, 'Midterm', 'Spring-2017', '10:00', '12:30', '15:00', '18:00', '11:30', '14:00', '16:30', '19:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'user', '1234', 'Admin', 'gofran0123@gmail.com'),
(2, 'r', 'g', 'r', 'r@r');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rooms`
--

CREATE TABLE IF NOT EXISTS `tb_rooms` (
  `r_id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `col_1` int(100) NOT NULL,
  `col_2` int(100) NOT NULL,
  `col_3` int(100) NOT NULL,
  `col_4` int(100) NOT NULL,
  `col_5` int(100) NOT NULL,
  `col_6` int(100) NOT NULL,
  `col_7` int(100) NOT NULL,
  `col_8` int(100) NOT NULL,
  `col_9` int(100) NOT NULL,
  `building_no` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rooms`
--

INSERT INTO `tb_rooms` (`r_id`, `room_no`, `col_1`, `col_2`, `col_3`, `col_4`, `col_5`, `col_6`, `col_7`, `col_8`, `col_9`, `building_no`) VALUES
(7, '102 CSEB', 12, 12, 12, 12, 12, 12, 0, 0, 0, 'CSEB'),
(9, '601 CSEB', 2, 3, 3, 3, 6, 6, 6, 6, 5, 'CSEB'),
(10, '602 CSEB', 7, 7, 7, 5, 3, 4, 4, 3, 0, 'CSEB'),
(11, '701 CSEB', 2, 4, 4, 4, 6, 6, 6, 6, 0, 'CSEB'),
(12, '702 CSEB', 6, 7, 7, 5, 3, 4, 4, 3, 0, 'CSEB'),
(13, '801 CSEB', 3, 3, 3, 6, 6, 6, 6, 5, 0, 'CSEB'),
(14, '802 CSEB', 4, 7, 7, 7, 3, 4, 4, 3, 0, 'CSEB'),
(15, '901 CSEB', 3, 5, 5, 5, 5, 3, 3, 3, 3, 'CSEB'),
(16, '902 CSEB', 6, 7, 7, 5, 3, 4, 4, 3, 0, 'CSEB'),
(17, '903 CSEB', 6, 6, 10, 10, 10, 10, 10, 0, 0, 'CSEB'),
(18, '101 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0, 'DT5'),
(19, '102 DT5', 8, 10, 10, 10, 10, 0, 0, 0, 0, 'DT5'),
(20, '105 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'DT5'),
(21, '106 DT5', 7, 7, 7, 7, 8, 8, 0, 0, 0, 'DT5'),
(22, '107 DT5', 8, 8, 8, 8, 8, 8, 0, 0, 0, 'DT5'),
(23, '108 DT5', 10, 10, 10, 10, 0, 0, 0, 0, 0, 'DT5'),
(24, '113 DT5', 9, 7, 8, 4, 0, 0, 0, 0, 0, 'DT5'),
(25, '115 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0, 'DT5'),
(27, '303 DT5', 5, 7, 7, 7, 7, 7, 6, 0, 0, 'DT5'),
(28, '304 DT5', 6, 6, 6, 6, 6, 6, 6, 6, 0, 'DT5'),
(29, '801 DT5', 5, 5, 5, 8, 8, 8, 8, 0, 0, 'DT5'),
(30, '802 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'DT5'),
(31, '803 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0, 'DT5'),
(32, '804 DT5', 7, 8, 8, 8, 8, 8, 8, 0, 0, 'DT5'),
(33, '805 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0, 'DT5'),
(34, '806 DT5', 9, 9, 9, 9, 9, 5, 0, 0, 0, 'DT5'),
(35, '807 DT5', 7, 7, 7, 7, 7, 7, 7, 4, 0, 'DT5'),
(36, '808 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0, 'DT5'),
(37, '901 DT5', 4, 7, 7, 7, 7, 7, 5, 0, 0, 'DT5'),
(38, '902 DT5', 4, 6, 6, 6, 6, 6, 0, 0, 0, 'DT5'),
(39, '201 MC', 7, 7, 7, 7, 7, 0, 0, 0, 0, 'MC'),
(40, '301 AB', 5, 6, 6, 6, 6, 5, 0, 0, 0, 'AB'),
(41, '304 AB', 4, 5, 5, 5, 5, 5, 0, 0, 0, 'AB'),
(42, '306 AB', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'AB'),
(43, '401 AB', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'AB'),
(44, '404 AB', 4, 5, 5, 5, 5, 5, 0, 0, 0, 'AB'),
(45, '405 AB', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'AB'),
(46, '406 AB', 5, 5, 5, 5, 5, 5, 5, 0, 0, 'AB'),
(47, '501 AB', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'AB'),
(48, '502 AB', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'AB'),
(49, '504 AB', 8, 7, 8, 8, 8, 8, 0, 0, 0, 'AB'),
(50, '601 AB', 6, 6, 6, 6, 6, 6, 0, 0, 0, 'AB'),
(51, '604 AB', 8, 8, 8, 8, 8, 8, 0, 0, 0, 'AB'),
(52, '605 AB', 4, 5, 5, 5, 5, 5, 0, 0, 0, 'AB'),
(53, '101 CSEB', 11, 11, 11, 11, 11, 11, 0, 0, 0, 'CSEB'),
(54, '402 MC', 7, 7, 7, 7, 0, 0, 0, 0, 0, 'MC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_column_status`
--

CREATE TABLE IF NOT EXISTS `tb_room_column_status` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL DEFAULT '0',
  `c2` int(100) NOT NULL DEFAULT '0',
  `c3` int(100) NOT NULL DEFAULT '0',
  `c4` int(100) NOT NULL DEFAULT '0',
  `c5` int(100) NOT NULL DEFAULT '0',
  `c6` int(100) NOT NULL DEFAULT '0',
  `c7` int(100) NOT NULL DEFAULT '0',
  `c8` int(100) NOT NULL DEFAULT '0',
  `c9` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=538 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room_column_status`
--

INSERT INTO `tb_room_column_status` (`id`, `date`, `time`, `room_no`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(414, '2017-03-04', '18:00', '101 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(415, '2017-03-04', '18:00', '102 DT5', 8, 10, 10, 10, 10, 0, 0, 0, 0),
(416, '2017-03-04', '18:00', '105 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0),
(417, '2017-03-04', '18:00', '106 DT5', 7, 7, 6, 7, 8, 8, 0, 0, 0),
(418, '2017-03-04', '18:00', '107 DT5', 8, 8, 8, 8, 3, 8, 0, 0, 0),
(419, '2017-03-04', '18:00', '108 DT5', 10, 10, 10, 10, 0, 0, 0, 0, 0),
(420, '2017-03-04', '18:00', '113 DT5', 9, 7, 8, 4, 0, 0, 0, 0, 0),
(421, '2017-03-04', '18:00', '115 DT5', 2, 7, 7, 7, 7, 5, 7, 0, 0),
(422, '2017-03-04', '18:00', '303 DT5', 5, 0, 7, 0, 7, 0, 6, 0, 0),
(423, '2017-03-04', '18:00', '304 DT5', 6, 0, 6, 0, 2, 0, 0, 0, 0),
(424, '2017-03-04', '10:00', '101 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(425, '2017-03-04', '10:00', '102 DT5', 8, 10, 10, 10, 10, 0, 0, 0, 0),
(426, '2017-03-04', '10:00', '105 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0),
(427, '2017-03-04', '10:00', '106 DT5', 7, 7, 7, 7, 8, 8, 0, 0, 0),
(428, '2017-03-04', '10:00', '107 DT5', 8, 8, 8, 8, 8, 8, 0, 0, 0),
(429, '2017-03-04', '10:00', '108 DT5', 10, 10, 10, 10, 0, 0, 0, 0, 0),
(430, '2017-03-04', '10:00', '113 DT5', 9, 7, 8, 4, 0, 0, 0, 0, 0),
(431, '2017-03-04', '10:00', '115 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(432, '2017-03-04', '10:00', '303 DT5', 5, 7, 7, 7, 7, 7, 6, 0, 0),
(433, '2017-03-04', '10:00', '304 DT5', 6, 6, 6, 6, 6, 6, 6, 6, 0),
(434, '2017-03-04', '10:00', '801 DT5', 5, 5, 5, 8, 8, 8, 8, 0, 0),
(435, '2017-03-04', '10:00', '802 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0),
(436, '2017-03-04', '10:00', '803 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(437, '2017-03-04', '10:00', '804 DT5', 7, 8, 8, 8, 8, 8, 8, 0, 0),
(438, '2017-03-04', '10:00', '805 DT5', 7, 7, 7, 5, 7, 0, 7, 0, 0),
(439, '2017-03-04', '10:00', '806 DT5', 9, 0, 9, 0, 9, 0, 0, 0, 0),
(440, '2017-03-04', '10:00', '807 DT5', 7, 0, 7, 0, 7, 0, 7, 0, 0),
(441, '2017-03-04', '10:00', '808 DT5', 7, 0, 7, 0, 7, 0, 7, 0, 0),
(442, '2017-03-04', '10:00', '901 DT5', 4, 0, 7, 0, 7, 0, 5, 0, 0),
(443, '2017-03-04', '10:00', '902 DT5', 4, 0, 6, 0, 6, 0, 0, 0, 0),
(444, '2017-03-04', '10:00', '101 CSEB', 11, 11, 11, 11, 11, 11, 0, 0, 0),
(445, '2017-03-04', '10:00', '102 CSEB', 12, 12, 12, 12, 12, 12, 0, 0, 0),
(446, '2017-03-04', '10:00', '601 CSEB', 2, 0, 3, 0, 6, 0, 6, 0, 5),
(447, '2017-03-04', '10:00', '602 CSEB', 7, 0, 7, 0, 3, 0, 4, 0, 0),
(448, '2017-03-04', '10:00', '701 CSEB', 2, 0, 4, 0, 6, 0, 6, 0, 0),
(449, '2017-03-04', '10:00', '702 CSEB', 6, 0, 7, 0, 3, 0, 4, 0, 0),
(450, '2017-03-04', '10:00', '801 CSEB', 3, 0, 3, 0, 6, 0, 6, 0, 0),
(451, '2017-03-04', '10:00', '802 CSEB', 4, 0, 7, 0, 3, 0, 4, 0, 0),
(452, '2017-03-04', '10:00', '901 CSEB', 3, 0, 5, 0, 5, 0, 3, 0, 3),
(453, '2017-03-04', '10:00', '902 CSEB', 6, 0, 7, 0, 3, 0, 4, 0, 0),
(454, '2017-03-04', '10:00', '903 CSEB', 6, 0, 10, 0, 10, 0, 10, 0, 0),
(455, '2017-03-04', '10:00', '301 AB', 5, 0, 6, 0, 6, 0, 0, 0, 0),
(456, '2017-03-04', '10:00', '304 AB', 4, 0, 5, 0, 5, 0, 0, 0, 0),
(457, '2017-03-04', '10:00', '306 AB', 6, 0, 6, 0, 6, 0, 0, 0, 0),
(458, '2017-03-04', '10:00', '401 AB', 6, 0, 6, 0, 6, 0, 0, 0, 0),
(459, '2017-03-04', '10:00', '404 AB', 4, 0, 5, 0, 5, 0, 0, 0, 0),
(460, '2017-03-04', '10:00', '405 AB', 6, 0, 6, 0, 6, 0, 0, 0, 0),
(461, '2017-03-04', '10:00', '406 AB', 5, 0, 5, 0, 5, 0, 5, 0, 0),
(462, '2017-03-04', '10:00', '501 AB', 6, 0, 1, 0, 0, 0, 0, 0, 0),
(463, '2017-03-04', '12:30', '101 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(464, '2017-03-04', '12:30', '102 DT5', 8, 10, 10, 10, 10, 0, 0, 0, 0),
(465, '2017-03-04', '12:30', '105 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0),
(466, '2017-03-04', '12:30', '106 DT5', 7, 7, 7, 7, 8, 8, 0, 0, 0),
(467, '2017-03-04', '12:30', '107 DT5', 8, 8, 8, 8, 8, 8, 0, 0, 0),
(468, '2017-03-04', '12:30', '108 DT5', 10, 10, 10, 10, 0, 0, 0, 0, 0),
(469, '2017-03-04', '12:30', '113 DT5', 9, 7, 8, 4, 0, 0, 0, 0, 0),
(470, '2017-03-04', '12:30', '115 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(471, '2017-03-04', '12:30', '303 DT5', 5, 7, 7, 7, 7, 7, 6, 0, 0),
(472, '2017-03-04', '12:30', '304 DT5', 6, 6, 6, 6, 6, 6, 6, 6, 0),
(473, '2017-03-04', '12:30', '801 DT5', 5, 5, 5, 8, 8, 8, 8, 0, 0),
(474, '2017-03-04', '12:30', '802 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0),
(475, '2017-03-04', '12:30', '803 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(476, '2017-03-04', '12:30', '804 DT5', 7, 8, 8, 8, 8, 8, 8, 0, 0),
(477, '2017-03-04', '12:30', '805 DT5', 7, 7, 7, 7, 7, 3, 7, 0, 0),
(478, '2017-03-04', '12:30', '806 DT5', 9, 0, 9, 0, 0, 0, 0, 0, 0),
(479, '2017-03-04', '15:00', '101 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(480, '2017-03-04', '15:00', '102 DT5', 8, 10, 10, 10, 10, 0, 0, 0, 0),
(481, '2017-03-04', '15:00', '105 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0),
(482, '2017-03-04', '15:00', '106 DT5', 7, 7, 7, 7, 8, 8, 0, 0, 0),
(483, '2017-03-04', '15:00', '107 DT5', 8, 8, 8, 8, 8, 8, 0, 0, 0),
(484, '2017-03-04', '15:00', '108 DT5', 10, 10, 10, 10, 0, 0, 0, 0, 0),
(485, '2017-03-04', '15:00', '113 DT5', 9, 7, 8, 4, 0, 0, 0, 0, 0),
(486, '2017-03-04', '15:00', '115 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(487, '2017-03-04', '15:00', '303 DT5', 5, 7, 7, 7, 7, 7, 6, 0, 0),
(488, '2017-03-04', '15:00', '304 DT5', 6, 6, 6, 6, 6, 6, 6, 6, 0),
(489, '2017-03-04', '15:00', '801 DT5', 5, 5, 5, 8, 8, 8, 8, 0, 0),
(490, '2017-03-04', '15:00', '802 DT5', 6, 6, 6, 6, 6, 6, 0, 0, 0),
(491, '2017-03-04', '15:00', '803 DT5', 7, 7, 7, 7, 7, 7, 7, 0, 0),
(492, '2017-03-04', '15:00', '804 DT5', 7, 8, 8, 8, 8, 8, 8, 0, 0),
(493, '2017-03-04', '15:00', '805 DT5', 7, 7, 7, 1, 7, 0, 7, 0, 0),
(494, '2017-03-04', '15:00', '806 DT5', 9, 0, 9, 0, 9, 0, 0, 0, 0),
(495, '2017-03-04', '15:00', '807 DT5', 7, 0, 7, 0, 7, 0, 7, 0, 0),
(496, '2017-03-04', '15:00', '808 DT5', 7, 0, 7, 0, 7, 0, 7, 0, 0),
(497, '2017-03-04', '15:00', '901 DT5', 4, 0, 7, 0, 7, 0, 5, 0, 0),
(498, '2017-03-04', '15:00', '902 DT5', 4, 0, 0, 0, 0, 0, 0, 0, 0),
(530, '2017-03-06', '18:00', '601 CSEB', 2, 3, 3, 3, 6, 6, 6, 6, 5),
(531, '2017-03-06', '18:00', '901 CSEB', 3, 5, 5, 5, 5, 3, 3, 3, 3),
(532, '2017-03-06', '18:00', '902 CSEB', 6, 7, 7, 5, 3, 4, 4, 3, 0),
(533, '2017-03-06', '18:00', '105 DT5', 6, 6, 6, 6, 4, 6, 0, 0, 0),
(534, '2017-03-06', '18:00', '106 DT5', 7, 7, 7, 7, 8, 8, 0, 0, 0),
(535, '2017-03-06', '18:00', '107 DT5', 8, 8, 3, 8, 8, 8, 0, 0, 0),
(536, '2017-03-06', '18:00', '108 DT5', 5, 10, 0, 10, 0, 0, 0, 0, 0),
(537, '2017-03-06', '18:00', '113 DT5', 9, 0, 4, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_column_str`
--

CREATE TABLE IF NOT EXISTS `tb_room_column_str` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `c8` varchar(100) NOT NULL,
  `c9` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=538 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room_column_str`
--

INSERT INTO `tb_room_column_str` (`id`, `room_no`, `date`, `time`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(414, '101 DT5', '2017-03-04', '18:00', '7', '7', '7', '7', '7', '7', '7', '', ''),
(415, '102 DT5', '2017-03-04', '18:00', '8', '10', '3+7', '10', '10', '', '', '', ''),
(416, '105 DT5', '2017-03-04', '18:00', '6', '6', '6', '5+1', '6', '6', '', '', ''),
(417, '106 DT5', '2017-03-04', '18:00', '7', '7', '6', '1+6', '8', '8', '', '', ''),
(418, '107 DT5', '2017-03-04', '18:00', '8', '8', '8', '8', '3', '8', '', '', ''),
(419, '108 DT5', '2017-03-04', '18:00', '10', '10', '3+7', '10', '', '', '', '', ''),
(420, '113 DT5', '2017-03-04', '18:00', '9', '7', '8', '4', '', '', '', '', ''),
(421, '115 DT5', '2017-03-04', '18:00', '2', '7', '7', '7', '7', '5', '7', '', ''),
(422, '303 DT5', '2017-03-04', '18:00', '5', '', '7', '', '7', '', '6', '', ''),
(423, '304 DT5', '2017-03-04', '18:00', '6', '', '6', '', '2', '', '', '', ''),
(424, '101 DT5', '2017-03-04', '10:00', '7', '7', '7', '7', '7', '7', '7', '', ''),
(425, '102 DT5', '2017-03-04', '10:00', '8', '10', '8+2', '9+1', '10', '', '', '', ''),
(426, '105 DT5', '2017-03-04', '10:00', '6', '6', '6', '6', '5+1', '6', '', '', ''),
(427, '106 DT5', '2017-03-04', '10:00', '7', '7', '7', '7', '5+3', '8', '', '', ''),
(428, '107 DT5', '2017-03-04', '10:00', '8', '8', '8', '8', '8', '8', '', '', ''),
(429, '108 DT5', '2017-03-04', '10:00', '8+2', '4+6', '10', '10', '', '', '', '', ''),
(430, '113 DT5', '2017-03-04', '10:00', '9', '7', '8', '4', '', '', '', '', ''),
(431, '115 DT5', '2017-03-04', '10:00', '1+6', '7', '7', '7', '7', '7', '1+6', '', ''),
(432, '303 DT5', '2017-03-04', '10:00', '5', '7', '7', '7', '7', '7', '6', '', ''),
(433, '304 DT5', '2017-03-04', '10:00', '6', '6', '4+2', '2+4', '6', '6', '6', '6', ''),
(434, '801 DT5', '2017-03-04', '10:00', '5', '5', '5', '8', '8', '7+1', '8', '', ''),
(435, '802 DT5', '2017-03-04', '10:00', '2+4', '6', '6', '6', '6', '6', '', '', ''),
(436, '803 DT5', '2017-03-04', '10:00', '7', '7', '7', '7', '7', '3+4', '5+2', '', ''),
(437, '804 DT5', '2017-03-04', '10:00', '7', '8', '8', '8', '8', '8', '8', '', ''),
(438, '805 DT5', '2017-03-04', '10:00', '7', '7', '2+5', '5', '7', '', '7', '', ''),
(439, '806 DT5', '2017-03-04', '10:00', '9', '', '9', '', '6+3', '', '', '', ''),
(440, '807 DT5', '2017-03-04', '10:00', '7', '', '7', '', '7', '', '7', '', ''),
(441, '808 DT5', '2017-03-04', '10:00', '7', '', '5+2', '', '7', '', '7', '', ''),
(442, '901 DT5', '2017-03-04', '10:00', '4', '', '7', '', '7', '', '5', '', ''),
(443, '902 DT5', '2017-03-04', '10:00', '4', '', '6', '', '6', '', '', '', ''),
(444, '101 CSEB', '2017-03-04', '10:00', '11', '11', '9+2', '11', '11', '11', '', '', ''),
(445, '102 CSEB', '2017-03-04', '10:00', '9+3', '12', '12', '12', '3+9', '12', '', '', ''),
(446, '601 CSEB', '2017-03-04', '10:00', '2', '', '3', '', '6', '', '6', '', '4+1'),
(447, '602 CSEB', '2017-03-04', '10:00', '7', '', '7', '', '3', '', '4', '', ''),
(448, '701 CSEB', '2017-03-04', '10:00', '2', '', '4', '', '6', '', '6', '', ''),
(449, '702 CSEB', '2017-03-04', '10:00', '3+3', '', '7', '', '3', '', '4', '', ''),
(450, '801 CSEB', '2017-03-04', '10:00', '3', '', '3', '', '6', '', '6', '', ''),
(451, '802 CSEB', '2017-03-04', '10:00', '4', '', '4+3', '', '3', '', '4', '', ''),
(452, '901 CSEB', '2017-03-04', '10:00', '3', '', '5', '', '5', '', '3', '', '3'),
(453, '902 CSEB', '2017-03-04', '10:00', '6', '', '7', '', '2+1', '', '4', '', ''),
(454, '903 CSEB', '2017-03-04', '10:00', '6', '', '10', '', '10', '', '10', '', ''),
(455, '301 AB', '2017-03-04', '10:00', '1+4', '', '6', '', '6', '', '', '', ''),
(456, '304 AB', '2017-03-04', '10:00', '4', '', '5', '', '5', '', '', '', ''),
(457, '306 AB', '2017-03-04', '10:00', '6', '', '5+1', '', '6', '', '', '', ''),
(458, '401 AB', '2017-03-04', '10:00', '6', '', '6', '', '6', '', '', '', ''),
(459, '404 AB', '2017-03-04', '10:00', '4', '', '5', '', '5', '', '', '', ''),
(460, '405 AB', '2017-03-04', '10:00', '3+3', '', '6', '', '6', '', '', '', ''),
(461, '406 AB', '2017-03-04', '10:00', '5', '', '5', '', '5', '', '5', '', ''),
(462, '501 AB', '2017-03-04', '10:00', '6', '', '1', '', '', '', '', '', ''),
(463, '101 DT5', '2017-03-04', '12:30', '7', '7', '7', '7', '7', '7', '7', '', ''),
(464, '102 DT5', '2017-03-04', '12:30', '4+4', '10', '10', '3+7', '10', '', '', '', ''),
(465, '105 DT5', '2017-03-04', '12:30', '6', '4+2', '6', '6', '6', '6', '', '', ''),
(466, '106 DT5', '2017-03-04', '12:30', '7', '3+4', '7', '7', '8', '8', '', '', ''),
(467, '107 DT5', '2017-03-04', '12:30', '8', '8', '8', '8', '8', '8', '', '', ''),
(468, '108 DT5', '2017-03-04', '12:30', '10', '6+4', '10', '10', '', '', '', '', ''),
(469, '113 DT5', '2017-03-04', '12:30', '5+4', '7', '8', '4', '', '', '', '', ''),
(470, '115 DT5', '2017-03-04', '12:30', '7', '7', '3+4', '7', '7', '7', '7', '', ''),
(471, '303 DT5', '2017-03-04', '12:30', '5', '7', '7', '7', '7', '7', '6', '', ''),
(472, '304 DT5', '2017-03-04', '12:30', '6', '6', '6', '5+1', '6', '6', '6', '6', ''),
(473, '801 DT5', '2017-03-04', '12:30', '5', '5', '1+4', '8', '8', '8', '8', '', ''),
(474, '802 DT5', '2017-03-04', '12:30', '6', '3+3', '6', '6', '4+2', '6', '', '', ''),
(475, '803 DT5', '2017-03-04', '12:30', '7', '7', '7', '7', '7', '7', '7', '', ''),
(476, '804 DT5', '2017-03-04', '12:30', '7', '4+4', '2+6', '8', '8', '8', '8', '', ''),
(477, '805 DT5', '2017-03-04', '12:30', '7', '7', '3+4', '7', '7', '3', '7', '', ''),
(478, '806 DT5', '2017-03-04', '12:30', '9', '', '9', '', '', '', '', '', ''),
(479, '101 DT5', '2017-03-04', '15:00', '7', '7', '7', '7', '7', '7', '7', '', ''),
(480, '102 DT5', '2017-03-04', '15:00', '8', '10', '4+6', '10', '10', '', '', '', ''),
(481, '105 DT5', '2017-03-04', '15:00', '6', '6', '6', '2+4', '6', '6', '', '', ''),
(482, '106 DT5', '2017-03-04', '15:00', '7', '7', '7', '4+3', '8', '8', '', '', ''),
(483, '107 DT5', '2017-03-04', '15:00', '8', '5+3', '8', '8', '8', '8', '', '', ''),
(484, '108 DT5', '2017-03-04', '15:00', '3+7', '10', '10', '10', '', '', '', '', ''),
(485, '113 DT5', '2017-03-04', '15:00', '9', '7', '8', '3+1', '', '', '', '', ''),
(486, '115 DT5', '2017-03-04', '15:00', '7', '7', '7', '7', '7', '1+6', '7', '', ''),
(487, '303 DT5', '2017-03-04', '15:00', '5', '7', '7', '7', '7', '7', '6', '', ''),
(488, '304 DT5', '2017-03-04', '15:00', '3+3', '6', '6', '6', '6', '6', '6', '6', ''),
(489, '801 DT5', '2017-03-04', '15:00', '5', '5', '5', '8', '8', '8', '5+3', '', ''),
(490, '802 DT5', '2017-03-04', '15:00', '6', '6', '6', '6', '6', '6', '', '', ''),
(491, '803 DT5', '2017-03-04', '15:00', '7', '7', '7', '5+2', '4+3', '7', '7', '', ''),
(492, '804 DT5', '2017-03-04', '15:00', '7', '8', '8', '8', '8', '8', '6+2', '', ''),
(493, '805 DT5', '2017-03-04', '15:00', '7', '7', '7', '1', '7', '', '7', '', ''),
(494, '806 DT5', '2017-03-04', '15:00', '3+6', '', '9', '', '9', '', '', '', ''),
(495, '807 DT5', '2017-03-04', '15:00', '7', '', '6+1', '', '7', '', '7', '', ''),
(496, '808 DT5', '2017-03-04', '15:00', '7', '', '7', '', '7', '', '7', '', ''),
(497, '901 DT5', '2017-03-04', '15:00', '4', '', '7', '', '7', '', '5', '', ''),
(498, '902 DT5', '2017-03-04', '15:00', '4', '', '', '', '', '', '', '', ''),
(530, '601 CSEB', '2017-03-06', '18:00', '2', '3', '3', '3', '6', '6', '6', '6', '5'),
(531, '901 CSEB', '2017-03-06', '18:00', '3', '5', '5', '5', '5', '3', '2+1', '3', '3'),
(532, '902 CSEB', '2017-03-06', '18:00', '6', '7', '7', '5', '3', '4', '4', '3', ''),
(533, '105 DT5', '2017-03-06', '18:00', '6', '6', '6', '6', '4', '6', '', '', ''),
(534, '106 DT5', '2017-03-06', '18:00', '7', '7', '7', '7', '8', '8', '', '', ''),
(535, '107 DT5', '2017-03-06', '18:00', '8', '8', '3', '8', '8', '8', '', '', ''),
(536, '108 DT5', '2017-03-06', '18:00', '5', '10', '', '10', '', '', '', '', ''),
(537, '113 DT5', '2017-03-06', '18:00', '9', '', '4', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_course_name`
--

CREATE TABLE IF NOT EXISTS `tb_room_course_name` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `c8` varchar(100) NOT NULL,
  `c9` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=538 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room_course_name`
--

INSERT INTO `tb_room_course_name` (`id`, `room_no`, `date`, `time`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(414, '101 DT5', '2017-03-04', '18:00', 'Computer Architecture and Organization', 'Peripherals and Interfacing', 'Computer Architecture and Organization', 'Peripherals and Interfacing', 'Computer Architecture and Organization', 'Peripherals and Interfacing', 'Computer Architecture and Organization', '', ''),
(415, '102 DT5', '2017-03-04', '18:00', 'Computer Architecture and Organization', 'Peripherals and Interfacing', 'Computer Architecture and Organization', 'Peripherals and Interfacing', 'Computer Architecture and Organization', '', '', '', ''),
(416, '105 DT5', '2017-03-04', '18:00', 'Computer Architecture and Organization', 'Computer Architecture and Organization', 'Computer Architecture and Organization', 'Computer Architecture and Organization', 'Computer Architecture and Organization', 'Computer Architecture and Organization', '', '', ''),
(417, '106 DT5', '2017-03-04', '18:00', 'Computer Architecture and Organization', 'Computer Architecture and Organization', 'Computer Architecture and Organization', 'Peripherals and Interfacing', 'Peripherals and Interfacing', 'Peripherals and Interfacing', '', '', ''),
(418, '107 DT5', '2017-03-04', '18:00', 'Peripherals and Interfacing', 'E-Commerce and Web Applications', 'Peripherals and Interfacing', 'E-Commerce and Web Applications', 'Peripherals and Interfacing', 'E-Commerce and Web Applications', '', '', ''),
(419, '108 DT5', '2017-03-04', '18:00', 'E-Commerce and Web Applications', 'Data Communication', 'E-Commerce and Web Applications', 'Data Communication', '', '', '', '', ''),
(420, '113 DT5', '2017-03-04', '18:00', 'E-Commerce and Web Applications', 'E-Commerce and Web Applications', 'E-Commerce and Web Applications', 'E-Commerce and Web Applications', '', '', '', '', ''),
(421, '115 DT5', '2017-03-04', '18:00', 'E-Commerce and Web Applications', 'Data Communication', 'Data Communication', 'Data Communication', 'Data Communication', 'Data Communication', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', ''),
(422, '303 DT5', '2017-03-04', '18:00', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', ''),
(423, '304 DT5', '2017-03-04', '18:00', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', 'Mathematics - II: Linear Algebra and Coordinate Geometry', '', '', '', ''),
(424, '101 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', '', ''),
(425, '102 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', '', '', '', ''),
(426, '105 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', '', '', ''),
(427, '106 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', '', '', ''),
(428, '107 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', '', '', ''),
(429, '108 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', '', '', '', '', ''),
(430, '113 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', '', '', '', '', ''),
(431, '115 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', '', ''),
(432, '303 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', '', ''),
(433, '304 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', ''),
(434, '801 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', '', ''),
(435, '802 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', '', '', ''),
(436, '803 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', '', ''),
(437, '804 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', '', ''),
(438, '805 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', 'Algorithms', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(439, '806 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(440, '807 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(441, '808 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(442, '901 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(443, '902 DT5', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(444, '101 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', '', '', ''),
(445, '102 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', 'Basic Functional English and English Spoken', '', '', ''),
(446, '601 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken'),
(447, '602 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(448, '701 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(449, '702 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(450, '801 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(451, '802 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(452, '901 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken'),
(453, '902 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(454, '903 CSEB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(455, '301 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(456, '304 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(457, '306 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(458, '401 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(459, '404 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(460, '405 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', ''),
(461, '406 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', ''),
(462, '501 AB', '2017-03-04', '10:00', 'Basic Functional English and English Spoken', '', 'Basic Functional English and English Spoken', '', '', '', '', '', ''),
(463, '101 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', '', ''),
(464, '102 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', '', '', '', ''),
(465, '105 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', '', '', ''),
(466, '106 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', '', '', ''),
(467, '107 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', '', '', ''),
(468, '108 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', '', '', '', '', ''),
(469, '113 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', '', '', '', '', ''),
(470, '115 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', 'Compiler Design', '', ''),
(471, '303 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', '', ''),
(472, '304 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', ''),
(473, '801 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', '', ''),
(474, '802 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', '', '', ''),
(475, '803 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', '', ''),
(476, '804 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', '', ''),
(477, '805 DT5', '2017-03-04', '12:30', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', 'Computer Architecture and Organization', 'Compiler Design', '', ''),
(478, '806 DT5', '2017-03-04', '12:30', 'Compiler Design', '', 'Compiler Design', '', '', '', '', '', ''),
(479, '101 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', '', ''),
(480, '102 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', '', '', '', ''),
(481, '105 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', '', '', ''),
(482, '106 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', '', '', ''),
(483, '107 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', '', '', ''),
(484, '108 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', '', '', '', '', ''),
(485, '113 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', '', '', '', '', ''),
(486, '115 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', 'Computer Networks', '', ''),
(487, '303 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', '', ''),
(488, '304 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', ''),
(489, '801 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', '', ''),
(490, '802 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', '', '', ''),
(491, '803 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', '', ''),
(492, '804 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', '', ''),
(493, '805 DT5', '2017-03-04', '15:00', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', 'Programming and Problem Solving', 'Computer Networks', '', 'Computer Networks', '', ''),
(494, '806 DT5', '2017-03-04', '15:00', 'Computer Networks', '', 'Computer Networks', '', 'Computer Networks', '', '', '', ''),
(495, '807 DT5', '2017-03-04', '15:00', 'Computer Networks', '', 'Computer Networks', '', 'Computer Networks', '', 'Computer Networks', '', ''),
(496, '808 DT5', '2017-03-04', '15:00', 'Computer Networks', '', 'Computer Networks', '', 'Computer Networks', '', 'Computer Networks', '', ''),
(497, '901 DT5', '2017-03-04', '15:00', 'Computer Networks', '', 'Computer Networks', '', 'Computer Networks', '', 'Computer Networks', '', ''),
(498, '902 DT5', '2017-03-04', '15:00', 'Computer Networks', '', '', '', '', '', '', '', ''),
(530, '601 CSEB', '2017-03-06', '18:00', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n'),
(531, '901 CSEB', '2017-03-06', '18:00', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n'),
(532, '902 CSEB', '2017-03-06', '18:00', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', 'Industrial Management\r\n', 'Microprocessor and Assembly Language\r\n', ''),
(533, '105 DT5', '2017-03-06', '18:00', 'Industrial Management\r\n', 'English Language I', 'Industrial Management\r\n', 'English Language I', 'Industrial Management\r\n', 'English Language I', '', '', ''),
(534, '106 DT5', '2017-03-06', '18:00', 'English Language I', 'Food and Nutration', 'English Language I', 'Food and Nutration', 'English Language I', 'Food and Nutration', '', '', ''),
(535, '107 DT5', '2017-03-06', '18:00', 'English Language I', 'Food and Nutration', 'English Language I', 'Food and Nutration', 'Computer and Network Security\r\n', 'Food and Nutration', '', '', ''),
(536, '108 DT5', '2017-03-06', '18:00', 'Food and Nutration', 'Computer and Network Security\r\n', '', 'Computer and Network Security\r\n', '', '', '', '', ''),
(537, '113 DT5', '2017-03-06', '18:00', 'Computer and Network Security\r\n', '', 'Computer and Network Security\r\n', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_course_status`
--

CREATE TABLE IF NOT EXISTS `tb_room_course_status` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `c8` varchar(100) NOT NULL,
  `c9` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=538 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room_course_status`
--

INSERT INTO `tb_room_course_status` (`id`, `room_no`, `date`, `time`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(414, '101 DT5', '2017-03-04', '18:00', 'CSE322', 'CSE333', 'CSE322', 'CSE333', 'CSE322', 'CSE333', 'CSE322', '', ''),
(415, '102 DT5', '2017-03-04', '18:00', 'CSE322', 'CSE333', 'CSE322', 'CSE333', 'CSE322', '', '', '', ''),
(416, '105 DT5', '2017-03-04', '18:00', 'CSE322', 'CSE322', 'CSE322', 'CSE322', 'CSE322', 'CSE322', '', '', ''),
(417, '106 DT5', '2017-03-04', '18:00', 'CSE322', 'CSE322', 'CSE322', 'CSE333', 'CSE333', 'CSE333', '', '', ''),
(418, '107 DT5', '2017-03-04', '18:00', 'CSE333', 'CSE431', 'CSE333', 'CSE431', 'CSE333', 'CSE431', '', '', ''),
(419, '108 DT5', '2017-03-04', '18:00', 'CSE431', 'CSE233', 'CSE431', 'CSE233', '', '', '', '', ''),
(420, '113 DT5', '2017-03-04', '18:00', 'CSE431', 'CSE431', 'CSE431', 'CSE431', '', '', '', '', ''),
(421, '115 DT5', '2017-03-04', '18:00', 'CSE431', 'CSE233', 'CSE233', 'CSE233', 'CSE233', 'CSE233', 'MAT121', '', ''),
(422, '303 DT5', '2017-03-04', '18:00', 'MAT121', '', 'MAT121', '', 'MAT121', '', 'MAT121', '', ''),
(423, '304 DT5', '2017-03-04', '18:00', 'MAT121', '', 'MAT121', '', 'MAT121', '', '', '', ''),
(424, '101 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', '', ''),
(425, '102 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', '', '', '', ''),
(426, '105 DT5', '2017-03-04', '10:00', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', '', '', ''),
(427, '106 DT5', '2017-03-04', '10:00', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', '', '', ''),
(428, '107 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', '', '', ''),
(429, '108 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', '', '', '', '', ''),
(430, '113 DT5', '2017-03-04', '10:00', 'ENG113', 'ENG113', 'ENG113', 'ENG113', '', '', '', '', ''),
(431, '115 DT5', '2017-03-04', '10:00', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', '', ''),
(432, '303 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', '', ''),
(433, '304 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', ''),
(434, '801 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', '', ''),
(435, '802 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', '', '', ''),
(436, '803 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', '', ''),
(437, '804 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', '', ''),
(438, '805 DT5', '2017-03-04', '10:00', 'ENG113', 'CSE221', 'ENG113', 'CSE221', 'ENG113', '', 'ENG113', '', ''),
(439, '806 DT5', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(440, '807 DT5', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(441, '808 DT5', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(442, '901 DT5', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(443, '902 DT5', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(444, '101 CSEB', '2017-03-04', '10:00', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', '', '', ''),
(445, '102 CSEB', '2017-03-04', '10:00', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', 'ENG113', '', '', ''),
(446, '601 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113'),
(447, '602 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(448, '701 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(449, '702 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(450, '801 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(451, '802 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(452, '901 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113'),
(453, '902 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(454, '903 CSEB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(455, '301 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(456, '304 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(457, '306 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(458, '401 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(459, '404 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(460, '405 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', '', '', ''),
(461, '406 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', 'ENG113', '', 'ENG113', '', ''),
(462, '501 AB', '2017-03-04', '10:00', 'ENG113', '', 'ENG113', '', '', '', '', '', ''),
(463, '101 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', '', ''),
(464, '102 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', '', '', '', ''),
(465, '105 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE331', 'CSE331', 'CSE331', 'CSE331', 'CSE331', '', '', ''),
(466, '106 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE331', 'CSE331', 'CSE331', 'CSE331', 'CSE331', '', '', ''),
(467, '107 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', '', '', ''),
(468, '108 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', '', '', '', '', ''),
(469, '113 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE331', 'CSE331', 'CSE331', '', '', '', '', ''),
(470, '115 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE331', 'CSE331', 'CSE331', 'CSE331', 'CSE331', 'CSE331', '', ''),
(471, '303 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', '', ''),
(472, '304 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', ''),
(473, '801 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', '', ''),
(474, '802 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', '', '', ''),
(475, '803 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', '', ''),
(476, '804 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', '', ''),
(477, '805 DT5', '2017-03-04', '12:30', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', 'CSE322', 'CSE331', '', ''),
(478, '806 DT5', '2017-03-04', '12:30', 'CSE331', '', 'CSE331', '', '', '', '', '', ''),
(479, '101 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', '', ''),
(480, '102 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', '', '', '', ''),
(481, '105 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE313', 'CSE313', 'CSE313', 'CSE313', 'CSE313', '', '', ''),
(482, '106 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE313', 'CSE313', 'CSE313', 'CSE313', 'CSE313', '', '', ''),
(483, '107 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', '', '', ''),
(484, '108 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', '', '', '', '', ''),
(485, '113 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE313', 'CSE313', 'CSE313', '', '', '', '', ''),
(486, '115 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE313', 'CSE313', 'CSE313', 'CSE313', 'CSE313', 'CSE313', '', ''),
(487, '303 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', '', ''),
(488, '304 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', ''),
(489, '801 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', '', ''),
(490, '802 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', '', '', ''),
(491, '803 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', '', ''),
(492, '804 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', '', ''),
(493, '805 DT5', '2017-03-04', '15:00', 'CSE313', 'CSE122', 'CSE313', 'CSE122', 'CSE313', '', 'CSE313', '', ''),
(494, '806 DT5', '2017-03-04', '15:00', 'CSE313', '', 'CSE313', '', 'CSE313', '', '', '', ''),
(495, '807 DT5', '2017-03-04', '15:00', 'CSE313', '', 'CSE313', '', 'CSE313', '', 'CSE313', '', ''),
(496, '808 DT5', '2017-03-04', '15:00', 'CSE313', '', 'CSE313', '', 'CSE313', '', 'CSE313', '', ''),
(497, '901 DT5', '2017-03-04', '15:00', 'CSE313', '', 'CSE313', '', 'CSE313', '', 'CSE313', '', ''),
(498, '902 DT5', '2017-03-04', '15:00', 'CSE313', '', '', '', '', '', '', '', ''),
(530, '601 CSEB', '2017-03-06', '18:00', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414'),
(531, '901 CSEB', '2017-03-06', '18:00', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414'),
(532, '902 CSEB', '2017-03-06', '18:00', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414', 'CSE231', 'MGT414', 'CSE231', ''),
(533, '105 DT5', '2017-03-06', '18:00', 'MGT414', 'ENG111', 'MGT414', 'ENG111', 'MGT414', 'ENG111', '', '', ''),
(534, '106 DT5', '2017-03-06', '18:00', 'ENG111', 'NFE122', 'ENG111', 'NFE122', 'ENG111', 'NFE122', '', '', ''),
(535, '107 DT5', '2017-03-06', '18:00', 'ENG111', 'NFE122', 'ENG111', 'NFE122', 'CSE432', 'NFE122', '', '', ''),
(536, '108 DT5', '2017-03-06', '18:00', 'NFE122', 'CSE432', '', 'CSE432', '', '', '', '', ''),
(537, '113 DT5', '2017-03-06', '18:00', 'CSE432', '', 'CSE432', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_section_status`
--

CREATE TABLE IF NOT EXISTS `tb_room_section_status` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `c8` varchar(100) NOT NULL,
  `c9` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=538 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room_section_status`
--

INSERT INTO `tb_room_section_status` (`id`, `date`, `time`, `room_no`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(414, '2017-03-04', '18:00', '101 DT5', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', '', ''),
(415, '2017-03-04', '18:00', '102 DT5', 'EVE-A', 'EVE-A', 'EVE-A+EVE-B', 'EVE-A', 'EVE-B', '', '', '', ''),
(416, '2017-03-04', '18:00', '105 DT5', 'EVE-B', 'EVE-B', 'EVE-B', 'EVE-B+EVE-C', 'EVE-C', 'EVE-C', '', '', ''),
(417, '2017-03-04', '18:00', '106 DT5', 'EVE-C', 'EVE-C', 'EVE-C', 'EVE-A+EVE-B', 'EVE-B', 'EVE-B', '', '', ''),
(418, '2017-03-04', '18:00', '107 DT5', 'EVE-B', 'EVE-A', 'EVE-B', 'EVE-A', 'EVE-B', 'EVE-A', '', '', ''),
(419, '2017-03-04', '18:00', '108 DT5', 'EVE-A', 'EVE-A', 'EVE-A+EVE-B', 'EVE-A', '', '', '', '', ''),
(420, '2017-03-04', '18:00', '113 DT5', 'EVE-B', 'EVE-B', 'EVE-B', 'EVE-B', '', '', '', '', ''),
(421, '2017-03-04', '18:00', '115 DT5', 'EVE-B', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', '', ''),
(422, '2017-03-04', '18:00', '303 DT5', 'EVE-A', '', 'EVE-A', '', 'EVE-A', '', 'EVE-A', '', ''),
(423, '2017-03-04', '18:00', '304 DT5', 'EVE-A', '', 'EVE-A', '', 'EVE-A', '', '', '', ''),
(424, '2017-03-04', '10:00', '101 DT5', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', ''),
(425, '2017-03-04', '10:00', '102 DT5', 'A', 'A', 'A+B', 'A+B', 'B', '', '', '', ''),
(426, '2017-03-04', '10:00', '105 DT5', 'B', 'B', 'B', 'B', 'B+C', 'C', '', '', ''),
(427, '2017-03-04', '10:00', '106 DT5', 'C', 'C', 'C', 'C', 'C+D', 'D', '', '', ''),
(428, '2017-03-04', '10:00', '107 DT5', 'D', 'B', 'D', 'B', 'D', 'B', '', '', ''),
(429, '2017-03-04', '10:00', '108 DT5', 'D+E', 'B+C', 'E', 'C', '', '', '', '', ''),
(430, '2017-03-04', '10:00', '113 DT5', 'E', 'E', 'E', 'E', '', '', '', '', ''),
(431, '2017-03-04', '10:00', '115 DT5', 'E+F', 'F', 'F', 'F', 'F', 'F', 'F+G', '', ''),
(432, '2017-03-04', '10:00', '303 DT5', 'G', 'C', 'G', 'C', 'G', 'C', 'G', '', ''),
(433, '2017-03-04', '10:00', '304 DT5', 'G', 'C', 'G+H', 'C+D', 'H', 'D', 'H', 'D', ''),
(434, '2017-03-04', '10:00', '801 DT5', 'H', 'D', 'H', 'D', 'H', 'D+E', 'H', '', ''),
(435, '2017-03-04', '10:00', '802 DT5', 'H+I', 'E', 'I', 'E', 'I', 'E', '', '', ''),
(436, '2017-03-04', '10:00', '803 DT5', 'I', 'E', 'I', 'E', 'I', 'E+F', 'I+J', '', ''),
(437, '2017-03-04', '10:00', '804 DT5', 'J', 'F', 'J', 'F', 'J', 'F', 'J', '', ''),
(438, '2017-03-04', '10:00', '805 DT5', 'J', 'F', 'J+K', 'F', 'K', '', 'K', '', ''),
(439, '2017-03-04', '10:00', '806 DT5', 'K', '', 'K', '', 'K+L', '', '', '', ''),
(440, '2017-03-04', '10:00', '807 DT5', 'L', '', 'L', '', 'L', '', 'L', '', ''),
(441, '2017-03-04', '10:00', '808 DT5', 'L', '', 'L+M', '', 'M', '', 'M', '', ''),
(442, '2017-03-04', '10:00', '901 DT5', 'M', '', 'M', '', 'M', '', 'M', '', ''),
(443, '2017-03-04', '10:00', '902 DT5', 'M', '', 'N', '', 'N', '', '', '', ''),
(444, '2017-03-04', '10:00', '101 CSEB', 'N', 'N', 'N+O', 'O', 'O', 'O', '', '', ''),
(445, '2017-03-04', '10:00', '102 CSEB', 'O+P', 'P', 'P', 'P', 'P+Q', 'Q', '', '', ''),
(446, '2017-03-04', '10:00', '601 CSEB', 'Q', '', 'Q', '', 'Q', '', 'Q', '', 'Q+R'),
(447, '2017-03-04', '10:00', '602 CSEB', 'R', '', 'R', '', 'R', '', 'R', '', ''),
(448, '2017-03-04', '10:00', '701 CSEB', 'R', '', 'R', '', 'R', '', 'R', '', ''),
(449, '2017-03-04', '10:00', '702 CSEB', 'R+S', '', 'S', '', 'S', '', 'S', '', ''),
(450, '2017-03-04', '10:00', '801 CSEB', 'S', '', 'S', '', 'S', '', 'S', '', ''),
(451, '2017-03-04', '10:00', '802 CSEB', 'S', '', 'S+T', '', 'T', '', 'T', '', ''),
(452, '2017-03-04', '10:00', '901 CSEB', 'T', '', 'T', '', 'T', '', 'T', '', 'T'),
(453, '2017-03-04', '10:00', '902 CSEB', 'T', '', 'T', '', 'T+U', '', 'U', '', ''),
(454, '2017-03-04', '10:00', '903 CSEB', 'U', '', 'U', '', 'U', '', 'U', '', ''),
(455, '2017-03-04', '10:00', '301 AB', 'U+V', '', 'V', '', 'V', '', '', '', ''),
(456, '2017-03-04', '10:00', '304 AB', 'V', '', 'V', '', 'V', '', '', '', ''),
(457, '2017-03-04', '10:00', '306 AB', 'V', '', 'V+W', '', 'W', '', '', '', ''),
(458, '2017-03-04', '10:00', '401 AB', 'W', '', 'W', '', 'W', '', '', '', ''),
(459, '2017-03-04', '10:00', '404 AB', 'W', '', 'W', '', 'W', '', '', '', ''),
(460, '2017-03-04', '10:00', '405 AB', 'W+X', '', 'X', '', 'X', '', '', '', ''),
(461, '2017-03-04', '10:00', '406 AB', 'X', '', 'X', '', 'X', '', 'X', '', ''),
(462, '2017-03-04', '10:00', '501 AB', 'X', '', 'X', '', '', '', '', '', ''),
(463, '2017-03-04', '12:30', '101 DT5', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', ''),
(464, '2017-03-04', '12:30', '102 DT5', 'A+B', 'A', 'B', 'A+B', 'B', '', '', '', ''),
(465, '2017-03-04', '12:30', '105 DT5', 'B', 'B+C', 'C', 'C', 'C', 'C', '', '', ''),
(466, '2017-03-04', '12:30', '106 DT5', 'C', 'C+D', 'D', 'D', 'D', 'D', '', '', ''),
(467, '2017-03-04', '12:30', '107 DT5', 'D', 'B', 'E', 'B', 'E', 'B', '', '', ''),
(468, '2017-03-04', '12:30', '108 DT5', 'E', 'B+C', 'E', 'C', '', '', '', '', ''),
(469, '2017-03-04', '12:30', '113 DT5', 'E+F', 'F', 'F', 'F', '', '', '', '', ''),
(470, '2017-03-04', '12:30', '115 DT5', 'F', 'F', 'F+G', 'G', 'G', 'G', 'G', '', ''),
(471, '2017-03-04', '12:30', '303 DT5', 'G', 'C', 'G', 'C', 'H', 'C', 'H', '', ''),
(472, '2017-03-04', '12:30', '304 DT5', 'H', 'C', 'H', 'C+D', 'H', 'D', 'H', 'D', ''),
(473, '2017-03-04', '12:30', '801 DT5', 'H', 'D', 'H+I', 'D', 'I', 'D', 'I', '', ''),
(474, '2017-03-04', '12:30', '802 DT5', 'I', 'D+E', 'I', 'E', 'I+J', 'E', '', '', ''),
(475, '2017-03-04', '12:30', '803 DT5', 'J', 'E', 'J', 'E', 'J', 'E', 'J', '', ''),
(476, '2017-03-04', '12:30', '804 DT5', 'J', 'E+F', 'J+K', 'F', 'K', 'F', 'K', '', ''),
(477, '2017-03-04', '12:30', '805 DT5', 'K', 'F', 'K+L', 'F', 'L', 'F', 'L', '', ''),
(478, '2017-03-04', '12:30', '806 DT5', 'L', '', 'L', '', '', '', '', '', ''),
(479, '2017-03-04', '15:00', '101 DT5', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', ''),
(480, '2017-03-04', '15:00', '102 DT5', 'A', 'A', 'A+B', 'A', 'B', '', '', '', ''),
(481, '2017-03-04', '15:00', '105 DT5', 'B', 'B', 'B', 'B+C', 'C', 'C', '', '', ''),
(482, '2017-03-04', '15:00', '106 DT5', 'C', 'C', 'C', 'C+D', 'D', 'D', '', '', ''),
(483, '2017-03-04', '15:00', '107 DT5', 'D', 'A+B', 'D', 'B', 'D', 'B', '', '', ''),
(484, '2017-03-04', '15:00', '108 DT5', 'D+E', 'B', 'E', 'B', '', '', '', '', ''),
(485, '2017-03-04', '15:00', '113 DT5', 'E', 'E', 'E', 'E+F', '', '', '', '', ''),
(486, '2017-03-04', '15:00', '115 DT5', 'F', 'F', 'F', 'F', 'F', 'F+G', 'G', '', ''),
(487, '2017-03-04', '15:00', '303 DT5', 'G', 'B', 'G', 'C', 'G', 'C', 'G', '', ''),
(488, '2017-03-04', '15:00', '304 DT5', 'G+H', 'C', 'H', 'C', 'H', 'C', 'H', 'C', ''),
(489, '2017-03-04', '15:00', '801 DT5', 'H', 'C', 'H', 'D', 'H', 'D', 'H+I', '', ''),
(490, '2017-03-04', '15:00', '802 DT5', 'I', 'D', 'I', 'D', 'I', 'D', '', '', ''),
(491, '2017-03-04', '15:00', '803 DT5', 'I', 'D', 'I', 'D+E', 'I+J', 'E', 'J', '', ''),
(492, '2017-03-04', '15:00', '804 DT5', 'J', 'E', 'J', 'E', 'J', 'E', 'J+K', '', ''),
(493, '2017-03-04', '15:00', '805 DT5', 'K', 'E', 'K', 'E', 'K', '', 'K', '', ''),
(494, '2017-03-04', '15:00', '806 DT5', 'K+L', '', 'L', '', 'L', '', '', '', ''),
(495, '2017-03-04', '15:00', '807 DT5', 'L', '', 'L+M', '', 'M', '', 'M', '', ''),
(496, '2017-03-04', '15:00', '808 DT5', 'M', '', 'M', '', 'N', '', 'N', '', ''),
(497, '2017-03-04', '15:00', '901 DT5', 'N', '', 'N', '', 'N', '', 'N', '', ''),
(498, '2017-03-04', '15:00', '902 DT5', 'N', '', '', '', '', '', '', '', ''),
(530, '2017-03-06', '18:00', '601 CSEB', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A'),
(531, '2017-03-06', '18:00', '901 CSEB', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A', 'EVE-A+EVE-B', 'EVE-A', 'EVE-B'),
(532, '2017-03-06', '18:00', '902 CSEB', 'EVE-B', 'EVE-A', 'EVE-B', 'EVE-A', 'EVE-B', 'EVE-A', 'EVE-B', 'EVE-A', ''),
(533, '2017-03-06', '18:00', '105 DT5', 'EVE-B', 'NFE-B', 'EVE-B', 'NFE-B', 'EVE-B', 'NFE-B', '', '', ''),
(534, '2017-03-06', '18:00', '106 DT5', 'NFE-B', 'NFE-A', 'NFE-B', 'NFE-A', 'NFE-B', 'NFE-A', '', '', ''),
(535, '2017-03-06', '18:00', '107 DT5', 'NFE-B', 'NFE-A', 'NFE-B', 'NFE-A', 'EVE-A', 'NFE-A', '', '', ''),
(536, '2017-03-06', '18:00', '108 DT5', 'NFE-A', 'EVE-A', '', 'EVE-A', '', '', '', '', ''),
(537, '2017-03-06', '18:00', '113 DT5', 'EVE-A', '', 'EVE-A', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_status`
--

CREATE TABLE IF NOT EXISTS `tb_room_status` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_tech_name`
--

CREATE TABLE IF NOT EXISTS `tb_room_tech_name` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `c8` varchar(100) NOT NULL,
  `c9` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=538 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room_tech_name`
--

INSERT INTO `tb_room_tech_name` (`id`, `room_no`, `date`, `time`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(414, '101 DT5', '2017-03-04', '18:00', 'NJ', 'SKB', 'NJ', 'SKB', 'NJ', 'SKB', 'NJ', '', ''),
(415, '102 DT5', '2017-03-04', '18:00', 'NJ', 'SKB', 'NJ+GZI', 'SKB', 'GZI', '', '', '', ''),
(416, '105 DT5', '2017-03-04', '18:00', 'GZI', 'GZI', 'GZI', 'GZI', 'GZI', 'GZI', '', '', ''),
(417, '106 DT5', '2017-03-04', '18:00', 'GZI', 'GZI', 'GZI', 'SKB+MAAH', 'MAAH', 'MAAH', '', '', ''),
(418, '107 DT5', '2017-03-04', '18:00', 'MAAH', 'MTH', 'MAAH', 'MTH', 'MAAH', 'MTH', '', '', ''),
(419, '108 DT5', '2017-03-04', '18:00', 'MTH', 'CMKS', 'MTH', 'CMKS', '', '', '', '', ''),
(420, '113 DT5', '2017-03-04', '18:00', 'MTH', 'MTH', 'MTH', 'MTH', '', '', '', '', ''),
(421, '115 DT5', '2017-03-04', '18:00', 'MTH', 'CMKS', 'CMKS', 'CMKS', 'CMKS', 'CMKS', 'NR', '', ''),
(422, '303 DT5', '2017-03-04', '18:00', 'NR', '', 'NR', '', 'NR', '', 'NR', '', ''),
(423, '304 DT5', '2017-03-04', '18:00', 'NR', '', 'NR', '', 'NR', '', '', '', ''),
(424, '101 DT5', '2017-03-04', '10:00', 'IZP', 'MMR', 'IZP', 'MMR', 'IZP', 'MMR', 'IZP', '', ''),
(425, '102 DT5', '2017-03-04', '10:00', 'IZP', 'MMR', 'IZP+SA', 'MMR+SN', 'SA', '', '', '', ''),
(426, '105 DT5', '2017-03-04', '10:00', 'SA', 'SA', 'SA', 'SA', 'SA+IZP', 'IZP', '', '', ''),
(427, '106 DT5', '2017-03-04', '10:00', 'IZP', 'IZP', 'IZP', 'IZP', 'IZP', 'IZP', '', '', ''),
(428, '107 DT5', '2017-03-04', '10:00', 'IZP', 'SN', 'IZP', 'SN', 'IZP', 'SN', '', '', ''),
(429, '108 DT5', '2017-03-04', '10:00', 'IZP+SMK', 'SN+IF', 'SMK', 'IF', '', '', '', '', ''),
(430, '113 DT5', '2017-03-04', '10:00', 'SMK', 'SMK', 'SMK', 'SMK', '', '', '', '', ''),
(431, '115 DT5', '2017-03-04', '10:00', 'SMK+SZL', 'SZL', 'SZL', 'SZL', 'SZL', 'SZL', 'SZL', '', ''),
(432, '303 DT5', '2017-03-04', '10:00', 'SZL', 'IF', 'SZL', 'IF', 'SZL', 'IF', 'SZL', '', ''),
(433, '304 DT5', '2017-03-04', '10:00', 'SZL', 'IF', 'SZL', 'IF+MZB', 'SZL', 'MZB', 'SZL', 'MZB', ''),
(434, '801 DT5', '2017-03-04', '10:00', 'SZL', 'MZB', 'SZL', 'MZB', 'SZL', 'MZB+RAS', 'SZL', '', ''),
(435, '802 DT5', '2017-03-04', '10:00', 'SZL', 'RAS', 'SZL', 'RAS', 'SZL', 'RAS', '', '', ''),
(436, '803 DT5', '2017-03-04', '10:00', 'SZL', 'RAS', 'SZL', 'RAS', 'SZL', 'RAS', 'SZL+SA', '', ''),
(437, '804 DT5', '2017-03-04', '10:00', 'SA', 'RAS', 'SA', 'RAS', 'SA', 'RAS', 'SA', '', ''),
(438, '805 DT5', '2017-03-04', '10:00', 'SA', 'RAS', 'SA', 'RAS', 'SA', '', 'SA', '', ''),
(439, '806 DT5', '2017-03-04', '10:00', 'SA', '', 'SA', '', 'SA', '', '', '', ''),
(440, '807 DT5', '2017-03-04', '10:00', 'SA', '', 'SA', '', 'SA', '', 'SA', '', ''),
(441, '808 DT5', '2017-03-04', '10:00', 'SA', '', 'SA', '', 'SA', '', 'SA', '', ''),
(442, '901 DT5', '2017-03-04', '10:00', 'SA', '', 'SA', '', 'SA', '', 'SA', '', ''),
(443, '902 DT5', '2017-03-04', '10:00', 'SA', '', 'SZL', '', 'SZL', '', '', '', ''),
(444, '101 CSEB', '2017-03-04', '10:00', 'SZL', 'SZL', 'SZL+ASMHM', 'ASMHM', 'ASMHM', 'ASMHM', '', '', ''),
(445, '102 CSEB', '2017-03-04', '10:00', 'ASMHM+SMK', 'SMK', 'SMK', 'SMK', 'SMK+SA', 'SA', '', '', ''),
(446, '601 CSEB', '2017-03-04', '10:00', 'SA', '', 'SA', '', 'SA', '', 'SA', '', 'SA+MRU'),
(447, '602 CSEB', '2017-03-04', '10:00', 'MRU', '', 'MRU', '', 'MRU', '', 'MRU', '', ''),
(448, '701 CSEB', '2017-03-04', '10:00', 'MRU', '', 'MRU', '', 'MRU', '', 'MRU', '', ''),
(449, '702 CSEB', '2017-03-04', '10:00', 'MRU+ASMHM', '', 'ASMHM', '', 'ASMHM', '', 'ASMHM', '', ''),
(450, '801 CSEB', '2017-03-04', '10:00', 'ASMHM', '', 'ASMHM', '', 'ASMHM', '', 'ASMHM', '', ''),
(451, '802 CSEB', '2017-03-04', '10:00', 'ASMHM', '', 'ASMHM+MRU', '', 'MRU', '', 'MRU', '', ''),
(452, '901 CSEB', '2017-03-04', '10:00', 'MRU', '', 'MRU', '', 'MRU', '', 'MRU', '', 'MRU'),
(453, '902 CSEB', '2017-03-04', '10:00', 'MRU', '', 'MRU', '', 'MRU+ASMHM', '', 'ASMHM', '', ''),
(454, '903 CSEB', '2017-03-04', '10:00', 'ASMHM', '', 'ASMHM', '', 'ASMHM', '', 'ASMHM', '', ''),
(455, '301 AB', '2017-03-04', '10:00', 'ASMHM', '', 'ASMHM', '', 'ASMHM', '', '', '', ''),
(456, '304 AB', '2017-03-04', '10:00', 'ASMHM', '', 'ASMHM', '', 'ASMHM', '', '', '', ''),
(457, '306 AB', '2017-03-04', '10:00', 'ASMHM', '', 'ASMHM+IZP', '', 'IZP', '', '', '', ''),
(458, '401 AB', '2017-03-04', '10:00', 'IZP', '', 'IZP', '', 'IZP', '', '', '', ''),
(459, '404 AB', '2017-03-04', '10:00', 'IZP', '', 'IZP', '', 'IZP', '', '', '', ''),
(460, '405 AB', '2017-03-04', '10:00', 'IZP+MKA', '', 'MKA', '', 'MKA', '', '', '', ''),
(461, '406 AB', '2017-03-04', '10:00', 'MKA', '', 'MKA', '', 'MKA', '', 'MKA', '', ''),
(462, '501 AB', '2017-03-04', '10:00', 'MKA', '', 'MKA', '', '', '', '', '', ''),
(463, '101 DT5', '2017-03-04', '12:30', 'SAMM', 'MFH', 'SAMM', 'MFH', 'SAMM', 'MFH', 'SAMM', '', ''),
(464, '102 DT5', '2017-03-04', '12:30', 'SAMM', 'MFH', 'SAMM', 'MFH+MR', 'SAMM', '', '', '', ''),
(465, '105 DT5', '2017-03-04', '12:30', 'SAMM', 'SAMM+MRR', 'MRR', 'MRR', 'MRR', 'MRR', '', '', ''),
(466, '106 DT5', '2017-03-04', '12:30', 'MRR', 'MRR+TT', 'TT', 'TT', 'TT', 'TT', '', '', ''),
(467, '107 DT5', '2017-03-04', '12:30', 'TT', 'MR', 'CMKS', 'MR', 'CMKS', 'MR', '', '', ''),
(468, '108 DT5', '2017-03-04', '12:30', 'CMKS', 'MR', 'CMKS', 'MR', '', '', '', '', ''),
(469, '113 DT5', '2017-03-04', '12:30', 'CMKS+NS', 'NS', 'NS', 'NS', '', '', '', '', ''),
(470, '115 DT5', '2017-03-04', '12:30', 'NS', 'NS', 'NS+PP', 'PP', 'PP', 'PP', 'PP', '', ''),
(471, '303 DT5', '2017-03-04', '12:30', 'PP', 'MR', 'PP', 'MR', 'FI', 'MR', 'FI', '', ''),
(472, '304 DT5', '2017-03-04', '12:30', 'FI', 'MR', 'FI', 'MR+TA', 'FI', 'TA', 'FI', 'TA', ''),
(473, '801 DT5', '2017-03-04', '12:30', 'FI', 'TA', 'FI+NS', 'TA', 'NS', 'TA', 'NS', '', ''),
(474, '802 DT5', '2017-03-04', '12:30', 'NS', 'TA+RH', 'NS', 'RH', 'NS+SMTS', 'RH', '', '', ''),
(475, '803 DT5', '2017-03-04', '12:30', 'SMTS', 'RH', 'SMTS', 'RH', 'SMTS', 'RH', 'SMTS', '', ''),
(476, '804 DT5', '2017-03-04', '12:30', 'SMTS', 'RH', 'SMTS', 'RH', 'SMTS', 'RH', 'SMTS', '', ''),
(477, '805 DT5', '2017-03-04', '12:30', 'SMTS', 'RH', 'SMTS+RH', 'RH', 'RH', 'RH', 'RH', '', ''),
(478, '806 DT5', '2017-03-04', '12:30', 'RH', '', 'RH', '', '', '', '', '', ''),
(479, '101 DT5', '2017-03-04', '15:00', 'NN', 'MMR', 'NN', 'MMR', 'NN', 'MMR', 'NN', '', ''),
(480, '102 DT5', '2017-03-04', '15:00', 'NN', 'MMR', 'NN+TA', 'MMR', 'TA', '', '', '', ''),
(481, '105 DT5', '2017-03-04', '15:00', 'TA', 'TA', 'TA', 'TA+GZI', 'GZI', 'GZI', '', '', ''),
(482, '106 DT5', '2017-03-04', '15:00', 'GZI', 'GZI', 'GZI', 'GZI+FNN', 'FNN', 'FNN', '', '', ''),
(483, '107 DT5', '2017-03-04', '15:00', 'FNN', 'MMR+SRHN', 'FNN', 'SRHN', 'FNN', 'SRHN', '', '', ''),
(484, '108 DT5', '2017-03-04', '15:00', 'FNN', 'SRHN', 'FNN', 'SRHN', '', '', '', '', ''),
(485, '113 DT5', '2017-03-04', '15:00', 'FNN', 'FNN', 'FNN', 'FNN+SNP', '', '', '', '', ''),
(486, '115 DT5', '2017-03-04', '15:00', 'SNP', 'SNP', 'SNP', 'SNP', 'SNP', 'SNP+RTHT', 'RTHT', '', ''),
(487, '303 DT5', '2017-03-04', '15:00', 'RTHT', 'SRHN', 'RTHT', 'FTJ', 'RTHT', 'FTJ', 'RTHT', '', ''),
(488, '304 DT5', '2017-03-04', '15:00', 'RTHT+TA', 'FTJ', 'TA', 'FTJ', 'TA', 'FTJ', 'TA', 'FTJ', ''),
(489, '801 DT5', '2017-03-04', '15:00', 'TA', 'FTJ', 'TA', 'SN', 'TA', 'SN', 'TA+SNF', '', ''),
(490, '802 DT5', '2017-03-04', '15:00', 'SNF', 'SN', 'SNF', 'SN', 'SNF', 'SN', '', '', ''),
(491, '803 DT5', '2017-03-04', '15:00', 'SNF', 'SN', 'SNF', 'SN+AK', 'SNF+TC', 'AK', 'TC', '', ''),
(492, '804 DT5', '2017-03-04', '15:00', 'TC', 'AK', 'TC', 'AK', 'TC', 'AK', 'TC+MRH', '', ''),
(493, '805 DT5', '2017-03-04', '15:00', 'MRH', 'AK', 'MRH', 'AK', 'MRH', '', 'MRH', '', ''),
(494, '806 DT5', '2017-03-04', '15:00', 'MRH', '', 'MRH', '', 'MRH', '', '', '', ''),
(495, '807 DT5', '2017-03-04', '15:00', 'MRH', '', 'MRH+RTHT', '', 'RTHT', '', 'RTHT', '', ''),
(496, '808 DT5', '2017-03-04', '15:00', 'RTHT', '', 'RTHT', '', 'RAH', '', 'RAH', '', ''),
(497, '901 DT5', '2017-03-04', '15:00', 'RAH', '', 'RAH', '', 'RAH', '', 'RAH', '', ''),
(498, '902 DT5', '2017-03-04', '15:00', 'RAH', '', '', '', '', '', '', '', ''),
(530, '601 CSEB', '2017-03-06', '18:00', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n'),
(531, '901 CSEB', '2017-03-06', '18:00', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n'),
(532, '902 CSEB', '2017-03-06', '18:00', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', 'SA\r\n', 'MRA\r\n', ''),
(533, '105 DT5', '2017-03-06', '18:00', 'SA\r\n', 'NIT', 'SA\r\n', 'NIT', 'SA\r\n', 'NIT', '', '', ''),
(534, '106 DT5', '2017-03-06', '18:00', 'NIT', 'TIN', 'NIT', 'TIN', 'NIT', 'TIN', '', '', ''),
(535, '107 DT5', '2017-03-06', '18:00', 'NIT', 'TIN', 'NIT', 'TIN', 'MRB\r\n', 'TIN', '', '', ''),
(536, '108 DT5', '2017-03-06', '18:00', 'TIN', 'MRB\r\n', '', 'MRB\r\n', '', '', '', '', ''),
(537, '113 DT5', '2017-03-06', '18:00', 'MRB\r\n', '', 'MRB\r\n', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_routine`
--

CREATE TABLE IF NOT EXISTS `tb_routine` (
  `ID` int(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `batch_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `slot` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_routine`
--

INSERT INTO `tb_routine` (`ID`, `course_title`, `course_id`, `batch_no`, `date`, `start_time`, `end_time`, `slot`) VALUES
(7, 'E-Commerce And Web Application', 'CSE431', '25', '2017-03-04', '18:00', '19:30', 'D'),
(8, 'Computer Architecture and Organization', 'CSE322', '27', '2017-03-04', '18:00', '19:30', 'D'),
(9, 'Data Communication', 'CSE233', '28', '2017-03-04', '18:00', '19:30', 'D'),
(10, 'Mathematics-II:Complex Variable, Linear Algebra and Coordinate Geometry', 'MAT121', '31', '2017-03-04', '18:00', '19:30', 'D'),
(11, 'Peripherals And Interfacing', 'CSE333', '23', '2017-03-04', '18:00', '19:30', 'D'),
(12, 'Basic Functional English and English Spoken', 'ENG113', 'L1T1', '2017-03-04', '10:00', '11:30', 'A'),
(13, 'Algorithm ', 'CSE221', 'L2T2', '2017-03-04', '10:00', '11:30', 'A'),
(14, 'Computer Architecture and Organization', 'CSE322', 'L3T2', '2017-03-04', '12:30', '14:00', 'B'),
(15, 'Compiler Design', 'CSE331', 'L3T3', '2017-03-04', '12:30', '14:00', 'B'),
(17, 'Programming and Problem Solving', 'CSE122', 'L1T2', '2017-03-04', '15:00', '16:30', 'C'),
(18, 'Microprocessor and Assembly Language', 'CSE231', '28', '2017-03-06', '18:00', '19:30', 'D'),
(19, 'Computer Networks', 'CSE313', 'L3T1', '2017-03-04', '15:00', '16:30', 'C'),
(20, 'Computer and Network Security', 'CSE432', '23', '2017-03-06', '18:00', '19:30', 'D'),
(21, 'Industrial Management', 'MGT414', '25', '2017-03-06', '18:00', '19:30', 'D'),
(22, 'English Language I', 'ENG111', '162', '2017-03-06', '18:00', '19:30', 'D'),
(23, 'Food and Nutration', 'NFE122', '172', '2017-03-06', '18:00', '19:30', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sorting_num_of_student`
--

CREATE TABLE IF NOT EXISTS `tb_sorting_num_of_student` (
  `id` int(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `num_of_student` int(100) NOT NULL,
  `batch_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_block_course`
--
ALTER TABLE `tb_block_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_block_room`
--
ALTER TABLE `tb_block_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_building_priority`
--
ALTER TABLE `tb_building_priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_details_count`
--
ALTER TABLE `tb_details_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_exam_info`
--
ALTER TABLE `tb_exam_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rooms`
--
ALTER TABLE `tb_rooms`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tb_room_column_status`
--
ALTER TABLE `tb_room_column_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room_column_str`
--
ALTER TABLE `tb_room_column_str`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room_course_name`
--
ALTER TABLE `tb_room_course_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room_course_status`
--
ALTER TABLE `tb_room_course_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room_section_status`
--
ALTER TABLE `tb_room_section_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room_status`
--
ALTER TABLE `tb_room_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room_tech_name`
--
ALTER TABLE `tb_room_tech_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_routine`
--
ALTER TABLE `tb_routine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_sorting_num_of_student`
--
ALTER TABLE `tb_sorting_num_of_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_block_course`
--
ALTER TABLE `tb_block_course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `tb_block_room`
--
ALTER TABLE `tb_block_room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tb_building_priority`
--
ALTER TABLE `tb_building_priority`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT for table `tb_details_count`
--
ALTER TABLE `tb_details_count`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1118;
--
-- AUTO_INCREMENT for table `tb_exam_info`
--
ALTER TABLE `tb_exam_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_rooms`
--
ALTER TABLE `tb_rooms`
  MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tb_room_column_status`
--
ALTER TABLE `tb_room_column_status`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=538;
--
-- AUTO_INCREMENT for table `tb_room_column_str`
--
ALTER TABLE `tb_room_column_str`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=538;
--
-- AUTO_INCREMENT for table `tb_room_course_name`
--
ALTER TABLE `tb_room_course_name`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=538;
--
-- AUTO_INCREMENT for table `tb_room_course_status`
--
ALTER TABLE `tb_room_course_status`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=538;
--
-- AUTO_INCREMENT for table `tb_room_section_status`
--
ALTER TABLE `tb_room_section_status`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=538;
--
-- AUTO_INCREMENT for table `tb_room_status`
--
ALTER TABLE `tb_room_status`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_room_tech_name`
--
ALTER TABLE `tb_room_tech_name`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=538;
--
-- AUTO_INCREMENT for table `tb_routine`
--
ALTER TABLE `tb_routine`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_sorting_num_of_student`
--
ALTER TABLE `tb_sorting_num_of_student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
