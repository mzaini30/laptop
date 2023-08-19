---
judul: Deploy Aplikasi TypeScript ke Heroku.
---

**Deploy Aplikasi TypeScript ke Heroku**

Heroku adalah platform cloud yang memungkinkan Anda untuk dengan mudah mendeploy dan menjalankan aplikasi web. Dalam tutorial ini, kita akan melihat langkah-langkah untuk mendeploy aplikasi TypeScript ke Heroku.

**Langkah 1: Instalasi Heroku CLI**

Pastikan Anda telah menginstal Heroku Command Line Interface (CLI) di komputer Anda. Anda dapat mengunduhnya dari [situs web Heroku](https://devcenter.heroku.com/articles/heroku-cli).

**Langkah 2: Inisialisasi Proyek TypeScript**

1. Buat proyek TypeScript Anda seperti yang dijelaskan sebelumnya dalam tutorial sebelumnya.

2. Pastikan Anda memiliki file `package.json` yang berisi konfigurasi proyek TypeScript Anda.

**Langkah 3: Persiapan untuk Deployment**

Sebelum Anda bisa mendeploy proyek Anda ke Heroku, Anda perlu membuat beberapa pengaturan dan file penting.

1. Buat berkas `.gitignore` jika belum ada dan tambahkan baris berikut untuk mengabaikan file yang tidak perlu diunggah ke repositori Heroku:

   ```
   node_modules/
   dist/
   ```

2. Jika Anda belum memiliki repositori Git, inisialisasi repositori dengan perintah:

   ```bash
   git init
   ```

3. Tambahkan dan lakukan commit file-file proyek Anda:

   ```bash
   git add .
   git commit -m "Initial commit"
   ```

**Langkah 4: Login ke Heroku**

Jalankan perintah berikut untuk login ke akun Heroku Anda:

```bash
heroku login
```

Ini akan membuka browser dan meminta Anda untuk masuk ke Heroku.

**Langkah 5: Buat Aplikasi Heroku**

1. Buat aplikasi Heroku baru dengan perintah:

   ```bash
   heroku create nama-aplikasi-anda
   ```

   Gantilah `nama-aplikasi-anda` dengan nama yang Anda inginkan. Heroku akan memberikan URL unik untuk aplikasi Anda.

2. Jika Anda ingin mengganti nama aplikasi Anda, gunakan perintah berikut:

   ```bash
   heroku apps:rename nama-baru-anda
   ```

**Langkah 6: Konfigurasi Heroku**

Heroku menggunakan berkas `Procfile` untuk menentukan cara menjalankan aplikasi Anda. Buat berkas `Procfile` dalam direktori proyek Anda dan tambahkan perintah untuk menjalankan aplikasi Anda. Contohnya:

```Procfile
web: node dist/main.js
```

Pastikan perintah tersebut sesuai dengan cara Anda menjalankan aplikasi Anda.

**Langkah 7: Deploy ke Heroku**

1. Deploy proyek Anda ke Heroku dengan perintah:

   ```bash
   git push heroku master
   ```

   Heroku akan mengambil kode Anda dari repositori Git dan menggunakannya untuk membangun dan menjalankan aplikasi Anda.

2. Setelah proses deploy selesai, buka aplikasi Anda di browser dengan perintah:

   ```bash
   heroku open
   ```

   Ini akan membuka aplikasi Anda di browser default.

**Langkah 8: Melihat Log**

Anda dapat melihat log aplikasi Anda dengan perintah:

```bash
heroku logs --tail
```

Ini akan menampilkan log aplikasi secara real-time.

**Selamat, Anda telah berhasil mendeploy aplikasi TypeScript ke Heroku!** Anda sekarang dapat mengaksesnya secara online melalui URL yang diberikan oleh Heroku. Jika Anda ingin melakukan perubahan pada aplikasi Anda, cukup lakukan perubahan di repositori Git Anda dan lakukan `git push heroku master` lagi untuk melakukan update aplikasi di Heroku.
