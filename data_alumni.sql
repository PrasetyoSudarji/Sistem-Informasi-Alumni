-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 08:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem_informasi_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alumni`
--

CREATE TABLE `data_alumni` (
  `ID` int(8) NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `password` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_alumni`
--

INSERT INTO `data_alumni` (`ID`, `nim`, `nama`, `tahun_lulus`, `password`) VALUES
(1, 14113003, 'Prasetyo Sudarji', 2018, 'prasetyo'),
(2, 14113001, 'Najib Darmawan', 2017, ''),
(3, 14113002, 'Intan Pravitasari', 2017, ''),
(4, 14113004, 'Arif Rahman Edison', 2017, ''),
(5, 14113005, 'Muhammad Putra', 2017, ''),
(6, 14113006, 'Destika Maulidiawati', 2017, ''),
(7, 14113007, 'Anggi Shinta Bella Hasibuan', 2019, ''),
(8, 14114001, 'Genggam Mahardika', 2018, ''),
(9, 14114002, 'Reizky Patrical Sirya', 2018, ''),
(10, 14114003, 'Ridho Ahmad Batubara', 2018, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alumni`
--
ALTER TABLE `data_alumni`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_alumni`
--
ALTER TABLE `data_alumni`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
