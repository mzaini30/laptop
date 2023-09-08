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
-- Struktur dari tabel `database_864a1488b62b77a3d01a8b3928152ef2`
--

CREATE TABLE `database_864a1488b62b77a3d01a8b3928152ef2` (
  `id` int(11) NOT NULL,
  `acak` text DEFAULT NULL,
  `data` text DEFAULT NULL,
  `deadline` text DEFAULT NULL,
  `nip` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `database_864a1488b62b77a3d01a8b3928152ef2`
--

INSERT INTO `database_864a1488b62b77a3d01a8b3928152ef2` (`id`, `acak`, `data`, `deadline`, `nip`) VALUES
(2, '0.9393799303760924', '{\"nama\":\"Rudi\",\"lahir\":\"Samarinda, 1 Januari 1990\",\"pidana\":\"Mencuri\",\"alasan\":\"Kepengen\",\"lokasi\":\"Samarinda\",\"pengasuh\":\"Budi\",\"pk\":\"Yaya\",\"registrasi\":\"123\",\"jenisKelamin\":\"Laki-Laki\",\"masaPidana\":\"10 tahun\",\"penilaian\":\"13 Januari 1995\",\"blok\":\"B\",\"risiko\":\"Tinggi\",\"faktorResiko_0\":0,\"faktorResiko_1\":2,\"faktorResiko_2\":2,\"faktorResiko_3\":1,\"faktorResiko_4\":3,\"faktorResiko_5\":0,\"faktorResiko_6\":1,\"faktorResiko_7\":3,\"faktorResiko_8\":1,\"faktorResiko_9\":0,\"faktorPelindung_0\":1,\"faktorPelindung_1\":2,\"faktorKriminogenik_0_0\":1,\"faktorKriminogenik_0_1\":0,\"faktorKriminogenik_0_2\":1,\"faktorKriminogenik_0_3\":0,\"faktorKriminogenik_0_4\":1,\"faktorKriminogenik_0_5\":0,\"faktorKriminogenik_0_6\":1,\"faktorKriminogenik_0_7\":1,\"faktorKriminogenik_0_8\":0,\"faktorKriminogenik_0_9\":1,\"faktorKriminogenik_0_10\":0,\"faktorKriminogenik_0_11\":0,\"catatanKriminogenik_0\":\"-\",\"faktorKriminogenik_1_0\":1,\"faktorKriminogenik_1_1\":0,\"faktorKriminogenik_1_2\":1,\"faktorKriminogenik_1_3\":0,\"catatanKriminogenik_1\":\"-\",\"faktorKriminogenik_2_0\":1,\"faktorKriminogenik_2_1\":0,\"faktorKriminogenik_2_2\":1,\"faktorKriminogenik_2_3\":0,\"faktorKriminogenik_2_4\":1,\"faktorKriminogenik_2_5\":1,\"catatanKriminogenik_2\":\"-\",\"faktorKriminogenik_3_0\":0,\"faktorKriminogenik_3_1\":1,\"faktorKriminogenik_3_2\":1,\"faktorKriminogenik_3_3\":0,\"faktorKriminogenik_3_4\":1,\"faktorKriminogenik_3_5\":0,\"faktorKriminogenik_3_6\":1,\"faktorKriminogenik_3_7\":1,\"catatanKriminogenik_3\":\"-\",\"faktorKriminogenik_4_0\":1,\"faktorKriminogenik_4_1\":0,\"faktorKriminogenik_4_2\":1,\"faktorKriminogenik_4_3\":0,\"faktorKriminogenik_4_4\":1,\"catatanKriminogenik_4\":\"-\",\"faktorKriminogenik_5_0\":1,\"faktorKriminogenik_5_1\":0,\"faktorKriminogenik_5_2\":1,\"faktorKriminogenik_5_3\":0,\"faktorKriminogenik_5_4\":1,\"faktorKriminogenik_5_5\":0,\"faktorKriminogenik_5_6\":1,\"catatanKriminogenik_5\":\"-\"}', '1634126203674', '1502105051'),
(3, '0.7576330206158584', '{\"nama\":\"u\",\"lahir\":\"i\",\"pidana\":\"jj\",\"alasan\":\"kk\",\"lokasi\":\"u\",\"pengasuh\":\"j\",\"pk\":\"i\",\"registrasi\":\"j\",\"jenisKelamin\":\"h\",\"masaPidana\":\"o\",\"penilaian\":\"j\",\"blok\":\"u\",\"risiko\":\"o\",\"faktorResiko_0\":0,\"faktorResiko_1\":3,\"faktorResiko_2\":0,\"faktorResiko_3\":1,\"faktorResiko_4\":0,\"faktorResiko_5\":2,\"faktorResiko_6\":0,\"faktorResiko_7\":2,\"faktorResiko_8\":1,\"faktorResiko_9\":0,\"faktorPelindung_0\":2,\"faktorPelindung_1\":0,\"faktorKriminogenik_0_0\":0,\"faktorKriminogenik_0_1\":1,\"faktorKriminogenik_0_2\":1,\"faktorKriminogenik_0_3\":0,\"faktorKriminogenik_0_4\":1,\"faktorKriminogenik_0_5\":0,\"faktorKriminogenik_0_6\":1,\"faktorKriminogenik_0_7\":0,\"faktorKriminogenik_0_8\":0,\"faktorKriminogenik_0_9\":1,\"faktorKriminogenik_0_10\":0,\"faktorKriminogenik_0_11\":0,\"catatanKriminogenik_0\":\"j\",\"faktorKriminogenik_1_0\":0,\"faktorKriminogenik_1_1\":0,\"faktorKriminogenik_1_2\":1,\"faktorKriminogenik_1_3\":1,\"catatanKriminogenik_1\":\"d\",\"faktorKriminogenik_2_0\":1,\"faktorKriminogenik_2_1\":0,\"faktorKriminogenik_2_2\":1,\"faktorKriminogenik_2_3\":0,\"faktorKriminogenik_2_4\":1,\"faktorKriminogenik_2_5\":0,\"catatanKriminogenik_2\":\"z\",\"faktorKriminogenik_3_0\":1,\"faktorKriminogenik_3_1\":0,\"faktorKriminogenik_3_2\":1,\"faktorKriminogenik_3_3\":1,\"faktorKriminogenik_3_4\":0,\"faktorKriminogenik_3_5\":0,\"faktorKriminogenik_3_6\":1,\"faktorKriminogenik_3_7\":0,\"catatanKriminogenik_3\":\"e\",\"faktorKriminogenik_4_1\":1,\"faktorKriminogenik_4_0\":0,\"faktorKriminogenik_4_2\":0,\"faktorKriminogenik_4_3\":1,\"faktorKriminogenik_4_4\":0,\"catatanKriminogenik_4\":\"q\",\"faktorKriminogenik_5_0\":0,\"faktorKriminogenik_5_1\":0,\"faktorKriminogenik_5_2\":1,\"faktorKriminogenik_5_3\":0,\"faktorKriminogenik_5_4\":1,\"faktorKriminogenik_5_5\":0,\"faktorKriminogenik_5_6\":0,\"catatanKriminogenik_5\":\"r\"}', '1635042842460', 'indonesiamaju99');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `database_864a1488b62b77a3d01a8b3928152ef2`
--
ALTER TABLE `database_864a1488b62b77a3d01a8b3928152ef2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `database_864a1488b62b77a3d01a8b3928152ef2`
--
ALTER TABLE `database_864a1488b62b77a3d01a8b3928152ef2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;