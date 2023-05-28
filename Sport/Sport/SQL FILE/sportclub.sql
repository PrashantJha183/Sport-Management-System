-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 08:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Password`) VALUES
(123456, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cateogary`
--

CREATE TABLE `cateogary` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cateogary`
--

INSERT INTO `cateogary` (`Id`, `name`, `status`) VALUES
(1, 'cricket', 1),
(4, 'Football', 1);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `SessionId` int(10) NOT NULL,
  `Trainername` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Student Id` int(10) NOT NULL,
  `Student name` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `Date and time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`SessionId`, `Trainername`, `Category`, `Student Id`, `Student name`, `status`, `Date and time`) VALUES
(1, '1', '1', 1, '1', 0, '2023-03-26 08:30:35'),
(2, 'Yash', 'Football', 5, 'Yash', 0, '2023-03-26 08:30:35'),
(3, 'Yash', 'Football', 6, 'Yash', 0, '2023-03-26 08:43:53'),
(4, 'Prashant', 'cricket', 6, 'Yash', 0, '2023-03-26 08:44:48'),
(5, 'Yash', 'Football', 6, 'Yash', 0, '2023-03-29 10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone number` int(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Confirm password` varchar(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Email`, `Phone number`, `Password`, `Confirm password`, `status`) VALUES
(6, 'Yash', 'abc@gmail.com', 1234567890, '123456', '123456', 1),
(8, 'xyz', 'xyz@gmail.com', 987456123, '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Id` int(5) NOT NULL,
  `Trainername` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Id`, `Trainername`, `Category`, `Status`) VALUES
(1, 'Prashant', 'cricket', 1),
(8, 'Yash', 'Football', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cateogary`
--
ALTER TABLE `cateogary`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`SessionId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cateogary`
--
ALTER TABLE `cateogary`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `SessionId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
