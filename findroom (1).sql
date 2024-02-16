-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 04:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `resetpass`
--

CREATE TABLE `resetpass` (
  `rid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `otp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `pid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `admin_approval` tinyint(1) DEFAULT 0,
  `did` int(11) DEFAULT NULL,
  `dealerid` int(11) NOT NULL,
  `deal` tinyint(1) NOT NULL DEFAULT 0,
  `images` varchar(30) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `street` varchar(30) DEFAULT NULL,
  `ward` int(11) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `states` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`pid`, `userid`, `useremail`, `admin_approval`, `did`, `dealerid`, `deal`, `images`, `price`, `street`, `ward`, `city`, `district`, `states`, `country`, `details`) VALUES
(11, 1, 'gauravkarki0927@gmail.com', 1, 4, 4, 1, 'images/room2.jpg', '6500', 'Horizonchowk', 10, 'Butwal', 'Rupandehi', 'Lumbini', 'Nepal', ''),
(12, 0, 'gauravkarki0927@gmail.com', 1, NULL, 0, 0, 'images/room3.jpg', '5000', 'Highway4', 5, 'Divertole', 'Rupandehi', 'Lumbini', 'Nepal', ''),
(13, 0, 'gauravkarki0927@gmail.com', 1, 4, 4, 1, 'images/room3.jpg', '4000', 'Kopawa', 3, 'Banganga', 'Kapilvastu', 'Lumbini', 'Nepal', ''),
(14, 1, 'gauravkarki0927@gmail.com', 1, NULL, 0, 0, 'images/room4.jpg', '4500', 'Brindawan', 8, 'Kusumkhola', 'Dang', 'Lumbini', 'Nepal', ''),
(25, 0, 'gauravkarki0927@gmail.com', 1, 3, 3, 1, 'images/room10.webp', '5900', 'Bodgaun', 9, 'Banganga', 'Kapilvastu', 'Lumbini', 'Nepal', ''),
(26, 0, 'gauravkarki0927@gmail.com', 1, 4, 4, 1, 'images/room11.jpg', '7900', 'Manakamana', 9, 'Tilottama', 'Rupandehi', 'Lumbini', 'Nepal', ''),
(29, 3, 'gauravkarki0927@gmail.com', 1, 3, 3, 1, 'images/room7.webp', '5400', 'asthanagar', 6, 'Hetauda', 'Birjung', 'Gandaki', 'Nepal', 'My home'),
(30, 4, 'santa123@gmail.com', 1, 1, 1, 1, 'images/room12.webp', '7000', 'Manigram', 4, 'Bishalniwas', 'Rupandehi', 'Lumbini', 'Nepal', 'Home tour'),
(31, 4, 'santa123@gmail.com', 1, 1, 1, 1, 'images/room7.webp', '7500', 'Laliguras', 8, 'Ratnapark', 'Kathmandu', 'Bagmati', 'Nepal', 'KTM tour');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `Access` tinyint(1) NOT NULL DEFAULT 1,
  `uprofile` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `utype` enum('User','Admin') NOT NULL DEFAULT 'User',
  `phone` varchar(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `martial` varchar(25) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `postal` int(10) NOT NULL,
  `social` varchar(255) NOT NULL,
  `social2` varchar(255) NOT NULL,
  `profession` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `Access`, `uprofile`, `username`, `email`, `pass`, `utype`, `phone`, `gender`, `dob`, `martial`, `descr`, `city`, `state`, `country`, `postal`, `social`, `social2`, `profession`) VALUES
(1, 1, 'users/', 'Gaurav', 'gauravkarki0927@gmail.com', 'gaurav123', 'User', '9827421279', 'Male', '2024-02-05', 'Unmarried', '', '', '', 'Nepal', 0, '', '', ''),
(2, 1, '', 'admin', 'admin@gmail.com', 'admin123', 'Admin', '', '', '0000-00-00', '', '', '', '', '', 0, '', '', ''),
(3, 1, '', 'manisha', 'manisha123@gmail.com', 'manisha123', 'User', '', '', '0000-00-00', '', '', '', '', '', 0, '', '', ''),
(4, 1, '', 'santaprasad', 'santa123@gmail.com', 'santa123', 'User', '', '', '0000-00-00', '', '', '', '', '', 0, '', '', ''),
(5, 1, '', 'Sandesh Thapa', 'sandesh98@gmail.com', 'sandesh123456', 'User', '', '', '0000-00-00', '', '', '', '', '', 0, '', '', ''),
(6, 1, '', 'Birajkc', 'birajkc098@gmail.com', 'biraj1234k', 'User', '', '', '0000-00-00', '', '', '', '', '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resetpass`
--
ALTER TABLE `resetpass`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resetpass`
--
ALTER TABLE `resetpass`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userpost`
--
ALTER TABLE `userpost`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
