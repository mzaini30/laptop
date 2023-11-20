<script>
  import { kriminogenik } from "$lib/kriminogenik";
  import { dataTampil } from "../storeDataTampil";
</script>

<p class="text-center font-bold underline">
  KEBUTUHAN KRIMINOGENIK - BAGIAN B.1
</p>
<p class="text-center font-bold">PERTIMBANGAN TINDAK PIDANA TERTENTU</p>
<p>Berikan tanda centang (√) pada tiap pertanyaan yang memenuhi syarat!</p>

<!-- <p class="font-bold">BAGIAN B.1 - Pertimbangan Lain - Jenis Tindak Kriminal Tertentu</p>
<p>
	Apakah ada dari fitur berikut di profil Narapidana/ Klien
	Pemasyarakatan?
</p> -->

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Deskripsi</th>
      <th>Centang Jika Ada</th>
    </tr>
  </thead>
  <tbody>
    {#each kriminogenik.bagianB1 as item, index}
      <tr>
        <td class="text-center">{index + 1}</td>
        <td>{item}</td>
        <td class="text-center">
          {#if $dataTampil.kriminogenikB1[index] == 0}
            &check;
          {:else if $dataTampil.kriminogenikB1[index] == 1}
            -
          {:else}
            -
          {/if}
        </td>
      </tr>
    {/each}
  </tbody>
</table>

<!-- <p>
  Keterangan: Kehadiran B1 pertimbangan lain di atas, menunjukan kebutuhan atau
  penilaian Bagian 5 (Asesmen Khusus/ Pertimbangan untuk Intervensi Khusus)
</p> -->

<div class="break" />

<style>
  table {
    @apply w-full;
  }
  td,
  th {
    @apply border p-2;
  }
  th {
    @apply text-center font-bold;
  }
  .laporan {
    font-family: Arial;
    font-size: 12pt;
  }
  .laporan * {
    line-height: 2;
  }
  .laporan table {
    margin-bottom: 15px;
  }
  img {
    display: block;
    margin: auto;
    height: auto;
    width: 200px;
  }
  .judul {
    --jarak: 30px;
    margin-top: var(--jarak);
    margin-bottom: var(--jarak);
    font-weight: bold;
  }
  .tebal {
    font-weight: bold;
  }
  .tengah {
    text-align: center;
  }
  .kanan {
    text-align: right;
  }
  .tanpa-border {
    border: none;
  }
  .kotak {
    background-color: gray;
    font-weight: bold;
    color: white;
    line-height: 2;
    --jarak: 15px;
    padding-top: var(--jarak);
    padding-bottom: var(--jarak);
  }
  @media print {
    .list-data {
      display: none;
    }
    .laporan {
      grid-column: span 6 / span 6;
    }
    .kontainer {
      grid-column: span 6 / span 6;
    }
    .break {
      page-break-after: always;
    }
  }
</style>
