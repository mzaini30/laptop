<script>
  import Judul from "../komponen/judul.svelte";
  import localforage from "localforage";
  import Kosong from "../komponen/option-kosong.svelte";
  import Tombol from "../komponen/tombol.svelte";
  import { push } from "svelte-spa-router";

  const judul = "Semua Cuti";
  let banyaknya = 0;

  let id_cuti_terpilih;

  let data_diambil;

  async function cek_banyaknya() {
    let data = await localforage.getItem("input data cuti");
    if (data) {
      banyaknya = data.length;
      data_diambil = data;
    }
  }
  cek_banyaknya();

  let is_tiket = "Tidak ada tiket";
  $: if (id_cuti_terpilih) {
    async function cek_tiket() {
      let data = await localforage.getItem("input data cuti");
      if (data) {
        is_tiket = data.filter((x) => x.id == id_cuti_terpilih)[0].tiket;
      }
    }
    cek_tiket();
  }
</script>

<svelte:head>
  <title>{judul}</title>
</svelte:head>

<div class="mb-3">
  <Judul isi="{judul} ({banyaknya} formulir)" />
</div>
{#if data_diambil}
  <select
    name=""
    class="retro w-full border-2 border-black p-2"
    bind:value={id_cuti_terpilih}
    id=""
  >
    <Kosong />
    {#each data_diambil as x}
      <option value={x.id}>{x.nomor} - {x.npk} - {x.nama}</option>
      <!--  - {x.tiket} -->
    {/each}
  </select>
{/if}
{#if id_cuti_terpilih}
  <div class="mt-3">
    <Tombol
      on:klik={() => push(`/cetak/form-cuti/${id_cuti_terpilih}`)}
      teks="Cetak Form Cuti"
    />
    {#if is_tiket == "Tiket"}
      <span class="[&>*]:(!bg-white !border !border-black !text-black)">
        <Tombol
          on:klik={() => push(`/cetak/form-tiket/${id_cuti_terpilih}`)}
          teks="Cetak Tiket"
        />
      </span>
    {/if}
    <!-- <Tombol
      on:klik={() => push(`/cetak/form-tiket/${id_cuti_terpilih}`)}
      teks="Cetak Form Tiket"
    /> -->
  </div>
{/if}

<style>
  .retro {
    box-shadow: 5px 5px 0 0 black;
  }
</style>
