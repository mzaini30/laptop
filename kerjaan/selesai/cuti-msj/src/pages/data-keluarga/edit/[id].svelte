<script>
  import OptionKosong from "../../../komponen/option-kosong.svelte";
  import localforage from "localforage";
  import Tombol from "../../../komponen/tombol.svelte";
  import toast from 'only-toast'

  export let params = {};

  let data = {
    id: "",
    npk: "",
    nama_karyawan: "",
    nama_keluarga: "",
    tempat_lahir: "",
    tanggal_lahir: "",
    jenis_kelamin: "",
    status: "",
  };

  async function ambilDatanya() {
    let semuaData = await localforage.getItem("dataKeluarga");
    semuaData = semuaData.filter((x) => x.id == params.id);
    data = semuaData[0];
    console.log(data);
  }
  ambilDatanya();

  document.title = "Edit Data Keluarga";

  // Notification.requestPermission();

  async function simpan() {
    let semuaData = await localforage.getItem("dataKeluarga");
    semuaData = semuaData.filter((x) => x.id != params.id);

    semuaData = [...semuaData, data];
    const simpanYa = await localforage.setItem("dataKeluarga", semuaData);
    if (simpanYa) {
      // new Notification("Data tersimpan", {
      //   body: "Data keluarga berhasil disimpan",
      // });
      toast('Data tersimpan')
    }
  }
</script>

<p class="uppercase text-lg mb-2 font-bold">Edit Data Keluarga</p>
<form class="form" action="" on:submit|preventDefault={simpan}>
  <label for="">Nama</label>
  <input type="text" bind:value={data.nama} />
  <label for="">Tempat Lahir</label>
  <input type="text" bind:value={data.tempat_lahir} />
  <label for="">Tanggal Lahir</label>
  <input type="date" bind:value={data.tanggal_lahir} />
  <label for="">Jenis Kelamin</label>
  <select name="" id="" bind:value={data.jenis_kelamin}>
    <OptionKosong />
    <option>Laki-laki</option>
    <option>Perempuan</option>
  </select>
  <label for="">Status</label>
  <select name="" id="" bind:value={data.status}>
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
  :global(.form input),
  :global(.form select) {
    border: 1px solid var(--gray-300);
    width: 100%;
    padding: 0.25rem;
  }
</style>
