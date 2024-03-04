-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 11:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photolur`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`, `deskripsi`, `tanggal_dibuat`, `id_user`) VALUES
(3, 'aa', '', '2024-02-29', 30),
(13, 'bjir', '', '2024-02-29', 30),
(14, 'hai', '', '2024-02-29', 30);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `judul_foto` varchar(255) NOT NULL,
  `deskripsi_foto` text NOT NULL,
  `tanggal_unggahan` date NOT NULL,
  `lokasi_file` varchar(255) NOT NULL,
  `id_album` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `judul_foto`, `deskripsi_foto`, `tanggal_unggahan`, `lokasi_file`, `id_album`, `id_user`) VALUES
(37, 'Burung Pelci', 'Burung pemakan buah-buahan', '0000-00-00', '1708912352_581cd923dfaa3f33dfdb.webp', 0, 0),
(38, 'Burung Trucukan', 'Pemakan buah-buahan dan pemakan seranga', '0000-00-00', '1708912755_5f854920940073e69bc0.jpg', 0, 0),
(39, 'Burung Poksai', 'Burung poksai ditemukan di hutan atau semak belukar di kaki gunung Himalaya sampai ke Indochina', '0000-00-00', '1708912841_8948f6405aed8e667f99.webp', 0, 0),
(40, 'Burung sirtu', 'Burung siru termasuk memakan buah-buahan sehingga tidak sulit dalam perawatannya. Jenis buah terbaik yang dapat diberikan adalah pepaya atau pisang. ', '0000-00-00', '1708912943_22717cfc20a3d8c83d72.jpg', 0, 0),
(41, 'Burung Perenjak', 'Perenjak jawa atau yang juga dikenal dengan nama ciblek adalah sejenis burung pengicau dari suku Cisticolidae. Dalam bahasa Inggris burung ini dikenal sebagai bar-winged Prinia, merujuk pada dua garis putih pada setiap sayapnya.', '0000-00-00', '1708912999_440d8baed13e493bbe7f.png', 0, 0),
(43, 'Burung Kenari', 'Burung Kenari Adalah burung pemakan biji-bijian atau buah-buahan', '0000-00-00', '1708916583_c90f1dd03c57a4bddb3f.jpg', 0, 0),
(47, 'Burung Centet', 'Centet kelabu kadang di sebut cendet, pentet atau toet bahasa inggris The Long-tailed Shrike atau Rufous-backed Shrike adalah spesies burung dari keluarga Laniidae', '0000-00-00', '1709014126_5545a6b765e957ab5a3e.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_foto`, `id_user`, `isi_komentar`, `tanggal_komentar`) VALUES
(7, 37, 29, 'ad', '0000-00-00'),
(8, 39, 29, 'cf', '0000-00-00'),
(9, 37, 30, 'hai', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `id_like` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_like` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mix`
--

CREATE TABLE `mix` (
  `id_mix` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `foto`, `active`) VALUES
(24, 'lutfi', '$2y$10$Z6ezJerlgpggrfKUQBcKhOBGKmKuEsLjOm7LfCtY5.82sBJRwz1ju', 'lutfi.lrd25@gmail.com', 'lutfirahmat', 'jogja', 'default.jpg', ''),
(25, 'lutfi', '$2y$10$YJFjKw/IVxaedUjs0nC2FO0uEeuBM2YUUcbKUQoWa4zKpg/tZHJva', 'photolurofical@gmail.com', 'lutfirahmat', 'jogja', 'default.jpg', ''),
(26, 'lutfiirahmat', '$2y$10$aQQ/f6X9H.PlZDOrMJIXz.zPhATxqOKIx9RsnxngIgcCd90ovnaJ2', 'lutfirahmatrahmat@gmail.com', 'rahmat', 'jogja', 'default.jpg', ''),
(27, 'Lutfi Rahmat', '$2y$10$lKeQISyBCINIxvrj2UTxI.ngZusKtnJt8H9ERhZgJpZvB37qHeW6i', 'lutfi.lrd25@gmail.com', 'Lutfi Rahmat Dani', 'jogja', 'default.jpg', ''),
(28, 'Lutfi', '$2y$10$xw71klKF2XRXssEQbfOUMuNIy9zdwqpBM.P1LUwqI.e6vUbinVer6', 'lutfirahmatrahmat@gmail.com', 'Lutfi Rahmat ', 'Jogja', 'default.jpg', ''),
(29, 'Srill', '$2y$10$wkbqN.uF1dX1Hrb0uv0rTev7UcBRx8ELzIotYWqOxVDkEj.ZkQ5X.', 'lutfirahmatrahmat@gmail.com', 'Nasrill', 'Jogja', 'default.jpg', ''),
(30, 'luthh', '$2y$10$tT3PjNucqcX.kj7nhm2n7.pKbOfiEgkwjH4uzq0eZYIUGqiSo30um', 'ahlulffirdaus@gmail.com', 'Lutfi Rahmatdani', '121212aasas', 'default.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_album` (`id_album`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_foto` (`id_foto`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_foto` (`id_foto`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mix`
--
ALTER TABLE `mix`
  ADD PRIMARY KEY (`id_mix`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mix`
--
ALTER TABLE `mix`
  MODIFY `id_mix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
