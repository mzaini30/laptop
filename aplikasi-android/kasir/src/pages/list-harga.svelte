<script>
  import { push } from "svelte-spa-router";

  let semua_data = [];

  if (localStorage.semua_data) {
    semua_data = JSON.parse(localStorage.semua_data);
  }
</script>

<button class="btn" on:click={() => push("/tambah-data")}>Tambah Data</button>
<ul class="menu mt-2 bg-base-200 w-full rounded-box">
  {#each semua_data.sort( (a, b) => (a.nama_barang > b.nama_barang ? 1 : -1), ) as x}
    <li>
      <a class="" href="#/edit/{x.id_barang}">
        <span>{x.nama_barang}</span>
        <span class="badge">Harga Beli: {(+x.harga_beli).toLocaleString()}</span
        >
        <span class="badge">Harga Jual: {(+x.harga_jual).toLocaleString()}</span
        >
      </a>
    </li>
  {/each}
</ul>
