-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: iLume
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `causa_denuncia`
--

DROP TABLE IF EXISTS `causa_denuncia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `causa_denuncia` (
  `id_causa_denuncia` int(11) NOT NULL AUTO_INCREMENT,
  `causa_denuncia` varchar(45) NOT NULL,
  PRIMARY KEY (`id_causa_denuncia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `causa_denuncia`
--

LOCK TABLES `causa_denuncia` WRITE;
/*!40000 ALTER TABLE `causa_denuncia` DISABLE KEYS */;
/*!40000 ALTER TABLE `causa_denuncia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `denuncia`
--

DROP TABLE IF EXISTS `denuncia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `denuncia` (
  `id_denuncia` int(11) NOT NULL AUTO_INCREMENT,
  `cep_denuncia` varchar(9) NOT NULL,
  `id_causa_denuncia` int(11) NOT NULL,
  `arquivo_denuncia` varchar(100) NOT NULL,
  `ref_denuncia` varchar(100) DEFAULT NULL,
  `num_residencia_denuncia` varchar(30) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_denuncia`),
  KEY `fk_denuncia_usuario` (`id_usuario`),
  KEY `fk_causa_denuncia_denuncia` (`id_causa_denuncia`),
  CONSTRAINT `fk_causa_denuncia_denuncia` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denuncia`
--

LOCK TABLES `denuncia` WRITE;
/*!40000 ALTER TABLE `denuncia` DISABLE KEYS */;
/*!40000 ALTER TABLE `denuncia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suporte`
--

DROP TABLE IF EXISTS `suporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suporte` (
  `id_suporte` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `mensagem_suporte` varchar(500) NOT NULL,
  `arquivo_suporte` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_suporte`),
  KEY `fk_suporte_usuario` (`id_usuario`),
  CONSTRAINT `fk_suporte_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suporte`
--

LOCK TABLES `suporte` WRITE;
/*!40000 ALTER TABLE `suporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `suporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `desc_tipo_usuario` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (1,'administrador'),(2,'comum');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(60) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(70) NOT NULL,
  `id_tipo_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuario_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'vitor','vitor@gmail.com','123',1),(2,'vitor','vitor@gmail.com','123',2),(3,'BrunoPires13','vitor@gmail.com','123',2),(4,'BrunoPires13','vitor@gmail.com','123',2),(5,'BrunoPires13','vitor@gmail.com','202cb962ac59075b964b07152d234b70',2),(6,'BrunoPires13','vitor@gmail.com','202cb962ac59075b964b07152d234b70',2),(7,'BrunoPires13','vitor@gmail.com','202cb962ac59075b964b07152d234b70',2),(9,'BrunoPires13','vitor@gmail.com','123',2),(10,'BrunoPires13','vitor@gmail.com','123',2),(11,'hhtfgh','vitor@gmail.com','123',2),(12,'BrunoPires13','vitor@gmail.com','123',2),(13,'','','',2),(14,'BrunoPires13','','',2),(15,'','','',2),(16,'','','',2),(17,'','','',2),(18,'','','',2),(19,'','','',2),(20,'','','',2),(21,'','','',2),(22,'','','',2);
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

-- Dump completed on 2022-09-12 14:47:01
