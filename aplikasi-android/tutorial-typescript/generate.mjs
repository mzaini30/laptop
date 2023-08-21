import { writeFileSync } from "fs";
import { slug as generate_slug } from "kumpulan-tools";

let list = `
1. Pengenalan TypeScript.
2. Instalasi TypeScript.
3. Hello World dalam TypeScript.
4. Tipe Data Dasar dalam TypeScript.
5. Variabel dan Konstanta dalam TypeScript.
6. Penggunaan Tipe Data Union dan Intersection.
7. Menggunakan Tipe Data Tuple.
8. Fungsi dalam TypeScript.
9. Penggunaan Interface dalam TypeScript.
10. Kegunaan Type Alias.
11. Penggunaan If-Else dalam TypeScript.
12. Perulangan dengan For dan While.
13. Penggunaan Switch-Case dalam TypeScript.
14. Penggunaan Break dan Continue.
15. Menggunakan Looping ForEach.
16. Pengenalan Pemrograman Berorientasi Objek (OOP) dalam TypeScript.
17. Pembuatan Kelas dan Objek.
18. Inheritance dan Polimorfisme dalam TypeScript.
19. Abstract Class dan Interface.
20. Penggunaan Decorators dalam OOP TypeScript.
21. Generics dalam TypeScript.
22. Pemahaman Penggunaan Modul.
23. Namespace dalam TypeScript.
24. Menggunakan async/await untuk Promises.
25. Tipe Data Asersi dalam TypeScript.
26. Penggunaan Assertion dengan JSX.
27. Konfigurasi TypeScript dengan tsconfig.json.
28. Integrasi TypeScript dengan Babel.
29. Pemahaman Tentang Typings.
30. Pemecahan Masalah Error TypeScript.
31. Membangun Aplikasi Node.js dengan TypeScript.
32. Menggunakan Express.js dengan TypeScript.
33. Membuat Aplikasi React dengan TypeScript.
34. Mengintegrasikan TypeScript ke dalam Angular.
35. Membangun Aplikasi Vue.js dengan TypeScript.
36. Menggunakan Axios dengan TypeScript.
37. Menerapkan Redux dengan TypeScript.
38. Testing dengan Jest dalam Proyek TypeScript.
39. Menggunakan React Router dengan TypeScript.
40. Mengelola Keadaan Global dengan Mobx.
41. Menggunakan Vue Router dengan TypeScript.
42. Manajemen Keadaan dengan Vuex dalam Vue TypeScript.
43. Pengenalan Unit Testing dalam TypeScript.
44. Testing Otomatis dengan Selenium dalam TypeScript.
45. Debugging TypeScript dengan VS Code.
46. Penggunaan Pemecah Masalah Tipe.
47. Meningkatkan Kinerja Aplikasi TypeScript.
48. Bundle dan Minifikasi dalam TypeScript.
49. Optimisasi Memori dengan TypeScript.
50. Membangun Aplikasi CRUD dengan TypeScript.
51. Integrasi dengan API Eksternal.
52. Validasi Form dengan TypeScript.
53. Autentikasi Pengguna dalam TypeScript.
54. Membuat Game Sederhana dengan TypeScript.
55. Menerapkan Fisika dalam Game TypeScript.
56. Animasi dalam Game dengan TypeScript.
57. Membangun Aplikasi Mobile dengan React Native dan TypeScript.
58. Menerapkan Navigasi dalam Aplikasi React Native TypeScript.
59. Membangun Server dengan Deno dan TypeScript.
60. Menerapkan Authentication dalam Server Deno TypeScript.
61. Membangun Aplikasi Real-time dengan WebSocket dan TypeScript.
62. Praktik Terbaik untuk Keamanan TypeScript.
63. Menggunakan Hashing dalam TypeScript.
64. Menerapkan Database Indexing dalam TypeScript.
65. Menggunakan Git untuk Kolaborasi dalam Proyek TypeScript.
66. Deploy Aplikasi TypeScript ke Heroku.
67. Automasi dengan Docker dan TypeScript.
68. Berkontribusi ke Proyek Open Source TypeScript.
69. Membuat dan Mengelola Proyek Open Source TypeScript Anda Sendiri.
70. Membangun Aplikasi Desktop dengan Electron dan TypeScript.
71. Menghubungkan Perangkat IoT dengan TypeScript.
72. Pengenalan Pemrograman Fungsional dengan TypeScript.
73. Pemrograman Paralel dengan TypeScript.
74. Mengamankan Aplikasi Web TypeScript Anda.
75. Menggunakan npm atau Yarn dengan TypeScript.
76. Menyusun Dokumentasi untuk Proyek TypeScript Anda.
77. Membangun UI dengan React dan TypeScript.
78. Membangun UI dengan Vue.js dan TypeScript.
79. Membangun UI dengan Angular dan TypeScript.
80. Pengembangan Game 2D dengan Phaser dan TypeScript.
81. Pengembangan Game 3D dengan Three.js dan TypeScript.
82. Pengembangan Aplikasi Mobile dengan Ionic dan TypeScript.
83. Mengukur Kinerja Aplikasi TypeScript.
84. Memanipulasi DOM dengan TypeScript.
85. Membangun Aplikasi Serverless dengan TypeScript.
86. Membangun Aplikasi dengan GraphQL dan TypeScript.
87. Menggunakan WebSocket dengan TypeScript.
88. Pemrograman Berorientasi Data dengan TypeScript.
89. Membangun Aplikasi Berorientasi Keamanan dengan TypeScript.
90. Menggunakan Pustaka Eksternal dengan TypeScript.
91. Membangun Aplikasi Sosial dengan TypeScript.
92. Menggunakan REST API dengan TypeScript.
93. Mengamankan API dengan TypeScript.
94. Menggunakan Microservices dengan TypeScript.
95. Menggunakan Kubernetes dengan TypeScript.
96. Membangun Aplikasi Finansial dengan TypeScript.
97. Menggunakan TensorFlow dengan TypeScript.
98. Membangun Aplikasi AI dengan TypeScript.
99. Membangun Aplikasi E-commerce dengan TypeScript.
100. Membangun Aplikasi IoT dengan TypeScript.
`;

// Membersihkan teks dan memisahkan setiap baris menjadi array
let lines = list.trim().split("\n");

// Mengolah setiap baris untuk membuat objek dalam array
let olah_list = lines.map((line) => {
  let match = line.match(/^(\d+)\.\s(.+)/); // Mencocokkan nomor dan judul
  if (match) {
    let nomor = parseInt(match[1]);
    let judul = match[2].trim();
    let slug = generate_slug(judul); //.toLowerCase().replace(/\s+/g, "-"); // Membuat slug

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
