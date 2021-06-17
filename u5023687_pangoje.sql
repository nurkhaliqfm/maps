-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 10:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5023687_pangoje`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_mitra`
--

CREATE TABLE `form_mitra` (
  `id_mitra` int(11) NOT NULL,
  `namatoko_mitra` varchar(255) NOT NULL,
  `haribuka_mitra` varchar(255) NOT NULL,
  `jambuka_mitra` varchar(255) NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `nohp_mitra` int(25) NOT NULL,
  `nowa_mitra` int(25) NOT NULL,
  `email_mitra` varchar(255) NOT NULL,
  `alamat_mitra` varchar(255) NOT NULL,
  `foto_mitra` varchar(255) NOT NULL,
  `lat_long` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_mitra`
--

INSERT INTO `form_mitra` (`id_mitra`, `namatoko_mitra`, `haribuka_mitra`, `jambuka_mitra`, `nama_mitra`, `nohp_mitra`, `nowa_mitra`, `email_mitra`, `alamat_mitra`, `foto_mitra`, `lat_long`) VALUES
(11, 'bbb', 'bbb', 'bbb', 'bbb', 555, 555, 'bbb', 'bbb', '1147698197_ARAB.png', 'LatLng(-2.584063, 120.770453)'),
(13, 'kkk', 'kkk', 'kkk', 'kkk', 888, 888, 'kkk', 'kkkugug56///', '1578826352_BEL.png', 'LatLng(-2.564718, 120.786398)'),
(14, 'jjj', 'jjj', 'jjj', 'jjj', 888, 888, 'kjj', 'jjj', '1829190845_pol.png', 'LatLng(-2.593311, 120.767535)'),
(15, 'xxx', 'xxx', 'xxx', 'xxx', 777, 777, 'xxx', 'xxx', '898144340_ING.png', 'LatLng(-2.584681, 120.772513)'),
(16, 'ppp', 'ppp', 'ppp', 'ppp', 888, 888, 'ppp', 'ppp', '1773563925_BEL.png', ''),
(17, 'ooo', 'ooo', 'ooo', 'ooo', 0, 0, 'ooo', 'ooo', '2007162146_pol.png', ''),
(18, 'iii', 'iii', 'iii', 'iii', 111, 111, 'iii', 'iii', '967820355_ING.png', ''),
(19, 'ttt', 'ttt', 'ttt', 'ttt', 666, 666, 'ttt', 'ttt', '1088873967_BEL.png', ''),
(20, 'yyy', 'yyy', 'yyy', 'yyy', 888, 888, 'yyy', 'yyy', '296698987_BEL.png', ''),
(21, 'hhh', 'hhh', 'hhh', 'hhh', 999, 999, 'hhh', 'hhh', '2095669001_ARAB.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_mitra`
--
ALTER TABLE `form_mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_mitra`
--
ALTER TABLE `form_mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
