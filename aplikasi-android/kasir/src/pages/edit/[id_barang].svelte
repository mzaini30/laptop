<script>
  import { push } from "svelte-spa-router";

  export let params = {};

  let nama_barang = "";
  let harga_beli = "";
  let harga_jual = "";
  let semua_data = [];

  if (localStorage.semua_data) {
    semua_data = JSON.parse(localStorage.semua_data);

    let datanya = semua_data.filter((x) => x.id_barang == params.id_barang)[0];

    nama_barang = datanya.nama_barang;
    harga_beli = datanya.harga_beli;
    harga_jual = datanya.harga_jual;
  }

  function update() {
    semua_data = JSON.parse(localStorage.semua_data);

    let datanya = semua_data.filter((x) => x.id_barang != params.id_barang);

    let data_baru = {
      id_barang: params.id_barang,
      nama_barang,
      harga_beli,
      harga_jual,
    };

    let data_baru_terkumpul = [...datanya, data_baru];
    localStorage.semua_data = JSON.stringify(data_baru_terkumpul);
    push("/list-harga");
  }
</script>

<p class="text-xl">Ubah Data</p>
<form action="" on:submit|preventDefault={update}>
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
  <button class="btn mt-3">Update</button>
</form>
