---
judul: Automasi dengan Docker dan TypeScript.
---

**Automasi dengan Docker dan TypeScript**

Docker adalah platform open-source yang memungkinkan Anda untuk mengotomatisasi implementasi, pengujian, dan pengiriman aplikasi dalam wadah (container). TypeScript, di sisi lain, adalah bahasa pemrograman yang kuat untuk mengembangkan aplikasi JavaScript. Dalam tutorial ini, kita akan melihat cara mengotomatisasi proses deployment dengan Docker menggunakan TypeScript.

**Langkah 1: Persiapan Lingkungan**

Pastikan Anda memiliki Docker diinstal di sistem Anda. Anda juga perlu menginstal Node.js dan TypeScript jika belum ada. Anda dapat menginstal TypeScript secara global dengan perintah:

```
npm install -g typescript
```

**Langkah 2: Inisialisasi Proyek**

Buat direktori baru untuk proyek Anda dan inisialisasi proyek Node.js di dalamnya:

```
mkdir docker-typescript-automation
cd docker-typescript-automation
npm init -y
```

Selanjutnya, instal TypeScript sebagai dependensi pengembangan:

```
npm install typescript --save-dev
```

**Langkah 3: Konfigurasi TypeScript**

Buat berkas konfigurasi TypeScript dengan perintah:

```
tsc --init
```

Kemudian, buka berkas `tsconfig.json` dan pastikan konfigurasi berikut:

```json
{
  "compilerOptions": {
    "target": "ES6",
    "module": "CommonJS",
    "outDir": "./dist",
    "rootDir": "./src"
    // ...
  }
  // ...
}
```

**Langkah 4: Membuat Skrip Automasi**

Buat berkas TypeScript yang akan berisi skrip otomatisasi Anda, misalnya `automation.ts`, dalam direktori `src`. Skrip ini akan mengotomatisasi beberapa tugas Docker, seperti build dan run.

```typescript
// src/automation.ts
import { exec } from "child_process";

// Fungsi untuk menjalankan perintah shell
function runCommand(command: string): Promise<void> {
  return new Promise<void>((resolve, reject) => {
    exec(command, (error, stdout, stderr) => {
      if (error) {
        console.error(stderr);
        reject(error);
      } else {
        console.log(stdout);
        resolve();
      }
    });
  });
}

// Otomatisasi build dan run Docker
async function main() {
  try {
    // Build Docker image
    console.log("Building Docker image...");
    await runCommand("docker build -t my-app .");

    // Run Docker container
    console.log("Running Docker container...");
    await runCommand("docker run -p 8080:80 my-app");
  } catch (error) {
    console.error("Error:", error);
  }
}

main();
```

**Langkah 5: Skrip NPM**

Edit berkas `package.json` Anda dan tambahkan skrip untuk menjalankan skrip otomatisasi TypeScript. Juga, pastikan Anda memiliki dependensi yang dibutuhkan:

```json
{
  "scripts": {
    "start": "ts-node src/automation.ts",
    "build": "tsc"
  },
  "dependencies": {},
  "devDependencies": {
    "typescript": "^4.5.2",
    "@types/node": "^16.11.15"
  }
}
```

**Langkah 6: Build dan Jalankan Skrip**

Sekarang Anda dapat menjalankan skrip otomatisasi dengan perintah:

```
npm start
```

Ini akan mengotomatisasi build Docker image dan menjalankan container Docker Anda.

**Langkah 7: Testing**

Pastikan skrip otomatisasi berfungsi dengan baik dengan menjalankannya. Selanjutnya, Anda dapat menambahkan lebih banyak otomatisasi sesuai kebutuhan proyek Anda, seperti pengiriman Docker image ke registry Docker atau deployment ke lingkungan produksi.

Dengan demikian, Anda telah membuat skrip otomatisasi dengan TypeScript untuk mengotomatisasi proses Docker dalam proyek Anda. Ini adalah fondasi yang bagus untuk membangun alur kerja pengembangan dan deployment yang lebih kompleks.
