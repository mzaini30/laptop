-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Okt 2021 pada 03.07
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
-- Struktur dari tabel `database_eb8556286f0a7de3e1fec0c5eb44b5a4`
--

CREATE TABLE `database_eb8556286f0a7de3e1fec0c5eb44b5a4` (
  `id` int(11) NOT NULL,
  `acak` text DEFAULT NULL,
  `data` text DEFAULT NULL,
  `deadline` text DEFAULT NULL,
  `nip` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `database_eb8556286f0a7de3e1fec0c5eb44b5a4`
--

INSERT INTO `database_eb8556286f0a7de3e1fec0c5eb44b5a4` (`id`, `acak`, `data`, `deadline`, `nip`) VALUES
(2, '0.39323777324100573', '{\"penilaian\":\"17 Agustus 2021\",\"petugas\":\"Ayu\",\"lokasi\":\"Samarinda\",\"napi\":\"Hayu\",\"jenisKelamin\":\"Perempuan\",\"tempatLahir\":\"Sangatta\",\"tanggalLahir\":\"14-12-2001\",\"pendidikan\":\"SMA\",\"usia\":\"9\",\"pekerjaan\":\"Bekerja\",\"pidana\":\"Mencuri\",\"lama\":\"12\",\"sisa\":\"3\",\"domisili\":\"Bontang\",\"status\":\"Menikah\",\"etnis\":\"Tidak ada\",\"pengulangan\":\"2\",\"frekuensi\":\"5\",\"frekuensiNon\":\"1\",\"pelanggaran\":\"Mencuri ikan asin\",\"programPembinaan\":\"Main layangan\",\"kemandirian\":\"Pramuka\",\"keahlian\":\"Nulis buku\",\"penyakit\":\"Asma\",\"keamanan_0\":0,\"keamanan_1\":0,\"keamanan_2\":1,\"keamanan_3\":0,\"keamanan_4\":0,\"keamanan_5\":0,\"catatanKeamanan\":\"-\",\"keselamatan_0\":1,\"keselamatan_1\":1,\"keselamatan_2\":0,\"keselamatan_3\":0,\"keselamatan_4\":1,\"keselamatan_5\":0,\"keselamatan_6\":1,\"keselamatan_7\":0,\"keselamatan_8\":0,\"catatanKeselamatan\":\"-\",\"stabilitas_0\":1,\"stabilitas_1\":0,\"stabilitas_2\":0,\"stabilitas_3\":1,\"stabilitas_4\":1,\"stabilitas_5\":0,\"stabilitas_6\":0,\"stabilitas_7\":0,\"catatanStabilitas\":\"-\",\"kemasyarakatan_0\":1,\"kemasyarakatan_1\":0,\"kemasyarakatan_2\":0,\"kemasyarakatan_3\":0,\"kemasyarakatan_4\":1,\"kemasyarakatan_5\":1,\"kemasyarakatan_6\":0,\"kemasyarakatan_7\":1,\"catatanKemasyarakatan\":\"-\",\"lamaPidana\":\"12\",\"sisaPidana\":\"3\",\"tindakPidana\":\"Mencuri\"}', '1634881817123', 'indonesiamaju99'),
(3, '0.6536451090005386', '{\"penilaian\":\"u\",\"petugas\":\"k\",\"lokasi\":\"h\",\"napi\":\"g\",\"jenisKelamin\":\"k\",\"tempatLahir\":\"i\",\"tanggalLahir\":\"l\",\"usia\":\"u\",\"pendidikan\":\"h\",\"pekerjaan\":\"y\",\"pidana\":\"k\",\"lama\":\"ui\",\"sisa\":\"g\",\"domisili\":\"f\",\"status\":\"i\",\"etnis\":\"j\",\"pengulangan\":\"y\",\"frekuensi\":\"k\",\"frekuensiNon\":\"u\",\"pelanggaran\":\"h\",\"programPembinaan\":\"kl\",\"kemandirian\":\"j\",\"keahlian\":\"h\",\"penyakit\":\"s\",\"keamanan_0\":0,\"keamanan_1\":1,\"keamanan_2\":0,\"keamanan_3\":1,\"keamanan_4\":1,\"keamanan_5\":0,\"catatanKeamanan\":\"w\",\"keselamatan_0\":0,\"keselamatan_1\":1,\"keselamatan_2\":0,\"keselamatan_3\":0,\"keselamatan_4\":1,\"keselamatan_5\":1,\"keselamatan_6\":0,\"keselamatan_7\":0,\"keselamatan_8\":1,\"catatanKeselamatan\":\"d\",\"stabilitas_0\":0,\"stabilitas_1\":1,\"stabilitas_2\":0,\"stabilitas_3\":1,\"stabilitas_4\":1,\"stabilitas_5\":0,\"stabilitas_6\":1,\"stabilitas_7\":0,\"catatanStabilitas\":\"s\",\"kemasyarakatan_0\":1,\"kemasyarakatan_1\":0,\"kemasyarakatan_2\":0,\"kemasyarakatan_3\":0,\"kemasyarakatan_4\":1,\"kemasyarakatan_5\":0,\"kemasyarakatan_6\":0,\"kemasyarakatan_7\":1,\"catatanKemasyarakatan\":\"w\",\"lamaPidana\":\"1\",\"sisaPidana\":\"2\",\"tindakPidana\":\"s\"}', '1635043048377', 'indonesiamaju99'),
(4, '0.7122190828373001', '{\"penilaian\":\"17 Agustus 2021\",\"petugas\":\"Rudi\",\"lokasi\":\"Samarinda\",\"napi\":\"Anton\",\"jenisKelamin\":\"Laki-laki\",\"tempatLahir\":\"Samarinda lahirnya\",\"tanggalLahir\":\"13 Februari 1990\",\"usia\":\"30\",\"pendidikan\":\"SMA\",\"pekerjaan\":\"Tukang\",\"pidana\":\"Mencuri\",\"lama\":\"3\",\"sisa\":\"1\",\"domisili\":\"Jakarta\",\"status\":\"Menikah\",\"etnis\":\"Jawa\",\"pengulangan\":\"3\",\"frekuensi\":\"2\",\"frekuensiNon\":\"1\",\"pelanggaran\":\"Maling\",\"programPembinaan\":\"Memasak\",\"kemandirian\":\"Menjahit\",\"keahlian\":\"Baiki komputer\",\"penyakit\":\"Asma\",\"keamanan_0\":0,\"keamanan_1\":1,\"keamanan_2\":1,\"keamanan_3\":0,\"keamanan_4\":1,\"keamanan_5\":0,\"catatanKeamanan\":\"-\",\"keselamatan_0\":0,\"keselamatan_1\":1,\"keselamatan_3\":1,\"keselamatan_2\":1,\"keselamatan_4\":0,\"keselamatan_5\":1,\"keselamatan_6\":0,\"keselamatan_7\":0,\"keselamatan_8\":0,\"catatanKeselamatan\":\"-\",\"stabilitas_0\":1,\"stabilitas_1\":0,\"stabilitas_2\":1,\"stabilitas_3\":1,\"stabilitas_4\":0,\"stabilitas_5\":1,\"stabilitas_6\":1,\"stabilitas_7\":1,\"catatanStabilitas\":\"-\",\"kemasyarakatan_0\":1,\"kemasyarakatan_1\":0,\"kemasyarakatan_2\":0,\"kemasyarakatan_3\":1,\"kemasyarakatan_4\":1,\"kemasyarakatan_5\":0,\"kemasyarakatan_6\":1,\"kemasyarakatan_7\":0,\"catatanKemasyarakatan\":\"-\",\"lamaPidana\":\"3\",\"sisaPidana\":\"1\",\"tindakPidana\":\"Mencuri\"}', '1635044042821', 'indonesiamaju99'),
(5, '0.3873246381306712', '{\"pidana\":\"Mencuri ayam orang\",\"lama\":\"3\",\"sisa\":\"2\",\"penilaian\":\"u\",\"petugas\":\"h\",\"lokasi\":\"k\",\"napi\":\"jh\",\"jenisKelamin\":\"k\",\"tempatLahir\":\"j\",\"tanggalLahir\":\"g\",\"usia\":\"k\",\"pendidikan\":\"j\",\"pekerjaan\":\"n\",\"domisili\":\"k\",\"status\":\"j\",\"etnis\":\"l\",\"pengulangan\":\"j\",\"frekuensi\":\"m\",\"pelanggaran\":\"k\",\"frekuensiNon\":\"k\",\"programPembinaan\":\"li\",\"kemandirian\":\"j\",\"keahlian\":\"k\",\"penyakit\":\"l\",\"keamanan_0\":1,\"keamanan_1\":0,\"keamanan_2\":0,\"keamanan_3\":1,\"keamanan_4\":1,\"keamanan_5\":0,\"catatanKeamanan\":\"i\",\"keselamatan_0\":1,\"keselamatan_1\":0,\"keselamatan_2\":0,\"keselamatan_3\":1,\"keselamatan_4\":0,\"keselamatan_5\":0,\"keselamatan_6\":1,\"keselamatan_7\":1,\"keselamatan_8\":1,\"catatanKeselamatan\":\"o\",\"stabilitas_0\":1,\"stabilitas_1\":0,\"stabilitas_2\":1,\"stabilitas_4\":0,\"stabilitas_3\":1,\"stabilitas_5\":0,\"stabilitas_6\":1,\"stabilitas_7\":0,\"catatanStabilitas\":\"u\",\"kemasyarakatan_0\":0,\"kemasyarakatan_1\":1,\"kemasyarakatan_2\":1,\"kemasyarakatan_3\":0,\"kemasyarakatan_4\":0,\"kemasyarakatan_5\":0,\"kemasyarakatan_6\":1,\"kemasyarakatan_7\":1,\"catatanKemasyarakatan\":\"u\"}', '1635044359378', 'indonesiamaju99'),
(6, '0.451923103372992', '{\"pidana\":[0,61,62,64,65],\"penilaian\":\"8\",\"lokasi\":\"099\",\"napi\":\"90809i\",\"jenisKelamin\":\"oi\",\"tempatLahir\":\"poio\",\"tanggalLahir\":\"i9\",\"usia\":\"9\",\"pendidikan\":\"9i\",\"pekerjaan\":\"p9i9\",\"lama\":\"3\",\"sisa\":\"4\",\"domisili\":\"i9\",\"petugas\":\"iu\",\"status\":\"k\",\"etnis\":\"l\",\"pengulangan\":\";\",\"frekuensi\":\"l\",\"frekuensiNon\":\"j\",\"pelanggaran\":\";\",\"programPembinaan\":\"l\",\"kemandirian\":\"j\",\"keahlian\":\"l\",\"penyakit\":\";\",\"catatanKeamanan\":\"w\",\"catatanKeselamatan\":\"q\",\"catatanStabilitas\":\"e\",\"catatanKemasyarakatan\":\"w\"}', '1635126669058', 'indonesiamaju99'),
(7, '0.9152846689592389', '{\"pidana\":[0,10,65],\"penilaian\":\"u\",\"petugas\":\"o\",\"lokasi\":\"j\",\"napi\":\"l\",\"jenisKelamin\":\"j\",\"tempatLahir\":\"k\",\"tanggalLahir\":\"m\",\"usia\":\"k\",\"pendidikan\":\"l\",\"pekerjaan\":\";\",\"lama\":\"k\",\"sisa\":\"j\",\"domisili\":\"k\",\"status\":\"l\",\"etnis\":\",\",\"pengulangan\":\"j\",\"frekuensi\":\"i\",\"frekuensiNon\":\"l\",\"pelanggaran\":\"j\",\"programPembinaan\":\"i\",\"kemandirian\":\"l\",\"keahlian\":\"l\",\"penyakit\":\"j\",\"catatanKeamanan\":\"q\",\"catatanKeselamatan\":\"e\",\"catatanStabilitas\":\"e\",\"catatanKemasyarakatan\":\"r\"}', '1635126793513', 'indonesiamaju99'),
(8, '0.8617471724439749', '{\"pidana\":[0,1,3,64,65],\"penilaian\":\"i\",\"petugas\":\"k\",\"lokasi\":\"l\",\"napi\":\"k\",\"jenisKelamin\":\"j\",\"tempatLahir\":\"i\",\"tanggalLahir\":\"h\",\"usia\":\"u\",\"pendidikan\":\"k\",\"pekerjaan\":\"h\",\"lama\":\"u\",\"sisa\":\"i\",\"domisili\":\"j\",\"status\":\"g\",\"etnis\":\"y\",\"pengulangan\":\"jk\",\"frekuensi\":\"o\",\"frekuensiNon\":\"i\",\"pelanggaran\":\"y\",\"programPembinaan\":\"n\",\"kemandirian\":\"u\",\"keahlian\":\"j\",\"penyakit\":\"g\",\"catatanKeamanan\":\"q\",\"catatanKeselamatan\":\"w\",\"catatanStabilitas\":\"q\",\"catatanKemasyarakatan\":\"r\"}', '1635126948366', 'indonesiamaju99'),
(9, '0.06236956983102071', '{\"pidana\":[0,1,4,5,12,14,15,18,21,23,24,25],\"penilaian\":\"17 Agustus 2021\",\"petugas\":\"Zen\",\"lokasi\":\"Samarinda\",\"napi\":\"Fulan\",\"jenisKelamin\":\"Laki-laki\",\"tempatLahir\":\"Samboja\",\"tanggalLahir\":\"1 Februari 1990\",\"usia\":\"31\",\"pendidikan\":\"SMA\",\"pekerjaan\":\"Serabutan\",\"lama\":\"2\",\"sisa\":\"1\",\"domisili\":\"Klaten\",\"status\":\"Belum menikah\",\"etnis\":\"Jawa\",\"pengulangan\":\"3\",\"frekuensi\":\"4\",\"frekuensiNon\":\"2\",\"pelanggaran\":\"-\",\"programPembinaan\":\"-\",\"kemandirian\":\"-\",\"keahlian\":\"-\",\"penyakit\":\"Jantung\",\"keamanan_0\":0,\"keamanan_1\":1,\"keamanan_2\":0,\"keamanan_3\":1,\"keamanan_4\":1,\"keamanan_5\":0,\"catatanKeamanan\":\"-\",\"keselamatan_0\":0,\"keselamatan_1\":1,\"keselamatan_2\":1,\"keselamatan_3\":0,\"keselamatan_4\":0,\"keselamatan_5\":1,\"keselamatan_6\":1,\"keselamatan_7\":0,\"keselamatan_8\":1,\"catatanKeselamatan\":\"-\",\"stabilitas_0\":1,\"stabilitas_1\":0,\"stabilitas_2\":0,\"stabilitas_3\":1,\"stabilitas_4\":0,\"stabilitas_5\":0,\"stabilitas_6\":1,\"stabilitas_7\":0,\"catatanStabilitas\":\"-\",\"kemasyarakatan_0\":0,\"kemasyarakatan_1\":1,\"kemasyarakatan_2\":0,\"kemasyarakatan_3\":1,\"kemasyarakatan_4\":1,\"kemasyarakatan_5\":0,\"kemasyarakatan_6\":1,\"kemasyarakatan_7\":0,\"catatanKemasyarakatan\":\"-\"}', '1635172848172', 'indonesiamaju99'),
(10, '0.3761705332006111', '{\"pidana\":[51],\"lama\":\"1\",\"sisa\":\"1\",\"keamanan_0\":0,\"keamanan_1\":0,\"keamanan_2\":0,\"keamanan_3\":0,\"keamanan_4\":0,\"keamanan_5\":0,\"keselamatan_0\":0,\"keselamatan_1\":0,\"keselamatan_2\":0,\"keselamatan_3\":0,\"keselamatan_4\":0,\"keselamatan_5\":0,\"keselamatan_6\":0,\"keselamatan_7\":0,\"keselamatan_8\":0,\"stabilitas_0\":0,\"stabilitas_1\":0,\"stabilitas_2\":0,\"stabilitas_3\":0,\"stabilitas_4\":0,\"stabilitas_5\":0,\"stabilitas_6\":0,\"stabilitas_7\":0,\"kemasyarakatan_0\":0,\"kemasyarakatan_1\":0,\"kemasyarakatan_2\":0,\"kemasyarakatan_3\":0,\"kemasyarakatan_4\":0,\"kemasyarakatan_5\":0,\"kemasyarakatan_6\":0,\"kemasyarakatan_7\":0,\"penilaian\":\"-\",\"petugas\":\"-\",\"lokasi\":\"-\",\"napi\":\"-\",\"jenisKelamin\":\"-\",\"tempatLahir\":\"-\",\"tanggalLahir\":\"-\",\"usia\":\"-\",\"pendidikan\":\"-\",\"pekerjaan\":\"-\",\"domisili\":\"-\",\"status\":\"-\",\"etnis\":\"-\",\"pengulangan\":\"-\",\"frekuensi\":\"-\",\"frekuensiNon\":\"-\",\"pelanggaran\":\"-\",\"programPembinaan\":\"-\",\"kemandirian\":\"-\",\"keahlian\":\"-\",\"penyakit\":\"-\",\"catatanKeamanan\":\"-\",\"catatanKeselamatan\":\"-\",\"catatanStabilitas\":\"-\",\"catatanKemasyarakatan\":\"-\"}', '1635188448628', 'indonesiamaju99');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `database_eb8556286f0a7de3e1fec0c5eb44b5a4`
--
ALTER TABLE `database_eb8556286f0a7de3e1fec0c5eb44b5a4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `database_eb8556286f0a7de3e1fec0c5eb44b5a4`
--
ALTER TABLE `database_eb8556286f0a7de3e1fec0c5eb44b5a4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
