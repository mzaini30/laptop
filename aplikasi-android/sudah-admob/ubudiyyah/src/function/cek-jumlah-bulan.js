export default function (bulan) {
  let bulannya = bulan.split(" ")[0];
  let tahun = bulan.split(" ")[1];
  if (
    [
      "Januari",
      "Maret",
      "Mei",
      "Juli",
      "Agustus",
      "Oktober",
      "Desember",
    ].includes(bulannya)
  ) {
    return 31;
  }
  if (["April", "Juni", "September", "November"].includes(bulannya)) {
    return 30;
  }
  if (bulannya == "Februari") {
    if (tahun % 4 == 0) {
      return 29;
    } else {
      return 28;
    }
  }
}
