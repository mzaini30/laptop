<script>
  import localforage from "localforage";
  import Tabel from "../komponen/tabel.svelte";
  import { header_data_karyawan } from "../data/header";

  document.title = "Data Karyawan";

  let banyak_karyawan;

  let rows;
  async function ambilData() {
    let data = await localforage.getItem("dataKaryawan");
    if (data) {
      rows = data;
      banyak_karyawan = data.length
    }
  }
  ambilData();

  // const header = [
  //   "npk",
  //   "nama",
  //   "departemen",
  //   "subDepartemen",
  //   "seksi",
  //   "jabatan",
  //   "level",
  //   "status",
  //   "telpon",
  //   "doh",
  //   "poh",
  //   "stKel",
  // ];

  async function hapus(event) {
    const id = event.detail.id;
    // alert(`Hapus ${id}`);
    const setuju = confirm("Hapus kah?");
    if (setuju) {
      rows = rows.filter((row) => row.id != id);
      const menghapus = await localforage.setItem("dataKaryawan", rows);
      if (menghapus) {
        ambilData();
      }
    }
  }
</script>

<p class="text-lg font-bold mb-2 uppercase">
  Data Karyawan
  {#if banyak_karyawan}
    ({banyak_karyawan} karyawan)
  {/if}
</p>
<a
  href="#/data-karyawan/tambah"
  class="mb-2 p-2 rounded bg-black text-white shadow inline-block"
  >Tambah Baru</a
>
<a
  href="#/data-karyawan/tambah-banyak"
  class="mb-2 p-2 rounded bg-black text-white shadow inline-block"
  >Tambah Baru (Langsung Banyak)</a
>
<Tabel
  link_edit="#/data-karyawan/edit/"
  header={header_data_karyawan}
  isi={rows}
  on:perintah_hapus={hapus}
/>
