-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 11:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Name` varchar(50) NOT NULL,
  `Redg. no` varchar(15) NOT NULL,
  `CGPA` float NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Name`, `Redg. no`, `CGPA`, `Password`) VALUES
('Shaik Roshan Ali', 'Y21CS160', 9.14, 'Roshan@160'),
('Shaik Sufiyan', 'Y21CS162', 9.56, 'Sufiyan@162'),
('Parimi Shreyas', 'Y21CS164', 8.35, 'Shreyas@164'),
('Tammana Venkata Karthik', 'Y21CS169', 9.69, 'Karthik@169'),
('Tavvagunta Tayyab', 'Y21CS172', 8.76, 'Tayyab@172'),
('Vanimireddy Naga Venkata Neeraj', 'Y21CS185', 9.3, 'Neeraj@185'),
('Yenuganti Sathish', 'Y21CS197', 8.12, 'Sathish@197');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
