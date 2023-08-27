<script>
  import { jawabanA, kunciA, pokokA } from "/src/lib/anak";
</script>

<svelte:head>
  <title>Asesmen Kriminogenik Anak</title>
</svelte:head>

<p>DOKUMEN RAHASIA</p>
<p>INSTRUMEN PENILAIAN</p>
<p>RISIKO DAN FAKTOR</p>
<p>KRIMINOGENIK ANAK</p>

<p>OLEH</p>
<p>PEMBIMBING KEMASYARAKATAN</p>

<p>IDENTITAS ANAK</p>

<table class="table table-bordered">
  <tbody>
    <tr>
      <td>Nama Lengkap</td>
      <td colspan="3">:</td>
    </tr>
    <tr>
      <td>Tempat/ Tgl.Lahir</td>
      <td>:</td>
      <td>Nomor Registrasi</td>
      <td>:</td>
    </tr>
    <tr>
      <td>Tindak Pidana</td>
      <td>:</td>
      <td>Jenis Kelamin</td>
      <td>:</td>
    </tr>
    <tr>
      <td rowspan="2">Alasan Penilaian <br /> Dilakukan</td>
      <td rowspan="2">:</td>
      <td>Masa Pidana</td>
      <td>:</td>
    </tr>
    <tr>
      <td>Tanggal Penilaian</td>
      <td>:</td>
    </tr>
    <tr>
      <td>Lokasi Pelaksanaan</td>
      <td>:</td>
      <td>Blok/Kamar</td>
      <td>:</td>
    </tr>
    <tr>
      <td>Nama Pengasuh</td>
      <td>:</td>
      <td>Tingkat Resiko</td>
      <td>:</td>
    </tr>
    <tr>
      <td>Nama PK</td>
      <td>:</td>
      <td>TTD PK</td>
      <td>:</td>
    </tr>
  </tbody>
</table>
<img src="/bapas.png" class="gambar" alt="" />
<p>DIREKTORAT JENDERAL PEMASYARAKATAN</p>
<p>KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA</p>
<p>REPUBLIK INDONESIA</p>

<p>INSTRUMEN PENILAIAN RISIKO ANAK</p>
<p>A.FAKTOR RESIKO DAN PELINDUNG</p>

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
