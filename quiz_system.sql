-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 03:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_update_data_tbl`
--

CREATE TABLE `acc_update_data_tbl` (
  `profile_img` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_update_data_tbl`
--

INSERT INTO `acc_update_data_tbl` (`profile_img`, `username`, `fname`, `lname`, `mobile_no`, `address`, `city`, `country`, `update_time`) VALUES
('', 'kamal', 'perera', '', '', '', '', '', '2022-09-24 20:40:05'),
('', 'kamal', 'perera', '', '', '', '', '', '2022-09-24 20:48:30'),
('', 'student1', '', '', '', '', '', '', '2022-09-26 15:09:50'),
('', 'student1', 'std', '', '', '', '', '', '2022-09-26 15:09:56'),
('', 'student1', 'std', '', '+94711758851', '', '', '', '2022-09-26 15:09:58'),
('', 'student1', 'std', '', '+94711758851', 'kandy', '', '', '2022-09-26 15:10:02'),
('', 'student1', 'std', '', '+94711758851', 'kandy', 'walala', '', '2022-09-26 15:10:09'),
('', 'student1', 'std', '', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-26 15:11:12'),
('', 'student1', 'std', 'ssss', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-26 16:00:42'),
('', 'student1', 'std', 'ssss', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-26 16:29:24'),
('', 'student1', 'std', 'ssss', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-26 16:48:24'),
('', 'student1', 'std', 'ssss', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-26 16:58:42'),
('', 'student1', 'std', 'ssss', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-26 17:00:12'),
('', 'student1', 'std', '123456789', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-26 17:12:48'),
('', 'student1', 'std', '123456789', '+94711758851', 'kandy', 'walala', 'Sri lanka', '2022-09-27 15:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `acc_update_tbl`
--

CREATE TABLE `acc_update_tbl` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_update_tbl`
--

INSERT INTO `acc_update_tbl` (`id`, `email`, `update_date`) VALUES
(1, 'ishikandysl@gmail.com', '2022-09-26 16:29:24'),
(2, 'ishikandysl@gmail.com', '2022-09-26 17:00:12'),
(3, 'ishikandysl@gmail.com', '2022-09-27 15:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `id` int(10) NOT NULL,
  `comment_user` varchar(255) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`id`, `comment_user`, `roll`, `comment_date`, `comment_msg`) VALUES
(1, 'jehan', 'admin', '2022-10-07 07:03:30', 'hi all nice work'),
(2, 'kamal', 'teacher', '2022-10-07 07:04:04', 'I am teacher kamal'),
(3, 'student1', 'student', '2022-10-07 07:05:01', 'student std1 bla bla bla\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `log_time_tbl`
--

CREATE TABLE `log_time_tbl` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `time_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_time_tbl`
--

INSERT INTO `log_time_tbl` (`id`, `username`, `time_login`) VALUES
(1, 'kamal', '2022-09-23 12:06:17'),
(2, 'kamal', '2022-09-23 12:27:47'),
(3, 'kamal', '2022-09-23 12:28:09'),
(4, 'kamal', '2022-09-23 12:28:32'),
(5, 'kamal', '2022-09-23 12:29:14'),
(6, 'kamal', '2022-09-24 20:40:17'),
(7, 'jehan', '2022-09-24 20:45:42'),
(8, 'jehan', '2022-09-24 20:49:10'),
(9, 'student1', '2022-09-24 20:56:57'),
(10, 'student1', '2022-09-24 21:02:35'),
(11, 'student1', '2022-09-24 21:52:06'),
(12, 'jehan', '2022-09-26 15:41:26'),
(13, 'student1', '2022-09-26 15:41:46'),
(14, 'jehan', '2022-09-26 16:42:15'),
(15, 'student1', '2022-09-26 16:42:41'),
(16, 'jehan', '2022-09-26 16:55:11'),
(17, 'student1', '2022-09-26 16:57:36'),
(18, 'student1', '2022-09-26 17:01:17'),
(19, 'student1', '2022-09-26 17:13:23'),
(20, 'student1', '2022-09-26 20:18:00'),
(21, 'student1', '2022-09-27 15:23:36'),
(22, 'student1', '2022-09-27 19:04:46'),
(23, 'jehan', '2022-09-27 19:17:26'),
(24, 'student1', '2022-09-27 19:35:05'),
(25, 'jehan', '2022-09-28 06:35:58'),
(26, 'student1', '2022-09-28 07:31:30'),
(27, 'jehan', '2022-09-28 19:36:36'),
(28, 'jehan', '2022-09-29 20:41:34'),
(29, 'student1', '2022-09-30 06:18:43'),
(30, 'jehan', '2022-09-30 06:19:22'),
(31, 'student1', '2022-09-30 06:33:47'),
(32, 'jehan', '2022-09-30 06:34:25'),
(33, 'student1', '2022-09-30 06:36:30'),
(34, 'jehan', '2022-09-30 06:36:49'),
(35, 'student1', '2022-09-30 06:39:17'),
(36, 'jehan', '2022-09-30 06:39:43'),
(37, 'student1', '2022-09-30 06:48:19'),
(38, 'jehan', '2022-09-30 06:48:38'),
(39, 'student1', '2022-09-30 22:18:38'),
(40, 'jehan', '2022-09-30 22:19:22'),
(41, 'jehan', '2022-10-02 07:29:33'),
(42, 'student1', '2022-10-02 07:54:44'),
(43, 'jehan', '2022-10-02 07:55:32'),
(44, 'student1', '2022-10-02 07:57:25'),
(45, 'jehan', '2022-10-02 07:58:15'),
(46, 'student1', '2022-10-02 07:59:17'),
(47, 'student1', '2022-10-02 08:06:52'),
(48, 'jehan', '2022-10-02 08:07:10'),
(49, 'student1', '2022-10-02 08:07:42'),
(50, 'jehan', '2022-10-02 08:08:08'),
(51, 'student1', '2022-10-02 08:36:16'),
(52, 'jehan', '2022-10-02 08:36:33'),
(53, 'student1', '2022-10-02 08:39:21'),
(54, 'student1', '2022-10-02 08:48:50'),
(55, 'student1', '2022-10-02 08:50:54'),
(56, 'student1', '2022-10-02 08:57:43'),
(57, 'jehan', '2022-10-02 08:58:22'),
(58, 'student1', '2022-10-03 14:11:20'),
(59, 'jehan', '2022-10-03 14:11:35'),
(60, 'kamal', '2022-10-03 14:12:11'),
(61, 'student1', '2022-10-04 17:08:02'),
(62, 'jehan', '2022-10-04 17:39:30'),
(63, 'student1', '2022-10-04 17:41:25'),
(64, 'kamal', '2022-10-04 17:42:27'),
(65, 'student1', '2022-10-04 17:43:39'),
(66, 'jehan', '2022-10-04 17:44:01'),
(67, 'student1', '2022-10-04 17:44:38'),
(68, 'jehan', '2022-10-04 17:44:52'),
(69, 'kamal', '2022-10-04 17:55:23'),
(70, 'jehan', '2022-10-04 18:05:27'),
(71, 'jehan', '2022-10-04 19:32:08'),
(72, 'jehan', '2022-10-06 19:49:13'),
(73, 'jehan', '2022-10-06 21:19:50'),
(74, 'kamal', '2022-10-06 21:43:32'),
(75, 'student1', '2022-10-06 21:45:09'),
(76, 'jehan', '2022-10-07 04:08:05'),
(77, 'jehan', '2022-10-07 04:08:20'),
(78, 'jehan', '2022-10-07 06:33:02'),
(79, 'kamal', '2022-10-07 07:03:52'),
(80, 'jehan', '2022-10-07 07:04:24'),
(81, 'student1', '2022-10-07 07:04:41'),
(82, 'jehan', '2022-10-07 07:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_reset_tbl`
--

CREATE TABLE `pwd_reset_tbl` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwd_reset_tbl`
--

INSERT INTO `pwd_reset_tbl` (`id`, `email`, `otp`) VALUES
(1, 'learnkandy123@gmail.com', 0),
(2, 'ishikandysl@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_ask_std_tbl`
--

CREATE TABLE `question_ask_std_tbl` (
  `ask_by_username` varchar(255) NOT NULL,
  `ask_date_time` datetime NOT NULL,
  `question` varchar(300) NOT NULL,
  `reply_by_username` varchar(255) NOT NULL,
  `reply_date_time` datetime NOT NULL,
  `is_pending` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `question_ask_std_tbl`
--
DELIMITER $$
CREATE TRIGGER `DeleteStdQuestion` BEFORE DELETE ON `question_ask_std_tbl` FOR EACH ROW INSERT INTO question_replyed_std_tbl SET 	ask_username = OLD.ask_by_username, ask_time = OLD.ask_date_time, question = OLD.question
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `question_replyed_std_tbl`
--

CREATE TABLE `question_replyed_std_tbl` (
  `id` int(10) NOT NULL,
  `ask_username` varchar(255) NOT NULL,
  `ask_time` datetime NOT NULL,
  `question` varchar(300) NOT NULL,
  `reply_username` varchar(255) NOT NULL,
  `reply_time` datetime NOT NULL,
  `answer_for_question` varchar(300) NOT NULL,
  `is_pending` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(10) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `roll` varchar(15) NOT NULL,
  `user_status` int(1) NOT NULL,
  `join_date` date NOT NULL,
  `is_pending` int(1) NOT NULL,
  `salary` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `profile_img`, `username`, `fname`, `lname`, `email`, `pass1`, `mobile_no`, `address`, `city`, `country`, `roll`, `user_status`, `join_date`, `is_pending`, `salary`) VALUES
(1, '1.jpg', 'jehan', '', '', 'jehankandysl@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 'admin', 1, '2022-09-23', 0, 0.00),
(2, 'best_image2.png', 'kamal', 'perera', '', 'learnkandy123@gmail.com', 'e35cf7b66449df565f93c607d5a81d09', '', '', '', '', 'teacher', 1, '2022-09-23', 0, 0.00),
(3, 'IMG20210720065834_00.jpg', 'student1', 'std', 'stdstdstd', 'ishikandysl@gmail.com', '4b82ba17481acc7ad9fec620bd960b80', '+94711758851', 'kandy', 'walala', 'Sri lanka', 'student', 1, '2022-09-24', 0, 0.00);

--
-- Triggers `user_tbl`
--
DELIMITER $$
CREATE TRIGGER `UpdateUser` BEFORE UPDATE ON `user_tbl` FOR EACH ROW INSERT INTO acc_update_data_tbl SET username = OLD.username, fname = OLD.fname, lname = OLD.lname, mobile_no = OLD.mobile_no, address = OLD.address, city = OLD.city, country = OLD.country, update_time = NOW()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_update_tbl`
--
ALTER TABLE `acc_update_tbl`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_time_tbl`
--
ALTER TABLE `log_time_tbl`
  ADD PRIMARY KEY (`id`,`username`,`time_login`);

--
-- Indexes for table `pwd_reset_tbl`
--
ALTER TABLE `pwd_reset_tbl`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `question_ask_std_tbl`
--
ALTER TABLE `question_ask_std_tbl`
  ADD PRIMARY KEY (`ask_by_username`,`question`);

--
-- Indexes for table `question_replyed_std_tbl`
--
ALTER TABLE `question_replyed_std_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`,`username`,`email`,`pass1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_update_tbl`
--
ALTER TABLE `acc_update_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_time_tbl`
--
ALTER TABLE `log_time_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `pwd_reset_tbl`
--
ALTER TABLE `pwd_reset_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_replyed_std_tbl`
--
ALTER TABLE `question_replyed_std_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
