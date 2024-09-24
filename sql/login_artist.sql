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
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artist` (
  `artist_id` char(5) NOT NULL,
  `name` char(30) NOT NULL,
  `bio` varchar(60) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `user_fb` varchar(80) NOT NULL,
  `user_twt` varchar(80) DEFAULT NULL,
  `user_insta` varchar(80) DEFAULT NULL,
  `pr_img` varchar(200) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artist`
--

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` VALUES ('1','John Doe','Bio for John Doe','Band A','fb_johndoe','twt_johndoe','insta_johndoe','http://localhost/cw/admin/artist/thumbnail/artist1.jpg'),('10','Isabella Johnson','Bio for Isabella Johnson','Solo Artist','fb_isabellajohnson','twt_isabellajohnson','insta_isabellajohnson','http://localhost/cw/admin/artist/thumbnail/artist10.jpg'),('11','Noah Rodriguez','Bio for Noah Rodriguez','Music Group','fb_noahrodriguez','twt_noahrodriguez','insta_noahrodriguez','http://localhost/cw/admin/artist/thumbnail/artist11.jpg'),('12','Emma Moore','Bio for Emma Moore','Band A','fb_emmamoore','twt_emmamoore','insta_emmamoore','http://localhost/cw/admin/artist/thumbnail/artist12.jpg'),('13','Ava Jackson','Bio for Ava Jackson','Band C','fb_avajackson','twt_avajackson','insta_avajackson','http://localhost/cw/admin/artist/thumbnail/artist13.jpg'),('14','Mason Wilson','Bio for Mason Wilson','Solo Artist','fb_masonwilson','twt_masonwilson','insta_masonwilson','http://localhost/cw/admin/artist/thumbnail/artist14.jpg'),('15','Charlotte Lee','Bio for Charlotte Lee','Music Group','fb_charlottelee','twt_charlottelee','insta_charlottelee','http://localhost/cw/admin/artist/thumbnail/artist15.jpg'),('16','Liam Brown','Bio for Liam Brown','Band B','fb_liambrown','twt_liambrown','insta_liambrown','http://localhost/cw/admin/artist/thumbnail/artist16.jpg'),('17','Amelia Harris','Bio for Amelia Harris','Band A','fb_ameliaharris','twt_ameliaharris','insta_ameliaharris','http://localhost/cw/admin/artist/thumbnail/artist17.jpg'),('18','Ethan Clark','Bio for Ethan Clark','Solo Artist','fb_ethanclark','twt_ethanclark','insta_ethanclark','http://localhost/cw/admin/artist/thumbnail/artist18.jpg'),('19','Oliver Lewis','Bio for Oliver Lewis','Music Group','fb_oliverlewis','twt_oliverlewis','insta_oliverlewis','http://localhost/cw/admin/artist/thumbnail/artist19.jpg'),('2','Jane Smith','Bio for Jane Smith','Band B','fb_janesmith','twt_janesmith','insta_janesmith','http://localhost/cw/admin/artist/thumbnail/artist2.jpg'),('20','Mia Walker','Bio for Mia Walker','Band C','fb_miawalker','twt_miawalker','insta_miawalker','http://localhost/cw/admin/artist/thumbnail/artist20.jpg'),('21','theDoor','The Door','solo','door_fb','door_twt','door_insta','http://localhost/cw/admin/artist/thumbnail/artist1.jpg'),('22','theCar','thecar','see','car','car','car','car'),('3','Michael Johnson','Bio for Michael Johnson','Solo Artist','fb_michaeljohnson','twt_michaeljohnson','insta_michaeljohnson','http://localhost/cw/admin/artist/thumbnail/artist3.jpg'),('30','theCar','aa','aa','aa','aa','aa','http://localhost/cw/admin/artist/thumbnail/artist1.jpg'),('4','Emily Brown','Bio for Emily Brown','Music Group','fb_emilybrown','twt_emilybrown','insta_emilybrown','http://localhost/cw/admin/artist/thumbnail/artist4.jpg'),('5','William Davis','Bio for William Davis','Band C','fb_williamdavis','twt_williamdavis','insta_williamdavis','http://localhost/cw/admin/artist/thumbnail/artist5.jpg'),('6','Olivia Taylor','Bio for Olivia Taylor','Band A','fb_oliviataylor','twt_oliviataylor','insta_oliviataylor','http://localhost/cw/admin/artist/thumbnail/artist6.jpg'),('7','James Anderson','Bio for James Anderson','Solo Artist','fb_jamesanderson','twt_jamesanderson','insta_jamesanderson','http://localhost/cw/admin/artist/thumbnail/artist7.jpg'),('8','Sophia White','Bio for Sophia White','Music Group','fb_sophiawhite','twt_sophiawhite','insta_sophiawhite','http://localhost/cw/admin/artist/thumbnail/artist8.jpg'),('9','Liam Martinez','Bio for Liam Martinez','Band B','fb_liammartinez','twt_liammartinez','insta_liammartinez','http://localhost/cw/admin/artist/thumbnail/artist9.jpg');
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
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
