<script>
  import Router from "svelte-spa-router";
  // @ts-ignore
  import routes from "virtual:generated-pages-svelte";
  import "@unocss/reset/tailwind.css";
  // import "warna-tailwind/warna.css";
  import "./App.css";
  import "uno.css";
  import stat_aja from "stat-aja";

  // stat_aja({ judul: "Judul Aplikasi", tipe: "Aplikasi Android" });
</script>

<a href="#/" class="sticky top-0 p-3 block border-b">Judul Aplikasi</a>
<Router {routes} />
