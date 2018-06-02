# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.1.127 (MySQL 5.5.29)
# Database: fat_bastard
# Generation Time: 2015-02-25 14:40:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table user_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_details`;

CREATE TABLE `user_details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(99) DEFAULT NULL,
  `sname` varchar(99) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `b_year` int(11) DEFAULT NULL,
  `b_month` int(11) DEFAULT NULL,
  `b_day` int(11) DEFAULT NULL,
  `province` varchar(99) DEFAULT NULL,
  `e_updates` int(11) DEFAULT NULL,
  `m_updates` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;

INSERT INTO `user_details` (`id`, `fname`, `sname`, `email`, `contact`, `b_year`, `b_month`, `b_day`, `province`, `e_updates`, `m_updates`)
VALUES
	(36,'','','',0,0,0,0,'',0,0),
	(37,'','','',0,0,0,0,'',0,0),
	(38,'seg','srgh','sreh@dsfhg',0,1982,9,10,'Kwazulu-Natal',0,0),
	(39,'seg','srgh','sreh@dsfhg',1234567890,1982,9,10,'Kwazulu-Natal',1,0),
	(40,'','','',0,0,0,0,'',0,0),
	(41,'ewg','ergh','sg@dfh',1234567890,1926,12,8,'Western Cape',0,1);

/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
