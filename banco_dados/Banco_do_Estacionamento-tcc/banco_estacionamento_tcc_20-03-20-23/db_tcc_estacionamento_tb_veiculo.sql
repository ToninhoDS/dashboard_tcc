-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: db_tcc_estacionamento
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `tb_veiculo`
--

DROP TABLE IF EXISTS `tb_veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_veiculo` (
  `cd_veiculo` int NOT NULL AUTO_INCREMENT,
  `cd_placa` varchar(20) DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  `cd_cor` int DEFAULT NULL,
  `cd_modelo` int DEFAULT NULL,
  PRIMARY KEY (`cd_veiculo`),
  KEY `fk_cliente` (`cd_cliente`),
  KEY `fk_modelo` (`cd_modelo`),
  KEY `fk_cor` (`cd_cor`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cor` FOREIGN KEY (`cd_cor`) REFERENCES `tb_cor` (`cd_cor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_modelo` FOREIGN KEY (`cd_modelo`) REFERENCES `tb_modelo` (`cd_modelo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_veiculo`
--

LOCK TABLES `tb_veiculo` WRITE;
/*!40000 ALTER TABLE `tb_veiculo` DISABLE KEYS */;
INSERT INTO `tb_veiculo` VALUES (1,'11',1,1,1),(2,'22',2,2,2),(3,'33',3,3,3),(4,'44',4,4,4),(5,'55',5,5,5),(6,'66',6,6,6),(7,'77',7,7,7),(8,'88',8,8,8),(9,'99',9,9,9),(10,'101',10,10,10),(11,'111',11,2,11),(12,'122',12,5,12),(13,'133',13,9,13),(14,'144',14,7,14),(15,'155',15,8,15),(16,'166',16,6,16),(17,'177',17,7,17),(18,'188',18,8,18),(19,'199',19,9,19),(20,'202',20,2,20);
/*!40000 ALTER TABLE `tb_veiculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-20 19:08:08
