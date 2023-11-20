<script>
  import { kriminogenik } from "$lib/kriminogenik";
  import { dataTampil } from "../storeDataTampil";
  // console.log(JSON.stringify(kriminogenik.bagianB2))
</script>

<p class="text-center font-bold underline">
  KEBUTUHAN KRIMINOGENIK - BAGIAN B.2
</p>
<p class="text-center font-bold">
  PERTIMBANGAN LAIN/ FAKTOR KEBUTUHAN TAMBAHAN
</p>
<p>Berikan tanda centang (√) pada tiap pertanyaan yang memenuhi syarat!</p>

<!-- <p class="font-bold">BAGIAN B.2 - Pertimbangan Lain - Faktor Kebutuhan Tambahan</p> -->

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Deskripsi</th>
      <th>Centang Jika Ada</th>
    </tr>
  </thead>
  <tbody>
    {#if kriminogenik.bagianB2}
      {#each kriminogenik.bagianB2 as item, index}
        <tr>
          <td class="text-center">{index + 1}</td>
          <td>{item}</td>
          <td class="text-center">
            {#if $dataTampil.kriminogenikB2[index] == 0}
              &check;
            {:else if $dataTampil.kriminogenikB2[index] == 1}
              -
            {:else}
              -
            {/if}
          </td>
        </tr>
      {/each}
    {/if}
  </tbody>
</table>

<!-- <p>
	Keterangan: Kehadiran B2 pertimbangan lainnya, menunjukan masalah
	responsif atau manajemen risiko
</p> -->
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
