-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `IdBantuan` int(11) NOT NULL,
  `KategoriBantuan` varchar(255) NOT NULL,
  `NamaDonatur` varchar(255) NOT NULL,
  `BentukBantuan` varchar(255) NOT NULL,
  `JumlahBantuan` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`IdBantuan`, `KategoriBantuan`, `NamaDonatur`, `BentukBantuan`, `JumlahBantuan`, `Date`) VALUES
(1, 'Uang', 'Hamba Allah', 'Uang', '1000000000000', '2020-05-04'),
(8, 'Bahan Makanan', 'Indomaret', 'Sembako', '10 Ton', '2020-05-04'),
(9, 'Bahan Makanan', 'Alfamart', 'Indomie', '100 Kardus', '2020-05-04'),
(10, 'Obat', 'Trump', 'hydroxychloroquine', '1', '2020-05-04'),
(11, 'Masker', 'Maker', 'N95 Mask', '2000', '2020-05-04'),
(13, 'Lain-lain', 'Muhammad Ilya Asha Soegondo', 'Alat Pelindung Diri (APD)', '50', '2020-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`IdBantuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `IdBantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
