<script>
  export let params = {};

  import data from "../../data.json";
  import { push } from "svelte-spa-router";

  let kumpulan_halaman = [];

  function dapatkan_kumpulan_halaman() {
    let data_terpilih = data[params.urutan];
    kumpulan_halaman = [];
    for (let x = data_terpilih.dari; x <= data_terpilih.ke; x++) {
      kumpulan_halaman = [...kumpulan_halaman, x];
    }
    console.log(kumpulan_halaman);
  }
  dapatkan_kumpulan_halaman();

  $: if (params.urutan) {
    dapatkan_kumpulan_halaman();
  }
</script>

{#each kumpulan_halaman as x}
  <img src="gambar/55644308_page-00{x}.jpg" class="w-full" alt="" />
{/each}
<div class="p-3 flex justify-between">
  <button class="btn" on:click={() => push("/")}>Home</button>
  {#if +params.urutan + 1 != data.length}
    <button
      class="btn"
      on:click={() => {
        push(`/halaman/${+params.urutan + 1}`);
        scrollTo(0, 0);
      }}>Next</button
    >
  {/if}
</div>
