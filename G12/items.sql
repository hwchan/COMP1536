
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 09:40 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a2655726_Stielt`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Name` char(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Damage` int(2) NOT NULL DEFAULT '0',
  `Crit` int(2) NOT NULL DEFAULT '0',
  `Atkspeed` int(2) NOT NULL DEFAULT '0',
  `Ap` int(3) NOT NULL DEFAULT '0',
  `Cdr` int(2) NOT NULL DEFAULT '0',
  `Mana` int(3) NOT NULL DEFAULT '0',
  `Health` int(3) NOT NULL DEFAULT '0',
  `Armour` int(3) NOT NULL DEFAULT '0',
  `Mr` int(2) NOT NULL DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` VALUES('botrk', 25, 0, 40, 0, 0, 0, 0, 0, 0, '2015-03-16 13:14:52');
INSERT INTO `items` VALUES('bt', 80, 0, 0, 0, 0, 0, 0, 0, 0, '2015-03-16 13:16:31');
