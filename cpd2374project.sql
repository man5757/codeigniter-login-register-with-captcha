-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2015 at 12:50 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpd2374project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hint` varchar(255) NOT NULL
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

CREATE TABLE `captcha` (
`captcha_id` bigint(13) unsigned NOT NULL,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(133, 1417662672, '::1', 'yVjTRS4k'),
(134, 1417662706, '::1', 'hDJvsa5v'),
(135, 1417662837, '::1', 'wgxziQHs'),
(136, 1417662874, '::1', 'BUdv6rHu'),
(137, 1417662880, '::1', 'KDitNUP3'),
(138, 1417662897, '::1', 'e31ITCUD'),
(139, 1417662922, '::1', 'PYCKlpts'),
(140, 1417662936, '::1', 'AcX24JuG'),
(141, 1417662948, '::1', 'zLmGtNMc'),
(142, 1417662954, '::1', '9KEriOvf'),
(143, 1417662992, '::1', 'wP2Tds0r'),
(144, 1417663104, '::1', 'DVn5RTmH'),
(145, 1417663118, '::1', 'B7UTAuDt'),
(146, 1417663141, '::1', 'AThPn7yw'),
(147, 1417663149, '::1', 'k50B3eyZ'),
(148, 1417663154, '::1', '9F61RNgU'),
(149, 1417663171, '::1', 'i81vo2xo'),
(150, 1417663178, '::1', 'RAEWySTa'),
(151, 1417663185, '::1', 'WC8LOpjf'),
(152, 1417663202, '::1', 'IP749YVD'),
(153, 1417663211, '::1', 'mlTqjG1Q'),
(154, 1417663220, '::1', 'GjtrAbIP'),
(155, 1417663228, '::1', 'aCyU4DUy'),
(156, 1417663236, '::1', 'Npd8JHcJ'),
(157, 1417663237, '::1', 'Flatr8mz'),
(158, 1417663278, '::1', 'vZ5ZKaFR'),
(159, 1417663289, '::1', 'dWyhJZ7Y'),
(160, 1417663298, '::1', 'PC3qunVf'),
(161, 1417663305, '::1', 'iFGORBWk'),
(162, 1417663313, '::1', '6V9JQCFp'),
(163, 1417663321, '::1', 'VC1CGqIF'),
(164, 1417663328, '::1', '2mGiymrb'),
(165, 1417663336, '::1', 'YpUNmQq1'),
(166, 1417663340, '::1', 'h2TuEd60'),
(167, 1417663349, '::1', 'hSWL7To0'),
(168, 1417663363, '::1', '9AUIZA94'),
(169, 1417663371, '::1', '0LeBnuCS'),
(170, 1417663378, '::1', 'qX2jz8ru'),
(171, 1417663386, '::1', 'DBOzUB1A'),
(172, 1417663494, '::1', 'NZXPzaOy'),
(173, 1417663514, '::1', 'csCKz4EC'),
(174, 1417663521, '::1', 'aDuWxaBt'),
(175, 1417663565, '::1', '9EMuXrML'),
(176, 1417663570, '::1', '3GFaSfMq'),
(177, 1417663596, '::1', 'H5mmslXA'),
(178, 1417663628, '::1', 'Ni8NGmGX'),
(179, 1417663642, '::1', 'jxHuHNmM'),
(180, 1417663660, '::1', 'gP4CWsfx'),
(181, 1417663718, '::1', 'imoYVRYZ'),
(182, 1417663806, '::1', 'BJwwpmcK'),
(183, 1417663824, '::1', 'vA4Cs5sr'),
(184, 1417663848, '::1', 'syE5VMqo'),
(185, 1417663855, '::1', 'hBe0yDk6'),
(186, 1417663894, '::1', 'AfkwGJr9'),
(187, 1417663910, '::1', 'E96I9eeY'),
(188, 1417663985, '::1', 'UtmLoogV'),
(189, 1417664166, '::1', 'smqciVci'),
(190, 1417664172, '::1', 'BzYTQa6c'),
(191, 1417664176, '::1', 'H1QKGzjT'),
(192, 1417664212, '::1', 'Y5jz5QJd'),
(193, 1417664227, '::1', 'epHCbP4C'),
(194, 1417664251, '::1', 'NcXKRtn6'),
(195, 1417664505, '::1', 'a6lf8kYo'),
(196, 1417664681, '::1', '4y62yUGb'),
(197, 1417664688, '::1', '6iUDC1WM'),
(198, 1417664696, '::1', 'O3qvQ3T2'),
(199, 1417664957, '::1', 'KzrvNRhV'),
(200, 1417664959, '::1', 'tw31qJqf'),
(201, 1417664977, '::1', 'F8Qa99hG'),
(202, 1417665297, '::1', 'BQU84uVu'),
(203, 1417665381, '::1', 'gDhAbHUN'),
(204, 1417665410, '::1', '2JwTHmCh'),
(205, 1417665603, '::1', 'zphdrjeh'),
(206, 1417665612, '::1', 'r2sidbtw'),
(207, 1417665620, '::1', 't6wcQDP8'),
(208, 1417665632, '::1', 'BE90ABBL'),
(209, 1417665899, '::1', 'crNnzvsY'),
(210, 1417665920, '::1', 'm6SB4Mki'),
(211, 1417666533, '::1', 'xPQScFGc'),
(212, 1417666645, '::1', 'FnAUBzfG'),
(213, 1417666647, '::1', 'jk8tJsDc'),
(214, 1417666669, '::1', '6nWGo6oM'),
(215, 1417666671, '::1', 'mEZ0wmxc'),
(216, 1417666690, '::1', 'Bux86ftJ'),
(217, 1417666714, '::1', 'gRy46SrB'),
(218, 1417666950, '::1', '0YkiG2HW'),
(219, 1417666955, '::1', 'LgneXj3f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD KEY `emiail` (`email`,`firstname`,`lastname`,`password`,`hint`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
 ADD PRIMARY KEY (`captcha_id`), ADD KEY `word` (`word`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
MODIFY `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=220;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
