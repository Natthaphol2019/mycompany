-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2025 at 06:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
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

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_no`, `cust_name`, `cust_street`, `cust_city`, `cust_state`, `cust_zip`, `ship_to_name`, `ship_to_street`, `ship_to_city`, `ship_to_state`, `ship_to_zip`, `credit_limit`, `last_revised`, `credit_terms`) VALUES
('C002', '112', '40 หมู่.7 ต.สวนพริกไทย', 'เมืองปทุมธานี', 'ปทุมธานี', '1200', 'asdasd1', '1', '1', '1', '1', 1, '2025-07-31', '1');

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
  `reorder_pt` int(11) NOT NULL,
  `sup_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item_no`, `item_name`, `price`, `location`, `qty_on_hand`, `reorder_pt`, `sup_no`) VALUES
('P001', 'Computer', 100, 'Thailand', 5, 10, NULL),
('P003', 'Smartphone', 100, 'Thailand', 1, 5, NULL),
('P004', 'Apple', 10, 'Thailand', 1, 5, NULL),
('P005', 'Ninja', 15, '1', 1, 1, NULL),
('P006', 'Bazazazaxa', 15, '1', 1, 1, NULL),
('P007', '123', 15, '15', 15, 15, 'S001');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_no` varchar(50) NOT NULL,
  `sup_company` varchar(100) NOT NULL,
  `sup_contact` varchar(100) NOT NULL,
  `sup_telephone` varchar(100) NOT NULL,
  `sup_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sup_no`, `sup_company`, `sup_contact`, `sup_telephone`, `sup_email`) VALUES
('S001', 'Thailand', '1234', '123', 'Thailand@gmail.com'),
('S002', 'yoyo', '123', '0643086816', 'yoyo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_no`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_no`),
  ADD KEY `fk_inventory_supplier` (`sup_no`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sup_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `fk_inventory_supplier` FOREIGN KEY (`sup_no`) REFERENCES `suppliers` (`sup_no`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
