<script>
  export let value;
  export let type = "text";
  function atur_type(x) {
    x.type = type;
  }
</script>

<input use:atur_type class="border-2 border-black p-2 w-full" bind:value />

<style>
  input {
    box-shadow: 5px 5px 0 0 black;
  }
</style>
