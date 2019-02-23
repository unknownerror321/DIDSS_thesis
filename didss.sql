-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 03:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `didss`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '0 admin, 1 user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$iuB6i9/WuxLDNqpqhrq/BObYK0vo3PvEiuMHdq2iGAs7SAeZ6DlYi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `log_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '0 in, 1 out'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `log_datetime`, `user_id`, `type`) VALUES
(1, '2019-02-23 02:16:15', 2, 0),
(2, '2019-02-23 02:18:57', 1, 0),
(3, '2019-02-23 02:19:09', 1, 0),
(4, '2019-02-23 02:19:44', 3, 0),
(5, '2019-02-23 02:19:46', 1, 0),
(6, '2019-02-23 02:19:48', 1, 0),
(7, '2019-02-23 02:19:49', 1, 0),
(8, '2019-02-23 02:19:50', 1, 0),
(9, '2019-02-23 02:19:51', 1, 0),
(10, '2019-02-23 02:19:52', 1, 0),
(11, '2019-02-23 02:20:05', 3, 0),
(12, '2019-02-23 02:20:17', 1, 0),
(13, '2019-02-23 02:20:25', 3, 0),
(14, '2019-02-23 02:20:27', 3, 0),
(15, '2019-02-23 02:20:30', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `pi_id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT '0 Male, 1 Female',
  `age` int(11) NOT NULL,
  `profile_image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`pi_id`, `firstname`, `lastname`, `middlename`, `birthdate`, `gender`, `age`, `profile_image`) VALUES
(1, 'Christophere', 'Capisnon', '12', '', 0, 1212, 'profile_5c7094d13f370.jpg'),
(2, 'Ian', 'Melgazo', 'M', '', 0, 23, 'profile_5c7094f433edc.jpg'),
(3, 'Justine', 'Paquit', 'M', '', 1, 23, 'profile_5c709509dcc6c.jpg'),
(4, 'Ian 2', 'Melgazo', 'M', '', 0, 12, 'profile_5c70a8c794c69.jpg'),
(5, 'David', 'Azonim', 'M', '', 0, 12, 'profile_5c70a9b1dadd5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 employed, 1 unemployed',
  `job_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_id`) VALUES
(0, 1),
(0, 2),
(0, 3),
(0, 4),
(0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `pi_id` int(11) NOT NULL,
  `rfid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `pi_id`, `rfid`, `id_no`) VALUES
(1, 1, '3110382773', '123123123'),
(2, 2, '3110489574', '123123123'),
(3, 3, '3110398632', '123123123'),
(4, 4, '0800CFBA62', '123123123'),
(5, 5, '0800CFBA62', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`pi_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
