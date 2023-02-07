-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 05:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Name` varchar(50) NOT NULL,
  `Regd.no` varchar(15) NOT NULL,
  `CGPA` float NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_nopad_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `Regd.no`, `CGPA`, `Password`) VALUES
('Shaik Roshan Ali', 'Y21CS160', 9.14, 'Roshan@160'),
('Shaik Sufiyan', 'Y21CS162', 9.56, 'Sufiyan@162'),
('Parimi Shreyas', 'Y21CS164', 8.35, 'Shreyas@164'),
('Tammana Venkata Karthik', 'Y21CS169', 9.69, 'Karthik@169'),
('Tavvagunta Tayyab', 'Y21CS172', 8.76, 'Tayyab@172'),
('Vanimireddy Naga Venkata Neeraj', 'Y21CS185', 9.3, 'Neeraj@185'),
('Yenuganti Sathish', 'Y21CS197 ', 8.12, 'Sathish@197');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
