<script>
  import BagianLogo from "./bagian-logo.svelte";
  import localforage from "localforage";
  import tunjangan_tiket from "../../../data/tunjangan-tiket.yml";

  export let params;

  let data = {};
  let nama_finance_manager = "";
  let dataKaryawan = {};
  let dataKeluarga = {};
  let tiket_karyawan = 0;
  let tiket_tanggungan = 0;
  let total_tiket = 0;
  let banyak_tanggungan = 0;

  function cek_tiket() {
    let tujuan = data.tujuan;
    let ketemu = tunjangan_tiket.filter((x) => x.tujuan == tujuan)[0];
    tiket_karyawan = ketemu.karyawan;
    tiket_tanggungan = ketemu.tanggungan;
    total_tiket = tiket_karyawan + tiket_tanggungan * banyak_tanggungan;
  }

  async function dapatkan_data_karyawan() {
    let datanya = await localforage.getItem("dataKaryawan");
    datanya = datanya.filter((x) => x.npk == data.npk)[0];
    dataKaryawan = datanya;
  }
  // dapatkan_data_karyawan();

  async function dapatkan_keluarganya() {
    let datanya = await localforage.getItem("dataKeluarga");
    datanya = datanya.filter((x) => x.npk == data.npk);

    let data_baru = {};

    datanya.forEach((item) => {
      const { status, ...rest } = item; // Memisahkan status dari item lainnya
      data_baru[status] = rest; // Menambahkan item baru ke objek keluaran
    });

    console.log(data_baru);
    dataKeluarga = data_baru;
    banyak_tanggungan = datanya.length;
    cek_tiket();
  }

  async function dapatkan_finance_manager() {
    let datanya = await localforage.getItem("data ketua divisi");
    datanya = datanya.filter(
      (x) => x.divisi.toLowerCase() == "finance manager"
    )[0].nama;
    nama_finance_manager = datanya;
  }
  dapatkan_finance_manager();

  // Fungsi untuk mengonversi angka menjadi angka Romawi
  function toRoman(num) {
    const romanNumerals = {
      M: 1000,
      CM: 900,
      D: 500,
      CD: 400,
      C: 100,
      XC: 90,
      L: 50,
      XL: 40,
      X: 10,
      IX: 9,
      V: 5,
      IV: 4,
      I: 1,
    };

    let result = "";

    for (const key in romanNumerals) {
      while (num >= romanNumerals[key]) {
        result += key;
        num -= romanNumerals[key];
      }
    }

    return result;
  }

  // Mendapatkan bulan saat ini dalam bentuk angka (1-12)
  const today = new Date();
  const currentMonth = today.getMonth() + 1; // Ditambah 1 karena Januari dimulai dari 0

  // Mengonversi angka bulan menjadi angka Romawi
  const romanMonth = toRoman(currentMonth);

  console.log("Bulan saat ini dalam angka Romawi:", romanMonth);

  let tanggalan = new Date();
  let tahun_sekarang = tanggalan.getFullYear();

  async function dapatkan_data() {
    let datanya = await localforage.getItem("input data cuti");
    datanya = datanya.filter((x) => x.id == params.id)[0];
    data = datanya;
    dapatkan_data_karyawan();
    dapatkan_keluarganya();
    console.log(datanya);
  }
  dapatkan_data();
</script>

<div class="grid grid-cols-115">
  <div class="kiri col-span-65">
    <div class="invisible">
      <BagianLogo />
    </div>
    <p class="font-bold mb-3">PT. MAHAKAM SUMBER JAYA</p>
    <p>Dengan hormat,</p>
    <p>Sehubungan dengan pelaksanaan cuti saya pada</p>
    <!-- <p>tanggal 3-Jan-23 s/d 7-Jan-23</p> -->
    <p>tanggal {data.tanggal_mulai} s/d {data.tanggal_kembali}</p>
    <p>mengajukan permohonan tiket perjalanan cuti periode</p>
    <p>dengan tujuan {data.tujuan}</p>
    <p><span class="icon">Ø</span> Point of hire : {data.poh}</p>
    <p>
      <span class="icon">Ø</span> Date of hire : {dataKaryawan.doh}
    </p>
    <p><span class="icon">Ø</span> Adapun tiket akan saya minta dalam bentuk</p>
    <p class="font-bold underline pl-5">uang tunai</p>
    <table
      class="[&_td]:(border border-black px-1) [&_th]:(border border-black px-1)"
    >
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Hubungan</th>
          <th>Biaya Tiket</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1.</td>
          <td>{data.nama}</td>
          <td>Karyawan ybs.</td>
          <td>Rp {tiket_karyawan.toLocaleString()}</td>
        </tr>
        {#if dataKeluarga.Istri}
          <tr>
            <td class="text-center">2.</td>
            <td>{dataKeluarga.Istri.nama}</td>
            <td>Istri</td>
            <td>Rp {tiket_tanggungan.toLocaleString()}</td>
          </tr>
        {/if}
        {#if dataKeluarga["Anak 1"]}
          <tr>
            <td class="text-center">3.</td>
            <td>{dataKeluarga["Anak 1"].nama}</td>
            <td>Anak ke 1</td>
            <td>Rp {tiket_tanggungan.toLocaleString()}</td>
          </tr>
        {/if}
        {#if dataKeluarga["Anak 2"]}
          <tr>
            <td class="text-center">4.</td>
            <td>{dataKeluarga["Anak 2"].nama}</td>
            <td>Anak ke 2</td>
            <td>Rp {tiket_tanggungan.toLocaleString()}</td>
          </tr>
        {/if}
        {#if dataKeluarga["Anak 3"]}
          <tr>
            <td class="text-center">5.</td>
            <td>{dataKeluarga["Anak 3"].nama}</td>
            <td>Anak ke 3</td>
            <td>Rp {tiket_tanggungan.toLocaleString()}</td>
          </tr>
        {/if}
        <tr>
          <td />
          <td />
          <td />
          <td>Rp {total_tiket.toLocaleString()}</td>
        </tr>
      </tbody>
    </table>
    <p>Demikian disampaikan, atas perhatiannya saya</p>
    <p>ucapkan terima kasih.</p>
    <p class="py-10 pb-16">Hormat saya,</p>
    <p class="font-bold underline">{data.nama}</p>
    <p>Karyawan ybs.</p>
  </div>
  <div
    class="kanan col-span-50 last:[&_.kotak]:border-b [&_.kotak]:(border border-black border-b-0 p-1)"
  >
    <BagianLogo />
    <!-- <div class="bagian-logo">
      <img src={logo} alt="" />
      <p class="font-bold text-sm">COAL MINING</p>
      <p class="text-sm">Jl. Batubara No. 8 Samarinda - 75123</p>
      <p class="text-sm">Tel. (0541) 733 277</p>
      <p class="text-sm">Fax. (0541) 742 848</p>
    </div> -->
    <div class="kotak mt-15 [&>*]:pb-3">
      <p>Samarinda, 14 Agustus 2023</p>
      <p>
        No. {data.nomor} /SPC/MSJ/ {romanMonth} /LAMP/ {tahun_sekarang}
      </p>
    </div>
    <div class="kotak !py-3">
      <p>Kepada Yth.</p>
      <div class="py-3">
        <p class="pl-5">
          <span class="icon">Ø</span>
          <span>Finance Manager </span>
        </p>
        <p class="pl-10">Bpk. {nama_finance_manager}</p>
      </div>
    </div>
    <div class="kotak !py-3">
      <p>Perihal :</p>
      <p class="py-3 pl-5"><span class="icon">Ø</span> Permohonan Tiket Cuti</p>
    </div>
    <div class="kotak !py-3">
      <p class="pt-7 pb-20">Mengetahui,</p>
      <div class="text-center">
        <p class="font-bold underline">{data.mengetahui}</p>
        <p>(HRDS DEPT. HEAD)</p>
      </div>
    </div>
  </div>
</div>

<style>
  @font-face {
    src: url("/wingding.ttf");
    font-family: wingdings;
  }
  .icon {
    font-family: wingdings;
  }
</style>
