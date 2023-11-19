-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 03:52 PM
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
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_record`
--

CREATE TABLE `emp_record` (
  `id` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `ssn` varchar(15) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `salary` int(10) NOT NULL,
  `homeaddress` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_record`
--

INSERT INTO `emp_record` (`id`, `ename`, `ssn`, `dept`, `salary`, `homeaddress`) VALUES
(1, 'Jules', '134567876', 'HR', 100000, 'Kigali'),
(2, 'Muneza', '23372782', 'HOD', 300000, 'Huye'),
(4, 'Kabaka', '7372828', 'Principle', 1000000, 'Musanze'),
(5, 'Yves', '2863821887', 'IT', 500000, 'Kigali'),
(6, 'Bgrman', '828727286', 'Admin', 600000, 'Huye'),
(7, 'Marina', '213424121', 'CEO', 1500000, 'Kigali'),
(8, 'Jules', '23372782', 'HOD', 300000, 'hask');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_record`
--
ALTER TABLE `emp_record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
