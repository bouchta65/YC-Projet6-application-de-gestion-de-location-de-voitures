-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: locationvoiture
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `client_id` varchar(100) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES ('jf325','Hassani','lhbib','lahbib14@gmail.com.com','0687654321'),('jf415','Bouchta','Mohamed','Bouchtamohamed01@gmail.com','0762389431'),('sf5894','benelaarbi','khadija','khadija2021@gmail.com','0668382431');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrat`
--

DROP TABLE IF EXISTS `contrat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contrat` (
  `contrat_id` int NOT NULL AUTO_INCREMENT,
  `voiture_id` varchar(250) DEFAULT NULL,
  `client_id` varchar(100) DEFAULT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `Duree` int NOT NULL,
  PRIMARY KEY (`contrat_id`),
  KEY `voiture_id` (`voiture_id`),
  KEY `client_id` (`client_id`),
  CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`voiture_id`) REFERENCES `voiture` (`matricule`) ON DELETE CASCADE,
  CONSTRAINT `contrat_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrat`
--

LOCK TABLES `contrat` WRITE;
/*!40000 ALTER TABLE `contrat` DISABLE KEYS */;
INSERT INTO `contrat` VALUES (1,'ABC123','jf415','2024-12-10','2024-12-15',15),(2,'DEF456','jf325','2024-12-11','2024-12-20',6);
/*!40000 ALTER TABLE `contrat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voiture` (
  `matricule` varchar(250) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `Annee` int NOT NULL,
  `type_carburant` enum('Diesel','Essence','Electrique','Hybride') NOT NULL,
  `image_voiture` varchar(255) DEFAULT NULL,
  `etat` enum('En Parc','Sous Location') NOT NULL,
  `prix_location` decimal(10,2) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voiture`
--

LOCK TABLES `voiture` WRITE;
/*!40000 ALTER TABLE `voiture` DISABLE KEYS */;
INSERT INTO `voiture` VALUES ('ABC123','Toyota','Corolla',2020,'Essence','image1.png','En Parc',350.00),('DEF456','Renault','Clio',2019,'Diesel','image2.png','Sous Location',300.00);
/*!40000 ALTER TABLE `voiture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'locationvoiture'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-10 16:09:28




-- Création de database : 
-- CREATE TABLE voiture (matricule  varchar(250) PRIMARY KEY,marque VARCHAR(255) NOT NULL,modele varchar(255) not null ,Annee int NOT NULL,type_carburant ENUM('Diesel', 'Essence', 'Electrique', 'Hybride') NOT null,image_voiture VARCHAR(255),etat ENUM('En Parc', 'Sous Location') NOT NULL,prix_location DECIMAL(10, 2) NOT NULL);

-- CREATE TABLE client (client_id VARCHAR(100) PRIMARY KEY,nom VARCHAR(255) NOT NULL,prenom VARCHAR(255) NOT NULL,email VARCHAR(255) UNIQUE NOT NULL,telephone VARCHAR(15) NOT NULL);

-- CREATE TABLE contrat (contrat_id INT AUTO_INCREMENT PRIMARY KEY,voiture_id VARCHAR(250),client_id VARCHAR(100),date_debut DATE NOT NULL,date_fin DATE NOT NULL,Duree int NOT NULL,FOREIGN KEY (voiture_id) REFERENCES voiture(matricule) ON DELETE CASCADE,FOREIGN KEY (client_id) REFERENCES client(client_id) ON DELETE CASCADE);

-- Insertion a la base de dinnée : 
-- INSERT INTO voiture (matricule, marque, modele, Annee, type_carburant, image_voiture, etat, prix_location)
-- VALUES 
-- ('ABC123', 'Toyota', 'Corolla', 2020, 'Essence', 'image1.png', 'En Parc', 350),
-- ('DEF456', 'Renault', 'Clio', 2021, 'Diesel', 'image2.png', 'Sous Location', 300);

-- INSERT INTO client (client_id,nom, prenom, email, telephone)
-- VALUES 
-- ('jf415','Bouchta', 'Mohamed', 'Bouchtamohamed01@gmail.com', '0762389431'),
-- ('jf325','Hassani', 'lhbib', 'lahbib14@gmail.com.com', '0687654321');

-- INSERT INTO client (client_id,nom, prenom, email, telephone)
-- VALUES 
-- ('sf5894','benelaarbi', 'khadija', 'khadija2021@gmail.com', '0668382431');

-- INSERT INTO contrat (voiture_id, client_id, date_debut, date_fin, Duree)
-- VALUES 
-- ('ABC123','jf415', '2024-12-10', '2024-12-15', 15),
-- ('DEF456', 'jf325', '2024-12-11', '2024-12-20', 6);

-- Update quelque champs : 
-- update voiture set Annee = 2019 where matricule="DEF456";
-- update client set nom = baladen where client_id = sf5894;


-- select les tableux
-- select * from voiture
-- select * from client order by telephone DESC
-- select * from contrat,client,voiture where contrat.client_id=client.client_id and voiture.matricule = contrat.voiture_id;  


-- delete un client : 
-- delete from client where nom = "bouchta";


