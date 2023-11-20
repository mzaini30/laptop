<script>
  let tabelnya;

  import { browser } from "$app/env";
  import { post } from "axios";
  import { stringify } from "qs";
  import { sql, dbKriminogenik } from "$lib/api";
  import { dataTampil } from "./storeDataTampil";
  import ubahTanggal from "$lib/ubahTanggal";

  async function dapatkanData() {
    if (browser) {
      let { data } = await post(
        sql,
        stringify({
          id: dbKriminogenik,
          kunci: "dapatkan",
          nip: localStorage.usernameAsesmen,
          password: localStorage.passwordAsesmen,
        })
      );

      // hapus dokumen setelah seminggu
      if (data) {
        for (let x of data) {
          if (x.deadline < Date.now()) {
            console.log(x.acak);
            await post(
              sql,
              stringify({
                id: dbKriminogenik,
                kunci: "hapus",
                nip: localStorage.usernameAsesmen,
                password: localStorage.passwordAsesmen,
                acak: x.acak,
              })
            );
          }
        }
      }

      for (let n in data) {
        data[n].data = JSON.parse(data[n].data);
      }
      for (let n in data) {
        data[n].data.tanggal = ubahTanggal(data[n].data.tanggal);
        data[n].data.tanggalLahir = ubahTanggal(data[n].data.tanggalLahir);
      }
      tabelnya = data;
    }
  }
  dapatkanData();
</script>

<div class="col-span-2 list-data <md:col-span-1">
  <table>
    <thead>
      <tr>
        <th>Napi</th>
        <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      {#if tabelnya}
        {#each tabelnya as item, index}
          <tr
            class="hover:bg-gray-100 cursor-pointer"
            on:click={() => ($dataTampil = item.data)}
          >
            <td>{item.data.napi}</td>
            <td>{item.data.tanggal}</td>
          </tr>
        {/each}
      {/if}
    </tbody>
  </table>
</div>

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
  }
</style>
