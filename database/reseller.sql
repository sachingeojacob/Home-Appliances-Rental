-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 06:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reseller`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `status`) VALUES
(1, 'anaconda', 'bcf3ec2503663c18fc3f693b73aac49600d577bf27959ffe2758afe943c79e87', 1),
(2, 'ccc', '0aa3c90ae4d73556cdf189f6186bba9f7b2c953c9368a1671b28812b3746a27b', 1),
(3, 'fsgf', 'b2d991978dc70fcbe427cb4ad8c38a93d305b182f9ddc7316ad83465b9709db8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `date`, `product_id`, `userid`, `quantity`, `amount`, `status`, `fdate`, `tdate`) VALUES
(1, '2020-12-23', 1, 3, 3, 2700, 1, '2020-12-24', '2020-12-27'),
(2, '2020-12-23', 1, 11, 2, 1800, 1, '2020-12-27', '2020-12-30'),
(3, '2020-12-23', 3, 11, 2, 400, 1, '2020-12-22', '2020-12-26'),
(4, '2020-12-23', 1, 3, 1, 600, 1, '2020-12-23', '2020-12-25'),
(5, '2020-12-23', 3, 3, 1, 100, 1, '2020-12-24', '2020-12-26'),
(6, '2020-12-23', 3, 3, 2, 200, 1, '2020-12-24', '2020-12-26'),
(7, '2020-12-23', 5, 3, 2, 5550, 1, '2020-12-23', '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Tv', 1),
(2, 'Fridge', 1),
(3, 'Washing Machine', 1),
(4, 'Air Conditioner', 1),
(8, 'Iron Box', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `int` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `complaint` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`int`, `user_id`, `seller_id`, `complaint`, `status`) VALUES
(1, 11, 4, 'not providing good product', 0),
(2, 11, 4, 'asdf', 0),
(3, 11, 2, '', 0),
(4, 3, 2, 'Service is not good', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `status`) VALUES
(1, 'INDIA', 1),
(2, 'JAPAN', 1),
(3, 'CANADA', 1),
(4, 'USA', 1),
(7, 'Buttan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `first_name` varchar(65) NOT NULL,
  `last_name` varchar(65) NOT NULL,
  `mobile_number` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `userid`, `first_name`, `last_name`, `mobile_number`, `email`, `username`, `password`, `status`) VALUES
(1, 3, 'sachin', 'sachin', '9495574128', 'sachin@gmail.com', 'sachin', 'sachin', 1),
(2, 5, 'geo', 'jacob', '6261789652', 'geo@gmail.com', 'geo', 'geo', 0),
(7, 11, 'Hanna', 'Jacob', '8596325412', 'hanna@gmail.com', 'hanna', 'hanna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE `debit` (
  `debitid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `ctype` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `cardno` int(255) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debit`
--

INSERT INTO `debit` (`debitid`, `userid`, `ctype`, `bank`, `cardno`, `status`) VALUES
(1, 2, 'debitcard', 'SBI', 1231425369, 1),
(2, 2, 'creditcard', 'canara bank', 2147483647, 1),
(3, 2, 'debitcard', 'SBI', 2147483647, 1),
(4, 3, 'debitcard', 'canara bank', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_name` varchar(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `state_id`, `district_name`, `status`) VALUES
(1, 1, 'KOTTAYAM', 1),
(2, 1, 'IDUKKI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `role_id`, `status`) VALUES
(1, 'admin', 'admin', 1, 1),
(2, 'noble', 'noble', 2, 1),
(3, 'sachin', 'sachin', 3, 1),
(9, 'geo', 'geo', 3, 1),
(11, 'hanna', 'hanna', 3, 1),
(12, 'jeswin', 'jeswin', 2, 1),
(14, 'cyril', 'cyril', 2, 1),
(15, 'chacko', 'chacko', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(65) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `status1` int(10) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `yom` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `description`, `quantity`, `rent`, `image`, `status`, `status1`, `image1`, `image2`, `image3`, `seller_id`, `company`, `size`, `color`, `yom`) VALUES
(1, 1, 'oneplus Y41', '32 inch android led tv', 14, 300, '1oneplus 32 80cm.jpg', 1, 1, '2oneplus.jpg', '2oneplus.jpg', '4oneplus.jpg', 1, 'oneplus', 'medium', 'black', 2020),
(2, 2, 'supercooler', '13L supercooler Fridge', 30, 200, '1 godrej.jpg', 1, 1, '2godrej.jpg', '2godrej.jpg', '2godrej.jpg', 1, 'Godrej', 'large', 'red', 2020),
(4, 1, 'sony TV', 'Android led television with curved display', 35, 440, 'tv1.jpg', 1, 1, 'tv1.jpg', 'tv1.jpg', 'tv1.jpg', 2, 'sony', 'large', 'black', 2020),
(5, 3, 'wmy456', 'fully automatic', 28, 555, '1 lg81x68FHUBhL._SL1500_.jpg', 1, 1, '2 lg.jpg', '2 lg.jpg', '3lg.jpg', 1, 'LG', 'medium', 'white', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `rid` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `seller_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `price` int(50) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Lend'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`rid`, `date`, `userid`, `product_id`, `seller_id`, `quantity`, `company`, `size`, `color`, `price`, `fdate`, `tdate`, `status`) VALUES
(1, '2020-12-23', 3, 3, 2, 2, 'Bajaj', 'Small', 'White', 200, '2020-12-24', '2020-12-26', 'Collected'),
(2, '2020-12-23', 3, 5, 1, 2, 'LG', 'medium', 'white', 5550, '2020-12-23', '2020-12-28', 'Collected');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `status`) VALUES
(1, 'admin', 1),
(2, 'seller', 1),
(3, 'buyer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `first_name` varchar(65) NOT NULL,
  `last_name` varchar(65) NOT NULL,
  `store_name` varchar(65) NOT NULL,
  `mobile_number` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `gst_no` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `userid`, `first_name`, `last_name`, `store_name`, `mobile_number`, `email`, `gst_no`, `username`, `password`, `lat`, `lon`, `status`) VALUES
(1, 2, 'Noble', 'George', 'Oxygen', '9563258741', 'noble@gmail.com', '626599', 'noble', 'noble', '9.466711', '76.549989', 1),
(2, 12, 'Jeswin', 'James', 'KMC Store', '8287856325', 'jeswin@yahoo.com', '632589', 'jeswin', 'jeswin', '9.57739', '76.521641', 1),
(3, 15, 'chacko', 'v', 'rex', '8659325698', 'chacko@gmail.com', '569854', 'chacko', 'chacko', '9.60716', '76.58285', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sellerrating`
--

CREATE TABLE `sellerrating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerrating`
--

INSERT INTO `sellerrating` (`id`, `user_id`, `seller_id`, `rating`) VALUES
(2, 18, 4, 2),
(3, 18, 2, 3),
(4, 11, 0, 4),
(5, 11, 2, 5),
(6, 11, 4, 4),
(7, 2, 4, 5),
(8, 2, 2, 5),
(9, 12, 6, 1),
(10, 7, 6, 5),
(11, 5, 6, 5),
(12, 3, 4, 2),
(13, 3, 2, 3),
(14, 3, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`, `status`) VALUES
(1, 1, 'KERALA', 1),
(2, 1, 'DELHI', 1),
(3, 1, 'MUMBAI', 1),
(5, -1, 'BANGALORE', 1),
(7, 1, 'Tamil Nadu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `total` int(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wid`, `userid`, `product_id`, `count`, `total`, `status`) VALUES
(2, 2, 56, 1, 0, 0),
(12, 2, 57, 1, 0, 0),
(13, 2, 56, 1, 0, 0),
(14, 2, 58, 1, 0, 0),
(18, 2, 55, 1, 30000, 0),
(19, 2, 58, 1, 900, 0),
(20, 45, 55, 1, 600, 0),
(21, 45, 55, 1, 600, 0),
(23, 2, 57, 2, 1600, 0),
(24, 2, 56, 2, 1400, 0),
(25, 4, 57, 2, 1600, 0),
(26, 4, 59, 1, 200, 1),
(27, 2, 61, 1, 500, 0),
(28, 2, 1, 3, 900, 0),
(29, 11, 1, 12, 3600, 0),
(30, 11, 1, -34, -10200, 0),
(31, 11, 2, 10, 4560, 0),
(33, 9, 2, 50, 22800, 0),
(34, 9, 2, 5, 2280, 0),
(35, 11, 2, 2, 912, 0),
(36, 11, 2, 2, 912, 0),
(37, 11, 2, 2, 912, 0),
(38, 11, 2, 2, 912, 0),
(39, 11, 2, 2, 912, 0),
(40, 11, 2, 2, 912, 0),
(41, 11, 1, 5, 1500, 0),
(42, 11, 2, 3, 1368, 0),
(44, 7, 1, 1, 300, 0),
(45, 7, 2, 2, 912, 1),
(46, 3, 1, 3, 900, 0),
(48, 11, 1, 2, 600, 0),
(49, 11, 3, 2, 100, 0),
(50, 3, 1, 1, 300, 0),
(51, 3, 3, 1, 50, 0),
(52, 3, 3, 2, 100, 0),
(53, 3, 5, 2, 1110, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `country_name` (`country_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`debitid`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`),
  ADD UNIQUE KEY `district_name` (`district_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `gst_no` (`gst_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sellerrating`
--
ALTER TABLE `sellerrating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD UNIQUE KEY `state_name` (`state_name`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `debit`
--
ALTER TABLE `debit`
  MODIFY `debitid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `rid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellerrating`
--
ALTER TABLE `sellerrating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
