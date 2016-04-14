-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2016 at 07:41 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `catagory` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `contect` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_id`, `admin_name`, `admin_email`, `catagory`, `year`, `contect`, `address`, `admin_pass`) VALUES
(1, 'sunil', 'Sunil Suthar', 'sunil@gmail.com', 'OBC', 2008, '9876543210', 'IIT Jodhpur', 'sunil123'),
(2, 'shivam', 'Shivam Choudhary', 'shivam@gmail.com', 'GEN', 2012, '9876543210', 'IIT Jodhpur', 'shivam123'),
(3, 'vibhav', 'Vibhav Sharma', 'vibhav@gmail.com', 'GEN', 2012, '0987654321', 'IIT Jodhpur', 'vibhav123'),
(4, 'venkata', 'Venkata Kartheek', 'venkata@gmail.com', 'OBC', 2012, '0987654321', 'IIT Jodhpur', 'venkata123');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_cat1` text NOT NULL,
  `student_cat2` text NOT NULL,
  `year` int(11) NOT NULL,
  `student_year` text NOT NULL,
  `complain_sub` text NOT NULL,
  `complain` text NOT NULL,
  `comp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comp_status` varchar(25) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `student_id`, `student_name`, `student_email`, `student_cat1`, `student_cat2`, `year`, `student_year`, `complain_sub`, `complain`, `comp_time`, `comp_status`) VALUES
(1, 'UG12001', 'Student 1', 'student1@gmail.com', 'GEN', 'UG', 2012, '4', 'fee error', 'hello sir i got an error', '2016-04-12 07:33:36', 'PENDING'),
(2, 'UG12001', 'Student 1', 'student1@gmail.com', 'GEN', 'UG', 2012, '4', 'fee', 'kdsk skefmskem skefmsekmfs', '2016-04-12 09:25:39', 'PENDING'),
(3, 'UG12001', 'Student 1', 'student1@gmail.com', 'GEN', 'UG', 2012, '4', 'sdsdgsd', 'asfafs', '2016-04-11 22:25:31', 'Sunil Suthar'),
(4, 'UG12001', 'Student 1', 'student1@gmail.com', 'GEN', 'UG', 2012, '4', 'thzfrzrfg', 'sGErDEgrdgrer', '2016-04-12 08:12:46', 'PENDING'),
(5, 'UG12001', 'Student 1', 'student1@gmail.com', 'GEN', 'UG', 2012, '4', 'sfsd', 'ddsgsgrerg', '2016-04-12 09:25:08', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `feelastdate`
--

CREATE TABLE `feelastdate` (
  `id` int(11) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feelastdate`
--

INSERT INTO `feelastdate` (`id`, `last_date`) VALUES
(1, '2016-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `mtfeestructure`
--

CREATE TABLE `mtfeestructure` (
  `catagory` varchar(10) NOT NULL,
  `Y_2011` bigint(20) NOT NULL,
  `Y_2012` bigint(20) NOT NULL,
  `Y_2013` bigint(20) NOT NULL,
  `Y_2014` bigint(20) NOT NULL,
  `Y_2015` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtfeestructure`
--

INSERT INTO `mtfeestructure` (`catagory`, `Y_2011`, `Y_2012`, `Y_2013`, `Y_2014`, `Y_2015`) VALUES
('GEN', 23323, 32000, 33000, 35000, 40000),
('OBC', 33300, 32500, 33000, 34000, 39000),
('SC/ST', 3300, 10000, 11000, 14000, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `phdfeestructure`
--

CREATE TABLE `phdfeestructure` (
  `catagory` varchar(10) NOT NULL,
  `Y_2011` bigint(20) NOT NULL,
  `Y_2012` bigint(20) NOT NULL,
  `Y_2013` bigint(20) NOT NULL,
  `Y_2014` bigint(20) NOT NULL,
  `Y_2015` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phdfeestructure`
--

INSERT INTO `phdfeestructure` (`catagory`, `Y_2011`, `Y_2012`, `Y_2013`, `Y_2014`, `Y_2015`) VALUES
('GEN', 23323, 32000, 33000, 35000, 40000),
('OBC', 31000, 32500, 33000, 34000, 39000),
('SC/ST', 9000, 10000, 11000, 14000, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_cat1` text NOT NULL,
  `student_cat2` text NOT NULL,
  `year` int(11) NOT NULL,
  `student_year` text NOT NULL,
  `Other_Fee_Charge` bigint(20) NOT NULL,
  `student_addr` text NOT NULL,
  `student_contect` bigint(20) NOT NULL,
  `student_pass` varchar(30) NOT NULL,
  `semester_fee` text,
  `mess_fee` text,
  `other_fee` text,
  `semester_fee_date` timestamp NULL DEFAULT NULL,
  `mess_fee_date` timestamp NULL DEFAULT NULL,
  `other_fee_date` timestamp NULL DEFAULT NULL,
  `sem_mode` text,
  `mess_mode` text,
  `other_mode` text,
  `sem_id` varchar(20) DEFAULT NULL,
  `mess_id` varchar(20) DEFAULT NULL,
  `other_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `student_name`, `student_email`, `student_cat1`, `student_cat2`, `year`, `student_year`, `Other_Fee_Charge`, `student_addr`, `student_contect`, `student_pass`, `semester_fee`, `mess_fee`, `other_fee`, `semester_fee_date`, `mess_fee_date`, `other_fee_date`, `sem_mode`, `mess_mode`, `other_mode`, `sem_id`, `mess_id`, `other_id`) VALUES
(1, 'UG12001', 'Student 1', 'student1@gmail.com', 'GEN', 'UG', 2012, '4', 0, 'IIT ', 9876543210, 'student1', 'Done', '', '', '2016-04-11 22:56:38', NULL, NULL, 'Net Banking', NULL, NULL, 'f4955d493aad59cb992b', NULL, NULL),
(2, 'UG13001', 'Student 2', 'student2@gmail.com', 'OBC', 'UG', 2013, '3', 20, 'IIT ', 987654321, 'student2', 'Done', 'Done', '', '2016-04-12 08:49:33', '2016-04-12 08:14:03', '2016-04-12 06:44:17', 'Debit/Credit Card', 'Net Banking', 'Debit/Credit Card', '272d15a66801178ca391', 'b991913111a9f340ddc1', '588487d76a310f1ca7b2'),
(3, 'UG14001', 'Student 3', 'student3@gmail.com', 'OBC', 'UG', 2014, '2', 0, 'IIT ', 987654321, 'student3', 'Done', 'Done', 'Done', '2016-04-12 01:24:38', '2016-04-12 06:42:04', '2016-04-12 06:28:19', 'Net Banking', 'Net Banking', 'Net Banking', 'f4c5a36ba308d8b20674', '70e1799ef08771f8d0ae', 'e3e7f98cfcc96d57f4d1'),
(4, 'UG15001', 'Student 4', 'student4@gmail.com', 'SC/ST', 'UG', 2015, '1', 0, 'IIT ', 987654321, 'student4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'PG15001', 'Student 5', 'student5@gmail.com', 'OBC', 'PHD', 2015, '1', 0, 'IIT ', 987654321, 'student5', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'UG13005', 'Student 6', 'student6@gmail.com', 'OBC', 'UG', 2014, '2', 0, 'jodhpur', 987654321, '34343', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'UG14009', 'Student 8', 'student8@gmail.com', 'OBC', 'UG', 2014, '2', 20, 'IIT ', 987654321, '11243', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'PG12001', 'Student 7', 'student7@gmail.com', 'OBC', 'M.TECH', 2012, '3', 0, 'IIT ', 987654321, 'student7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ugfeestructure`
--

CREATE TABLE `ugfeestructure` (
  `catagory` varchar(20) NOT NULL,
  `Y_2011` bigint(20) NOT NULL,
  `Y_2012` bigint(20) NOT NULL,
  `Y_2013` bigint(20) NOT NULL,
  `Y_2014` bigint(20) NOT NULL,
  `Y_2015` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugfeestructure`
--

INSERT INTO `ugfeestructure` (`catagory`, `Y_2011`, `Y_2012`, `Y_2013`, `Y_2014`, `Y_2015`) VALUES
('GEN', 32000, 33400, 45000, 54000, 65000),
('OBC', 30000, 34000, 45004, 54000, 69000),
('SC/ST', 3200, 3340, 45003, 5400, 6500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `admin_id` (`id`),
  ADD UNIQUE KEY `admin_id_2` (`admin_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feelastdate`
--
ALTER TABLE `feelastdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtfeestructure`
--
ALTER TABLE `mtfeestructure`
  ADD PRIMARY KEY (`catagory`);

--
-- Indexes for table `phdfeestructure`
--
ALTER TABLE `phdfeestructure`
  ADD PRIMARY KEY (`catagory`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `student_email` (`student_email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ugfeestructure`
--
ALTER TABLE `ugfeestructure`
  ADD PRIMARY KEY (`catagory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
