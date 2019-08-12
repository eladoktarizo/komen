-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 19, 2014 at 04:01 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `comment`
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
  `flag` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2333 ;

-- 
-- Dumping data for table `pertanyaan`
-- 

INSERT INTO `pertanyaan` VALUES (2310, 'om Hertog', 'kosong', 'sesi-2', 'wah...kacau nih dari tadi saya mau ngomong, tapi nggak ada kesempatan...makanya aku nulis ini...tapi gua nggak ngerti aku yg didiskusikan...wahh..gaya nih...', '0', 0, '2014-05-14', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2311, 'maoels', 'kosong', 'sesi-4', 'Bagus', '0', 0, '2014-05-15', 23, 1, 0);
INSERT INTO `pertanyaan` VALUES (2308, 'adm meja3', 'kosong', 'sesi-1', 'Issues: efesiency in operation, nrw is not easy sometimes action for nrw is more expensive then to change the whole pipe system\r\n\r\nI better to use pen n paper then tis aiped', '0', 0, '2014-05-14', 21, 1, 0);
INSERT INTO `pertanyaan` VALUES (2307, 'Irma', 'kosong', 'sesi-3', 'Not many utility understand the benefits of doing energy audit although energy is often one of the big expenditure component', '0', 0, '2014-05-14', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2309, 'adm meja1', 'kosong', 'sesi-1', 'Untuk penerapan energy efficiency dan penurunan kebocoran diperlukan komitmen Dari high level management, standarisasi ISO dengan faktor kelemahan yang perlu diperhatikan adalah sumber daya manusia. Isu lain yang perlu diperhatikan adalah ketersediaan air baku dalam water provision management ', '0', 0, '2014-05-14', 19, 1, 0);
INSERT INTO `pertanyaan` VALUES (2306, 'adm meja2', 'kosong', 'sesi-1', 'i think to improve energy efficiency and non water revenue most of local water utility, by using big money and technology, and the most important is not stealing.\r\n ', '0', 0, '2014-05-14', 20, 1, 0);
INSERT INTO `pertanyaan` VALUES (2315, 'adm_grup1', 'kosong', 'Session-1', 'tes', '0', 0, '2014-05-16', 13, 1, 0);
INSERT INTO `pertanyaan` VALUES (2316, 'adm_grup1', 'kosong', 'Session-1', 'blablablalba\r\n', '0', 0, '2014-05-16', 13, 1, 0);
INSERT INTO `pertanyaan` VALUES (2317, 'Mamat', 'kosong', 'Session-1', 'yuhuuuuuuuuuu', '0', 0, '2014-05-17', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2318, 'Ujang', 'kosong', 'Session-1', 'Blablablabla', '0', 0, '2014-05-17', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2319, 'Jajang', 'kosong', 'Session-1', 'Due to browser security restrictions, most "Ajax" requests are subject to the same origin policy; the request can not successfully retrieve data from a different domain, subdomain, port, or protocol.', '0', 0, '2014-05-17', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2320, 'Memed', 'kosong', 'Session-1', 'The Promise interface also allows jQuery''s Ajax methods, including $.get(), to chain multiple .done(), .fail(), and .always() callbacks on a single request, and even to assign these callbacks after the request may have completed. If the request is already complete, the callback is fired immediately.', '0', 0, '2014-05-17', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2321, 'Dadang', 'kosong', 'Session-1', 'Pages fetched with POST are never cached, so the cache and ifModified options in jQuery.ajaxSetup() have no effect on these requests.', '0', 0, '2014-05-17', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2322, 'adm_grup1', 'kosong', 'Session-1', 'tes ah', '1', 1, '2014-05-19', 13, 1, 0);
INSERT INTO `pertanyaan` VALUES (2323, 'Ujang sueb', 'kosong', 'Session-1', 'Hohohohoh', '1', 1, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2324, 'Dadang Soek', 'kosong', 'Session-1', 'Dudududududd', '0', 0, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2325, 'Arif', 'kosong', 'Session-1', 'Tes', '0', 0, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2326, 'Deny', 'kosong', 'Session-1', 'Ok, just let me know if you are getting this error on localhost or on a hosting server?\r\n\r\nAlso don''t call me Sir [:)] ', '0', 0, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2327, 'Johny', 'kosong', 'Session-1', 'Yeah , It''s resolved. & \r\n\r\nI added wrong DSN.  I added it in User DSN. T_T \r\n\r\nSo I add new DSN in File DSN and the website work.\r\n\r\n \r\n\r\nThanks for your advice,\r\n\r\nRegards,', '1', 1, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2328, 'Juned', 'kosong', 'Session-1', 'This error comes when we create ODBC driver under "User DSN" because DSN created under "User DSN" can be used by same user. But when we host application on IIS than application runs under default ASP.NET identity.\r\n\r\nTo remove this error just shift your DSN from "User DSN" to "System or File DSN"', '1', 1, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2329, 'Dudung', 'kosong', 'Session-1', 'Homem que trai a mulher nÃ£o vale nada. Mas a mulher que fica com o homem sabendo que ele Ã© comprometido, vale menos ainda. (y', '0', 0, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2330, 'Mambo', 'kosong', 'Session-1', 'ive  Test_Database on 2 machines (same data in both machines), one is in SQL 2005 server and another one is in SQL 2000 server.\r\nWhen the website was published, it cant work. (with both database). But it work in debug mode in Visual Studio2005.\r\n\r\nThe website cant work when use ODBC connection  but it work when use SqlClient.\r\n\r\n\r\nHelp me solve this problem please. T_T \r\n\r\nThanks in advance,', '1', 1, '2014-05-19', 0, 0, 1);
INSERT INTO `pertanyaan` VALUES (2331, 'Saeful', 'kosong', 'Session-1', 'ERROR [IM002] [Microsoft][ODBC Driver Manager] Data source name not found and no default driver specified\r\nDescription: An unhandled exception occurred during the execution of the current web request. Please review the stack trace for more information about the error and where it originated in the code. \r\nException Details: System.Data.Odbc.OdbcException: ERROR [IM002] [Microsoft][ODBC Driver Manager] Data source name not found and no default driver specified', '1', 1, '2014-05-19', 0, 0, 0);
INSERT INTO `pertanyaan` VALUES (2332, 'Asep', 'kosong', 'Session-1', 'On the performance side, strpos is about three times faster and have in mind, when I did one million compares at once, it took preg match 1.5 seconds to finish and for strpos it took 0.5 seconds. What I''m trying to say is that it runs really fast either way. If you don''t have 100,000 visitors every second, you shouldn''t concern yourself with this kind of stuff and take what''s most comfortable, IMO', '1', 1, '2014-05-19', 0, 0, 0);
