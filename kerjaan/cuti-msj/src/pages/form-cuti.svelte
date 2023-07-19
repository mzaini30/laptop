<script>
  import Label from "../komponen/label.svelte";
  import Input from "../komponen/input.svelte";
  import Judul from "../komponen/judul.svelte";
  import localforage from "localforage";
  import list_cuti from "../data/list cuti.yml";
  import Tombol from "../komponen/tombol.svelte";
  import selisih_hari from "../fungsi/selisih hari";
  import pilihan_tiket from "../data/pilihan tiket.yml";
  import toast from "only-toast";

  let alamat_cuti;
  let bagian;
  let departemen;
  let disetujui;
  let divisi;
  let divisi_departemen_bagian_seksi;
  let jabatan;
  let masuk_kembali_tanggal;
  let mengajukan;
  let mengetahui;
  let mulai_tanggal;
  let nama;
  let nomor;
  let npk_dan_nama;
  let npk_terpilih;
  let perjalanan;
  let poh;
  let sampai_tanggal;
  let seksi;
  let selama;
  let sisa_cuti_panjang;
  let sisa_cuti_tahunan;
  let status;
  let tanggal_mulai_kerja;
  let telpon;
  let level;
  let tiket;
  let alasan;

  // console.log(sisa_cuti_tahunan)
  if (!sisa_cuti_tahunan) {
    // location.reload()
  }

  async function ambil_nomor() {
    let ambil_data = await localforage.getItem("input data cuti");
    if (!ambil_data) {
      nomor = 1;
    } else {
      let dibalik = ambil_data.reverse();
      nomor = +dibalik[0].nomor + 1;
    }
  }
  ambil_nomor();

  async function olah_data() {
    let ambil_data = await localforage.getItem("dataKaryawan");
    let data_terpilih = ambil_data.filter((x) => x.npk == npk_terpilih)[0];
    jabatan = data_terpilih.jabatan;
    divisi_departemen_bagian_seksi = `${data_terpilih.departemen}/${data_terpilih.subDepartemen}/${data_terpilih.seksi}`;
    tanggal_mulai_kerja = data_terpilih.doh;
    poh = data_terpilih.poh;
    status = data_terpilih.status;
    telpon = data_terpilih.telpon;
    nama = data_terpilih.nama;
    level = data_terpilih.level;
    departemen = data_terpilih.departemen;

    if (
      data_terpilih.poh.toLowerCase().trim() != "samarinda" &&
      data_terpilih.poh.toLowerCase().trim() != "separi"
    ) {
      tiket = "Tiket";
    }

    let cek_cuti_tahunan = await localforage.getItem("cuti_tahunan");
    if (cek_cuti_tahunan) {
      let data_cuti_tahunan_terpilih = cek_cuti_tahunan.filter(
        (x) => x.npk == npk_terpilih
      )[0];
      sisa_cuti_tahunan = data_cuti_tahunan_terpilih.hak_cuti;
    } else {
      location.reload();
    }

    document.title = `Form Cuti ${data_terpilih.nama}`;
  }
  $: if (npk_terpilih) {
    olah_data();
  }

  const judulnya = "Form Cuti";

  async function ambil_data_karyawan() {
    let data = await localforage.getItem("dataKaryawan");
    data = data.sort((a, b) => (a.nama > b.nama ? 1 : -1));
    let kumpulin = [];
    for (let x of data) {
      kumpulin = [
        ...kumpulin,
        {
          teks: `${x.npk} - ${x.nama}`,
          nilai: x.npk,
        },
      ];
    }
    npk_dan_nama = kumpulin;
  }
  ambil_data_karyawan();

  let list_ketua;

  async function ambil_ketua() {
    let data = await localforage.getItem("data ketua divisi");
    list_ketua = data;
  }
  ambil_ketua();

  function notif() {
    // new Notification("Data tersimpan");
    toast("Data tersimpan");
  }

  function isi_otomatis_selama() {
    if (mengajukan == "Cuti tahunan") {
      selama = 6;
    }
    if (mengajukan == "Cuti panjang") {
      selama = 180;
    }
    if (mengajukan == "Cuti pernikahan") {
      selama = 3;
    }
    if (mengajukan == "Cuti hamil dan bersalin") {
      selama = 2;
    }
    if (mengajukan == "Cuti khitanan/baptis") {
      selama = 2;
    }
    if (mengajukan == "Cuti kematian") {
      selama = 2;
    }
    if (mengajukan == "Cuti di luar tanggungan") {
      selama = 1;
    }
    if (mengajukan == "Cuti ibadah (haji)") {
      selama = 30;
    }
    if (mengajukan == "Advance cuti tahunan") {
      selama = 30;
    }
  }
  $: if (mengajukan) {
    isi_otomatis_selama();
  }

  async function tambahkan() {
    if (mengajukan == "Cuti tahunan") {
      let terbaru = sisa_cuti_tahunan - selama;
      let datanya = await localforage.getItem("cuti_tahunan");
      let terpilih = datanya.find((x) => x.npk == npk_terpilih);
      if (terpilih) {
        terpilih.hak_cuti = terbaru;
        terpilih.diambil += selama;
        localforage.setItem("cuti_tahunan", datanya);
      }
    }

    const periode = await localforage.getItem("periode");

    let cuti_ke;
    let cek_cuti_ke = await localforage.getItem("input data cuti");
    if (!cek_cuti_ke) {
      cuti_ke = 1;
    } else {
      let datanya = cek_cuti_ke.filter((x) => x.npk == npk_terpilih);
      if (datanya.length > 0) {
        console.log(datanya);
        datanya = datanya.reverse();
        cuti_ke = datanya[0].cuti_ke + 1;
      } else {
        cuti_ke = 1;
      }
    }

    let data_baru = {
      id: crypto.randomUUID(),
      nomor,
      bulan: new Date().getMonth() + 1,
      tahun: new Date().getFullYear(),
      npk: npk_terpilih,
      nama,
      tanggal_masuk: tanggal_mulai_kerja,
      jabatan,
      status,
      level,
      poh,
      jenis_cuti: mengajukan,
      periode,
      cuti_ke,
      jumlah_hari: selama,
      perjalanan,
      tanggal_mulai: mulai_tanggal,
      tanggal_akhir: sampai_tanggal,
      tanggal_kembali: masuk_kembali_tanggal,
      tiket,
      alasan,
      disetujui,
      mengetahui,
      departemen,
      alamat_cuti,
      telpon,
    };
    let ambil_data = await localforage.getItem("input data cuti");
    if (!ambil_data) {
      // kalau masih kosongan
      let menyimpan = await localforage.setItem("input data cuti", [data_baru]);
      if (menyimpan) {
        notif();
      }
    } else {
      let menyimpan = await localforage.setItem("input data cuti", [
        ...ambil_data,
        data_baru,
      ]);
      if (menyimpan) {
        notif();
      }
    }
  }
</script>

<svelte:head>
  <title>{judulnya}</title>
</svelte:head>

<Judul isi={judulnya} />
<form
  on:submit|preventDefault={tambahkan}
  class="grid mt-3 grid-cols-10 gap-3 [&_label]:col-span-2 [&_button]:col-span-10 [&_input]:col-span-8 [&_.input]:border-2 [&_.input]:border-black [&_.input]:p-2 [&_.input]:block [&_.input]:w-full [&_.input]:col-span-8"
>
  <Label tulisan="Nomor" />
  <Input bind:value={nomor} />
  <Label tulisan="NPK & Nama" />
  {#if npk_dan_nama}
    <select name="" bind:value={npk_terpilih} id="" class="input">
      {#each npk_dan_nama as x}
        <option value={x.nilai}>{x.teks}</option>
      {/each}
    </select>
  {/if}
  <Label tulisan="Jabatan" />
  <Input bind:value={jabatan} />
  <Label tulisan="Divisi/Departemen/Bagian/Seksi" />
  <Input bind:value={divisi_departemen_bagian_seksi} />
  <Label tulisan="Alamat Cuti" />
  <Input bind:value={alamat_cuti} />
  <Label tulisan="Tanggal Mulai Kerja" />
  <Input bind:value={tanggal_mulai_kerja} />
  <Label tulisan="POH" />
  <Input bind:value={poh} />
  <Label tulisan="Status" />
  <Input bind:value={status} />
  <Label tulisan="Telpon" />
  <Input bind:value={telpon} />
  <Label tulisan="Sisa Cuti Tahunan" />
  <Input bind:value={sisa_cuti_tahunan} />
  <Label tulisan="Sisa Cuti Panjang" />
  <Input bind:value={sisa_cuti_panjang} />
  <Label tulisan="Mengajukan" />
  <select class="input" bind:value={mengajukan} name="" id="">
    {#each list_cuti as x}
      <option>{x}</option>
    {/each}
  </select>
  <Label tulisan="Tiket" />
  <select class="input" bind:value={tiket} name="" id="">
    {#each pilihan_tiket as x}
      <option>{x}</option>
    {/each}
  </select>
  <!-- <Input  /> -->
  <Label tulisan="Selama (berapa hari?)" />
  <Input bind:value={selama} />
  <Label tulisan="Mulai Tanggal" />
  <Input bind:value={mulai_tanggal} type="date" />
  <Label tulisan="Sampai Tanggal" />
  <Input bind:value={sampai_tanggal} type="date" />
  <Label tulisan="Masuk Kembali Tanggal" />
  <Input bind:value={masuk_kembali_tanggal} type="date" />
  <Label tulisan="Perjalanan (berapa hari?)" />
  <Input bind:value={perjalanan} />
  <Label tulisan="Alasan" />
  <Input bind:value={alasan} />
  <Label tulisan="Disetujui" />
  {#if list_ketua}
    <select class="input" bind:value={disetujui} name="" id="">
      {#each list_ketua as x}
        <option value={x.nama}>{x.nama} - {x.divisi}</option>
      {/each}
    </select>
  {/if}
  <Label tulisan="Mengetahui" />
  {#if list_ketua}
    <select class="input" bind:value={mengetahui} name="" id="">
      {#each list_ketua as x}
        <option value={x.nama}>{x.nama} - {x.divisi}</option>
      {/each}
    </select>
  {/if}
  <Tombol teks="Tambahkan" />
</form>

<style>
  select {
    box-shadow: 5px 5px 0 0 black;
  }
</style>
