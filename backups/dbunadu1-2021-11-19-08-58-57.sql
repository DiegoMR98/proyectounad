-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbunadu1
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

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
-- Table structure for table `tabla31`
--

DROP TABLE IF EXISTS `tabla31`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabla31` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nom_producto` varchar(30) NOT NULL,
  `marca_producto` varchar(30) NOT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4017 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabla31`
--

LOCK TABLES `tabla31` WRITE;
/*!40000 ALTER TABLE `tabla31` DISABLE KEYS */;
INSERT INTO `tabla31` VALUES (1,' Mouse Inalámbrico ',' HP',32000,10),(401,' Mouse Uriel',' HP',32000,10),(402,'Teclado','Genius',34000,2),(403,'Impresora','Epson ',543000,10),(404,'Disco Duro','Toshiba',350000,3),(406,'Celular','Samsung',1300000,2),(407,'Teclado','HP',55000,3),(4011,'Video Beam','HP',2600000,5),(4013,'Impresora','HP',3500000,2),(4014,'Impresora','Toshiba',350000,2),(4015,'Gabinete','Asus',10000000,5),(4016,'Memoria Ram','AMD',300000,2);
/*!40000 ALTER TABLE `tabla31` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-19  8:58:57
