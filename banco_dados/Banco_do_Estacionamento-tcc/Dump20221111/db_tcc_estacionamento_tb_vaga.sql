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
-- Table structure for table `tb_vaga`
--

DROP TABLE IF EXISTS `tb_vaga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_vaga` (
  `cd_vaga` int NOT NULL,
  `cd_numero` int DEFAULT NULL,
  `cd_patio` int DEFAULT NULL,
  `ds_status` varchar(20) DEFAULT NULL,
  `cd_estacionamento` int DEFAULT NULL,
  PRIMARY KEY (`cd_vaga`),
  KEY `fk_patio` (`cd_patio`),
  KEY `fk_estacionamento` (`cd_estacionamento`),
  CONSTRAINT `fk_estacionamento` FOREIGN KEY (`cd_estacionamento`) REFERENCES `tb_estacionamento` (`cd_estacionamento`),
  CONSTRAINT `fk_patio` FOREIGN KEY (`cd_patio`) REFERENCES `tb_patio` (`cd_patio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_vaga`
--

LOCK TABLES `tb_vaga` WRITE;
/*!40000 ALTER TABLE `tb_vaga` DISABLE KEYS */;
INSERT INTO `tb_vaga` VALUES (1,11,1,'Em uso',1),(2,11,2,NULL,2),(3,11,2,'Em uso',3),(4,11,2,'Em uso',4),(5,11,1,NULL,5),(6,11,1,'Em uso',6),(7,11,1,'Em uso',7),(8,11,2,'Em uso',8),(9,11,2,'Em uso',9),(10,11,1,NULL,10),(11,11,1,'Em uso',11),(12,11,1,'Em uso',12),(13,11,2,NULL,13),(14,11,2,'Em uso',14),(15,11,2,'Em uso',15),(16,11,1,'Em uso',16),(17,11,1,NULL,17),(18,11,1,'Em uso',18),(19,11,2,'Em uso',19),(20,11,2,'Em uso',20);
/*!40000 ALTER TABLE `tb_vaga` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-11 23:04:31
