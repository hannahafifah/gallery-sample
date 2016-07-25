-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 05:21 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gambar` int(2) NOT NULL,
  `id_kategori` int(2) NOT NULL,
  `namafile` varchar(150) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_kategori`, `namafile`, `judul`, `keterangan`) VALUES
(1, 1, 'img1.jpg', 'Enjoy your luxurious bedroom design', 'Enjoy your luxurious bedroom design'),
(2, 1, 'img4.jpg', 'Friendly Living room design just for you', 'Friendly Living room design just for you'),
(3, 1, 'img3.jpg', 'Vintage Bedroom design for you', 'Vintage Bedroom design for you'),
(4, 2, 'living1.jpg', 'Colorful Living Room', ''),
(5, 2, 'living2.jpg', 'Minimalis Living Room', ''),
(6, 2, 'living3.jpg', 'Rustic Living Room', ''),
(7, 2, 'living4.jpg', 'Vintage Living Room', ''),
(8, 2, 'living5.jpg', 'Simple Living Room', ''),
(9, 2, 'living6.jpg', 'Creative Living Room', ''),
(10, 3, 'bed1.jpg', 'Simple Bedroom', ''),
(11, 3, 'bed2.jpg', 'Rustic Bedroom', ''),
(12, 3, 'bed3.jpg', 'Vintage Bedroom', ''),
(13, 3, 'bed4.jpg', 'Minimalis Bedroom', ''),
(14, 4, 'bath1.jpg', 'Simple Bathroom', ''),
(15, 4, 'bath2.jpg', 'Rustic Bathroom', ''),
(16, 4, 'bath3.jpg', 'Vintage Bedathroom', ''),
(17, 4, 'bath4.jpg', 'Minimalis Bathroom', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(2) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'slider'),
(2, 'living room'),
(3, 'bedroom'),
(4, 'bathroom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
