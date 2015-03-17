
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 08:26 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a2655726_Stielt`
--

-- --------------------------------------------------------

--
-- Table structure for table `championstats`.
--

CREATE TABLE `championstats` (
  `Name` char(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Hitpoints` float(5,2) NOT NULL DEFAULT '0.00',
  `Hpinc` int(2) NOT NULL DEFAULT '0',
  `Mana` float(5,2) NOT NULL DEFAULT '0.00',
  `Mpinc` int(2) NOT NULL DEFAULT '0',
  `Attackdmg` float(5,3) NOT NULL DEFAULT '0.000',
  `ADinc` float(4,3) NOT NULL DEFAULT '0.000',
  `Attackspeed` float(4,3) NOT NULL DEFAULT '0.000',
  `Asinc` float(4,3) NOT NULL DEFAULT '0.000',
  `Armour` float(5,3) NOT NULL DEFAULT '0.000',
  `Arinc` float(3,2) NOT NULL DEFAULT '0.00',
  `Magicresist` float(3,1) NOT NULL DEFAULT '0.0',
  `Mrinc` float(3,2) NOT NULL DEFAULT '0.00',
  `Qbase` int(3) NOT NULL DEFAULT '0',
  `Qadscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Qapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Qcd` int(2) NOT NULL DEFAULT '0',
  `Wbase` int(3) NOT NULL DEFAULT '0',
  `Wadscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Wapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Wcd` int(2) NOT NULL DEFAULT '0',
  `Ebase` int(3) NOT NULL DEFAULT '0',
  `Eadscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Eapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Ecd` int(2) NOT NULL DEFAULT '0',
  `Rbase` int(4) NOT NULL DEFAULT '0',
  `Radscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Rapscale` float(3,2) NOT NULL DEFAULT '0.00',
  `Rcd` int(3) NOT NULL DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `championstats`
--

INSERT INTO `championstats` VALUES('Tryndamere', 625.64, 98, 100.00, 0, 61.376, 3.200, 0.670, 2.900, 24.108, 3.10, 32.1, 1.25, 0, 0.00, 0.00, 12, 0, 0.00, 0.00, 14, 190, 1.20, 1.00, 9, 0, 0.00, 0.00, 90, '2015-03-16 17:35:51');
INSERT INTO `championstats` VALUES('Amumu', 625.64, 98, 100.00, 0, 53.384, 4.800, 0.638, 2.190, 23.544, 3.30, 32.1, 1.25, 280, 0.00, 0.70, 9, 84, 0.00, 0.20, 1, 175, 0.00, 0.50, 6, 350, 0.00, 0.80, 110, '2015-03-16 01:46:04');
INSERT INTO `championstats` VALUES('Annie', 511.68, 76, 334.00, 50, 50.410, 2.625, 0.579, 1.360, 12.990, 4.00, 30.0, 0.00, 220, 0.00, 0.80, 4, 250, 0.00, 0.85, 8, 60, 0.00, 0.20, 10, 425, 0.00, 0.80, 80, '2015-03-16 01:46:35');
