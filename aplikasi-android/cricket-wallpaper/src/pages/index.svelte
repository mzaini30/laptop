<script>
  import data from "../data.json";
  import { acak } from "kumpulan-tools";

  let terpilih = {};
  let coin = 21;

  function diacak() {
    coin -= 1;

    terpilih = acak(data)[0];
    if (coin < 0) {
      coin = 20;
      Andro.reward();
    }
  }
  diacak();
</script>

<div class="h-screen overflow-hidden flex items-center">
  <img class="w-full" src={terpilih} alt="" />
</div>
<div class="w-full p-3 fixed bottom-0 gap-3 left-0 flex">
  <button class="btn" onclick="my_modal_1.showModal()">🟰</button>
  <button class="btn shrink grow" on:click={() => Andro.set_wallpaper(terpilih)}
    >Set as Wallpaper</button
  >
  <div class="indicator">
    <div class="indicator-item badge badge-error">
      {coin == 0 ? "Ad" : coin}
    </div>
    <button class="btn text-3xl btn-secondary" on:click={diacak}>🎲</button>
  </div>
</div>
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <ul class="menu bg-base-200 w-full rounded-box">
      <li><a href="https://t.me/apktrihandayani">Join Community</a></li>
    </ul>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>
