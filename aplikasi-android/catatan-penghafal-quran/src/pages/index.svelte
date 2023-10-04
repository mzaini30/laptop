<script>
  import gambar from "../gambar/logo-mabaiz.png";
  import data from "../tiddlers/published.json";

  let semua_angkatan = [];
  for (let z of data) {
    semua_angkatan = [...semua_angkatan, z.angkatan];
  }
  semua_angkatan = [...new Set(semua_angkatan)];
  semua_angkatan = semua_angkatan.sort().reverse();
</script>

<img src={gambar} alt="" class="w-20 block mx-auto" />
<h1 class="font-[Updock] text-center text-3xl py-5">Catatan Penghafal Quran</h1>
<ul class="menu bg-base-200 w-full rounded-box">
  {#each semua_angkatan as x}
    <li><a href="#/angkatan/{x}">Angkatan {x}</a></li>
  {/each}
</ul>
