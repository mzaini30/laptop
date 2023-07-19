<script>
  import Judul from "../../komponen/judul.svelte";
  import Tombol from "../../komponen/tombol.svelte";
  import Textarea from "../../komponen/textarea.svelte";
  import Tabel from "../../komponen/tabel.svelte";
  import { header_data_karyawan } from "../../data/header";
  import localforage from "localforage";
  import { push } from "svelte-spa-router";
  import jadi_array from "../../fungsi/jadi-array";

  let textarea;
  let isi = [];

  async function simpan() {
    let ambil = await localforage.getItem("dataKaryawan");

    let data = jadi_array(header_data_karyawan, textarea);

    // let data_baru = [...ambil, ...data];
    let data_baru = [];
    if (ambil) {
      data_baru = [...ambil, ...data];
    } else {
      data_baru = [...data];
    }

    let menyimpan = await localforage.setItem("dataKaryawan", data_baru);
    if (menyimpan) {
      push("/data-karyawan");
    }
  }

  document.title = "Tambah Data Karyawan (Banyak)";
</script>

<Judul isi="Tambah Data Karyawan (Banyak)" />
<div class="grid grid-cols-2 gap-5 pt-2">
  <div>
    <div class="grid grid-cols-1 gap-3">
      <div>
        <Tombol
          teks="Download Sampel"
          on:klik={() => {
            location.href = "/sampel data karyawan.xlsx";
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
            isi = jadi_array(header_data_karyawan, textarea);
          }}
        />
        <Tombol teks="Simpan" on:klik={simpan} />
      </div>
    </div>
  </div>

  <div class="[&_.control]:hidden">
    <Tabel {isi} header={header_data_karyawan} />
  </div>
</div>
