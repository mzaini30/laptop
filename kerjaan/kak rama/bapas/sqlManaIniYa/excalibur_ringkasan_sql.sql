-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Okt 2021 pada 03.05
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
-- Struktur dari tabel `excalibur_ringkasan_sql`
--

CREATE TABLE `excalibur_ringkasan_sql` (
  `id` int(11) NOT NULL,
  `idDatabase` text DEFAULT NULL,
  `semuaSql` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `excalibur_ringkasan_sql`
--

INSERT INTO `excalibur_ringkasan_sql` (`id`, `idDatabase`, `semuaSql`) VALUES
(1, 'ca04a5e26b59240a3a022aa16ad3c0d0', 'semua-data\r\nselect * from [db] order by id desc limit 1\r\n\r\ntambah\r\ninsert into [db] (mau, makan) values ([pertama], [kedua])\r\n\r\nhapus-semua\r\ndelete from [db]'),
(2, '769d63b68b4db8645cbffcc203b2bc89', 'cek-password\r\nselect count(*) as banyak from [db] where username = [username] and password = [password]\r\n\r\nambil\r\nselect * from [db] where username = [username] and password = [password]'),
(3, 'faab15b77f0b28351daf679451f3f6ac', NULL),
(4, 'bd6753a7be2017e4e41aa8a2cccea8ae', 'cek\r\nselect count(*) as banyak from [db] where username = [username] and password = [password]'),
(5, '05636fa7c9c34647f52131ab8cf132b2', 'terbaru\r\nselect judul, tanggal, slug from [db] order by id desc limit 3\r\n\r\nterbaru-website\r\nselect judul, tanggal, slug from [db] where judul like \'Web:%\' order by id desc limit 3\r\n\r\nacak\r\nselect judul, slug, tanggal from [db] order by rand() limit 3\r\n\r\nacak-tertentu\r\nselect judul, slug, tanggal from [db] where slug <> [slug] order by rand() limit 3\r\n\r\nambil-postingan\r\nselect judul, tanggal, isi from [db] where slug = [slug]\r\n\r\nsemua-postingan\r\nselect judul, tanggal, slug from [db] order by id desc\r\n\r\ncari\r\nselect judul, tanggal, slug from [db] where judul like [cari] or isi like [cari] order by judul\r\n\r\ntulis\r\ninsert into [db] (judul, tanggal, slug, isi) values ([judul], [tanggal], [slug], [isi])\r\n\r\nubah\r\nupdate [db] set judul = [judul], isi = [isi] where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0\r\n\r\nhapus\r\ndelete from [db] where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0'),
(6, '3ca9442156a8576f69d551c74b2c67f1', NULL),
(7, '7be7eca95d8c5a409fd79490e6024ca0', NULL),
(8, 'e4a752945e49226e46b98153c7ce6b87', 'hapus\r\ndelete from [db] where id = [idnya]'),
(9, '90d388c2732ffcc053f085376bf85159', NULL),
(10, '428d730dd74d0ee6720f8585796ace16', 'kirim\r\ninsert into [db] (nama, email, blog, komentar, slug) values ([nama], [email], [blog], [komentar], [slug])\r\n\r\nambil\r\nselect nama, email, blog, komentar from [db] where slug = [slug] order by id\r\n\r\nterbaru\r\nselect nama, email, slug, komentar from [db] where nama <> \'Zen\' order by id desc limit 5'),
(11, '06eff6933f1004da5614a47edad6bea9', 'tambah\r\ninsert into [db] (nama, email, blog, komentar, slug) values ([nama], [email], [blog], [komentar], [slug])\r\n\r\nambil\r\nselect nama, email, blog, komentar from [db] where slug = [slug]'),
(12, 'e8286ab0f7b2fa5e0ebf06ff33ba5312', 'ambil-semua\r\nselect judul, slug, gambar, deskripsi from [db] order by id desc\r\n\r\nambil-slug\r\nselect slug from [db] order by id desc\r\n\r\nacak\r\nselect judul, slug, gambar from [db] order by rand() limit 10\r\n\r\nambil\r\nselect judul, gambar, isi, tanggal from [db] where slug = [slug]\r\n\r\nambil-html\r\nselect judul, gambar, html, tanggal from [db] where slug = [slug]\r\n\r\nambil-meta\r\nselect judul, gambar, deskripsi from [db] where slug = [slug]\r\n\r\nambil-edit\r\nselect judul, isi, label from [db] where slug = [slug]\r\n\r\nringkasan\r\nselect judul, slug from [db] order by id desc\r\n\r\ntambah\r\ninsert into [db] (judul, slug, gambar, deskripsi, isi, label, tanggal, html) values ([judul], [slug], [gambar], [deskripsi], [isi], [label], [tanggal], [html])\r\n\r\nubah\r\nupdate [db] set judul = [judul], gambar = [gambar], deskripsi = [deskripsi], isi = [isi], html = [html], label = [label] where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0\r\n\r\nhapus\r\ndelete from [db] where slug = [slug] and (select count(*) from database_bd6753a7be2017e4e41aa8a2cccea8ae where username = [username] and password = [password]) > 0\r\n\r\nsemua-label\r\nselect distinct label from [db] order by label'),
(13, '85c3563a3bea0ea182a7428807953675', NULL),
(14, 'ef2642b6d0f594884785f76c1880c141', 'tambah\r\ninsert into [db] (nama, nip, golongan, tempatBertugas, jabatan, email, hp, password, isAktif, role) values ([nama], [nip], [golongan], [tempatBertugas], [jabatan], [email], [hp], [password], \'false\', \'user\')\r\n\r\ncek-password\r\nselect count(*) as banyak from [db] where nip = [username] and password = [password] and isAktif = \'true\'\r\n\r\nambil\r\nselect * from [db] where nip = [username] and password = [password]\r\n\r\nambil-data\r\nselect * from [db] where role = \'user\' and (select count(*) as banyak from [db] where nip = [username] and password = [password] and role = \'superuser\') > 0 order by id desc\r\n\r\naktifkan\r\nupdate [db] set isAktif = \'true\' where nip = [nip] and (select count(*) as banyak from [db] where nip = [username] and password = [password] and role = \'superuser\') > 0\r\n\r\nmatikan\r\nupdate [db] set isAktif = \'false\' where nip = [nip] and (select count(*) as banyak from [db] where nip = [username] and password = [password] and role = \'superuser\') > 0\r\n\r\nhapus\r\ndelete from [db] where nip = [nip] and (select count(*) as banyak from [db] where nip = [username] and password = [password] and role = \'superuser\') > 0'),
(15, '864a1488b62b77a3d01a8b3928152ef2', 'kirim\r\ninsert into [db] (acak, data, deadline, nip) values ([acak], [data], [deadline], [nip])\r\n\r\ndapatkan\r\nselect acak, data, deadline from [db] where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 order by id desc\r\n\r\nhapus\r\ndelete from [db] where (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 and acak = [acak]'),
(16, 'eb8556286f0a7de3e1fec0c5eb44b5a4', 'kirim\r\ninsert into [db] (acak, data, deadline, nip) values ([acak], [data], [deadline], [nip])\r\n\r\ndapatkan\r\nselect acak, data, deadline from [db] where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 order by id desc\r\n\r\nhapus\r\ndelete from [db] where (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 and acak = [acak]'),
(17, '982169367a457fd91d47a2053d22677b', 'kirim\r\ninsert into [db] (acak, data, deadline, nip) values ([acak], [data], [deadline], [nip])\r\n\r\ndapatkan\r\nselect acak, data, deadline from [db] where nip = [nip] and (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 order by id desc\r\n\r\nhapus\r\ndelete from [db] where (select count(*) as banyak from database_ef2642b6d0f594884785f76c1880c141 where nip = [nip] and password = [password]) > 0 and acak = [acak]'),
(18, '64024aec1399745f41f18cb590aa2d77', 'kirim\r\ninsert into [db] (nama, waktu, rincian, tempat) values ([nama], [waktu], [rincian], [tempat])\r\n\r\nlihat\r\nselect * from [db] where (select count(*) from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 order by id desc\r\n\r\nhapus\r\ndelete from [db] where id = [idnya] and (select count(*) from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 '),
(19, '88e9ed8a9c050c6759e52e785ac1ab63', 'cek\r\nselect count(*) as banyak from [db] where password = [password]'),
(20, 'ccbdbadb1ffd312cc2ca7355e72efbaf', 'ambil\r\nselect * from [db] where (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 order by nomorInduk\r\n\r\ncek\r\nselect count(*) as banyak from [db] where nomorInduk = [nomorInduk] and password = [password]\r\n\r\nubah-password\r\nupdate [db] set password = [passwordBaru] where nomorInduk = [nomorInduk] and password = [passwordLama]\r\n\r\nambil-wali-santri\r\nselect * from [db] where nomorInduk = [nomorInduk] and password = [password]\r\n\r\nada-nggak\r\nselect count(*) as banyak from [db] where (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 and nomorInduk = [nomorInduk]\r\n\r\nupdate\r\nupdate [db] set namaSantri = [namaSantri], telepon = [telepon], tempatTanggalLahir = [tempatTanggalLahir], jenisKelamin = [jenisKelamin], anakKe = [anakKe], statusDiKeluarga = [statusDiKeluarga], alamat = [alamat], alamatOrangTua = [alamatOrangTua], ayah = [ayah], pekerjaanAyah = [pekerjaanAyah], ibu = [ibu], pekerjaanIbu = [pekerjaanIbu], diMarhalah = [diMarhalah], padaTanggal = [padaTanggal], semester = [semester], sekolahAsal = [sekolahAsal], email = [email] where nomorInduk = [nomorInduk] and (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0\r\n\r\ntambah\r\ninsert into [db] (namaSantri, nomorInduk, telepon, tempatTanggalLahir, jenisKelamin, anakKe, statusDiKeluarga, alamat, alamatOrangTua, ayah, pekerjaanAyah, ibu, pekerjaanIbu, diMarhalah, padaTanggal, semester, sekolahAsal, email, password) values ([namaSantri], [nomorInduk], [telepon], [tempatTanggalLahir], [jenisKelamin], [anakKe], [statusDiKeluarga], [alamat], [alamatOrangTua], [ayah], [pekerjaanAyah], [ibu], [pekerjaanIbu], [diMarhalah], [padaTanggal], [semester], [sekolahAsal], [email], [password])'),
(21, '906e1fa45455539959330336d893ae76', 'baru\r\ninsert into [db] (nama, nis, pencapaianJuz, pencapaianAyat, targetRencana, targetDiperoleh, persentase, keterangan, bulan) values ([nama], [nis], [pencapaianJuz], [pencapaianAyat], [targetRencana], [targetDiperoleh], [persentase], [keterangan], [bulan])\r\n\r\nambil\r\nselect nama, bulan, keterangan from [db] where (select count(*) as banyak from database_88e9ed8a9c050c6759e52e785ac1ab63 where password = [password]) > 0 order by id desc\r\n\r\npencapaian-terakhir\r\nselect pencapaianAyat from [db] where nis = [nis] and (select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nis] and password = [password]) > 0 order by id desc limit 1\r\n\r\nbulan\r\nselect bulan from [db] where nis = [nis] and (select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nis] and password = [password]) > 0 order by id desc\r\n\r\nambil-wali-santri\r\nselect * from [db] where nis = [nis] and bulan = [bulan] and (select count(*) as banyak from database_ccbdbadb1ffd312cc2ca7355e72efbaf where nomorInduk = [nis] and password = [password]) > 0'),
(22, '29d21738c86bf07c8bd6da319be777e3', 'cek\r\nselect count(*) as banyak from [db] where singkatan = [singkatan]\r\n\r\ntambah\r\ninsert into [db] (tujuan, singkatan) values ([tujuan], [singkatan])\r\n\r\ndapatkan\r\nselect tujuan from [db] where singkatan = [singkatan]'),
(23, 'f8bb0177ab874b50c569b1622c2e3171', 'cek\r\nselect count(*) as banyak from [db] where username = [username] and password = [password]'),
(24, 'd4a1b7365f4bd4b378112b4d1978883d', 'tambah\r\ninsert into [db] (judul, markdown, html, slug, tanggal, cuplikan) values ([judul], [markdown], [html], [slug], [tanggal], [cuplikan])\r\n\r\ndapatkan\r\nselect * from [db] where slug = [slug]\r\n\r\nupdate\r\nupdate [db] set judul = [judul], markdown = [markdown], html = [html], cuplikan = [cuplikan] where slug = [slug] and (select count(*) from database_f8bb0177ab874b50c569b1622c2e3171 where username = [username] and password = [password]) > 0\r\n\r\nhapus\r\ndelete from [db] where slug = [slug] and (select count(*) from database_f8bb0177ab874b50c569b1622c2e3171 where username = [username] and password = [password]) > 0\r\n\r\nlist\r\nselect judul, slug from [db] order by id desc\r\n\r\nlist-beranda\r\nselect judul, slug, cuplikan from [db] order by id desc\r\n\r\nslug-aja\r\nselect slug from [db] order by id desc'),
(25, '5151d85d088d963b2427c088d5daa42f', 'dapatkan\r\nselect * from [db] where slug = [slug] order by id desc\r\n\r\ntambah\r\ninsert into [db] (support, slug) values ([support], [slug])'),
(26, '056dc92427aaf532f44750714eb71fd2', 'tambah\r\ninsert into [db] (teks) values ([teks])'),
(27, 'b6819508aac90ec4f5bab5dbf73096d1', 'tambah\r\ninsert into [db] (teks, idnya) values([teks], [idnya])\r\n\r\ncek\r\nselect count(*) as banyak from [db] where idnya = [idnya]\r\n\r\nambil\r\nselect teks from [db] where idnya = [idnya]'),
(28, '7e985078dc3b0ead5d951124381a4f7e', 'cek\r\nselect count(*) as banyak from [db] where password = [password]'),
(29, '7c7ccdc1b8543e4f0a566fb13f4921fb', 'tambahkan\r\ninsert into [db] (nama, event, sebagai) values ([nama], [event], [sebagai])'),
(30, 'c2f23ea6d3c3293dd891f7002d68a4c4', 'tambahkan\r\ninsert into [db] (idnya, nama, event, sebagai) values ([idnya], [nama], [event], [sebagai])\r\n\r\ncek\r\nselect count(*) as banyak from [db] where idnya = [idnya]\r\n\r\nambil-user\r\nselect * from [db] where idnya = [idnya]\r\n\r\nambil\r\nselect * from [db] where (select count(*) from database_7e985078dc3b0ead5d951124381a4f7e where password = [password]) > 0 order by id desc\r\n\r\nhapus\r\ndelete from [db] where idnya = [idnya] and (select count(*) from database_7e985078dc3b0ead5d951124381a4f7e where password = [password]) > 0'),
(31, '338f55f06b2a93a28bb60d0dbc8b3b9e', 'cek\r\nselect count(*) as banyak from [db] where link = [link]\r\n\r\ntambah\r\ninsert into [db] (link) values ([link])\r\n\r\ntampil\r\nselect link from [db] order by link'),
(32, 'c0fb8f8ac2d58d9af14156671038df78', 'cek\r\nselect count(*) as banyak from [db] where link = [link]\r\n\r\ntambah\r\ninsert into [db] (link) values ([link])\r\n\r\ntampil\r\nselect distinct link from [db] where link <> \'http://localhost:3000\' and link <> \'http://localhost:5000\' order by link');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `excalibur_ringkasan_sql`
--
ALTER TABLE `excalibur_ringkasan_sql`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `excalibur_ringkasan_sql`
--
ALTER TABLE `excalibur_ringkasan_sql`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
