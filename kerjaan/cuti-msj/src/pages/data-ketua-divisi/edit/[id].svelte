<script>
  import departemen from "../../../yaml/departemen.yml";
  import jabatan from "../../../yaml/jabatan.yml";
  import level from "../../../yaml/level.yml";
  import seksi from "../../../yaml/seksi.yml";
  import stKel from "../../../yaml/st-kel.yml";
  import status from "../../../yaml/status.yml";
  import subDepartemen from "../../../yaml/sub-departemen.yml";
  import OptionKosong from "../../../komponen/option-kosong.svelte";
  import localforage from "localforage";
  import { push } from "svelte-spa-router";
  import toast from 'only-toast'

  export let params = {};

  let data = {
    nama: "",
    divisi: "",
  };

  async function ambilDatanya() {
    let semuaData = await localforage.getItem("data ketua divisi");
    semuaData = semuaData.filter((x) => x.id == params.id);
    data = semuaData[0];
  }
  ambilDatanya();

  let judul = 'Edit Data Ketua Divisi'

  document.title = judul;

  // Notification.requestPermission();

  async function simpan() {
    let semuaData = await localforage.getItem("data ketua divisi");
    semuaData = semuaData.filter((x) => x.id != params.id);
    semuaData = [...semuaData, data];
    const simpanYa = await localforage.setItem("data ketua divisi", semuaData);
    if (simpanYa) {
      // new Notification("Data tersimpan", {
      //   body: "Data ketua divisi berhasil disimpan",
      // });
      toast('Data tersimpan')
      push("/data-ketua-divisi");
    }
  }
</script>

<p class="uppercase text-lg mb-2 font-bold">{judul}</p>
<form action="" on:submit|preventDefault={simpan}>
  <div class="form grid grid-cols-2 gap-2">
    <div>
      <label for="">Nama</label>
      <input type="text" bind:value={data.nama} />
      
    </div>
    <div>
      <label for="">Departemen</label>
      <select name="" id="" bind:value={data.divisi}>
        <OptionKosong />
        {#each departemen as x}
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
