-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: edu_sys
-- ------------------------------------------------------
-- Server version	5.6.24-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `employee_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','123456','10000001');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `start_week` int(11) DEFAULT NULL,
  `end_week` int(11) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'大学C++',1,16,'14:00 - 16:00','教3-403',1),(2,'离散数学',1,16,'16:00 - 18:00','主北-303',1),(3,'高等数学',1,16,'14:00 - 16:00','教4-404',1),(4,'软件工程',1,16,'16:00 - 18:00','主南-443',1),(5,'军事理论',1,16,'16:00 - 18:00','主M-400',1),(6,'思修',1,16,'16:00 - 18:00','教3-403',1),(7,'算法导论',1,16,'8:00 - 10:00','教4-404',1),(8,'数据库',1,16,'8:00 - 10:00','F-117',1),(9,'Java',1,16,'16:00 - 18:00','F-117',1),(10,'系统分析',1,16,'8:00 - 10:00','B-233',1),(11,'软工过程',1,16,'16:00 - 18:00','教5-502',1),(12,'大学物理',1,16,'14:00 - 16:00','教4-404',1),(13,'概率论',1,16,'14:00 - 16:00','教5-502',1),(14,'线性代数',1,16,'8:00 - 10:00','B-233',1),(15,'数学建模',1,16,'16:00 - 18:00','主南-443',1),(16,'体育',1,16,'8:00 - 10:00','主M-400',1),(17,'软件工程过程',1,16,'8:00-11:00','主北-303',1);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_student`
--

DROP TABLE IF EXISTS `class_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_student` (
  `class_id` int(11) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`class_id`,`student_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `class_student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  CONSTRAINT `class_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_student`
--

LOCK TABLES `class_student` WRITE;
/*!40000 ALTER TABLE `class_student` DISABLE KEYS */;
INSERT INTO `class_student` VALUES (1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(17,2),(17,3),(8,4),(17,4),(17,5),(13,6),(17,6),(17,7),(12,8),(17,8),(17,9),(9,10),(17,10),(17,11),(7,12),(11,12),(17,12),(10,13),(17,13),(17,14),(17,15),(3,16),(5,16),(9,16),(8,17),(4,18),(2,19),(10,20),(3,21),(2,22),(8,25),(10,25),(12,25),(3,26),(9,26),(13,26),(7,27),(15,29),(5,30),(6,30),(7,30),(7,31),(10,31),(5,32);
/*!40000 ALTER TABLE `class_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_teacher`
--

DROP TABLE IF EXISTS `class_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_teacher` (
  `class_id` int(11) NOT NULL DEFAULT '0',
  `teacher_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`class_id`,`teacher_id`),
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `class_teacher_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  CONSTRAINT `class_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_teacher`
--

LOCK TABLES `class_teacher` WRITE;
/*!40000 ALTER TABLE `class_teacher` DISABLE KEYS */;
INSERT INTO `class_teacher` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(17,1),(3,2),(4,2),(5,3),(6,3),(7,4),(8,4),(9,5),(10,5),(11,6),(12,6),(13,7),(14,7),(15,8),(16,8);
/*!40000 ALTER TABLE `class_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (2,'Marry','123456','1321','女',2013,2),(3,'陈娟儿','123456','13212000','男',2013,1),(4,'陈日天','123456','13212001','中',2013,1),(5,'郑霸天','123456','13212002','中',2013,1),(6,'卫日天','123456','13212003','男',2013,1),(7,'王狗剩','123456','13212004','男',2013,1),(8,'楚美丽','123456','13212005','中',2013,1),(9,'韩爱国','123456','13212006','中',2013,1),(10,'王二蛋','123456','13212007','女',2013,1),(11,'蒋琪','123456','13212008','中',2013,1),(12,'孙爱国','123456','13212009','中',2013,1),(13,'楚狗剩','123456','13212010','男',2013,1),(14,'吴美丽','123456','13212011','中',2013,1),(15,'楚鲜花','123456','13212012','中',2013,1),(16,'韩霸天','123456','13212013','中',2013,1),(17,'楚琪','123456','13212014','中',2013,1),(18,'卫日天','123456','13212015','男',2013,1),(19,'沈鲜花','123456','13212016','女',2013,1),(20,'卫霸天','123456','13212017','男',2013,1),(21,'楚二狗','123456','13212018','中',2013,1),(22,'李爱国','123456','13212019','中',2013,1),(23,'郑二狗','123456','13212020','中',2013,1),(24,'陈日天','123456','13212021','中',2013,1),(25,'钱二蛋','123456','13212022','男',2013,1),(26,'孙霸天','123456','13212023','中',2013,1),(27,'吴琪','123456','13212024','中',2013,1),(28,'楚鲜花','123456','13212025','中',2013,1),(29,'杨日天','123456','13212026','男',2013,1),(30,'蒋娟儿','123456','13212027','男',2013,1),(31,'郑二狗','123456','13212028','女',2013,1),(32,'赵娟儿','123456','13212029','男',2013,1);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_work`
--

DROP TABLE IF EXISTS `student_work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_work` (
  `work_id` int(11) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(500) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`work_id`,`student_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `student_work_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `work` (`id`),
  CONSTRAINT `student_work_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_work`
--

LOCK TABLES `student_work` WRITE;
/*!40000 ALTER TABLE `student_work` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `talk`
--

DROP TABLE IF EXISTS `talk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `talk` (
  `class_id` int(11) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `talk`
--

LOCK TABLES `talk` WRITE;
/*!40000 ALTER TABLE `talk` DISABLE KEYS */;
INSERT INTO `talk` VALUES (17,'林老师:test','2016-07-08 16:11:23'),(17,'林老师:发放','2016-07-08 16:12:23');
/*!40000 ALTER TABLE `talk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `employee_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'林老师','000000','10000000'),(2,'钱老师','000000','10000001'),(3,'孙老师','000000','10000002'),(4,'李老师','000000','10000003'),(5,'周老师','000000','10000004'),(6,'吴老师','000000','10000005'),(7,'郑老师','000000','10000006'),(8,'王老师','000000','10000007');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  KEY `admin_id` (`admin_id`),
  CONSTRAINT `team_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  CONSTRAINT `team_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'日渐消瘦',8,10,15,1,NULL),(2,'沉迷学习',5,2,10,2,NULL),(3,'测试',NULL,NULL,10,NULL,NULL),(4,'哈哈哈',NULL,NULL,10,NULL,NULL),(5,'测试',2,17,10,2,2);
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_student`
--

DROP TABLE IF EXISTS `team_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_student` (
  `team_id` int(11) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL DEFAULT '0',
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`team_id`,`student_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `team_student_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  CONSTRAINT `team_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_student`
--

LOCK TABLES `team_student` WRITE;
/*!40000 ALTER TABLE `team_student` DISABLE KEYS */;
INSERT INTO `team_student` VALUES (1,2,1),(2,2,1),(5,2,1),(5,3,1),(5,5,2),(5,9,1);
/*!40000 ALTER TABLE `team_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_work`
--

DROP TABLE IF EXISTS `team_work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_work` (
  `work_id` int(11) NOT NULL DEFAULT '0',
  `team_id` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(500) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`work_id`,`team_id`),
  KEY `team_id` (`team_id`),
  CONSTRAINT `team_work_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `work` (`id`),
  CONSTRAINT `team_work_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_work`
--

LOCK TABLES `team_work` WRITE;
/*!40000 ALTER TABLE `team_work` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terms`
--

DROP TABLE IF EXISTS `terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terms`
--

LOCK TABLES `terms` WRITE;
/*!40000 ALTER TABLE `terms` DISABLE KEYS */;
INSERT INTO `terms` VALUES (1,'2015-2016学年秋季学期','2015-09-01','2016-01-20',1),(2,'2015-2016学年春季学期','2016-03-01','2016-07-15',2),(3,'2016-2017学年秋季学期','2016-09-01','2017-01-20',2),(4,'2016-2017学年春季学期','2016-03-01','2017-07-15',2);
/*!40000 ALTER TABLE `terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`),
  CONSTRAINT `work_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work`
--

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;
INSERT INTO `work` VALUES (1,'抄课本','抄十遍',3,1,NULL,NULL),(2,'测试','还是抄课本',1,1,'2016-07-05 16:11:20','2016-06-01 00:00:00'),(3,'哈哈哈','又是抄课本',1,1,'2016-07-05 16:11:20','2016-06-01 00:00:00'),(4,'test','抄课本100遍',8,1,'2016-07-05 16:11:20','2016-06-01 00:00:00'),(5,'测试','抄写软件工程过程课本100遍',17,1,'2016-07-05 16:11:20','2016-07-15 00:00:00'),(6,'这是团队作业','只有负责人能提交',17,2,'2016-07-05 16:11:20','2016-07-09 00:00:00');
/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_file`
--

DROP TABLE IF EXISTS `work_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `work_id` (`work_id`),
  KEY `FK_ID` (`class_id`),
  CONSTRAINT `FK_ID` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  CONSTRAINT `work_file_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  CONSTRAINT `work_file_ibfk_2` FOREIGN KEY (`work_id`) REFERENCES `work` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_file`
--

LOCK TABLES `work_file` WRITE;
/*!40000 ALTER TABLE `work_file` DISABLE KEYS */;
INSERT INTO `work_file` VALUES (1,2,'',5,'23333333333333333333',59,17);
/*!40000 ALTER TABLE `work_file` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-09 14:32:19
