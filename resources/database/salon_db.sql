-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: salon
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cjenik`
--

DROP TABLE IF EXISTS `cjenik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cjenik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usluga` varchar(45) DEFAULT NULL,
  `cijena` decimal(6,2) DEFAULT NULL,
  `kategorija` varchar(45) DEFAULT NULL,
  `is_active` smallint(1) DEFAULT '1',
  `kategorija_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cjenik`
--

LOCK TABLES `cjenik` WRITE;
/*!40000 ALTER TABLE `cjenik` DISABLE KEYS */;
INSERT INTO `cjenik` VALUES (1,'Tretman lica - osnovni',160.00,'Lice',1,1),(2,'Tretman veliki - masaža dekoltea',180.00,'Lice',1,1),(3,'Masaža lica s vitaminskom ampulom',80.00,'Lice',1,1),(4,'Manualna limfna drenaža lica',50.00,'Lice',1,1),(5,'Čišćenje leđa',120.00,'Lice',1,1),(6,'Čišćenje dekoltea',100.00,'Lice',1,1),(7,'Mikrodermoabrazija+ultrazvučni tretman',250.00,'Lice',0,1),(8,'Aromaterapija lica i dekoltea',140.00,'Lice',1,1),(9,'Catiovital - dubinska hidratacija',250.00,'Lice',1,1),(10,'Hidreclat tretman',250.00,'Lice',1,1),(11,'Peel&lift tretman',250.00,'Lice',0,1),(12,'Peel RE-NEW - tretman',60.00,'Lice',1,1),(13,'Peel RE-NEW - paket 10 tretmana',600.00,'Lice',1,1),(14,'Bojanje obrva',25.00,'Lice',1,1),(15,'Bojanje obrva unutar tretmana',20.00,'Lice',1,1),(16,'Bojanje trepavica',35.00,'Lice',1,1),(17,'Bojanje trepavica unutar tretmana',30.00,'Lice',1,1),(18,'Depilacija nausnice',25.00,'Lice',1,1),(19,'Depilacija nausnice unutar tretmana',20.00,'Lice',1,1),(20,'Depilacija lica',30.00,'Lice',1,1),(21,'Depilacija brade',20.00,'Lice',1,1),(22,'Korekcija obrva',25.00,'Lice',1,1),(23,'Make - up',100.00,'Lice',1,1),(24,'Make - up s probom',180.00,'Lice',1,1),(25,'Ugradnja trepavica - pramen',5.00,'Lice',1,1),(26,'Depilacija 1/2',50.00,'Depilacije',1,2),(27,'Depilacija 1/1',100.00,'Depilacije',1,2),(28,'Depilacija 1/1 +bikini',120.00,'Depilacije',1,2),(29,'Depilacija bikini',30.00,'Depilacije',1,2),(30,'Depilacija pazuha',30.00,'Depilacije',1,2),(31,'Depilacija pazuha unutar tretmana',20.00,'Depilacije',1,2),(32,'Depilacija podlaktice',40.00,'Depilacije',1,2),(33,'Depilacija cijele ruke',60.00,'Depilacije',1,2),(34,'Brazilska depilacija',70.00,'Depilacije',1,2),(35,'Depilacija leđa',60.00,'Depilacije',1,2),(36,'Depilacija prsa - patrone',60.00,'Depilacije',1,2),(37,'Depilacija prsa - topli vosak',80.00,'Depilacije',1,2),(38,'Depilacija 1/2',80.00,'Depilacije egipatska',1,3),(39,'Depilacija 1/1',160.00,'Depilacije egipatska',1,3),(40,'Depilacija 1/1 + bikini',190.00,'Depilacije egipatska',1,3),(41,'Depilacija bikini , pazuh',40.00,'Depilacije egipatska',1,3),(42,'Depilacija ruku',80.00,'Depilacije egipatska',1,3),(43,'Brazilska depilacija',100.00,'Depilacije egipatska',1,3),(44,'Klasična masaža tijela - ženska',130.00,'Tijelo',1,4),(45,'Klasična masaža tijela - muška	',140.00,'Tijelo',1,4),(46,'Masaža leđa',70.00,'Tijelo',1,4),(47,'Čokoladna masaža tijela',180.00,'Tijelo',0,4),(48,'Aromaterapija tijela',160.00,'Tijelo',1,4),(49,'Mediteranska masaža',150.00,'Tijelo',0,4),(50,'Anticelulitna masaža',80.00,'Tijelo',1,4),(51,'Starvac aparat - tretman 30min',140.00,'Tijelo',1,4),(52,'Anticelulitni slim alge',180.00,'Tijelo',1,4),(53,'Body wrapping',150.00,'Tijelo',1,4),(54,'Detoksikacija tijela + peeling',120.00,'Tijelo',1,4),(55,'Tretman tijela s AHA maskom od grožđanih košt',170.00,'Tijelo',0,4),(56,'Manualna limfna drenaža nogu',120.00,'Tijelo',1,4),(57,'Manikura - trajni lak + nail art gratis',80.00,'Nokti',1,5),(58,'Manikura',50.00,'Nokti',1,5),(59,'Manikura + F M',70.00,'Nokti',1,5),(60,'Gel na prirodnom noktu',100.00,'Nokti',1,5),(61,'Ugradnja noktiju',140.00,'Nokti',1,5),(62,'Nadopuna gel',100.00,'Nokti',1,5),(63,'Pedikura',80.00,'Nokti',1,5),(64,'Kurje oko',30.00,'Nokti',1,5);
/*!40000 ALTER TABLE `cjenik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategorije`
--

DROP TABLE IF EXISTS `kategorije`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategorije` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategorije`
--

LOCK TABLES `kategorije` WRITE;
/*!40000 ALTER TABLE `kategorije` DISABLE KEYS */;
INSERT INTO `kategorije` VALUES (1,'Lice'),(2,'Depilacije'),(3,'Egipatska depilacija'),(4,'Tijelo'),(5,'Nokti');
/*!40000 ALTER TABLE `kategorije` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-07  3:21:57
