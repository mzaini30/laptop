<script>
  import TombolTambah from "../elemen/tombol-tambah.svelte";
  import TombolJoin from "../elemen/tombol-join.svelte";

  let data = [];
  if (localStorage.data) {
    let semua_data = JSON.parse(localStorage.data);
    let terkumpul = [];
    for (let x of semua_data) {
      if (!terkumpul.includes(x.bulan)) {
        terkumpul = [...terkumpul, x.bulan];
      }
    }
    data = [...terkumpul].reverse();
  }
</script>

<div class="p-4">
  <div class="rounded border overflow-hidden">
    {#each data as x}
      <a class="block p-3 border-b" href="#/tampil/{encodeURIComponent(x)}"
        >{x}</a
      >
    {/each}
  </div>
  <TombolJoin></TombolJoin>
</div>

<TombolTambah />
