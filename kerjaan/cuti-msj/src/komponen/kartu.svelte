<script>
  export let judul;
</script>

<div class="flex gap-2 flex-col bg-white rounded shadow p-2 mb-2 last:mb-0">
  <p class="font-bold uppercase">{judul}</p>
  <slot />
</div>
