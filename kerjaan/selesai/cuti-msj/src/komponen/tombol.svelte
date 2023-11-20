<script>
  import { createEventDispatcher } from "svelte";

  export let teks;

  const dispatch = createEventDispatcher();

  function klik() {
    dispatch("klik");
  }
</script>

<button
  on:click={klik}
  class="p-2 px-5 rounded bg-black text-white shadow inline-block "
  >{teks}</button
>
