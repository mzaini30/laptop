# Apa Itu TypeScript?

Pada dasarnya, TypeScript hanyalah JavaScript yang diberi tipe data.

Contoh program JavaScript:

```javascript
function panggil(nama) {
  return `Halo ${nama}`;
}
```

Jika diubah menjadi TypeScript, maka kodenya akan seperti ini:

```typescript
function panggil(nama: string): string {
  return `Halo ${nama}`;
}
```

## Kelebihan TypeScript

Nah sekarang pertanyaannya adalah "kalau misalnya TypeScript itu sama dengan JavaScript, lalu buat apa TypeScript?"

Jadi, TypeScript itu bertujuan untuk menghindari bug. Jadi, selama kita mengedit di text editor seperti VS Code, maka kita akan selalu ditunjukkan jika kita salah ngetik kode. Misalnya aja seperti ini:

```typescript
let nama: string;
nama = 30;
```

Kode di atas, kalau kita ngetiknya tanpa menggunakan TypeScript, alias JavaScript biasa, maka nggak akan menghasilkan error. Padahal kan salah. Kita ingin variabel `nama` itu menggunakan tipe data `string`, bukan `number`. Nah, kalau kita mengetiknya dengan TypeScript di VS Code maupun di Sublime dengan LSP TypeScript, maka akan tampil errornya saat kita mengetik.
