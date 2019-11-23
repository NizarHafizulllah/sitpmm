-- MySQL dump 10.17  Distrib 10.3.16-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sitpmm
-- ------------------------------------------------------
-- Server version	10.3.16-MariaDB

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
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kategori` int(11) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `suplier` int(11) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_satuan` float(11,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `id_request` int(11) DEFAULT NULL,
  `pilih` tinyint(1) DEFAULT 0,
  `request` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_kategori`
--

DROP TABLE IF EXISTS `m_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_kategori`
--

LOCK TABLES `m_kategori` WRITE;
/*!40000 ALTER TABLE `m_kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_menu`
--

DROP TABLE IF EXISTS `m_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) DEFAULT NULL,
  `sub_menu` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_menu`
--

LOCK TABLES `m_menu` WRITE;
/*!40000 ALTER TABLE `m_menu` DISABLE KEYS */;
INSERT INTO `m_menu` VALUES (1,'PENGADAAN BARANG','REQUEST','PermintaanBarang','fas fa-fw fa-sticky-note'),(2,'PENGADAAN BARANG','APRV LVL 1','Penyetujuan1','fas fa-fw fa-sticky-note'),(3,'PENGADAAN BARANG','APRV LVL 2','Penyetujuan2','fas fa-fw fa-sticky-note'),(4,'PENGADAAN BARANG','REF BARANG','ReferensiBarang','fas fa-fw fa-sticky-note'),(5,'PENGADAAN BARANG','APRV LVL 3','PenyetujuanLevel3','fas fa-fw fa-sticky-note'),(6,'PENGADAAN BARANG','PAYMENT','Pembayaran','fas fa-fw fa-sticky-note'),(7,'PENGADAAN BARANG','BARANG MASUK','BarangMasuk','fas fa-fw fa-sticky-note'),(8,'AKUN','PROFILE','Profile','fas fa-fw fa-user'),(9,'AKUN','LOGOUT','Login/logout','fas fa-fw fa-user'),(10,'MASTER','BARANG','Barang','fas fa-fw fa-sticky-note'),(11,'MASTER','PEGAWAI','Pegawai','fas fa-fw fa-user'),(12,'MASTER','DIVISI','Divisi','fas fa-fw fa-landmark');
/*!40000 ALTER TABLE `m_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_akses`
--

DROP TABLE IF EXISTS `t_akses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_akses`
--

LOCK TABLES `t_akses` WRITE;
/*!40000 ALTER TABLE `t_akses` DISABLE KEYS */;
INSERT INTO `t_akses` VALUES (1,1,1),(8,8,1),(9,9,1),(10,2,1),(11,3,1),(12,4,1),(13,5,1),(14,6,1),(15,7,1),(16,1,2),(17,2,0),(18,3,0),(19,4,0),(20,5,2),(21,6,0),(22,7,0),(23,8,2),(24,9,2),(25,10,1),(26,11,1),(27,12,1);
/*!40000 ALTER TABLE `t_akses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_divisi`
--

DROP TABLE IF EXISTS `t_divisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_divisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divisi` varchar(100) DEFAULT NULL,
  `kepala_divisi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_divisi`
--

LOCK TABLES `t_divisi` WRITE;
/*!40000 ALTER TABLE `t_divisi` DISABLE KEYS */;
INSERT INTO `t_divisi` VALUES (1,'DIVISI IT',NULL),(2,'DIVISI FINANCE',NULL),(3,'DIVISI LAIN-LAIN',NULL);
/*!40000 ALTER TABLE `t_divisi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pegawai`
--

DROP TABLE IF EXISTS `t_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 0,
  `is_deleted` tinyint(1) DEFAULT 0,
  `akses` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_divisi` (`id_divisi`),
  CONSTRAINT `id_divisi` FOREIGN KEY (`id_divisi`) REFERENCES `t_divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pegawai`
--

LOCK TABLES `t_pegawai` WRITE;
/*!40000 ALTER TABLE `t_pegawai` DISABLE KEYS */;
INSERT INTO `t_pegawai` VALUES (1,'TPMM1211002','ATWIS ANDREAS HADI SAPUTRO',1,'Laki-Laki','Jakarta Timur','085xxxxx','aan','0cc175b9c0f1b6a831c399e269772661','2019-11-15 22:42:56',NULL,NULL,1,0,1),(2,'TPMM0415018','NANIK ERNAWATI',3,'Perempuan','Depok','085xxxxx','nanik','0cc175b9c0f1b6a831c399e269772661','2019-11-17 18:40:32',NULL,NULL,1,0,2);
/*!40000 ALTER TABLE `t_pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_request`
--

DROP TABLE IF EXISTS `t_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_permintaan` varchar(100) DEFAULT NULL,
  `tanggal_request` date DEFAULT NULL,
  `tgl_entry` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `status_bayar` tinyint(1) DEFAULT NULL,
  `keterangan_bayar` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_request`
--

LOCK TABLES `t_request` WRITE;
/*!40000 ALTER TABLE `t_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_role`
--

DROP TABLE IF EXISTS `t_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_role`
--

LOCK TABLES `t_role` WRITE;
/*!40000 ALTER TABLE `t_role` DISABLE KEYS */;
INSERT INTO `t_role` VALUES (1,'ADMINISTRATOR'),(2,'DIREKTUR'),(3,'KEPALA IT'),(4,'KEPALA FINANCE'),(5,'IT'),(6,'HRD'),(7,'FINANCE');
/*!40000 ALTER TABLE `t_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_barang`
--

DROP TABLE IF EXISTS `temp_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_barang` (
  `id` int(11) NOT NULL,
  `session_id` int(11) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `suplier` int(11) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_satuan` float(11,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_barang`
--

LOCK TABLES `temp_barang` WRITE;
/*!40000 ALTER TABLE `temp_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sitpmm'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-24  2:36:28
