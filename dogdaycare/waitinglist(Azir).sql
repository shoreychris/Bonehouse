-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2020-04-19 13:41:50
-- 服务器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `unn_v031587`
--

-- --------------------------------------------------------

--
-- 表的结构 `waitinglist`
--

DROP TABLE IF EXISTS `waitinglist`;
CREATE TABLE IF NOT EXISTS `waitinglist` (
  `WaitingListID` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`WaitingListID`)
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
