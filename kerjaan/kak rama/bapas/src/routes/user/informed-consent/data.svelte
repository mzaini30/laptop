<script>
  import "../kriminogenik-anak/_table.css";
  import "../kriminogenik/_laporan.css";
  import "../penempatan-narapidana/_tampilan.css";
  import { pertanyaan } from "./_pertanyaan";
  import { stringify } from "qs";
  import { post } from "axios";
  import { browser } from "$app/env";
  import { persetujuan, sql, akun } from "$lib/api"; // id, acak, data, deadline, nip
  import Meta from "svelte-meta-simple";
  import cek_petugas from "$lib/cek-petugas";
  import ubahTanggal from "$lib/ubahTanggal";

  let tabelnya;
  let tampil;
  let petugas;

  async function ambil_petugas() {
    petugas = await cek_petugas();
  }
  ambil_petugas();

  // tampil = {"namaLengkap":"Rudi","tanggalLahir":"14 Januari 1990","jenisKelamin":"Laki-laki","nomorRegister":"23","statusPidana":"Mencuri","lokasi":"Balikpapan","kota":"Samarinda","tanggalSekarang":"12 Agustus 2021"}

  $: if (tampil) {
    console.log(tampil);
  }

  async function dapatkanData() {
    if (browser) {
      let { data } = await post(
        sql,
        stringify({
          id: persetujuan,
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
                id: persetujuan,
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
        data[n].data.tanggalSekarang = ubahTanggal(
          data[n].data.tanggalSekarang
        );
        data[n].data.tanggalLahir = ubahTanggal(data[n].data.tanggalLahir);
      }
      // console.log(data[0])
      // data.data.tanggalSekarang = ubahTanggal(data.data.tanggalSekarang)
      tabelnya = data;
    }
  }
  dapatkanData();
</script>

<svelte:head>
  <title>Data Informed Consent</title>
  <Meta
    title="Data Informed Consent"
    description="Berisi dengan data informed consent yang siap diprint"
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
            <tr on:click={() => (tampil = x.data)}>
              <td>{x.data.namaLengkap}</td>
              <td>{x.data.tanggalSekarang}</td>
            </tr>
          {/each}
        {/if}
      </tbody>
    </table>
  </div>

  {#if tampil}
    <!-- <Laporan></Laporan> -->
    <div class="laporan col-span-3 <md:col-span-1">
      <p class="judul">LEMBAR PERSETUJUAN <br /> <em>(INFORMED CONSENT)</em></p>
      <p>Saya yang bertanda tangan di bawah ini:</p>
      <table>
        <tbody>
          {#each pertanyaan as x}
            <tr>
              <td width="30%">{@html x.isi}</td>
              <td>{tampil[x.variabel]}</td>
            </tr>
          {/each}
        </tbody>
      </table>
      <p>
        Setelah mendapatkan informasi dari petugas asesmen terkait tujuan
        pelaksanaan asesmen risiko residivisme dan asesmen kebutuhan
        kriminogenik, dengan ini saya menyatakan bersedia untuk:
      </p>
      <ol>
        <li>
          Diwawancarai sebagai subjek asesmen risiko residivisme dan asesmen
          kebutuhan kriminogenik;
        </li>
        <li>
          Memberikan informasi yang sebenar-benarnya, baik selama proses
          wawancara ataupun saat dibutuhkan wawancara ulang/ tambahan
          setelahnya;
        </li>
        <li>Bersikap kooperatif selama proses wawancara hingga selesai;</li>
        <li>
          Menjalankan program pembinaan dan/atau program pembimbingan yang telah
          direkomendasikan kepada saya berdasarkan hasil asesmen.
        </li>
      </ol>
      <p>
        Pernyataan ini saya tandatangani dalam keadaan sadar dan tidak ada
        paksaan dari pihak manapun.
      </p>
      <div class="grid grid-cols-2 gap-5">
        <div>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>Asesor</p>
          {@html tampil.ttdPembimbing}
          <hr />
          <p class="!leading-none mt-2">
            {petugas.nama} <br />
            NIP. {petugas.nip}
          </p>
        </div>
        <div>
          <p>{tampil.kota}, {tampil.tanggalSekarang}</p>
          <p>Mengetahui,</p>
          <p>Narapidana/ Klien Pemasyarakatan</p>
          {@html tampil.ttdKlien}
          <hr />
          <p class="!leading-none mt-2">
            {tampil.namaLengkap} <br />
            {tampil.nomorRegister}
          </p>
        </div>
      </div>
    </div>
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
    td {
      @apply border-none;
    }
    .laporan {
      @apply col-span-5;
    }
    :global(.wadah) {
      @apply border-none;
    }
  }
  hr {
    @apply border border-black;
  }
  ol li {
    @apply list-decimal ml-5;
  }
</style>
