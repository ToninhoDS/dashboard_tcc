-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: db_celke
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
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE `enderecos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `enderecos` VALUES (1,'Avenida Winston Churchill','936',1),(2,'Avenida Winston Churchill','936',2),(3,'Avenida Winston Churchill','936',3),(4,'Avenida Winston Churchill','936',4),(5,'Avenida Winston Churchill','936',5),(6,'Avenida Winston Churchill','936',6),(7,'Avenida Winston Churchill','936',7),(8,'Avenida Winston Churchill','936',8),(9,'Avenida Winston Churchill','936',9),(10,'Avenida Winston Churchill','936',10),(11,'Avenida Winston Churchill','936',11),(12,'Avenida Winston Churchill','936',12),(13,'Avenida Winston Churchill','936',13),(14,'Avenida Winston Churchill','936',14),(15,'Avenida Winston Churchill','936',15),(16,'rua Coronel Alipio Ferras','598',3010),(17,'rua Coronel Alipio Ferras','598',3011),(18,'rua Carmem Miranda','482',3012),(19,'rua Carmem Miranda','482',3013);

