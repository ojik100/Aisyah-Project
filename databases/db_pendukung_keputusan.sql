-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2022 pada 16.53
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendukung_keputusan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `belita`
--

CREATE TABLE `belita` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_pemeriksa` varchar(50) NOT NULL,
  `nama_belita` varchar(50) NOT NULL,
  `tgl_lhr` varchar(20) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_ortu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `belita`
--

INSERT INTO `belita` (`id`, `id_users`, `nama_pemeriksa`, `nama_belita`, `tgl_lhr`, `nama_ayah`, `nama_ibu`, `alamat`, `no_ortu`) VALUES
(1, 1, 'Pemeriksa1', 'Alisa Nur Aziza', 'January, 05 2022', 'Mahuni', 'Rakmah', 'Jrowaru', '087863301421'),
(2, 8, 'Pemeriksa Gizi', 'Baiq Indra Ratna', '2022-05-16', 'Lalu Muhammad Winardi', 'Baiq Sri Kaswarni', 'Desa Wanasaba ', '087863301421');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
--

CREATE TABLE `indikator` (
  `id` int(11) NOT NULL,
  `usia_belita` varchar(40) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tinggi_badan` float NOT NULL,
  `berat_badan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`id`, `usia_belita`, `jk`, `tinggi_badan`, `berat_badan`) VALUES
(2, '5 / Bulan', 'Perempuan', 20, 40),
(3, '9 / bulan', 'Laki-Laki', 15, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keanggotaan`
--

CREATE TABLE `keanggotaan` (
  `id` int(11) NOT NULL,
  `id_indikator` int(11) NOT NULL,
  `batas_atas` int(11) NOT NULL,
  `batas_tengah` int(11) NOT NULL,
  `batas_bawah` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `id_belita` int(11) NOT NULL,
  `id_indikator` int(11) NOT NULL,
  `id_keanggotaan` int(11) NOT NULL,
  `id_status_gizi` int(11) NOT NULL,
  `tgl_pemeriksaan` varchar(20) NOT NULL,
  `nama_pemeriksa` varchar(50) NOT NULL,
  `nama_belita` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` float NOT NULL,
  `hasil_penilaian` varchar(200) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_gizi`
--

CREATE TABLE `status_gizi` (
  `id` int(11) NOT NULL,
  `status_gizi` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `score` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_gizi`
--

INSERT INTO `status_gizi` (`id`, `status_gizi`, `jk`, `score`) VALUES
(3, 'Gizi buruk', 'Perempuan', 43),
(4, 'Gizi kurang', 'Laki-Laki', 49),
(5, 'Normal', 'Laki-Laki', 53);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_belita` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_belita`, `nama_ayah`, `nama_ibu`, `jk`, `nip`, `password`, `level`) VALUES
(6, 'aisyah', '-', '-', 'Laki-Laki', '180202018', 'bidan', 'Bidan'),
(7, 'Fahrurrozi', '-', '-', 'Laki-Laki', '180202018', '12345', 'Petugas'),
(8, 'Admin', '-', '-', 'Laki-Laki', '12', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `belita`
--
ALTER TABLE `belita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keanggotaan`
--
ALTER TABLE `keanggotaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_gizi`
--
ALTER TABLE `status_gizi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `belita`
--
ALTER TABLE `belita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `keanggotaan`
--
ALTER TABLE `keanggotaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_gizi`
--
ALTER TABLE `status_gizi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
