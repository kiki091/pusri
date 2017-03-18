-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: pusri_db
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `company_point`
--

DROP TABLE IF EXISTS `company_point`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_point` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `slug` varchar(45) DEFAULT NULL,
  `subtitle` varchar(45) DEFAULT NULL,
  `side_description` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_point`
--

LOCK TABLES `company_point` WRITE;
/*!40000 ALTER TABLE `company_point` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_point` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_profile`
--

DROP TABLE IF EXISTS `company_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_profile` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `is_active` int(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_profile`
--

LOCK TABLES `company_profile` WRITE;
/*!40000 ALTER TABLE `company_profile` DISABLE KEYS */;
INSERT INTO `company_profile` VALUES (1,1,NULL,1,NULL);
/*!40000 ALTER TABLE `company_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_profile_trans`
--

DROP TABLE IF EXISTS `company_profile_trans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_profile_trans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(10) DEFAULT NULL,
  `title` varchar(65) DEFAULT NULL,
  `slug` varchar(75) DEFAULT NULL,
  `side_description` text,
  `highlight_description` text,
  `description` text,
  `meta_title` varchar(65) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `company_profile_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_UNIQUE` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_profile_trans`
--

LOCK TABLES `company_profile_trans` WRITE;
/*!40000 ALTER TABLE `company_profile_trans` DISABLE KEYS */;
INSERT INTO `company_profile_trans` VALUES (1,'en','Company Overview','company-overview','<p class=\"blue_text\">PT Pupuk Sriwidjaja conducts its business operation with the purpose of implementing and supporting government’s policies and programs in economy field and national development, particularly in fertilizer industry and other agricultural products.</p>','<p class=\"blue_color\">For more than 50 years, Pusri has deliver significant contribution for&nbsp; the development of national fertilizer industry, food security, and national prosperity.</p>','<p>PT Pupuk Sriwidjaja Palembang (Pusri) was initiated as the pioneer of urea fertilizer producer in Indonesia. The company was established with the name PT Pupuk Sriwidjaja (Persero), on 24th December 1959 in Palembang, South Sumatera, Indonesia. Pusri engaged its business operation with main purpose to perform and support government’s policies and programs in economy and national development sector, particularly in fertilizer industry and other agricultural products. Pusri’s extensive history as a pioneer of national fertilizer producer for over 50 years has proven its capability and commitment in carrying out the important duty mandated by the government.</p>\n\n<p>In addition to be national fertilizer producer, Pusri also bears the duty to carry out trade, services and other businesses related to fertilizer industry. Pusri is responsible in performing distribution and marketing for subsidized fertilizer to farmers as a form of Public Service Obligation (PSO) implementation, supporting national provision program by prioritizing fertilizer production and distribution for farmers throughout Indonesia. The trading of non-subsidized urea fertilizer in which to fulfill fertilizer needs for plantation, industry, and export demand is a part of company’s other business operation outside from the responsibility of Public Service Obligation tasks.</p>\n\n<p>As a company which is responsible for national fertilizer industry continuance, Pusri has experienced various management and authority rearrangement closely related with government policies. At present, Pusri officially operates under the name of PT Pupuk Srwiwidjaja Palembang with Pusri as the same brand and trademark.</p>','Company Overview','Pupuk, Urea, Pupuk Subsidi, Pupuk Non Subsidi, Amoniak','PT Pupuk Sriwidjaja Palembang (Pusri) adalah Badan Usaha Milik Negara yang didirikan sebagai pelopor produsen pupuk urea di Indonesia',1),(2,'id','Sekilas Perusahaan','sekilas-perusahaan','<span class=\"blue_text\">Pusri menjalankan operasi bisnisnya dengan tujuan utama untuk melaksanakan dan menunjang kebijaksanaan dan program pemerintah di bidang ekonomi dan pembangunan nasional, khususnya di industri pupuk dan produk agribisnis lainnya.</span>','<div class=\"text_bg_blue add_fix\"><div>Selama</div><div>lebih</div><div>dari</div><div>50</div><div>tahun,</div><div>Pusri</div><div>telah</div><div>memberikan</div><div>kontribusi</div><div>yang</div><div>signifikan</div><div>bagi</div><div>kemajuan</div><div>industri</div><div>pupuk,</div><div>ketahanan</div><div>pangan</div><div>dan</div><div>kemakmuran</div><div>nasional.</div></div>','<p>PT Pupuk Sriwidjaja Palembang (Pusri) adalah perusahaan yang didirikan sebagai pelopor produsen pupuk urea di Indonesia pada tanggal 24 Desember 1959 di Palembang Sumatera Selatan, dengan nama PT Pupuk Sriwidjaja (Persero). Pusri memulai operasional usaha dengan tujuan utama untuk melaksanakan dan menunjang kebijaksanaan dan program pemerintah di bidang ekonomi dan pembangunan nasional, khususnya di industri pupuk dan kimia lainnya. Sejarah panjang Pusri sebagai pelopor produsen pupuk nasional selama lebih dari 50 tahun telah membuktikan kemampuan dan komitmen kami dalam melaksanakan tugas penting yang diberikan oleh pemerintah.<br><br>Selain sebagai produsen pupuk nasional, Pusri juga mengemban tugas dalam melaksanakan usaha perdagangan, pemberian jasa dan usaha lain yang berkaitan dengan industri pupuk. Pusri bertanggung jawab dalam melaksanakan distribusi dan pemasaran pupuk bersubsidi kepada petani sebagai bentuk pelaksanaan <em>Public Service Obligation</em> (PSO) untuk mendukung program pangan nasional dengan memprioritaskan produksi dan pendistribusian pupuk bagi petani di seluruh wilayah Indonesia. Penjualan pupuk urea non subsidi sebagai pemenuhan kebutuhan pupuk sektor perkebunan, industri maupun eksport menjadi bagian kegiatan perusahaan yang lainnya diluar tanggung jawab pelaksanaan <em>Public Service Obligation</em> (PSO). <br><br>Sebagai perusahaan yang bertanggung jawab atas kelangsungan industri pupuk nasional, Pusri telah mengalami berbagai perubahan dalam manajemen dan wewenang yang sangat berkaitan dengan kebijakan-kebijakan pemerintah. Saat ini Pusri secara resmi beroperasi dengan nama PT Pupuk Sriwidjaja Palembang dengan tetap menggunakan brand dan merk dagang Pusri.</p>','Sekilas Perusahaan','Pupuk, Urea, Pupuk Subsidi, Pupuk Non Subsidi, Amoniak','PT Pupuk Sriwidjaja Palembang (Pusri) adalah Badan Usaha Milik Negara yang didirikan sebagai pelopor produsen pupuk urea di Indonesia',1);
/*!40000 ALTER TABLE `company_profile_trans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class` varchar(100) DEFAULT NULL,
  `order` int(5) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `is_dropdown` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'dropdown yamm-fw',1,1,1,NULL,NULL,NULL),(2,'dropdown yamm-fw',2,1,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_trans`
--

DROP TABLE IF EXISTS `menu_trans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_trans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(2) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `menu_id` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_UNIQUE` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_trans`
--

LOCK TABLES `menu_trans` WRITE;
/*!40000 ALTER TABLE `menu_trans` DISABLE KEYS */;
INSERT INTO `menu_trans` VALUES (1,'id','Perusahaan','peusahaan',1,NULL,NULL),(2,'en','Company','company',1,NULL,NULL),(3,'id','Produk','produk',2,NULL,NULL),(4,'en','Product','product',2,NULL,NULL);
/*!40000 ALTER TABLE `menu_trans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_menu`
--

DROP TABLE IF EXISTS `sub_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `is_active` int(1) DEFAULT NULL,
  `order` int(5) DEFAULT NULL,
  `menu_id` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_menu`
--

LOCK TABLES `sub_menu` WRITE;
/*!40000 ALTER TABLE `sub_menu` DISABLE KEYS */;
INSERT INTO `sub_menu` VALUES (1,1,1,1,NULL,NULL,NULL),(11,1,1,2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `sub_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_menu_trans`
--

DROP TABLE IF EXISTS `sub_menu_trans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_menu_trans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(2) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `sub_menu_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_UNIQUE` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_menu_trans`
--

LOCK TABLES `sub_menu_trans` WRITE;
/*!40000 ALTER TABLE `sub_menu_trans` DISABLE KEYS */;
INSERT INTO `sub_menu_trans` VALUES (1,'id','Profil','profil',1,NULL,NULL),(2,'en','Profile','profile',1,NULL,NULL),(3,'id','Tata Nilai Perusahaan','tata-nilai-perusahaan',1,NULL,NULL),(4,'en','Company Value','company-value',1,NULL,NULL),(5,'id','Pengelolaan','pengelolaan',1,NULL,NULL),(6,'en','Management','management',1,NULL,NULL),(7,'id','Pengadaan','pengadaan',1,NULL,NULL),(8,'en','Procurement','procurement',1,NULL,NULL),(9,'id','Sertifikasi','sertifikasi',1,NULL,NULL),(10,'en','Certifications','certifications',1,NULL,NULL),(11,'id','Visi, Misi & Makna Perusahaan','visi-misi-perusahaan',1,NULL,NULL),(12,'en','Vision, Mission and Meaning Company','vision-mission-meaning-company',1,NULL,NULL),(13,'id','Identitas Perusahaan','identitas-perusahaan',1,NULL,NULL),(14,'en','Company identity','company-identity',1,NULL,NULL),(15,'id','Makna Logo','makna-logo',1,NULL,NULL),(16,'en','Meaning of Logo','meaning-of-ogo',1,NULL,NULL),(17,'id','Perjalanan Kami','perjalanan-kami',1,NULL,NULL),(18,'en','Our Journey','our-journey',1,NULL,NULL),(19,'id','Anak Perusahaan','anak-perusahaan',1,NULL,NULL),(20,'en','Subsidiary','subsidiary',1,NULL,NULL),(23,'id','Urea','urea',11,NULL,NULL),(24,'en','Urea','ureas',11,NULL,NULL);
/*!40000 ALTER TABLE `sub_menu_trans` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-15  0:07:32
