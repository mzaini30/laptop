<script>
  export let data;
  export let type = "text";
  function type_action(node) {
    node.type = type;
  }
</script>

<input
  use:type_action
  bind:value={data}
  class="block border rounded p-2 w-70 border-slate-500"
/>
