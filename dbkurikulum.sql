-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: dbkurikulum
-- ------------------------------------------------------
-- Server version	8.0.40

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
-- Table structure for table `log_piket`
--

DROP TABLE IF EXISTS `log_piket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_piket` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_piket`
--

LOCK TABLES `log_piket` WRITE;
/*!40000 ALTER TABLE `log_piket` DISABLE KEYS */;
INSERT INTO `log_piket` VALUES (1,'gu','2025-07-26 09:08:31'),(2,'gu','2025-07-26 09:09:18'),(3,'sd','2025-07-26 09:14:24'),(4,'wes','2025-07-26 09:26:49'),(5,'lol','2025-07-26 09:55:20'),(6,'lil','2025-07-26 10:02:28'),(7,'lul','2025-07-26 10:04:23'),(8,'siti','2025-07-26 10:54:44'),(9,'soto','2025-07-26 11:00:13'),(10,'shin','2025-07-26 11:05:06'),(11,'affan','2025-07-26 11:21:15');
/*!40000 ALTER TABLE `log_piket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_ijin`
--

DROP TABLE IF EXISTS `surat_ijin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `surat_ijin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `jam_ke` varchar(10) DEFAULT NULL,
  `keperluan` text,
  `qr_token` varchar(10) DEFAULT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `print_token` varchar(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `guru_piket` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_ijin`
--

LOCK TABLES `surat_ijin` WRITE;
/*!40000 ALTER TABLE `surat_ijin` DISABLE KEYS */;
INSERT INTO `surat_ijin` VALUES (1,'Tes1','X RPL 1','089','089','ngopi',NULL,NULL,'B9YX1',NULL,NULL),(2,'Tes1','X RPL 1','089','089','ngopi',NULL,NULL,'6PAWG',NULL,NULL),(3,'Tes1','X RPL 1','089','089','ngopi',NULL,NULL,'9ZZPP',NULL,NULL),(4,'Tes1','X RPL 1','089','089','ngopi',NULL,'2025-07-25 14:09:26','2TJ3M',NULL,NULL),(5,'Tes1','X RPL 1','089','089','ngopi',NULL,'2025-07-25 14:09:31','QW78F',NULL,NULL),(6,'asd','asd','089','asd','asd',NULL,'2025-07-25 14:12:19','JKKRT','disetujui',NULL),(7,'asd','asd','089','asd','asd',NULL,'2025-07-25 14:12:23','DCSKK','disetujui',NULL),(8,'asd','asd','234','asd','asd',NULL,'2025-07-25 14:40:09','V2SKW','disetujui',NULL),(9,'asd','asd','234','asd','asd',NULL,'2025-07-25 14:40:11','JP7GA','disetujui',NULL),(10,'asd','asd','234444','3434','343434',NULL,'2025-07-25 14:47:14','QGWS3','disetujui',NULL),(11,'asd','asd','234444','3434','343434',NULL,'2025-07-25 14:47:18','9AMHP','disetujui',NULL),(12,'Vina','X RPL 1','0898903920','3-4','Ngantuk',NULL,'2025-07-26 08:38:02','6GTQ7','disetujui',NULL),(13,'Vina','X RPL 1','0898903920','3-4','Ngantuk',NULL,'2025-07-26 08:38:18','GX8PH','disetujui',NULL),(14,'woi','lah','099983993','8-9','ngopi aja',NULL,'2025-07-26 10:05:46','D2BC7','disetujui',NULL),(15,'woi','lah','099983993','8-9','ngopi aja',NULL,'2025-07-26 10:54:50','MJ4JN','disetujui','affan'),(16,'woi','lah','099983993','8-9','ngopi aja',NULL,'2025-07-26 10:55:52','4H5T4','disetujui','shin');
/*!40000 ALTER TABLE `surat_ijin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-26 12:47:10
