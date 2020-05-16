-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hoststudiozcom
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

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
-- Current Database: `hoststudiozcom`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `hoststudiozcom` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hoststudiozcom`;

--
-- Table structure for table `enums`
--

DROP TABLE IF EXISTS `enums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `keys` varchar(30) NOT NULL,
  `value` varchar(30) NOT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `enums_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enums`
--

LOCK TABLES `enums` WRITE;
/*!40000 ALTER TABLE `enums` DISABLE KEYS */;
INSERT INTO `enums` VALUES (1,1,'Ram','1024 MB',1),(2,1,'Core CPU','1 X 2.40 GHz',2),(3,1,'Bandwidth','1024 GB',3),(4,1,'Fully Managed','',4),(5,1,'24/7','support',5),(6,1,'Free','Plesk Panel',6);
/*!40000 ALTER TABLE `enums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_05_15_000106_create_payments_table',1),(4,'2019_05_03_000001_create_customer_columns',2),(5,'2019_05_03_000002_create_subscriptions_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `request` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `service_id` (`service_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,1,18,'{\"ORDER_ID\":18,\"CUST_ID\":1,\"MOBILE_NO\":\"9716942965\",\"EMAIL\":\"hoststudioz@gmail.com\",\"TXN_AMOUNT\":\"1000\",\"CALLBACK_URL\":\"http:\\/\\/hoststudioz.com\\/payment\\/status\"}','','2020-05-16 00:34:17','2020-05-16 00:34:17'),(2,1,19,'{\"ORDER_ID\":19,\"CUST_ID\":1,\"MOBILE_NO\":\"9716942965\",\"EMAIL\":\"hoststudioz@gmail.com\",\"TXN_AMOUNT\":\"1000\",\"CALLBACK_URL\":\"http:\\/\\/hoststudioz.com\\/payment\\/status\"}','','2020-05-16 00:34:26','2020-05-16 00:34:26'),(3,1,20,'{\"ORDER_ID\":20,\"CUST_ID\":1,\"MOBILE_NO\":\"9716942965\",\"EMAIL\":\"hoststudioz@gmail.com\",\"TXN_AMOUNT\":\"1000\",\"CALLBACK_URL\":\"http:\\/\\/hoststudioz.com\\/payment\\/status\"}','','2020-05-16 00:35:00','2020-05-16 00:35:00'),(4,1,21,'{\"ORDER_ID\":21,\"CUST_ID\":1,\"MOBILE_NO\":\"9716942965\",\"EMAIL\":\"hoststudioz@gmail.com\",\"TXN_AMOUNT\":\"1000\",\"CALLBACK_URL\":\"http:\\/\\/hoststudioz.com\\/payment\\/status\"}','','2020-05-16 00:35:29','2020-05-16 00:35:29'),(5,1,22,'{\"ORDER_ID\":22,\"CUST_ID\":1,\"MOBILE_NO\":\"9716942965\",\"EMAIL\":\"hoststudioz@gmail.com\",\"TXN_AMOUNT\":\"1000\",\"CALLBACK_URL\":\"http:\\/\\/hoststudioz.com\\/payment\\/status\"}','','2020-05-16 00:37:53','2020-05-16 00:37:53');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `cycle` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Basic','Individuals/Freelancers',1000,'Monthly'),(2,'Basic','Individuals/Freelanc',1000,'Monthly');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `discription` tinytext DEFAULT NULL,
  `start` varchar(50) DEFAULT NULL,
  `expiry` varchar(50) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `services_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'test','disc','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1,'2020-05-15 17:23:07',NULL),(2,'nasir','Individuals/Freelancers','2020-05-16 00:00:00','2020-06-16 00:00:00',0,1,'2020-05-16 00:20:27','2020-05-16 00:20:27'),(3,'nasir','Individuals/Freelancers','2020-05-16 00:00:00','2020-06-16 00:00:00',0,1,'2020-05-16 00:21:25','2020-05-16 00:21:25'),(4,'nasir','Individuals/Freelancers','2021-05-16 00:00:00','2021-06-16 00:00:00',0,1,'2020-05-16 00:24:52','2020-05-16 00:24:52'),(5,'nasir','Individuals/Freelancers','2021-05-16 00:00:00','2021-06-16 00:00:00',0,1,'2020-05-16 00:25:07','2020-05-16 00:25:07'),(6,'nasir','Individuals/Freelancers','2021-05-16 00:00:00','2021-06-16 00:00:00',0,1,'2020-05-16 00:26:16','2020-05-16 00:26:16'),(7,'nasir','Individuals/Freelancers','2020-05-16 00:00:00','2020-06-16 00:00:00',0,1,'2020-05-16 00:28:59','2020-05-16 00:28:59'),(8,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:29:22','2020-05-16 00:29:22'),(9,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:29:29','2020-05-16 00:29:29'),(10,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:30:06','2020-05-16 00:30:06'),(11,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:31:02','2020-05-16 00:31:02'),(12,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:32:10','2020-05-16 00:32:10'),(13,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:32:21','2020-05-16 00:32:21'),(14,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:32:37','2020-05-16 00:32:37'),(15,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:33:01','2020-05-16 00:33:01'),(16,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:33:24','2020-05-16 00:33:24'),(17,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:34:03','2020-05-16 00:34:03'),(18,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:34:17','2020-05-16 00:34:17'),(19,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:34:26','2020-05-16 00:34:26'),(20,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:35:00','2020-05-16 00:35:00'),(21,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:35:29','2020-05-16 00:35:29'),(22,'nasir','Individuals/Freelancers',NULL,NULL,0,1,'2020-05-16 00:37:53','2020-05-16 00:37:53');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nasir','hoststudioz@gmail.com',NULL,'$2y$10$Fs1kJfEVpaVfWapiulroEeCKICXSqXPXNjp2D8YqXpvGxBbQ8li72',NULL,'2020-05-15 10:25:45','2020-05-15 10:25:45',NULL,NULL,NULL,NULL),(2,'nas','nas@ms.c',NULL,'$2y$10$4f0IVIBe27zclKPpymPEzeXIJ84INQQODYsnEqYy/DC1Zms4JZTPS',NULL,'2020-05-15 13:04:34','2020-05-15 13:04:34',NULL,NULL,NULL,NULL),(3,'sdsd','ads@sd.d',NULL,'$2y$10$9jb5.14QdFw0hQxms6bXte61QS/PqjIJmkzE7iKt4tXkqOkds4w2q',NULL,'2020-05-15 13:18:01','2020-05-15 13:18:01',NULL,NULL,NULL,NULL),(4,'sdsd','ads@sd.dw',NULL,'$2y$10$xv3ZLvfsGdIVeUBNnVewW.JoI.UvOEsrYBVGVGKUqE7f4yNP.lWP2',NULL,'2020-05-15 13:18:40','2020-05-15 13:18:40',NULL,NULL,NULL,NULL),(5,'ravi','ph9716942965@gmail.com',NULL,'$2y$10$.gSGePjDYgbdwh/Wv.F1nuuic2u8.1Dq49eBklT3CEFxq9PeM4MjO',NULL,'2020-05-16 00:44:28','2020-05-16 00:44:28',NULL,NULL,NULL,NULL),(6,'ravi','ph9716942962@gmail.com',NULL,'$2y$10$Se4uI/tIQaihhv9POb34iOyQA/6AySol5q.XdocTtFtkv5R5Jri3S',NULL,'2020-05-16 00:55:25','2020-05-16 00:55:25',NULL,NULL,NULL,NULL),(7,'ravi','ph9716942961@gmail.com',NULL,'$2y$10$jvO988LIcyU6ATcTMyHVzOkLB78zh40/0Ws2zYj/1dBR5DuSXS3QW',NULL,'2020-05-16 00:57:56','2020-05-16 00:57:56',NULL,NULL,NULL,NULL),(8,'ravi','ph9716942960@gmail.com',NULL,'$2y$10$Q4mzjCc6XBrHCXcDwPa9tOcyFzwmAD8Ev5pSyb48L1wdTFO73xseW',NULL,'2020-05-16 00:59:14','2020-05-16 00:59:14',NULL,NULL,NULL,NULL);
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

-- Dump completed on 2020-05-16 12:08:23
