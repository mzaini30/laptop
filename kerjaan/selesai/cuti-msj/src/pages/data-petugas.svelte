<script>
  import Judul from "../komponen/judul.svelte";
  import Label from "../komponen/label.svelte";
  import Input from "../komponen/input.svelte";
  import localforage from "localforage";
  import toast from "only-toast";
  import Tombol from "../komponen/tombol.svelte";

  let admin;
  let hrd;

  async function masukkan_data() {
    admin = await localforage.getItem("admin");
    hrd = await localforage.getItem("hrd");
  }
  masukkan_data();

  async function ubah_data() {
    let ubah_admin = await localforage.setItem("admin", admin);
    let ubah_hrd = await localforage.setItem("hrd", hrd);
    if (ubah_admin && ubah_hrd) {
      toast("Admin dan HRD sudah diubah");
    }
  }
</script>

<svelte:head>
  <title>Data Petugas</title>
</svelte:head>

<div class="mb-3">
  <Judul isi="Data Petugas" />
</div>
<form
  action=""
  on:submit|preventDefault={ubah_data}
  class="[&_.jarak]:mb-3 last:[&_.jarak]:mb-0"
>
  <div class="jarak">
    <Label tulisan="Admin" />
    <Input bind:value={admin} />
  </div>
  <div class="jarak">
    <Label tulisan="HRD" />
    <Input bind:value={hrd} />
  </div>
  <div class="jarak">
    <Tombol teks="Simpan" />
  </div>
</form>
