-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 09:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_portal`
--
CREATE DATABASE IF NOT EXISTS `university_portal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `university_portal`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `pass`, `name`) VALUES
(1, 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `status`) VALUES
(1, 'fisting', 0),
(6, 'FC old', 1),
(9, 'FAB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `joiningdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `firstname`, `lastname`, `dob`, `contact`, `email`, `address`, `gender`, `dept`, `nationality`, `blood`, `image`, `joiningdate`, `password`) VALUES
(2, 'Aman', 'Sarkar', '1990-02-01', '044154421', 'aman@gmail.com', 'Dhaka', 0, 'CSE', 'Bangladesh', 'A+ve', '../uploads/5f6d95f2358f16.70921968.png', '2020-09-25 07:02:10', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `deptid` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `deptid`, `status`) VALUES
(3, 'CSE', 1, 0),
(5, 'BAT', 6, 1),
(6, 'CS', 1, 0),
(9, 'BBA', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `semester_id` int(20) NOT NULL,
  `student_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `total_marks` float DEFAULT NULL,
  `midterm_mark` float DEFAULT NULL,
  `finalterm_mark` float DEFAULT NULL,
  `final_grade` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `semester_id`, `student_id`, `faculty_id`, `section_id`, `total_marks`, `midterm_mark`, `finalterm_mark`, `final_grade`) VALUES
(32, 1, 3, 2, 5, NULL, NULL, NULL, NULL),
(33, 1, 4, 2, 5, NULL, NULL, NULL, NULL),
(34, 1, 5, 2, 5, NULL, NULL, NULL, NULL),
(35, 1, 5, 1, 4, NULL, NULL, NULL, NULL),
(36, 1, 6, 1, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `day1` varchar(10) NOT NULL,
  `starttime1` time DEFAULT NULL,
  `endtime1` time DEFAULT NULL,
  `day2` varchar(10) DEFAULT NULL,
  `starttime2` time DEFAULT NULL,
  `endtime2` time DEFAULT NULL,
  `credit` int(11) NOT NULL,
  `section` varchar(2) NOT NULL,
  `room1` int(11) DEFAULT NULL,
  `room2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `course_id`, `coursename`, `day1`, `starttime1`, `endtime1`, `day2`, `starttime2`, `endtime2`, `credit`, `section`, `room1`, `room2`) VALUES
(3, 2020, 'Computer Graphics', 'Sunday', '10:00:00', '11:30:00', 'Tuesday', '10:00:00', '11:30:00', 3, 'A', 2003, 4003),
(4, 2001, 'Advance DataBaseManagement Sys', 'Sunday', '12:00:00', '14:00:00', 'Tuesday', '12:00:00', '14:00:00', 3, 'B', 2004, 2005),
(5, 21, 'Web Technology', 'Monday', '08:00:00', '10:00:00', 'Wednesday', '08:00:00', '10:00:00', 3, 'C', 2000, 5111),
(6, 21115, 'EM', 'Monday', '14:00:00', '15:30:00', 'Wednesday', '14:00:00', '15:30:00', 3, 'E', 2000, 2222),
(7, 1236, 'Math1', 'Monday', '15:01:00', '17:02:00', 'Wednesday', '15:01:00', '17:01:00', 3, 'A', 2003, 2003);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `creditcomp` int(3) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `program` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `admissiondate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(200) NOT NULL,
  `cgpa` double NOT NULL,
  `graduationdate` date NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `firstname`, `lastname`, `contact`, `email`, `gender`, `dob`, `creditcomp`, `dept`, `program`, `nationality`, `blood`, `image`, `admissiondate`, `address`, `cgpa`, `graduationdate`, `password`) VALUES
(3, 'a', 'sdf', '0126598246', 'nabil16497@gmail.com', 0, '1997-06-24', 0, 'CS', 'CSE', 'Bangladesh', 'A+ve', '', '2020-09-24 17:19:33', 'asdfasdfasdf', 0, '0000-00-00', '123456'),
(4, 'asdff', 'sdf', '01235645664', 'asd7@gmail.com', 0, '1999-06-22', 0, 'CS', 'CSE', 'Bangladesh', 'A+ve', '../uploads/5f6ca73d8479e9.07012208.jpg', '2020-09-24 14:03:41', 'asdfasdfasdfasdf', 0, '0000-00-00', '123456'),
(5, 'Jubair', 'pabel', '0134545455', 'ju@gmailk.com', 0, '1997-09-25', 0, 'CSE', 'Bsc', 'Bangladesh', 'A+ve', '../uploads/5f6d922e3dba22.99186886.png', '2020-09-25 06:46:06', 'Chitagong', 0, '0000-00-00', '1111'),
(6, 'Naimul', 'Rahman', '0129312904', 'df@gmail.com', 0, '2020-09-11', 0, 'Science', 'CSE', 'Bangladesh', 'A+ve', '../uploads/5f6da645c46459.10205698.jpg', '2020-09-25 08:11:49', 'Dhaka', 0, '0000-00-00', 'Pass123@'),
(7, 'afhh', 'vgs', '01256236893', 'a@gmail.com', 0, '2022-03-13', 0, 'sdf', 'sdf', 'Bangladesh', 'A+ve', '../uploads/6231647d38ac80.07574326.png', '2022-03-16 04:15:57', 'sfasdf', 0, '0000-00-00', 'asdferrwefsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deptid` (`deptid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`deptid`) REFERENCES `department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
