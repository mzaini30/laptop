<script>
  import Beranda from "../halaman/beranda.svx";
</script>

<div class="konten">
  <div class="flex justify-between p-2">
    <a href="https://play.google.com/store/apps/details?id=com.learnislam.matanaqidatulawam" class="bg-green-500 text-white border rounded shadow p-2 px-4">Review App</a>
    <a href="https://play.google.com/store/apps/dev?id=5401138465689796048" class="bg-green-500 text-white border rounded shadow p-2 px-4">Other Apps</a>
  </div>
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
