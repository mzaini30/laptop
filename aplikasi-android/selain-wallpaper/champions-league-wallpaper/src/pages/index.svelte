<script>
  import data from "../Download Gambar Pinterest.json";
  import { acak } from "kumpulan-tools";

  let terpilih = {};

  function diacak() {
    terpilih = acak(data)[0];
    console.log(terpilih.lokasi_file);
  }
  diacak();
</script>

<div class="h-screen overflow-hidden flex items-center">
  <img class="w-full" src={terpilih.lokasi_file} alt="" />
</div>
<div class="w-full p-3 fixed bottom-0 gap-3 left-0 flex">
  <button class="btn" onclick="my_modal_1.showModal()">🟰</button>
  <button
    class="btn shrink grow"
    on:click={() => Andro.set_wallpaper(terpilih.lokasi_file)}
    >Set as Wallpaper</button
  >
  <button class="btn text-3xl btn-secondary" on:click={diacak}>🎲</button>
</div>
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <ul class="menu bg-base-200 w-full rounded-box">
      <li>
        <a
          href="https://play.google.com/store/apps/details?id=com.championsleague.wallpaper"
          >Review App</a
        >
      </li>
      <li>
        <a href="https://play.google.com/store/apps/dev?id=5401138465689796048"
          >Other Apps</a
        >
      </li>
      <li><a href={terpilih.link}>Source</a></li>
    </ul>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>
