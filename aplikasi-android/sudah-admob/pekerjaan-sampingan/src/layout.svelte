<script>
  export let judul;

  scrollTo({
    top: 0,
  });
</script>

<div class="p-3 min-h-screen bg-blue-200">
  <div class="p-3 bg-white prose max-w-full">
    <h1>{judul}</h1>
    <slot />
    <p class="text-center">
      <a class="" href="https://support-zen.vercel.app/">Support Me 😊</a>
    </p>
  </div>
</div>
