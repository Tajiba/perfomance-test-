-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 03:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `RegBookName` varchar(50) NOT NULL,
  `RegPublisherName` varchar(50) NOT NULL,
  `RegAuthorName` varchar(50) NOT NULL,
  `RegIsbnnumber` int(50) NOT NULL,
  `Regcopies` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`RegBookName`, `RegPublisherName`, `RegAuthorName`, `RegIsbnnumber`, `Regcopies`) VALUES
('fairys story', 'wxhzbbvfh', 'tarar', 2356, 1),
('doreamon', 'sahdshdsh', 'Rita', 3232, 1),
('sleeping beuty', 'djfgjgjjgj', 'payal', 4414, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration1`
--

CREATE TABLE `tblregistration1` (
  `RegIndentification` varchar(50) NOT NULL,
  `RegName` varchar(50) NOT NULL,
  `RegAddress` varchar(100) NOT NULL,
  `RegStreet` varchar(50) NOT NULL,
  `RegCity` varchar(60) NOT NULL,
  `RegAge` int(20) NOT NULL,
  `RegEmail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistration1`
--

INSERT INTO `tblregistration1` (`RegIndentification`, `RegName`, `RegAddress`, `RegStreet`, `RegCity`, `RegAge`, `RegEmail`) VALUES
('1', 'tajiba', 'assdd', '12cv', '12njfnf', 22, 'tajibahaya@gmail.com'),
('1', 'priya', 'ashrajjjkk road', '12 no', 'chattogram', 21, 'gsfgsfdgf@gmail.com'),
('1', 'tajiba', 'assdd', '12 no', 'chattogram', 21, 'tajibahaya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration2`
--

CREATE TABLE `tblregistration2` (
  `RegFullName` varchar(50) NOT NULL,
  `RegDes` varchar(800) NOT NULL,
  `RegProfile` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistration2`
--

INSERT INTO `tblregistration2` (`RegFullName`, `RegDes`, `RegProfile`) VALUES
('frkgkhkjggjbjjjj', 'sdddddddddddddddddddddddddddddddddddd', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
