<script>
  import Chartnya from "../komponen/chart.svelte";
  import { push } from "svelte-spa-router";

  let listnya = [];
  if (localStorage.listnya) {
    listnya = JSON.parse(localStorage.listnya);
  }

  // let halaman_terakhir = 1;
  // let semua_data = []; // terbaru = paling atas (tanggal, banyaknya)

  // if (localStorage.halaman_terakhir) {
  //   halaman_terakhir = JSON.parse(localStorage.halaman_terakhir);
  // }
  // if (localStorage.semua_data) {
  //   semua_data = JSON.parse(localStorage.semua_data);
  // }
</script>

<div class="p-3 grid grid-cols-1 gap-3">
  <div>
    <button class="btn" on:click={() => push("/edit-list")}>Edit List</button>
  </div>
  {#each listnya.sort((a, b) => (a.judul > b.judul ? 1 : -1)) as x}
    <div class="bg-neutral">
      <Chartnya></Chartnya>
    </div>
    <div class="card card-compact w-full bg-neutral shadow-xl">
      <div class="card-body">
        <h2 class="card-title">{x.judul}</h2>
        <p></p>
      </div>
    </div>
  {/each}
</div>
