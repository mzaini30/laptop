<script>
  import data from "../../tiddlers/published.json";

  export let params = {};

  let terpilih = data.filter((x) => x.published_date == params.id)[0];
</script>

<div class="grid grid-cols-1 gap-4">
  <h1 class="font-[Updock] text-5xl">{terpilih.title}</h1>
  <p class="italic">{terpilih.penulis}</p>

  {@html terpilih.text}
</div>
