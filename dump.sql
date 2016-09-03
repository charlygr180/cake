-- MySQL dump 10.13  Distrib 5.1.52, for Win64 (unknown)
--
-- Host: localhost    Database: sistemabancario
-- ------------------------------------------------------
-- Server version	5.1.52-community

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
-- Table structure for table `banco`
--

DROP TABLE IF EXISTS `banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banco` (
  `idBanco` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idBanco`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banco`
--

LOCK TABLES `banco` WRITE;
/*!40000 ALTER TABLE `banco` DISABLE KEYS */;
INSERT INTO `banco` VALUES (1,'BANAMEX'),(3,'SANTANDER'),(4,'BANCOMER'),(5,'BANORT'),(6,'HSBC'),(7,'AZTECA');
/*!40000 ALTER TABLE `banco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(30) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `idBanco` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `RefBanco2` (`idBanco`),
  CONSTRAINT `RefBanco2` FOREIGN KEY (`idBanco`) REFERENCES `banco` (`idBanco`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'AARON ARIEL','ARAUJO','RUIZ',20,5),(5,'JOSE','ROMERO','SANCHEZ',33,1),(6,'LUIS','MENA','MARTINEZ',20,6),(7,'DIEGO','PANIAGUA','--',18,5),(8,'CESAR','DELGADO','ORTEGA',20,7),(13,'ariel','araujo','ruiz',6,1);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuenta` (
  `idCuenta` int(11) NOT NULL AUTO_INCREMENT,
  `numeroCuenta` int(11) NOT NULL,
  `idTipoCuenta` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idCuenta`),
  KEY `RefTipoCuenta3` (`idTipoCuenta`),
  KEY `RefCliente4` (`idCliente`),
  CONSTRAINT `RefCliente4` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  CONSTRAINT `RefTipoCuenta3` FOREIGN KEY (`idTipoCuenta`) REFERENCES `tipocuenta` (`idTipoCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuenta`
--

LOCK TABLES `cuenta` WRITE;
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
INSERT INTO `cuenta` VALUES (2,12344678,2,1),(3,2345678,2,6),(5,2,3,1),(6,234567,2,7);
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apaterno` varchar(30) DEFAULT NULL,
  `amaterno` varchar(30) DEFAULT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `RefPerfil12` (`idPerfil`),
  CONSTRAINT `RefPerfil12` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'root','martinez','root','admin','1234',1),(2,'AARON','ARAUJO','RUIZ','aaraujo','1234',2),(3,'DIEGO','PANIAGUA','LOPEZ','dpaniagua','12345',1),(4,'ALLAN','GARCIA','PEREZ','agarcia','garcia',4);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimiento` (
  `idMovimiento` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `monto` decimal(9,2) NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `idTipoMovimiento` int(11) NOT NULL,
  PRIMARY KEY (`idMovimiento`),
  KEY `RefCuenta7` (`idCuenta`),
  KEY `RefTipoMovimiento9` (`idTipoMovimiento`),
  CONSTRAINT `RefCuenta7` FOREIGN KEY (`idCuenta`) REFERENCES `cuenta` (`idCuenta`),
  CONSTRAINT `RefTipoMovimiento9` FOREIGN KEY (`idTipoMovimiento`) REFERENCES `tipomovimiento` (`idTipoMovimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimiento`
--

LOCK TABLES `movimiento` WRITE;
/*!40000 ALTER TABLE `movimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Administrador'),(2,'Empleado'),(4,'Cliente');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipocuenta`
--

DROP TABLE IF EXISTS `tipocuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipocuenta` (
  `idTipoCuenta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`idTipoCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocuenta`
--

LOCK TABLES `tipocuenta` WRITE;
/*!40000 ALTER TABLE `tipocuenta` DISABLE KEYS */;
INSERT INTO `tipocuenta` VALUES (2,'GOLD'),(3,'PERFILES'),(4,'PLATINUM');
/*!40000 ALTER TABLE `tipocuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipomovimiento`
--

DROP TABLE IF EXISTS `tipomovimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipomovimiento` (
  `idTipoMovimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idTipoMovimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipomovimiento`
--

LOCK TABLES `tipomovimiento` WRITE;
/*!40000 ALTER TABLE `tipomovimiento` DISABLE KEYS */;
INSERT INTO `tipomovimiento` VALUES (1,'Compras');
/*!40000 ALTER TABLE `tipomovimiento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-14  0:29:05
