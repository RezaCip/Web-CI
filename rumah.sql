-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 08:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `nama` varchar(50) NOT NULL,
  `id_nya` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `sesi` int(10) NOT NULL,
  `malah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`nama`, `id_nya`, `email`, `password`, `no_telp`, `sesi`, `malah`) VALUES
('', 'irvan', 'irvanm81@gmail.com', 'irvan1', 0, 0, 0),
('reja', 'rejaaja', 'yu@gmail.com', 'reja', 2147483647, 0, 0),
('', 'rujak', '', 'rujak1', 0, 0, 0),
('', 'yuyu1', '', 'hujan', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tipe` varchar(7) NOT NULL,
  `lb` int(5) NOT NULL,
  `lt` int(5) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `judul`, `tipe`, `lb`, `lt`, `deskripsi`, `lokasi`, `harga`, `gambar`, `username`) VALUES
(1, 'Jual rumah siap huni', '90', 90, 120, 'Lokasi dekat dengan sekolah dan pasar', 'Blimbing, Kota Malang', 300000000, 'Gambar-Rumah-Tipe-90', 'irvan'),
(2, '', '45', 60, 200, 'rumah siap huni sertifikat lengkap', 'Malang', 1000000000, 'rumah-minimalis-mode', 'rejaaja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_nya`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`username`) REFERENCES `masuk` (`id_nya`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
