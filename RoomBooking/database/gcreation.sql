-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 07:03 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcreation`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `username`, `useremail`, `subject`, `message`) VALUES
(1, 'ANG WEN KAI', 'wkai_ang96@outlook.com', 'service', 'Good'),
(2, 'Dexson Chang', 'dexson@outlook.com', 'suggestions', 'Need to add more event'),
(3, 'Su Min ', 'sumin@gmail.com', 'suggestions', 'Add more features'),
(4, 'ANG WEN KAI', 'wkai_ang96@outlook.com', 'suggestions', 'Please let us to choose how many user want to select what size of shirt.');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `joinE_id` int(10) UNSIGNED NOT NULL,
  `eventid` varchar(12) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `size` varchar(2) NOT NULL,
  `no_pax` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`joinE_id`, `eventid`, `event_name`, `user_email`, `phoneNo`, `size`, `no_pax`) VALUES
(4, 'NYEP2018', 'HARD ROCK Penang 31.12.2018', 'wkai_ang96@outlook.com', '174226849', 'L', 5),
(5, 'SWP2019', 'Star Walk Penang 01.01.2019', 'wkai_ang96@outlook.com', '174226849', 'M', 4),
(6, 'SWP2019', 'Star Walk Penang 01.01.2019', 'dexson@outlook.com', '0177458669', 'M', 1),
(7, 'NYEP2018', 'HARD ROCK Penang 31.12.2018', 'dexson@outlook.com', '0177458669', 'XL', 1),
(8, 'SWP2019', 'Star Walk Penang 01.01.2019', 'paul@outlook.com', '0174585882', 'M', 5),
(9, 'NYEP2018', 'HARD ROCK Penang 31.12.2018', 'paul@outlook.com', '0174585882', 'M', 5),
(10, 'NYEP2018', 'HARD ROCK Penang 31.12.2018', 'wkai_ang96@outlook.com', '174226849', 'S', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Revent_id` int(10) UNSIGNED NOT NULL,
  `company` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `type` varchar(7) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_venue` varchar(50) NOT NULL,
  `event_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Revent_id`, `company`, `name`, `email`, `phone`, `type`, `event_name`, `event_venue`, `event_address`) VALUES
(2, 's', 's', 'wkai_ang96@outlook.com', '174226849', 'LNC', 's', 's', '14300'),
(3, 'wkai company', 'BSIN', 'wkai_ang96@outlook.com', '174226849', 'ANE', 'Go pokemon', 'Queensbay', '14300'),
(4, 'JJ creation', 'JJ LIM ', 'JJ@gmail.com', '174235612', 'ANE', 'Wah Amazing World', 'Gurney', 'Gurney Drive');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(6) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`email`, `name`, `gender`, `password`, `phoneNo`, `type`) VALUES
('wkaiang96@gmail.com', 'Wenkai Ang', 'Male', '123456', '0174226849', 'Admin'),
('wkai_ang96@outlook.com', 'ANG WEN KAI', 'Male', '135246', '0174255852', 'User'),
('dexson@outlook.com', 'Dexson Chang', 'Male', '123456', '0177458669', 'User'),
('paul@outlook.com', 'PaulChris', 'Male', '147258', '0174585882', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`joinE_id`),
  ADD KEY `eventid` (`eventid`) USING BTREE;

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Revent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `joinE_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Revent_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
