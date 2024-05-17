-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 15, 2024 at 12:13 AM
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
-- Table structure for table `faculty1db`
--

CREATE TABLE `faculty1db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `idnum` varchar(20) NOT NULL,
  `yr_level` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `units` int(20) NOT NULL,
  `school_year` varchar(20) NOT NULL DEFAULT '2023-2024',
  `course` varchar(50) NOT NULL DEFAULT 'BS Information Technology',
  `grade` decimal(10,1) NOT NULL,
  `subject_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty1db`
--

INSERT INTO `faculty1db` (`id`, `name`, `idnum`, `yr_level`, `block`, `semester`, `units`, `school_year`, `course`, `grade`, `subject_code`) VALUES
(1, 'Maria Santos ', '2022-00005', '2', 'A', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105'),
(2, 'Rafael Cruz', '2022-00006', '2', 'A', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105'),
(3, 'Gabriel Reyes', '2022-00007', '2', 'B', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105'),
(4, 'Roberto Lim', '2022-00008', '2', 'B', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105'),
(17, 'Miguel Santos ', '2022-00009', '2', 'A', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105'),
(18, 'Angela Reyes', '2022-00010', '2', 'A', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105'),
(19, 'Carlos Bautista', '2022-00011', '2', 'A', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105'),
(20, 'Ella Marquez', '2022-00012', '2', 'A', '1st', 3, '2023-2024', 'BS Information Technology', 0.0, 'CC105');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty1db`
--
ALTER TABLE `faculty1db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty1db`
--
ALTER TABLE `faculty1db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
