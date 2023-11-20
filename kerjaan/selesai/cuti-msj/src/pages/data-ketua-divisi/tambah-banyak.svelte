<script>
  import Judul from "../../komponen/judul.svelte";
  import Tombol from "../../komponen/tombol.svelte";
  import Textarea from "../../komponen/textarea.svelte";
  import Tabel from "../../komponen/tabel.svelte";
  import { ketua_divisi } from "../../data/header";
  import localforage from "localforage";
  import { push } from "svelte-spa-router";
  import jadi_array from "../../fungsi/jadi-array";

  let textarea;
  let isi = [];

  async function simpan() {
    let ambil = await localforage.getItem("data ketua divisi");

    let data = jadi_array(ketua_divisi, textarea);

    // let data_baru = [...ambil, ...data];
    let data_baru = [];
    if (ambil) {
      data_baru = [...ambil, ...data];
    } else {
      data_baru = [...data];
    }

    let menyimpan = await localforage.setItem("data ketua divisi", data_baru);
    if (menyimpan) {
      push("/data-ketua-divisi");
    }
  }

  const judul = 'Tambah Data Ketua Divisi (Banyak)'

  document.title = judul;
</script>

<Judul isi={judul} />
<div class="grid grid-cols-2 gap-5 pt-2">
  <div>
    <div class="grid grid-cols-1 gap-3">
      <div>
        <Tombol
          teks="Download Sampel"
          on:klik={() => {
            location.href = "/sampel ketua divisi.xlsx";
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
            isi = jadi_array(ketua_divisi, textarea);
          }}
        />
        <Tombol teks="Simpan" on:klik={simpan} />
      </div>
    </div>
  </div>

  <div class="[&_.control]:hidden">
    <Tabel {isi} header={ketua_divisi} />
  </div>
</div>
