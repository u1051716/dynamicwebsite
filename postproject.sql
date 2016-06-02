/*
SQLyog Community Edition- MySQL GUI v8.2 
MySQL - 5.0.7-beta-nt : Database - postproject
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`postproject` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `postproject`;

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `phoneno` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `comment` varchar(255) default NULL,
  PRIMARY KEY  (`contactid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`contactid`,`name`,`phoneno`,`address`,`email`,`comment`) values (2,'aaa','1234567','indiaa','aaa@aa.com','its done');

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `postid` int(11) NOT NULL auto_increment,
  `postname` varchar(255) default NULL,
  `description` varchar(255) default NULL,
  `userid` int(11) default NULL,
  `imagename` varchar(255) default NULL,
  PRIMARY KEY  (`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`postid`,`postname`,`description`,`userid`,`imagename`) values (3,'Car for sale','Audi a13',1,NULL),(4,'admin post','posting',2,NULL),(5,'putting it','done',2,NULL),(6,'Car test','Testing',1,NULL),(8,'New image','testing image',1,'login view.png'),(9,'admin image test','testing of image',2,'1.jpg');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `registerid` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `phoneno` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `username` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `type` varchar(255) default NULL,
  PRIMARY KEY  (`registerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

insert  into `registration`(`registerid`,`name`,`phoneno`,`address`,`username`,`password`,`type`) values (1,'avinash','123456','india','abc','123','user'),(2,'avinash','12345678','india','admin','admin123','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
