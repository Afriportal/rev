-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 10:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `revolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL,
  `user_agent` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `user_agent`, `last_activity`, `data`) VALUES
('4f480820cc323c96681047961b5b03d701600ee4', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487972553;usr_id|s:1:"9";fullname|s:10:"Bisi Alimi";usr_email|s:14:"bisi@gmail.com";usr_access_level|s:1:"2";usr_bank_details|s:1:"1";logged_in|b:1;popid|s:6:"753289";');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` varchar(50) NOT NULL,
  `usr_id` int(11) NOT NULL COMMENT 'The donator or receiver account id',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` varchar(125) NOT NULL,
  `expecting` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `did`, `usr_id`, `created_at`, `amount`, `expecting`) VALUES
(4, '132694', 3, '2017-02-23 20:05:42', '20000', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `dump`
--

CREATE TABLE IF NOT EXISTS `dump` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL COMMENT 'The donator or receiver account id',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` timestamp NOT NULL,
  `amount` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `merge`
--

CREATE TABLE IF NOT EXISTS `merge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL COMMENT 'donation id',
  `payer_id` int(11) NOT NULL COMMENT 'payer id',
  `receiver_id` int(11) NOT NULL COMMENT 'receiver id',
  `receiver_name` varchar(125) NOT NULL,
  `receiver_state` varchar(125) NOT NULL,
  `receiver_phone` varchar(125) NOT NULL,
  `receiver_bank_name` varchar(30) NOT NULL,
  `receiver_account_name` varchar(30) NOT NULL,
  `receiver_account_no` varchar(30) NOT NULL,
  `amount` bigint(10) NOT NULL,
  `due_date` timestamp NOT NULL,
  `pop` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT 'status - ''0'' = nothing, ''1'' uploaded, 2'' - completed',
  `completed` int(1) NOT NULL DEFAULT '0',
  `report` int(11) NOT NULL DEFAULT '0',
  `report_reason` text NOT NULL,
  `report_proof` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `merge`
--

INSERT INTO `merge` (`id`, `did`, `payer_id`, `receiver_id`, `receiver_name`, `receiver_state`, `receiver_phone`, `receiver_bank_name`, `receiver_account_name`, `receiver_account_no`, `amount`, `due_date`, `pop`, `status`, `completed`, `report`, `report_reason`, `report_proof`) VALUES
(1, 169532, 9, 6, 'Ambrose ifeoma', 'Jigawa', '08067155866', '', '', '', 40000, '2017-02-23 14:59:47', '', 0, 0, 0, '', ''),
(3, 753289, 9, 6, '', '', '', '', '', '', 20000, '2017-02-26 03:13:44', '', 0, 0, 0, '', ''),
(5, 487136, 8, 6, '', '', '', '', '', '', 20000, '2017-02-26 03:18:02', '', 0, 0, 0, '', ''),
(14, 487136, 8, 5, 'Onyepunuka O Emmanuel', 'Sokoto', '07036367061', '', '', '', 20000, '2017-02-26 03:31:43', '', 0, 0, 0, '', ''),
(15, 753289, 9, 5, '', '', '', '', '', '', 20000, '2017-02-26 03:31:43', '', 0, 0, 0, '', ''),
(20, 753289, 9, 3, 'tessy abu peter', 'Jigawa', '08038050689', '', '', '', 20000, '2017-02-26 03:39:47', '', 0, 0, 0, '', ''),
(21, 753289, 9, 3, 'tessy abu peter', 'Jigawa', '08038050689', '', '', '', 20000, '2017-02-26 03:40:06', '', 0, 0, 0, '', ''),
(22, 753289, 9, 3, 'tessy abu peter', 'Jigawa', '08038050689', '', '', '', 20000, '2017-02-26 03:51:03', '', 0, 0, 0, '', ''),
(23, 487136, 8, 3, 'tessy abu peter', 'Jigawa', '08038050689', '', '', '', 20000, '2017-02-26 03:56:42', '', 0, 0, 0, '', ''),
(24, 753289, 9, 8, 'Tunde ade', 'Ekiti', '08163836478', '', '', '', 20000, '2017-02-26 03:58:49', '', 0, 0, 0, '', ''),
(25, 753289, 9, 9, 'Bisi Alimi', 'Rivers', '08172635487', '', '', '', 20000, '2017-02-26 03:59:57', '', 0, 0, 0, '', ''),
(26, 487136, 8, 9, 'Bisi Alimi', 'Rivers', '08172635487', '', '', '', 40000, '2017-02-26 04:19:11', '', 0, 0, 0, '', ''),
(27, 956873, 7, 8, 'Tunde ade', 'Ekiti', '08163836478', '', '', '', 40000, '2017-02-26 04:21:00', '', 0, 0, 0, '', ''),
(28, 385426, 6, 7, 'Lucky fibre', 'Yobe', '09028770707', '', '', '', 40000, '2017-02-26 08:09:42', '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` varchar(50) NOT NULL,
  `usr_id` int(11) NOT NULL COMMENT 'The donator or receiver account id',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` timestamp NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `did`, `usr_id`, `created_at`, `due_date`, `amount`) VALUES
(1, '153796', 10, '2017-02-22 23:46:38', '2017-02-23 10:27:48', '20000'),
(2, '256394', 5, '2017-02-23 06:25:37', '2017-02-23 10:27:58', '40000'),
(3, '619437', 2, '2017-02-23 06:31:33', '2017-02-23 10:28:07', '20000'),
(4, '257896', 2, '2017-02-23 10:12:19', '2017-02-23 10:28:18', '40000'),
(5, '384296', 3, '2017-02-23 10:15:55', '2017-02-23 10:28:28', '20000'),
(21, '384296', 3, '2017-02-23 15:39:47', '2017-02-26 03:39:47', '40000'),
(22, '384296', 3, '2017-02-23 15:40:06', '2017-02-26 03:40:06', '40000'),
(23, '384296', 3, '2017-02-23 15:51:03', '2017-02-26 03:51:03', '40000'),
(24, '619437', 8, '2017-02-23 15:56:42', '2017-02-26 03:56:42', '40000'),
(25, '619437', 9, '2017-02-23 15:58:49', '2017-02-26 03:58:49', '40000'),
(26, '619437', 9, '2017-02-23 15:59:57', '2017-02-26 03:59:57', '40000'),
(27, '619437', 8, '2017-02-23 16:19:11', '2017-02-26 04:19:11', '40000'),
(28, '384296', 7, '2017-02-23 16:21:00', '2017-02-26 04:21:00', '40000'),
(29, '619437', 6, '2017-02-23 20:09:42', '2017-02-26 08:09:42', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL COMMENT 'account id',
  `usr_referral` varchar(125) DEFAULT NULL,
  `usr_fname` varchar(125) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_hash` varchar(255) NOT NULL,
  `usr_phone` varchar(50) NOT NULL,
  `usr_state` varchar(255) NOT NULL,
  `usr_bank_name` varchar(50) NOT NULL,
  `usr_account_name` varchar(125) NOT NULL,
  `usr_account_type` varchar(125) NOT NULL,
  `usr_account_number` varchar(125) NOT NULL,
  `usr_access_level` int(2) NOT NULL COMMENT 'up to 99',
  `usr_is_active` int(1) NOT NULL COMMENT '1 (active) or 0 (inactive)',
  `usr_bank` int(1) NOT NULL DEFAULT '0',
  `usr_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_pwd_change_code` varchar(50) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `acc_id`, `usr_referral`, `usr_fname`, `usr_email`, `usr_hash`, `usr_phone`, `usr_state`, `usr_bank_name`, `usr_account_name`, `usr_account_type`, `usr_account_number`, `usr_access_level`, `usr_is_active`, `usr_bank`, `usr_created_at`, `usr_pwd_change_code`) VALUES
(1, 0, NULL, 'Sokoya Philip', 'sokoyaphilip@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '08169254598', 'Ogun', 'GTB bank', 'Sokoya Adeniji Philip', 'Savings', '0156802356', 1, 1, 1, '2017-02-23 10:04:41', ''),
(2, 0, NULL, 'okoro patience', 'okorooghenefejiro.3@gmail.com', '897ad9cb5812d245ad922db35d71e88f0fe764b5', '0912345678', 'Adamawa', 'skye bank', '3018862227', 'Savings', '3018862227', 2, 1, 1, '2017-02-23 10:09:43', ''),
(3, 0, NULL, 'tessy abu peter', 'tessdareabupeters@yahoo.com', '409587de6f927717768b7dab518f81286995df67', '08038050689', 'Jigawa', 'Diamond Bank', 'Tessy Abu Peters', 'Savings', '08038050689', 2, 1, 1, '2017-02-23 10:13:18', ''),
(4, 0, NULL, 'Bakre victory', 'aridinoisaace@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '07033020150', 'Kebbi', 'unity bank', 'bakre victory', 'Savings', '0016796605', 2, 1, 1, '2017-02-23 10:16:49', ''),
(5, 0, NULL, 'Onyepunuka O Emmanuel', 'sofortunequeens@gmail.com', '9191f71c51c656379450c3b2d8b69f8b1e8e7dee', '07036367061', 'Sokoto', 'unity bank', 'Onyepunuka emmanuel onyinye', 'Savings', '0027037854', 2, 1, 1, '2017-02-23 10:19:55', ''),
(6, 0, NULL, 'Ambrose ifeoma', 'ambrose@gmail.com', '72d628afcba6276ef21c659ca04551993677b447', '08067155866', 'Jigawa', 'uba bank', 'ambrose ifeoma antonia', 'Savings', '2028348832', 2, 1, 1, '2017-02-23 10:22:16', ''),
(7, 0, NULL, 'Lucky fibre', 'lucky@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '09028770707', 'Yobe', 'Zenith Bank', 'Lucky Fibre', 'Current', '0272811924', 2, 1, 1, '2017-02-23 10:30:59', ''),
(8, 0, NULL, 'Tunde ade', 'tunde@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '08163836478', 'Ekiti', 'uba bank', 'tunde ade', 'Savings', '9222726926', 2, 1, 1, '2017-02-23 10:32:37', ''),
(9, 0, NULL, 'Bisi Alimi', 'bisi@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '08172635487', 'Rivers', 'Diamond Bank', 'Bisi Alimi', 'Savings', '7252282782', 2, 1, 1, '2017-02-23 10:35:27', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
