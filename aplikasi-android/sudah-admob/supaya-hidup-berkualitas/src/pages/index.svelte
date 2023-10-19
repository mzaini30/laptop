<script>
  import data from "../tiddlers/published.json";
  import data_penutup from "../data-penutup.json";

  let datanya = [
    ...data.sort((a, b) => (a.title > b.title ? 1 : -1)),
    data_penutup,
  ];
</script>

<div class="p-3">
  {#each datanya as x}
    <a
      class="p-2 block border-slate-300 border-x border-b first:border-t"
      href="#/{x.slug}">{x.title}</a
    >
  {/each}
</div>
