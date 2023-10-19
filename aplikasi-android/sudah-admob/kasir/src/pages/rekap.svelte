<script>
  let tab_aktif = "per transaksi";

  let tampilkan = [];
  let reset = false;

  $: if (tab_aktif || reset) {
    mau_tampilkan();
  }

  function mau_tampilkan() {
    if (tab_aktif == "per transaksi") {
      tampilkan = data_tersimpan;
    }
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

  function olah_grouping() {
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
  }
  olah_grouping();

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

  function hapus(id) {
    data_tersimpan = data_tersimpan.filter((x) => {
      if (x.id) {
        return x.id != id;
      }
      if (x.id_transaksi) {
        return x.id_transaksi != id;
      }
    });
    localStorage.data_tersimpan = JSON.stringify(data_tersimpan);
    reset = !reset;
    olah_grouping();
    // console.log("terpilih");
    // console.log(terpilih);
  }
</script>

<div class="tabs">
  <a
    class="tab tab-lifted"
    class:tab-active={tab_aktif == "per transaksi"}
    on:click={() => (tab_aktif = "per transaksi")}>Per Transaksi</a
  >
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

<!-- <pre>{JSON.stringify(data_tersimpan, null, 2)}</pre> -->

{#key reset}
  <div class="overflow-x-auto overflow-auto h-[calc(100vh-60px)]">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          <th>Tanggal</th>
          {#if tab_aktif == "per transaksi"}
            <th>Nama Barang</th>
          {/if}
          <th>Keuntungan</th>
          {#if tab_aktif == "per transaksi"}
            <th></th>
          {/if}
        </tr>
      </thead>
      <tbody>
        {#each tampilkan as x, n}
          <tr>
            <th>{+n + 1}</th>
            <!-- tanggal -->
            {#if tab_aktif == "per transaksi"}
              <td>{x.tanggal}</td>
            {:else}
              <td>{x.kumpulan}</td>
            {/if}
            {#if tab_aktif == "per transaksi"}
              <td>{x.nama_barang} ({x.banyak})</td>
            {/if}
            <td>{(+x.keuntungan).toLocaleString()}</td>
            {#if tab_aktif == "per transaksi"}
              <td
                ><button
                  class="btn"
                  on:click={() => hapus(x.id_transaksi || x.id)}>Hapus</button
                ></td
              >
            {/if}
          </tr>
        {/each}
      </tbody>
    </table>
  </div>
{/key}
