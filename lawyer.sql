-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 10:57 AM
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
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `qualification` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_otp` varchar(50) NOT NULL,
  `mobile_otp` varchar(20) DEFAULT NULL,
  `reg_date` text NOT NULL,
  `account_status` varchar(50) NOT NULL,
  `otp_expiry` text NOT NULL,
  `remarks` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `speciality_id` int(10) DEFAULT NULL,
  `profile_status` varchar(30) DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `cnicfront` text DEFAULT NULL,
  `cnicback` text DEFAULT NULL,
  `license` text DEFAULT NULL,
  `notebyadmin` text DEFAULT NULL,
  `online_consultation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `cnic`, `email`, `mobile`, `gender`, `dob`, `qualification`, `password`, `email_otp`, `mobile_otp`, `reg_date`, `account_status`, `otp_expiry`, `remarks`, `city_id`, `speciality_id`, `profile_status`, `pic`, `cnicfront`, `cnicback`, `license`, `notebyadmin`, `online_consultation`) VALUES
(1, 'Muhammad khawer', '36302-1667601-5', 'kayani.raja780@gmail.com', '03156075941', 'Male', '1998-01-14', 'LLB', '123', '', '', '2021-04-21', 'approved', '', '', 147, 6, '', '1620129329_2.png', '1618981404_ramadhan.jpg', '1618981404_56.png', '12354', NULL, 890),
(2, 'Aslam Khan', '36202-1234567-1', 'ana.miler001@gmail.com', '03156075944', 'Male', '1998-01-04', 'LLM', '711929', '', '', '2021-05-04', 'approved', '', '', 147, 6, NULL, '1620130999_1.png', '1620130999_1.png', '1620130999_2.png', '1111', NULL, 500),
(3, 'Zoraiz ', '12345-1234567-9', 'zoraiz@gmail.com', '03331234578', 'Male', '2021-06-22', 'LLB', 'password', '5975', '64844', '2021-06-22', 'pending', '', '', 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
