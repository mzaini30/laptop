import localforage from "localforage";

let selisihBulan = (tanggal1, tanggal2) =>
  (tanggal2.getFullYear() - tanggal1.getFullYear()) * 12 +
  (tanggal2.getMonth() - tanggal1.getMonth());

export default async function () {
  let sekarang = new Date();

  let data_karyawan = await localforage.getItem("dataKaryawan");
  let data_baru = [];
  for (let x of data_karyawan) {
    let doh = new Date(x.doh);
    console.log(`DOH: ${doh}`);
    let selisihnya = selisihBulan(doh, sekarang);
    console.log(`Selisihnya: ${selisihnya}`);
    if (selisihnya >= 12) {
      data_baru = [
        ...data_baru,
        {
          id: crypto.randomUUID(),
          npk: x.npk,
          hak_cuti: 12,
          diambil: 0,
        },
      ];
      console.log(`Data baru: ${JSON.stringify(data_baru)}`);
    }
  }
  localforage.setItem("cuti_tahunan", data_baru);
}
