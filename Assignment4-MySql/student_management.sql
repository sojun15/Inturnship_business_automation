-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2025 at 07:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `credit` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `credit`) VALUES
(3101, 'Database', 3.00),
(3102, 'Database Lab', 1.50),
(3205, 'Software Engineering', 3.00),
(3206, 'Software Engineering', 1.50);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int(10) NOT NULL,
  `student_id` int(6) NOT NULL,
  `course_id` int(6) NOT NULL,
  `enrollment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `student_id`, `course_id`, `enrollment_date`) VALUES
(101, 15, 3101, '2025-07-30'),
(102, 15, 3102, '2025-07-30'),
(103, 17, 3105, '2025-07-31'),
(104, 17, 3106, '2025-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `email`, `phone`) VALUES
(1, 'Rahad', 'rahad@gmail.com', 1701010101),
(2, 'Partho', 'partho@gmail.com', 1802020202),
(15, 'sojun', 'sojun@gmail.com', 1715151515),
(17, 'sourov', 'sourov@gmail.com', 1817171717),
(37, 'sohan', 'sohan@gmail.com', 1937373737);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


/*! Display all students and their enrolled courses. */
SELECT courses.course_name 
FROM courses
INNER JOIN enrollments ON courses.course_id = enrollments.course_id;


/*! Find students who are not enrolled in any course. */
SELECT students.name
FROM students
LEFT JOIN enrollments ON students.student_id = enrollments.student_id
WHERE enrollments.student_id IS NULL;


/*! Update a specific student’s phone number. */
UPDATE students
SET phone = 1862341515
WHERE student_id=15;


/*! Delete one specific enrollment record. */
DELETE FROM enrollments
WHERE enrollment_id=102;