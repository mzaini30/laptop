<script>
  import { push } from "svelte-spa-router";
  import data from "../data.json";

  let support_me = true;
</script>

<div class="p-4">
  {#if support_me}
    <button
      on:click={() => {
        support_me = false;
        Andro.reward();
      }}
      class="btn w-full mb-3"
      >Support Me <div class="badge">Ad</div></button
    >
  {/if}
  <div class="join w-full join-vertical">
    {#each data as x, n}
      <button
        class="btn text-lg join-item"
        on:click={() => push(`/halaman/${n}`)}>{x.judul}</button
      >
    {/each}
  </div>
</div>
