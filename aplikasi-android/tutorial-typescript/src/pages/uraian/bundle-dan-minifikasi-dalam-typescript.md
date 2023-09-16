---
judul: Bundle dan Minifikasi dalam TypeScript.
---

**Bundle dan Minifikasi dalam TypeScript**

Bundle dan minifikasi adalah dua konsep penting dalam pengembangan aplikasi web TypeScript. Dalam tutorial ini, kita akan membahas cara menggabungkan dan meminimalkan (minify) file TypeScript menjadi file JavaScript tunggal untuk meningkatkan performa dan efisiensi aplikasi.

**Langkah 1: Instalasi Perangkat Lunak**

Sebelum kita mulai, pastikan Anda memiliki Node.js dan npm (Node Package Manager) diinstal di komputer Anda. Anda juga perlu menginstal beberapa pustaka yang diperlukan:

```bash
npm install -g typescript
npm install -g parcel-bundler
```

**Langkah 2: Inisialisasi Proyek TypeScript**

Buat direktori baru untuk proyek Anda, dan inisialisasi proyek TypeScript dengan perintah berikut:

```bash
mkdir my-ts-app
cd my-ts-app
npm init -y
tsc --init
```

**Langkah 3: Membuat File TypeScript**

Buat file TypeScript pertama Anda, misalnya `main.ts`, dalam direktori proyek Anda. Isi file tersebut dengan kode TypeScript sesuai dengan kebutuhan proyek Anda.

**Langkah 4: Bundle Menggunakan Parcel**

Kita akan menggunakan Parcel, bundler ringan untuk JavaScript dan TypeScript, untuk menggabungkan dan meminimalkan kode TypeScript kita.

1. Instal Parcel sebagai dependensi pengembangan:

```bash
npm install parcel-bundler --save-dev
```

2. Buat skrip dalam `package.json` Anda untuk menjalankan Parcel:

```json
"scripts": {
  "start": "parcel index.html",
  "build": "parcel build index.html"
},
```

3. Buat berkas HTML (`index.html`) yang akan digunakan sebagai titik masuk untuk proyek Anda:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TypeScript Bundle</title>
</head>
<body>
    <script src="./main.ts"></script>
</body>
</html>
```

**Langkah 5: Bundle dan Minifikasi**

1. Untuk menggabungkan dan meminimalkan kode TypeScript, jalankan perintah berikut:

```bash
npm run build
```

Ini akan menghasilkan direktori `dist` dengan file bundel JavaScript yang telah digabungkan dan diminimalkan.

2. Anda akan melihat dua berkas dalam direktori `dist`, yaitu `main.js` (versi tergabung) dan `main.js.map` (berkas pemetaan sumber). Berkas `main.js` adalah hasil bundle yang dapat digunakan dalam produksi.

**Langkah 6: Uji Aplikasi**

Jalankan aplikasi Anda dengan perintah:

```bash
npm start
```

Anda akan melihat aplikasi Anda berjalan di `http://localhost:1234` (atau port lain sesuai dengan output Parcel). Sekarang Anda memiliki aplikasi TypeScript yang digabungkan dan diminimalkan.

**Langkah 7: Deploy ke Produksi**

Untuk deploy aplikasi ke lingkungan produksi, Anda dapat mengunggah berkas bundel (misalnya, `main.js`) dan berkas HTML ke server web Anda. Pastikan untuk menghapus berkas pemetaan sumber (`.map`) dari server produksi untuk alasan keamanan.

Itulah langkah-langkah untuk menggabungkan dan meminimalkan kode TypeScript menggunakan Parcel. Ini adalah praktik yang umum dilakukan dalam pengembangan web untuk meningkatkan performa dan mengurangi ukuran berkas JavaScript.