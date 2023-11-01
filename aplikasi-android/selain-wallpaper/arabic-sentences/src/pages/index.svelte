<script>
  import { acak } from "kumpulan-tools";
  import data from "../data.json";

  let terpilih = {};
  let coin = 11;

  function ambil_terpilih() {
    coin -= 1;
    if (coin < 0) {
      coin = 10;
      Andro.reward();
    }
    terpilih = acak(data)[0];
  }
  ambil_terpilih();
</script>

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
<div class=" fixed bottom-2 right-2">
  <div class="indicator">
    <div class="indicator-item badge badge-error">
      {coin == 0 ? "Ad" : coin}
    </div>
    <button on:click={ambil_terpilih} class="btn-primary btn-circle text-3xl"
      >🎲</button
    >
  </div>
</div>
