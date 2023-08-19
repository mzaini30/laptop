---
judul: Debugging TypeScript dengan VS Code.
---

**Debugging TypeScript dengan VS Code**

Debugging adalah salah satu aspek penting dalam pengembangan perangkat lunak yang membantu kita mengidentifikasi, memahami, dan memperbaiki masalah dalam kode kita. Dalam tutorial ini, kita akan melihat bagaimana cara melakukan debugging pada kode TypeScript menggunakan Visual Studio Code (VS Code), salah satu IDE paling populer untuk pengembangan web.

**Langkah 1: Instalasi VS Code**

Pastikan Anda telah menginstal Visual Studio Code di komputer Anda. Anda dapat mengunduhnya dari [situs resmi VS Code](https://code.visualstudio.com/).

**Langkah 2: Inisialisasi Proyek TypeScript**

1. Buat direktori baru untuk proyek TypeScript Anda dan masuk ke dalamnya.

2. Inisialisasi proyek TypeScript dengan menjalankan perintah berikut:

   ```bash
   mkdir my-ts-app
   cd my-ts-app
   npm init -y
   tsc --init
   ```

**Langkah 3: Buat Kode TypeScript**

Buat file TypeScript pertama Anda, misalnya `app.ts`, dan isi dengan kode TypeScript yang akan Anda debug.

**Langkah 4: Konfigurasi `.vscode/launch.json`**

1. Buka VS Code di direktori proyek Anda dengan perintah `code .`.

2. Buat direktori `.vscode` jika belum ada, dan buat berkas `launch.json` di dalamnya.

3. Konfigurasi `launch.json` untuk mendefinisikan pengaturan debugging. Berikut contoh konfigurasi untuk debugging TypeScript:

```json
{
  "version": "0.2.0",
  "configurations": [
    {
      "type": "node",
      "request": "launch",
      "name": "Debug TypeScript",
      "program": "${workspaceFolder}/app.ts",
      "outFiles": ["${workspaceFolder}/dist/**/*.js"],
      "sourceMaps": true,
      "internalConsoleOptions": "openOnSessionStart",
      "skipFiles": ["<node_internals>/**"]
    }
  ]
}
```

**Langkah 5: Debug Kode**

1. Buka file TypeScript yang ingin Anda debug di VS Code.

2. Letakkan breakpoint di baris kode dengan mengklik margin di sebelah kiri baris kode.

3. Tekan tombol `F5` atau klik ikon "Run and Debug" di panel samping (atau dengan menggunakan `Ctrl + Shift + D`).

4. Pilih konfigurasi "Debug TypeScript" yang telah Anda buat dalam `launch.json`.

5. Debugging akan dimulai, dan VS Code akan berhenti di breakpoint yang telah Anda atur. Anda dapat mengamati nilai variabel, melanjutkan eksekusi kode, atau mengeksekusi kode secara perlahan demi lahan menggunakan tombol-tombol debug yang tersedia.

**Langkah 6: Melihat Output dan Log**

Anda dapat melihat output dari program Anda di panel "Debug Console" di bawah layar. Anda juga dapat menambahkan pernyataan `console.log()` dalam kode Anda untuk memantau nilai variabel atau pesan debug.

**Langkah 7: Memecahkan Masalah**

Gunakan debugger untuk menganalisis masalah dalam kode Anda. Anda dapat melihat tumpukan panggilan (stack trace), menginspeksi variabel, dan mengidentifikasi penyebab masalah.

**Langkah 8: Mengakhiri Debugging**

Setelah selesai debugging, tekan tombol `Shift + F5` atau klik ikon "Stop" di panel debug untuk mengakhiri sesi debugging.

Itulah langkah-langkah dasar untuk melakukan debugging pada kode TypeScript menggunakan Visual Studio Code. Debugging adalah alat yang sangat berguna dalam pengembangan perangkat lunak, dan dengan VS Code, Anda dapat dengan mudah mengidentifikasi dan memperbaiki masalah dalam kode TypeScript Anda.
