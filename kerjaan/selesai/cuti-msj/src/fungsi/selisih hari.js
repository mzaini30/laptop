export default function (tanggal1, tanggal2) {
  var selisihMilidetik = Math.abs(tanggal2 - tanggal1);
  var selisihHari = Math.ceil(selisihMilidetik / (1000 * 60 * 60 * 24));
  return selisihHari;
}
