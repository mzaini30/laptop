export default function (teks = "") {
  if (teks == "") return "-";
  let pecah = teks.split("-");
  let bagianTanggal = pecah[2];
  let bagianBulan = +pecah[1];
  let bagianTahun = pecah[0];
  const listBulan = [
    "",
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];
  return `${bagianTanggal} ${listBulan[bagianBulan]} ${bagianTahun}`;
}
