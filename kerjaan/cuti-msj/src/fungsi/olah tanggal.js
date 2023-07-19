import list_bulan from "../data/list bulan.yml";

export default function (tanggalnya, sudah_diolah = false) {
  // udah new Date() dari sana
  if (!sudah_diolah) {
    tanggalnya = new Date(tanggalnya);
  }
  return `${tanggalnya.getDate()} ${
    list_bulan[tanggalnya.getMonth()]
  } ${tanggalnya.getFullYear()}`;
}
