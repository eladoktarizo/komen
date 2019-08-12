-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 05, 2014 at 06:56 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `hotel`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `kategori`
-- 

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(200) NOT NULL,
  `tipe` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `kategori`
-- 

INSERT INTO `kategori` VALUES (1, 'Deluxe Room', 1);
INSERT INTO `kategori` VALUES (2, 'Elegant Room', 1);
INSERT INTO `kategori` VALUES (3, 'Luxury Room', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `kontak`
-- 

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL auto_increment,
  `jenis` varchar(100) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `kontak`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `profile`
-- 

CREATE TABLE `profile` (
  `nama` varchar(200) NOT NULL,
  `about` longtext NOT NULL,
  `alamat` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `profile`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `reservasi`
-- 

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `notlp` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `room` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `kid` int(11) NOT NULL,
  `cekin` datetime NOT NULL,
  `cekout` datetime NOT NULL,
  `payment` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `reservasi`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `room`
-- 

CREATE TABLE `room` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `fitur` longtext NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `room`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `service`
-- 

CREATE TABLE `service` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `desc` longtext NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `service`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `site_stat`
-- 

CREATE TABLE `site_stat` (
  `on_stat` int(11) NOT NULL,
  `off_stat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `site_stat`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `trip`
-- 

CREATE TABLE `trip` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `desc` longtext NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `trip`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `usern` varchar(100) NOT NULL,
  `passw` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'the_adm', 'adm1234', 'oby.in.heaven@gmail.com', 0);
