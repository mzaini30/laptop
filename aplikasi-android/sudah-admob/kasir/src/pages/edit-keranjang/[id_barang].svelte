<script>
  import { push } from "svelte-spa-router";

  export let params = {};

  let banyak = 0;
  let harga_jual;

  let datanya = {};
  let ambil = JSON.parse(localStorage.list_pembelian);
  datanya = ambil.filter((x) => x.id_transaksi == params.id_barang)[0];
  banyak = datanya.banyak;
  harga_jual = datanya.harga_jual;

  function update() {
    let data_mentah = JSON.parse(localStorage.list_pembelian);
    let temukan = data_mentah.find((x) => x.id_transaksi == params.id_barang);
    if (temukan) {
      temukan.harga_jual = +harga_jual;
      temukan.banyak = +banyak;
    }
    console.log(data_mentah);
    localStorage.list_pembelian = JSON.stringify(data_mentah);
    push("/");
  }
</script>

<!-- {JSON.stringify(ambil)} -->

<form action="" on:submit|preventDefault={update}>
  <p>Nama Barang: <strong>{datanya.nama_barang}</strong></p>
  <div class="form-control w-full max-w-xs">
    <label class="label">
      <span class="label-text">Harga Jual</span>
    </label>
    <input
      type="tel"
      bind:value={harga_jual}
      class="input input-bordered w-full max-w-xs"
    />
  </div>
  <div class="form-control w-full max-w-xs">
    <label class="label">
      <span class="label-text">Banyak</span>
    </label>
    <input
      type="tel"
      bind:value={banyak}
      class="input input-bordered w-full max-w-xs"
    />
  </div>
  <div class="mt-3">
    <button class="btn">Update</button>
  </div>
</form>
<!-- <p>Harga Jual: {(+datanya.harga_jual).toLocaleString()}</p> -->
<!-- <p>Banyak Penjualan:</p>
<form action="" on:submit|preventDefault={update}>
  <input type="tel" bind:value={banyak} required class="input input-bordered" />
  <button class="btn">Update Banyak</button>
</form> -->
