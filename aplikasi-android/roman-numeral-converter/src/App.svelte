<script>
  import Router from "svelte-spa-router";
  // @ts-ignore
  import routes from "virtual:generated-pages-svelte";
  import "@unocss/reset/tailwind.css";
  // import "warna-tailwind/warna.css";
  import "./App.css";
  // import "uno.css";
  import stat_aja from "stat-aja";
  import { tab_aktif } from "./state/tab-aktif";

  // stat_aja({ judul: "Judul Aplikasi", tipe: "Aplikasi Android" });
</script>

<div class="p-3">
  <div class="flex justify-between">
    <a
      href="https://play.google.com/store/apps/details?id=com.romannumeral.converter"
      class="btn">Review App</a
    >
    <a
      href="https://play.google.com/store/apps/dev?id=5401138465689796048"
      class="btn">Other Apps</a
    >
  </div>
  <div class="flex justify-center">
    <div class="tabs my-7">
      <a
        href="#/"
        class="tab tab-bordered {$tab_aktif == 'ke romawi'
          ? 'tab-active'
          : null}">10 ➡️ X</a
      >
      <a
        href="#/ke-angka"
        class="tab tab-bordered {$tab_aktif == 'ke angka'
          ? 'tab-active'
          : null}">X ➡️ 10</a
      >
    </div>
  </div>
  <Router {routes} />
</div>
