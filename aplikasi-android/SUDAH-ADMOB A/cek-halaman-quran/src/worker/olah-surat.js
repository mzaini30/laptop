import dataSurat from "../data/surat-quran";

let juznya = "";
let surat = "";

function olahJuz(halaman) {
  if (halaman == 1) {
    juznya = "1";
  } else if (halaman < 602) {
    let nilai = (halaman - 1) / 20;
    nilai = Math.ceil(nilai);
    juznya = String(nilai);
  } else if (halaman <= 604) {
    juznya = "30";
  } else {
    juznya = "";
  }
}

function olahSurat(halaman) {
  surat = dataSurat[halaman - 1] || "";
}

addEventListener("message", (x) => {
  const halaman = x.data;
  olahJuz(halaman);
  olahSurat(halaman);
  if (halaman > 0) {
    postMessage(`QS. ${surat}
Juz ${juznya}`);
  } else {
    postMessage("");
  }
});
