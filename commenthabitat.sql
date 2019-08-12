-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2019 at 07:42 PM
-- Server version: 5.5.41
-- PHP Version: 5.3.10-1ubuntu3.24

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
  `sub_judul` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` longtext NOT NULL,
  `flag` int(11) NOT NULL,
  `style` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `sub_judul`, `tanggal`, `lokasi`, `flag`, `style`) VALUES
(21, '', '', '2018-11-16', '', 0, '445994'),
(23, 'HAPERNAS', 'Sarasehan Sejarah Perumahan', '2019-08-04', 'Auditorium Kementerian PUPR', 1, 'FFFFFF');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `url` longtext NOT NULL,
  `flag` int(11) NOT NULL,
  `nourut` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `nama`, `url`, `flag`, `nourut`) VALUES
(13, 'Logo Hari Habitat Sedunia', 'img/slum.gif', 0, 0),
(20, 'world city day', 'img/WhatsApp Image 2018-08-28 at 16.59.54.jpg', 0, 2),
(18, '', 'img/index.jpg', 0, 0),
(25, '', 'img/LOGO SEKNAS.jpg', 0, 3),
(26, '', 'img/Logo.png', 0, 0),
(22, '', 'img/WHD-2018-logo.png', 0, 0),
(23, '', 'img/WHD-2018-logo.jpg', 0, 0),
(24, '', 'img/WHD-2018-logo.jpg', 0, 1),
(27, '', 'img/tulisan.png', 0, 2),
(28, '', 'img/3kx3k.png', 0, 1),
(29, 'Cipta Karya', 'img/Logo Cipta Karya.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logopu`
--

CREATE TABLE IF NOT EXISTS `logopu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL,
  `flag2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `logopu`
--

INSERT INTO `logopu` (`id`, `url`, `flag`, `flag2`) VALUES
(1, 'img/logopu/vos.jpg', 0, 0),
(2, 'img/logopu/pu.png', 0, 0),
(4, 'img/logopu/PU-01.jpg', 1, 0),
(5, 'img/logopu/Logo Cipta Karya.jpg', 0, 0);

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
  `status` int(11) NOT NULL,
  `vote` int(11) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=254 ;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `nama`, `direktorat`, `pembawa`, `komentar`, `status`, `vote`, `tanggal`, `id_user`, `level`, `flag`) VALUES
(1, 'Tina Rachma', 'Ministry of Public Works', 'kosong', 'Welcome to all participants and invitations', 13, 0, '2014-06-20', 0, 0, 0),
(2, 'Refqi', 'Taruwilnas', 'kosong', 'This is a very good event with an excellent topic, congratulations, i hope i can get the presentation material of dr.joan clos, thank you', 13, 0, '2014-06-20', 0, 0, 0),
(3, 'Holi Bina Wijaya', 'Diponegoro Univ.', 'kosong', 'How to deal with diversity of city conditions and inadequate capacity of city govt''', 13, 0, '2014-06-20', 0, 0, 0),
(4, 'DianZ', 'Kencanawitah', 'kosong', '', 13, 0, '2014-06-20', 0, 0, 0),
(5, 'tina rachma', 'ministry of pulic works', 'kosong', 'How do we address the levelization of HDI (human dev. Index)  in managing urbanization?', 13, 0, '2014-06-20', 0, 0, 0),
(6, 'A. Ahyar', '', 'kosong', '', 13, 0, '2014-06-20', 0, 0, 0),
(7, 'DianZ', 'Kencanawitagama', 'kosong', 'Well elaborated lecture with new insights and implementative ideas for urban development. A really interesting three-legged approach. Hopefully could be applied by rapidly developed Indonesian cities (Bandung, Bogor, etc)', 13, 0, '2014-06-20', 0, 0, 0),
(8, 'dian prasetyawati', 'dit pbl, kemenpu', 'kosong', 'Really interesting and a well done summary of facts of nation''s condition. My question is, is it a matter of transition strategi in existing metropolis or preparing non-urbanized plots for urban escapes and outlet? ', 13, 0, '2014-06-20', 0, 0, 0),
(9, 'Doni', 'DGSP Ministry of PU', 'kosong', 'If urbanization is ever growing, what is the limit before reaching the equillibrium between urban-rural areas..?', 13, 0, '2014-06-20', 0, 0, 0),
(10, 'A. Ahyani', 'Cipta Karya', 'kosong', 'For such ''bad urbanization'' that happened in many cases in Indonesia cities, what is your opinion about important step to change  form bad to good urbanization ', 13, 0, '2014-06-20', 0, 0, 0),
(11, 'Pierre', 'CPNS', 'kosong', 'Thank you Mr. Clos for giving us this wonderful lecture. I realize that it is very important for us government to start thinking about the urban form of cities, to consider urban design as part of a tool to develop a sustainable city, but my question is What is the best way to deal with an already congested city, with difficulties on land acquisition, since most major city in Indonesia has typical problem on land acquisition so it is very difficult to move buildings and houses, even the illegal buildings. It''s very difficult to provide 40% of public space. So based on your experience, is there any practical way on achieving sustainable urbanization with all those problems we have? Thanks', 13, 0, '2014-06-20', 0, 0, 0),
(12, 'Joko', 'PU', 'kosong', 'Is there an example of a city similar to Jakarta which in your opinion is doing a good job in managing urbanization?', 13, 0, '2014-06-20', 0, 0, 0),
(13, 'Dyah L W', 'Ministry of Public Works', 'kosong', 'Dear Mr.Clos, One of the big issue in indonesia is disparity. What do you suggest to increase competitiveness of cities without enlarging gap between them.?thank you very much.', 13, 0, '2014-06-20', 0, 0, 0),
(14, 'Ary', 'ckpu', 'kosong', 'Do you think Barcelona is a perfect examples for city that has managed a better urbanization? (Esp.40 % public space)', 13, 0, '2014-06-20', 0, 0, 0),
(15, 'mr.q', 'pu', 'kosong', 'Comparing with barcelona, and from your short experience in our city, how bad are we? Can we solve this?', 13, 0, '2014-06-20', 0, 0, 0),
(16, 'Bobby', 'DPT', 'kosong', 'How do we address the levelization of HDI (human dev. Index)  in managing urbanization?', 12, 0, '2014-09-30', 0, 0, 0),
(17, 'Robby', 'DPT', 'kosong', 'A more exhaustive list customized based on your interests can always be found by clicking the Recommended link in the bottom toolbar.', 12, 0, '2014-09-30', 0, 0, 0),
(18, 'Test Gladi Bersih', 'Kemen.PU', 'kosong', 'Test Gladi Bersih SHF 2014.', 12, 0, '2014-10-01', 0, 0, 0),
(19, 'dEDDY INDRA', 'PBL PROV KALSEL', 'kosong', 'OKE', 12, 0, '2014-10-11', 0, 0, 0),
(20, 'DEDDY', 'PBL KALSEL', 'kosong', 'OKE MANTAP', 12, 0, '2014-10-11', 0, 0, 0),
(21, '1', '1', 'kosong', '1', 12, 0, '2014-11-03', 0, 0, 0),
(22, 'john', 'john', 'kosong', 'K8DCIQ http://www.QS3PE5ZGdxC9IoVKTAPT2DBYpPkMKqfz.com', 12, 0, '2014-12-10', 0, 0, 0),
(23, 'a', 'a', 'kosong', 'a', 12, 0, '2014-12-11', 0, 0, 0),
(24, 'faizal', 'a', 'kosong', 'a', 12, 0, '2014-12-17', 0, 0, 0),
(25, '1', '1', 'kosong', '1', 12, 0, '2015-08-23', 0, 0, 0),
(26, '1', '1', 'kosong', '1', 12, 0, '2015-08-23', 0, 0, 0),
(27, '!S!WCRTESTINPUT000000!E!', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(28, '!S!WCRTESTINPUT000000!E!', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(29, '!S!WCRTESTINPUT000000!E!', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(30, '!S!WCRTESTINPUT000000!E!', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(31, '0', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(32, '0', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(33, '1 aNd 7=7', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(34, '1 aNd 7=2', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(35, '1', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(36, '0', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(37, '99999999 oR 7=7', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(38, '99999999 oR 7=2', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(39, '1', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(40, '1', '!S!WCRTESTINPUT000001!E!', 'kosong', '!S!WCRTESTTEXTAREA000002!E!', 12, 0, '2016-06-16', 0, 0, 0),
(41, '', '', 'kosong', '', 12, 0, '2016-07-12', 0, 0, 0),
(42, '56', 'w3af@email.com', 'kosong', '', 12, 0, '2016-07-12', 0, 0, 0),
(43, '', '', 'kosong', '', 12, 0, '2016-07-12', 0, 0, 0),
(44, 'Bayu Purnomo', 'PT. Kucar KAacir', 'kosong', 'No Comment', 12, 0, '2018-08-20', 0, 0, 0),
(45, 'ter', 'yefb', 'kosong', 'ugf', 14, 0, '2018-08-20', 0, 0, 0),
(46, 'Adi', 'Pusat', 'kosong', 'Tes hari 1', 17, 0, '2018-09-26', 0, 0, 0),
(64, 'Iwan Zarkasi', 'Binamarga', 'kosong', 'Pertanyaan yg selalu muncul adalah bgmn evaluasi mitigasi thd eksisting konstruksi yg ada thd up dated peta gempa terbaru yg cenderung membesar.\r\nTks\r\n', 21, 0, '2018-11-21', 0, 0, 0),
(63, 'Aditya Anwar', 'Direktorat kerja sama dan pemberdayaan, ditjen bina konstruksi', 'kosong', 'Semoga acara ini dapat memberikan masukan terhadap arah kebijakan penanganan bencanan khususnya dari sudut pandang ke-PUPR-an\r\n', 21, 0, '2018-11-21', 0, 0, 0),
(62, 'Deva Fosterharoldas Swasto', 'Universitas Gadjah Mada', 'kosong', 'Insyaallah acaranya bagus, menarik dan bermanfaat.', 21, 0, '2018-11-21', 0, 0, 0),
(66, 'Dian', 'Cipta karya', 'kosong', 'Bagaimana mengetahui bahwa suatu gedung itu tahan gempa terutama utk gedung2 eksisting?', 21, 0, '2018-11-21', 0, 0, 0),
(67, 'EDDY SATRIYA', 'Asdep Telematika dan Utilitas, Kemenko Perekonomian', 'kosong', 'Selamat berseminar. Topik yg sangat up to date. Agar kita semua termasuk PUPR aktif ke pemprov yg wilayahnya terpapar potensi gempa dan tsunami utk memantapkan Eearly Warning System guna pencegahan dan mengurangi resiko kematian. Sangat senang jika PUPR bisa memulai kewajiban bangunan tahan gempa secara bertahap.', 21, 0, '2018-11-21', 0, 0, 0),
(68, 'Rivai', 'Dinas PUPRP Kab. Parigi Moutong', 'kosong', 'Berdasarkan paparan narasumber kedua menyatakan bahwa 7,5 T yg dikeluarkan utk gempa lombok dan lebih dari angka tsb yg dibutuhkan utk sulawesi tengah, kiranya dengan anggaran sebesar itu dapat berimbang antara kajian2 yg dilakukab dengan infrastruktur yang akan dibangun.', 21, 0, '2018-11-21', 0, 0, 0),
(69, 'Erni Setyowati', 'Universitas Diponegoro', 'kosong', 'Untuk kepentingan pemetaan kawasan di daerah, apakah peta gempa dan sesar aktif sudah diintegrasikan dengan peta google agar perencanaan kawasan kota lebih mudah terkait antisipasi dan mitigasi bencana?', 21, 0, '2018-11-21', 0, 0, 0),
(70, 'Ridwan Buamona', 'Dinas PUPR Kab. Pulau Taliabu Maluku Utara', 'kosong', 'Pertama Kami sangat apresiasi dengan kegiatan seminar sinergi pengelolaan resiko kebencanaan menuju permukiman tangguh bencana yang dilaksanakan mengingat ini sangat penting bagi daerah kami yang masuk dalam salah satu jalur gempa.\r\n\r\nKedua dengan kegiatan ini menjadi rekomendasi bagi kami untuk membangun permukiman yang tahan/tangguh bencana.', 21, 0, '2018-11-21', 0, 0, 0),
(71, 'Galih Reza Ardian', 'Dinas Bangunan dan Permukiman Kota Tangerang Selatan', 'kosong', 'Dalam pembuatan peta hazard mikro skala daerah, tenaga Ahli apa saja yg harus dilibatkan? Konten apa saja yg harus dimasukan? \r\nUntuk penerbitan rekomendasi bangunan tinggi, langkah langkah apa saja yg harus diketahui pemda agar mengetahui bahwa bangunan tersebut tidak dibangun diatas tanah berpotensi resiko tinggi?', 21, 0, '2018-11-21', 0, 0, 0),
(72, 'Ge', 'Ck', 'kosong', 'Dari data pusdatin untuk kab/kota yg rawan gempa sesuai peta gempa 2017, tidak terlihat adanya kota Padang sebagai kota yg dilewati garis sesar. Pdhl kita tahu bahwa Padang telah mengalami gempa, sehingga sy bertanya apakah metoda dalam buku gempa tersebut juga melihat kejadian sebelumnya? ', 21, 0, '2018-11-21', 0, 0, 0),
(73, 'Eva Tuhumury', 'BPBD Kota Ambon', 'kosong', 'Dari informasi narasumber mengindikasikan ke daerah diperlukan pemetaan jalur patahan sebagai sumber terjadinya kerusakan. Kota ambon sebagai ibukota provinsi maluku menjadi kota yg terus menata dan membangun infrastruktur sesuai kebuthan masyarakat. Oleh karena itu mohon petunjuk utk membuat peta jalur patahan harus berkoordinasi dgn instansi mana', 21, 0, '2018-11-21', 0, 0, 0),
(74, 'Anton Dharma', 'Dinas PU SDA Jatim', 'kosong', 'Pada kondisi sekarang dengan adanya informasi sesar di Jawa ditambah kejadian gempa lombok dan palu, menimbulkan ketakutan kepada masyarakat dan juga ketakutan investor baru di daerah yang diindikasi ada sesar.  Perlu segera ada ketegasan/resmi terkait pemetaan sesar, karena usulan sesar di RTRW belum dapat dimasukkan.', 21, 0, '2018-11-21', 0, 0, 0),
(75, 'Dwiyanti Kusumaningrum', 'Pusat Penelitian Kependudukan, Lembaga Ilmu Pengetahuan Indonesia ', 'kosong', 'Selain perlunya penataan dalam koordinasi one map policy untuk peta-peta kebencanaan, dalam konteks permukiman tangguh bencana (gempa), menurut saya perlu juga dilakukan penataan dalam penerapan building code tahan gempa di Indonesia, karena selama ini SNI sudah ada, namun belum  terlihat adanya sistem pengawasan/audit bangunannya. ', 21, 0, '2018-11-21', 0, 0, 0),
(76, 'Heru sunardi', 'Dinas perumahan kota surakarta', 'kosong', '1. Ketangguhan bangunan fisik atau infrastruktur menghadapi bencana khususnya gempa dari berbagai penelitian dan ilmu bisa di sikapi dng penemuan2 tehnologi utk meminimalisasi korban, namun yg tak kalah pentingnya bagaimana menangani manusianya dlm waktu yg singkat.\r\n\r\n2. Regulasi/aturan rencana tata ruang wilayah mestinya ke dpn perlu dipertimbangkan bangunan2 yg berada di wilayah rawan gempa perlu ada rujukan standarisasi  yg ketat spy keamanan bangunan terjaga.\r\n\r\n3. Kementerian PUPR perlu  sosialisasi di daerah2 rawan gempa tentang peta rawan gempa perlu dilaksanakan di daerah dng peserta lokal.', 21, 0, '2018-11-21', 0, 0, 0),
(77, 'YUDAS SABGGALET', 'BUPATI MENTAWAI SUMBAR', 'kosong', '1.Kita mesti orientasi sebelum terjadi gempa, maka para pakar segera berkontribusi  dalam bentuk penelitian.\r\n2.Informasi potensi gempa sudah menjadi konsumsi publik dan para pejabat harus memperoleh informasi lebih konkrit.\r\n3.Pendistribusian Dana DAU, mesti dipertimbangkan aspek Potensi kegempaan.', 21, 0, '2018-11-21', 0, 0, 0),
(78, 'Dina Nuzulia', 'Ditjen Penyediaan Perumahan', 'kosong', '1. Apakah peta gempa 2017 sdh menjadi dasar Desain Spektra Indonesia (dari puskim.go.id)? 2. Berapa jarak aman (meter) dari jalur sesar untuk pembangunan rumah? ', 21, 0, '2018-11-21', 0, 0, 0),
(79, 'Budiyansa', 'Dinas PUPR Kab. Pasangkayu', 'kosong', 'Untuk mendapatkan data dasar dan juga peta tentang gempa, tsunami, likuipaksi Dimana pemerintah daerah bisa mendapatkan data-data & peta tsb sebagai dasar Pemerintah Daerah utk menyusun suatu kebijakan/perda tentang penataan ruang dalam rangka mengantisipasi dampak yg ditimbulkan oleh gempa krn kami pemerintah sangat susah memberikan pemahaman/pengertian ke masyarakat yg akan melakukan pembangunan diatas lahan masyarakat sendiri.\r\nTerima Kasih, acaranya MANTAP!!!', 21, 0, '2018-11-21', 0, 0, 0),
(80, 'YUDAS SABGGALET', 'BUPATI MENTAWAI SUMBAR', 'kosong', 'PUS GEN SEGERA MENGELUARKAN PETA Mengatur dan sesar di setiap daerah.', 21, 0, '2018-11-21', 0, 0, 0),
(90, 'Annisa PS', 'DGHP', 'kosong', 'Remark: Great event with resourceful informations!\r\n\r\nQuestion: Based on your researches, where would have other earthquakes happened, in like couple months ahead? And how big? So we could have prepared ourselves.', 21, 0, '2018-11-21', 0, 0, 0),
(91, 'Ahmad Junaidi', 'Satker Setditjen PnP', 'kosong', 'tadi disampikan bahwa di wilayah DKÄ° Jakarta  dan sekitarnya berpotensi terjadi gempa yg besar, iinformasi ini tentu harus tersampaikan ke masyarakat. \r\nPertanyaannya, sudahkah hal ini disampaikan ke Masyarakat..?\r\ndan menjadi kewenangan siapa..?', 21, 0, '2018-11-21', 0, 0, 0),
(82, 'Adji Krisbandono ', 'Balitbang PUPR ', 'kosong', 'Pemda memegang peran penting untuk memastikan seluruh bangunan gedung di wilayahnya aman terhadap risiko gempa (amanat UUBG). Pemerintah Pusat juga punya peran yang tidak kalah penting sebagai instansi pembina. PR kita masih banyak, selain mitigasi dengan hazard based spatial planning, edukasi dan literasi bencana, teknologi yang adaptif juga menjadi bagian dari strategi pengelolaan risiko kebencanaan yang komprehensif ', 21, 0, '2018-11-21', 0, 0, 0),
(88, 'Fahmi Zamroni', 'Pusat Pengendalian Lumpur Sidoarjo', 'kosong', 'Infrasruktur tanggul yang dibangun mulai awal semburan lumpur hingga saat ini berfungsi sebagai tampungan luapan lumpur. Melihat Sidoarjo merupakan daerah delta dan infrastruktur tanggul yg ada saat ini berada di atas tanah jenuh air akibat luapan lumpur yg masih terjadi dan kemungkinan besar berada di atas sesar kendeng. Pertanyaannya apakah besar kemungkinannya terjadi likuifaksi di wilayah sidoarjo terutama di Porong?', 21, 0, '2018-11-21', 0, 0, 0),
(89, 'YUDAS SABGGALET', 'BUPATI MENTAWAI SUMBAR', 'kosong', 'Khusus Prof. Hilman, hasil penelitian bapak tentang Mentawai, perlu kita implementasikan bersama. ', 21, 0, '2018-11-21', 0, 0, 0),
(86, 'Hendra Andriana', 'Satker Penataan Bangunan dan Lingkungan provinsi Jawa Barat', 'kosong', 'Sinergi pengelolaan resiko kebencanaan menuju permukiman tangguh bencana harapannya dari hasil penelitian2 yg telah dilakukan dapat dirumuskan langkah2 yang lebih dapat di implementasikan oleh daerah.', 21, 0, '2018-11-21', 0, 0, 0),
(87, 'Widi', 'Pemkot Tangerang', 'kosong', 'Saran : agar seminar ini bisa ditindaklanjuti kemenpupr dengan melakukan pembinaan kepada pemda dalam melakukan kajian dan pemetaan mikrozonasi', 21, 0, '2018-11-21', 0, 0, 0),
(92, 'Dyah Nur Suci', 'CPNS di Puslitbang Kebijakan dan Penerapan Teknologi, Balitbang PUPR', 'kosong', 'Perda RTRW dan RDTR harus didukung (superimpose) dengan peta risiko bencana yang akurat, jangan sampai skala petanya tidak mampu memberikan masukan untuk penentuan zona mana yang boleh & tidak boleh dibangun. Dan jangan lupa, upaya pengendalian pemanfaatan ruang harus menjadi mainstream di kalangan Pemda', 21, 0, '2018-11-21', 0, 0, 0),
(93, 'ekow', 'BPPSPAM', 'kosong', 'Seminar nasional yang bermanfaat sebagai tempat berbagi ilmu pengetahuan/ knowledge sharing.  Tantangan utamanya: aksi untuk membumikan ilmu tersebut.  Semoga Ilmu yang bermanfaat dapat menjadi Amal yang berkelanjutan.  Aamiin', 21, 0, '2018-11-21', 0, 0, 0),
(95, 'Irawadi', 'DPU Kab Banyumas', 'kosong', 'Dengan adanya garis sesar yg sdh dibuat apakah dimungkinkan adanya sesar yg sifatnya lebih lokal akibat sesar utama', 21, 0, '2018-11-21', 0, 0, 0),
(96, 'YUDAS SABGGALET', 'BUPATI MENTAWAI SUMBAR', 'kosong', 'Mentawai ada megathrust, apa yang Pemda buat untuk mengurangi resiko bencana', 21, 0, '2018-11-21', 0, 0, 0),
(97, 'Dadi', 'Dinas Perumahan Permukiman Jawa Barat', 'kosong', 'Semoga hasil2 penelitian dapat segera diimplementasikan dalam skala yang lebih mikro, sehingga dapat diakomodir dalam update perencanaan tata ruang wilayah. ', 21, 0, '2018-11-21', 0, 0, 0),
(98, 'Hermani Wahab', 'Bappenas', 'kosong', 'Sebagai informasi, tgl 22 Nov 2018, Gubernur Sulteng, mengundang acara konsultasi Publik rancangan Master Plan pemulihan dan Pembangunan Wilayah pasca Bencana Sulteng, jam 14.00, di aula dinas perumahan, kawasan permukiman dan pertanahan Priv Sulteng. Peserta undangan semua Pemangku kepentingan. ', 21, 0, '2018-11-21', 0, 0, 0),
(99, 'Marsudi', ' PBL Papua Barat', 'kosong', 'Apresiasi kpd Panitia SemNas PUPR ,,, kegiatan ini sangat penting mengingat Wilayah Indonesia Rawan Bencana (Ring of Fire) bermanfaat bg masyarakat luas,  perlu EDUKASI sejak dini dilembaga pendidikan (tingkat SD, SMP, SMK, Madrasah, PTN/PTS)  dikab/kota yg mudah dipahami kalayak umum, dg penyediaan NSPM dan sarpras Perpustakaan di sekolah2 sbg media informasi, thd Resiko Kebencanaan Menuju Permukiman Tangguh Bencana di daerah.\r\n\r\nSemNas ini sbg  Titik Awal bg Pemerintah dan Stakeholder dlm kesiap siagaan terhadap Resiko Bencana di NKRI ,, Terima kasih\r\n', 21, 0, '2018-11-21', 0, 0, 0),
(100, 'YUDAS SABGGALET', 'BUPATI MENTAWAI SUMBAR', 'kosong', 'Untuk daerah potensi gempa, disarankan bahan bangunan dipakai kayu, dan kementrian kehutanan perlu ada kerja sama.', 21, 0, '2018-11-21', 0, 0, 0),
(102, 'Mahmuddin Tura', 'PUPR Kota Mataram', 'kosong', 'Acara ini sangat bagus & sgr bagikan kedaerah peta2 penting yg berkaitan dgn daerah rawan bencana utk dijadikan pedoman dlm penataan tata ruang & penataan bangunan gedung & lingkungan didaerah tks', 21, 0, '2018-11-21', 0, 0, 0),
(103, 'Rogydesa', 'STANBAG-CK', 'kosong', 'Sudah saatnya IMB dan SLF dijadikan instrumen pengendali bangunan untuk memastikan pemenuhan persyaratan teknis.....  \r\n\r\nBentuk TABG dalam implementasi IMB\r\n\r\nInisiasi peran pengkaji teknis untuk implementasi SLF', 21, 0, '2018-11-21', 0, 0, 0),
(104, 'Yumnawarni', 'Satker PBL Riau', 'kosong', 'Daerah-daerah di Indonesia yang tidak termasuk "ring of fire" sebaiknya tetap dilibatkan dalam sistem pengelolaan resiko kebencanaan agar informasi yang ada bisa juga dipahami dan menjadikan masyarakat di daerah tersebut tetap siap dan siaga dalam  menghadapi semua kemungkinan bencana yang ada di Indonesia. Tetap semangat PU PR...', 21, 0, '2018-11-21', 0, 0, 0),
(105, 'Deny K', 'Setditjen Penyediaan Perumahan', 'kosong', 'Sepertinya perlu adanya informasi peta mikro zonasi bahaya bencana alam agar dapat diinplementasikan dalam perda terkait tata ruang wilayah berbasis mitigsi bencana.', 21, 0, '2018-11-21', 0, 0, 0),
(106, 'Ignatius Wing Kusbimanto', 'Pusdatin', 'kosong', 'Perlu suatu lembaga sebagai koordinator dari semua komite2 keselamatan infrastruktur yg ada dalam upaya mitigasi bencana.', 21, 0, '2018-11-21', 0, 0, 0),
(107, 'Purwanto Joko A', 'Satker PBL NTB', 'kosong', '1.Siapa yg menentukan Stuktur kelembagaan terkait penanganan Bencana Gempa,? Agar penentuan kebijakan n data terkait penanganan bencana cepat. Misalnya terkait data agar menjadi Satu data baik dari kerusakan infrastuktur,bangunan pemerintahan, fasum fasos n rumah jumlah n jenis kerusakannya \r\n2. Terkait bencana bahwasanya qt tahu kondisi saat pasca bencana terjadi demand yg sangat tinggi n susahnya akses sekitar 1- 2 bulan atw bahkan lebih sampai kondisi kondusif sehingga perekonomian pulih kembali, harga n upah melambung tinggi yg tidak bisa menggunakan harga standart maupun harga normal di daerah tsb. Lalu siapakah yg harus menentapkan hal tersebut, karena berdampak di percepatan penanganan. \r\n', 21, 0, '2018-11-21', 0, 0, 0),
(108, 'Dr. Ir. M Arsyad Thaha', 'Dekan Fak Teknik Universitas Hasanuddin', 'kosong', 'Masukan:\r\n1. Sesuai tema seminar SINERGI, maka diharapkan semua program recovery dan rekonstruksi daerah bencana (Lombok, Pasido, dll) melibatkan Perguruan Tinggi di sekitar lokasi bencana. Unhas cukup kompeten u dilibatkan bersama itb dan universitas besar di jawa lainnya.\r\n2. Unhas sdh berperan lngsng sejak masa tanggap darurat di kedua lokasi bencana tersebut melalui fak kedokteran dan bbrp lainnya termsk fak teknik. FT Unhas dan UGM telah mengorganized FGD langkah2 pasca bencana di Pasido bbrp hr stlh terjadi bencana melibatkan bmkg, bnpb, bpbd, bbrp PT lainnya di Intim. Telah mengeluarkan bbrp rekomendasi yg mencakup perbaikan koordinasi penanganan bencana, review tata ruang dan msterplan pemb kota/wilayah dan keterlibatan PT terutama yg dekat lokasi bencana.\r\n3. Kegiatan riset dsn investigasi lapangan tlh dilakukan oleh bbrp tim dari kami, baik bekerja sama dg peniliti dr bbrp universitas besar di jepang maupun tim sendiri. Banyak skali hal yg perlu dilakukan segera sblm masyarakat membangun lg secara tdk terkendali.\r\n4. Pusat Studi Kebencanaan Unhas, saat ini mengkonsolidasikan studi pemetaan secara detail patahan2 yg muncul untuk menverifikasi peta2 sesar yg terakhir.\r\n5. Tksh. Kami menunggu respon pemerintah pusat.', 21, 0, '2018-11-21', 0, 0, 0),
(109, 'Okta', 'KIP_DJCK', 'kosong', 'Materi yang diberikan oleh narasumber menarik dan sangat penting terkait kebencanaan di negara kita. Bagaimana cara memberikan pendidikan kebencanaan kepada anak2 dan masyarakat pada umumnya? Terima kasih.', 21, 0, '2018-11-21', 0, 0, 0),
(110, 'Meli Latuihamallo', 'DINAS PUPR KOTA AMBON', 'kosong', 'Sangat berterima kasih seminar ini sehingga kami dapat informasi data2 mengenai becana. Sehingga di tahun 2019 RTRW KOTA AMBON yang akan direvisi. Mohon penjelasan data dan peta resiko bencana pulau Ambon dapat kami perole agar pd saat revis RTRW 2019 sdh tertera daerah / wilayah rawan bencana. Trimakasih', 21, 0, '2018-11-21', 0, 0, 0),
(111, 'Saeful Rohman', 'BPPT', 'kosong', 'Dalam pembuatan hunian tahan gempa atau ramah gempa sudah ditentukan beberapa persyaratan sesuai permen PUPR,  tapi bagaimana dengan konstruksi bangunan dengan material kjusus seperti komposit polimer apakahcukup dengan mengikuti permen permen yg telah ditentukan seperti untuk rumah semen seperti Risha, ataukah harus ditambah dengan pengujian pengujian komponen? ', 21, 0, '2018-11-21', 0, 0, 0),
(112, 'Muhamad Arief RH ', 'Dinas PUPR Kab. Merangin Prov. Jambi', 'kosong', 'Saat ini setahu saya kontruksi bangunan tahan gempa yg telah ada prototipenya, namun utk tsunami dan liquifaksi Yg belum ada, bangunan secanggih apapun tdk mampu bertahan atas bencana tsunami terutama liquifaksi, mohon solusi nya,  demikian pula peta nasional utk daerah rawan kedua bencana tsb. Trims ', 21, 0, '2018-11-21', 0, 0, 0),
(114, 'Chandra Widiatmoko', 'Politeknik Negri Jakarta', 'kosong', 'Era yang modern ini begitu mudah dan cepat nya mencari informasi. Begitu juga dengan teknologi yanh berkembang sangat cepat yang seharus nya bisa menemani perkembangan SDM kita untuk memajukan bangsa', 0, 0, '2019-02-26', 0, 0, 0),
(115, 'Winalia Elsa D', 'Ipb', 'kosong', 'Bagus boothnya dan ramah ', 0, 0, '2019-02-26', 0, 0, 0),
(116, 'Gemi Puspa Dwiputra', 'Bina Marga', 'kosong', 'Acara yg seru dan menarik', 0, 0, '2019-02-26', 0, 0, 0),
(117, 'h', 'CK', 'kosong', 'Hai', 0, 0, '2019-02-26', 0, 0, 0),
(118, 'Rizqi ', 'Ditjen cipta karya', 'kosong', 'Acaranya kereeeennn bangettt.. seru ....', 0, 0, '2019-02-26', 0, 0, 0),
(119, 'meliza gilbert', 'mc', 'kosong', 'seru banget boothnya, apalagi visualisasinya disini. kemenpupr harus makin maju nih teknologinya jangan mau kalan sama yang lain. keep working !!!', 0, 0, '2019-02-26', 0, 0, 0),
(120, 'Eldyawan', 'Pupr', 'kosong', 'Asique mantab tenan gan', 0, 0, '2019-02-26', 0, 0, 0),
(121, 'Erase', 'Setditjen. Cipta Karya', 'kosong', 'Luar biasa', 0, 0, '2019-02-26', 0, 0, 0),
(122, 'Terry', 'Bhkp cipta karya', 'kosong', 'Kereen banget ada aplikasi keren nya', 0, 0, '2019-02-26', 0, 0, 0),
(123, 'Yuliana imelda silahooij', 'Direktorat Bina Penataan Bangunan', 'kosong', 'Cipta Karya is the best', 0, 0, '2019-02-26', 0, 0, 0),
(124, 'Ratmawati', 'Setditjen ck', 'kosong', 'Sangat bagus tuk pengetahuan melalaui teknologi informasi \r\nSering2 diadakan pameran sprti ini', 0, 0, '2019-02-26', 0, 0, 0),
(125, 'Bimo Arioseno', 'Estindo Rekagraha', 'kosong', 'Kagum akan kreatifitas nya. Maju terus membangun bangsa....bravo PUPR', 0, 0, '2019-02-26', 0, 0, 0),
(126, 'Eka', 'Itjen', 'kosong', 'Ck memang ok', 0, 0, '2019-02-26', 0, 0, 0),
(127, 'Eka', 'Itjen', 'kosong', 'Ck memang ok', 0, 0, '2019-02-26', 0, 0, 0),
(128, 'Lady mariska', 'Itjen', 'kosong', 'Ok', 0, 0, '2019-02-26', 0, 0, 0),
(129, 'Tika apriyana', 'Itjen', 'kosong', 'Creative', 0, 0, '2019-02-26', 0, 0, 0),
(130, 'rizqi', 'djck', 'kosong', 'kereeeeeeeeeeennnnnnnn rameeeeeee seruuuuu\r\n', 0, 0, '2019-02-27', 0, 0, 0),
(131, 'ayi heri hariyanto', 'pdam tkr kabupten tangerang', 'kosong', 'booth nya cukup menarik dan informatif.\r\n', 0, 0, '2019-02-27', 0, 0, 0),
(132, 'irna septiani maolidah', 'BPSDM', 'kosong', 'Semoga expo 2019 semakin jaya :)', 0, 0, '2019-02-27', 0, 0, 0),
(133, 'Rizqi ', 'Ditjen cipta karya', 'kosong', 'Acaranya kereeeennn bangettt.. seru ....', 0, 0, '2019-02-27', 0, 0, 0),
(134, 'netraning tyas b', 'pspam', 'kosong', 'menarik bagus\r\n', 0, 0, '2019-02-27', 0, 0, 0),
(135, 'DIAN', 'ITJEN', 'kosong', 'booth nya inovatif ada robot yang seru', 0, 0, '2019-02-27', 0, 0, 0),
(136, 'puri', 'dit. pengembangan spam', 'kosong', 'booth nya keren, penjelasannya lengkap dan aplikasi teknologinya sangat menarik', 0, 0, '2019-02-27', 0, 0, 0),
(137, 'tika', 'itjen', 'kosong', 'seru, kreatif, doorprizenya kurang banyak..', 0, 0, '2019-02-27', 0, 0, 0),
(138, 'Dini', 'DJCK', 'kosong', 'Penjaga stand sangat informatif', 0, 0, '2019-02-27', 0, 0, 0),
(139, 'Dwi Putri Nengsi', 'Ditjen SDA', 'kosong', 'Aplikasi SSS nya sangat membantu untuk menyimpan data yang cukup besar', 0, 0, '2019-02-27', 0, 0, 0),
(140, 'Elok Yunita', 'SDA PUPR', 'kosong', 'Sudah keren sistemnya', 0, 0, '2019-02-27', 0, 0, 0),
(141, 'amel', 'sekjen', 'kosong', 'pameran untuk kali ini booth cipta karya sangat informatif dan bagus dengan robot nya', 0, 0, '2019-02-27', 0, 0, 0),
(142, 'fadhillah fikri', 'bppspam', 'kosong', 'boothnya bagus, mcd 4.0 baik', 0, 0, '2019-02-27', 0, 0, 0),
(143, 'ragees mirakelia', 'ditjen penyediaan perumahan', 'kosong', '  suka dengan teknologi barunya \r\n', 0, 0, '2019-02-27', 0, 0, 0),
(144, 'Tyas', 'Cipta karya', 'kosong', 'Menarik bgt', 0, 0, '2019-02-27', 0, 0, 0),
(145, 'Humam Aulia', 'PSPAM DJCK', 'kosong', 'Penjelasannya dari mbak masayu dan widi sangat imforamatif dan memuaskan sehingga dapat membuka wawasan saya mengenai teknologi cipta karya', 0, 0, '2019-02-27', 0, 0, 0),
(146, 'heri supriyanta', 'BPPSPAM', 'kosong', 'Both cukup baik, hanya kurang lebar untuk memandu tamu dalam mencoba fitur2 pengembangan tehnologi IT yang sekarang dikembangkan Ditjen Cipta Karya.\r\n\r\nMohon dibantu pengembangan QR CODE BMN yang saat ini dikembangkan di BPPSPAM naik pada level Ditjen Cipta Karya ,\r\nTks .. Sukses', 0, 0, '2019-02-27', 0, 0, 0),
(147, 'yudhistira achmad', 'ditjen Penyediaan Perumahan', 'kosong', 'Amazing..... menurut saya bagus karena semuanya bisa dilhat secara 3D.', 0, 0, '2019-02-27', 0, 0, 0),
(148, 'firman', 'ditjen pnp', 'kosong', 'kreatiff...!!', 0, 0, '2019-02-27', 0, 0, 0),
(149, 'Lidya', 'Blogger', 'kosong', 'Teknologi Augmented Realitynya keren', 0, 0, '2019-02-27', 0, 0, 0),
(150, 'kristymikha', 'Ditjen Bina Konstruksi', 'kosong', 'Boothnya sangat menarik, inovatif dan banyak informasi yang di dapat.', 0, 0, '2019-02-27', 0, 0, 0),
(151, 'sinta ria arini', 'dit pkp', 'kosong', 'stannya bagus, keren', 0, 0, '2019-02-27', 0, 0, 0),
(152, 'Sara', 'Cipta Karya', 'kosong', 'Menarik !', 0, 0, '2019-02-27', 0, 0, 0),
(153, 'Buj', 'CK', 'kosong', 'Bagus. Tapi gua jaga mulu h3h3h3', 0, 0, '2019-02-27', 0, 0, 0),
(154, 'rien yolanda ', 'CK', 'kosong', 'sipppppp lanjutkan! semoga terus maju dan bermanfaat', 0, 0, '2019-02-27', 0, 0, 0),
(155, 'linda', 'Pusat Pengelolaan Dana Pembiayaan Perumahan', 'kosong', 'kereeeen...', 0, 0, '2019-02-27', 0, 0, 0),
(156, 'Ni Putu Dani', 'Cipta Karya', 'kosong', 'Acara yang bagus. Penerapan teknologi direalisasikan', 0, 0, '2019-02-27', 0, 0, 0),
(157, 'Nadia Hutagalung', 'Dit. BPB DJCK', 'kosong', 'Penerapan teknologi terkini mengikuti perkembangan jaman! Semoga bisa semakin lebih baik lagi!', 0, 0, '2019-02-27', 0, 0, 0),
(158, 'caca', 'bpsdm', 'kosong', 'kerennnnnnnnnn\r\n', 0, 0, '2019-02-27', 0, 0, 0),
(159, 'billy', 'bangkim', 'kosong', 'keren, jaya terus ck!!!', 0, 0, '2019-02-27', 0, 0, 0),
(160, 'Nyimas', 'DJCK', 'kosong', 'Thank you souvenirnya! Semoga MCD dapat bermanfaat mendukung program DJCK.', 0, 0, '2019-02-27', 0, 0, 0),
(161, 'SHERLI', 'BPB DJCK', 'kosong', 'Good!', 0, 0, '2019-02-27', 0, 0, 0),
(162, 'fira riza', 'bpb', 'kosong', 'menarik', 0, 0, '2019-02-27', 0, 0, 0),
(163, 'No Name', 'CNN', 'kosong', 'Keren, instansi pemerintah sudah mulai memanfaatkan teknologi 3D seperti Virtual Reality, AI, dsb dalam memperkenalkan dan mempresentasikan program2nya. Akan memudahkab untuk interaksi dengan publik. The future is Near!!', 0, 0, '2019-02-27', 0, 0, 0),
(164, 'Aldilla Annisa', 'Pembiayaan Infrastruktur', 'kosong', 'oke juga, inovatif sekali, good job', 0, 0, '2019-02-28', 0, 0, 0),
(165, 'IPAN', 'PPIJJ - PIPUP', 'kosong', 'LANJUTKAN', 0, 0, '2019-02-28', 0, 0, 0),
(166, 'Rezky Dwi Nur C', 'Ditjen SDA', 'kosong', 'Keren banget booth nya CK :D', 0, 0, '2019-02-28', 0, 0, 0),
(167, 'Yulia Rahmi', 'ditjen SDA', 'kosong', 'inovatif dan kretaif.. sukses trus CK.', 0, 0, '2019-02-28', 0, 0, 0),
(168, 'riska', 'sda', 'kosong', 'good', 0, 0, '2019-02-28', 0, 0, 0),
(169, 'irvana', 'Ditjen Pnp', 'kosong', 'kereeeen!', 0, 0, '2019-02-28', 0, 0, 0),
(170, 'sinta dwi cahyanti', 'universitas negeri jakarta', 'kosong', 'aplikasi arvrnya sangat menarik, bisa melihat bangunan jalan dan gedung lebiih detail dan seperti nyata. robotnya juga lucu. semoga aplikasi ioni bisa menajdi inovasi ya. makasih loh :)', 0, 0, '2019-02-28', 0, 0, 0),
(171, 'rina oktaviani', 'unj', 'kosong', 'aplikasinya inovatif, robotnya juga lucu. tingkatkan terus yaaa, doain saya biar bisa masuk sini juga :)', 0, 0, '2019-02-28', 0, 0, 0),
(172, 'M. Agung Prasetyo', 'HIMA SIPIL UNJ', 'kosong', 'KICIW!!!!', 0, 0, '2019-02-28', 0, 0, 0),
(173, 'Hilman Riadhi', '-', 'kosong', 'Boothnya bagus dan informatif', 0, 0, '2019-02-28', 0, 0, 0),
(174, 'muhamad rizky maldini', 'unj', 'kosong', 'semoga sukses', 0, 0, '2019-02-28', 0, 0, 0),
(175, 'muhammad firdaus antoni', 'universitas negeri jakarta', 'kosong', 'semoga makin jaya dan semangat membangun infrastruktur di indonesia', 0, 0, '2019-02-28', 0, 0, 0),
(176, 'yudhantoro', 'kepegawaian CK', 'kosong', 'keren dan informatif.. jempol banged deh', 0, 0, '2019-02-28', 0, 0, 0),
(177, 'Winda Purnama', 'Kepegawaian CK', 'kosong', 'MCDnya keren, lucu bgt, kekinian punya dooonk... Mantabhh..', 0, 0, '2019-02-28', 0, 0, 0),
(178, 'Immanuel Pratomojati', 'LSP K3 Konstruksi', 'kosong', 'PUPR terlihat lebih maju dengan adanya aplikasi terbaru. Cukup canggih. Informasi tentang KePUan bisa dilihat. ', 0, 0, '2019-02-28', 0, 0, 0),
(179, 'Arman Manalu', 'BBWS Citarum', 'kosong', 'Teknologi yang sangat bermanfaat untuk pengembangan pekerjaan dilingkungan PU. ', 0, 0, '2019-02-28', 0, 0, 0),
(180, 'yolania', 'inspektorat', 'kosong', 'orang PU perlu melek teknologi utk terus membangun Indonesia dengan cepat', 0, 0, '2019-02-28', 0, 0, 0),
(181, 'Maya Indriyani', 'BPSDM', 'kosong', 'Keren, semua udah berbentuk virtual..semoga makin sukses lagi DJCK...', 0, 0, '2019-02-28', 0, 0, 0),
(182, 'deby maesaroh', 'BPSDM', 'kosong', 'KEREN, SUKSES TERUS', 0, 0, '2019-02-28', 0, 0, 0),
(183, 'SUNARTO', 'iTJEN pupr', 'kosong', 'SUDAH  BAGUS INFORMATIF PERLU NDITINMGKATKAN LEBIH BAIK LAGI KE DEPAN', 0, 0, '2019-02-28', 0, 0, 0),
(184, 'EKA DARMAYANTI', 'BIRO HUKUM SETJEN', 'kosong', 'INOVATIF', 0, 0, '2019-02-28', 0, 0, 0),
(185, 'INDRY', 'BIRO HUKUM', 'kosong', 'INFORMATIF, DAN KREATIF', 0, 0, '2019-02-28', 0, 0, 0),
(186, '', '', 'kosong', 'Aplikasi bagus dan perlu dikembangkan.....ðŸ‘\r\nNice work....', 0, 0, '2019-02-28', 0, 0, 0),
(187, 'Mr. D', 'Balitbang', 'kosong', 'Menariquee', 0, 0, '2019-02-28', 0, 0, 0),
(188, 'Afiynda Aziza', 'Pusdatin - Setjen', 'kosong', 'Semoga CK sukses selalu, dan terus berinovasi dalam teknologi..ðŸ‘ðŸ»ðŸ‘ðŸ»', 0, 0, '2019-02-28', 0, 0, 0),
(189, 'Julia', 'Djck', 'kosong', 'Maju terus programnya yaaa', 0, 0, '2019-02-28', 0, 0, 0),
(190, 'Ashri amalia hadi', 'Ciptakarya', 'kosong', 'Konsep acara keren cm tempat kurang luas', 0, 0, '2019-02-28', 0, 0, 0),
(191, 'Ahmad Rusdi', 'BPp', 'kosong', '', 0, 0, '2019-02-28', 0, 0, 0),
(192, 'Ahmad Rusdi', 'BPPSPAM', 'kosong', 'Sering Tampil', 0, 0, '2019-02-28', 0, 0, 0),
(193, 'Sartini', 'Bppspam', 'kosong', 'Foto sama robot, inovasi keren', 0, 0, '2019-02-28', 0, 0, 0),
(194, 'Andi yoesoef', 'Pembiayaan infrastruktur', 'kosong', 'Menarik', 0, 0, '2019-02-28', 0, 0, 0),
(195, 'Welly yudia oktaviani', 'SDA', 'kosong', 'Mantap betul inovasinya ... Semoga krdepan lebih baik yaa', 0, 0, '2019-02-28', 0, 0, 0),
(196, 'Whinda pratiwi', 'Sda', 'kosong', 'Teknologinya keren, sesuai zaman milenial. Mantappp', 0, 0, '2019-02-28', 0, 0, 0),
(197, 'Siti usarofah', 'djck', 'kosong', 'Sangat menarik dan berpendidikan', 0, 0, '2019-02-28', 0, 0, 0),
(198, 'Dewi maulita', 'Djck', 'kosong', 'Good job!', 0, 0, '2019-02-28', 0, 0, 0),
(199, 'Hary puji', 'Sda', 'kosong', 'Nice n attractive', 0, 0, '2019-02-28', 0, 0, 0),
(200, 'Hari Nugraha Nurjaman', 'Ikatan Ahli Pracetak dan Prategang Indonesia', 'kosong', 'Secara overall acaranya udah bagus. Terlebih lagi dari beberapa materi yg disampaikan dan booth yg disediakan sangat berkaitan dgn penerapan iot/teknologi lainnya di berbagai aspek pekerjaan. Sehingga hal tsb dapat membuka cakrawala baru dan memudahkan pembelajaran bagi audience mengenai teknologi dengan cara yg mudah dan menyenangkan.', 0, 0, '2019-02-28', 0, 0, 0),
(201, 'Aditio', 'Cipta Karya', 'kosong', 'Boothnya keren dan aplikasinya T.O.P, sesuai dengan kebutuhan dirjen CK sehingga sangat mungkin dapat meningkatkan kinerja dari dirjen CK dan mendukung revolusi industri 4.0, keep creative and innovative ðŸ’ªðŸ»ðŸ‘ðŸ»', 0, 0, '2019-02-28', 0, 0, 0),
(202, 'Ina Kristiana', 'ISTN', 'kosong', 'Booth ditjen cipta karya bagus, kekinian, menggambarkan 4.0 bgt, bnyk informasi digital yg disampaikan melalui aplikasi2 yg menarik. Sangat informatif. Ada maskot robot yg menarik juga. Namun karena saat pameran berlangsung juga bersamaan dg talkshow, saat mendengar penjelasan di booth perhatian agak teralihkan. Tp secara keseluruhan booth cipta karya menarik dan informatif.', 0, 0, '2019-02-28', 0, 0, 0),
(203, 'deva  meldatriharti', 'DPMPTSP Kota Bukittinggi', 'kosong', 'Menurut kami sangat baik dalam pemanfaatan teknologi IT,salut dan sukses mas gram dan tim,mudah2an kami di daerah bisa mengikuti dan di bantu oleh mas gram dan tim.terima kasih', 0, 0, '2019-02-28', 0, 0, 0),
(204, 'Fazrial Feizal', 'ISTN', 'kosong', 'Kerenzzz......booth CK menunjukkan sesungguhnya kesiapan PUPR menghadapi Revolusi Industri 4.0......digitalisasi utk kontruksi....mantap #pupr4', 0, 0, '2019-02-28', 0, 0, 0),
(205, 'Dyah Meiliawati', 'Cipta Karya', 'kosong', 'Banyak aplikasi menarik', 0, 0, '2019-03-01', 0, 0, 0),
(206, 'Linda andita puspitasari', 'Ditjen cipta karya', 'kosong', 'Boothnya keren', 0, 0, '2019-03-01', 0, 0, 0),
(207, 'Yermia', 'PUPR', 'kosong', 'Standnya asiik', 0, 0, '2019-03-01', 0, 0, 0),
(208, 'Habibie', 'Sekretariat jenderal', 'kosong', 'Bagus dan menarik..ke depan bisa lbh baik lagi', 0, 0, '2019-03-01', 0, 0, 0),
(209, 'Restia', 'Cipta karya', 'kosong', 'Bagusss dan menarik', 0, 0, '2019-03-01', 0, 0, 0),
(210, 'Novitasari R', 'Cipta karya', 'kosong', 'Boothnya menarik ', 0, 0, '2019-03-01', 0, 0, 0),
(211, 'Nurma Rahmani Nasution', 'Dit. PPLPP DJCK', 'kosong', 'Bagus', 0, 0, '2019-03-01', 0, 0, 0),
(212, 'Ni Luh Nilawati', 'Setditjen Ck', 'kosong', 'Bagus', 0, 0, '2019-03-01', 0, 0, 0),
(213, 'Gunawan wibisono', 'Pemda pemalang', 'kosong', 'Inovasi diperlukan untuk mengatasi tantangan yg lebih besar', 0, 0, '2019-03-01', 0, 0, 0),
(214, 'Rizki setia', 'Bpjs kesehatan', 'kosong', 'Gooddd', 0, 0, '2019-03-01', 0, 0, 0),
(215, 'Iwan Suprijanto', 'Djck', 'kosong', 'Pupr terus maju mendukung revolusi industri konstruksi 4.0', 0, 0, '2019-03-01', 0, 0, 0),
(216, 'Indah triana ristani', 'Inspektorat jenderal', 'kosong', 'Booth nya agar lebih meriah', 0, 0, '2019-03-01', 0, 0, 0),
(217, 'Roselina', 'Ditjen cipta karya', 'kosong', 'Keren.....canggih', 0, 0, '2019-03-01', 0, 0, 0),
(218, 'Netty', '', 'kosong', 'Canggi dan kren', 0, 0, '2019-03-01', 0, 0, 0),
(219, 'Sari oktaviani', 'Plp cipta karya', 'kosong', 'Canggih', 0, 0, '2019-03-01', 0, 0, 0),
(220, 'Netty', 'Plp cipta karya', 'kosong', 'Canggih', 0, 0, '2019-03-01', 0, 0, 0),
(221, 'Subianto', 'Public', 'kosong', 'Acara cukup menarik', 0, 0, '2019-03-01', 0, 0, 0),
(222, 'Aditya iskandar', 'Cipta karya ', 'kosong', 'Menarik, inovatif dan keren', 0, 0, '2019-03-01', 0, 0, 0),
(223, 'komang Raka M', 'Satker plpbm', 'kosong', 'Virtual yg bagus, mudah dipahami khalayak', 0, 0, '2019-03-01', 0, 0, 0),
(224, 'Andi putrastio', 'Direktorat cipta karya', 'kosong', 'Sangat inovatif untuk mencapai integrasi ke seluruh indonesia', 0, 0, '2019-03-01', 0, 0, 0),
(225, 'Ika artika', 'Pplp djck', 'kosong', 'Mantab! Keren', 0, 0, '2019-03-01', 0, 0, 0),
(226, 'Juliana', 'Djck', 'kosong', 'Baliho berupa foto kurang ', 0, 0, '2019-03-01', 0, 0, 0),
(227, 'Ade Buddhi Yoga Acyuta', 'Direktorat PPLP', 'kosong', 'Sangat informatif dan penuh akan kemajuan teknologi', 0, 0, '2019-03-01', 0, 0, 0),
(228, 'Angga A', 'Cipta Karya', 'kosong', 'Boothnya canggih', 0, 0, '2019-03-01', 0, 0, 0),
(229, 'Iroh rohayati fatah', 'Kotaku', 'kosong', 'Keren.....informatif', 0, 0, '2019-03-01', 0, 0, 0),
(230, 'Masayu Nadiya Z', 'Ditjen Cipta Karya', 'kosong', 'Menarik', 0, 0, '2019-03-01', 0, 0, 0),
(231, 'Eza', 'Djck', 'kosong', 'Bagus , enak dpt hokben', 0, 0, '2019-03-01', 0, 0, 0),
(232, 'Hanifa', 'Cipta Karya', 'kosong', 'Menarik', 0, 0, '2019-03-01', 0, 0, 0),
(233, 'Ipet', 'Djck', 'kosong', 'baguuss,keep up the good work', 0, 0, '2019-03-01', 0, 0, 0),
(234, 'dharma nursani', 'BPSDM PUPR', 'kosong', 'Teknologi 4.0 bidang CK yg saya lihat emang yahuud. maju teruslah ', 0, 0, '2019-03-01', 0, 0, 0),
(235, 'RIdo M Ichwan', 'BPSDM', 'kosong', 'sangat impresive, sangat cerdas dalam memanfaatkan digitael age,  selamat untuk Datin Cipta Karya, Keep up the good work and become leader in PUPR 4.0 gen', 0, 0, '2019-03-01', 0, 0, 0),
(236, 'Agas Putra H', 'Jawa Pos Koran', 'kosong', 'Keren, cuma koneksi lemot. Masih perlu pengembangan. ', 0, 0, '2019-03-01', 0, 0, 0),
(237, 'ferry parwanto', 'BPSDM', 'kosong', 'inovatif dan kreatif sangat mendukung industry 4.0. mantulll', 0, 0, '2019-03-01', 0, 0, 0),
(238, 'Wayan LS', 'Subdit pelaksanaan', 'kosong', '4.0, sebuah keniscayaan yg harus kita implementasikan di DJCK khususnya dan PUPR pd umumnya, kerena revolusi IT bisa membuat yg tidak nyata menjadi nyata... Maju dan semangat ASN DJCK, ikuti perkembangan IT yg tanpa batas ini...ðŸ‘ðŸ‘ðŸ˜Š\r\nSalam senyum dan hangat...ðŸ™ðŸ¾', 0, 0, '2019-03-01', 0, 0, 0),
(239, 'Galuh', 'Bina Marga', 'kosong', 'Bagus tapi tapi tapi aku telat :(', 0, 0, '2019-03-01', 0, 0, 0),
(240, 'Nathania', 'Pspam cipta karya', 'kosong', 'KereeeenðŸ‘ðŸ‘ðŸ‘', 0, 0, '2019-03-01', 0, 0, 0),
(241, 'Faizah', 'Bina Marga', 'kosong', 'Kereeen', 0, 0, '2019-03-01', 0, 0, 0),
(242, 'Anitya', 'BM', 'kosong', 'Bagus!', 0, 0, '2019-03-01', 0, 0, 0),
(243, 'Gerry', 'Cipta Karya', 'kosong', 'Wow keren banget', 0, 0, '2019-03-01', 0, 0, 0),
(244, 'Hacked By MssXCode', 'Manusia Biasa Team', 'kosong', 'Hacked By MssXCode', 0, 0, '2019-07-23', 0, 0, 0),
(245, 'Hacked By MssXCode', 'Manusia Biasa Team', 'kosong', 'Hacked By MssXCode', 0, 0, '2019-07-23', 0, 0, 0),
(246, 'Dias', 'PUPR', 'kosong', 'Coba', 0, 0, '2019-07-31', 0, 0, 0),
(247, 'Rommell', 'Ditjen Penyediaan Perumahan', 'kosong', 'Apakah yg dimaksud Backlog', 0, 0, '2019-08-02', 0, 0, 0),
(252, 'fernandes', 'ditjen Pnp', 'kosong', 'algaeg', 21, 0, '2019-08-05', 0, 0, 0),
(253, 'gogogo', 'Pnp', 'kosong', 'coba lagi', 23, 0, '2019-08-05', 0, 0, 0);

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
