-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2015 at 05:14 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- User: `misa`
--

GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'misa'@'%' IDENTIFIED BY PASSWORD '*DB33400F4D549B3AD9B6113C71862E85F9B6DF63';

GRANT ALL PRIVILEGES ON `misa`.* TO 'misa'@'%';

--
-- Database: `misa`
--
CREATE DATABASE IF NOT EXISTS `misa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `misa`;

-- --------------------------------------------------------

--
-- Table structure for table `inv_db`
--

DROP TABLE IF EXISTS `inv_db`;
CREATE TABLE IF NOT EXISTS `inv_db` (
  `barcode` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `accession_num` varchar(255) NOT NULL,
  `call_num` varchar(255) NOT NULL,
  `flag` int(1) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inv_db`
--

INSERT INTO `inv_db` (`barcode`, `title`, `author`, `accession_num`, `call_num`, `flag`, `timestamp`) VALUES
(100000, 'title00', 'author00', 'accession_num00', 'call_num00', NULL, NULL),
(100001, 'title01', 'author01', 'accession_num01', 'call_num01', NULL, NULL),
(100002, 'title02', 'author02', 'accession_num02', 'call_num02', NULL, NULL),
(100003, 'title03', 'author03', 'accession_num03', 'call_num03', NULL, NULL),
(100004, 'title04', 'author04', 'accession_num04', 'call_num04', NULL, NULL),
(100005, 'title05', 'author05', 'accession_num05', 'call_num05', NULL, NULL),
(100006, 'title06', 'author06', 'accession_num06', 'call_num06', NULL, NULL),
(100007, 'title07', 'author07', 'accession_num07', 'call_num07', NULL, NULL),
(100008, 'title08', 'author08', 'accession_num08', 'call_num08', NULL, NULL),
(100009, 'title09', 'author09', 'accession_num09', 'call_num09', NULL, NULL),
(100010, 'title10', 'author10', 'accession_num10', 'call_num10', NULL, NULL),
(100011, 'title11', 'author11', 'accession_num11', 'call_num11', NULL, NULL),
(100012, 'title12', 'author12', 'accession_num12', 'call_num12', NULL, NULL),
(100013, 'title13', 'author13', 'accession_num13', 'call_num13', NULL, NULL),
(100014, 'title14', 'author14', 'accession_num14', 'call_num14', NULL, NULL),
(100015, 'title15', 'author15', 'accession_num15', 'call_num15', NULL, NULL),
(100016, 'title16', 'author16', 'accession_num16', 'call_num16', NULL, NULL),
(100017, 'title17', 'author17', 'accession_num17', 'call_num17', NULL, NULL),
(100018, 'title18', 'author18', 'accession_num18', 'call_num18', NULL, NULL),
(100019, 'title19', 'author19', 'accession_num19', 'call_num19', NULL, NULL),
(100020, 'title20', 'author20', 'accession_num20', 'call_num20', NULL, NULL),
(100021, 'title21', 'author21', 'accession_num21', 'call_num21', NULL, NULL),
(100022, 'title22', 'author22', 'accession_num22', 'call_num22', NULL, NULL),
(100023, 'title23', 'author23', 'accession_num23', 'call_num23', NULL, NULL),
(100024, 'title24', 'author24', 'accession_num24', 'call_num24', NULL, NULL),
(100025, 'title25', 'author25', 'accession_num25', 'call_num25', NULL, NULL),
(100026, 'title26', 'author26', 'accession_num26', 'call_num26', NULL, NULL),
(100027, 'title27', 'author27', 'accession_num27', 'call_num27', NULL, NULL),
(100028, 'title28', 'author28', 'accession_num28', 'call_num28', NULL, NULL),
(100029, 'title29', 'author29', 'accession_num29', 'call_num29', NULL, NULL),
(100030, 'title30', 'author30', 'accession_num30', 'call_num30', NULL, NULL),
(100031, 'title31', 'author31', 'accession_num31', 'call_num31', NULL, NULL),
(100032, 'title32', 'author32', 'accession_num32', 'call_num32', NULL, NULL),
(100033, 'title33', 'author33', 'accession_num33', 'call_num33', NULL, NULL),
(100034, 'title34', 'author34', 'accession_num34', 'call_num34', NULL, NULL),
(100035, 'title35', 'author35', 'accession_num35', 'call_num35', NULL, NULL),
(100036, 'title36', 'author36', 'accession_num36', 'call_num36', NULL, NULL),
(100037, 'title37', 'author37', 'accession_num37', 'call_num37', NULL, NULL),
(100038, 'title38', 'author38', 'accession_num38', 'call_num38', NULL, NULL),
(100039, 'title39', 'author39', 'accession_num39', 'call_num39', NULL, NULL),
(100040, 'title40', 'author40', 'accession_num40', 'call_num40', NULL, NULL),
(100041, 'title41', 'author41', 'accession_num41', 'call_num41', NULL, NULL),
(100042, 'title42', 'author42', 'accession_num42', 'call_num42', NULL, NULL),
(100043, 'title43', 'author43', 'accession_num43', 'call_num43', NULL, NULL),
(100044, 'title44', 'author44', 'accession_num44', 'call_num44', NULL, NULL),
(100045, 'title45', 'author45', 'accession_num45', 'call_num45', NULL, NULL),
(100046, 'title46', 'author46', 'accession_num46', 'call_num46', NULL, NULL),
(100047, 'title47', 'author47', 'accession_num47', 'call_num47', NULL, NULL),
(100048, 'title48', 'author48', 'accession_num48', 'call_num48', NULL, NULL),
(100049, 'title49', 'author49', 'accession_num49', 'call_num49', NULL, NULL),
(100050, 'title50', 'author50', 'accession_num50', 'call_num50', NULL, NULL),
(100051, 'title51', 'author51', 'accession_num51', 'call_num51', NULL, NULL),
(100052, 'title52', 'author52', 'accession_num52', 'call_num52', NULL, NULL),
(100053, 'title53', 'author53', 'accession_num53', 'call_num53', NULL, NULL),
(100054, 'title54', 'author54', 'accession_num54', 'call_num54', NULL, NULL),
(100055, 'title55', 'author55', 'accession_num55', 'call_num55', NULL, NULL),
(100056, 'title56', 'author56', 'accession_num56', 'call_num56', NULL, NULL),
(100057, 'title57', 'author57', 'accession_num57', 'call_num57', NULL, NULL),
(100058, 'title58', 'author58', 'accession_num58', 'call_num58', NULL, NULL),
(100059, 'title59', 'author59', 'accession_num59', 'call_num59', NULL, NULL),
(100060, 'title60', 'author60', 'accession_num60', 'call_num60', NULL, NULL),
(100061, 'title61', 'author61', 'accession_num61', 'call_num61', NULL, NULL),
(100062, 'title62', 'author62', 'accession_num62', 'call_num62', NULL, NULL),
(100063, 'title63', 'author63', 'accession_num63', 'call_num63', NULL, NULL),
(100064, 'title64', 'author64', 'accession_num64', 'call_num64', NULL, NULL),
(100065, 'title65', 'author65', 'accession_num65', 'call_num65', NULL, NULL),
(100066, 'title66', 'author66', 'accession_num66', 'call_num66', NULL, NULL),
(100067, 'title67', 'author67', 'accession_num67', 'call_num67', NULL, NULL),
(100068, 'title68', 'author68', 'accession_num68', 'call_num68', NULL, NULL),
(100069, 'title69', 'author69', 'accession_num69', 'call_num69', NULL, NULL),
(100070, 'title70', 'author70', 'accession_num70', 'call_num70', NULL, NULL),
(100071, 'title71', 'author71', 'accession_num71', 'call_num71', NULL, NULL),
(100072, 'title72', 'author72', 'accession_num72', 'call_num72', NULL, NULL),
(100073, 'title73', 'author73', 'accession_num73', 'call_num73', NULL, NULL),
(100074, 'title74', 'author74', 'accession_num74', 'call_num74', NULL, NULL),
(100075, 'title75', 'author75', 'accession_num75', 'call_num75', NULL, NULL),
(100076, 'title76', 'author76', 'accession_num76', 'call_num76', NULL, NULL),
(100077, 'title77', 'author77', 'accession_num77', 'call_num77', NULL, NULL),
(100078, 'title78', 'author78', 'accession_num78', 'call_num78', NULL, NULL),
(100079, 'title79', 'author79', 'accession_num79', 'call_num79', NULL, NULL),
(100080, 'title80', 'author80', 'accession_num80', 'call_num80', NULL, NULL),
(100081, 'title81', 'author81', 'accession_num81', 'call_num81', NULL, NULL),
(100082, 'title82', 'author82', 'accession_num82', 'call_num82', NULL, NULL),
(100083, 'title83', 'author83', 'accession_num83', 'call_num83', NULL, NULL),
(100084, 'title84', 'author84', 'accession_num84', 'call_num84', NULL, NULL),
(100085, 'title85', 'author85', 'accession_num85', 'call_num85', NULL, NULL),
(100086, 'title86', 'author86', 'accession_num86', 'call_num86', NULL, NULL),
(100087, 'title87', 'author87', 'accession_num87', 'call_num87', NULL, NULL),
(100088, 'title88', 'author88', 'accession_num88', 'call_num88', NULL, NULL),
(100089, 'title89', 'author89', 'accession_num89', 'call_num89', NULL, NULL),
(100090, 'title90', 'author90', 'accession_num90', 'call_num90', NULL, NULL),
(100091, 'title91', 'author91', 'accession_num91', 'call_num91', NULL, NULL),
(100092, 'title92', 'author92', 'accession_num92', 'call_num92', NULL, NULL),
(100093, 'title93', 'author93', 'accession_num93', 'call_num93', NULL, NULL),
(100094, 'title94', 'author94', 'accession_num94', 'call_num94', NULL, NULL),
(100095, 'title95', 'author95', 'accession_num95', 'call_num95', NULL, NULL),
(100096, 'title96', 'author96', 'accession_num96', 'call_num96', NULL, NULL),
(100097, 'title97', 'author97', 'accession_num97', 'call_num97', NULL, NULL),
(100098, 'title98', 'author98', 'accession_num98', 'call_num98', NULL, NULL),
(100099, 'title99', 'author99', 'accession_num99', 'call_num99', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_db`
--
ALTER TABLE `inv_db`
  ADD PRIMARY KEY (`barcode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
