-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 19, 2014 at 05:31 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `comment`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `direktorat`
-- 

CREATE TABLE `direktorat` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `direktorat`
-- 

INSERT INTO `direktorat` VALUES (1, 'Setditjen', 'Sekretariat Direktorat Jenderal');
INSERT INTO `direktorat` VALUES (2, 'Binaprogram', 'Direktorat Bina Program');
INSERT INTO `direktorat` VALUES (3, 'PBL', 'Direktorat Penataan Bangunan Dan Lingkungan');
INSERT INTO `direktorat` VALUES (4, 'Bangkim', 'Direktorat Pengembangan Permukiman');
INSERT INTO `direktorat` VALUES (5, 'PLP', 'Direktorat Pengembangan Penyehatan Lingkungan Permukiman');
INSERT INTO `direktorat` VALUES (6, 'DITPAM', 'Direktorat Pengembangan Air Minum');
INSERT INTO `direktorat` VALUES (7, 'BPPSPAM', 'Badan Pendukung Pengembangan Sistem Penyediaan Air Minum');

-- --------------------------------------------------------

-- 
-- Table structure for table `nilai`
-- 

CREATE TABLE `nilai` (
  `id` bigint(20) NOT NULL auto_increment,
  `pertanyaan_id` bigint(20) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `nilai` float NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `nilai`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `pertanyaan`
-- 

CREATE TABLE `pertanyaan` (
  `id` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `direktorat` varchar(255) NOT NULL,
  `pembawa` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `vote` int(11) NOT NULL default '0',
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `flag` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `pertanyaan`
-- 

INSERT INTO `pertanyaan` VALUES (1, 'sadasdasdasd', 'kosong', 'kosong', 'asdasdasdads', '0', 1, '2014-06-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2, 'ssssssssssssssssssssssssssss', 'kosong', 'kosong', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0', 1, '2014-06-19', 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `t_member`
-- 

CREATE TABLE `t_member` (
  `id` bigint(20) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

-- 
-- Dumping data for table `t_member`
-- 

INSERT INTO `t_member` VALUES (1, 'admin', 'admin_comment', 0, '');
INSERT INTO `t_member` VALUES (3, 'juri1', 'juri1', 0, '');
INSERT INTO `t_member` VALUES (4, 'juri2', 'juri2', 0, '');
INSERT INTO `t_member` VALUES (5, 'juri3', 'juri3', 0, '');
INSERT INTO `t_member` VALUES (29, 'juri4', 'juri4', 0, '');
INSERT INTO `t_member` VALUES (24, 'table1', 'table1', 1, 'table1');
INSERT INTO `t_member` VALUES (25, 'table2', 'table2', 1, 'table2');
INSERT INTO `t_member` VALUES (26, 'table3', 'table3', 1, 'table3');
INSERT INTO `t_member` VALUES (27, 'table4', 'table4', 1, 'table4');
INSERT INTO `t_member` VALUES (28, 'table5', 'table5', 1, 'table5');
INSERT INTO `t_member` VALUES (30, 'table6', 'table6', 1, 'table6');
INSERT INTO `t_member` VALUES (31, 'table7', 'table7', 1, 'table7');
INSERT INTO `t_member` VALUES (32, 'table8', 'table8', 1, 'table8');
INSERT INTO `t_member` VALUES (33, 'table9', 'table9', 1, 'table9');
INSERT INTO `t_member` VALUES (34, 'table10', 'table10', 1, 'table10');
INSERT INTO `t_member` VALUES (35, 'table11', 'table11', 1, 'table11');
INSERT INTO `t_member` VALUES (36, 'table12', 'table12', 1, 'table12');
INSERT INTO `t_member` VALUES (37, 'table13', 'table13', 1, 'table13');
INSERT INTO `t_member` VALUES (38, 'table14', 'table14', 1, 'table14');
INSERT INTO `t_member` VALUES (39, 'table15', 'table15', 1, 'table15');
INSERT INTO `t_member` VALUES (40, 'table16', 'table16', 1, 'table16');
INSERT INTO `t_member` VALUES (41, 'table17', 'table17', 1, 'table17');
INSERT INTO `t_member` VALUES (42, 'table18', 'table18', 1, 'table18');
INSERT INTO `t_member` VALUES (43, 'table19', 'table19', 1, 'table19');
INSERT INTO `t_member` VALUES (44, 'table20', 'table20', 1, 'table20');
INSERT INTO `t_member` VALUES (45, 'table21', 'table21', 1, 'table21');
INSERT INTO `t_member` VALUES (46, 'table22', 'table22', 1, 'table22');
INSERT INTO `t_member` VALUES (47, 'table23', 'table23', 1, 'table23');
INSERT INTO `t_member` VALUES (48, 'table24', 'table24', 1, 'table24');
INSERT INTO `t_member` VALUES (49, 'table25', 'table25', 1, 'table25');
INSERT INTO `t_member` VALUES (50, 'table26', 'table26', 1, 'table26');

-- --------------------------------------------------------

-- 
-- Table structure for table `vote_setting`
-- 

CREATE TABLE `vote_setting` (
  `vote_key` varchar(250) NOT NULL,
  `vote_value` text NOT NULL,
  UNIQUE KEY `vote_key` (`vote_key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `vote_setting`
-- 

INSERT INTO `vote_setting` VALUES ('tanggal_pelaksanaan', '2014-04-22');
INSERT INTO `vote_setting` VALUES ('pelaksanaan_ke', '10');
INSERT INTO `vote_setting` VALUES ('final_vote', '2');
INSERT INTO `vote_setting` VALUES ('final_jumlah', '5');
