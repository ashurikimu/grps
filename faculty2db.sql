-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 15, 2024 at 12:14 AM
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
-- Database: `grps`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty2db`
--

CREATE TABLE `faculty2db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `idnum` varchar(20) NOT NULL,
  `yr_level` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `units` int(20) NOT NULL,
  `school_year` varchar(20) NOT NULL DEFAULT '2023-2024',
  `course` varchar(50) NOT NULL DEFAULT 'BS Computer Science',
  `grade` decimal(10,1) NOT NULL,
  `subject_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty2db`
--

INSERT INTO `faculty2db` (`id`, `name`, `idnum`, `yr_level`, `block`, `semester`, `units`, `school_year`, `course`, `grade`, `subject_code`) VALUES
(1, 'Lexi Yurr', '2023-00011', '1', 'A', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1'),
(2, 'Alexandra Cortes', '2023-00012', '1', 'A', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1'),
(3, 'Isabella Martinez', '2023-00013', '1', 'B', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1'),
(4, 'Benjamin Taule', '2023-00014', '1', 'B', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1'),
(6, 'Joshua Garcia', '2023-00015', '1', 'B', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1'),
(7, 'Mikaela Flores', '2023-00016', '1', 'B', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1'),
(8, 'David Mendoza', '2023-00017', '1', 'B', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1'),
(9, 'Sophia Aquino', '2023-00018', '1', 'B', '1st', 3, '2023-2024', 'BS Computer Science', 0.0, 'CSsubj1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty2db`
--
ALTER TABLE `faculty2db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty2db`
--
ALTER TABLE `faculty2db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
