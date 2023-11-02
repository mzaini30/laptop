<script>
  import { push } from "svelte-spa-router";

  let nama_barang = "";
  let harga_beli = "";
  let harga_jual = "";
  let semua_data = [];

  if (localStorage.semua_data) {
    semua_data = JSON.parse(localStorage.semua_data);
  }

  function tambah_baru() {
    semua_data = [
      ...semua_data,
      {
        id_barang: crypto.randomUUID(),
        nama_barang,
        harga_beli,
        harga_jual,
      },
    ];
    localStorage.semua_data = JSON.stringify(semua_data);
    push("/list-harga");
  }
</script>

<p class="text-xl">Tambah Data</p>
<form action="" on:submit|preventDefault={tambah_baru}>
  <div class="form-control w-full">
    <label class="label">
      <span class="label-text">Nama Barang</span>
    </label>
    <input
      type="text"
      bind:value={nama_barang}
      required
      placeholder=""
      class="input input-bordered block w-full"
    />
  </div>
  <div class="form-control w-full">
    <label class="label">
      <span class="label-text">Harga Beli</span>
    </label>
    <input
      type="tel"
      bind:value={harga_beli}
      required
      placeholder=""
      class="input input-bordered block w-full"
    />
  </div>
  <div class="form-control w-full">
    <label class="label">
      <span class="label-text">Harga Jual</span>
    </label>
    <input
      type="tel"
      bind:value={harga_jual}
      required
      placeholder=""
      class="input input-bordered block w-full"
    />
  </div>
  <button class="btn mt-3">Simpan</button>
</form>
