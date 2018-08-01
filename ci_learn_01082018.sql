-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: ci-login-registration
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `expense_category`
--

DROP TABLE IF EXISTS `expense_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_category` (
  `expense_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_category_name` varchar(255) NOT NULL,
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`expense_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_category`
--

LOCK TABLES `expense_category` WRITE;
/*!40000 ALTER TABLE `expense_category` DISABLE KEYS */;
INSERT INTO `expense_category` VALUES (1,'Grossary','0'),(2,'Milk Products','0'),(3,'Fruits','0'),(4,'Vegitables','0'),(5,'Outside Parties','0'),(6,'Others','0');
/*!40000 ALTER TABLE `expense_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense_detail`
--

DROP TABLE IF EXISTS `expense_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_detail` (
  `expense_id` int(19) NOT NULL AUTO_INCREMENT,
  `expense_date` date NOT NULL,
  `expense_category` varchar(100) NOT NULL,
  `expense_amount` int(10) NOT NULL,
  `expense_by` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `createddate` datetime NOT NULL,
  `deleted` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_detail`
--

LOCK TABLES `expense_detail` WRITE;
/*!40000 ALTER TABLE `expense_detail` DISABLE KEYS */;
INSERT INTO `expense_detail` VALUES (1,'2018-07-28','1',800,'4','Ashirwad aata 10kg, arhar daal 1kg, sarso oil 2 ltr, turmric, coriendar powder, besan, face wash, toothpaste, washing powder.','2018-07-30 16:25:15','0'),(2,'2018-07-31','2',15,'5','1 pkt curd.              ','2018-08-01 11:52:42','0'),(3,'2018-08-01','1',1600,'4','                          xyz      ','2018-08-01 12:10:33','0');
/*!40000 ALTER TABLE `expense_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `is_admin` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'mjeetit','mjeetit@gmail.com','e10adc3949ba59abbe56e057f20f883e',30,88674795,'1','0'),(2,'jittu','jitendermaithani5@gmail.com','e10adc3949ba59abbe56e057f20f883e',25,2147483647,'0','0'),(3,'aadi','abc@gmail.com','e10adc3949ba59abbe56e057f20f883e',15,1111111111,'0','1'),(4,'Kamal','kk@gmail.com','e10adc3949ba59abbe56e057f20f883e',13,2147483647,'1','0'),(5,'jeet','jeet@gmail.com','e10adc3949ba59abbe56e057f20f883e',28,2147483647,'0','0'),(6,'anshu','anshu@gmail.com','e10adc3949ba59abbe56e057f20f883e',3,2147483647,'0','1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-01 13:54:35
