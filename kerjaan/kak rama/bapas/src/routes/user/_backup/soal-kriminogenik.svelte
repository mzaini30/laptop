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

<svelte:head>
  <title>Kriminogenik</title>
</svelte:head>

<form action="" class="">
  <h1>
    LEMBAR ISIAN INSTRUMEN <br />
    ASESMEN RISIKO RESIDIVISME - INDONESIA (RRI)
  </h1>

  <div class="mb-3">
    <label for="">Nama Petugas Asesmen</label>
    <input required type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Nama Narapidana/Klien Pemasyarakatan</label>
    <input required type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Tanggal Asesmen</label><input
      required
      type="text"
      class="form-control"
    />
  </div>
  <div class="mb-3">
    <label for="">Alasan Asesmen</label><textarea
      required
      name=""
      id=""
      cols="30"
      rows="10"
      class="form-control"
    />
  </div>
  <div class="mb-3">
    <label for="">Keterangan</label><textarea
      required
      name=""
      id=""
      cols="30"
      rows="10"
      class="form-control"
    />
  </div>

  <h2>DATA DEMOGRAFI</h2>

  <div class="mb-3">
    <label for="">Nama Klien</label><input
      required
      type="text"
      class="form-control"
    />
  </div>
  <div class="mb-3">
    <label for="">Nomor Register</label><input
      required
      type="text"
      class="form-control"
    />
  </div>
  <div class="mb-3">
    <label for="">Tanggal Lahir</label><input
      required
      type="text"
      class="form-control"
    />
  </div>
  <div class="mb-3">
    <label for="">Jenis Kelamin</label><input
      required
      type="text"
      class="form-control"
    />
  </div>
  <div class="mb-3">
    <label for="">Lokasi Pembinaan/Pembimbingan Saat Ini</label><input
      required
      type="text"
      class="form-control"
    />
  </div>

  <h2>BAGIAN A</h2>
  <p>
    Bagian ini adalah bagian langkah awal dalam melakukan asesmen ini, sehingga
    asesmen ini diisi terhadap Narapidana/ Klien Pemasyarakatan yang akan
    dilakukan asesmen.
  </p>

  {#each pertanyaan as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

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

  {#each pertanyaanB as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h2>BAGIAN C</h2>

  {#each pertanyaanC as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h2>BAGIAN D</h2>

  {#each pertanyaanD as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h1>
    LEMBAR ISIAN INSTRUMEN <br />
    ASESMEN KRIMINOGENIK INDONESIA
  </h1>

  <h2>BAGIAN A</h2>

  <h3>Keluarga dan Pernikahan</h3>

  {#each pertanyaanKeluarga as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h3>Pendidikan dan Pekerjaan</h3>

  {#each pertanyaanPendidikan as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h3>
    Penggunaan Obat-obatan Terlarang dan Konsumsi Alkohol (Dulu dan Sekarang)
  </h3>

  {#each pertanyaanPenggunaan as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h3>Hubungan Sosial</h3>

  {#each pertanyaanHubungan as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h3>Waktu Luang/Rekreasi</h3>

  {#each pertanyaanWaktu as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h3>Manajemen Keuangan</h3>

  {#each pertanyaanManajemen as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h3>Sikap Anti-Sosial/Pandangan terhadap Tindak Kriminal</h3>

  {#each pertanyaanSikap as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

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

  <h2>BAGIAN B.1 - Pertimbangan Lain - Jenis Tindak Kriminal Tertentu</h2>
  <p>
    Apakah ada dari fitur berikut di profil Narapidana/ Klien Pemasyarakatan?
  </p>

  {#each pertanyaan1 as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}

  <h2>BAGIAN B.2 - Pertimbangan Lain - Faktor Kebutuhan Tambahan</h2>

  {#each pertanyaan2 as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input required type="text" class="form-control" />
    </div>
  {/each}
</form>
