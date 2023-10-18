# Fungsi

Fungsi dalam JavaScript bertujuan untuk mendefinisikan program yang digunakan berulang-ulang. Contoh dari fungsi itu seperti ini:

```javascript
function panggil() {
  console.log("Halo");
}

panggil();
panggil();
panggil();
```

Dari kode di atas, akan menghasilkan teks seperti ini:

```
Halo
Halo
Halo
```

Jadi, `console.log('Halo')` itu diulangi sebanyak tiga kali.

## Fungsi dengan Parameter

Kita bisa memasukkan parameter ke dalam fungsi seperti ini:

```javascript
function panggil(nama) {
  console.log(nama);
}

panggil("Zen");
```

Maka, akan menghasilkan teks `Zen`.

## Arrow Function

Contoh fungsi biasa:

```javascript
function halo(nama) {
  return `Hai ${nama}`;
}
```

Contoh kalau menggunakan arrow function

```javascript
const halo = (nama) => `Hai ${nama}`;
```

Kita bisa juga menuliskannya seperti ini:

```javascript
const halo = (nama) => {
  return `Hai ${nama}`;
};
```

Bisa juga menuliskannya seperti ini:

```javascript
const halo = (nama) => {
  return `Hai ${nama}`;
};
```

## Perbedaan Fungsi Biasa dengan Arrow Function

Ada dua perbedaan utama saat menggunakan fungsi biasa dengan arrow function yaitu `this` dan saat pemanggilan.

### Permasalahan `this`

Kalau di fungsi biasa, `this` adalah nilai yang ada di dalam fungsi. Sedangkan kalau menggunakan arrow function, `this` adalah nilai yang di luar arrow function.

Jika menggunakan fungsi biasa:

```javascript
function hai() {
  // this
}
```

Jika menggunakan arrow function:

```javascript
// this
const hai = () => {};
```

### Perbedaan Saat Pemanggilan

Kalau menggunakan fungsi biasa, kita bisa memanggilnya sebelum mendefinisikannya. Contohnya seperti ini:

```javascript
hai();

function hai() {
  console.log("Hello world");
}
```

Kalau menggunakan arrow function, harus didefinisikan dulu sebelum memanggilnya:

```javascript
const hai = () => console.log("Hello world");

hai();
```
