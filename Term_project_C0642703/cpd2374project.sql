-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2014 at 11:03 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpd2374project`
--
CREATE DATABASE IF NOT EXISTS `cpd2374project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cpd2374project`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hint` varchar(255) NOT NULL,
  KEY `emiail` (`email`,`firstname`,`lastname`,`password`,`hint`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`firstname`, `lastname`, `email`, `password`, `hint`) VALUES
('Cindy', 'Cindy', 'cindy@cindy.com', '1d7fadb6f7d87635db32728c2a978ac1', 'sarnia'),
('tope', 'tope', 'top@top.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Hint');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(1, 1417181799, '::1', 'ZSzpjpJH'),
(2, 1417181816, '::1', 'RVmCgUjW'),
(3, 1417181846, '::1', 'JDzMTg1y'),
(4, 1417182107, '::1', 'lI1Ccpeh'),
(5, 1417182110, '::1', 'RLAFN330'),
(6, 1417182162, '::1', 'qCpK31zt'),
(7, 1417182387, '::1', 'pZrUUYDo'),
(8, 1417182399, '::1', 'LFggNCZa'),
(9, 1417182427, '::1', 'XAgnduTZ'),
(10, 1417182505, '::1', 'q6i5WMt1'),
(11, 1417182536, '::1', 'onqDfVVa'),
(12, 1417182554, '::1', 'U0Ewb1xd'),
(13, 1417182657, '::1', 'u2itHXUv'),
(14, 1417182715, '::1', 'gb5LFLo9'),
(15, 1417182726, '::1', '8QfgAUcm'),
(16, 1417182741, '::1', 'QIoNI4I4'),
(17, 1417182742, '::1', 'mgNOszpr'),
(18, 1417182751, '::1', 'oQfLvPfh'),
(19, 1417182771, '::1', 'VDmo7ykH'),
(20, 1417185190, '::1', 'yWJoVfIm'),
(21, 1417185271, '::1', '1f9ukUBu'),
(22, 1417185315, '::1', '3T6dEPIJ'),
(23, 1417185334, '::1', 'dVOf7Nk0'),
(24, 1417185495, '::1', 'i0hDu6xw'),
(25, 1417185497, '::1', '6G29fCwk'),
(26, 1417185526, '::1', 'K59OgTo8'),
(27, 1417185528, '::1', 'BFQifEs8'),
(28, 1417185529, '::1', 'rZCjIcRo'),
(29, 1417185530, '::1', 'clWgI8tg'),
(30, 1417185535, '::1', 'lyMJsvpc'),
(31, 1417185539, '::1', 'HdiDCgrB'),
(32, 1417185541, '::1', 'BKaFV5rK'),
(33, 1417185542, '::1', 'xYVswGjL'),
(34, 1417185548, '::1', 'ZsC2fn7X'),
(35, 1417185550, '::1', 'bzMhZflA'),
(36, 1417185577, '::1', '6VF7mUpy'),
(37, 1417186314, '::1', '7YheRSo6'),
(38, 1417186351, '::1', 'neA2HpS1'),
(39, 1417186449, '::1', 'heHyHMOc'),
(40, 1417186471, '::1', 'hdp7oyh5'),
(41, 1417186475, '::1', 'TulcPknx'),
(42, 1417186528, '::1', 'vV940Hnj'),
(43, 1417186536, '::1', 'MF1841dJ'),
(44, 1417186559, '::1', 'Fvy7g94Y'),
(45, 1417186569, '::1', '1hMh4KrS'),
(46, 1417186571, '::1', 'NJgVZVoR'),
(47, 1417186641, '::1', '7ktRjHi5'),
(48, 1417186657, '::1', 'CR6JQf0h'),
(49, 1417186661, '::1', 'Bwvr6D7O'),
(50, 1417186692, '::1', 'RHhfqW7G'),
(51, 1417186703, '::1', 'Ns0MtOTb'),
(52, 1417186725, '::1', 'LRYZj7FI'),
(53, 1417186750, '::1', 'j8qHCBWl'),
(54, 1417186886, '::1', '4FAbyKRe'),
(55, 1417186902, '::1', 'KG1WojjW'),
(56, 1417187078, '::1', 'CAWtsOA3'),
(57, 1417187084, '::1', 'kyf76fHe'),
(58, 1417187135, '::1', 'edvC6dqK'),
(59, 1417187138, '::1', '4X0yyMjA'),
(60, 1417187157, '::1', 'kPDIu6K2'),
(61, 1417187603, '::1', 'yQeB3lza'),
(62, 1417187954, '::1', 'iyUGSD1l'),
(63, 1417187984, '::1', 'yvF0IrNU'),
(64, 1417188007, '::1', 'i5MaxDXm'),
(65, 1417556162, '::1', 'MrxmKgcH'),
(66, 1417556179, '::1', 'xAmlVK4l'),
(67, 1417556202, '::1', 'ZgpnsUjv'),
(68, 1417556238, '::1', 'kyyVZ4ZF'),
(69, 1417556250, '::1', 'PBmQdtic'),
(70, 1417556271, '::1', 'KXyp1HJR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
