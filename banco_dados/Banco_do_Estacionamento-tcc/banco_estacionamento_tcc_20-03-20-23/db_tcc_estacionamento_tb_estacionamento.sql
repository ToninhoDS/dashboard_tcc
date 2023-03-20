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
-- Table structure for table `tb_estacionamento`
--

DROP TABLE IF EXISTS `tb_estacionamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_estacionamento` (
  `cd_estacionamento` int NOT NULL AUTO_INCREMENT,
  `nm_estacionamento` varchar(100) DEFAULT NULL,
  `dt_entrada` date DEFAULT NULL,
  `dt_saida` date DEFAULT NULL,
  `cd_veiculo` int DEFAULT NULL,
  `cd_horario` int DEFAULT NULL,
  PRIMARY KEY (`cd_estacionamento`),
  KEY `cd_horario` (`cd_horario`),
  KEY `cd_veiculo` (`cd_veiculo`),
  CONSTRAINT `tb_estacionamento_ibfk_1` FOREIGN KEY (`cd_horario`) REFERENCES `tb_horario` (`cd_horario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_estacionamento_ibfk_2` FOREIGN KEY (`cd_veiculo`) REFERENCES `tb_veiculo` (`cd_veiculo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_estacionamento`
--

LOCK TABLES `tb_estacionamento` WRITE;
/*!40000 ALTER TABLE `tb_estacionamento` DISABLE KEYS */;
INSERT INTO `tb_estacionamento` VALUES (1,'Tonho Estacionamento','2022-05-10','2022-05-11',1,1),(2,'Tonho Estacionamento','2022-06-10','2022-06-12',2,2),(3,'Enzo Park','2022-06-15','2022-06-21',3,3),(4,'Enzo Park','2022-07-12','2022-07-13',4,4),(5,'Tonho Estacionamento','2022-06-10','2022-06-22',5,5),(6,'Enzo Park','2022-07-20','2022-07-21',6,6),(7,'Tonho Estacionamento','2022-05-10','2022-05-11',7,7),(8,'Enzo Park','2022-07-01','2022-07-03',8,8),(9,'Tonho Estacionamento','2022-05-30','2022-05-31',9,9),(10,'Tonho Estacionamento','2022-08-00','2022-08-02',10,10),(11,'Enzo Park','2022-06-22','2022-06-23',11,11),(12,'Enzo Park','2022-09-20','2022-09-21',12,12),(13,'Tonho Estacionamento','2022-05-10','2022-05-21',13,13),(14,'Tonho Estacionamento','2022-09-10','2022-09-11',14,14),(15,'Enzo Park','2022-06-25','2022-06-26',15,15),(16,'Enzo Park','2022-07-21','2022-07-26',16,16),(17,'Enzo Park','2022-08-01','2022-08-02',17,17),(18,'Enzo Park','2022-06-20','2022-06-29',18,18),(19,'Enzo Park','2022-07-23','2022-08-24',19,19),(20,'Enzo Park','2022-08-10','2022-08-15',20,20);
/*!40000 ALTER TABLE `tb_estacionamento` ENABLE KEYS */;
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
