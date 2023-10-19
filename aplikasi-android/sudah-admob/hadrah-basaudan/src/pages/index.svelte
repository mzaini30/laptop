<script>
  import { push } from "svelte-spa-router";
  import data from "../data.json";
</script>

<div class="p-4">
  <button
    class="btn mr-3"
    on:click={() =>
      (location.href =
        "https://play.google.com/store/apps/details?id=com.hadrah.basaudan")}
    >Review App</button
  >
  <button
    class="btn"
    on:click={() =>
      (location.href =
        "https://play.google.com/store/apps/dev?id=5401138465689796048")}
    >Other Apps</button
  >

  <div class="join mt-3 w-full join-vertical">
    {#each data as x, n}
      <button
        class="btn text-lg join-item"
        on:click={() => push(`/halaman/${n}`)}>{x.judul}</button
      >
    {/each}
  </div>
</div>
