<script>
  export let judul;
</script>

<div class="p-3 min-h-screen bg-blue-200">
  <div class="p-3 bg-white prose max-w-full">
    <h1>{judul}</h1>
    <slot />
  </div>
</div>
