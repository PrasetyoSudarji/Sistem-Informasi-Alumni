-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 04:43 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alamat`
--

CREATE TABLE IF NOT EXISTS `data_alamat` (
  `nim` int(8) NOT NULL,
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
(14113003, '018', '004', 'karang endah', 'terbanggi besar', 'lampung tengah', 'Lampung');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
`id` int(8) NOT NULL,
  `prodi` varchar(32) DEFAULT NULL,
  `nama_perusahaan` varchar(32) NOT NULL,
  `expired_time` date NOT NULL,
  `skill` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `prodi` varchar(32) DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `foto` varchar(32) NOT NULL DEFAULT 'default.png',
  `status` enum('1','2') NOT NULL,
  `jumlah_skill` int(2) DEFAULT NULL,
  `linked_in` varchar(32) DEFAULT NULL,
  `fb` varchar(32) DEFAULT NULL,
  `twitter` varchar(32) DEFAULT NULL,
  `instagram` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `tahun_lulus`, `foto`, `status`, `jumlah_skill`, `linked_in`, `fb`, `twitter`, `instagram`) VALUES
(1, 'admin', NULL, NULL, 'default.png', '1', NULL, NULL, NULL, NULL, NULL),
(14113003, 'Prasetyo Sudarji', 'Teknik Informatika', 2018, 'default.png', '2', 4, 'prasetyosudarji', 'prasetyosudarji', 'prasetyosudarji', 'prasetyosudarji');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `id` varchar(3) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`) VALUES
('FI', 'Fisika'),
('PWK', 'Perencanaan Wilayah dan Kota'),
('AR', 'Teknik Arsitektur'),
('EL', 'Teknik Elektro'),
('TG', 'Teknik Geofisika'),
('GD', 'Teknik Geomatika'),
('IF', 'Teknik Informatika'),
('TL', 'Teknik Lingkungan'),
('SI', 'Teknik Sipil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alamat`
--
ALTER TABLE `data_alamat`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`id`), ADD KEY `prodi` (`prodi`), ADD KEY `prodi_2` (`prodi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`), ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id`), ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_alamat`
--
ALTER TABLE `data_alamat`
ADD CONSTRAINT `data_alamat_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`nama`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
