<script>
  export let params = {};

  import nomor_iqro from "../../nomor-iqro.json";

  let terpilih = nomor_iqro.filter((x) => x.jilid == params.jilid)[0];

  function tambah_nol(angka) {
    if (angka < 10) {
      return "00" + angka;
    } else if (angka < 100) {
      return "0" + angka;
    } else {
      return angka;
    }
  }

  let nomor_nomornya = [];
  for (let n = terpilih.dari; n <= terpilih.ke; n++) {
    nomor_nomornya = [...nomor_nomornya, tambah_nol(n)];
  }
</script>

<div class="grid grid-cols-3">
  {#each nomor_nomornya as x}
    <a href="#/tampil/{x}">
      <img class="" src="gambar/{x}.webp" alt="" />
    </a>
  {/each}
</div>
