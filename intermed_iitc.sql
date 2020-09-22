-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2020 at 02:49 PM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intermed_iitc`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `all_konfirm_lomba`
-- (See below for the actual view)
--
CREATE TABLE `all_konfirm_lomba` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `backup_list-belum-bayar`
--

CREATE TABLE `backup_list-belum-bayar` (
  `id_daf` tinyint(4) NOT NULL,
  `nama` tinyint(4) NOT NULL,
  `alamat` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  `notelp` tinyint(4) NOT NULL,
  `institusi` tinyint(4) NOT NULL,
  `status_bayar` tinyint(4) NOT NULL,
  `status_ulang` tinyint(4) NOT NULL,
  `tgl_daftar` tinyint(4) NOT NULL,
  `htm_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `backup_listlomba`
--

CREATE TABLE `backup_listlomba` (
  `id` tinyint(4) NOT NULL,
  `namalomba` tinyint(4) NOT NULL,
  `kategori` tinyint(4) NOT NULL,
  `deskripsi` tinyint(4) NOT NULL,
  `tema` tinyint(4) NOT NULL,
  `harga` tinyint(4) NOT NULL,
  `keterangan` tinyint(4) NOT NULL,
  `jumlah_anggota` tinyint(4) NOT NULL,
  `file_gambar` tinyint(4) NOT NULL,
  `pre_registration` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `backup_motion_graphic`
--

CREATE TABLE `backup_motion_graphic` (
  `id_koor` tinyint(4) NOT NULL,
  `nama_team` tinyint(4) NOT NULL,
  `nama_koor` tinyint(4) NOT NULL,
  `lomba` tinyint(4) NOT NULL,
  `institusi` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `bukti_bayar` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `backup_rekaplomba`
--

CREATE TABLE `backup_rekaplomba` (
  `id_koor` tinyint(4) NOT NULL,
  `nama_team` tinyint(4) NOT NULL,
  `nama_koor` tinyint(4) NOT NULL,
  `lomba` tinyint(4) NOT NULL,
  `institusi` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `bukti_bayar` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `backup_web_design`
--

CREATE TABLE `backup_web_design` (
  `id_koor` tinyint(4) NOT NULL,
  `nama_team` tinyint(4) NOT NULL,
  `nama_koor` tinyint(4) NOT NULL,
  `lomba` tinyint(4) NOT NULL,
  `institusi` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `bukti_bayar` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `foto_design_produk`
-- (See below for the actual view)
--
CREATE TABLE `foto_design_produk` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `jurnalistik`
-- (See below for the actual view)
--
CREATE TABLE `jurnalistik` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `konfirm_bayar`
-- (See below for the actual view)
--
CREATE TABLE `konfirm_bayar` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `listlomba`
-- (See below for the actual view)
--
CREATE TABLE `listlomba` (
`id` varchar(20)
,`namalomba` varchar(50)
,`nama` varchar(20)
,`deskripsi` text
,`tema` varchar(200)
,`harga` float
,`keterangan` varchar(20)
,`jumlah_anggota` int(11)
,`file_gambar` varchar(30)
,`pre_registration` enum('true','false')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mobile_app`
-- (See below for the actual view)
--
CREATE TABLE `mobile_app` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `non_confirm_bayar`
-- (See below for the actual view)
--
CREATE TABLE `non_confirm_bayar` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `poster_design`
-- (See below for the actual view)
--
CREATE TABLE `poster_design` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `short_movie`
-- (See below for the actual view)
--
CREATE TABLE `short_movie` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`) VALUES
('M-000001', 'iitfintermedia@intermediaamikom.org', '94567178bd8b9448793b5dfd4ddd0865'),
('Z-18081921', 'iitfintermedia@gmail.com', '$2a$08$7SP.Rz1123gSsZ/RG5gXYOntlFD.wOg2lAVRb0UsloE8lyRY2LoEW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` int(11) NOT NULL,
  `id_pendaftaran` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `lampiran_identitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `id_pendaftaran`, `nama`, `no_hp`, `lampiran_identitas`) VALUES
(132, 'P-20200907184821', 'Iqbal tri zulian', '081903494738', 'A-P-20200907184821_0.docx'),
(133, 'P-20200907231550', 'Admin', '08123456789', 'A-P-20200907231550_0.pdf'),
(134, 'P-20200908060938', 'Irma Aksanti', '0895604693348', 'A-P-20200908060938_0.pdf'),
(135, 'P-20200908082936', 'Abdul Latif Mubasir', '083108785440', 'A-P-20200908082936_0.pdf'),
(136, 'P-20200908091835', 'Azzahra', '127002', 'A-P-20200908091835_0.pdf'),
(137, 'P-20200908093138', 'Berliana Wahyu Pratiwi', '085323077027', 'A-P-20200908093138_0.pdf'),
(138, 'P-20200908093138', 'Muhammad Wildan Santosa', '089667183329', 'A-P-20200908093138_1.pdf'),
(140, 'P-20200907184821', 'Bani Luthfi Ramadhan ', '08883937106', 'A-P-20200907184821_1.docx'),
(141, 'P-20200907184821', 'Muhammad Feri Saputra ', '085642247321', 'A-P-20200907184821_2.docx'),
(143, 'P-20200910070929', 'Arya Rizky Tri Putra', '081230095013', 'A-P-20200910070929_0.docx'),
(144, 'P-20200911125023', 'Fathuzaen', '0895377991803', 'A-P-20200911125023_0.pdf'),
(145, 'P-20200913132158', 'Ahmad Riyan Sah Riza', '085778200570', 'A-P-20200913132158_0.pdf'),
(146, 'P-20200914142512', 'Maruf Maftukhin', '085643450737', 'A-P-20200914142512_0.docx'),
(147, 'P-20200918104007', 'Aimar Yudhistira', '089530539114', 'A-P-20200918104007_0.docx'),
(148, 'P-20200918151145', 'Faisal L ( Salluthxcode )', '085761827008', 'A-P-20200918151145_0.pdf'),
(149, 'P-20200907184821', 'Andika Rizki Setiawan ', '085842141386', 'A-P-20200907184821_3.docx'),
(150, 'P-20200919100121', 'Tria Kusuma Wardani', '085712614081', 'A-P-20200919100121_0.docx'),
(151, 'P-20200920080712', 'ULIATUN NURIN NI\'MAH', '083844146475', 'A-P-20200920080712_0.pdf'),
(152, 'P-20200920105644', 'Zaldy ramlan', '081319643511', 'A-P-20200920105644_0.docx'),
(153, 'P-20200919191700', 'Wahyu Akmal', '082133139515', 'A-P-20200919191700_0.pdf'),
(154, 'P-20200920132810', 'Burhanudin Mi\'roj', '087891629677', 'A-P-20200920132810_0.pdf'),
(155, 'P-20200920133103', 'Salman Fauzi', '085328988682', 'A-P-20200920133103_0.doc'),
(156, 'P-20200920143838', 'MUHAMMAD ELDI AGUSTIAN', '08972939058', 'A-P-20200920143838_0.docx'),
(157, 'P-20200920144856', 'ULIATUN NURIN NI\'MAH', '083844146475', 'A-P-20200920144856_0.pdf'),
(158, 'P-20200920223341', 'Dinda Intan Nurullita', '0895411516644', 'A-P-20200920223341_0.pdf'),
(159, 'P-20200920223341', 'Ayu May Lisa', '08981601880', 'A-P-20200920223341_1.doc'),
(160, 'P-20200920190455', 'Oki Septiardana', '082322734383', 'A-P-20200920190455_0.docx'),
(161, 'P-20200920190455', 'Predi Molana', '087732787233', 'A-P-20200920190455_1.docx'),
(162, 'P-20200908093702', 'Wiranto', '081222333444', 'A-P-20200908093702_0.docx'),
(163, 'P-20200921185458', 'Irsyad Ikhsanudin', '089657116539', 'A-P-20200921185458_0.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_juara`
--

CREATE TABLE `tb_juara` (
  `id_lomba` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nominal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_juara`
--

INSERT INTO `tb_juara` (`id_lomba`, `nama`, `nominal`) VALUES
('L-09091955', 'Juara 1', 1000000),
('L-09091955', 'Juara 2', 750000),
('L-05092054', 'Juara 1', 1000000),
('L-05092054', 'Juara 2', 1500000),
('L-05092013', 'Juara 1', 1000000),
('L-05092013', 'Juara 2', 500000),
('L-05092048', 'Juara 1', 1000000),
('L-05092048', 'Juara 2', 1000000),
('L-05092058', 'Juara 1', 1000000),
('L-05092058', 'Juara 2', 500000),
('L-05092019', 'Juara 1', 1000000),
('L-05092019', 'Juara 2', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama`, `deskripsi`) VALUES
(5, 'SMA / SMK', 'Kategori lomba untuk siswa/siswi SMA/SMK'),
(6, 'Umum', 'Diatas 18 tahun baik itu SMA/SMK Perguruan Tinggi lainnya boleh ikut'),
(7, 'Mahasiswa', 'Kategori khusus untuk Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_koor`
--

CREATE TABLE `tb_koor` (
  `id` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `institusi` varchar(30) NOT NULL,
  `lampiran_identitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_koor`
--

INSERT INTO `tb_koor` (`id`, `id_user`, `nama`, `email`, `no_hp`, `institusi`, `lampiran_identitas`) VALUES
('K-20200906120221', 'U-20200906120221', 'M Syahri', 'm.syahri@outlook.com', '127001', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200906120221.pdf'),
('K-20200906205712', 'U-20200906205712', 'Arya Rezza', 'mwick4995@gmail.com', '081222333444', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200906205712.docx'),
('K-20200907152410', 'U-20200907152410', 'Aryasp', 'aryasp56192@gmail.com', '081541051407 ', 'Universitas Amikom Purwokerto ', 'Foto_Koor-U-20200907152410.docx'),
('K-20200907152605', 'U-20200907152605', 'Arya setya pratama ', 'aryasetyaprtama919@gmail.com', '', '', ''),
('K-20200907215759', 'U-20200907215759', 'Lalu ROSMAWAN', 'peawan21@gmail.com', '', '', ''),
('K-20200907221900', 'U-20200907221900', 'Muhammad Wildan', 'himeka.rin09@gmail.com', '089667183329', 'SMK WIWOROTOMO Purwokerto', 'Foto_Koor-U-20200907221900.pdf'),
('K-20200907222730', 'U-20200907222730', 'Muhammad Abdul Aziz', 'muhammadabdulaziz173@gmail.com', '0895364653938', 'Universitas AMIKOM Purwokerto', 'Foto_Koor-U-20200907222730.doc'),
('K-20200908055821', 'U-20200908055821', 'Gina Cahya Utami', 'ginacu.gc@gmail.com', '087737700088', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200908055821.pdf'),
('K-20200908082157', 'U-20200908082157', 'Abdul latif Mubasir', 'bj.angel119@gmail.com', '083108785440', 'SMK N 1 Kawunganten', 'Foto_Koor-U-20200908082157.pdf'),
('K-20200908085133', 'U-20200908085133', 'Aksana Zachri Satria', 'aksanazachri@gmail.com', '085156815015', 'SMA Muhammadiyah 1 Purwokerto', 'Foto_Koor-U-20200908085133.pdf'),
('K-20200908114422', 'U-20200908114422', 'Trian Damai', 'triannurizkillah@gmail.com', '', '', ''),
('K-20200908124448', 'U-20200908124448', 'Andra Dwi Ramadhan', 'cipengkeren@gmail.com', '', '', ''),
('K-20200908135421', 'U-20200908135421', 'Annisaa Nurul Ramadhani Novelika ', 'annisaanurul@mail.ugm.ac.id', '', '', ''),
('K-20200908183800', 'U-20200908183800', 'Anna', 'gabrielle.4nna@gmail.com', '', '', ''),
('K-20200908193020', 'U-20200908193020', 'Nurisal Perdana Tambing', 'nurisalperdanatambing@gmail.com', '', '', ''),
('K-20200908213251', 'U-20200908213251', 'Mohamad Ulul Barri', 'barri.ulul@gmail.com', '0895377303204', 'SMK NEGERI 1 KAWUNGANTEN', 'Foto_Koor-U-20200908213251.pdf'),
('K-20200909080347', 'U-20200909080347', 'Al Latif Ramadhan', 'allatiframadhan@gmail.com', '085700298579', 'SMK Telkom Purwokerto', 'Foto_Koor-U-20200909080347.pdf'),
('K-20200909104657', 'U-20200909104657', 'Fatoni', 'akunbloger123@gmail.com', '', '', ''),
('K-20200909131855', 'U-20200909131855', 'Abd Rahman', 'abdr5259@gmail.com', '', '', ''),
('K-20200909185047', 'U-20200909185047', 'I Nyoman Puthut Wijaya', 'inyomanwijaya02@gmail.com', '', '', ''),
('K-20200909211301', 'U-20200909211301', 'MUHAMMAD DIFA\'NUR RIZKI', 'mdifanr2002@gmail.com', '085726728077', 'SMK NEGERI 1 PURWOKERTO', 'Foto_Koor-U-20200909211301.doc'),
('K-20200909221716', 'U-20200909221716', 'Arya Rizky Tri Putra', 'aryarizky2303@gmail.com', '', '', ''),
('K-20200909225653', 'U-20200909225653', 'Arya Rizky Tri Putra', 'aryarizky548@gmail.com', '081230095013', 'SMKN 1 Surabaya', 'Foto_Koor-U-20200909225653.docx'),
('K-20200910000024', 'U-20200910000024', 'Sukh Dilraj Singh', 'srkaka484@gmail.com', '', '', ''),
('K-20200910092759', 'U-20200910092759', 'Moh.salim', 'mohsalim1110@gmail.com', '', '', ''),
('K-20200910113957', 'U-20200910113957', 'HELENA BUDI RIANI', 'helenamrbn@gmail.com', '081261685757', 'SMAK KETAPANG III CIBUBUR', 'Foto_Koor-U-20200910113957.docx'),
('K-20200910120957', 'U-20200910120957', 'Wildan Setyawan', 'wildans281103@gmail.com', '', '', ''),
('K-20200911124444', 'U-20200911124444', 'Zaen', 'gooner0709@gmail.com', '0895377991803', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200911124444.pdf'),
('K-20200911125057', 'U-20200911125057', 'Founda Nur Anantyo', 'fondanur12@gmail.com', '', '', ''),
('K-20200912200048', 'U-20200912200048', 'Muhammad Sultan Adi Pradana', 'sultannap07@gmail.com', '083867681045', 'SMA NEGERI 1 PADAMARA', 'Foto_Koor-U-20200912200048.pdf'),
('K-20200912233428', 'U-20200912233428', 'Edelweis fammily', 'reganesin19@gmail.com', '', '', ''),
('K-20200913110443', 'U-20200913110443', 'Helmi Yusuf', 'helmiysff@gmail.com', '', '', ''),
('K-20200913130629', 'U-20200913130629', 'M Aditya Rizky Ramadhani', 'bajoel.paskers@gmail.com', '085339403612', 'Universitas Amikom', 'Foto_Koor-U-20200913130629.pdf'),
('K-20200914141753', 'U-20200914141753', 'maruf', 'marufmaftuchin959@gmail.com', '085643450737', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200914141753.docx'),
('K-20200914170609', 'U-20200914170609', 'Baguse', 'bagusganteng181@gmail.com', '', '', ''),
('K-20200915093837', 'U-20200915093837', 'Andrean Soleh', 'andre.soleh02@gmail.com', '085885728153', 'SMK Muhammadiyah 1 Paguyangan', 'Foto_Koor-U-20200915093837.pdf'),
('K-20200915193201', 'U-20200915193201', 'Mohamad Naufal Azizi', 'rapstroner@gmail.com', '082226683093', 'SMKN 1 Purwokerto', 'Foto_Koor-U-20200915193201.docx'),
('K-20200916130831', 'U-20200916130831', 'Riyanda Ramadhan', 'ryanda.rama10@gmail.com', '082326085802', 'SMK N 1 BANYUMAS', 'Foto_Koor-U-20200916130831.pdf'),
('K-20200916132310', 'U-20200916132310', 'Bagus Hanifuddin', 'djordialba321@gmail.com', '08996661743', 'SMK N 1 BANYUMAS', 'Foto_Koor-U-20200916132310.pdf'),
('K-20200917053050', 'U-20200917053050', 'Adi pebrian', 'pebrianadi05@gmail.com', '0895405270401', 'SMK N 1 Lemahabang', 'Foto_Koor-U-20200917053050.pdf'),
('K-20200917172152', 'U-20200917172152', 'Febianti', 'febiantifebianti196@gmail.com', '081327294608', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200917172152.docx'),
('K-20200917225808', 'U-20200917225808', 'Wildan Qosid Ilahy', 'wildanqosids@gmail.com', '', '', ''),
('K-20200918041246', 'U-20200918041246', 'Nur Rochman', 'nurochman018@gmail.com', '', '', ''),
('K-20200918121750', 'U-20200918121750', 'Faisal L', 'salluthxcode@gmail.com', '', '', ''),
('K-20200918142552', 'U-20200918142552', 'Faisal L', 'faisalluthfipelawi2003@gmail.com', '', '', ''),
('K-20200918145830', 'U-20200918145830', 'Faisal L ( Salluthxcode )', 'bebenxploit@gmail.com', '085761827008', 'SMAS AL - MANAR MEDAN', 'Foto_Koor-U-20200918145830.pdf'),
('K-20200918221322', 'U-20200918221322', 'Zaldy ramlan', 'zaldyramlan24@gmail.com', '081319642511', 'SMKN 5 Tanggerang', 'Foto_Koor-U-20200918221322.docx'),
('K-20200918224633', 'U-20200918224633', 'Titin Kartini', 'titinssong@gmail.com', '085894236496', 'Smk Ti muhammadiyah cikampek', 'Foto_Koor-U-20200918224633.doc'),
('K-20200919061536', 'U-20200919061536', 'Honimatun Azizah', 'honimatunazizahazizah9990@gmail.com', '', '', ''),
('K-20200919091831', 'U-20200919091831', 'Tria kusuma wardani', 'triakusumawardani949@gmail.com', '085712614081', 'SMK MUHAMMADIYAH MAJENANG', 'Foto_Koor-U-20200919091831.pdf'),
('K-20200919174419', 'U-20200919174419', 'Adi Yusuf Saputra', 'adi.yusufsaputra@gmail.com', '081934181649', 'SMK YADIKA 13', 'Foto_Koor-U-20200919174419.pdf'),
('K-20200919181813', 'U-20200919181813', 'MUHAMMAD ELDI AGUSTIAN', 'eldimuhammad55@gmail.com', '08972939058', 'SMK BUKIT ASAM TANJUNG ENIM', 'Foto_Koor-U-20200919181813.docx'),
('K-20200919190855', 'U-20200919190855', 'HENDRIANSYAH', '112201906290@mhs.dinus.ac.id', '0895425240070', 'Universitas Dian Nuswantoro', 'Foto_Koor-U-20200919190855.pdf'),
('K-20200919221203', 'U-20200919221203', 'Salman Fauzi', 'Salmanfauzi2003@gmail.com', '085328988682', 'SMK Al-Irsyad Kota Tegal', 'Foto_Koor-U-20200919221203.pdf'),
('K-20200920064350', 'U-20200920064350', 'Anas Nur Khafid', 'anan.khafid@gmail.com', '', '', ''),
('K-20200920064629', 'U-20200920064629', 'Anas Nur Khafid', 'anasn.khafid@gmail.com', '', '', ''),
('K-20200920130951', 'U-20200920130951', 'Burhanudin Mi\'roj', 'mirojburhanudin2@gmail.com', '087891629677', 'SMK MUHAMMADIYAH KAJEN', 'Foto_Koor-U-20200920130951.pdf'),
('K-20200920131530', 'U-20200920131530', 'Tomy Wibowo', 'tomyntapss@gmail.com', '085229940851', 'SMK Negeri 1 Rembang', 'Foto_Koor-U-20200920131530.docx'),
('K-20200920132906', 'U-20200920132906', 'FIKRI SAN', 'fikriisan1@gmail.com', '', '', ''),
('K-20200920135329', 'U-20200920135329', 'Yuukywn', 'realeburst@gmail.com', '', '', ''),
('K-20200920135841', 'U-20200920135841', 'FIKRI SIDIQ AFIF NURFAUZY', 'fikrisidiq22@gmail.com', '085786293843', 'SMK MUHAMMADIYAH MAJENANG', 'Foto_Koor-U-20200920135841.pdf'),
('K-20200920172543', 'U-20200920172543', 'Muhammad Nailar Raza', 'nailarraza16@gmail.com', '', '', ''),
('K-20200920181204', 'U-20200920181204', 'Ihsan Fajar Ramadhan', 'ihsanfajarrpl@gmail.com', '08990671252', 'SMK Negeri 1 Subang', 'Foto_Koor-U-20200920181204.pdf'),
('K-20200920181451', 'U-20200920181451', 'DnAH TV', 'ayumaylisa04@gmail.com', '', '', ''),
('K-20200920181925', 'U-20200920181925', 'Chandra Hanifah Rahmawati', 'chandrahanifahrahmawati@gmail.com', '0895377989892', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200920181925.doc'),
('K-20200921105852', 'U-20200921105852', 'Jundi Abdulloh', 'jundiabdullah6@gmailcom', '', '', ''),
('K-20200921114245', 'U-20200921114245', 'Yudi Sudiana', 'sudianayudi98@gmail.com', '083154964054', 'Universitas Amikom Purwokerto', 'Foto_Koor-U-20200921114245.pdf'),
('K-20200921130143', 'U-20200921130143', 'Irfan wahendra ', 'Irfanwahendra17@gmail.com', '', '', ''),
('K-20200921130618', 'U-20200921130618', 'Irfan wahendra ', 'youthrangerindonesia3@gmail.com', '', '', ''),
('K-20200921164007', 'U-20200921164007', 'Romadhon jailani', 'romadhonjeelani@gmail.com', '089607466555', 'SMK N 1 BANYUMAS', 'Foto_Koor-U-20200921164007.pdf'),
('K-20200921184849', 'U-20200921184849', 'Narul Hidayah', 'narulhidayah9923@gmail.com', '085710800256', 'Universitas Pamulang', 'Foto_Koor-U-20200921184849.pdf'),
('K-20200922123047', 'U-20200922123047', 'ANGGITYA YHUSUF FIKRANDI', 'anggityhusuf215@gmail.com', '087822799070', 'SMK MA\'ARIF NU 1 AJIBARANG', 'Foto_Koor-U-20200922123047.pdf'),
('K-20200922133932', 'U-20200922133932', 'Firdhani Ilham Januar', 'd07012003@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lomba`
--

CREATE TABLE `tb_lomba` (
  `id` varchar(20) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tema` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `guide_book` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `jumlah_anggota` int(11) NOT NULL,
  `file_gambar` varchar(30) NOT NULL,
  `lampiran` enum('true','false') NOT NULL,
  `pre_registration` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lomba`
--

INSERT INTO `tb_lomba` (`id`, `id_kategori`, `nama`, `tema`, `deskripsi`, `guide_book`, `harga`, `keterangan`, `jumlah_anggota`, `file_gambar`, `lampiran`, `pre_registration`) VALUES
('L-05092013', 7, 'Jurnalistik', 'Pendidikan, Ekonomi, dan Sosial Budaya', 'Kompetisi bagi mahasiswa Indonesia untuk menceritakan / mendokumentasikan tentang pendidikan, ekonomi, maupun sosial budaya yang berada di sekitar  melalui visualisasi dalam bentuk jurnalistik berupa opini publik yang ada di tempat tersebut.\r\nWalaupun dalam kondisi New Normal saat ini, setiap orang bisa berinovasi dengan bebas\r\ndan tanpa batas.\r\nLomba ini ditujukan untuk mahasiswa  di seluruh Indonesia. Peserta berkompetisi dalam bentuk tim yang beranggotakan maksimal tiga\r\norang.', 'Jurnalistik-IITC2020.zip', 30000, 'kelompok', 4, 'G-L-05092013.jpg', 'true', 'false'),
('L-05092019', 5, 'Poster Design', 'Pendidikan, Sosial Budaya, Bencana, dan Wisata', 'Lomba yang ditujukan untuk menguji imajinasi, ide, orisinalitas, kemampuan kritis dan inovatif peserta, serta kreativitas yang dilimpahkan\r\nmelalui media gambar dalam bidang pendidikan, sosial budaya, bencana, dan wisata.\r\nMembuat karya berupa poster untuk menginformasikan kepada masyarakat luas terkait dengan bidang tema yang dibuat.\r\nLomba ini ditujukan untuk siswa SMA/SMK sederajat di seluruh Indonesia dan bersifat individu.', 'Poster_Design-IITC2020.zip', 30000, 'individu', 0, 'G-L-05092019.jpg', 'true', 'false'),
('L-05092048', 7, 'Short Movie', 'Pendidikan, Ekonomi, dan Sosial Budaya', 'Kompetisi bagi mahasiswa Indonesia untuk menceritakan tentang pendidikan, ekonomi, maupun sosial yang berada di sekitar melalui visualisasi dalam bentuk film pendek. Walaupun dalam kondisi New Normal saat ini, setiap orang bisa berinovasi dengan bebas dan tanpa batas.\r\nLomba ini ditujukan untuk mahasiswa di seluruh Indonesia. Peserta berkompetisi dalam bentuk tim yang beranggotakan maksimal lima\r\norang.', 'Short_Movie-IITC2020.zip', 30000, 'kelompok', 4, 'G-L-05092048.jpg', 'true', 'false'),
('L-05092054', 7, 'Mobile App', 'E-commerce dan E-learning', 'Lomba yang ditujukan untuk menguji kemampuan, nalar, ide, orisinalitas dan kreativitas yang mampu menjawab masalah-masalah yang sering terjadi di lingkup masyarakat terutama dalam bidang pendidikan dan fintech. Kompetisi ini membangun aplikasi mobile berbasis platform Android yang ditujukan bagi developer aplikasi mobile dan berbentuk prototype.\r\nLomba ini ditujukan untuk mahasiswa di seluruh Indonesia. Peserta berkompetisi dalam bentuk tim yang beranggotakan maksimal tiga orang', 'Mobile_App-IITC2020.zip', 40000, 'kelompok', 2, 'G-L-05092054.jpg', 'true', 'false'),
('L-05092058', 7, 'Foto Desain Produk', 'Bebas (memiliki kriteria Kreativitas, Ciri Khas dan Keunikan)', 'Lomba pada bidang Foto Desain Produk adalah lomba yang ditujukan untuk menguji keunikan, orisinalitas, dan kreativitas dalam bidang produk sendiri dengan diawali membuat desain produk tersebut. Kompetisi ini diselanggarakan untuk menggali potensi pada aspek produksi suatu karya bisa makanan, minuman, dan sebagainya.\r\nLomba ini ditujukan untuk mahasiswa aktif sarjana dan diploma di seluruh Indonesia. Peserta berkompetisi dalam bentuk tim yang beranggotakan maksimal tiga orang.', 'Foto_Desain_Produk-IITC2020.zip', 30000, 'kelompok', 2, 'G-L-05092058.jpg', 'true', 'false'),
('L-09091955', 5, 'Web Design', 'E-commerce, Portofolio Perusahaan, Kesehatan, Ekonomi, dan Pendidikan;', 'Lomba yang ditujukan bagi pelajar SMK/SMA dan sederajat untuk membangun User Interface pada suatu website sehingga dapat digunakan dengan nyaman dan efisien, contohnya dalam bidang e-commerce, portofolio perusahaan, kesehatan, ekonomi, dan pendidikan. Jumlah anggota setiap team maksimal sebanyak 2 orang.', 'Web_Design-IITC2020.zip', 30000, 'kelompok', 2, 'G-L-09091955.jpg', 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id` varchar(20) NOT NULL,
  `id_koor` varchar(20) NOT NULL,
  `id_lomba` varchar(20) NOT NULL,
  `nama_team` varchar(50) NOT NULL,
  `bukti_bayar` varchar(50) NOT NULL,
  `status` enum('active','unactive') NOT NULL,
  `lampiran_file` varchar(50) NOT NULL,
  `lampiran_surat` varchar(50) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `status_pendaftaran` enum('','false','true') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id`, `id_koor`, `id_lomba`, `nama_team`, `bukti_bayar`, `status`, `lampiran_file`, `lampiran_surat`, `tanggal_daftar`, `status_pendaftaran`) VALUES
('P-20200907184821', 'K-20200907152410', 'L-05092048', 'Semut Sakti', 'Bukti_pembayaran-P-20200907184821.Jpg', 'active', 'File-P-20200907184821.rar', 'Surat-P-20200907184821.pdf', '2020-09-07', ''),
('P-20200907224236', 'K-20200907221900', 'L-05092019', '', 'Bukti_pembayaran-P-20200907224236.png', 'active', '', '', '2020-09-07', ''),
('P-20200908060938', 'K-20200908055821', 'L-05092048', 'INFORMATION (Informatika Anima', 'Bukti_pembayaran-P-20200908060938.jpg', 'active', '', '', '2020-09-08', ''),
('P-20200908082936', 'K-20200908082157', 'L-09091955', 'YPY (Yang Penting Yakin)', '', 'unactive', '', '', '2020-09-08', ''),
('P-20200908091835', 'K-20200906120221', 'L-05092054', 'Happily', 'Bukti_pembayaran-P-20200908091835.jpg', 'active', '', '', '2020-09-08', ''),
('P-20200908093138', 'K-20200907222730', 'L-05092058', 'Chiliziz', 'Bukti_pembayaran-P-20200908093138.png', 'active', '', '', '2020-09-08', ''),
('P-20200908093702', 'K-20200906205712', 'L-09091955', 'Clay Group', 'Bukti_pembayaran-P-20200908093702.jpg', 'active', '', '', '2020-09-08', ''),
('P-20200908214801', 'K-20200908213251', 'L-05092019', '', '', 'unactive', '', '', '2020-09-08', ''),
('P-20200909081828', 'K-20200909080347', 'L-05092019', '', 'Bukti_pembayaran-P-20200909081828.jpg', 'active', '', '', '2020-09-09', ''),
('P-20200910070929', 'K-20200909225653', 'L-09091955', 'Susah Semangat', 'Bukti_pembayaran-P-20200910070929.jpg', 'active', '', '', '2020-09-10', ''),
('P-20200911095832', 'K-20200908085133', 'L-05092019', '', 'Bukti_pembayaran-P-20200911095832.jpg', 'active', '', '', '2020-09-11', ''),
('P-20200911125023', 'K-20200911124444', 'L-05092054', 'Zy', 'Bukti_pembayaran-P-20200911125023.jpg', 'active', 'File-P-20200911125023.rar', 'Surat-P-20200911125023.pdf', '2020-09-11', ''),
('P-20200912201909', 'K-20200912200048', 'L-05092019', '', '', 'unactive', '', '', '2020-09-12', ''),
('P-20200913132158', 'K-20200913130629', 'L-05092054', 'MAD (Mobile App Design)', 'Bukti_pembayaran-P-20200913132158.jpg', 'active', '', '', '2020-09-13', ''),
('P-20200914142512', 'K-20200914141753', 'L-05092058', 'menyerahTeam', 'Bukti_pembayaran-P-20200914142512.jpeg', 'active', '', '', '2020-09-14', ''),
('P-20200916151325', 'K-20200909211301', 'L-05092019', '', 'Bukti_pembayaran-P-20200916151325.jpg', 'active', '', '', '2020-09-16', ''),
('P-20200917071446', 'K-20200917053050', 'L-05092019', '', '', 'unactive', '', '', '2020-09-17', ''),
('P-20200917173725', 'K-20200917172152', 'L-05092058', '', '', 'unactive', '', '', '2020-09-17', ''),
('P-20200918104007', 'K-20200915193201', 'L-09091955', 'PriatinWD', 'Bukti_pembayaran-P-20200918104007.jpg', 'active', '', '', '2020-09-18', ''),
('P-20200918151145', 'K-20200918145830', 'L-09091955', 'Faisal L ( Salluthxcode )', '', 'unactive', '', '', '2020-09-18', ''),
('P-20200918230927', 'K-20200918224633', 'L-09091955', '', '', 'unactive', '', '', '2020-09-18', ''),
('P-20200919100121', 'K-20200919091831', 'L-09091955', 'TKW', '', 'unactive', '', '', '2020-09-19', ''),
('P-20200919182106', 'K-20200919174419', 'L-05092019', '', '', 'unactive', '', '', '2020-09-19', ''),
('P-20200919191700', 'K-20200919190855', 'L-05092054', 'DINUS TEAM', '', 'unactive', '', '', '2020-09-19', ''),
('P-20200920105644', 'K-20200918221322', 'L-09091955', 'WAD(Warteg ayu Deswita)', '', 'unactive', '', '', '2020-09-20', ''),
('P-20200920132810', 'K-20200920130951', 'L-09091955', 'Han Design', 'Bukti_pembayaran-P-20200920132810.jpg', 'active', '', '', '2020-09-20', ''),
('P-20200920133103', 'K-20200919221203', 'L-09091955', 'Slmn_frontEND', '', 'unactive', '', '', '2020-09-20', ''),
('P-20200920143838', 'K-20200919181813', 'L-09091955', 'GA(Galaxy Arts) ', 'Bukti_pembayaran-P-20200920143838.jpg', 'active', '', '', '2020-09-20', ''),
('P-20200920144856', 'K-20200920135841', 'L-09091955', 'PRABU RADJA TEAM', 'Bukti_pembayaran-P-20200920144856.jpeg', 'active', '', '', '2020-09-20', ''),
('P-20200920181931', 'K-20200920181204', 'L-05092054', '', '', 'unactive', '', '', '2020-09-20', ''),
('P-20200920190455', 'K-20200920131530', 'L-09091955', 'Weebs Developer', 'Bukti_pembayaran-P-20200920190455.jpeg', 'active', '', '', '2020-09-20', ''),
('P-20200920223341', 'K-20200920181925', 'L-05092013', 'DnAH Team', '', 'unactive', '', '', '2020-09-20', ''),
('P-20200921114852', 'K-20200916130831', 'L-05092019', '', 'Bukti_pembayaran-P-20200921114852.jpg', 'active', '', '', '2020-09-21', ''),
('P-20200921115826', 'K-20200921114245', 'L-05092013', '', '', 'unactive', '', '', '2020-09-21', ''),
('P-20200921181559', 'K-20200921164007', 'L-05092019', '', 'Bukti_pembayaran-P-20200921181559.jpg', 'active', '', '', '2020-09-21', ''),
('P-20200921185458', 'K-20200921184849', 'L-05092054', 'Kalava Studio', '', 'unactive', '', '', '2020-09-21', ''),
('P-20200921203458', 'K-20200916132310', 'L-05092019', '', 'Bukti_pembayaran-P-20200921203458.jpg', 'active', '', '', '2020-09-21', ''),
('P-20200922123801', 'K-20200922123047', 'L-05092019', '', '', 'unactive', '', '', '2020-09-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul`, `deskripsi`, `tanggal`) VALUES
(9, '<b>Selamat Datang</b>', '<br>\r\nHai, Selamat datang di dashboard IITC (Intermedia Information Technology Competition). Silahkan ikuti step-step kompetisinya. Jangan lupa untuk melengkapi data pendaftaran ya..., dan pastikan format serta posisinya sesuai.\r\n<br>\r\n<br>\r\nGood luck.\r\n', '2020-09-08 16:48:54'),
(19, '<b>Rekomendasi</b>', '<br>\r\nHalo...\r\nUntuk meningkatkan kenyamanan akses dan menghindari kendala dalam pengisian step / upload file, disarankan mengakses dashboard step kompetisi menggunakan perangkat desktop (laptop/PC) ya...\r\n<br>\r\n<br>\r\nSemangat...', '2020-09-08 16:49:22'),
(20, '<b>Info</b>', '<br>\r\nUntuk semua peserta IITC, dimohon mengisi data Nama Lengkap dengan benar. Nama tersebut diperlukan juga untuk dibubuhkan dalam sertifikat keikutsertaan.\r\n<br>\r\nTerima Kasih', '2020-09-09 08:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_seminar`
--

CREATE TABLE `tb_seminar` (
  `id_daf` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `institusi` varchar(60) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL DEFAULT 0,
  `status_ulang` tinyint(1) NOT NULL DEFAULT 0,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `htm_status` enum('presale','sale','ots','anggota') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_reg` date NOT NULL,
  `step_selesai` int(2) NOT NULL,
  `code` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `token` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `password`, `tanggal_reg`, `step_selesai`, `code`, `status`, `token`) VALUES
('U-20200906120221', 'm.syahri@outlook.com', '$2a$08$8otNRT8y5vo72pm6aRN.I.4PMWXi6FNNnFU9xcvaxQnkOnhjwyvT6', '2020-09-06', 4, 'gC1AuB3I8iZx', 'true', ''),
('U-20200906205712', 'mwick4995@gmail.com', '$2a$08$SuvIBFKlFJFXC8PPvQ4t9e8t37RdE3UcVIHKt4Lhs5cFjxRRMhif2', '2020-09-06', 3, 'us2ASq4rvQLf', 'true', 'a309d60e6fae529dd71147443cf97e'),
('U-20200907152410', 'aryasp56192@gmail.com', '$2a$08$whRsNdnTorTQdINZ5I3kquzna.QyavXHj81mBrJrkwK1ViuBFUjsC', '2020-09-07', 5, 'xg8dHvuanrDA', 'true', '8cf30ed1b1f4ae1e0080a9dee3bd95'),
('U-20200907152605', 'aryasetyaprtama919@gmail.com', '$2a$08$MR6mG3gAA9vIsllUPjYZweNVczeWHMbZOxE81HDFUxsti6KWkB29O', '2020-09-07', 0, 'VU6GAmfCKkqw', 'false', ''),
('U-20200907215759', 'peawan21@gmail.com', '$2a$08$lzICeMImBcb5fk7NYd4ef.onttXyH4r2lb7KjnTUyNpl7vuFRh7r2', '2020-09-07', 0, 'Atol6Wadg1PI', 'false', ''),
('U-20200907221900', 'himeka.rin09@gmail.com', '$2a$08$oWwK92gXPdo4jGIFSuseZu.KWLqugRHyVQb4dUEqJalHhQEBLC.0C', '2020-09-07', 4, 'ev6PN2JSD1Q7', 'true', ''),
('U-20200907222730', 'muhammadabdulaziz173@gmail.com', '$2a$08$ZDnv8SCjcVWqqoIibZ.ZiurTkrodfm3X67yETMPGbo4i0HkOAdoke', '2020-09-07', 4, 'mKdRH7NqvLVk', 'true', ''),
('U-20200908055821', 'ginacu.gc@gmail.com', '$2a$08$z1L3zb4PtUuzNzIXafZROOq3kG1IIc5M9jyq7IY8CzVlAwQyM9O4m', '2020-09-08', 4, 'BCg6aNlJEXx8', 'true', ''),
('U-20200908082157', 'bj.angel119@gmail.com', '$2a$08$dT7j7wrF6fVdloKP.DUB/O4Yi5RSvrzG1gsR8Uz3xp43qcq08uDhu', '2020-09-08', 3, 'JOUKvLSjTZu8', 'true', ''),
('U-20200908085133', 'aksanazachri@gmail.com', '$2a$08$Z57Qn/FAf2q7nqYl9VhZquRlB5pETlNTylx6z9Ihz4al7IAaL2.IG', '2020-09-08', 4, 'ONDkeHBKRI2t', 'true', 'd6f290bed3e55fc547aa8d47714dc6'),
('U-20200908114422', 'triannurizkillah@gmail.com', '$2a$08$c5a.jYCrWXnBA05C1Ilez.g468hErQe1M17OlT70xJGSYZ8pht0hy', '2020-09-08', 0, '2TnQqCVbJRIz', 'true', ''),
('U-20200908124448', 'cipengkeren@gmail.com', '$2a$08$iMcsRW5GhDBqYB1iVNhN5OOCe6h.0AsimbOxlYeKllkkvJx9Z7YTG', '2020-09-08', 0, 'pnaFjY7bxWST', 'false', ''),
('U-20200908135421', 'annisaanurul@mail.ugm.ac.id', '$2a$08$sRfyL0SALh0Dm9qESc3pJei1JcpaDAfXDWLGdtryu9GteRaDS.5Sa', '2020-09-08', 0, 'FDtlPnWyYj6V', 'false', ''),
('U-20200908183800', 'gabrielle.4nna@gmail.com', '$2a$08$pW/wu7zrwBdr5x84aU8yRu3Z22/gbJHs/gQkf/fq8sj9hr3gRICSK', '2020-09-08', 0, 'NM7xlHi5GpSK', 'false', ''),
('U-20200908193020', 'nurisalperdanatambing@gmail.com', '$2a$08$0cg8d4iVfhJohsUPY/IIQ.D/3W6EZxpgWPMJ/E4MksLYGA6IX3kZe', '2020-09-08', 0, 'vs94V31zbPdx', 'false', ''),
('U-20200908213251', 'barri.ulul@gmail.com', '$2a$08$MIx6o6HEpuEP9TWFY.cItOYbHR4ZJtRgoy6IjMUrgc3uApWvIRP5a', '2020-09-08', 3, 'U9oVwW7R3cYi', 'true', ''),
('U-20200909080347', 'allatiframadhan@gmail.com', '$2a$08$QuactlNtUYRosi/z63shT.Uf1eZWj3r3Hs..pt2/7FMlv2eQ1X1xe', '2020-09-09', 4, 'ynkBz9i4Hwv6', 'true', ''),
('U-20200909104657', 'akunbloger123@gmail.com', '$2a$08$nmk8WyyOvXvuAB/gFwbs4u28SnwX/1frAGxEihnAm9xl75Z.oPTnC', '2020-09-09', 0, 'kJwgjIqVm68K', 'true', ''),
('U-20200909131855', 'abdr5259@gmail.com', '$2a$08$DRn9//TlYh84rZqJgDLm9.A9nCX3ZiqUPTY5UVq/aZ2wxLEEWv1Pq', '2020-09-09', 0, 'awcCfbtn4lqY', 'true', ''),
('U-20200909185047', 'inyomanwijaya02@gmail.com', '$2a$08$QkViqkfQDv0DC2ZswUVDm.uEDYhrvvf5MKGGsGLxYyuUrtsJB0Tba', '2020-09-09', 0, 'H4FewRkE9lzK', 'true', 'd05e82996a4515d5d6f261e553d418'),
('U-20200909211301', 'mdifanr2002@gmail.com', '$2a$08$f4rWVJhX.y.jJwzGoI9DWu1hghwpN5vI1D1We68r51g7tyIfeq3C.', '2020-09-09', 4, 'u94jDYk2ByMI', 'true', ''),
('U-20200909221716', 'aryarizky2303@gmail.com', '$2a$08$q9YFPuIbRwFkedaqNVJoAe.caVBRF1LaKzp8.PMVI/CdjZQe9G9om', '2020-09-09', 0, 'VsPeEBn31zo9', 'false', ''),
('U-20200909225653', 'aryarizky548@gmail.com', '$2a$08$idYJPBgL0rNKKiIgsBGFeOUqrqDeWv8lUyo5xQsAEF4AWa6g7aJIm', '2020-09-09', 4, '1xPQb8XS4ptC', 'true', ''),
('U-20200910000024', 'srkaka484@gmail.com', '$2a$08$y9QNMl2xPYmuuLDfRUZOCuF5KdjM7qtFDaYo6TQo6ukNfVQG/98ya', '2020-09-10', 0, 'UE12YGuhtRoc', 'true', ''),
('U-20200910092759', 'mohsalim1110@gmail.com', '$2a$08$1kyoaUPSSeajvxgRw4Iph.rXnb.KThBoCD.SfibUZOWZcRYEF7pnW', '2020-09-10', 0, 'Nux3HcqoETFR', 'false', ''),
('U-20200910113957', 'helenamrbn@gmail.com', '$2a$08$/ClYtCBIP/Uz1WjWAGMZNemU5xwPOQ6PCpGo2e/isFP7PPOODN9nG', '2020-09-10', 1, 'kPqLNZyUcEv8', 'true', ''),
('U-20200910120957', 'wildans281103@gmail.com', '$2a$08$bGfjele6ejgiRXmrJoQ4UeYtZzD9kG4XCamSaaLb1GEFemNe3ghkq', '2020-09-10', 0, 'v721umDsYkU9', 'true', ''),
('U-20200911124444', 'gooner0709@gmail.com', '$2a$08$6wAfpLsT8kSpRtrj.HqUQO.D3HtfrhIJfgooq7Ayv2jFPk5oj3Q66', '2020-09-11', 5, '5VdxEqsX4ewA', 'true', ''),
('U-20200911125057', 'fondanur12@gmail.com', '$2a$08$xGH2kq5ZHeadfrSzq9K..uhcbxT3c4D026itn1J1qXBS5XmLEjZz6', '2020-09-11', 0, '6OKEMeDISibm', 'true', ''),
('U-20200912200048', 'sultannap07@gmail.com', '$2a$08$ilPCFsxd9HuSwUaSfOmff.b2aa1lSyLtiFWultzN4ZQ/04ZnUbj32', '2020-09-12', 3, 'Ofbu3YqVoWLS', 'true', ''),
('U-20200912233428', 'reganesin19@gmail.com', '$2a$08$xuSzljEinOhbqF23iIxhAuTZzI.KQsemd1.ymnlelLZPiET.oZFcC', '2020-09-12', 0, 'iyqEDuvkONUH', 'false', ''),
('U-20200913110443', 'helmiysff@gmail.com', '$2a$08$M150P4oIFqemCp5x/MjIoORhQuwg8TkanXsh29t4hLYWhlOWvJe3e', '2020-09-13', 0, 'Sxb5zkqPpJ3C', 'false', ''),
('U-20200913130629', 'bajoel.paskers@gmail.com', '$2a$08$SIMWGQ84vDbbnCMsj8sjDOjxxOlcg5vuaUoWre8ONcvV.Zr9tcTnq', '2020-09-13', 4, 'YTwXRfcFqPes', 'true', ''),
('U-20200914141753', 'marufmaftuchin959@gmail.com', '$2a$08$.98Z8QLWruTEC6l0h5mUNuuYUUBJal/WRyqHZWzy.lqZ//YD4Wsna', '2020-09-14', 4, '8dTYpH4b52CE', 'true', ''),
('U-20200914170609', 'bagusganteng181@gmail.com', '$2a$08$qvk41Qwi2NEpd1MO.2mVauxFkyuZJZHDGqvgshKdE7tdZF169q9D6', '2020-09-14', 0, '1Bh5fGaTAjz2', 'true', ''),
('U-20200915093837', 'andre.soleh02@gmail.com', '$2a$08$VckbmV8fzCZYOlzR8vx0A.EN3XO7IJi6MvwTtjJxESEWrfgzd.jx6', '2020-09-15', 1, 'pbnLPe2tqQT9', 'true', ''),
('U-20200915193201', 'rapstroner@gmail.com', '$2a$08$9xT0yEZ3G9kqjsSjkasSJOSjDDN.gu6eHk0b1yKh7BYn04gtmqyTi', '2020-09-15', 4, 'UVuP2q7Kw5Jn', 'true', ''),
('U-20200916130831', 'ryanda.rama10@gmail.com', '$2a$08$1dbGebhRlx039DE7ebZXreZazFnZHQ.6gSr8My0eqiV.N/5mBrpKG', '2020-09-16', 4, 'TVMGXDEy9pZd', 'true', ''),
('U-20200916132310', 'djordialba321@gmail.com', '$2a$08$AHtgIqTOUi4GJRr0mSxvyOG4spjYwRSb1Ho79lgyR0yhcGc3dnmy.', '2020-09-16', 4, 'MSJaIbXpGoUN', 'true', ''),
('U-20200917053050', 'pebrianadi05@gmail.com', '$2a$08$dMmmZdnJYDWXlxG8WzexyO4PAa79M/wQqSlV/AO0rY1rEf3cS4ajG', '2020-09-17', 3, 'W3SdJkKj7cYi', 'true', ''),
('U-20200917172152', 'febiantifebianti196@gmail.com', '$2a$08$y2g8b2yvSBQIy6n1s7RGQe20Mjo0aplxZf4zMR/uqSSNbZMRg0rU2', '2020-09-17', 2, 'AILgFXuiq4ls', 'true', ''),
('U-20200917225808', 'wildanqosids@gmail.com', '$2a$08$pxVNrvIo9QHhACpHntB4NObrvCUT/CoRxW4TKB0C6nt3EE5AUXLmq', '2020-09-17', 0, 'C2XfTSI7dPDj', 'false', '1a743a8dff7960b3c4d11ede2c77f8'),
('U-20200918041246', 'nurochman018@gmail.com', '$2a$08$yVf1bH9g7S9fBUSsP1AEbO2zmXORWFrj.EbJxSaaFJRenxitXn3Zi', '2020-09-18', 0, 'iC92RSXPl4bQ', 'true', ''),
('U-20200918121750', 'salluthxcode@gmail.com', '$2a$08$4bTFfqAo573WjMKKmjfnG.c3FdO5xjUdZtv8qxQX9le6X8fyTesM2', '2020-09-18', 0, 'jdQ8I7Z4Uvp3', 'false', ''),
('U-20200918142552', 'faisalluthfipelawi2003@gmail.com', '$2a$08$LXurv08eu9UsbYue8OmmMez7FTNk8aT2PAocwXQ0dXLyPKs/msDeG', '2020-09-18', 0, '69J2EqagKpGC', 'false', ''),
('U-20200918145830', 'bebenxploit@gmail.com', '$2a$08$ST3QkZxmizVkmcWrQgZ.l.W.iuprVMPmTWOjAVVp8TcFTxN5jdAG2', '2020-09-18', 3, 'ItvUyh3PfejE', 'true', ''),
('U-20200918221322', 'zaldyramlan24@gmail.com', '$2a$08$TdV8GmX1Av5Cvm6PWZxNqOLt5I1mZHlZTotx77aP8gSUv1gXXggAC', '2020-09-18', 3, 'WBKTmJegnOZD', 'true', ''),
('U-20200918224633', 'titinssong@gmail.com', '$2a$08$BhpEhkJf.9BW2yMMZ5r7I.W44q61bhf73H3ei/4yDPgAMDmlC2ToG', '2020-09-18', 2, 'nxm29gosLauC', 'true', ''),
('U-20200919061536', 'honimatunazizahazizah9990@gmail.com', '$2a$08$Y1gH9jpp5i0o6bDPPV9wDekhUesHU/Oa15hzh.xBBwrV/I/2rmDly', '2020-09-19', 0, 'xL9jEmbIUazZ', 'true', ''),
('U-20200919091831', 'triakusumawardani949@gmail.com', '$2a$08$Enk1sy0dFoa1aUqXYcE25eGffALtV9UGkOqyDaupfGdPV5fk2FsM2', '2020-09-19', 3, 'z6xs4C3EOLVU', 'true', ''),
('U-20200919174419', 'adi.yusufsaputra@gmail.com', '$2a$08$yjTV8kmEJJrBx0jQro7Qe.3eHywTNlzZYhVhBWYXw3Md8iwBWsusm', '2020-09-19', 3, 'U2d5MoXl1RPs', 'true', ''),
('U-20200919181813', 'eldimuhammad55@gmail.com', '$2a$08$2PE5YCdyODKgXbd6irlFm.JMGZH9shOY1lUL2usNEONRseLNSMdoy', '2020-09-19', 4, 'TY7oByCb81GN', 'true', ''),
('U-20200919190855', '112201906290@mhs.dinus.ac.id', '$2a$08$yU3SdSjNlClQsy8Ki9TsqOgwcBNFZ/bqrhimbaDFH89HsAzslwvgm', '2020-09-19', 3, 'YRwzI1dWkhiu', 'true', ''),
('U-20200919221203', 'Salmanfauzi2003@gmail.com', '$2a$08$fm8IByyMg3fBar1nEA/XH.bU723JDBbz.8MuFqhsK6FvsN0Qx4V6C', '2020-09-19', 3, 'THz13ymZYJtu', 'true', '4857af7001c8d92343f5a5b1b80c17'),
('U-20200920064350', 'anan.khafid@gmail.com', '$2a$08$.CO8MzJNL1CPU.vrqomtz.QTL7B7Mqqy.w06iNjIX8froPsZV7TB.', '2020-09-20', 0, 'KkoUztr3W8Qm', 'false', ''),
('U-20200920064629', 'anasn.khafid@gmail.com', '$2a$08$089SCk3j2nsKlWRq.7cmLOsTuauFp/mvAiAnoPuP/6VjyT8dWD2ju', '2020-09-20', 0, 'JfT3YUS692qW', 'true', ''),
('U-20200920130951', 'mirojburhanudin2@gmail.com', '$2a$08$Qq75BNk/47my2OBCyxJLMO5iXYhU6zpNGwkvChfMHO2VBQaRzBgXS', '2020-09-20', 4, 'bU5FDy7pCAWk', 'true', ''),
('U-20200920131530', 'tomyntapss@gmail.com', '$2a$08$NLYev9XKfPjaa1y5yqbxreznK21DrbJVhONqCIvfF8SIFpqpyTzSK', '2020-09-20', 4, 's9eamSHPGliu', 'true', ''),
('U-20200920132906', 'fikriisan1@gmail.com', '$2a$08$cItbFz.DK46o9Fce8nyfC.CLjBaAgcuWtoJoXf8maJhtJBVZM44na', '2020-09-20', 0, 'urKvy7FsH6c4', 'false', ''),
('U-20200920135329', 'realeburst@gmail.com', '$2a$08$ErLX30..5vjqxLNa0LIiKeXuMQNh0F8JXYKank3eqqnoCWEgYYs8i', '2020-09-20', 0, 'rmATqBiz4jgH', 'true', ''),
('U-20200920135841', 'fikrisidiq22@gmail.com', '$2a$08$FDhHCL176S43UGIWSL19FeiU75qz9L/Xfn/5GRrjXISFc2PLywwUa', '2020-09-20', 4, 'yQ2cGdoZwNE5', 'true', ''),
('U-20200920172543', 'nailarraza16@gmail.com', '$2a$08$l8YBLy8QVfwFw.m0wUo02elftVkPQgwpjkQMIvSzmxb5ggZ.uAnBm', '2020-09-20', 0, '2DuOlSvmIcAp', 'true', ''),
('U-20200920181204', 'ihsanfajarrpl@gmail.com', '$2a$08$eYL7lqKnGsjW6Uqepv/yS.pFxljdZ814ML9.SfBVvKmyaAtD8yrta', '2020-09-20', 2, 'w4pekWmOB8A6', 'true', ''),
('U-20200920181451', 'ayumaylisa04@gmail.com', '$2a$08$fPPDrXdNwCM/jKEDOay1xeIXiLlOhObE6IHAFx7kq4U.57BmUqcjO', '2020-09-20', 0, 'ijS8QO3wpgxY', 'true', ''),
('U-20200920181925', 'chandrahanifahrahmawati@gmail.com', '$2a$08$EcYMAgnl5IbnVFp4ZrzT8OeIB0LjAyaPt.vRxmRJwlQr9qNMzCFkS', '2020-09-20', 3, 'Y8o2deRntrDk', 'true', ''),
('U-20200921105852', 'jundiabdullah6@gmailcom', '$2a$08$eFZsjTgBJh8Md0BvtnuwGO7Z2ZY2a6jiRToyMIb/wyyFPuh9OD4ku', '2020-09-21', 0, 'nycebRUqw8Y9', 'false', ''),
('U-20200921114245', 'sudianayudi98@gmail.com', '$2a$08$R3qNqDK4oJFz.o.WTIHgqu8VkvF8gdbfjPCrXv9wOFn3Ep5So6QSO', '2020-09-21', 2, 'U8okDZOLBAX5', 'true', ''),
('U-20200921130143', 'Irfanwahendra17@gmail.com', '$2a$08$Eho8UpVduw/NdbRhvXefP.2NB2ydFwXL6unBt/GQcpuy3N4ohEgjC', '2020-09-21', 0, 'Rlf6vo2SVwDN', 'false', ''),
('U-20200921130618', 'youthrangerindonesia3@gmail.com', '$2a$08$5VQURvMDb5ONZRgPTeQbJOmDJ6cUkKUDpu/7hVvOGlGkJXLYzMlGC', '2020-09-21', 0, 'EIoAYcKBCqW3', 'true', ''),
('U-20200921164007', 'romadhonjeelani@gmail.com', '$2a$08$qxLjr/q3mDcUY44/Jn61hex6M3rVGaRRoEZ16uKTwGsCzVMNvPT9K', '2020-09-21', 4, 'GDq6dHj7T8ef', 'true', ''),
('U-20200921184849', 'narulhidayah9923@gmail.com', '$2a$08$33UprVBRegpKaYNKOCWgnOVY0Nq/OJDjJo0Zj/8RQFacA7WV15rSm', '2020-09-21', 3, 'zUkhcyMxBGSt', 'true', ''),
('U-20200922123047', 'anggityhusuf215@gmail.com', '$2a$08$x2AsqhlLJRypvkufJT7R7.Os0k.uT/4XH3lSM.pRNKg9uH7eiCT8i', '2020-09-22', 3, 's82p5j6WQYva', 'true', ''),
('U-20200922133932', 'd07012003@gmail.com', '$2a$08$CoPTEHFdqz1i4jxK4TkoAO7El3go3yuwHrxIRjThkqjz.gkSBfmCa', '2020-09-22', 0, 'QTCw6viFH4qS', 'true', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `web_design`
-- (See below for the actual view)
--
CREATE TABLE `web_design` (
`id_koor` varchar(20)
,`nama_team` varchar(50)
,`nama_koor` varchar(100)
,`lomba` varchar(50)
,`institusi` varchar(30)
,`status` enum('active','unactive')
,`bukti_bayar` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `all_konfirm_lomba`
--
DROP TABLE IF EXISTS `all_konfirm_lomba`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `all_konfirm_lomba`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) ;

-- --------------------------------------------------------

--
-- Structure for view `foto_design_produk`
--
DROP TABLE IF EXISTS `foto_design_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `foto_design_produk`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `c`.`nama` = 'Foto Desain Produk' ;

-- --------------------------------------------------------

--
-- Structure for view `jurnalistik`
--
DROP TABLE IF EXISTS `jurnalistik`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `jurnalistik`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `c`.`nama` = 'Jurnalistik' ;

-- --------------------------------------------------------

--
-- Structure for view `konfirm_bayar`
--
DROP TABLE IF EXISTS `konfirm_bayar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `konfirm_bayar`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `a`.`status` = 'active' ;

-- --------------------------------------------------------

--
-- Structure for view `listlomba`
--
DROP TABLE IF EXISTS `listlomba`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `listlomba`  AS  select `a`.`id` AS `id`,`a`.`nama` AS `namalomba`,`b`.`nama` AS `nama`,`a`.`deskripsi` AS `deskripsi`,`a`.`tema` AS `tema`,`a`.`harga` AS `harga`,`a`.`keterangan` AS `keterangan`,`a`.`jumlah_anggota` AS `jumlah_anggota`,`a`.`file_gambar` AS `file_gambar`,`a`.`pre_registration` AS `pre_registration` from (`tb_lomba` `a` join `tb_kategori` `b` on(`b`.`id` = `a`.`id_kategori`)) ;

-- --------------------------------------------------------

--
-- Structure for view `mobile_app`
--
DROP TABLE IF EXISTS `mobile_app`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `mobile_app`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `c`.`nama` = 'Mobile App' ;

-- --------------------------------------------------------

--
-- Structure for view `non_confirm_bayar`
--
DROP TABLE IF EXISTS `non_confirm_bayar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `non_confirm_bayar`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `a`.`status` = 'unactive' ;

-- --------------------------------------------------------

--
-- Structure for view `poster_design`
--
DROP TABLE IF EXISTS `poster_design`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `poster_design`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `c`.`nama` = 'Poster Design' ;

-- --------------------------------------------------------

--
-- Structure for view `short_movie`
--
DROP TABLE IF EXISTS `short_movie`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `short_movie`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `c`.`nama` = 'Short Movie' ;

-- --------------------------------------------------------

--
-- Structure for view `web_design`
--
DROP TABLE IF EXISTS `web_design`;

CREATE ALGORITHM=UNDEFINED DEFINER=`intermed_iitc`@`localhost` SQL SECURITY DEFINER VIEW `web_design`  AS  select `a`.`id_koor` AS `id_koor`,`a`.`nama_team` AS `nama_team`,`b`.`nama` AS `nama_koor`,`c`.`nama` AS `lomba`,`b`.`institusi` AS `institusi`,`a`.`status` AS `status`,`a`.`bukti_bayar` AS `bukti_bayar` from ((`tb_pendaftaran` `a` join `tb_koor` `b` on(`b`.`id` = `a`.`id_koor`)) join `tb_lomba` `c` on(`c`.`id` = `a`.`id_lomba`)) where `c`.`nama` = 'Web Design' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anggota_daftar` (`id_pendaftaran`);

--
-- Indexes for table `tb_juara`
--
ALTER TABLE `tb_juara`
  ADD KEY `fk_juara_lomba` (`id_lomba`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_koor`
--
ALTER TABLE `tb_koor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_user_koor` (`id_user`);

--
-- Indexes for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lomba_kategori` (`id_kategori`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lomba_daftar` (`id_lomba`),
  ADD KEY `fk_pendaftaran_koor` (`id_koor`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_seminar`
--
ALTER TABLE `tb_seminar`
  ADD PRIMARY KEY (`id_daf`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_juara`
--
ALTER TABLE `tb_juara`
  ADD CONSTRAINT `fk_juara_lomba` FOREIGN KEY (`id_lomba`) REFERENCES `tb_lomba` (`id`);

--
-- Constraints for table `tb_koor`
--
ALTER TABLE `tb_koor`
  ADD CONSTRAINT `fk_user_koor` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD CONSTRAINT `fk_lomba_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id`);

--
-- Constraints for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `fk_lomba_daftar` FOREIGN KEY (`id_lomba`) REFERENCES `tb_lomba` (`id`),
  ADD CONSTRAINT `fk_pendaftaran_koor` FOREIGN KEY (`id_koor`) REFERENCES `tb_koor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
