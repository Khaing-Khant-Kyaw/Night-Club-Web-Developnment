-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: login
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `event_name` varchar(30) NOT NULL,
  `event_id` int NOT NULL,
  `date` date NOT NULL,
  `start_t` varchar(40) NOT NULL,
  `end_t` varchar(40) NOT NULL,
  `category` char(10) DEFAULT NULL,
  `fee` int DEFAULT NULL,
  `max_cap` int DEFAULT NULL,
  `detail` varchar(82) DEFAULT NULL,
  `artist_id` char(5) DEFAULT NULL,
  PRIMARY KEY (`date`,`start_t`,`end_t`),
  KEY `for_artist` (`artist_id`),
  CONSTRAINT `for_artist` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES ('Concert 5',12,'2023-01-10','18:30:00','21:30:00','Concert',15,500,'Music Performance by Artist 12','12'),('Workshop 4',13,'2023-02-14','17:30:00','20:30:00','Workshop',11,25,'Photography Workshop with Artist 13','13'),('Concert 6',15,'2023-04-22','18:30:00','21:30:00','Concert',20,600,'Live Music Concert by Artist 15','15'),('Workshop 5',17,'2023-05-30','20:00:00','23:00:00','Workshop',13,35,'Painting Workshop with Artist 17','17'),('Festival 2',9,'2023-06-28','17:30:00','20:30:00','Festival',22,1500,'Cultural Festival featuring Artist 9','9'),('Concert 4',10,'2023-07-02','20:00:00','23:00:00','Concert',29,700,'Live Music by Artist 10','10'),('Concert 1',1,'2023-09-01','18:00:00','21:00:00','Concert',26,1000,'Concert by Artist 1','1'),('Concert 2',4,'2023-09-12','17:00:00','20:00:00','Concert',21,800,'Live Concert with Artist 4','4'),('Workshop 2',5,'2023-09-15','18:30:00','21:30:00','Workshop',15,40,'Dance Workshop with Artist 5','5'),('Exhibition 1',6,'2023-09-20','19:00:00','22:00:00','Exhibition',6,100,'Art Exhibition by Artist 6','6'),('Concert 3',7,'2023-09-23','18:30:00','21:30:00','Concert',19,600,'Music Concert with Artist 7','7'),('Workshop 3',8,'2023-09-25','16:00:00','19:00:00','Workshop',12,30,'Writing Workshop with Artist 8','8'),('Chill with Dee!',21,'2023-10-02','9am','3pm','Poetry',21000,210,'Exciting','20'),('Festival 3',14,'2023-10-18','16:00:00','19:00:00','Festival',25,1200,'Art and Music Festival featuring Artist 14','14'),('Exhibition 3',16,'2023-10-26','19:00:00','22:00:00','Exhibition',7,70,'Art Showcase by Artist 16','16'),('Festival 4',18,'2023-11-03','18:30:00','21:30:00','Festival',19,800,'Live Music Performance by Artist 18','18'),('Concert 7',19,'2023-11-07','17:30:00','20:30:00','Festival',31,1800,'Cultural Festival featuring Artist 19','19'),('Exhibition 4',20,'2023-11-11','16:00:00','19:00:00','Exhibition',9,90,'Art Exhibition by Artist 20','20');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-01 18:06:19
