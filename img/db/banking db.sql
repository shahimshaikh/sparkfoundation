-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 06:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `codeneed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `email`, `name`, `contact`, `city`, `codeneed`) VALUES
(1, 'shaikhshahim786@gmai', 'Shahim Shaikh', 2147483647, 'Mira Road East', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Shahim Shaikh', 'Iqra Shaikh', 45000, '2021-06-07 14:20:45'),
(2, 'Ibrahim Shaikh', 'Shahim Shaikh', 4571, '2021-06-07 14:23:07'),
(10, 'Shahim Shaikh', 'Neha Shaikh', 10000, '2021-06-07 16:27:40'),
(11, 'Mohsin Shaikh', 'Shahim Shaikh', 45, '2021-06-07 16:28:17'),
(12, 'Mohsin Shaikh', 'Shahim Shaikh', 45000, '2021-06-07 16:28:36'),
(13, 'Shahim Shaikh', 'Mohsin Shaikh', 1500, '2021-06-09 17:09:48'),
(14, 'Shahim Shaikh', 'Iqra Shaikh', 1111, '2021-06-09 17:10:11'),
(15, 'Ibrahim Shaikh', 'Shahim Shaikh', 141, '2021-06-09 17:15:10'),
(16, 'Shahim Shaikh', 'Ibrahim Shaikh', 14, '2021-06-09 17:16:33'),
(17, 'Shahim Shaikh', 'Ibrahim Shaikh', 145, '2021-06-11 21:21:57'),
(18, 'Monu Khan', 'Rohan Valenkare', 666, '2021-06-11 21:22:16'),
(19, 'Shahim Shaikh', 'Monu Khan', 444, '2021-06-11 21:29:24'),
(20, 'Shahim Shaikh', 'Iqra Shaikh', 44, '2021-06-11 21:31:36'),
(21, 'Neha Shaikh', 'Shahim Shaikh', 555, '2021-06-11 21:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Shahim Shaikh', 'shahim@gmail.com', 48054),
(2, 'Ibrahim Shaikh', 'ibrahim@gmail.com', 30447),
(3, 'Neha Shaikh', 'neha@gmail.com', 45946),
(4, 'Iqra Shaikh', 'iqra@gmail.com', 91944),
(5, 'Mohsin Shaikh', 'mohsin@gmail.com', 2056),
(6, 'Monu Khan', 'monu@gmail.com', 5378),
(7, 'Rohan Valenkare', 'rohan@gmail.com', 666),
(8, 'Javed Mia', 'javed@gmail.com', 25000),
(9, 'Ashwani thakur', 'ashwani@gmail.com', 5600),
(10, 'Dev Anand kumar', 'dev@gmail.com', 2560);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
