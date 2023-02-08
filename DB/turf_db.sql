-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 08:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tbl`
--

CREATE TABLE `book_tbl` (
  `Book_id` int(11) NOT NULL,
  `Turf_id` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `Book_status` varchar(50) NOT NULL,
  `time_slot` varchar(50) NOT NULL,
  `days_count` varchar(50) NOT NULL,
  `bdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_tbl`
--

INSERT INTO `book_tbl` (`Book_id`, `Turf_id`, `Cid`, `Book_status`, `time_slot`, `days_count`, `bdate`) VALUES
(1, 1, 1, 'approve', '16:02 18:02', 'single day', '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `custreg_tbl`
--

CREATE TABLE `custreg_tbl` (
  `Cid` int(11) NOT NULL,
  `Cname` varchar(50) NOT NULL,
  `Cdob` date NOT NULL,
  `CPhone_no` bigint(20) NOT NULL,
  `CEmail` varchar(50) NOT NULL,
  `Caddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custreg_tbl`
--

INSERT INTO `custreg_tbl` (`Cid`, `Cname`, `Cdob`, `CPhone_no`, `CEmail`, `Caddress`) VALUES
(1, 'afsah ruhi', '2002-09-16', 7592870277, 'afsahruhi200@gmail.com', 'chinmaya ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `Feed_id` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `Feedback` varchar(50) NOT NULL,
  `Turf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`Feed_id`, `Cid`, `Feedback`, `Turf_id`) VALUES
(1, 1, 'good\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `Login_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`Login_id`, `uname`, `password`, `type`) VALUES
(1, 'admin@gmail.com', 'admin123', 'admin'),
(2, 'afsahruhi200@gmail.com', '1234', 'customer'),
(3, 'ashitha@gmail.con', '1234', 'turf');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `Notify_id` int(11) NOT NULL,
  `Turf_id` int(11) NOT NULL,
  `Notification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`Notify_id`, `Turf_id`, `Notification`) VALUES
(1, 1, 'turf not available');

-- --------------------------------------------------------

--
-- Table structure for table `owner_acc_tbl`
--

CREATE TABLE `owner_acc_tbl` (
  `Acc_id` int(11) NOT NULL,
  `Turf_id` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `p_id` int(11) NOT NULL,
  `B_id` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `card_no` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `CVV` varchar(50) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`p_id`, `B_id`, `payment_type`, `card_no`, `expiry_date`, `CVV`, `holder_name`, `amount`) VALUES
(1, 1, 'Credit Card', 2147483647, '2023-02-17', '233', 'ruhi', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `turf_tbl`
--

CREATE TABLE `turf_tbl` (
  `Turf_id` int(11) NOT NULL,
  `Turf_name` varchar(50) NOT NULL,
  `Turf_location` varchar(50) NOT NULL,
  `owner_acc` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Owner_email` varchar(50) NOT NULL,
  `owner_ph` bigint(20) NOT NULL,
  `licence` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turf_tbl`
--

INSERT INTO `turf_tbl` (`Turf_id`, `Turf_name`, `Turf_location`, `owner_acc`, `owner_name`, `image`, `Owner_email`, `owner_ph`, `licence`, `rate`, `status`) VALUES
(1, 'turf1', 'kannur', '45214878398458', 'ashitha', '1081114964.jpg', 'ashitha@gmail.con', 1234567890, '517922637.jpg', '1000', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tbl`
--
ALTER TABLE `book_tbl`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `custreg_tbl`
--
ALTER TABLE `custreg_tbl`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`Feed_id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  ADD PRIMARY KEY (`Notify_id`);

--
-- Indexes for table `owner_acc_tbl`
--
ALTER TABLE `owner_acc_tbl`
  ADD PRIMARY KEY (`Acc_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `turf_tbl`
--
ALTER TABLE `turf_tbl`
  ADD PRIMARY KEY (`Turf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_tbl`
--
ALTER TABLE `book_tbl`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custreg_tbl`
--
ALTER TABLE `custreg_tbl`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `Feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `Notify_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `turf_tbl`
--
ALTER TABLE `turf_tbl`
  MODIFY `Turf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
