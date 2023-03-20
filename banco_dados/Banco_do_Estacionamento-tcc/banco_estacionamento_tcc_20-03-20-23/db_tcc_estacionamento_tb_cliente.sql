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
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente` (
  `cd_cliente` int NOT NULL AUTO_INCREMENT,
  `cd_email_cliente` varchar(45) DEFAULT NULL,
  `cd_senha_cliente` varchar(20) DEFAULT NULL,
  `cd_login` int DEFAULT NULL,
  `nm_cliente` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`),
  KEY `cd_login` (`cd_login`),
  CONSTRAINT `tb_cliente_ibfk_1` FOREIGN KEY (`cd_login`) REFERENCES `tb_login` (`cd_login`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1,'julio-pereira88@simoesmendonca.adv.br','HA0bRoSHGs',1,'Julio Thiago Pereira'),(2,'francisco_bernardes@petrobrais.com.br','tpRjDeDiSI',2,'Francisco Caleb Vitor Bernardes'),(3,'rebeca_silveira@wwlimpador.com.br','66kt9COrDu',3,'Rebeca Sophie Silveira'),(4,'enrico_martins@live.com.pt','EMOXEdB81Y',4,'Enrico Bento Tiago Martins'),(5,'laviniamarciarocha@pisbrasil.com.br','eBkzc3zruE',5,'Lavínia Márcia Rocha'),(6,'eliane_jennifer_dacruz@damha.com.br','XIXaXAdkgx',6,'Eliane Jennifer da Cruz'),(7,'elisa_malu_rodrigues@moyageorges.com.br','B9ifWchxsJ',7,'Elisa Malu Nair Rodrigues'),(8,'henriqueerickmelo@wredenborg.se','dw4d4uicW3',8,'Henrique Erick Melo'),(9,'giovanni_darosa@kof.com.mx','hGKoIJAPcI',9,'Giovanni Antonio Luís da Rosa'),(10,'rebeca_agatha_viana@tanby.com.br','7wqU0tHtEu',10,'Rebeca Agatha Viana'),(11,'raimunda-aparicio70@qmagico.com.br','fL58W9J7Yi',11,'Raimunda Analu Aparício'),(12,'mirellavanessadacosta@live.se','bLzkcIiz8l',12,'Mirella Vanessa Alessandra da Costa'),(13,'noahjuliocortereal@santander.com.br','tk5cQaf89N',13,'Noah Julio Thomas Corte Real'),(14,'larissa-campos96@genesyslab.com','AdsBFGGGT2',14,'Larissa Marlene Josefa Campos'),(15,'marcio.henry.ribeiro@oi15.com.br','TOOaG6ZrGa',15,'Márcio Henry Ruan Ribeiro'),(16,'ruan_dasilva@stembalagens.com.br','Cz3Jt7lWTq',16,'Ruan Murilo da Silva\"'),(17,'vanessa-lima80@2014fwcao.com','j4G4p7PckW',17,'Vanessa Luna Lima'),(18,'lavinia.andreia.almada@yahoo.com.br','r2BiF1Im9D',18,'Lavínia Andreia Almada'),(19,'leandro_emanuel_peixoto@piemme.com.br','ZXmAHxBKF3',19,'Leandro Emanuel Cláudio Peixoto'),(20,'emanuelly_sara_barbosa@tanet.com.br','hYYjbWOOcf',20,'Emanuelly Sara Tânia Barbosa');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
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
