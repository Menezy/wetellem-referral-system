# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: tellemdb
# Generation Time: 2018-05-14 06:07:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table trackref
# ------------------------------------------------------------

DROP TABLE IF EXISTS `trackref`;

CREATE TABLE `trackref` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `refID` varchar(20) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `dateJoined` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `trackref` WRITE;
/*!40000 ALTER TABLE `trackref` DISABLE KEYS */;

INSERT INTO `trackref` (`sn`, `refID`, `userID`, `dateJoined`)
VALUES
	(1,'',1,'2018:05:13 22:41:36pm'),
	(2,'',2,'2018:05:13 22:48:08pm');

/*!40000 ALTER TABLE `trackref` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `uname` varchar(15) DEFAULT NULL,
  `fullname` varchar(35) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pword` varchar(64) DEFAULT NULL,
  `refid` varchar(20) DEFAULT NULL,
  `refcount` int(255) DEFAULT '0',
  `phone` varchar(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `referrer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `uname`, `fullname`, `email`, `pword`, `refid`, `refcount`, `phone`, `img`, `gender`, `referrer`)
VALUES
	(1,'ccmelas','Chiemela Chinedum','melas.devsq@olotusquare.co','12345','9fwcv8ewv1q2puph',5,'08034503911',NULL,'Male',NULL),
	(2,'melas','Chiemela Chinedum','chiemelachinedum@gmail.com','12345','48aok3j9zmputlia',0,'08034503911',NULL,'Male',NULL),
	(7,'mekus','Chiemela Chinedum','chiemelachinedum@ymail.com','12345','un5qriwf02i1y444',0,'08034503914',NULL,'Male','9fwcv8ewv1q2puph');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
