<script>
  import data from "../tiddlers/published.json";
  import { push } from "svelte-spa-router";
</script>

<div class="p-4">
  <div>
    <button
      class="btn mr-3"
      on:click={() =>
        (location.href =
          "https://play.google.com/store/apps/details?id=com.brainstorming.ai")}
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
  <div class="join mt-4 join-vertical">
    {#each data.sort((a, b) => (a.title > b.title ? 1 : -1)) as x}
      <button class="btn leading-[2] h-auto normal-case join-item"
        >{x.title}</button
      >
    {/each}
  </div>
</div>
