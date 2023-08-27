<script>
  import { jawabanA, kunciA, pokokA } from "/src/lib/anak";
</script>

<svelte:head>
  <title>Kriminogenik Anak</title>
</svelte:head>

<h1>DOKUMEN RAHASIA INSTRUMEN PENILAIAN RISIKO DAN FAKTOR KRIMINOGENIK ANAK</h1>

<form action="">
  <h2>IDENTITAS ANAK</h2>
  <div class="mb-3">
    <label for="">Nama Lengkap</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Tempat/ Tgl.Lahir</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Nomor Registrasi</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Tindak Pidana</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Jenis Kelamin</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Alasan Penilaian Dilakukan</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Masa Pidana</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Tanggal Penilaian</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Lokasi Pelaksanaan</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Blok/Kamar</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Nama Pengasuh</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Tingkat Resiko</label>
    <input type="text" class="form-control" />
  </div>
  <div class="mb-3">
    <label for="">Nama PK</label>
    <input type="text" class="form-control" />
  </div>

  <h2>INSTRUMEN PENILAIAN RISIKO ANAK</h2>
  <h2>A.FAKTOR RESIKO DAN PELINDUNG</h2>

  {#each pokokA as item, index}
    <div class="mb-3">
      <label for="">{item}</label>
      <input type="text" class="form-control" />
    </div>
  {/each}
</form>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>NO</th>
      <th>POKOK (AITEM)</th>
      <th>JAWABAN</th>
      <th>KUNCI <br /> SKOR</th>
      <th>NILAI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="5">FAKTOR RESIKO (A)</td>
    </tr>
    {#each jawabanA as item, index}
      <tr>
        {#if index == 0}
          <td>1</td>
          <td>{pokokA[0]}</td>
        {:else if index == 2}
          <td>2</td>
          <td>{pokokA[1]}</td>
        {:else if index == 7}
          <td>3</td>
          <td>{pokokA[2]}</td>
        {:else if index == 11}
          <td>4</td>
          <td>{pokokA[3]}</td>
        {:else if index == 16}
          <td>5</td>
          <td>{pokokA[4]}</td>
        {:else if index == 21}
          <td>6</td>
          <td>{pokokA[5]}</td>
        {:else if index == 26}
          <td>7</td>
          <td>{pokokA[6]}</td>
        {:else if index == 30}
          <td>8</td>
          <td>{pokokA[7]}</td>
        {:else}
          <td />
          <td />
        {/if}
        <td>{item}</td>
        <td>{kunciA[index]}</td>
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
