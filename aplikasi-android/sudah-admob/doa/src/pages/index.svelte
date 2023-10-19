<script>
  import data from "../data.json";
  import { push } from "svelte-spa-router";
</script>

<div class="p-4">
  <div class="join join-vertical lg:join-horizontal">
    {#each data as x}
      <button class="btn join-item" on:click={() => push(`/doa/${x.id}`)}
        >{x.judul}</button
      >
    {/each}
  </div>
</div>
