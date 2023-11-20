<script>
  import Tombol from "../komponen/tombol.svelte";
  import { push } from "svelte-spa-router";
  import Tabel from "../komponen/tabel.svelte";
  import localforage from "localforage";
  import { header_data_keluarga } from "../data/header";

  document.title = "Data Keluarga";

  let banyak_keluarga;

  // const header = [
  //   "npk",
  //   "nama_karyawan",
  //   "nama_keluarga",
  //   "tempat_lahir",
  //   "tanggal_lahir",
  //   "jenis_kelamin",
  //   "status",
  // ];

  /**
   *  let rows;
  async function ambilData() {
    let data = await localforage.getItem("dataKaryawan");
    if (data) {
      rows = data;
    }
  }
  ambilData();
   */

  let isinya; // isinya = rows
  async function ambil_data() {
    let data = await localforage.getItem("dataKeluarga");
    isinya = data;
    if (data) {
      banyak_keluarga = data.length;
    } else {
      banyak_keluarga = 0;
    }
  }
  ambil_data();

  async function hapus(event) {
    const id = event.detail.id;
    // alert(`Hapus ${id}`);
    const setuju = confirm("Hapus kah?");
    if (setuju) {
      isinya = isinya.filter((row) => row.id != id);
      const menghapus = await localforage.setItem("dataKeluarga", isinya);
      if (menghapus) {
        ambil_data();
      }
    }
  }
</script>

<div class="grid grid-cols-1 gap-3">
  <div class="font-bold">
    DATA KELUARGA
    {#if banyak_keluarga}
      ({banyak_keluarga} anggota keluarga)
    {/if}
  </div>
  <div>
    <Tombol teks="Tambah" on:klik={() => push("/data-keluarga/tambah")} />
    <Tombol
      teks="Tambah Baru (Langsung Banyak)"
      on:klik={() => push("/data-keluarga/tambah-banyak")}
    />
  </div>
  <Tabel
    link_edit="#/data-keluarga/edit/"
    header={header_data_keluarga}
    isi={isinya}
    on:perintah_hapus={hapus}
  />
</div>
