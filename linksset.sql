-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 03:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linksset`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `link set`
--

CREATE TABLE `link set` (
  `Id` int(6) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Link` text NOT NULL,
  `Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `link set`
--

INSERT INTO `link set` (`Id`, `Date`, `Link`, `Title`) VALUES
(1, '2024-02-14', 'https://www.amazon.in/', 'AMAZON WEBPAGE'),
(2, '2024-02-14', 'https://www.google.com/', 'GOOGLE PAGE'),
(3, '2024-02-16', 'https://www.w3schools.com/', 'BHAWAS COLLEGE '),
(4, '2024-02-16', 'www.linkedin.com/in/sumitgupta-sam', 'DEVELOPER CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `my table`
--

CREATE TABLE `my table` (
  `Name` text NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `etc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(200) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date`, `title`, `file`) VALUES
(1, '2024-01-14', 'Notice 1', 'https://google.com'),
(6, '2024-01-04', 'Hey there', '73344-SCHEME MCA (AIML)  I SEMESTER JULY-DEC 2023.pdf'),
(1022, '2024-01-17', 'DPGH', '6319-HP (4).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
