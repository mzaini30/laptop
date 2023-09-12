<script>
  import Chartnya from "../komponen/chart.svelte";
  import { push } from "svelte-spa-router";

  let halaman_terakhir = 1;
  let semua_data = []; // terbaru = paling atas (tanggal, banyaknya)

  if (localStorage.halaman_terakhir) {
    halaman_terakhir = JSON.parse(localStorage.halaman_terakhir);
  }
  if (localStorage.semua_data) {
    semua_data = JSON.parse(localStorage.semua_data);
  }
</script>

<div class="p-3">
  <Chartnya></Chartnya>
  <div class="card card-compact w-full bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title">Halaman Terakhir</h2>
      <p>{halaman_terakhir}</p>
      <div class="card-actions justify-end">
        <button class="btn btn-primary" on:click={() => push("/tambah-baru")}
          >Update</button
        >
      </div>
    </div>
  </div>
</div>
