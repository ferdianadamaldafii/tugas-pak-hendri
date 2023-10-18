-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 08:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_11rpl4_adam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tokosparepart`
--

CREATE TABLE `tb_tokosparepart` (
  `idbarang` int(11) NOT NULL,
  `kodebarang` varchar(11) NOT NULL,
  `namabarang` varchar(11) NOT NULL,
  `satuanbarang` varchar(11) NOT NULL,
  `stokbarang` int(11) NOT NULL,
  `hargabarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tokosparepart`
--

INSERT INTO `tb_tokosparepart` (`idbarang`, `kodebarang`, `namabarang`, `satuanbarang`, `stokbarang`, `hargabarang`) VALUES
(1, '267', 'bodyset_caf', '1', 20, 4500000),
(2, '419', 'kaliper_rcb', '1', 12, 1500000),
(3, '390', 'sock_tirev', '1', 3, 600000),
(4, '435', 'velg_vrossi', '1', 4, 2500000),
(5, '378', 'stang_dayto', '1', 6, 600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tokosparepart`
--
ALTER TABLE `tb_tokosparepart`
  ADD PRIMARY KEY (`idbarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tokosparepart`
--
ALTER TABLE `tb_tokosparepart`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
