-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 05:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `SNO` int(11) NOT NULL,
  `Regno` varchar(20) DEFAULT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  `SubjectCode` varchar(20) DEFAULT NULL,
  `TotalClasses` int(100) NOT NULL,
  `Present` int(100) NOT NULL,
  `Absent` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`SNO`, `Regno`, `Subject`, `SubjectCode`, `TotalClasses`, `Present`, `Absent`) VALUES
(1, 'Admin1', 'Chemistry', 'Ch1', 20, 18, 2),
(2, 'Admin1', 'Physics	', 'P12', 23, 20, 3),
(3, 'Admin1', 'English	', 'E1', 20, 20, 0),
(4, 'Admin1', 'Computer	', 'Ch1', 24, 22, 2),
(5, 's123', 'Social	', 'S1', 20, 19, 1),
(6, 's123', 'Physics	', 'Ph1', 21, 21, 0),
(7, 's123', 'English	', 'E2', 21, 19, 2),
(8, 's123', 'Maths	', 'M1', 21, 18, 3),
(9, 's123', 'Physics	', 'Ph123', 20, 19, 1),
(10, 's2123', 'Physics	', 'Ph15', 21, 20, 1),
(11, 's2123', 'Chemistry	', 'Ch12', 23, 21, 2),
(12, 's2123', 'Computer	', 'C', 19, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Sno` int(11) NOT NULL,
  `Regno` varchar(20) DEFAULT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  `SubjectCode` varchar(20) DEFAULT NULL,
  `Exam1` double DEFAULT NULL,
  `Exam2` double DEFAULT NULL,
  `Exam3` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Sno`, `Regno`, `Subject`, `SubjectCode`, `Exam1`, `Exam2`, `Exam3`) VALUES
(1, 'Admin1', 'Chemistry', 'Ch1', 10, 40.6, 45),
(2, 'Admin1', 'Physics', 'P12', 9.2, 46, 45),
(3, 'Admin1', 'English', 'E1', 8, 47, 42),
(4, 'Admin1', 'Computer ', 'Ch1', 10, 48, 45.5),
(5, 's123', 'Social', 'S1', 7, 40.8, 39),
(7, 's123', 'Physics', 'Ph1', 9, 45, 43.9),
(8, 's123', 'English', 'E2', 8, 45, 42.9),
(9, 's123', 'Maths', 'M1', 8, 45, 42.9),
(10, 's123', 'Physics', 'Ph123', 8.9, 45, 42),
(11, 's2123', 'Physics', 'Ph15', 9, 43, 42.9),
(12, 's2123', 'Chemistry', 'Ch12', 8, 42, 38.8),
(13, 's2123', 'Computer', 'C', 8, 40, 42.8);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` varchar(100) NOT NULL,
  `Regno` varchar(100) NOT NULL,
  `Emailid` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `Regno`, `Emailid`, `Password`) VALUES

('Admin', 'Admin1', 'admin2@gmail.com', 'admin123'),
('Student1', 's123', 'student1@gmail.com', 'studnet123'),
('Student2', 's2123', 'student2@gmail.com', 'Student123');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `Regno` varchar(20) DEFAULT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  `SubjectCode` varchar(20) DEFAULT NULL,
  `Slot` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`Regno`, `Subject`, `SubjectCode`, `Slot`) VALUES
('s123', 'Social', '	S1', 'A'),
('s123', 'Physics', 'Ph1', 'B'),
('s123', 'English	', 'E2', 'C'),
('s123', 'Maths	', 'M1', 'D'),
('s123', 'Physics	', 'Ph123', 'H'),
('s2123', 'Physics	', 'Ph15', 'A'),
('s2123', 'Chemistry	', 'Ch12', 'B'),
('s2123', 'Computer	', 'C', 'C'),
('Admin1', 'Chemistry', 'Ch1', 'A'),
('Admin1', 'Physics	', 'P12', 'C'),
('Admin1', 'English	', 'E1', 'B'),
('Admin1', 'Computer', '	Ch1', 'H');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`SNO`),
  ADD KEY `Regno` (`Regno`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`Sno`),
  ADD KEY `Regno` (`Regno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Regno`,`Emailid`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD KEY `Regno` (`Regno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Regno`) REFERENCES `register` (`Regno`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`Regno`) REFERENCES `register` (`Regno`);

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_ibfk_1` FOREIGN KEY (`Regno`) REFERENCES `register` (`Regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
