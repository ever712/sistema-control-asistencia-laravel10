-- MariaDB dump 10.19  Distrib 10.11.4-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: control_asistencia
-- ------------------------------------------------------
-- Server version	10.11.4-MariaDB-1~deb12u1

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
-- Table structure for table `asistencias`
--

DROP TABLE IF EXISTS `asistencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pasante_id` int(11) DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL,
  `ingreso` timestamp NULL DEFAULT current_timestamp(),
  `salida` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `pasante_id` (`pasante_id`),
  CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`pasante_id`) REFERENCES `pasantes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencias`
--

LOCK TABLES `asistencias` WRITE;
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
INSERT INTO `asistencias` VALUES
(1,10,' ','2023-11-01 08:33:14','2023-11-01 12:00:45','2023-12-01 12:18:04','2023-12-01 12:18:06'),
(3,10,' ','2023-11-03 08:32:41','2023-11-03 16:35:13','2023-12-01 12:18:14','2023-12-01 12:18:17'),
(4,10,' ','2023-11-06 08:36:34','2023-11-06 16:30:43','2023-12-01 12:18:19','2023-12-01 12:18:21'),
(5,10,' ','2023-11-07 08:33:53','2023-11-07 16:30:32','2023-12-01 12:18:23','2023-12-01 12:18:25'),
(6,10,' ','2023-11-08 08:32:44','2023-11-08 16:29:55','2023-12-01 12:18:26','2023-12-01 12:18:28'),
(7,10,' ','2023-11-09 08:30:38','2023-11-09 16:31:44','2023-12-01 12:18:31','2023-12-01 12:18:33'),
(8,10,' ','2023-11-10 08:32:42','2023-11-10 16:32:15','2023-12-01 12:19:34','2023-12-01 12:19:36'),
(9,10,' ','2023-11-13 08:38:22','2023-11-13 16:30:43','2023-12-01 12:19:37','2023-12-01 12:19:39'),
(10,10,' ','2023-11-14 08:35:53','2023-11-14 16:30:12','2023-12-01 12:19:40','2023-12-01 12:19:42'),
(11,10,' ','2023-11-15 08:39:14','2023-11-15 16:35:32','2023-12-01 12:19:45','2023-12-01 12:19:47'),
(12,10,' ','2023-11-16 08:30:18','2023-11-16 16:34:54','2023-12-01 12:19:48','2023-12-01 12:19:50'),
(13,10,' ','2023-11-17 08:29:32','2023-11-17 16:30:35','2023-12-01 12:19:51','2023-12-01 12:19:58'),
(14,10,' ','2023-11-20 08:28:22','2023-11-20 16:30:43','2023-12-01 12:20:00','2023-12-01 12:20:02'),
(15,10,' ','2023-11-21 08:28:11','2023-11-21 16:35:23','2023-12-01 12:20:07','2023-12-01 12:20:09'),
(16,10,' ','2023-11-22 08:31:18','2023-11-22 16:38:24','2023-12-01 12:20:14','2023-12-01 12:20:16'),
(17,10,' ','2023-11-23 08:33:38','2023-11-23 16:37:42','2023-12-01 12:20:18','2023-12-01 12:20:20'),
(18,10,' ','2023-11-24 08:34:44','2023-11-24 16:33:54','2023-12-01 12:20:21','2023-12-01 12:20:23'),
(19,10,' ','2023-11-27 08:29:32','2023-11-27 16:31:53','2023-12-01 12:20:31','2023-12-01 12:20:33'),
(20,10,' ','2023-11-28 08:30:21','2023-11-28 16:32:42','2023-12-01 12:20:35','2023-12-01 12:20:37'),
(21,10,' ','2023-11-29 08:33:32','2023-11-29 16:30:14','2023-12-01 12:20:40','2023-12-01 12:20:45'),
(22,10,' ','2023-11-30 08:35:13','2023-11-30 16:30:15','2023-12-01 12:20:57','2023-12-01 12:20:59'),
(23,10,' ','2023-12-01 08:31:34','2023-12-01 16:35:19','2023-12-01 12:21:08','2023-12-01 12:21:22'),
(24,14,' ','2023-11-13 08:32:22','2023-11-13 16:34:24','2023-12-01 12:29:30','2023-12-01 12:29:32'),
(25,14,' ','2023-11-14 08:31:54','2023-11-14 16:30:49','2023-12-01 12:29:34','2023-12-01 12:29:35'),
(26,14,' ','2023-11-15 08:33:43','2023-11-15 16:31:12','2023-12-01 12:29:37','2023-12-01 12:29:38'),
(27,14,' ','2023-11-16 08:32:42','2023-11-16 16:35:10','2023-12-01 12:29:39','2023-12-01 12:29:41'),
(28,14,' ','2023-11-17 08:30:45','2023-11-17 16:38:30','2023-12-01 12:29:44','2023-12-01 12:29:46'),
(29,14,' ','2023-11-20 08:33:54','2023-11-20 16:37:35','2023-12-01 12:29:47','2023-12-01 12:29:49'),
(30,14,' ','2023-11-21 08:35:12','2023-11-21 16:34:11','2023-12-01 12:29:50','2023-12-01 12:29:52'),
(31,14,' ','2023-11-22 08:29:32','2023-11-22 16:30:53','2023-12-01 12:30:29','2023-12-01 12:30:31'),
(32,14,' ','2023-11-23 08:34:38','2023-11-23 16:32:32','2023-12-01 12:30:32','2023-12-01 12:30:34'),
(33,14,' ','2023-11-24 08:31:24','2023-11-24 16:30:34','2023-12-01 12:30:35','2023-12-01 12:30:36'),
(34,14,' ','2023-11-27 08:32:13','2023-11-27 16:30:25','2023-12-01 12:30:38','2023-12-01 12:30:39'),
(35,14,' ','2023-11-28 08:35:34','2023-11-28 16:32:29','2023-12-01 12:30:41','2023-12-01 12:30:44'),
(36,14,' ','2023-11-29 08:31:31','2023-11-29 16:33:14','2023-12-01 12:30:50','2023-12-01 12:30:51'),
(37,14,' ','2023-11-30 08:30:04','2023-11-30 16:33:22','2023-12-01 12:30:53','2023-12-01 12:30:55'),
(38,14,' ','2023-12-01 08:33:39','2023-12-01 16:31:11','2023-12-01 12:30:59','2023-12-01 12:31:01');
/*!40000 ALTER TABLE `asistencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `piso` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES
(1,'GESTION DE REDES','CUATRO','2023-11-07 19:30:09','2023-11-26 03:02:40'),
(2,'SISTEMAS','UNO','2023-11-07 20:12:15','2023-11-25 08:57:33'),
(3,'PLANIFICACION Y SEGUIMIENTO','CINCO','2023-11-08 22:09:01','2023-11-08 22:09:01'),
(4,'MARKETING','SEIS','2023-11-08 22:10:27','2023-11-08 22:10:27'),
(7,'INGENIERIA','TRES','2023-11-15 13:35:26','2023-11-15 13:35:26'),
(10,'RECURSOS HUMANOS','OCHO','2023-11-17 00:17:57','2023-11-25 08:57:52');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `instituciones`
--

DROP TABLE IF EXISTS `instituciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instituciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituciones`
--

LOCK TABLES `instituciones` WRITE;
/*!40000 ALTER TABLE `instituciones` DISABLE KEYS */;
INSERT INTO `instituciones` VALUES
(1,'UNIVERSIDAD PUBLICA DE EL ALTO','Av. Sucre, esq. Pascoe El Alto, Departamento de La Paz Bolivia','2023-11-10 02:03:00','2023-11-25 09:04:21'),
(2,'UNIVERSIDAD MAYOR DE SAN ANDRES','Av. Villazón N° 1995, Plaza del Bicentenario - Zona Central','2023-11-10 02:03:01','2023-11-26 00:36:21'),
(3,'UNIVERSIDAD TECNOLOGICA DE EL ALTO','VILLA INGENIO','2023-11-10 06:30:07','2023-11-10 06:30:07'),
(6,'UNIVERSIDAD BOLIVIANA DE INFORMATICA','Calle Murillo 952 entre Sagarnaga y Cochabamba','2023-11-15 13:37:09','2023-11-25 09:05:20'),
(7,'UNIVERSIDAD CATOLICA BOLIVIANA SAN PABLO','Av. 14 de Septiembre N 4807, esq. calle 2, Obrajes','2023-11-15 17:20:24','2023-11-26 00:34:30'),
(8,'UNIVERSIDAD ANDINA SIMON BOLIVAR','Calle San Salvador #1351','2023-11-25 09:07:19','2023-11-25 09:07:19'),
(9,'UNIVERSIDAD NACIONAL SIGLO XX','Edificio Camiri calle Comercio Esq. Yanacocha La Paz Bolivia','2023-11-25 09:07:52','2023-11-25 09:07:52');
/*!40000 ALTER TABLE `instituciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2014_10_12_100000_create_password_resets_table',1),
(4,'2019_08_19_000000_create_failed_jobs_table',1),
(5,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasantes`
--

DROP TABLE IF EXISTS `pasantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ci` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'avatar-2.jpg',
  `password` varchar(255) NOT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `institucion_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `departamento_id` (`departamento_id`),
  KEY `supervisor_id` (`supervisor_id`),
  KEY `institucion_id` (`institucion_id`),
  CONSTRAINT `pasantes_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  CONSTRAINT `pasantes_ibfk_2` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisores` (`id`),
  CONSTRAINT `pasantes_ibfk_3` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasantes`
--

LOCK TABLES `pasantes` WRITE;
/*!40000 ALTER TABLE `pasantes` DISABLE KEYS */;
INSERT INTO `pasantes` VALUES
(1,'LEO CHARLY QUISPE MARQUEZ','leocharlyquispe@gmail.com','9885757','avatar-2.jpg','$2y$12$IazgYYpOU9mmSPybKu61OehaZJUvywrhA.2q6Oi8dVEIeBH148ub6',2,14,1,'2023-11-10 13:55:57','2023-11-26 09:33:03'),
(2,'ALEJANDRA QUISPE CHOQUECALLO','alejandraquispe@gmail.com','7058322','avatar-2.jpg','$2y$12$mZBGjEU2sE8KmqVZP6EIKeA1nTmCTj.B5YXvEcIVJHAA3Jk73Os9m',2,14,1,'2023-11-10 13:55:58','2023-11-26 09:32:44'),
(9,'EDDY LAURA ZENON','zenon.eddy@gmail.com','9899764','avatar-2.jpg','$2y$12$apgjD45oDgn.PNd5qBY.a.BIvJ/IW3.CXops8BDgTs8uousO7qtz2',4,11,3,'2023-11-13 14:37:27','2023-11-26 03:05:35'),
(10,'EVER QUISPE CHOQUEHUANCA','derilreverr776@gmail.com','9955018','prR4hjgmMarEmUJvkjlpQ2ZLP7dQtxGRvTH34IIl.jpg','$2y$12$xNnnyfPd8EpNnZTrCpzxKuxV21MfxpJhHlohLkdqhuvDlNk6nN9oe',1,2,1,'2023-11-14 12:54:19','2023-11-26 11:00:23'),
(14,'JOSE LUIS CHALCO','joseluisch@gmail.com','8264286','avatar-2.jpg','$2y$12$ddO9vjk/b/JsezajInXqqugLoXMXIGK5oyGMkedzxPc3W2mNmXSw.',1,2,1,'2023-11-25 09:11:17','2023-11-26 09:32:28'),
(15,'JUAN PEREZ','juanperez@gmail.com','6541244-A','avatar-2.jpg','$2y$12$4PHF0cwd/x/ik6RMTZtADuyH8wBlSVfKF65pG0B4iZkEaowkZXoU2',4,11,1,'2023-11-26 16:19:21','2023-11-26 16:19:21');
/*!40000 ALTER TABLE `pasantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
INSERT INTO `password_reset_tokens` VALUES
('admin@admin.com','$2y$12$g//.tmpKP/cBTSPMR.2wFeW/bwj8dDg1CKAaEaMZyKqzIHYRDlvqq','2023-11-15 19:51:59'),
('derilrever776@gmail.com','$2y$12$W9mCweJwk6uKaVMThchxLOdoE/owza2qsKqvwpUxTO8ECA3QnDEi2','2023-11-07 22:58:33');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `supervisores`
--

DROP TABLE IF EXISTS `supervisores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supervisores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id_departamento` (`departamento_id`),
  CONSTRAINT `supervisores_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supervisores`
--

LOCK TABLES `supervisores` WRITE;
/*!40000 ALTER TABLE `supervisores` DISABLE KEYS */;
INSERT INTO `supervisores` VALUES
(2,'MARCOS ILLANES AÑAGUAYA','JEFE DE RECURSOS TECNICOS',1,'2023-11-09 00:32:33','2023-11-26 00:37:43'),
(11,'PEDRO LUIS AUTALIO','ESPECIALISTA EN REDES SOCIALES',4,'2023-11-10 05:18:58','2023-11-26 03:00:51'),
(14,'FAUSTO PUÑA','MANTENIMIENTO DE SISTEMAS',2,'2023-11-26 01:06:02','2023-11-26 01:06:02');
/*!40000 ALTER TABLE `supervisores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'avatar-1.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'admin','admin@admin.com','QNldKIXZDwaAaD9e1UIkWXJAXFt0f122BgZhDwkE.jpg',NULL,'$2y$12$DwuIq0q9Hu2CEs7A.19sCuvkpuu3uuFCtEIiaLQ6AsTn14V4/6HUO',NULL,'2023-11-07 18:44:16','2023-11-16 18:02:12'),
(2,'Ever','derilrever776@gmail.com','avatar-1.jpg',NULL,'$2y$12$fgvDPdyYA/5jj3WRtQoKxuo7indQ3XDqhr//VnLAp1xpwDB3XGzH.',NULL,'2023-11-07 22:33:42','2023-11-07 22:33:42'),
(3,'Juan','juan@juan.com','avatar-1.jpg',NULL,'$2y$12$9DOUQUmwrHWbdVC/qHv95OFNDcL.OtHqCp1ef3cx5x1UeBdLBy7Fe',NULL,'2023-11-07 22:57:43','2023-11-07 22:57:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-01 23:15:42
