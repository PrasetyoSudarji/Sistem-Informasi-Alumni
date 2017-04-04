-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 08:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `username`, `password`, `status`) VALUES
('admin2@itera.ac.id', 'admin2', 'admin2', '2'),
('admin@itera.ac.id', 'admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `data_alamat`
--

CREATE TABLE `data_alamat` (
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
(14113003, '018', '004', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `kode` varchar(6) NOT NULL,
  `prodi` varchar(32) DEFAULT NULL,
  `judul` varchar(32) NOT NULL,
  `nama_perusahaan` varchar(32) NOT NULL,
  `expired_time` date NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`kode`, `prodi`, `judul`, `nama_perusahaan`, `expired_time`, `deskripsi`) VALUES
('IF2', 'Teknik Informatika', 'Programmer', 'Gameloft', '2017-04-13', 'Aman '),
('IF3', 'Teknik Informatika', 'Programmer', 'Syncore', '2017-04-27', 'aman'),
('IF4', 'Teknik Informatika', 'Desainer', 'Art', '2017-04-20', 'aman'),
('UM1', 'Umum', 'Teller', 'Bank Lampung', '2017-04-19', 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_applied`
--

CREATE TABLE `lowongan_applied` (
  `id` int(4) NOT NULL,
  `nim` int(8) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan_applied`
--

INSERT INTO `lowongan_applied` (`id`, `nim`, `kode`, `status`) VALUES
(4, 14113003, 'IF2', '1'),
(5, 14113003, 'UM1', '1'),
(6, 14113003, 'IF3', '1'),
(7, 14113003, 'IF4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_counter`
--

CREATE TABLE `lowongan_counter` (
  `prodi` varchar(3) NOT NULL,
  `counter` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan_counter`
--

INSERT INTO `lowongan_counter` (`prodi`, `counter`) VALUES
('AR', 2),
('EL', 1),
('FI', 1),
('GD', 1),
('IF', 5),
('PWK', 1),
('SI', 1),
('TG', 1),
('TL', 1),
('UM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `email` varchar(32) NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `prodi` varchar(32) DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `foto` varchar(32) NOT NULL DEFAULT 'default.png',
  `status` enum('1','2','3') NOT NULL DEFAULT '3',
  `jumlah_skill` int(2) DEFAULT NULL,
  `linked_in` varchar(32) DEFAULT NULL,
  `fb` varchar(32) DEFAULT NULL,
  `twitter` varchar(32) DEFAULT NULL,
  `instagram` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`email`, `nim`, `nama`, `username`, `prodi`, `tahun_lulus`, `foto`, `status`, `jumlah_skill`, `linked_in`, `fb`, `twitter`, `instagram`) VALUES
('prasetyosudarji@gmail.com', 14113003, 'prasetyo sudarji', 'prasetyo', 'Teknik Informatika', 2018, 'unnamed.png', '3', 5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
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
('SI', 'Teknik Sipil'),
('UM', 'Umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `data_alamat`
--
ALTER TABLE `data_alamat`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `prodi` (`prodi`),
  ADD KEY `prodi_2` (`prodi`);

--
-- Indexes for table `lowongan_applied`
--
ALTER TABLE `lowongan_applied`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `lowongan_counter`
--
ALTER TABLE `lowongan_counter`
  ADD PRIMARY KEY (`prodi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lowongan_applied`
--
ALTER TABLE `lowongan_applied`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
-- Constraints for table `lowongan_applied`
--
ALTER TABLE `lowongan_applied`
  ADD CONSTRAINT `lowongan_applied_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lowongan_applied_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `lowongan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan_counter`
--
ALTER TABLE `lowongan_counter`
  ADD CONSTRAINT `lowongan_counter_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
