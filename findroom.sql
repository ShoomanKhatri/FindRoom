-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 08:17 AM
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
  `images` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `ward` int(11) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `states` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`pid`, `images`, `street`, `ward`, `city`, `district`, `states`, `country`) VALUES
(1, 'images/back.jpeg', 'Kopawa', 5, 'Banganga', 'Kapilvasu', 'Lumbini', 'Nepal'),
(2, 'images/offer1.jpg', 'Santinagar', 9, 'Tilottama', 'Rupandehi', 'Lumbini', 'Nepal'),
(3, 'images/bulb.jpg', 'Charnumber', 4, 'Manigram', 'Rupandehi', 'Lumbini', 'Nepal'),
(4, 'images/room2.jpg', 'Horizonchowk', 11, 'Butwal', 'Rupandehi', 'Lumbini', 'Nepal'),
(5, 'images/room3.jpg', 'manakamana', 3, 'Siddhipur', 'Gorkha', 'Gandaki', 'Nepal'),
(6, 'images/room4.jpg', 'Annapurna', 6, 'Bangannga', 'Kapilvastu', 'Lumbini', 'Nepal'),
(7, 'images/room4.jpg', 'sankharnagar', 9, 'Butwal', 'Rupandehi', 'Lumbini', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `userrecords`
--

CREATE TABLE `userrecords` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `utype` enum('User','Admin') DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrecords`
--

INSERT INTO `userrecords` (`uid`, `username`, `email`, `pass`, `utype`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'Admin'),
(2, 'gauravkarki', 'gauravkarki0927@gmail.com', 'gaurav123', 'User'),
(3, 'bishal', 'bishal123@gmail.com', 'bishal123', 'User'),
(4, 'gaurav', 'gaurav1234@gmail.com', 'gaurav123', 'User'),
(5, 'garimakarki', 'kgarima731@gmail.com', 'garima123', 'User'),
(6, 'admin', 'admin@gmail.com', 'admin123', 'Admin'),
(7, 'manisha', 'manisha123@gmail.com', 'manisha0987', 'User');

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
-- Indexes for table `userrecords`
--
ALTER TABLE `userrecords`
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
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userrecords`
--
ALTER TABLE `userrecords`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
