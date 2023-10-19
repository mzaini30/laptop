<script>
  export let params = {};

  import data from "../../tiddlers/published.json";
  import { ukuran_font } from "../../state";

  let id_berikutnya = "";

  let terpilih = {};

  let index = 0;
  let tombol_next = false;

  $: if (params.slug) {
    olah();
  }

  function olah() {
    scrollTo(0, 0);
    localStorage.posisi_terakhir = params.slug;
    terpilih = data.filter((x) => x.published_date == params.slug)[0];
    for (let n in data) {
      if (data[n].published_date == params.slug) {
        index = +n;
      }
    }
    if (index != data.length - 1) {
      tombol_next = true;
      id_berikutnya = data[index + 1].published_date;
    } else {
      tombol_next = false;
    }
  }
  olah();
</script>

<div class="p-4" style="direction: rtl;">
  <h1 class="text-3xl mb-6 font-bold">{terpilih.title.split(". ")[1]}</h1>
  <div
    style="font-size: {$ukuran_font}px;"
    class="[&_br]:block leading-[2] [&_*]:[font-size:inherit] [&_br]:w-full [&_br]:h-6 [&_br]:content-['']"
  >
    {@html terpilih.text}
  </div>

  <div class="mt-6">
    {#if tombol_next}
      <a href="#/baca/{id_berikutnya}" class="btn w-full mb-3">Next</a>
    {/if}

    <a href="#/" class="btn w-full">Home</a>
  </div>
</div>
