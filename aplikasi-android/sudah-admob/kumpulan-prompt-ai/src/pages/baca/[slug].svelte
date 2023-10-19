<script>
  export let params = {};

  import data from "../../tiddlers/published.json";

  let terpilih = data.filter((x) => x.slug == params.slug)[0];
</script>

<div class="p-4">
  <div class="prose">
    <h1>{terpilih.title}</h1>
    {@html terpilih.text}
  </div>
</div>
