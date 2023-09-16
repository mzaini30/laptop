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
-- Struktur dari tabel `excalibur_sql`
--

CREATE TABLE `excalibur_sql` (
  `id` int(11) NOT NULL,
  `idDatabase` text DEFAULT NULL,
  `kunci` text DEFAULT NULL,
  `perintah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `excalibur_sql`
--

INSERT INTO `excalibur_sql` (`id`, `idDatabase`, `kunci`, `perintah`) VALUES
(81, 'e4a752945e49226e46b98153c7ce6b87', 'hapus', 'delete from database_e4a752945e49226e46b98153c7ce6b87 where id = [idnya]'),
(191, 'ca04a5e26b59240a3a022aa16ad3c0d0', 'semua-data', 'select * from database_ca04a5e26b59240a3a022aa16ad3c0d0 order by id desc limit 1'),
(192, 'ca04a5e26b59240a3a022aa16ad3c0d0', 'tambah', 'insert into database_ca04a5e26b59240a3a022aa16ad3c0d0 (mau, makan) values ([pertama], [kedua])'),
(193, 'ca04a5e26b59240a3a022aa16ad3c0d0', 'hapus-semua', 'delete from database_ca04a5e26b59240a3a022aa16ad3c0d0'),
(194, '769d63b68b4db8645cbffcc203b2bc89', 'cek-password', 'select count(*) as banyak from database_769d63b68b4db8645cbffcc203b2bc89 where username = [username] and password = [password]'),
(195, '769d63b68b4db8645cbffcc203b2bc89', 'ambil', 'select * from database_769d63b68b4db8645cbffcc203b2bc89 where username = [username] and password = [password]'),
(196, 'bd6753a7be2017e4e41aa8a2cccea8ae', 'cek', 'select count(*) as banyak from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]'),
(248, '428d730dd74d0ee6720f8585796ace16', 'kirim', 'insert into database_428d730dd74d0ee6720f8585796ace16 (nama, email, blog, komentar, slug) values ([nama], [email], [blog], [komentar], [slug])'),
(249, '428d730dd74d0ee6720f8585796ace16', 'ambil', 'select nama, email, blog, komentar from database_428d730dd74d0ee6720f8585796ace16 where slug = [slug] order by id'),
(250, '428d730dd74d0ee6720f8585796ace16', 'terbaru', 'select nama, email, slug, komentar from database_428d730dd74d0ee6720f8585796ace16 where nama <> \'Zen\' order by id desc limit 5'),
(251, '05636fa7c9c34647f52131ab8cf132b2', 'terbaru', 'select judul, tanggal, slug from database_05636fa7c9c34647f52131ab8cf132b2 order by id desc limit 3'),
(252, '05636fa7c9c34647f52131ab8cf132b2', 'terbaru-website', 'select judul, tanggal, slug from database_05636fa7c9c34647f52131ab8cf132b2 where judul like \'Web:%\' order by id desc limit 3'),
(253, '05636fa7c9c34647f52131ab8cf132b2', 'acak', 'select judul, slug, tanggal from database_05636fa7c9c34647f52131ab8cf132b2 order by rand() limit 3'),
(254, '05636fa7c9c34647f52131ab8cf132b2', 'acak-tertentu', 'select judul, slug, tanggal from database_05636fa7c9c34647f52131ab8cf132b2 where slug <> [slug] order by rand() limit 3'),
(255, '05636fa7c9c34647f52131ab8cf132b2', 'ambil-postingan', 'select judul, tanggal, isi from database_05636fa7c9c34647f52131ab8cf132b2 where slug = [slug]'),
(256, '05636fa7c9c34647f52131ab8cf132b2', 'semua-postingan', 'select judul, tanggal, slug from database_05636fa7c9c34647f52131ab8cf132b2 order by id desc'),
(257, '05636fa7c9c34647f52131ab8cf132b2', 'cari', 'select judul, tanggal, slug from database_05636fa7c9c34647f52131ab8cf132b2 where judul like [cari] or isi like [cari] order by judul'),
(258, '05636fa7c9c34647f52131ab8cf132b2', 'tulis', 'insert into database_05636fa7c9c34647f52131ab8cf132b2 (judul, tanggal, slug, isi) values ([judul], [tanggal], [slug], [isi])'),
(259, '05636fa7c9c34647f52131ab8cf132b2', 'ubah', 'update database_05636fa7c9c34647f52131ab8cf132b2 set judul = [judul], isi = [isi] where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0'),
(260, '05636fa7c9c34647f52131ab8cf132b2', 'hapus', 'delete from database_05636fa7c9c34647f52131ab8cf132b2 where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0'),
(270, '06eff6933f1004da5614a47edad6bea9', 'tambah', 'insert into database_06eff6933f1004da5614a47edad6bea9 (nama, email, blog, komentar, slug) values ([nama], [email], [blog], [komentar], [slug])'),
(271, '06eff6933f1004da5614a47edad6bea9', 'ambil', 'select nama, email, blog, komentar from database_06eff6933f1004da5614a47edad6bea9 where slug = [slug]'),
(353, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ambil-semua', 'select judul, slug, gambar, deskripsi from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 order by id desc'),
(354, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ambil-slug', 'select slug from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 order by id desc'),
(355, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'acak', 'select judul, slug, gambar from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 order by rand() limit 10'),
(356, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ambil', 'select judul, gambar, isi, tanggal from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 where slug = [slug]'),
(357, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ambil-html', 'select judul, gambar, html, tanggal from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 where slug = [slug]'),
(358, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ambil-meta', 'select judul, gambar, deskripsi from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 where slug = [slug]'),
(359, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ambil-edit', 'select judul, isi, label from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 where slug = [slug]'),
(360, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ringkasan', 'select judul, slug from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 order by id desc'),
(361, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'tambah', 'insert into database_e8286ab0f7b2fa5e0ebf06ff33ba5312 (judul, slug, gambar, deskripsi, isi, label, tanggal, html) values ([judul], [slug], [gambar], [deskripsi], [isi], [label], [tanggal], [html])'),
(362, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ubah', 'update database_e8286ab0f7b2fa5e0ebf06ff33ba5312 set judul = [judul], gambar = [gambar], deskripsi = [deskripsi], isi = [isi], html = [html], label = [label] where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0'),
(363, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'hapus', 'delete from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0'),
(364, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'semua-label', 'select distinct label from database_e8286ab0f7b2fa5e0ebf06ff33ba5312 order by label'),
(425, 'ef2642b6d0f594884785f76c1880c141', 'tambah', 'insert into database_ef2642b6d0f594884785f76c1880c141 (nama, nip, golongan, tempatBertugas, jabatan, email, hp, password, isAktif, role) values ([nama], [nip], [golongan], [tempatBertugas], [jabatan], [email], [hp], [password], \'false\', \'user\')'),
(426, 'ef2642b6d0f594884785f76c1880c141', 'cek-password', 'select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [username] and password = [password] and isAktif = \'true\''),
(427, 'ef2642b6d0f594884785f76c1880c141', 'ambil', 'select * from database_ef2642b6d0f594884785f76c1880c141 where nip = [username] and password = [password]'),
(428, 'ef2642b6d0f594884785f76c1880c141', 'ambil-data', 'select * from database_ef2642b6d0f594884785f76c1880c141 where role = \'user\' and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [username] and password = [password] and role = \'superuser\') > 0 order by id desc'),
(429, 'ef2642b6d0f594884785f76c1880c141', 'aktifkan', 'update database_ef2642b6d0f594884785f76c1880c141 set isAktif = \'true\' where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [username] and password = [password] and role = \'superuser\') > 0'),
(430, 'ef2642b6d0f594884785f76c1880c141', 'matikan', 'update database_ef2642b6d0f594884785f76c1880c141 set isAktif = \'false\' where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [username] and password = [password] and role = \'superuser\') > 0'),
(431, 'ef2642b6d0f594884785f76c1880c141', 'hapus', 'delete from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [username] and password = [password] and role = \'superuser\') > 0'),
(440, '64024aec1399745f41f18cb590aa2d77', 'kirim', 'insert into database_64024aec1399745f41f18cb590aa2d77 (nama, waktu, rincian, tempat) values ([nama], [waktu], [rincian], [tempat])'),
(441, '64024aec1399745f41f18cb590aa2d77', 'lihat', 'select * from database_64024aec1399745f41f18cb590aa2d77 where (select count(*) from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 order by id desc'),
(442, '64024aec1399745f41f18cb590aa2d77', 'hapus', 'delete from database_64024aec1399745f41f18cb590aa2d77 where id = [idnya] and (select count(*) from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 '),
(443, '88e9ed8a9c050c6759e52e785ac1ab63', 'cek', 'select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]'),
(490, '906e1fa45455539959330336d893ae76', 'baru', 'insert into database_906e1fa45455539959330336d893ae76 (nama, nis, pencapaianJuz, pencapaianAyat, targetRencana, targetDiperoleh, persentase, keterangan, bulan) values ([nama], [nis], [pencapaianJuz], [pencapaianAyat], [targetRencana], [targetDiperoleh], [persentase], [keterangan], [bulan])'),
(491, '906e1fa45455539959330336d893ae76', 'ambil', 'select nama, bulan, keterangan from database_906e1fa45455539959330336d893ae76 where (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 order by id desc'),
(492, '906e1fa45455539959330336d893ae76', 'pencapaian-terakhir', 'select pencapaianAyat from database_906e1fa45455539959330336d893ae76 where nis = [nis] and (select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nis] and password = [password]) > 0 order by id desc limit 1'),
(493, '906e1fa45455539959330336d893ae76', 'bulan', 'select bulan from database_906e1fa45455539959330336d893ae76 where nis = [nis] and (select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nis] and password = [password]) > 0 order by id desc'),
(494, '906e1fa45455539959330336d893ae76', 'ambil-wali-santri', 'select * from database_906e1fa45455539959330336d893ae76 where nis = [nis] and bulan = [bulan] and (select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nis] and password = [password]) > 0'),
(495, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'ambil', 'select * from database_ccbdbadb1ffd312cc2ca7355e72efbaf where (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 order by nomorInduk'),
(496, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'cek', 'select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nomorInduk] and password = [password]'),
(497, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'ubah-password', 'update database_ccbdbadb1ffd312cc2ca7355e72efbaf set password = [passwordBaru] where nomorInduk = [nomorInduk] and password = [passwordLama]'),
(498, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'ambil-wali-santri', 'select * from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nomorInduk] and password = [password]'),
(499, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'ada-nggak', 'select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 and nomorInduk = [nomorInduk]'),
(500, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'update', 'update database_ccbdbadb1ffd312cc2ca7355e72efbaf set namaSantri = [namaSantri], telepon = [telepon], tempatTanggalLahir = [tempatTanggalLahir], jenisKelamin = [jenisKelamin], anakKe = [anakKe], statusDiKeluarga = [statusDiKeluarga], alamat = [alamat], alamatOrangTua = [alamatOrangTua], ayah = [ayah], pekerjaanAyah = [pekerjaanAyah], ibu = [ibu], pekerjaanIbu = [pekerjaanIbu], diMarhalah = [diMarhalah], padaTanggal = [padaTanggal], semester = [semester], sekolahAsal = [sekolahAsal], email = [email] where nomorInduk = [nomorInduk] and (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0'),
(501, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'tambah', 'insert into database_ccbdbadb1ffd312cc2ca7355e72efbaf (namaSantri, nomorInduk, telepon, tempatTanggalLahir, jenisKelamin, anakKe, statusDiKeluarga, alamat, alamatOrangTua, ayah, pekerjaanAyah, ibu, pekerjaanIbu, diMarhalah, padaTanggal, semester, sekolahAsal, email, password) values ([namaSantri], [nomorInduk], [telepon], [tempatTanggalLahir], [jenisKelamin], [anakKe], [statusDiKeluarga], [alamat], [alamatOrangTua], [ayah], [pekerjaanAyah], [ibu], [pekerjaanIbu], [diMarhalah], [padaTanggal], [semester], [sekolahAsal], [email], [password])'),
(507, '29d21738c86bf07c8bd6da319be777e3', 'cek', 'select count(*) as banyak from database_29d21738c86bf07c8bd6da319be777e3 where singkatan = [singkatan]'),
(508, '29d21738c86bf07c8bd6da319be777e3', 'tambah', 'insert into database_29d21738c86bf07c8bd6da319be777e3 (tujuan, singkatan) values ([tujuan], [singkatan])'),
(509, '29d21738c86bf07c8bd6da319be777e3', 'dapatkan', 'select tujuan from database_29d21738c86bf07c8bd6da319be777e3 where singkatan = [singkatan]'),
(510, 'f8bb0177ab874b50c569b1622c2e3171', 'cek', 'select count(*) as banyak from database_f8bb0177ab874b50c569b1622c2e3171 where username = [username] and password = [password]'),
(538, '5151d85d088d963b2427c088d5daa42f', 'dapatkan', 'select * from database_5151d85d088d963b2427c088d5daa42f where slug = [slug] order by id desc'),
(539, '5151d85d088d963b2427c088d5daa42f', 'tambah', 'insert into database_5151d85d088d963b2427c088d5daa42f (support, slug) values ([support], [slug])'),
(540, 'd4a1b7365f4bd4b378112b4d1978883d', 'tambah', 'insert into database_d4a1b7365f4bd4b378112b4d1978883d (judul, markdown, html, slug, tanggal, cuplikan) values ([judul], [markdown], [html], [slug], [tanggal], [cuplikan])'),
(541, 'd4a1b7365f4bd4b378112b4d1978883d', 'dapatkan', 'select * from database_d4a1b7365f4bd4b378112b4d1978883d where slug = [slug]'),
(542, 'd4a1b7365f4bd4b378112b4d1978883d', 'update', 'update database_d4a1b7365f4bd4b378112b4d1978883d set judul = [judul], markdown = [markdown], html = [html], cuplikan = [cuplikan] where slug = [slug] and (select count(*) from database_f8bb0177ab874b50c569b1622c2e3171 where username = [username] and password = [password]) > 0'),
(543, 'd4a1b7365f4bd4b378112b4d1978883d', 'hapus', 'delete from database_d4a1b7365f4bd4b378112b4d1978883d where slug = [slug] and (select count(*) from database_f8bb0177ab874b50c569b1622c2e3171 where username = [username] and password = [password]) > 0'),
(544, 'd4a1b7365f4bd4b378112b4d1978883d', 'list', 'select judul, slug from database_d4a1b7365f4bd4b378112b4d1978883d order by id desc'),
(545, 'd4a1b7365f4bd4b378112b4d1978883d', 'list-beranda', 'select judul, slug, cuplikan from database_d4a1b7365f4bd4b378112b4d1978883d order by id desc'),
(546, 'd4a1b7365f4bd4b378112b4d1978883d', 'slug-aja', 'select slug from database_d4a1b7365f4bd4b378112b4d1978883d order by id desc'),
(547, '056dc92427aaf532f44750714eb71fd2', 'tambah', 'insert into database_056dc92427aaf532f44750714eb71fd2 (teks) values ([teks])'),
(553, 'b6819508aac90ec4f5bab5dbf73096d1', 'tambah', 'insert into database_b6819508aac90ec4f5bab5dbf73096d1 (teks, idnya) values([teks], [idnya])'),
(554, 'b6819508aac90ec4f5bab5dbf73096d1', 'cek', 'select count(*) as banyak from database_b6819508aac90ec4f5bab5dbf73096d1 where idnya = [idnya]'),
(555, 'b6819508aac90ec4f5bab5dbf73096d1', 'ambil', 'select teks from database_b6819508aac90ec4f5bab5dbf73096d1 where idnya = [idnya]'),
(556, '7e985078dc3b0ead5d951124381a4f7e', 'cek', 'select count(*) as banyak from database_7e985078dc3b0ead5d951124381a4f7e where password = [password]'),
(557, '7c7ccdc1b8543e4f0a566fb13f4921fb', 'tambahkan', 'insert into database_7c7ccdc1b8543e4f0a566fb13f4921fb (nama, event, sebagai) values ([nama], [event], [sebagai])'),
(568, 'c2f23ea6d3c3293dd891f7002d68a4c4', 'tambahkan', 'insert into database_c2f23ea6d3c3293dd891f7002d68a4c4 (idnya, nama, event, sebagai) values ([idnya], [nama], [event], [sebagai])'),
(569, 'c2f23ea6d3c3293dd891f7002d68a4c4', 'cek', 'select count(*) as banyak from database_c2f23ea6d3c3293dd891f7002d68a4c4 where idnya = [idnya]'),
(570, 'c2f23ea6d3c3293dd891f7002d68a4c4', 'ambil-user', 'select * from database_c2f23ea6d3c3293dd891f7002d68a4c4 where idnya = [idnya]'),
(571, 'c2f23ea6d3c3293dd891f7002d68a4c4', 'ambil', 'select * from database_c2f23ea6d3c3293dd891f7002d68a4c4 where (select count(*) from database_7e985078dc3b0ead5d951124381a4f7e where password = [password]) > 0 order by id desc'),
(572, 'c2f23ea6d3c3293dd891f7002d68a4c4', 'hapus', 'delete from database_c2f23ea6d3c3293dd891f7002d68a4c4 where idnya = [idnya] and (select count(*) from database_7e985078dc3b0ead5d951124381a4f7e where password = [password]) > 0'),
(573, '338f55f06b2a93a28bb60d0dbc8b3b9e', 'cek', 'select count(*) as banyak from database_338f55f06b2a93a28bb60d0dbc8b3b9e where link = [link]'),
(574, '338f55f06b2a93a28bb60d0dbc8b3b9e', 'tambah', 'insert into database_338f55f06b2a93a28bb60d0dbc8b3b9e (link) values ([link])'),
(575, '338f55f06b2a93a28bb60d0dbc8b3b9e', 'tampil', 'select link from database_338f55f06b2a93a28bb60d0dbc8b3b9e order by link'),
(585, 'c0fb8f8ac2d58d9af14156671038df78', 'cek', 'select count(*) as banyak from database_c0fb8f8ac2d58d9af14156671038df78 where link = [link]'),
(586, 'c0fb8f8ac2d58d9af14156671038df78', 'tambah', 'insert into database_c0fb8f8ac2d58d9af14156671038df78 (link) values ([link])'),
(587, 'c0fb8f8ac2d58d9af14156671038df78', 'tampil', 'select distinct link from database_c0fb8f8ac2d58d9af14156671038df78 where link <> \'http://localhost:3000\' and link <> \'http://localhost:5000\' order by link'),
(592, 'eb8556286f0a7de3e1fec0c5eb44b5a4', 'kirim', 'insert into database_eb8556286f0a7de3e1fec0c5eb44b5a4 (acak, data, deadline, nip) values ([acak], [data], [deadline], [nip])'),
(593, 'eb8556286f0a7de3e1fec0c5eb44b5a4', 'dapatkan', 'select acak, data, deadline from database_eb8556286f0a7de3e1fec0c5eb44b5a4 where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 order by id desc'),
(594, 'eb8556286f0a7de3e1fec0c5eb44b5a4', 'hapus', 'delete from database_eb8556286f0a7de3e1fec0c5eb44b5a4 where (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 and acak = [acak]'),
(595, '864a1488b62b77a3d01a8b3928152ef2', 'kirim', 'insert into database_864a1488b62b77a3d01a8b3928152ef2 (acak, data, deadline, nip) values ([acak], [data], [deadline], [nip])'),
(596, '864a1488b62b77a3d01a8b3928152ef2', 'dapatkan', 'select acak, data, deadline from database_864a1488b62b77a3d01a8b3928152ef2 where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 order by id desc'),
(597, '864a1488b62b77a3d01a8b3928152ef2', 'hapus', 'delete from database_864a1488b62b77a3d01a8b3928152ef2 where (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 and acak = [acak]'),
(598, '982169367a457fd91d47a2053d22677b', 'kirim', 'insert into database_982169367a457fd91d47a2053d22677b (acak, data, deadline, nip) values ([acak], [data], [deadline], [nip])'),
(599, '982169367a457fd91d47a2053d22677b', 'dapatkan', 'select acak, data, deadline from database_982169367a457fd91d47a2053d22677b where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 order by id desc'),
(600, '982169367a457fd91d47a2053d22677b', 'hapus', 'delete from database_982169367a457fd91d47a2053d22677b where (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 and acak = [acak]');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `excalibur_sql`
--
ALTER TABLE `excalibur_sql`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `excalibur_sql`
--
ALTER TABLE `excalibur_sql`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
