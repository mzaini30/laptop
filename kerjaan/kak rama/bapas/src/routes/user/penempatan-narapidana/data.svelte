<script>
  import "../kriminogenik-anak/_table.css";
  import "../kriminogenik/_laporan.css";
  import { stringify } from "qs";
  import { post } from "axios";
  import { browser } from "$app/env";
  import { dbPenempatanNapi, sql } from "$lib/api"; // id, acak, data, deadline, nip
  import Meta from "svelte-meta-simple";
  import Laporan from "./_laporan.svelte";
  import { tampil } from "./_tampil";
  import ubahTanggal from "$lib/ubahTanggal";

  let tabelnya;

  async function dapatkanData() {
    if (browser) {
      let { data } = await post(
        sql,
        stringify({
          id: dbPenempatanNapi,
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
                id: dbPenempatanNapi,
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
        data[n].data.penilaian = ubahTanggal(data[n].data.penilaian);
        // data[n].data.tanggalLahir = ubahTanggal(data[n].data.tanggalLahir)
        data[n].data.tanggalLahir = data[n].data.tanggalLahir
          .split("-")
          .reverse()
          .join("-");
      }
      tabelnya = data;
    }
  }
  dapatkanData();
</script>

<svelte:head>
  <title>Data Penempatan Narapidana</title>
  <Meta
    title="Data Penempatan Narapidana"
    description="Berisi dengan data penempatan narapidana yang siap diprint"
  />
</svelte:head>

<div class="bagian">
  <div class="col-span-2 <md:col-span-1">
    <!-- <p>Sekarang: {Date.now()}</p>
		{JSON.stringify(tabelnya)} -->
    <table class="table tabelnya">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Tanggal Penilaian</th>
        </tr>
      </thead>
      <tbody>
        {#if tabelnya}
          {#each tabelnya as x}
            <tr on:click={() => ($tampil = x.data)}>
              <td>{x.data.napi}</td>
              <td>{x.data.penilaian}</td>
            </tr>
          {/each}
        {/if}
      </tbody>
    </table>
  </div>

  {#if $tampil}
    <Laporan />
  {/if}
</div>

<style>
  :global(*) {
    word-wrap: break-word;
  }
  .bagian {
    @apply grid grid-cols-5 gap-3 <md:grid-cols-1;
  }

  @media print {
    .tabelnya {
      @apply hidden;
    }
  }
</style>
