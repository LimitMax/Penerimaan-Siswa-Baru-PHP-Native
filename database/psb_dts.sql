-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 04:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_dts`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_pendaftar` varchar(255) NOT NULL,
  `b_indo` varchar(255) NOT NULL,
  `b_inggris` varchar(15) NOT NULL,
  `mtk` varchar(255) NOT NULL,
  `pilihan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_pendaftar`, `b_indo`, `b_inggris`, `mtk`, `pilihan`) VALUES
(2, '2', '90', '87', '80', '92'),
(3, '3', '80', '85', '90', '80'),
(4, '4', '90', '80', '90', '89'),
(5, '6', '80', '85', '90', '80');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftar` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `NISN` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` set('laki-laki','perempuan') NOT NULL,
  `agama` enum('islam','kristen','hindu','budha','other') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `status` enum('Diterima','Cadangan','Tidak Diterima','Pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftar`, `id_user`, `NISN`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `agama`, `no_hp`, `asal_sekolah`, `foto`, `status`) VALUES
(2, '2', '0011405888', 'Reza Salahudin', 'Majalengka', '2002-09-17', 'Jl. Raya Cisambeng No. 14 Ds. Cisambeng Kec. Palasah Kab. Majalengka Jawa Barat - 45475', 'laki-laki', 'islam', '085155889019', 'SMPN 1 Jatiwangi', 'reza.jpg', 'Diterima'),
(3, '3', '1012140501', 'Taufiq Qurohman Ruki', 'Majalengka', '2001-05-14', 'Ds. Sindanghaji Kec Palasah Kab. Majalengka - 45475', 'laki-laki', 'islam', '082126836218', 'SMPN 2 Leuwimunding', 'IMG-20191223-WA0010.jpg', 'Diterima'),
(4, '4', '1012140097', 'Mikasa Ackerman', 'Tokyo', '2005-07-06', 'Tokyo, Jepang', 'perempuan', 'kristen', '085123098998', 'SMPN 1 Tokyo', 'fc5b25b86c8c34d62d6c48b32b28e4ce.jpg', 'Pending'),
(5, '5', '', '', '', '0000-00-00', '', '', 'islam', '', '', '', 'Pending'),
(6, '6', '12345678', 'Nobita', '', '0000-00-00', '', 'perempuan', '', '', '', '', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `kategori` enum('admin','siswa','','') NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `Password`, `kategori`, `tgl_daftar`) VALUES
(1, 'admin', 'taufiqqurohman98@gmail.com', '$2y$10$N32QG99TQGVZ/3j2z89/ru.RUaQndBmSP7EZZTTY3i9tG7MP//qfW', 'admin', '2021-10-19'),
(2, 'Reza Salahudin', 'reza12@gmail.com', '$2y$10$GETc6j4xo9JfOVnHkll2pOcB6TXpEnpj0HYyZXJVm79R6rmsG5wT6', 'siswa', '2021-10-20'),
(3, 'Taufiq Qurohman Ruki', 'dragonsin98@gmail.com', '$2y$10$AQjHNyU.tTz4ioFfFJR/eOAMAX.zP/gYqz21WPFqtN0/VO6vUpE8u', 'siswa', '2021-10-21'),
(4, 'Mikasa', 'mikas14@gmail.com', '$2y$10$549FremksXsBMYMaEN4GPu/f.I8wgRsWdtC3NJE0u7ZhiTF2COqCy', 'siswa', '2021-10-21'),
(5, 'Nobita', 'nobita14@gmail.com', '$2y$10$dEP5y/Usb2dCKYBPFQ2Yeew3STS.ZFGxEjXYTPxHvz6jfP0CMzt7a', 'siswa', '2021-10-22'),
(6, 'Nobita1', 'nobita1@gmail.com', '$2y$10$3L4IEb8aiXDbetHcC5/KXey5.M1FUVlp/NPJoDAn7LncOOlSXXB7e', 'siswa', '2021-10-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
