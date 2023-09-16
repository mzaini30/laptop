<script>
  import Router from "svelte-spa-router";
  // @ts-ignore
  import routes from "virtual:generated-pages-svelte";
  import "@unocss/reset/tailwind.css";
  // import "warna-tailwind/warna.css";
  import "./App.css";
  // import "uno.css";
  import stat_aja from "stat-aja";

  // stat_aja({ judul: "Judul Aplikasi", tipe: "Aplikasi Android" });
</script>

<div class="p-3 grid grid-cols-6 gap-2">
  <div class="col-span-1">
    <ul class="menu bg-base-200 w-full rounded-box">
      <li><a href="#/">Beranda</a></li>
      <li><a href="#/list-harga">List Harga</a></li>
      <li><a href="#/rekap">Rekap</a></li>
    </ul>
  </div>
  <div class="col-span-5">
    <Router {routes} />
  </div>
</div>
