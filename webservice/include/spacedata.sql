-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2015 at 08:02 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `varsity`
--

-- --------------------------------------------------------

--
-- Table structure for table `spacedata`
--

CREATE TABLE IF NOT EXISTS `spacedata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `spacedata`
--

INSERT INTO `spacedata` (`id`, `filename`, `date`) VALUES
(1, 'space1.png', '2015-04-05 22:07:51'),
(2, 'space2.png', '2015-04-05 22:08:08'),
(3, 'space3.png', '2015-04-05 22:07:51'),
(4, 'space4.png', '2015-04-05 22:08:08'),
(5, 'space5.jpg', '2015-04-05 22:08:08');
