-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admissions`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(4) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `crg_id` int(4) NOT NULL,
  `clg_name` varchar(25) NOT NULL,
  `course` varchar(20) NOT NULL,
  `seats` int(5) NOT NULL,
  `clg_phno` varchar(10) NOT NULL,
  `clg_pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`crg_id`, `clg_name`, `course`, `seats`, `clg_phno`, `clg_pwd`) VALUES
(8, 'SCMS', 'BCA', 30, '7894561230', 'zxcvbnm'),
(9, 'SCMS', 'IMCA', 15, '7894561230', 'zxcvbnm'),
(10, 'SCMS', 'BCOM', 25, '7894561230', 'zxcvbnm'),
(11, 'ST ALBERTS', 'BSC MATHS', 22, '123456789', 'stalberts'),
(12, 'ST ALBERTS', 'BSC PHYSICS', 17, '123456789', 'stalberts'),
(13, 'ST ALBERTS', 'BSC ZOOLOGY', 15, '123456789', 'stalberts'),
(14, 'ST ALBERTS', 'BSC BOTONY', 12, '123456789', 'stalberts');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_id` int(4) NOT NULL,
  `st_name` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `st_phno` varchar(10) NOT NULL,
  `mark` float NOT NULL,
  `crg_id` int(4) DEFAULT NULL,
  `rqstat` varchar(10) DEFAULT NULL,
  `st_pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `st_name`, `dob`, `st_phno`, `mark`, `crg_id`, `rqstat`, `st_pwd`) VALUES
(3, 'loyed thomas', '1999-02-01', '1456', 7, 13, 'Applied', 'zxcvbnm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`crg_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `crg_id` (`crg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `crg_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `st_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`crg_id`) REFERENCES `college` (`crg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
