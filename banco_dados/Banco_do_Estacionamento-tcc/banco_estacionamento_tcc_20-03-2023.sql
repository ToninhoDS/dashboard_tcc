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
-- Table structure for table `tb_bairro`
--

DROP TABLE IF EXISTS `tb_bairro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_bairro` (
  `cd_bairro` int NOT NULL AUTO_INCREMENT,
  `nm_bairro` varchar(45) DEFAULT NULL,
  `cd_cidade` int DEFAULT NULL,
  PRIMARY KEY (`cd_bairro`),
  KEY `cd_cidade` (`cd_cidade`),
  CONSTRAINT `tb_bairro_ibfk_1` FOREIGN KEY (`cd_cidade`) REFERENCES `tb_cidade` (`cd_cidade`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bairro`
--

LOCK TABLES `tb_bairro` WRITE;
/*!40000 ALTER TABLE `tb_bairro` DISABLE KEYS */;
INSERT INTO `tb_bairro` VALUES (1,'Jardim Brasília',1),(2,'Riacho Fundo II',2),(3,'Aeroporto',3),(4,'Novo Aleixo',4),(5,'Conjunto Habitacional Antônio Pedro Ortolan',5),(6,'Loteamento Joafra',6),(7,'João XXIII',7),(8,'Jardim São Conrado',8),(9,'Tapanã (Icoaraci)',9),(10,'Setor Sul (Gama)',10),(11,'Santo Aleixo',11),(12,'Colônia Dona Luíza',12),(13,'Mandacaru',13),(14,'Village do Sol',14),(15,'Jardim Floresta',15),(16,'Jurunas',16),(17,'Nossa Senhora Aparecida',17),(18,'Alto da Rua XV',18),(19,'Vila Xavier (Vila Xavier)',19),(20,'Cidade Seródio',20);
/*!40000 ALTER TABLE `tb_bairro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bike_outros`
--

DROP TABLE IF EXISTS `tb_bike_outros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_bike_outros` (
  `cd_bike_outros` int NOT NULL AUTO_INCREMENT,
  `cd_transporte` varchar(50) DEFAULT NULL,
  `cd_detalhes` varchar(150) DEFAULT NULL,
  `cd_nome` varchar(100) DEFAULT NULL,
  `cd_observacao` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`cd_bike_outros`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bike_outros`
--

LOCK TABLES `tb_bike_outros` WRITE;
/*!40000 ALTER TABLE `tb_bike_outros` DISABLE KEYS */;
INSERT INTO `tb_bike_outros` VALUES (1,'bike','cor rosa','ALAN',NULL),(2,'patins','esta sem roda','CARLOS',NULL),(3,'chinelo','com prego','LORENA',NULL),(4,'pop','pneu careca','MAIKEN','Roubada');
/*!40000 ALTER TABLE `tb_bike_outros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cidade`
--

DROP TABLE IF EXISTS `tb_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cidade` (
  `cd_cidade` int NOT NULL AUTO_INCREMENT,
  `nm_cidade` varchar(45) DEFAULT NULL,
  `cd_uf` int DEFAULT NULL,
  PRIMARY KEY (`cd_cidade`),
  KEY `cd_uf` (`cd_uf`),
  CONSTRAINT `tb_cidade_ibfk_1` FOREIGN KEY (`cd_uf`) REFERENCES `tb_uf` (`cd_uf`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cidade`
--

LOCK TABLES `tb_cidade` WRITE;
/*!40000 ALTER TABLE `tb_cidade` DISABLE KEYS */;
INSERT INTO `tb_cidade` VALUES (1,'Rondonópolis',1),(2,'Brasília',2),(3,'Aracaju',3),(4,'Manaus',4),(5,'Sertãozinho',5),(6,'Rio Branco',6),(7,'Parnaíba',7),(8,'Campo Grande',8),(9,'Belém',9),(10,'Brasília',10),(11,'Jaboatão dos Guararapes',11),(12,'Ponta Grossa',12),(13,'João Pessoa',13),(14,'Cacoal',14),(15,'Boa Vista',15),(16,'Belém',16),(17,'Barbacena',17),(18,'Curitiba',18),(19,'Araraquara',19),(20,'Guarulhos',20);
/*!40000 ALTER TABLE `tb_cidade` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_cor`
--

DROP TABLE IF EXISTS `tb_cor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cor` (
  `cd_cor` int NOT NULL AUTO_INCREMENT,
  `nm_cor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_cor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cor`
--

LOCK TABLES `tb_cor` WRITE;
/*!40000 ALTER TABLE `tb_cor` DISABLE KEYS */;
INSERT INTO `tb_cor` VALUES (1,'Branco'),(2,'Cinza'),(3,'Preto'),(4,'Prata'),(5,'Azul'),(6,'Vermelho'),(7,'Marrom/Bege'),(8,'Verde'),(9,'Amarelo'),(10,'Outros');
/*!40000 ALTER TABLE `tb_cor` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_horario`
--

DROP TABLE IF EXISTS `tb_horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_horario` (
  `cd_horario` int NOT NULL AUTO_INCREMENT,
  `hr_entrada` time DEFAULT NULL,
  `hr_saida` time DEFAULT NULL,
  PRIMARY KEY (`cd_horario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_horario`
--

LOCK TABLES `tb_horario` WRITE;
/*!40000 ALTER TABLE `tb_horario` DISABLE KEYS */;
INSERT INTO `tb_horario` VALUES (1,'13:30:00','15:30:00'),(2,'12:00:00','13:00:00'),(3,'12:00:00','13:40:00'),(4,'12:00:00','12:30:00'),(5,'12:00:00','14:30:00'),(6,'11:00:00','12:00:00'),(7,'11:30:00','13:40:00'),(8,'12:30:00','15:30:00'),(9,'09:00:00','13:00:00'),(10,'11:40:00','12:00:00'),(11,'12:50:00','16:00:00'),(12,'13:30:00','20:00:00'),(13,'13:00:00','21:00:00'),(14,'08:00:00','18:00:00'),(15,'18:00:00','21:00:00'),(16,'18:30:00','19:00:00'),(17,'18:40:00','22:00:00'),(18,'18:00:00','23:00:00'),(19,'19:00:00','23:00:00'),(20,'19:30:00','22:00:00');
/*!40000 ALTER TABLE `tb_horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_login` (
  `cd_login` int NOT NULL AUTO_INCREMENT,
  `cd_email_login` varchar(45) DEFAULT NULL,
  `cd_senha_login` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cd_login`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login`
--

LOCK TABLES `tb_login` WRITE;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
INSERT INTO `tb_login` VALUES (1,'julio-pereira88@simoesmendonca.adv.br','HA0bRoSHGs'),(2,'francisco_bernardes@petrobrais.com.br','tpRjDeDiSI'),(3,'rebeca_silveira@wwlimpador.com.br','66kt9COrDu'),(4,'enrico_martins@live.com.pt','EMOXEdB81Y'),(5,'laviniamarciarocha@pisbrasil.com.br','eBkzc3zruE'),(6,'eliane_jennifer_dacruz@damha.com.br','XIXaXAdkgx'),(7,'elisa_malu_rodrigues@moyageorges.com.br','B9ifWchxsJ'),(8,'henriqueerickmelo@wredenborg.se','dw4d4uicW3'),(9,'giovanni_darosa@kof.com.mx','hGKoIJAPcI'),(10,'rebeca_agatha_viana@tanby.com.br','7wqU0tHtEu'),(11,'raimunda-aparicio70@qmagico.com.br','fL58W9J7Yi'),(12,'mirellavanessadacosta@live.se','bLzkcIiz8l'),(13,'noahjuliocortereal@santander.com.br','tk5cQaf89N'),(14,'larissa-campos96@genesyslab.com','AdsBFGGGT2'),(15,'marcio.henry.ribeiro@oi15.com.br','TOOaG6ZrGa'),(16,'ruan_dasilva@stembalagens.com.br','Cz3Jt7lWTq'),(17,'vanessa-lima80@2014fwcao.com','j4G4p7PckW'),(18,'lavinia.andreia.almada@yahoo.com.br','r2BiF1Im9D'),(19,'leandro_emanuel_peixoto@piemme.com.br','ZXmAHxBKF3'),(20,'emanuelly_sara_barbosa@tanet.com.br','hYYjbWOOcf');
/*!40000 ALTER TABLE `tb_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_marca`
--

DROP TABLE IF EXISTS `tb_marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_marca` (
  `cd_marca` int NOT NULL AUTO_INCREMENT,
  `nm_marca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_marca`
--

LOCK TABLES `tb_marca` WRITE;
/*!40000 ALTER TABLE `tb_marca` DISABLE KEYS */;
INSERT INTO `tb_marca` VALUES (1,'Fiat'),(2,'Volkswagen'),(3,'Bentley'),(4,'Hyundai'),(5,'Fiat'),(6,'Volkswagen'),(7,'Bentley'),(8,'Hyundai'),(9,'Fiat'),(10,'Volkswagen'),(11,'Bentley'),(12,'Hyundai'),(13,'Fiat'),(14,'Volkswagen'),(15,'Bentley'),(16,'Hyundai'),(17,'Fiat'),(18,'Volkswagen'),(19,'Bentley'),(20,'Chevrolet');
/*!40000 ALTER TABLE `tb_marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_modelo`
--

DROP TABLE IF EXISTS `tb_modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_modelo` (
  `cd_modelo` int NOT NULL AUTO_INCREMENT,
  `nm_modelo` varchar(45) DEFAULT NULL,
  `cd_marca` int DEFAULT NULL,
  PRIMARY KEY (`cd_modelo`),
  KEY `cd_marca` (`cd_marca`),
  CONSTRAINT `tb_modelo_ibfk_1` FOREIGN KEY (`cd_marca`) REFERENCES `tb_marca` (`cd_marca`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_modelo`
--

LOCK TABLES `tb_modelo` WRITE;
/*!40000 ALTER TABLE `tb_modelo` DISABLE KEYS */;
INSERT INTO `tb_modelo` VALUES (1,'Volkswagen Gol',1),(2,'Fiat Strada',2),(3,'Chevrolet Onix',3),(4,'Hyundai HB20',4),(5,'Volkswagen Gol',5),(6,'Fiat Strada',6),(7,'Chevrolet Onix',7),(8,'Hyundai HB20',8),(9,'Volkswagen Gol',9),(10,'Fiat Strada',10),(11,'Chevrolet Onix',11),(12,'Hyundai HB20',12),(13,'Volkswagen Gol',13),(14,'Fiat Strada',14),(15,'Chevrolet Onix',15),(16,'Hyundai HB20',16),(17,'Volkswagen Gol',17),(18,'Fiat Strada',18),(19,'Chevrolet Onix',19),(20,'Chevrolet Onix Plus',20);
/*!40000 ALTER TABLE `tb_modelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_patio`
--

DROP TABLE IF EXISTS `tb_patio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_patio` (
  `cd_patio` int NOT NULL AUTO_INCREMENT,
  `ds_patio` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cd_patio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_patio`
--

LOCK TABLES `tb_patio` WRITE;
/*!40000 ALTER TABLE `tb_patio` DISABLE KEYS */;
INSERT INTO `tb_patio` VALUES (1,'1'),(2,'2');
/*!40000 ALTER TABLE `tb_patio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pessoa_fisica`
--

DROP TABLE IF EXISTS `tb_pessoa_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pessoa_fisica` (
  `cd_pessoa_fisica` int NOT NULL AUTO_INCREMENT,
  `cd_cpf` varchar(20) DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  `cd_bairro` int DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_fisica`),
  KEY `cd_bairro` (`cd_bairro`),
  CONSTRAINT `tb_pessoa_fisica_ibfk_1` FOREIGN KEY (`cd_bairro`) REFERENCES `tb_bairro` (`cd_bairro`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_fisica`
--

LOCK TABLES `tb_pessoa_fisica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_fisica` DISABLE KEYS */;
INSERT INTO `tb_pessoa_fisica` VALUES (1,'136.230.852-86',1,1),(2,'558.882.025-84',2,2),(3,'067.846.794-31',3,3),(4,NULL,4,4),(5,'743.721.422-93',5,5),(6,NULL,6,6),(7,'399.443.846-23',7,7),(8,NULL,8,8),(9,NULL,9,9),(10,NULL,10,10),(11,'991.851.233-40',11,11),(12,NULL,12,12),(13,'567.596.008-27',13,13),(14,'031.574.345-00',14,14),(15,'248.969.750-14',15,15),(16,NULL,16,16),(17,NULL,17,17),(18,NULL,18,18),(19,'049.161.186-26',19,19),(20,'652.159.799-01',20,20);
/*!40000 ALTER TABLE `tb_pessoa_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pessoa_juridica`
--

DROP TABLE IF EXISTS `tb_pessoa_juridica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pessoa_juridica` (
  `cd_pessoa_juridica` int NOT NULL AUTO_INCREMENT,
  `cd_cnpj` varchar(20) DEFAULT NULL,
  `cd_bairro` int DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_juridica`),
  KEY `cd_cliente` (`cd_cliente`),
  CONSTRAINT `tb_pessoa_juridica_ibfk_1` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_juridica`
--

LOCK TABLES `tb_pessoa_juridica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_juridica` DISABLE KEYS */;
INSERT INTO `tb_pessoa_juridica` VALUES (1,NULL,1,1),(2,NULL,2,2),(3,NULL,3,3),(4,'42.511.777/0001-60',4,4),(5,NULL,5,5),(6,'59.067.078/0001-76',6,6),(7,NULL,7,7),(8,'43.861.452/0001-70',8,8),(9,'37.962.613/0001-10',9,9),(10,'65.254.503/0001-39',10,10),(11,NULL,11,11),(12,'31.492.526/0001-60',12,12),(13,NULL,13,13),(14,NULL,14,14),(15,NULL,15,15),(16,'72.181.135/0001-01',16,16),(17,'36.062.069/0001-97',17,17),(18,'01.695.631/0001-35',18,18),(19,NULL,19,19),(20,NULL,20,20);
/*!40000 ALTER TABLE `tb_pessoa_juridica` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_telefone`
--

DROP TABLE IF EXISTS `tb_telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_telefone` (
  `cd_telefone` int NOT NULL AUTO_INCREMENT,
  `cd_numero1` varchar(20) DEFAULT NULL,
  `cd_numero2` varchar(20) DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  PRIMARY KEY (`cd_telefone`),
  KEY `cd_cliente` (`cd_cliente`),
  CONSTRAINT `tb_telefone_ibfk_1` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_telefone`
--

LOCK TABLES `tb_telefone` WRITE;
/*!40000 ALTER TABLE `tb_telefone` DISABLE KEYS */;
INSERT INTO `tb_telefone` VALUES (1,'(66) 99163-1531',NULL,1),(2,'(61) 98153-5596','(61) 3763-1803',2),(3,'(79) 98421-1175','(79) 2914-8488',3),(4,'(92) 98271-7282',NULL,4),(5,'(16) 99124-3887',NULL,5),(6,'(68) 99917-1591','(68) 2557-3140',6),(7,'(86) 98133-6502',NULL,7),(8,'(67) 99200-4118',NULL,8),(9,'(91) 99787-5532',NULL,9),(10,'(61) 98421-5775','(61) 2905-4970',10),(11,'(81) 98767-3939','(81) 2737-2601',11),(12,'(42) 99649-3133',NULL,12),(13,'(83) 99772-7749',NULL,13),(14,'(69) 98671-7424','(69) 2809-1847',14),(15,'(95) 98322-1696','(95) 2674-0425',15),(16,'(91) 98458-0538','(91) 3919-0690',16),(17,'(32) 98561-5622','(32) 3923-5321',17),(18,'(41) 99549-8073',NULL,18),(19,'(16) 99195-9999',NULL,19),(20,'(11) 99214-9687',NULL,20);
/*!40000 ALTER TABLE `tb_telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_uf` (
  `cd_uf` int NOT NULL AUTO_INCREMENT,
  `sg_uf` char(10) DEFAULT NULL,
  PRIMARY KEY (`cd_uf`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_uf`
--

LOCK TABLES `tb_uf` WRITE;
/*!40000 ALTER TABLE `tb_uf` DISABLE KEYS */;
INSERT INTO `tb_uf` VALUES (1,'MT'),(2,'DF'),(3,'SE'),(4,'AM'),(5,'SP'),(6,'AC'),(7,'PI'),(8,'MS'),(9,'PA'),(10,'DF'),(11,'PE'),(12,'PR'),(13,'PB'),(14,'RO'),(15,'RR'),(16,'PA'),(17,'MG'),(18,'PR'),(19,'SP'),(20,'SP');
/*!40000 ALTER TABLE `tb_uf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_vaga`
--

DROP TABLE IF EXISTS `tb_vaga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_vaga` (
  `cd_vaga` int NOT NULL AUTO_INCREMENT,
  `cd_numero` int DEFAULT NULL,
  `cd_patio` int DEFAULT NULL,
  `ds_status` varchar(20) DEFAULT NULL,
  `cd_estacionamento` int DEFAULT NULL,
  PRIMARY KEY (`cd_vaga`),
  KEY `fk_patio` (`cd_patio`),
  KEY `fk_estacionamento` (`cd_estacionamento`),
  CONSTRAINT `fk_estacionamento` FOREIGN KEY (`cd_estacionamento`) REFERENCES `tb_estacionamento` (`cd_estacionamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_patio` FOREIGN KEY (`cd_patio`) REFERENCES `tb_patio` (`cd_patio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_vaga`
--

LOCK TABLES `tb_vaga` WRITE;
/*!40000 ALTER TABLE `tb_vaga` DISABLE KEYS */;
INSERT INTO `tb_vaga` VALUES (1,11,1,'Em uso',1),(2,11,2,NULL,2),(3,11,2,'Em uso',3),(4,11,2,'Em uso',4),(5,11,1,NULL,5),(6,11,1,'Em uso',6),(7,11,1,'Em uso',7),(8,11,2,'Em uso',8),(9,11,2,'Em uso',9),(10,11,1,NULL,10),(11,11,1,'Em uso',11),(12,11,1,'Em uso',12),(13,11,2,NULL,13),(14,11,2,'Em uso',14),(15,11,2,'Em uso',15),(16,11,1,'Em uso',16),(17,11,1,NULL,17),(18,11,1,'Em uso',18),(19,11,2,'Em uso',19),(20,11,2,'Em uso',20);
/*!40000 ALTER TABLE `tb_vaga` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Dumping events for database 'db_tcc_estacionamento'
--

--
-- Dumping routines for database 'db_tcc_estacionamento'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-20 19:10:01
