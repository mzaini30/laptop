<script>
  import judul from "../judul.json";

  let postingan = import.meta.glob("./uraian/*.md", { eager: true });
  //   postingan = Object.entries(postingan).map((x) => x);
  let list_postingan = [];
  for (let x of Object.entries(postingan)) {
    list_postingan = [
      ...list_postingan,
      {
        judul: x[1].metadata.judul,
        link: x[0],
      },
    ];
  }
</script>

<!-- <pre>{JSON.stringify(Object.entries(postingan), null, 2)}</pre>
<pre>{JSON.stringify(list_postingan, null, 2)}</pre> -->

<div class="p-3 min-h-screen bg-orange-100">
  <p class="bg-white text-xl text-center rounded p-3 mb-3">{judul}</p>
  <!-- <a
    class="block text-(center white sm) mb-3 bg-green-500 p-3 rounded"
    href="https://play.google.com/store/apps/dev?id=5401138465689796048"
    >Aplikasi Lainnya</a
  > -->
  {#each list_postingan as x}
    <a
      class="block border border-t-0 p-3 bg-white first:border-t"
      href={x.link.replace("./uraian", "#/uraian").replace(".md", "")}
      >{x.judul}</a
    >
  {/each}
</div>
