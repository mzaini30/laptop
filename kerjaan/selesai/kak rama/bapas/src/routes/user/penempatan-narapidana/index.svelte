<script>
  import { dimensiRisiko, tindakPidana } from "$lib/penempatanNapi";
  import { sql, dbPenempatanNapi } from "$lib/api"; // id, acak, data, deadline, nip
  import { parse } from "@lukeed/ms";
  import { browser } from "$app/env";
  import qs from "qs";
  import axios from "axios";
  import Swal from "sweetalert2";
  import "../kriminogenik-anak/_tombol.css";
  import petugas from "$lib/cek-petugas";
  import { createDrauu } from "drauu";
  import IconHapus from "/src/routes/user/informed-consent/IconHapus.svelte";
  import { onMount } from "svelte";

  let data = {};
  // $: console.log(JSON.stringify(data))

  let ttdPembimbing;
  onMount(() => {
    ttdPembimbing = createDrauu({
      el: ".pembimbing",
      brush: {
        mode: "stylus",
        color: "black",
        size: 1,
      },
    });
  });

  const kirim = async () => {
    if (browser) {
      data.ttdPembimbing = ttdPembimbing.el.outerHTML;
      const kirimData = await axios.post(
        sql,
        qs.stringify({
          id: dbPenempatanNapi,
          kunci: "kirim",
          acak: Math.random(),
          data: JSON.stringify(data),
          deadline: Date.now() + parse("7 days"),
          nip: localStorage.usernameAsesmen,
        })
      );
      if (kirimData) {
        Swal.fire({
          title: "Data Sudah Terkirim",
          icon: "success",
        });
        //              data.pidana = []
        //				data = {}
        scrollTo(0, 0);
        // console.log(data)
        location.reload();
      }
    }
  };

  async function dapatkanPetugas() {
    const hasil = await petugas();
    data.petugas = hasil.nama;
    data.nipPetugas = hasil.nip;
  }
  dapatkanPetugas();

  const pertanyaan = [
    { isi: "Tanggal Penilaian", variabel: "penilaian" },
    { isi: "Nama Petugas Asesor", variabel: "petugas" },
    { isi: "NIP Petugas Asesor", variabel: "nipPetugas" },
    { isi: "Lokasi Pelaksanaan Screening", variabel: "lokasi" },
    { isi: "Nama Narapidana", variabel: "napi" },
    { isi: "Jenis Kelamin", variabel: "jenisKelamin" },
    { isi: "Tempat Lahir", variabel: "tempatLahir" },
    { isi: "Tanggal lahir", variabel: "tanggalLahir" },
    { isi: "Usia", variabel: "usia" },
    { isi: "Pendidikan Terakhir", variabel: "pendidikan" },
    { isi: "Pekerjaan Terakhir", variabel: "pekerjaan" },
    //		{isi: 'Tindak Pidana', variabel: 'pidana'},
    { isi: "Lama Pidana (bulan)", variabel: "lama" },
    { isi: "Sisa Pidana (bulan)", variabel: "sisa" },
    { isi: "Domisili Keluarga", variabel: "domisili" },
    { isi: "Status Pernikahan", variabel: "status" },
    {
      isi: `Kelompok Etnis yang 
Diikuti di dalam
Lapas/ Rutan`,
      variabel: "etnis",
    },
    {
      isi: `Jumlah pengulangan 
tindak pidana (residivisme)`,
      variabel: "pengulangan",
    },
    {
      isi: `Frekuensi kunjungan 
keluarga dalam sebulan`,
      variabel: "frekuensi",
    },
    {
      isi: `Frekuensi kunjungan non 
keluarga dalam sebulan`,
      variabel: "frekuensiNon",
    },
  ];
  const pertanyaanTextarea = [
    {
      isi: `Sebutkan Pelanggaran tata tertib narapidana selama 6 bulan terakhir!`,
      variabel: "pelanggaran",
    },
    {
      isi: `Sebutkan program pembinaan/ pelayanan kepribadian yang diikuti selama 6 bulan terakhir!`,
      variabel: "programPembinaan",
    },
    {
      isi: `Sebutkan pelatihan kemandirian/ keterampilan yang pernah diikuti di Lapas/ Rutan!`,
      variabel: "kemandirian",
    },
    {
      isi: `Sebutkan keahlian/ keterampilan (bakat) yang dimiliki Narapidana!`,
      variabel: "keahlian",
    },
    {
      isi: `Sebutkan penyakit yang sedang diderita/ perawatan kesehatan yang sedang dibutuhkan!`,
      variabel: "penyakit",
    },
  ];

  if (data.pidana == undefined) {
    data.pidana = [];
  }

  $: if (data.pidana) {
    console.log(data.pidana);
  }
</script>

<svelte:head>
  <title>Penempatan Narapidana</title>
</svelte:head>

<a href="/user/penempatan-narapidana/data" class="tombol" sveltekit:prefetch
  >Lihat Data</a
>

<p class="pb-2 font-bold text-center judul">
  PENORMAAN INSTRUMEN SCREENING PENEMPATAN NARAPIDANA (ISPN)
</p>
<form action="" on:submit|preventDefault={kirim}>
  <div class="grid grid-cols-4 gap-2">
    {#each pertanyaan as item, index}
      <p class="py-1 mb-2 label col-span-1">{item.isi}</p>
      <div class="col-span-3">
        {#if item.isi == "Tanggal Penilaian" || item.isi == "Tanggal lahir"}
          <input
            type="date"
            class="p-1 w-full px-2 mb-2 border border-green-500 input focus:outline-none "
            bind:value={data[item.variabel]}
            required
          />
        {:else if item.isi == "Lama Pidana (bulan)" || item.isi == "Sisa Pidana (bulan)"}
          <input
            type="number"
            class="p-1 w-full px-2 mb-2 border border-green-500 input focus:outline-none "
            bind:value={data[item.variabel]}
            required
          />
        {:else if item.isi == "Jenis Kelamin"}
          <select
            name=""
            id=""
            class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
            bind:value={data[item.variabel]}
          >
            <option value="Laki-Laki" class="">Laki-Laki</option>
            <option value="Perempuan" class="">Perempuan</option>
          </select>
        {:else}
          <input
            type="text"
            class="p-1 px-2 w-full mb-2 border border-green-500 input focus:outline-none "
            bind:value={data[item.variabel]}
            required
          />
        {/if}

        <!-- {#if item.isi == 'Jenis Kelamin'}
          <div class="tombol" on:click={() => data[item.variabel] = 'Laki-Laki'}>Laki-Laki</div>
          <div class="tombol" on:click={() => data[item.variabel] = 'Perempuan'}>Perempuan</div>
        {/if} -->
      </div>
    {/each}

    {#each pertanyaanTextarea as item, index}
      <p class="py-1 mb-2 label col-span-1">{item.isi}</p>
      <!-- <textarea
        class="p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
        bind:value={data[item.variabel]}
        rows="5"
        required
      /> -->
      <input
        type="text"
        class="p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
        bind:value={data[item.variabel]}
      />
    {/each}
  </div>

  <p class="pb-2 font-bold text-center judul">VARIABEL I. DIMENSI RISIKO</p>

  <p class="pb-2 font-bold text-center judul">
    Dimensi Risiko Keamanan (Security)
  </p>
  <ol class="list-decimal list-inside">
    {#each dimensiRisiko[0].indikator as item, index}
      <li>
        {item}
        <div class="block py-2">
          <label class="p-3 cursor-pointer labelRadio">
            <input
              type="radio"
              bind:group={data[`keamanan_${index}`]}
              value={1}
              class=""
            /> Ya
          </label>
          <label class="p-3 cursor-pointer labelRadio">
            <input
              type="radio"
              bind:group={data[`keamanan_${index}`]}
              value={0}
              class=""
            /> Tidak
          </label>
        </div>
      </li>
    {/each}
  </ol>
  <p class="font-bold">Catatan</p>
  <!-- <textarea
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanKeamanan}
    rows="5"
    required
  /> -->
  <input
    type="text"
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanKeamanan}
  />

  <p class="pb-2 font-bold text-center judul">
    Dimensi Risiko Keselamatan (Safety)
  </p>
  <ol class="list-decimal list-inside">
    {#each dimensiRisiko[1].indikator as item, index}
      <li>
        {item}
        <div class="block py-2">
          <label class="p-3 cursor-pointer labelRadio">
            <input
              type="radio"
              bind:group={data[`keselamatan_${index}`]}
              value={1}
              class=""
            /> Ya
          </label>
          <label class="p-3 cursor-pointer labelRadio">
            <input
              type="radio"
              bind:group={data[`keselamatan_${index}`]}
              value={0}
              class=""
            /> Tidak
          </label>
        </div>
      </li>
    {/each}
  </ol>
  <p class="font-bold">Catatan</p>
  <!-- <textarea
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanKeselamatan}
    rows="5"
    required
  /> -->
  <input
    type="text"
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanKeselamatan}
  />

  <p class="pb-2 font-bold text-center judul">
    Dimensi Risiko Stabilitas (Stability)
  </p>
  <ol class="list-decimal list-inside">
    {#each dimensiRisiko[2].indikator as item, index}
      <li>
        {item}
        <div class="block py-2">
          <label class="p-3 cursor-pointer labelRadio">
            <input
              type="radio"
              bind:group={data[`stabilitas_${index}`]}
              value={1}
              class=""
            /> Ya
          </label>
          <label class="p-3 cursor-pointer labelRadio">
            <input
              bind:group={data[`stabilitas_${index}`]}
              type="radio"
              class=""
              value={0}
            /> Tidak
          </label>
        </div>
      </li>
    {/each}
  </ol>
  <p class="font-bold">Catatan</p>
  <!-- <textarea
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanStabilitas}
    rows="5"
    required
  /> -->
  <input
    type="text"
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanStabilitas}
  />

  <p class="pb-2 font-bold text-center judul">
    Dimensi Risiko Kemasyarakatan (Society)
  </p>
  <ol class="list-decimal list-inside">
    {#each dimensiRisiko[3].indikator as item, index}
      <li>
        {item}
        <div class="block py-2">
          <label class="p-3 cursor-pointer labelRadio">
            <input
              type="radio"
              bind:group={data[`kemasyarakatan_${index}`]}
              value={1}
              class=""
            /> Ya
          </label>
          <label class="p-3 cursor-pointer labelRadio">
            <input
              bind:group={data[`kemasyarakatan_${index}`]}
              value={0}
              type="radio"
              class=""
            /> Tidak
          </label>
        </div>
      </li>
    {/each}
  </ol>
  <p class="font-bold">Catatan</p>
  <!-- <textarea
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanKemasyarakatan}
    rows="5"
    required
  /> -->
  <input
    type="text"
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
    bind:value={data.catatanKemasyarakatan}
  />

  <p class="pb-2 font-bold text-center judul">VARIABEL II. LAMA PIDANA</p>
  <p class="">Masukkan Lama Pidana Narapidana (dalam bulan)</p>
  <input
    type="text"
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none"
    bind:value={data.lama}
    required
  />

  <p class="pb-2 font-bold text-center judul">VARIABEL III. SISA PIDANA</p>
  <p class="">Masukan Sisa Pidana Narapidana (dalam bulan)</p>
  <input
    type="text"
    class="w-full p-1 px-2 mb-2 border border-green-500 input focus:outline-none"
    bind:value={data.sisa}
    required
  />

  <p class="pb-2 font-bold text-center judul">VARIABEL IV. TINDAK PIDANA</p>
  <p class="">Tindak Pidana</p>
  {#each tindakPidana.jenis as x, n}
    <label class="block p-3 cursor-pointer hover:bg-gray-300">
      <input type="checkbox" name="" value={n} id="" bind:group={data.pidana} />
      {x}
    </label>
  {/each}

  <p>Tanda Tangan Asesor</p>
  <div class="wadah w-min">
    <svg class="pembimbing" />
  </div>
  <div class="hapus" on:click={ttdPembimbing.clear()}>
    <IconHapus />
    Hapus Tanda Tangan
  </div>

  <input
    type="submit"
    value="Kirim"
    class="px-5 block mt-2 py-1 text-white bg-green-500 rounded shadow hover:cursor-pointer"
  />
</form>

<style>
  .wadah {
    @apply bg-white border border-gray-500 rounded;
    cursor: cell;
    touch-action: none;
  }
  .hapus {
    @apply text-sm bg-gray-300 px-4 py-1 mt-3 cursor-pointer border border-gray-500 inline-block;
  }
</style>
