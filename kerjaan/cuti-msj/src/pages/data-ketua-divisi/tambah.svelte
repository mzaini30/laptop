<script>
  import Departemen from "../../yaml/departemen.yml";
  import Jabatan from "../../yaml/jabatan.yml";
  import Level from "../../yaml/level.yml";
  import Seksi from "../../yaml/seksi.yml";
  import StKel from "../../yaml/st-kel.yml";
  import Status from "../../yaml/status.yml";
  import SubDepartemen from "../../yaml/sub-departemen.yml";
  import OptionKosong from "../../komponen/option-kosong.svelte";
  import localforage from "localforage";
  import logo from "../../gambar/harum-energy.png";
  import toast from 'only-toast'

  let npk = "";
  let nama = "";
  let departemen = "";
  let subDepartemen = "";
  let seksi = "";
  let jabatan = "";
  let level = "";
  let status = "";
  let telpon = "";
  let doh = "";
  let poh = "";
  let stKel = "";
  const judul = "Tambah Data Ketua Divisi";
  document.title = judul;

  // Notification.requestPermission();

  async function simpan() {
    let data = await localforage.getItem("data ketua divisi");
    const data_baru = {
      id: crypto.randomUUID(),
      nama,
      divisi: departemen,
    };
    if (data) {
      data = [...data, data_baru];
      const simpan = await localforage.setItem("data ketua divisi", data);
      if (simpan) {
        // new Notification("Data berhasil disimpan", {
        //   body: "Data berhasil disimpan",
        //   icon: logo,
        // });
        toast('Data berhasil disimpan')
      }
    } else {
      const simpan = await localforage.setItem("data ketua divisi", [
        data_baru,
      ]);
      if (simpan) {
        // new Notification("Data berhasil disimpan", {
        //   body: "Data berhasil disimpan",
        //   icon: logo,
        // });
        toast('Data berhasil disimpan')
      }
    }
    nama = "";
    departemen = "";
  }
</script>

<p class="uppercase text-lg mb-2 font-bold">{judul}</p>
<form action="" on:submit|preventDefault={simpan}>
  <div class="form grid grid-cols-2 gap-2">
    <div>
      <label for="">Nama</label>
      <input bind:value={nama} type="text" />
    </div>
    <div>
      <label for="">Departemen</label>
      <select name="" id="" bind:value={departemen}>
        <OptionKosong />
        {#each Departemen as x}
          <option>{x}</option>
        {/each}
      </select>
    </div>
  </div>
  <div class="flex justify-end">
    <input
      type="submit"
      value="Simpan"
      class="mt-2 bg-black rounded p-2 border cursor-pointer text-white"
    />
  </div>
</form>

<style>
  :global(.form input),
  :global(.form select) {
    border: 1px solid var(--gray-300);
    width: 100%;
    padding: 0.25rem;
  }
</style>
