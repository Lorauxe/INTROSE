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
-- Table structure for table `ay`
--

DROP TABLE IF EXISTS `ay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ay` (
  `ay_id` int(11) NOT NULL,
  `ay` varchar(45) NOT NULL,
  `term` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`ay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `ay_id` varchar(45) NOT NULL,
  `room1` varchar(6) DEFAULT NULL,
  `day1` varchar(9) NOT NULL,
  `s_time1` time NOT NULL,
  `e_time1` time NOT NULL,
  `room2` varchar(45) DEFAULT NULL,
  `day2` varchar(45) DEFAULT NULL,
  `s_time2` time DEFAULT NULL,
  `e_time2` time DEFAULT NULL,
  `room3` varchar(45) DEFAULT NULL,
  `day3` varchar(45) DEFAULT NULL,
  `s_time3` time DEFAULT NULL,
  `e_time3` time DEFAULT NULL,
  `room4` varchar(45) DEFAULT NULL,
  `day4` varchar(45) DEFAULT NULL,
  `s_time4` time DEFAULT NULL,
  `e_time4` time DEFAULT NULL,
  `room5` varchar(45) DEFAULT NULL,
  `day5` varchar(45) DEFAULT NULL,
  `s_time5` time DEFAULT NULL,
  `e_time5` time DEFAULT NULL,
  `room6` varchar(45) DEFAULT NULL,
  `day6` varchar(45) DEFAULT NULL,
  `s_time6` time DEFAULT NULL,
  `e_time6` time DEFAULT NULL,
  `studentPax` int(11) NOT NULL,
  `lec_hrs` decimal(10,0) NOT NULL,
  `lab_hrs` decimal(10,0) NOT NULL,
  `loadnature` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`classID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college` (
  `college_id` int(11) NOT NULL,
  `college_code` varchar(45) NOT NULL,
  `college_name` varchar(45) NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `departmentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `departmentID` int(11) NOT NULL,
  `department_name` varchar(45) NOT NULL,
  `college_id` varchar(45) NOT NULL,
  PRIMARY KEY (`departmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `rank` varchar(45) DEFAULT NULL,
  `department_id` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`faculty_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `makeup`
--

DROP TABLE IF EXISTS `makeup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `makeup` (
  `mkupid` int(11) NOT NULL AUTO_INCREMENT,
  `mdate` date NOT NULL,
  `mroom` varchar(10) DEFAULT NULL,
  `timestart` time NOT NULL,
  `timestop` time NOT NULL,
  `remarkid` varchar(2) NOT NULL,
  `date_filed` date NOT NULL,
  `date_encoded` date NOT NULL,
  `encoderID` int(11) NOT NULL,
  `checkerID` int(11) NOT NULL,
  `is_madeup` varchar(3) NOT NULL,
  PRIMARY KEY (`mkupid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `classID` int(11) NOT NULL,
  `date` date NOT NULL,
  `checker_id` varchar(45) NOT NULL,
  `remarks_id` varchar(45) DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL,
  `makeupid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `remarks`
--

DROP TABLE IF EXISTS `remarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `remarks` (
  `remarks_id` varchar(2) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`remarks_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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

-- Dump completed on 2016-12-03 18:51:41
