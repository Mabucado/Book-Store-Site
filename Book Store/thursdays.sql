-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2023 at 03:30 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thursdays`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `number` varchar(10) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `email`, `gender`, `number`, `password`) VALUES
(1, 'Mthoko', 'mathbeuka@gmail.com', 'male', '0645655265', 'budda');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `ID` int NOT NULL,
  `name` varchar(24) NOT NULL,
  `price` int NOT NULL,
  `genre` varchar(24) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `name`, `price`, `genre`) VALUES
(1, 'English First Language', 350, 'Education'),
(2, 'Afrikaans Eerste Addisio', 270, 'Education'),
(3, 'Agricultural Sciences', 310, 'Education'),
(4, 'Business Studies ', 250, 'Education'),
(5, 'Civil Technology', 200, 'Education'),
(6, 'Happily Homemade', 450, 'Cook'),
(7, 'From Crook To Cook', 390, 'Cook'),
(8, 'The Cook You Want To Be', 550, 'Cook'),
(9, 'Epic Air Fryer', 290, 'Cook'),
(10, 'The Flexitarian Cookbook', 340, 'Cook'),
(11, 'Home Sweet Home', 95, 'Kids'),
(12, 'Hello Little Egg', 150, 'Kids'),
(13, 'Alice In Wonderland', 580, 'Kids'),
(14, 'Cinderelle', 370, 'Kids'),
(15, 'The School Of Good And E', 170, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` varchar(24) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `number` varchar(24) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`, `gender`, `number`) VALUES
('01', 'John', 'john@.co.za', '$2y$10$RLkddGnuY9I10BGQj', 'male', '0616559875'),
('02', 'Letty', 'letty.co.za', '$2y$10$x2jbtD9.4TZ3yjsBW', 'female', '0726486584'),
('03', 'Abraham', 'abra@.co.za', '$2y$10$fifh3IkLMFJXWKShm', 'male', '0818776658'),
('04', 'Sibusiso', 'sibu@.co.za', '$2y$10$FEMJhRgV2SdZi/NYI', 'male', '0625982244'),
('05', 'Thandi', 'thandi@.co.za', '$2y$10$gxA8S6pikjp9oCDjo', 'female', '0735689885'),
('', '\r\n', '', '$2y$10$L.PVJpyzAMmBZHQUa', '', ''),
('', '', '', '$2y$10$xCxnFd/w4lNX897S7', '', ''),
('08', 'Mthoko', 'mathbeuka@gmail.com', 'budda', 'male', '0645655265');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
