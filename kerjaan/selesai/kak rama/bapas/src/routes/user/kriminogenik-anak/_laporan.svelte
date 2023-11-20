<script>
  import "../kriminogenik/_laporan.css";
  import "./_laporan.css";
  import {
    faktorResikoDanPelindung,
    faktorKriminogenik,
  } from "$lib/penilaianRisikoAnak";
  import { browser } from "$app/env";
  import TandaTangan from "$lib/TandaTangan.svelte";
  import { tampil } from "./_tampil.js";

  let norma = `Pendidikan/Pekerjaan	0 - 3	4 - 8	9 - 12
Alkohol dan Narkoba	0 - 1	2	3 - 4
Keuangan dan Waktu Luang	0 - 1	2 - 4	5 - 6
Hubungan Keluarga	0 - 2	3 - 5	6 - 8
Sikap Anti Sosial	0 - 1	2	3 - 5
Faktor-faktor lainnya	0 - 1	2 - 5	6 - 7
Total Nilai	0 - 13	14 - 28	29 - 42`;
  norma = norma.split("\n").map((x) => x.split("\t"));

  /*{#each faktorResikoDanPelindung.faktorResiko as x, n}
				{#each x.jawaban as y, o}*/
  /*{x.kunciSkor[$tampil[`faktorResiko_${n}`]]}*/

  let nilaiA;
  $: if ($tampil) {
    nilaiA = 0;
    for (const [n, x] of faktorResikoDanPelindung.faktorResiko.entries()) {
      nilaiA += x.kunciSkor[$tampil[`faktorResiko_${n}`]];
    }
  }

  let nilaiB;
  $: if ($tampil) {
    nilaiB = 0;
    for (const [n, x] of faktorResikoDanPelindung.faktorPelindung.entries()) {
      nilaiB += x.kunciSkor[$tampil[`faktorPelindung_${n}`]];
    }
  }

  /*{#each faktorKriminogenik as x, n}
				{#each x.indikator as y, o}*/
  /*{$tampil[`faktorKriminogenik_${n}_${o}`]}*/

  let dataKriminogenik;
  $: if ($tampil) {
    dataKriminogenik = [];
    for (const [n, x] of faktorKriminogenik.entries()) {
      let total = 0;
      for (const [o, y] of x.indikator.entries()) {
        total += $tampil[`faktorKriminogenik_${n}_${o}`];
      }
      dataKriminogenik = [...dataKriminogenik, total];
    }
  }
</script>

<div class="laporan laporan-anak col-span-3 <md:col-span-1">
  <p class="text-right text-[20pt] pb-25">DOKUMEN RAHASIA</p>
  <p class="text-center text-[20pt]">
    INSTRUMEN PENILAIAN <br />
    RISIKO DAN FAKTOR <br />
    KRIMINOGENIK ANAK
  </p>
  <p class="text-center text-[20pt] pt-10">OLEH</p>
  <p class="text-center text-[26pt] pb-10">PEMBIMBING KEMASYARAKATAN</p>
  <p class="text-center text-[16pt]">IDENTITAS ANAK</p>

  <table class="font-bold">
    <tbody class="biodata">
      <tr>
        <td>Nama Lengkap</td>
        <td>{$tampil.nama || "-"}</td>
        <td>Tanggal Penilaian</td>
        <td>{$tampil.penilaian || "-"}</td>
      </tr>
      <tr>
        <td>Tempat/ Tgl.Lahir</td>
        <td>
          {#if $tampil.tempatLahir && $tampil.tanggalLahir}
            {$tampil.tempatLahir || "-"}, {$tampil.tanggalLahir
              ?.split("-")
              .reverse()
              .join("-") || "-"}
          {:else}
            -
          {/if}
        </td>
        <td>Nomor Registrasi</td>
        <td>{$tampil.registrasi || "-"}</td>
      </tr>
      <tr>
        <td>Tindak Pidana</td>
        <td>{$tampil.pidana || "-"}</td>
        <td>Jenis Kelamin</td>
        <td>{$tampil.jenisKelamin || "-"}</td>
      </tr>
      <tr>
        <td>Alasan Penilaian Dilakukan</td>
        <td>{$tampil.alasan || "-"}</td>
        <td>Masa Pidana</td>
        <td>{$tampil.masaPidana || "-"}</td>
      </tr>
      <tr>
        <td>Lokasi Pelaksanaan</td>
        <td>{$tampil.lokasi || "-"}</td>
        <td>Blok/Kamar</td>
        <td>{$tampil.blok || "-"}</td>
      </tr>
      <tr>
        <td>Nama Pengasuh</td>
        <td>{$tampil.pengasuh || "-"}</td>
        <td>Tingkat Resiko</td>
        <td
          >{#if nilaiA - nilaiB <= 13}
            Rendah
          {:else if nilaiA - nilaiB <= 26}
            Menengah
          {:else if nilaiA - nilaiB <= 40}
            Tinggi
          {:else}
            Rendah
          {/if}</td
        >
      </tr>
      <tr>
        <td>Nama PK</td>
        <td>{$tampil.pk}</td>
        <td>TTD PK</td>
        <td />
      </tr>
    </tbody>
  </table>

  <img src="/bapas.png" alt="" />

  <p class="text-center">
    DIREKTORAT JENDERAL PEMASYARAKATAN <br />
    KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA <br />
    REPUBLIK INDONESIA
  </p>

  <div class="break" />

  <p class="text-center text-[20pt]">INSTRUMEN PENILAIAN RISIKO ANAK</p>

  <p>A.FAKTOR RESIKO DAN PELINDUNG</p>

  <table>
    <thead>
      <tr>
        <th>NO</th>
        <th>POKOK (AITEM)</th>
        <th>JAWABAN</th>
        <th>KUNCI SKOR</th>
        <th>NILAI</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="5" class="font-bold">FAKTOR RESIKO (A)</td>
      </tr>

      {#each faktorResikoDanPelindung.faktorResiko as x, n}
        {#each x.jawaban as y, o}
          <tr>
            {#if o == 0}
              <td class="text-center" rowspan={x.jawaban.length}>{n + 1}</td>
              <td rowspan={x.jawaban.length}>{x.aitem}</td>
            {/if}

            <td>{y}</td>
            <td class="text-center">{x.kunciSkor[o]}</td>

            {#if o == 0}
              <td class="text-center" rowspan={x.jawaban.length}
                >{x.kunciSkor[$tampil[`faktorResiko_${n}`]] || "-"}</td
              >
            {/if}
          </tr>
          <!-- {#if n == 3}
            <tr class="break">
              {y}
              {#each Array(5) as x}
                <td></td>
              {/each}
            </tr>
          {/if} -->
        {/each}
      {/each}

      <tr>
        <td colspan="4" class="text-center font-bold">Nilai A</td>
        <td class="text-center">{nilaiA || "-"}</td>
      </tr>

      <tr>
        <td colspan="5" class="font-bold">FAKTOR PELINDUNG (B)</td>
      </tr>

      {#each faktorResikoDanPelindung.faktorPelindung as x, n}
        {#each x.jawaban as y, o}
          <tr>
            {#if o == 0}
              <td rowspan={x.jawaban.length}>{n + 11}</td>
              <td rowspan={x.jawaban.length}>{x.aitem}</td>
            {/if}

            <td>{y}</td>
            <td>{x.kunciSkor[o]}</td>

            {#if o == 0}
              <td rowspan={x.jawaban.length} class="text-center"
                >{$tampil[`faktorPelindung_${n}`] || "-"}</td
              >
            {/if}
          </tr>
        {/each}
      {/each}

      <tr>
        <td class="text-center font-bold" colspan="4">Nilai B</td>
        <td class="text-center">{nilaiB || "-"}</td>
      </tr>
      <tr>
        <td colspan="4" class="text-center font-bold"
          >TOTAL NILAI: NILAI A DIKURANGI NILAI B</td
        >
        <td class="text-center">{nilaiA - nilaiB || "-"}</td>
      </tr>
    </tbody>
  </table>

  <p>B.PENORMAAN</p>

  <table>
    <thead>
      <tr>
        <th>RESIDIVIS:</th>
        <th>Rendah</th>
        <th>Menengah</th>
        <th>Tinggi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          {#if nilaiA - nilaiB <= 13}
            Rendah
          {:else if nilaiA - nilaiB <= 26}
            Menengah
          {:else if nilaiA - nilaiB <= 40}
            Tinggi
          {:else}
            Rendah
          {/if}
        </td>
        <td>(0-13)</td>
        <td>(14-26)</td>
        <td>(27-40)</td>
      </tr>
    </tbody>
  </table>

  <div class="break" />

  <p class="text-center">
    INSTRUMEN PENILAIAN FAKTOR-FAKTOR <br />
    KRIMINOGENIK ANAK
  </p>

  <p>A.FAKTOR KRIMINOGENIK</p>

  <table>
    <thead>
      <tr>
        <th>NO</th>
        <th>ASPEK PENILAIAN</th>
        <th>INDIKATOR</th>
        <th>JAWABAN</th>
        <th>KUNCI SKOR</th>
        <th>NILAI</th>
      </tr>
    </thead>
    <tbody>
      {#each faktorKriminogenik as x, n}
        {#each x.indikator as y, o}
          <tr>
            {#if o == 0}
              <td class="text-center font-bold" rowspan={x.indikator.length * 2}
                >{n + 1}</td
              >
              <td class="text-center font-bold" rowspan={x.indikator.length * 2}
                >{x.aspek}</td
              >
            {/if}

            <td rowspan="2">{y}</td>
            <td class="text-center">Ya</td>
            <td class="text-center">1</td>

            <!-- penilaian sudah tepat karena ambil dari "value", bukan "key" -->
            <td class="text-center" rowspan="2"
              >{$tampil[`faktorKriminogenik_${n}_${o}`] || 0}</td
            >
          </tr>
          <tr>
            <td class="text-center">Tidak</td>
            <td class="text-center">0</td>
          </tr>
        {/each}
        <tr>
          <td colspan="4"
            ><span class="font-bold">Catatan:</span>
            {$tampil[`catatanKriminogenik_${n}`] || "-"}</td
          >
          <td class="font-bold text-center">TOTAL SKOR</td>
          <td class="text-center">{dataKriminogenik[n] || 0}</td>
        </tr>
      {/each}
      <tr>
        <td colspan="4"
          >TOTAL NILAI: TOTAL SKOR 1 DITAMBAH TOTAL SKOR 2 DITAMBAH <br />
          <span class="putih">TOTAL NILAI: </span>TOTAL SKOR 3 DITAMBAH TOTAL
          SKOR 4 DITAMBAH <br />
          <span class="putih">TOTAL NILAI: </span>TOTAL SKOR 5 DITAMBAH TOTAL
          SKOR 6</td
        >
        <td class="text-center font-bold"
          >TOTAL <br />
          NILAI</td
        >
        <td class="text-center"
          >{dataKriminogenik.reduce((a, b) => a + b, 0) || 0}</td
        >
      </tr>
    </tbody>
  </table>

  <div class="break" />

  <p>B.PENORMAAN</p>

  <table class="table-tengah-kah">
    <thead>
      <tr>
        <th>ASPEK PENILAIAN</th>
        <th>RENDAH</th>
        <th>SEDANG</th>
        <th>TINGGI</th>
      </tr>
    </thead>
    <tbody>
      {#each norma as x}
        <tr>
          {#each x as y, n}
            <td class:font-bold={n == 0}>{y}</td>
          {/each}
        </tr>
      {/each}
    </tbody>
  </table>

  <TandaTangan />
</div>

<style>
  @media print {
    .laporan {
      @apply col-span-5;
    }
    :global(.break) {
      page-break-after: always;
      display: block;
    }
  }
  .putih {
    visibility: hidden;
  }
</style>
