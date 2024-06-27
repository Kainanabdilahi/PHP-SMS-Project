-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 05:40 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `address`, `gender`) VALUES
(1, 'Mohamed Khalif Jama', 61665588, 'Mogadishu, Somalia', 'Male'),
(37, 'Abdirahman Ali Hayle', 610541525, 'Mogadishu, Somalia', 'Male'),
(38, 'Ibrahim Abdalla Hassan', 659851152, 'Hargeisa, Somaliland', 'Male'),
(42, 'Dahir Ahmed Osman', 619466437, 'Mogadishu, Somalia', 'Male'),
(45, 'Keynan Abdullahi Hassan', 659851153, 'Mogadishu, Somalia', 'Male'),
(46, 'Mahad Mohamoud Hussein', 2147483647, 'Mogadishu, Somalia', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(40) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `response_name` varchar(40) NOT NULL,
  `response_phone` int(11) NOT NULL,
  `gendar` varchar(40) NOT NULL,
  `shift_work` varchar(40) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `phone`, `address`, `experience`, `position`, `response_name`, `response_phone`, `gendar`, `shift_work`, `salary`) VALUES
(25, 'Aisha Abdalla Osman', 2147483647, 'Mogadishu, Somalia', 'Degree', 'Reception', 'Abdalla Osman', 2147483647, 'Female', 'Shift A', 250),
(26, 'Yaasin Abdulahi Ali', 2147483647, 'Hargeisa, Somaliland', 'Master', 'Marketing Manager', 'Abdulahi Ali', 2147483647, 'Male', 'Shift A', 500),
(31, 'Dahir Ahmed Osman', 2147483647, 'Mogadishu, Somalia', 'Degree', 'Marketing Manager', 'Ahmed Osman', 2147483647, 'Male', 'Shift C', 850),
(32, 'Ahmed Muuse', 2147483647, 'Mogadishu, Somalia', 'Master', 'Reception', 'Muuse Abdi', 2147483647, 'Male', 'Shift B', 300);

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(20) NOT NULL,
  `oid` int(50) NOT NULL,
  `total` float NOT NULL,
  `ptype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `oid`, `total`, `ptype`, `status`) VALUES
(11, 25, 100, 'EVC', 'Receved'),
(12, 31, 100, 'E-Dahab', 'Receved'),
(13, 22, 200, 'Bank', 'Receved'),
(14, 28, 100, 'SH.SO', 'Receved'),
(15, 32, 100, 'Bank', 'Not-Receved'),
(16, 31, 100, 'E-Dahab', 'Receved'),
(17, 26, 100, 'SH.SO', 'Not-Receved'),
(18, 25, 100, 'EVC', 'Receved');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cname`, `pname`, `quantity`, `price`, `discount`, `total`) VALUES
(22, 'Mohamed Khalif Jama', 'Aire bodes ', '100', 10, 0, '1000'),
(24, 'Dahir Ahmed Osman', 'iPhone 12', '1', 450, 0, '450'),
(25, 'Abdirahman Ali Hayle', 'Smart Watch', '20', 15, 5, '295'),
(26, 'Keynan Abdullahi', 'Samsung A14', '5', 180, 1.75, '898.25'),
(27, 'Ibrahim Abdalla', 'iPhone 12', '10', 450, 30, '4470'),
(28, 'Dahir Ahmed Osman', 'Smart Watch', '10', 10, 20, '80'),
(31, 'Mohamed Khalif Jama', 'Samsung A14', '10', 180, 50, '1750'),
(32, 'Abdirahman Ali Hayle', 'Smart Watch', '1', 10, 2, '10'),
(33, 'Ibrahim Abdalla', 'Smart Watch', '1', 10, 2, '8'),
(34, 'Mohamed Khalif Jama', 'Laptop Stand', '1', 5, 1.5, '3.5'),
(35, 'Abdirahman Ali Hayle', 'iPhone 12', '2', 180, 5, '355'),
(36, 'Ibrahim Abdalla', 'Laptop Stand', '5', 10, 1.5, '48.5'),
(37, 'Abdirahman Ali Hayle', 'Laptop Stand', '2', 5, 2.5, '7.5');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pries` varchar(40) NOT NULL,
  `quality` varchar(40) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `pries`, `quality`, `date`) VALUES
(14, 'Smart Watch', '20.99', 'New', '2024-06-13'),
(17, 'Aire bodes ', '12.5', 'New', '2024-06-13'),
(22, 'Laptop Stand', '5.99', 'New', '2024-06-13'),
(26, 'iPhone 12', '650', 'New', '2024-06-13'),
(27, 'Samsung A14', '180', 'New', '2025-07-17'),
(28, 'Keyboard Light', '5', 'New', '2024-06-28'),
(29, 'Toshiba Laptop', '250.99', 'New', '2024-06-13'),
(30, 'Samsung A15', '200', 'New', '2024-06-18'),
(31, 'Tecno Mobile ', '10', 'New', '2024-06-18'),
(32, 'Samsung A15', '200', 'New', '2024-06-20'),
(33, 'Samsung A22', '250', 'New', '2024-06-20'),
(34, 'Samsung A30', '150', 'New', '2024-06-20'),
(35, 'Samsung A32', '190', 'New', '2024-06-20'),
(36, 'Laptop Stand', '5.99', 'New', '2024-06-20'),
(37, 'Lenovo laptop  ', '1200', 'New', '2024-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `quantity` int(40) NOT NULL,
  `price` int(40) NOT NULL,
  `discount` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `cname`, `pname`, `quantity`, `price`, `discount`, `total`) VALUES
(1, 'Abdirahman Ali Hayle', 'Smart Watch', 2, 10, 5, 15),
(2, 'Keynan Abdullahi', 'Aire bodes ', 2, 10, 2, 18),
(6, 'Keynan Abdullahi', 'Aire bodes ', 10, 10, 11.5, 88.5),
(7, 'Dahir Ahmed Osman', 'Samsung A14', 5, 180, 8.25, 891.75),
(8, 'Ibrahim Abdalla', 'Aire bodes ', 1, 10, 3.5, 6.5),
(9, 'Keynan Abdullahi', 'Smart Watch', 1, 10, 0.5, 9.5),
(10, 'Mohamed Khalif Jama', 'Keyboard Light', 10, 5, 5.5, 44.5),
(11, 'Abdirahman Ali Hayle', 'iPhone 12', 2, 450, 90, 810);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin'),
(21, 'user001', 'user001', 'user@gmail.com', 'user'),
(23, 'user002', 'user002', 'user002@gmail.com', 'user'),
(24, 'user003', 'user003  ', 'user003@gmail.com', 'user'),
(25, 'kainan', '123', 'kainan@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
