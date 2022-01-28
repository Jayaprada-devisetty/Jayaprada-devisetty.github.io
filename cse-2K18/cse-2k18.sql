-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 04:12 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse-2k18`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `date` date NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`date`, `event`) VALUES
('2011-12-01', 'On the occasion of national youth day ,essay competition is being conducted'),
('2011-12-01', 'NSS cell conducting Elocution on the occasion of National youth day'),
('2017-02-15', 'mljaaoskhdnsklnxdx'),
('2021-01-12', 'kALJALKxnj(AJNX'),
('2011-12-01', 'SACSZ');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `sno` int(2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`sno`, `image`, `description`) VALUES
(1, 'http://localhost:8080/cse-2K18/logo.png', 'college logo');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `s.no` int(10) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year_of_study` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `year` int(5) NOT NULL,
  `cr` varchar(25) NOT NULL,
  `gr` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indexdata`
--

CREATE TABLE `indexdata` (
  `s.no` int(2) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year_of_study` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `year` int(5) NOT NULL,
  `cr` varchar(30) NOT NULL,
  `cr_img` varchar(50) NOT NULL,
  `gr` varchar(30) NOT NULL,
  `gr_img` varchar(50) NOT NULL,
  `CRC` varchar(30) NOT NULL,
  `subjects` int(2) NOT NULL,
  `sub1` varchar(100) NOT NULL,
  `sub2` varchar(100) NOT NULL,
  `sub3` varchar(100) NOT NULL,
  `sub4` varchar(100) NOT NULL,
  `sub5` varchar(100) NOT NULL,
  `sub6` varchar(100) NOT NULL,
  `sub7` varchar(100) NOT NULL,
  `sub8` varchar(100) NOT NULL,
  `sub9` varchar(100) NOT NULL,
  `sub10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indexdata`
--

INSERT INTO `indexdata` (`s.no`, `branch`, `year_of_study`, `semester`, `year`, `cr`, `cr_img`, `gr`, `gr_img`, `CRC`, `subjects`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`) VALUES
(2, 'Computer Science and Engineering', 2, 2, 2020, 'mr.xx', 'http://localhost:8080/cse-2K18/CR.jpg', 'ms.xx', 'http://localhost:8080/cse-2K18/GR.jpg', '', 0, '', '', '', '', '', '', '', '', '', ''),
(1, 'Computer Science and Engineering', 3, 1, 2020, 'ABC', 'http://localhost:8080/cse-2K18/CR.png', 'XYZ', 'http://localhost:8080/cse-2K18/GR.png', 'Madam', 10, 'Management Science', 'Web Technologies', 'Compiler Design', 'Data warehousing and Mining', 'Software Engineering', 'Computer Networks', 'Software Engineering & Web Technologies', 'Data Warehousing and mining & Compiler DesignLab', 'Skill Development Course', 'Comprehensive Objective Type Examination');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `sno` int(5) NOT NULL,
  `date` date NOT NULL,
  `notice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`sno`, `date`, `notice`) VALUES
(1, '2021-01-12', 'schedule for III B.TECh -I semester practical/laboratory classwork'),
(2, '2011-12-01', 'Schedule for III B.Tech-I semester Mid Examinations-I'),
(4, '0000-00-00', 'end of instructions-28th may'),
(5, '0000-00-00', 'holidays from next monday');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `sno` int(5) NOT NULL,
  `date` date NOT NULL,
  `query` varchar(500) NOT NULL,
  `rollno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`sno`, `date`, `query`, `rollno`) VALUES
(1, '2011-12-01', 'when is the last date of record submissions?', ''),
(2, '0000-00-00', 'klaxJlkxn', 'Xzx'),
(3, '0000-00-00', 'saXA', 'DAdx'),
(4, '0000-00-00', 'new public management', '18001A0518'),
(5, '0000-00-00', 'i am so lucky ,y', '18001A0518'),
(6, '0000-00-00', 'is it working?', '18001A0518'),
(7, '0000-00-00', 'is it working?', '18001A0518'),
(8, '0000-00-00', 'when will lab externals conducted?', '18001A0518'),
(9, '0000-00-00', 'when will be the joining dates?', '18001A0518'),
(10, '0000-00-00', 'when will be the last date?', '18001A0518'),
(11, '0000-00-00', 'when is the lab exam?', '18001A0518'),
(12, '0000-00-00', 'when is the lab exam?', '18001A0518');

-- --------------------------------------------------------

--
-- Table structure for table `query_answered`
--

CREATE TABLE `query_answered` (
  `s.no` int(10) NOT NULL,
  `query` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query_answered`
--

INSERT INTO `query_answered` (`s.no`, `query`, `answer`) VALUES
(1, 'when is the last date of record submissions?', 'last day of record submission-29 th may'),
(2, 'lab dates', 'lab dates-28 th may'),
(3, 'deadd', 'kjkldndjfhiew'),
(4, 'dwjklawef', 'iojqedf'),
(5, 'lab external dates', 'lab externals on 27 th apr 2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `c_password` varchar(15) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `email`, `username`, `password`, `c_password`, `role`) VALUES
(1, 'chandrika@gmail.com', 'Chandrika', 'Chandu@svl27', 'Chandu@svl27', ' Student'),
(2, 'chandrikarep@gmail.com', 'Chandrikarep', 'Chandu@svl27rep', 'Chandu@svl27rep', ' Representative'),
(13, '123@gmail.com', '123', 'Abc@12345678', 'Abc@12345678', ' Student'),
(14, 'chandu123@gmail.com', 'chandu123', 'Chandu123@123', 'Chandu123@123', ' Representative'),
(15, 'vasu@gmail.com', 'vasu', 'Vasu@123', 'Vasu@123', ' Student'),
(17, 'v@gmail.com', 'v', 'Vasundhara@1', 'Vasundhara@1', ' Student');

-- --------------------------------------------------------

--
-- Table structure for table `web_tech`
--

CREATE TABLE `web_tech` (
  `s.no` int(10) NOT NULL,
  `syllabus` varchar(255) NOT NULL,
  `Refer` varchar(255) NOT NULL,
  `Assignments` varchar(255) NOT NULL,
  `Attendance` varchar(255) NOT NULL,
  `que_papers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_tech`
--

INSERT INTO `web_tech` (`s.no`, `syllabus`, `Refer`, `Assignments`, `Attendance`, `que_papers`) VALUES
(0, '', '', '6782-', '', ''),
(0, '', '', 'uploads/krishna (2).png', '', ''),
(0, '', '', 'uploads/1559648965626.jpg', '', ''),
(0, '', 'uploads/', '', '', ''),
(0, '', 'uploads/OOP Unit-2 half.pdf', '', '', ''),
(0, '', 'uploads/OOP Unit-5.pdf', '', '', ''),
(0, '', 'uploads/UNIT-4-OS.pptx', '', '', ''),
(0, '', '', '', 'uploads/CN-Assignment_18001A0518.docx', ''),
(0, '', 'uploads/OOP Unit-5.pdf', '', '', ''),
(0, '', '', 'uploads/CN-Assignment_18001A0518.docx', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `indexdata`
--
ALTER TABLE `indexdata`
  ADD PRIMARY KEY (`year_of_study`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`sno`,`date`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `query_answered`
--
ALTER TABLE `query_answered`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `query_answered`
--
ALTER TABLE `query_answered`
  MODIFY `s.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
