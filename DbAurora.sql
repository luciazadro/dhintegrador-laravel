-- MySQL dump 10.13  Distrib 8.0.16, for macos10.14 (x86_64)
--
-- Host: localhost    Database: aurora_db_laravel
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `products` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Pintura',1000,NULL,NULL),(2,'Herreria',2000,NULL,NULL),(3,'Cementos',3000,NULL,NULL),(4,'Ceramicas',4000,NULL,NULL),(5,'Servicios',5000,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_06_26_145606__add_column_role_to_users_table',1),(4,'2019_06_26_145640__add_column_avatar_to_users_table',1),(5,'2019_06_26_150859_add_column_lastname_to_users_table',2),(6,'2019_07_01_000449_add_column_update_users_to_users_table',3),(7,'2019_07_05_221707_create_categories_table',4),(8,'2019_07_05_221717_create_stocks_table',4),(9,'2019_07_05_221753_create_orders_table',4),(14,'2019_07_05_221839_create_products_table',5),(15,'2019_07_05_221855_create_shippings_table',5),(16,'2019_07_05_221907_create_payments_table',5),(17,'2019_07_08_200512_create_carts_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `cart_id` bigint(20) NOT NULL,
  `shipping_id` bigint(20) NOT NULL,
  `payment_id` bigint(20) NOT NULL,
  `order_number` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
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
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
 SET character_set_client = utf8mb4 ;
CREATE TABLE `payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `method` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `allowed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `stock_id` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (5,'Cal','Milagro',3,100,415,'product_img/lz6uwCesGqokqLKSlHpzB6gs7sNDUSCNUT3mOFBJ.jpeg','2019-07-17 03:34:02','2019-07-17 03:34:02'),(7,'CAL','Hidratada',3,50,186,'product_img/uGeBUXn3AtTnX14Qbya6ddTG5VGc4KiKH3VsGeRu.jpeg','2019-07-17 03:36:28','2019-07-17 03:36:28'),(8,'Cemento','Hidralit de 50 Kg',3,80,229,'product_img/Trta3ohYz224G89iX4r9ohNVAaH0qJH5g6m02E3x.jpeg','2019-07-17 03:38:19','2019-07-17 03:38:19'),(9,'Cemento','Loma Negra de 50 Kg',3,40,378,'product_img/DhUtWvRFyTDzGWSioDQZkjvDeA4MNmw39N5NHOaA.jpeg','2019-07-17 03:42:50','2019-07-17 03:42:50'),(10,'Ladrillo','Comun',4,1000,10,'product_img/0034Jug9qeYAZOCugkzsOfP5ymBzjXsZ8vSwQ00J.jpeg','2019-07-17 03:44:00','2019-07-17 03:44:00'),(11,'Ladrillo','Later',4,1000,52,'product_img/WkwbyAzYEKgb16Z2WYAkEKigTEtQwY6kUP56WKBK.jpeg','2019-07-17 03:44:53','2019-07-17 03:44:53'),(12,'Ladrillo','Later Cer',4,1000,18,'product_img/8WZ9RfLyaCnWDgLhPpUyQIhUCvAJvPWF3PiZikV5.jpeg','2019-07-17 03:45:26','2019-07-17 03:45:26'),(13,'Ladrillo','Hueco 18x18x33 9A',4,10000,32,'product_img/8g69Qg4jiZb0k82ApI1vcpmH2DEUbiRHWBn0HVqJ.jpeg','2019-07-17 03:46:24','2019-07-17 03:46:24'),(14,'Ladrillo','Hueco 12x18x33 9A',4,10000,22,'product_img/y4qgSFwUezpRSwweXFrlUxAvvsQ4NS3ilJ7nhzEG.jpeg','2019-07-17 03:47:09','2019-07-17 03:47:09'),(15,'Ladrillo','Hueco 12x18x33 6A',4,10000,21,'product_img/91GUo90gt0uWtamK4Mkv4b5EsumwrP186XM9SsYh.jpeg','2019-07-17 03:47:45','2019-07-17 03:47:45'),(16,'Pintura','Alba de 10 Litros',1,20,1900,'product_img/dKYCEesKSb4v1VxOcOhntDy36KxWYx3Sg6orcB8W.jpeg','2019-07-17 03:48:33','2019-07-17 03:48:33'),(17,'Pintura','Vernier',1,15,2500,'product_img/E4T7KKsG6ZM2o4bza1vFGsRClw8VRU7p4CfWAQux.jpeg','2019-07-17 03:49:03','2019-07-17 03:49:03'),(18,'Pintura','Sherwin Williams',1,10,3500,'product_img/CynHipr3XverwrGhhOaRtfbks71Mti3PNJr873ff.jpeg','2019-07-17 03:49:38','2019-07-17 03:49:38'),(19,'Hierro','Hierro Redondo Adn 08Mm',2,35,315,'product_img/owRG3R7zr2PRAU4GwUSXZqH6AwrO9YzniM71dXle.jpeg','2019-07-17 03:50:28','2019-07-17 03:50:28'),(20,'Columna','Armada 010x010x3 Mts',2,70,710,'product_img/ZyVkCd4a5OuvslYaAZrLpr7yDGysnj7py8AioymN.jpeg','2019-07-17 03:51:23','2019-07-17 03:51:23'),(21,'Instalaciones','Generales',5,100,1500,'product_img/HbW8w4QSWuaIJCjKt7JH7Tc4CRDma8C234jHccNC.jpeg','2019-07-17 03:51:59','2019-07-17 03:51:59'),(22,'Instalaciones','Estufas',5,100,1800,'product_img/s3BwEuiDdpf7XL4akHRSOxtHHL6KNe1CnFovuRHe.jpeg','2019-07-17 03:52:39','2019-07-17 03:52:39'),(23,'Instalaciones','Ventanas',5,100,1700,'product_img/dx3DxbbttXyY5ZKh55ag0XPx2UM9LePvIFvDwabs.jpeg','2019-07-17 03:53:09','2019-07-17 03:53:09'),(24,'Ceramica','San Lorenzo x Caja',4,1000,400,'product_img/1gERMO9jcUPPocsWLOrGW6DuYL7rD396WU2JjGAH.jpeg','2019-07-17 03:53:51','2019-07-17 03:53:51'),(25,'Ceramica','Athenea Porfido',4,1000,450,'product_img/XVgAS5jJN9CN8bMAyrlwVTQInXl74SpkgUk17QHU.jpeg','2019-07-17 03:54:26','2019-07-17 03:54:26'),(26,'Ceramica','Alberdi',5,1000,480,'product_img/ovy1rinOYGOGOE9EbqTwZsWfu8kuAyLmVy5krZbW.jpeg','2019-07-17 03:54:54','2019-07-17 03:54:54');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `shippings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `method` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shippings`
--

LOCK TABLES `shippings` WRITE;
/*!40000 ALTER TABLE `shippings` DISABLE KEYS */;
/*!40000 ALTER TABLE `shippings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `stocks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stocks`
--

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '3',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mauro','mauro@gmail.com',NULL,'$2y$10$eGc4YHUyUDvw6tof.BuMn.CwubeZxx0tahqpcnpugPfwEUZ6BttUu',NULL,'2019-06-28 03:17:21','2019-06-28 03:17:21',9,'mPrDAZvzBBA5rSQ6H6OHOLn6NPjLOTFuqosPzVDo.png','Profetico',NULL,NULL,NULL,NULL,NULL),(5,'Lucia','lucia@gmail.com',NULL,'$2y$10$NMtTe7imcHNHDRKyCorRruPMQz5Pdrp1MiTWSZ71oJE47eVBNDm9e',NULL,'2019-07-17 23:33:25','2019-07-17 23:33:25',3,'3xEDXSfn4bP3JGxlFgRX5plmS8Wp6fEI9evwLhx7.jpeg','Zadro',NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2019-07-17 18:45:53
