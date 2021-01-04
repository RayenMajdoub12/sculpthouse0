-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2021 at 06:13 PM
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
-- Table structure for table `dilevery`
--

DROP TABLE IF EXISTS `dilevery`;
CREATE TABLE IF NOT EXISTS `dilevery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commande_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` text NOT NULL,
  `city` text NOT NULL,
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
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `eventId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `venue` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `places` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`eventId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `EventsID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `EventsD` date NOT NULL,
  `heureE` time NOT NULL,
  `description` text NOT NULL,
  `img_id` int(11) DEFAULT NULL,
  KEY `img_id` (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventsID`, `Name`, `EventsD`, `heureE`, `description`, `img_id`) VALUES
(12345, 'Saut en hauteur', '2021-01-05', '16:00:00', 'fortifier le corps', NULL),
(78945, 'football', '2021-01-13', '17:00:00', 'love Messi', NULL);

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
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `participantId` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`participantId`),
  KEY `fk_user_id` (`userId`),
  KEY `fk_event_id` (`eventId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reclamation`
--

INSERT INTO `reclamation` (`id`, `titre`, `description`, `date`, `id_user`) VALUES
(8, 'www', 'www', '2020-12-20', 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `quantite`) VALUES
(6, 'whey', '../sculpthouse_front/imgUploads/1609720021.png', 10.00, 40),
(7, 'yuazjn', '../sculpthouse_front/imgUploads/1609720922.png', 52.00, 85),
(8, 'yuazjn', '../sculpthouse_front/imgUploads/1609721337.png', 52.00, 85);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `birthday`, `phone`, `email`, `height`, `weight`, `goalweight`, `sport`, `country`, `zipcode`, `username`, `gender`, `password`, `confirmation_token`, `confirmed_at`, `type`) VALUES
(47, 'arezr', 'aze', '2021-01-02', 8545455, 'azkeaz@gmail.com', 51, 21, 51, '51', 'zkalza', 5155, 'zaaz', 'male', 'az', '3IF1vnFAzhoNNjW2pdgt', NULL, 'user'),
(46, 'rayen', 'kaka', '2021-01-23', 85858569, 'bbahta11@gmail.com', 54, 74, 62, 'zadaz', 'tauijz', 2563, 'jaja', 'male', 'kaka', NULL, '2021-01-02', 'user'),
(45, 'janjoon', 'koko', '2020-12-13', 85555555, 'zaea@gmail884.com', 44, 54, 21, 'azzzzzzzzz', 'azidk', 8595, 'lilaok', 'male', 'lilaok', 'j6RQ6y0BiCkJBay8kz0u', NULL, 'user'),
(48, 'zdqazd', 'azdaz', '2021-01-18', 8754, 'rayen@azdbhj.com', 55, 65, 51, 'zadadz', 'zadaz', 1555, 'papa', 'male', 'papa', 'N47QsJcvhYScqe58rSKF', NULL, 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
