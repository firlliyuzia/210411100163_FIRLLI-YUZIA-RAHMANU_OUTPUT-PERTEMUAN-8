-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2022 pada 12.23
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_163`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_firlli`
--

CREATE TABLE `tbl_firlli` (
  `id_firlli` int(12) NOT NULL,
  `nama_firlli` varchar(20) DEFAULT NULL,
  `alamat_firlli` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_firlli`
--

INSERT INTO `tbl_firlli` (`id_firlli`, `nama_firlli`, `alamat_firlli`) VALUES
(1, 'Firlli', 'Kediri'),
(2, 'Almas', 'Malang'),
(3, 'Natasya', 'Bojonegoro'),
(4, 'Mikhail', 'Jombang'),
(5, 'Della', 'Lamongan'),
(6, 'Dhavid', 'Semarang'),
(7, 'Siska', 'Surabaya'),
(8, 'Indah', 'Palembang'),
(9, 'Allen', 'Jember'),
(10, 'Vatra', 'Gresik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_firlli`
--
ALTER TABLE `tbl_firlli`
  ADD PRIMARY KEY (`id_firlli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_firlli`
--
ALTER TABLE `tbl_firlli`
  MODIFY `id_firlli` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
