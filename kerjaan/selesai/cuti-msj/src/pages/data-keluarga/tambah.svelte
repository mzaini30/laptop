<script>
  import OptionKosong from "../../komponen/option-kosong.svelte";
  import localforage from "localforage";
  import Tombol from "../../komponen/tombol.svelte";
  import toast from 'only-toast'

  // Notification.requestPermission();

  let data_npk_dan_nama = [];
  let npk_dan_nama;
  let tempat_lahir;
  let tanggal_lahir;
  let jenis_kelamin;
  let status;
  let nama;

  function kosongkan() {
    npk_dan_nama = "";
    nama = "";
    tempat_lahir = "";
    tanggal_lahir = "";
    jenis_kelamin = "";
    status = "";
  }

  async function ambil_npk() {
    let data = await localforage.getItem("dataKaryawan");
    if (data) {
      data = data.sort((a, b) => (a.npk > b.npk ? 1 : -1));
      for (let x of data) {
        data_npk_dan_nama = [...data_npk_dan_nama, `${x.npk} - ${x.nama}`];
      }
    }
  }
  ambil_npk();

  async function tambah_baru() {
    let data = await localforage.getItem("dataKeluarga");
    //     export const header_data_keluarga = [
    //   "npk",
    //   "nama",
    //   "tempat_lahir",
    //   "tanggal_lahir",
    //   "jenis_kelamin",
    //   "status",
    // ];
    let data_baru = {
      id: crypto.randomUUID(),
      npk: npk_dan_nama.split(" - ")[0],
      // nama_karyawan: npk_dan_nama.split(" - ")[1],
      nama,
      tempat_lahir,
      tanggal_lahir,
      jenis_kelamin,
      status,
    };
    if (data) {
      data = [...data, data_baru];
      const simpan = await localforage.setItem("dataKeluarga", data);
      if (simpan) {
        // new Notification("Data berhasil disimpan", {
        //   body: "Data berhasil disimpan",
        // });
        toast('Data berhasil disimpan')
        kosongkan();
      }
    } else {
      const simpan = await localforage.setItem("dataKeluarga", [data_baru]);
      if (simpan) {
        // new Notification("Data berhasil disimpan", {
        //   body: "Data berhasil disimpan",
        // });
        toast('Data berhasil disimpan')
        kosongkan();
      }
    }
  }
</script>

<div>TAMBAH DATA KELUARGA</div>

<form on:submit|preventDefault={tambah_baru} action="" class="form2">
  <label for="">NPK - Nama Karyawan</label>
  <select name="" id="" bind:value={npk_dan_nama}>
    <OptionKosong />
    {#if data_npk_dan_nama.length > 0}
      {#each data_npk_dan_nama as x}
        <option>{x}</option>
      {/each}
    {/if}
  </select>
  <label for="">Nama Keluarga</label>
  <input type="text" bind:value={nama} />
  <label for="">Tempat Lahir</label>
  <input type="text" bind:value={tempat_lahir} />
  <label for="">Tanggal Lahir</label>
  <input type="date" bind:value={tanggal_lahir} />
  <label for="">Jenis Kelamin</label>
  <select name="" id="" bind:value={jenis_kelamin}>
    <OptionKosong />
    <option>Laki-laki</option>
    <option>Perempuan</option>
  </select>
  <label for="">Status</label>
  <select name="" id="" bind:value={status}>
    <OptionKosong />
    <option>Istri</option>
    <option>Anak 1</option>
    <option>Anak 2</option>
    <option>Anak 3</option>
    <option>Anak 4</option>
  </select>
  <div class="mt-3">
    <Tombol teks="Simpan" />
  </div>
</form>

<style>
  :global(.form2 input),
  :global(.form2 select) {
    border: 1px solid var(--gray-300);
    width: 100%;
    padding: 0.25rem;
  }
</style>
