<script>
  import { push } from "svelte-spa-router";

  export let params = {};

  let banyak = 0;

  let datanya = {};
  let ambil = JSON.parse(localStorage.list_pembelian);
  datanya = ambil.filter((x) => x.id_transaksi == params.id_barang)[0];
  banyak = datanya.banyak;

  function update() {
    let data_mentah = JSON.parse(localStorage.list_pembelian);
    let temukan = data_mentah.find((x) => x.id_transaksi == params.id_barang);
    if (temukan) {
      temukan.banyak = +banyak;
    }
    console.log(data_mentah);
    localStorage.list_pembelian = JSON.stringify(data_mentah);
    push("/");
  }
</script>

<p>{datanya.nama_barang}</p>
<p>Harga: {(+datanya.harga_jual).toLocaleString()}</p>
<p>Banyak Pembelian:</p>
<form action="" on:submit|preventDefault={update}>
  <input type="tel" bind:value={banyak} required class="input input-bordered" />
  <button class="btn">Update Banyak</button>
</form>
