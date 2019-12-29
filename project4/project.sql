-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 04:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(52) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalStatus` varchar(50) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userName`, `PASSWORD`, `firstName`, `lastName`, `address1`, `address2`, `city`, `state`, `zipCode`, `phone`, `email`, `gender`, `maritalStatus`, `dateOfBirth`) VALUES
(1, 'efefe', '', '', '', 'www.fefe.com', NULL, '', 'efefe', '', '', 'fefe@efe.com', 'male', '', '2018-12-11'),
(2, 'ewfwefw', '', '', '', 'www.ewfew.com', NULL, '', 'eoifwoifew', '', '', 'efwefewf@fewef.com', 'male', '', '2018-12-11'),
(3, 'efwefw', '', '', '', 'www.wefiew.com', NULL, '', 'feowfoewi', '', '', 'wefwef@efwef.com', 'female', '', '2018-12-11'),
(4, 'nelsonsu', '', '', '', 'wefwfewfwe', NULL, '', 'ewfwefew', '', '', 'efioweof@fewofew.com', 'fiodewjfoiwe', '', '2018-12-11'),
(5, 'nelsonsu', '', '', '', 'wefwfewfwe', NULL, '', 'ewfwefew', '', '', 'efioweof@fewofew.com', 'fiodewjfoiwe', '', '2018-12-11'),
(6, 'nelsonsu', '', '', '', 'fefwefw', NULL, '', 'ewfwefwe', '', '', 'ewoifewi@efweof.com', 'feoiwfiw', '', '2018-12-11'),
(7, 'nelsonsu', '', '', '', 'wefwe', NULL, '', 'wefwe', '', '', 'wefe@ewfew.com', 'wefwef', '', '2018-12-11'),
(8, 'nelsonsu', 'Hello1!!', 'Nelson', 'Su', 'something ln', 'apt1', 'stlouis', 'missouri', '60000', '314-111-1111', 'nelson@gmail.com', 'male', 'not married', '0000-00-00'),
(9, 'nelsonsu', 'Hello1!!', 'Nelson', 'Su', 'Nland', 'apt2', 'stl', 'mo', '11111', '111-111-1111', 'nel@gmail.com', 'male', 'single', '0000-00-00'),
(10, 'nelsonsu', 'Hello1!!', 'wefwef', 'ewfwefew', 'fweggew', 'egweg', 'wefwe', 'fwe', '11111', '111-111-1111', 'wefe@ewfe.com', 'ewfe', 'heh', '0000-00-00'),
(11, 'nelsonsu', 'Hello1!!', 'wagewg', 'hgterhre', 'rthtrhr', 'rshrthr', 'ewrerh', 'erherh', '22222', '111-111-1111', 'hello@gmail.com', 'male', 'efwef', '0000-00-00'),
(12, 'nelsonsu', 'Hello1!!', 'wefwe', 'ewfwefwef', 'wefwefewf', 'wefwefwe', 'fwefwef', 'wefwefw', '11111', '111-111-1111', 'wefwef@efefe.com', 'efefw', 'efwefw', '0000-00-00'),
(13, 'nelsonsu', 'Hello1!!', 'ewfewf', 'wefwef', 'wefwef', 'wefwefw', 'trhtrh', 'rthr', '11111', '111-111-1111', 'ewfwe@gmail.com', 'male', 'fefe', '11/11/1992'),
(14, 'nelsonsu', 'Hello1!!', 'nelson', 'su', 'land', 'apt2', 'stlouis', 'missouri', '11111', '222-222-2222', 'eifow@gmail.com', 'male', 'not married', '11/11/1992');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
