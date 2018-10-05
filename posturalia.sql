-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: posturalia
-- ------------------------------------------------------
-- Server version	5.5.58-0+deb8u1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'posturalia','posturalia33','administrateur'),(2,'admin','admin335','ico');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `message` text,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `fromgoldbook` tinyint(4) NOT NULL DEFAULT '0',
  `fromcontact` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (13,'franck','langleron','','','','franck_langleron@hotmail.com','','xxx',1,1,1),(14,'Diana','Williams','9881 Lawrence Road','90021','Los Angeles','william.sd.diana@gmail.com','0120120120','We are interested to increase traffic to your website, please get back to us in order to discuss the possibility in further detail.',1,0,1),(15,'Javier','GONZALEZ','20 avenue de la foret','33700','Merignac','fjavi.gonzalez@gmail.com','0681731870','test de mesage',1,0,1),(16,'Lafuente','Sylvie','9 lot le verger','64230','SAUVAGNON','Solymar64000@hotmail.fr','0612363490','Bonjour je ne trouve pas les tarifs svp',1,0,1),(17,'Celina ','Beoletto ','','','Bordes','celina_5@hotmail.fr','0618990626','Bonjour \r\n\r\nVous serait il possible de me communiquer les prix pour une inscription pour jusqu’a Fin août pour une copine et moi même dans votre salle ?\r\n\r\nCordialement ',0,0,1),(18,'','','','','','lamourouxlaetitia@yahoo.fr','','',1,0,0),(19,'','','','','','nbouezet@gmail.com','','',1,0,0),(20,'Isabelle ','DEBEZE','','','','isadebeze@gmail.com','0675151145','Bonjour,\r\nJe suis à la recherche d\'une salle de sport et intéressée par votre approche. \r\nPouvez vous m\'envoyer le planning des cours proposés ainsi que les tarifs ?\r\nCordialement ',1,0,1),(21,'Elodie','Junqua','batA residence les jardins de l\'ossau','64140','Lons','junqua.elodie@orange.fr','0699644718','Bonjour,\r\nPuis je connaître les tarifs ,jours et horaires pour les cours de pilates . \r\ncordialement .',0,0,1),(22,'Martine','LACLUQUE','','64160','Morlaas','martine_lacluque@yahoo.fr','0674919255','Bonjour,\r\nje commence à me renseigner pour me ré-inscrire dans une salle de remise en forme. L\'adresse de Posturalia est la même que celle d\'Amaonia à Pau. Pouvez-vous m\'indiquer s\'il s\'agit de la même salle ? Pouvez-vous me renseigner également sur les tarifs en vigueur ?\r\nMerci\r\nCordialement,\r\nMartine Lacluque',0,0,1),(23,'Laura','Bernay','','','','Laura220494@hotmail.fr','0646800269','Bonjour, \r\n\r\nPourriez vous m indiquer  les prix des forfaits de votre structure ?\r\n\r\nCordialement. \r\nMlle BERNAY. ',0,0,1),(24,'Audrey','Lomer','21 Rue Édouard Herriot, Apt 31D','33310','Lormont','lomeraudrey@hotmail.fr','0633307807','Bonjour, je souhaiterais connaître vos différents abonnements ainsi que les frais d\'inscription et biensur vos offres promotionnelles pour septembre. Merci de me contacter par mail. Cordialement. ',0,0,1),(25,'','','','','','emeline.gaulard@gmail.com','','',1,0,0),(26,'Sephora','Bordat','16 rue des freres camors ','64000','Boisgibault','sephora.bordat@outlook.com','0617281901','Bonjour , \r\nDésolée si c\'est sur le site mais je n\'ai pas trouvé vos tarifs. Quels sont ils ? \r\nMerci d\'avance, \r\nCordialement.\r\nBORDAT Sephora.',0,0,1),(27,'Amélie','Bringuier','','','','Amelie.bringuier@gmail.com','33617417220','Est-il possible de faire un essai avant de s\'engager? ',1,0,1),(28,'Charlotte','sellos','8 cité feaugas','33100','bordeaux ','charlotte.sellos@gmail.com','0635311306','bonsoir, \r\nje vous écris car je suis adhérente depuis bientôt 1 mois dans votre salle bdx bastide et je suis très étonnée de ne toujours pas pouvoir profiter des cours vidéo. D’autant plus que ce service est stipulé dans les conditions générales d’adhésion et c’est une des raisons pour laquelle j’ai souscris un abonnement dans votre salle. Une autre raison pour laquelle j’ai voulu adhérer à la salle est la mise en place de cours nottement et Yoga, hors j’apprends aujourd’hui par les affichages qu’ils requièrent des frais supplémentaires, chose qui ne m’avait pas été dite. Donc je suis déçue.\r\nÀ l’heure actuelle je réponds à ma part du contrat c’est à dire de payer mes mensualités dans leur totalité j’aimerai qu’il en soit autant de votre part ou que vous fassiez un geste commercial. \r\n\r\ncordialement \r\n\r\nCharlotte SELLOS ',0,0,1),(29,'Mathieu','BENELLI','14B Rue Saint Sernin','33000','Bordeaux','math.bnli.pro@gmail.com','0642744289','Bonjour, \r\nJe suis l\'initiateur d\'un site web qui vend des séances de sport à l\'unité par rapport à la géolocalisation et un planning précis, le tout sur Bordeaux ! \r\nwww.fastandfitness.fr \r\n\r\nJe serais vraiment très intéressé de parler avec vous, et échanger sur nos expériences respectives, et pourquoi pas envisager une collaboration. Vous pouvez me joindre au 06 42 74 42 89. Sinon, n\'hésitez pas à me communiquer votre numéro de téléphone. \r\n\r\nBien à vous, Mathieu\r\n\r\nhttps://goo.gl/HhUPS4',0,0,1),(30,'','','','','','asdkfasd@gmail.com','','',1,0,0);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_categorie`
--

DROP TABLE IF EXISTS `contact_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_categorie` (
  `id_contact` int(11) unsigned NOT NULL,
  `id_categorie` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_categorie`
--

LOCK TABLES `contact_categorie` WRITE;
/*!40000 ALTER TABLE `contact_categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `divers`
--

DROP TABLE IF EXISTS `divers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `divers` (
  `num_divers` int(11) NOT NULL AUTO_INCREMENT,
  `pdf_methode_depilation` varchar(100) NOT NULL,
  `pdf_tarif_soin` varchar(100) NOT NULL,
  PRIMARY KEY (`num_divers`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `divers`
--

LOCK TABLES `divers` WRITE;
/*!40000 ALTER TABLE `divers` DISABLE KEYS */;
INSERT INTO `divers` VALUES (1,'epilaction_devis_infos_2016_04_13.pdf','');
/*!40000 ALTER TABLE `divers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goldbook`
--

DROP TABLE IF EXISTS `goldbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goldbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbook`
--

LOCK TABLES `goldbook` WRITE;
/*!40000 ALTER TABLE `goldbook` DISABLE KEYS */;
INSERT INTO `goldbook` VALUES (1,'2017-01-03 00:00:00','Franck L','franck_langleron@hotmail.com','Club superbe, coach très présent, conseils super !',1),(2,'2016-12-15 00:00:00','Stef M','durand@orange.fr','Club très sympa, personnel très disponible, je conseille !',1);
/*!40000 ALTER TABLE `goldbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_news`
--

DROP TABLE IF EXISTS `media_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_news` int(11) NOT NULL,
  `url_media` varchar(250) NOT NULL,
  `url_apercu` varchar(250) NOT NULL,
  `type_media` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_news`
--

LOCK TABLES `media_news` WRITE;
/*!40000 ALTER TABLE `media_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `date_news` datetime NOT NULL,
  `titre` varchar(250) NOT NULL,
  `contenu` text,
  `image1` varchar(250) DEFAULT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (39,'2018-10-05 00:00:00','Bordeaux: Planning des cours collectifs (Inscription à l\'accueil ou par téléphone)','Inscription à l\'accueil ou par téléphone','/Planning-39.jpg',1),(40,'2018-10-06 00:00:00','Journées Portes Ouvertes du 10 au 12 Octobre à Bordeaux Bastide','journées Portes Ouvertes du 10 au 12 Octobre  à Posturalia BORDEAUX \r\nLancement des cours collectifs : \"1 carnet acheté = 10 séances + 3 OFFERTES !\"','',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `bas_page` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (12,'2015-01-01 00:00:00','Les nouveautés espace beauté','Contact@espac.fr'),(13,'2016-03-14 00:00:00','test de soin',' ');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter_detail`
--

DROP TABLE IF EXISTS `newsletter_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_newsletter` int(10) unsigned NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `texte` text,
  PRIMARY KEY (`id`,`id_newsletter`)
) ENGINE=InnoDB AUTO_INCREMENT=331 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_detail`
--

LOCK TABLES `newsletter_detail` WRITE;
/*!40000 ALTER TABLE `newsletter_detail` DISABLE KEYS */;
INSERT INTO `newsletter_detail` VALUES (329,12,'Soin de la peau Grande Promo','/35e221e3ebd787de0636cac049b9461d-12.jpg','http://espacebeaute.iconeo.es','ce mois ci promotion sur le soin du visage'),(330,13,'Soin de la peau Grande Promo','/5496657cbfcac17aa12617a4ea6154ec-.jpg','http://www.institut-espace-beaute.com/','Le soleil arrive ');
/*!40000 ALTER TABLE `newsletter_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `legende` text NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (1,2,'L\'autré jour...','c\'était une su\'per légende!','/186-1.jpg'),(2,2,'Madison piercing','','/340-.jpg'),(3,3,'Renouvellement de nom de domaine','','/20150812_141201-.jpg');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_categorie`
--

DROP TABLE IF EXISTS `photo_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_categorie`
--

LOCK TABLES `photo_categorie` WRITE;
/*!40000 ALTER TABLE `photo_categorie` DISABLE KEYS */;
INSERT INTO `photo_categorie` VALUES (2,'Thème nº1'),(3,'L\'autre cat');
/*!40000 ALTER TABLE `photo_categorie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-05 16:41:31
