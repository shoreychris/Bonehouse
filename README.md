# Bonehouse
Project
READ ME.

**** Here is the URL to access the website = http://unn-v031587.newnumyspace.co.uk/Integration4/home.php

****All database tables are included in file Barke&Bonehouse-SQL.txt for set up.

****LOGIN - The login details are as follow:

For full admin access; 
USERNAME = admin@gmail.com
PASSWORD = admin

The admin part of the site can be accessed by clicking on the black figure icon 
at the bottom right of the screen within the base bar. Only after logging in first.

Login details for employees within the Staff / Employee management function are as follows;

ADMIN
USERNAME = admin@gmail.com
PASSWORD = admin

STAFF
USERNAME = N.SwiftHunter@gmail.com  
PASSWORD = 123

USERNAME = K.Smith@gmail.com
PASSWORD = 123

USERNAME = S.Ross@gmail.com
PASSWORD = 123

**** To set up database with relevant tables see below:
-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2020 at 11:57 AM
-- Server version: 5.5.58-0+deb7u1-log
-- PHP Version: 5.6.31-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unn_v031587`
--
CREATE DATABASE IF NOT EXISTS `unn_v031587` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `unn_v031587`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `name` text NOT NULL,
  `number` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `number`, `date`, `time`) VALUES
('Christopher Shorey', '07713722431', '2020-04-17', '11:00:00'),
('', '', '0000-00-00', '00:00:00'),
('qwe', 'qwe', '2020-04-30', '22:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointment1`
--

DROP TABLE IF EXISTS `appointment1`;
CREATE TABLE IF NOT EXISTS `appointment1` (
  `name1` text NOT NULL,
  `number1` text NOT NULL,
  `date1` date NOT NULL,
  `time1` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
`id` int(11) NOT NULL,
  `CustomerID` varchar(200) NOT NULL,
  `YourName` text NOT NULL,
  `YourEmail` varchar(200) NOT NULL,
  `TELNO` varchar(20) NOT NULL,
  `DogsName` text NOT NULL,
  `DogsBreeds` text NOT NULL,
  `DogsAge` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Timeslot` varchar(10) NOT NULL,
  `DogsIntroduction` text NOT NULL,
  `cost` double NOT NULL,
  `seen` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `CustomerID`, `YourName`, `YourEmail`, `TELNO`, `DogsName`, `DogsBreeds`, `DogsAge`, `Date`, `Timeslot`, `DogsIntroduction`, `cost`, `seen`) VALUES
(153, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 1, '2020-04-22', '9am-1pm', '', 15, 'yes'),
(145, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-20', 'All Day', '', 22, 'yes'),
(154, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-18', '9am-1pm', 'Week 1 (Duplicate).', 15, 'yes'),
(146, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-21', 'All Day', '', 22, 'yes'),
(137, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-13', '9am-1pm', 'Week 1.', 15, 'yes'),
(139, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-15', '9am-1pm', 'Week 1.', 15, 'yes'),
(138, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-14', '9am-1pm', 'Week 1.', 15, 'yes'),
(149, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-24', 'All Day', '', 22, 'yes'),
(155, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 1, '2020-04-25', '9am-1pm', '', 15, 'yes'),
(151, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'fido', 'dog', 3, '2020-04-19', '9am-1pm', 'ff', 15, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
`id` int(3) NOT NULL,
  `name` varchar(24) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(13, 'Grooming'),
(14, 'Photography'),
(15, 'Shop'),
(1, 'Uncategorized');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
`CustomerID` int(11) NOT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address1` varchar(255) DEFAULT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `PostCode` varchar(255) DEFAULT NULL,
  `TelNo` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `UserType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Surname`, `FirstName`, `Address1`, `Address2`, `PostCode`, `TelNo`, `Email`, `UserName`, `Password`, `UserType`) VALUES
(1, 'admin', 'admin', '1', 'house', 'ne1', '01912636533', 'admin@admin', 'admin', 'admin', '2'),
(2, 'Barnes', 'Christopher', '1', 'Anfield', 'NE28', '01912636538', 'john@barnes.co.uk', 'john@barnes.co.uk', '4522957332006008171', '1'),
(3, 'Barnes', 'John', '1', 'Anfield', 'NE1', '019293737', 'barnes@john.co.uk', 'barnes@john.co.uk', 'Hayden2006', '1'),
(5, 'barry', 'bond', '1', 'House Lane', 'ne29', '019192372', 'barry@bond.co.uk', 'barry@bond.co.uk', 'Hayden2006', '1'),
(6, 'Clark', 'Lee', '99', 'High Street', 'NE28 9HT', '01912636537', 'lee@clark.com', 'lee@clark.com', 'Hayden2006', '1'),
(7, 'Thirkle', 'Jordan', '1', '2', 'NE28', '01912636537', 'jordan@thirkle.com', 'jordan@thirkle.com', 'Jordan2019', '1'),
(8, 'shorey', 'Chris', '75', 'hg', 'NE28', '01912636537', 'shorey@', 'shorey@', 'Hayden2006', '1'),
(9, 'Fury', 'Tyson', '12', 'Big', 'NE1', '911', 'Bigfury@box', 'Bigfury@box', 'showtime', '2'),
(10, 'Shorey', 'C', '75 Kings Road North', 'wallsend', 'NE28 9HT', '01912636537', 'c@s', 'c@s', 'hayden2006', '2'),
(11, 'Shorey', 'C', '75 ', 'Kings', 'NE28', '07713722431', 'admin@gmail.com', 'admin@gmail.com', 'admin', '2'),
(12, 'test', 'test', 'test', 'test', 'test', 'test', 'test@test', 'test@test', 'test99', '1'),
(13, '1', '1', '1', '1', '1', '1', '1@1', '1@1', 'testtest', '1'),
(14, 'Healy', 'Jack', 'Floor 3A10, Claude Gibb Hall', 'Newcastle upon-Tyne', 'NE1 8SU', '07545754600', 'jack.healy001@gmail.com', 'jack.healy001', 'password', '2'),
(16, 'Bloggs', 'Joe', '1 Banterbury Road', 'Banterbury', 'BY3 4UI', '0123456789', 'banter@banter', 'banter', 'password', '1'),
(17, 'Zhang', 'Lingyuan', 'Liberty Central', 'E6', 'NE2 1XH', '07824642635', 'LING@gmail.com', 'w10000', 'lingyuan', '1'),
(18, 'Ling', 'Yan', 'NANGONG', 'YAYUAN', 'NE2 1XH', '12345678', 'lingyan@gmail.com', 'ly0814', '606225', '1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
`id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(3, 'Online Shop'),
(5, 'Grooming'),
(6, 'Day care'),
(7, 'Photography');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `birthday` date NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `password`, `department_id`, `address`, `birthday`, `role`) VALUES
(2, 'Sharon Ross', 'S.Ross@gmail.com', '07719056372', '123', 5, '12 Rex Street, NE31 4LW', '1989-12-14', 2),
(3, 'admin', 'admin@gmail.com', '', 'admin', 4, '', '0000-00-00', 1),
(4, 'Nicola Swift-Hunter', 'N.SwiftHunter@gmail.com', '07713123223', '123', 5, '27 Fido Road, NE31 3LW', '1986-06-19', 2),
(5, 'Kate Smith', 'K.Smith@gmail.com', '07940502009', '123', 5, '101 Rover Lane, NE31 3LB', '1997-08-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(25, 'test', '2020-04-16 00:00:00', '2020-04-18 00:00:00'),
(29, 'Katie Sickness', '2020-04-06 00:00:00', '2020-04-09 00:00:00'),
(31, 'Nicola sick leave', '2020-04-07 00:00:00', '2020-04-22 00:00:00'),
(32, 'test', '2020-04-27 00:00:00', '2020-05-02 00:00:00'),
(33, 'EASTER SUNDAY', '2020-04-12 00:00:00', '2020-04-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
`PictureID` int(11) NOT NULL,
  `PictureName` varchar(255) DEFAULT NULL,
  `PictureRef` longblob NOT NULL,
  `PictureDescription` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`PictureID`, `PictureName`, `PictureRef`, `PictureDescription`, `Category`) VALUES
(1, 'Dog1', 0x646f67312e6a706567, 'DOGGY', 'Dog'),
(2, 'Dog2', 0x646f67322e6a706567, 'Another dog', 'Dog'),
(3, 'Dog3', 0x646f67332e6a706567, 'Cute dog', 'Dog'),
(4, 'doggy5', 0x646f67342e6a706567, 'big dog', 'Dog'),
(5, 'Dog1', 0x646f67342e6a706567, 'ihg', 'Dog'),
(6, 'hayden', 0x646f67332e6a706567, 'dog', 'Dog'),
(7, 'big face', 0x646f67322e6a706567, 'uhdicu', 'Dog'),
(8, 'hvgg', 0x646f67342e6a706567, 'hg h ', 'Dog'),
(9, 'Dog', 0x646f67322e6a706567, 'Test', 'Dog'),
(10, 'Surfboards', 0x646f67322e6a706567, 'eefef', 'Kayak'),
(11, 'big face', 0x646f67322e6a706567, 'test', 'Dog'),
(12, 'Chris Shorey', 0x646f67322e6a706567, 'test', 'Dog'),
(13, 'Chris Shorey', 0x646f67322e6a706567, 'test', 'Dog'),
(14, 'big face', 0x646f67332e6a706567, 'test', 'Dog'),
(15, 'big face', 0x646f67342e6a706567, 'big dog', 'Dog'),
(16, 'test', 0x646f6763616d2e6a7067, 'test', 'test'),
(17, 'test', 0x646f67322e6a706567, 'test', 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `category` text NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

DROP TABLE IF EXISTS `leave`;
CREATE TABLE IF NOT EXISTS `leave` (
`id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_description` text NOT NULL,
  `leave_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `employee_id`, `leave_id`, `leave_from`, `leave_to`, `leave_description`, `leave_status`) VALUES
(2, 2, 3, '2020-01-01', '2020-01-02', 'Not well', 2),
(3, 4, 2, '2020-01-01', '2020-01-02', 'test', 3),
(4, 4, 3, '2020-01-02', '2020-01-03', 'test desc''', 3),
(5, 4, 4, '2020-03-30', '2020-04-01', 'corona', 2),
(6, 4, 4, '2020-04-07', '2020-04-21', 'Corona Virus - Isolation', 1),
(7, 4, 3, '2020-11-12', '2020-11-26', 'Annual', 1);

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

DROP TABLE IF EXISTS `leave_type`;
CREATE TABLE IF NOT EXISTS `leave_type` (
`id` int(11) NOT NULL,
  `leave_type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `leave_type`) VALUES
(2, 'Carers'),
(3, 'Annual'),
(4, 'Sick');

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

DROP TABLE IF EXISTS `orderline`;
CREATE TABLE IF NOT EXISTS `orderline` (
`OrderLineNo` int(11) NOT NULL,
  `OrderNo` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

DROP TABLE IF EXISTS `password_reset_temp`;
CREATE TABLE IF NOT EXISTS `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
`id` int(6) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `contents`, `date_posted`) VALUES
(35, 1, 'Easter Specials', 'Please check our online shop for Easter deals.\r\n\r\nWe also have special offers on photography packages.', '2020-04-18 17:24:12'),
(37, 1, 'Easter Opening Hours', 'Our Shop will be closed over the easter weekend.', '2020-04-18 19:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
`ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `ProductDescription` varchar(1000) DEFAULT NULL,
  `PictureRef` varchar(255) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Current` tinyint(4) DEFAULT NULL,
  `Category` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductDescription`, `PictureRef`, `Price`, `Current`, `Category`) VALUES
(11, '40 Winks Deep Plus Donut Bed', 'soft and cosy faux suede dog bed with a luxury plush inner. This stylish and modern bed is machine washable', 'Images\\DogBeds\\40WinksDeepPlusDonutPetBed.jpg', 9.99, 33, 'DogBeds'),
(12, '40 Winks Orthopaedic Dog Bed Red (small)', 'The soft plush inner promotes a restful sleep and provides added comfort and support whilst relieving pressure points making this bed perfect for older pets with joint problems. The cover is removable and machine washable.', 'Images\\DogBeds\\40WinksOrthopaedicDogBedRed.jpg', 19.99, 34, 'DogBeds'),
(13, '40 Winks Orthopaedic Dog Bed Red (large)', 'The soft plush inner promotes a restful sleep and provides added comfort and support whilst relieving pressure points making this bed perfect for older pets with joint problems. The cover is removable and machine washable.', 'Images\\DogBeds\\40WinksOrthopaedicDogBedRed.jpg', 30.99, 2, 'DogBeds'),
(14, 'Ancol Pewter Strip Buffer Dog Bed (small)', 'Exquisite tailoring and generous cushioning ensures a comfortable rest area for your dog\r\nThick padded base cushion provides insulation to help keep your animal cosy\r\nIdeal for older dogs to walk into, without having to climb\r\nEasily cleaned in a washing machine on a cool wash', 'Images\\DogBeds\\AncolPewterStripBufferDogBed.jpg', 18.99, 3, 'DogBeds'),
(15, 'Ancol Pewter Strip Buffer Dog Bed (medium)', 'Exquisite tailoring and generous cushioning ensures a comfortable rest area for your dog\r\nThick padded base cushion provides insulation to help keep your animal cosy\r\nIdeal for older dogs to walk into, without having to climb\r\nEasily cleaned in a washing machine on a cool wash', 'Images\\DogBeds\\40WinksOrthopaedicDogBedRed.jpg', 38.95, 1, 'DogBeds'),
(16, 'Danish Design Pet House 44x43cm', 'oft, lightweight igloo for your pet. Emblazoned with the Danish Design logo, this luxurious cave hideaway is ideal as a travel home while the fleece-lined inner keeps your pet snug and warm on cold nights.', 'Images\\DogBeds\\DanishDesignPetHouse44x43cm.jpg', 39.99, 4, 'DogBeds'),
(18, 'Danish Design 2 in 1 Dog Coat (12in/30cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 12.99, 4, 'DogCoats'),
(19, 'Danish Design 2 in 1 Dog Coat (16in/40cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 15.99, 4, 'DogCoats'),
(20, 'Danish Design 2 in 1 Dog Coat (18in/45cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 17.99, 4, 'DogCoats'),
(21, 'Danish Design 2 in 1 Dog Coat (20in/50cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 19.99, 4, 'DogCoats'),
(22, 'Danish Design 2 in 1 Dog Coat (22in/55cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 21.99, 4, 'DogCoats'),
(23, 'Danish Design 2 in 1 Dog Coat (24in/60cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 23.99, 4, 'DogCoats'),
(24, 'Danish Design 2 in 1 Dog Coat (26in/65cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 25.99, 4, 'DogCoats'),
(25, 'Danish Design 2 in 1 Dog Coat (28in/70cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 27.99, 2, 'DogCoats'),
(26, 'Danish Design 2 in 1 Dog Coat (30in/75cm)', 'This coat is superb for both the winter and warmer months. The coat is a lightweight waterproof and breathable to protect your dog from summer showers. When the weather gets cooler simply re-attach the fleece and you have a warm and waterproof all-purpose winter coat.', 'Images\\DogCoats\\DanishDesign2in1DogCoat.jpg', 29.99, 20, 'DogCoats'),
(27, 'Ancol Heritage Diamond Tan Dog Collar (26-36cm)', 'Give your dog a classic look with this Ancol Heritage Diamond Dog Collar, which is a strong, traditional collar made using the best workmanship.', 'Images\\DogCollars\\AncolHeritageDiamondTanDogCollar.jpg', 4.99, 7, 'DogCollars'),
(28, 'Ancol Heritage Diamond Tan Dog Collar\r\n(46-56cm)', 'Give your dog a classic look with this Ancol Heritage Diamond Dog Collar, which is a strong, traditional collar made using the best workmanship.', 'Images\\DogCollars\\AncolHeritageDiamondTanDogCollar.jpg', 6.99, 8, 'DogCollars'),
(29, 'Rosewood Luxury Black Leather Dog Collar (10-14inch)', 'Give your dog a classic look with this Ancol Heritage Diamond Dog Collar, which is a strong, traditional collar made using the best workmanship.', 'Images\\DogCollars\\RosewoodLuxuryBlackLeatherDogCollar.jpg', 7.49, 5, 'DogCollars'),
(30, 'Rosewood Luxury Black Leather Dog Collar (14-18inch)', 'This comfortable and practical fit collar is crafted with the finest leather and suedette material using robust fittings and embellished with hand stitching, decorative buttons and charms', 'Images\\DogCollars\\RosewoodLuxuryBlackLeatherDogCollar.jpg', 9.99, 5, 'DogCollars'),
(31, 'Rosewood Luxury Black Leather Dog Collar (18-22inch)', 'This comfortable and practical fit collar is crafted with the finest leather and suedette material using robust fittings and embellished with hand stitching, decorative buttons and charms', 'Images\\DogCollars\\RosewoodLuxuryBlackLeatherDogCollar.jpg', 11.99, 8, 'DogCollars'),
(32, 'Flexi New Classic Cord Lead 5m (Red)', 'This well thought out lead has a robust plastic body, with a push button retractor and short stroke braking system. The ergonomic grip means that you can keep hold of your dog even when they try to pull, which gives you more control.', 'Images\\DogLeads\\FlexiClassicCordLead5mRed.jpg', 7.99, 8, 'DogLeads'),
(33, 'Flexi New Classic Cord Lead 5m (Black)', 'This well thought out lead has a robust plastic body, with a push button retractor and short stroke braking system. The ergonomic grip means that you can keep hold of your dog even when they try to pull, which gives you more control.', 'Images\\DogLeads\\FlexiClassicCordLead5mBlack.jpg', 7.99, 6, 'DogLeads'),
(36, 'Frontline Spot On Dog 2kg - 10kg (6 x 0.67ml)', 'effective in the treatment and prevention of infestations of fleas, ticks and biting lice on dogs and provides protection against ticks for up to 1 month and 8 weeks protection against fleas depending on the level of environmental challenge. Treatment can be administered on a 4 weekly basis', 'Images\\FleaAndTick\\FrontlineSpotOnDog2kg-10kg.jpg', 26.99, 4, 'FleaAndTick'),
(37, 'Frontline Spot On Dog 10kg - 20kg (6 x 1.34ml)', 'effective in the treatment and prevention of infestations of fleas, ticks and biting lice on dogs and provides protection against ticks for up to 1 month and 8 weeks protection against fleas depending on the level of environmental challenge. Treatment can be administered on a 4 weekly basis', 'Images\\FleaAndTick\\FrontlineSpotOnDog10kg-20kg.jpg', 33.99, 3, 'FleaAndTick'),
(42, 'Panacur Cat/Dog Worming Granules 22% 1.8g Pack of 3 Sachets', 'Panacur Granules are effective against both immature and mature Roundworms of the gastro-intestinal and respiratory tracts. It is also effective in the treatment of Lungworm in both cats and dogs. Panacur is suitable for the treatment of pregnant bitches to reduce prenatal infections of Roundworm. Panacur granules can also be safely used on pregnant queens.', 'Images\\Wormers\\Granules.jpg', 6.99, 14, 'Wormers'),
(43, 'Panacur Worming Liquid 10% 100ml', 'Panacur 10% Oral Suspension is effective against both immature and mature Roundworms in both cats and dogs. It is recomended that pregnant bitches are regularly treated to reduce the prenatal infections of Roundworm. Puppies and kittens can also safely be treated with Panacur Oral Suspension.', 'Images\\Wormers\\Liquid.jpg', 24.99, 5, 'Wormers'),
(44, 'Petplanet Puppy Training Pads 100 pcs', 'This is a convenient, and hygienic, way to create a designated toilet area for puppies as well as for indoor, confined or ill pets. Being antibacterial and odour eliminating these pads are ideal for making an unpleasant job far easier and clean. These can also be used in pet crates or carriers when your canine friend is travelling with you.', 'Images\\Hygiene\\PetplanetPuppyTrainingPads100pcs.jpg', 19.99, 11, 'Hygiene'),
(45, 'Simple Solution Stain & Odour Remover 750ml', 'More than just an ordinary deodoriser, Simple Solution Stain & Odour Remover completely eliminates all organic stains and odours. Ideal for urine, vomit, faeces, blood, dirt, grass, red wine, juice, coffee, tea, baby formula and more.', 'Images\\Hygiene\\SimpleSolutionStain&OdourRemover750ml.jpg', 5.99, 5, 'Hygiene'),
(46, 'Beaphar FLEAtec Household Flea Spray 600ml', ' premium flea control spray combining an insecticide with an Insect Growth Regulator that fully protects your home against all stages of the flea lifecycle.', 'Images\\Hygiene\\BeapharFLEAtecHouseholdFleaSpray600ml.jpg', 12.99, 9, 'Hygiene'),
(47, 'Yard Clean 946ml', 'Yard Clean works like magic to remove animal urine and general yard smells. An environmentally friendly odour eliminator, suitable to use in kennels, catteries, stables and for general refuse areas such as in and around wheelie bins and is also suitable for use on artificial grass. ', 'Images\\Hygiene\\YardClean964ml.jpg', 15.99, 0, 'Hygiene'),
(48, 'Henry Wag Glove Drying Towel 100 x 22cm', 'The Henry Wag Glove Drying Towel is a luxurious pet cleaning and drying towel that incorporates gloved ends from Henry Wag that easily removes dirt and water from your pet’s coat. The towel absorbs more water and dries quicker than regular towels', 'Images\\Hygiene\\HenryWagGloveDryingTowel100x22cm.jpg', 6.99, 9, 'Hygiene'),
(49, 'Petkin Tushie Wipes Pack of 100', 'These Tushie Wipes are great for taking optimal care of your pet''s bottom.\r\nWorking to clean and deodorise, these wipes have extra cleansing strength so they can tackle mess and odours', 'Images\\Hygiene\\PetkinTushieWipesPackof100.jpg', 7.99, 12, 'Hygiene'),
(50, 'Urine Off Urine Finder Mini LED Light', 'The Urine Off Urine Finder Mini LED Light is a special LED UV light finely tuned to find dried urine stains that are invisible to the naked eye, making it easy to find the area that requires treatment.', 'Images\\Hygiene\\UrineOffUrineFinderMiniLEDLight.jpg', 14.99, 7, 'Hygiene'),
(51, 'Pet Head Puppy Fun Shampoo - 475ml ', 'Ensure that your pet has a gentle and soothing bath time with Pet Head Puppy Fun Shampoo.', 'Images\\Bathing\\PetHeadPuppyFunShampoo-475ml.jpg', 9.99, 3, 'Bathing'),
(52, 'Pet Head Life An Itch Skin Soothing Shampoo - 475ml', 'Stop your pet''s itching with Pet Head Life''s An Itch Skin Soothing Shampoo. This amazing formula effectively relieves skin irritation caused by insect bites and dry skin. It contains no harsh chemicals, coal tar or drugs and has a delicious water melon fragrance.', 'Images\\Bathing\\PetHeadLifeAnItchSkinSoothingShampoo-475ml.jpg', 9.99, 5, 'Bathing'),
(53, 'FURminator Bathing Brush', 'The FURminator® Bathing Brush is a professional quality tool for grooming and loosening pet hair while bathing, it is perfect for short and medium coats.', 'Images\\Bathing\\FURminatorBathingBrush.jpg', 12.99, 4, 'Bathing'),
(54, 'SnuggleSafe Micro Fibre Towel (92x46cm)', 'Dries 4 times faster than a regular towel.', 'Images\\Bathing\\SnuggleSafeMicroFibreTowel.jpg', 6.99, 10, 'Bathing'),
(55, 'SnuggleSafe Micro Fibre Towel (140x76cm)', 'Dries 4 times faster than a regular towel.', 'Images\\Bathing\\SnuggleSafeMicroFibreTowel.jpg', 9.99, 12, 'Bathing'),
(56, 'Mikki Soft Pin Slicker For Fine and Medium Coats', 'The Mikki Soft Pin Slicker has specially shaped slicker pins which are mounted on an air cushion to enhance grooming action & reduce any excessive brushing force.\r\n\r\nRemoves dead hair from undercoat and top coat\r\nHelps brush out minor knots and tangles', 'Images\\Grooming\\MikkiSoftPinSlickerForFineandMediumCoats.jpg', 9.99, 23, 'Grooming'),
(58, 'Nylabone Chicken Puppy Bone Triple Pack - Small', 'This Nylabone Chicken Puppy Bone Triple Pack - Small is specially designed for young puppies and provides hours of healthy chewing fun. Discourage destructive chewing and fight boredom with these three bones. Each bone measures approximately 11cm', 'Images\\ChewToys\\NylaboneChickenPuppyBoneTriplePack-Small.jpg', 11.99, 20, 'ChewToys'),
(59, 'Nylabone Beef Extreme Bone - Large', 'Has your dog got a powerful chew? Then this Nylabone Beef Extreme Bone - Large is the one to get. Made from durable Nylon, the Nylabone, with its irresistible flavour, discourages destructive chewing and promotes appropriate, healthy chewing. As your four-legged friend chews happily away, the surface of the Nylabone becomes rougher, creating bristles, which help clean teeth and control plaque and tartar build up.', 'Images\\ChewToys\\NylaboneBeefExtremeBone-Large.jpg', 8.99, 17, 'ChewToys'),
(60, 'Nylabone Bacon Puppy Keys Chew - Small', 'These Nylabone Bacon Puppy Keys Chew - Small are for teething puppies up to 11kg. Made from inert soft thermoplastic polymer to satisfy the chewing instinct of teething puppies, and encourage non-destructive chewing. This product is specifically designed for young puppies to aid in the growth and development of their teeth and jaws and to encourage safe and non-destructive chewing. ', 'Images\\ChewToys\\NylaboneBaconPuppyKeysChew-Small.jpg', 10.99, 16, 'ChewToys'),
(61, 'Nylabone Chicken Puppy Bone - Medium', 'This tasty bone is made from inert soft thermoplastic polymer to satisfy the chewing instinct of teething puppies and encourage non-destructive chewing. Bristles raised during chewing will help clean teeth and prevent tartar build-up', 'Images\\ChewToys\\NylaboneChickenPuppyBone-Medium.jpg', 5.99, 31, 'ChewToys'),
(62, 'NERF Dog Tennis Ball Blaster 30cm for Small Dogs and Puppies', 'Take aim with the Nerf Dog Tennis Ball Blaster for Small Dogs and Puppies. High-powered blasting action launches your dog''s favourite fetching tennis ball over 50 feet in the air. ', 'Images\\OutdoorToys\\NERFDogTennisBallBlaster30cmforSmallDogsandPuppies.jpg', 19.99, 7, 'OutdoorToys'),
(63, 'Trixie Natural Rubber Ball with Rope', 'Dogs everywhere love a good, old-fashioned rubber ball, and the provide even more fun when they''re a tug toy as well! With its 1 metre long rope, the Trixie Natural Rubber Ball with Rope is a robust toy for smaller dogs, providing hours of tugging and fetching fun for you and your little canine companion, and you don''t even have to bend to retrieve it!', 'Images\\OutdoorToys\\TrixieNaturalRubberBallwithRope.jpg', 2.99, 19, 'OutdoorToys'),
(64, 'Twizzles', 'Twizzles Dog Toys, ideal  for your four legged friends fun at playtime. The plush feel is kind on your pets jaw and makes this toy great for snuggling. Easy for your pet to carry.', 'Images\\SoftToys\\Twizzles.jpg', 6.99, 9, 'SoftToys'),
(65, 'Squeaky Teddy Bear', 'Dr. Noy''s plush soft squeaky dog toy with replacable squeaker, spare squeaker included', 'Images\\SoftToys\\SqueakyTeddyBear.jpg', 3.99, 19, 'SoftToys'),
(66, 'Frankie Flamingo', ' Frankie flamingo Dog Toys, ideal  for your four legged friends fun at playtime. The plush feel is kind on your pets jaw and makes this toy great for snuggling. Easy for your pet to carry and for gentle games of tug of war. Frankie flamingo is larger that his friend Florence flamingo and measures 58cm long', 'Images\\SoftToys\\FrankieFlamingo.jpg', 5.99, 13, 'SoftToys');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
`ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ProductDescription` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `PictureRef` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Current` tinyint(4) DEFAULT NULL,
  `Category` varchar(11) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductDescription`, `PictureRef`, `Price`, `Current`, `Category`) VALUES
(35, 'big face', 'TEST', 'dog2.jpeg', 129.99, 7, 'Dog'),
(36, 'Chris Shorey', 'TEST', 'dog1.jpeg', 0, 0, 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
`res_id` int(11) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_notes` text,
  `res_date` date DEFAULT NULL,
  `res_slot` int(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`res_id`, `res_name`, `res_email`, `res_tel`, `res_notes`, `res_date`, `res_slot`) VALUES
(16, 'Lingyuan Zhang', 'LING@gmail.com', '07824642635', 'none', '2020-04-29', 9),
(17, 'Lingyuan Zhang', 'LING@gmail.com', '07824642635', 'none', '2020-04-19', 9),
(18, 'Lingyuan Zhang', 'LING@gmail.com', '07824642635', 'none', '2020-04-30', 9),
(20, 'Yan Ling', 'lingyan@gmail.com', '12345678', 'large dog', '2020-04-20', 9),
(21, 'Yan Ling', 'lingyan@gmail.com', '12345678', 'none', '2020-04-20', 11),
(23, 'Lingyuan Zhang', 'LING@gmail.com', '07824642635', '', '2020-04-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
`id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(3, 'admin@gmail.com'),
(12, 'c@s'),
(5, 'john@barnes.co.uk'),
(8, 'john@frank.co.uk'),
(2, 'shoreychris@yahoo.co.uk'),
(9, 'sumit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

DROP TABLE IF EXISTS `waitinglist`;
CREATE TABLE IF NOT EXISTS `waitinglist` (
`WaitingListID` int(11) NOT NULL,
  `CustomerID` varchar(200) NOT NULL,
  `YourName` text NOT NULL,
  `YourEmail` varchar(200) NOT NULL,
  `TELNO` varchar(20) NOT NULL,
  `DogsName` text NOT NULL,
  `DogsBreeds` text NOT NULL,
  `DogsAge` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Timeslot` varchar(10) NOT NULL,
  `DogsIntroduction` text NOT NULL,
  `cost` double NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waitinglist`
--

INSERT INTO `waitinglist` (`WaitingListID`, `CustomerID`, `YourName`, `YourEmail`, `TELNO`, `DogsName`, `DogsBreeds`, `DogsAge`, `Date`, `Timeslot`, `DogsIntroduction`, `cost`) VALUES
(184, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-13', '9am-1pm', 'Week 1 (Duplicate).', 15),
(186, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-15', '9am-1pm', 'Week 1 (Duplicate).', 15),
(185, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 2, '2020-04-14', '9am-1pm', 'Week 1 (Duplicate).', 15),
(190, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 1, '2020-04-20', '9am-1pm', '', 15),
(191, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 1, '2020-04-21', '9am-1pm', '', 15),
(193, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'azir', 'corgi', 1, '2020-04-24', '9am-1pm', '', 15),
(195, '11', 'C Shorey', 'admin@gmail.com', '07713722431', 'Logan', 'labrador', 1, '2020-04-20', '9am-1pm', '', 15);

-- --------------------------------------------------------

--
-- Table structure for table `weborders`
--

DROP TABLE IF EXISTS `weborders`;
CREATE TABLE IF NOT EXISTS `weborders` (
`OrderNo` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Subtotal` double NOT NULL,
  `ShippingFee` double NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`PictureID`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderline`
--
ALTER TABLE `orderline`
 ADD PRIMARY KEY (`OrderLineNo`), ADD KEY `OrderNo` (`OrderNo`), ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ProductID`), ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
 ADD PRIMARY KEY (`res_id`), ADD KEY `res_name` (`res_name`), ADD KEY `res_email` (`res_email`), ADD KEY `res_tel` (`res_tel`), ADD KEY `res_date` (`res_date`), ADD KEY `res_slot` (`res_slot`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `waitinglist`
--
ALTER TABLE `waitinglist`
 ADD PRIMARY KEY (`WaitingListID`);

--
-- Indexes for table `weborders`
--
ALTER TABLE `weborders`
 ADD PRIMARY KEY (`OrderNo`), ADD KEY `CustomerID` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `PictureID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orderline`
--
ALTER TABLE `orderline`
MODIFY `OrderLineNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
MODIFY `WaitingListID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `weborders`
--
ALTER TABLE `weborders`
MODIFY `OrderNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderline`
--
ALTER TABLE `orderline`
ADD CONSTRAINT `orderline_ibfk_1` FOREIGN KEY (`OrderNo`) REFERENCES `weborders` (`OrderNo`),
ADD CONSTRAINT `orderline_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `weborders`
--
ALTER TABLE `weborders`
ADD CONSTRAINT `weborders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

