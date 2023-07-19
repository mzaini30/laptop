export default function jadi_array(header, dari_excel) {
  let hasilnya = dari_excel.trim().split("\n");
  hasilnya.shift();

  let hasil_baru = [];
  for (let x of hasilnya) {
    let bagian = x.split("\t");

    let baru = {
      id: crypto.randomUUID(),
    };
    for (let n in bagian) {
      baru[header[n]] = bagian[n];
    }

    hasil_baru = [...hasil_baru, baru];
  }
  // isi = hasil_baru;
  return hasil_baru;
}
