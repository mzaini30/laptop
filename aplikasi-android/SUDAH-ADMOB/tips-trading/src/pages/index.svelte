<script>
  import { acak } from "kumpulan-tools";
  import data from "../tiddlers/published.json";
  import { push } from "svelte-spa-router";

  let slug_terpilih = acak(data)[0].slug;
  push(`/baca/${slug_terpilih}`);
</script>
