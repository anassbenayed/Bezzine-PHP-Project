-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 01:16 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bezzine`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `email` varchar(30) NOT NULL,
  `qty1` int(10) NOT NULL,
  `qty2` int(10) NOT NULL,
  `qty3` int(10) NOT NULL,
  `qty4` int(10) NOT NULL,
  `qty5` int(10) NOT NULL,
  `qty6` int(10) NOT NULL,
  `qty7` int(10) NOT NULL,
  `qty8` int(10) NOT NULL,
  `qty9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`email`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`) VALUES
('yessine@gmail.com', 1, 1, 0, 0, 1, 0, 0, 0, 0),
('anass@gmail.com', 0, 0, 7, 0, 0, 0, 0, 0, 0),
('bezzine@gmail.com', 0, 0, 1, 1, 1, 1, 0, 0, 1),
('yessine@gmail.com', 0, 0, 0, 0, 1, 0, 0, 1, 0),
('yessine@gmail.com', 2, 0, 0, 2, 0, 0, 0, 0, 0),
('yessine@gmail.com', 4, 2, 0, 0, 1, 2, 0, 2, 0),
('yessine@gmail.com', 0, 0, 0, 0, 1, 0, 0, 0, 0),
('yessine@gmail.com', 0, 2, 1, 0, 1, 0, 0, 0, 0),
('yessine@gmail.com', 0, 0, 0, 5, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `cpw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `location`, `mob`, `addr`, `email`, `pw`, `cpw`) VALUES
('yessine', 'hachfi', 'Sousse Jawhra', '123456789', 'Sahloul', 'yessine@gmail.com', 'hachfi', 'hachfi'),
('anass', 'ayed', 'Taffela', '987654321', 'Taffela', 'anass@gmail.com', 'ayed', 'ayed'),
('bezzine', 'bezzine', 'khezama', '123412340', 'khezama', 'bezzine@gmail.com', 'bezzine', 'bezzine'),
('Anass', 'Ayed', 'Kandivali West', '646687687', '975 Charnelton St\r\nUnit 613', 'edward_9412@live.com', '12345678', '12345678'),
('Anass', 'Ayed', 'Kandivali West', '646687687', '975 Charnelton St\r\nUnit 613', 'edward_9412@live.com', '12345678', '12345678'),
('CORAL', 'BREDING', 'Kandivali East', '646564346', 'STREET', 'BC@LIVE.COM', '12345678', '12345678'),
('tesso', 'gahfi', 'Sousse Jawhra', '222265216', 'sqhloul', 'tesso@hh.com', 'tessotesso', 'tessotesso'),
('Skander', 'Radhouane', 'Khezama', '020202020', 'Bouhsina', 'XXSAINTXX@rito.com', 'xxsaintxx', 'xxsaintxx');

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `email`, `password`, `last_login`) VALUES
(32, 'yessine@gmail.com', 'hachfi', NULL),
(33, 'anass@gmail.com', 'ayed', NULL),
(35, 'bezzine@gmail.com', 'bezzine', NULL),
(36, 'edward_9412@live.com', '12345678', NULL),
(38, 'BC@LIVE.COM', '12345678', NULL),
(39, 'tesso@hh.com', 'tessotesso', NULL),
(40, 'XXSAINTXX@rito.com', 'xxsaintxx', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
