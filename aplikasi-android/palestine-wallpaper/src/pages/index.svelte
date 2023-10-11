<script>
  import data from "../Download Gambar Pinterest.json";
  import { acak } from "kumpulan-tools";

  let terpilih = {};

  function diacak() {
    terpilih = acak(data)[0];
  }
  diacak();
</script>

<div class="h-screen overflow-hidden flex items-center">
  <img src={terpilih.lokasi_file} alt="" />
</div>
<div class="w-full p-3 fixed bottom-0 left-0"></div>
