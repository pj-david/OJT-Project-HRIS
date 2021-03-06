-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: humanresourcesdb
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `bloodType` text,
  `licenseId` text,
  `phicId` text,
  `employeeId` bigint(5) NOT NULL AUTO_INCREMENT,
  `hdmfId` text,
  `sssId` text,
  `tinId` text,
  `firstname` text,
  `educationalAttainment` text,
  `middlename` text,
  `lastname` text,
  `contactNo` text,
  `address` text,
  `licenseExpiration` text,
  `civilStatus` text,
  `school` text,
  `license` text,
  `gender` text,
  `age` int(11) DEFAULT NULL,
  `birthdate` text,
  `position` text,
  `empStatus` text,
  `statusEndDate` text,
  `statusEvaluationDate` text,
  PRIMARY KEY (`employeeId`)
) ENGINE=MyISAM AUTO_INCREMENT=21502 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES ('B','','0425-0053-4219',30,'1211-5016-1964','34-5302010-0','475-687-374','Jogi Vivian','Bachelor of Science in Business Management','Palaganas','Antonio','09276751274','80 Senato Sarok, Camp 7, Baguio City','','S','Taguig City University, Taguig City','','F',23,'8-Apr-1994','Finance Assistant','Probationary','05-Jun-17','05-May-17'),('A-','','0402-5196-3934',40,'1211-3480-4891','01-2442581-7','472-409-937','Jonathan','Bachelor of Science in Business Administration Major in Human Resource Development Management','Blas','Arid','09268484618','#46 Camp 7, Agpaoa Drive, Baguio City','','S','Saint Louis University, Baguio City','','M',25,'14-Mar-1992','Administrative Assistant','Contractual','01-Jun-17','01-May-17'),('O','16013302009183','0405-0139-1362',27,'1210-9250-1868','01-1973154-5','282-898-246','Aries','Bachelor of Science in Electrical Engineering','Miguel','Bayeng','09258662604','FB-164 Tabangaoen Balili, La Trinidad, Benguet','15-Dec-21','S','Saint Louis University, Baguio City','RME','M',31,'13-Apr-1986','Senior Biomedical Technician','Regular',NULL,NULL),('O','16013302009184','0402-5032-5233',32,'1210-5897-7191','33-6200023-7','184-755-179','Mariano, Jr.','Bachelor of Science in Electronics and Communication Engineering','Bancifra','Bernabe','09083022690','38 Tabora Street, Lower Quirino Hill, Baguio City','15-Dec-21','M (3)','Saint Louis University, Baguio City','','M',42,'13-Oct-1974','Electronics Technician','Probationary','02-Jul-17','02-Jun-17'),('O','14010302000831','0805-0534-7645',5,'1020-0086-4503','02-1155269-3','184-755-179','Marcial','Bachelor of Science in Electronics and Communication Engineering','Bustarde','Cagunot','09258662608','B9 L25 Marco Polo Place Subdivision, Tagapo, City of Sta. Rosa, Laguna','14-Mar-2019','M (2)','University of Perpetual Help System Laguna','','M',44,'25-Oct-1972','Operations Manager','Regular',NULL,NULL),('O','','0805-0534-7645',21,'9120-81064-278','01-1725133-1','301-226-486','Jacquelyn','Bachelor of Science in Commerce Major in Financial Management','Hipona','Canapi','09331279287','24 Purok 4 Ambiong Road, Baguio City','','M (1)','Saint Louis University, Baguio City','','F',32,'7-Sep-1984','Finance Manager','Regular',NULL,NULL),('O+','','1202-5111-1109',43,'0031-9267-0411','06-1602942-0','200-770-472','Marry Anne','Bachelor of Science in Medical Technology/Nursing','Bering','Delos Reyes','09334580055','2312 Aznar Road, Pardo, Cebu City ','','M (1)','Southwestern University','','F',42,'27-Jan-1975','Sales Representative','Contractual',NULL,NULL),('','','04-025211958-4',39,'1211-5669-5797','34-5440296-3','480-364-082','Randolph','Diploma in Computer Graphics Programming NC IV','Julian','Dominguez','09358570170','01 Sto. Nino Street, San Carlos Heights, Irisan, Baguio City','','S','Informatics Institute','','M',25,'5-Jun-1991','Encoder','Contractual','01-Aug-17','01-Jul-17'),('O','','05-250793608-3',45,'','34-6394519-4','','Rodney','Computer Hardware Servicing NC II','Subagan','Dulay','09152222719','Poblacion, San Gabriel, La Union','','S','Lorma Colleges','','M',22,'23-Oct-1994','Encoder','Trainee',NULL,NULL),('AB','','04-050065426-2',42,'10167146906','01-1746197-2','945-355-107','Ronald','Bachelor of Science in Industrial Tecnology','Flores','Esperanza','09286931238','#45 Sapilang, Bacnotan La Union','','M (2)','Don Mariano Marcos Memorial State University','','M',31,'5-Oct-1985','Electronics Technician','Contractual',NULL,NULL),('','','0405-0163-5881',12,'1210-9070-3156','01-2250310-0','314-762-217','Loraine Faith','Bachelor of Science in Business Administration Major in Marketing Management','Valdez','Ferrer','09061155376','209 Bonifacio Street, Baguio City','','S','University of Baguio, Baguio City','','F',24,'1-Jun-1993','Sales Assistant','Regular',NULL,NULL),('AB','','0405-0109-0869',37,'1210-2450-5661','01-1944269-8','288-464-455','Ivy','Bachelor of Science in Psychology;Master in Human Resource Management','De Guzman','Gayon','09258662603','25 Km 5 Asin Road, Baguio City','','M (1)','University of the Cordilleras, Baguio City; Benguet State University','','F',31,'7-Jan-1986','HR Manager','Probationary',NULL,NULL),('O','','04-025186334-4',41,'1211-3766-1240','01-2362433-4','497-023-652','Daun Kenneth','Bachelor of Science in Office Administration','Paglinawan','Lanuza','09504579098','Magsaysay, Loakan, Baguio City','','S','Don Mariano Marcos Memorial State University','','F',23,'8-Oct-1993','Administrative Assistant','Contractual','22-Aug-17','22-Jul-17'),('A+','','0400-0012-1756',15,'1210-0485-2395','01-1145589-0','901-844-858','Samuel','Master of Arts in Teaching Physical Education','Lee','Lawana','09156355467','1 Rockville Monglo, Bayabas, Sablan, Benguet','','M (2)','University of the Cordilleras, Baguio City','LET','M',41,'12-Oct-1975','Quality Assurance Manager','Regular',NULL,NULL),('AB','',' 0705-0276-2301',38,'1210-5581-3844','02-1988490-7','270-522-934','Eugene Oliver','Bachelor of Science in Information Technology','Cuevas','Ordinario','09278707554','U-207 2/F Noble Home, Parisas Street, Camp 7, Baguio City','','M (2)','San Sebastian College - Recoletos, Cavite City','','M',38,'10-May-1979','Purchasing and Logistics Assistant','Contractual',NULL,NULL),('O+','','0505-0062-4342',3,'1070-0079-4751','01-1059189-4','930-918-472','Jocelyn','Bachelor of Science in Medical Technology','Ganaden','Punsalang','09258662606','B4 L3&4 Alno Sunflower Homes Subdivision, La Trinidad, Benguet','','M (4)','University of Baguio, Baguio City','','F',39,'5-Nov-1977','Corporate Secretary','Regular',NULL,NULL),('A','16013302003545','0805-1179-3401',28,'1211-1501-6183','04-2483195-2','478-649-127','Benjie','Biomedical Equipment Technology NCII','Santelices','Regalado','09184373033','B13 L28 Sampaguita Street, Buena Rosa 9 Brgy. Macabling, Sta. Rosa City, Laguna','19-Jun-2021','S','University of Perpetual Help System Laguna','','M',26,'19-Jul-1990','Biomedical Technician','Regular',NULL,NULL),('','','16-200464130-2',44,'1211-1860-7642','93-709201-3','486-437-127','Michelle Caren','Bachelor of Science in Eloctronics and Communication Engineering','Alarcon','Rejas','09075720579','Mangosteen St. Sto. Domingo II, B.O Pampanga, Sasa, Davao City','','S','University of Southeastern Philippines','Elec. Technician','F',28,'1-Sep-1988','Sales Representative','Contractual',NULL,NULL),('B+','16013302002525','0402-5196-6704',25,'1211-6248-6289','01-2498512-4','278-916-074','Richard','Diploma of Electronics and Communications Engineering','Depayso','Wagayan','09293373676','IA 68 Betag, La Trinidad, Benguet','29-Apr-2021','M (3)','New South Wales Technical and Further Education Commission Australia','','M',41,'26-Feb-1976','Biomedical Technician','Regular',NULL,NULL),('O','16013302002526','0402-5114-6863',11,'1211-2648-5950','01-2295236-6','429-123-022','Barry','Bachelor of Science in Nursing','Afadchay','Yag-as','09277083702','2F Enciso Apartment, Azucena Street, Naga City Subdivision, Naga City','29-Apr-2021','M (2)','New South Wales Technical and Further Education Commission Australia','RN','M',33,'26-Mar-1984','Regional Sales Manager','Regular',NULL,NULL),(NULL,NULL,NULL,46,NULL,NULL,NULL,'Kelvin',NULL,'Ledang','Pilingen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'02-Jul-17','02-Jun-17');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employmentcontracts`
--

DROP TABLE IF EXISTS `employmentcontracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employmentcontracts` (
  `employeeId` text,
  `firstContract_start` text,
  `firstContract_end` text,
  `secondContract_start` text,
  `secondContract_end` text,
  `thirdContract_start` text,
  `thirdContract_end` text,
  `fourthContract_start` text,
  `fourthContract_end` text,
  `fifthContract_start` text,
  `fifthContract_end` text,
  `empContNum` int(11) NOT NULL,
  `sixthContract_start` text,
  `sixthContract_end` text,
  PRIMARY KEY (`empContNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employmentcontracts`
--

LOCK TABLES `employmentcontracts` WRITE;
/*!40000 ALTER TABLE `employmentcontracts` DISABLE KEYS */;
INSERT INTO `employmentcontracts` VALUES ('38','16-Jan-2017','16-Feb-2017','17-Feb-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),('3','1-Oct-2012',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL),('28','5-Feb-2016','5-Mar-2016','5-Mar-2016','5-Apr-2016','12-Apr-2016','12-Jul-2016','2-May-2016','2-Aug-2016','3-Aug-2016','3-Feb-2017',3,'4-Feb-2017',NULL),('44','17-Apr-2017','17-Jun-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,NULL,NULL),('25','1-Feb-2016','1-Jul-2016','2-Jul-2016','2-Jan-2017','3-Jan-2017',NULL,NULL,NULL,NULL,NULL,5,NULL,NULL),('11','15-Sept-2014','20-Sep-2105','14-Dec-2015','13-May-2016','14-May-2016','14-Nov-2016','15-Nov-2016',NULL,NULL,NULL,6,NULL,NULL),('46','22-Jun-2016','22-Jul-2016',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,NULL,NULL),('30','3-Jun-2016','3-Jul-2016','4-Jul-2016','4-Dec-2016','5-Dec-2016','5-Jun-2017','6-Jun-2017',NULL,NULL,NULL,8,NULL,NULL),('40','1-Feb-2017','28-Feb-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,NULL,NULL),('27','19-Feb-2016','19-Mar-2016','21-Mar-2016','21-Apr-2016','22-Apr-2016','21-Jul-2016','22-Jul-2016','22-Sep-2016','23-Sep-2016','23-Mar-2017',10,'24-Mar-2017',NULL),('32','3-Jul-2016','3-Aug-2016',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,NULL,NULL),('5','1-Jun-2015',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12,NULL,NULL),('21','17-Aug-2015',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL),('43','17-Apr-2017','17-Jun-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14,NULL,NULL),('39','25-Jan-2017','28-Feb-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15,NULL,NULL),('45','26-Apr-2017','26-May-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16,NULL,NULL),('42','27-Mar-2017','27-Apr-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17,NULL,NULL),('12','15-Sep-2014',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,18,NULL,NULL),('37','17-Oct-2016','17-Mar-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,19,NULL,NULL),('41','21-Feb-2017','21-Mar-2017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,NULL,NULL),('15','2-Mar-2015',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,21,NULL,NULL);
/*!40000 ALTER TABLE `employmentcontracts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resigned-separated`
--

DROP TABLE IF EXISTS `resigned-separated`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resigned-separated` (
  `employeeId` int(11) NOT NULL,
  `fullName` text,
  `lastName` text,
  `firstName` text,
  `middleName` text,
  `position` text,
  `employeeStatus` text,
  `monthlySalary` text,
  `birthDate` text,
  `age` text,
  `civilStatus` text,
  `bloodType` text,
  `gender` text,
  `contactNumber` text,
  `address` text,
  `highestEducatonalAttainment` text,
  `school` text,
  `licenses` text,
  `ncIICertificateLicenseNumber` text,
  `sss` text,
  `phic` text,
  `hdmf` text,
  `tin` text,
  `dateHired` text,
  `separation_resignationDate` text,
  `contractMovement` text,
  PRIMARY KEY (`employeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resigned-separated`
--

LOCK TABLES `resigned-separated` WRITE;
/*!40000 ALTER TABLE `resigned-separated` DISABLE KEYS */;
/*!40000 ALTER TABLE `resigned-separated` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `employeeId` varchar(45) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','Josepablo','David','HR','pj','david',NULL,'1');
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

-- Dump completed on 2017-07-10 10:56:15
