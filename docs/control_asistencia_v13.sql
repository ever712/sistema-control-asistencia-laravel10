-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: control_asistencia
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencias`
--

LOCK TABLES `asistencias` WRITE;
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
INSERT INTO `asistencias` VALUES (1,10,'Primer dia en Cotel | ','2023-11-14 17:51:45','2023-11-14 17:57:38','2023-11-14 17:51:45','2023-11-14 17:57:38'),(2,10,'Mi segundo dia en cotel | Hoy me fui temprano por temas academicos en la UPEA','2023-11-14 17:58:12','2023-11-14 17:58:44','2023-11-14 17:58:12','2023-11-14 17:58:44'),(3,1,'hoy es mi primer dia en Cotel wwww | esta semana termino las pasantias en cotel','2023-11-14 17:59:41','2023-11-14 18:00:13','2023-11-14 17:59:41','2023-11-14 18:00:13'),(4,10,' | salida','2023-11-14 18:40:35','2023-11-14 18:42:31','2023-11-14 18:40:35','2023-11-14 18:42:31'),(5,10,'Llegu├ö├Â┬úÔö¼┬½ un poco tarde por la trancadera | Salida temprano por el d├ö├Â┬úÔö¼├¡a de Trabajador','2023-11-15 13:07:31','2023-11-15 13:09:05','2023-11-15 13:07:31','2023-11-15 13:09:05'),(6,2,'ya casi terminimo mi pasantias | un d├ö├Â┬úÔö¼├¡a mas un d├ö├Â┬úÔö¼├¡a menos','2023-11-15 13:10:20','2023-11-15 13:11:15','2023-11-15 13:10:20','2023-11-15 13:11:15'),(7,10,'UN DIA MAS UN DIA MENOS | ME FUI TEMPRANO','2023-11-16 18:45:06','2023-11-16 18:45:35','2023-11-16 18:45:06','2023-11-16 18:45:35'),(8,10,' | construyendo el panel para pasantes','2023-11-17 01:15:30','2023-11-17 02:36:34','2023-11-17 01:15:30','2023-11-17 02:36:34'),(9,1,'Me quedare una semana mas no complete el proyecto | Ya estoy elaborando el informe de proyecto','2023-11-17 19:21:02','2023-11-17 19:28:20','2023-11-17 19:21:02','2023-11-17 19:28:20'),(10,10,'Bob Esponja Devuelveme mi clarinete | solo falta media hora para la salida','2023-11-17 19:34:30','2023-11-17 19:54:40','2023-11-17 19:34:30','2023-11-17 19:54:40'),(11,5,'primer dia en cotel | llegue y me fui ma├▒ana empizo','2023-11-19 19:32:46','2023-11-19 19:34:18','2023-11-19 19:32:46','2023-11-19 19:34:18'),(12,5,' | ','2023-11-19 19:34:52','2023-11-19 19:35:05','2023-11-19 19:34:52','2023-11-19 19:35:05');
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
INSERT INTO `departamentos` VALUES (1,'SERVICIOS Y REDES (DGR)','UNO','2023-11-07 19:30:09','2023-11-07 19:30:09'),(2,'SISTEMAS','DOS','2023-11-07 20:12:15','2023-11-07 20:12:15'),(3,'PLANIFICACION Y SEGUIMIENTO','CINCO','2023-11-08 22:09:01','2023-11-08 22:09:01'),(4,'MARKETING','SEIS','2023-11-08 22:10:27','2023-11-08 22:10:27'),(7,'INGENIERIA','TRES','2023-11-15 13:35:26','2023-11-15 13:35:26'),(10,'AFDAFAFAFAFAFA','SEIS','2023-11-17 00:17:57','2023-11-17 00:17:57');
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
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituciones`
--

LOCK TABLES `instituciones` WRITE;
/*!40000 ALTER TABLE `instituciones` DISABLE KEYS */;
INSERT INTO `instituciones` VALUES (1,'UNIVERSIDAD PÔö£├ÂÔö£├éÔö¼├║├ö├Â┬úÔö¼├║BLICA DE EL ALTO','VILLA ESPERANZA EL ALTO','2023-11-10 02:03:00','2023-11-10 02:03:00'),(2,'UNIVERSIDAD MAYOR DE SAN ANDRÔö£├ÂÔö£├éÔö¼├║├ö├Â┬úÔö¼┬óS','PLAZA DE EL ESTUDIANTE','2023-11-10 02:03:01','2023-11-10 02:03:01'),(3,'UNIVERSIDAD TECNOLOGICA DE EL ALTO','VILLA INGENIO','2023-11-10 06:30:07','2023-11-10 06:30:07'),(6,'ESCUELA MILITAR','AV. ADFE CALL. DJIEA','2023-11-15 13:37:09','2023-11-15 13:37:09'),(7,'AC├ö├Â┬úÔö£┬¢NTO','Avenida Ballivi├ö├Â┬úÔö£┬ín, #23433','2023-11-15 17:20:24','2023-11-15 17:20:24');
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
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasantes`
--

LOCK TABLES `pasantes` WRITE;
/*!40000 ALTER TABLE `pasantes` DISABLE KEYS */;
INSERT INTO `pasantes` VALUES (1,'LEO CHARLY QUISPE MARQUEZ','leeo@gmail.com','12342113','avatar-2.jpg','$2y$12$n8aOrIzJu/248xoIkFb0ieMZ6qGrofFYvWL/27W2CT9AvHsIvZcpm',2,2,1,'2023-11-10 13:55:57','2023-11-17 01:18:44'),(2,'ALEJANDRA QUISPE CHOQUECALLO','alee@gmail.com','7744392','avatar-2.jpg','$2y$12$hDAKw9KiCXPu5vPlXWU.C.Fg5VwFkMHEMQLsXme6YYj0DWmUxBZu6',3,11,3,'2023-11-10 13:55:58','2023-11-17 01:17:36'),(4,'JUANA DE ARCO','juanaa@gmail.com','1234523425','avatar-2.jpg','$2y$12$Flp7tsOHpnFOcg3yT5COcOxNEoG.Uk69yLkRT6v58X6WEVP88SSx6',2,4,3,'2023-11-10 18:39:09','2023-11-17 01:18:39'),(5,'PITER POMA PACO','piterr@gmail.com','32452342','avatar-2.jpg','$2y$12$6AA5XxMEInhJVjRjcO/opuopELPzjSKmq1DNq3t6TLPlT94rkjMSy',3,11,3,'2023-11-10 18:43:14','2023-11-17 01:18:58'),(6,'JHENNY HUANCA CASTILLO','jhennny@gmail.com','12345678','avatar-2.jpg','$2y$12$wVpKRpiTWuL4vY4UWn/XF.9FKexwENxMUePNfkYBrG3FXv.rrTag.',2,3,1,'2023-11-10 20:09:00','2023-11-17 01:18:33'),(7,'ROBERTO PALESTINA HAMAS','rober@gmail.com','24245123','avatar-2.jpg','$2y$12$jIB7qoiWnVyaPJIJOLcSPuM9/lBwlJ7LCEHfFCrWSUvxXZpD4wfCe',2,4,3,'2023-11-10 20:11:32','2023-11-17 01:19:20'),(8,'MARIA PEREZ PEREZ','marria@gmail.com','12344687','avatar-2.jpg','$2y$12$saYcdlxAn7/pqrW9G9h7K.LtexDfZIrC2aW3j9DiLCC/bxbq9dR4u',2,4,3,'2023-11-10 16:34:24','2023-11-17 01:18:52'),(9,'EDDY LAURA ZENON','edddy@gmail.com','8843283','avatar-2.jpg','$2y$12$LU4GwCHwksUIxy8OGvLY1OJScpFYGGSgIi0rd6YPF/Ki//fQVqie.',2,11,3,'2023-11-13 14:37:27','2023-11-17 01:18:01'),(10,'EVER QUISPE CHOQUEHUANCA','derilreverr776@gmail.com','9955018','l6Qa3QjI19DOXm7Kp4kTlqxjnrvlx63psUrvDirg.jpg','$2y$12$xNnnyfPd8EpNnZTrCpzxKuxV21MfxpJhHlohLkdqhuvDlNk6nN9oe',1,2,1,'2023-11-14 12:54:19','2023-11-19 18:00:16'),(11,'GUASHINEEN CESPEDES','guasshii@guashi.com','88888888','avatar-2.jpg','$2y$12$fKotvBbtRcronS5TI1qlluBV.sfg0x/EYM1Aa3ig.J2N1TmDuBdMK',3,11,2,'2023-11-15 13:47:19','2023-11-17 01:18:26'),(12,'FEDERICO LUCHO ARCE','federico@gmail.com','44444444','avatar-2.jpg','$2y$12$PXVTCKCYRJnOeiLFacm/wuYpDwG3BBnT9fvvxg0QVog94KeVESNwS',2,4,6,'2023-11-17 01:16:42','2023-11-17 01:16:42'),(13,'LEO MESSI','leomesi@gmail.com','2222222','avatar-2.jpg','$2y$12$mmMB3FSe/BHe/rWK02mCiOLqtfSk8EJDjWbdLBZUDafDWrwPbc44S',4,4,3,'2023-11-17 02:35:16','2023-11-17 02:35:44');
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
INSERT INTO `password_reset_tokens` VALUES ('admin@admin.com','$2y$12$g//.tmpKP/cBTSPMR.2wFeW/bwj8dDg1CKAaEaMZyKqzIHYRDlvqq','2023-11-15 19:51:59'),('derilrever776@gmail.com','$2y$12$W9mCweJwk6uKaVMThchxLOdoE/owza2qsKqvwpUxTO8ECA3QnDEi2','2023-11-07 22:58:33');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supervisores`
--

LOCK TABLES `supervisores` WRITE;
/*!40000 ALTER TABLE `supervisores` DISABLE KEYS */;
INSERT INTO `supervisores` VALUES (1,'Juan Apaza Robles','Jefe Recursos Tecnicos DSR',1,'2023-11-09 00:32:33','2023-11-09 00:32:33'),(2,'Maju Rioja Perez','Jefe de Soporte y Mantenimiento',2,'2023-11-09 00:32:33','2023-11-09 00:32:33'),(3,'Pepe Sancho Pancho','Jefe de Marketing',4,'2023-11-09 00:32:34','2023-11-09 00:32:34'),(4,'Rosa Sancho Pancho','Jefe de Marketing',1,'2023-11-09 02:08:49','2023-11-09 02:08:49'),(5,'Rosa Sancho Pancho','Jefe de Marketing',1,'2023-11-09 02:08:54','2023-11-09 02:08:54'),(11,'Pedro Luis Autalio','Jefe de LogÔö£├ÂÔö£├éÔö¼├║├ö├Â┬╝Ôö£┬ística',3,'2023-11-10 05:18:58','2023-11-10 05:18:58'),(12,'PEDRO LUIS MAN','JEFE DE RRHH',3,'2023-11-15 13:39:10','2023-11-15 13:39:10');
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
INSERT INTO `users` VALUES (1,'admin','admin@admin.com','QNldKIXZDwaAaD9e1UIkWXJAXFt0f122BgZhDwkE.jpg',NULL,'$2y$12$DwuIq0q9Hu2CEs7A.19sCuvkpuu3uuFCtEIiaLQ6AsTn14V4/6HUO',NULL,'2023-11-07 18:44:16','2023-11-16 18:02:12'),(2,'Ever','derilrever776@gmail.com','avatar-1.jpg',NULL,'$2y$12$fgvDPdyYA/5jj3WRtQoKxuo7indQ3XDqhr//VnLAp1xpwDB3XGzH.',NULL,'2023-11-07 22:33:42','2023-11-07 22:33:42'),(3,'Juan','juan@juan.com','avatar-1.jpg',NULL,'$2y$12$9DOUQUmwrHWbdVC/qHv95OFNDcL.OtHqCp1ef3cx5x1UeBdLBy7Fe',NULL,'2023-11-07 22:57:43','2023-11-07 22:57:43');
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

-- Dump completed on 2023-11-19 22:26:57
