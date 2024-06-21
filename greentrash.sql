-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 10:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greentrash`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `name`, `username`, `password`, `contact`) VALUES
(1, 'noor', 'noor_fatima', '', '123456789'),
(2, 'aasia', 'aasia-27', 'aasia', '122355666'),
(3, 'abcd', 'abcd', 'abcd', '12457899'),
(4, 'noor_fatima', 'noor', '123456', '2345678'),
(5, 'noor', 'noor', 'noor', '12345678'),
(6, 'abcx', 'agsj', '1234', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(10) NOT NULL,
  `prod_id` int(25) NOT NULL,
  `usename` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `prod_id`, `usename`, `first`, `last`, `email`, `address`, `phone`) VALUES
(2, 0, '', 'lmn', 'pqr', 'pqr.lmn@yz.com', 'patna', '1234567890'),
(3, 0, '', 'tyu', 'uioo', 'asd@qwe.com', 'patna', '4567890321'),
(4, 0, '', 'sdf', 'ui', 'ui@gool.com', 'patna', '567832109'),
(5, 0, '', 'nym', 'tyu', 'nym@hnm.com', 'ghjk', '67890987654');

-- --------------------------------------------------------

--
-- Table structure for table `buyertable`
--

CREATE TABLE `buyertable` (
  `id` int(20) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyertable`
--

INSERT INTO `buyertable` (`id`, `first`, `last`, `email`, `username`, `password`) VALUES
(1, 'abc', 'xyz', 'abc@xyz.com', 'abc', '12345'),
(2, 'Central', 'Education', 'noor@qwer.com', 'abana', 'abana@1234'),
(3, 'aghsbsn', 'ysubsj', 'faab@gdbjs', 'auswbwj', 'wjwnwiq'),
(4, 'noor', 'uaa', 'sisia.qw@gj', 'noor.abc', 'abcd@1234'),
(5, 'gak', 'hss', 'YSJS@dfg', 'noor', 'noor');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `First_name`, `Last_name`, `email_id`, `message`) VALUES
(1, 'abcd', 'xyza', 'n.noorfatima2016@gmail.com', 'hello,how are you??'),
(2, 'dfgh', 'werty', 'abc@gmail.com', 'sdfghj'),
(3, 'qwert', 'cvb', 'estgfh@123', 'asdfghjkl'),
(4, 'Central', 'Education', 'n.noorfatima2016@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(10) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `prod_id`, `user_id`, `first`, `last`, `email`, `address`, `phone`) VALUES
(19, '1', 'vipul', 'vipul', 'saran', 'dfgb@dfgh', 'ertyj', '234567899876'),
(20, '2', 'vipul', 'vipul', 'saran', 'n.noorfatima2016@gmail.com', '102 DANEYAL MANSION SAMANPURA', '06202044819'),
(21, '1', 'noor', 'Central', 'Education', 'n.noorfatima2016@gmail.com', '102 DANEYAL MANSION SAMANPURA', '06202044819'),
(22, '1', 'noor', 'noor', 'fatima', 'noor@gmail.com', 'patna', '56789098'),
(23, '4', 'noor.abc', 'Noor', 'fatima', 'noor@1234', 'Patna', '4567890987656'),
(24, '6', 'noor', 'noor', 'pendk', 'bsksn@nks', 'patna', '92039328282'),
(25, '5', 'noor', 'ghj', 'erty', 'rty@ert', 'tyj', '3456');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prod_id`) VALUES
(3, 2),
(4, 2),
(5, 2),
(6, 1),
(7, 2),
(8, 2),
(9, 1),
(10, 2),
(11, 2),
(12, 1),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 1),
(18, 2),
(19, 1),
(20, 2),
(21, 1),
(22, 1),
(23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `type`, `username`, `product_name`, `quantity`, `image`, `date`, `time`, `area`, `city`, `pincode`) VALUES
(1, 'Paper', '', 'paper', -12, 'trash1.jpg', '2022-01-28', '22:20:00', '102 DANEYAL MANSION SAMANPURA', 'INDRAPURI RAJABAZAR,Patna', 800014),
(2, 'Glass', '', 'glass bottle', 0, 'trash4.jpg', '2022-01-28', '22:24:00', '102 DANEYAL MANSION SAMANPURA', 'INDRAPURI RAJABAZAR,patna', 800014),
(4, 'Paper', '', 'Newspaper', 5, 'old papers.jpg', '2022-02-13', '11:25:00', 'Ashiyana Digha', 'patna', 800014),
(5, 'Electronic Devices', 'N.noor', 'monitor', 1, 'computer.jpg', '2022-02-06', '11:45:00', '102 DANEYAL MANSION SAMANPURA', 'INDRAPURI RAJABAZAR', 800014),
(6, 'Cardboard', 'N.noor', 'box', 1, 'box.jpg', '2022-02-13', '11:51:00', 'rajendra nagar', 'patna ', 800005);

-- --------------------------------------------------------

--
-- Table structure for table `sellertable`
--

CREATE TABLE `sellertable` (
  `id` int(20) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellertable`
--

INSERT INTO `sellertable` (`id`, `first`, `last`, `email`, `username`, `password`) VALUES
(1, 'Central', 'Education', 'noor@123', '3ertyu', 'nooor@1234'),
(2, 'Central', 'Education', 'noor!asdf@qww', 'wertgh', 'aqwrfb '),
(3, 'wert', 'dfgh', 'wer@wer', 'wdfgh', 'wyhg'),
(4, 'Noor', 'Fatima', 'noor@fatima.com', 'N.noor', 'Noor@12345');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `password`) VALUES
(1, 'noor', 'noor'),
(2, 'abcd', 'abc@123'),
(3, 'vipul', 'noor'),
(4, '', ''),
(5, 'abc', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyertable`
--
ALTER TABLE `buyertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellertable`
--
ALTER TABLE `sellertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyertable`
--
ALTER TABLE `buyertable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sellertable`
--
ALTER TABLE `sellertable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
