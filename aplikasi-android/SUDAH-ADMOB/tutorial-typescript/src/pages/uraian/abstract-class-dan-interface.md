---
judul: Abstract Class dan Interface.
---

Tentu! Saya akan menjelaskan tutorial tentang Abstract Class dan Interface dalam TypeScript.

**Abstract Class:**

Abstract class adalah jenis kelas dalam TypeScript yang digunakan sebagai kerangka dasar untuk kelas lain. Abstract class tidak dapat diinstansiasi langsung, tetapi digunakan sebagai tempat untuk mendefinisikan metode yang harus diimplementasikan oleh kelas turunannya. Berikut adalah tutorial singkat tentang penggunaan abstract class dalam TypeScript:

1. **Membuat Abstract Class:**
   Untuk membuat abstract class, gunakan kata kunci `abstract` sebelum kata kunci `class`. Contoh:

   ```typescript
   abstract class Shape {
     abstract calculateArea(): number;
   }
   ```

2. **Mendefinisikan Metode Abstrak:**
   Metode yang dideklarasikan dalam abstract class adalah metode abstrak yang harus diimplementasikan oleh kelas turunannya. Metode abstrak tidak memiliki implementasi di abstract class tersebut.

3. **Membuat Kelas Turunan:**
   Anda harus membuat kelas yang turun dari abstract class dan mengimplementasikan semua metode abstrak yang dideklarasikan dalam abstract class. Contoh:

   ```typescript
   class Circle extends Shape {
     radius: number;

     constructor(radius: number) {
       super();
       this.radius = radius;
     }

     calculateArea(): number {
       return Math.PI * this.radius * this.radius;
     }
   }
   ```

4. **Menggunakan Abstract Class:**
   Anda dapat membuat objek dari kelas turunan, tetapi tidak dapat membuat objek dari abstract class itu sendiri. Contoh:

   ```typescript
   const circle = new Circle(5);
   console.log(circle.calculateArea()); // Output: 78.53981633974483
   ```

**Interface:**

Interface adalah kontrak atau blueprint untuk kelas dalam TypeScript. Mereka digunakan untuk mendefinisikan struktur data yang harus dipatuhi oleh kelas. Berikut adalah tutorial singkat tentang penggunaan interface dalam TypeScript:

1. **Membuat Interface:**
   Untuk membuat sebuah interface, Anda hanya perlu mendefinisikan struktur data yang diperlukan oleh kelas. Contoh:

   ```typescript
   interface Person {
     name: string;
     age: number;
   }
   ```

2. **Menggunakan Interface:**
   Anda dapat menggunakannya sebagai tipe data untuk objek dalam kelas atau sebagai kontrak yang harus dipatuhi oleh kelas. Contoh:

   ```typescript
   class Student implements Person {
     name: string;
     age: number;

     constructor(name: string, age: number) {
       this.name = name;
       this.age = age;
     }
   }
   ```

3. **Opsional dan Readonly Properties:**
   Anda dapat membuat properti pada interface menjadi opsional dengan menambahkan tanda tanya `?`, atau membuatnya hanya bisa dibaca (readonly) dengan menambahkan kata kunci `readonly`. Contoh:

   ```typescript
   interface Car {
     readonly brand: string;
     model: string;
     year?: number;
   }
   ```

4. **Implementasi Lebih dari Satu Interface:**
   Kelas dapat mengimplementasikan lebih dari satu interface. Contoh:

   ```typescript
   interface Shape {
     calculateArea(): number;
   }

   interface Color {
     fillColor(color: string): void;
   }

   class Circle implements Shape, Color {
     // Implementasi metode dari Shape dan Color
   }
   ```

5. **Ekstensi Interface:**
   Anda dapat memperluas sebuah interface dengan menggunakan kata kunci `extends`. Contoh:

   ```typescript
   interface Animal {
     name: string;
   }

   interface Bird extends Animal {
     fly(): void;
   }
   ```

Sekarang Anda telah memahami dasar-dasar penggunaan abstract class dan interface dalam TypeScript. Ini adalah alat yang berguna untuk mengatur kode Anda dan memastikan bahwa kelas-kelas Anda sesuai dengan kontrak yang telah ditentukan.
