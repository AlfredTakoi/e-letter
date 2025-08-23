-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2025 pada 07.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `no` int(10) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama_pegawai` varchar(80) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `id_posisi` int(20) NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`no`, `nik`, `nama_pegawai`, `posisi`, `alamat`, `no_tlp`, `id_posisi`, `id_user`) VALUES
(8, 123453454, 'testingsdsd', '3', 'Facilis facilis repe', '22', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_posisi`
--

CREATE TABLE `tbl_posisi` (
  `id_posisi` int(10) NOT NULL,
  `posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_posisi`
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
-- Struktur dari tabel `tbl_surat_keluar`
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
  `lampiran` varchar(80) NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id`, `no_surat`, `tanggal_surat`, `sifat`, `pengirim`, `perihal`, `tertuju`, `alamat`, `isi_surat_ringkas`, `lampiran`, `id_user`) VALUES
(11, '12312313', '2012-05-13', 'Rahasia', '2', 'Pengunduran Diri', 'Qui laboris recusand', 'Exercitation ea eaqu', 'Saepe aliquip et dol', 'Et voluptatibus sed', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_masuk`
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
  `lampiran` varchar(80) NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id`, `no_surat`, `tanggal_surat`, `sifat`, `pengirim`, `perihal`, `isi_surat_ringkas`, `status_disposisi`, `lampiran`, `id_user`) VALUES
(9, 'Qui in ut autem expe', '2025-08-23', 'Penting', 'Facilis consequuntur', 'Magna reprehenderit', 'Non nisi ex iste bla', 'Sudah Disposisi', 'Possimus commodo ve', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('Super Admin','Lurah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `pass`, `level`) VALUES
(1, 'Admin', 'Admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin123', 'Super Admin'),
(2, 'alfredgt', 'alfred', '00e7e0ce8d077c220dd1b723d81e572fa725a562', 'alfred123', 'Lurah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_posisi` (`id_posisi`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_posisi`
--
ALTER TABLE `tbl_posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indeks untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user_2` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_posisi`
--
ALTER TABLE `tbl_posisi`
  MODIFY `id_posisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD CONSTRAINT `tbl_pegawai_ibfk_1` FOREIGN KEY (`id_posisi`) REFERENCES `tbl_posisi` (`id_posisi`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_pegawai_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD CONSTRAINT `tbl_surat_keluar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD CONSTRAINT `tbl_surat_masuk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
