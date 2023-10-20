<script>
  import gambar from "../../gambar/logo-mabaiz.png";
  import data from "../../tiddlers/published.json";

  export let params = {};

  let terpilih = data
    .filter((x) => x.angkatan == params.tahun)
    .sort((a, b) => (a.title > b.title ? 1 : -1));
</script>

<img src={gambar} alt="" class="w-20 block mx-auto" />
<h1 class="font-[Updock] text-center text-3xl py-5">Angkatan {params.tahun}</h1>
<ul class="menu bg-base-200 w-full rounded-box">
  {#each terpilih as x}
    <li>
      <a href="#/baca/{x.published_date}" class="linknya">
        <span class="block font-bold">{x.title}</span>
        <span class="block">{x.penulis}</span>
      </a>
    </li>
  {/each}
</ul>

<style>
  .linknya {
    grid-auto-flow: row;
  }
</style>
