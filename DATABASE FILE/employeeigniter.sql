-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 05:27 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`id`, `department_name`, `added_on`) VALUES
(1, 'HR Department', '2023-05-22 11:00:43'),
(2, 'OJT Department', '2023-05-22 09:03:13'),
(3, 'Technical Department', '2023-05-23 01:42:36'),
(4, 'Marketing Development', '2023-05-23 01:42:50'),
(5, 'Admin Department', '2023-05-26 02:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `educational_bg`
--

CREATE TABLE `educational_bg` (
  `id` int(50) NOT NULL,
  `staff_id` int(50) NOT NULL,
  `elem_school` varchar(150) NOT NULL,
  `elem_date` date NOT NULL,
  `elem_honor` varchar(50) NOT NULL,
  `high_school` varchar(150) NOT NULL,
  `high_date` date NOT NULL,
  `high_honor` varchar(50) NOT NULL,
  `college_school` varchar(150) NOT NULL,
  `college_date` date NOT NULL,
  `college_honor` varchar(50) NOT NULL,
  `college_degree` varchar(150) NOT NULL,
  `graduate_school` varchar(150) NOT NULL,
  `graduate_date` date NOT NULL,
  `graduate_honor` varchar(50) NOT NULL,
  `graduate_degree` varchar(150) NOT NULL,
  `trade` varchar(150) NOT NULL,
  `trade_date` date NOT NULL,
  `trade_honor` varchar(50) NOT NULL,
  `cert` varchar(150) NOT NULL,
  `cert_date` date NOT NULL,
  `cert_honor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_bg`
--

INSERT INTO `educational_bg` (`id`, `staff_id`, `elem_school`, `elem_date`, `elem_honor`, `high_school`, `high_date`, `high_honor`, `college_school`, `college_date`, `college_honor`, `college_degree`, `graduate_school`, `graduate_date`, `graduate_honor`, `graduate_degree`, `trade`, `trade_date`, `trade_honor`, `cert`, `cert_date`, `cert_honor`) VALUES
(1, 31, 'qwqeq school', '3333-03-11', 'wala', 'safdvfd safd', '1111-11-11', 'sadfgf', 'qwef afdsgdb', '1111-11-11', 'jhtgdf', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(3, 33, 'fasddfb', '2222-02-22', 'fgdhdfgsdf', 'sdfbdg', '2222-02-22', 'dafdsgff', 'dsvdfbg', '2222-02-22', 'sdasdfdbvfd', '', 'wqefgfdbvcs', '2222-02-22', 'afdsvfvsd', '', 'scdvfc', '2222-02-22', 'fsdvfdbvd', 'qwewre', '0000-00-00', 'sdafdgbv'),
(4, 34, 'Santo Tomas Central School', '2222-02-22', 'qwerty', 'Santo Tomas National High School', '2222-02-22', 'qwerty', 'Isabela State University', '2222-02-22', 'qwerty', '', 'Isabela State University', '2222-02-22', 'qwertyui', '', 'Isabela State University', '2222-02-22', 'retrytuyuk', '', '0000-00-00', ''),
(5, 35, 'Santo Tomas Central School', '2222-02-22', 'qwerty', 'Santo Tomas National High School', '2222-02-22', 'qwerty', 'Isabela State University', '2222-02-22', 'qwerty', '', 'Isabela State University', '2222-02-22', 'qwertyui', '', 'Isabela State University', '2222-02-22', 'retrytuyuk', 'Isabela State University', '2222-02-22', 'sdfghj'),
(6, 36, 'Santo Tomas Central School', '2222-02-22', 'sdfb', 'Santo Tomas National High School', '2222-12-22', 'safdggnb', 'Isabela State University', '2222-02-22', 'fgnfgsd', '', 'Isabela State University', '2222-02-22', 'asfgvcd', '', 'Isabela State University', '2222-02-22', 'sagvzd', 'Isabela State University', '2222-02-22', 'arsbvdc'),
(7, 37, 'Santo Tomas Central School', '2222-02-22', 'sdfb', 'Santo Tomas National High School', '2222-12-22', 'safdggnb', 'Isabela State University', '2222-02-22', 'fgnfgsd', '', 'Isabela State University', '2222-02-22', 'asfgvcd', '', 'Isabela State University', '2222-02-22', 'sagvzd', 'Isabela State University', '2222-02-22', 'arsbvdc'),
(10, 40, 'dwefdvs', '0000-00-00', 'sfdvcx', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(11, 41, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(13, 43, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(14, 44, 'Santa Maria Elementary School', '2222-02-22', 'qwertyu', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(15, 45, '', '2222-02-22', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(16, 46, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(17, 47, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(18, 48, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(19, 49, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(20, 50, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(21, 51, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(22, 52, 'Santo Tomas Central School', '2222-02-22', 'Valedictorian', 'Santo Tomas National High School', '2222-02-22', 'Valedictorian', 'Isabela State University', '2222-02-22', 'Magna Cumlaude', 'Bachelor of Science in Information Technology', 'Isabela State University', '2222-02-22', 'Suma Cumlaude', 'Bachelor of Science in Information Technology', 'Isabela State University', '2222-02-22', 'NC2', 'Isabela State University', '2222-02-22', 'werty');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tbl`
--

CREATE TABLE `leave_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `leave_reason` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `updated_on` date NOT NULL,
  `applied_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_tbl`
--

INSERT INTO `leave_tbl` (`id`, `staff_id`, `leave_reason`, `description`, `status`, `leave_from`, `leave_to`, `updated_on`, `applied_on`) VALUES
(1, 2, 'Sick', 'Not feeling well enough to join', 1, '2021-01-15', '2021-01-17', '0000-00-00', '2021-01-15'),
(2, 5, 'Casual Leave', 'been working for full hours since last month, got to free my mind for few days', 1, '2021-05-28', '2021-05-29', '0000-00-00', '2021-05-27'),
(3, 6, 'Day Off', 'Requesting for a day off as I need to join my pal\'s wedding!', 1, '2021-05-28', '2021-05-29', '0000-00-00', '2021-05-27'),
(4, 3, 'Casual Leave', 'for vacation, rest, and family events', 2, '2021-05-30', '2021-06-06', '0000-00-00', '2021-05-27'),
(5, 9, 'Quarantine', 'i need to quarantine myself for few weeks as i got some symptoms of covid-19', 1, '2021-05-28', '2021-06-11', '0000-00-00', '2021-05-27'),
(6, 5, 'try ko lang.', 'Qdscdvcd\r\n', 1, '2023-05-10', '2023-06-22', '0000-00-00', '2023-05-10'),
(7, 34, 'Di ko alam.', 'asdfbvc', 0, '2023-05-05', '2023-05-10', '0000-00-00', '2023-05-15'),
(8, 2, 'try ko lang.', 'sfdgfrn', 2, '2222-02-22', '2222-02-25', '0000-00-00', '2023-05-15'),
(9, 35, 'Di ko alam.', 'sdafdgfd', 1, '2222-02-22', '2222-02-22', '0000-00-00', '2023-05-15'),
(10, 35, 'try ko lang ulit.', 'dfgfhgjgmhngfb', 1, '2023-02-22', '2023-02-28', '0000-00-00', '2023-05-15'),
(11, 41, 'i want space.', 'sadfghj', 2, '2223-02-22', '2222-02-22', '0000-00-00', '2023-05-22'),
(12, 48, 'wertghj', 'ertyueretfghj', 1, '3422-02-13', '4345-02-23', '0000-00-00', '2023-05-22'),
(13, 49, 'try ko lang.', 'asdfghjh', 1, '5354-05-04', '2344-03-04', '0000-00-00', '2023-05-22'),
(14, 50, 'qwertyu', 'erfsgd', 0, '2212-02-12', '2211-02-04', '0000-00-00', '2023-05-23'),
(15, 50, 'wqefrgh', 'asdfgdhfjhgj', 1, '4443-02-02', '3322-05-04', '0000-00-00', '2023-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `usertype` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin123', 1, 1),
(35, 'johnrod.a.malsi@gmail.com', 'johnrod123', 1, 1),
(36, 'dsa@gmas.comwwd', '090333222', 2, 1),
(40, 'sdsfgdbvd@gmail.com', '095433321', 2, 1),
(41, 'staff@gmail.com', 'staff123', 2, 1),
(43, 'dsa@gmas.comw', '121345', 2, 1),
(44, 'malik@gmail.com', 'malik', 2, 1),
(45, 'marvin@gmail.com', 'marvin', 2, 1),
(46, 'hazel@gmail.com', 'Hazel', 2, 1),
(47, 'angelyn@gmail.com', 'Angelyn123', 2, 1),
(48, 'jolina@gmail.com', 'Jolina123', 2, 1),
(49, 'aileen@gmail.com', 'Aileen123', 2, 1),
(50, 'jaylord@gmail.com', 'Jaylord123', 2, 1),
(51, 'myka@gmail.com', 'Myka-Ela123', 2, 1),
(52, 'johnrod@gmail.com', 'Johnrod123', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `position_tbl`
--

CREATE TABLE `position_tbl` (
  `id` int(10) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position_tbl`
--

INSERT INTO `position_tbl` (`id`, `position_name`, `added_on`) VALUES
(1, 'Project Manager', '2023-05-23 01:42:03'),
(2, 'Electrical Engineer', '2023-05-22 08:59:32'),
(3, 'Software Engineer', '2023-05-22 07:19:32'),
(4, 'IT Support', '2023-05-22 07:19:41'),
(5, 'OJT', '2023-05-22 08:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `project_tbl`
--

CREATE TABLE `project_tbl` (
  `id` int(50) NOT NULL,
  `project_id` int(50) NOT NULL,
  `project_name` varchar(150) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `started_date` date NOT NULL,
  `accomplish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tbl`
--

INSERT INTO `project_tbl` (`id`, `project_id`, `project_name`, `company_name`, `started_date`, `accomplish_date`) VALUES
(1, 33, 'generator set', 'comappppppppppp', '2222-02-22', '2225-02-22'),
(2, 0, 'sdafs', 'dsafdg', '2023-05-16', '2023-05-19'),
(3, 34, 'Data Center', 'Meta', '2222-02-22', '2223-03-22'),
(4, 35, 'Data Center', 'Meta', '2222-02-22', '2223-03-22'),
(5, 36, 'Data Center', 'Meta', '2222-02-22', '2223-02-22'),
(6, 37, 'Data Center', 'Meta', '2222-02-22', '2223-02-22'),
(7, 40, 'wdefsd', 'dsfvdfsda', '2233-02-22', '3333-02-23'),
(8, 41, '111111', '1111111', '4444-04-04', '4444-04-04'),
(9, 41, '22222222', '222222', '4444-04-04', '4444-04-04'),
(10, 41, '33333333333', '33333', '4444-04-04', '4444-04-04'),
(13, 43, 'SPPI setttt1', 'sppi', '0000-00-00', '0000-00-00'),
(14, 43, '2sdfr set2', 'qerdd', '0000-00-00', '0000-00-00'),
(15, 40, '1111', '1111', '1111-11-11', '1112-11-11'),
(16, 40, '2222', '2222', '2222-02-22', '2223-02-22'),
(24, 43, 'wertgdsf', 'fdxdd', '0000-00-00', '0000-00-00'),
(25, 43, '213retfdsa', 'wertdgfi', '0000-00-00', '0000-00-00'),
(26, 44, '', '', '0000-00-00', '0000-00-00'),
(27, 45, '', '', '0000-00-00', '0000-00-00'),
(28, 46, '', '', '0000-00-00', '0000-00-00'),
(29, 47, '', '', '0000-00-00', '0000-00-00'),
(30, 48, '', '', '0000-00-00', '0000-00-00'),
(31, 49, '', '', '0000-00-00', '0000-00-00'),
(32, 50, '', '', '0000-00-00', '0000-00-00'),
(33, 51, '', '', '0000-00-00', '0000-00-00'),
(34, 52, 'SPPI setttt', 'sppi', '2222-02-12', '2222-03-21'),
(38, 52, 'gen set', 'sppi', '3322-04-04', '4333-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `salary_tbl`
--

CREATE TABLE `salary_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `basic_salary` bigint(20) NOT NULL,
  `allowance` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_tbl`
--

INSERT INTO `salary_tbl` (`id`, `staff_id`, `basic_salary`, `allowance`, `total`, `added_by`, `updated_on`, `added_on`) VALUES
(1, 2, 14000, 0, 14000, 1, '0000-00-00', '2021-05-02 08:23:30'),
(2, 3, 9100, 300, 9400, 1, '0000-00-00', '2021-04-28 02:39:23'),
(3, 4, 4950, 0, 4950, 1, '0000-00-00', '2021-04-30 07:38:02'),
(4, 5, 6100, 250, 6350, 1, '0000-00-00', '2021-04-30 13:57:02'),
(5, 9, 4750, 190, 4940, 1, '0000-00-00', '2021-05-27 17:31:05'),
(6, 3, 1000, 0, 1000, 1, '0000-00-00', '2023-05-10 02:08:26'),
(7, 10, 1000, 0, 1000, 1, '0000-00-00', '2023-05-10 02:39:29'),
(9, 10, 10000, 0, 10000, 1, '0000-00-00', '2023-05-10 02:40:30'),
(11, 3, 1000, 0, 1000, 1, '0000-00-00', '2023-05-11 01:20:35'),
(13, 22, 543423, 234543, 777966, 1, '0000-00-00', '2023-05-15 06:44:43'),
(14, 34, 1000, 0, 1000, 1, '0000-00-00', '2023-05-15 07:13:49'),
(15, 37, 10000, 0, 10000, 1, '0000-00-00', '2023-05-15 07:34:11'),
(16, 35, 10000, 0, 10000, 1, '0000-00-00', '2023-05-15 08:20:06'),
(17, 35, 10000, 0, 10000, 1, '0000-00-00', '2023-05-15 09:13:39'),
(18, 35, 20000, 15800, 35800, 1, '0000-00-00', '2023-05-17 08:22:26'),
(19, 42, 12322143, 123222, 12445365, 1, '0000-00-00', '2023-05-18 09:12:09'),
(20, 35, 234567, 34567, 269134, 1, '0000-00-00', '2023-05-22 05:53:44'),
(21, 35, 231456, 0, 231456, 1, '0000-00-00', '2023-05-22 05:54:55'),
(22, 41, 23456, 0, 23456, 1, '0000-00-00', '2023-05-22 05:55:38'),
(23, 1, 213456, 0, 213456, 1, '0000-00-00', '2023-05-22 05:56:16'),
(24, 44, 3412, 0, 3412, 1, '0000-00-00', '2023-05-22 07:05:17'),
(25, 45, 123342, 0, 123342, 1, '0000-00-00', '2023-05-22 07:05:17'),
(27, 43, 25443, 0, 25443, 35, '0000-00-00', '2023-05-22 09:27:52'),
(28, 45, 345, 0, 345, 35, '0000-00-00', '2023-05-22 09:27:52'),
(29, 46, 324, 0, 324, 35, '0000-00-00', '2023-05-22 09:27:52'),
(30, 47, 1234, 0, 1234, 35, '0000-00-00', '2023-05-22 09:27:52'),
(31, 48, 234, 0, 234, 35, '0000-00-00', '2023-05-22 09:27:52'),
(32, 49, 2453, 0, 2453, 35, '0000-00-00', '2023-05-22 09:27:52'),
(33, 52, 13233, 0, 13233, 35, '0000-00-00', '2023-05-23 01:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `id` int(11) NOT NULL,
  `empid` int(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `midname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `empstatus` varchar(150) NOT NULL,
  `permanent_address` varchar(150) NOT NULL,
  `present_address` varchar(150) NOT NULL,
  `sss` int(150) DEFAULT NULL,
  `philhealth` int(150) NOT NULL,
  `pagibig` int(150) NOT NULL,
  `tin` int(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `position` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `birthplace` varchar(150) NOT NULL,
  `nationality` varchar(150) NOT NULL,
  `religion` varchar(150) NOT NULL,
  `height` varchar(150) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `maiden_name` varchar(150) NOT NULL,
  `spouse_name` varchar(150) NOT NULL,
  `spouse_date` date NOT NULL,
  `spouse_place` varchar(150) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `mother_name` varchar(150) NOT NULL,
  `contact_person` varchar(150) NOT NULL,
  `contact_number` varchar(150) NOT NULL,
  `doj` date NOT NULL,
  `emp_status` varchar(150) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `pic` varchar(150) NOT NULL DEFAULT 'default-pic.jpg',
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`id`, `empid`, `firstname`, `midname`, `lastname`, `suffix`, `empstatus`, `permanent_address`, `present_address`, `sss`, `philhealth`, `pagibig`, `tin`, `gender`, `civil_status`, `position`, `email`, `mobile`, `dob`, `birthplace`, `nationality`, `religion`, `height`, `weight`, `maiden_name`, `spouse_name`, `spouse_date`, `spouse_place`, `father_name`, `mother_name`, `contact_person`, `contact_number`, `doj`, `emp_status`, `address`, `city`, `state`, `country`, `department_id`, `pic`, `added_by`, `updated_on`, `added_on`) VALUES
(35, 2147483647, 'Johnrod', 'Acosta', 'Malsi', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 202111111, 2147483647, 2147483647, 2147483647, 'Male', 'Single', '1', 'johnrod.a.malsi@gmail.com', 9666688865, '2001-04-25', 'Jolo, Sulu', 'Filipino', 'Ath', '200', '65', 'Maria Santos', 'Pepito quilang', '2001-02-12', 'Santo Tomas, Isabela', 'Manny Paquiao', 'Dionita Manaloto', '', '', '2023-03-13', '', NULL, '', '', '', 7, 'smportrait2.jpg', 35, '0000-00-00', '2023-05-22 09:33:46'),
(36, 213424, 'Jaydi', 'a', 'Allauigan', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 875654344, 2147483647, 4332454, 235465476, 'Male', 'Single', '5', 'dsa@gmas.comwwd', 90333222, '2001-02-14', 'santo tomas, isabela', 'Filipino', 'PMCC', '222', '111', 'nena Aggub', 'Ruben Talaue', '2222-02-22', 'Santo Tomas, Isabela', 'mario Quilang', 'Juvie Allauigan', '', '', '2222-02-22', '', NULL, '', '', '', 2, 'jaydi1.jpg', 35, '0000-00-00', '2023-05-22 10:45:24'),
(40, 6745634, 'Jolie', 'Mevico', 'Garicia', '', 'Probationary', 'sdfgdfnhfbf', 'gjhijhfgj', 2147483647, 2147483647, 567458465, 2147483647, 'Male', 'Single', '2', 'Garicia@gmail.com', 95433321, '2222-02-22', 'eretrhfgbd', 'filipino', 'Catholic', '1223', '212', 'wefsdfs', 'fgdvss', '2222-02-22', 'efgdvs', 'WEFSDDA', 'FDVSZS', '', '', '2222-02-22', '', NULL, '', '', '', 7, '2163.jpg', 35, '0000-00-00', '2023-05-22 09:41:16'),
(41, 3254356, 'Rachel', 'Guzman', 'Medina', '', 'Regular', 'ghfd', 'fsdgfd', 234432, 34545, 342542, 3432, 'Male', 'Married', '4', 'staff@gmail.com', 0, '2222-02-22', 'sfdbgb', '32r4e', 'sfdgfb', '1223', '65', 'svdfbvsa', 'sfdfbgbdsfd', '2222-02-22', 'fbgbdgsfgf', 'asdfgb', 'fsdgfbbv', '', '', '2222-02-22', '', NULL, '', '', '', 5, 'christen-freeimg2.jpg', 35, '0000-00-00', '2023-05-22 09:40:59'),
(43, 21332, 'Kath', 'Santos', 'Locsina', '', 'Probationary', 'qewwwww', 'wwwwwwwwasd', 1233, 2147483647, 2147483647, 333333333, 'Female', 'Widowed', '1', 'dsa@gmas.comw', 121345, '2222-02-22', 'dddsss', 'asdfds', 'asdfd', 'asdf', 'das21', '123q', 'weasd', '2222-02-22', 'asdfd2', '123', '123', '', '', '2222-02-22', '', NULL, '', '', '', 1, 'christen-freeimg3.jpg', 35, '0000-00-00', '2023-05-22 09:42:06'),
(44, 6745342, 'Malik', 'Abdul', 'Maramag', '', 'Trainee', 'Santa Maria, Isabela', 'San Antonio, Pasig City, Manila', 2147483647, 32454, 523543654, 235436547, 'Male', 'Single', '5', 'malik@gmail.com', 987654321, '2001-02-14', 'Santa Maria, Isabela', 'Filipino', 'Catholic', '177', '68', 'Ai ai', 'delas Alas', '2222-02-22', 'Isabela', 'Manny', 'Dionisia', '', '', '2222-02-22', '', NULL, '', '', '', 2, 'malikn1.jpg', 35, '0000-00-00', '2023-05-22 09:40:22'),
(45, 6745342, 'Marvin', 'Kalapay', 'Canceran', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 2147483647, 32454, 523543654, 235436547, 'Male', 'Single', '5', 'marvin@gmail.com', 987654321, '2001-02-14', 'Santa Maria, Isabela', 'Filipino', 'Catholic', '177', '68', 'Ai ai', 'delas Alas', '2222-02-22', 'Isabela', 'Manny', 'Dionisia', '', '', '2222-02-22', '', NULL, '', '', '', 2, 'marvin_n1.jpg', 1, '0000-00-00', '2023-05-22 09:03:21'),
(46, 5643542, 'Hazel', 'Malenab', 'Laureta', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 1234567, 32456, 3245, 2345, 'Female', 'Single', '5', 'hazel@gmail.com', 987654321, '2000-02-22', 'santo tomas, isabela', 'Filipino', 'Catholic', '145', '54', 'sdfghj', 'sdfghj', '2222-02-22', 'fghdfghj', 'sdafghj', 'ddfdghj', '', '', '2222-02-22', '', NULL, '', '', '', 2, 'hazel1.jpg', 35, '0000-00-00', '2023-05-22 10:45:11'),
(47, 5675434, 'Angelyn', 'Cataggatan', 'Tulinao', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 23456, 5454678, 456789, 5678, 'Female', 'Single', '5', 'angelyn@gmail.com', 987654321, '2220-02-22', 'santo tomas, isabela', 'Filipino', 'Catholic', '12435', '34', 'FGHdfgh', 'fgh', '2222-02-12', 'ergth', 'edfgh', 'DFGHJ', '', '', '2222-02-22', '', NULL, '', '', '', 2, 'angen.jpg', 1, '0000-00-00', '2023-05-22 09:20:27'),
(48, 234564, 'Jolina', 'Acerit', 'Gumatay', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 23456, 5454678, 456789, 5678, 'Female', 'Single', '5', 'jolina@gmail.com', 987654321, '2220-02-22', 'santo tomas, isabela', 'Filipino', 'Catholic', '12435', '34', 'FGHdfgh', 'fgh', '2222-02-12', 'ergth', 'edfgh', 'DFGHJ', '', '', '2222-02-22', '', NULL, '', '', '', 2, 'joli.jpg', 1, '0000-00-00', '2023-05-22 09:21:28'),
(49, 67857543, 'Aileen', 'Baquiran', 'Gumatay', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 3245647, 32543654, 235436547, 2147483647, 'Female', 'Single', '5', 'aileen@gmail.com', 9876543, '2200-02-22', 'santo tomas, isabela', 'Filipino', 'Catholic', '123', '21', 'sdafdv', 'saDAFDV', '2222-02-22', 'Adsfdv', 'adasfdvf', 'scvdascxz', '', '', '2202-02-22', '', NULL, '', '', '', 2, 'prtwm31.jpg', 1, '0000-00-00', '2023-05-22 09:24:06'),
(50, 46534, 'Jaylord', 'Gazzingan', 'Aggub', '', 'Trainee', 'Santa Maria, Isabela', 'San Antonio, Pasig City, Manila', 23145, 42354657, 2147483647, 2147483647, 'Male', 'Married', '5', 'jaylord@gmail.com', 98765432, '2001-02-22', 'Maguindanao', 'Filipino', 'PMCC', '213', '34', 'ghjk', 'ghfj', '1111-11-11', 'gfhjghk', 'sadfgh', 'sdfgh', '', '', '2222-02-22', '', NULL, '', '', '', 2, 'pauptr5.jpg', 35, '0000-00-00', '2023-05-22 10:47:59'),
(51, 75463452, 'Myka', 'Ela', 'Apostol', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 213456, 564557879, 7658697, 786970, 'Female', 'Married', '5', 'myka@gmail.com', 98765432, '2001-02-22', 'santo tomas, isabela', 'Filipino', 'Catholic', '123', '123', 'fghjk', 'ghcvjbk', '1112-02-11', 'fghjk', 'asedfgh', 'ftyughjk', '', '', '2221-02-22', '', NULL, '', '', '', 2, 'sm-freeimg1.jpg', 35, '0000-00-00', '2023-05-23 01:45:05'),
(52, 67546345, 'Johnrod', 'Acosta', 'Malsi', '', 'Trainee', 'Santo Tomas, Isabela', 'San Antonio, Pasig City, Manila', 4524635, 243453, 35434, 34543, 'Male', 'Single', '5', 'johnrod@gmail.com', 987654123, '2001-04-25', 'Jolo, Sulu', 'Filipino', 'Ath', '134', '65', 'sfdgh', 'fgdhr', '2224-02-22', 'sdfdghr', 'gfsd', 'wertgt', '', '', '2222-02-21', '', NULL, '', '', '', 2, 'dportrait4.jpg', 35, '0000-00-00', '2023-05-22 10:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `workexp_tbl`
--

CREATE TABLE `workexp_tbl` (
  `id` int(50) NOT NULL,
  `exp_id` int(50) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `company_address` varchar(150) NOT NULL,
  `company_telno` varchar(150) NOT NULL,
  `company_position` varchar(150) NOT NULL,
  `company_salary` int(150) NOT NULL,
  `company_date` date NOT NULL,
  `company_reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workexp_tbl`
--

INSERT INTO `workexp_tbl` (`id`, `exp_id`, `company_name`, `company_address`, `company_telno`, `company_position`, `company_salary`, `company_date`, `company_reason`) VALUES
(1, 30, 'staticpower philipines inc', 'pasig city', '64534234', 'manager', 20000, '2212-07-07', 'qwerfds'),
(2, 31, 'staticpower philipines inc', 'pasig city', '64534234', 'manager', 20000, '2212-07-07', 'qwerfds'),
(4, 33, 'aisys', 'isabela', '64534234', 'manager', 20000, '2222-02-22', 'afsgfdbvdsc'),
(5, 33, 'aisys', 'isabela', '64534234', 'manager', 20000, '2222-02-22', 'afsgfdbvdsc'),
(6, 34, 'Static Power Philippines, Inc.', 'San Antonio, Pasig City', '09543222452', 'Software Engineer', 1000000, '2222-02-22', 'sadfdgfbvcs'),
(7, 35, 'Static Power Philippines, Inc.', 'San Antonio, Pasig City', '09543222452', 'Software Engineer', 1000000, '2222-02-22', 'sadfdgfbvcs'),
(8, 36, 'Static Power Philippines, Inc.', 'San Antonio, Pasig City', '09543222452', 'manager', 200000, '2222-02-22', 'qweefcsa'),
(9, 37, 'Static Power Philippines, Inc.', 'San Antonio, Pasig City', '09543222452', 'manager', 200000, '2222-02-22', 'qweefcsa'),
(12, 40, 'sdvfx', 'sdvfvcx', '67857456', 'Software Engineer', 20000, '2222-02-22', 'fgdhfjgh'),
(13, 41, '3', '3333333333333', '3333333333333', '333333333333', 0, '0000-00-00', '111111'),
(17, 43, 'sppi1111', '222222222', '22222222', '1111', 2147483647, '0000-00-00', '555555555'),
(18, 43, 'sppi2222', '11111111', '2222222222', '22222', 2147483647, '0000-00-00', '555555555'),
(19, 43, 'sppi3333', '5555555', '33333', '3333', 2147483647, '0000-00-00', '555555555'),
(20, 43, 'sppi4444', '444', '444', '44444', 2147483647, '0000-00-00', '555555555'),
(21, 41, '222222222222', '222222', '2222222', '22222222', 2222222, '2222-02-22', '22222'),
(22, 41, '111111111', '1111', '1111', '1111', 1111, '1111-11-11', '11111'),
(23, 40, '11111', '1111', '111111', '111', 11, '1111-11-11', '1111'),
(24, 40, '222222', '222', '2222', '2222', 222, '0002-02-22', '22222'),
(31, 43, 'sadfa', 'sfddsa1', 'fsdfw', 'fesdf', 0, '0000-00-00', 'sdfsdf'),
(32, 43, 'wqefsd', 'drrtytfug', 'ffhgjhk', 'ghjkl', 0, '0000-00-00', 'hgjk'),
(33, 44, '', '', '', '', 0, '0000-00-00', ''),
(34, 45, '', '', '', '', 0, '0000-00-00', ''),
(35, 46, '', '', '', '', 0, '0000-00-00', ''),
(36, 47, '', '', '', '', 0, '0000-00-00', ''),
(37, 48, '', '', '', '', 0, '0000-00-00', ''),
(38, 49, '', '', '', '', 0, '0000-00-00', ''),
(39, 50, '', '', '', '', 0, '0000-00-00', ''),
(40, 51, '', '', '', '', 0, '0000-00-00', ''),
(41, 52, 'Google', 'USA, Mars Universe PH', '0987654567', '999999', 2452322, '2001-03-12', 'fndsgdfav'),
(42, 52, 'Static Power Philippines, Inc', 'San Antonio, Pasig City', '0987654453', 'Engineer', 1000000, '2020-10-24', 'wertsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_bg`
--
ALTER TABLE `educational_bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position_tbl`
--
ALTER TABLE `position_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tbl`
--
ALTER TABLE `project_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workexp_tbl`
--
ALTER TABLE `workexp_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_tbl`
--
ALTER TABLE `department_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `educational_bg`
--
ALTER TABLE `educational_bg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `position_tbl`
--
ALTER TABLE `position_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_tbl`
--
ALTER TABLE `project_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `workexp_tbl`
--
ALTER TABLE `workexp_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
