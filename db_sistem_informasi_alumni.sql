-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 12:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sistem_informasi_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alamat`
--

CREATE TABLE IF NOT EXISTS `data_alamat` (
  `nim` int(8) DEFAULT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `desa/kelurahan` varchar(32) DEFAULT NULL,
  `kecamatan` varchar(32) DEFAULT NULL,
  `kabupaten/kota` varchar(32) DEFAULT NULL,
  `provinsi` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_alamat`
--

INSERT INTO `data_alamat` (`nim`, `rt`, `rw`, `desa/kelurahan`, `kecamatan`, `kabupaten/kota`, `provinsi`) VALUES
(14113003, NULL, NULL, NULL, NULL, NULL, NULL),
(14113002, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_alumni`
--

CREATE TABLE IF NOT EXISTS `data_alumni` (
  `nim` int(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `prodi` enum('Fisika','Perencanaan Wilayah dan Kota','Teknik Arsitektur','Teknik Elektro','Teknik Geofisika','Teknik Geomatika','Teknik Informatika','Teknik Lingkungan','Teknik Geomatika','Teknik Sipil') DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `foto` varchar(32) DEFAULT 'default.png',
  `status` enum('1','2') NOT NULL,
  `skill` set('PG001','DS001') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_alumni`
--

INSERT INTO `data_alumni` (`nim`, `nama`, `prodi`, `tahun_lulus`, `foto`, `status`, `skill`) VALUES
(1, 'admin', NULL, NULL, 'default.png', '1', NULL),
(14113001, 'Najib Darmawan', 'Teknik Informatika', 2017, 'default.png', '2', ''),
(14113002, 'Intan Pravitasari', 'Teknik Informatika', 2017, 'default.png', '2', ''),
(14113003, 'Prasetyo Sudarji', 'Teknik Informatika', 2018, 'profil.png', '2', 'PG001,DS001'),
(14113004, 'Arif Rahman Edison', 'Teknik Informatika', 2017, 'default.png', '2', ''),
(14113005, 'Muhammad Putra', 'Teknik Informatika', 2017, 'default.png', '2', ''),
(14113006, 'Destika Maulidiawati', 'Teknik Lingkungan', 2017, 'default.png', '2', ''),
(14113007, 'Anggi Shinta Bella Hasibuan', 'Perencanaan Wilayah dan Kota', 2019, 'default.png', '2', ''),
(14114001, 'Genggam Mahardika', 'Teknik Informatika', 2018, 'default.png', '2', ''),
(14114002, 'Reizky Patrical Sirya', 'Teknik Informatika', 2018, 'default.png', '2', ''),
(14114003, 'Ridho Ahmad Batubara', 'Teknik Informatika', 2018, 'default.png', '2', ''),
(14115003, 'Habib Rizieq', 'Perencanaan Wilayah dan Kota', 2000, 'default.png', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `id` varchar(8) NOT NULL,
  `nama_lowongan` varchar(32) NOT NULL,
  `nama_perusahaan` varchar(32) NOT NULL,
  `skill` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `nama_lowongan`, `nama_perusahaan`, `skill`) VALUES
('IF001', 'programmer', 'bukalapak', 'rajin');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `klasifikasi` enum('PEMROGRAMAN','DESAIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nama`, `klasifikasi`) VALUES
('DS001', 'Desain UI/UX', 'DESAIN'),
('PG001', 'Pemrograman Java', 'PEMROGRAMAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alamat`
--
ALTER TABLE `data_alamat`
 ADD KEY `nim` (`nim`);

--
-- Indexes for table `data_alumni`
--
ALTER TABLE `data_alumni`
 ADD PRIMARY KEY (`nim`), ADD KEY `skill` (`skill`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
 ADD PRIMARY KEY (`id`(1));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_alamat`
--
ALTER TABLE `data_alamat`
ADD CONSTRAINT `data_alamat_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `data_alumni` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
