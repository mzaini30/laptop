-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Okt 2021 pada 03.06
-- Versi server: 10.3.31-MariaDB-log-cll-lve
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mabaizwe_samarinda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `database_ef2642b6d0f594884785f76c1880c141`
--

CREATE TABLE `database_ef2642b6d0f594884785f76c1880c141` (
  `id` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `nip` text DEFAULT NULL,
  `golongan` text DEFAULT NULL,
  `tempatBertugas` text DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `hp` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `isAktif` text DEFAULT NULL,
  `role` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `database_ef2642b6d0f594884785f76c1880c141`
--

INSERT INTO `database_ef2642b6d0f594884785f76c1880c141` (`id`, `nama`, `nip`, `golongan`, `tempatBertugas`, `jabatan`, `email`, `hp`, `password`, `isAktif`, `role`) VALUES
(2, NULL, 'indonesiamaju99', NULL, NULL, NULL, NULL, NULL, 'semangatmuda', 'true', 'superuser'),
(5, 'Muhammad Zaini', '1502105051', 'sekolah', 'sekolah', 'siswa', 'muhzaini30@gmail.com', '081545143654', 'kucing', 'true', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `database_ef2642b6d0f594884785f76c1880c141`
--
ALTER TABLE `database_ef2642b6d0f594884785f76c1880c141`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `database_ef2642b6d0f594884785f76c1880c141`
--
ALTER TABLE `database_ef2642b6d0f594884785f76c1880c141`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
