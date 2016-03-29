--
-- Database: `suthar`
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
  `comp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pgfeestructure`
--

CREATE TABLE `pgfeestructure` (
  `catagory` varchar(10) NOT NULL,
  `Y_2011` int(11) NOT NULL,
  `Y_2012` int(11) NOT NULL,
  `Y_2013` int(11) NOT NULL,
  `Y_2014` int(11) NOT NULL,
  `Y_2015` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pgfeestructure`
--

INSERT INTO `pgfeestructure` (`catagory`, `Y_2011`, `Y_2012`, `Y_2013`, `Y_2014`, `Y_2015`) VALUES
('GEN', 30000, 32000, 33000, 35000, 40000),
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
  `student_addr` text NOT NULL,
  `student_contect` int(11) NOT NULL,
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

INSERT INTO `student` (`id`, `student_id`, `student_name`, `student_email`, `student_cat1`, `student_cat2`, `year`, `student_year`, `student_addr`, `student_contect`, `student_pass`, `semester_fee`, `mess_fee`, `other_fee`, `semester_fee_date`, `mess_fee_date`, `other_fee_date`, `sem_mode`, `mess_mode`, `other_mode`, `sem_id`, `mess_id`, `other_id`) VALUES
(1, 'UG12001', 'Student 1', 'student1@gmail.com', 'GEN', 'UG', 2012, '4', 'IIT ', 987654321, 'student1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'UG13001', 'Student 2', 'stuudent2@gmail.com', 'OBC', 'UG', 2013, '3', 'IIT ', 987654321, 'student2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'UG14001', 'Student 3', 'stuudent3@gmail.com', 'OBC', 'UG', 2014, '2', 'IIT ', 987654321, 'student3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'UG15001', 'Student 4', 'stuudent4@gmail.com', 'SC/ST', 'UG', 2015, '1', 'IIT ', 987654321, 'student4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'PG15001', 'Student 5', 'stuudent5@gmail.com', 'OBC', 'PG', 2015, '1', 'IIT ', 987654321, 'student5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ugfeestructure`
--

CREATE TABLE `ugfeestructure` (
  `catagory` varchar(20) NOT NULL,
  `Y_2011` int(20) NOT NULL,
  `Y_2012` int(20) NOT NULL,
  `Y_2013` int(20) NOT NULL,
  `Y_2014` int(20) NOT NULL,
  `Y_2015` int(20) NOT NULL
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
-- Indexes for table `pgfeestructure`
--
ALTER TABLE `pgfeestructure`
  ADD PRIMARY KEY (`catagory`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `student_email` (`student_email`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
