<script>
  import Card from "../komponen/card.svelte";
  import excaliburZen from "excalibur-zen";

  let id = "8fbf69c3daa49234acc91d6e1d97774c"; // id, judul, banyak, pekan, tahun, tipe
  let sql = "https://excalibur.primasolutions.my.id/sql.php";

  let tanggalan = new Date();
  // let bulan = tanggalan.getMonth() + 1;
  let tahun = tanggalan.getFullYear();

  // Mendapatkan tanggal saat ini
  var today = new Date();

  // Mendapatkan tanggal awal tahun
  var startOfYear = new Date(today.getFullYear(), 0, 1);

  // Menghitung selisih dalam milidetik antara tanggal saat ini dan tanggal awal tahun
  var diff = today - startOfYear;

  // Mengkonversi selisih dalam milidetik menjadi jumlah pekan
  var week = Math.ceil(diff / (1000 * 60 * 60 * 24 * 7));

  // Menampilkan pekan ke berapa
  // console.log("Sekarang adalah pekan ke: " + week);

  async function ambil_datanya(tipe) {
    let terbaru = await excaliburZen(sql, {
      id,
      kunci: "ambil-terbanyak",
      pekan: week,
      tahun,
      tipe,
    });
    terbaru = await terbaru.json();
    if (terbaru) {
      terbaru = terbaru.sort((b, a) => +a.banyak - +b.banyak);
      return terbaru[0].judul;
    } else {
      return "";
    }
  }

  let judul_blog_zen_zen = "";
  let judul_aplikasi_android = "";
  let judul_website_mabaiz = "";

  async function init() {
    judul_blog_zen_zen = await ambil_datanya("Blog Zen Zen");
    judul_aplikasi_android = await ambil_datanya("Aplikasi Android");
    judul_website_mabaiz = await ambil_datanya("Website Mabaiz");
  }
  init();
</script>

<div class="p-3 grid grid-cols-1 gap-3">
  <Card judul="Blog Zen Zen" isi={judul_blog_zen_zen} />
  <Card judul="Aplikasi Android" isi={judul_aplikasi_android} />
  <Card judul="Website Mabaiz" isi={judul_website_mabaiz} />
</div>
