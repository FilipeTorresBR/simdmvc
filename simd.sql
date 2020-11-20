-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: simd
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.2

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
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de criação do registro, campo obrigatório para determinar a sua data e hora de criação',
  `modificacao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data de modificação do registro, campo que informa se houve alteração no registro',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (1,'Bibliotecario','2020-06-15 21:41:55',NULL),(2,'dsfsdf','2020-06-16 16:41:50',NULL),(3,'sdf','2020-06-16 16:41:52',NULL),(4,'ss','2020-06-21 19:24:09',NULL),(5,'FGNYvHkmBi','2020-07-01 03:06:09',NULL),(6,'FjgQUKBnDI','2020-07-01 03:06:09',NULL),(7,'sOekrbdNnT','2020-07-01 03:06:09',NULL),(8,'uoNyBKkVwx','2020-07-01 03:06:10',NULL),(9,'sIrnvcitqH','2020-07-01 03:06:10',NULL),(10,'AGuYaSeoJM','2020-07-01 03:06:10',NULL),(11,'skDVnczOtd','2020-07-01 03:06:10',NULL),(12,'dUeOtlfQCc','2020-07-01 03:06:10',NULL),(13,'oRctOzsjbr','2020-07-01 03:06:10',NULL),(14,'CykqKOgEib','2020-07-01 03:06:10',NULL),(15,'CPLHSfrxQI','2020-07-01 03:06:10',NULL),(16,'UenEoLJqyV','2020-07-01 03:06:10',NULL),(17,'ZpVohenHjy','2020-07-01 03:06:10',NULL),(18,'HXSwfVaoBA','2020-07-01 03:06:10',NULL),(19,'XOWdYonkyD','2020-07-01 03:06:10',NULL),(20,'hxXyoAslVC','2020-07-01 03:06:10',NULL),(21,'DHiPzhCJlw','2020-07-01 03:06:11',NULL),(22,'UamsMpFrLX','2020-07-01 03:06:11',NULL),(23,'gRrZcnjSfy','2020-07-01 03:06:11',NULL),(24,'ZSkTchpeOA','2020-07-01 03:06:11',NULL),(25,'WVnFMDjAoP','2020-07-01 03:20:07',NULL),(26,'mRXGyDeHbk','2020-07-01 03:20:07',NULL),(27,'oTfrFNLEwP','2020-07-01 03:20:07',NULL),(28,'QIaNYDyZlH','2020-07-01 03:20:07',NULL),(29,'hHKSMLRFJz','2020-07-01 03:20:07',NULL),(30,'pFcONCaidw','2020-07-01 03:20:07',NULL),(31,'FRYEKvcyUM','2020-07-01 03:20:07',NULL),(32,'ZNnFYrMcxd','2020-07-01 03:20:07',NULL),(33,'aIhxpFENeJ','2020-07-01 03:20:07',NULL),(34,'OXuVoIbcwm','2020-07-01 03:20:07',NULL),(35,'IChOYSXBbc','2020-07-01 03:20:08',NULL),(36,'afwHRqxYlT','2020-07-01 03:20:08',NULL),(37,'vUjVlqZkOS','2020-07-01 03:20:08',NULL),(38,'HqulLkxSZw','2020-07-01 03:20:08',NULL),(39,'VGopqRKWNO','2020-07-01 03:20:08',NULL),(40,'IjiYnfuZvT','2020-07-01 03:20:08',NULL),(41,'JVhAzEeHtK','2020-07-01 03:20:08',NULL),(42,'FnWLktvQuN','2020-07-01 03:20:08',NULL),(43,'DXjMWqeLgb','2020-07-01 03:20:08',NULL),(44,'xhCKwaIkLr','2020-07-01 03:20:08',NULL),(45,'EITA BIXO','2020-08-16 20:25:56',NULL),(46,'Tio Orilokikkkk','2020-10-21 00:38:46',NULL),(47,'Dale na narguilera','2020-10-21 00:47:10',NULL);
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chefia`
--

DROP TABLE IF EXISTS `chefia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chefia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `setor` int NOT NULL,
  `siape` varchar(45) NOT NULL,
  `inicio_vigencia` date NOT NULL,
  `portaria` varchar(45) DEFAULT NULL,
  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de criação do registro, campo obrigatório para determinar a sua data e hora de criação',
  `modificacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data de modificação do registro, campo que informa se houve alteração no registro',
  PRIMARY KEY (`id`),
  KEY `fk_chefia_setor1_idx` (`setor`),
  CONSTRAINT `fk_chefia_setor1` FOREIGN KEY (`setor`) REFERENCES `setor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chefia`
--

LOCK TABLES `chefia` WRITE;
/*!40000 ALTER TABLE `chefia` DISABLE KEYS */;
INSERT INTO `chefia` VALUES (1,46,'3941726','2012-12-12','123123','2020-06-20 20:56:54','2020-10-19 20:35:07'),(2,3,'7254183','2019-05-19','132213 ','2020-06-20 20:57:43','2020-06-21 20:00:54'),(3,2,'3865429','2018-05-19','231123   ','2020-06-21 16:39:45','2020-06-21 20:01:48'),(4,23,'2405001','2200-02-22','213242','2020-10-19 21:04:23','2020-10-19 21:04:23');
/*!40000 ALTER TABLE `chefia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotacao`
--

DROP TABLE IF EXISTS `lotacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lotacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de criação do registro, campo obrigatório para determinar a sua data e hora de criação',
  `modificacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data de modificação do registro, campo que informa se houve alteração no registro',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotacao`
--

LOCK TABLES `lotacao` WRITE;
/*!40000 ALTER TABLE `lotacao` DISABLE KEYS */;
INSERT INTO `lotacao` VALUES (1,'IFPA-Campus Tucuruí','2020-06-15 21:51:31','2020-06-15 21:51:31'),(2,'rTBsPmxkDR','2020-07-01 03:06:53','2020-07-01 03:06:53'),(3,'yXICczYQvT','2020-07-01 03:06:54','2020-07-01 03:06:54'),(4,'mISODCwXqK','2020-07-01 03:06:54','2020-07-01 03:06:54'),(5,'tNSmRFYPnf','2020-07-01 03:06:54','2020-07-01 03:06:54'),(6,'uCLoFkhxBa','2020-07-01 03:06:54','2020-07-01 03:06:54'),(7,'QJgheTZpRI','2020-07-01 03:06:54','2020-07-01 03:06:54'),(8,'QgArcvpkWN','2020-07-01 03:06:54','2020-07-01 03:06:54'),(9,'MqCUBQITzy','2020-07-01 03:06:54','2020-07-01 03:06:54'),(10,'TfsiqLAtuj','2020-07-01 03:06:54','2020-07-01 03:06:54'),(11,'bVvRNxSjgl','2020-07-01 03:06:54','2020-07-01 03:06:54'),(12,'gLZYjedkKB','2020-07-01 03:06:54','2020-07-01 03:06:54'),(13,'abTqOfgAKR','2020-07-01 03:06:55','2020-07-01 03:06:55'),(14,'teYgBCFkzi','2020-07-01 03:06:55','2020-07-01 03:06:55'),(15,'IPpQBgzoRM','2020-07-01 03:06:55','2020-07-01 03:06:55'),(16,'RypgunmdZK','2020-07-01 03:06:55','2020-07-01 03:06:55'),(17,'YhBNltaquG','2020-07-01 03:06:55','2020-07-01 03:06:55'),(18,'uQSRZfJGFO','2020-07-01 03:06:55','2020-07-01 03:06:55'),(19,'dYIeMycrpx','2020-07-01 03:06:55','2020-07-01 03:06:55'),(20,'DrBJEKXCzU','2020-07-01 03:06:55','2020-07-01 03:06:55'),(21,'DOPoEXhVqj','2020-07-01 03:06:55','2020-07-01 03:06:55'),(22,'cOPTMbCAQJ','2020-07-01 03:19:44','2020-07-01 03:19:44'),(23,'CTQxHZlzEY','2020-07-01 03:19:44','2020-07-01 03:19:44'),(24,'rkYIRVMKOZ','2020-07-01 03:19:44','2020-07-01 03:19:44'),(25,'XHNMLVTFsc','2020-07-01 03:19:44','2020-07-01 03:19:44'),(26,'WTMVifkEnx','2020-07-01 03:19:44','2020-07-01 03:19:44'),(27,'AKNuWlaikY','2020-07-01 03:19:44','2020-07-01 03:19:44'),(28,'SkNPdfQuIq','2020-07-01 03:19:44','2020-07-01 03:19:44'),(29,'AvDsoZNOHx','2020-07-01 03:19:44','2020-07-01 03:19:44'),(30,'zVblfTDkQS','2020-07-01 03:19:44','2020-07-01 03:19:44'),(31,'PhaeFjvNzp','2020-07-01 03:19:45','2020-07-01 03:19:45'),(32,'vUPYIfeVKO','2020-07-01 03:19:45','2020-07-01 03:19:45'),(33,'oGRuizPeYF','2020-07-01 03:19:45','2020-07-01 03:19:45'),(34,'iUtYzDByNG','2020-07-01 03:19:45','2020-07-01 03:19:45'),(35,'jDWULpvskq','2020-07-01 03:19:45','2020-07-01 03:19:45'),(36,'dABngwQxLs','2020-07-01 03:19:45','2020-07-01 03:19:45'),(37,'gubomFQAnM','2020-07-01 03:19:45','2020-07-01 03:19:45'),(38,'PavchMFDiT','2020-07-01 03:19:45','2020-07-01 03:19:45'),(39,'nHqbgdBhtV','2020-07-01 03:19:45','2020-07-01 03:19:45'),(40,'WOwQMhdFTH','2020-07-01 03:19:45','2020-07-01 03:19:45'),(41,'ImfeUcqkDO','2020-07-01 03:19:46','2020-07-01 03:19:46'),(42,'EITA BIXO','2020-08-16 20:26:13','2020-08-16 20:26:13'),(43,'Uhh lala','2020-10-21 00:52:28','2020-10-21 00:52:28');
/*!40000 ALTER TABLE `lotacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `probatorio`
--

DROP TABLE IF EXISTS `probatorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `probatorio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `siape` char(7) NOT NULL,
  `ini1` date DEFAULT NULL,
  `fim1` date DEFAULT NULL,
  `ini2` date DEFAULT NULL,
  `fim2` date DEFAULT NULL,
  `ini3` date DEFAULT NULL,
  `fim3` date DEFAULT NULL,
  `ini4` date DEFAULT NULL,
  `fim4` date DEFAULT NULL,
  PRIMARY KEY (`id`,`siape`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `probatorio`
--

LOCK TABLES `probatorio` WRITE;
/*!40000 ALTER TABLE `probatorio` DISABLE KEYS */;
INSERT INTO `probatorio` VALUES (1,'3242343','2020-10-29','2020-02-02','2020-02-02','2020-02-20','2020-02-20','2020-02-20','2020-02-20','2020-02-20'),(2,'1312354','2019-09-23','2020-05-23','2020-05-24','2021-01-24','2021-01-25','2021-09-25','2021-09-26','2022-05-26');
/*!40000 ALTER TABLE `probatorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servidor`
--

DROP TABLE IF EXISTS `servidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servidor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_lotacao` int NOT NULL,
  `id_cargo` int NOT NULL,
  `id_setor` int NOT NULL,
  `regime` varchar(50) NOT NULL,
  `quadro` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` char(14) NOT NULL,
  `titulo_eleitor` char(15) NOT NULL,
  `data_nascimento` date NOT NULL,
  `mae` varchar(50) DEFAULT NULL,
  `pai` varchar(50) DEFAULT NULL,
  `escolaridade` varchar(18) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(3) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `siape` char(7) DEFAULT NULL,
  `data_posse` date DEFAULT NULL,
  `data_exercicio` date DEFAULT NULL,
  `telefone1` varchar(14) DEFAULT NULL,
  `telefone2` varchar(14) DEFAULT NULL,
  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de criação do registro, campo obrigatório para determinar a sua data e hora de criação',
  `modificacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data de modificação do registro, campo que informa se houve alteração no registro',
  PRIMARY KEY (`id`),
  KEY `fk_servidor_cargo_idx` (`id_cargo`),
  KEY `fk_servidor_setor1_idx` (`id_setor`),
  KEY `fk_servidor_escolaridade1_idx` (`id_lotacao`),
  CONSTRAINT `fk_servidor_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`),
  CONSTRAINT `fk_servidor_escolaridade1` FOREIGN KEY (`id_lotacao`) REFERENCES `lotacao` (`id`),
  CONSTRAINT `fk_servidor_setor1` FOREIGN KEY (`id_setor`) REFERENCES `setor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servidor`
--

LOCK TABLES `servidor` WRITE;
/*!40000 ALTER TABLE `servidor` DISABLE KEYS */;
INSERT INTO `servidor` VALUES (1,13,10,3,'20H','TAE','FILIPE KAUE TORRES SOARES','123213','213123123213','213123123123','2019-08-22','FNDSFJDSFN','FSDFDSFFSDD','MÉDIO','felipetorres@ifpa.com','FDSFSD','NFKJFSD','NNJJ','JHB','325',NULL,'3242343','2019-09-23','2019-09-23','321213231','','2020-10-24 20:30:55','2020-10-27 14:29:54'),(2,13,36,14,'20H','DOC','FILIPE KAUE','123213','213123123213','213123123123','2019-08-22','FNDSFJDSFN','FSDFDSFFSDD','FUNDAMENTAL','Felipetorres_2405@live.com','FDSFSD','NFKJFSD','NNJJ','JHB','34',NULL,'1312354','2018-09-23','2019-09-23','321213231','','2020-10-24 20:38:23','2020-10-25 15:54:47');
/*!40000 ALTER TABLE `servidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setor`
--

DROP TABLE IF EXISTS `setor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de criação do registro, campo obrigatório para determinar a sua data e hora de criação',
  `modificacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data de modificação do registro, campo que informa se houve alteração no registro',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
INSERT INTO `setor` VALUES (1,'TI','2020-06-15 21:37:54','2020-06-15 21:37:54'),(2,'Biblioteca','2020-06-15 21:39:11','2020-06-15 21:39:11'),(3,'asddas','2020-06-15 21:41:06','2020-06-15 21:41:06'),(4,'gfhfgh','2020-06-21 19:34:33','2020-06-21 19:34:33'),(5,'qJVwAoElmK','2020-07-01 03:04:27','2020-07-01 03:04:27'),(6,'VoieYEDJqw','2020-07-01 03:04:27','2020-07-01 03:04:27'),(7,'TWwoLUpmXG','2020-07-01 03:04:27','2020-07-01 03:04:27'),(8,'xWEODfQmlV','2020-07-01 03:04:27','2020-07-01 03:04:27'),(9,'QJCsHGcdrl','2020-07-01 03:04:28','2020-07-01 03:04:28'),(10,'nPYfXBsuKy','2020-07-01 03:04:28','2020-07-01 03:04:28'),(11,'hlBFxRmstb','2020-07-01 03:04:28','2020-07-01 03:04:28'),(12,'XHwdhTQxps','2020-07-01 03:04:28','2020-07-01 03:04:28'),(13,'NlsLkSPcWt','2020-07-01 03:04:28','2020-07-01 03:04:28'),(14,'arZhGHgmvy','2020-07-01 03:04:28','2020-07-01 03:04:28'),(15,'edyjuLnZRF','2020-07-01 03:04:28','2020-07-01 03:04:28'),(16,'IByfhaZiJT','2020-07-01 03:04:28','2020-07-01 03:04:28'),(17,'lwzGIZiEna','2020-07-01 03:04:28','2020-07-01 03:04:28'),(18,'HdMecLFPYX','2020-07-01 03:04:28','2020-07-01 03:04:28'),(19,'gyenuGTfmd','2020-07-01 03:04:28','2020-07-01 03:04:28'),(20,'npBiVPbITq','2020-07-01 03:04:28','2020-07-01 03:04:28'),(21,'xUTEzyHpnC','2020-07-01 03:04:29','2020-07-01 03:04:29'),(22,'sQHaPInwJS','2020-07-01 03:04:29','2020-07-01 03:04:29'),(23,'GKiVYwQmUP','2020-07-01 03:04:29','2020-07-01 03:04:29'),(24,'OYXDhStCNu','2020-07-01 03:04:29','2020-07-01 03:04:29'),(25,'esMpguLmKb','2020-07-01 03:19:56','2020-07-01 03:19:56'),(26,'vIhprYSfEl','2020-07-01 03:19:57','2020-07-01 03:19:57'),(27,'eYdZvRxSFc','2020-07-01 03:19:57','2020-07-01 03:19:57'),(28,'varshJKFqR','2020-07-01 03:19:57','2020-07-01 03:19:57'),(29,'trWDKlOjym','2020-07-01 03:19:57','2020-07-01 03:19:57'),(30,'gCMfVqXwJr','2020-07-01 03:19:57','2020-07-01 03:19:57'),(31,'lZRkwnzHui','2020-07-01 03:19:57','2020-07-01 03:19:57'),(32,'zKMGCXRlLt','2020-07-01 03:19:57','2020-07-01 03:19:57'),(33,'bsyGjmMKuh','2020-07-01 03:19:57','2020-07-01 03:19:57'),(34,'VBHKmOXZSx','2020-07-01 03:19:57','2020-07-01 03:19:57'),(35,'xlbgkUXMHT','2020-07-01 03:19:58','2020-07-01 03:19:58'),(36,'YVxvMciQpX','2020-07-01 03:19:58','2020-07-01 03:19:58'),(37,'ImjnekwDRz','2020-07-01 03:19:58','2020-07-01 03:19:58'),(38,'yMNmaJpqgr','2020-07-01 03:19:58','2020-07-01 03:19:58'),(39,'OzqAVZhpjm','2020-07-01 03:19:58','2020-07-01 03:19:58'),(40,'QFWCPSMybn','2020-07-01 03:19:58','2020-07-01 03:19:58'),(41,'LziKOQNAYB','2020-07-01 03:19:58','2020-07-01 03:19:58'),(42,'VwsrFYEQlA','2020-07-01 03:19:58','2020-07-01 03:19:58'),(43,'IAeoPnvJBm','2020-07-01 03:19:58','2020-07-01 03:19:58'),(44,'oxTEkdauHV','2020-07-01 03:19:58','2020-07-01 03:19:58'),(45,'Qjnnsddndnf','2020-08-16 20:19:30','2020-09-05 15:15:00'),(46,'EITA BIXO','2020-08-16 20:21:13','2020-08-16 20:21:13'),(47,'FILIPE KKK','2020-10-19 21:25:32','2020-10-19 21:25:32'),(48,'fodaseparca','2020-10-19 22:16:34','2020-10-19 22:16:34'),(49,'CUCUCUCU','2020-10-20 00:53:08','2020-10-20 00:53:08');
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `administrador` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (2,'THAIS COSTA DE OLIVEIRA','thais.costa','25f9e794323b453885f5181f1b624d0b','0'),(3,'FILIPE KAUE','filipe.torres','deb2f357cf28cdb211826070ef74ab98','1');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-17 22:58:20
