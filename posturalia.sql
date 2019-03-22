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
INSERT INTO `admin` VALUES (1,'posturalia','posturalia33335','administrateur'),(2,'admin','admin335335','ico');
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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (13,'franck','langleron','','','','franck_langleron@hotmail.com','','xxx',1,1,1),(14,'Diana','Williams','9881 Lawrence Road','90021','Los Angeles','william.sd.diana@gmail.com','0120120120','We are interested to increase traffic to your website, please get back to us in order to discuss the possibility in further detail.',1,0,1),(15,'Javier','GONZALEZ','20 avenue de la foret','33700','Merignac','fjavi.gonzalez@gmail.com','0681731870','test de mesage',1,0,1),(16,'Lafuente','Sylvie','9 lot le verger','64230','SAUVAGNON','Solymar64000@hotmail.fr','0612363490','Bonjour je ne trouve pas les tarifs svp',1,0,1),(17,'Celina ','Beoletto ','','','Bordes','celina_5@hotmail.fr','0618990626','Bonjour \r\n\r\nVous serait il possible de me communiquer les prix pour une inscription pour jusqu’a Fin août pour une copine et moi même dans votre salle ?\r\n\r\nCordialement ',0,0,1),(18,'','','','','','lamourouxlaetitia@yahoo.fr','','',1,0,0),(19,'','','','','','nbouezet@gmail.com','','',1,0,0),(20,'Isabelle ','DEBEZE','','','','isadebeze@gmail.com','0675151145','Bonjour,\r\nJe suis à la recherche d\'une salle de sport et intéressée par votre approche. \r\nPouvez vous m\'envoyer le planning des cours proposés ainsi que les tarifs ?\r\nCordialement ',1,0,1),(21,'Elodie','Junqua','batA residence les jardins de l\'ossau','64140','Lons','junqua.elodie@orange.fr','0699644718','Bonjour,\r\nPuis je connaître les tarifs ,jours et horaires pour les cours de pilates . \r\ncordialement .',0,0,1),(22,'Martine','LACLUQUE','','64160','Morlaas','martine_lacluque@yahoo.fr','0674919255','Bonjour,\r\nje commence à me renseigner pour me ré-inscrire dans une salle de remise en forme. L\'adresse de Posturalia est la même que celle d\'Amaonia à Pau. Pouvez-vous m\'indiquer s\'il s\'agit de la même salle ? Pouvez-vous me renseigner également sur les tarifs en vigueur ?\r\nMerci\r\nCordialement,\r\nMartine Lacluque',0,0,1),(23,'Laura','Bernay','','','','Laura220494@hotmail.fr','0646800269','Bonjour, \r\n\r\nPourriez vous m indiquer  les prix des forfaits de votre structure ?\r\n\r\nCordialement. \r\nMlle BERNAY. ',0,0,1),(24,'Audrey','Lomer','21 Rue Édouard Herriot, Apt 31D','33310','Lormont','lomeraudrey@hotmail.fr','0633307807','Bonjour, je souhaiterais connaître vos différents abonnements ainsi que les frais d\'inscription et biensur vos offres promotionnelles pour septembre. Merci de me contacter par mail. Cordialement. ',0,0,1),(25,'','','','','','emeline.gaulard@gmail.com','','',1,0,0),(26,'Sephora','Bordat','16 rue des freres camors ','64000','Boisgibault','sephora.bordat@outlook.com','0617281901','Bonjour , \r\nDésolée si c\'est sur le site mais je n\'ai pas trouvé vos tarifs. Quels sont ils ? \r\nMerci d\'avance, \r\nCordialement.\r\nBORDAT Sephora.',0,0,1),(27,'Amélie','Bringuier','','','','Amelie.bringuier@gmail.com','33617417220','Est-il possible de faire un essai avant de s\'engager? ',1,0,1),(28,'Charlotte','sellos ','8 cité feaugas ','33100','bordeaux ','charlotte.sellos@gmail.com','0635311306','bonsoir, \r\nje vous écris car je suis adhérente depuis bientôt 1 mois dans votre salle bdx bastide et je suis très étonnée de ne toujours pas pouvoir profiter des cours vidéo. D’autant plus que ce service est stipulé dans les conditions générales d’adhésion et c’est une des raisons pour laquelle j’ai souscris un abonnement dans votre salle. Une autre raison pour laquelle j’ai voulu adhérer à la salle est la mise en place de cours nottement et Yoga, hors j’apprends aujourd’hui par les affichages qu’ils requièrent des frais supplémentaires, chose qui ne m’avait pas été dite. Donc je suis déçue.\r\nÀ l’heure actuelle je réponds à ma part du contrat c’est à dire de payer mes mensualités dans leur totalité j’aimerai qu’il en soit autant de votre part ou que vous fassiez un geste commercial. \r\n\r\ncordialement \r\n\r\nCharlotte SELLOS ',0,0,1),(29,'Mathieu','BENELLI','14B Rue Saint Sernin','33000','Bordeaux','math.bnli.pro@gmail.com','0642744289','Bonjour, \r\nJe suis l\'initiateur d\'un site web qui vend des séances de sport à l\'unité par rapport à la géolocalisation et un planning précis, le tout sur Bordeaux ! \r\nwww.fastandfitness.fr \r\n\r\nJe serais vraiment très intéressé de parler avec vous, et échanger sur nos expériences respectives, et pourquoi pas envisager une collaboration. Vous pouvez me joindre au 06 42 74 42 89. Sinon, n\'hésitez pas à me communiquer votre numéro de téléphone. \r\n\r\nBien à vous, Mathieu\r\n\r\nhttps://goo.gl/HhUPS4',0,0,1),(30,'','','','','','asdkfasd@gmail.com','','',1,0,0),(31,'Elohan','Cavé','14 rue Jules Guesde','33150','CENON','caveelohan@gmail.com','0607506136','Bonjour, j\'aimerais savoir quelles sont les démarches à suivre pour résilier mon contrat. \r\n\r\nCordialement\r\nElohan Cavé',1,0,1),(32,'Juliette','Brousse Garnier','27 rue de nuits','33 100','Créon','jbrgar@gmail.com','+33668696895','Bonjour,\r\nJe suis interressée par ce que vous proposez, j\'aurai aimé me renseigner par rapport aux prix, est-ce que vous pourriez m\'éclairer s\'il-vous-plait ?\r\n\r\nCordialement, \r\n\r\nJuliette ',1,0,1),(33,'Audrey','Castanet','11 Avenue René cassagne ','33150','Cenon','acastanet@laposte.net','0620677049','Bonjour, je souhaiterais mettre fin à mon abonnement, mon engagement de 12 mois arrive à son terme ce moi-ci. Quelle est la procédure ? Merci. Cordialement. Audrey Castanet ',0,0,1),(34,'Camille','Quere','7 rue Jules verne','64000','Pau','Camille.quere@gmail.com','0600000000','',1,0,1),(35,'VALERIE','VERNON','21 RUE DE LIBOURNE','33100','BORDEAUX','val.steff@gmail.com','0665767288','Bonjour,\r\n\r\nJe souhaiterais connaître vos tarifs\r\nCordialement\r\n',1,0,1),(36,'flore','demantin','27 Cours Gambetta','33270','Floirac','floredemantin1306@gmail.com','0783435829','Bonjour,\r\nQuel sont vos tarifs s\'il vous plaît ? Rien n\'est indiqué sur votre site Web.\r\nMerci d\'avance. \r\nCordialement. ',1,0,1),(37,'Olivia','Comelli','28','33310','Lormont','comelliolivia@gmail.com','0643668485','Bjr je souhaiterai faire une sceance d essai sur le tps du midi ou un soir a 18h30. Olivia',0,0,1),(38,'Johanna','Ouanzin','32 ter rue du serpent','33600','Pessac','johanna_ouanzin@yahoo.fr','0625693453','Bonjour,\r\nPourrais-je avoir un devis pour des cours de pilate sur 1 ou 2 séances par semaine au cours de 18h30 ?\r\nMerci d\'avance \r\nJohanna ',0,0,1),(39,'anne-marie','Debien','10 rue francin','33800','bordeaux','reflex.debien@gmail.com','0665499939','Bonjour,\r\nJe suis Énergéticienne et je cherche une activité complémentaire à mon statut d’indépendante.\r\nJe pratique notamment le Massage Énergétique Chinois et la Réflexologie Plantaire ; ce qui pourrait vous intéresser, vous ou votre clientèle, dans le cadre de votre Club de Remise en Forme.\r\nBien entendu je suis à votre entière disposition pour étudier toute les possibilités… et vous envoie l’adresse de mon site internet http://www.reflexreikiqi-phytoastro.com où vous pourrez consulter toutes les informations me concernant.\r\nDans l’attente de vous rencontrer,\r\nVeuillez croire, Madame Monsieur, à l’assurance de mes meilleurs sentiments.\r\nAnne-Marie Debien\r\n06.65.49.99.39\r\n',0,0,1),(40,'Bruno','abrantes','9 bd jules simon','33100','Bordeaux','babrantes974@gmail.com','0618855374','Bonjour，\r\nPuis-je avoir le prix de vos abonnements？\r\nCordialement',0,0,1),(41,'florence','Thieblemont','30 rue henry dunant','33100','bordeaux','firenze.t@free.fr','0637510087','Bonjour,\r\nA la base, inscrite chez Amazonia puis chez Keep cool, cela me permettait parfois d\'aller à la salle de Montpellier.\r\nOr, sans aucun avertissement de votre part bien que les prélèvements perdurent, je constate que votre système à changer ne me permettant plus de profiter de cette flexibilité. Le tarif restant cependant le même, bien que de surcroît  l\'accès aux vidéos à l\'étage ait aussi été supprimé...\r\nJe souhaiterais connaitre les plus que vous proposez aujourd\'hui et qui vous distingueraient des autres salles somme toute plus compétitives.\r\nCordialement.\r\n',0,0,1),(42,'Benjamin','Ditcharry','34 rue andronne','33800','Bordeaux ','ditcharry.benjamin@orange.fr','0623897227','Bonjour, j’ai envoyé une lettre de résiliation accompagnée d’un certificat médical pour l’impossibilité de pratique sportive à Keepcool il y a maintenant 2 mois sans réponse de la part de votre enseigne. Pouvez vous svp procéder à ma résiliation? Pouvez-vous également me faire parvenir par la même occasion une facture stipulant l’ensemble des versements mensuels sur l’annee 2018 afin que je puisse me faire rembourser une partie par mon CE. Merci d’avance pour votre réactivité et compréhension. \r\nBenjamin DITCHARRY ',0,0,1),(43,'Alban','Mahmoud','13 rue Léonard Lenoir ','33100','Bordeaux ','mahmoud.nablar@gmail.com','0632712427','Bonjour,\r\nJe vous fais part de mon préavis d\'un mois pour résiliation de mon abonnement pour cause de déménagement.je vous remercie de confirmer réception.\r\nCordialement Mr Mahmoud',0,0,1),(44,'Ruben ','Ruben Hazan','','75001','Paris','contact@smsvendor.com','0187211008','A l’attention du responsable commercial de votre entreprise.\r\nBonjour\r\nJe me présente, Ruben, Directeur Commercial chez SMSVENDOR, plateforme d’envoi de SMS promotionnels.\r\nChaque mois, une sélection d\'entreprises à fort potentiel rejoint notre plateforme digitale pour augmenter leurs ventes mensuelles et améliorer la fidélisation clientèle et votre entreprise pourrait en faire partie.\r\nJe vous propose un entretien téléphonique afin d\'évaluer ensemble le potentiel de cette collaboration.\r\nQuel jour et à quelle heure seriez-vous libre ?\r\n \r\nSincères salutations, \r\n\r\nRuben Hazan\r\nDirecteur commercial\r\nTel: 01 87 21 10 08\r\nwww.smsvendor.com\r\ncontact@smsvendor.com',1,0,1),(45,'Sophie','Rabbé','31','33100','BORDEAUX','sophie.pika@hotmail.fr','0674405333','Bonjour \r\nJe suis en incapacité de faire du sport depuis le 30 septembre en raison d\'une rupture du ligament croisé antérieur, je viens de me faire opérer le 13 décembre du genou je souhaiterais savoir s\'il était possible de suspendre mon abonnement pendant toute ma rééducation?\r\nMerci d\'avance ',0,0,1),(46,'Bochra','Ezzahouri ','10 cote de L’empereur ','33150','Cenon ','boezz@icloud.com','0663345968','Bonjour je souhaite collener des cours d’étirements pour apprendre à faire le grand écart \r\nJe suis débutante et pas souple \r\nJe souhaite connaître vos tarif ',1,0,1),(47,'Ophelie','Leger','29 avenue de la Garonne ','33440','Saint Louis de Montferrand ','ophelie.leger3396@gmail.com','0668018587','Bonjour, je suis cliente chez vous depuis bientôt 2ans. Je Suis partie de bordeaux en Mai et mon contrat en engagement s’arrete En décembre je compte donc ne pas le renouveler. \r\nMerci à toute l’équipe. \r\n\r\nCordialement\r\nLeger\r\nOphelie ',0,0,1),(48,'Tiphaine','Cotrel','4 rue de Caen','64140','Billère','tiphainec22@hotmail.fr','0619821263','Tiphaine Cotrel						Pau le 21 décembre 2018\r\n4 rue de Caen\r\n64140 billère\r\n\r\n							AMAZONIA\r\n							Rue Lavoisier\r\n							64 000 PAU\r\n\r\n\r\n\r\nMonsieur,\r\n\r\nPar la présente, je résilie mon abonnement effectué le 5 février 2016.\r\n\r\nJe vous demande de le résilier dès aujourd’hui, sans préavis, pour les raisons suivantes :\r\n\r\n-	Agrès vétustes, bruyants, ou ne fonctionnant pas du tout.\r\n-	Normes de températures non respectées. Aussi bien pour la salle que pour l’eau des douches, (aucune climatisation cet été, j’ai été patiente, chauffage à plus de 20 en hiver ! température des douches ou glacées ou brûlantes. Et cynisme quant à nos demandes par la personne chargée de s’en occupée.\r\n\r\nRespectueusement,\r\nTiphaine Cotrel\r\n',1,0,1),(49,'Ruben','FRANCA LEITE','11 Avenue du President Kennedy, 5eme etage','64000','Pau','Leitinho201997@hotmail.com','0623881251','Bonjour, je voudrais savoir si ce samedi matin vous seriez présente dans l\'etablissement comme d\'habitude pour accueiller les nouveaux adhérents ou pas.\r\nCordialement.',1,0,1),(50,'Leonard','Nogueira','Résidence skyline zone Aéroportuaire Montpellier-méditerranée','34130','Mauguio','nogueiraleonard3@gmail.com','0783723123','Bonjour j’ai remarqué en visitant votre site web que vous n’avez pas de pixel Facebook installé. J’en déduis que vous ne faite pas de publicité Facebook pour votre entreprise.\r\n\r\nc’est un véritable manque à gagner pour votre activité. La publicité Facebook est en plein essor et serai une bonne manière d’acquérir énormément de clients qualifiés qui n’attendent que vos services et compétence\r\n\r\n je me suis formé longuement (formation en ligne et livres) pour pouvoir faire de la publicité en ligne pour des entreprises local. \r\n\r\nJe me sens vraiment confiant mais avant de tirer un quelconque revenu pour mes service, j’aimerais travailler pour votre entreprise de manière complètement GRATUITE pour vous montrer que je peux avoir des résultats. \r\n\r\nSi vous couvrez les frais publicitaires ( qui ne serons pas énorme ) je ferais ce travail complètement gratuitement jusqu’à vous obtenir des dizaines de clients. \r\n\r\nAprès cela nous pourrons discuter d’une potentiel rémunération pour mes services ( avec une promotion étant donner que vous serez mon premier clients) \r\n\r\nSi cela vous intéresse répondez à ce message ou appelez moi au 07.83.72.31.23 pour plus d’information. \r\n\r\n\r\n\r\n',1,0,1),(51,'JEAN-BAPTISTE','LATTE','29 AVENUE LEO LAGRANGE','33110','LE BOUSCAT','jeanbaptiste.latte@gmail.com','0629173708','Bonjour,\r\nJe souhaite résilier mon contrat car je ne vais plus dans votre salle de sport. Pouvez vous s\'il vous plaît arrêter les prélèvements.\r\nDans l\'attente de votre réponse,\r\nCordialement,',1,0,1),(52,'Emmanuelle','March','','','','em.march@free.fr','0642454649','Bonjour\r\nj\'aimerais savoir quels sont les tarifs des cours de pilates, ainsi que le niveau du jeudi.\r\nMerci d\'avance pour votre réponse.',0,0,1),(53,'marine','renou','rue des vendangeurs','33370','artigues','renou-m@hotmail.fr','0675275422','Bonjour,\r\nPouvez-vous m\'indiquer les tarifs d\'abonnement à la salle ?\r\nExiste t il un système de parainnage si nous connaissons déjà des personnes inscrites dans la salle ?\r\nEst il possible de faire une séance d\'essai ?\r\nD\'avance merci,\r\n',1,0,1),(54,'melodie','canals','','','','melodiecanals@gmail.com','0665385306','Bonjour,\r\nquels sont vos tarifs s\'il vous plait?\r\nVos cours sont ils adaptés aux femmes enceintes?\r\nMerci par avance',0,0,1),(55,'Gilles','Capdeboscq','39 bd trarieux','33100','Bordeaux','capdebosgil@hotmail.fr','0671922647','Bonsoir, je souhaiterais savoir comment fonctionne votre centre. Comme une salle de sport avec un abonnement mensuel? Comme une association? Je suis interesse par des cours de pilate, pouvez vous me communiquer le cout? Merci',0,0,1),(56,'Stéphanie','Bain ','37 Rue Joseph fauré, 37','33100','33100 - BORDEAUX','steart29@gmail.com','0680469244','Bonjour, je souhaiterais savoir les tarifs pour deux personnes.\r\nEt les modalités d\' inscriptions.\r\nMerci ',1,0,1),(57,'Mélodie','BANIDERA','51 rue carnot','64000','Pau','bmelodie@outlook.fr','0622619596','Bonjour,\r\n\r\nJ\'aimerais me mettre à des cours de Pilate suite à des soucis de santé. Mon ostéopathe ma recommandée de pratiquer des \"Sports d\'étirements\" en complément des autres sports que je pratique (très peu en ce moment).\r\nSerait-il possible que vous m\'informiez des tarifs que vous pratiquez  afin de prendre une décision ?\r\n\r\nCordialement,\r\nBANDIERA Mélodie ',0,0,1),(58,'Emilie','SEVERAC ','2 rue Henri IV','64510','Bordes','bookworm.13@hotmail.fr','0643220922','Bonsoir,\r\n\r\nSerait-il possible d’avoir des informations sur les cours et les horaires dispensés par votre structure ? En effet je cherche un endroit où pratiquer le Pilâtes de manière régulière. Je vous remercie',1,0,1),(59,'Ha','Jingwan','B222, Gaston Phoebus 64000 PAU','64000','PAU','ujmqaz05@gmail.com','0750574437','Bonjour\r\n\r\nI\'m sorry to say in English. I\'m looking for a good gym to exercise. I saw your gym yesterday on my way when I was going home. I want to know the price of using a month.\r\n\r\nMerci',0,0,1),(60,'estelle','crevy','','33000','bordeaux','estelle.crevy@laposte.net','0608102985','Bonjour, \r\n\r\npourriez-vous m\'envoyer votre brochure tarifaire?\r\n\r\nmerci d\'avance.\r\nEstelle.',0,0,1),(61,'sandra','Kulikowski','3 rue bourbaki','64000','Pau','sandra.kulikowski@hotmail.com','0646142499','Bonjour , je cherche une salle de sport dans laquelle m\'inscrire avec des cours collectifs j\'aimerais connaitre les tarifs et les frais d\'adhésion. Cordialement. ',1,0,1),(62,'karen','sutherland','72 avenue thiers','33100','bordeaux','kasabecker@gmail.com','0647905926','Ma carte ne me laisse plus renter et la jeune fille qui est normalement a l\'accueil est en vacances.  SVP laissez-moi savoir comment je peux acceder la sale.\r\n\r\nMerci\r\nKaren',0,0,1),(63,'Klervie','Bertin','79 Allée Jean Giono, appartement 01','33100','bordeaux','klervie.bertin@gmail.com','0627141324','Bonjour,\r\n\r\nJe viens d\'arriver devant la porte de posturalia pour mo\' cours de pilates à Bordeaux. Quelle surprise et quelle déception de voir qu\'il avait fermé la semaine précédente. Je trouve très limite de n\'avoir eu aucun appel, de me retrouver avec tous mes tickets sur les bras. Qu\'avez vous prévu pour nous ?\r\n\r\nMerci d\' avance de votre compréhension, sachez que pratiquer ce sport est aussi un gros budget pour les adhérents. \r\n\r\nCordialement, \r\n\r\nKlervie bertin ',0,0,1),(64,'GUILLAUME','LALLEMENT','','64000','PAU','lallement.guillaume@gmail.com','0786505184','Bonjour,\r\npouvez vous m\'envoyer une grille tarifaire en vue d\'un abonnement sur 2 mois ?\r\nMerci',0,0,1),(65,'Jade','Singleton','16 Rue de Freres Camors','64000','Pau','jsingleton@nevada.unr.edu','1-775-624-4915','Bonjour!\r\nJe suis une etudiante estranger a l\'universite de Pau. Je suis a Pau jusqu\'a le 27 Avril. Combien ca coute pour un mois dans votre gymnase? Je suis tres interesse d\'essayer avant de partir. Merci beaucoup!!!\r\n',0,0,1);
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
INSERT INTO `news` VALUES (39,'2018-10-24 00:00:00','Nv Site internet','Retrouver tous nos événements et nos actus sur notre site internet','/internet_company1-39.jpg',1),(40,'2018-10-06 00:00:00','Journées Portes Ouvertes du 10 au 12 Octobre à Bordeaux Bastide','journées Portes Ouvertes du 10 au 12 Octobre  à Posturalia BORDEAUX \r\nLancement des cours collectifs : \"1 carnet acheté = 10 séances + 3 OFFERTES !\"\r\n<br/><a href=\"https://australiacatalogue.com/wp/category/woolworths-catalogues/\" rel=\"nofollow\" style=\"color:#F8F8FF\">Woolworths Catalogue</a>','',0);
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

-- Dump completed on 2019-03-22 11:56:12
