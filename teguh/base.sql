-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 10:19 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE IF NOT EXISTS `pemesan` (
`Id_pemesan` int(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Nomer_telepon` int(15) NOT NULL,
  `Nama_barang` varchar(100) NOT NULL,
  `Jumlah_barang` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`Id_pemesan`, `Nama`, `Alamat`, `Nomer_telepon`, `Nama_barang`, `Jumlah_barang`) VALUES
(1, '', '', 0, '', 0),
(2, 'kirom', 'jl. songgon', 987878788, 'kunci', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
 ADD PRIMARY KEY (`Id_pemesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
MODIFY `Id_pemesan` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
