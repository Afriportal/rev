-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 12:48 PM
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
('30c014db396b91e325f6a1e2d63507d08fa00ec1', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487174500;'),
('f32f8bc05f4de38d77561db7ad5d4ca8460ec37d', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487174816;'),
('3d963859cde291e0154e51ed7e916e11bd37a1ea', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487175100;'),
('7c86b22ee016e6705a83524a9801c51efc19fc59', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487175226;'),
('fe052e750d6a38bab2f5b8aeea1b6947aab4b34f', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487175622;'),
('11b8c7f56a1ea177b8bd9c97b88d0ddf3a3c5976', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487184128;'),
('aecab7d3ed4bf7dadccbcbe14ba6e8e797f69f12', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487185114;'),
('ae12250a2ee8ce1fa9d8cdbff31d2c72aecc1883', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487185479;'),
('97836012b3dd97a02947b71f9afee5e37b3a28ec', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487186495;'),
('c8bbee03630c825252c557a4192b5f6b8a4fa931', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487187198;'),
('0f2a2d6f665b91fe654aff4ac51c65fe9f82ffd2', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487187502;'),
('ffaad2227fa3b196426dc670407d01f0935107b4', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487189167;'),
('e3f890caea715a19ee7e514d7bcd6fe51e4dae4a', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487190053;newuser|b:1;message|b:0;__ci_vars|a:2:{s:7:"newuser";i:1487190258;s:7:"message";i:1487190258;}usr_id|s:1:"1";acc_id|s:1:"0";usr_email|s:22:"sokoyaphilip@yahoo.com";usr_access_level|s:1:"2";logged_in|b:1;'),
('1ecea211718c7fe5db77a3d0ca053948a32b117a', '::1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487191481;usr_id|s:1:"1";acc_id|s:1:"0";username|s:0:"";usr_email|s:22:"sokoyaphilip@yahoo.com";usr_access_level|s:1:"2";usr_bank_details|s:1:"0";logged_in|b:1;'),
('196c7a591ae02c0e0dd0affa4b30338c79907836', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487229312;'),
('808f39ed0ed15d534ca55b031b9d197fda5d5446', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487234107;'),
('8f4a5f964f061c3c81aaa2ed3933d120b3e4627b', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487234806;'),
('08236118164a019526c5787617fdf34703ba70de', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487235151;'),
('873fba947a29c55e0751dc18795b674060acfe03', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487235495;'),
('9c91fbab554a95189eecd2cc1b7df0e67db0c774', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487236671;'),
('8b5d293b35ac7217abc64fa47d76fc078938c6c9', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487236972;'),
('f89ce9f0f8ceb7c556303950d0c8e7b51befdf22', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487240286;usr_id|s:1:"1";acc_id|s:1:"0";username|s:6:"philip";usr_email|s:22:"sokoyaphilip@yahoo.com";usr_access_level|s:1:"1";usr_bank_details|s:1:"0";logged_in|b:1;'),
('36b660f4de9d68dd8776dcb66b74b640112c3f19', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487240651;usr_id|s:1:"1";acc_id|s:1:"0";username|s:6:"philip";usr_email|s:22:"sokoyaphilip@yahoo.com";usr_access_level|s:1:"1";usr_bank_details|s:1:"0";logged_in|b:1;'),
('6df51b6c1e7cc8d73c4d87dee12e38454de81547', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487243209;usr_id|s:1:"1";acc_id|s:1:"0";username|s:6:"philip";usr_email|s:22:"sokoyaphilip@yahoo.com";usr_access_level|s:1:"1";usr_bank_details|s:1:"0";logged_in|b:1;'),
('92d2bd643c010c469f51e193ddf1ff6aba909a3c', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487243853;usr_id|s:1:"1";acc_id|s:1:"0";username|s:6:"philip";usr_email|s:22:"sokoyaphilip@yahoo.com";usr_access_level|s:1:"1";usr_bank_details|s:1:"0";logged_in|b:1;'),
('d3617dc83fa63c1c4b79e484f0a2fd4f2ee6ee1d', '127.0.0.1', '0000-00-00 00:00:00', NULL, 0, '__ci_last_regenerate|i:1487244989;usr_id|s:1:"1";acc_id|s:1:"0";username|s:6:"philip";usr_email|s:22:"sokoyaphilip@yahoo.com";usr_access_level|s:1:"1";usr_bank_details|s:1:"0";logged_in|b:1;');

-- --------------------------------------------------------

--
-- Table structure for table `pairing`
--

CREATE TABLE IF NOT EXISTS `pairing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL COMMENT 'The donator or receiver account id',
  `type` int(1) NOT NULL COMMENT '1 (donating) or 2 (receiving)',
  `usr_fname` varchar(125) NOT NULL,
  `usr_phone` varchar(125) NOT NULL,
  `usr_state` varchar(125) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL COMMENT 'account id',
  `usr_referral` varchar(125) DEFAULT NULL,
  `usr_fname` varchar(125) NOT NULL,
  `usr_lname` varchar(125) NOT NULL,
  `usr_uname` varchar(50) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_hash` varchar(255) NOT NULL,
  `usr_phone` varchar(50) NOT NULL,
  `usr_state` varchar(255) NOT NULL,
  `usr_access_level` int(2) NOT NULL COMMENT 'up to 99',
  `usr_is_active` int(1) NOT NULL COMMENT '1 (active) or 0 (inactive)',
  `usr_bank` int(1) NOT NULL DEFAULT '0',
  `usr_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_pwd_change_code` varchar(50) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `acc_id`, `usr_referral`, `usr_fname`, `usr_lname`, `usr_uname`, `usr_email`, `usr_hash`, `usr_phone`, `usr_state`, `usr_access_level`, `usr_is_active`, `usr_bank`, `usr_created_at`, `usr_pwd_change_code`) VALUES
(1, 0, 'philo4u2c@gmail.com', 'Sokoya', 'philip', 'philip', 'sokoyaphilip@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', '', 1, 1, 0, '2017-02-15 20:21:48', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
