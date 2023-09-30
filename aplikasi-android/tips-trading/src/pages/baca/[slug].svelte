<script>
  export let params = {};

  import data from "../../tiddlers/published.json";
  import { push } from "svelte-spa-router";

  let terpilih = data.filter((x) => x.slug == params.slug)[0];
</script>

<div class="p-4">
  <div class="flex mb-4 justify-between">
    <button
      class="btn"
      on:click={() =>
        (location.href =
          "https://play.google.com/store/apps/details?id=com.tips.trading")}
      >Review App</button
    >
    <button
      class="btn"
      on:click={() =>
        (location.href =
          "https://play.google.com/store/apps/dev?id=5401138465689796048")}
      >Other Apps</button
    >
  </div>
  <div class="grid grid-cols-1 gap-4 [&_img]:mx-auto [&_img]:block">
    <h1 class="font-bold">{terpilih.title}</h1>
    {@html terpilih.text}
    <button class="btn w-full" on:click={() => push("/")}>Tips Lainnya</button>
    <button class="btn w-full" on:click={() => push("/semua-artikel")}
      >Semua Artikel</button
    >
  </div>
</div>
