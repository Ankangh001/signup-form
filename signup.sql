-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 12:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Dob` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Martial Status` varchar(255) NOT NULL,
  `Cv` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `First Name`, `Last Name`, `Email`, `Dob`, `Gender`, `Martial Status`, `Cv`, `Address`, `Phone`, `password`, `confirm password`) VALUES
(5, 'Ankan', 'Ghosh', 'an55kanghosh010@gmail.com', '5555-05-05', 'Male', ' Married', '700157', '02 (1).jpg', 'Chinarpark near Aminia restaurant  202, Rajarhat Road, Loknath Park, Sukantapally, Aminia restaurant\r\nKundanPlaza', '09875509729', '888'),
(6, 'Ankan', 'Ghosh', 'ankang752hosh010@gmail.com', '5225-02-05', 'Female', ' Married', '700157', '02.jpg', 'Chinarpark near Aminia restaurant  202, Rajarhat Road, Loknath Park, Sukantapally, Aminia restaurant\r\nKundanPlaza', '09875509729', '888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
