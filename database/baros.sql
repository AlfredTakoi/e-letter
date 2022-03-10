-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 12:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baros`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `no` int(10) NOT NULL,
  `nama_pegawai` varchar(80) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posisi`
--

CREATE TABLE `tbl_posisi` (
  `id_posisi` int(10) NOT NULL,
  `posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posisi`
--

INSERT INTO `tbl_posisi` (`id_posisi`, `posisi`) VALUES
(1, 'Lurah'),
(2, ' Sekretaris Lurah'),
(3, 'Kasi Pemberdayaan'),
(4, 'Kasi Pemerintahan'),
(5, 'Kasi Sarpras'),
(6, 'Staff'),
(7, 'Buruh Harian Lepas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sifat`
--

CREATE TABLE `tbl_sifat` (
  `id_sifat` int(10) NOT NULL,
  `sifat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sifat`
--

INSERT INTO `tbl_sifat` (`id_sifat`, `sifat`) VALUES
(1, 'Segera'),
(2, 'Penting'),
(3, 'Rahasia'),
(4, 'Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_keluar`
--

CREATE TABLE `tbl_surat_keluar` (
  `id` int(50) NOT NULL,
  `no_surat` varchar(80) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` varchar(80) NOT NULL,
  `tertuju` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `isi_surat_ringkas` varchar(200) NOT NULL,
  `lampiran` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `id` int(50) NOT NULL,
  `no_surat` varchar(80) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` varchar(80) NOT NULL,
  `isi_surat_ringkas` varchar(200) NOT NULL,
  `status_disposisi` varchar(50) NOT NULL,
  `lampiran` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `pass`, `level`) VALUES
(1, 'Admin', 'Admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin123', '1'),
(2, 'alfredgt', 'alfred', '00e7e0ce8d077c220dd1b723d81e572fa725a562', 'alfred123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_posisi`
--
ALTER TABLE `tbl_posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `tbl_sifat`
--
ALTER TABLE `tbl_sifat`
  ADD PRIMARY KEY (`id_sifat`);

--
-- Indexes for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_posisi`
--
ALTER TABLE `tbl_posisi`
  MODIFY `id_posisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_sifat`
--
ALTER TABLE `tbl_sifat`
  MODIFY `id_sifat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
