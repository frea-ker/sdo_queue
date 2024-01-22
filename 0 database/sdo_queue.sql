-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 03:33 AM
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
-- Database: `sdo_queue`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnel_accounts`
--

CREATE TABLE `personnel_accounts` (
  `id` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_queue`
--

CREATE TABLE `request_queue` (
  `id` int(11) NOT NULL,
  `requestorID` varchar(50) NOT NULL,
  `rerequestor` varchar(50) NOT NULL,
  `requestType` varchar(200) NOT NULL,
  `requestDescription` varchar(500) NOT NULL,
  `dateRequested` date NOT NULL,
  `timeRequested` date NOT NULL,
  `dateAccomplised` date NOT NULL,
  `timeAccomplised` date NOT NULL,
  `personelActionID` varchar(11) NOT NULL,
  `requestOutcome` varchar(20) NOT NULL,
  `completionCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_list`
--

CREATE TABLE `unit_list` (
  `id` int(11) NOT NULL,
  `unitName` varchar(100) NOT NULL,
  `unitCodeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit_list`
--

INSERT INTO `unit_list` (`id`, `unitName`, `unitCodeName`) VALUES
(1, 'Accounting Unit', 'accounting'),
(2, 'Asssistamt Superintendent', 'ast_superintendent'),
(3, 'Budget Unit', 'budget'),
(4, 'Cashier Unit', 'cashier'),
(5, 'Commision on Audit', 'com_on_audit'),
(6, 'Curriculum Implimentation Unit', 'curr_implimentation'),
(7, 'Information and Communication Technology Services Unit', 'ict'),
(8, 'Payroll Unit', 'payroll'),
(9, 'Personnel Unit', 'personnel'),
(10, 'School Division Superintendent', 'scl_div_superintendent'),
(11, 'School Governance Operation Division', 'scl_gov_ope_div'),
(12, 'Supply Unit', 'supply'),
(13, 'Legal Unit', 'legal'),
(14, 'Superadmin', 'superadmin'),
(15, 'Records Unit', 'records');

-- --------------------------------------------------------

--
-- Table structure for table `unit_services`
--

CREATE TABLE `unit_services` (
  `id` int(11) NOT NULL,
  `unitId` varchar(11) NOT NULL,
  `typeOfService` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personnel_accounts`
--
ALTER TABLE `personnel_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_queue`
--
ALTER TABLE `request_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_list`
--
ALTER TABLE `unit_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_services`
--
ALTER TABLE `unit_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personnel_accounts`
--
ALTER TABLE `personnel_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_queue`
--
ALTER TABLE `request_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_list`
--
ALTER TABLE `unit_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `unit_services`
--
ALTER TABLE `unit_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
