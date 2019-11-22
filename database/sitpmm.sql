/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : sitpmm

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-11-22 05:53:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
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

-- ----------------------------
-- Records of barang
-- ----------------------------

-- ----------------------------
-- Table structure for m_kategori
-- ----------------------------
DROP TABLE IF EXISTS `m_kategori`;
CREATE TABLE `m_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_kategori
-- ----------------------------

-- ----------------------------
-- Table structure for m_menu
-- ----------------------------
DROP TABLE IF EXISTS `m_menu`;
CREATE TABLE `m_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) DEFAULT NULL,
  `sub_menu` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_menu
-- ----------------------------
INSERT INTO `m_menu` VALUES ('1', 'PENGADAAN BARANG', 'REQUEST', 'PermintaanBarang', 'fas fa-fw fa-sticky-note');
INSERT INTO `m_menu` VALUES ('2', 'PENGADAAN BARANG', 'APRV LVL 1', 'Penyetujuan1', 'fas fa-fw fa-sticky-note');
INSERT INTO `m_menu` VALUES ('3', 'PENGADAAN BARANG', 'APRV LVL 2', 'Penyetujuan2', 'fas fa-fw fa-sticky-note');
INSERT INTO `m_menu` VALUES ('4', 'PENGADAAN BARANG', 'REF BARANG', 'ReferensiBarang', 'fas fa-fw fa-sticky-note');
INSERT INTO `m_menu` VALUES ('5', 'PENGADAAN BARANG', 'APRV LVL 3', 'PenyetujuanLevel3', 'fas fa-fw fa-sticky-note');
INSERT INTO `m_menu` VALUES ('6', 'PENGADAAN BARANG', 'PAYMENT', 'Pembayaran', 'fas fa-fw fa-sticky-note');
INSERT INTO `m_menu` VALUES ('7', 'PENGADAAN BARANG', 'BARANG MASUK', 'BarangMasuk', 'fas fa-fw fa-sticky-note');
INSERT INTO `m_menu` VALUES ('8', 'AKUN', 'PROFILE', 'Profile', 'fas fa-fw fa-user');
INSERT INTO `m_menu` VALUES ('9', 'AKUN', 'LOGOUT', 'Login/logout', 'fas fa-fw fa-user');

-- ----------------------------
-- Table structure for temp_barang
-- ----------------------------
DROP TABLE IF EXISTS `temp_barang`;
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

-- ----------------------------
-- Records of temp_barang
-- ----------------------------

-- ----------------------------
-- Table structure for t_akses
-- ----------------------------
DROP TABLE IF EXISTS `t_akses`;
CREATE TABLE `t_akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_akses
-- ----------------------------
INSERT INTO `t_akses` VALUES ('1', '1', '1');
INSERT INTO `t_akses` VALUES ('8', '8', '1');
INSERT INTO `t_akses` VALUES ('9', '9', '1');
INSERT INTO `t_akses` VALUES ('10', '2', '1');
INSERT INTO `t_akses` VALUES ('11', '3', '1');
INSERT INTO `t_akses` VALUES ('12', '4', '1');
INSERT INTO `t_akses` VALUES ('13', '5', '1');
INSERT INTO `t_akses` VALUES ('14', '6', '1');
INSERT INTO `t_akses` VALUES ('15', '7', '1');
INSERT INTO `t_akses` VALUES ('16', '1', '2');
INSERT INTO `t_akses` VALUES ('17', '2', '0');
INSERT INTO `t_akses` VALUES ('18', '3', '0');
INSERT INTO `t_akses` VALUES ('19', '4', '0');
INSERT INTO `t_akses` VALUES ('20', '5', '2');
INSERT INTO `t_akses` VALUES ('21', '6', '0');
INSERT INTO `t_akses` VALUES ('22', '7', '0');
INSERT INTO `t_akses` VALUES ('23', '8', '2');
INSERT INTO `t_akses` VALUES ('24', '9', '2');

-- ----------------------------
-- Table structure for t_divisi
-- ----------------------------
DROP TABLE IF EXISTS `t_divisi`;
CREATE TABLE `t_divisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divisi` varchar(100) DEFAULT NULL,
  `kepala_divisi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_divisi
-- ----------------------------
INSERT INTO `t_divisi` VALUES ('1', 'DIVISI IT', null);
INSERT INTO `t_divisi` VALUES ('2', 'DIVISI FINANCE', null);
INSERT INTO `t_divisi` VALUES ('3', 'DIVISI LAIN-LAIN', null);

-- ----------------------------
-- Table structure for t_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `t_pegawai`;
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

-- ----------------------------
-- Records of t_pegawai
-- ----------------------------
INSERT INTO `t_pegawai` VALUES ('1', 'TPMM1211002', 'ATWIS ANDREAS HADI SAPUTRO', '1', 'Laki-Laki', 'Jakarta Timur', '085xxxxx', 'aan', '0cc175b9c0f1b6a831c399e269772661', '2019-11-15 22:42:56', null, null, '1', '0', '1');
INSERT INTO `t_pegawai` VALUES ('2', 'TPMM0415018', 'NANIK ERNAWATI', '3', 'Perempuan', 'Depok', '085xxxxx', 'nanik', '0cc175b9c0f1b6a831c399e269772661', '2019-11-17 18:40:32', null, null, '1', '0', '2');

-- ----------------------------
-- Table structure for t_request
-- ----------------------------
DROP TABLE IF EXISTS `t_request`;
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

-- ----------------------------
-- Records of t_request
-- ----------------------------

-- ----------------------------
-- Table structure for t_role
-- ----------------------------
DROP TABLE IF EXISTS `t_role`;
CREATE TABLE `t_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_role
-- ----------------------------
INSERT INTO `t_role` VALUES ('1', 'ADMINISTRATOR');
INSERT INTO `t_role` VALUES ('2', 'DIREKTUR');
INSERT INTO `t_role` VALUES ('3', 'KEPALA IT');
INSERT INTO `t_role` VALUES ('4', 'KEPALA FINANCE');
INSERT INTO `t_role` VALUES ('5', 'IT');
INSERT INTO `t_role` VALUES ('6', 'HRD');
INSERT INTO `t_role` VALUES ('7', 'FINANCE');
