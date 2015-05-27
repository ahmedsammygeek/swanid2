-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2015 at 10:58 PM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `frist_name`, `second_name`, `last_name`, `age`, `email`, `mobile`, `academic_qualification`, `track_id`, `swanid_certificate`) VALUES
(1, 'Ø¹Ù„Ø§Ø¡', 'Ø®Ø§Ù„Ø¯', 'Ø§Ø­Ù…Ø¯', 22, 'amgad@yahoo.com', '0121212112', 3, 0, 'cs and network'),
(2, 'ahmed', 'samy', 'sayd', 22, 'amgad@yahoo.com', '0121212112', 3, 2, 'xcvjk bdfjkvdfjkvbvjkbfjkdfbvkdfj');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `applicants_careers`
--

INSERT INTO `applicants_careers` (`id`, `frist_name`, `second_name`, `last_name`, `age`, `email`, `mobile`, `academic_qualification`, `career_id`) VALUES
(1, 'alaa', '3bdo', 'elgndy', 32, 'alaaelgndy21@yahoo.com', '0121255545', 4, 1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `applicants_events`
--

INSERT INTO `applicants_events` (`id`, `frist_name`, `second_name`, `last_name`, `age`, `email`, `mobile`, `academic_qualification`, `event_id`, `description`) VALUES
(1, 'alaa', '3bdo', 'elgndy', 12, 'alaaelgndy21@yahoo.com', '0121255545', 3, 1, 'dsvbjdfvbdfjkfbdvjkb jkbfjb dfjk bdfj kb jkdfbk d');

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
  `how_to come_gallery` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `applicants_gallery`
--

INSERT INTO `applicants_gallery` (`id`, `frist_name`, `second_name`, `last_name`, `age`, `emai`, `mobile`, `academic_qualification`, `gallery_id`, `how_to come_gallery`, `description`) VALUES
(1, 'alaa', '3bdo', 'elgndy', 12, 'amgad@yahoo.com', '0121212112', 2, 5, 3, 'fvkbfvjkbjcerbkjbrejkre'),
(2, 'alaa', '3bdo', 'elgndy', 12, 'adham@yahoo.com', '0121255545', 3, 1, 0, 'dsjvbfdvbdfjkbvfjkvblbvrelkvn;vnerrere'),
(3, 'alaa', '3bdo', 'elgndy', 12, 'adham@yahoo.com', '0121255545', 3, 1, 0, 'dsjvbfdvbdfjkbvfjkvblbvrelkvn;vnerrere');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `content`) VALUES
(1, 'alaa', 'alaald;jdfvkbdfivbdfvbbjfv ');

-- --------------------------------------------------------

--
-- Table structure for table `careers_sposor`
--

CREATE TABLE IF NOT EXISTS `careers_sposor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `certification_and_awards`
--

INSERT INTO `certification_and_awards` (`id`, `title`, `description`) VALUES
(2, 'alaa', 'Ù„Ø¯ÙŠÙ†Ø§ Ø´Ù‡Ø§Ø¯Ø§Øª Ù…Ø¹ØªÙ…Ø¯Ø© Ù…Ù† Ø§ÙƒØ«Ø± Ù…Ù† Ø¬Ù‡Ù‡ Ø±Ø³Ù…ÙŠØ© ÙÙŠ Ø§Ù„Ù…Ù…Ù„ÙƒÙ‡ Ùˆ Ø®Ø§Ø±Ø¬Ù‡Ø§ Ù‡Ø°Ù‡ Ø§Ù„Ø´Ù‡Ø§Ø¯Ø§Øª ØªÙ…ÙƒÙ†Ùƒ Ù…Ù† Ø§Ù„Ø¹Ù…Ù„ ÙÙŠ Ø§ÙƒØ«Ø± Ù…Ù† Ù…ÙƒØ§Ù† Ùˆ Ù‡ÙŠ Ù…Ø¹ØªÙ…Ø¯Ù‡ Ø¹Ø§Ù„Ù…ÙŠØ§ Ùˆ Ù…ÙˆØ«Ù‚Ø© ÙÙŠ Ø¬Ù…ÙŠØ¹ Ø§Ù†Ø­Ø§Ø¡ Ø§Ù„Ø¹Ø§Ù„Ù…'),
(3, 'Ø´Ù‡Ø§Ø¯Ø§Øª Ù…Ø¹Ø¯Ù…Ø¯Ø© Ù…Ù† Ù…Ø±Ø§ÙƒØ² Ø¹Ø§Ù„Ù…ÙŠØ©', 'Ù„Ø¯ÙŠÙ†Ø§ Ø´Ù‡Ø§Ø¯Ø§Øª Ù…Ø¹ØªÙ…Ø¯Ø© Ù…Ù† Ø§ÙƒØ«Ø± Ù…Ù† Ø¬Ù‡Ù‡ Ø±Ø³Ù…ÙŠØ© ÙÙŠ Ø§Ù„Ù…Ù…Ù„ÙƒÙ‡ Ùˆ Ø®Ø§Ø±Ø¬Ù‡Ø§ Ù‡Ø°Ù‡ Ø§Ù„Ø´Ù‡Ø§Ø¯Ø§Øª ØªÙ…ÙƒÙ†Ùƒ Ù…Ù† Ø§Ù„Ø¹Ù…Ù„ ÙÙŠ Ø§ÙƒØ«Ø± Ù…Ù† Ù…ÙƒØ§Ù† Ùˆ Ù‡ÙŠ Ù…Ø¹ØªÙ…Ø¯Ù‡ Ø¹Ø§Ù„Ù…ÙŠØ§ Ùˆ Ù…ÙˆØ«Ù‚Ø© ÙÙŠ Ø¬Ù…ÙŠØ¹ Ø§Ù†Ø­Ø§Ø¡ Ø§Ù„Ø¹Ø§Ù„Ù… '),
(4, 'Ø´Ù‡Ø§Ø¯Ø§Øª Ø¹Ø§Ù„Ù…ÙŠØ©', 'Ù„Ø¯ÙŠÙ†Ø§ Ø´Ù‡Ø§Ø¯Ø§Øª Ù…Ø¹ØªÙ…Ø¯Ø© Ù…Ù† Ø§ÙƒØ«Ø± Ù…Ù† Ø¬Ù‡Ù‡ Ø±Ø³Ù…ÙŠØ© ÙÙŠ Ø§Ù„Ù…Ù…Ù„ÙƒÙ‡ Ùˆ Ø®Ø§Ø±Ø¬Ù‡Ø§ Ù‡Ø°Ù‡ Ø§Ù„Ø´Ù‡Ø§Ø¯Ø§Øª ØªÙ…ÙƒÙ†Ùƒ Ù…Ù† Ø§Ù„Ø¹Ù…Ù„ ÙÙŠ Ø§ÙƒØ«Ø± Ù…Ù† Ù…ÙƒØ§Ù† Ùˆ Ù‡ÙŠ Ù…Ø¹ØªÙ…Ø¯Ù‡ Ø¹Ø§Ù„Ù…ÙŠØ§ Ùˆ Ù…ÙˆØ«Ù‚Ø© ÙÙŠ Ø¬Ù…ÙŠØ¹ Ø§Ù†Ø­Ø§Ø¡ Ø§Ù„Ø¹Ø§Ù„Ù…'),
(5, 'certfication', 'Ù„Ø¯ÙŠÙ†Ø§ Ø´Ù‡Ø§Ø¯Ø§Øª Ù…Ø¹ØªÙ…Ø¯Ø© Ù…Ù† Ø§ÙƒØ«Ø± Ù…Ù† Ø¬Ù‡Ù‡ Ø±Ø³Ù…ÙŠØ© ÙÙŠ Ø§Ù„Ù…Ù…Ù„ÙƒÙ‡ Ùˆ Ø®Ø§Ø±Ø¬Ù‡Ø§ Ù‡Ø°Ù‡ Ø§Ù„Ø´Ù‡Ø§Ø¯Ø§Øª ØªÙ…ÙƒÙ†Ùƒ Ù…Ù† Ø§Ù„Ø¹Ù…Ù„ ÙÙŠ Ø§ÙƒØ«Ø± Ù…Ù† Ù…ÙƒØ§Ù† Ùˆ Ù‡ÙŠ Ù…Ø¹ØªÙ…Ø¯Ù‡ Ø¹Ø§Ù„Ù…ÙŠØ§ Ùˆ Ù…ÙˆØ«Ù‚Ø© ÙÙŠ Ø¬Ù…ÙŠØ¹ Ø§Ù†Ø­Ø§Ø¡ Ø§Ù„Ø¹Ø§Ù„Ù…'),
(6, 'Ù…ÙƒØ© Ø§Ù„Ù…ÙƒØ±Ù…Ø© ', 'Ø´Ù‡Ø§Ø¯Ø§Øª ÙÙŠ Ø¬Ù…ÙŠØ¹ Ø§Ù„ØªØ®ØµØµØ§Øª ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `address`, `details`) VALUES
(1, 'event title', '2015-01-01', 'event address', 'sdkvjbdfhjvbfhvdfbvdfv');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE IF NOT EXISTS `event_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `participation_type` int(11) NOT NULL,
  `participation_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_sponsors`
--

CREATE TABLE IF NOT EXISTS `event_sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `address`) VALUES
(1, 'frivonrnrbrobroivnroirtnvtiobnrtiobrt'),
(2, 'trjbrtjbrivubrtitubvrtuivrbttv'),
(3, 'fdvkbjbrviurbeuierbviu'),
(4, 'ivdcbcioboeirvbervre'),
(5, 'fdvkbjbrviurbeuierbviu'),
(6, 'ivdcbcioboeirvbervre');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_participants`
--

CREATE TABLE IF NOT EXISTS `gallery_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `how_to_participate` varchar(200) NOT NULL,
  `participate_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_sponsor`
--

CREATE TABLE IF NOT EXISTS `gallery_sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `academic_qualification` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `frist_name`, `second_name`, `last_name`, `age`, `email`, `mobile`, `academic_qualification`, `date`) VALUES
(1, 'Ø¹Ù…Ø±', 'Ù…Ø­Ù…Ø¯', 'Ù…Ø´Ø§Ù„ÙŠ', 12, 'omar@yahoo.com', '0101111112', 1, '2015-05-05');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `sponsor_name`, `money`, `mobile`, `email`, `type`) VALUES
(1, 'Ø¨ÙŠØ¨Ø³ÙŠ', '0.000', '0121212112', 'alaaelgndy21@yahoo.com', 0),
(2, 'Ø¬ÙˆÙˆØ¬Ù„', '0.000', '021114548', 'amgad@yahoo.com', 3),
(3, 'ÙŠØ§Ù‡ÙˆÙˆÙˆ', '0.000', '0121212112', 'alaaelgndy21@yahoo.com', 2),
(4, 'alaa', '20000.000', '0121255545', 'alaaelgndy21@yahoo.com', 3),
(5, 'ahmed', '1000.000', '2121121', 'amgad@yahoo.com', 3),
(7, 'alaa', '1211.000', '0121255545', 'amgad@yahoo.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `details`) VALUES
(1, 'Ø¹Ù†ÙˆØ§Ù†', 'Ù…Ø­ØªÙˆÙ‰\r\n'),
(2, 'cs', 'vfdjfjdfbvjkbdfjkvbdvfjkfdjkvbdfjkvfdbvjkerbver');

-- --------------------------------------------------------

--
-- Table structure for table `track_participants`
--

CREATE TABLE IF NOT EXISTS `track_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `certification_Instruments` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `track_sponsor`
--

CREATE TABLE IF NOT EXISTS `track_sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
