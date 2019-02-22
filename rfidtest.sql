-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 03:40 AM
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
-- Database: `native_php_rfid`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `rfid_number` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `course_level` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `id_number`, `rfid_number`, `firstname`, `middlename`, `lastname`, `course_level`, `date`, `time`) VALUES
(2, '20988579_1521193331275430_6416751413913078107_o.jpg', '123123', '3110338033', 'Jessie Ian', 'dionson', 'melgazo', 'bsit', '0000-00-00', '00:00:00'),
(4, '21014129_1521189854609111_6008836916732301865_o.jpg', '123414', '3110398632', 'Crismac', 'ambot', 'ortega', 'bsit', '0000-00-00', '00:00:00'),
(7, '21014154_1521038121290951_2195216084314767043_o.jpg', '1312312', '1qwewqeqwe', 'asdsadsad', 'sadasdasd', 'sadasda', 'asdas', '0000-00-00', '00:00:00'),
(21, '', 'fdsasd', 'sdafsaf', 'sdaffsd', 'sdafsadf', 'sadfff', 'sfsdf', '0000-00-00', '00:00:00'),
(22, '', 'fdsasd', 'sdafsaf', 'sdaffsd', 'sdafsadf', 'sadfff', 'sfsdf', '0000-00-00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
