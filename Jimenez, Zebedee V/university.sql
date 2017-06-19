CREATE DATABASE  IF NOT EXISTS `university` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `university`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: university
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `studentId` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  PRIMARY KEY (`studentId`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (101,'Juan','Dela Cruz','BSAc'),(102,'Peter','Jackson','BSBA'),(103,'James','Johnson','BA COM'),(105,'Edward','Chua','BA LS'),(106,'Alex','Smith','BSN'),(107,'James','Cameron','BMLS'),(108,'Steven','Spielberg','BSRT'),(109,'Francis','Coppola','BS Entrep'),(110,'Henry','Ford','BSCS'),(111,'Bruce','McLaren','BSIT'),(112,'Enzo','Ferrari','BSHTM HRRM'),(113,'Luke','Skywalker','BSCS'),(114,'Michael','Jordan','BSMA'),(115,'Tom','Hanks','BSAc'),(152,'','','BSME'),(153,'','','BS POLSCI'),(154,'','','BS POLSCI'),(155,'Bruce','Wayne','BSCS'),(156,'Bruce','Wayne','BSCS'),(157,'Diana','Prince','BSIT');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `studentId` varchar(45) NOT NULL,
  `classCode` varchar(45) NOT NULL,
  `subjectName` varchar(45) NOT NULL,
  `subjectId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`subjectId`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES ('101','9011','English',1),('102','9012','Geometry',2),('103','9013','Algebra',3),('104','9014','Fundamentals of Computers',4),('105','9014L','Fundamentals of Computers',5),('106','9015','Art',6),('107','9016','Biology',7),('108','9017','Physical Education 1',8),('109','9018','Statistics',9),('110','9019','Anatomy',10),('111','9020','Music',11),('112','9021','Ballistics',12),('113','9022','Culinary Fundamentals',13),('114','9023','World History',14),('115','9024','Filipino',15),('101','9021','Ballistics',16),('102','9017','Physical Education 1',17),('103','9018','Statistics',18),('104','9020','Music',19),('105','9012','Geometry',20),('106','9011','English',21),('107','9024','Filipino',22),('108','9019','Anatomy',23),('109','9014','Fundamentals of Computers',24),('110','9018','Statistics',25),('111','9022','Culinary Fundamentals',26),('112','9023','World History',27),('113','9014L','Fundamentals of Computers',28),('114','9016','Biology',29),('115','9015','Art',30),('','','Constitution',62),('','','Constitution',63),('12345','1234','ProgApps',64),('12345','1234','ProgApps',65),('555','444','Hello',66);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-08 10:40:26
