-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ID` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `postedPic` varchar(255) NOT NULL,
  `postedName` varchar(255) NOT NULL,
  `datePosted` date NOT NULL,
  `colour` varchar(255) NOT NULL,
  `tooltip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `category`, `image`, `title`, `description`, `postedPic`, `postedName`, `datePosted`, `colour`, `tooltip`) VALUES
(1, 'Careers', 'img/senior-it-support-qTQI.jpg', 'Senior IT Support Technician', 'Salary: £28,000 - £34,000 + Bonuses + Pension. Hours: 40 hours per week, Monday - Friday\r\n                                        Locati...', 'img/rob-george-zFWY.jpg', 'Rob George', '2019-12-19', '#4183d7', 'View all: IT Support / News'),
(2, 'Insights', 'img/harness-the-power-1CBq.jpg', 'Harness the Power of Bespoke Software like a...', 'Your business is a system of systems. As it grows and changes, the equipment and\r\n                                        technology that\r\n                                        p...', 'img/holly-leech-BrGV.jpg', 'Holly Leech', '2019-12-19', '#67809f', 'View all: Bespoke Software / Insights'),
(3, 'News', 'img/kayleigh-achieves-the-r1EI.jpg', 'Kayleigh Achieves the Long Service Award', 'Netmatters would like to take this time to congratulate one of our most experienced Web\r\n                                        Develope...', 'img/netmatters-ltd-VXAv.png', 'Netmatters', '2019-12-17', '#926fb1', 'View all: Web Design / News');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
