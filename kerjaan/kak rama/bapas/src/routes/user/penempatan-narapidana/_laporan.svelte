<script>
  import "../kriminogenik/_laporan.css";
  import "../kriminogenik-anak/_laporan.css";
  import "./_tampilan.css";
  import { browser } from "$app/env";
  import TandaTangan from "$lib/TandaTangan.svelte";
  import { tampil } from "./_tampil.js";
  import { dimensiRisiko, tindakPidana } from "$lib/penempatanNapi";
  // import { createDrauu } from "drauu";
  import { onMount } from "svelte";

  // let tandaTangan;
  // onMount(() => {
  //   tandaTangan = createDrauu({
  //     el: ".tanda-tangan",
  //     brush: {
  //       mode: "stylus",
  //       color: "black",
  //       size: 1,
  //     },
  //   });
  // });

  let dataDasar = `Tanggal Penilaian
	Nama Petugas PK
	Lokasi Pelaksanaan Screening`;
  dataDasar = dataDasar.split("\n").map((x) => x.replace(/\t/g, ""));

  const valueDasar = ["penilaian", "petugas", "lokasi"];

  let demografi = `Nama Narapidana
	Jenis Kelamin
	Tempat Lahir
	Tanggal lahir
	Usia
	Pendidikan Terakhir
	Pekerjaan Terakhir
	Tindak Pidana
	Lama Pidana (bulan)
	Sisa Pidana (bulan)
	Domisili Keluarga
	Status Pernikahan
	Kelompok Etnis yang Diikuti di dalam Lapas/ Rutan
	Jumlah pengulangan tindak pidana (residivisme)
	Frekuensi kunjungan keluarga dalam sebulan
	Frekuensi kunjungan non keluarga dalam sebulan`;
  demografi = demografi.split("\n").map((x) => x.replace(/\t/g, ""));

  const valueDemografi = [
    "napi",
    "jenisKelamin",
    "tempatLahir",
    "tanggalLahir",
    "usia",
    "pendidikan",
    "pekerjaan",
    "pidana",
    "lama",
    "sisa",
    "domisili",
    "status",
    "etnis",
    "pengulangan",
    "frekuensi",
    "frekuensiNon",
  ];

  const pertanyaanLanjutan = [
    "Sebutkan Pelanggaran tata tertib narapidana selama 6 bulan terakhir!",
    "Sebutkan program pembinaan/ pelayanan kepribadian yang diikuti selama 6 bulan terakhir!",
    "Sebutkan pelatihan kemandirian/ keterampilan yang pernah diikuti di Lapas/ Rutan!",
    "Sebutkan keahlian/ keterampilan (bakat) yang dimiliki Narapidana!",
    "Sebutkan penyakit yang sedang diderita/ perawatan kesehatan yang sedang dibutuhkan!",
  ];

  const valuePertanyaanLanjutan = [
    "pelanggaran",
    "programPembinaan",
    "kemandirian",
    "keahlian",
    "penyakit",
  ];

  const judulDimensiRisiko = [
    "Dimensi Risiko Keamanan (Security)",
    "Dimensi Risiko Keselamatan (Safety)",
    "Dimensi Risiko Stabilitas (Stability)",
    "Dimensi Risiko Kemasyarakatan (Society)",
  ];

  const normaRisiko = [
    [6, 30, 16, 16, 16, 16],
    [5, 20, 5, 10, 10, 15, 15, 15, 5],
    [20, 15, 5, 5, 5, 25, 10, 15],
    [10, 5, 15, 15, 10, 15, 15, 15],
  ];

  $: if ($tampil) {
    $tampil.valuePidana = $tampil.pidana.map((n) => tindakPidana.jenis[n]);
  }

  $: if ($tampil) {
    $tampil.nilaiPidana = $tampil.pidana.map((n) => tindakPidana.nilai[n]);
  }

  let totalNilaiPidana;
  $: if ($tampil) {
    totalNilaiPidana = $tampil.nilaiPidana.reduce((a, b) => a + b);
    totalNilaiPidana = ((totalNilaiPidana - 0.79) / 0.22) * 0.15;
  }

  let totalSemua;
  let totalDimensiRisiko;
  $: if ($tampil) {
    console.log($tampil);
    totalSemua = [];
    for (const [n, x] of dimensiRisiko.entries()) {
      let totalnya = 0;
      for (const [o, y] of x.indikator.entries()) {
        totalnya += $tampil[`${x.risiko}_${o}`] * normaRisiko[n][o];
      }
      totalSemua = [...totalSemua, totalnya];
      totalDimensiRisiko =
        ((totalSemua.reduce((a, b) => a + b) * 0.25 - 4.17) / 5.13) * 0.5;
    }
  }

  let normaLama;
  $: if ($tampil) {
    normaLama = (($tampil.lama - 68) / 43) * 0.15;
  }

  let normaSisa;
  $: if ($tampil) {
    normaSisa = (($tampil.sisa - 35) / 53) * 0.2;
  }

  let nilaiFinal;
  let valueFinal;
  $: if ($tampil) {
    nilaiFinal =
      (totalDimensiRisiko + normaLama + normaSisa + totalNilaiPidana) * 10 + 50;

    if (nilaiFinal <= 44.68) {
      valueFinal = "MINIMUM";
    } else if (nilaiFinal >= 44.69 && nilaiFinal <= 56.41) {
      valueFinal = "MEDIUM";
    } else if (nilaiFinal >= 56.42 && nilaiFinal <= 76.98) {
      valueFinal = "MAKSIMUM";
    } else if (nilaiFinal >= 76.99) {
      valueFinal = "SUPER MAKSIMUM";
    }
  }

  const catatan = [
    "catatanKeamanan",
    "catatanKeselamatan",
    "catatanStabilitas",
    "catatanKemasyarakatan",
  ];
</script>

<div class="laporan col-span-3 <md:col-span-1">
  <div class="flex kotak kop">
    <img class="mr-5 w-30" src="/bapas.png" alt="" />
    <p>
      DIREKTORAT JENDERAL PEMASYARAKATAN <br />
      KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA <br />
      REPUBLIK INDONESIA
    </p>
    <img class="mr-5 w-30 putih" src="/bapas.png" alt="" />
  </div>

  <p class="kotak">
    PENORMAAN <br />
    INSTRUMEN SCREENING PENEMPATAN NARAPIDANA (ISPN)
  </p>

  <table>
    <tbody>
      {#each dataDasar as x, n}
        <tr class="kecilkan tengah">
          <td>{x}</td>
          <td>{$tampil[valueDasar[n]]}</td>
        </tr>
      {/each}
    </tbody>
  </table>

  <p class="kotak">DATA DEMOGRAFI NARAPIDANA</p>

  <table>
    <tbody>
      {#each demografi as x, n}
        <tr class="demografi kecilkan">
          <td>{@html x}</td>

          {#if valueDemografi[n] == "pidana"}
            <td>{$tampil.valuePidana[0]}</td>
          {:else if valueDemografi[n] == "napi"}
            <td colspan="2">{$tampil[valueDemografi[n]]}</td>
          {:else}
            <td>{$tampil[valueDemografi[n]]}</td>
          {/if}

          {#if n % 3 == 1 && n < 15}
            <td rowspan="3" class="base-atas">
              <strong>{pertanyaanLanjutan[(n - 1) / 3]}</strong> <br />
              {$tampil[valuePertanyaanLanjutan[(n - 1) / 3]]}
            </td>
          {/if}
        </tr>
      {/each}
    </tbody>
  </table>

  <div class="break" />

  <p class="font-bold text-center">VARIABEL I. DIMENSI RISIKO</p>
  {#each dimensiRisiko as x, n}
    {#if judulDimensiRisiko[n] == "Dimensi Risiko Stabilitas (Stability)" || judulDimensiRisiko[n] == "Dimensi Risiko Kemasyarakatan (Society)" || judulDimensiRisiko[n] == "Dimensi Risiko Keselamatan (Safety)"}
      <div class="break" />
    {/if}
    <table>
      <thead>
        <tr>
          <th colspan="4">{judulDimensiRisiko[n]}</th>
        </tr>
        <tr>
          <th>No</th>
          <th>Indikator</th>
          <th>Beri angka 1 untuk jawaban “ya”, angka 0 untuk jawaban “tidak”</th
          >
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        {#each x.indikator as y, o}
          <tr>
            <td class="text-center">{o + 1}</td>
            <td>{y}</td>
            <td class="text-center">{$tampil[`${x.risiko}_${o}`]}</td>
            <td class="text-center"
              >{$tampil[`${x.risiko}_${o}`] * normaRisiko[n][o]}</td
            >
          </tr>
        {/each}
        <tr>
          <td colspan="3" class="font-bold text-center">TOTAL</td>
          <td class="text-center">{totalSemua[n]}</td>
        </tr>
        <tr>
          <td colspan="4">
            <p><strong>Catatan</strong></p>
            <p>{$tampil[catatan[n]]}</p>
            <!-- <p>{n}</p>
            <p>{$tampil.catatanKeamanan}</p> -->
            <!-- 
              catatanKeamanan
              catatanKeselamatan
              catatanStabilitas
              catatanKemasyarakatan
             -->
          </td>
        </tr>
      </tbody>
    </table>
  {/each}

  <div class="break" />

  <p class="font-bold text-center">Pembobotan Dimensi Risiko</p>
  <table class="kasih-tengah ratain atur-nomor">
    <thead>
      <tr>
        <th>No</th>
        <th>Dimensi Risiko</th>
        <th>Nilai</th>
        <th>Penormaan</th>
      </tr>
    </thead>
    <tbody>
      {#each dimensiRisiko as x, n}
        <tr>
          <td class="text-center">{n + 1}</td>
          <td class="text-center">{x.risiko}</td>
          <td>{totalSemua[n]}</td>
          <td>{totalSemua[n] * 0.25}</td>
        </tr>
      {/each}
      <tr>
        <td colspan="3" class="font-bold text-center"
          >Total Nilai Dimensi Risiko</td
        >
        <td>{totalDimensiRisiko.toFixed(3)}</td>
      </tr>
    </tbody>
  </table>

  <p class="font-bold text-center">VARIABEL II. LAMA PIDANA</p>
  <table class="kasih-tengah ratain">
    <thead>
      <tr>
        <th>Masukkan Lama Pidana Narapidana (dalam bulan)</th>
        <th>Total Nilai Lama Pidana</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{$tampil.lama}</td>
        <td>{normaLama.toFixed(3)}</td>
      </tr>
    </tbody>
  </table>

  <p class="font-bold text-center">VARIABEL III. SISA PIDANA</p>
  <table class="kasih-tengah ratain">
    <thead>
      <tr>
        <th>Masukkan Sisa Pidana Narapidana (dalam bulan)</th>
        <th>Total Nilai Sisa Pidana</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{$tampil.sisa}</td>
        <td>{normaSisa.toFixed(3)}</td>
      </tr>
    </tbody>
  </table>

  <p class="font-bold text-center">VARIABEL IV. TINDAK PIDANA</p>
  <table class="ratain atur-nomor kasih-tengah">
    <thead>
      <tr>
        <th>No</th>
        <th>Tindak Pidana</th>
        <th>Nilai Tindak Pidana</th>
      </tr>
    </thead>
    <tbody>
      {#each $tampil.valuePidana as x, n}
        <tr>
          <td class="text-center">{n + 1}</td>
          <td>{x}</td>
          <td class="text-center">{$tampil.nilaiPidana[n]}</td>
        </tr>
      {/each}
      <tr>
        <td colspan="2">&nbsp;</td>
        <td class="text-center">{totalNilaiPidana.toFixed(3)}</td>
      </tr>
    </tbody>
  </table>

  <p class="judul">PENORMAAN AKHIR</p>
  <table class="ratain atur-nomor">
    <thead>
      <tr>
        <th>No</th>
        <th>Variabel</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <tbody class="kasih-tengah">
      <tr>
        <td>1</td>
        <td>Dimensi Risiko</td>
        <td>{totalDimensiRisiko.toFixed(3)}</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Lama Pidana</td>
        <td>{normaLama.toFixed(3)}</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Sisa Pidana</td>
        <td>{normaSisa.toFixed(3)}</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Tindak Pidana</td>
        <td>{totalNilaiPidana.toFixed(3)}</td>
      </tr>
      <tr>
        <td colspan="2">NILAI FINAL</td>
        <td>{nilaiFinal.toFixed(3)}</td>
      </tr>
    </tbody>
  </table>

  <div class="break" />

  <p class="judul">REKOMENDASI RISIKO</p>
  <table class="bagi-empat">
    <thead>
      <tr>
        <th>MINIMUM</th>
        <th>MEDIUM</th>
        <th>MAKSIMUM</th>
        <th>SUPER MAKSIMUM</th>
      </tr>
      <tr>
        <th>≤ 44.68</th>
        <th>44.69 - 56.41</th>
        <th>56.42 - 76.98</th>
        <th>≥ 76.99</th>
      </tr>
    </thead>
  </table>

  <p class="judul">KESIMPULAN</p>
  <table class="kasih-tengah tengah">
    <tbody>
      <tr>
        <td>NAMA NARAPIDANA</td>
        <td>{$tampil.napi}</td>
      </tr>
      <tr>
        <td>NILAI FINAL</td>
        <td>{nilaiFinal.toFixed(3)}</td>
      </tr>
      <tr>
        <td>RISIKO</td>
        <td>{valueFinal}</td>
      </tr>
    </tbody>
  </table>

  <div class="footer">
    <div class="kiri" />
    <div class="kanan">
      <p>Petugas Asesmen</p>
      {@html $tampil.ttdPembimbing}
      <!-- <hr /> -->
      <p class="!leading-none mt-2">
        {$tampil.petugas} <br />
        NIP. {$tampil.nipPetugas}
      </p>
    </div>
  </div>

  <!-- <div class="footer">
    <div class="kiri">&nbsp;</div>
    <div class="kanan">
      <p>Pembimbing Kemasyarakatan,</p>
      <svg class="tanda-tangan"></svg>
      <p class="text-center">{$tampil.petugas}</p>
      <p>NIP. {$tampil.nipPetugas}</p>
    </div>
  </div> -->
</div>

<style>
  @media print {
    .laporan {
      @apply col-span-5;
    }
    .break {
      page-break-after: always;
    }
  }
  .footer {
    @apply flex justify-between;
  }
  svg {
    @apply bg-white !border-none;
    touch-action: none;
  }

  .demografi td:nth-child(1) {
    width: 25%;
  }
  .demografi td:nth-child(3) {
    width: 50%;
  }
  .kecilkan {
    font-size: 0.8rem;
  }
  .kop {
    justify-content: space-around;
  }
  .putih {
    visibility: hidden;
  }
  .tengah td {
    width: 50%;
  }
  .bagi-empat th {
    width: 25%;
  }
  .ratain tr td:last-child {
    width: 30%;
  }
  .atur-nomor tr td:first-child {
    width: 5%;
  }
  .base-atas {
    vertical-align: top;
  }
</style>
