import { writeFileSync } from "fs";

let list = `
1. Guru Les Privat
2. Penulis Lepas
3. Pemandu Wisata Lokal
4. Pengajar Online
5. Konsultan Keuangan
6. Desainer Grafis Freelance
7. Fotografer Acara
8. Pekerjaan Menulis Konten
9. Pengemudi Rideshare (misalnya Uber, Gojek)
10. Menterjemahkan Teks
11. Pekerjaan Jasa Pengemasan dan Pengiriman
12. Menjahit dan Pekerjaan Jahit
13. Pelatih Kesehatan atau Personal Trainer
14. Pekerjaan Desain Interior
15. Jualan Online (E-commerce)
16. Pekerjaan Grafis 3D
17. Jasa Katering
18. Pekerjaan Pengasuh Hewan Peliharaan
19. Editor Video Lepas
20. Penata Rambut
21. Pekerjaan Desain Logo
22. Pekerjaan Penerjemahan
23. Pelatih Olahraga
24. Pengajar Musik
25. Jasa Kecantikan (MUA, Perawatan Kulit)
26. Konsultan Bisnis
27. Pekerjaan Pengembangan Website
28. Pengasuh Anak
29. Pekerjaan Menyewa Properti
30. Pekerjaan Penyiaran Podcast
31. Jasa Pijat
32. Pekerjaan Desain Baju
33. Fotografer Potret
34. Konsultan HR
35. Penyunting Konten Video
36. Penulis Blog
37. Pekerjaan Manajemen Acara
38. Jasa Perbaikan dan Pengecatan Rumah
39. Pekerjaan Menjual Barang-barang Antik
40. Pekerjaan Penjahit Pakaian Kustom
41. Pekerjaan Penelitian Online
42. Desainer Interior Rumah Kecil
43. Pekerjaan Menyulam
44. Pekerjaan Desain Website
45. Pekerjaan Pengembangan Aplikasi Mobile
46. Jualan Makanan Ringan
47. Pekerjaan Konsultan Pernikahan
48. Pekerjaan Penerjemahan Bahasa Tersumpah
49. Jasa Penataan Rumah (Decluttering)
50. Pekerjaan Pengelola Media Sosial
51. Jasa Pembersihan Rumah
52. Pekerjaan Desain Brosur
53. Pekerjaan Perencanaan Acara
54. Penyedia Jasa Kebersihan dan Tata Ruang Kantor
55. Pekerjaan Penulis Teknis
56. Pekerjaan Jualan Produk Kesehatan dan Kecantikan
57. Pekerjaan Pengembangan E-book
58. Jasa Dekorasi Pernikahan
59. Pekerjaan Desain Kartu Nama
60. Pekerjaan Menyewakan Peralatan Olahraga
61. Jualan Tanaman dan Kebun Mini
62. Pekerjaan Penerjemahan Audio atau Video
63. Pekerjaan Manajemen Properti
64. Pekerjaan Menyulam Bordir
65. Pekerjaan Menulis Resensi Buku atau Film
66. Pekerjaan Penulis Konten SEO
67. Pekerjaan Desain Web E-commerce
68. Pekerjaan Membuat Presentasi
69. Jualan Barang Bekas atau Vintage
70. Pekerjaan Penulisan Skrip
71. Pekerjaan Desain Produk
72. Jasa Perbaikan Elektronik
73. Pekerjaan Manajemen Media Sosial
74. Pekerjaan Desain Poster
75. Pekerjaan Menjual Karya Seni atau Kerajinan Tangan
76. Pekerjaan Penyewaan Pakaian Pesta
77. Pekerjaan Menyewakan Peralatan Pesta
78. Pekerjaan Menyewakan Kostum
79. Pekerjaan Penulisan Buku Anak-anak
80. Pekerjaan Desain Kemasan
81. Jualan Produk Daur Ulang atau Ramah Lingkungan
82. Pekerjaan Pengajar Yoga
83. Pekerjaan Penyuntingan Gambar
84. Pekerjaan Desain Infografis
85. Pekerjaan Menyewakan Alat-alat Pertukangan
86. Pekerjaan Penerjemahan Dokumen Hukum
87. Pekerjaan Penulis Puisi atau Lagu
88. Pekerjaan Menjual Produk Kecantikan Alami
89. Pekerjaan Pengajar Seni Rupa
90. Pekerjaan Penerjemahan Naskah Drama atau Film
91. Pekerjaan Desain Ilustrasi
92. Pekerjaan Menjual Produk Kesehatan Organik
93. Pekerjaan Menyewakan Kendaraan atau Sepeda
94. Pekerjaan Penulisan Artikel Kesehatan
95. Pekerjaan Menjual Produk Makanan Organik
96. Pekerjaan Penerjemahan Lirik Lagu
97. Pekerjaan Menjual Peralatan Masak atau Dapur
98. Pekerjaan Penulisan Artikel Wisata
99. Pekerjaan Penerjemahan Materi Pendidikan
100. Pekerjaan Menjual Produk Tanaman Hias
`;

// Membersihkan teks dan memisahkan setiap baris menjadi array
let lines = list.trim().split("\n");

// Mengolah setiap baris untuk membuat objek dalam array
let olah_list = lines.map((line) => {
  let match = line.match(/^(\d+)\.\s(.+)/); // Mencocokkan nomor dan judul
  if (match) {
    let nomor = parseInt(match[1]);
    let judul = match[2].trim();
    let slug = judul.toLowerCase().replace(/\s+/g, "-"); // Membuat slug

    return { judul, slug };
  }
});

// console.log(olah_list);
for (let x of olah_list) {
  writeFileSync(
    `src/pages/uraian/${x.slug}.md`,
    `---
judul: ${x.judul}
---

`,
  );
}
