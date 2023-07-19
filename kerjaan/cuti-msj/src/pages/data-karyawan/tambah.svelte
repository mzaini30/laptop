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

  document.title = "Tambah Data Karyawan";

  // Notification.requestPermission();

  async function simpan() {
    let data = await localforage.getItem("dataKaryawan");
    const data_baru = {
      id: crypto.randomUUID(),
      npk,
      nama,
      departemen,
      subDepartemen,
      seksi,
      jabatan,
      level,
      status,
      telpon,
      doh,
      poh,
      stKel,
    };
    if (data) {
      data = [...data, data_baru];
      const simpan = await localforage.setItem("dataKaryawan", data);
      if (simpan) {
        // new Notification("Data berhasil disimpan", {
        //   body: "Data berhasil disimpan",
        //   icon: logo,
        // });
        toast('Data berhasil disimpan')
      }
    } else {
      const simpan = await localforage.setItem("dataKaryawan", [data_baru]);
      if (simpan) {
        // new Notification("Data berhasil disimpan", {
        //   body: "Data berhasil disimpan",
        //   icon: logo,
        // });
        toast('Data berhasil disimpan')
      }
    }
    npk = "";
    nama = "";
    departemen = "";
    subDepartemen = "";
    seksi = "";
    jabatan = "";
    level = "";
    status = "";
    telpon = "";
    doh = "";
    poh = "";
    stKel = "";
  }
</script>

<p class="uppercase text-lg mb-2 font-bold">Tambah Data Karyawan</p>
<form action="" on:submit|preventDefault={simpan}>
  <div class="form grid grid-cols-2 gap-2">
    <div>
      <label for="">NPK</label>
      <input type="text" bind:value={npk} />
      <label for="">Nama</label>
      <input bind:value={nama} type="text" />
      <label for="">Departemen</label>
      <select name="" id="" bind:value={departemen}>
        <OptionKosong />
        {#each Departemen as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Sub Departemen</label>
      <select name="" id="" bind:value={subDepartemen}>
        <OptionKosong />
        {#each SubDepartemen as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Seksi</label>
      <select name="" id="" bind:value={seksi}>
        <OptionKosong />
        {#each Seksi as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Jabatan</label>
      <select name="" id="" bind:value={jabatan}>
        <OptionKosong />
        {#each Jabatan as x}
          <option>{x}</option>
        {/each}
      </select>
    </div>
    <div>
      <label for="">Level</label>
      <select name="" id="" bind:value={level}>
        <OptionKosong />
        {#each Level as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Status</label>
      <select name="" id="" bind:value={status}>
        <OptionKosong />
        {#each Status as x}
          <option>{x}</option>
        {/each}
      </select>
      <label for="">Telpon</label>
      <input type="tel" bind:value={telpon} />
      <label for="">DOH</label>
      <input type="date" bind:value={doh} />
      <label for="">POH</label>
      <input type="text" bind:value={poh} />
      <label for="">St. Kel</label>
      <select name="" id="" bind:value={stKel}>
        <OptionKosong />
        {#each StKel as x}
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
