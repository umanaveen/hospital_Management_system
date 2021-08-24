-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2020 at 04:49 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(3, 'Demo test', 7, 6, '2019-06-29', '9:15 AM', '2019-06-23 18:31:28', 1, 1, '2020-10-12 06:10:46'),
(4, 'Ayurveda', 5, 5, '2019-11-08', '1:00 PM', '2019-11-05 10:28:54', 1, 1, '0000-00-00 00:00:00'),
(5, 'Dermatologist', 9, 7, '2019-11-30', '5:30 PM', '2019-11-10 18:41:34', 1, 1, '2020-10-12 06:10:36'),
(6, 'General Physician', 6, 2, '2020-09-29', '10:45 AM', '2020-09-09 05:07:27', 0, 1, '2020-09-16 06:00:40'),
(7, 'Gynecologist/Obstetrician', 10, 2, '2020-09-29', '3:15 PM', '2020-09-09 09:44:13', 1, 1, NULL),
(8, 'Gynecologist/Obstetrician', 10, 2, '2020-09-16', '11:15 AM', '2020-09-16 06:14:35', 1, 1, '2020-09-23 08:56:19'),
(9, 'Gynecologist/Obstetrician', 10, 2, '2020-09-29', '3:15 PM', '2020-09-16 09:36:22', 1, 1, NULL),
(10, 'Gynecologist/Obstetrician', 10, 1, '2021-09-29', '11:15 AM', '2021-09-21 05:41:11', 1, 1, NULL),
(11, 'Gynecologist/Obstetrician', 10, 1, '2020-10-05', '12:45 PM', '2020-10-05 07:12:01', 1, 1, NULL),
(12, 'Gynecologist/Obstetrician', 10, 1, '2020-10-06', '12:45 PM', '2020-10-05 07:14:53', 1, 1, NULL),
(13, 'Gynecologist/Obstetrician', 10, 1, '2020-10-06', '12:45 PM', '2020-10-05 07:15:16', 1, 1, NULL),
(14, 'Gynecologist/Obstetrician', 10, 1, '2020-10-06', '12:45 PM', '2020-10-05 07:17:34', 1, 1, NULL),
(15, 'Gynecologist/Obstetrician', 10, 1, '2020-10-07', '12:45 PM', '2020-10-05 07:17:45', 1, 1, '2020-10-05 07:22:39'),
(16, 'Gynecologist/Obstetrician', 10, 1, '2020-10-07', '12:15 PM', '2020-10-05 09:27:59', 1, 1, NULL),
(17, 'Gynecologist/Obstetrician', 10, 2, '2021-09-29', '11:15 AM', '2020-10-08 07:20:23', 1, 1, NULL),
(18, 'Gynecologist/Obstetrician', 10, 2, '2020-10-09', '2:00 PM', '2020-10-08 07:21:01', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created`) VALUES
(2, 'Tablets', '2020-10-14 09:52:45'),
(3, 'Syrups', '2020-10-14 10:17:47'),
(4, 'Bandaid', '2020-10-14 10:18:05'),
(5, 'cotton', '2020-10-14 10:18:58'),
(6, 'Vitamin tablets', '2020-10-14 10:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `days_master`
--

DROP TABLE IF EXISTS `days_master`;
CREATE TABLE IF NOT EXISTS `days_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days_master`
--

INSERT INTO `days_master` (`id`, `Name`, `created`) VALUES
(1, 'Monday', '2020-09-21 07:50:16'),
(2, 'Tuesday', '2020-09-21 07:50:16'),
(3, 'Wednesday', '2020-09-21 07:50:32'),
(4, 'Thrusday', '2020-09-21 07:50:32'),
(5, 'Friday', '2020-09-21 07:50:43'),
(6, 'Saturday', '2020-09-21 07:50:43'),
(7, 'Sunday', '2020-09-21 07:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Dentist', 'Anu', 'chennai', '500', 8285703354, 'anuj.lpu1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 06:25:37', '2020-10-14 08:43:44'),
(2, 'Homeopath', 'saritha', 'Trichy', '600', 2147483647, 'sarita@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 06:51:51', '2020-09-18 05:06:41'),
(3, 'General Physician', 'jai', 'Coimbatore', '1200', 8523699999, 'nitesh@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:43:35', '2020-09-18 05:06:49'),
(4, 'Homeopath', 'Vijay', 'nagercoil', '700', 25668888, 'vijay@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:45:09', '2020-09-18 05:06:57'),
(5, 'Ayurveda', 'Sanjeev', 'trichy', '8050', 442166644646, 'sanjeev@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:47:07', '2020-09-18 05:07:04'),
(6, 'General Physician', 'rajeshwari', 'covai', '2500', 45497964, 'amrita@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:52:50', '2020-09-18 05:07:09'),
(7, 'Demo test', 'abc ', 'madurai', '200', 852888888, 'test@demo.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 08:08:58', '2020-09-18 05:07:16'),
(8, 'Ayurveda', 'Test Doctor', 'madurai', '600', 1234567890, 'test@test.com', '202cb962ac59075b964b07152d234b70', '2019-06-23 17:57:43', '2020-09-18 05:07:30'),
(9, 'Dermatologist', 'amar', 'chennai', '500', 1234567890, 'anujk@test.com', 'f925916e2754e5e03f75dd58a5733251', '2019-11-10 18:37:47', '2020-09-18 05:07:40'),
(10, 'Gynecologist/Obstetrician', 'Gopinath', 'Gopi clinic Chennai', '10000', 94432467767, 'GNATH9375@GMAIL.COM', 'e807f1fcf82d132f9bb018ca6738a19f', '2020-09-09 06:24:28', '2020-09-21 08:54:45'),
(11, 'Gynecologist/Obstetrician', 'girish', 'kodabakkam', '1000', 8975432123, 'girish@quadsel.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-09-21 10:45:54', NULL),
(12, 'Gynecologist/Obstetrician', 'rajesh', 'kodabakkam', '23', 39383838, 'rajesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-09-21 10:59:31', NULL),
(13, 'General Physician', 'dfvg', 'dfb', '56', 4564564565, 'vf@dsfgfgv', '6c8349cc7260ae62e3b1396831a8398f', '2020-11-17 11:13:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

DROP TABLE IF EXISTS `doctorslog`;
CREATE TABLE IF NOT EXISTS `doctorslog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(20, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-09-08 08:27:19', NULL, 1),
(21, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-09-08 08:27:20', '08-09-2020 01:59:04 PM', 1),
(22, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-09-08 08:31:07', '08-09-2020 02:11:27 PM', 1),
(23, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-09-08 09:01:05', '08-09-2020 02:34:55 PM', 1),
(24, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-09 05:54:55', NULL, 0),
(25, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-09-15 05:34:00', NULL, 1),
(26, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-09-16 06:20:30', '16-09-2020 12:04:40 PM', 1),
(27, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-29 04:17:22', NULL, 0),
(28, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-09-29 04:21:46', '29-09-2020 10:38:29 AM', 1),
(29, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-12 04:08:55', NULL, 0),
(30, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-10-12 04:09:02', '12-10-2020 03:22:00 PM', 1),
(31, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-10-12 09:52:33', '12-10-2020 03:22:38 PM', 1),
(32, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-10-12 09:52:44', '12-10-2020 03:25:23 PM', 1),
(33, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-10-12 09:59:14', NULL, 1),
(34, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:43:43', '13-10-2020 03:20:05 PM', 1),
(35, NULL, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:50:28', NULL, 0),
(36, NULL, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:51:09', NULL, 0),
(37, NULL, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:51:27', NULL, 0),
(38, 1, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:52:46', '13-10-2020 03:23:33 PM', 1),
(39, 1, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:54:05', '13-10-2020 03:24:44 PM', 1),
(40, 1, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:55:01', '13-10-2020 03:25:27 PM', 1),
(41, 1, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 09:56:15', '13-10-2020 03:26:56 PM', 1),
(42, 1, 'priyan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-13 10:02:03', NULL, 1),
(43, 1, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-14 05:49:36', NULL, 1),
(44, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-10-14 08:40:08', '14-10-2020 02:10:18 PM', 1),
(45, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-14 08:40:22', NULL, 0),
(46, NULL, 'admin@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-14 08:40:26', NULL, 0),
(47, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-14 08:40:31', NULL, 0),
(48, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-14 08:41:26', NULL, 0),
(49, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-14 08:41:30', NULL, 0),
(50, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-14 08:41:48', NULL, 0),
(51, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-14 08:42:17', NULL, 0),
(52, 1, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-15 04:19:01', '15-10-2020 11:19:58 AM', 1),
(53, 1, 'priyan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-15 05:50:36', '16-10-2020 02:53:26 PM', 1),
(54, 1, 'vinoth@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-19 04:57:13', NULL, 1),
(55, 1, 'priyan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-19 04:58:24', '03-11-2020 11:53:30 AM', 1),
(56, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2020-11-02 04:45:53', '02-11-2020 10:17:38 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

DROP TABLE IF EXISTS `doctorspecilization`;
CREATE TABLE IF NOT EXISTS `doctorspecilization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-28 06:37:25', '0000-00-00 00:00:00'),
(2, 'General Physician', '2016-12-28 06:38:12', '0000-00-00 00:00:00'),
(3, 'Dermatologist', '2016-12-28 06:38:48', '0000-00-00 00:00:00'),
(4, 'Homeopath', '2016-12-28 06:39:26', '0000-00-00 00:00:00'),
(5, 'Ayurveda', '2016-12-28 06:39:51', '0000-00-00 00:00:00'),
(6, 'Dentist', '2016-12-28 06:40:08', '0000-00-00 00:00:00'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', '0000-00-00 00:00:00'),
(9, 'Demo test', '2016-12-28 07:37:39', '0000-00-00 00:00:00'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53', '0000-00-00 00:00:00'),
(11, 'Test', '2019-06-23 17:51:06', '2019-06-23 17:55:06'),
(12, 'Dermatologist', '2019-11-10 18:36:36', '2019-11-10 18:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_shift_master`
--

DROP TABLE IF EXISTS `doctor_shift_master`;
CREATE TABLE IF NOT EXISTS `doctor_shift_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `day_id` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_shift_master`
--

INSERT INTO `doctor_shift_master` (`id`, `doc_id`, `day_id`, `start_time`, `end_time`, `created`) VALUES
(1, 10, 'Tuesday', '5:00 PM', '7:00 PM', '2020-09-22 09:59:11'),
(2, 10, 'Wednesday', '5:00 PM', '6:00 PM', '2020-09-22 09:59:24'),
(3, 10, 'Friday', '5:00 PM', '6:00 PM', '2020-09-22 09:59:31'),
(4, 4, 'Tuesday', '5:00 PM', '7:15 PM', '2020-09-22 10:25:44'),
(5, 3, 'Wednesday', '5:15 PM', '7:15 PM', '2020-09-22 10:25:34'),
(6, 4, 'Monday', '5:15 PM', '7:15 PM', '2020-09-22 10:25:38'),
(7, 11, 'Saturday', '2:00 PM', '5:00 PM', '2020-10-13 06:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

DROP TABLE IF EXISTS `laboratory`;
CREATE TABLE IF NOT EXISTS `laboratory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`id`, `name`, `username`, `password`, `created`) VALUES
(1, 'PriyaDarshan', 'priyan@gmail.com', '123456', '2020-10-15 06:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

DROP TABLE IF EXISTS `nurse`;
CREATE TABLE IF NOT EXISTS `nurse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Doctorspecialization` varchar(100) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `nuspecrseialization` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Nurse_contact` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `Doctorspecialization`, `doctor_id`, `nuspecrseialization`, `name`, `address`, `Nurse_contact`, `username`, `password`, `created`) VALUES
(1, 'Gynecologist/Obstetrician', 10, 'Clinical Nurse Specialist (CNS)', 'Gopi', 'chennai', '938382924', 'gopinath@gmail.com', '123456', '2020-10-20 09:55:11'),
(2, 'Gynecologist/Obstetrician', 10, 'Clinical Nurse Specialist (CNS)', 'Awini Nagini', 'Andhra pradesh', '93838292929', 'Aswini@gmail.com', '123456', '2020-10-20 09:54:19'),
(3, 'Dentist', 1, 'ER Nurse', 'LAkSHMI BHARATHI', 'chennai', '9484848393', 'lakshmi@gmail.com', '123456', '2020-10-20 10:02:54'),
(4, 'General Physician', 6, 'Certified Registered Nurse Anesthetist (CRNA)', 'dfxbg', 'dfxbg', 'dfg', 'dfg@ff', 'dfg', '2020-11-17 11:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `nursespecilization`
--

DROP TABLE IF EXISTS `nursespecilization`;
CREATE TABLE IF NOT EXISTS `nursespecilization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursespecilization`
--

INSERT INTO `nursespecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Cardiac Nurse', '2020-10-20 09:24:05', '0000-00-00 00:00:00'),
(2, 'Certified Registered Nurse Anesthetist (CRNA)', '2020-10-20 09:08:11', '0000-00-00 00:00:00'),
(3, 'Clinical Nurse Specialist (CNS)', '2020-10-20 09:08:21', '0000-00-00 00:00:00'),
(4, 'Critical Care Nurse', '2020-10-20 09:08:31', '0000-00-00 00:00:00'),
(5, 'ER Nurse', '2020-10-20 09:08:41', '0000-00-00 00:00:00'),
(6, 'Family Nurse Practitioner (FNP)', '2020-10-20 09:08:47', '0000-00-00 00:00:00'),
(7, 'Perioperative Nurse (Surgical/OR Nurse)', '2020-10-20 09:08:56', '0000-00-00 00:00:00'),
(8, 'Nurse Practitioner', '2020-10-20 09:09:12', '0000-00-00 00:00:00'),
(9, 'Orthopedic Nurse', '2020-10-20 09:09:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nurse_log`
--

DROP TABLE IF EXISTS `nurse_log`;
CREATE TABLE IF NOT EXISTS `nurse_log` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logout` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `op_patients`
--

DROP TABLE IF EXISTS `op_patients`;
CREATE TABLE IF NOT EXISTS `op_patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `patname` varchar(255) NOT NULL,
  `C_number` varchar(255) NOT NULL,
  `Alternate_number` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pincode` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `appdate` varchar(255) NOT NULL,
  `apptime` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_patients`
--

INSERT INTO `op_patients` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `patname`, `C_number`, `Alternate_number`, `Mail`, `Address`, `Pincode`, `State`, `Country`, `appdate`, `apptime`, `created`) VALUES
(1, 'Gynecologist/Obstetrician', 10, 1, 'gopi', '123', '3456', 'gnath@gmail.com', 'chenai', '3434563', 'tamil', 'ind', '2020-09-30', '12:00 PM', '2020-09-04 06:24:21'),
(2, 'Gynecologist/Obstetrician', 10, 1, 'amar', '345356356', '563456456', 'gnath@gmail.ocm', 'chennai', '54443', 'tamilnadu', 'india', '2020-09-30', '12:00 PM', '2020-09-04 06:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `patient_appoinment`
--

DROP TABLE IF EXISTS `patient_appoinment`;
CREATE TABLE IF NOT EXISTS `patient_appoinment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patname` varchar(200) NOT NULL,
  `patcontact` varchar(200) NOT NULL,
  `patemail` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `pataddress` varchar(200) NOT NULL,
  `creation_date` varchar(200) NOT NULL,
  `Doctorspecialization` varchar(200) NOT NULL,
  `doctor` varchar(200) NOT NULL,
  `appdate` varchar(200) NOT NULL,
  `apptime` varchar(200) NOT NULL,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_appoinment`
--

INSERT INTO `patient_appoinment` (`id`, `patname`, `patcontact`, `patemail`, `gender`, `pataddress`, `creation_date`, `Doctorspecialization`, `doctor`, `appdate`, `apptime`, `userStatus`, `doctorStatus`, `created_date`, `updated`) VALUES
(1, 'gopinath', '9994996010', 'gnath930@gmail.com', 'Male', 'chennai', '2020-10-21 10:49:52', 'Gynecologist/Obstetrician', '10', '2020-10-21', '5:45 PM', 1, 1, '2020-10-21 09:16:58', '0000-00-00 00:00:00'),
(2, 'Arun', '4345345345', 'arun@gmail.com', 'Male', 'chennai', '2020-10-21 10:57:04', 'Gynecologist/Obstetrician', '11', '2020-10-23', '2:45 PM', 1, 1, '2020-10-21 09:16:59', '0000-00-00 00:00:00'),
(3, 'sebastian', '1234567', 'sebastian@gmail.com', 'Male', 'chennai', '2020-10-21 10:58:07', 'Gynecologist/Obstetrician', '10', '2020-10-27', '5:45 PM', 1, 1, '2020-10-21 09:17:01', '0000-00-00 00:00:00'),
(4, 'sebastian', '1234567', 'sebastian@gmail.com', 'Male', 'chennai', '2020-10-21 10:58:07', 'Gynecologist/Obstetrician', '10', '2020-10-23', '6:00 PM', 1, 1, '2020-10-21 09:20:27', '0000-00-00 00:00:00'),
(5, 'lakshmi', '9393893939', 'lakshmi@gmali.com', 'Male', 'chennai', '2020-10-21 14:51:44', 'General Physician', '3', '2020-10-23', '7:00 PM', 1, 1, '2020-10-21 09:22:36', '0000-00-00 00:00:00'),
(6, 'Rajeshwari', '3434534533', 'rajeshwari@gmail.com', 'Male', 'chennai', '2020-10-21 14:55:30', 'Gynecologist/Obstetrician', '11', '2020-10-23', '5:00 PM', 1, 1, '2020-10-21 09:26:00', '0000-00-00 00:00:00'),
(7, 'Priyan', '938389292', 'priyan@gmail.com', 'Male', '039 street', '2020-10-22 09:49:23', 'Gynecologist/Obstetrician', '10', '2020-10-22', '6:15 PM', 1, 1, '2020-10-22 04:37:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

DROP TABLE IF EXISTS `pharmacy`;
CREATE TABLE IF NOT EXISTS `pharmacy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `name`, `username`, `password`, `created`, `updationDate`) VALUES
(1, 'Rajesh', 'vinoth@gmail.com', '123456', '2020-10-15 04:49:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`id`, `name`, `username`, `password`, `created`) VALUES
(1, 'madhu', 'madhu@gmail.com', '123456', '2020-09-14 03:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Room_Name` varchar(100) NOT NULL,
  `Room_charges` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `Room_Name`, `Room_charges`, `created`) VALUES
(1, 'Sharing Ward', '500', '2020-10-13 06:13:20'),
(2, 'Special Ward', '1000', '2020-10-13 06:18:34'),
(3, ' Private Room', '2000', '2020-10-13 06:19:32'),
(4, 'accident and emergency department ', '4000', '2020-10-13 06:29:53'),
(5, 'Delivery Room ', '600', '2020-10-13 06:30:24'),
(6, 'Emergency Room', '400', '2020-10-13 06:30:55'),
(7, 'ICU', '4000', '2020-10-13 06:31:24'),
(8, 'General Ward', '100', '2020-10-13 06:31:52'),
(9, 'Maternity Ward', '400', '2020-10-13 06:32:14'),
(10, 'Operation Theatre', '4500', '2020-10-13 06:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

DROP TABLE IF EXISTS `tblcontactus`;
CREATE TABLE IF NOT EXISTS `tblcontactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(1, 'test user', 'test@gmail.com', 2523523522523523, ' This is sample text for the test.', '2019-06-29 19:03:08', 'Test Admin Remark', '2019-06-30 12:55:23', 1),
(2, 'Anuj kumar', 'phpgurukulofficial@gmail.com', 1111111111111111, ' This is sample text for testing.  This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing.', '2019-06-30 13:06:50', 'thnka', '2020-09-17 05:20:20', 1),
(3, 'fdsfsdf', 'fsdfsd@ghashhgs.com', 3264826346, 'sample text   sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  ', '2019-11-10 18:53:48', 'vfdsfgfd', '2019-11-10 18:54:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

DROP TABLE IF EXISTS `tblmedicalhistory`;
CREATE TABLE IF NOT EXISTS `tblmedicalhistory` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `PatientID` int(10) DEFAULT NULL,
  `Doctorspecialization` varchar(200) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `Visit` varchar(100) NOT NULL,
  `Complint` varchar(100) NOT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `height` varchar(100) NOT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `Past_medical_history` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `Doctorspecialization`, `doctorId`, `Visit`, `Complint`, `BloodPressure`, `BloodSugar`, `Weight`, `height`, `Temperature`, `Past_medical_history`, `CreationDate`) VALUES
(2, 3, '', 7, 'fever', 'caough', '120/185', '80/120', '85 Kg', '189', '101 degree', '#Fever, #BP high\r\n1.Paracetamol\r\n2.jocib tab\r\n', '2020-10-12 05:42:23'),
(3, 2, '', 7, 'fever', 'caough', '90/120', '92/190', '86 kg', '189', '99 deg', '#Sugar High\r\n1.Petz 30', '2020-10-12 05:42:25'),
(4, 4, '', 0, '', '', '125/200', '86/120', '56 kg', '189', '98 deg', '# blood pressure is high\r\n1.koil cipla', '2020-11-03 05:22:59'),
(5, 4, '', 7, 'fever', 'caough', '96/120', '98/120', '57 kg', '189', '102 deg', '#Viral\r\n1.gjgjh-1Ml\r\n2.kjhuiy-2M', '2020-11-03 05:22:56'),
(6, 4, '', 0, 'cough', 'cough', '90/120', '120', '56', '189', '98 F', '#blood sugar high\r\n#Asthma problem', '2020-11-03 05:50:38'),
(7, 7, 'General Physician', 7, 'fever', 'caough', '80/120', '120', '85', '189', '98.6', 'Rx\r\n\r\nAbc tab\r\nxyz Syrup', '2020-11-03 06:07:28'),
(8, 1, 'Gynecologist/Obstetrician', 10, 'general', 'caough', '189', '400', '45', '189', '67', 'paracitimal,cenarial', '2020-09-15 06:40:16'),
(9, 1, 'Gynecologist/Obstetrician', 10, 'fever', 'ceneral ', '223', '223', '556', '54', '454', 'the traxil', '2020-09-16 07:40:48'),
(10, 1, 'Gynecologist/Obstetrician', 10, 'Fever', 'thermometer', '123', '31', '67', '5.8', '45', 'The fever and cough', '2020-11-03 05:29:12'),
(11, 7, 'General Physician', 3, 'cough', 'normal fever', '189', '234', '67', '5.7', '123', 'the past two days the event not required', '2020-11-03 05:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

DROP TABLE IF EXISTS `tblpatient`;
CREATE TABLE IF NOT EXISTS `tblpatient` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAddress` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAddress`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(1, 1, 'Manisha', 4558968789, 'test@gmail.com', 'Male', 'Plot no 45,chennai', 26, 'She is diabetic patient', '2019-11-04 21:38:06', '2020-09-16 09:03:20'),
(2, 5, 'Raghu Yadav', 9797977979, 'raghu@gmail.com', 'Male', 'apartment no 57 second street', 39, 'No', '2019-11-05 10:40:13', '2020-09-16 08:45:20'),
(3, 7, 'Mans', 9878978798, 'jk@gmail.com', 'Male', 'chennai', 46, 'No', '2019-11-05 10:49:41', '2020-09-16 08:15:33'),
(4, 7, 'Manav Sharma', 9888988989, 'sharma@gmail.com', 'Male', 'chennai', 45, 'He is long suffered by asthma', '2019-11-06 14:33:54', '2020-09-16 08:15:36'),
(5, 9, 'John', 1234567890, 'john@test.com', 'male', 'chennai', 25, 'THis is sample text for testing.', '2019-11-10 18:49:24', '2020-09-16 08:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-09 04:43:28', '09-09-2020 11:24:13 AM', 1),
(25, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-09 05:58:30', NULL, 1),
(26, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-09 09:18:46', '09-09-2020 03:46:39 PM', 1),
(27, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-09 10:17:22', NULL, 1),
(28, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-04 04:28:45', NULL, 1),
(29, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-03 23:01:02', NULL, 1),
(30, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-15 04:38:35', '15-09-2020 10:20:43 AM', 1),
(31, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-15 07:44:34', NULL, 0),
(32, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-15 07:44:49', NULL, 0),
(33, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-15 07:45:21', NULL, 0),
(34, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-15 07:45:55', '15-09-2020 01:22:47 PM', 1),
(35, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 05:42:27', '16-09-2020 11:45:35 AM', 1),
(36, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 06:18:59', '16-09-2020 11:49:57 AM', 1),
(37, NULL, 'madhu@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 06:37:27', NULL, 0),
(38, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 06:37:48', '16-09-2020 12:16:27 PM', 1),
(39, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 06:46:43', NULL, 1),
(40, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 09:33:48', NULL, 1),
(41, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 09:36:08', NULL, 1),
(42, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 10:36:45', NULL, 0),
(43, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 10:37:18', NULL, 1),
(44, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 10:47:15', NULL, 1),
(45, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-16 11:44:16', NULL, 1),
(46, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-21 05:01:04', NULL, 1),
(47, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-21 06:42:15', NULL, 1),
(48, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-25 11:11:23', NULL, 1),
(49, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-07 04:42:56', NULL, 1),
(50, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-08 04:07:23', NULL, 1),
(51, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-08 07:16:06', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Doctorspecialization` varchar(100) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `PatientContno` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Doctorspecialization`, `fullName`, `PatientContno`, `email`, `gender`, `address`, `state`, `city`, `regDate`, `updationDate`) VALUES
(2, '', 'Gopi', '', '', 'female', 'chennai', '', 'Delhi', '2016-12-30 05:34:39', '2020-09-18 05:08:01'),
(3, '', 'Amar', '', '', 'male', 'chennai', '', 'New delhi', '2017-01-07 06:36:53', '2020-09-18 05:08:05'),
(4, '', 'raji', '', '', 'male', 'chennai', '', 'New delhi', '2017-01-07 07:41:14', '2020-09-18 05:08:10'),
(5, '', 'jai', '', '', 'male', 'chennai', '', 'Delhi', '2017-01-07 08:00:26', '2020-09-18 05:08:13'),
(6, '', 'Test user', '', '', 'male', 'New Delhi', '', 'Delhi', '2019-06-23 18:24:53', '2019-06-23 18:36:09'),
(10, 'Gynecologist/Obstetrician', 'gopinath', '9994996010', 'gnath930@gmail.com', 'male', 'chennai', 'tamilnadu', 'chennai', '2020-10-21 05:19:52', NULL),
(11, 'Homeopath', 'Arun', '4345345345', 'arun@gmail.com', 'male', 'chennai', 'Tamilnadu', 'chennai', '2020-10-21 05:27:04', NULL),
(12, 'Dermatologist', 'sebastian', '1234567', 'sebastian@gmail.com', 'male', 'chennai', 'tamilnadu', 'kerala', '2020-10-21 05:28:07', '2020-10-21 05:35:30'),
(13, 'Gynecologist/Obstetrician', 'lakshmi', '9393893939', 'lakshmi@gmali.com', 'male', 'chennai', 'tamilnadu', 'india', '2020-10-21 09:21:44', NULL),
(14, 'General Physician', 'Rajeshwari', '3434534533', 'rajeshwari@gmail.com', 'female', 'chennai', 'Tamilnadu', 'chennai', '2020-10-21 09:25:30', NULL),
(15, 'General Physician', 'Mohan', '2342342342', 'mohan@gmail.com', 'male', 'chennai plot no 23', 'tamilnadu', 'chennai', '2020-10-21 09:27:49', NULL),
(16, 'Gynecologist/Obstetrician', 'Priyan', '938389292', 'priyan@gmail.com', 'male', '039 street', 'tamilnadu', 'chennai', '2020-10-22 04:19:23', NULL),
(17, 'Gynecologist/Obstetrician', 'aishwariyaa', '1234578', 'sdfsd@gmail.com', 'male', 'sdfsd', 'sdf', 'sdf', '2020-10-22 05:39:20', NULL),
(18, 'Dermatologist', 'Jai Kumar', '93838393', 'jai@gmail.com', 'male', 'chennai', 'tamilnadu', 'nungabakkam', '2020-11-03 06:25:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_masters`
--

DROP TABLE IF EXISTS `vendor_masters`;
CREATE TABLE IF NOT EXISTS `vendor_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Branch_name` varchar(200) NOT NULL,
  `vendor_code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Mobile_number` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `Post_box` varchar(200) NOT NULL,
  `Gst_number` varchar(200) NOT NULL,
  `Pan_number` varchar(200) NOT NULL,
  `Street` varchar(200) NOT NULL,
  `Area` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `Pin_code` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_masters`
--

INSERT INTO `vendor_masters` (`id`, `Branch_name`, `vendor_code`, `name`, `Mobile_number`, `email_id`, `Post_box`, `Gst_number`, `Pan_number`, `Street`, `Area`, `City`, `State`, `Pin_code`, `created`) VALUES
(1, 'Pharma Supplie', 'V34567', 'Pharma', '9998889998', 'Pharma@gmail.com', '3456', 'GST46378202', 'PRG373', 'ranganathan street', 'nungabbakam', 'chennai', 'tamilnadu', '68978', '2020-10-14 09:06:16'),
(2, 'Amplicare', 'TGH7890', 'AMplicare', '9282928292', 'amit@gmail.com', '12345', 'FTR343423', 'FDD343', 'garden', 'valuuvar kottam', 'chennai', 'Tamilnadu', '8494933', '2020-10-14 08:28:18'),
(3, 'medplus', 'MED3234', 'Medplusesdr', '9392932929329', 'medplus@gmail.com', '12345WSE', 'SDEF345566', 'CSSF343sd', 'GUDUVANCHERRY', 'chennai', 'chennai', 'Tamilnadu', '45567888', '2020-10-14 09:12:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
