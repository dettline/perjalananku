-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 02:19 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catatan_perjalanan_rpl1`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_perjalanan`
--

CREATE TABLE `history_perjalanan` (
  `id_history` int(11) NOT NULL,
  `tanggal_perjalanan` date NOT NULL,
  `waktu_perjalanan` time NOT NULL,
  `suhu_tubuh` double NOT NULL,
  `nik` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_perjalanan`
--

INSERT INTO `history_perjalanan` (`id_history`, `tanggal_perjalanan`, `waktu_perjalanan`, `suhu_tubuh`, `nik`, `id_lokasi`) VALUES
(3, '2023-10-05', '03:01:49', 38, 123456789, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(150) NOT NULL,
  `alamat_lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `alamat_lokasi`) VALUES
(3, 'SMK Al Amanah', 'Jl. Raya Puspiptek Pocis Bakti Jaya, Setu, Tangsel'),
(4, 'SMP Al Amanah', 'Pocis');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nik`, `nama_lengkap`, `username`, `password`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jk`, `level`) VALUES
(123123123, 'Abdul Jabbar', 'dettline', '21232f297a57a5a743894a0e4a801fc3', 'Rawakalong Rt.02/01\r\nKec. Gunung Sindur\r\nKab. Bogor', 'Jakarta', '1997-09-29', 'L', 'petugas'),
(123456789, 'Fandi Ahmad Saktianto', 'fandi', '827ccb0eea8a706c4c34a16891f84e7b', 'Jl. Bakti Jaya LUK', 'Tangerang', '1993-09-04', 'L', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_perjalanan`
--
ALTER TABLE `history_perjalanan`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_perjalanan`
--
ALTER TABLE `history_perjalanan`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_perjalanan`
--
ALTER TABLE `history_perjalanan`
  ADD CONSTRAINT `history_perjalanan_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_perjalanan_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `pengguna` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
