-- MySQL dump 10.13  Distrib 5.1.51, for pc-linux-gnu (i686)
--
-- Host: 127.0.0.1    Database: world
-- ------------------------------------------------------
-- Server version	5.1.51-debug-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP SCHEMA IF EXISTS comp1116;
CREATE SCHEMA comp1116;
USE comp1116;

--
-- Table structure for table `champs`
--

DROP TABLE IF EXISTS `champs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `champs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(35) NOT NULL DEFAULT '',
  `Hitpoints` float(5,2) NOT NULL DEFAULT '',
  `Hpinc` int(2) NOT NULL DEFAULT '',
  `Mana` float(5,2) NOT NULL DEFAULT '0',
  `Mpinc` int(2)) NOT NULL DEFAULT '0',
  `Attackdmg` float(5,3) NOT NULL DEFAULT '0',
  `ADinc` float(4,3) NOT NULL DEFAULT '0',
  `Attackspeed` float(4,3) NOT NULL DEFAULT '0',
  `Asinc` float(4,3) NOT NULL DEFAULT '0',
  `Armour` float(5,3) NOT NULL DEFAULT '0',
  `Arinc` float(3,2) NOT NULL DEFAULT '0',
  `Magicresist` float(3,1) NOT NULL DEFAULT '0',
  `Mrinc` float(3,2) NOT NULL DEFAULT '0',
  `Qbase` int(3) NOT NULL DEFAULT '0',
  `Qadscale` float(3,2)NOT NULL DEFAULT '0',
  `Qapscale` float(3,2) NOT NULL DEFAULT '0',
  `Qcd` int(2) NOT NULL DEFAULT '0',
  `Wbase` int(3) NOT NULL DEFAULT '0',
  `Wadscale` float(3,2) NOT NULL DEFAULT '0',
  `Wapscale` float(3,2) NOT NULL DEFAULT '0',
  `Wcd` int(2) NOT NULL DEFAULT '0',
  `Ebase` int(3) NOT NULL DEFAULT '0',
  `Eadscale` float(3,2) NOT NULL DEFAULT '0',
  `Eapscale` float(3,2) NOT NULL DEFAULT '0',
  `Ecd` int(2) NOT NULL DEFAULT '0',
  `Rbase` int(4) NOT NULL DEFAULT '0',
  `Radscale` float(3,2) NOT NULL DEFAULT '0',
  `Rapscale` float(3,2) NOT NULL DEFAULT '0',
  `Rcd` int(3) NOT NULL DEFAULT '0',

  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `champs`
--
-- ORDER BY:  `ID`

INSERT INTO `champs` VALUES (1,'Trynadamere',625.64,98,100,0,61.376,3.2,0.67,2.9,24.108,3.1,32.1,1.25,0,0,0,12,0,0,0,14,190,1.2,1,9,0,0,0,90);
INSERT INTO `champs` VALUES (1,'Amumu',625.64,98,100,0,53.384,4.8,0.638,2.19,23.544,3.3,32.1,1.25,280,0,0.7,9,84,0,0.2,1,175,0,0.5,6,350,0,0.8,110);
INSERT INTO `champs` VALUES (1,'Annie',511.68,76,334,50,50.41,2.625,0.579,1.36,12.99,4,30,0,220,0,0.8,4,250,0,0.85,8,60,0,0.2,10,425,0,0.8,80);


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-09-30 11:01:37
