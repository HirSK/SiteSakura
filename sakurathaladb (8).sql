-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 05:36 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakurathaladb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_fname` varchar(50) NOT NULL,
  `admin_lname` varchar(50) NOT NULL,
  `admin_contact` varchar(10) NOT NULL,
  `admin_nic` varchar(15) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(60) NOT NULL,
  `admin_photo` varchar(500) NOT NULL,
  `admin_createdDtm` varchar(20) NOT NULL,
  `admin_createdBy` int(100) NOT NULL,
  `admin_isDeleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_fname`, `admin_lname`, `admin_contact`, `admin_nic`, `admin_email`, `admin_password`, `admin_photo`, `admin_createdDtm`, `admin_createdBy`, `admin_isDeleted`) VALUES
(8, 'Milan', 'Peris', '0714273430', '805643967V', 'milan@gmail.com', 'c5983e484db0b621516387b3e50af84020b214c0', '', '2017-12-14 13:33:25', 1, 0),
(12, 'Amila', 'Kumara', '0776456876', '758383890V', 'amila@yahoo.com', '7aa43ad9f0d31c34b758d703e4362978a0630325', 'avatar.png', '2017-12-15 17:16:56', 8, 0),
(13, 'Hirunika', 'Sumuduni', '0710629146', '957931030V', 'hiru@gmail.com', '3537c289a2627c9cd7fb95b64f000227f88a21c6', '', '2018-03-19 17:18:44', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Gingerly rolls'),
(2, 'Gingerly balls'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `regId` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`regId`, `firstName`, `lastName`, `userName`, `password`) VALUES
(16, 'sumudu', 'Nissanka', 'sumudu@gmail.com', 'c3dd214c18f74ca735270deb297f93b11385a06b'),
(17, 'Sasini', 'Silva', 'sasini@gmail.com', 'bb1947406cf53f7b6d0814b62032e806f57bb601'),
(18, 'Hirunika', 'Karunathilaka', 'hiru@gmail.com', '3537c289a2627c9cd7fb95b64f000227f88a21c6');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `empid` varchar(15) NOT NULL,
  `image` blob NOT NULL,
  `title` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `addeddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `empid`, `image`, `title`, `fname`, `lname`, `contact`, `nic`, `gender`, `address`, `email`, `dob`, `addeddate`) VALUES
(5, '1234567', 0x556e6b6e6f776e, 'option1', 'Saman', 'Kumara', '0987865342', '76789635V', 'option1', 'lhksud', 'djhsbj@gmail.com', '2017-12-12', '2012-12-23'),
(6, 'emp123', 0x556e6b6e6f776e, 'option1', 'Thilina', 'Chamika nandathilaka', '0778952135', '940230420V', 'option1', 'Medawaththa', 'thilinachamikashtc@gmail.com', '1994-01-23', '2017-12-19'),
(7, 'emp1234', 0x556e6b6e6f776e, 'option1', 'rtfgetyw', 'sjdhbjh', '0715916092', '930230420V', 'option1', 'Pitakanda', 'thjijdi@gmail.com', '1993-01-23', '2017-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `qty_ordered` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `customer_regID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `description`, `price`, `qty_ordered`, `order_date`, `customer_regID`) VALUES
(11, 3, 'Sakura Gingerly Rolls 10 ps', '50', 1, '2017-12-18', 16),
(12, 5, 'Sakura Gingerly Rolls 25 pack', '150', 1, '2017-12-18', 16),
(13, 9, 'Sakura Naranbik', '100', 1, '2017-12-18', 16),
(14, 4, 'Sakura Gingerly Balls 100g', '100', 1, '2017-12-18', 16),
(15, 3, 'Sakura Gingerly Rolls 10 ps', '50', 1, '2017-12-19', 16),
(16, 3, 'Sakura Gingerly Rolls 10 ps', '50', 1, '2017-12-19', 16),
(17, 7, 'Sakura sesame tofees', '100', 1, '2017-12-19', 16),
(18, 3, 'Sakura Gingerly Rolls 10 ps', '50', 1, '2017-12-19', 16),
(19, 4, 'Sakura Gingerly Balls 100g', '100', 1, '2017-12-19', 16),
(20, 3, 'Sakura Gingerly Rolls 10 ps', '50', 1, '2018-03-19', 18);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_quantity` varchar(1000) NOT NULL,
  `product_price` double NOT NULL,
  `product_discount` double NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_key` varchar(200) NOT NULL,
  `product_addedDtm` varchar(20) NOT NULL,
  `product_sales` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `category_id`, `product_quantity`, `product_price`, `product_discount`, `product_desc`, `product_image`, `product_key`, `product_addedDtm`, `product_sales`) VALUES
(3, 'Sakura Gingerly Rolls 10 ps', 1, '100g', 50, 0, 'Tasteful healthy gingerly rolls', 'roll_10ps.png', 'roll', '2017-10-26 07:16:18', 0),
(4, 'Sakura Gingerly Balls 100g', 2, '100g', 100, 0, 'Tasteful & healthy gingerly balls 100g', 'ball_100g.jpg', 'ball', '2017-10-26 07:26:33', 0),
(5, 'Sakura Gingerly Rolls 25 pack', 1, '25', 150, 0, 'Tasty gingerly rolls 25 pack', 'roll_25ps.jpg', 'roll', '2017-10-26 07:28:51', 0),
(7, 'Sakura sesame tofees', 1, '100g', 100, 0, '', 'rollsimg.jpg', 'tofee', '2017-12-15 12:06:48', 0),
(9, 'Sakura Naranbik', 3, '100g', 100, 0, '', 'NaranBik1.jpg', 'naranbik', '2017-12-16 08:21:55', 0),
(10, 'sakura tofee 2', 1, '100g', 100, 0, '', '', 'tofee', '2017-12-19 07:26:07', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`regId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_cat` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `regId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
