<script>
  import Router from "svelte-spa-router";
  // @ts-ignore
  import routes from "virtual:generated-pages-svelte";
  import "@unocss/reset/tailwind.css";
  // import "warna-tailwind/warna.css";
  import "./App.css";
  // import "uno.css";
  import stat_aja from "stat-aja";
  import { ukuran_font } from "./state";

  if (localStorage.ukuran_font) {
    $ukuran_font = JSON.parse(localStorage.ukuran_font);
  }

  function ubah_ukuran(sebanyak) {
    $ukuran_font = $ukuran_font + sebanyak;
    if ($ukuran_font < 0) {
      $ukuran_font = 0;
    }
    localStorage.ukuran_font = JSON.stringify($ukuran_font);
  }

  // stat_aja({ judul: "Judul Aplikasi", tipe: "Aplikasi Android" });
</script>

<Router {routes} />
<button
  class="btn btn-circle fixed bottom-2 left-2 bg-info"
  on:click={() => ubah_ukuran(-2)}>➖</button
>
<button
  class="btn btn-circle fixed bottom-2 right-2 bg-info"
  on:click={() => ubah_ukuran(2)}>➕</button
>
