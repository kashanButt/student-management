-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 07:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `semester_result`
--

CREATE TABLE `semester_result` (
  `semester_id` varchar(80) NOT NULL,
  `student_id` varchar(80) NOT NULL,
  `student_name` varchar(120) NOT NULL,
  `subject_id` varchar(80) NOT NULL,
  `subject_name` varchar(120) NOT NULL,
  `teacher_id` varchar(80) NOT NULL,
  `teacher_name` varchar(120) NOT NULL,
  `marks_obtained` varchar(50) NOT NULL,
  `grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `semester_result`
--

INSERT INTO `semester_result` (`semester_id`, `student_id`, `student_name`, `subject_id`, `subject_name`, `teacher_id`, `teacher_name`, `marks_obtained`, `grade`) VALUES
('demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
