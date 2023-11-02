<script>
  import penjelasan from "../../data-penjelasan.json";

  export let params = {};

  let terpilih = penjelasan.filter((x) => x.tipe == params.tipe)[0];
</script>

<div class="prose max-w-full p-3">
  {@html terpilih.keterangan}
</div>
<div class="flex mt-4 justify-center">
  <a href="#/" class="btn btn-success rounded-3xl px-10">Tes Lagi</a>
</div>
