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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(150) NOT NULL,
  `speciality_id` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `speciality_id`) VALUES
(61, 'Arbitration', '6'),
(62, 'Trademark &  Copyright & Patent', '6'),
(63, 'Customs & Excise', '6'),
(64, 'Income Tax Registration & Filing', '6'),
(65, 'Sales Tax Registration & Filing', '6'),
(66, 'Company Registration', '6'),
(67, 'SECP Compliance', '6'),
(68, 'FBR &  SRB &  KPRA &  BRA', '6'),
(69, 'Punjab Revenue Authority', '6'),
(70, 'Compliance of Notices', '6'),
(71, 'Annual Wealth Statements of Individual &  AOP & Company', '6'),
(72, 'Chamber of Commerce', '6'),
(73, 'Mutual Divorce/Khula', '7'),
(74, 'Family Dispute', '7'),
(75, 'Medical Negligence', '7'),
(76, 'Child Custody', '7'),
(77, 'Trust/Wills Drafting', '7'),
(78, 'Online Nikkah', '7'),
(79, 'Adoption', '7'),
(80, 'Maintenance of Wife & Child', '7'),
(81, 'Inheritance & Succession Certificate', '7'),
(82, 'Marriage Registration', '7'),
(83, 'Court Marriage', '7'),
(84, 'Divorce Notice', '7'),
(85, 'Contract Disputes', '8'),
(86, 'Property Disputes', '8'),
(87, 'Torts', '8'),
(88, 'Complaints Against the City', '8'),
(89, 'Class Action Cases', '8'),
(90, 'Personal?Crime', '9'),
(91, 'Property?Crime', '9'),
(92, 'Inchoate?Crime', '9'),
(93, 'Statutory?Crime', '9'),
(94, 'Financial?Crime', '9'),
(95, 'Establishment &  incorporation &  and sharing of capital in Banking Companies', '10'),
(96, 'Transactions of Banking Business', '10'),
(97, 'Suspension of Business', '10'),
(98, 'Winding up of Banking Business', '10'),
(99, 'Mortgage Matters', '10'),
(100, 'Recovery of Loans', '10'),
(101, 'Debtor & Creditor', '10'),
(102, 'Landlord & Tenant', '10'),
(103, 'Contracts', '10'),
(104, 'Bank Secrecy Matters and Negotiable Instruments', '10'),
(105, 'Bankruptcy', '10'),
(106, 'Financial and regulatory advice', '10'),
(107, 'Health Screening Tests', '11'),
(108, 'Attested and Notarized Documents', '11'),
(109, 'Character Certificate / Criminal Record Checking', '11'),
(110, 'Attestation of Educational Certificate', '11'),
(111, 'Bank Clearance', '11'),
(112, 'No Objection Certificates (NOC\'s)', '11'),
(113, 'International Law', '12'),
(114, 'Insurance', '12'),
(115, 'Property & Land', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
