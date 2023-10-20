-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mvc
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL AUTO_INCREMENT,
  `title_movie` varchar(255) NOT NULL,
  `producer_movie` varchar(255) NOT NULL,
  `synopsis_movie` text DEFAULT NULL,
  `theme_movie` varchar(255) DEFAULT NULL,
  `scriptWriter_movie` varchar(255) DEFAULT NULL,
  `companyProduction_movie` varchar(255) DEFAULT NULL,
  `yearProduction_movie` int(11) DEFAULT NULL,
  `thumbnail_movie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_movie`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES (3,'The Dark Knight','Christopher Nolan','When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.','Action','Christopher Nolan','Warner Bros.',2008,'pulp.jpg'),(4,'Pulp Fiction','Quentin Tarantino','The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption. test','Crime','Quentin Tarantino','Miramax Films',1994,'pulp.jpg'),(5,'Forrest Gump','Robert Zemeckis','The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with an IQ of 75.','Drama','Winston Groom','Paramount Pictures',1994,'pulp.jpg'),(6,'Inception','Christopher Nolan','Dom Cobb est un voleur expérimenté, le meilleur dans l\'art dangereux de l\'extraction : sa spécialité consiste à s\'approprier les secrets les plus précieux d\'un individu, enfouis au plus profond de son subconscient, pendant qu\'il rêve et que son esprit est particulièrement vulnérable.','Science-Fiction','Christopher Nolan','Warner Bros. Pictures',2010,'pulp.jpg'),(7,'Interstellar','Christopher Nolan','Le film raconte les aventures d\'un groupe d\'explorateurs qui utilisent une faille récemment découverte dans l\'espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.','Science-Fiction','Christopher Nolan','Warner Bros. Pictures',2014,'pulp.jpg'),(8,'Gladiator','Ridley Scott','Le général romain Maximus est le plus fidèle soutien de l\'empereur Marc Aurèle, qu\'il a conduit de vict','Action','David Franzoni','DreamWorks Pictures',2000,'pulp.jpg'),(12,'test','test','The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption. test','test','test','test',1999,'bomb.png');
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(255) DEFAULT NULL,
  `password_user` varchar(255) DEFAULT NULL,
  `yearCreation_user` date DEFAULT NULL,
  `username_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (35,'quentin@quentin','$2y$10$uuR5Ker5PAfkXzI.F/o72.swznwD8nXuC41u9Qp71xy81YFLwkbs6','2023-10-20','quentin'),(36,'quentin@quentin','$2y$10$XhemVdueJqbOnfIMR.QYbeMK08yHGCpklaLO8BI54LaA2pq4crxGK','2023-10-20','quentin'),(37,'quentin@quentin','$2y$10$d5VcGo3vdCDgISJ6K7LvBOlZlOYBQvY4zyCiE33Lg9dVM1699x00W','2023-10-20','quentin');
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

-- Dump completed on 2023-10-20 23:37:49
