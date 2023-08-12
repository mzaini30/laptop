<script>
  import toast from "../function/toast";
  import titleCase from "../function/title-case";
  import TombolJoin from "../elemen/tombol-join.svelte"

  let nama = "";
  if (localStorage.nama) {
    nama = localStorage.nama;
  }
  $: localStorage.nama = nama;

  function dapatkan_hari() {
    let d = new Date();
    let tanggal = d.getDate();
    let n_bulan = d.getMonth();
    let l_bulan = [
      "Januari",
      "Februari",
      "Maret",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Agustus",
      "September",
      "Oktober",
      "November",
      "Desember",
    ];
    let bulan = l_bulan[n_bulan];
    let tahun = d.getFullYear();
    return {
      tanggal: `${tanggal} ${bulan} ${tahun}`,
      bulan: `${bulan} ${tahun}`,
    };
    // return {
    //   tanggal: `10 Desember 2022`,
    //   bulan: `Desember 2022`,
    // };
  }

  let data = {
    bulan: dapatkan_hari().bulan,
    tanggal: dapatkan_hari().tanggal,
    shalat_tepat_waktu: {
      subuh: false,
      dzuhur: false,
      ashar: false,
      maghrib: false,
      isya: false,
    },
    shalat_berjamaah: {
      subuh: false,
      dzuhur: false,
      ashar: false,
      maghrib: false,
      isya: false,
    },
    rawatib: {
      sebelum_subuh: false,
      sebelum_dzuhur: false,
      setelah_dzuhur: false,
      sebelum_ashar: false,
      setelah_maghrib: false,
      sebelum_isya: false,
      setelah_isya: false,
    },
    nafilah: {
      shalat_dhuha: false,
      shalat_tahajud: false,
      shalat_witr: false,
    },
    dzikir: {
      dzikir_pagi: false,
      dzikir_petang: false,
      istighfar_100_kali: false,
    },
  };

  if (localStorage.data) {
    let semua_data = JSON.parse(localStorage.data);
    let hari_ini = dapatkan_hari().tanggal;
    let semua_data_filter = semua_data.filter(
      (item) => item.tanggal == hari_ini
    );
    if (semua_data_filter.length > 0) {
      data = semua_data_filter[0];
    }
  }

  function simpan() {
    let semua_data = localStorage.data ? JSON.parse(localStorage.data) : null;
    let hari_ini = dapatkan_hari().tanggal;
    if (semua_data) {
      let semua_data_filter = semua_data.filter(
        (item) => item.tanggal == hari_ini
      );
      if (semua_data_filter.length > 0) {
        let index = semua_data.indexOf(semua_data_filter[0]);
        semua_data[index] = data;
      } else {
        semua_data.push(data);
      }
    } else {
      semua_data = [data];
    }
    localStorage.data = JSON.stringify(semua_data);
    tampil_popup();
  }
  function tampil_popup() {
    toast("Berhasil disimpan");
  }
</script>

<div class="p-3">
  <div class="text-sm flex justify-between">
    <div class="font-bold">Nama</div>
    <div>{data.tanggal}</div>
  </div>
  <input
    type="text"
    bind:value={nama}
    class="w-full p-2 border border-gray-300 rounded"
  />

  {#each Object.entries(data) as [n, x]}
    {#if n != "tanggal" && n != "bulan"}
      <details class="border border-gray-300 rounded p-3 pb-0 mt-3">
        <summary class="cursor-pointer mb-3 select-none">
          {titleCase(n)}
          ({~~(
            (JSON.stringify(
              Object.entries(x).reduce((total, x) => {
                return total + x[1];
              }, 0)
            ) /
              JSON.stringify(Object.entries(x).length)) *
            100
          )}%)
        </summary>
        <div class="mb-2 grid grid-cols-1 gap-2">
          {#each Object.entries(x) as [a, b]}
            <label class="cursor-pointer block select-none">
              <input
                type="checkbox"
                class="mr-1"
                bind:checked={data[n][a]}
                name=""
                id=""
              />
              {titleCase(a)}</label
            >
          {/each}
        </div>
      </details>
    {/if}
  {/each}

  <!-- <pre>{JSON.stringify(data, null, 2)}</pre> -->

  <button
    class="bg-green-500 text-white rounded p-2 px-3 mt-3"
    on:click={simpan}>Simpan</button
  >
  <TombolJoin></TombolJoin>
</div>

<a
  class="fixed bottom-3 right-3 p-2 px-3 rounded bg-orange-500 text-white text-sm"
  href="#/laporan">Laporan</a
>
