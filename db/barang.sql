-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 09:58 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangmasuk`
--

CREATE TABLE IF NOT EXISTS `tbl_barangmasuk` (
  `id` int(11) NOT NULL,
  `nama_kapal` varchar(100) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `jenis_barang2` varchar(50) NOT NULL,
  `jenis_barang3` varchar(50) NOT NULL,
  `jenis_barang4` varchar(50) NOT NULL,
  `jenis_barang5` varchar(50) NOT NULL,
  `jlh_barang` varchar(50) NOT NULL,
  `jlh_barang2` varchar(50) NOT NULL,
  `jlh_barang3` varchar(50) NOT NULL,
  `jlh_barang4` varchar(50) NOT NULL,
  `jlh_barang5` varchar(50) NOT NULL,
  `barang_mengganggu` varchar(50) NOT NULL,
  `barang_mengganggu2` varchar(50) NOT NULL,
  `jmlh_barangmengganggu` varchar(50) NOT NULL,
  `jmlh_barangmengganggu2` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barangmasuk`
--

INSERT INTO `tbl_barangmasuk` (`id`, `nama_kapal`, `jenis_barang`, `jenis_barang2`, `jenis_barang3`, `jenis_barang4`, `jenis_barang5`, `jlh_barang`, `jlh_barang2`, `jlh_barang3`, `jlh_barang4`, `jlh_barang5`, `barang_mengganggu`, `barang_mengganggu2`, `jmlh_barangmengganggu`, `jmlh_barangmengganggu2`, `tgl_masuk`) VALUES
(2, 'KM.KAMILA', 'gandum', 'jagung', 'jahe', 'cengkeh', 'pala', '5 kg', '6 kg', '10 kg', '20 kg', '3 kg', 'ikan', 'sapi', '1 Ton', '6 ekor', '2019-11-10'),
(3, 'KAPAL GUE', 'kayu manis', 'daun salam', 'kemiri', 'ketumbar', 'cengkeh', '32 kg', '7 kg', '5 kg', '3 kg', '3 KG', 'durian', 'cempedak', '6 kg', '5 kg', '2020-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mengganggu`
--

CREATE TABLE IF NOT EXISTS `tbl_mengganggu` (
  `id` int(11) NOT NULL,
  `id_barangmasuk` int(11) NOT NULL,
  `nama_kapal` varchar(100) NOT NULL,
  `barang_mengganggu` varchar(50) NOT NULL,
  `jlh_barang` varchar(59) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mengganggu`
--

INSERT INTO `tbl_mengganggu` (`id`, `id_barangmasuk`, `nama_kapal`, `barang_mengganggu`, `jlh_barang`, `tgl_masuk`) VALUES
(10, 0, 'kl79', 'domba', '2 ekor', '2019-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('amira', '827ccb0eea8a706c4c34a16891f84e7b', 'nurulamira24@gmail.com', 'nurul', 3, 'staff'),
('evi', '827ccb0eea8a706c4c34a16891f84e7b', 'eviramadani@gmail.com', 'ani', 1, 'single'),
('kholijah', '827ccb0eea8a706c4c34a16891f84e7b', 'sitikholijah02@gmail.com', 'siti', 4, 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mengganggu`
--
ALTER TABLE `tbl_mengganggu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barangmasuk`
--
ALTER TABLE `tbl_barangmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_mengganggu`
--
ALTER TABLE `tbl_mengganggu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
