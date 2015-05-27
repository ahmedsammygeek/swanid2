-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2015 at 09:22 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swanid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`) VALUES
(1, 'alaa', 'alaa'),
(3, 'sarah', 'sarah');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(150) NOT NULL,
  `second_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `academic_qualification` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `swanid_certificate` varchar(50) NOT NULL,
  `card_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_careers`
--

CREATE TABLE IF NOT EXISTS `applicants_careers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(150) NOT NULL,
  `second_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `academic_qualification` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
  `card_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_events`
--

CREATE TABLE IF NOT EXISTS `applicants_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(150) NOT NULL,
  `second_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `academic_qualification` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `card_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_gallery`
--

CREATE TABLE IF NOT EXISTS `applicants_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(150) NOT NULL,
  `second_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `emai` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `academic_qualification` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `how_to_come_gallery` int(11) NOT NULL,
  `description` text NOT NULL,
  `card_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `applicants_gallery`
--

INSERT INTO `applicants_gallery` (`id`, `frist_name`, `second_name`, `last_name`, `age`, `emai`, `mobile`, `academic_qualification`, `gallery_id`, `how_to_come_gallery`, `description`, `card_id`) VALUES
(1, 'alaa', '3bdo', 'elgndy', 22, 'alaaelgndy21@yahoo.com', '0121212112', 3, 1, 3, 'fun day', '');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `certification_and_awards`
--

CREATE TABLE IF NOT EXISTS `certification_and_awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(250) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(200) NOT NULL,
  `title` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `address`, `title`) VALUES
(1, 'مكة المكرمة', 'معرض الكتاب');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_name` varchar(200) NOT NULL,
  `money` decimal(10,3) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `type` int(11) NOT NULL,
  `card_id` varchar(20) NOT NULL,
  `frist_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `sponsor_name`, `money`, `mobile`, `email`, `type`, `card_id`, `frist_name`, `second_name`, `last_name`) VALUES
(1, 'الشركة العربية', '1000.000', '0121255545', 'alaaelgndy21@yahoo.com', 3, '1000111110021212', 'احمد', 'جلال', 'الدين'),
(2, 'الشركة المصرية', '100000.000', '01062300489', 'alaaelgndy21@yahoo.com', 4, '1021545122111', 'علاء', 'خالد', 'احمد');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
