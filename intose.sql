CREATE DATABASE  IF NOT EXISTS `attendance` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `attendance`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: attendance
-- ------------------------------------------------------
-- Server version	5.7.10

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
-- Table structure for table `checker`
--

DROP TABLE IF EXISTS `checker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checker` (
  `checker_id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) NOT NULL,
  `email_add` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`checker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checker`
--

LOCK TABLES `checker` WRITE;
/*!40000 ALTER TABLE `checker` DISABLE KEYS */;
INSERT INTO `checker` VALUES (1,'Mama','Poko','Yeah','mpy@dlsu.edu.ph','mpy'),(2,'Mimi','Peni','Baba','mpb@dlsu.edu.ph','mpb');
/*!40000 ALTER TABLE `checker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `classID` int(11) NOT NULL,
  `section_id` varchar(5) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `timestart` time NOT NULL,
  `timestop` time NOT NULL,
  `day` varchar(9) NOT NULL,
  `room` varchar(6) DEFAULT NULL,
  `year` varchar(12) NOT NULL,
  `Term` varchar(6) NOT NULL,
  `studentPax` int(11) NOT NULL,
  `lec_hrs` decimal(10,0) NOT NULL,
  `lab_hrs` decimal(10,0) NOT NULL,
  `loadnature` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`classID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (0,'A11','COMALGE',2,'09:00:00','12:00:00','T','A201','2016 - 2017','1',45,3,0,'Teaching - UG',NULL),(1,'A53','COMPRO2',3,'09:15:00','11:00:00','W','G303A','2016 - 2017','1',25,0,2,'Teaching - UG',NULL),(2,'L55','LASARE2',4,'12:45:00','02:15:00','TH','MM202','2015 - 2016','3',30,2,0,'Teaching - UG',NULL),(3,'S11','COMALGE',1,'09:00:00','12:00:00','T','G203','2016 - 2017','1',40,3,0,'Teaching - UG',NULL),(4,'S18','OBJECTP',8,'09:15:00','10:45:00','MW','G301','2016 - 2017','1',30,0,2,'Teaching - UG',NULL),(5,'S22','COMPRO2',2,'07:30:00','09:00:00','TH','G302A','2016 - 2017','1',25,0,2,'Teaching - UG',NULL);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `course_code` varchar(7) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `student_units` int(11) NOT NULL,
  `faculty_units` int(11) NOT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES ('COMALGE','Computer Algebra',2,1),('COMORGA','Computer Organization',3,2),('COMPASM','Computer Architechture Series 1',3,2),('COMPRO2','Computer Programming 2',3,2),('DISCTRU','Discrete Mathematics',2,3),('ELECDSN','Electronic Design',3,1),('ENGLRES','English and Research',3,1),('INTROSE','Introduction to Software Engineering',3,1),('LASARE2','Lasallian Recollection 2',0,1),('OBJECTP','Object Oriented Programming',3,1),('PERSEF1','Personal Self 1',0,2),('SOCTEC2','Society and Technology 2',3,1);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty` (
  `faculty_id` decimal(10,0) unsigned NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rank` varchar(45) NOT NULL,
  PRIMARY KEY (`faculty_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'Beep','Boop','Bop','bbb@mail.com','A'),(2,'Betty','Ban','Apple','bba@mail.com','C'),(3,'Sans','Courel','Glue','scg@mail.com','D'),(4,'Memery','Canban','Red','mcr@mail.com','AAA'),(5,'Sudan','Holm','Stock','shs@mail.com','A'),(6,'Durian','Orange','Calamnsi','doc@mail.com','A'),(7,'Social','Society','Science','sss@mail.com','D'),(8,'Duby','Ruby','Scuby','drs@mail.com','B'),(9,'Secni','Blue','Gold','sbg@mail.com','C'),(10,'Plain','Love','Day','pld@mail.com','AAA');
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `record_id` decimal(10,0) NOT NULL,
  `classID` int(11) NOT NULL,
  `date` date NOT NULL,
  `checker_id` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES (1,1,'2016-10-20','EDS','A',NULL),(2,2,'2016-10-18','ERF','P',NULL),(3,2,'2016-10-16','QWE','A',NULL),(4,3,'2016-10-22','EDS','ED',NULL),(5,2,'2016-10-30','QWE','A',NULL);
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'attendance'
--

--
-- Dumping routines for database 'attendance'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-09 22:01:27
