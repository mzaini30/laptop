<script>
  import data from "../tiddlers/published.json";
  import data_penutup from "../data-penutup.json";

  export let params = {};

  let datanya = [
    ...data.sort((a, b) => (a.title > b.title ? 1 : -1)),
    data_penutup,
  ];

  let terpilih = datanya.filter((x) => x.slug == params.isi)[0];
</script>

<div
  class="p-3 [&>*]:mb-3 last:[&>*]:mb-0 [&_h1,h2,h3,h4,h5,h6]:font-bold [&_li]:ml-5 [&_ol]:list-decimal [&_ul]:list-disc [&_blockquote]:italic [&_code]:text-red-700 [&_a]:underline"
>
  <h1 class="font-bold">{terpilih.title}</h1>
  {@html terpilih.text}
</div>
