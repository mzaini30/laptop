<script>
  import data from "../tiddlers/published.json";
  import { ukuran_font } from "../state";

  scrollTo(0, 0);

  let posisi_terakhir = "";

  if (localStorage.posisi_terakhir) {
    posisi_terakhir = localStorage.posisi_terakhir;
  }
</script>

<div class="p-3">
  <div class="flex justify-between mb-3">
    <a
      href="https://play.google.com/store/apps/details?id=com.arbainnawawi.ibnurajab"
      class="btn">Review App</a
    >
    <a
      href="https://play.google.com/store/apps/dev?id=5401138465689796048"
      class="btn">Other Apps</a
    >
  </div>
  <ul class="menu bg-base-200 w-full rounded-box">
    {#each data.sort((a, b) => (a.title > b.title ? 1 : -1)) as x}
      <li class="">
        <a
          href="#/baca/{x.published_date}"
          style="direction: rtl; font-size: {$ukuran_font}px"
          class:active={posisi_terakhir == x.published_date}
          class="text-right leading-[1.5]">{x.title.split(". ")[1]}</a
        >
      </li>
    {/each}
  </ul>
</div>
