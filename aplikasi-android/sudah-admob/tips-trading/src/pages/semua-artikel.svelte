<script>
  import { push } from "svelte-spa-router";
  import data from "../tiddlers/published.json";
</script>

<div class="p-3 grid grid-cols-1 gap-3">
  {#each data.sort((a, b) => (a.title > b.title ? 1 : -1)) as x}
    <button
      class="btn w-full normal-case leading-[2] h-auto"
      on:click={() => push(`/baca/${x.slug}`)}>{x.title}</button
    >
  {/each}
</div>
