<script>
  import localforage from "localforage";
  import Tabel from "../komponen/tabel.svelte";
  import { ketua_divisi } from "../data/header";

  const judul = "Data Ketua Divisi";

  let rows;
  async function ambilData() {
    let data = await localforage.getItem("data ketua divisi");
    if (data) {
      rows = data;
    }
  }
  ambilData();

  async function hapus(event) {
    const id = event.detail.id;
    // alert(`Hapus ${id}`);
    const setuju = confirm("Hapus kah?");
    if (setuju) {
      rows = rows.filter((row) => row.id != id);
      const menghapus = await localforage.setItem("data ketua divisi", rows);
      if (menghapus) {
        ambilData();
      }
    }
  }
</script>

<svelte:head>
  <title>
    {judul}
  </title>
</svelte:head>

<p class="text-lg font-bold mb-2 uppercase">
  {judul}
</p>
<a
  href="#/data-ketua-divisi/tambah"
  class="mb-2 p-2 rounded bg-black text-white shadow inline-block"
  >Tambah Baru</a
>
<a
  href="#/data-ketua-divisi/tambah-banyak"
  class="mb-2 p-2 rounded bg-black text-white shadow inline-block"
  >Tambah Baru (Langsung Banyak)</a
>
<Tabel
  link_edit="#/data-ketua-divisi/edit/"
  header={ketua_divisi}
  isi={rows}
  on:perintah_hapus={hapus}
/>
