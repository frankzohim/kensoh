-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: kensoh
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL,
  `title` varchar(1000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Article','1_1653761915_congratulations.jpg.jpg',1,2,'2022-05-28 14:35:18','2022-05-28 17:18:35'),(2,'Test1','2_1653763317_cls-slider1-1.jpg.jpg',1,2,'2022-05-28 16:01:27','2022-05-28 17:41:57'),(3,'Arrivé d\'un nouveau conteneur','Arrivé d\'un nouveau conteneur_1653780053_1.jpg.jpg',1,2,'2022-05-28 22:20:53','2022-05-28 22:20:53'),(1,'Article','1_1653761915_congratulations.jpg.jpg',1,2,'2022-05-28 14:35:18','2022-05-28 17:18:35'),(2,'Test1','2_1653763317_cls-slider1-1.jpg.jpg',1,2,'2022-05-28 16:01:27','2022-05-28 17:41:57'),(3,'Arrivé d\'un nouveau conteneur','Arrivé d\'un nouveau conteneur_1653780053_1.jpg.jpg',1,2,'2022-05-28 22:20:53','2022-05-28 22:20:53');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brands_user_id_foreign` (`user_id`),
  CONSTRAINT `brands_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Samsung',1,2,'2022-03-19 17:18:34','2022-03-19 17:18:34'),(2,'Audi',1,2,'2022-03-19 17:54:47','2022-03-21 18:09:05'),(3,'Tesla',1,2,'2022-03-21 13:56:38','2022-03-21 13:56:38'),(4,'Hisense',1,2,'2022-03-21 14:06:24','2022-03-21 14:06:24'),(5,'LG',1,2,'2022-03-21 14:07:59','2022-03-21 14:07:59'),(6,'Lenovo',1,2,'2022-03-21 14:08:56','2022-03-21 14:08:56');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int unsigned DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Category 1','category-1','2022-03-03 08:33:12','2022-03-03 08:33:12'),(2,NULL,1,'Category 2','category-2','2022-03-03 08:33:12','2022-03-03 08:33:12');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `localization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan','Afghanistan','AF','93',NULL,'2020-10-23 15:34:27','2021-04-15 13:50:44'),(2,'Afrique du Sud','South Africa','ZA','27',NULL,'2020-04-18 13:09:46','2021-04-16 12:30:19'),(3,'Albanie','Albania','AL','355',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(4,'Algérie','Algéria','DZ','213',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(5,'Allemagne','Germany','DE','49',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(6,'Andorre','Andorra','AD','376',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(7,'Angola','Angola','AO','244',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(8,'Arabie Saoudite','Saudi Arabia','SA','966',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(9,'Argentine','Argentina','AR','54',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(10,'Armanie','Armana','AM','374',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(11,'Australie','Australia','AU','61',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(12,'Autriche','Autria','AT','43',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(13,'Azerbandjan','Azerbaijan','AZ','994',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(14,'Bahamas','Bahamas','BS','1 242',NULL,'2020-04-18 13:09:46','2020-04-18 13:09:46'),(15,'Bahrein','Bahrain','BH','973',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(16,'Bangladesh','Bangladesh','BD','880',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(17,'Belgique','belgium','BE','32',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(18,'Bénin','Benin','229','BJ',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(19,'Bhoutan','Bhutan','BT','975',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(20,'Biélorussie','Belarus','BLR','375',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(21,'Birmanie ','Burma','MMR','95',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(22,'Bolivie','Bolivia','BO','591',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(23,'Bosnie-Herzégovine','Bosnia and Bosnie-Herzégovina','BA','381',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(24,'Botswana','Botswana','BW','267',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(25,'Brésil','Brazil','BR','55',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(26,'Brunei','Brunei','BR','673',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(27,'Bulgarie','Bulgaria','BG','359',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(28,'Burkina Faso','Burkina','BF','226',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(29,'Burundi','Burundi','BI','257',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(30,'Cambodge','Cambodia','KH','855',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(31,'Cameroun','Cameroon','CM','237',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(32,'Canada','Canada','CA','1',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(33,'Cap-Vert','Cape verde','CV','238',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(34,'Chili','Chile','CL','56',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(35,'Chine','China','CN','86',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(36,'Chypre','Cyprus','CY','357',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(37,'Colombie','Colombia','CO','57',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(38,'Comores','Comorien','KM','269',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(39,'Congo','Congo','CG','242',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(40,'Corée du Nord','Korea Northen','KP','850',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(41,'Corée du Sud','Korea South','KR','82',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(42,'Costa Rica','Costa Rica','CR','506',NULL,'2020-04-18 13:09:47','2020-04-18 13:09:47'),(43,'Côte d Ivoire','Ivory coast','CI','225',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(44,'Croatie','Croatia','HR','385',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(45,'Cuba','Cuba','CU','53',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(46,'Danemark','Denmark','DK','45',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(47,'Djibouti','Djibouti','DJ','253',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(48,'Dominicaine République','Dominican Republic','DO','1',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(49,'Dominique','Dominica','DM','1 767',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(50,'Egypte','Egypt','EG','20',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(51,'Emirats arabes unis','United Arab Emirats','AE','971',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(52,'Equateur','Ecuator','EC','593',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(53,'Erythrée','Eritrea','ER','291',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(54,'Espagne','Spain','ES','34',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(55,'Estonie','Estonia','EE','372',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(56,'Etats-Unis d Amérique','United States of America','US','1',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(57,'Ethiopie','Ethiopia','ET','251',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(58,'Fidji','Fiji','FJ','679',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(59,'Finlande','Finland','FI','358',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(60,'France','France','FR','33',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(61,'Gabon','Gabon','GA','241',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(62,'Gambie','Gambia','GM','220',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(63,'Géorgie','Géorgia','GE','995',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(64,'Ghana','Ghana','GH','223',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(65,'Grèce','Grec','GR','30',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(66,'Grenade','Grenada','GD','1 473',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(67,'Groenland','Groenlandais','GL','299',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(68,'Guatemala','Guatemala','GT','502',NULL,'2020-04-18 13:09:48','2020-04-18 13:09:48'),(69,'Guinée','Guinea','GN','224',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(70,'Guinée-Bissau','Guinea-Bissau','GW','245',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(71,'Guinée équatoriale','Equatorial Guinea','GQ','240',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(72,'Guyane','Guyana','GY','592',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(73,'Haiti','Haitien','HT','509',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(74,'Honduras','Honduras','HN','504',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(75,'Hongrie','Hongrois','HU','36',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(76,'Inde','India','IN','91',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(77,'Indonésie','Indonesia','ID','62',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(78,'Irak','Iraq','IQ','964',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(79,'Iran','Iran','IR','98',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(80,'Irlande','Irland','IE','353',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(81,'Islande','Iceland','IS','354',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(82,'Israel','Israel','IL','972',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(83,'Italie','Italy','IT','39',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(84,'Japon','Japona','JP','81',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(85,'Jordanie','Jordan','JO','962',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(86,'Kazakhstan','Kazakhstan','KZ','7',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(87,'Kenya','Kenyan','KE','254',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(88,'Kirghizistan','Kirghystan','KG','996',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(89,'Kiribati','Kiribati','KI','686',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(90,'Koweit','Kuwait','KW','965',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(91,'Laos','Laos','LA','856',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(92,'Lesotho','','Lesotho','266',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(93,'Lettonie','Latvia','LV','371',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(94,'Liban','Lebanon','LB','961',NULL,'2020-04-18 13:09:49','2020-04-18 13:09:49'),(95,'Libéria','Libéria','LR','231',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(96,'Libye','Lybia','LY','218',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(97,'Liechtenstein','Liechtenstein','LI','243',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(98,'Lituanie','Lithunia','LT','370',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(99,'Luxembourg','Luxembourg','LU','352',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(100,'Macédoine','Macedonia','MK','389',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(101,'Madagascar','Madagascar','MG','261',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(102,'Malaisie','Malaysia','MY','60',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(103,'Malawi','Malawi','MW','265',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(104,'Maldives','Maldives','MV','960',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(105,'Mali','Mali','ML','223',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(106,'Malte','Malta','MT','356',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(107,'Maroc','Marocain','MA','212',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(108,'Marshall','Marshall Island','MH','692',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(109,'Maurice','Mauritius','MU','230',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(110,'Mauritanie','Mauritania','MR','222',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(111,'Mexique','Mexicain','MX','52',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(112,'Micronésie','Micronésia','FM','691',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(113,'Moldova','Moldova','MD','373',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(114,'Monaco','Monaco','MC','377',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(116,'Monténégro','Montenegro','ME','382',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(117,'Mozambique','Mozambicain','MZ','258',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(118,'Namibie','Namibien','NA','264',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(119,'Nauru','Nauru','NR','674',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(120,'Népal','Népal','NP','977',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(121,'Nicaragua','Nicaraguay','NI','505',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(122,'Niger','Niger','NE','227',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(123,'Nigéria','Nigeria','NG','234',NULL,'2020-04-18 13:09:50','2020-04-18 13:09:50'),(124,'Niue','Niue','NU','683',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(125,'Norvège','Norway','NO','47',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(126,'Nouvelle-Zélande','New Zealand','NZ','64',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(127,'Oman','Oman','OM','968',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(128,'Ouganda','Uganda','UG','256',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(129,'Ouzbékistan','Uzbekistan','UG','998',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(130,'Pakistan','Pakistan','PK','92',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(131,'Palaos','Palau','PW','680',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(132,'Palestine','Palestinia','PS','970',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(133,'Panama','Panama','PA','507',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(134,'Papouasie-Nouvelle-Guinée','Papua New Guinea','PG','675',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(135,'Paraguay','Paraguay','PY','595',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(136,'Pays-Bas','Netherlands','NL','31',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(137,'Pérou','Peru','PE','51',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(138,'Philippines','Philippine','PH','63',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(139,'Pologne','Poland','PL','48',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(140,'Portugal','Portugal','PT','351',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(141,'Qatar','Qatar','QA','974',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(142,'République centrafricaine','Central African Republic','CF','65',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(143,'Roumanie','Roumania','RO','40',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(144,'Royaume-Uni','United Kingdom','GB','44',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(145,'Russie','Russia','RU','7',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(146,'Rwanda','Rwanda','RW','250',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(147,'Saint-Kitts-et-Nevis','Saint Kitts and Nevis','KN','1 869',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(148,'Sainte-Lucie','Saint Lucia','LC','1 758',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(149,'Saint-Marin','San Marino','SM','378',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(150,'Saint-Vincent-et-les-Grenadines','Saint Vincent and the Grenadines','VC','1 784',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(151,'Salomon, Iles','Solomon Islands','SB','677',NULL,'2020-04-18 13:09:51','2020-04-18 13:09:51'),(152,'Salvador','Salvador','SV','503',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(153,'Samoa','Samoa','WS','685',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(154,'Sao Tomé et-Principe','Sao Tome and Principe','ST','239',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(155,'Sénégal','Senegal','SN','221',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(156,'Serbie','Serbia','RS','381',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(157,'Seychelles','Seychellles','SC','248',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(158,'Sierra Leone','Sierra leonne','SL','232',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(159,'Singapour','Singapoure','SG','65',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(160,'Slovaquie','Slovakia','SK','421',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(161,'Slovénie','Slovania','SI','386',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(162,'Somalie','Somalia','SO','252',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(163,'Soudan','Sudan','SD','249',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(164,'Soudan du Sud','South Sudan','SS','211',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(165,'Sri Lanka','Sri lanka','LK','94',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(166,'Suède','Swenden','SE','46',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(167,'Suisse','Switzerland','CH','41',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(168,'Suriname','Suriname','SR','597',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(169,'Syrie','Syria','SY','963',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(170,'Swaziland','Swaziland','268','SZ',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(171,'Tadjikistan','Tajikisan','TJ','992',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(172,'Tanzanie','Tanzania','TZ','255',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(173,'Tchad','Tchadien','TD','235',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(174,'Tchèque','Czech','CZ','420',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(175,'Thailande','Thailand','TH','66',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(176,'Timor oriental','East Timor','TO','670',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(177,'Togo','Togo','TG','228',NULL,'2020-04-18 13:09:52','2020-04-18 13:09:52'),(178,'Tonga','Tongo','TO','676',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(179,'Trinité-et-Tobago','Trinidad and Tobago','TT','1 868',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(180,'Tunisie','Tunisia','TN','216',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(181,'Turkménistan','Turkmenistan','TM','993',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(182,'Turquie','Turkey','TR','90',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(183,'Tuvalu','Tuvalu','TV','688',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(184,'Ukraine','Ukraine','UA','380',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(185,'Uruguay','Uruguay','UY','598',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(186,'Vanuatu','Vanuatu','VU','678',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(187,'Vatican','Vatican City','VA','39',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(188,'Venezuela','Venezuala','VE','58',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(189,'Vietnam','Vietnam','VN','84',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(190,'Yémen','Yemen','YE','967',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(191,'Zambie','Zambia','ZM','260',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53'),(192,'Zimbabwe','Zimbabwe','ZW','263',NULL,'2020-04-18 13:09:53','2020-04-18 13:09:53');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coupons` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount` double NOT NULL,
  `state` tinyint(1) NOT NULL,
  `store_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `coupons_store_id_foreign` (`store_id`),
  KEY `coupons_user_id_foreign` (`user_id`),
  CONSTRAINT `coupons_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`),
  CONSTRAINT `coupons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
INSERT INTO `coupons` VALUES (2,'Ecran','ecran237','2022-04-01','2022-04-06',25,1,3,2,'2022-03-30 21:22:26','2022-03-30 21:24:50');
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','voyager::seeders.data_rows.roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,4,'id','number','ID',1,0,0,0,0,0,NULL,1),(23,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(24,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(25,4,'name','text','Name',1,1,1,1,1,1,NULL,4),(26,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(27,4,'created_at','timestamp','Created At',0,0,1,0,0,0,NULL,6),(28,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(29,5,'id','number','ID',1,0,0,0,0,0,NULL,1),(30,5,'author_id','text','Author',1,0,1,1,0,1,NULL,2),(31,5,'category_id','text','Category',1,0,1,1,1,0,NULL,3),(32,5,'title','text','Title',1,1,1,1,1,1,NULL,4),(33,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,5),(34,5,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,6),(35,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(36,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(37,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,NULL,9),(38,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,NULL,10),(39,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(40,5,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,12),(41,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,13),(42,5,'seo_title','text','SEO Title',0,1,1,1,1,1,NULL,14),(43,5,'featured','checkbox','Featured',1,1,1,1,1,1,NULL,15),(44,6,'id','number','ID',1,0,0,0,0,0,NULL,1),(45,6,'author_id','text','Author',1,0,0,0,0,0,NULL,2),(46,6,'title','text','Title',1,1,1,1,1,1,NULL,3),(47,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,4),(48,6,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,5),(49,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(50,6,'meta_description','text','Meta Description',1,0,1,1,1,1,NULL,7),(51,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,NULL,8),(52,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(53,6,'created_at','timestamp','Created At',1,1,1,0,0,0,NULL,10),(54,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,NULL,11),(55,6,'image','image','Page Image',0,1,1,1,1,1,NULL,12);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2022-03-03 08:33:11','2022-03-03 08:33:11'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2022-03-03 08:48:28','2022-03-03 08:48:28'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2022-03-03 08:48:28','2022-03-03 08:48:28');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `faqs_user_id_foreign` (`user_id`),
  CONSTRAINT `faqs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (2,'puis connaitre comment vous fonctionner pour la vente des produits??','tout depend de votre produit.',1,2,'2022-04-20 10:06:10','2022-04-20 10:06:10'),(3,'hgkpo','ugo',1,2,'2022-06-08 09:38:09','2022-06-08 09:38:09'),(4,'faites vous des depanages?','oui',1,2,'2022-06-08 10:42:05','2022-06-08 10:42:05');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2022-03-03 08:23:03','2022-03-03 08:23:03',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2022-03-03 08:23:03','2022-03-03 08:23:03','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,8,'2022-03-03 08:33:11','2022-03-03 08:33:11','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,6,'2022-03-03 08:48:28','2022-03-03 08:48:28','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,7,'2022-03-03 08:48:28','2022-03-03 08:48:28','voyager.pages.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2022-03-03 08:23:03','2022-03-03 08:23:03');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_03_02_123416_country',1),(2,'2013_03_02_123417_town',1),(3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2019_08_19_000000_create_failed_jobs_table',1),(6,'2019_12_14_000001_create_personal_access_tokens_table',1),(7,'2022_03_02_140615_store',1),(8,'2022_03_02_140628_brand',1),(9,'2022_03_02_140640_category',1),(10,'2022_03_02_140755_product',1),(11,'2022_03_02_140807_product_dimensions',1),(12,'2022_03_02_140823_product_images',1),(13,'2022_03_02_140838_review',1),(14,'2022_03_02_140922_order',1),(15,'2022_03_02_140933_order_items',1),(16,'2022_03_02_140946_search',1),(17,'2022_03_02_140956_contact',1),(18,'2022_03_02_141014_coupon',1),(19,'2022_03_02_141027_faq',1),(20,'2022_03_02_141038_package',1),(21,'2022_03_02_141048_parameters',1),(22,'2016_01_01_000000_add_voyager_user_fields',2),(23,'2016_01_01_000000_create_data_types_table',2),(24,'2016_05_19_173453_create_menu_table',2),(25,'2016_10_21_190000_create_roles_table',2),(26,'2016_10_21_190000_create_settings_table',2),(27,'2016_11_30_135954_create_permission_table',2),(28,'2016_11_30_141208_create_permission_role_table',2),(29,'2016_12_26_201236_data_types__add__server_side',2),(30,'2017_01_13_000000_add_route_to_menu_items_table',2),(31,'2017_01_14_005015_create_translations_table',2),(32,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',2),(33,'2017_03_06_000000_add_controller_to_data_types_table',2),(34,'2017_04_21_000000_add_order_to_data_rows_table',2),(35,'2017_07_05_210000_add_policyname_to_data_types_table',2),(36,'2017_08_05_000000_add_group_to_settings_table',2),(37,'2017_11_26_013050_add_user_role_relationship',2),(38,'2017_11_26_015000_create_user_roles_table',2),(39,'2018_03_11_000000_add_user_settings',2),(40,'2018_03_14_000000_add_details_to_data_types_table',2),(41,'2018_03_16_000000_make_settings_value_nullable',2),(42,'2016_01_01_000000_create_pages_table',3),(43,'2016_01_01_000000_create_posts_table',3),(44,'2016_02_15_204651_create_categories_table',4),(45,'2017_04_11_000000_alter_post_nullable_fields_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_user_id_foreign` (`user_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `order_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `budget` double NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `packages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `weight` double NOT NULL,
  `departure` bigint unsigned NOT NULL,
  `destination` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `package_departure_foreign` (`departure`),
  KEY `package_destination_foreign` (`destination`),
  KEY `package_user_id_foreign` (`user_id`),
  CONSTRAINT `package_departure_foreign` FOREIGN KEY (`departure`) REFERENCES `towns` (`id`),
  CONSTRAINT `package_destination_foreign` FOREIGN KEY (`destination`) REFERENCES `towns` (`id`),
  CONSTRAINT `package_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'Tablette',12,114,10,2,2,3,'2022-04-20 14:22:25','2022-04-20 14:22:25'),(2,'une barbouche dans un plastics noir',57,34,20,6,2,3,'2022-06-08 15:05:22','2022-06-08 15:05:22');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/page1.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2022-03-03 08:48:28','2022-03-03 08:48:28');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parameters`
--

DROP TABLE IF EXISTS `parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parameters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` int NOT NULL,
  `state` tinyint(1) NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parameters_user_id_foreign` (`user_id`),
  CONSTRAINT `parameters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parameters`
--

LOCK TABLES `parameters` WRITE;
/*!40000 ALTER TABLE `parameters` DISABLE KEYS */;
/*!40000 ALTER TABLE `parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(16,3),(17,1),(17,3),(18,1),(18,3),(19,1),(19,3),(20,1),(20,3),(21,1),(21,3),(22,1),(22,3),(23,1),(23,3),(24,1),(24,3),(25,1),(25,3),(26,1),(26,3),(27,1),(27,3),(28,1),(28,3),(29,1),(29,3),(30,1),(30,3),(31,1),(31,3),(32,1),(32,3),(33,1),(33,3),(34,1),(34,3),(35,1),(35,3),(36,1),(36,3),(37,1),(37,3),(38,1),(38,3),(39,1),(39,3),(40,1),(40,3);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(2,'browse_bread',NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(3,'browse_database',NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(4,'browse_media',NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(5,'browse_compass',NULL,'2022-03-03 08:23:03','2022-03-03 08:23:03'),(6,'browse_menus','menus','2022-03-03 08:23:03','2022-03-03 08:23:03'),(7,'read_menus','menus','2022-03-03 08:23:03','2022-03-03 08:23:03'),(8,'edit_menus','menus','2022-03-03 08:23:03','2022-03-03 08:23:03'),(9,'add_menus','menus','2022-03-03 08:23:03','2022-03-03 08:23:03'),(10,'delete_menus','menus','2022-03-03 08:23:03','2022-03-03 08:23:03'),(11,'browse_roles','roles','2022-03-03 08:23:03','2022-03-03 08:23:03'),(12,'read_roles','roles','2022-03-03 08:23:03','2022-03-03 08:23:03'),(13,'edit_roles','roles','2022-03-03 08:23:03','2022-03-03 08:23:03'),(14,'add_roles','roles','2022-03-03 08:23:03','2022-03-03 08:23:03'),(15,'delete_roles','roles','2022-03-03 08:23:03','2022-03-03 08:23:03'),(16,'browse_users','users','2022-03-03 08:23:03','2022-03-03 08:23:03'),(17,'read_users','users','2022-03-03 08:23:03','2022-03-03 08:23:03'),(18,'edit_users','users','2022-03-03 08:23:03','2022-03-03 08:23:03'),(19,'add_users','users','2022-03-03 08:23:03','2022-03-03 08:23:03'),(20,'delete_users','users','2022-03-03 08:23:03','2022-03-03 08:23:03'),(21,'browse_settings','settings','2022-03-03 08:23:03','2022-03-03 08:23:03'),(22,'read_settings','settings','2022-03-03 08:23:03','2022-03-03 08:23:03'),(23,'edit_settings','settings','2022-03-03 08:23:03','2022-03-03 08:23:03'),(24,'add_settings','settings','2022-03-03 08:23:03','2022-03-03 08:23:03'),(25,'delete_settings','settings','2022-03-03 08:23:03','2022-03-03 08:23:03'),(26,'browse_categories','categories','2022-03-03 08:33:11','2022-03-03 08:33:11'),(27,'read_categories','categories','2022-03-03 08:33:12','2022-03-03 08:33:12'),(28,'edit_categories','categories','2022-03-03 08:33:12','2022-03-03 08:33:12'),(29,'add_categories','categories','2022-03-03 08:33:12','2022-03-03 08:33:12'),(30,'delete_categories','categories','2022-03-03 08:33:12','2022-03-03 08:33:12'),(31,'browse_posts','posts','2022-03-03 08:48:28','2022-03-03 08:48:28'),(32,'read_posts','posts','2022-03-03 08:48:28','2022-03-03 08:48:28'),(33,'edit_posts','posts','2022-03-03 08:48:28','2022-03-03 08:48:28'),(34,'add_posts','posts','2022-03-03 08:48:28','2022-03-03 08:48:28'),(35,'delete_posts','posts','2022-03-03 08:48:28','2022-03-03 08:48:28'),(36,'browse_pages','pages','2022-03-03 08:48:28','2022-03-03 08:48:28'),(37,'read_pages','pages','2022-03-03 08:48:28','2022-03-03 08:48:28'),(38,'edit_pages','pages','2022-03-03 08:48:28','2022-03-03 08:48:28'),(39,'add_pages','pages','2022-03-03 08:48:28','2022-03-03 08:48:28'),(40,'delete_pages','pages','2022-03-03 08:48:28','2022-03-03 08:48:28');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-03-03 08:48:28','2022-03-03 08:48:28'),(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\r\n                <h2>We can use all kinds of format!</h2>\r\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-03-03 08:48:28','2022-03-03 08:48:28'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-03-03 08:48:28','2022-03-03 08:48:28'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\r\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\r\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2022-03-03 08:48:28','2022-03-03 08:48:28');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `parent` bigint NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_user_id_foreign` (`user_id`),
  CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,'Electronique','electronique','Electronique','Electronique',1,0,2,'2022-03-26 10:31:32','2022-03-30 21:17:49'),(2,'Ordinateurs','ordinateurs','Ventes d\'ordinateurs de qualité, neufs et d\'occassions','Ordinateurs, laptop, PC, Desktop',1,1,2,'2022-03-26 11:20:02','2022-03-26 13:54:53');
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_dimensions`
--

DROP TABLE IF EXISTS `product_dimensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_dimensions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `weight` double NOT NULL,
  `height` double NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_dimensions_product_id_foreign` (`product_id`),
  CONSTRAINT `product_dimensions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_dimensions`
--

LOCK TABLES `product_dimensions` WRITE;
/*!40000 ALTER TABLE `product_dimensions` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_dimensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`),
  CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (23,'2_1649416678_Ecran-plat.jpg.jpg',2,'2022-04-08 10:17:58','2022-04-08 10:17:58'),(24,'2_1649417374_ecran-plat-2.jpg.jpg',2,'2022-04-08 10:29:34','2022-04-08 10:29:34'),(25,'3_1649421366_laptop-10.jpg.jpg',3,'2022-04-08 11:36:06','2022-04-08 11:36:06'),(26,'3_1649421941_laptop-11.jpg.jpg',3,'2022-04-08 11:45:41','2022-04-08 11:45:41'),(27,'6_1649422321_canape1-1.jpg.jpg',6,'2022-04-08 11:52:01','2022-04-08 11:52:01'),(28,'5_1649422603_canape2-2.jpg.jpg',5,'2022-04-08 11:56:43','2022-04-08 11:56:43'),(29,'4_1649423168_frigo.jpg.jpg',4,'2022-04-08 12:06:08','2022-04-08 12:06:08');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `new` tinyint(1) NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `unit_price` double NOT NULL,
  `stock_quantity` bigint NOT NULL,
  `nature` tinyint(1) NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `brand_id` bigint unsigned NOT NULL,
  `store_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_store_id_foreign` (`store_id`),
  KEY `products_user_id_foreign` (`user_id`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`),
  CONSTRAINT `products_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`),
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'Ecran Samsung 32','ecransamsung32',1,'1',1,'Ecran Samsung 32','Ecran, samsung',0,225000,15,1,1,1,3,2,'2022-03-26 20:48:29','2022-04-01 18:11:19'),(3,'Laptop','laptop',1,'3',1,'Laptop','Laptop',1,500000,10,1,2,4,3,2,'2022-04-07 19:40:08','2022-04-07 19:40:08'),(4,'Frigo','frigo',0,'1',0,'Frigo','Frigo',1,220000,10,1,1,1,1,2,'2022-04-07 19:43:24','2022-04-08 11:59:03'),(5,'Canapé','canape',0,'2',1,'Canapé 7 places','Canapé',1,700000,10,1,1,1,1,2,'2022-04-07 20:01:54','2022-04-07 20:01:54'),(6,'Canapé','canape',1,'2',1,'Canapé 9 places','Canapé',1,1000000,5,1,1,1,1,2,'2022-04-07 20:05:27','2022-04-07 20:05:27');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `star` int NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_user_id_foreign` (`user_id`),
  CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2022-03-03 08:23:03','2022-03-03 08:23:03'),(2,'user','Normal User','2022-03-03 08:23:03','2022-03-03 08:23:03'),(3,'Vendor','Vendor','2022-03-10 10:30:55','2022-03-10 10:30:55');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `search` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `term` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `search_user_id_foreign` (`user_id`),
  CONSTRAINT `search_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `description` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stores_email_unique` (`email`),
  KEY `stores_town_id_foreign` (`town`),
  KEY `stores_user_id_foreign` (`user_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (1,'Stillforce Technologies','+237694297339','contact@stillforce.tech','Beedi','1_1648384005_profil.jpg.jpg',1,'Stillforce Technologies','Douala',31,2,'2022-03-26 20:39:43','2022-03-30 21:35:50'),(3,'Kensoh','+23797852436','admin@admin.com','Augsbourg','Kensoh_1648384970_logo.png.png',1,'Kensoh','Augsbourg',5,2,'2022-03-27 11:42:50','2022-03-27 11:42:50');
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `towns`
--

DROP TABLE IF EXISTS `towns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `towns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `country_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `towns_country_id_foreign` (`country_id`),
  CONSTRAINT `towns_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `towns`
--

LOCK TABLES `towns` WRITE;
/*!40000 ALTER TABLE `towns` DISABLE KEYS */;
INSERT INTO `towns` VALUES (2,'Douala',0,31,'2022-03-03 10:46:54','2022-03-03 10:46:54'),(3,'yaounde',0,31,'2022-06-08 14:46:21','2022-06-08 14:46:21'),(4,'paris',1,60,'2022-06-08 14:47:39','2022-06-08 14:47:39'),(5,'quebec',1,32,'2022-06-08 14:48:54','2022-06-08 14:48:54'),(6,'abudja',1,123,'2022-06-08 14:49:23','2022-06-08 14:49:23'),(7,'veranda',1,32,'2022-06-08 14:50:01','2022-06-08 14:50:01');
/*!40000 ALTER TABLE `towns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2022-03-03 08:48:28','2022-03-03 08:48:28'),(2,'data_types','display_name_singular',6,'pt','Página','2022-03-03 08:48:28','2022-03-03 08:48:28'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2022-03-03 08:48:28','2022-03-03 08:48:28'),(4,'data_types','display_name_singular',4,'pt','Categoria','2022-03-03 08:48:28','2022-03-03 08:48:28'),(5,'data_types','display_name_singular',2,'pt','Menu','2022-03-03 08:48:28','2022-03-03 08:48:28'),(6,'data_types','display_name_singular',3,'pt','Função','2022-03-03 08:48:28','2022-03-03 08:48:28'),(7,'data_types','display_name_plural',5,'pt','Posts','2022-03-03 08:48:28','2022-03-03 08:48:28'),(8,'data_types','display_name_plural',6,'pt','Páginas','2022-03-03 08:48:28','2022-03-03 08:48:28'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2022-03-03 08:48:28','2022-03-03 08:48:28'),(10,'data_types','display_name_plural',4,'pt','Categorias','2022-03-03 08:48:28','2022-03-03 08:48:28'),(11,'data_types','display_name_plural',2,'pt','Menus','2022-03-03 08:48:28','2022-03-03 08:48:28'),(12,'data_types','display_name_plural',3,'pt','Funções','2022-03-03 08:48:28','2022-03-03 08:48:28'),(13,'categories','slug',1,'pt','categoria-1','2022-03-03 08:48:28','2022-03-03 08:48:28'),(14,'categories','name',1,'pt','Categoria 1','2022-03-03 08:48:28','2022-03-03 08:48:28'),(15,'categories','slug',2,'pt','categoria-2','2022-03-03 08:48:28','2022-03-03 08:48:28'),(16,'categories','name',2,'pt','Categoria 2','2022-03-03 08:48:28','2022-03-03 08:48:28'),(17,'pages','title',1,'pt','Olá Mundo','2022-03-03 08:48:28','2022-03-03 08:48:28'),(18,'pages','slug',1,'pt','ola-mundo','2022-03-03 08:48:29','2022-03-03 08:48:29'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2022-03-03 08:48:29','2022-03-03 08:48:29'),(20,'menu_items','title',1,'pt','Painel de Controle','2022-03-03 08:48:29','2022-03-03 08:48:29'),(21,'menu_items','title',2,'pt','Media','2022-03-03 08:48:29','2022-03-03 08:48:29'),(22,'menu_items','title',12,'pt','Publicações','2022-03-03 08:48:29','2022-03-03 08:48:29'),(23,'menu_items','title',3,'pt','Utilizadores','2022-03-03 08:48:29','2022-03-03 08:48:29'),(24,'menu_items','title',11,'pt','Categorias','2022-03-03 08:48:29','2022-03-03 08:48:29'),(25,'menu_items','title',13,'pt','Páginas','2022-03-03 08:48:29','2022-03-03 08:48:29'),(26,'menu_items','title',4,'pt','Funções','2022-03-03 08:48:29','2022-03-03 08:48:29'),(27,'menu_items','title',5,'pt','Ferramentas','2022-03-03 08:48:29','2022-03-03 08:48:29'),(28,'menu_items','title',6,'pt','Menus','2022-03-03 08:48:29','2022-03-03 08:48:29'),(29,'menu_items','title',7,'pt','Base de dados','2022-03-03 08:48:29','2022-03-03 08:48:29'),(30,'menu_items','title',10,'pt','Configurações','2022-03-03 08:48:29','2022-03-03 08:48:29');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `country_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profil` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,1,'Admin',NULL,'admin@admin.com','users/default.png','2022-03-30 21:01:05','$2y$10$T1Bcc4ii.E43yShgZuhY..4pYRJBx8.aOhoHw9OJr7ghdQkSYlfqi',NULL,0,'uhfzMuGxsp71tSRrKy6DR0oj3WD6sceYXz1gKZOz8QOLme1A1lGIIEulAFgz',NULL,31,'2022-03-03 08:48:28','2022-03-03 08:48:28',NULL),(3,2,'Elos','tos','elos@gmail.com','users/default.png','2022-03-30 21:02:28','$2y$10$tGscbZFjDjOPlhkEJZw2Ne2b4gkXjmhaFb4rjquvVgDtPcYHQN47i',NULL,0,NULL,NULL,31,'2022-03-10 09:57:10','2022-03-10 09:57:10',NULL),(4,2,'Anatole','Regis','anatoleregis@gmail.com','users/default.png','2022-03-30 21:02:34','$2y$10$Lkca7QAyxZMO.waYhA7rWe.qm.embVHLyo7yvOaswfet.vPK5tIce',NULL,0,NULL,NULL,31,'2022-03-10 10:47:52','2022-03-10 10:47:52',NULL),(5,2,'Foka','Paul','paulfoka@gmail.com','users/default.png','2022-03-30 21:02:39','$2y$10$qCgJzNVYxIjWjoAaWFu1hOrgCHniAiFQ/qs4OT/2VNDLNQy.HF4Iu',NULL,0,NULL,NULL,31,'2022-03-10 11:55:13','2022-03-10 11:55:13',NULL),(6,2,'Henry','Mercedes','henry@gmail.com','users/default.png','2022-03-30 21:02:44','$2y$10$dhusGzy0IoSeA5k/WPuvhu622vfkwXumQllcpLi.PqVlGLsjC6bMy',NULL,0,NULL,NULL,31,'2022-03-10 12:06:01','2022-03-10 12:06:01',NULL),(7,2,'Harvey','Specter','harvey@gmail.com','users/default.png','2022-03-30 21:02:50','$2y$10$DRec2xWpDbwgCRBt.gtkkumvlkf1D4oLBWk0CxJglwYOntDMbW16C',NULL,0,NULL,NULL,31,'2022-03-10 12:07:05','2022-03-10 12:07:05',NULL),(8,2,'Stack','overflow','stack@gmail.com','users/default.png','2022-03-30 21:02:56','$2y$10$23TDYueBLUbgofLsRNUkcO4dlCkcGwfEooh276WFSw5yRU8BpYlG2',NULL,0,NULL,NULL,31,'2022-03-10 12:25:13','2022-03-10 12:25:13',NULL),(9,3,'sop','Sip','sopsip@gmail.com','users/default.png','2022-03-30 21:03:01','$2y$10$wElzYdcvBJy5/jsTNgDsge3eR8216beoLwQK6bu2UXqCSRB7Evwiy',NULL,0,NULL,NULL,31,'2022-03-10 12:27:47','2022-03-10 12:27:47',NULL),(10,3,'Franklin','FOFE ZOHIM','delanofofe@gmail.com','users/default.png','2022-03-30 21:03:06','$2y$10$t58FYf9ekPxifIFxya9.UOX3CCti9ACXI9bbstNmna9Nq9hFAgzEG','694297339',0,NULL,NULL,31,'2022-03-29 17:37:52','2022-03-29 17:37:52',NULL),(11,3,'Delano','Fofe','contact@stillforce.tech','users/default.png','2022-03-30 21:03:13','$2y$10$SvLJcDFz8Ijn9gVphEOjA.RCICaJqzTd5Hpm6WKNfx39Cx9xnX1oO','6942973339',0,NULL,NULL,31,'2022-03-29 18:02:59','2022-03-29 18:02:59',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'kensoh'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-09 11:06:44
