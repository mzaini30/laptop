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
-- Struktur dari tabel `database_982169367a457fd91d47a2053d22677b`
--

CREATE TABLE `database_982169367a457fd91d47a2053d22677b` (
  `id` int(11) NOT NULL,
  `acak` text DEFAULT NULL,
  `data` text DEFAULT NULL,
  `deadline` text DEFAULT NULL,
  `nip` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `database_982169367a457fd91d47a2053d22677b`
--

INSERT INTO `database_982169367a457fd91d47a2053d22677b` (`id`, `acak`, `data`, `deadline`, `nip`) VALUES
(2, '0.34366804141823626', '{\"rriBagianA\":[1,0,1,1,0,1,0,1,1,1],\"rriBagianB\":[],\"rriBagianC\":[],\"rriBagianD\":[],\"kriminogenikB1\":[0,1,0,1,1,0,0,1,1],\"kriminogenikB2\":[0,0,1,1,0,0,0,1],\"alasan\":\"Awal\",\"keterangan\":\"Penelitian Kemasyarakatan Tersangka Dewasa\",\"jenisKelamin\":\"Laki-laki\",\"jenisTindakPidana\":\"Politik\",\"petugas\":\"k\",\"napi\":\"jlk\",\"tanggal\":\"lkj\",\"namaKlien\":\"ljlj\",\"register\":\"kjl\",\"tanggalLahir\":\"jlk\",\"pembinaan\":\"jlk\",\"kriminogenikA_0_0\":0,\"kriminogenikA_0_1\":1,\"kriminogenikA_0_2\":1,\"kriminogenikA_1_0\":1,\"kriminogenikA_1_1\":1,\"kriminogenikA_1_2\":0,\"kriminogenikA_1_3\":0,\"kriminogenikA_1_4\":0,\"kriminogenikA_1_5\":1,\"kriminogenikA_1_6\":2,\"kriminogenikA_1_7\":0,\"kriminogenikA_2_0\":1,\"kriminogenikA_2_1\":0,\"kriminogenikA_2_2\":1,\"kriminogenikA_2_3\":0,\"kriminogenikA_2_4\":1,\"kriminogenikA_2_5\":0,\"kriminogenikA_3_0\":0,\"kriminogenikA_3_1\":0,\"kriminogenikA_3_2\":0,\"kriminogenikA_3_3\":1,\"kriminogenikA_4_0\":1,\"kriminogenikA_4_1\":0,\"kriminogenikA_5_0\":1,\"kriminogenikA_5_1\":0,\"kriminogenikA_6_0\":0,\"kriminogenikA_6_1\":1,\"kriminogenikA_6_2\":1,\"kriminogenikA_6_3\":0,\"kriminogenikA_6_4\":1}', '1629454669582', '1502105051'),
(3, '0.9786244515807752', '{\"rriBagianA\":[],\"rriBagianB\":[],\"rriBagianC\":[],\"rriBagianD\":[],\"kriminogenikB1\":[],\"kriminogenikB2\":[],\"alasan\":\"Awal\",\"keterangan\":\"Penelitian Kemasyarakatan Tersangka Dewasa\",\"jenisKelamin\":\"Laki-laki\",\"jenisTindakPidana\":\"Politik\",\"petugas\":\"klajskfljlakfj\"}', '1629454836138', '1502105051'),
(4, '0.4012312747464757', '{\"rriBagianA\":[0],\"rriBagianB\":[],\"rriBagianC\":[],\"rriBagianD\":[],\"kriminogenikB1\":[],\"kriminogenikB2\":[],\"alasan\":\"Awal\",\"keterangan\":\"Penelitian Kemasyarakatan Tersangka Dewasa\",\"jenisKelamin\":\"Laki-laki\",\"jenisTindakPidana\":\"Politik\",\"petugas\":\"kljlkkjkljlkj\",\"napi\":\"jlkj\",\"tanggal\":\"lkjl\",\"namaKlien\":\"lkjlk\",\"register\":\"jklj\",\"tanggalLahir\":\"klj\",\"pembinaan\":\"lk\"}', '1630215283322', '1502105051'),
(5, '0.7260429814778968', '{\"rriBagianA\":[0,1,0,1,1,1,0,1,1,1],\"rriBagianB\":[],\"rriBagianC\":[],\"rriBagianD\":[],\"kriminogenikB1\":[1,0,1,0,1,1,0,1,0],\"kriminogenikB2\":[1,0,1,0,1,0,1,0],\"alasan\":\"Ulang\",\"keterangan\":\"Penelitian Kemasyarakatan Pemindahan\",\"jenisKelamin\":\"Laki-laki\",\"jenisTindakPidana\":\"Minyak dan Gas\",\"petugas\":\"Rudi\",\"napi\":\"Koko\",\"tanggal\":\"21 Desember 2021\",\"namaKlien\":\"Koko\",\"register\":\"12\",\"tanggalLahir\":\"2 Februari 1980\",\"pembinaan\":\"Samarinda Utara\",\"kriminogenikA_0_0\":0,\"kriminogenikA_0_1\":1,\"kriminogenikA_0_2\":2,\"kriminogenikA_1_0\":0,\"kriminogenikA_1_1\":1,\"kriminogenikA_1_2\":0,\"kriminogenikA_1_3\":0,\"kriminogenikA_1_4\":1,\"kriminogenikA_1_5\":1,\"kriminogenikA_1_6\":0,\"kriminogenikA_1_7\":2,\"kriminogenikA_2_0\":1,\"kriminogenikA_2_1\":0,\"kriminogenikA_2_2\":1,\"kriminogenikA_2_3\":0,\"kriminogenikA_2_4\":1,\"kriminogenikA_2_5\":0,\"kriminogenikA_3_0\":1,\"kriminogenikA_3_1\":0,\"kriminogenikA_3_2\":1,\"kriminogenikA_3_3\":1,\"kriminogenikA_4_0\":1,\"kriminogenikA_4_1\":1,\"kriminogenikA_5_0\":0,\"kriminogenikA_5_1\":1,\"kriminogenikA_6_0\":0,\"kriminogenikA_6_1\":1,\"kriminogenikA_6_2\":1,\"kriminogenikA_6_3\":0,\"kriminogenikA_6_4\":0}', '1630277963849', '1502105051'),
(6, '0.7138065140330538', '{\"rriBagianA\":[],\"rriBagianB\":[],\"rriBagianC\":[],\"rriBagianD\":[],\"kriminogenikB1\":[],\"kriminogenikB2\":[],\"alasan\":\"Awal\",\"keterangan\":\"Penelitian Kemasyarakatan Tersangka Dewasa\",\"jenisKelamin\":\"Perempuan\",\"jenisTindakPidana\":\"Narkoba/Psikotropika\"}', '1635146982018', '1502105051'),
(7, '0.702521985452909', '{\"rriBagianA\":[0,0,0,0,0,0,0,0,0,0],\"rriBagianB\":[0],\"rriBagianC\":[],\"rriBagianD\":[],\"kriminogenikB1\":[1,1,1,1,1,1,1,1,1],\"kriminogenikB2\":[1,1,1,1,1,1,1,1],\"alasan\":\"Awal\",\"keterangan\":\"Penelitian Kemasyarakatan Pembimbingan\",\"jenisKelamin\":\"Laki-laki\",\"jenisTindakPidana\":\"Korupsi\",\"petugas\":\"TAMYIS ADE RAMA, S.PSI.\",\"napi\":\"KUCING\",\"tanggal\":\"12 OKTOBER\",\"namaKlien\":\"KUCING\",\"register\":\"123466\",\"tanggalLahir\":\"12 OKTOBER\",\"pembinaan\":\"BAPAS\",\"kriminogenikA_0_0\":2,\"kriminogenikA_0_1\":2,\"kriminogenikA_0_2\":2,\"kriminogenikA_1_0\":1,\"kriminogenikA_1_1\":1,\"kriminogenikA_1_2\":1,\"kriminogenikA_1_3\":1,\"kriminogenikA_1_4\":1,\"kriminogenikA_1_5\":2,\"kriminogenikA_1_6\":2,\"kriminogenikA_1_7\":2,\"kriminogenikA_2_0\":1,\"kriminogenikA_2_1\":1,\"kriminogenikA_2_2\":1,\"kriminogenikA_2_3\":1,\"kriminogenikA_2_4\":1,\"kriminogenikA_2_5\":1,\"kriminogenikA_3_0\":1,\"kriminogenikA_3_1\":1,\"kriminogenikA_3_2\":1,\"kriminogenikA_3_3\":2,\"kriminogenikA_4_0\":1,\"kriminogenikA_4_1\":1,\"kriminogenikA_5_0\":1,\"kriminogenikA_5_1\":1,\"kriminogenikA_6_0\":1,\"kriminogenikA_6_1\":1,\"kriminogenikA_6_2\":1,\"kriminogenikA_6_3\":1,\"kriminogenikA_6_4\":1}', '1635147367455', '1502105051');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `database_982169367a457fd91d47a2053d22677b`
--
ALTER TABLE `database_982169367a457fd91d47a2053d22677b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `database_982169367a457fd91d47a2053d22677b`
--
ALTER TABLE `database_982169367a457fd91d47a2053d22677b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
