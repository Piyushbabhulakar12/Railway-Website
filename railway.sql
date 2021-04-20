-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 06:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `book_t`
--

CREATE TABLE `book_t` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `price_t` varchar(255) NOT NULL,
  `ticki_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `journy_date` varchar(255) NOT NULL,
  `train_no` varchar(255) NOT NULL,
  `train_name` varchar(255) NOT NULL,
  `train_from` varchar(255) NOT NULL,
  `train_to` varchar(255) NOT NULL,
  `train_type` varchar(255) NOT NULL,
  `train_id` varchar(255) NOT NULL,
  `seat_con` varchar(255) NOT NULL DEFAULT 'Waiting',
  `train_coach` varchar(255) NOT NULL,
  `seat_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_t`
--

INSERT INTO `book_t` (`id`, `f_name`, `age`, `gender`, `phone`, `price_t`, `ticki_id`, `user_id`, `total_price`, `payment`, `journy_date`, `train_no`, `train_name`, `train_from`, `train_to`, `train_type`, `train_id`, `seat_con`, `train_coach`, `seat_type`) VALUES
(90, 'Piyush', '18', 'Male', '1012520012', '540', 'Tic604b755e998aa', '4', '1080', 'Successfully', '2021-03-12', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Confirm', 'SL-1', 'UP'),
(92, 'Sagar', '19', 'Male', '7881055128', '540', 'Tic604b9afa0b71b', '5', '540', 'Successfully', '2021-03-12', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Confirm', 'SL-1', 'UP'),
(103, 'Piyush Babhulakar', '19', 'Male', '1215215488', '540', 'Tic604f2afa21c21', '4', '1080', 'Successfully', '2021-03-12', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Confirm', 'SL-1', 'UP'),
(104, 'Yash Kandagale', '19', 'Male', '1215215481', '540', 'Tic604f2afa21c21', '4', '1080', 'Successfully', '2021-03-12', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Confirm', 'SL-1', 'BT'),
(105, 'Piyush', '18', 'Male', '8487548787', '540', 'Tic604f2c4384b3a', '4', '1080', 'Successfully', '2021-03-16', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP'),
(106, 'Sagar', '19', 'Male', '8487548788', '540', 'Tic604f2c4384b3a', '4', '1080', 'Successfully', '2021-03-16', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP'),
(108, 'Piyush', '18', 'Male', '7548715484', '540', 'Tic604f2d99a839e', '4', '1080', 'Successfully', '2021-03-16', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP'),
(109, 'Yash Kandagale', '18', 'Male', '7587444584', '540', 'Tic604f33492f1c0', '4', '1080', 'Successfully', '2021-03-16', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP'),
(110, 'Piyush Babhulakar', '18', 'Male', '7587444584', '540', 'Tic604f33492f1c0', '4', '1080', 'Successfully', '2021-03-16', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP'),
(111, 'Yash Kandagale', '19', 'Male', '5845845156', '550', 'Tic604f6a8380bef', '4', '550', 'Successfully', '2021-03-18', '02702', 'SF Special Express', 'Pune Junction', 'Mumbai Junction', 'SL', '6', 'Waiting', 'SL-2', 'BT'),
(112, 'Piyush Babhulakar', '18', 'Male', '7854852484', '540', 'Tic604f8bb4704b8', '4', '540', 'Successfully', '2021-03-24', '01094', 'Mahanagri', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '2', 'Waiting', 'SL-1', 'BT'),
(113, 'Yash Kandagale', '19', 'Male', '8485471595', '355', 'Tic604f946f70889', '4', '355', 'Successfully', '2021-03-17', '03201', 'Patna ', 'Bhusawal Junction', 'Jalgaon Junction', 'AC', '5', 'Waiting', 'AC-3', 'UP'),
(114, 'Sagar', '19', 'Male', '9584715748', '850', 'Tic604f951b1e477', '4', '850', 'Successfully', '2021-03-31', '02116', 'Siddheshwar	', 'Pune Junction', 'Mumbai Junction', 'AC', '8', 'Waiting', 'AC-1', 'UP'),
(115, 'Sagar', '19', 'Male', '8577548245', '440', 'Tic604f963cc3fae', '4', '440', 'Successfully', '2021-03-18', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'GN', '1', 'Waiting', 'SL-2', 'UP'),
(116, 'Yash Kandagale', '18', 'Male', '7517144214', '55', 'Tic604f96dadfe00', '4', '110', 'Successfully', '2021-03-17', '03201', 'Patna ', 'Bhusawal Junction', 'Jalgaon Junction', 'SL', '5', 'Waiting', 'SL-1', 'UP'),
(117, 'Piyush Babhulakar', '19', 'Male', '7517144215', '55', 'Tic604f96dadfe00', '4', '110', 'Successfully', '2021-03-17', '03201', 'Patna ', 'Bhusawal Junction', 'Jalgaon Junction', 'SL', '5', 'Waiting', 'SL-1', 'UP'),
(122, 'Piyush', '18', 'Male', '546844455', '540', 'Tic604fa53c1e477', '4', '1080', 'Successfully', '2021-03-16', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP'),
(123, 'Yash Kandagale', '18', 'Male', '546564565', '540', 'Tic604fa53c1e477', '4', '1080', 'Successfully', '2021-03-16', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP'),
(124, 'Yash Kandagale', '19', 'Male', '9854845165', '540', 'Tic6050540acae4e', '4', '540', 'Successfully', '2021-03-17', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-3', 'BT'),
(125, 'Yash Kandagale', '18', 'Male', '7584258487', '850', 'Tic605083cddeaed', '5', '3400', 'Successfully', '2021-03-17', '02116', 'Siddheshwar	', 'Pune Junction', 'Mumbai Junction', 'AC', '8', 'Waiting', 'AC-1', 'UP'),
(126, 'Sagar Sonar', '18', 'Male', '7584258488', '850', 'Tic605083cddeaed', '5', '3400', 'Successfully', '2021-03-17', '02116', 'Siddheshwar	', 'Pune Junction', 'Mumbai Junction', 'AC', '8', 'Waiting', 'AC-1', 'BT'),
(127, 'Piyush Babhulakar', '18', 'Male', '7584258457', '850', 'Tic605083cddeaed', '5', '3400', 'Successfully', '2021-03-17', '02116', 'Siddheshwar	', 'Pune Junction', 'Mumbai Junction', 'AC', '8', 'Waiting', 'AC-1', 'UP'),
(128, 'Vishal Patil', '18', 'Male', '7584258410', '850', 'Tic605083cddeaed', '5', '3400', 'Successfully', '2021-03-17', '02116', 'Siddheshwar	', 'Pune Junction', 'Mumbai Junction', 'AC', '8', 'Waiting', 'AC-1', 'BT'),
(129, 'Yash Kandagale', '19', 'Male', '8547457845', '540', 'Tic6050c2e790013', '4', '1080', 'Successfully', '2021-03-17', '01094', 'Mahanagri', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '2', 'Waiting', 'SL-1', 'UP'),
(130, 'Piyush Babhulakar', '19', 'Male', '7845154852', '540', 'Tic6050c2e790013', '4', '1080', 'Successfully', '2021-03-17', '01094', 'Mahanagri', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '2', 'Waiting', 'SL-1', 'UP'),
(131, 'Yash Kandagale', '18', 'Male', '7784584847', '540', 'Tic6050fe3b63a8b', '4', '540', 'Successfully', '2021-03-18', '02138', 'Punjab Mail', 'Jalgaon Junction', 'Mumbai Junction', 'SL', '1', 'Waiting', 'SL-1', 'UP');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `compl` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `compl`, `user_id`) VALUES
(1, 'Piyush Himmatro Babhulakar', '07517090229', 'piyushbabhulakar12@gmail.com', 'Train is so late', '4'),
(2, 'Piyush Himmatro Babhulakar', '07517090229', 'piyushbabhulakar12@gmail.com', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', ''),
(3, 'Piyush Himmatro Babhulakar', '07517090229', 'piyushbabhulakar12@gmail.com', 'Train Is So Late', '4');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `cpass`, `gender`, `birth_date`, `address`, `city`, `state`, `country`) VALUES
(4, 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '07517090229', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Male', '2021-03-12', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', 'Mahārāshtra', 'India'),
(5, 'Vishal', 'Patil', 'vishalpatil@gmail.com', '121112112', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Male', '2021-03-12', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', 'Mahārāshtra', 'India'),
(6, 'Yash ', 'Kanadagale', 'yashkandagale@gmail.com', '8548785485', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Male', '2002-03-27', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(255) NOT NULL,
  `t_no` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_rate` varchar(255) NOT NULL,
  `t_date` varchar(255) NOT NULL,
  `t_from` varchar(255) NOT NULL,
  `t_to` varchar(255) NOT NULL,
  `t_timearriving` varchar(255) NOT NULL,
  `t_timedispatch` varchar(255) NOT NULL,
  `mon` varchar(255) NOT NULL,
  `thu` varchar(255) NOT NULL,
  `wed` varchar(255) NOT NULL,
  `thurs` varchar(255) NOT NULL,
  `fri` varchar(255) NOT NULL,
  `sat` varchar(255) NOT NULL,
  `sun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `t_no`, `t_name`, `t_rate`, `t_date`, `t_from`, `t_to`, `t_timearriving`, `t_timedispatch`, `mon`, `thu`, `wed`, `thurs`, `fri`, `sat`, `sun`) VALUES
(1, '02138', 'Punjab Mail', '540', '2021-03-13', 'Jalgaon Junction', 'Mumbai Junction', '00:02', '07:35', 'Y', 'Y      ', 'Y', 'Y', 'Y', 'Y', 'Y'),
(2, '01094', 'Mahanagri', '540', '2021-03-13', 'Jalgaon Junction', 'Mumbai Junction', '04:05', '11:40', 'Y', 'Y ', 'Y', 'Y', 'Y', 'Y', 'Y'),
(3, '02170', 'Panvel ', '540', '2021-03-13', 'Jalgaon Junction', 'Mumbai Junction', '04:20', '12:00', 'Y', 'Y ', 'Y', 'Y', 'Y', 'Y', 'Y'),
(4, '02036', 'Mumbai CSMT', '55', '2021-03-13', 'Jalgaon Junction', 'Bhusawal Junction', '00:20', '00:43', 'Y', 'Y ', 'Y', 'Y', 'Y', 'Y', 'Y'),
(5, '03201', 'Patna ', '55', '2021-03-13', 'Bhusawal Junction', 'Jalgaon Junction', '01:15', '01:44', 'Y', 'Y  ', 'Y', 'Y', 'Y', 'Y', 'N'),
(6, '02702', 'SF Special Express', '550', '2021-03-13', 'Pune Junction', 'Mumbai Junction', '01:15', '04:55', 'Y', 'Y  ', 'Y', 'Y', 'Y', 'Y', 'Y'),
(8, '02116', 'Siddheshwar	', '550', '2021-03-13', 'Pune Junction', 'Mumbai Junction', '02:55', '06:35', 'Y', 'Y ', 'Y', 'Y', 'Y', 'Y', 'Y'),
(10, '25548', 'CSMT FESTIVAL SP', '650', '2021-03-18', 'Bhusawal Junction', 'Mumbai Junction', '05:05', '12:20', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(13, '02144', 'SLN LTT SF SPL', '550', '2021-03-18', 'Bhusawal Junction', 'Mumbai Junction', '02:00', '05:23', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `train_review`
--

CREATE TABLE `train_review` (
  `id` int(255) NOT NULL,
  `feed` varchar(255) NOT NULL,
  `train_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date_u` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_review`
--

INSERT INTO `train_review` (`id`, `feed`, `train_id`, `user_name`, `user_id`, `date_u`) VALUES
(1, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', '1', 'Piyush Babhulakar', '4', '2021-03-13'),
(2, 'Good', '1', 'Piyush Babhulakar', '4', '2021-03-16'),
(4, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', '1', 'Piyush Babhulakar', '4', '2021-03-16'),
(5, 'food is not good and not proper seat and not clean', '1', 'Piyush Babhulakar', '4', '2021-03-16'),
(6, 'food is not good and not proper seat and not clean', '2', 'Piyush Babhulakar', '4', '2021-03-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_t`
--
ALTER TABLE `book_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train_review`
--
ALTER TABLE `train_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_t`
--
ALTER TABLE `book_t`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `train_review`
--
ALTER TABLE `train_review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
