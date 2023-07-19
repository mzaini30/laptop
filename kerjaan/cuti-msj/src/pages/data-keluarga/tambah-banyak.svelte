<script>
  import Judul from "../../komponen/judul.svelte";
  import Tombol from "../../komponen/tombol.svelte";
  import Textarea from "../../komponen/textarea.svelte";
  import Tabel from "../../komponen/tabel.svelte";
  import { header_data_keluarga } from "../../data/header";
  import localforage from "localforage";
  import { push } from "svelte-spa-router";
  import jadi_array from "../../fungsi/jadi-array";
  import toast from 'only-toast'

  let textarea;
  let isi = [];

  async function simpan() {
    let ambil = await localforage.getItem("dataKeluarga");

    let data = jadi_array(header_data_keluarga, textarea);

    // let data_baru = [...ambil, ...data];
    let data_baru = [];
    if (ambil) {
      data_baru = [...ambil, ...data];
    } else {
      data_baru = [...data];
    }

    let menyimpan = await localforage.setItem("dataKeluarga", data_baru);
    if (menyimpan) {
      push("/data-keluarga");
    }
  }

  document.title = "Tambah Data Keluarga (Banyak)";
</script>

<Judul isi="Tambah Data Keluarga (Banyak)" />
<div class="grid grid-cols-2 gap-5 pt-2">
  <div>
    <div class="grid grid-cols-1 gap-3">
      <div>
        <Tombol
          teks="Download Sampel"
          on:klik={() => {
            location.href = "/sampel data keluarga.xlsx";
          }}
        />
      </div>
      <hr />
      <p class="text-lg">Salin data dari Excel tadi ke kolom di bawah ini:</p>
      <Textarea bind:value={textarea} />
      <div class="flex justify-between">
        <Tombol
          teks="Preview"
          on:klik={() => {
            isi = jadi_array(header_data_keluarga, textarea);
          }}
        />
        <Tombol teks="Simpan" on:klik={simpan} />
      </div>
    </div>
  </div>

  <div class="[&_.control]:hidden">
    <Tabel {isi} header={header_data_keluarga} />
  </div>
</div>
