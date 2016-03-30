-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 03:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srilanka_bus_guide_malith`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `owner_activate`(IN `id` INT)
    NO SQL
UPDATE `bus_owners` SET `activated`=1 WHERE `owner_id`=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `owner_add`(IN `ownerfstname` VARCHAR(35), IN `ownerlstname` VARCHAR(35), IN `nic` VARCHAR(11), IN `address1` VARCHAR(30), IN `address2` VARCHAR(30), IN `address3` VARCHAR(30), IN `province` VARCHAR(30), IN `phone1` VARCHAR(10), IN `phone2` VARCHAR(10), IN `pwd` VARCHAR(10))
    NO SQL
    COMMENT 'add a new owner'
INSERT INTO `bus_owners`(`owner_first_name`, `owner_last_name`, `nic_number`,
`address_1`, `address_2`, `address_3`, `province`, `owner_phone`,
`owner_phone-2`, `owner_reg_date`, `password`, `activated`) 
VALUES 
(ownerfstname,ownerlstname,nic,address1,
address2,address3,province,phone1,phone2,NOW(),pwd,1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `owner_delete`(IN `id` INT)
    NO SQL
    COMMENT 'delete an owner'
UPDATE `bus_owners` SET `activated`=0 WHERE `owner_id`=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `owner_pwd_change`(IN `id` INT, IN `newpwd` VARCHAR(10))
    NO SQL
UPDATE `bus_owners` SET `password`=newpwd WHERE `owner_id`=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `route_id_get`(IN `routeno` VARCHAR(11), IN `startplace` VARCHAR(25), IN `distplace` VARCHAR(25))
    NO SQL
SELECT `id` FROM `route` WHERE `route_no`=routeno AND 
((`start`=startplace AND `destination`=distplace) OR 
(`start`=distplace AND `destination`=startplace)
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `specialnews_add`(IN `busid` INT(11), IN `showdate` DATE, IN `texts` VARCHAR(30))
    NO SQL
    COMMENT 'add data to special news'
INSERT INTO `special_news`(`bus_id`, `show_date`, `news`, `submit_date_time`, `show_or_delete`) 
VALUES (busid,showdate,texts,NOW(),1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `specialnews_delete`(IN `busid` INT)
    NO SQL
UPDATE `special_news` SET `show_or_delete`=0 WHERE 'bus_id'=busid AND `show_or_delete`=1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `specialnews_edit`(IN `busid` INT, IN `texts` VARCHAR(30))
    NO SQL
UPDATE `special_news` SET `news`=texts 
WHERE 'bus_id'=busid AND `show_or_delete`=1$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booker`
--

CREATE TABLE IF NOT EXISTS `booker` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `booker_nic` varchar(12) NOT NULL,
  `book_date` date NOT NULL,
  `seats` int(11) NOT NULL,
  `get_on` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `place_date` int(11) NOT NULL,
  `activate_or_cancel` tinyint(4) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `bus_id` (`bus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `booker`
--

INSERT INTO `booker` (`book_id`, `name`, `phone`, `email`, `booker_nic`, `book_date`, `seats`, `get_on`, `destination`, `bus_id`, `place_date`, `activate_or_cancel`) VALUES
(1, 'a', '', '', '', '2016-01-19', 5, '', '', 1, 0, 1),
(2, 'b', '', '', '', '2016-01-19', 4, '', '', 2, 0, 1),
(3, 'c', '', '', '', '2016-01-19', 20, '', '', 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_owners`
--

CREATE TABLE IF NOT EXISTS `bus_owners` (
  `owner_id` varchar(11) NOT NULL,
  `owner_first_name` varchar(25) NOT NULL,
  `owner_last_name` varchar(25) NOT NULL,
  `nic_number` varchar(11) NOT NULL,
  `address_1` varchar(30) NOT NULL,
  `address_2` varchar(30) NOT NULL,
  `address_3` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `owner_phone` varchar(10) NOT NULL,
  `owner_phone-2` varchar(10) NOT NULL,
  `owner_reg_date` datetime NOT NULL,
  `password` varchar(8) NOT NULL,
  `activated` tinyint(1) NOT NULL,
  PRIMARY KEY (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_owners`
--

INSERT INTO `bus_owners` (`owner_id`, `owner_first_name`, `owner_last_name`, `nic_number`, `address_1`, `address_2`, `address_3`, `province`, `owner_phone`, `owner_phone-2`, `owner_reg_date`, `password`, `activated`) VALUES
('1', 'kamal', 'jayasinghe', '8870142548V', 'siddhamulla', 'piliyandala', '', 'western', '0713113288', '0777297078', '2015-12-31 00:02:33', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_register`
--

CREATE TABLE IF NOT EXISTS `bus_register` (
  `bus_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_no` int(11) NOT NULL,
  `owner` varchar(9) NOT NULL,
  `input_contact_no` varchar(10) NOT NULL COMMENT 'give inputs to system',
  `output_contact_no` varchar(10) NOT NULL,
  `seat_reservation_no` varchar(10) NOT NULL,
  `permit_no` varchar(15) NOT NULL,
  `bus_reg_no` varchar(12) NOT NULL COMMENT 'plate number of bus',
  `mf_type_of_bus` varchar(100) NOT NULL,
  `condition` enum('super luxury','A/C intercity','semi luxury','normal') NOT NULL COMMENT 'semi luxary or normal',
  `no_of_seats` int(2) NOT NULL,
  `journey_type` enum('extra long distance','long distance','short distance','') NOT NULL,
  `facilities` varchar(500) NOT NULL,
  `bus_name` varchar(30) NOT NULL,
  `bus_start` varchar(25) NOT NULL COMMENT 'start according to permit',
  `bus_destination` varchar(25) NOT NULL COMMENT 'destination according to permit',
  `booking_price` int(11) NOT NULL,
  `now_at` varchar(25) NOT NULL,
  `now_going` varchar(25) NOT NULL,
  `update_time` datetime NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `image_url_permit` varchar(100) NOT NULL,
  `booking_activate` tinyint(4) NOT NULL,
  `activate_or_cancel` tinyint(4) NOT NULL,
  PRIMARY KEY (`bus_id`),
  KEY `supplier_code` (`owner`),
  KEY `route_no` (`route_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bus_register`
--

INSERT INTO `bus_register` (`bus_id`, `route_no`, `owner`, `input_contact_no`, `output_contact_no`, `seat_reservation_no`, `permit_no`, `bus_reg_no`, `mf_type_of_bus`, `condition`, `no_of_seats`, `journey_type`, `facilities`, `bus_name`, `bus_start`, `bus_destination`, `booking_price`, `now_at`, `now_going`, `update_time`, `likes`, `dislikes`, `image_url`, `image_url_permit`, `booking_activate`, `activate_or_cancel`) VALUES
(1, 3, '1', '0712097337', '0712097337', '0712097337', '26485612LD', 'SG NA 1530', 'Leyland Viking', 'semi luxury', 45, 'long distance', '', 'wanniarachchi super line', 'deniyaya', 'colombo', 600, '', '', '0000-00-00 00:00:00', 5, 4, '55224f00ef4bc1428311808bus1 (1).jpg', '', 1, 1),
(2, 4, '1', '', '', '', '', '', 'Leyland Viking', 'semi luxury', 45, '', '', 'kapila express', '', '', 500, '', '', '0000-00-00 00:00:00', 3, 1, '10256547_10152278166119667_1675167995848281413_n7.jpg', '', 1, 1),
(3, 30, '1', '', '', '', '', '', 'Leyland Viking', 'semi luxury', 54, '', '', 'kottawatta super line', '', '', 200, '', '', '0000-00-00 00:00:00', 0, 0, 'big-22-Seater-Luxury-Bus.jpg', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `for_bus_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `show_or_delete` tinyint(4) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `for_bus_id` (`for_bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `rou_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_num` varchar(15) NOT NULL,
  `start` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `through` varchar(60) NOT NULL,
  PRIMARY KEY (`rou_id`,`route_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rou_id`, `route_num`, `start`, `destination`, `through`) VALUES
(1, 'E01', 'matara', 'maharagama', 'expressway'),
(2, 'E01', 'galle', 'maharagama', 'expressway'),
(3, 'E01', 'matara', 'colombo', 'expressway'),
(4, 'E01', 'galle', 'colombo', 'expressway'),
(5, 'E01', 'akurassa', 'colombo', 'expressway'),
(6, 'E01/32', 'katharagama', 'colombo', 'expressway'),
(7, 'E01', 'hakmana', 'colombo', 'expressway'),
(8, 'E01', 'embilipitiya', 'colombo', 'expressway'),
(9, 'E01', 'tangalle', 'colombo', 'expressway'),
(10, 'E01', 'deniyaya', 'colombo', 'expressway'),
(11, 'E01', 'beliatta', 'colombo', 'expressway'),
(30, '122', 'embilipitiya', 'colombo', '');

-- --------------------------------------------------------

--
-- Table structure for table `route_time`
--

CREATE TABLE IF NOT EXISTS `route_time` (
  `id` int(15) NOT NULL,
  `section_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `time_1` time NOT NULL,
  `time_2` time NOT NULL,
  `time_3` time NOT NULL,
  `time_4` time NOT NULL,
  `time_5` time NOT NULL,
  `direction` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bus_id` (`bus_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_time`
--

INSERT INTO `route_time` (`id`, `section_id`, `bus_id`, `time_1`, `time_2`, `time_3`, `time_4`, `time_5`, `direction`) VALUES
(1, 8, 1, '07:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(2, 7, 1, '05:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(3, 9, 1, '07:15:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(4, 10, 1, '07:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(5, 11, 1, '07:40:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(6, 12, 1, '07:45:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(7, 13, 1, '07:50:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(8, 14, 1, '08:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(9, 15, 1, '08:15:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(10, 16, 1, '08:20:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(11, 7, 1, '12:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(12, 8, 1, '10:25:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(13, 9, 1, '10:15:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(14, 10, 1, '10:10:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(15, 11, 1, '10:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(16, 12, 1, '09:55:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(17, 13, 1, '09:50:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(18, 14, 1, '09:45:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(19, 15, 1, '09:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(20, 16, 1, '09:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'matara'),
(27, 17, 2, '06:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(28, 18, 2, '07:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(29, 19, 2, '07:15:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(30, 20, 2, '07:20:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(31, 21, 2, '07:25:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(32, 22, 2, '07:35:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(33, 23, 2, '07:40:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(34, 24, 2, '07:50:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(35, 25, 2, '08:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(36, 26, 2, '08:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'colombo'),
(37, 17, 2, '09:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(38, 18, 2, '09:25:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(39, 19, 2, '09:15:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(40, 20, 2, '09:10:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(41, 21, 2, '09:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(42, 22, 2, '08:55:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(43, 23, 2, '08:50:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(44, 24, 2, '08:45:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(45, 25, 2, '08:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle'),
(46, 26, 2, '08:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'galle');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `category` enum('bus','service') NOT NULL,
  `condition` enum('brand new','used','','') NOT NULL,
  `model` varchar(50) NOT NULL,
  `mf_year` date NOT NULL,
  `mileage` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `summary` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `negotiable` tinyint(4) NOT NULL,
  `post_date` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `image_url_1` varchar(75) NOT NULL,
  `image_url_2` varchar(75) NOT NULL,
  `image_url_3` varchar(75) NOT NULL,
  `image_url_4` varchar(75) NOT NULL,
  `image_url_5` varchar(75) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `paid` tinyint(4) NOT NULL,
  `show` tinyint(4) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `section_name` varchar(35) NOT NULL,
  PRIMARY KEY (`sec_id`),
  KEY `route_id` (`route_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sec_id`, `route_id`, `sub_id`, `section_name`) VALUES
(1, 1, 1, 'matara'),
(2, 1, 2, 'kottawa'),
(3, 1, 3, 'maharagama'),
(4, 2, 1, 'galle'),
(5, 2, 2, 'kottawa'),
(6, 2, 3, 'maharagama'),
(7, 3, 1, 'matara'),
(8, 3, 2, 'kottawa'),
(9, 3, 3, 'maharagama'),
(10, 3, 4, 'nugegoda'),
(11, 3, 5, 'kirulapone'),
(12, 3, 6, 'thimbirigasyaya'),
(13, 3, 7, 'townhall'),
(14, 3, 8, 'lakehouse'),
(15, 3, 9, 'pettah'),
(16, 3, 10, 'colombo'),
(17, 4, 1, 'galle'),
(18, 4, 2, 'kottawa'),
(19, 4, 3, 'maharagama'),
(20, 4, 4, 'nugegoda'),
(21, 4, 5, 'kirulapone'),
(22, 4, 6, 'thimbirigasyaya'),
(23, 4, 7, 'townhall'),
(24, 4, 8, 'lakehouse'),
(25, 4, 9, 'pettah'),
(26, 4, 10, 'colombo'),
(51, 30, 1, 'embilipitiya'),
(52, 30, 2, 'udawalawa'),
(53, 30, 3, 'sankapala'),
(54, 30, 4, 'pallebadda'),
(55, 30, 5, 'godakawela'),
(56, 30, 6, 'madampa'),
(57, 30, 7, 'kahawatta'),
(58, 30, 8, 'palmadulla'),
(59, 30, 9, 'lellopitiya'),
(60, 30, 10, 'ratnapura'),
(61, 30, 1, 'embilipitiya'),
(62, 30, 2, 'udawalawa'),
(63, 30, 3, 'sankapala'),
(64, 30, 4, 'pallebadda'),
(65, 30, 5, 'godakawela'),
(66, 30, 6, 'madampa'),
(67, 30, 7, 'kahawatta'),
(68, 30, 8, 'palmadulla'),
(69, 30, 9, 'lellopitiya'),
(70, 30, 10, 'ratnapura'),
(71, 30, 1, 'embilipitiya'),
(72, 30, 2, 'udawalawa'),
(73, 30, 3, 'sankapala'),
(74, 30, 4, 'pallebadda'),
(75, 30, 5, 'godakawela'),
(76, 30, 6, 'madampa'),
(77, 30, 7, 'kahawatta'),
(78, 30, 8, 'palmadulla'),
(79, 30, 9, 'lellopitiya'),
(80, 30, 10, 'ratnapura'),
(81, 30, 11, 'parakaduwa'),
(82, 30, 12, 'kuruwita'),
(83, 30, 13, 'ehaliyagoda'),
(84, 30, 14, 'awissawella'),
(85, 30, 15, 'puwakpitiya'),
(86, 30, 16, 'kaluaggala'),
(87, 30, 17, 'kosgama'),
(88, 30, 18, 'meepe'),
(89, 30, 19, 'godagama'),
(90, 30, 20, 'kottawa'),
(91, 30, 21, 'maharagama'),
(92, 30, 22, 'nugegoda'),
(93, 30, 23, 'kirulapone'),
(94, 30, 24, 'thimbirigasyaya'),
(95, 30, 25, 'townhall'),
(96, 30, 26, 'lakehouse'),
(97, 30, 27, 'colombo');

-- --------------------------------------------------------

--
-- Table structure for table `special_news`
--

CREATE TABLE IF NOT EXISTS `special_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_id` int(11) NOT NULL,
  `show_date` date NOT NULL,
  `news` varchar(30) NOT NULL,
  `submit_date_time` datetime NOT NULL,
  `show_or_delete` tinyint(1) NOT NULL,
  PRIMARY KEY (`news_id`,`bus_id`),
  KEY `bus_id` (`bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booker`
--
ALTER TABLE `booker`
  ADD CONSTRAINT `booker_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `bus_register` (`bus_id`);

--
-- Constraints for table `bus_register`
--
ALTER TABLE `bus_register`
  ADD CONSTRAINT `bus_register_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `bus_owners` (`owner_id`),
  ADD CONSTRAINT `bus_register_ibfk_2` FOREIGN KEY (`route_no`) REFERENCES `route` (`rou_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`for_bus_id`) REFERENCES `bus_register` (`bus_id`);

--
-- Constraints for table `route_time`
--
ALTER TABLE `route_time`
  ADD CONSTRAINT `route_time_ibfk_3` FOREIGN KEY (`bus_id`) REFERENCES `bus_register` (`bus_id`),
  ADD CONSTRAINT `route_time_ibfk_4` FOREIGN KEY (`section_id`) REFERENCES `sections` (`sec_id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `route` (`rou_id`);

--
-- Constraints for table `special_news`
--
ALTER TABLE `special_news`
  ADD CONSTRAINT `special_news_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `bus_register` (`bus_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
