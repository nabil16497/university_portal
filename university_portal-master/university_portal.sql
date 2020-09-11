-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 12:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `credit` int(1) NOT NULL,
  `timed` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `id` varchar(10) NOT NULL,
  `fastname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `joiningdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_semester`
--

CREATE TABLE `faculty_semester` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `faculty_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `mid_total` double NOT NULL DEFAULT 0,
  `final_total` double NOT NULL DEFAULT 0,
  `mid_persent` int(11) NOT NULL DEFAULT 0,
  `final_percent` int(11) NOT NULL DEFAULT 0,
  `total` double NOT NULL DEFAULT 0,
  `grade_point` double NOT NULL DEFAULT 0,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section_reg`
--

CREATE TABLE `section_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(1) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  `room` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `grade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `creditcomp` int(3) NOT NULL DEFAULT 0,
  `dept` varchar(20) NOT NULL,
  `program` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `image` varchar(150) NOT NULL,
  `admissiondate` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) NOT NULL,
  `cgpa` double NOT NULL DEFAULT 0,
  `graduationdate` date DEFAULT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `firstname`, `lastname`, `contact`, `email`, `gender`, `dob`, `creditcomp`, `dept`, `program`, `nationality`, `blood`, `image`, `admissiondate`, `address`, `cgpa`, `graduationdate`, `password`) VALUES
(1, 'ads', 'fghh', '01629528448', 'nabil16497@gmail.com', 1, '2020-08-04', 0, 'asdf', 'asdf', 'Bangladesh', 'A+ve', '../uploads/5f2e0fe41b8a14.87157350.png', '2020-08-08 02:37:24', 'asdfasdf', 0, NULL, '$2y$12$tbZcKmKnPPjeRa8madphC.TnXzokfM1Vxts93LOe3bRtKothAwOPC'),
(2, 'ads', 'fghh', '01629528448', 'nabil16497@gmail.com', 1, '2020-08-04', 0, 'asdf', 'asdf', 'Bangladesh', 'A+ve', '../uploads/5f2e16058d2af3.04044741.png', '2020-08-08 03:03:33', 'asdfasdf', 0, NULL, '$2y$12$O0Wrqn.MtDhtedVPt3leoOKgKzQIYd00JwZY7RnHSHzTnp12MiLn6');

-- --------------------------------------------------------

--
-- Table structure for table `student_semester`
--

CREATE TABLE `student_semester` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `student_id` int(11) NOT NULL,
  `gpa` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_semester`
--
ALTER TABLE `faculty_semester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_reg`
--
ALTER TABLE `section_reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_semester`
--
ALTER TABLE `student_semester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_semester`
--
ALTER TABLE `faculty_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_semester`
--
ALTER TABLE `student_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_semester`
--
ALTER TABLE `faculty_semester`
  ADD CONSTRAINT `faculty_semester_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
