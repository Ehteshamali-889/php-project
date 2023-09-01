-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 10:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_katchery`
--

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_service`
--

CREATE TABLE `lawyer_service` (
  `lawyer_services_id` int(11) NOT NULL,
  `lawyer_id` int(11) DEFAULT NULL,
  `service_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer_service`
--

INSERT INTO `lawyer_service` (`lawyer_services_id`, `lawyer_id`, `service_id`) VALUES
(1, 1, '61'),
(2, 1, '62');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyer_service`
--
ALTER TABLE `lawyer_service`
  ADD PRIMARY KEY (`lawyer_services_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyer_service`
--
ALTER TABLE `lawyer_service`
  MODIFY `lawyer_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
