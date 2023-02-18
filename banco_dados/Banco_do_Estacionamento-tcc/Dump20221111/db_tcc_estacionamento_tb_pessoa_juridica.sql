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
-- Table structure for table `tb_pessoa_juridica`
--

DROP TABLE IF EXISTS `tb_pessoa_juridica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pessoa_juridica` (
  `cd_pessoa_juridica` int NOT NULL,
  `cd_cnpj` varchar(20) DEFAULT NULL,
  `cd_bairro` int DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_juridica`),
  KEY `cd_cliente` (`cd_cliente`),
  CONSTRAINT `tb_pessoa_juridica_ibfk_1` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_juridica`
--

LOCK TABLES `tb_pessoa_juridica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_juridica` DISABLE KEYS */;
INSERT INTO `tb_pessoa_juridica` VALUES (1,NULL,1,2888),(2,NULL,2,2930),(3,NULL,3,1383),(4,'42.511.777/0001-60',4,3344),(5,NULL,5,1858),(6,'59.067.078/0001-76',6,3172),(7,NULL,7,3532),(8,'43.861.452/0001-70',8,1531),(9,'37.962.613/0001-10',9,3893),(10,'65.254.503/0001-39',10,2727),(11,NULL,11,3214),(12,'31.492.526/0001-60',12,1855),(13,NULL,13,2615),(14,NULL,14,3684),(15,NULL,15,1056),(16,'72.181.135/0001-01',16,1229),(17,'36.062.069/0001-97',17,3407),(18,'01.695.631/0001-35',18,3203),(19,NULL,19,1640),(20,NULL,20,2220);
/*!40000 ALTER TABLE `tb_pessoa_juridica` ENABLE KEYS */;
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
