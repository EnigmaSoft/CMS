-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: enigma
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(13) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `salt` varchar(32) DEFAULT NULL,
  `loggedin` tinyint(4) NOT NULL DEFAULT '0',
  `lastlogin` timestamp NULL DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `birthday` date NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `banreason` text,
  `gm` tinyint(1) NOT NULL DEFAULT '0',
  `email` tinytext,
  `emailcode` varchar(40) DEFAULT NULL,
  `forumaccid` int(11) NOT NULL DEFAULT '0',
  `macs` tinytext,
  `lastknownip` varchar(45) DEFAULT NULL,
  `lastpwemail` timestamp NOT NULL DEFAULT '2002-12-31 16:00:00',
  `tempban` timestamp NOT NULL DEFAULT '1999-12-31 22:00:00',
  `greason` tinyint(4) DEFAULT NULL,
  `paypalNX` int(11) DEFAULT NULL,
  `mPoints` int(11) DEFAULT NULL,
  `cardNX` int(11) DEFAULT NULL,
  `donorPoints` tinyint(1) DEFAULT NULL,
  `guest` tinyint(1) NOT NULL DEFAULT '0',
  `LastLoginInMilliseconds` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pin` varchar(4) DEFAULT NULL,
  `gender` int(10) unsigned NOT NULL DEFAULT '10',
  `eula` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `mainchar` int(11) DEFAULT NULL,
  `lastweblogin` timestamp NULL DEFAULT NULL,
  `lastwebip` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `forumaccid` (`forumaccid`),
  KEY `ranking1` (`id`,`banned`,`gm`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (3,'Snopboy','$2y$10$Iit6Pa.X9LxzS1QsWJodOuxSyZ//Cbd5chTroiin2mlvA2M9.sX6.',NULL,0,'2017-01-01 14:13:28','2017-01-01 15:42:26','1990-01-01',0,NULL,10,'snopboy@rz.com',NULL,0,NULL,'83.127.32.64','2002-12-31 16:00:00','1999-12-31 22:00:00',NULL,10000,NULL,NULL,NULL,0,0,NULL,1,0,'McQqMmRtclhmglN6LDFHjXRQ0O5zt0HWK2biy15SLhLKeheByTQn5R8cSuPh',0,0,30001,'2019-08-14 10:08:50','127.0.0.1',NULL,'2019-08-14 10:20:47'),(16,'testlol','$2y$10$znDcY49w2NRkh6FtdC0R1O41OxW/NVeWtf3JIBdU/B6pYkBYB7P8.',NULL,0,NULL,'2017-09-15 12:23:56','2001-04-02',0,NULL,0,'test@lol.com',NULL,0,NULL,NULL,'2002-12-31 16:00:00','1999-12-31 22:00:00',NULL,NULL,NULL,NULL,NULL,0,0,NULL,0,0,NULL,0,0,NULL,NULL,NULL,NULL,NULL),(17,'test','$2y$10$WX3oDh.yOmYkbRiPQBR68eRQJ5snEe/weymhzLRo8m9lcajXSE1eO',NULL,0,NULL,'2017-11-02 14:11:10','1994-03-02',0,NULL,0,'test@enigma.com',NULL,0,NULL,NULL,'2002-12-31 16:00:00','1999-12-31 22:00:00',NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,'Xim1XPvgVfgizHGT8E6OttkQtiRaAk8NKaxYdWJcTnz0U9zcybi0LoShDpho',0,0,NULL,'2017-11-02 12:11:10','1270','2017-11-02 12:11:10','2017-11-02 12:11:10'),(18,'dfgdfg','$2y$10$YfoxDkw2x1IvFyPcGnk/deA9rSKqBYK3ynMkXyNMGfPtrhba/xoH6',NULL,0,NULL,'2019-07-27 16:50:01','2000-01-01',0,NULL,0,'dfg@sdfsdf.com',NULL,0,NULL,NULL,'2002-12-31 16:00:00','1999-12-31 22:00:00',NULL,NULL,NULL,NULL,NULL,0,0,NULL,0,0,'izqqQUVNPxyOGxgUCE3Pbcg2WMTaWBWObltzX44xj8DxmmPPnSzqx0WOjrWK',0,0,NULL,'2019-07-27 13:50:01','1270','2019-07-27 13:50:01','2019-07-27 13:50:01'),(19,'fdgdhj','$2y$10$cTzc4cAIlaKQVWx7fY9rrOAIWWCYwJ/gXlQIx5.k5qhi7EWisFyVa',NULL,0,NULL,'2019-07-27 16:53:13','1997-01-01',0,NULL,0,'dfgd@sdfs.com',NULL,0,NULL,NULL,'2002-12-31 16:00:00','1999-12-31 22:00:00',NULL,NULL,NULL,NULL,NULL,0,0,NULL,0,0,'EozVsBUNVVOLj9QyKPC3qT5LnxP4xLpWZvAR39J4JK0eVADmXRRKXGlgePAE',0,0,NULL,'2019-07-27 13:53:13','1270','2019-07-27 13:53:13','2019-07-27 13:53:13'),(20,'testurass','$2y$10$XO4fmOw5j/NXuvXIt5Ct5.D//63OVnTRSl4FWwgMdVkX7c4gNxU1u',NULL,0,NULL,'2019-08-09 16:49:54','1991-01-01',0,NULL,0,'test@ur.ass',NULL,0,NULL,NULL,'2002-12-31 16:00:00','1999-12-31 22:00:00',NULL,NULL,NULL,NULL,NULL,0,0,NULL,0,0,NULL,0,0,NULL,'2019-08-09 13:49:54','1270','2019-08-09 13:49:54','2019-08-09 13:49:54'),(21,'dfgdfjghj','$2y$10$2KKsCt0zI1/uc2nNdj/qF.YRKQrWZau.9Cz1zA5CMsrSICQrFjmS.',NULL,0,NULL,'2019-08-11 22:26:59','2009-01-01',0,NULL,0,'dfg@sdfsdgf.com',NULL,0,NULL,NULL,'2002-12-31 16:00:00','1999-12-31 22:00:00',NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,NULL,0,0,NULL,'2019-08-11 19:26:59','127.0.0.1','2019-08-11 19:26:59','2019-08-11 19:26:59');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` int(11) NOT NULL DEFAULT '0',
  `world` int(11) NOT NULL DEFAULT '0',
  `name` varchar(13) NOT NULL DEFAULT '',
  `level` int(11) NOT NULL DEFAULT '0',
  `exp` int(11) NOT NULL DEFAULT '0',
  `str` int(11) NOT NULL DEFAULT '0',
  `dex` int(11) NOT NULL DEFAULT '0',
  `luk` int(11) NOT NULL DEFAULT '0',
  `int` int(11) NOT NULL DEFAULT '0',
  `hp` int(11) NOT NULL DEFAULT '0',
  `mp` int(11) NOT NULL DEFAULT '0',
  `maxhp` int(11) NOT NULL DEFAULT '0',
  `maxmp` int(11) NOT NULL DEFAULT '0',
  `meso` int(11) NOT NULL DEFAULT '0',
  `hpApUsed` int(11) NOT NULL DEFAULT '0',
  `mpApUsed` int(11) NOT NULL DEFAULT '0',
  `job` int(11) NOT NULL DEFAULT '0',
  `skincolor` int(11) NOT NULL DEFAULT '0',
  `gender` int(11) NOT NULL DEFAULT '0',
  `fame` int(11) NOT NULL DEFAULT '0',
  `hair` int(11) NOT NULL DEFAULT '0',
  `face` int(11) NOT NULL DEFAULT '0',
  `ap` int(11) NOT NULL DEFAULT '0',
  `sp` int(11) NOT NULL DEFAULT '0',
  `map` int(11) NOT NULL DEFAULT '0',
  `spawnpoint` int(11) NOT NULL DEFAULT '0',
  `gm` int(11) NOT NULL DEFAULT '0',
  `party` int(11) NOT NULL DEFAULT '0',
  `buddyCapacity` int(11) NOT NULL DEFAULT '25',
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rank` int(10) unsigned NOT NULL DEFAULT '1',
  `rankMove` int(11) NOT NULL DEFAULT '0',
  `jobRank` int(10) unsigned NOT NULL DEFAULT '1',
  `jobRankMove` int(11) NOT NULL DEFAULT '0',
  `guildid` int(10) unsigned NOT NULL DEFAULT '0',
  `guildrank` int(10) unsigned NOT NULL DEFAULT '5',
  `allianceRank` int(10) unsigned NOT NULL DEFAULT '5',
  `messengerid` int(10) unsigned NOT NULL DEFAULT '0',
  `messengerposition` int(10) unsigned NOT NULL DEFAULT '4',
  `reborns` int(11) NOT NULL DEFAULT '0',
  `pvpkills` int(9) NOT NULL DEFAULT '0',
  `pvpdeaths` int(9) NOT NULL DEFAULT '0',
  `married` int(10) unsigned NOT NULL DEFAULT '0',
  `partnerid` int(10) unsigned NOT NULL DEFAULT '0',
  `cantalk` int(10) unsigned NOT NULL DEFAULT '1',
  `zakumlvl` int(10) unsigned NOT NULL DEFAULT '0',
  `marriagequest` int(10) unsigned NOT NULL DEFAULT '0',
  `omok` int(4) DEFAULT NULL,
  `matchcard` int(4) DEFAULT NULL,
  `omokwins` int(4) DEFAULT NULL,
  `omoklosses` int(4) DEFAULT NULL,
  `omokties` int(4) DEFAULT NULL,
  `matchcardwins` int(4) DEFAULT NULL,
  `matchcardlosses` int(4) DEFAULT NULL,
  `matchcardties` int(4) DEFAULT NULL,
  `MerchantMesos` int(11) NOT NULL DEFAULT '0',
  `HasMerchant` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `gmtext` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `equipslots` int(11) NOT NULL DEFAULT '24',
  `useslots` int(11) NOT NULL DEFAULT '24',
  `setupslots` int(11) NOT NULL DEFAULT '24',
  `etcslots` int(11) NOT NULL DEFAULT '24',
  `cashslots` int(11) NOT NULL DEFAULT '96',
  PRIMARY KEY (`id`),
  KEY `accountid` (`accountid`),
  KEY `party` (`party`),
  KEY `ranking1` (`level`,`exp`),
  KEY `ranking2` (`gm`,`job`)
) ENGINE=InnoDB AUTO_INCREMENT=30010 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters`
--

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
INSERT INTO `characters` VALUES (30001,3,0,'Admin',69,25445,4,4,4,4,50,5,50,5,0,0,0,410,0,0,69,30030,20000,9,0,1020000,1,0,-1,20,'2009-09-04 10:53:38',2,2,1,-1,0,5,5,0,4,25,0,0,0,0,1,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,24,24,24,24,96),(30008,3,0,'Ginseng',78,5331215,20,9,100,300,593,487,593,869,1153464,1,0,231,0,0,42,30190,20006,153,3,100000110,1,0,-1,20,'2016-01-09 23:48:43',1,0,1,0,0,5,5,0,4,12,0,0,0,0,1,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,28,24,24,24,96),(30009,3,0,'asfasfasf',7,32767,6,7,7,5,50,5,50,5,0,0,0,0,1,0,2,30027,20002,0,0,30000,1,0,-1,20,'2016-01-09 23:49:33',3,-1337,1,-2,0,5,5,0,4,3,0,0,0,0,1,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,24,24,24,24,96);
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guilds`
--

DROP TABLE IF EXISTS `guilds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guilds` (
  `guildid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `allianceId` int(10) unsigned DEFAULT '0',
  `leader` int(10) unsigned NOT NULL DEFAULT '0',
  `GP` int(10) unsigned NOT NULL DEFAULT '0',
  `logo` int(10) unsigned DEFAULT NULL,
  `logoColor` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` varchar(45) NOT NULL,
  `rank1title` varchar(45) NOT NULL DEFAULT 'Master',
  `rank2title` varchar(45) NOT NULL DEFAULT 'Jr. Master',
  `rank3title` varchar(45) NOT NULL DEFAULT 'Member',
  `rank4title` varchar(45) NOT NULL DEFAULT 'Member',
  `rank5title` varchar(45) NOT NULL DEFAULT 'Member',
  `capacity` int(10) unsigned NOT NULL DEFAULT '10',
  `logoBG` int(10) unsigned DEFAULT NULL,
  `logoBGColor` smallint(5) unsigned NOT NULL DEFAULT '0',
  `notice` varchar(101) DEFAULT NULL,
  `signature` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`guildid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guilds`
--

LOCK TABLES `guilds` WRITE;
/*!40000 ALTER TABLE `guilds` DISABLE KEYS */;
/*!40000 ALTER TABLE `guilds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2016_12_14_163119_accounts',1),(3,'2016_12_14_233009_news',1),(4,'2016_12_16_012013_properties',1),(5,'2016_12_26_210155_Informant',1),(6,'2017_01_01_143624_create_voting_records_table',1),(7,'2017_01_01_154737_alter_characters_table',1),(8,'2017_08_31_215622_create_gd_cache',1),(9,'2017_09_10_172152_create_jobs_table',1),(10,'2017_09_10_172204_create_failed_jobs_table',1),(11,'2017_09_23_211434_create_sessions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nxcode`
--

DROP TABLE IF EXISTS `nxcode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nxcode` (
  `code` varchar(15) NOT NULL,
  `valid` int(11) NOT NULL DEFAULT '1',
  `user` varchar(13) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `item` int(11) NOT NULL DEFAULT '10000',
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nxcode`
--

LOCK TABLES `nxcode` WRITE;
/*!40000 ALTER TABLE `nxcode` DISABLE KEYS */;
/*!40000 ALTER TABLE `nxcode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('test@ur.ass','$2y$10$sZDV/7cadUBepb/x6VJYHejyljm8DMf/1g6Ac5UrY.VeePVpcn6Di','2019-08-09 14:15:45'),('snopboy@rz.com','$2y$10$Uwg3aekIyX0Y./MXC8FMz.2Ct9kajzNCnDatEeeepiYJOo2Qa3WyK','2019-08-09 14:26:37');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reporttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporterid` int(11) NOT NULL,
  `victimid` int(11) NOT NULL,
  `reason` tinyint(4) NOT NULL,
  `chatlog` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('4WruWavjUYV34hYsgcDRfUrtBkYkLge0lR7gLXgW',3,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:55.0) Gecko/20100101 Firefox/55.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGJiV2dzQ0JsekpSWHZaelJyQUVzRWFMaHJDaFo3UVlzZFpQQ29IRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHA6Ly9lbmlnbWEuZGV2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9',1565792648),('A4hV9y8R9Z9qSqUpuEc6dV3Dp0cP5qqqI0XvUsaF',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:55.0) Gecko/20100101 Firefox/55.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGRDZVlrN0hDMEFxNHBrb25GVGJXazNvY1M1WUowQ205b0ZJQ09XRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHA6Ly9lbmlnbWEuZGV2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1565818307);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_failed_jobs`
--

DROP TABLE IF EXISTS `web_failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_failed_jobs`
--

LOCK TABLES `web_failed_jobs` WRITE;
/*!40000 ALTER TABLE `web_failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_gdcache`
--

DROP TABLE IF EXISTS `web_gdcache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_gdcache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_gdcache`
--

LOCK TABLES `web_gdcache` WRITE;
/*!40000 ALTER TABLE `web_gdcache` DISABLE KEYS */;
INSERT INTO `web_gdcache` VALUES (32,'102473965034399f62e98f15cb05ef77','asfasfasf'),(33,'6f0794a01349e41e1ec95a342cafed52','Ginseng'),(34,'9d46f3b4cc99ba0fca94984779cb0e09','Admin');
/*!40000 ALTER TABLE `web_gdcache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_informant`
--

DROP TABLE IF EXISTS `web_informant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_informant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expire` timestamp NULL DEFAULT NULL,
  `dismissible` tinyint(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_informant`
--

LOCK TABLES `web_informant` WRITE;
/*!40000 ALTER TABLE `web_informant` DISABLE KEYS */;
INSERT INTO `web_informant` VALUES (0,'Informant Service Activation',0,'','This is EnigmaCMS\'s <strong>Informant Service</strong> - a site-wide News delivery system!',0,'2019-08-10 19:32:00',NULL,'2020-08-10 19:32:00',0,1);
/*!40000 ALTER TABLE `web_informant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_jobs`
--

DROP TABLE IF EXISTS `web_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `web_jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_jobs`
--

LOCK TABLES `web_jobs` WRITE;
/*!40000 ALTER TABLE `web_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_news`
--

DROP TABLE IF EXISTS `web_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` tinyint(4) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(62) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(62) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(360) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `state` tinyint(1) DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `web_news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_news`
--

LOCK TABLES `web_news` WRITE;
/*!40000 ALTER TABLE `web_news` DISABLE KEYS */;
INSERT INTO `web_news` VALUES (2,40,1,'Cash Inventory Transfer Event for your Cash Shop Items','cash-inventory-transfer-event-for-your-cash-shop-items','The MapleStory Cash Shop often has great deals for nifty MapleStory items. While most of these items are useful or make your characters look cool, they are often untradeable. This is problematic if you have a new character you want to give a pet to. The Cash Inventory Transfer Event however will solve this problem','2.jpg','The MapleStory Cash Shop often has great deals for nifty MapleStory items. While most of these items are useful or make your characters look cool, they are often untradeable. This is problematic if you have a new character you want to give a pet to. The Cash Inventory Transfer Event however will solve this problem',3,1,0,0,'2017-10-30 11:00:00',NULL,NULL),(3,20,0,'Enigma v.165 - Pink Bean: Superstar Update','enigma-v165-pink-bean-superstar-update','Come meet MapleStory’s newest superstar - Pink Bean! For a limited time, you can create a special event character and play as MapleStory’s first Monster Job! In addition to enjoying the revamped party quests, end-of-summer events and the return of Murgoth Dungeon, players can now experience the improved Tower of Oz dungeon which has been specifically updated','','Come meet MapleStory’s newest superstar - Pink Bean! For a limited time, you can create a special event character and play as MapleStory’s first Monster Job! In addition to enjoying the revamped party quests, end-of-summer events and the return of Murgoth Dungeon, players can now experience the improved Tower of Oz dungeon which has been specifically updated for high-level',3,0,0,0,'2017-10-23 10:00:00','2019-07-27 15:53:55','2019-07-27 15:53:55'),(4,50,1,'Scheduled Game Server Maintenance (July 3rd)','scheduled-game-server-maintenance-july-3rd','The maintenance is complete as of 9:40 AM Pacific. Cash items in your inventory have been extended to cover the amount of time the game was unavailable. We will be performing a scheduled maintenance on July 3rd, 2019. It will last approximately 3 and a half hours. Please note that the estimated length of time for each maintenance is subject to change withou','4.jpg','The maintenance is complete as of 9:40 AM Pacific. Cash items in your inventory have been extended to cover the amount of time the game was unavailable. We will be performing a scheduled maintenance on July 3rd, 2019. It will last approximately 3 and a half hours. Please note that the estimated length of time for each maintenance is subject to change without notification. Thanks for your patience!',3,2,0,0,'2019-07-01 13:00:00',NULL,NULL),(5,20,0,'v.164 - Reboot Patch Notes','v-164-reboot-patch-notes','Happy Holidays! Join us for one of our biggest updates, which brings you a whole new world to play in! Go back to MapleStory’s RPG roots in Reboot, where you can fight tough monsters and earn all your items through hard work. We’re also making sweeping changes to the skills of most jobs in order to improve the efficiency of the jobs in relation to each other','3.jpg','<p>Happy Holidays! Join us for one of our biggest updates, which brings you a whole new world to play in! Go back to MapleStory’s RPG roots in Reboot, where you can fight tough monsters and earn all your items through hard work. We’re also making sweeping changes to the skills of most jobs in order to improve the efficiency of the jobs in relation to each other. Many new systems are coming online—including a way to analyze your damage output and combat effectiveness, new Hyper Stat Points to boost your stats as you gain levels past Lv. 140, and Transfer Hammer, which allows you to transfer certain info and enhancements from one item to a higher level item. And it’s not December without Happyville! Your favorite holiday events are returning, along with a few new ones. All this and more, in the Reboot update!</p><p class=\"align-center\"><iframe src=\"https://www.youtube.com/embed/M6h_4kDaMDc?feature=oembed\" allowfullscreen=\"\" frameborder=\"0\" height=\"315\" width=\"560\"></iframe></p><h4 class=\"align-center\"><strong><u>Job Rebalacing</u></strong></h4><p>All the jobs are getting skill rebalances to maximize their efficiency in relation to each other, thereby normalizing the playing field. This includes changes to skill cooldowns, buff durations and Final Attack skills. Every class will experience changes of some kind - whether it\'s additional functionality for some skills, or addition/removal of other skills. Damage limits, range and hit per second have been updated for a number of skills.</p><p class=\"align-center\"><img src=\"/static/img/content/uploads/5.jpg\" alt=\"lolwat\"></p>',3,0,0,0,'2017-10-21 14:11:35',NULL,NULL);
/*!40000 ALTER TABLE `web_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_properties`
--

DROP TABLE IF EXISTS `web_properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_properties` (
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `version` double(8,2) NOT NULL DEFAULT '0.62',
  `exprate` tinyint(4) NOT NULL,
  `mesorate` tinyint(4) NOT NULL,
  `droprate` tinyint(4) NOT NULL,
  `client` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `server` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_properties`
--

LOCK TABLES `web_properties` WRITE;
/*!40000 ALTER TABLE `web_properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_votingrecords`
--

DROP TABLE IF EXISTS `web_votingrecords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_votingrecords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siteid` int(11) NOT NULL,
  `account` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_votingrecords`
--

LOCK TABLES `web_votingrecords` WRITE;
/*!40000 ALTER TABLE `web_votingrecords` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_votingrecords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'enigma'
--

--
-- Dumping routines for database 'enigma'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-15 18:35:16
