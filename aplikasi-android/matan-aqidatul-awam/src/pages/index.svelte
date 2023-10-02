<script>
  import Beranda from "../halaman/beranda.svx";
</script>

<div class="konten">
  <Beranda />
</div>

<style>
  .konten :global(*) {
    @apply text-right text-lg;
  }
  .konten :global(h1),
  .konten :global(h2) {
    @apply text-center font-bold bg-green-500 text-white p-2;
  }
  .konten :global(h1) {
    @apply mt-0;
  }
  .konten :global(p) {
    @apply mx-3;
  }
</style>
