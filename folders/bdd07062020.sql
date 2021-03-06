-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: kf
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `activite`
--

DROP TABLE IF EXISTS `activite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activite` (
  `idactivite` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `dateA` varchar(25) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `objet` varchar(100) NOT NULL,
  `idCompteRendu` int(11) NOT NULL,
  PRIMARY KEY (`idactivite`),
  KEY `idCompteRendu` (`idCompteRendu`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activite`
--

LOCK TABLES `activite` WRITE;
/*!40000 ALTER TABLE `activite` DISABLE KEYS */;
INSERT INTO `activite` VALUES (53,'Confienement','2020-03-28','Guediwaye','Gérer les membres non confinés',0),(55,'Yaya','2020-03-01','Dakar','Confection des cotisations',0),(56,'Gel antibiotique','2020-04-13','Korbe','Sensibiliser les gens',0),(57,'lutte corona','2020-04-04','2tally','sensibiliser les citoyenns',0);
/*!40000 ALTER TABLE `activite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compte_rendu`
--

DROP TABLE IF EXISTS `compte_rendu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compte_rendu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `odj` varchar(200) DEFAULT NULL,
  `point1` varchar(200) DEFAULT NULL,
  `point2` varchar(200) DEFAULT NULL,
  `point3` varchar(200) DEFAULT NULL,
  `point4` varchar(200) DEFAULT NULL,
  `point5` varchar(200) DEFAULT NULL,
  `divers` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compte_rendu`
--

LOCK TABLES `compte_rendu` WRITE;
/*!40000 ALTER TABLE `compte_rendu` DISABLE KEYS */;
INSERT INTO `compte_rendu` VALUES (1,'odj',NULL,'point 2',NULL,NULL,NULL,'divers'),(2,'Gestion des lacostes','Les membres de KF','Les membres whatsapp','Hors KF Dakar','Hors KF hors Dakar','Internationale','Prix du lacoste, couleur des lacostes'),(9,'Sortie hors Dakar','gestion du repas','gestion du transport','gestion de la billeterie','gestion des étrangers','',''),(10,'Sortie hors Dakar','gestion du repas','gestion du transport','gestion de la billeterie','gestion des étrangers','Internationale',''),(12,'Sortie hors Dakar','gestion du repas','gestion du transport','gestion de la billeterie','geston des étrangers','Internationale','test'),(21,'','','','','','',''),(22,'','','','','','','');
/*!40000 ALTER TABLE `compte_rendu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cotisation`
--

DROP TABLE IF EXISTS `cotisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cotisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateC` varchar(45) DEFAULT NULL,
  `membre` varchar(45) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`dateC`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotisation`
--

LOCK TABLES `cotisation` WRITE;
/*!40000 ALTER TABLE `cotisation` DISABLE KEYS */;
INSERT INTO `cotisation` VALUES (2,'2020-02-18','59',2000,'Aout et Mai 2019'),(8,'2020-01-01','59',1000,'Janvier'),(10,'2020-01-15','55',1000,'January'),(11,'2020-02-06','55',1000,'February'),(12,'2020-01-03','43',1000,'January'),(14,'2020-01-09','61',1000,'January'),(15,'2020-01-09','55',1000,'January'),(16,'2020-10-10','55',1000,'Test'),(18,'2020-02-14','43',1000,'Janvier');
/*!40000 ALTER TABLE `cotisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membre` (
  `numero` varchar(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telepnone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membre`
--

LOCK TABLES `membre` WRITE;
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
  `idP` int(11) NOT NULL AUTO_INCREMENT,
  `nomP` varchar(100) NOT NULL,
  `prenomP` varchar(100) NOT NULL,
  `telephoneP` varchar(100) NOT NULL,
  `mailP` varchar(100) NOT NULL,
  `adresseP` varchar(100) NOT NULL,
  `fonctionP` varchar(100) NOT NULL,
  `loginP` varchar(100) NOT NULL,
  `mdpP` varchar(100) NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (43,'Diallo    ','Mamadou  Boussouriou   ','775999513   ','diallo99bouss@gmail.com       ','Medina     45   ','president','admin       ','admin       '),(55,'Diallo','Yaya','771665938','saikoudiallo59@gmail.com ','Niary Tally','Informaticien ','Yaya Diallo','yaya '),(59,'Diallo ','Alpha Oumar ','+3368387393893 ','alpha@etoo.cm ','Paris , rue Benoit 16','Vendeur de thiéré ','etoo ','etoo '),(61,'Diallo','Mamadou Saliou','778461087','Masalioud0@gmail.com','Ouakam','Informaticien','S007','Dggg'),(62,'Diallo','Malick','774375657','azkzajza@zaza.vom','Medina','Comptable','malick','malick');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-07  1:43:31
