<script>
  import teks from "../teks.md?raw";
  import { parse } from "marked";

  let tampil = parse(teks);

  let ukuran_font = 16;

  if (localStorage.ukuran_font) {
    ukuran_font = JSON.parse(localStorage.ukuran_font);
  }

  function ubah_ukuran(ukuran) {}
</script>

<div class="p-4 pb-20">
  <div class="flex justify-between mb-4">
    <a
      href="https://play.google.com/store/apps/details?id=com.surat.yasin"
      class="btn">Review App</a
    >
    <a
      href="https://play.google.com/store/apps/dev?id=5401138465689796048"
      class="btn">Other Apps</a
    >
  </div>
  <div class="text-right leading-[2]" style="font-size: {ukuran_font}px;">
    {@html tampil}
  </div>
  <button class="btn btn-secondary fixed left-2 bottom-2">➖</button>
  <button class="btn btn-secondary fixed right-2 bottom-2">➕</button>
</div>
