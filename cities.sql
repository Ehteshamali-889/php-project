-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 10:55 AM
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
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(19) NOT NULL,
  `bigcity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `bigcity`) VALUES
(1, 'Abbottabad', 0),
(2, 'Adezai', 0),
(3, 'Ahmadpur East', 0),
(4, 'Ahmed Nager Chatha', 0),
(5, 'Akora Khattak', 0),
(6, 'Ali Khan Abad', 0),
(7, 'Alipur', 0),
(8, 'Alpuri', 0),
(9, 'Arifwala', 0),
(10, 'Attock', 0),
(11, 'Awaran', 0),
(12, 'Ayubia', 0),
(13, 'Badin', 0),
(14, 'Bahawalnagar', 0),
(15, 'Bahawalpur', 1),
(16, 'Banda Daud Shah', 0),
(17, 'Bannu', 0),
(18, 'Barkhan', 0),
(19, 'Batkhela', 0),
(20, 'Battagram', 0),
(21, 'Bhakkar', 0),
(22, 'Bhalwal', 0),
(23, 'Bhera', 0),
(24, 'Bhirkan', 0),
(25, 'Birote', 0),
(26, 'Burewala', 0),
(27, 'Chagai', 0),
(28, 'Chak', 0),
(29, 'Chakdara', 0),
(30, 'Chakwal', 0),
(31, 'Charsadda', 0),
(32, 'Chichawatni', 0),
(33, 'Chillianwala', 0),
(34, 'Chiniot', 0),
(35, 'Chishtian', 0),
(36, 'Chitral', 0),
(37, 'Dadu', 0),
(38, 'Daggar', 0),
(39, 'Dargai', 0),
(40, 'Darya Khan', 0),
(41, 'Daska', 0),
(42, 'Dera Bugti', 0),
(43, 'Dera Ghazi Khan', 0),
(44, 'Dera Ismail Khan', 0),
(45, 'Dhaular', 0),
(46, 'Digri', 0),
(47, 'Dina', 0),
(48, 'Dinga', 0),
(49, 'Dipalpur', 0),
(50, 'Diplo', 0),
(51, 'Dir', 0),
(52, 'Doaba', 0),
(53, 'Dokri', 0),
(54, 'Drosh', 0),
(55, 'Faisalabad', 1),
(56, 'Fateh Jhang', 0),
(57, 'Ferozewala', 0),
(58, 'Ghakhar Mandi', 0),
(59, 'Ghotki', 0),
(60, 'Gojra', 0),
(61, 'Gujar Khan', 0),
(62, 'Gujranwala', 0),
(63, 'Gujrat', 0),
(64, 'Gwadar', 0),
(65, 'Haala', 0),
(66, 'Hafizabad', 0),
(67, 'Hangu', 0),
(68, 'Haripur', 0),
(69, 'Harnai', 0),
(70, 'Haroonabad', 0),
(71, 'Hasilpur', 0),
(72, 'Haveli Lakha', 0),
(73, 'Hyderabad', 0),
(74, 'Islamkot', 0),
(75, 'Jacobabad', 0),
(76, 'Jafarabad', 0),
(77, 'Jalalpur', 0),
(78, 'Jampur', 0),
(79, 'Jamshoro', 0),
(80, 'Jaranwala', 0),
(81, 'Jatoi', 0),
(82, 'Jattan', 0),
(83, 'Jauharabad', 0),
(84, 'Jhal Magsi', 0),
(85, 'Jhang', 0),
(86, 'Jhelum', 0),
(87, 'Jungshahi', 0),
(88, 'Kacchi', 0),
(89, 'Kalabagh', 0),
(90, 'Kalat', 0),
(91, 'Kamalia', 0),
(92, 'Kamoke', 0),
(93, 'Kandhkot', 0),
(94, 'Kandiaro', 0),
(95, 'Karachi', 1),
(96, 'Karak', 0),
(97, 'Karor Lal Esan', 0),
(98, 'Kashmore', 0),
(99, 'Kasur', 0),
(100, 'Kech', 0),
(101, 'Keti Bandar', 0),
(102, 'Khairpur', 0),
(103, 'Khanewal', 0),
(104, 'Khanpur', 0),
(105, 'Kharan', 0),
(106, 'Kharian', 0),
(107, 'Khushab', 0),
(108, 'Khuzdar', 0),
(109, 'Killa Abdullah', 0),
(110, 'Killa Saifullah', 0),
(111, 'Kohat', 0),
(112, 'Kohlu', 0),
(113, 'Kot Addu', 0),
(114, 'Kotri', 0),
(115, 'Kulachi', 0),
(116, 'Lahore', 1),
(117, 'Lakki Marwat', 0),
(118, 'Lalamusa', 0),
(119, 'Larkana', 0),
(120, 'Lasbela', 0),
(121, 'Latamber', 0),
(122, 'Layyah', 0),
(123, 'Lehri', 0),
(124, 'Liaquat Pur', 0),
(125, 'Lodhran', 0),
(126, 'Loralai', 0),
(127, 'Madyan', 0),
(128, 'Mailsi', 0),
(129, 'Malakwal', 0),
(130, 'Mamoori', 0),
(131, 'Mandi Bahauddin', 0),
(132, 'Mansehra', 0),
(133, 'Mardan', 0),
(134, 'Mastuj', 0),
(135, 'Mastung', 0),
(136, 'Matiari', 0),
(137, 'Mehar', 0),
(138, 'Mehrabpur', 0),
(139, 'Mian Channu', 0),
(140, 'Mianwali', 0),
(141, 'Mianwali Bangla', 0),
(142, 'Mingora', 0),
(143, 'Mirpur Khas', 0),
(144, 'Mithani', 0),
(145, 'Mithi', 0),
(146, 'Moro', 0),
(147, 'Multan', 1),
(148, 'Muridke', 0),
(149, 'Murree', 0),
(150, 'Musakhel', 0),
(151, 'Muzaffargarh', 0),
(152, 'Nagarparkar', 0),
(153, 'Nankana Sahib', 0),
(154, 'Narowal', 0),
(155, 'Nasirabad', 0),
(156, 'Naudero', 0),
(157, 'Naushahro Feroze', 0),
(158, 'Naushara', 0),
(159, 'Nawabshah', 0),
(160, 'Nazimabad', 0),
(161, 'Nowshera', 0),
(162, 'Nushki', 0),
(163, 'Okara', 0),
(164, 'Pabbi', 0),
(165, 'Paharpur', 0),
(166, 'Pakpattan', 0),
(167, 'Panjgur', 0),
(168, 'Pattoki', 0),
(169, 'Peshawar', 1),
(170, 'Pir Mahal', 0),
(171, 'Pishin Valley', 0),
(172, 'Qaimpur', 0),
(173, 'Qambar', 0),
(174, 'Qasimabad', 0),
(175, 'Qila Didar Singh', 0),
(176, 'Quetta', 1),
(177, 'Rabwah', 0),
(178, 'Rahim Yar Khan', 0),
(179, 'Raiwind', 0),
(180, 'Rajanpur', 0),
(181, 'Rajo Khanani', 0),
(182, 'Ranipur', 0),
(183, 'Ratodero', 0),
(184, 'Rawalpindi', 0),
(185, 'Renala Khurd', 0),
(186, 'Rohri', 0),
(187, 'Sadiqabad', 0),
(188, 'Safdarabad', 0),
(189, 'Sahiwal', 0),
(190, 'Saidu Sharif', 0),
(191, 'Sakrand', 0),
(192, 'Sanghar', 0),
(193, 'Sangla Hill', 0),
(194, 'Sarai Alamgir', 0),
(195, 'Sargodha', 1),
(196, 'Shahbandar', 0),
(197, 'Shahdadkot', 0),
(198, 'Shahdadpur', 0),
(199, 'Shahpur Chakar', 0),
(200, 'Shakargarh', 0),
(201, 'Sheikhupura', 0),
(202, 'Sherani', 0),
(203, 'Shewa Adda', 0),
(204, 'Shikarpaur', 0),
(205, 'Shorkot', 0),
(206, 'Sialkot', 0),
(207, 'Sibi', 0),
(208, 'Siranwali', 0),
(209, 'Sohawa', 0),
(210, 'Sohbatpur', 0),
(211, 'Soianwala', 0),
(212, 'Sukkur', 0),
(213, 'Swabi', 0),
(214, 'Swat', 0),
(215, 'Talagang', 0),
(216, 'Tando Adam Khan', 0),
(217, 'Tando Allahyar', 0),
(218, 'Tando Muhammad Khan', 0),
(219, 'Tangi', 0),
(220, 'Tangwani', 0),
(221, 'Tank', 0),
(222, 'Taxila', 0),
(223, 'Thall', 0),
(224, 'Thatta', 0),
(225, 'Timergara', 0),
(226, 'Toba Tek Singh', 0),
(227, 'Tordher', 0),
(228, 'Umerkot', 0),
(229, 'Vehari', 0),
(230, 'Wah Cantonment', 0),
(231, 'Warah', 0),
(232, 'Washuk', 0),
(233, 'Wazirabad', 0),
(234, 'Zhob', 0),
(235, 'Ziarat', 0),
(236, 'Islamabad', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
