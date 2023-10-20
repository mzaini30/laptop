<script>
  import { api, tulisan } from "../api";
  import excalibur from "excalibur-zen";

  let data;

  if (localStorage.tulisan) {
    data = JSON.parse(localStorage.tulisan);
  }

  async function dapatkanTulisan() {
    let datanya = await excalibur(api, {
      id: tulisan,
      kunci: "ringkasan",
    });
    datanya = await datanya.json();
    data = datanya;
    localStorage.tulisan = JSON.stringify(datanya);
  }
  dapatkanTulisan();
</script>

<div class="p-2 mb-3">
  <a
    href="https://play.google.com/store/apps/details?id=com.daarutthayyibah.tanyasyariah"
    class="border p-2 border-black rounded mr-2">Review App</a
  >
  <a
    href="https://play.google.com/store/apps/dev?id=5401138465689796048"
    class="border p-2 border-black rounded">Other Apps</a
  >
</div>

{#if data}
  <div class="p-2 pt-0 grid grid-cols-1 gap-2">
    {#each data as x}
      <a href="#/baca-tulisan/{x.id}" class="card border-2 border-black p-2">
        <h2>{x.judul}</h2>
        <p class="text-sm italic">Oleh {x.penulis}</p>
      </a>
    {/each}
  </div>
{/if}

<style>
  .card {
    box-shadow: 3px 3px 0 0 black;
  }
</style>
