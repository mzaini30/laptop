<script>
  import data from "../../data.json";

  export let params = {};

  let data_terpilih = [...data].filter((x) => x.id == params.id)[0];
</script>

<div class="p-4 [&>*]:mb-3">
  <p class="text-center">{data_terpilih.judul}</p>
  <p style="direction: rtl;" class="text-2xl leading-[2]">
    {data_terpilih.arab}
  </p>
  <p class="italic">{data_terpilih.latin}</p>
  <p>{data_terpilih.arti}</p>
  <p class="text-sm">{data_terpilih.footnote}</p>
</div>
