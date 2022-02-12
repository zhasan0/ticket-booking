-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 10:52 AM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `location`, `created_at`) VALUES
(1, 'US BANGLA', 'Dhaka', '2022-02-11 20:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `purchase_price` double NOT NULL,
  `sale_price` double NOT NULL,
  `ticket_origin_id` bigint(20) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `purchase_price`, `sale_price`, `ticket_origin_id`, `active`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(2, 1, 1000, 1200, 1, 1, 1, '2022-02-12 09:26:55', NULL, NULL),
(4, 2, 1000, 1200, 1, 1, 2, '2022-02-12 09:44:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_origins`
--

CREATE TABLE `ticket_origins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `company_id` int(11) NOT NULL,
  `_from` varchar(255) NOT NULL,
  `_to` varchar(255) NOT NULL,
  `fly_date` date NOT NULL,
  `purchase_price` double NOT NULL,
  `sale_price` double NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_origins`
--

INSERT INTO `ticket_origins` (`id`, `name`, `active`, `company_id`, `_from`, `_to`, `fly_date`, `purchase_price`, `sale_price`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Dhaka to Chittagong', 1, 0, 'Dhaka', 'Chittagong', '2022-02-08', 1000, 1200, 0, '2022-02-11 20:04:18', NULL, NULL),
(2, 'Dhaka to Khulna', 1, 0, 'Dhaka', 'Khulna', '2022-02-22', 1000, 1200, 0, '2022-02-11 20:06:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'customer' COMMENT 'customer, admin',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `email`, `phone`, `country`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Zahid Hasan', 'zhasan0@gmail.com', '', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2022-02-11 18:42:33', '0000-00-00 00:00:00'),
(2, 'customer', 'Zahid Air lts.', 'zhasan00@gmail.com', '', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2022-02-09 19:10:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_origins`
--
ALTER TABLE `ticket_origins`
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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_origins`
--
ALTER TABLE `ticket_origins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
