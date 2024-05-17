-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 15, 2024 at 12:12 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `course`, `username`, `password`, `user_type`) VALUES
(1, 'Mateo Santos', '', 'faculty1', 'faculty1', 'faculty'),
(2, 'Maria Dela Cruz', '', 'faculty2', 'faculty2', 'faculty'),
(3, 'Maria Santos', 'BS Information Technology', '2022-00005', '06152002', 'student'),
(4, 'Rafael Cruz', 'BS Information Technology', '2022-00006', '09032003', 'student'),
(6, 'Gabriel Reyes', 'BS Information Technology', '2022-00006', '04202004', 'student'),
(7, 'Roberto Lim', 'BS Information Technology', '2022-00008', '12102004', 'student'),
(8, 'Lexi Yurr', 'BS Computer Science', '2023-00011', '03082006', 'student'),
(9, 'Alexander Jones', 'BS Computer Science', '2023-00012', '11122004', 'student'),
(10, 'Isabella Martinez', 'BS Computer Science', '2023-00013', '07252003', 'student'),
(11, 'Benjamin Taule', 'BS Computer Science', '2023-00014', '02192002', 'student'),
(12, 'Miguel Santos ', 'BS Information Technology', '2022-00009', '04102002', 'student'),
(13, 'Angela Reyes', 'BS Information Technology', '2022-00010', '07152001', 'student'),
(14, 'Carlos Bautista', 'BS Information Technology', '2022-0001', '01252003', 'student'),
(15, 'Ella Marquez', 'BS Information Technology', '2022-00012', '06302003', 'student'),
(16, 'Joshua Garcia', 'BS Computer Science', '2023-00015', '11052002', 'student'),
(17, 'Mikaela Flores', 'BS Computer Science', '2023-00016', '03202004', 'student'),
(18, 'David Mendoza', 'BS Computer Science', '2023-00017', '09182001', 'student'),
(19, 'Sophia Aquino', 'BS Computer Science', '2023-00018', '12032004', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
