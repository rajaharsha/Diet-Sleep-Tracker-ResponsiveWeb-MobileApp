-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 10:32 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coach_z`
--
CREATE DATABASE IF NOT EXISTS `coach_z` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coach_z`;

-- --------------------------------------------------------

--
-- Table structure for table `app_questions`
--

CREATE TABLE `app_questions` (
  `Q_ID` int(11) NOT NULL,
  `Q_TYPE` varchar(10) NOT NULL,
  `Q_SEQ` varchar(10) NOT NULL,
  `Q_TEXT` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `U_ID` int(10) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `PASS_CODE` varchar(200) NOT NULL,
  `ACTIVE` varchar(1) DEFAULT 'Y',
  `USER_ROLE` varchar(30) NOT NULL,
  `USER_IMAGE` varchar(200) DEFAULT NULL,
  `CREATED_BY` varchar(50) DEFAULT '-1',
  `CREATION_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LAST_UPDATED_BY` varchar(50) DEFAULT NULL,
  `LAST_UPDATION_DATE` date DEFAULT NULL,
  `LAST_LOGIN_DATE` date DEFAULT NULL,
  `USER_NAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`U_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASS_CODE`, `ACTIVE`, `USER_ROLE`, `USER_IMAGE`, `CREATED_BY`, `CREATION_DATE`, `LAST_UPDATED_BY`, `LAST_UPDATION_DATE`, `LAST_LOGIN_DATE`, `USER_NAME`) VALUES
(1, '', '', 'rajaharsha.ch@gmail.com', '', 'Y', '', NULL, '-1', '2017-01-09 21:18:00', NULL, NULL, NULL, 'RAJA'),
(2, '', '', 'rajaharsha.ch@gmail.com', 'hehey', 'Y', '', NULL, '-1', '2017-01-05 23:43:33', NULL, NULL, NULL, 'RAJA HARSHA CHINTA'),
(3, '', '', 'rajaharsha.c@gmail.com', 'harshaharsha', 'Y', '', NULL, '-1', '2017-01-05 23:44:16', NULL, NULL, NULL, 'RAJA HARSHA CHINTA'),
(4, '', '', 'rajaharshach@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-01-10 16:25:03', NULL, NULL, NULL, 'rharshaaa'),
(5, '', '', 'eraredfa@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-01-10 16:32:53', NULL, NULL, NULL, 'raharsa'),
(6, '', '', 'rajaharshachinta@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-01-10 16:47:03', NULL, NULL, NULL, 'rajaharshachinta'),
(7, '', '', 'rajahars@gmail.com', 'born', 'Y', '', NULL, '-1', '2017-01-10 16:51:13', NULL, NULL, NULL, 'rajahars'),
(8, '', '', 'rahfdafsd@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-01-10 17:07:16', NULL, NULL, NULL, 'rajahafdafd'),
(9, '', '', 'rajaharsha@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-01-10 17:10:56', NULL, NULL, NULL, 'rajaharsha'),
(10, '', '', 'rajaharsha@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-01-10 18:23:59', NULL, NULL, NULL, 'rajaharsha'),
(11, '', '', 'rajaharsha@gmail.com', 'raja', 'Y', '', NULL, '-1', '2017-01-10 18:24:02', NULL, NULL, NULL, 'rajaharsha'),
(12, '', '', 'rajaharshfdasfdfa.c@gmail.com', 'Raja', 'Y', '', NULL, '-1', '2017-01-11 17:34:55', NULL, NULL, NULL, 'rearea');

-- --------------------------------------------------------

--
-- Table structure for table `cz_evg_answers`
--

CREATE TABLE `cz_evg_answers` (
  `eq1_Morning` varchar(50) DEFAULT NULL,
  `eq1_Afternoon` varchar(50) DEFAULT NULL,
  `eq1_Evening` varchar(50) DEFAULT NULL,
  `eq2_Exercise` varchar(50) DEFAULT NULL,
  `eq3_Alcohol` varchar(50) DEFAULT NULL,
  `eq4_Nap` varchar(50) DEFAULT NULL,
  `eq5_Mood` varchar(50) DEFAULT NULL,
  `eq6_Phone` varchar(50) DEFAULT NULL,
  `eq6_ReadHomeWork` varchar(50) DEFAULT NULL,
  `eq6_WatchTV` varchar(50) DEFAULT NULL,
  `eq6_PlayVideoGames` varchar(50) DEFAULT NULL,
  `eq6_None` varchar(50) DEFAULT NULL,
  `eq7_TimeOfDay` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- --------------------------------------------------------

--
-- Table structure for table `cz_evg_answers`
--

CREATE TABLE `cz_mng_answers` (
  `mq1_bedTime` varchar(50) DEFAULT NULL,
  `mq1_wakeTime` varchar(50) DEFAULT NULL,
  `mq2_problemsFallingAsleep` varchar(50) DEFAULT NULL,
  `mq2_minutesToFallAsleep` varchar(50) DEFAULT NULL,
  `mq3_didWakeDuringTheNight` varchar(50) DEFAULT NULL,
  `mq3_minutesToFallBackToSleep` varchar(50) DEFAULT NULL,
  `mq4_howDidYouFeel` varchar(50) DEFAULT NULL,
  `mq5_noise` varchar(50) DEFAULT NULL,
  `mq5_light` varchar(50) DEFAULT NULL,
  `mq5_stress` varchar(50) DEFAULT NULL,
  `mq5_temp` varchar(50) DEFAULT NULL,
  `mq5_nota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cz_evg_answers`
--

INSERT INTO `cz_evg_answers` (`eq1_Morning`, `eq1_Afternoon`, `eq1_Evening`, `eq2_Exercise`, `eq3_Alcohol`, `eq4_Nap`, `eq5_Mood`, `eq6_Phone`, `eq6_ReadHomeWork`, `eq6_WatchTV`, `eq6_PlayVideoGames`, `eq6_None`, `eq7_TimeOfDay`) VALUES
('111', '2323', '23232', 'true', 'true', 'true', 'Neutral', 'True', 'True', 'True', 'True', 'True', 'Early Morning'),
('1112', '232', '232', 'true', 'true', 'false', 'Happy', 'True', 'True', 'True', 'True', 'True', 'Afternoon'),
('7', '8', '9', 'false', 'false', 'true', 'Neutral', 'True', 'True', 'False', 'False', 'True', 'Early Morning'),
('1', '2', '3', 'true', 'true', 'true', 'Happy', 'True', 'True', 'False', 'False', 'False', 'Early Morning');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `U_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
