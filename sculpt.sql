-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2021 at 10:42 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sculpt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `tache` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `tache`, `id`) VALUES
('rayen', 'admin0000', 'gestion d\'utilisateur', 1),
('mohamedali', 'admin0000', '', 3),
('aziz', 'admin0000', '', 5),
('mariem', 'admin0000', '', 6),
('edoa', 'admin0000', '', 14),
('nour', 'admin0000', '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `time` date NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `work` text NOT NULL,
  `speciality` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `online` text NOT NULL,
  `country` text NOT NULL,
  `zipcode` int(11) NOT NULL,
  `confirmed_at` date NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `missed_days` int(11) DEFAULT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `birthday`, `phone`, `email`, `gender`, `work`, `speciality`, `username`, `password`, `online`, `country`, `zipcode`, `confirmed_at`, `salary`, `missed_days`, `type`) VALUES
(24, 'rayen', 'majdoub', '2020-12-04', 5523952, 'rayen@gmail.com', 'iefld', 'coach', 'azdazzaazazaz', 'rayen', 'rayen', 'yes', 'azhfedqjsk', 5415, '2020-12-26', 1200, 1, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `job_app`
--

DROP TABLE IF EXISTS `job_app`;
CREATE TABLE IF NOT EXISTS `job_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `work` text NOT NULL,
  `speciality` text NOT NULL,
  `cv` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `confirmation_token` text NOT NULL,
  `confirmed_at` date DEFAULT NULL,
  `online` text NOT NULL,
  `type` text NOT NULL,
  `zipcode` int(11) NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

DROP TABLE IF EXISTS `pwdreset`;
CREATE TABLE IF NOT EXISTS `pwdreset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pwd_reset_token` text NOT NULL,
  `pwd_reset_expires` text NOT NULL,
  `pwd_reset_email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`id`, `pwd_reset_token`, `pwd_reset_expires`, `pwd_reset_email`) VALUES
(6, '27mvtkZKC7', '1609645168', 'bbahta11@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `seancepart`
--

DROP TABLE IF EXISTS `seancepart`;
CREATE TABLE IF NOT EXISTS `seancepart` (
  `ID` int(11) NOT NULL,
  `SeanceID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `SeanceID` (`SeanceID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seances`
--

DROP TABLE IF EXISTS `seances`;
CREATE TABLE IF NOT EXISTS `seances` (
  `SeanceID` int(11) NOT NULL,
  `SeanceName` varchar(30) NOT NULL,
  `SeanceDate` date NOT NULL,
  `HeureS` time NOT NULL,
  `DescriptionS` text NOT NULL,
  PRIMARY KEY (`SeanceID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `quantite`) VALUES
(1, 'protein whey', '../imgUploads/1609682155.jpg', 60.00, 50),
(2, 'protein whey', '../sculpthouse_front/imgUploads/1609682332.jpg', 60.00, 50),
(3, 'protein whey', '../sculpthouse_front/imgUploads/1609682364.jpg', 60.00, 50),
(4, 'protein whey', '../sculpthouse_front/imgUploads/1609682391.jpg', 60.00, 10),
(5, 'jaja', '../sculpthouse_front/imgUploads/1609683183.jpg', 61.00, 54);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(8) NOT NULL,
  `email` text NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `goalweight` int(3) NOT NULL,
  `sport` text NOT NULL,
  `country` text NOT NULL,
  `zipcode` int(4) NOT NULL,
  `username` text NOT NULL,
  `gender` text NOT NULL,
  `password` text NOT NULL,
  `confirmation_token` varchar(20) DEFAULT NULL,
  `confirmed_at` date DEFAULT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `birthday`, `phone`, `email`, `height`, `weight`, `goalweight`, `sport`, `country`, `zipcode`, `username`, `gender`, `password`, `confirmation_token`, `confirmed_at`, `type`) VALUES
(47, 'arezr', 'aze', '2021-01-02', 8545455, 'azkeaz@gmail.com', 51, 21, 51, '51', 'zkalza', 5155, 'zaaz', 'male', 'az', '3IF1vnFAzhoNNjW2pdgt', NULL, 'user'),
(46, 'rayen', 'kaka', '2021-01-23', 85858569, 'bbahta11@gmail.com', 54, 74, 62, 'zadaz', 'tauijz', 2563, 'jaja', 'male', 'kaka', NULL, '2021-01-02', 'user'),
(45, 'janjoon', 'koko', '2020-12-13', 85555555, 'zaea@gmail884.com', 44, 54, 21, 'azzzzzzzzz', 'azidk', 8595, 'lilaok', 'male', 'lilaok', 'j6RQ6y0BiCkJBay8kz0u', NULL, 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
