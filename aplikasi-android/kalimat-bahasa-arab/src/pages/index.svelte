<script>
  import { acak } from "kumpulan-tools";
  import data from "../data";

  let terpilih = {};

  function ambil_terpilih() {
    terpilih = acak(data())[0];
  }
  ambil_terpilih();
</script>

<div class="fixed left-0 top-0 p-2 w-full">
  <div class="flex justify-between gap-2">
    <a
      href="https://play.google.com/store/apps/details?id=com.arabic.sentences"
      class="btn">Review App</a
    >
    <a
      href="https://play.google.com/store/apps/dev?id=5401138465689796048"
      class="btn">Other Apps</a
    >
  </div>
</div>
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-3xl font-bold leading-[1.5]">{terpilih.arabic}</h1>
      <p class="py-6">
        {terpilih.how_to_read}
      </p>
      <p class="py-6 font-bold">
        {terpilih.english}
      </p>
    </div>
  </div>
</div>
<button
  on:click={ambil_terpilih}
  class="btn-primary btn-circle fixed bottom-2 right-2 text-3xl">🎲</button
>
