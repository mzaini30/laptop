<script>
  export let params = {};

  import data from "../../data.json";

  let data_terpilih = data[params.urutan];

  let kumpulan_halaman = [];
  for (let x = data_terpilih.dari; x <= data_terpilih.ke; x++) {
    kumpulan_halaman = [...kumpulan_halaman, x];
  }
  console.log(kumpulan_halaman);
</script>
