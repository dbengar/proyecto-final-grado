-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for debian-linux-gnu (aarch64)
--
-- Host: localhost    Database: PHBBDD
-- ------------------------------------------------------
-- Server version	10.5.19-MariaDB-0+deb11u2

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
  PRIMARY KEY (`id`)
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
-- Table structure for table `mensajes_bot`
--

DROP TABLE IF EXISTS `mensajes_bot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes_bot` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(255) NOT NULL,
  `tipo_mensaje` varchar(255) NOT NULL DEFAULT 'humedad_correcta',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes_bot`
--

LOCK TABLES `mensajes_bot` WRITE;
/*!40000 ALTER TABLE `mensajes_bot` DISABLE KEYS */;
INSERT INTO `mensajes_bot` VALUES (1,'Su planta tiene un porcentaje bajo de humedad al recomendado','humedad_baja','2023-06-04 15:48:14','2023-06-04 15:48:14'),(2,'Su planta tiene un porcentaje alto de humedad al recomendado','humedad_alta','2023-06-04 15:48:14','2023-06-04 15:48:14'),(3,'Su planta tiene el nivel correcto de humedad aconsejada','humedad_correcta','2023-06-07 08:26:05','2023-06-07 08:26:05');
/*!40000 ALTER TABLE `mensajes_bot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes_bot_new`
--

DROP TABLE IF EXISTS `mensajes_bot_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes_bot_new` (
  `new_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `umbral_humedad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes_bot_new`
--

LOCK TABLES `mensajes_bot_new` WRITE;
/*!40000 ALTER TABLE `mensajes_bot_new` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes_bot_new` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2023_05_24_192826_nueva-bd',2),(3,'2023_05_24_194432_remove_foreign_key_from_mensajes_bot_table',3),(4,'2023_05_24_194517_modify_id_column_in_users_table',3),(5,'2023_05_25_070516_temporarily_remove_fk_constraint_users_planta',4),(6,'2023_05_25_070810_modify_planta_id_to_autoincrement',5),(7,'2023_05_25_071720_modify_planta_table',6),(8,'2023_05_26_100223_drop_humedad_actual_column_from_planta_table',7),(9,'2023_05_26_100830_add_humedad_actual_column_to_planta_table',8),(10,'2023_05_30_165932_add_is_admin_to_users',9),(11,'2023_06_04_141748_modificar_tabla_mensajes_bot',10),(12,'2023_06_04_142158_eliminar_columna_tipo_notificacion_en_mensajes_bot',11),(13,'2023_06_04_171001_eliminar_tabla_mensajes_bot',12),(14,'2023_06_04_171248_eliminar_tabla_mensajes_bot_new',13),(15,'2023_06_04_171724_create_mensajes_bot_table',14),(18,'2023_06_05_201258_add_user_imagen_column_to_users_table',15),(19,'2023_06_07_101722_modify_mensaje_bot_table_add_humedad_correcta',15);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `planta`
--

DROP TABLE IF EXISTS `planta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planta` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `tipo_de_planta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha_plantacion` date NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `humedad_actual` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `planta_tipo_de_planta_foreign` (`tipo_de_planta`),
  KEY `planta_user_id_foreign` (`user_id`),
  CONSTRAINT `planta_tipo_de_planta_foreign` FOREIGN KEY (`tipo_de_planta`) REFERENCES `tipo_de_planta` (`name`),
  CONSTRAINT `planta_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planta`
--

LOCK TABLES `planta` WRITE;
/*!40000 ALTER TABLE `planta` DISABLE KEYS */;
INSERT INTO `planta` VALUES (4,'Cactus','Mi Primera planta','Cactus',NULL,NULL,'http://localhost/storage/plantas/u1iEPVdITASUAjNOx8PNCStFNoVqXzlh4D2Bkcab.jpg','2023-05-13',1,NULL),(6,'Platanera','Platanera macho. Mi primera planta :)','Platanera',NULL,NULL,'http://localhost/storage/plantas/tGB0s5S5cKwul7IDJl0nyANcRT6I06e9Yli1BCdO.jpg','2023-05-05',3,NULL),(9,'Calathea','Mi Calathea','Calathea',NULL,NULL,'http://localhost/storage/plantas/le7EqTfUrjceyAYxCOWqxR8K8wTe4XzLJVfAg0QL.jpg','2023-05-25',1,NULL),(13,'Orquídea','Orquídea blanca','Orquidea',NULL,NULL,'http://localhost/storage/plantas/CO6mfyBFrh5nV2gRUws8gQVfJXRWkVQuKopj8JUA.jpg','2022-09-08',1,NULL);
/*!40000 ALTER TABLE `planta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_de_planta`
--

DROP TABLE IF EXISTS `tipo_de_planta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_de_planta` (
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `humedad_maxima_aconsejada` decimal(5,2) NOT NULL,
  `humedad_minima_aconsejada` decimal(5,2) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_de_planta`
--

LOCK TABLES `tipo_de_planta` WRITE;
/*!40000 ALTER TABLE `tipo_de_planta` DISABLE KEYS */;
INSERT INTO `tipo_de_planta` VALUES ('Aloe vera',NULL,NULL,30.00,50.00),('Bambú',NULL,NULL,60.00,80.00),('Begonia',NULL,NULL,40.00,60.00),('Cactus',NULL,NULL,10.00,30.00),('Cala',NULL,NULL,70.00,90.00),('Calathea',NULL,NULL,30.00,50.00),('Crisantemo',NULL,NULL,50.00,70.00),('Ficus',NULL,NULL,40.00,60.00),('Helecho de Boston',NULL,NULL,80.00,50.00),('Hiedra inglesa',NULL,NULL,40.00,60.00),('Lavanda',NULL,NULL,40.00,60.00),('Lirio de paz',NULL,NULL,70.00,90.00),('Orquidea',NULL,NULL,40.00,70.00),('Patos',NULL,NULL,50.00,70.00),('Pilea peperomioides',NULL,NULL,50.00,70.00),('Planta araña',NULL,NULL,40.00,60.00),('Planta de jade',NULL,NULL,30.00,50.00),('Planta de serpiente',NULL,NULL,50.00,70.00),('Platanera',NULL,NULL,70.00,80.00),('Rosal',NULL,NULL,60.00,70.00),('Suculentas',NULL,NULL,30.00,50.00);
/*!40000 ALTER TABLE `tipo_de_planta` ENABLE KEYS */;
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `planta_registrada` bigint(20) unsigned DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `user_imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_planta_registrada_foreign` (`planta_registrada`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user','user@user.com',NULL,'$2y$10$9G7zkvA6JrmAapmlw.zHVu3nCQF8u9l.sYRDQ492FUIGag5rqpe4C',NULL,'2023-05-24 17:47:58','2023-06-08 23:51:21',4,0,'http://localhost/storage/users/n0PSYD8yhLdnRwbQD2RAu3fadMh6Nmfsga7azUWr.png'),(2,'user2','user2@user.com',NULL,'$2y$10$Q5wY12OXZ33evCI2cMoUnuG7yaH6Ij7YooXQyJ2vRpz/AosvNlmfK',NULL,'2023-05-25 10:44:37','2023-05-25 10:44:37',NULL,0,NULL),(3,'Maria Jose','maria@mail.com',NULL,'$2y$10$ChphZE5E9s60xIpOhxaESu04HLcfkfbVN6i5fR6IvAF9DzdfmGbO.',NULL,'2023-05-25 17:09:26','2023-05-25 17:11:27',1,0,NULL),(4,'Administrador','admin@example.com',NULL,'$2y$10$M7H6L1QluLJLHNq.dMUpnOkMwHR8JBOpKnoAh5LGv/s3v6M8DPgnG',NULL,'2023-05-30 15:22:12','2023-05-30 15:22:12',0,1,NULL),(7,'Daniel','daniel@gmail.com',NULL,'$2y$10$orKeS712f4h557q5nSTGlex88XFxJNyRJVwPE/DKY.nlT2iEHfzDa',NULL,'2023-06-06 15:36:23','2023-06-06 15:36:23',NULL,0,NULL),(8,'prueba','prueba1@user.com',NULL,'$2y$10$gliEbBgs401KTVRFjWEDIOgVKMqFg1Y.j05enTphQmDonT3wJVAbO',NULL,'2023-06-08 16:07:25','2023-06-08 16:07:25',NULL,0,NULL);
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

-- Dump completed on 2023-06-09  5:10:49
