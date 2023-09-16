<script>
  let tab_aktif = "harian";

  let tampilkan = [];

  $: if (tab_aktif) {
    mau_tampilkan();
  }

  function mau_tampilkan() {
    if (tab_aktif == "harian") {
      tampilkan = kumpulkan_tanggal;
    }
    if (tab_aktif == "bulanan") {
      tampilkan = kumpulkan_bulan;
    }
    if (tab_aktif == "tahunan") {
      tampilkan = kumpulkan_tahun;
    }
  }

  let data_tersimpan = [];
  if (localStorage.data_tersimpan) {
    data_tersimpan = JSON.parse(localStorage.data_tersimpan);
  }

  const groupedData = {};
  const groupedData_bulan = {};
  const groupedData_tahun = {};

  data_tersimpan.forEach((entry) => {
    const tanggal = entry.tanggal;
    if (!groupedData[tanggal]) {
      groupedData[tanggal] = {
        id: crypto.randomUUID(),
        keuntungan: 0,
        kumpulan: tanggal,
      };
    }
    groupedData[tanggal].keuntungan += entry.keuntungan;
    const bulan = entry.bulan;
    if (!groupedData_bulan[bulan]) {
      groupedData_bulan[bulan] = {
        id: crypto.randomUUID(),
        keuntungan: 0,
        kumpulan: bulan,
      };
    }
    groupedData_bulan[bulan].keuntungan += entry.keuntungan;
    const tahun = entry.tahun;
    if (!groupedData_tahun[tahun]) {
      groupedData_tahun[tahun] = {
        id: crypto.randomUUID(),
        keuntungan: 0,
        kumpulan: tahun,
      };
    }
    groupedData_tahun[tahun].keuntungan += entry.keuntungan;
  });

  // Mengonversi hasil pengelompokkan menjadi array objek
  const kumpulkan_tanggal = Object.values(groupedData);
  const kumpulkan_bulan = Object.values(groupedData_bulan);
  const kumpulkan_tahun = Object.values(groupedData_tahun);
  console.log("Kumpulkan tanggal");
  console.log(kumpulkan_tanggal);

  console.log("Kumpulkan bulan");
  console.log(kumpulkan_bulan);
  console.log("Kumpulkan tahun");
  console.log(kumpulkan_tahun);
</script>

<div class="tabs">
  <a
    class="tab tab-lifted"
    class:tab-active={tab_aktif == "harian"}
    on:click={() => (tab_aktif = "harian")}>Harian</a
  >
  <a
    class="tab tab-lifted"
    class:tab-active={tab_aktif == "bulanan"}
    on:click={() => (tab_aktif = "bulanan")}>Bulanan</a
  >
  <a
    class="tab tab-lifted"
    class:tab-active={tab_aktif == "tahunan"}
    on:click={() => (tab_aktif = "tahunan")}>Tahunan</a
  >
</div>

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Kumpulan</th>
        <th>Keuntungan</th>
      </tr>
    </thead>
    <tbody>
      {#each tampilkan as x, n}
        <tr>
          <th>1</th>
          <td>{x.kumpulan}</td>
          <td>{(+x.keuntungan).toLocaleString()}</td>
        </tr>
      {/each}
    </tbody>
  </table>
</div>
