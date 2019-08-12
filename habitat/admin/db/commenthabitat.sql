-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2014 at 03:42 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commenthabitat`
--

-- --------------------------------------------------------

--
-- Table structure for table `direktorat`
--

CREATE TABLE IF NOT EXISTS `direktorat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `direktorat`
--

INSERT INTO `direktorat` (`id`, `nama`, `ket`) VALUES
(1, 'Setditjen', 'Sekretariat Direktorat Jenderal'),
(2, 'Binaprogram', 'Direktorat Bina Program'),
(3, 'PBL', 'Direktorat Penataan Bangunan Dan Lingkungan'),
(4, 'Bangkim', 'Direktorat Pengembangan Permukiman'),
(5, 'PLP', 'Direktorat Pengembangan Penyehatan Lingkungan Permukiman'),
(6, 'DITPAM', 'Direktorat Pengembangan Air Minum'),
(7, 'BPPSPAM', 'Badan Pendukung Pengembangan Sistem Penyediaan Air Minum');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` longtext NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pertanyaan_id` bigint(20) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `nilai` float NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `direktorat` varchar(255) NOT NULL,
  `pembawa` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `vote` int(11) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `nama`, `direktorat`, `pembawa`, `komentar`, `status`, `vote`, `tanggal`, `id_user`, `level`, `flag`) VALUES
(1, 'Tina Rachma', 'Ministry of Public Works', 'kosong', 'Welcome to all participants and invitations', '0', 0, '2014-06-20', 0, 0, 0),
(2, 'Refqi', 'Taruwilnas', 'kosong', 'This is a very good event with an excellent topic, congratulations, i hope i can get the presentation material of dr.joan clos, thank you', '0', 0, '2014-06-20', 0, 0, 0),
(3, 'Holi Bina Wijaya', 'Diponegoro Univ.', 'kosong', 'How to deal with diversity of city conditions and inadequate capacity of city govt''', '0', 0, '2014-06-20', 0, 0, 0),
(4, 'DianZ', 'Kencanawitah', 'kosong', '', '0', 0, '2014-06-20', 0, 0, 0),
(5, 'tina rachma', 'ministry of pulic works', 'kosong', 'How do we address the levelization of HDI (human dev. Index)  in managing urbanization?', '0', 0, '2014-06-20', 0, 0, 0),
(6, 'A. Ahyar', '', 'kosong', '', '0', 0, '2014-06-20', 0, 0, 0),
(7, 'DianZ', 'Kencanawitagama', 'kosong', 'Well elaborated lecture with new insights and implementative ideas for urban development. A really interesting three-legged approach. Hopefully could be applied by rapidly developed Indonesian cities (Bandung, Bogor, etc)', '0', 0, '2014-06-20', 0, 0, 0),
(8, 'dian prasetyawati', 'dit pbl, kemenpu', 'kosong', 'Really interesting and a well done summary of facts of nation''s condition. My question is, is it a matter of transition strategi in existing metropolis or preparing non-urbanized plots for urban escapes and outlet? ', '0', 0, '2014-06-20', 0, 0, 0),
(9, 'Doni', 'DGSP Ministry of PU', 'kosong', 'If urbanization is ever growing, what is the limit before reaching the equillibrium between urban-rural areas..?', '0', 0, '2014-06-20', 0, 0, 0),
(10, 'A. Ahyani', 'Cipta Karya', 'kosong', 'For such ''bad urbanization'' that happened in many cases in Indonesia cities, what is your opinion about important step to change  form bad to good urbanization ', '0', 0, '2014-06-20', 0, 0, 0),
(11, 'Pierre', 'CPNS', 'kosong', 'Thank you Mr. Clos for giving us this wonderful lecture. I realize that it is very important for us government to start thinking about the urban form of cities, to consider urban design as part of a tool to develop a sustainable city, but my question is What is the best way to deal with an already congested city, with difficulties on land acquisition, since most major city in Indonesia has typical problem on land acquisition so it is very difficult to move buildings and houses, even the illegal buildings. It''s very difficult to provide 40% of public space. So based on your experience, is there any practical way on achieving sustainable urbanization with all those problems we have? Thanks', '0', 0, '2014-06-20', 0, 0, 0),
(12, 'Joko', 'PU', 'kosong', 'Is there an example of a city similar to Jakarta which in your opinion is doing a good job in managing urbanization?', '0', 0, '2014-06-20', 0, 0, 0),
(13, 'Dyah L W', 'Ministry of Public Works', 'kosong', 'Dear Mr.Clos, One of the big issue in indonesia is disparity. What do you suggest to increase competitiveness of cities without enlarging gap between them.?thank you very much.', '0', 0, '2014-06-20', 0, 0, 0),
(14, 'Ary', 'ckpu', 'kosong', 'Do you think Barcelona is a perfect examples for city that has managed a better urbanization? (Esp.40 % public space)', '0', 0, '2014-06-20', 0, 0, 0),
(15, 'mr.q', 'pu', 'kosong', 'Comparing with barcelona, and from your short experience in our city, how bad are we? Can we solve this?', '0', 0, '2014-06-20', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_member`
--

CREATE TABLE IF NOT EXISTS `t_member` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `t_member`
--

INSERT INTO `t_member` (`id`, `username`, `passwd`, `level`, `nama`) VALUES
(1, 'admin', 'admin_comment', 0, ''),
(3, 'juri1', 'juri1', 0, ''),
(4, 'juri2', 'juri2', 0, ''),
(5, 'juri3', 'juri3', 0, ''),
(29, 'juri4', 'juri4', 0, ''),
(24, 'table1', 'table1', 1, 'table1'),
(25, 'table2', 'table2', 1, 'table2'),
(26, 'table3', 'table3', 1, 'table3'),
(27, 'table4', 'table4', 1, 'table4'),
(28, 'table5', 'table5', 1, 'table5'),
(30, 'table6', 'table6', 1, 'table6'),
(31, 'table7', 'table7', 1, 'table7'),
(32, 'table8', 'table8', 1, 'table8'),
(33, 'table9', 'table9', 1, 'table9'),
(34, 'table10', 'table10', 1, 'table10'),
(35, 'table11', 'table11', 1, 'table11'),
(36, 'table12', 'table12', 1, 'table12'),
(37, 'table13', 'table13', 1, 'table13'),
(38, 'table14', 'table14', 1, 'table14'),
(39, 'table15', 'table15', 1, 'table15'),
(40, 'table16', 'table16', 1, 'table16'),
(41, 'table17', 'table17', 1, 'table17'),
(42, 'table18', 'table18', 1, 'table18'),
(43, 'table19', 'table19', 1, 'table19'),
(44, 'table20', 'table20', 1, 'table20'),
(45, 'table21', 'table21', 1, 'table21'),
(46, 'table22', 'table22', 1, 'table22'),
(47, 'table23', 'table23', 1, 'table23'),
(48, 'table24', 'table24', 1, 'table24'),
(49, 'table25', 'table25', 1, 'table25'),
(50, 'table26', 'table26', 1, 'table26');

-- --------------------------------------------------------

--
-- Table structure for table `vote_setting`
--

CREATE TABLE IF NOT EXISTS `vote_setting` (
  `vote_key` varchar(250) NOT NULL,
  `vote_value` text NOT NULL,
  UNIQUE KEY `vote_key` (`vote_key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_setting`
--

INSERT INTO `vote_setting` (`vote_key`, `vote_value`) VALUES
('tanggal_pelaksanaan', '2014-04-22'),
('pelaksanaan_ke', '10'),
('final_vote', '2'),
('final_jumlah', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
