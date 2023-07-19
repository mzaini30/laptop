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
    npk: "",
    nama: "",
    departemen: "",
    subDepartemen: "",
    seksi: "",
    jabatan: "",
    level: "",
    status: "",
    telpon: "",
    doh: "",
    poh: "",
    stKel: "",
  };

  async function ambilDatanya() {
    let semuaData = await localforage.getItem("dataKaryawan");
    semuaData = semuaData.filter((x) => x.id == params.id);
    data = semuaData[0];
  }
  ambilDatanya();

  document.title = "Edit Data Karyawan";

  // Notification.requestPermission();

  async function simpan() {
    let semuaData = await localforage.getItem("dataKaryawan");
    semuaData = semuaData.filter((x) => x.id != params.id);
    semuaData = [...semuaData, data];
    const simpanYa = await localforage.setItem("dataKaryawan", semuaData);
    if (simpanYa) {
      // new Notification("Data tersimpan", {
      //   body: "Data karyawan berhasil disimpan",
      // });
      toast('Data tersimpan')
      push("/data-karyawan");
    }
  }
</script>

<p class="uppercase text-lg mb-2 font-bold">Edit Data Karyawan</p>
<form action="" on:submit|preventDefault={simpan}>
  <div class="form grid grid-cols-2 gap-2">
    <div>
      <label for="">NPK</label>
      <input type="text" readonly class="bg-gray-100" bind:value={data.npk} />
      <label for="">Nama</label>
      <input type="text" bind:value={data.nama} />
      <label for="">Departemen</label>
      <select name="" id="" bind:value={data.departemen}>
        <OptionKosong />
        {#each departemen as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Sub Departemen</label>
      <select name="" id="" bind:value={data.subDepartemen}>
        <OptionKosong />
        {#each subDepartemen as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Seksi</label>
      <select name="" id="" bind:value={data.seksi}>
        <OptionKosong />
        {#each seksi as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Jabatan</label>
      <select name="" id="" bind:value={data.jabatan}>
        <OptionKosong />
        {#each jabatan as x}
          <option>{x}</option>
        {/each}
      </select>
    </div>
    <div>
      <label for="">Level</label>
      <select name="" id="" bind:value={data.level}>
        <OptionKosong />
        {#each level as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Status</label>
      <select name="" id="" bind:value={data.status}>
        <OptionKosong />
        {#each status as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Telpon</label>
      <input type="text" bind:value={data.telpon} />
      <label for="">DOH</label>
      <input type="text" bind:value={data.doh} />
      <label for="">POH</label>
      <input type="text" bind:value={data.poh} />
      <label for="">St. Kel</label>
      <select name="" id="" bind:value={data.stKel}>
        <OptionKosong />
        {#each stKel as x}
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
