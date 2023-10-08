<script>
  import Router from "svelte-spa-router";
  // @ts-ignore
  import routes from "virtual:generated-pages-svelte";
  // import "@unocss/reset/tailwind.css";
  // import "warna-tailwind/warna.css";
  import "./App.css";
  // import "uno.css";
  import stat_aja from "stat-aja";

  // stat_aja({ judul: "Judul Aplikasi", tipe: "Aplikasi Android" });
</script>

<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a href="#/" class="navbar-brand">30 Hari 30 Juz</a>
    </div>
  </div>
</div>
<div class="container">
  <Router {routes} />  
</div>

