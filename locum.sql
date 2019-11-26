-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 01:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'kalangi', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `diag`
--

CREATE TABLE `diag` (
  `ID` int(11) NOT NULL,
  `patient_Fn` varchar(255) NOT NULL,
  `patient_Ln` varchar(255) NOT NULL,
  `report` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diag`
--

INSERT INTO `diag` (`ID`, `patient_Fn`, `patient_Ln`, `report`) VALUES
(0, 'david', 'dut', '');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostics`
--

CREATE TABLE `diagnostics` (
  `ID` int(11) NOT NULL,
  `patient_Fn` varchar(255) NOT NULL,
  `patient_Ln` varchar(255) NOT NULL,
  `report` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnostics`
--

INSERT INTO `diagnostics` (`ID`, `patient_Fn`, `patient_Ln`, `report`) VALUES
(0, 'sdfgf', 'dfhgj', ''),
(0, 'david', 'dut', ''),
(0, 'James', 'Mwangi', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `first_name`, `last_name`, `hospital`, `experience`, `email`, `dob`, `password`) VALUES
(0, 'Fred', 'Kalangi', 'NBI Hosp', 12, 'fredkalangi@gmail.com', '1990-01-01', 'b5d812a3a1c6bdfeba960988db660e03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diag`
--
ALTER TABLE `diag`
  ADD PRIMARY KEY (`ID`,`patient_Ln`);

--
-- Indexes for table `diagnostics`
--
ALTER TABLE `diagnostics`
  ADD PRIMARY KEY (`ID`,`patient_Ln`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ID`,`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
