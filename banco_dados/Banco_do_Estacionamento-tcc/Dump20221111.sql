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
  `cd_bairro` int NOT NULL,
  `nm_bairro` varchar(45) DEFAULT NULL,
  `cd_cidade` int DEFAULT NULL,
  PRIMARY KEY (`cd_bairro`),
  KEY `cd_cidade` (`cd_cidade`),
  CONSTRAINT `tb_bairro_ibfk_1` FOREIGN KEY (`cd_cidade`) REFERENCES `tb_cidade` (`cd_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
-- Table structure for table `tb_cidade`
--

DROP TABLE IF EXISTS `tb_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cidade` (
  `cd_cidade` int NOT NULL,
  `nm_cidade` varchar(45) DEFAULT NULL,
  `cd_uf` int DEFAULT NULL,
  PRIMARY KEY (`cd_cidade`),
  KEY `cd_uf` (`cd_uf`),
  CONSTRAINT `tb_cidade_ibfk_1` FOREIGN KEY (`cd_uf`) REFERENCES `tb_uf` (`cd_uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `cd_cliente` int NOT NULL,
  `cd_email_cliente` varchar(45) DEFAULT NULL,
  `cd_senha_cliente` varchar(20) DEFAULT NULL,
  `cd_login` int DEFAULT NULL,
  `nm_cliente` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`),
  KEY `cd_login` (`cd_login`),
  CONSTRAINT `tb_cliente_ibfk_1` FOREIGN KEY (`cd_login`) REFERENCES `tb_login` (`cd_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1056,'marcio.henry.ribeiro@oi15.com.br','TOOaG6ZrGa',15,'Márcio Henry Ruan Ribeiro'),(1229,'ruan_dasilva@stembalagens.com.br','Cz3Jt7lWTq',16,'Ruan Murilo da Silva\"'),(1383,'rebeca_silveira@wwlimpador.com.br','66kt9COrDu',3,'Rebeca Sophie Silveira'),(1531,'henriqueerickmelo@wredenborg.se','dw4d4uicW3',8,'Henrique Erick Melo'),(1640,'leandro_emanuel_peixoto@piemme.com.br','ZXmAHxBKF3',19,'Leandro Emanuel Cláudio Peixoto'),(1855,'mirellavanessadacosta@live.se','bLzkcIiz8l',12,'Mirella Vanessa Alessandra da Costa'),(1858,'laviniamarciarocha@pisbrasil.com.br','eBkzc3zruE',5,'Lavínia Márcia Rocha'),(2220,'emanuelly_sara_barbosa@tanet.com.br','hYYjbWOOcf',20,'Emanuelly Sara Tânia Barbosa'),(2615,'noahjuliocortereal@santander.com.br','tk5cQaf89N',13,'Noah Julio Thomas Corte Real'),(2727,'rebeca_agatha_viana@tanby.com.br','7wqU0tHtEu',10,'Rebeca Agatha Viana'),(2888,'julio-pereira88@simoesmendonca.adv.br','HA0bRoSHGs',1,'Julio Thiago Pereira'),(2930,'francisco_bernardes@petrobrais.com.br','tpRjDeDiSI',2,'Francisco Caleb Vitor Bernardes'),(3172,'eliane_jennifer_dacruz@damha.com.br','XIXaXAdkgx',6,'Eliane Jennifer da Cruz'),(3203,'lavinia.andreia.almada@yahoo.com.br','r2BiF1Im9D',18,'Lavínia Andreia Almada'),(3214,'raimunda-aparicio70@qmagico.com.br','fL58W9J7Yi',11,'Raimunda Analu Aparício'),(3344,'enrico_martins@live.com.pt','EMOXEdB81Y',4,'Enrico Bento Tiago Martins'),(3407,'vanessa-lima80@2014fwcao.com','j4G4p7PckW',17,'Vanessa Luna Lima'),(3532,'elisa_malu_rodrigues@moyageorges.com.br','B9ifWchxsJ',7,'Elisa Malu Nair Rodrigues'),(3684,'larissa-campos96@genesyslab.com','AdsBFGGGT2',14,'Larissa Marlene Josefa Campos'),(3893,'giovanni_darosa@kof.com.mx','hGKoIJAPcI',9,'Giovanni Antonio Luís da Rosa');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cor`
--

DROP TABLE IF EXISTS `tb_cor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cor` (
  `cd_cor` int NOT NULL,
  `nm_cor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_cor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `cd_estacionamento` int NOT NULL,
  `dt_entrada` date DEFAULT NULL,
  `dt_saida` date DEFAULT NULL,
  `cd_veiculo` int DEFAULT NULL,
  `cd_horario` int DEFAULT NULL,
  `nm_estacionamento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cd_estacionamento`),
  KEY `cd_horario` (`cd_horario`),
  KEY `cd_veiculo` (`cd_veiculo`),
  CONSTRAINT `tb_estacionamento_ibfk_1` FOREIGN KEY (`cd_horario`) REFERENCES `tb_horario` (`cd_horario`),
  CONSTRAINT `tb_estacionamento_ibfk_2` FOREIGN KEY (`cd_veiculo`) REFERENCES `tb_veiculo` (`cd_veiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_estacionamento`
--

LOCK TABLES `tb_estacionamento` WRITE;
/*!40000 ALTER TABLE `tb_estacionamento` DISABLE KEYS */;
INSERT INTO `tb_estacionamento` VALUES (1,'2022-05-10','2022-05-11',1,1,'Tonho Estacionamento'),(2,'2022-06-10','2022-06-12',2,2,'Enzo Park'),(3,'2022-06-15','2022-06-21',3,3,'Enzo Park'),(4,'2022-07-12','2022-07-13',4,4,'Enzo Park'),(5,'2022-06-10','2022-06-22',5,5,'Tonho Estacionamento'),(6,'2022-07-20','2022-07-21',6,6,'Enzo Park'),(7,'2022-05-10','2022-05-11',7,7,'Tonho Estacionamento'),(8,'2022-07-01','2022-07-03',8,8,'Enzo Park'),(9,'2022-05-30','2022-05-31',9,9,'Tonho Estacionamento'),(10,'2022-08-00','2022-08-02',10,10,'Enzo Park'),(11,'2022-06-22','2022-06-23',11,11,'Tonho Estacionamento'),(12,'2022-09-20','2022-09-21',12,12,'Tonho Estacionamento'),(13,'2022-05-10','2022-05-21',13,13,'Tonho Estacionamento'),(14,'2022-09-10','2022-09-11',14,14,'Enzo Park'),(15,'2022-06-25','2022-06-26',15,15,'Enzo Park'),(16,'2022-07-21','2022-07-26',16,16,'Tonho Estacionamento'),(17,'2022-08-01','2022-08-02',17,17,'Tonho Estacionamento'),(18,'2022-06-20','2022-06-29',18,18,'Tonho Estacionamento'),(19,'2022-07-23','2022-08-24',19,19,'Enzo Park'),(20,'2022-08-10','2022-08-15',20,20,'Tonho Estacionamento');
/*!40000 ALTER TABLE `tb_estacionamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_horario`
--

DROP TABLE IF EXISTS `tb_horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_horario` (
  `cd_horario` int NOT NULL,
  `hr_entrada` time DEFAULT NULL,
  `hr_saida` time DEFAULT NULL,
  PRIMARY KEY (`cd_horario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `cd_login` int NOT NULL,
  `cd_email_login` varchar(45) DEFAULT NULL,
  `cd_senha_login` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cd_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `cd_marca` int NOT NULL,
  `nm_marca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_marca`
--

LOCK TABLES `tb_marca` WRITE;
/*!40000 ALTER TABLE `tb_marca` DISABLE KEYS */;
INSERT INTO `tb_marca` VALUES (1,'Fiat'),(2,'Volkswagen'),(3,'Bentley'),(4,'Hyundai'),(5,'Chevrolet');
/*!40000 ALTER TABLE `tb_marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_modelo`
--

DROP TABLE IF EXISTS `tb_modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_modelo` (
  `cd_modelo` int NOT NULL,
  `nm_modelo` varchar(45) DEFAULT NULL,
  `cd_marca` int DEFAULT NULL,
  PRIMARY KEY (`cd_modelo`),
  KEY `cd_marca` (`cd_marca`),
  CONSTRAINT `tb_modelo_ibfk_1` FOREIGN KEY (`cd_marca`) REFERENCES `tb_marca` (`cd_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_modelo`
--

LOCK TABLES `tb_modelo` WRITE;
/*!40000 ALTER TABLE `tb_modelo` DISABLE KEYS */;
INSERT INTO `tb_modelo` VALUES (1,'Volkswagen Gol',2),(2,'Fiat Strada',1),(3,'Chevrolet Onix',5),(4,'Hyundai HB20',4),(5,'Chevrolet Onix Plus',5);
/*!40000 ALTER TABLE `tb_modelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_patio`
--

DROP TABLE IF EXISTS `tb_patio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_patio` (
  `cd_patio` int NOT NULL,
  `ds_patio` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cd_patio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `cd_pessoa_fisica` int NOT NULL,
  `cd_cpf` varchar(20) DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  `cd_bairro` int DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_fisica`),
  KEY `cd_bairro` (`cd_bairro`),
  CONSTRAINT `tb_pessoa_fisica_ibfk_1` FOREIGN KEY (`cd_bairro`) REFERENCES `tb_bairro` (`cd_bairro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_fisica`
--

LOCK TABLES `tb_pessoa_fisica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_fisica` DISABLE KEYS */;
INSERT INTO `tb_pessoa_fisica` VALUES (1,'136.230.852-86',2888,1),(2,'558.882.025-84',2930,2),(3,'067.846.794-31',1383,3),(4,NULL,3344,4),(5,'743.721.422-93',1858,5),(6,NULL,3172,6),(7,'399.443.846-23',3532,7),(8,NULL,1531,8),(9,NULL,3893,9),(10,NULL,2727,10),(11,'991.851.233-40',3214,11),(12,NULL,1855,12),(13,'567.596.008-27',2615,13),(14,'031.574.345-00',3684,14),(15,'248.969.750-14',1056,15),(16,NULL,1229,16),(17,NULL,3407,17),(18,NULL,3203,18),(19,'049.161.186-26',1640,19),(20,'652.159.799-01',2220,20);
/*!40000 ALTER TABLE `tb_pessoa_fisica` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tb_telefone`
--

DROP TABLE IF EXISTS `tb_telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_telefone` (
  `cd_telefone` int NOT NULL,
  `cd_numero1` varchar(20) DEFAULT NULL,
  `cd_numero2` varchar(20) DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  PRIMARY KEY (`cd_telefone`),
  KEY `cd_cliente` (`cd_cliente`),
  CONSTRAINT `tb_telefone_ibfk_1` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_telefone`
--

LOCK TABLES `tb_telefone` WRITE;
/*!40000 ALTER TABLE `tb_telefone` DISABLE KEYS */;
INSERT INTO `tb_telefone` VALUES (1,'(66) 99163-1531',NULL,2888),(2,'(61) 98153-5596','(61) 3763-1803',2930),(3,'(79) 98421-1175','(79) 2914-8488',1383),(4,'(92) 98271-7282',NULL,3344),(5,'(16) 99124-3887',NULL,1858),(6,'(68) 99917-1591','(68) 2557-3140',3172),(7,'(86) 98133-6502',NULL,3532),(8,'(67) 99200-4118',NULL,1531),(9,'(91) 99787-5532',NULL,3893),(10,'(61) 98421-5775','(61) 2905-4970',2727),(11,'(81) 98767-3939','(81) 2737-2601',3214),(12,'(42) 99649-3133',NULL,1855),(13,'(83) 99772-7749',NULL,2615),(14,'(69) 98671-7424','(69) 2809-1847',3684),(15,'(95) 98322-1696','(95) 2674-0425',1056),(16,'(91) 98458-0538','(91) 3919-0690',1229),(17,'(32) 98561-5622','(32) 3923-5321',3407),(18,'(41) 99549-8073',NULL,3203),(19,'(16) 99195-9999',NULL,1640),(20,'(11) 99214-9687',NULL,2220);
/*!40000 ALTER TABLE `tb_telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_uf` (
  `cd_uf` int NOT NULL,
  `sg_uf` char(2) DEFAULT NULL,
  PRIMARY KEY (`cd_uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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

--
-- Table structure for table `tb_veiculo`
--

DROP TABLE IF EXISTS `tb_veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_veiculo` (
  `cd_veiculo` int NOT NULL,
  `cd_placa` varchar(20) DEFAULT NULL,
  `cd_cliente` int DEFAULT NULL,
  `cd_cor` int DEFAULT NULL,
  `cd_modelo` int DEFAULT NULL,
  PRIMARY KEY (`cd_veiculo`),
  KEY `fk_cliente` (`cd_cliente`),
  KEY `fk_modelo` (`cd_modelo`),
  KEY `fk_cor` (`cd_cor`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`),
  CONSTRAINT `fk_cor` FOREIGN KEY (`cd_cor`) REFERENCES `tb_cor` (`cd_cor`),
  CONSTRAINT `fk_modelo` FOREIGN KEY (`cd_modelo`) REFERENCES `tb_modelo` (`cd_modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_veiculo`
--

LOCK TABLES `tb_veiculo` WRITE;
/*!40000 ALTER TABLE `tb_veiculo` DISABLE KEYS */;
INSERT INTO `tb_veiculo` VALUES (1,'11',2888,1,1),(2,'22',2930,2,2),(3,'33',1383,3,3),(4,'44',3344,4,4),(5,'55',1858,5,5),(6,'66',3172,6,5),(7,'77',3532,7,4),(8,'88',1531,8,3),(9,'99',3893,9,2),(10,'101',2727,10,1),(11,'111',3214,2,1),(12,'122',1855,5,2),(13,'133',2615,9,3),(14,'144',3684,7,4),(15,'155',1056,8,5),(16,'166',1229,6,1),(17,'177',3407,7,1),(18,'188',3203,8,2),(19,'199',1640,9,5),(20,'202',2220,2,4);
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

-- Dump completed on 2022-11-11 23:22:08
