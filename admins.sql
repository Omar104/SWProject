-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 10:29 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admins`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `info` varchar(500) DEFAULT NULL,
  `tele_number` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `info`, `tele_number`, `email`, `link`) VALUES
(1, '   K-vector is a bla bla bla bla bla bla bla , and we do alot of bla bla bla bla in addition to some bla bla bla bla bla \r\n                ,we support FC Barcelona and bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla \r\n                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla\r\n                 bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '01095761809', '7mada2llada@hotmail.com', 'https://www.facebook.com/kvectorfoundation/?fref=ts');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `super_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `un` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `first_name`, `last_name`, `super_admin`) VALUES
(1, 'khaled', 'mario', 'khaled', 'hashad', 1),
(2, 'omar', 'ay7aga', 'omar', 'sayed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `un` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`) VALUES
(2, 'album2', 'barca hat5sr  btlataaaaaaaaaaaaaaaaaaa'),
(3, 'album3', 'we atlityyyyyyyyyyyyyyyyyyyy hat5sr  btlataaaaaaaaaaaaaaaaaaa'),
(10, 'album1', 'halamadrid ksbna 3-2'),
(12, 'album5', 'totiiiiiiiiiiiiiiiiiiiiiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `admin_name` varchar(100) DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `blog` text,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`admin_name`, `blog_date`, `title`, `blog`) VALUES
('khaled', '2015-05-05', 'btnganten', '7madaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('khaled', '2009-06-12', 'mario', 'ssssssssssssssssssssssssssssssssssdsmd  safpokkkkkkkkkkkk askodfa kspfoka askpfap sfkaps fkapsfnudvh snvsidfiosef sidfjn sefjn spefn');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) NOT NULL,
  `album` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `refer` (`album`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `file_name`, `album`) VALUES
(1, 'kv.jpg', 'album1'),
(2, 'kvc.jpg', 'album1'),
(9, 'kv.jpg', 'album2'),
(10, 'kv.jpg', 'album3'),
(11, 'kvc.jpg', 'album2'),
(12, 'kvc.jpg', 'album3'),
(13, 'no_sign.jpg', 'album2'),
(14, 'no_sign.jpg', 'album3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `refer` FOREIGN KEY (`album`) REFERENCES `albums` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
