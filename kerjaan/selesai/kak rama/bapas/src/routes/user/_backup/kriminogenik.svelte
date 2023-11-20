<script>
  import { pertanyaan, jawaban } from "/src/lib/bagianA";
  import { pertanyaan as pertanyaanB } from "/src/lib/bagianB";
  import { pertanyaan as pertanyaanC } from "/src/lib/bagianC";
  import { pertanyaan as pertanyaanD } from "/src/lib/bagianD";
  import {
    pertanyaanKeluarga,
    jawabanKeluarga,
    pertanyaanPendidikan,
    jawabanPendidikan,
    pertanyaanPenggunaan,
    jawabanPenggunaan,
    pertanyaanHubungan,
    jawabanHubungan,
    pertanyaanWaktu,
    jawabanWaktu,
    pertanyaanManajemen,
    jawabanManajemen,
    pertanyaanSikap,
    deskripsi,
  } from "/src/lib/kriminogenikA";
  const huruf = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
  import { pertanyaan as pertanyaan1 } from "/src/lib/kriminogenikB1";
  import { pertanyaan as pertanyaan2 } from "/src/lib/kriminogenikB2";
</script>

<img src="/bapas.png" class="mx-auto block w-[5.79cm]" alt="" />
<h1>INFORMASI RAHASIA</h1>
<div class="kotak">
  <p>
    LEMBAR ISIAN INSTRUMEN <br />
    ASESMEN RISIKO RESIDIVISME - INDONESIA (RRI)
  </p>
</div>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>Nama Petugas Asesmen</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td
        >Nama Narapidana/<br />
        Klien Pemasyarakatan</td
      >
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Tanggal Asesmen</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Alasan Asesmen</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td />
      <td />
      <td>Keterangan :</td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="3">DATA DEMOGRAFI</td>
    </tr>
    <tr>
      <td>Nama Klien</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Nomor Register</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td
        >Lokasi Pembinaan/ <br />
        Pembimbingan Saat Ini</td
      >
      <td>:</td>
      <td />
    </tr>
  </tbody>
</table>
<h2>BAGIAN A</h2>
<p>
  Bagian ini adalah bagian langkah awal dalam melakukan asesmen ini, sehingga
  asesmen ini diisi terhadap Narapidana/ Klien Pemasyarakatan yang akan
  dilakukan asesmen.
</p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>NO</th>
      <th>PERTANYAAN</th>
      <th
        >JAWABAN <br />
        & KODE</th
      >
      <th>NILAI</th>
    </tr>
  </thead>
  <tbody>
    {#each pertanyaan as item, index}
      <tr>
        <td>{index + 1}</td>
        <td>{item}</td>
        <td>{@html jawaban[index]}</td>
        <td />
      </tr>
    {/each}
  </tbody>
</table>
<h2>RISIKO RESIDIVISME:</h2>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td>RENDAH</td>
      <td>SEDANG</td>
      <td>TINGGI</td>
      <td>SANGAT TINGGI</td>
    </tr>
    <tr>
      <td>0-6</td>
      <td>7-11</td>
      <td>12-15</td>
      <td>16-17</td>
    </tr>
  </tbody>
</table>
<h2>BAGIAN B</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>NO</th>
      <th>PERTANYAAN</th>
      <th>JAWABAN</th>
    </tr>
  </thead>
  <tbody>
    {#each pertanyaanB as item, index}
      <tr>
        <td>{index + 1}</td>
        <td>{item}</td>
        <td />
      </tr>
    {/each}
  </tbody>
</table>
<h2>BAGIAN C</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>NO</th>
      <th>PERTANYAAN</th>
      <th>JAWABAN</th>
    </tr>
  </thead>
  <tbody>
    {#each pertanyaanC as item, index}
      <tr>
        <td>{index + 1}</td>
        <td>{item}</td>
        <td />
      </tr>
    {/each}
  </tbody>
</table>
<h2>BAGIAN D</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>NO</th>
      <th>PERTANYAAN</th>
      <th>JAWABAN</th>
    </tr>
  </thead>
  <tbody>
    {#each pertanyaanD as item, index}
      <tr>
        <td>{index + 1}</td>
        <td>{item}</td>
        <td />
      </tr>
    {/each}
  </tbody>
</table>
<table class="table table-bordered akhir">
  <tbody>
    <tr>
      <td>
        <p class="text-center">
          {#each Array(30) as item, index}
            _
          {/each}
        </p>
        <p class="text-center">Petugas Asesmen</p>
      </td>
      <td>
        <p class="text-center">
          {#each Array(30) as item, index}
            _
          {/each}
        </p>
        <p class="text-center">Narapidana/ Klien Pemasyarakatan</p>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <p class="text-center">
          Tanggal
          {#each Array(30) as item, index}
            _
          {/each}
        </p>
      </td>
    </tr>
  </tbody>
</table>

<img src="/bapas.png" class="mx-auto block w-[5.79cm]" alt="" />
<h1>INFORMASI RAHASIA</h1>
<div class="kotak">
  <p>
    LEMBAR ISIAN INSTRUMEN <br />
    ASESMEN KRIMINOGENIK INDONESIA
  </p>
</div>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>Nama Petugas Asesmen</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td
        >Nama Narapidana/<br />
        Klien Pemasyarakatan</td
      >
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Tanggal Asesmen</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Alasan Asesmen</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td />
      <td />
      <td>Keterangan :</td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="3">DATA DEMOGRAFI</td>
    </tr>
    <tr>
      <td>Nama Klien</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Nomor Register</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td />
    </tr>
    <tr>
      <td
        >Lokasi Pembinaan/ <br />
        Pembimbingan Saat Ini</td
      >
      <td>:</td>
      <td />
    </tr>
  </tbody>
</table>
<h2>BAGIAN A</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <td>NO</td>
      <td>PERTANYAAN</td>
      <td
        >JAWABAN <br />
        & KODE</td
      >
      <td>NILAI</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="4"><strong>Keluarga dan Pernikahan</strong></td>
    </tr>
    {#each pertanyaanKeluarga as item, index}
      <tr>
        <td>{index + 1}</td>
        <td>{item}</td>
        <td>{@html jawabanKeluarga[index]}</td>
        <td />
      </tr>
    {/each}
    <tr>
      <td colspan="3">Jumlah Nilai</td>
      <td />
    </tr>
    <tr>
      <td colspan="4"><strong>Pendidikan dan Pekerjaan</strong></td>
    </tr>
    {#each pertanyaanPendidikan as item, index}
      <tr>
        <td
          >{index + 4 == 6
            ? "6a"
            : index + 4 == 7
            ? "6b"
            : index + 4 > 7
            ? index + 3
            : index + 4}</td
        >
        <td>{item}</td>
        <td>{@html jawabanPendidikan[index]}</td>
        <td />
      </tr>
    {/each}
    <tr>
      <td colspan="3">Jumlah Nilai</td>
      <td />
    </tr>
    <tr>
      <td colspan="4"
        ><strong
          >Penggunaan Obat-obatan Terlarang dan Konsumsi Alkohol (Dulu dan
          Sekarang)</strong
        ></td
      >
    </tr>
    {#each pertanyaanPenggunaan as item, index}
      <tr>
        <td>{index + 11}</td>
        <td>{item}</td>
        <td>{@html jawabanPenggunaan[index]}</td>
        <td />
      </tr>
    {/each}
    <tr>
      <td colspan="3">Jumlah Nilai</td>
      <td />
    </tr>
    <tr>
      <td colspan="4"><strong>Hubungan Sosial</strong></td>
    </tr>
    {#each pertanyaanHubungan as item, index}
      <tr>
        <td>{index + 17}</td>
        <td>{item}</td>
        <td>{@html jawabanHubungan[index]}</td>
        <td />
      </tr>
    {/each}
    <tr>
      <td colspan="3">Jumlah Nilai</td>
      <td />
    </tr>
    <tr>
      <td colspan="4"><strong>Waktu Luang/Rekreasi</strong></td>
    </tr>
    {#each pertanyaanWaktu as item, index}
      <tr>
        <td>{index + 21}</td>
        <td>{item}</td>
        <td>{@html jawabanWaktu[index]}</td>
        <td />
      </tr>
    {/each}
    <tr>
      <td colspan="3">Jumlah Nilai</td>
      <td />
    </tr>
    <tr>
      <td colspan="4"><strong>Manajemen Keuangan</strong></td>
    </tr>
    {#each pertanyaanManajemen as item, index}
      <tr>
        <td>{index + 23}</td>
        <td>{item}</td>
        <td>{@html jawabanManajemen[index]}</td>
        <td />
      </tr>
    {/each}
    <tr>
      <td colspan="3">Jumlah Nilai</td>
      <td />
    </tr>
    <tr>
      <td colspan="4"
        ><strong>Sikap Anti-Sosial/ Pandangan terhadap Tindak Kriminal</strong
        ></td
      >
    </tr>
    {#each pertanyaanSikap as item, index}
      <tr>
        <td>{index + 25}</td>
        <td>{item}</td>
        <td />
        <td />
      </tr>
    {/each}
    <tr>
      <td colspan="3">Jumlah Nilai</td>
      <td />
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>KEBUTUHAN <br /> KRIMINOGENIK</th>
      <th>RENDAH</th>
      <th>SEDANG</th>
      <th>TINGGI</th>
      <th>SANGAT <br /> TINGGI</th>
    </tr>
  </thead>
  <tbody>
    {#each deskripsi[0] as item, index}
      <tr>
        <td>{@html deskripsi[0][index]}</td>
        <td>{deskripsi[1][index]}</td>
        <td>{deskripsi[2][index]}</td>
        <td>{deskripsi[3][index]}</td>
        <td>{deskripsi[4][index]}</td>
      </tr>
    {/each}
  </tbody>
</table>
<h2>PENILAIAN AKHIR ASESMEN KRIMINOGENIK</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>RENDAH</th>
      <th>SEDANG</th>
      <th>TINGGI</th>
      <th>SANGAT TINGGI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0-10</td>
      <td>11-22</td>
      <td>23-29</td>
      <td>30+</td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td>
        <p class="text-center">
          {#each Array(30) as item, index}
            _
          {/each}
        </p>
        <p class="text-center">Petugas Asesmen</p>
      </td>
      <td>
        <p class="text-center">
          {#each Array(30) as item, index}
            _
          {/each}
        </p>
        <p class="text-center">Narapidana/ Klien Pemasyarakatan</p>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <p class="text-center">
          Tanggal
          {#each Array(30) as item, index}
            _
          {/each}
        </p>
      </td>
    </tr>
  </tbody>
</table>
<h2>BAGIAN B.1 - Pertimbangan Lain - Jenis Tindak Kriminal Tertentu</h2>
<p>Apakah ada dari fitur berikut di profil Narapidana/ Klien Pemasyarakatan?</p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Deskripsi</th>
      <th
        >Centang <br />
        Jika Ada</th
      >
    </tr>
  </thead>
  <tbody>
    {#each pertanyaan1 as item, index}
      <tr>
        <td>{huruf[index]}</td>
        <td>{item}</td>
        <td />
      </tr>
    {/each}
  </tbody>
</table>
<h2>BAGIAN B.2 - Pertimbangan Lain - Faktor Kebutuhan Tambahan</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Deskripsi</th>
      <th
        >Centang <br />
        Jika Ada</th
      >
    </tr>
  </thead>
  <tbody>
    {#each pertanyaan2 as item, index}
      <tr>
        <td>{huruf[index]}</td>
        <td>{item}</td>
        <td />
      </tr>
    {/each}
  </tbody>
</table>

<svelte:head>
  <title>Asesmen Kriminogenik</title>
</svelte:head>

<style>
  * {
    font-family: Arial;
    font-size: 10.5pt;
  }
  @media print {
    .akhir {
      page-break-after: always;
    }
  }
</style>
