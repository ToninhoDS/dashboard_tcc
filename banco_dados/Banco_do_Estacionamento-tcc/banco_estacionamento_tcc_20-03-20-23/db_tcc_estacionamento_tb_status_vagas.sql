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
-- Table structure for table `tb_status_vagas`
--

DROP TABLE IF EXISTS `tb_status_vagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_status_vagas` (
  `cd_status_vagas` int NOT NULL AUTO_INCREMENT,
  `cd_numero_vaga` double DEFAULT NULL,
  `nm_nome` varchar(50) DEFAULT 'Cliente',
  `img_icon` varchar(10) DEFAULT NULL,
  `dt_entrada` time DEFAULT NULL,
  `sg_placa` varchar(15) DEFAULT NULL,
  `nm_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cd_status_vagas`),
  CONSTRAINT `tb_status_vagas_chk_1` CHECK ((`img_icon` in (_utf8mb4'carro',_utf8mb4'moto',_utf8mb4'bicicleta',_utf8mb4'patins',_utf8mb4'outros'))),
  CONSTRAINT `tb_status_vagas_chk_2` CHECK ((`nm_status` in (_utf8mb4'ocupado',_utf8mb4'livre',_utf8mb4'reserva')))
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_status_vagas`
--

LOCK TABLES `tb_status_vagas` WRITE;
/*!40000 ALTER TABLE `tb_status_vagas` DISABLE KEYS */;
INSERT INTO `tb_status_vagas` VALUES (1,1,'Antonio','carro','19:03:00','A45DCV','ocupado'),(2,7,'Leila','moto','19:03:00','SDE85','ocupado'),(3,5,'kaike','patins','18:03:00','DFF56','livre'),(4,10,'Carlos','outros','14:03:00','DF1G6','reserva'),(5,3,'Tonico','bicicleta','01:03:00','QW785D','reserva');
/*!40000 ALTER TABLE `tb_status_vagas` ENABLE KEYS */;
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
