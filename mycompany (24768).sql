-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2025 at 10:16 AM
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
-- Database: `mycompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `csutomers`
--

CREATE TABLE `csutomers` (
  `cust_no` varchar(20) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_street` varchar(200) NOT NULL,
  `cust_city` varchar(200) NOT NULL,
  `cust_state` varchar(200) NOT NULL,
  `cust_zip` varchar(4) NOT NULL,
  `ship_to_name` varchar(200) NOT NULL,
  `ship_to_street` varchar(200) NOT NULL,
  `ship_to_city` varchar(200) NOT NULL,
  `ship_to_state` varchar(200) NOT NULL,
  `ship_to_zip` varchar(4) NOT NULL,
  `credit_limit` float NOT NULL,
  `last_revised` date NOT NULL,
  `credit_terms` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `item_no` varchar(20) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `location` varchar(200) NOT NULL,
  `qty_on_hand` int(11) NOT NULL,
  `reorder_pt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csutomers`
--
ALTER TABLE `csutomers`
  ADD PRIMARY KEY (`cust_no`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
