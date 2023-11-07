<script>
  import Chartnya from "../komponen/chart.svelte";
  import { push } from "svelte-spa-router";
  import { coin } from "../state/coin";
  import TambahBaru from "./tambah-baru.svelte";

  let halaman_terakhir = 1;
  let semua_data = []; // terbaru = paling atas (tanggal, banyaknya)

  if (localStorage.halaman_terakhir) {
    halaman_terakhir = JSON.parse(localStorage.halaman_terakhir);
  }
  if (localStorage.semua_data) {
    semua_data = JSON.parse(localStorage.semua_data);
  }

  function menuju_tambah_baru() {
    push("/tambah-baru");
    $coin -= 1;
    if ($coin < 0) {
      $coin = 10;
      Andro.reward();
    }
  }
</script>

<div class="p-3">
  <div class="mb-3">
    <a href="https://t.me/apktrihandayani" class="btn w-full">Telegram</a>
  </div>
  <Chartnya />
  <div class="card card-compact w-full bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title">Halaman Terakhir</h2>
      <p>{halaman_terakhir}</p>
      <div class="card-actions justify-end">
        <div class="indicator">
          <div class="indicator-item badge badge-error">
            {$coin == 0 ? "Ad" : $coin}
          </div>
          <button class="btn btn-primary" on:click={menuju_tambah_baru}
            >Update</button
          >
        </div>
      </div>
    </div>
  </div>
</div>
